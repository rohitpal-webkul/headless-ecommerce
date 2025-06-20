<?php

namespace Webkul\GraphQLAPI\Listeners;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Nuwave\Lighthouse\Events\EndExecution;
use Webkul\GraphQLAPI\Services\GraphQLCacheService;

/**
 * Listener to cache GraphQL query results
 */
class SetCacheQuery
{
    /**
     * Handle the GraphQL execution end event
     */
    public function handle(EndExecution $event): void
    {
        $request = request();

        $query = $request->input('query');
        
        if (! $this->shouldProcessQuery($query)) {
            $this->handleGdprInjection($event, $request->headers->all());

            return;
        }

        $queryName = $this->extractQueryName($query);
        
        if (
            ! $queryName
            || ! GraphQLCacheService::shouldCache($queryName, auth()->guard('api')->check())
        ) {
            $this->handleGdprInjection($event, $request->headers->all());

            return;
        }

        $this->cacheQueryResult($event, $request, $queryName);

        $this->handleGdprInjection($event, $request->headers->all());
    }

    /**
     * Check if query should be processed for caching
     */
    protected function shouldProcessQuery(?string $query): bool
    {
        return $query && Str::startsWith(ltrim($query), 'query');
    }

    /**
     * Extract query name from GraphQL query string
     */
    protected function extractQueryName(string $query): ?string
    {
        if (preg_match('/query\s+(\w+)/', $query, $matches)) {
            return $matches[1];
        }
        
        return null;
    }

    /**
     * Cache the query result
     */
    protected function cacheQueryResult(EndExecution $event, $request, string $queryName): void
    {
        $query = $request->input('query', []);
        $variables = $request->input('variables', []);
        $headers = $request->headers->all();
        $customerId = GraphQLCacheService::getCurrentCustomerId();
        
        $relevantHeaders = collect($headers)->only(['x-currency', 'x-locale'])->toArray();
        
        $cacheKey = GraphQLCacheService::generateCacheKey($query, $queryName, $variables, $relevantHeaders, $customerId);
        $trackingKey = GraphQLCacheService::generateTrackingKey($queryName, $this->extractEntityId($event, $queryName));
        
        // Cache the result
        Cache::put($cacheKey, $event->result, GraphQLCacheService::CACHE_TTL);
        GraphQLCacheService::logCacheOperation('set', $cacheKey, $queryName);
        
        // Update tracking cache
        $existingKeys = Cache::get($trackingKey, []);
        $existingKeys[] = $cacheKey;
        Cache::put($trackingKey, array_unique($existingKeys), GraphQLCacheService::CACHE_TTL);
        
        GraphQLCacheService::logCacheOperation('tracked', $trackingKey, "Added {$cacheKey}");
    }

    /**
     * Extract entity ID from query result if needed
     */
    protected function extractEntityId(EndExecution $event, string $queryName): ?int
    {
        if (! in_array($queryName, GraphQLCacheService::getCacheWithId())) {
            return null;
        }
        
        return data_get($event->result->data, "{$queryName}.id");
    }

    /**
     * Handle GDPR data injection
     */
    protected function handleGdprInjection(EndExecution $event, array $headers): void
    {
        if (! GraphQLCacheService::shouldApplyGdpr($headers)) {
            return;
        }

        if (
            ! isset($event->result->data)
            || ! is_array($event->result->data)
        ) {
            return;
        }

        $event->result->data['gdpr'] = GraphQLCacheService::getGdprData();
    }
}