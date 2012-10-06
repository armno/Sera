<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php /*
	<aside class="sidebar">
		<ul>
			<li>Posted <div><?php the_date('F d, Y'); ?></div></li>
			<li>By <div><?php the_author(); ?></div></li>
			<li>Category <div><?php the_category(); ?></div></li>
			<li><?php the_tags('Tags<div>','&nbsp;&nbsp;', '</div>'); ?></li>
			<?php if(function_exists('the_views')) : ?>
				<li>Views <div><?php the_views(); ?></div></li>
			<?php endif; ?>
			<?php edit_post_link('edit', '<li>', '</li>'); ?>
		</ul>

	</aside>
	*/ ?>
	<div class="content single">
			<article <?php post_class(); ?>>
				<h2 class="post-title"><?php the_title(); ?></h2>
				<small class="meta">
					<span class="published-date"><?php the_date('F d, Y'); ?></span> in 
					<span class="category-list"><?php the_category(); ?></span>
				</small>
				
				<?php the_content(); ?>

				<section class="sharing">
					<div id="fb-root"></div>

					<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php the_title(); ?>" data-url="<?php echo get_permalink(); ?>" data-count="horizontal" data-via="armno" data-related="armno">Tweet</a>
					<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>

					<g:plusone size="medium"></g:plusone>

					<div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-layout="button_count" data-send="false" data-width="70" data-show-faces="false"></div>

					<script>
					  (function() {
					    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
					    po.src = 'https://apis.google.com/js/plusone.js';
					    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
					  })();
					</script>

					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=183426421717643";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>

					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script"," -wjs");</script>
				</section>

				<div class="previous-next-posts">
					<div class="left">
						<?php previous_post_link('%link'); ?>
					</div>
					<div class="right">
						<?php next_post_link('%link'); ?>
					</div>
				</div>

		        <section class="related-posts">
					<?php
					    $tags = get_the_tags();

					    if ( !empty($tags) ) :
						    foreach ( $tags as $tag ) :
						    	$current_tag = $tag->term_id;
						    	$args = array(
								    'tag__in' => array($current_tag),
								    'post__not_in' => array($post->ID),
								    'showposts'=>5,
								    'ignore_sticky_posts'=>1
								);

								$my_query = new WP_Query($args);

								if ( $my_query->have_posts() ) : ?>
									<h4>Related Posts</h4>
								    <ul>
								    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
								    	<li>
									    <a href="<?php the_permalink() ?>" rel="bookmark" title="
									    Permanent Link to <?php the_title_attribute(); ?>">
									    	<div>
									    	<?php if ( has_post_thumbnail() ) :
												the_post_thumbnail('thumbnail');
											else : ?>
												<img src="<?php echo get_template_directory_uri(); ?>/img/app.png" alt="">
											<?php endif; ?>
									    	</div>
								            <?php the_title(); ?>
								        </a>
								        </li>
								    <?php endwhile;  ?>
								    </ul>
								<?php
									break;
								endif;

						    endforeach;
						    wp_reset_query();
					    endif;
					?>
				</section>

				<section class="like-box">
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=183426421717643";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
					<div class="fb-like-box" data-href="http://www.facebook.com/armnoblog" data-width="874" data-show-faces="true" data-stream="false" data-header="false"></div>
				</section>

			</article>
			<?php comments_template(); ?> 
	</div><!-- .content -->
<?php endwhile;

else : ?>
	<p>Sorry, no posts found.</p>
<?php endif; ?>

<?php get_footer(); ?>