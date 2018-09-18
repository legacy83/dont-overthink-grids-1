<?php

namespace site\dogrids;

use site\dogrids\domain\ColumnsRepeater;
use site\dogrids\domain\IntroRepeater;

add_action( 'site/dogrids/front-page/content', function () {

    $repeater = component( IntroRepeater::class );

    foreach ( $repeater as $intro ) {
        echo template( 'partials/front-page/front-page-section', 'intro' )->render( [
            'intro' => (object)$intro,
        ] );
    }

} );

add_action( 'site/dogrids/front-page/content', function () {

    $repeater = component( ColumnsRepeater::class );

    foreach ( $repeater as $columns ) {
        echo template( 'partials/front-page/front-page-section', 'columns' )->render( [
            'columns' => (object)$columns,
        ] );
    }

} );

echo template( 'front-page' )->render();
