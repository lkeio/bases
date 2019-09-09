<?php

use Illuminate\Routing\Router;

$routing->router->group(['namespace' => 'Lkeio\Bases\Controller', 'prefix' => 'test'], function (Router $router) {
    $router->get('/', ['name' => 'users.index', 'uses' => 'TestController@index']);
});