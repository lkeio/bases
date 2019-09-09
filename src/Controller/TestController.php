<?php

namespace Lkeio\Bases\Controller;

use Lkeio\Bases\View;
use Illuminate\Http\Request;

class TestController
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Title',
            'text' => 'This is my text!',
        ];
       return View::make('page', $data);
    }
}