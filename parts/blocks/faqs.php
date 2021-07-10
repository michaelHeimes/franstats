<?php

/**
 * faqs Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'faqs-' . $block['id'];
/*
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
*/

// Create class attribute allowing for custom "className" and "align" values.
$className = 'faqs';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$heading = get_field('heading') ?: '';
$anchor_link = get_field('anchor') ?: '';

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div id="<?php echo $anchor_link;?>" class="anchor-link"></div>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="left cell small-12 tablet-7 large-6">
				<h2 class="h3"><?php echo $heading;?></h2>
			</div>
			
			<div class="right cell small-12 tablet-5 large-6">
				<div class="inner">
								
					<?php if( have_rows('faqs') ):?>
					<ul class="accordion" data-accordion>
						<?php while ( have_rows('faqs') ) : the_row();?>	
						
						<?php if( have_rows('single_faq') ):?>
							<?php while ( have_rows('single_faq') ) : the_row();?>	
	
							<li class="accordion-item" data-accordion-item>
								<a href="#" class="accordion-title"><?php the_sub_field('question');?></a>
							
								<div class="accordion-content" data-tab-content>
	
									<?php the_sub_field('answer');?>
	
								</div>
							</li>
						
							<?php endwhile;?>
						<?php endif;?>
					
						<?php endwhile;?>
					</ul>
					<?php endif;?>
				
				</div>
			</div>

		</div>
		
	</div>
</div>
