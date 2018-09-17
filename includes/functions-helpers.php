<?php

namespace site\dogrids;

use trsenna\dalen\kernel\foundation\ServiceLocator;
use trsenna\dalen\kernel\Theme;
use trsenna\dalen\template\foundation\ThemeLocate;
use trsenna\dalen\template\Template;

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
    $template = new Template( "resources/templates/{$slug}", $name );
    $template->setLocate( new ThemeLocate() );

    return $template;
}
