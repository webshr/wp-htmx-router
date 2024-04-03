<?php

namespace Webshr\WPHTMX\Router\Test;

use PHPUnit\Framework\TestCase;
use Webshr\WPHTMX\Router\ControllerMiddleware;
use Webshr\WPHTMX\Router\ControllerMiddlewareOptions;
use Webshr\WPHTMX\Router\Test\Middleware\AddHeaderMiddleware;

class ControllerMiddlewareTest extends TestCase
{
    /** @test */
    public function can_retrieve_middleware()
    {
        $middleware = new AddHeaderMiddleware('X-Header', 'testing123');
        $options = new ControllerMiddlewareOptions;

        $controllerMiddleware = new ControllerMiddleware($middleware, $options);

        $this->assertSame($middleware, $controllerMiddleware->middleware());
    }

    /** @test */
    public function can_retrieve_options()
    {
        $middleware = new AddHeaderMiddleware('X-Header', 'testing123');
        $options = new ControllerMiddlewareOptions;

        $controllerMiddleware = new ControllerMiddleware($middleware, $options);

        $this->assertSame($options, $controllerMiddleware->options());
    }
}
