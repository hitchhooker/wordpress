<?php
add_action('acf/init', 'amenum_init_icon_box_block_type');
function amenum_init_icon_box_block_type() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        // register a hero block.
        acf_register_block_type(array(
            'name'              => 'icon_box',
            'title'             => __('Icon Box'),
            'description'       => __('A custom featured items block.'),
            'render_template'   => 'blocks/icon-box-render.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'featured', 'references' ),
            'supports'          => array('anchor' => true),
        ));
    }
}
?>