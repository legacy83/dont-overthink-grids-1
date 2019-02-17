<?php

namespace site\dogrids;

use trsenna\dalen\kernel\contracts\ServiceProviderInterface;
use trsenna\dalen\kernel\foundation\ServiceProviderTrait;

/**
 * Class ColumnsRepeater
 *
 * @package site\dogrids
 */
class ColumnsRepeater implements \IteratorAggregate, ServiceProviderInterface
{
    use ServiceProviderTrait;

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        return new \ArrayIterator( [
            [
                'size' => 2,
                'title' => __( 'Two Columns', 'dogrids' ),
                'classes' => [ 'col-wrap', 'col-wrap--2cols' ]
            ],
            [
                'size' => 3,
                'title' => __( 'Three Columns', 'dogrids' ),
                'classes' => [ 'col-wrap', 'col-wrap--3cols' ]
            ],
            [
                'size' => 4,
                'title' => __( 'Four Columns', 'dogrids' ),
                'classes' => [ 'col-wrap', 'col-wrap--4cols' ]
            ],
        ] );
    }
}
