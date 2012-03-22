<?php
// Options Page Functions

function themeoptions_admin_menu()
{
	// here's where we add our theme options page link to the dashboard sidebar
	add_menu_page("Sera Options", "Sera Options", 'edit_themes', basename(__FILE__), 'themeoptions_page');
}

function themeoptions_page()
{
	// here is the main function that will generate our options page
	?>
	<div class="wrap">
		<div id="icon-themes" class="icon32"><br></div>
		<h2>Sera Theme Options</h2>
		<p>
			I will put some content &amp; documentation here.
		</p>
		<h3>Possible options</h3>
		<ul>
			<li>Layout</li>
			<li>Colors (background, text, links)</li>
			<li>Social Medias</li>
			<li>Main Menu Icons</li>
			<li>Blog Logo</li>
		</ul>
	</div>
	
	<?php
}

add_action('admin_menu', 'themeoptions_admin_menu');

?>
