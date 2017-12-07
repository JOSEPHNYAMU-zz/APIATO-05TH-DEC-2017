<?php

/** @var Route $router */
$router->get('posts/{id}', [
    'as' => 'web_post_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      //'auth:web',
    ],
]);
