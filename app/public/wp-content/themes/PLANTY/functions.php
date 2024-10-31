<?php

if ( !defined( 'ABSPATH' ) ) exit;



if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

function add_admin_link_to_menu($items, $args) {
    
    if (is_user_logged_in() && current_user_can('manage_options')) {
        if (!is_admin()) {
            $admin_url = admin_url();
            $admin_link = '<li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"><a href="'. $admin_url .'">Admin</a></li>';
            
            $menu_items = explode('</li>', $items); 
            
            array_splice($menu_items, 1, 0, $admin_link);
            
            $items = implode('</li>', $menu_items);
        }
    }
    return $items; 
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);

