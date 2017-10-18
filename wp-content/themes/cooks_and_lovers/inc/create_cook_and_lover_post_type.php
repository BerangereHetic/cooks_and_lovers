<?php

function ajout_custom_type_film() {
  $post_type = "profiles";
$labels = array(
        'name'               => 'Profiles des C&L',
        'singular_name'      => 'Profile',
        'all_items'          => 'Tous les Cooks and Lovers',
        'add_new'            => 'Ajouter un profil',
        'add_new_item'       => 'Ajouter un profil',
        'edit_item'          => "Modifier un profil",
        'new_item'           => 'Nouveau profil',
        'view_item'          => "Voir le profil",
        'search_items'       => 'Chercher un profil',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat dans la corbeille',
        'parent_item_colon'  => 'Votre C&L se trouve dans la catégorie :',
        'menu_name'          => 'Cooks & Lovers',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt',  'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-video-alt2',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );

    $taxonomy = "food";
    $object_type = array("profiles");
    $args = array(
          'label' => __( 'Genre' ),
          'rewrite' => array( 'slug' => 'food' ),
          'hierarchical' => true,
      );
    register_taxonomy( $taxonomy, $object_type, $args );

    $taxonomy = "regions";
    $object_type = array("profiles");
    $args = array(
          'label' => __( 'Géolocalisation' ),
          'rewrite' => array( 'slug' => 'regions' ),
          'hierarchical' => false,
      );
    register_taxonomy( $taxonomy, $object_type, $args );


}
add_action( 'init', 'ajout_custom_type_film' );
