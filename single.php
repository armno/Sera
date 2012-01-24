<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<aside class="sidebar">
		<ul>
			<li>Posted <div><?php the_date('F d, Y'); ?></div></li>
			<li>By <div><?php the_author(); ?></div></li>
			<li>Category <div><?php the_category(); ?></div></li>
			<li><?php the_tags('Tags<div>','&nbsp;&nbsp;', '</div>'); ?></li>
		</ul>

 		<section class="social-buttons clearfix">

			<div id="fb-root"></div>
			<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>" data-count="horizontal" data-via="armno" data-related="armno">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>

			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) {return;}
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

			<div class="fb-like" data-send="false" data-width="60" data-show-faces="true" data-layout="button_count"></div>

        </section>

        <p id="jump">
	        <a href="#main">back to top</a>
        </p>
	</aside>

	<div class="content single">
			<article <?php post_class(); ?>>
				<h2 class="post-title"><?php the_title(); ?></h2>
				
				<?php the_content(); ?>
			</article>
			<?php comments_template(); ?> 
	</div><!-- .content -->
<?php endwhile;

else : ?>
	<p>Sorry, no posts found.</p>
<?php endif; ?>

<?php get_footer(); ?>