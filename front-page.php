<?php

namespace site\dogrids;

use site\dogrids\domain\model\ColumnsFinder;
use site\dogrids\domain\model\IntroFinder;

add_action( 'site/dogrids/front-page/content', function () {

    foreach ( component( IntroFinder::class ) as $intro ) {
        echo template( 'partials/front-page/front-page-section', 'intro' )->render( [
            'intro' => (object)$intro,
        ] );
    }

} );

add_action( 'site/dogrids/front-page/content', function () {

    foreach ( component( ColumnsFinder::class ) as $columns ) {
        echo template( 'partials/front-page/front-page-section', 'columns' )->render( [
            'columns' => (object)$columns,
        ] );
    }

} );

echo template( 'front-page' )->render();
