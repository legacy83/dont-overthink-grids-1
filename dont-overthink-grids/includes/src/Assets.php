<?php

namespace site\dogrids;

use trsenna\dalen\kernel\contracts\BootstrapInterface;
use trsenna\dalen\kernel\contracts\ServiceProviderInterface;
use trsenna\dalen\kernel\foundation\ServiceProviderTrait;

/**
 * Class Assets
 *
 * @package site\dogrids
 */
class Assets implements BootstrapInterface, ServiceProviderInterface
{
    use ServiceProviderTrait;

    /**
     * @inheritdoc
     */
    public function __bootstrap()
    {
        add_action( 'wp_enqueue_scripts', function () {
            wp_enqueue_style( 'dogrids-style', get_stylesheet_uri() );
        } );
    }
}
