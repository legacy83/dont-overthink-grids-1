<?php

namespace DOGrids;

use Dalen\Contracts\DI\ServiceProviderInterface;
use Dalen\DI\ServiceProviderTrait;

/**
 * Class IntroRepeater
 *
 * @package site\dogrids
 */
class IntroRepeater implements \IteratorAggregate, ServiceProviderInterface
{
    use ServiceProviderTrait;

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        return new \ArrayIterator( [
            [
                'title' => __( "Don't Overthink Grids", 'dogrids' ),
            ],
        ] );
    }
}
