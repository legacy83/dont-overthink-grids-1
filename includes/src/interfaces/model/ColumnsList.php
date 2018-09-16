<?php

namespace site\dogrids\interfaces\model;

class ColumnsList implements \IteratorAggregate
{
    private $data;

    private function __construct( array $data )
    {
        $this->data = $data;
    }

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        return new \ArrayIterator( $this->data );
    }

    public static function fake()
    {
        return new ColumnsList( [
            [ 'size' => 2, 'title' => 'Two Columns', 'classes' => [ 'front-page-2cols' ] ],
            [ 'size' => 2, 'title' => 'Two Columns - Left', 'classes' => [ 'front-page-2cols-left' ] ],
            [ 'size' => 2, 'title' => 'Two Columns - Right', 'classes' => [ 'front-page-2cols-right' ] ],
            [ 'size' => 3, 'title' => 'Three Columns', 'classes' => [ 'front-page-3cols' ] ],
            [ 'size' => 4, 'title' => 'Four Columns', 'classes' => [ 'front-page-4cols' ] ],
        ] );
    }
}
