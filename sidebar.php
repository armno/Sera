<div class="sidebar">

	<section class="about">
		<h3>about me</h3>
		<p>
			<?php 
				$admin = get_userdatabylogin('ArmNo'); /* temporarily use the log in name : should be value from theme options */ 
				the_author_meta( 'user_description', $admin->ID);
			?> 
		</p>
		<ul class="social-medias">
			<li><a href="http://www.facebook.com/armnoblog"><img src="<?php bloginfo('template_url'); ?>/img/facebook.png" alt="facebook"></a></li>
			<li><a href="http://twitter.com/armno"><img src="<?php bloginfo('template_url'); ?>/img/twitter.png" alt="twitter"></a></li>
			<li><a href="http://www.flickr.com/photos/armno"><img src="<?php bloginfo('template_url'); ?>/img/flickr.png" alt="flickr"></a></li>
			<li><a href="http://feeds.feedburner.com/armnointh"><img src="<?php bloginfo('template_url'); ?>/img/rss.png" alt="rss"></a></li>
		</ul>
	</section>

	<section class="search">
		<h3>search</h3>
		<form action="<?php echo home_url( '/' ); ?>" method="get">
		    <fieldset>
		        <input type="search"  x-webkit-speech placeholder="type and hit enter" name="s" id="search" size="25" value="<?php the_search_query(); ?>" />
		    </fieldset>
		</form>
	</section>

	<ul class="widgets">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

		<?php endif; ?>
	</ul>
</div><!-- .sidebar -->