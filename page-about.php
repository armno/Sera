<?php 
/*
Template Name: About
*/
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="content single page-about">
			<article <?php post_class(); ?>>
				<h2 class="post-title"><?php the_title(); ?></h2>
				
				<?php the_content(); ?>
			</article>
	</div><!-- .content -->
<?php endwhile;
	else : ?>
	<p>Sorry, no pages found.</p>
	<?php endif; ?>
<?php get_footer(); ?>