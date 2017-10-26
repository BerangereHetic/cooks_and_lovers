<?php get_header();  ?>

<div class="container">
    <div class="row">
        <h1 class="col-sm-12">Recherche par type de cuistos</h1>
    </div>
</div>

<div class="row">
    <?php

        //on affiche 6 profils dans cette partie triés par date par ordre ...
//        $args = array(
//            
//            'taxonomy' => 'genre',
//            
//        );
    
        $taxonomy = array(
            'post_type' => 'genre',
        );

        $the_query = new WP_Query( $taxonomy );

        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();

    ?>
     
    <article class="col-sm-12 col-md-3">
        <p><?php the_field('cuisiniers'); ?></p>
        
    </article>
    
    <?php
            }
        }
      /* Restore original Post Data */
      wp_reset_postdata();
    ?>
    
  </div>
  
  <div class="pagination">
    <?php wp_pagenavi(array( 'query' => $the_query )); ?>
  </div>
</div> <!-- /content -->
<?php get_footer(); ?>