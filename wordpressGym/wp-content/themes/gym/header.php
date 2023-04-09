<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tema_vacio
 */

?>
<!doctype html>
<!-- Languge attribute pone el idioma en el que se instala wordpress -->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- wp_head() añade los script o la información del functions o acciones del header -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header header">

	<div class="contenedor barra-navegacion">
		<div class="logo">
			<img src="<?php echo get_template_directory_uri() ?>\img\logo.svg" alt=""> 
		</div>
		<nav id="site-navigation" class="main-navigation">
			<?php 
				//Se le pasa el menu que queremos que se muestre
				$args = array(
					'theme_location'  => 'menu-principal',
					'container'			  => 'nav',
					'container_class'	=> 'menu-principal',
				);
				wp_nav_menu( $args );
			?>
		</nav><!-- #site-navigation -->
	</div>

	</header><!-- #masthead -->
