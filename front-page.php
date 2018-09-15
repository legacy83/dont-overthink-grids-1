<?php

namespace site\dogrids;

// renders the front-page-section intro
add_action( 'site/dogrids/front-page/content', function () {
    $template = template( 'partials/front-page/front-page-section', 'intro' );
    echo $template->render( [
        'title' => __( "Don't Overthink Grids", 'dogrids' ),
        'classes' => [ 'front-page-intro' ],
    ] );
} );

// renders the front-page
echo template( 'front-page' )->render();
