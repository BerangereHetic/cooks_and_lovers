<?php get_header(); //appel du template header.php  ?>

<div id="content" class="container">
  <div class="row">
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
      <article class="col-sm-12">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <?php
                    if(has_post_thumbnail())
                    {
                      echo '<div class="thumbnail">';
                        //peut-être changer cette ligne
                        the_post_thumbnail("hub_profils_thumbnail");
                      echo '</div>';
                    }
                 ?>
            </div>
            <div class="col-sm-12 col-md-3">
                <p><?php the_title(); ?></p>
                <p>Posté le <?php the_time('F jS, Y') ?></p>
                <p><?php the_content(); ?></p>

                <p><?php the_field('statut'); ?></p>

                <p><?php the_field('age'); ?></p>
            </div>
            
        </div>
        
      </article>

    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>
  </div>
</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>
