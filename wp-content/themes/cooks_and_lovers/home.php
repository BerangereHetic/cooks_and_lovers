<?php get_header(); //appel du template header.php  ?>
    
<div id="content" class="container">
  <div class="row">
    <h1 class="col-sm-12">Les derniers profils ajoutés</h1>
  </div>
  
  <!-- appel du slider "meta slider" -->
  <div class="row">
      <div class="col-sm-12">
          <?php 
            echo do_shortcode("[metaslider id=34]"); 
          ?>
      </div>
  </div>
  
  <div class="row">
    <?php

    //on affiche 6 profils dans cette partie triés par date par ordre ...
    $args = array(
      'post_type' => 'profils',
      'posts_per_page' => 6,
      'orderby' => 'date',
	     'order'   => 'DESC',
    );
    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();

    ?>
     
      <article class="col-sm-12 col-md-4">
        <?php
            if(has_post_thumbnail())
            {
              echo '<div class="thumbnail">';
                //remplacer cette ligne
                the_post_thumbnail("hub_profils_thumbnail");
              echo '</div>';
            }
         ?>
         
        <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <h2>C&L depuis le <?php the_time('F jS, Y') ?></h2>
        <p><?php ?></p>
        <p><?php the_excerpt(); ?></p>
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

<?php get_footer(); //appel du template footer.php ?>
