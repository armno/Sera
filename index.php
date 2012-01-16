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

				<section class="search">
					<form action="<?php echo home_url( '/' ); ?>" method="get">
					    <fieldset>
					        <input type="search" placeholder="search" name="s" id="search" value="<?php the_search_query(); ?>" />
					    </fieldset>
					</form>
				</section>

				<section class="about">
					<h3>About me</h3>
					<p>
						Hi, this is ArmNo. This is too much information here. You should better <a href="#">read more about me</a>.
					</p>
					<ul>
						<li><a href="http://twitter.com/armno">Follow me on Twitter</a></li>
						<li><a href="http://facebook.com/armnoblog">Like this blog on Facebook</a></li>
					</ul>
				</section>

				<ul class="widgets">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

					<?php endif; ?>
				</ul>
			</div>
		</div>
		<footer>
			&copy; <?php echo date('Y'); ?> &mdash; <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
		</footer>

	</body>
</html>