		</div><!-- #main -->
		<footer>
			<p>
				<strong><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></strong> is powered by <a href="http://wordpress.org">WordPress</a> and <a href="https://github.com/armno/Sera-WordPress-Theme">Sera Theme</a>.
				Icons by <a href="http://picons.me/">Picons Social</a> and <a href="http://pc.de/icons/">pc.de</a>.
			</p>
			<p>Made in Chiang Mai.</p>
		</footer>
		<script>
			// inline small script to reduce number of HTTP requests
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
		</script>
		<?php wp_footer(); ?>
	</body>
</html>