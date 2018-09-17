<?php

namespace site\dogrids\infrastructure;

use trsenna\dalen\kernel\contracts\ServiceLocatorInterface;

trait ServiceProvidedTrait
{
    public function register( ServiceLocatorInterface $serviceLocator )
    {
        $serviceLocator->set( static::class, $this );
    }
}
