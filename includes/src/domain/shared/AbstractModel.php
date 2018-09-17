<?php

namespace site\dogrids\domain\shared;

use trsenna\dalen\kernel\contracts\ServiceLocatorInterface;
use trsenna\dalen\kernel\contracts\ServiceProviderInterface;

abstract class AbstractModel implements \IteratorAggregate, ServiceProviderInterface
{
    protected abstract function load();

    final public function getIterator()
    {
        return new \LimitIterator( new \ArrayIterator( [ $this->load() ] ), 0, 1 );
    }

    public function register( ServiceLocatorInterface $serviceLocator )
    {
        $serviceLocator->set( static::class, $this );
    }
}
