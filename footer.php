		</div><!-- #main -->
		<footer>
			<p>
				<strong><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></strong> is powered by <a href="http://wordpress.org">WordPress</a> and <a href="https://github.com/armno/sera">Sera Theme</a>.
			</p>
			<!-- <p>Made in Chiang Mai.</p> -->

			<section class="commits">
				<h4>Latest commits on <a href="https://github.com/armno/Sera">Github</a></h4>
				<ul class="commits-list" id="commits-list">
				</ul>
			</section>
			<script>
				jQuery(function($){
					$.getJSON('https://api.github.com/repos/armno/Sera/commits',
						function(commits) {
							var fragment = document.createDocumentFragment(),
								i = 0, 
								l = commits.length,
								ul = document.getElementById('commits-list'),
								a,
								li,
								sha,
								msg,
								href,
								target;

							for ( ; i < l; i++ ) {

								a = document.createElement('a');
								href = document.createAttribute('href');
								href.nodeValue = 'https://github.com/armno/Sera/commit/' + commits[i].sha;
								target = document.createAttribute('target');
								target.nodeValue = '_blank';

								a.setAttributeNode(href);
								a.setAttributeNode(target);
								a.textContent = commits[i].sha.substring(0,7);

								msg = document.createTextNode(' ' + commits[i].commit.message);
								
								li = document.createElement('li');
								li.appendChild(a);
								li.appendChild(msg);

								fragment.appendChild(li);
							}

							ul.appendChild(fragment);
						});

				});
			</script>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>