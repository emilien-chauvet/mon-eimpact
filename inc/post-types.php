<?php

function simulations_custom_post_type() {

	$labels = array(
		'name'                => _x( 'Simulations', 'Post Type General Name'),
		'singular_name'       => _x( 'Simulation', 'Post Type Singular Name'),
		'menu_name'           => __( 'Simulations'),
		'all_items'           => __( 'Toutes les simulations'),
		'view_item'           => __( 'Voir la simulation'),
		'add_new_item'        => __( 'Ajouter une simulation'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la simulation'),
		'update_item'         => __( 'Modifier la simulation'),
		'search_items'        => __( 'Rechercher une simulation'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Simulations'),
		'description'         => __( 'Tout savoir sur le simulateur'),
		'labels'              => $labels,
        'menu_position' => 5,
		'menu_icon'           => 'dashicons-analytics',
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'custom-fields' ),
		/* 
		* Différentes options supplémentaires
		*/	
		'show_in_rest'        => true,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'simulations'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'simulation', $args );

}

add_action( 'init', 'simulations_custom_post_type' );
