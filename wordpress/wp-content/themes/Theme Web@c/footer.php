

</td>

<td style="background: url('<?php bloginfo('template_url') ?>/images/Menu.jpg'); background-repeat: repeat-y;" valign="top" width="268" height="265" alt="">

	<div id="subpages">

		<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( ! empty ( $description ) ) :
			?>
		<?php echo esc_html( $description ); ?>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
	<nav role="navigation" class="navigation site-navigation secondary-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
	</nav>
<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>


<div class="sorties">



	<br><br>
	<h1>Navigation</h1><div class="navig2">
	<a href="#">Link</a>
	<a href="#">Link</a>
	<a href="#">Link</a>
	<a href="#">Link</a>
</div>

<?php

if($post->post_parent)

	$children = wp_list_pages("sort_column=menu_order&title_li=&child_of=".$post->post_parent."&echo=0"); else

$children = wp_list_pages("sort_column=menu_order&title_li=&child_of=".$post->ID."&echo=0");

if ($children) { ?>

<br/><br/><p class="small">PAGES</p> 

<li>

	<ul>

		<?php echo $children; ?>

	</ul></li>

	<?php } ?>	



</div>	</td>
<td colspan="2" style="background: url('./wp-content/themes/Theme Web@c/images/index_08.jpg'); background-repeat: repeat-y;" valign="top" width="21" height="265" alt=""></td>
</tr>
<tr>
	<td>
		<img src="./wp-content/themes/Theme Web@c/images/spacer.gif" width="14" height="1" alt=""></td>
		<td>
			<img src="./wp-content/themes/Theme Web@c/images/spacer.gif" width="647" height="1" alt=""></td>
			<td>
				<img src="./wp-content/themes/Theme Web@c/images/spacer.gif" width="268" height="1" alt=""></td>
				<td>
					<img src="./wp-content/themes/Theme Web@c/images/spacer.gif" width="9" height="1" alt=""></td>
					<td>
						<img src="./wp-content/themes/Theme Web@c/images/spacer.gif" width="12" height="1" alt=""></td>
					</tr>
				</table>

















				<!-- NAVIGATION -->
				<map name="navig"><area shape="rect" alt="" coords="38,14,107,37" href="index.php">
					<area shape="rect" alt="" coords="113,14,179,37" href="#" target="_blank">
					<area shape="rect" alt="" coords="186,14,254,37" href="#">
					<area shape="rect" alt="" coords="260,14,329,37" href="#">
					<area shape="rect" alt="" coords="337,14,404,37" href="#"></map>









				</body>
				</html>