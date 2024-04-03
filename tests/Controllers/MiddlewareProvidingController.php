<?php

namespace Webshr\WPHTMX\Router\Test\Controllers;

use Webshr\WPHTMX\Router\Controller;
use Webshr\WPHTMX\Router\ControllerMiddlewareOptions;
use Webshr\WPHTMX\Router\ProvidesControllerMiddleware;
use Webshr\WPHTMX\Router\Test\Middleware\AddHeaderMiddleware;

class MiddlewareProvidingController extends Controller
{
    public function returnOne()
    {
        return 'One';
    }

    public function returnTwo()
    {
        return 'Two';
    }

    public function returnThree()
    {
        return 'Three';
    }
}
