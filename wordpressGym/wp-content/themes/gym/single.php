<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tema_vacio
 */

get_header();
?>

	<main id="primary" class="site-main">
	
	<?php the_content(); ?>    

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
