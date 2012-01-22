<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php if ( is_singular() && get_option('thread_comments') ) wp_enqueue_script('comment-reply'); ?>
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
