<?php
add_action('acf/init', 'amenum_init_featured_block_type');
function amenum_init_featured_block_type() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        // register a hero block.
        acf_register_block_type(array(
            'name'              => 'featured',
            'title'             => __('Featured Items'),
            'description'       => __('A custom featured items block.'),
            'render_template'   => 'blocks/featured-render.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'featured', 'references' ),
            'mode'              => false
        ));
    }
}
?>