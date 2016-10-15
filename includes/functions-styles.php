<?php
/**
 * @package    My\Twenty12\Theme
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2016, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace My\Twenty12\Theme;

// register theme styles
add_action( 'wp_enqueue_scripts', function () {
    $template_dir_uri = trailingslashit( get_template_directory_uri() );
    wp_register_style( 'twenty12-fonts', esc_url_raw( twentytwelve_get_font_url() ) );
    wp_register_style( 'twenty12-parent', "{$template_dir_uri}style.css" );
    wp_register_style( 'twenty12-style', get_stylesheet_uri(), array(
        'twenty12-fonts',
        'twenty12-parent',
    ) );
} );

// enqueue theme styles
add_action( 'wp_enqueue_scripts', function () {
    wp_dequeue_style( 'twentytwelve-fonts' );
    wp_dequeue_style( 'twentytwelve-style' );
    wp_dequeue_style( 'twentytwelve-ie' );
    wp_enqueue_style( 'twenty12-style' );
}, 15 );