<?php

use Illuminate\Routing\Router;

/** @var $routing Lkeio\Bases\Routing */

$routing->router->group(['namespace' => 'Lkeio\Bases\Controller', 'prefix' => 'test'], function (Router $router) {
    $router->get('/', ['name' => 'users.index', 'uses' => 'TestController@index']);
});