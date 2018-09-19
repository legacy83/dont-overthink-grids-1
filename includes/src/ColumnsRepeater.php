<?php

namespace site\dogrids;

use trsenna\dalen\kernel\contracts\ServiceProviderInterface;
use trsenna\dalen\kernel\foundation\ServiceProviderTrait;

class ColumnsRepeater implements \IteratorAggregate, ServiceProviderInterface
{
    use ServiceProviderTrait;

    public function getIterator()
    {
        return new \ArrayIterator( [
            [
                'size' => 2,
                'title' => __( 'Two Columns', 'dogrids' ),
                'classes' => [ 'front-page-2cols' ]
            ],
            [
                'size' => 2,
                'title' => __( 'Two Columns', 'dogrids' ),
                'classes' => [ 'front-page-2cols-left' ]
            ],
            [
                'size' => 2,
                'title' => __( 'Two Columns', 'dogrids' ),
                'classes' => [ 'front-page-2cols-right' ]
            ],
            [
                'size' => 3,
                'title' => __( 'Two Columns', 'dogrids' ),
                'classes' => [ 'front-page-3cols' ]
            ],
            [
                'size' => 4,
                'title' => __( 'Two Columns', 'dogrids' ),
                'classes' => [ 'front-page-4cols' ]
            ],
        ] );
    }
}
