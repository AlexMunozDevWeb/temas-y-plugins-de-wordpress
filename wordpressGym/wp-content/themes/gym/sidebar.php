<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tema_vacio
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>
	
<aside id="secondary" class="widget-area">
	<h2>Sidebar aqui</h2>
	<?php
		dynamic_sidebar( 'sidebar_1' ); 
	?>
</aside><!-- #secondary -->
