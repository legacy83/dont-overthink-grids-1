<?php

namespace site\dogrids;

add_action( 'site/dogrids/front-page/content', function () {

    echo template( 'partials/front-page/front-page-section', 'intro' )->render( [
        'intro' => theme( 'domain/intro' )->getOne(),
    ] );

} );

add_action( 'site/dogrids/front-page/content', function () {

    foreach ( theme( 'domain/column' )->getAll() as $column ) {
        echo template( 'partials/front-page/front-page-section', 'cols' )->render( [
            'column' => $column,
        ] );
    }

} );

echo template( 'front-page' )->render();
