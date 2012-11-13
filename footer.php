		</div><!-- #main -->
		<footer class="grid grid-pad">
			<p>
				<strong><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?> &ndash; <?php bloginfo('description'); ?></a></strong> is running on <a href="http://wordpress.org">WordPress</a> and <a href="https://github.com/armno/sera">Sera Theme</a>.
			</p>
			<!-- <p>Made in Chiang Mai.</p> -->

			<section class="commits">
				<h4>Latest commits on <a href="https://github.com/armno/Sera">Github</a></h4>
				<ul class="commits-list" id="commits-list">
				</ul>
			</section>
			<script>
				jQuery(function($){
					// disable commits displaying for all touch devices
					if ( Modernizr.touch ) {
						var commitSection = document.querySelector('.commits');
						commitSection.parentNode.removeChild(commitSection);
					} else {
						$.getJSON('https://api.github.com/repos/armno/Sera/commits',
							function(commits) {
								var fragment = document.createDocumentFragment(),
									i = 0, 
									l = commits.length,
									ul = document.getElementById('commits-list'),
									a,
									li,
									msg;

								for ( ; i < l; i++ ) {

									a = document.createElement('a');
									a.setAttribute('href', 'https://github.com/armno/Sera/commit/' + commits[i].sha);
									a.setAttribute('target', '_blank');
									a.textContent = commits[i].sha.substring(0,7);

									msg = document.createTextNode(' ' + commits[i].commit.message);
									
									li = document.createElement('li');
									li.appendChild(a);
									li.appendChild(msg);

									fragment.appendChild(li);
								}

								ul.appendChild(fragment);
							});
					}
				});
			</script>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>