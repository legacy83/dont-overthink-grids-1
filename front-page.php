<?php

namespace site\dogrids;

// renders the front-page content
add_action( 'site/dogrids/front-page/content', function () {
    template( 'partials/page/content-front-page-intro' );
    template( 'partials/page/content-front-page-2cols' );
    template( 'partials/page/content-front-page-2cols-left' );
    template( 'partials/page/content-front-page-2cols-right' );
    template( 'partials/page/content-front-page-3cols' );
    template( 'partials/page/content-front-page-4cols' );
} );

// renders the front-page
template( 'front-page' );
