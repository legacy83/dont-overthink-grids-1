<?php
/**
 * @package    Dont\Overthink\Grids\Theme
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2016, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace Dont\Overthink\Grids\Theme;

// dequeue parent theme styles
add_action( 'wp_enqueue_scripts', function () {
    wp_dequeue_style( 'twentytwelve-fonts' );
    wp_dequeue_style( 'twentytwelve-style' );
    wp_dequeue_style( 'twentytwelve-ie' );
}, 15 );

// enqueue theme styles
add_action( 'wp_enqueue_scripts', function () {
    $template_dir_uri = trailingslashit( get_template_directory_uri() );
    wp_enqueue_style( 'dont-overthink-grids-fonts', esc_url_raw( twentytwelve_get_font_url() ) );
    wp_enqueue_style( 'dont-overthink-grids-parent', "{$template_dir_uri}style.css" );
    wp_enqueue_style( 'dont-overthink-grids-style', get_stylesheet_uri() );
} );