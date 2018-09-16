<?php

namespace site\dogrids;

use site\dogrids\domain\ColumnsList;
use site\dogrids\domain\IntroFinder;
use site\dogrids\interfaces\Assets;
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
        $serviceLocator->set( 'domain/intro', new IntroFinder() );
        $serviceLocator->set( 'domain/columns', new ColumnsList() );
        $serviceLocator->set( 'interfaces/assets', new Assets() );
    }
}
