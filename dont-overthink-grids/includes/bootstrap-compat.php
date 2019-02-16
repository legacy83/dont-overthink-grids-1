<?php

# ------------------------------------------------------------------------------
# Minimal WP/PHP requirements.
# ------------------------------------------------------------------------------
#
# This section checks if PHP and WordPress has their minimal
# requirements satisfied.
#

$safe = version_compare( $GLOBALS[ 'wp_version' ], '4.9', '>=' );
$safe = $safe && version_compare( PHP_VERSION, '5.6', '>=' );

# ------------------------------------------------------------------------------
# Searches for `Dalen-the-plugin` plugin.
# ------------------------------------------------------------------------------
#
# This section checks if `Dalen-the-plugin` plugin is active. Also
# checks if it's minimal version is satisfied.
#

$safe = $safe && defined( 'DALEN_THE_PLUGIN' ) && DALEN_THE_PLUGIN;
$safe = $safe && version_compare( DALEN_THE_PLUGIN_VERSION, '0.2.0', '>=' );

# ------------------------------------------------------------------------------
# Maybe display error messages.
# ------------------------------------------------------------------------------
#
# Maybe display an error message based on wether minimum requirements
# wasn't met.
#

if ( !$safe ) {
    add_action( 'admin_notices', function () {
        $message = __( 'Minimal requirements are not satisfied by active theme. Please, ask for some help from your developer or just activate another theme.', 'dogrids' );
        printf( '<div class="error"><p>%s</p></div>', $message );
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
