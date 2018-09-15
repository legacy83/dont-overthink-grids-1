<?php

namespace site\dogrids;

use site\dogrids\domain\ColumnService;
use site\dogrids\domain\IntroService;
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
        $serviceLocator->set( 'assets', new Assets() );
        $serviceLocator->set( 'domain/intro', new IntroService() );
        $serviceLocator->set( 'domain/column', new ColumnService() );
    }
}
