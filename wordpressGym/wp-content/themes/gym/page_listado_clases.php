<?php
/**
 * Template Name: Listado de clases
 */
get_header();
?>

	<main class="site-main contenedor seccion">
    <ul class="listado-grid">
      <?php
        $args = array(
          'post_type' => 'gymfitness_clases',
        );

        $clases = new WP_Query( $args );
        while ( $clases->have_posts() ):
          $clases->the_post(); ?>

          <li class="card">
            <div class="contenido">
              <?php the_post_thumbnail(); ?>
              <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
              </a>
              <?php 
                $inicio = get_field( 'hora_inicio' );
                $fin = get_field( 'hora_fin' );
              ?>
              <p><?php the_field( 'dias_clases' ); ?> - <?php echo $inicio . " a " . $fin ?></p>
            </div>
          </li>

        <?php 
        endwhile;
        wp_reset_postdata();
      ?>
    </ul>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
