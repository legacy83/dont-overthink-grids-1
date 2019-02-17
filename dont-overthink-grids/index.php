<?php

namespace site\dogrids;

add_action( 'site/dogrids/front-page/content', function () {

    $repeater = component( IntroRepeater::class );

    foreach ( $repeater as $intro ) {
        echo template( 'partials/front-page/front-page-section', 'intro' )->render( [
            'intro' => $intro,
        ] );
    }

} );

add_action( 'site/dogrids/front-page/content', function () {

    $repeater = component( ColumnsRepeater::class );

    foreach ( $repeater as $columns ) {
        echo template( 'partials/front-page/front-page-section', 'columns' )->render( [
            'columns' => $columns,
        ] );
    }

} );

component( Markup::class )
    ->layout( 'layout/main/main' )
    ->content( 'content-page/page/page', 'front' );

echo component( Markup::class )->render();
