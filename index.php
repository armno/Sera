<?php get_header(); ?>
				<h3>blog</h3>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article <?php post_class(); ?>>
						<h2 class="post-title">
							<span><?php the_date('Md'); ?></span>&nbsp;&mdash;&nbsp;<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<?php #the_content('(more ...)'); ?>
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>