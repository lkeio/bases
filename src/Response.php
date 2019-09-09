<?php

namespace Lkeio\Bases;

use Illuminate\Routing\Redirector;
use Illuminate\Routing\UrlGenerator;
use Lkeio\Bases\Routing;

class Response
{
    public function __construct(Routing $routing)
    {
        $redirect = new Redirector(new UrlGenerator($routing->router->getRoutes(), $routing->request));
        $response = $routing->router->dispatch($routing->request);
        $this->redirect = $redirect;
        return $response->send();
    }
}