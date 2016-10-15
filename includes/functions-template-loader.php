<?php
/**
 * @package    My\Twenty12\Theme
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2016, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace My\Twenty12\Theme;

// force error 404 for some templates
add_action( 'template_redirect', function () {

    /**
     * @var $wp_query \WP_Query
     */
    global $wp_query;

    if ( is_404() ) :
    elseif ( is_front_page() ) :
    elseif ( is_page() ) :
    else :

        $wp_query->set_404();
        status_header( 404 );

    endif;

} );

// handles the front page logic
add_filter( 'frontpage_template', function ( $template ) {
    if ( is_home() || is_page_template() ) {
        $template = FALSE;
    }

    return $template;
} );