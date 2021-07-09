<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">

		<div class="inner-content">
	
		    <main class="main" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main -->

		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
	

	<div class="reveal form-modal" id="try-modal" data-reveal data-animation-in="fade" data-animation-out="fade">
		
		<h1 class="text-center"><?php the_field('form_heading', 'option');?></h1>
		
		<?php
			$shortcode = get_field('form_shortcode', 'option');
			echo do_shortcode($shortcode);
		?>
	
		<button class="close-button" data-close aria-label="Close modal" type="button">
		    <span aria-hidden="true">
		    	<svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M4.29688 5.52148L0.576172 0.296875H2.42188L5.24414 4.39844L8.05664 0.296875H9.88281L6.16211 5.52148L10.0781 11H8.24219L5.24414 6.66406L2.2168 11H0.380859L4.29688 5.52148Z" fill="black"/>
				</svg>
			</span>
		</button>
		
	</div>

<?php get_footer(); ?>