<?php

/**
 * price-cards Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'price-cards-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'price-cards';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$heading = get_field('heading') ?: '';
$post_cards_text = get_field('post_cards_copy') ?: '';

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="cell small-12">
				<h2 class="text-center"><?php echo $heading; ?></h2>
			</div>

		</div>
		
		<?php $cards_num = count(get_field('cards'));?>
			
		<div class="cards-wrap grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-<?php echo $cards_num;?>">
			
			<?php if( have_rows('cards') ):?>
				<?php while ( have_rows('cards') ) : the_row();?>
									
				<?php if( have_rows('single_card') ):?>
					<?php while ( have_rows('single_card') ) : the_row();?>	
						
					<div class="single-card cell text-center">
						
						<h3><?php the_sub_field('title');?></h3>
						
						<div class="sub-title"><?php the_sub_field('sub-title');?></div>

						<div class="sub-title"><?php the_sub_field('price');?></div>

						<div class="sub-title"><?php the_sub_field('term');?></div>

						<div class="btn-wrap">
							<button type="button" class="button light-gray" data-open="try-modal"><?php the_sub_field('button_text');?></button>
						</div>
						
					</div>
				
					<?php endwhile;?>
				<?php endif;?>
			
				<?php endwhile;?>
			<?php endif;?>
			
		</div>
		
		<div class="post-cards-copy grid-x grid-padding-x">
			<div class="cell small-12 text-center">
				<?php echo $post_cards_text; ?>
				<div class="blue-break"></div>
			</div>
		</div>
		
	</div>
</div>