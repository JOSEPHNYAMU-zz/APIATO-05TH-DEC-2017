<?php

/** @var Route $router */
$router->get('posts/{id}/edit', [
    'as' => 'web_post_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
     // 'auth:web',
    ],
]);
