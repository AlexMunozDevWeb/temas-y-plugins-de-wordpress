<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tema_vacio
 */
// get_header() -> carga el header si esta en la misma carpeta
get_header();
?>

	<main id="primary" class="site-main contenedor seccion">

		<?php get_template_part( 'template-parts/pagina'); ?>    

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
