<?php
//require_once('hero-init.php');
//require_once('section-init.php');
//require_once('blog-posts-init.php');
//require_once('text-boxes-init.php');
//require_once('icon-box-init.php');
//require_once('image-banner-init.php');

//require_once('text-and-media-init.php');
//require_once('text-and-slider-init.php');

//require_once('featured-init.php');
//!require_once('cta-init.php');
//!require_once('faq-init.php');
//!require_once('image-carousel-init.php');

?>

<?php
add_action('acf/init', 'amenum_init_hero_block_type');
add_action('acf/init', 'amenum_init_block_section');
add_action('acf/init', 'amenum_init_text_boxes_block_type');
add_action('acf/init', 'amenum_init_blog_posts_block_type');
add_action('acf/init', 'amenum_init_team_members_block_type');

add_action('acf/init', 'amenum_init_text_and_media_block_type');
add_action('acf/init', 'amenum_init_text_and_slider_block_type');

add_action('acf/init', 'amenum_init_image_banner_block_type');
add_action('acf/init', 'amenum_init_trust_banner_block_type');
?>

<?php
/* Hero Block */
function amenum_init_hero_block_type() {
  if( function_exists('acf_register_block_type') ) {
    acf_register_block_type(array(
      'name'              => 'hero',
      'title'             => __('Hero'),
      'description'       => __('A custom hero block.'),
      'render_template'   => 'blocks/hero-render.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'hero', 'header' ),
      'supports'          => array('anchor' => true),
      'mode'              => false
    ));
  }
}

function amenum_init_block_section() {
  if( function_exists('acf_register_block_type') ) {
    acf_register_block_type(array(
      'name'				=> 'section',
      'title'				=> 'Section',
      'description'	=> 'A Section content block.',
      'category'		=> 'formatting',
      'mode'				=> 'preview',
      'supports'		=> array(
        'align' => true,
        'mode' => false,
        'jsx' => true
      ),
      'render_template' => 'blocks/section-render.php',
    ));
  }
}

/* Text Boxes Block */
function amenum_init_text_boxes_block_type() {
  if( function_exists('acf_register_block_type') ) {
    acf_register_block_type(array(
      'name'              => 'text_boxes',
      'title'             => __('Text Boxes'),
      'description'       => __('A custom block.'),
      'render_template'   => 'blocks/text-boxes-render.php',
      'category'          => 'formatting',
      'mode'				      => 'edit',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'featured', 'references' ),
      'supports'          => array('anchor' => true),
    ));
  }
}

/* Blog Posts Block */
function amenum_init_blog_posts_block_type() {
  if( function_exists('acf_register_block_type') ) {
    acf_register_block_type(array(
      'name'              => 'blog_posts',
      'title'             => __('Blog Posts'),
      'description'       => __('A custom blog posts items block.'),
      'render_template'   => 'blocks/blog-posts-render.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'blog', 'posts' ),
    ));
  }
}

/* Blog Posts Block */
function amenum_init_team_members_block_type() {
  if( function_exists('acf_register_block_type') ) {
    acf_register_block_type(array(
      'name'              => 'team_members',
      'title'             => __('Team members'),
      'description'       => __('A custom blog posts items block.'),
      'render_template'   => 'blocks/team-members-render.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'blog', 'posts' ),
    ));
  }
}

function amenum_init_text_and_media_block_type() {
  if( function_exists('acf_register_block_type') ) {
    acf_register_block_type(array(
      'name'              => 'text_and_media',
      'title'             => __('Text and Media'),
      'description'       => __('A custom text and media block.'),
      'render_template'   => 'blocks/text-and-media-render.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'text', 'media' ),
    ));
  }
}

function amenum_init_text_and_slider_block_type() {
  if( function_exists('acf_register_block_type') ) {
    acf_register_block_type(array(
      'name'              => 'text_and_slider',
      'title'             => __('Text and Slider'),
      'description'       => __('A custom text and slider block.'),
      'render_template'   => 'blocks/text-and-slider-render.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'text', 'slider' ),
    ));
  }
}

function amenum_init_image_banner_block_type() {
  if( function_exists('acf_register_block_type') ) {
    acf_register_block_type(array(
      'name'              => 'image_banner',
      'title'             => __('Image Banner'),
      'description'       => __('A custom hero block.'),
      'render_template'   => 'blocks/image-banner-render.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'hero', 'header' ),
      'supports'          => array('anchor' => true),
      'mode'              => false
    ));
  }
}

function amenum_init_trust_banner_block_type() {
  if( function_exists('acf_register_block_type') ) {
    acf_register_block_type(array(
      'name'              => 'trust_banner',
      'title'             => __('Trust Banner'),
      'description'       => __('A custom hero block.'),
      'render_template'   => 'blocks/trust-banner-render.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'hero', 'header' ),
      'supports'          => array('anchor' => true),
      'mode'              => false
    ));
  }
}
?>