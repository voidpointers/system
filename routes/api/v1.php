<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', [
    // 'middleware' => 'api.auth'
], function ($api) {
    $api->group([
        'namespace' => 'Api\Shop\V1\Controllers',
    ], function ($api) {
        $api->resource('shop', 'ShopsController');
    });
    $api->group([
        'namespace' => 'Api\File\V1\Controllers',
    ], function ($api) {
        $api->post('upload', 'FilesController@fileUpload');
    });
});
