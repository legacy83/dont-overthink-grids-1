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

function template( $slug, $name = null, array $data = [] )
{
    $templates = array();
    $name = (string)$name;
    if ( '' !== $name ) {
        $templates[] = "resources/templates/{$slug}-{$name}.tpl.php";
    }

    $templates[] = "resources/templates/{$slug}.tpl.php";

    $located = locate_template( $templates, false );
    if ( file_exists( $located ) ) {
        extract( $data );
        include( $located );
    }
}
