<div class="comments">
<?php if ( have_comments() ) : ?>
	<h3><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h3>

	<!-- View functions.php for comment markup -->
	<ol class="comments-list">
		<?php wp_list_comments('type=comment&callback=sera_comments'); ?>
	</ol>

	<?php previous_comments_link() ?> <?php next_comments_link() ?>

<?php else : // this is displayed if there are no comments so far ?>

<?php endif; // if you delete this the sky will fall on your head ?>
<?php comment_form(array(
	'comment_notes_before' => null,
	'title_reply' => __('Leave a Comment')
)); ?>

</div>