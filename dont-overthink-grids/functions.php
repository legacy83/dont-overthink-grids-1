<?php

# ------------------------------------------------------------------------------
# Bootstrap the theme.
# ------------------------------------------------------------------------------
#
# Maybe load the bootstrap files. Note that autoloading should happen
# first so that any classes/functions are available that we might need.
#

add_action( 'dogrids/safe', function () {

    require_once( get_theme_file_path( 'includes/bootstrap-autoload.php' ) );
    require_once( get_theme_file_path( 'includes/bootstrap-theme.php' ) );

} );

# ------------------------------------------------------------------------------
# Compatibility check.
# ------------------------------------------------------------------------------
#
# Check that the site meets the minimum requirements for the theme
# before proceeding.
#

require_once( get_theme_file_path( 'includes/bootstrap-compat.php' ) );
