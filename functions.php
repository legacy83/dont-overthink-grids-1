<?php

namespace Dont\Overthink\Grids;

use function Composer\Autoload\includeFile;

if ( defined( 'DALEN_THE_PLUGIN' ) && DALEN_THE_PLUGIN ) {
    $loader = new \Composer\Autoload\ClassLoader();
    $loader->setPsr4( 'Dont\\Overthink\\Grids\\', dirname( __FILE__ ) . '/includes/src' );
    $loader->register();

    includeFile( dirname( __FILE__ ) . '/includes/functions-helpers.php' );

    theme()->register( new ServiceProvider() );
    theme()->run();
}
