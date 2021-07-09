<?php
	
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'banner',
            'title'             => __('Banner'),
            'description'       => __('A custom banner block.'),
            'render_template'   => 'parts/blocks/banner.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'banner' ),
        ));

        acf_register_block_type(array(
            'name'              => 'price-cards',
            'title'             => __('Price Cards'),
            'description'       => __('A custom banner block.'),
            'render_template'   => 'parts/blocks/price-cards.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'price', 'cards' ),
        ));

        acf_register_block_type(array(
            'name'              => 'brands-slider',
            'title'             => __('Brands Slider'),
            'description'       => __('A custom brands slider block.'),
            'render_template'   => 'parts/blocks/brands-slider.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'brands', 'slider' ),
        ));

        acf_register_block_type(array(
            'name'              => 'cta-bar',
            'title'             => __('CTA Bar'),
            'description'       => __('A custom CTA bar block.'),
            'render_template'   => 'parts/blocks/cta-bar.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'cta', 'bar' ),
        ));
        
    }
}