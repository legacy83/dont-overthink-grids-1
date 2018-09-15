<?php

namespace site\dogrids;

add_action( 'site/dogrids/front-page/content', function () {

    echo template( 'partials/front-page/front-page-section', 'intro' )->render( [
        'intro' => theme( 'model' )->getIntro(),
    ] );

    foreach ( theme( 'model' )->getColumns() as $column ) {
        echo template( 'partials/front-page/front-page-section', 'cols' )->render( [
            'column' => $column,
        ] );
    }

} );

echo template( 'front-page' )->render();
