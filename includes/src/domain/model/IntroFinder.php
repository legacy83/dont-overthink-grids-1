<?php

namespace site\dogrids\domain\model;

use trsenna\dalen\kernel\contracts\ServiceLocatorInterface;
use trsenna\dalen\kernel\contracts\ServiceProviderInterface;

class IntroFinder implements ServiceProviderInterface, \IteratorAggregate
{
    public function getIterator()
    {
        return new \ArrayIterator( [
            [ 'title' => "Don't Overthink Grids", 'classes' => [ 'front-page-intro' ], ]
        ] );
    }

    public function register( ServiceLocatorInterface $serviceLocator )
    {
        $serviceLocator->set( self::class, $this );
    }
}