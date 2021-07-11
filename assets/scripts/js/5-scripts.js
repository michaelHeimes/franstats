(function($) {
	'use strict';
	
// 	Accessibility Hack to allow tabbing empty links
	$('.menu a[href="#"]').click(function(e) {
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
	});	
	
// 	Fixed Header Mobile Hack
	$(document).on('click', 'a#menu-toggle', function(){
		
		if ( $(this).hasClass('clicked') ) {
			
			$(this).removeClass('clicked');
			$('header.header').removeClass('off-canvas-content is-open-left has-transition-push');
		
		} else {
		
			$(this).addClass('clicked');
			$('header.header').addClass('off-canvas-content is-open-left has-transition-push');
		
		}
		
	});

	$(document).on('click', '.js-off-canvas-overlay', function(){
		$('a#menu-toggle').removeClass('clicked');
		$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
	});
	
// 	Close Off-Canvas when anchor link is clicked
	$('.off-canvas li.menu-item').click(function() {
		$('.off-canvas').foundation('close'); 
		$('a#menu-toggle').removeClass('clicked');
		$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');		
	});

	
// 	Block Hacks
	$('.wp-block-button__link').addClass('button');
	$('.wp-block-columns').addClass('grid-container');
	
// 	WP Menu Link Buttons Hack
	$('li.nav-button').find('a').addClass('button');
	$('#main-nav li:not(.open-try-modal)').addClass('show-for-medium');
		
// 	All buttons with 'open-try-model' class will open Try It ow form modal
	$('li.open-try-modal').find('a').attr('data-open', 'try-modal');
	$('a.open-try-modal').data('try-modal');
	
	$('.gform_fields .ginput_container:not(.has_first_name) input').focus(function() {
		$(this).closest('.gfield').addClass('focused');
	});
	
	$('.gform_fields .ginput_container:not(.has_first_name) input').blur(function() {
		$(this).closest('.gfield').removeClass('focused');
	});
	
	$('.has_first_name.no_middle_name.has_last_name input').focus(function() {
		$(this).closest('span').addClass('focused');
	});
	
	$('.has_first_name.no_middle_name.has_last_name input').blur(function() {
		$(this).closest('span').removeClass('focused');
	});	

	
// 	Logo Slider
	if ( $('.brand-slider').length ) {
		
		$('.brand-slider').slick({
			speed: 500,
			slidesToShow: 5,
			slidesToScroll: 1,
			autoplay: false,
			autoplaySpeed: 2000,
			infinite: true,
			dots:false,
			rows: 0,
			prevArrow:"<button class='slick-prev'><img src='/wp-content/themes/franstats/assets/images/prev-arrow.svg' alt='arrow left'></button>",
			nextArrow:"<button class='slick-next'><img src='/wp-content/themes/franstats/assets/images/next-arrow.svg' alt='arrow right'></button>",
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 5,
						slidesToScroll: 1,				
					}
		
				},
				{
					breakpoint: 900,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,				
					}
		
				},
				{
					breakpoint: 750,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						infinite: true,
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true,
						autoplaySpeed: 2000,
					}
			}]
		});
	
	}

// 	Testimonial Slider
	if ( $('.testimonial-slider').length ) {
		
		$('.testimonial-slider').slick({
			speed: 500,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			autoplaySpeed: 2000,
			dots:true,
			arrows: false,
			rows: 0,
			fade: true,
			appendDots: $(".slide-m-dots"),
		    prevArrow: $(".slide-m-prev"),
		    nextArrow: $(".slide-m-next")
		});
	
	}
	
})(jQuery);