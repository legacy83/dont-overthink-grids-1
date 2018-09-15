<?php

namespace site\dogrids;

add_action( 'site/dogrids/front-page/content', function () {

    $section = new \stdClass();
    $section->title = __( "Don't Overthink Grids", 'dogrids' );
    $section->classes = [ 'front-page-intro' ];

    echo template( 'partials/front-page/front-page-section', 'intro' )->render( [
        'title' => $section->title,
        'classes' => $section->classes,
    ] );

} );

add_action( 'site/dogrids/front-page/content', function () {

    $sections = [];

    $index = sizeof( $sections );
    $sections[ $index ] = new \stdClass();
    $sections[ $index ]->title = __( "Two Columns", 'dogrids' );
    $sections[ $index ]->columns = 2;
    $sections[ $index ]->classes = [ 'front-page-2cols' ];

    $index = sizeof( $sections );
    $sections[ $index ] = new \stdClass();
    $sections[ $index ]->title = __( "Two Columns - Left", 'dogrids' );
    $sections[ $index ]->columns = 2;
    $sections[ $index ]->classes = [ 'front-page-2cols-left' ];

    $index = sizeof( $sections );
    $sections[ $index ] = new \stdClass();
    $sections[ $index ]->title = __( "Two Columns - Right", 'dogrids' );
    $sections[ $index ]->columns = 2;
    $sections[ $index ]->classes = [ 'front-page-2cols-right' ];

    $index = sizeof( $sections );
    $sections[ $index ] = new \stdClass();
    $sections[ $index ]->title = __( "Three Columns", 'dogrids' );
    $sections[ $index ]->columns = 3;
    $sections[ $index ]->classes = [ 'front-page-3cols' ];

    $index = sizeof( $sections );
    $sections[ $index ] = new \stdClass();
    $sections[ $index ]->title = __( "Four Columns", 'dogrids' );
    $sections[ $index ]->columns = 4;
    $sections[ $index ]->classes = [ 'front-page-4cols' ];

    foreach ( $sections as $section ) {
        echo template( 'partials/front-page/front-page-section', 'cols' )->render( [
            'title' => $section->title,
            'columns' => $section->columns,
            'classes' => $section->classes,
        ] );
    }

} );

echo template( 'front-page' )->render();
