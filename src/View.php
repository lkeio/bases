<?php

namespace Lkeio\Bases;

use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Filesystem\Filesystem;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Engines\PhpEngine;
use Illuminate\View\Factory;
use Illuminate\View\FileViewFinder;

class View
{
    public static function make(string $page, array $data = [])
    {
        $pathsToTemplates = [getcwd() . '/views'];
        $pathToCompiledTemplates = getcwd() . '/compiled';
        
        $filesystem = new Filesystem;
        $eventDispatcher = new Dispatcher(new Container);

        $viewResolver = new EngineResolver;
        $bladeCompiler = new BladeCompiler($filesystem, $pathToCompiledTemplates);

        $viewResolver->register('blade', function () use ($bladeCompiler) {
            return new CompilerEngine($bladeCompiler);
        });

        $viewResolver->register('php', function () {
            return new PhpEngine;
        });

        $viewFinder = new FileViewFinder($filesystem, $pathsToTemplates);

        $viewFactory = new Factory($viewResolver, $viewFinder, $eventDispatcher);
        echo $viewFactory->make($page, $data)->render();
    }

}