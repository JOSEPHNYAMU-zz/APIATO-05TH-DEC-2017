<?php

/** @var Route $router */
$router->get('posts', [
    'as' => 'web_post_index',
    'uses'  => 'Controller@index',
    'middleware' => [
        'auth:web',
    ],
]);

$router->get('posts/create', [
    'as' => 'web_post_create',
    'uses'  => 'Controller@create',
    'middleware' => [
        'auth:web',
    ],
]);

/** @var Route $router */
$router->delete('posts/{id}', [
    'as' => 'web_post_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
        'auth:web',
    ],
]);

/** @var Route $router */
$router->patch('posts/{id}', [
    'as' => 'web_post_update',
    'uses'  => 'Controller@update',
    'middleware' => [
        'auth:web',
    ],
]);


/** @var Route $router */
$router->post('posts/store', [
    'as' => 'web_post_store',
    'uses'  => 'Controller@store',
    'middleware' => [
        'auth:web',
    ],
]);


/** @var Route $router */
$router->get('posts/{id}/edit', [
    'as' => 'web_post_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
        'auth:web',
    ],
]);

