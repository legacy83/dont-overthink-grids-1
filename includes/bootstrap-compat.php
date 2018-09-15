<?php

$safe = version_compare( $GLOBALS[ 'wp_version' ], '4.9', '>=' );
$safe = $safe && version_compare( PHP_VERSION, '5.6', '>=' );
$safe = $safe && defined( 'DALEN_THE_PLUGIN' ) && DALEN_THE_PLUGIN;
$safe = $safe && version_compare( DALEN_THE_PLUGIN_VERSION, '0.2.0', '>=' );

return $safe;
