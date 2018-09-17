<?php

namespace site\dogrids\domain\service;

use trsenna\dalen\kernel\contracts\ServiceLocatorInterface;
use trsenna\dalen\kernel\contracts\ServiceProviderInterface;

class ColumnsFinder implements ServiceProviderInterface, \IteratorAggregate
{
    public function getIterator()
    {
        return new \ArrayIterator( [
            [ 'size' => 2, 'title' => 'Two Columns', 'classes' => [ 'front-page-2cols' ] ],
            [ 'size' => 2, 'title' => 'Two Columns - Left', 'classes' => [ 'front-page-2cols-left' ] ],
            [ 'size' => 2, 'title' => 'Two Columns - Right', 'classes' => [ 'front-page-2cols-right' ] ],
            [ 'size' => 3, 'title' => 'Three Columns', 'classes' => [ 'front-page-3cols' ] ],
            [ 'size' => 4, 'title' => 'Four Columns', 'classes' => [ 'front-page-4cols' ] ],
        ] );
    }

    public function register( ServiceLocatorInterface $serviceLocator )
    {
        $serviceLocator->set( self::class, $this );
    }
}
