<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<ul class="menu align-middle">
			<li class="show-for-small-only"><a id="menu-toggle" data-toggle="off-canvas">
				<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0.75 4.1875H20.25C20.625 4.1875 21 3.85938 21 3.4375V1.5625C21 1.1875 20.625 0.8125 20.25 0.8125H0.75C0.328125 0.8125 0 1.1875 0 1.5625V3.4375C0 3.85938 0.328125 4.1875 0.75 4.1875ZM0.75 11.6875H20.25C20.625 11.6875 21 11.3594 21 10.9375V9.0625C21 8.6875 20.625 8.3125 20.25 8.3125H0.75C0.328125 8.3125 0 8.6875 0 9.0625V10.9375C0 11.3594 0.328125 11.6875 0.75 11.6875ZM0.75 19.1875H20.25C20.625 19.1875 21 18.8594 21 18.4375V16.5625C21 16.1875 20.625 15.8125 20.25 15.8125H0.75C0.328125 15.8125 0 16.1875 0 16.5625V18.4375C0 18.8594 0.328125 19.1875 0.75 19.1875Z" fill="black"/>
				</svg>
			</a></li>
			<li class="show-for-sr"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
			<li class="header-logo"><a href="<?php echo home_url(); ?>">
				<?php 
				$image = get_field('header_logo', 'option');
				if( !empty( $image ) ): ?>
				    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" alt="franstats logo">
				<?php endif; ?>
			</a></li>
		</ul>
	</div>
	<div class="top-bar-right">
		<nav class="utility-nav">
			<a href="tel:<?php the_field('phone_number','option');?>"><?php the_field('phone_number','option');?></a>
			<span>|</span>
			<?php 
			$link = get_field('sign_in_link', 'option');
			if( $link ): 
			    $link_url = $link['url'];
			    $link_title = $link['title'];
			    $link_target = $link['target'] ? $link['target'] : '_self';
			    ?>
			    <a class="sign-in" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			<?php endif; ?>
		</nav>
		<?php joints_top_nav(); ?>	
	</div>

</div>