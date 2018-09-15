<?php

# ------------------------------------------------------------------------------
# Bootstrap the theme.
# ------------------------------------------------------------------------------
#
# Load the bootstrap files. Note that autoloading should happen first so that
# any classes/functions are available that we might need.
#

if ( defined( 'DALEN_THE_PLUGIN' ) && DALEN_THE_PLUGIN ) {
    require_once( get_theme_file_path( 'includes/bootstrap-autoload.php' ) );
    require_once( get_theme_file_path( 'includes/bootstrap-theme.php' ) );
}
