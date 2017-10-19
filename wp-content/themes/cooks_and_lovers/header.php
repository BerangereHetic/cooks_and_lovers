<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        
        <!-- Appel du fichier style.css de notre thème -->
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Merriweather+Sans:300,300i,400,400i,700,700i,800,800i|Pacifico" rel="stylesheet">
        
        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!--
            Tout le contenu de la partie head de mon site
         -->

        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
          <div class="container">
            <div class="col-sm-12">
             
              <!-- gestion du logo, du nom du site et du slogan  -->
              <!-- informations paramétrables dans le back-office "Réglages" -->
              <img src="<?= IMAGES_URL; ?>/food-logo.jpg" alt="<?php bloginfo("title"); ?>" class="logo"/>
              <h4><a href="<?php bloginfo("url"); ?>" title="<?php bloginfo("title"); ?>"><?php bloginfo("title"); ?></a></h4>
              <h5><?php bloginfo( "description" );?></h5>
            </div>

          </div>
        <!-- Tout le contenu de l entête de mon site -->
        </header>
        
        <div class="clearBoth"></div>
        
        <div class="menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <?php 
                            wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) );
                        ?>
                    </div>
                    
                    <div class="offset-sm-2"></div>
                </div>
            </div>
        </div>
