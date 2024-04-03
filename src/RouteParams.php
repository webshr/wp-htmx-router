<?php

namespace Webshr\WPHTMX\Router;

class RouteParams implements \Iterator
{
    private $position = 0;
    private $params = [];

    public function __construct ( array $params )
    {
        $this->params = $params;
    }

    public function __get ( $key )
    {
        if ( ! isset( $this->params[ $key ] ) ) {
            return null;
        }

        return $this->params[ $key ];
    }

    #[\ReturnTypeWillChange ]
    public function rewind (): void
    {
        $this->position = 0;
    }

    #[\ReturnTypeWillChange ]
    public function current (): mixed
    {
        return $this->params[ $this->key()];
    }

    #[\ReturnTypeWillChange ]
    public function key (): mixed
    {
        $keys = array_keys( $this->params );
        return $keys[ $this->position ];
    }

    #[\ReturnTypeWillChange ]
    public function next (): void
    {
        $this->position++;
    }

    #[\ReturnTypeWillChange ]
    public function valid (): bool
    {
        return $this->position < count( $this->params );
    }

    public function toArray ()
    {
        return $this->params;
    }
}
