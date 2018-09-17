<?php

namespace site\dogrids\domain\shared;

use trsenna\dalen\kernel\contracts\ServiceLocatorInterface;
use trsenna\dalen\kernel\contracts\ServiceProviderInterface;

abstract class AbstractDataProvider implements \IteratorAggregate, ServiceProviderInterface
{
    protected abstract function load();

    public function getIterator()
    {
        return new \ArrayIterator( (array)$this->load() );
    }

    public function register( ServiceLocatorInterface $serviceLocator )
    {
        $serviceLocator->set( static::class, $this );
    }
}
