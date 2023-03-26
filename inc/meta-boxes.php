<?php

// Ajout des différentes méta-boxes
function add_custom_meta_box() {
    add_meta_box(
        'metabox_resultat',
        'Résultat de la simulation',
        'afficher_metabox_resultat',
        'simulation',
        'normal',
        'high'
    );
    add_meta_box( 
        'custom_meta_box_choice',
        'Choix de l\'ordinateur',
        'custom_meta_box_callback_choice',
        'simulation',
        'normal',
        'high'
    );
    add_meta_box(
        'custom-meta-box',
        'Temps passé sur l\'ordinateur',
        'custom_meta_box_callback',
        'simulation',
        'normal',
        'high'
    );
    add_meta_box(
        'custom-meta-box-2',
        'Temps passé à visionner du contenu vidéo (YouTube/Netflix)',
        'custom_meta_box_callback_2',
        'simulation',
        'normal',
        'high'
    );
    add_meta_box(
        'custom-meta-box-3',
        'Temps passé à visionner du contenu live (Twitch/YouTube)',
        'custom_meta_box_callback_3',
        'simulation',
        'normal',
        'high'
    );
    add_meta_box(
        'custom-meta-box-4',
        'Temps passé en visioconférence (Teams/Zoom)',
        'custom_meta_box_callback_4',
        'simulation',
        'normal',
        'high'
    );
    add_meta_box(
        'custom-meta-box-5',
        'Mails envoyés',
        'custom_meta_box_callback_5',
        'simulation',
        'normal',
        'high'
    );
    add_meta_box(
        'custom-meta-box-6',
        'Temps passé sur des jeux-vidéos',
        'custom_meta_box_callback_6',
        'simulation',
        'normal',
        'high'
    );
    add_meta_box(
        'custom-meta-box-7',
        'Téléchargements',
        'custom_meta_box_callback_7',
        'simulation',
        'normal',
        'high'
    );
    add_meta_box(
        'custom-meta-box-8',
        'Temps passé à écouter de la musique (Spotify/Deezer)',
        'custom_meta_box_callback_8',
        'simulation',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'add_custom_meta_box' );

// -1 Fonction pour afficher la metaboxe du résultat de simulation
function afficher_metabox_resultat( $post ) {
    $total = get_post_meta( $post->ID, 'total', true );
    echo '<input type="text" name="total" value="' . esc_attr( $total ) . '" />';
}

// 0 Fonction qui affichera la méta box choix d'ordinateur
function custom_meta_box_callback_choice( $post ) {
    // Récupérer la valeur actuelle de la méta donnée
    $value = get_post_meta( $post->ID, 'custom_meta_key', true );

    // Éléments de la liste déroulante
    $options = array(
      'Ordinateur portable',
      'Ordinateur fixe',
    );
  
    // Afficher la liste déroulante
    echo '<label for="custom_meta_field">Choisir une option :</label>';
    echo '<select name="custom_meta_field" id="custom_meta_field">';
    foreach ( $options as $option ) {
      echo '<option value="' . esc_attr( $option ) . '" ' . selected( $value, $option, false ) . '>' . esc_html( $option ) . '</option>';
    }
    echo '</select>';
}

// 1 Afficher le champ de saisie pour "Temps passé sur l'ordinateur"
function custom_meta_box_callback( $post ) {
    $value = get_post_meta( $post->ID, '_mon_champ_personnalise', true );
    echo '<label for="mon-champ-personnalise">Nombre d\'heures(s) : </label>';
    echo '<input type="number" step="any" id="mon-champ-personnalise" name="mon_champ_personnalise" value="' . esc_attr( $value ) . '">';
}
// 2 Afficher le champ de saisie pour "Temps passé à visionner du contenu vidéo youtube/netflix"
function custom_meta_box_callback_2( $post ) {
    $value = get_post_meta( $post->ID, '_mon_champ_personnalise_2', true );
    echo '<label for="mon-champ-personnalise-2">Nombre d\'heures(s) : </label>';
    echo '<input type="number" step="any" id="mon-champ-personnalise_2" name="mon_champ_personnalise_2" value="' . esc_attr( $value ) . '">';
}
// 3 Afficher le champ de saisie pour "Temps passé à visionner du contenu live twitch/youtube"
function custom_meta_box_callback_3( $post ) {
    $value = get_post_meta( $post->ID, '_mon_champ_personnalise_3', true );
    echo '<label for="mon-champ-personnalise-3">Nombre d\'heures(s) : </label>';
    echo '<input type="number" step="any" id="mon-champ-personnalise-3" name="mon_champ_personnalise_3" value="' . esc_attr( $value ) . '">';
}
// 4 Afficher le champ de saisie pour "Temps passé en visioconférence teams/zoom"
function custom_meta_box_callback_4( $post ) {
    $value = get_post_meta( $post->ID, '_mon_champ_personnalise_4', true );
    echo '<label for="mon-champ-personnalise-4">Nombre d\'heures(s) : </label>';
    echo '<input type="number" step="any" id="mon-champ-personnalise-4" name="mon_champ_personnalise_4" value="' . esc_attr( $value ) . '">';
}
// 5 Afficher le champ de saisie pour "Nombre de mails envoyés"
function custom_meta_box_callback_5( $post ) {
    $value = get_post_meta( $post->ID, '_mon_champ_personnalise_5', true );
    echo '<label for="mon-champ-personnalise-5">Nombre : </label>';
    echo '<input type="number" step="any" id="mon-champ-personnalise-5" name="mon_champ_personnalise_5" value="' . esc_attr( $value ) . '">';
}
// 6 Afficher le champ de saisie pour "Temps passé sur les jeux-vidéos"
function custom_meta_box_callback_6( $post ) {
    $value = get_post_meta( $post->ID, '_mon_champ_personnalise_6', true );
    echo '<label for="mon-champ-personnalise-6">Nombre d\'heures(s) : </label>';
    echo '<input type="number" step="any" id="mon-champ-personnalise-6" name="mon_champ_personnalise_6" value="' . esc_attr( $value ) . '">';
}
// 7 Afficher le champ de saisie pour "Nombre de téléchargements"
function custom_meta_box_callback_7( $post ) {
    $value = get_post_meta( $post->ID, '_mon_champ_personnalise_7', true );
    echo '<label for="mon-champ-personnalise-7">Nombre : </label>';
    echo '<input type="number" step="any" id="mon-champ-personnalise-7" name="mon_champ_personnalise_7" value="' . esc_attr( $value ) . '">';
}
// 8 Afficher le champ de saisie pour "Temps passé à écouter de la musique"
function custom_meta_box_callback_8( $post ) {
    $value = get_post_meta( $post->ID, '_mon_champ_personnalise_8', true );
    echo '<label for="mon-champ-personnalise-8">Nombre d\'heures(s) : </label>';
    echo '<input type="number" step="any" id="mon-champ-personnalise-8" name="mon_champ_personnalise_8" value="' . esc_attr( $value ) . '">';
}


// 0 Sauvegarder la valeur de la méta donnée du choix d'ordinateur
function save_custom_meta( $post_id ) {
    if ( isset( $_POST['custom_meta_field'] ) ) {
        $value = sanitize_text_field( $_POST['custom_meta_field'] );
        update_post_meta( $post_id, 'custom_meta_key', $value );
    }
}
add_action( 'save_post_simulation', 'save_custom_meta' );

// 1 Enregistrer la valeur de "Temps passé sur l'ordinateur" lors de la sauvegarde du post
function save_custom_meta_box_data( $post_id ) {
    if ( isset( $_POST['mon_champ_personnalise'] ) ) {
        update_post_meta( $post_id, '_mon_champ_personnalise', sanitize_text_field( $_POST['mon_champ_personnalise'] ) );
    }
}
add_action( 'save_post_simulation', 'save_custom_meta_box_data' );

// 2 Enregistrer la valeur de "Mon champ personnalisé" lors de la sauvegarde du post
function save_custom_meta_box_data_2( $post_id ) {
    if ( isset( $_POST['mon_champ_personnalise_2'] ) ) {
        update_post_meta( $post_id, '_mon_champ_personnalise_2', sanitize_text_field( $_POST['mon_champ_personnalise_2'] ) );
    }
}
add_action( 'save_post_simulation', 'save_custom_meta_box_data_2' );

// 3 Enregistrer la valeur de "Mon champ personnalisé" lors de la sauvegarde du post
function save_custom_meta_box_data_3( $post_id ) {
    if ( isset( $_POST['mon_champ_personnalise_3'] ) ) {
        update_post_meta( $post_id, '_mon_champ_personnalise_3', sanitize_text_field( $_POST['mon_champ_personnalise_3'] ) );
    }
}
add_action( 'save_post_simulation', 'save_custom_meta_box_data_3' );

// 4 Enregistrer la valeur de "Mon champ personnalisé" lors de la sauvegarde du post
function save_custom_meta_box_data_4( $post_id ) {
    if ( isset( $_POST['mon_champ_personnalise_4'] ) ) {
        update_post_meta( $post_id, '_mon_champ_personnalise_4', sanitize_text_field( $_POST['mon_champ_personnalise_4'] ) );
    }
}
add_action( 'save_post_simulation', 'save_custom_meta_box_data_4' );

// 5 Enregistrer la valeur de "Mon champ personnalisé" lors de la sauvegarde du post
function save_custom_meta_box_data_5( $post_id ) {
    if ( isset( $_POST['mon_champ_personnalise_5'] ) ) {
        update_post_meta( $post_id, '_mon_champ_personnalise_5', sanitize_text_field( $_POST['mon_champ_personnalise_5'] ) );
    }
}
add_action( 'save_post_simulation', 'save_custom_meta_box_data_5' );

// 6 Enregistrer la valeur de "Mon champ personnalisé" lors de la sauvegarde du post
function save_custom_meta_box_data_6( $post_id ) {
    if ( isset( $_POST['mon_champ_personnalise_6'] ) ) {
        update_post_meta( $post_id, '_mon_champ_personnalise_6', sanitize_text_field( $_POST['mon_champ_personnalise_6'] ) );
    }
}
add_action( 'save_post_simulation', 'save_custom_meta_box_data_6' );

// 7 Enregistrer la valeur de "Mon champ personnalisé" lors de la sauvegarde du post
function save_custom_meta_box_data_7( $post_id ) {
    if ( isset( $_POST['mon_champ_personnalise_7'] ) ) {
        update_post_meta( $post_id, '_mon_champ_personnalise_7', sanitize_text_field( $_POST['mon_champ_personnalise_7'] ) );
    }
}
add_action( 'save_post_simulation', 'save_custom_meta_box_data_7' );

// 8 Enregistrer la valeur de "Mon champ personnalisé" lors de la sauvegarde du post
function save_custom_meta_box_data_8( $post_id ) {
    if ( isset( $_POST['mon_champ_personnalise_8'] ) ) {
        update_post_meta( $post_id, '_mon_champ_personnalise_8', sanitize_text_field( $_POST['mon_champ_personnalise_8'] ) );
    }
}
add_action( 'save_post_simulation', 'save_custom_meta_box_data_8' );