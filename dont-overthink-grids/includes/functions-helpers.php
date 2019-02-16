<?php

namespace site\dogrids;

use trsenna\dalen\kernel\foundation\ServiceLocator;
use trsenna\dalen\kernel\Theme;
use trsenna\dalen\template\foundation\ThemeLocate;
use trsenna\dalen\template\Template;

/**
 * Get the theme instance.
 *
 * @return Theme
 */
function theme()
{
    static $theme;
    if ( !isset( $theme ) ) {
        $serviceLocator = new ServiceLocator();
        $theme = new Theme( $serviceLocator );
    }

    return $theme;
}

/**
 * Get the component instance from service locator.
 *
 * @param $key
 *
 * @return mixed|null
 */
function component( $key )
{
    return theme()->getServiceLocator()->get( $key );
}

/**
 * Get a new template instance.
 *
 * @param      $slug
 * @param null $name
 *
 * @return Template
 */
function template( $slug, $name = null )
{
    $template = new Template( "resources/templates/{$slug}", $name );
    $template->setLocate( new ThemeLocate( 'tpl.php' ) );

    return $template;
}
