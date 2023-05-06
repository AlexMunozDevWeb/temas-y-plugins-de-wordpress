<?php
  while ( have_posts() ) : the_post();
    the_title( '<h1 class="text-center text-primary">', '</h1>' );
    
    if( has_post_thumbnail() ):
      the_post_thumbnail( 'full', array( 'class' => 'imagen-destacada' ) );
    endif;

      $inicio = get_field( 'hora_inicio' );
      $fin = get_field( 'hora_fin' );
      ?>
      <p class="informacion-clase">
        <?php the_field( 'dias_clases' ); ?> - <?php echo $inicio . " a " . $fin ?>
      </p>

    <?php
    the_content();

  endwhile; // End of the loop.
