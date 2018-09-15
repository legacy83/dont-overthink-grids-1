<?php

namespace site\dogrids\domain;

class ColumnService
{
    public function getAll()
    {
        $columns = [];

        $index = sizeof( $columns );
        $columns[ $index ] = new \stdClass();
        $columns[ $index ]->title = __( "Two Columns", 'dogrids' );
        $columns[ $index ]->columns = 2;
        $columns[ $index ]->classes = [ 'front-page-2cols' ];

        $index = sizeof( $columns );
        $columns[ $index ] = new \stdClass();
        $columns[ $index ]->title = __( "Two Columns - Left", 'dogrids' );
        $columns[ $index ]->columns = 2;
        $columns[ $index ]->classes = [ 'front-page-2cols-left' ];

        $index = sizeof( $columns );
        $columns[ $index ] = new \stdClass();
        $columns[ $index ]->title = __( "Two Columns - Right", 'dogrids' );
        $columns[ $index ]->columns = 2;
        $columns[ $index ]->classes = [ 'front-page-2cols-right' ];

        $index = sizeof( $columns );
        $columns[ $index ] = new \stdClass();
        $columns[ $index ]->title = __( "Three Columns", 'dogrids' );
        $columns[ $index ]->columns = 3;
        $columns[ $index ]->classes = [ 'front-page-3cols' ];

        $index = sizeof( $columns );
        $columns[ $index ] = new \stdClass();
        $columns[ $index ]->title = __( "Four Columns", 'dogrids' );
        $columns[ $index ]->columns = 4;
        $columns[ $index ]->classes = [ 'front-page-4cols' ];

        return $columns;
    }
}
