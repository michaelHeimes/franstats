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
            'name'              => 'image-copy-cols',
            'title'             => __('Image and Copy Columns'),
            'description'       => __('A custom Image and Copy Columns block.'),
            'render_template'   => 'parts/blocks/image-copy-cols.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'image', 'copy', 'columns' ),
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

        acf_register_block_type(array(
            'name'              => 'testimonials',
            'title'             => __('Testimonials'),
            'description'       => __('A custom testimonials block.'),
            'render_template'   => 'parts/blocks/testimonials.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block_type(array(
            'name'              => 'team-member-bio',
            'title'             => __('Team Member Bio'),
            'description'       => __('A custom team-member-bio block.'),
            'render_template'   => 'parts/blocks/team-member-bio.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'team', 'member', 'bio' ),
        ));

        acf_register_block_type(array(
            'name'              => 'faqs',
            'title'             => __('FAQs'),
            'description'       => __('A custom FAQs block.'),
            'render_template'   => 'parts/blocks/faqs.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'faqs', 'frequently', 'asked', 'questions' ),
        ));
        
    }
}