<?php
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/inc/acf-pro/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf-pro/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

/* (Optional) Hide the ACF admin menu item. 
add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin( $show_admin ) {
    return false;
}

/* Add theme settings page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Site Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'site-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Site Settings',
		'menu_title'	=> 'Site Settings',
		'parent_slug'	=> 'options-general.php',
	));
}*/
