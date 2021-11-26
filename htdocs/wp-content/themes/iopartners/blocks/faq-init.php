<?php
add_action('acf/init', 'amenum_init_block_faq');
function amenum_init_block_faq() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        // register a hero block.
        acf_register_block_type(array(
            'name'              => 'faq',
            'title'             => __('FAQ'),
            'description'       => __('A custom call to action block.'),
            'render_template'   => 'blocks/faq-render.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'faq', 'action' ),
        ));
    }
}
?>