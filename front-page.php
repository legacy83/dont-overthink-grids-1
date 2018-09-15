<?php

namespace site\dogrids;

// renders the front-page content
add_action( 'site/dogrids/front-page/content', function () {
    template( 'partials/front-page/front-page-section', 'intro', [
        'title' => 'Don\'t Overthink Grids',
        'classes' => [ 'front-page-intro' ],
    ] );
} );

// renders the front-page
template( 'front-page' );
