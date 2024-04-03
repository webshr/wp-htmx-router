<?php

namespace Webshr\WPHTMX\Router\Test\Controllers;

use Webshr\WPHTMX\Router\Test\Services\TestService;

class TestConstructorParamController
{
    private $testService;

    public function __construct(TestService $testService)
    {
        $this->testService = $testService;
    }

    public function returnTestServiceValue()
    {
        return $this->testService->value;
    }
}
