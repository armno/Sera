<?php
// Options Page Functions

/**
 * Saves form data into wordpress options when data is submitted
 **/
if ( isset($_POST['social-media']) ) {
	sera_save_data($_POST);
	?>
	<div id="setting-error-settings_updated" class="updated settings-error"> 
		<p>
			<strong>Settings saved.</strong>
		</p>
	</div>
	<?php
}

/**
 * Update theme options
 * 
 * @param array $data an array of data to be updated
 * @return void
 * @author ArmNo
 **/
function sera_save_data( $data ) {
    update_option('sera_facebook_url', $data['facebook-page']);
    update_option('sera_twitter_username', $data['twitter-username']);
    update_option('sera_flickr_username', $data['flickr-username']);
    update_option('sera_feeds_url', $data['rss-url']);
}

/**
 * Tells WordPress to add new menu item in admin
 *
 * @param null
 * @return void
 * @author ArmNo
 **/
function themeoptions_admin_menu()
{
	// here's where we add our theme options page link to the dashboard sidebar
	add_menu_page("Sera Options", "Sera Options", 'edit_themes', basename(__FILE__), 'themeoptions_page');
}

/**
 * Displays content in theme option page
 *
 * @param null
 * @return void
 * @author ArmNo
 **/
function themeoptions_page()
{
	// here is the main function that will generate our options page
	?>
	<div class="wrap sera-options">
		<div id="icon-themes" class="icon32"><br></div>
		<h2>Sera Theme Options</h2>
		<p>
			I will put some content &amp; documentation here.
		</p>
		<h3>Possible options</h3>
		<ul>
			<li>Layout</li>
			<li>Colors (background, text, links)</li>
			<li>Main Menu Icons</li>
			<li>Blog Logo</li>
		</ul>

		<h3>Social Networks</h3>
		<form action="admin.php?page=theme-options.php" method="post">
			<input type="hidden" name="social-media" value="1">
			
			<div class="form-input">
				<label for="facebook-page">Facebook Page URL</label>
				<input type="text" name="facebook-page" id="facebook-page" placeholder="e.g. http://www.facebook.com/pagename" value="<?php echo get_option('sera_facebook_url'); ?>">
			</div>

			<div class="form-input">
				<label for="twitter-username">Twitter Username</label>
				<input type="text" name="twitter-username" id="twitter-username" placeholder="e.g. armno (without @)" value="<?php echo get_option('sera_twitter_username'); ?>">
			</div>

			<div class="form-input">
				<label for="flickr-username">Flickr Username</label>
				<input type="text" name="flickr-username" id="flickr-username" placeholder="e.g. armno" value="<?php echo get_option('sera_flickr_username'); ?>">
			</div>

			<div class="form-input">
				<label for="rss-url">RSS Feed URL</label>
				<input type="text" name="rss-url" id="rss-url" placeholder="e.g. http://www.yourblog.com/feed" value="<?php echo get_option('sera_feeds_url'); ?>">
			</div>
			<input type="submit" value="Submit" class="button-primary">
		</form>
	</div>

	<style type="text/css">
		/*  =================
		    Theme Options
		    ============== */
		.sera-options label {
		    display: inline-block;
		    min-width: 150px;
		}

		.sera-options .form-input {
			margin: 10px 0;
		}

		.sera-options .form-input input[type=text] {
			width: 300px;
		}
	</style>
	
	<?php
}

add_action('admin_menu', 'themeoptions_admin_menu');

add_filter('jpeg_quality', function($arg){return 100;});
?>
