<?php

namespace site\dogrids;

use site\dogrids\interfaces\model\ColumnsList;
use site\dogrids\interfaces\model\IntroFinder;

add_action( 'site/dogrids/front-page/content', function () {

    foreach ( IntroFinder::fake() as $intro ) {
        echo template( 'partials/front-page/front-page-section', 'intro' )->render( [
            'intro' => (object)$intro,
        ] );
    }

} );

add_action( 'site/dogrids/front-page/content', function () {

    foreach ( ColumnsList::fake() as $columns ) {
        echo template( 'partials/front-page/front-page-section', 'columns' )->render( [
            'columns' => (object)$columns,
        ] );
    }

} );

echo template( 'front-page' )->render();
