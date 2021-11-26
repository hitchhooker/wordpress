<?php
/**
 * Amenum Core functions and definitions
 */

if ( ! defined( '_CORE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_CORE_VERSION', '1.0.0' );
}

/* Theme CSS */
add_action( 'wp_enqueue_scripts', 'amenum_enqueue_theme_css' );
function amenum_enqueue_theme_css() {
    wp_enqueue_style(
        'default',
        get_template_directory_uri() . '/dist/main.css'
    );
}

if ( ! function_exists( 'amenum_core_setup' ) ) :

	/* Sets up theme defaults and registers support for various WordPress features. */

	function amenum_core_setup() {
		/* Make theme available for translation. */
		load_theme_textdomain( 'amenum-core', get_template_directory() . '/languages' );

		/* Add default posts and comments RSS feed links to head. */
		add_theme_support( 'automatic-feed-links' );

		/* Let WordPress manage the document title. */
		add_theme_support( 'title-tag' );

		/* Enable support for Post Thumbnails on posts and pages. */
		add_theme_support( 'post-thumbnails' );

		/* Switch default core markup to output valid HTML5. */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'amenum_core_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'amenum_core_setup' );

function your_theme_customizer_setting($wp_customize) {
	// add a setting 
			$wp_customize->add_setting('amenum_theme_logo_light');
	// Add a control to upload the hover logo
			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'your_theme_hover_logo', array(
					'label' => 'Logo Light Version',
					'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
					'settings' => 'amenum_theme_logo_light',
					'priority' => 8 // show it just below the custom-logo
			)));
	}
	
	add_action('customize_register', 'your_theme_customizer_setting');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

 /*
function amenum_core_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'amenum_core_content_width', 640 );
}
add_action( 'after_setup_theme', 'amenum_core_content_width', 0 );
*/
/*
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
function amenum_core_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'amenum-core' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'amenum-core' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'amenum_core_widgets_init' );
*/

/**
 * Enqueue scripts and styles.
 */
function amenum_core_scripts() {
	wp_enqueue_style( 'amenum-core-style', get_stylesheet_uri(), array(), _CORE_VERSION );
	wp_style_add_data( 'amenum-core-style', 'rtl', 'replace' );

	wp_enqueue_script( 'amenum-core-navigation', get_template_directory_uri() . '/dist/main.js', array('jquery'), _CORE_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'amenum_core_scripts' );

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Register menus */
require get_template_directory() . '/inc/menus.php';

/*Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Functions which enhance the theme by hooking into WordPress. */
require get_template_directory() . '/inc/template-functions.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

if(get_site_url() != "https://iopartners.local"):
  require get_template_directory() . '/inc/acf-pro.php';
  require get_template_directory() . '/inc/safe-svg.php';
	require get_template_directory() . '/inc/acf-fields.php';
  require get_template_directory() . '/inc/post-types.php';
endif;

function wpdocs_custom_excerpt_length( $length ) {
	return 19;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

require_once('blocks/init.php');

add_action('enqueue_block_editor_assets','add_block_editor_assets',10,0);
function add_block_editor_assets(){
  wp_enqueue_style('block_editor_css', get_template_directory_uri() . '/dist/admin.css');
}