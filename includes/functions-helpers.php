<?php

namespace site\dogrids;

use site\dogrids\interfaces\shared\Template;
use trsenna\dalen\kernel\foundation\ServiceLocator;
use trsenna\dalen\kernel\Theme;

function theme()
{
    static $theme;
    if ( !isset( $theme ) ) {
        $serviceLocator = new ServiceLocator();
        $theme = new Theme( $serviceLocator );
    }

    return $theme;
}

function component( $key )
{
    return theme()->getServiceLocator()->get( $key );
}

function template( $slug, $name = null )
{
    return new Template( "resources/templates/{$slug}", $name );
}
