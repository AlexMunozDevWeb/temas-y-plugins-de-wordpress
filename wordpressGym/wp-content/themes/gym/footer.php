<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tema_vacio
 */

?>

	<footer class="footer contenedor">
		<hr>
		<div class="contenido-footer">
			<?php 
				//Se le pasa el menu que queremos que se muestre
				$args = array(
					'theme_location'  => 'menu-principal',
					'container'			  => 'nav',
					'container_class'	=> 'menu-principal',
				);
				wp_nav_menu( $args );
			?>
			<p class="copyright">Todos los derchos reservados. <?php echo get_bloginfo('name') . ' ' . date( 'Y' ) ?></p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
