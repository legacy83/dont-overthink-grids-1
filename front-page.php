<?php

namespace site\dogrids;

add_action( 'site/dogrids/front-page/content', function () {

    $intro = model_get_intro();

    echo template( 'partials/front-page/front-page-section', 'intro' )->render( [
        'title' => $intro->title,
        'classes' => $intro->classes,
    ] );

} );

add_action( 'site/dogrids/front-page/content', function () {

    $columns = model_get_columns();

    foreach ( $columns as $column ) {
        echo template( 'partials/front-page/front-page-section', 'cols' )->render( [
            'title' => $column->title,
            'columns' => $column->columns,
            'classes' => $column->classes,
        ] );
    }

} );

echo template( 'front-page' )->render();
