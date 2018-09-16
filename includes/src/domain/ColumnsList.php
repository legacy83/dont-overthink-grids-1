<?php

namespace site\dogrids\domain;

class ColumnsList implements \IteratorAggregate
{
    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        $columns = [];

        $index = sizeof( $columns );
        $columns[ $index ] = new \stdClass();
        $columns[ $index ]->size = 2;
        $columns[ $index ]->title = __( "Two Columns", 'dogrids' );
        $columns[ $index ]->classes = [ 'front-page-2cols' ];

        $index = sizeof( $columns );
        $columns[ $index ] = new \stdClass();
        $columns[ $index ]->size = 2;
        $columns[ $index ]->title = __( "Two Columns - Left", 'dogrids' );
        $columns[ $index ]->count = 2;
        $columns[ $index ]->classes = [ 'front-page-2cols-left' ];

        $index = sizeof( $columns );
        $columns[ $index ] = new \stdClass();
        $columns[ $index ]->size = 2;
        $columns[ $index ]->title = __( "Two Columns - Right", 'dogrids' );
        $columns[ $index ]->classes = [ 'front-page-2cols-right' ];

        $index = sizeof( $columns );
        $columns[ $index ] = new \stdClass();
        $columns[ $index ]->size = 3;
        $columns[ $index ]->title = __( "Three Columns", 'dogrids' );
        $columns[ $index ]->classes = [ 'front-page-3cols' ];

        $index = sizeof( $columns );
        $columns[ $index ] = new \stdClass();
        $columns[ $index ]->size = 4;
        $columns[ $index ]->title = __( "Four Columns", 'dogrids' );
        $columns[ $index ]->classes = [ 'front-page-4cols' ];

        return new \ArrayIterator($columns);
    }
}
