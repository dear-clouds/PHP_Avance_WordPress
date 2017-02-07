<!--THIS INCLUDES HEADER.PHP--><?php get_header(); ?><!-- END -->


<!--THIS PULLS YOUR POSTS & INFO FROM DATABASE-->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<!--END-->


<p class="titre"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color:#FFFFFF;">
<tr>
    <td><div class="info">On <?php the_time('F j, Y') ?> @ <?php the_time() ?></div></td>
</tr>
</table>
<div class="texte"><?php the_content(__('(more...)')); ?>

</div>
</p>
<!--NECESSARY-->
<?php endwhile; ?>
<!--END-->

		

<!--NECESSARY-->
<?php else : ?>
<div class="texte" align="center">Not Found</div>
<p class="texte">
  <?php _e("Sorry, but you are looking for something that isn't here."); ?>
  <?php include (TEMPLATEPATH . "/searchform.php"); ?>
  
  <?php endif; ?>
  <!--END-->
  
  
  
  <!--THIS INCLUDES FOOTER.PHP-->
  <?php get_footer(); ?>
  
