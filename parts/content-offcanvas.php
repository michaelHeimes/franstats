<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-left" id="off-canvas" data-off-canvas>
	<ul class="menu util-nav vertical menu accordion-menu">
		<li>
			<a href="tel:<?php the_field('phone_number','option');?>"><?php the_field('phone_number','option');?></a>
		</li>

		<?php 
		$link = get_field('sign_in_link', 'option');
		if( $link ): 
		    $link_url = $link['url'];
		    $link_title = $link['title'];
		    $link_target = $link['target'] ? $link['target'] : '_self';
		    ?>
		<li>
		    <a class="sign-in" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		</li>
		<?php endif; ?>

	</ul>

	<?php joints_off_canvas_nav(); ?>

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php endif; ?>

</div>
