<?php
/*
Template Name: Infinite
*/
?>

<?php get_header(); ?>


<?php if (have_posts()) : ?>

	<?php query_posts('post_type=post' . '&paged=' . get_query_var('paged')); while (have_posts()) : the_post(); ?>

	<?php if (is_sticky()): ?>

	<p class="titre"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="70%"><div class="info">Le <?php the_time('j F, Y') ?> @ <?php the_time() ?> par <?php the_author(); ?></div></td>
			<td width="30%"><div class="postcomment"><?php comments_popup_link('Poster un commentaire', '1 commentaire', '% commentaires'); ?></div></td>
		</tr>
	</table>
	<div class="texte"><?php the_content(__('(more...)')); ?>

		<?php comments_template() ?>

	</div>

<?php else : ?>
	<p class="titre"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="70%"><div class="info">Le <?php the_time('j F, Y') ?> @ <?php the_time() ?> par <?php the_author(); ?></div></td>
			<td width="30%"><div class="postcomment"><?php comments_popup_link('Poster un commentaire', '1 commentaire', '% commentaires'); ?></div></td>
		</tr>
	</table>
	<div class="texte"><?php the_content(__('(more...)')); ?>

		<?php comments_template() ?>

	</div>

<?php endif; ?>
<?php endwhile; ?>

<div class="texte" align="center"><br/><br/>
	<?php if(function_exists('wp_paginate')) { wp_paginate(); } ?>  
</div>

<?php endif; ?>

</div><!--end postarea-->
</div><!--end content-->
<?php get_footer(); ?>