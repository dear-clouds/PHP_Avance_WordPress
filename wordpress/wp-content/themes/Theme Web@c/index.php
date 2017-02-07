<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>


	<p class="titre"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="70%"><div class="info">Le <?php the_time('j F, Y') ?> @ <?php the_time() ?> par <?php the_author(); ?></div></td>
			<td width="30%"><div class="postcomment"><?php comments_popup_link('Poster un commentaire', '1 commentaire', '% commentaires'); ?></div></td>
		</tr>
	</table>
	<div class="texte"><?php the_content(__('(more...)')); ?>

		<?php comments_template(); ?>

	</div>
</p>

<?php endwhile; ?>



<div class="texte" align="center"><br/><br/>
	<?php if(function_exists('wp_paginate')) { wp_paginate(); } ?>  
</div>






<?php else : ?>
	<div class="texte" align="center">Not Found</div>
	<p class="texte">
		<?php _e("Sorry, but you are looking for something that isn't here."); ?>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	<?php get_footer(); ?>
