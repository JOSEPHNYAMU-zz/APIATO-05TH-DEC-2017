<?php

$router->get('/login', [
    'as'   => 'get_user_home_page',
    'uses' => 'Controller@sayWelcome',
]);
