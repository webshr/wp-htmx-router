<?php

/**
 * @phpcs:disable PEAR.Functions.ValidDefaultValue
 */

namespace Webshr\WPHTMX\Router;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Webshr\WPHTMX\Router\Responsable;
use Laminas\Diactoros\Response\EmptyResponse;
use Laminas\Diactoros\Response\HtmlResponse;

class ResponseFactory
{
    public static function create ( RequestInterface $request, $response = '' )
    {
        if ( empty( $response ) ) {
            return new EmptyResponse();
        }

        if ( $response instanceof ResponseInterface ) {
            return $response;
        }

        if ( $response instanceof Responsable ) {
            return $response->toResponse( $request );
        }

        return new HtmlResponse( $response );
    }
}
