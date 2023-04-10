<?php
  while ( have_posts() ) : the_post();
    the_title( '<h1 class="text-center text-primary">', '</h1>' );
    
    if( has_post_thumbnail() ):
      the_post_thumbnail( 'full', array( 'class' => 'imagen-destacada' ) );
    endif;

    the_content();
    // get_template_part( 'template-parts/content', 'page' );
  endwhile; // End of the loop.
