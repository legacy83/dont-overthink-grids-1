<?php

namespace DOGrids;

use Dalen\Contracts\DI\ServiceProviderInterface;
use Dalen\DI\ServiceProviderTrait;

/**
 * Class ColumnsRepeater
 *
 * @package DOGrids
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
