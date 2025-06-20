<?php

namespace Webkul\GraphQLAPI\Queries\Admin;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Webkul\GraphQLAPI\Queries\BaseFilter;

class CommonFilter extends BaseFilter
{
    /**
     * Filter the query based on the input.
     */
    public function __invoke(Builder $query, array $input): Builder
    {
        $params = Arr::except($input, ['created_at', 'updated_at']);
        
        $query->when(! empty($input['created_at']), fn ($query) => $query->whereDate('created_at', $input['created_at']));

        $query->when(! empty($input['updated_at']), fn ($query) => $query->whereDate('updated_at', $input['updated_at']));

        if ($query->getModel() instanceof \Webkul\Core\Models\CoreConfig) {
            if (! empty($input['code'])) {
                $query->where('code', 'like', '%' . $input['code'] . '%');
            }

            unset($params['code']);
        }

        return $query->where($params);
    }

    /**
     * Get the filter name.
     */
    public function getData(mixed $rootValue, array $args)
    {
        $configRepository = app('Webkul\Core\Repositories\CoreConfigRepository');
        
        $result = $configRepository->findWhere([
            'code' => $args['code'],
            'locale_code' => core()->getCurrentLocale()->code,
        ])->first();

        if (! $result) {
            $result = $configRepository->findWhere([
            'code' => $args['code'],
            'locale_code' => null,
            ])->first();
        }

        return $result;
    }
}
