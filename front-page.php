<?php

namespace site\dogrids;

use site\dogrids\domain\ColumnsDataProvider;
use site\dogrids\domain\IntroModel;

add_action( 'site/dogrids/front-page/content', function () {

    foreach ( component( IntroModel::class ) as $intro ) {
        echo template( 'partials/front-page/front-page-section', 'intro' )->render( [
            'intro' => (object)$intro,
        ] );
    }

} );

add_action( 'site/dogrids/front-page/content', function () {

    foreach ( component( ColumnsDataProvider::class ) as $columns ) {
        echo template( 'partials/front-page/front-page-section', 'columns' )->render( [
            'columns' => (object)$columns,
        ] );
    }

} );

echo template( 'front-page' )->render();
