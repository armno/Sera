<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php if ( is_singular() && get_option('thread_comments') ) wp_enqueue_script('comment-reply'); ?>
		<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/style.less">
		<script src="<?php bloginfo('template_url'); ?>/js/less.js" type="text/javascript"></script>
		<?php wp_head(); ?>
	</head>

	<body>
		<header>
			<h1 id="blog-name">
				<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
			</h1>

			<?php wp_nav_menu(array(
				'container' => 'nav',
				'theme_location' => 'top',
				'container_class' => 'main-navigation'
			)); ?>
		</header>

		<div id="main">
			<div class="content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article class="post">
						<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</article>

				<?php endwhile; 
					if ( $wp_query->max_num_pages > 1 ) : ?>
						<nav class="pagination">
							<div class="previous">
								<?php next_posts_link('&larr; Older Posts'); ?>
							</div>
							<div class="next">
								<?php previous_posts_link('Newer Posts &rarr;'); ?>
							</div>
						</nav>
					<?php endif;
				else : ?>
					<p>Sorry, no posts found.</p>
				<?php endif; ?>
			</div><!-- .content -->

			<div class="sidebar">

				<section class="about">
					<h3>about me</h3>
					<p>A web developer, living in Chiang Mai, Thailand. Love taking phoros, crafting web, cats, and stars. I blog about things I am interested in.</p>
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
			</div>
		</div>
		<footer>
			<p>&copy; <?php echo date('Y'); ?> &mdash; <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
			icons by <a href="http://www.iconfinder.com/search/1/?q=iconset%3Asocial">Picons Social</a></p>
		</footer>

	</body>
</html>