<?php

/**
 * brands-slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'brands-slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'brands-slider';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$heading = get_field('heading') ?: '';
$copy = get_field('copy') ?: '';

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="cell small-12">
				<h2 class="text-center"><?php echo $heading; ?></h2>
				<p class="text-center"><?php echo $copy;?></p>
			</div>

		</div>
								
		<?php 
		$images = get_field('slider');
		if( $images ): ?>
		    <div class="slider brand-slider">
	            <?php foreach( $images as $image ): ?>
	                <div class="single-logo">
	                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	                </div>
	            <?php endforeach; ?>
		    </div>

		<?php endif; ?>
			
		
		<div class="post-cards-copy grid-x grid-padding-x">
			<div class="cell small-12 text-center">
				<?php echo $post_cards_text; ?>
				<div class="blue-break"></div>
			</div>
		</div>
		
	</div>
</div>