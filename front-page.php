<?php

namespace site\dogrids;

// renders the front-page content
add_action( 'dogrids/front-page/content', function () {
    template( 'page/content-front-page-intro' );
    template( 'page/content-front-page-2cols' );
    template( 'page/content-front-page-2cols-left' );
    template( 'page/content-front-page-2cols-right' );
    template( 'page/content-front-page-3cols' );
    template( 'page/content-front-page-4cols' );
} );

// renders the front-page
template( 'front-page' );
