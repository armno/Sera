jQuery(document).ready(function($) {

	// source: http://webdesignerwall.com/tutorials/animated-scroll-to-top
	// hide/show the jump to top link
	$(window).scroll(function() {
		if ( $(this).scrollTop() > 100 ) {
			$('#jump').fadeIn();
		} else {
			$('#jump').fadeOut();
		}
	});

	// add scrolling to top of the page animation
	$('#jump').click(function() {
		$('body, html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});	

});
