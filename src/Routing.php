<?php

namespace Lkeio\Bases;

use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;

class Routing 
{
    public function __construct()
    {
        $container = new Container;
        $request = Request::capture();
        $container->instance('Illuminate\Http\Request', $request);
        $events = new Dispatcher($container);
        $router = new Router($events, $container);
        $this->router = $router;
        $this->request = $request;
    }
}