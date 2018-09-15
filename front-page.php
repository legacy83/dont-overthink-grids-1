<?php

namespace site\dogrids;

add_action( 'site/dogrids/front-page/content', function () {
    echo template( 'partials/front-page/front-page-section', 'intro' )->render( [
        'title' => __( "Don't Overthink Grids", 'dogrids' ),
        'classes' => [ 'front-page-intro' ],
    ] );
} );

add_action( 'site/dogrids/front-page/content', function () {
    echo template( 'partials/front-page/front-page-section', 'cols' )->render( [
        'title' => __( "Two Columns", 'dogrids' ),
        'columns' => 2,
        'classes' => [ 'front-page-2cols' ],
    ] );
} );

add_action( 'site/dogrids/front-page/content', function () {
    echo template( 'partials/front-page/front-page-section', 'cols' )->render( [
        'title' => __( "Two Columns - Left", 'dogrids' ),
        'columns' => 2,
        'classes' => [ 'front-page-2cols-left' ],
    ] );
} );

add_action( 'site/dogrids/front-page/content', function () {
    echo template( 'partials/front-page/front-page-section', 'cols' )->render( [
        'title' => __( "Two Columns - Right", 'dogrids' ),
        'columns' => 2,
        'classes' => [ 'front-page-2cols-right' ],
    ] );
} );

add_action( 'site/dogrids/front-page/content', function () {
    echo template( 'partials/front-page/front-page-section', 'cols' )->render( [
        'title' => __( "Three Columns", 'dogrids' ),
        'columns' => 3,
        'classes' => [ 'front-page-3cols' ],
    ] );
} );

add_action( 'site/dogrids/front-page/content', function () {
    echo template( 'partials/front-page/front-page-section', 'cols' )->render( [
        'title' => __( "Four Columns", 'dogrids' ),
        'columns' => 4,
        'classes' => [ 'front-page-4cols' ],
    ] );
} );

echo template( 'front-page' )->render();
