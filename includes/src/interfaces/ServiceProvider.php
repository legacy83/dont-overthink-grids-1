<?php

namespace site\dogrids\interfaces;

use trsenna\dalen\kernel\contracts\ServiceLocatorInterface;
use trsenna\dalen\kernel\contracts\ServiceProviderInterface;

/**
 * Class ServiceProvider
 *
 * @package site\dogrids
 */
class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register( ServiceLocatorInterface $serviceLocator )
    {
        $serviceLocator->set( 'interfaces/assets', new Assets() );
    }
}