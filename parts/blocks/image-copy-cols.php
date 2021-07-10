<?php

/**
 * image-copy-cols Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'image-copy-cols-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'image-copy-cols';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$image = get_field('image') ?: '';
$copy = get_field('copy') ?: '';
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="inner <?php echo $text_size;?>">

		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle">
				
				<div class="left cell small-12 tablet-6 large-7">
					
					<?php if( have_rows('heading_rows') ):?>
					<h2 class="h1 hide-for-tablet text-center">
						<?php while ( have_rows('heading_rows') ) : the_row();?>	
						
						<?php if( have_rows('single_row') ):?>
							<?php while ( have_rows('single_row') ) : the_row();?>	
						
							<span class="<?php the_sub_field('text_size');?>"><?php the_sub_field('text');?></span>
						
							<?php endwhile;?>
						<?php endif;?>
					
						<?php endwhile;?>
					</h2>
					<?php endif;?>
					
					<div class="img-wrap text-center">
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					</div>
					
				</div>

				<div class="right cell small-12 tablet-6 large-5">
					<?php if( have_rows('heading_rows') ):?>
					<h2 class="h1 show-for-tablet">
						<?php while ( have_rows('heading_rows') ) : the_row();?>	
						
						<?php if( have_rows('single_row') ):?>
							<?php while ( have_rows('single_row') ) : the_row();?>	
						
							<span class="<?php the_sub_field('text_size');?>"><?php the_sub_field('text');?></span>
						
							<?php endwhile;?>
						<?php endif;?>
					
						<?php endwhile;?>
					</h2>
					<?php endif;?>
					<?php echo $copy;?>
				</div>
	
			</div>
			
		</div>
		
	</div>
</div>