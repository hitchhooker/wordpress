<?php
add_action('acf/init', 'amenum_init_cta_block_type');
function amenum_init_cta_block_type() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        // register a hero block.
        acf_register_block_type(array(
            'name'              => 'call_to_action',
            'title'             => __('CTA'),
            'description'       => __('A custom call to action block.'),
            'render_template'   => 'blocks/cta-render.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'cta', 'action' ),
        ));
    }
}
?>