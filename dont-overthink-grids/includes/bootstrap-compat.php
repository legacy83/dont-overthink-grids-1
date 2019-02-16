<?php

# ------------------------------------------------------------------------------
# Minimal WP/PHP requirements.
# ------------------------------------------------------------------------------
#
# This section checks if PHP and WordPress has their minimal
# requirements satisfied.
#

$safe = version_compare( $GLOBALS[ 'wp_version' ], '5.0.3', '>=' );
$safe = $safe && version_compare( PHP_VERSION, '7.2', '>=' );

# ------------------------------------------------------------------------------
# Searches for `Dalen-the-plugin` plugin.
# ------------------------------------------------------------------------------
#
# This section checks if `Dalen-the-plugin` plugin is active. Also
# checks if it's minimal version is satisfied.
#

$safe = $safe && defined( 'DALEN_THE_PLUGIN' ) && DALEN_THE_PLUGIN;
$safe = $safe && version_compare( DALEN_THE_PLUGIN_VERSION, '0.3.0', '>=' );

# ------------------------------------------------------------------------------
# Maybe display error messages.
# ------------------------------------------------------------------------------
#
# Maybe display an error message based on wether minimum requirements
# wasn't met.
#

if ( !$safe ) {
    add_action( 'admin_notices', function () {
        $theme_name = basename( dirname( __DIR__ ) );

        printf(
            '<div class="error"><p>%s</p></div>',
            __( "Minimal requirements are not satisfied by {$theme_name} theme. Please, ask 
            for some help from your developer or just activate another theme.", 'dogrids' )
        );
    } );
}

# ------------------------------------------------------------------------------
# Return if it's safe environment.
# ------------------------------------------------------------------------------
#
# Just return a positive or negative status about how safe is
# running this theme with the current WordPress environment.
#

return $safe;
