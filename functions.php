<?php 

function custom_login() { 
	echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/css/login.css" />'; 
}
add_action('login_head', 'custom_login');

register_nav_menu( 'top', 'Top Menu' );

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
    	'before_title' => '<h3>',
    	'after_title' => '</h3>'
	    ));
}

function sera_comments( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;

	switch ( $comment->comment_type ) :
	 	case '':
	 		?>
			<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
				<div class="avatar">
					<?php echo get_avatar( $comment->comment_author_email, 64 ); ?>
				</div>
				<div class="comment-text">
					<h4><?php echo get_comment_author_link(); ?></h4>
					<p class="comment-time"><?php echo get_comment_date(); ?></p>
					<?php comment_text() ?>
				</div>
				<div class="reply">
		         	<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		        </div>
	 		<?php
	 		break;
	 	
	 	case 'trackback':
	 	case 'pingback' : 
	 		?>
	 		<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
	 			<span>Trackback: </span>
				<?php echo get_comment_author_link(); ?>
				<span class="comment-time"> &mdash; <?php echo get_comment_date(); ?></span>
	 		<?php
	 		break;
	endswitch; ?>
	
	<?php
}

// enable featured image for posts and pages
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}

// include theme's javascript
wp_enqueue_script('sera-js', get_template_directory_uri().'/js/script.js', 'jquery', '1.0', true);

// theme options
require_once ( get_template_directory() . '/theme-options.php' );