<div class="sidebar col-1-3">

	<section class="about">
		<div class="logo">
			<a href="<?php echo home_url(); ?>">AN</a>
		</div>
		<p>
			I'm <em>ArmNo</em>, a web developer, Chiang Mai, Thailand. I am into front-end development and web design.
			<?php 
				#$admin = get_user_by('login', 'ArmNo'); /* temporarily use the log in name : should be value from theme options */ 
				#the_author_meta( 'user_description', $admin->ID);
			?> 
		</p>
		<p>
			I spend (some of) my free time working on <a href="https://github.com/armno">my projects</a> on Github, reading books. I also love taking <a href="http://www.flickr.com/photos/<?php echo get_option('sera_flickr_username'); ?>">photos</a>.
		</p>
			
		<p>
			There is an <a href="<?php bloginfo('url'); ?>/about-me">about me</a> page in case you want to know more. Take your time.
		</p>

		<ul class="social-medias">
			<li>
				<a class="facebook" href="<?php echo get_option('sera_facebook_url'); ?>">
				</a>
			</li>
			<li>
				<a class="twitter" href="http://twitter.com/<?php echo get_option('sera_twitter_username'); ?>">
				</a>
			</li>
			<li>
				<a class="flickr" href="http://www.flickr.com/photos/<?php echo get_option('sera_flickr_username'); ?>">
				</a>
			</li>
			<!-- <li>
				<a href="https://github.com/armno">
					<img src="<?php echo get_template_directory_uri(); ?>/img/github.png" alt="">
				</a>
			</li> -->
			<li>
				<a class="rss" href="<?php echo get_option('sera_feeds_url'); ?>">
				</a>
			</li>
		</ul>
	</section><!-- .about -->
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