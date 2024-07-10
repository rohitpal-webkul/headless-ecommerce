<?php

return [
    'admin' => [
        'menu' => [
            'push-notification' => 'पुश अधिसूचना',
        ],

        'acl' => [
            'push-notification' => 'पुश अधिसूचना',
            'send'              => 'भेजें',
        ],

        'configuration' => [
            'index' => [
                'general' => [
                    'graphql-api' => [
                        'title'                           => 'GraphQL एपीआई',
                        'info'                            => 'सूचना संबंधित कॉन्फ़िगरेशन',
                        'push-notification-configuration' => 'FCM पुश अधिसूचना कॉन्फ़िगरेशन',
                        'server-key'                      => 'सर्वर कुंजी',
                        'info-get-server-key'             => 'सूचना: FCM एपीआई क्रेडेंशियल प्राप्त करने के लिए: <a href="https://console.firebase.google.com/" target="_blank">यहां क्लिक करें</a>',
                        'android-topic'                   => 'एंड्रॉयड विषय',
                        'ios-topic'                       => 'IOS विषय',
                        'private-key'                     => 'निजी कुंजी JSON फ़ाइल की सामग्री',
                        'info-get-private-key'            => 'जानकारी: FCM निजी कुंजी JSON फ़ाइल की सामग्री प्राप्त करने के लिए: <a href="https://console.firebase.google.com/" target="_blank">यहां क्लिक करें</a>',
                        'notification-topic'              => 'सूचना विषय',
                    ],
                ],
            ],
        ],

        'settings' => [
            'notification' => [
                'index' => [
                    'title'               => 'पुश अधिसूचना',
                    'add-title'           => 'अधिसूचना जोड़ें',
                    'delete-success'      => 'अधिसूचना सफलतापूर्वक हटा दी गई',
                    'mass-update-success' => 'चयनित सूचनाएं सफलतापूर्वक अपडेट की गईं',
                    'mass-delete-success' => 'चयनित सूचनाएं सफलतापूर्वक हटाई गईं',

                    'datagrid' => [
                        'id'                   => 'आईडी',
                        'image'                => 'छवि',
                        'text-title'           => 'शीर्षक',
                        'notification-content' => 'अधिसूचना सामग्री',
                        'notification-type'    => 'अधिसूचना प्रकार',
                        'store-view'           => 'चैनल्स',
                        'notification-status'  => 'अधिसूचना स्थिति',
                        'created-at'           => 'निर्मित की गई समय',
                        'updated-at'           => 'अपडेट किया गया समय',
                        'delete'               => 'हटाएं',
                        'update'               => 'अपडेट',

                        'status' => [
                            'enabled'  => 'सक्रिय',
                            'disabled' => 'निष्क्रिय',
                        ],
                    ],
                ],

                'create' => [
                    'new-notification'     => 'नई अधिसूचना',
                    'back-btn'             => 'पीछे जाएं',
                    'create-btn-title'     => 'अधिसूचना सहेजें',
                    'general'              => 'सामान्य',
                    'title'                => 'पुश अधिसूचना',
                    'content-and-image'    => 'अधिसूचना सामग्री और छवि',
                    'notification-content' => 'अधिसूचना सामग्री',
                    'image'                => 'छवि',
                    'settings'             => 'सेटिंग्स',
                    'status'               => 'स्थिति',
                    'store-view'           => 'चैनल्स',
                    'notification-type'    => 'अधिसूचना प्रकार',
                    'product-cat-id'       => 'उत्पाद/श्रेणी आईडी',
                    'success'              => 'अधिसूचना सफलतापूर्वक बनाई गई',

                    'option-type' => [
                        'others'   => 'साधारण',
                        'product'  => 'उत्पाद',
                        'category' => 'श्रेणी'
                    ],
                ],

                'edit' => [
                    'edit-notification'         => 'अधिसूचना संपादित करें',
                    'back-btn'                  => 'पीछे जाएं',
                    'send-title'                => 'अधिसूचना भेजें',
                    'update-btn-title'          => 'अधिसूचना अपडेट करें',
                    'general'                   => 'सामान्य',
                    'title'                     => 'पुश अधिसूचना',
                    'content-and-image'         => 'अधिसूचना सामग्री और छवि',
                    'notification-content'      => 'अधिसूचना सामग्री',
                    'image'                     => 'छवि',
                    'settings'                  => 'सेटिंग्स',
                    'status'                    => 'स्थिति',
                    'store-view'                => 'चैनल्स',
                    'notification-type'         => 'अधिसूचना प्रकार',
                    'product-cat-id'            => 'उत्पाद/श्रेणी आईडी',
                    'success'                   => 'अधिसूचना सफलतापूर्वक अपडेट की गई',
                    'notification-send-success' => 'Android और iOS के लिए अधिसूचना सफलतापूर्वक भेजा गया।',

                    'option-type' => [
                        'others'   => 'साधारण',
                        'product'  => 'उत्पाद',
                        'category' => 'श्रेणी'
                    ],
                ],
            ],

            'exchange_rates' => [
                'error-invalid-target-currency' => 'चेतावनी: अमान्य लक्षित मुद्रा प्रदान की गई है।',
                'delete-success'                => 'सफलता: विनिमय दर सफलतापूर्वक हटा दी गई है।',
            ],
        ],

        'customer' => [
            'no-customer-found' => 'कोई ग्राहक नहीं मिला',
        ],

        'response' => [
            'delete-success'          => 'सफलता: उपयोगकर्ता सफलतापूर्वक हटाया गया।',
            'last-delete-error'       => 'चेतावनी: कम से कम एक उपयोगकर्ता आवश्यक है',
            'delete-failed'           => 'चेतावनी: व्यवस्थापक उपयोगकर्ता हटाया नहीं गया है',
            'error-invalid-parameter' => 'चेतावनी: अमान्य पैरामीटर प्रदान किए गए हैं।',
            'success-login'           => 'सफलता: उपयोगकर्ता लॉग इन सफल हुआ।',
            'error-login'             => 'चेतावनी: व्यवस्थापक उपयोगकर्ता लॉग इन नहीं है।',
            'session-expired'         => 'चेतावनी: सत्र समाप्त हो गया है। कृपया अपने खाते में फिर से लॉग इन करें।',
            'invalid-header'          => 'चेतावनी: अमान्य हेडर टोकन।',
            'success-logout'          => 'सफलता: उपयोगकर्ता सफलतापूर्वक लोग आउट हुआ।',
            'no-login-user'           => 'चेतावनी: कोई लॉग इन उपयोगकर्ता नहीं मिला।',
            'error-customer-group'    => 'चेतावनी: आपको सिस्टम द्वारा बनाए गए विशेषता समूह को हटाने की अनुमति नहीं है।',
            'password-invalid'        => 'चेतावनी: कृपया सही पासवर्ड दर्ज करें।',
            'password-match'          => 'चेतावनी: पासवर्ड मेल नहीं खा रहा है।',
            'success-registered'      => 'सफलता: उपयोगकर्ता सफलतापूर्वक बनाया गया।',
            'cancel-error'            => 'आदेश को रद्द नहीं किया जा सकता।',
            'creation-error'          => 'इस आदेश के लिए रिफंड नहीं बनाया जा सकता।',
            'channel-failure'         => 'चैनल नहीं मिला।',
            'script-delete-success'   => 'स्क्रिप्ट सफलतापूर्वक हटाया गया।',
        ],

        'shop' => [
            'response' => [
                'no-address-found'         => 'चेतावनी: कोई पता नहीं मिला।',
                'invalid-address'          => 'चेतावनी: प्रदान किए गए पते आईडी के लिए कोई पता नहीं मिला।',
                'invalid-product'          => 'चेतावनी: आप अमान्य उत्पाद का अनुरोध कर रहे हैं।',
                'already-exist-inwishlist' => 'सूचना: यह उत्पाद पहले से ही इच्छा सूची में मौजूद है।',
                'un-authorized-access'     => 'चेतावनी: आपको इस सेक्शन का उपयोग करने की अनुमति नहीं है।',
            ],
        ],

        'validation' => [
            'unique'   => 'यह :field पहले से ही लिया गया है।',
            'required' => 'आवश्यक है: :field फ़ील्ड।',
            'same'     => ':field और पासवर्ड मेल खाना चाहिए।',
        ],

        'mail' => [
            'customer' => [
                'password' => [
                    'heading' => config('app.name').' - पासवर्ड रीसेट',
                    'reset'   => 'पासवर्ड रीसेट ईमेल',
                    'summary' => 'यह ईमेल आपके खाते के पासवर्ड रीसेट से संबंधित है। आपका पासवर्ड सफलतापूर्वक बदल दिया गया है।
                        कृपया नीचे दिए गए पासवर्ड का उपयोग करके अपने खाते में लॉगिन करें।',
                ],
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'save-cart-address'         => 'सफलता: कार्ट पता सफलतापूर्वक सहेजा गया।',
            'error-payment-selection'   => 'चेतावनी: भुगतान के विधियों को प्राप्त करने में कुछ त्रुटि है।',
            'selected-shipment'         => 'सफलता: परिवहन सफलतापूर्वक चयनित किया गया है।',
            'warning-empty-cart'        => 'चेतावनी: कार्ट में कोई उत्पाद नहीं जोड़ा गया है।',
            'billing-address-missing'   => 'चेतावनी: चेकआउट के लिए बिलिंग पता गायब है।',
            'shipping-address-missing'  => 'चेतावनी: चेकआउट के लिए शिपिंग पता गायब है।',
            'invalid-guest-access'      => 'चेतावनी: मेहमान ग्राहकों को बिलिंग/शिपिंग पते आईडी की मदद से पते प्राप्त करने की अनुमति नहीं है।',
            'guest-address-warning'     => 'चेतावनी: यदि आप मेहमान के रूप में प्रयास कर रहे हैं, तो प्राधिकरण टोकन के बिना प्रयास करें।',
            'wrong-error'               => 'चेतावनी: आपके कार्ट में कुछ त्रुटि है, पुनः प्रयास करें।',
            'no-billing-address-found'  => 'चेतावनी: :address_id बिलिंग आईडी के साथ कोई बिलिंग पता रिकॉर्ड नहीं मिला।',
            'no-shipping-address-found' => 'चेतावनी: :address_id शिपिंग आईडी के साथ कोई शिपिंग पता रिकॉर्ड नहीं मिला।',
            'error-invalid-parameter'   => 'चेतावनी: अमान्य पैरामीटर प्रदान किए गए हैं।',
            'already-applied'           => 'कूपन कोड पहले से ही लागू है।',
            'success-apply'             => 'कूपन कोड सफलतापूर्वक लागू किया गया।',
            'coupon-removed'            => 'सफलता: कूपन को कार्ट से हटा दिया गया है।',
            'coupon-remove-failed'      => 'चेतावनी: कार्ट से कूपन हटाने में कुछ त्रुटियां हैं या कूपन नहीं मिला।',
            'error-placing-order'       => 'चेतावनी: आदेश रखने में कुछ त्रुटि है।',
            'selected-payment'          => 'सफलता: भुगतान विधि सफलतापूर्वक चयनित की गई है।',
            'error-payment-save'        => 'चेतावनी: भुगतान विधि सहेजने में कुछ त्रुटि है।',

            'cart' => [
                'item' => [
                    'success-all-remove'       => 'कोस्तक से सभी आइटम सफलतापूर्वक हटा दिए गए हैं।',
                    'fail-all-remove'          => 'कोस्तक से आइटम हटाने में त्रुटि हुई।',
                    'error-invalid-parameter'  => 'चेतावनी: अमान्य पैरामीटर प्रदान किए गए हैं।',
                    'success-moved-cart-item'  => 'सफलतापूर्वक: कार्ट आइटम इच्छा सूची में स्थानांतरित हो गया है।',
                    'fail-moved-cart-item'     => 'विफल: कार्ट आइटम इच्छा सूची में स्थानांतरित नहीं हुआ है।',
                    'success-add-to-cart'      => 'सफलतापूर्वक: उत्पाद को कार्ट में जोड़ा गया है।',
                    'fail-add-to-cart'         => 'विफल: उत्पाद को कार्ट में जोड़ा नहीं गया है।',
                    'success-update-to-cart'   => 'सफलतापूर्वक: कार्ट आइटम सफलतापूर्वक अपडेट किया गया है।',
                    'fail-update-to-cart'      => 'विफल: कार्ट आइटम अपडेट नहीं हुआ है।',
                    'success-delete-cart-item' => 'सफलतापूर्वक: कार्ट आइटम सफलतापूर्वक हटा दिया गया है।',
                    'fail-delete-cart-item'    => 'विफल: कार्ट आइटम नहीं मिला।',
                ],
            ],
        ],

        'customer' => [
            'success-login'         => 'सफलता: ग्राहक सफलतापूर्वक लॉगिन हुआ।',
            'success-logout'        => 'सफलता: ग्राहक सफलतापूर्वक लोगआउट हुआ।',
            'no-login-customer'     => 'चेतावनी: कोई लॉगइन ग्राहक नहीं मिला।',
            'address-list'          => 'सफलता: ग्राहक का पता विवरण प्राप्त हुआ',
            'not-authorized'        => 'चेतावनी: आपको इस पते को अपडेट करने की अनुमति नहीं है।',
            'no-address-list'       => 'चेतावनी: कोई ग्राहक का पता नहीं मिला।',
            'text-password'         => 'आपका पासवर्ड है: :password',
            'not-exists'            => 'चेतावनी: प्रदत्त डेटा के लिए कोई ग्राहक नहीं मिला।',
            'success-address-list'  => 'सफलता: ग्राहक के पते सफलतापूर्वक प्राप्त हुए।',
            'reset-link-sent'       => 'सफलता: पासवर्ड रीसेट ईमेल सफलतापूर्वक भेजा गया है।',
            'password-reset-failed' => 'चेतावनी: हमने पहले से ही आपको पासवर्ड रीसेट ईमेल भेज दिया है, थोड़ी देर बाद कोशिश करें।',
            'no-login-user'         => 'चेतावनी: कोई लॉगइन उपयोगकर्ता नहीं मिला।',
            'customer-details'      => 'सफलता: ग्राहक विवरण सफलतापूर्वक प्राप्त हुए।',

            'account' => [
                'not-found' => 'चेतावनी: कोई :name नहीं मिला।',

                'profile' => [
                    'edit-success'   => 'प्रोफ़ाइल सफलतापूर्वक अपडेट की गई',
                    'edit-fail'      => 'प्रोफ़ाइल अपडेट नहीं हुई',
                    'unmatch'        => 'पुराना पासवर्ड मेल नहीं खा रहा है।',
                    'order-pending'  => 'ग्राहक खाता हटाया नहीं जा सकता क्योंकि कुछ आदेश पैंडिंग हैं या प्रोसेसिंग स्थिति में हैं।',
                    'delete-success' => 'ग्राहक सफलतापूर्वक हटा दिया गया',
                    'wrong-password' => 'गलत पासवर्ड!',
                ],

                'order' => [
                    'no-order-found' => 'चेतावनी: कोई आदेश नहीं मिला।',
                    'cancel-success' => 'आदेश सफलतापूर्वक रद्द किया गया',
                ],

                'review' => [
                    'success' => 'सफलता: समीक्षा सफलतापूर्वक प्रस्तुत की गई है, कृपया मंजूरी का इंतजार करें।',
                ],

                'wishlist' => [
                    'removed'            => 'आइटम विशलिस्ट से सफलतापूर्वक हटा दिया गया',
                    'remove-fail'        => 'आइटम विशलिस्ट से हटाया नहीं जा सकता है',
                    'remove-all-success' => 'आपकी विशलिस्ट से सभी आइटम हटा दिए गए हैं',
                    'success'            => 'आइटम विशलिस्ट में सफलतापूर्वक जोड़ा गया',
                    'already-exist'      => 'उत्पाद पहले से ही विशलिस्ट में मौजूद है',
                    'move-to-cart'       => 'कार्ट में ले जाएं',
                    'moved-success'      => 'आइटम को कार्ट में सफलतापूर्वक मूव किया गया है',
                    'error-move-to-cart' => 'चेतावनी: इस उत्पाद में कुछ आवश्यक विकल्प हो सकते हैं, कार्ट में नहीं ले जाया जा सकता है।',
                    'no-item-found'      => 'चेतावनी: कोई उत्पाद नहीं मिला।',
                ],

                'addressess' => [
                    'delete-success' => 'ग्राहक का पता सफलतापूर्वक हटा दिया गया',
                ]
            ],

            'signup-form' => [
                'error-registration'       => 'चेतावनी: ग्राहक पंजीकरण असफल रहा।',
                'warning-num-already-used' => 'चेतावनी: इस :phone नंबर का पहले से अलग ईमेल पते के साथ पंजीकरण किया गया है।',
                'success-verify'           => 'खाता सफलतापूर्वक बनाया गया है, पुष्टिकरण के लिए एक ईमेल भेजा गया है।',
                'invalid-creds'            => 'कृपया अपने क्रेडेंशियल्स की जाँच करें और पुनः प्रयास करें।',

                'validation' => [
                    'unique'   => 'यह :field पहले से ही लिया गया है।',
                    'required' => ':field फ़ील्ड आवश्यक है।',
                    'same'     => ':field और पासवर्ड मेल खाना चाहिए।',
                ],
            ],

            'login-form' => [
                'not-activated' => 'आपकी सक्रियण व्यवस्थापक मंजूरी की तलाश कर रही है',
                'invalid-creds' => 'कृपया अपने क्रेडेंशियल्स की जाँच करें और पुनः प्रयास करें।',
            ],
        ],

        'response' => [
            'error-invalid-parameter' => 'चेतावनी: अमान्य पैरामीटर प्रदान किए गए हैं।',
            'invalid-header'          => 'चेतावनी: अमान्य हेडर टोकन।',
            'cancel-error'            => 'आर्डर को रद्द नहीं किया जा सकता।',
        ],
    ]
];