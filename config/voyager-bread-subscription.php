<?php

return [

    /*
     * If enabled for voyager-bread-subscription package.
     */
    'enabled' => env('VOYAGER_BREAD_SUBSCRIPTION_ENABLED', true),

    /*
     * The config_key for voyager-bread-subscription package.
     */
    'config_key' => env('VOYAGER_BREAD_SUBSCRIPTION_CONFIG_KEY', 'joy-voyager-bread-subscription'),

    /*
     * The route_prefix for voyager-bread-subscription package.
     */
    'route_prefix' => env('VOYAGER_BREAD_SUBSCRIPTION_ROUTE_PREFIX', 'joy-voyager-bread-subscription'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadSubscription\\Http\\Controllers',
    ],
];
