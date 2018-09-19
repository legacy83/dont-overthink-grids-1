<?php

namespace site\dogrids;

use trsenna\dalen\kernel\contracts\ServiceProviderInterface;
use trsenna\dalen\kernel\foundation\ServiceProviderTrait;

class IntroRepeater implements \IteratorAggregate, ServiceProviderInterface
{
    use ServiceProviderTrait;

    public function getIterator()
    {
        return new \ArrayIterator( [
            [
                'title' => __( "Don't Overthink Grids", 'dogrids' ),
                'classes' => [ 'front-page-intro' ],
            ]
        ] );
    }
}
