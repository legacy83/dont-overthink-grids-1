<?php

namespace DOGrids;

use Dalen\Contracts\BootstrapInterface;
use Dalen\Contracts\DI\ServiceProviderInterface;
use Dalen\DI\ServiceProviderTrait;

/**
 * Class Assets
 *
 * @package DOGrids
 */
class Assets implements BootstrapInterface, ServiceProviderInterface
{
    use ServiceProviderTrait;

    private $fonts = '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700';

    /**
     * @inheritdoc
     */
    public function __bootstrap(): void
    {
        add_action( 'wp_enqueue_scripts', function () {
            wp_enqueue_style( 'dogrids-fonts', esc_url_raw( $this->fonts ) );
            wp_enqueue_style( 'dogrids-style', get_stylesheet_uri() );
        } );
    }
}
