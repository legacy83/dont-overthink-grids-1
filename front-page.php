<?php

namespace site\dogrids;

add_action( 'site/dogrids/front-page/content', function () {

    echo template( 'partials/front-page/front-page-section', 'intro' )->render( [
        'intro' => theme( 'domain/intro' )->getOne(),
    ] );

} );

add_action( 'site/dogrids/front-page/content', function () {

    foreach ( theme( 'domain/columns' ) as $columns ) {
        echo template( 'partials/front-page/front-page-section', 'columns' )->render( [
            'columns' => $columns,
        ] );
    }

} );

echo template( 'front-page' )->render();
