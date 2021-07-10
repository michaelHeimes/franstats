<?php

/**
 * Banner Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'banner-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'banner has-bg';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$bg_img = get_field('background_image') ?: '';
$heading = get_field('heading') ?: '';
$text = get_field('copy') ?: '';
$modal_text = get_field('modal_button_text') ?: '';

$video_thumb = get_field('video_thumbnail_image') ?: '';
$video_url = get_field('video_url') ?: '';

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="bg" style="background-image: url(<?php echo $bg_img;?>);"></div>
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			
			<div class="left cell small-12 xmedium-6 large-5">
				<h1><?php echo $heading; ?></h1>
				<p><?php echo $text; ?></p>
				<div class="btn-wrap">
					<button type="button" class="button white" data-open="try-modal"><?php echo $modal_text;?></button>
				</div>
			</div>
			
			<div class="right cell small-12 xmedium-6 large-offset-1">
				<button href="#" data-open="<?php echo esc_attr($id); ?>-video">
					<img src="<?php echo esc_url($video_thumb['url']); ?>" alt="<?php echo esc_attr($video_thumb['alt']); ?>" />
				</button>
				
				<div class="reveal" id="<?php echo esc_attr($id); ?>-video" data-reveal data-animation-in="fade" data-animation-out="fade">
					<?php
					
					// Load value.
					$iframe = $video_url;
					
					// Use preg_match to find iframe src.
					preg_match('/src="(.+?)"/', $iframe, $matches);
					$src = $matches[1];
					
					// Add extra parameters to src and replcae HTML.
					$params = array(
					    'controls'  => 0,
					    'hd'        => 1,
					    'autohide'  => 1
					);
					$new_src = add_query_arg($params, $src);
					$iframe = str_replace($src, $new_src, $iframe);
					
					// Add extra attributes to iframe HTML.
					$attributes = 'frameborder="0"';
					$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
					
					// Display customized HTML.
					echo $iframe;
					?>
					
				<button class="close-button" data-close aria-label="Close modal" type="button">
				    <span aria-hidden="true">
				    	<svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M4.29688 5.52148L0.576172 0.296875H2.42188L5.24414 4.39844L8.05664 0.296875H9.88281L6.16211 5.52148L10.0781 11H8.24219L5.24414 6.66406L2.2168 11H0.380859L4.29688 5.52148Z" fill="black"/>
						</svg>
					</span>
				</button>
					
				</div>
				
			</div>
			
		</div>
	</div>
</div>