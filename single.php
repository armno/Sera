<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<aside class="sidebar">
		<ul>
			<li>Posted <div><?php the_date('F d, Y'); ?></div></li>
			<li>By <div><?php the_author(); ?></div></li>
			<li>Category <div><?php the_category(); ?></div></li>
			<li><?php the_tags('Tags<div>','&nbsp;&nbsp;', '</div>'); ?></li>
		</ul>

        <p id="jump">
	        <a href="#main">back to top</a>
        </p>
	</aside>

	<div class="content single">
			<article <?php post_class(); ?>>
				<h2 class="post-title"><?php the_title(); ?></h2>
				
				<?php the_content(); ?>

				<section class="social-buttons clearfix">
					<h4>Share</h4>
					<div id="fb-root"></div>

					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) {return;}
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>

					<div class="fb-like" data-send="false" data-width="40" data-show-faces="true" data-layout="button_count"></div>

					<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>" data-count="horizontal" data-via="armno" data-related="armno">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>

		        </section>

		        <section class="related-posts">
					<?php
					    $tags = get_the_tags();

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
								<h4>Related Posts (beta)</h4>
							    <ul>
							    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
							    	<li>
								    <a href="<?php the_permalink() ?>" rel="bookmark" title="
								    Permanent Link to <?php the_title_attribute(); ?>">
							            <?php the_title(); ?></a>
							        </li>
							    <?php endwhile;  ?>
							    </ul>
							<?php
								break;
							endif;

					    endforeach;
					    wp_reset_query();
					?>
				</section>
			</article>
			<?php comments_template(); ?> 
	</div><!-- .content -->
<?php endwhile;

else : ?>
	<p>Sorry, no posts found.</p>
<?php endif; ?>

<?php get_footer(); ?>