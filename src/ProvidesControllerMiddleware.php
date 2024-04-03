<?php

namespace Webshr\WPHTMX\Router;

use Webshr\WPHTMX\Router\ControllerMiddlewareOptions;

interface ProvidesControllerMiddleware
{
    public function middleware($middleware) : ControllerMiddlewareOptions;

    public function getControllerMiddleware() : array;
}
