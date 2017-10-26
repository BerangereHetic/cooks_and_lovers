<footer id="footer">
    <div clas="container">
        <div class="row">
            <div class="col-xs-12">
                <?php // SYNTAXE : wp_nav_menu( array $args = array() )
                    $args=array(
                        'theme_location' => 'header', // nom du slug
                        'menu' => 'header_fr', // nom à donner cette occurence du menu
                        'menu_class' => 'menu_header', // class à attribuer au menu
                        'menu_id' => 'menu_id' // id à attribuer au menu
                        // voir les autres arguments possibles sur le codex
                    );
                    wp_nav_menu($args);
                ?>
                
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <?php
                            // 'Sidebar Footer' = Sidebar name or id
                            if ( is_active_sidebar( 'Sidebar Footer' ) ) { 
                        ?>
                        <ul id="sidebar">
                            <?php dynamic_sidebar( 'Sidebar Footer' ); ?>
                        </ul>
                        
                        <?php } ?>
                    </div>
                    
                    <div class="col-xs-12 col-md-4">
                        <?php    
                            if ( is_active_sidebar( 'Sidebar Footer 2' ) ) { 
                        ?>
                        <ul id="sidebar">
                            <?php dynamic_sidebar( 'Sidebar Footer 2' ); ?>
                        </ul>

                        <?php } ?>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <?php    
                            if ( is_active_sidebar( 'Sidebar Footer 3' ) ) { 
                        ?>
                        <ul id="sidebar">
                            <?php dynamic_sidebar( 'Sidebar Footer 3' ); ?>
                        </ul>

                        <?php } ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</footer>

        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>
    </body>
</html>
