<?php

namespace site\dogrids;

# ------------------------------------------------------------------------------
# Register service providers.
# ------------------------------------------------------------------------------
#
# Before booting the application, add any service providers that are necessary
# for running the theme.
#

theme()->register( new ServiceProvider() );

# ------------------------------------------------------------------------------
# Perform bootstrap actions.
# ------------------------------------------------------------------------------
#
# Creates an action hook for plugins (or even themes) to hook into the
# bootstrapping process.
#

do_action( 'site/dogrids/bootstrap', theme() );

# ------------------------------------------------------------------------------
# Bootstrap the theme.
# ------------------------------------------------------------------------------
#
# Calls the theme `run()` method, which launches the theme.
#

theme()->run();
