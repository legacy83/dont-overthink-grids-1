<?php

# ------------------------------------------------------------------------------
# Compatibility check.
# ------------------------------------------------------------------------------
#
# Check that the site meets the minimum requirements for the theme before
# proceeding.
#

$safe = require_once( get_theme_file_path( 'includes/bootstrap-compat.php' ) );
if ( !$safe ) return;

# ------------------------------------------------------------------------------
# Bootstrap the theme.
# ------------------------------------------------------------------------------
#
# Load the bootstrap files. Note that autoloading should happen first so that
# any classes/functions are available that we might need.
#

require_once( get_theme_file_path( 'includes/bootstrap-autoload.php' ) );
require_once( get_theme_file_path( 'includes/bootstrap-theme.php' ) );
