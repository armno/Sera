<div class="sidebar">

	<section class="about">
		<h3>about me</h3>
		<p>
			<?php 
				$admin = get_user_by('login', 'ArmNo'); /* temporarily use the log in name : should be value from theme options */ 
				the_author_meta( 'user_description', $admin->ID);
			?> 
		</p>
		<ul class="social-medias">
			<li>
				<a href="<?php echo get_option('sera_facebook_url'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="">
				</a>
			</li>
			<li>
				<a href="http://twitter.com/<?php echo get_option('sera_twitter_username'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="">
				</a>
			</li>
			<li>
				<a href="http://www.flickr.com/photos/<?php echo get_option('sera_flickr_username'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/flickr.png" alt="">
				</a>
			</li>
			<?php /*
			<li>
				<a href="https://github.com/armno">
					<img src="<?php bloginfo('template_url'); ?>/img/github.png" alt="">
				</a>
			</li>
			*/ ?>
			<li>
				<a href="<?php echo get_option('sera_feeds_url'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/rss.png" alt="">
				</a>
			</li>
		</ul>
	</section>
<!-- 
	<section class="search">
		<h3>search</h3>
		<form action="<?php echo home_url( '/' ); ?>" method="get">
		    <fieldset>
		        <input type="search"  x-webkit-speech placeholder="type and hit enter" name="s" id="search" size="25" value="<?php the_search_query(); ?>" />
		    </fieldset>
		</form>
	</section> -->

	<ul class="widgets">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

		<?php endif; ?>
	</ul>
</div><!-- .sidebar -->