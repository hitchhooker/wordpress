<?php

// This theme uses wp_nav_menu() in one location.
register_nav_menus(
    array(
        'menu-1' => esc_html__( 'Primary 1', 'amenum-core' ),
        'menu-2' => esc_html__( 'Primary 2', 'amenum-core' ),
        'footer-1' => esc_html__( 'Footer 1', 'amenum-core' ),
        'footer-2' => esc_html__( 'Footer 2', 'amenum-core' ),
    )
);

add_action( 'after_setup_theme', 'register_navwalker' );
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

add_filter( 'nav_menu_link_attributes', 'bootstrap5_dropdown_fix' );
function bootstrap5_dropdown_fix( $atts ) {
    if ( array_key_exists( 'data-toggle', $atts ) ) {
        unset( $atts['data-toggle'] );
        $atts['data-bs-toggle'] = 'dropdown';
    }
    return $atts;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
    if (in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) || is_home() ){
        $classes[] = 'active ';
    }
    return $classes;
}