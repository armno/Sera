<?php 
register_nav_menu( 'top', 'Top Menu' );

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
    	'before_title' => '<h3>',
    	'after_title' => '</h3>'
	    ));
}

?>