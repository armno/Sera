<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="X-UA-Compatible" content="chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- <meta name="viewport" content="width=device-width"> -->
		
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans|Quattrocento' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php if ( is_singular() && get_option('thread_comments') ) wp_enqueue_script('comment-reply'); ?>
		<?php wp_enqueue_script('jquery'); ?>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="header-wrap">
			<header>
				<h1 id="blog-name">
					<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
				</h1>

				<?php wp_nav_menu(array(
					'container' => 'nav',
					'theme_location' => 'top',
					'container_class' => 'main-navigation'
				)); ?>
			</header>
		</div>

		<div id="main">
