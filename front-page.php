<?php

namespace site\dogrids;

use site\dogrids\domain\service\Columns;
use site\dogrids\domain\service\Intro;

add_action( 'site/dogrids/front-page/content', function () {

    foreach ( component( Intro::class ) as $intro ) {
        echo template( 'partials/front-page/front-page-section', 'intro' )->render( [
            'intro' => (object)$intro,
        ] );
    }

} );

add_action( 'site/dogrids/front-page/content', function () {

    foreach ( component( Columns::class ) as $columns ) {
        echo template( 'partials/front-page/front-page-section', 'columns' )->render( [
            'columns' => (object)$columns,
        ] );
    }

} );

echo template( 'front-page' )->render();
