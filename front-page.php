<?php

namespace site\dogrids;

add_action( 'site/dogrids/front-page/content', function () {

    $repeater = new \ArrayIterator( [
        [
            'title' => "Don't Overthink Grids",
            'classes' => [ 'front-page-intro' ],
        ]
    ] );

    foreach ( $repeater as $intro ) {
        echo template( 'partials/front-page/front-page-section', 'intro' )->render( [
            'intro' => (object)$intro,
        ] );
    }

} );

add_action( 'site/dogrids/front-page/content', function () {

    $repeater = new \ArrayIterator( [
        [
            'size' => 2,
            'title' => 'Two Columns',
            'classes' => [ 'front-page-2cols' ]
        ],
        [
            'size' => 2,
            'title' => 'Two Columns - Left',
            'classes' => [ 'front-page-2cols-left' ]
        ],
        [
            'size' => 2,
            'title' => 'Two Columns - Right',
            'classes' => [ 'front-page-2cols-right' ]
        ],
        [
            'size' => 3,
            'title' => 'Three Columns',
            'classes' => [ 'front-page-3cols' ]
        ],
        [
            'size' => 4,
            'title' => 'Four Columns',
            'classes' => [ 'front-page-4cols' ]
        ],
    ] );

    foreach ( $repeater as $columns ) {
        echo template( 'partials/front-page/front-page-section', 'columns' )->render( [
            'columns' => (object)$columns,
        ] );
    }

} );

echo template( 'front-page' )->render();
