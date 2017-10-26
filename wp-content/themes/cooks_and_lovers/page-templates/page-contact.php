<?php
/*
Template Name: Page Contact
*/

get_header();
?>

<main>
    <div class="container">
        <div class="row">
            <?php
            // boucle WordPress
            if (have_posts()){
                while (have_posts()){
                    the_post();
            ?>
            
            <h1 class="col-xs-12 col-md-12"><?php the_title(); ?></h1>
            <div class="col-xs-12 col-md-12">
                <?php echo do_shortcode('[wpforms id="60" title="false" description="false"]'); ?>
            </div>
            
            <div class="col-xs-12 col-md-12">
                <?php the_content(); ?>
            </div>
            <?php 
                } 
            }
            ?>
        </div>
    </div>
</main>