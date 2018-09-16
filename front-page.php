<?php

namespace site\dogrids;

use site\dogrids\interfaces\model\ColumnsList;
use site\dogrids\interfaces\model\IntroFinder;

add_action( 'site/dogrids/front-page/content', function () {

    $introFinder = new IntroFinder();

    echo template( 'partials/front-page/front-page-section', 'intro' )->render( [
        'intro' => $introFinder->getOne(),
    ] );

} );

add_action( 'site/dogrids/front-page/content', function () {

    $columnsList = new ColumnsList();

    foreach ( $columnsList as $columns ) {
        echo template( 'partials/front-page/front-page-section', 'columns' )->render( [
            'columns' => $columns,
        ] );
    }

} );

echo template( 'front-page' )->render();
