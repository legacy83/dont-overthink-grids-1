<?php

namespace site\dogrids;

use trsenna\dalen\kernel\foundation\ServiceLocator;
use trsenna\dalen\kernel\Theme;

/**
 * Gets the theme instance.
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
 * Renders the template file.
 *
 * @param $name
 *
 * @return string
 */
function template( $name )
{
    locate_template( [ "resources/templates/{$name}.tpl.php" ], true );
}
