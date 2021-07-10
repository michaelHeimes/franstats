<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					<div class="grid-container">
						
						<div class="inner-footer grid-x grid-padding-x">
													
							<div class="small-12 cell text-center">
								<div class="inner grid-x">
									<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php the_field('copyright_owner', 'option'); ?></p>
									<nav class="cell shrink" role="navigation">
			    						<?php joints_footer_links(); ?>
			    					</nav>
								</div>
							</div>
						
						</div> <!-- end #inner-footer -->
				
					</div>
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->