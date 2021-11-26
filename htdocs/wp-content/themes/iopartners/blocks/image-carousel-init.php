<?php
add_action('acf/init', 'amenum_init_image_carousel_block_type');
function amenum_init_image_carousel_block_type() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        // register a hero block.
        acf_register_block_type(array(
            'name'              => 'image_carousel',
            'title'             => __('Image Carousel'),
            'description'       => __('A custom Image Carousel block.'),
            'render_template'   => 'blocks/image-carousel-render.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'featured', 'references' ),
            'supports'          => array('anchor' => true),
        ));
    }
}
?>