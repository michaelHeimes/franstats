<?php

/**
 * testimonials Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonials-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonials';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="cell small-12 text-center">
				
				<div class="img-wrap">
					<svg width="33" height="22" viewBox="0 0 33 22" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M14.4435 0.639998C13.7835 0.639998 13.1835 0.579999 12.5835 0.579999C3.94352 0.579999 0.343516 3.46 0.343516 10.78V21.88H14.4435V10.78H9.28352C9.28352 10.72 9.28352 10.72 9.28352 10.66C9.28352 8.08 11.1435 6.76 14.4435 6.7V0.639998ZM32.1435 0.639998C31.4835 0.639998 30.8835 0.579999 30.2835 0.579999C21.6435 0.579999 18.1035 3.46 18.1035 10.78V21.88H32.1435V10.78H26.9835C26.9835 10.72 26.9835 10.72 26.9835 10.66C26.9835 8.08 28.8435 6.76 32.1435 6.7V0.639998Z" fill="#D3420D"/>
	</svg>
				</div>
				
				<?php if( have_rows('testimonials_slider') ):?>
				<div class="testimonial-slider">
					<?php while ( have_rows('testimonials_slider') ) : the_row();?>	
					
					<?php if( have_rows('single_testimonial') ):?>
						<?php while ( have_rows('single_testimonial') ) : the_row();?>	
						<div class="single-slide">
						
							<p class="quote">
								<?php the_sub_field('quote_text');?>
							</p>
							
							<p class="author">
								<strong><?php the_sub_field('author');?>, </strong>
								<?php the_sub_field('title');?>
							</p>
							
						</div>
					
						<?php endwhile;?>
					<?php endif;?>
				
					<?php endwhile;?>
				</div>
				
				<div class="slider-controls">
					<button type="button" class="slide-m-prev slick-arrow"><svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10.8375 3.59487C11.0886 3.34375 11.0886 2.94196 10.8375 2.69085L9.17006 1.02344C8.91895 0.772321 8.51716 0.772321 8.26604 1.02344L0.812919 8.47656C0.561803 8.72768 0.561803 9.12946 0.812919 9.38058L8.26604 16.8337C8.51716 17.0848 8.91895 17.0848 9.17006 16.8337L10.8375 15.1663C11.0886 14.9152 11.0886 14.5134 10.8375 14.2623L5.50377 8.92857L10.8375 3.59487Z" fill="#D3420D"/>
</svg></button>
					<div class="slide-m-dots"></div>
					<button type="button" class="slide-m-next slick-arrow"><svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.1946 9.38058C11.4457 9.12946 11.4457 8.72768 11.1946 8.47656L3.74149 1.02344C3.49037 0.772321 3.08859 0.772321 2.83747 1.02344L1.17006 2.69085C0.918945 2.94196 0.918945 3.34375 1.17006 3.59487L6.50377 8.92857L1.17006 14.2623C0.918945 14.5134 0.918945 14.9152 1.17006 15.1663L2.83747 16.8337C3.08859 17.0848 3.49037 17.0848 3.74149 16.8337L11.1946 9.38058Z" fill="#D3420D"/>
</svg>
</button>
				</div>
								
				<?php endif;?>
				
			</div>

		</div>
		
	</div>
</div>