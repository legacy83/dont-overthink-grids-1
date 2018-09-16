<?php

namespace site\dogrids;

use site\dogrids\interfaces\model\ColumnsFinder;
use site\dogrids\interfaces\model\ColumnsList;
use site\dogrids\interfaces\model\IntroFinder;

add_action( 'site/dogrids/front-page/content', function () {

    foreach ( theme( IntroFinder::class ) as $intro ) {
        echo template( 'partials/front-page/front-page-section', 'intro' )->render( [
            'intro' => (object)$intro,
        ] );
    }

} );

add_action( 'site/dogrids/front-page/content', function () {

    foreach ( theme( ColumnsFinder::class ) as $columns ) {
        echo template( 'partials/front-page/front-page-section', 'columns' )->render( [
            'columns' => (object)$columns,
        ] );
    }

} );

echo template( 'front-page' )->render();
