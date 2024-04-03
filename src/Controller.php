<?php

namespace Webshr\WPHTMX\Router;

use Webshr\WPHTMX\Router\ProvidesControllerMiddlewareTrait;

abstract class Controller implements ProvidesControllerMiddleware
{
    use ProvidesControllerMiddlewareTrait;
}
