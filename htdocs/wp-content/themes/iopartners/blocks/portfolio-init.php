<?php
add_action('acf/init', 'amenum_init_portfolio_block_type');
function amenum_init_portfolio_block_type() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        // register a hero block.
        acf_register_block_type(array(
            'name'              => 'portfolio',
            'title'             => __('Portfolio'),
            'description'       => __('A custom portfolio block.'),
            'render_template'   => 'blocks/portfolio-render.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'portfolio', 'references' ),
        ));
    }
}
?>