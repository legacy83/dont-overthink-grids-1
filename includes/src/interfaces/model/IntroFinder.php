<?php

namespace site\dogrids\interfaces\model;

class IntroFinder implements \IteratorAggregate
{
    private $data;

    public function __construct( array $data )
    {
        $this->data = $data;
    }

    public function getIterator()
    {
        $iterator = new \ArrayIterator( $this->data );
        return new \LimitIterator( $iterator );
    }

    public static function fake()
    {
        return new IntroFinder( [
            [ 'title' => "Don't Overthink Grids", 'classes' => [ 'front-page-intro' ], ]
        ] );
    }
}
