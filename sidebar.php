<div class="sidebar">

	<section class="about">
		<h3>about me</h3>
		<p>A web developer, living in Chiang Mai, Thailand. Love taking photos, crafting web, cats, and stars. I blog about things I am interested in.</p>
		<ul class="social-medias">
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/facebook.png" alt="facebook"></a></li>
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/twitter.png" alt="twitter"></a></li>
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/flickr.png" alt="flickr"></a></li>
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/rss.png" alt="rss"></a></li>
		</ul>
	</section>

	<section class="search">
		<h3>search</h3>
		<form action="<?php echo home_url( '/' ); ?>" method="get">
		    <fieldset>
		        <input type="search" placeholder="type and hit enter" name="s" id="search" size="30" value="<?php the_search_query(); ?>" />
		    </fieldset>
		</form>
	</section>

	<ul class="widgets">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

		<?php endif; ?>
	</ul>
</div><!-- .sidebar -->