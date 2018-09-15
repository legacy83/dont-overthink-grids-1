<?php

namespace site\dogrids;

add_action( 'site/dogrids/front-page/content', function () {

    $serviceLocator = theme()->getServiceLocator();

    /* @var $model \site\dogrids\Model */
    $model = $serviceLocator->get( 'model' );

    $intro = $model->getIntro();
    $columns = $model->getColumns();

    echo template( 'partials/front-page/front-page-section', 'intro' )->render( [
        'title' => $intro->title,
        'classes' => $intro->classes,
    ] );

    foreach ( $columns as $column ) {
        echo template( 'partials/front-page/front-page-section', 'cols' )->render( [
            'title' => $column->title,
            'columns' => $column->columns,
            'classes' => $column->classes,
        ] );
    }

} );

echo template( 'front-page' )->render();
