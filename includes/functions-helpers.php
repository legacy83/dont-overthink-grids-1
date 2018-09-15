<?php

namespace site\dogrids;

use trsenna\dalen\kernel\foundation\ServiceLocator;
use trsenna\dalen\kernel\Theme;

/**
 * Get the theme instance.
 *
 * @param string $component
 *
 * @return Theme|mixed
 */
function theme( $component = null )
{
    static $theme;
    if ( !isset( $theme ) ) {
        $serviceLocator = new ServiceLocator();
        $theme = new Theme( $serviceLocator );
    }

    if ( !is_null( $component ) ) {
        return $theme->getServiceLocator()->get( $component );
    }

    return $theme;
}

function template( $slug, $name = null )
{
    return new Template( "resources/templates/{$slug}", $name );
}
