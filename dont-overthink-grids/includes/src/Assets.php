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
            wp_dequeue_style( 'twentytwelve-fonts' );
            wp_dequeue_style( 'twentytwelve-style' );
            wp_dequeue_style( 'twentytwelve-ie' );
        }, 15 );

        add_action( 'wp_enqueue_scripts', function () {
            $template_dir_uri = trailingslashit( get_template_directory_uri() );
            wp_enqueue_style( 'dont-overthink-grids-fonts', esc_url_raw( twentytwelve_get_font_url() ) );
            wp_enqueue_style( 'dont-overthink-grids-parent', "{$template_dir_uri}style.css" );
            wp_enqueue_style( 'dont-overthink-grids-style', get_stylesheet_uri() );
        } );
    }
}
