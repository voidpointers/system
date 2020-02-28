<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', [
    'middleware' => 'api.auth'
], function ($api) {
    $api->group([
        'namespace' => 'Api\Message\V1\Controllers',
        'prefix' => 'systems',
    ], function ($api) {
        $api->resource('shop', 'ShopsController');
    });
});
