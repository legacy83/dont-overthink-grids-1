<?php

namespace site\dogrids;

use site\dogrids\domain\service\Columns;
use site\dogrids\domain\service\Intro;
use site\dogrids\interfaces\Assets;


# ------------------------------------------------------------------------------
# Register service providers.
# ------------------------------------------------------------------------------
#
# Before booting the application, add any service providers that are necessary
# for running the theme.
#

theme()->register( new Columns() );
theme()->register( new Intro() );
theme()->register( new Assets() );

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
