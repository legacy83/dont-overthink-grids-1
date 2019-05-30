<?php

# ------------------------------------------------------------------------------
# Maybe display error messages.
# ------------------------------------------------------------------------------
#
# Maybe display an error message based on wether minimum requirements
# wasn't met.
#

add_action( 'dogrids/unsafe', function () {
    add_action( 'admin_notices', function () {

        $theme_name = wp_get_theme()->get( 'Name' );

        printf(
            '<div class="error"><p>%s</p></div>',
            __( "Minimal requirements are not satisfied by {$theme_name} theme. Please, ask 
            for some help from your developer or just activate another theme.", 'dogrids' )
        );

    } );
} );

# ------------------------------------------------------------------------------
# Checks if it's a safe environment.
# ------------------------------------------------------------------------------
#
# This section checks if minimal requirements is satisfied and notify
# by hooks if the environment is safe or unsafe.
#

$safe = defined( 'DALEN_PLUGIN' ) && DALEN_PLUGIN;
$safe = $safe && version_compare( DALEN_PLUGIN_VERSION, '0.1.0', '>=' );

if ( $safe ) do_action( 'dogrids/safe' );
if ( !$safe ) do_action( 'dogrids/unsafe' );
