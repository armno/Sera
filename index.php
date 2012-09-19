<?php get_header(); ?>
<?php get_sidebar(); ?>
			<div class="content">
				<h3>blog</h3>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article <?php post_class(); ?>>
						<div class="post-thumbnail">
							<?php 
							if ( has_post_thumbnail() ) :
								the_post_thumbnail('thumbnail');
							else : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/app.png" alt="">
							<?php endif; ?>
						</div>
						<h2 class="post-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="post-time"><?php the_date('F d, Y'); ?></div>

						<?php the_excerpt(); ?>
					</article>

				<?php endwhile;
					if (function_exists('wp_pagenavi')) : ?>
						<?php wp_pagenavi(); ?>
					<?php else :
						if ( $wp_query->max_num_pages > 1 ) : ?>
							<nav class="pagination">
								<div class="previous">
									<?php next_posts_link('&larr; Older Posts'); ?>
								</div>
								<div class="next">
									<?php previous_posts_link('Newer Posts &rarr;'); ?>
								</div>
							</nav>
						<?php endif;
					endif;
				else : ?>
					<p>Sorry, no posts found.</p>
				<?php endif; ?>
			</div><!-- .content -->

<?php get_footer(); ?>