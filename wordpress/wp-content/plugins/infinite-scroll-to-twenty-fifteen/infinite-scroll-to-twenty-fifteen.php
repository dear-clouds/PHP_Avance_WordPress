<?php
/*
Plugin Name: Infinite Scroll To Twenty Fifteen
Plugin URI: http://qass.im/my-plugins/
Description: One click add Infinite Scroll to Twenty Fifteen theme with animation effect.
Version: 1.0.1
Author: Qassim Hassan
Author URI: http://qass.im
License: GPLv2 or later
*/

/*  Copyright 2014  Qassim Hassan  (email : qassim.pay@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


// Add infinite scroll text messages field to reading page
function infinite_scroll_text_messages_field(){
	add_settings_section('infinite_scroll_section', 'Infinite Scroll Text Messages', 'text__messages__section', 'reading');
	
	add_settings_field( "load_text", "Loading Text Message", "load_text_callback_function", "reading", "infinite_scroll_section" );
	register_setting( 'reading', 'load_text' );
	
	add_settings_field( "done_text", "Finished Text Message", "done_text_callback_function", "reading", "infinite_scroll_section" );
	register_setting( 'reading', 'done_text' );
}
add_action( 'admin_init', 'infinite_scroll_text_messages_field' );

function text__messages__section(){
	echo '<p>This fields to change text messages.</p>';
}

function load_text_callback_function(){
	if (get_option( 'load_text' )){
		$msgText = get_option( 'load_text' );
	}else{
		$msgText = 'Loading posts ...';
	}
	?>
    <input name="load_text" type="text" value="<?php echo $msgText; ?>">
    <?php
}

function done_text_callback_function(){
	if (get_option( 'done_text' )){
		$finishedMsg = get_option( 'done_text' );
	}else{
		$finishedMsg = 'No more posts!';
	}
	?>
    <input name="done_text" type="text" value="<?php echo $finishedMsg; ?>">
    <?php
}


// Include javascript
function add__javascript__to__twenty__fifteen() {
	wp_enqueue_script( 'infinite-scroll-js', plugins_url( '/js/jquery.infinitescroll.min.js', __FILE__ ), array('jquery'), null, false); // infinite scroll
	wp_enqueue_script( 'wow-js', plugins_url( '/js/wow.js', __FILE__ ), array('jquery'), null, false); // wow animation
}
add_action('wp_enqueue_scripts', 'add__javascript__to__twenty__fifteen');


// Add infinite scroll to Twenty Fifteen theme
function twenty__fifteen__infinite__scroll() {
	if( !is_single() and !is_page() and !is_attachment() ){
		
	if (get_option( 'load_text' )){
		$msgText = get_option( 'load_text' );
	}else{
		$msgText = 'Loading posts ...'; // default message is Loading posts ...
	}
	
	if (get_option( 'done_text' )){
		$finishedMsg = get_option( 'done_text' );
	}else{
		$finishedMsg = 'No more posts!'; // default message is No more posts!
	}
	
	$loading = '<p style="text-align:center;margin-top:8.3333%;">'.$msgText.'</p>';
	
	$done = '<p style="text-align:center;margin-top:8.3333%;">'.$finishedMsg.'</p>';
	?>
    
    <div id="infinite-scroll-twenty-fifteen">
		<?php next_posts_link('Next page'); ?>
	</div>
    
		<script type="text/javascript">
			jQuery(document).ready(function() {
  				jQuery('#main').infinitescroll({
    				navSelector  : "div#infinite-scroll-twenty-fifteen",  // selector for the paged navigation (it will be hidden)
    				nextSelector : "div#infinite-scroll-twenty-fifteen a:first",  // selector for the NEXT link (to page number 2)
    				itemSelector : "#main article.hentry",  // selector for all items you'll retrieve
					debug        : false,  // disable debug messaging ( to console.log )
					loading: {
						img   		 : "", // loading image
						msgText  	 : '<?php echo $loading; ?>',  // loading message
						finishedMsg  : '<?php echo $done; ?>' // finished message
					},
					animate    : false, // if the page will do an animated scroll when new content loads
					dataType   : 'html'  // data type is html
  				});
				new WOW().init(); // activate wow animation
				jQuery('nav.navigation').remove(); // remove navigation
			});
		</script>
        <style type="text/css">
			div#infinite-scroll-twenty-fifteen, nav.navigation, #infscr-loading img{
				display:none !important;
			}
			
			article.hentry:first-child{
				animation-name:none !important;
				-webkit-animation-name:none !important;
			}
			
			.animated{
  				-webkit-animation-duration: 1s;
 	 			animation-duration: 1s;
  				-webkit-animation-fill-mode: both;
  				animation-fill-mode: both;
			}

			.fadeInUp{
  				-webkit-animation-name: fadeInUp;
  				animation-name: fadeInUp;
			}

			@-webkit-keyframes fadeInUp {
  				0%{
					opacity: 0;
    				-webkit-transform: translateY(20px);
    				transform: translateY(20px);
  				}

  				100%{
    				opacity: 1;
    				-webkit-transform: translateY(0);
    				transform: translateY(0);
  				}
			}
			
			@keyframes fadeInUp {
  				0%{
    				opacity: 0;
    				-webkit-transform: translateY(20px);
    				-ms-transform: translateY(20px);
    				transform: translateY(20px);
  				}

  				100%{
    				opacity: 1;
    				-webkit-transform: translateY(0);
    				-ms-transform: translateY(0);
    				transform: translateY(0);
  				}
			}
		</style>
	<?php
	}
}
add_action( 'wp_footer', 'twenty__fifteen__infinite__scroll', 100 );


// Add "wow" and "fadeInDown" classes to post classes
function add__animation__classes($classes){
	if ( !is_single() and !is_page() ){
		$classes[] = 'wow fadeInUp';
	}
	return $classes;
}
add_filter( 'post_class', 'add__animation__classes' );

?>