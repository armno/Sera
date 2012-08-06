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
					<span class="published-date"><?php the_date('F d, Y'); ?></span>
					<span class="category-list"><?php the_category(); ?></span>
				</small>
				
				<?php the_content(); ?>

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
					    endif;
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