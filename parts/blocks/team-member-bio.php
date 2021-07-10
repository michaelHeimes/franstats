<?php

/**
 * team-member-bio Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'team-member-bio-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'team-member-bio';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$heading = get_field('heading') ?: '';
$copy = get_field('copy') ?: '';
$photo = get_field('photo') ?: '';
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="inner">

		<div class="grid-container">
			<div class="grid-x grid-padding-x flex-dir-column tablet-flex-dir-row-reverse">
				
				<div class="right cell small-12 medium-4 tablet-4">
					
					<div class="img-wrap">
						<img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
					</div>
					
				</div>
				
				<div class="copy-wrap cell small-12 medium-auto tablet-8">
					<h2 class="h3"><?php echo $heading;?></h2>
					<div><?php echo $copy;?></div>
				</div>
	
			</div>
			
		</div>
	
	</div>
</div>