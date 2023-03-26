<?php
    // Si le formulaire de suppression de publication est soumis, supprime la publication
    if (isset($_POST['delete_post_submit'])) {
        $delete_post_id = $_POST['delete_post_id'];
        wp_delete_post($delete_post_id, true);
        wp_redirect('https://mon-eimpact.online/mon-espace/'); // Redirige vers la page d'accueil après la suppression
        exit();
    }

    // Mettre ce test if en haut de page sinon problème de headers sent...
    
    // Vérifier que le formulaire a été soumis
    if ( isset( $_POST['mon_champ_personnalise'] ) && isset( $_POST['custom_meta_field'] ) && !isset($_POST['delete_post_submit'])) {
        // Récupérer l'ID du post à mettre à jour à partir de la variable POST
        $post_id = $_POST['post_id'];
        
        $value = sanitize_text_field( $_POST['custom_meta_field'] );
        update_post_meta( $post_id, 'custom_meta_key', $value );

        // Mettre à jour la valeur de "Mon champ personnalisé" pour le post
        update_post_meta( $post_id, '_mon_champ_personnalise', sanitize_text_field( $_POST['mon_champ_personnalise'] ) );
        // Mettre à jour la valeur de "Mon champ personnalisé" pour le post
        update_post_meta( $post_id, '_mon_champ_personnalise_2', sanitize_text_field( $_POST['mon_champ_personnalise_2'] ) );
        // Mettre à jour la valeur de "Mon champ personnalisé" pour le post
        update_post_meta( $post_id, '_mon_champ_personnalise_3', sanitize_text_field( $_POST['mon_champ_personnalise_3'] ) );
        // Mettre à jour la valeur de "Mon champ personnalisé" pour le post
        update_post_meta( $post_id, '_mon_champ_personnalise_4', sanitize_text_field( $_POST['mon_champ_personnalise_4'] ) );
        // Mettre à jour la valeur de "Mon champ personnalisé" pour le post
        update_post_meta( $post_id, '_mon_champ_personnalise_5', sanitize_text_field( $_POST['mon_champ_personnalise_5'] ) );
        // Mettre à jour la valeur de "Mon champ personnalisé" pour le post
        update_post_meta( $post_id, '_mon_champ_personnalise_6', sanitize_text_field( $_POST['mon_champ_personnalise_6'] ) );
        // Mettre à jour la valeur de "Mon champ personnalisé" pour le post
        update_post_meta( $post_id, '_mon_champ_personnalise_7', sanitize_text_field( $_POST['mon_champ_personnalise_7'] ) );
        // Mettre à jour la valeur de "Mon champ personnalisé" pour le post
        update_post_meta( $post_id, '_mon_champ_personnalise_8', sanitize_text_field( $_POST['mon_champ_personnalise_8'] ) );



        //$valeur0 = get_post_meta( $post_id, 'custom_meta_key', true );
        $valeur = get_post_meta( $post_id, '_mon_champ_personnalise', true );
        $valeur2 = get_post_meta( $post_id, '_mon_champ_personnalise_2', true );
        $valeur3 = get_post_meta( $post_id, '_mon_champ_personnalise_3', true );
        $valeur4 = get_post_meta( $post_id, '_mon_champ_personnalise_4', true );
        $valeur5 = get_post_meta( $post_id, '_mon_champ_personnalise_5', true );
        $valeur6 = get_post_meta( $post_id, '_mon_champ_personnalise_6', true );
        $valeur7 = get_post_meta( $post_id, '_mon_champ_personnalise_7', true );
        $valeur8 = get_post_meta( $post_id, '_mon_champ_personnalise_8', true );
        
        $facteur_emission = 0.07; // valeur approximative pour la France

        // Additionnez les valeurs des 9 metaboxes de type "number"
        $total = 0;
        
        if ($valeur0 == 'Ordinateur fixe') {
            if ( is_numeric( $valeur ) ) {
                $carbone_temps_pc = $valeur * 0.15 * $facteur_emission;
            }
            if ( is_numeric( $valeur2 ) ) {
                $carbone_temps_video = $valeur2 * 0.015 * $facteur_emission;
            }
            if ( is_numeric( $valeur3 ) ) {
                $carbone_temps_stream = $valeur3 * 0.015 * $facteur_emission;
            }
            if ( is_numeric( $valeur4 ) ) {
                $carbone_temps_visio = $valeur4 * 0.03 * $facteur_emission;
            }
            if ( is_numeric( $valeur5 ) ) {
                $carbone_nbr_email = $valeur5 * 0.0002 * $facteur_emission;
            }
            if ( is_numeric( $valeur6 ) ) {
                $carbone_temps_jeux = $valeur6 * 0.03 * $facteur_emission;
            }
            if ( is_numeric( $valeur7 ) ) {
                $carbone_nbr_telechargement = $valeur7 * 0.02 * $facteur_emission;
            }
            if ( is_numeric( $valeur8 ) ) {
                $carbone_temps_musique = $valeur8 * 0.001 * $facteur_emission;
            }        
        } else { // 'Ordinateur portable' ici du coup
            if ( is_numeric( $valeur ) ) {
                $carbone_temps_pc = $valeur * 0.06 * $facteur_emission;
            }
            if ( is_numeric( $valeur2 ) ) {
                $carbone_temps_video = $valeur2 * 0.008 * $facteur_emission;
            }
            if ( is_numeric( $valeur3 ) ) {
                $carbone_temps_stream = $valeur3 * 0.008 * $facteur_emission;
            }
            if ( is_numeric( $valeur4 ) ) {
                $carbone_temps_visio = $valeur4 * 0.02 * $facteur_emission;
            }
            if ( is_numeric( $valeur5 ) ) {
                $carbone_nbr_email = $valeur5 * 0.0002 * $facteur_emission;
            }
            if ( is_numeric( $valeur6 ) ) {
                $carbone_temps_jeux = $valeur6 * 0.02 * $facteur_emission;
            }
            if ( is_numeric( $valeur7 ) ) {
                $carbone_nbr_telechargement = $valeur7 * 0.02 * $facteur_emission;
            }
            if ( is_numeric( $valeur8 ) ) {
                $carbone_temps_musique = $valeur8 * 0.0005 * $facteur_emission;
            }
        }
        $total = $carbone_temps_pc + $carbone_temps_video + $carbone_temps_stream + $carbone_temps_visio + $carbone_nbr_email + $carbone_temps_jeux + $carbone_nbr_telechargement + $carbone_temps_musique;
        // Enregistrez le total dans la metaboxe du résultat
        update_post_meta( $post_id, 'total', $total );


        // Rediriger l'utilisateur vers la page de single du post
        wp_redirect( get_permalink( $post_id ) );
        exit;
    }
?>

<?php get_header(); ?>

<div class="container">

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
            <h1 class="h1_single_simulation"><?php the_title(); ?></h1>
            <?php

            $total = get_post_meta( get_the_ID(), 'total', true );

            // Récupérer la valeur de la méta donnée du choix d'ordinateur pour le post en cours
            $custom_meta_value = get_post_meta( get_the_ID(), 'custom_meta_key', true );

            // Récupérer la valeur de "Mon champ personnalisé" pour le post en cours
            $mon_champ_personnalise = get_post_meta( get_the_ID(), '_mon_champ_personnalise', true );
            // Récupérer la valeur de "Mon champ personnalisé 2" pour le post en cours
            $mon_champ_personnalise_2 = get_post_meta( get_the_ID(), '_mon_champ_personnalise_2', true );
            // Récupérer la valeur de "Mon champ personnalisé 3" pour le post en cours
            $mon_champ_personnalise_3 = get_post_meta( get_the_ID(), '_mon_champ_personnalise_3', true );
            // Récupérer la valeur de "Mon champ personnalisé 4" pour le post en cours
            $mon_champ_personnalise_4 = get_post_meta( get_the_ID(), '_mon_champ_personnalise_4', true );
            // Récupérer la valeur de "Mon champ personnalisé 5" pour le post en cours
            $mon_champ_personnalise_5 = get_post_meta( get_the_ID(), '_mon_champ_personnalise_5', true );
            // Récupérer la valeur de "Mon champ personnalisé 6" pour le post en cours
            $mon_champ_personnalise_6 = get_post_meta( get_the_ID(), '_mon_champ_personnalise_6', true );
            // Récupérer la valeur de "Mon champ personnalisé 7" pour le post en cours
            $mon_champ_personnalise_7 = get_post_meta( get_the_ID(), '_mon_champ_personnalise_7', true );
            // Récupérer la valeur de "Mon champ personnalisé 8" pour le post en cours
            $mon_champ_personnalise_8 = get_post_meta( get_the_ID(), '_mon_champ_personnalise_8', true );
            ?>

            <div class="div_result_single_simulation">
                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/result.svg" alt="Icone résultat"/>
                <?php
                // Afficher la valeur de la méta donnée du choix d'ordinateur
                $totalArrondi = round($total, 2);
                if ( ! empty( $custom_meta_value ) ) {
                    echo '<p>Vos usages émettent une empreinte carbone de : <span class="custom_font_result_simulation">' . esc_html( $totalArrondi ) . '</span> kgCO2e</p>';
                }
                ?>
            </div>

            <?php
            // Calcul des équivalents en distance et en temps
            $equivalent_voiture = round($total / 0.18, 1); // 0.18 kgCO2e/km correspond à l'émission moyenne d'un véhicule en France
            $equivalent_ampoule = round($total / 0.00011, 1); // 0.00011 kgCO2e/minute correspond à l'émission d'une ampoule de 60W
            $equivalent_ampoule_heures = round($equivalent_ampoule / 60); // 0.00011 kgCO2e/minute correspond à l'émission d'une ampoule de 60W
            $equivalent_douche = round($total / 0.000072, 1); // 0.000072 kgCO2e/minute correspond à l'émission moyenne d'une douche en France
            $equivalent_douche_heures = round($equivalent_douche / 60);
            ?>
            
            <h2 class="h2_single_simulation">À quoi cela correspond ?</h2>
            <div class="div_comparatifs_single_simulation">
                <div>
                    <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/car-svgrepo-com.svg" alt="Icone d'une voiture"/>
                    <span><?php echo $equivalent_voiture ?></span>
                    <p>km en voiture</p>
                </div>
                <div>
                    <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/bulb.svg" alt="Icone d'une ampoule"/>
                    <span><?php echo $equivalent_ampoule_heures ?></span>
                    <p>heures d'une ampoule allumée</p>
                </div>
                <div>
                    <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/shower.svg" alt="Icone d'une douche"/>
                    <span><?php echo $equivalent_douche_heures ?></span>
                    <p>heures sous la douche</p>
                </div>
            </div>

            <h2 class="h2_single_simulation">Voici les détails de la simulation</h2>
            
            <div class="div_details_single_simulation">

                <div class="div_inside_details_single_simulation">
                    <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/computer.svg" alt="Icone d'un ordinateur"/>
                    <?php
                    // Afficher la valeur de la méta donnée du choix d'ordinateur
                    if ( ! empty( $custom_meta_value ) ) {
                        echo '<p>Choix de l\'ordinateur : ' . esc_html( $custom_meta_value ) . '</p>';
                    }
                    ?>
                </div>

                <div class="div_inside_details_single_simulation">
                    <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/uptime.svg" alt="Icone du temps passé sur ordinateur"/>
                    <?php
                    // Afficher la valeur de "Mon champ personnalisé"
                    if ( ! empty( $mon_champ_personnalise ) ) {
                        echo '<p>Temps passé sur l\'ordinateur, nombre d\'heure(s) : <span class="custom_font_result_simulation">' . esc_html( $mon_champ_personnalise ) . '</span></p>';
                    }
                    ?>
                </div>

                <div class="div_inside_details_single_simulation">
                    <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/video.svg" alt="Icone vidéo"/>
                    <?php
                    // Afficher la valeur de "Mon champ personnalisé"
                    if ( ! empty( $mon_champ_personnalise_2 ) ) {
                        echo '<p>Temps passé à visionner du contenu vidéo (YouTube/Netflix) : <span class="custom_font_result_simulation">' . esc_html( $mon_champ_personnalise_2 ) . '</span></p>';
                    }
                    ?>
                </div>

                <div class="div_inside_details_single_simulation">
                    <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/live.svg" alt="Icone live"/>
                    <?php
                    // Afficher la valeur de "Mon champ personnalisé"
                    if ( ! empty( $mon_champ_personnalise_3 ) ) {
                        echo '<p>Temps passé à visionner du contenu vidéo (Twitch/YouTube) : <span class="custom_font_result_simulation">' . esc_html( $mon_champ_personnalise_3 ) . '</span></p>';
                    }
                    ?>
                </div>
                
                <div class="div_inside_details_single_simulation">
                    <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/conference.svg" alt="Icone visioconférence"/>
                    <?php
                    // Afficher la valeur de "Mon champ personnalisé"
                    if ( ! empty( $mon_champ_personnalise_4 ) ) {
                        echo '<p>Temps passé en visioconférence (Teams/Zoom) : <span class="custom_font_result_simulation">' . esc_html( $mon_champ_personnalise_4 ) . '</span></p>';
                    }
                    ?>
                </div>
                
                <div class="div_inside_details_single_simulation">
                    <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/mails.svg" alt="Icone mails"/>
                    <?php
                    // Afficher la valeur de "Mon champ personnalisé"
                    if ( $mon_champ_personnalise_5 ) {
                        echo '<p>Nombre de mails envoyés : <span class="custom_font_result_simulation">' . esc_html( $mon_champ_personnalise_5 ) . '</span></p>';
                    }
                    ?>
                </div>

                <div class="div_inside_details_single_simulation">
                    <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/game.svg" alt="Icone jeux-vidéos"/>
                    <?php
                    // Afficher la valeur de "Mon champ personnalisé"
                    if ( ! empty( $mon_champ_personnalise_6 ) ) {
                        echo '<p>Temps passé sur les jeux-vidéos : <span class="custom_font_result_simulation">' . esc_html( $mon_champ_personnalise_6 ) . '</span></p>';
                    }
                    ?>
                </div>
                
                <div class="div_inside_details_single_simulation">
                    <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/download.svg" alt="Icone téléchargements"/>
                    <?php
                    // Afficher la valeur de "Mon champ personnalisé"
                    if ( ! empty( $mon_champ_personnalise_7 ) ) {
                        echo '<p>Nombre de téléchargements : <span class="custom_font_result_simulation">' . esc_html( $mon_champ_personnalise_7 ) . '</span></p>';
                    }
                    ?>
                </div>

                <div class="div_inside_details_single_simulation">
                    <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/music.svg" alt="Icone musique"/>
                    <?php
                    // Afficher la valeur de "Mon champ personnalisé"
                    if ( ! empty( $mon_champ_personnalise_8 ) ) {
                        echo '<p>Temps passé à écouter de la musique (Spotify/Deezer) : <span class="custom_font_result_simulation">' . esc_html( $mon_champ_personnalise_8 ) . '</span></p>';
                    }
                    ?>
                </div>

            </div>
            <?php
            
        endwhile;
    endif;

    // Afficher le formulaire de mise à jour pour "Mon champ personnalisé"
    $post_id = get_the_ID();

    $custom_meta_value = get_post_meta( $post_id, 'custom_meta_key', true );

    $mon_champ_personnalise = get_post_meta( $post_id, '_mon_champ_personnalise', true );
    $mon_champ_personnalise_2 = get_post_meta( $post_id, '_mon_champ_personnalise_2', true );
    $mon_champ_personnalise_3 = get_post_meta( $post_id, '_mon_champ_personnalise_3', true );
    $mon_champ_personnalise_4 = get_post_meta( $post_id, '_mon_champ_personnalise_4', true );
    $mon_champ_personnalise_5 = get_post_meta( $post_id, '_mon_champ_personnalise_5', true );
    $mon_champ_personnalise_6 = get_post_meta( $post_id, '_mon_champ_personnalise_6', true );
    $mon_champ_personnalise_7 = get_post_meta( $post_id, '_mon_champ_personnalise_7', true );
    $mon_champ_personnalise_8 = get_post_meta( $post_id, '_mon_champ_personnalise_8', true );
    ?>

    <h2 class="h2_single_simulation">Envie de mettre à jour la simulation ?</h2>

    <form class="form_update_single_simulation" method="post">

        <div class="section_3_items_simulateur">
            <input type="hidden" name="post_id" value="<?php echo esc_attr( $post_id ); ?>">

            <div>
                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/computer.svg" alt="Icone d'un ordinateur"/>
                <label for="custom_meta_field">Choisir une option :</label>
                <select id="custom_meta_field" name="custom_meta_field">
                    <option value="Ordinateur portable" <?php selected( $custom_meta_value, 'Ordinateur portable' ); ?>>Ordinateur portable</option>
                    <option value="Ordinateur fixe" <?php selected( $custom_meta_value, 'Ordinateur fixe' ); ?>>Ordinateur fixe</option>
                </select>
            </div>

            <div>
                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/uptime.svg" alt="Icone du temps passé sur ordinateur"/>
                <label for="mon_champ_personnalise">Temps passé sur l'ordinateur, nombre d'heure(s) : </label>
                <input type="number" step="any" name="mon_champ_personnalise" value="<?php echo esc_attr( $mon_champ_personnalise ); ?>">
            </div>
                    
            <div>
                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/video.svg" alt="Icone vidéo"/>
                <label for="mon_champ_personnalise_2">Temps passé à visionner du contenu vidéo (YouTube/Netflix) : </label>
                <input type="number" step="any" name="mon_champ_personnalise_2" value="<?php echo esc_attr( $mon_champ_personnalise_2 ); ?>">
            </div>
            
        </div>

        <div class="section_3_items_simulateur">
            <div>
                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/live.svg" alt="Icone live"/>
                <label for="mon_champ_personnalise_3">Temps passé à visionner du contenu live (Twitch/YouTube) : </label>
                <input type="number" step="any" name="mon_champ_personnalise_3" value="<?php echo esc_attr( $mon_champ_personnalise_3 ); ?>">
            </div>
        
            <div>
                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/conference.svg" alt="Icone visioconférence"/>
                <label for="mon_champ_personnalise_4">Temps passé en visioconférence (Teams/Zoom) : </label>
                <input type="number" step="any" name="mon_champ_personnalise_4" value="<?php echo esc_attr( $mon_champ_personnalise_4 ); ?>">
            </div>
        
            <div>
                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/mails.svg" alt="Icone mails"/>
                <label for="mon_champ_personnalise_5">Nombre de mails envoyés : </label>
                <input type="number" step="any" name="mon_champ_personnalise_5" value="<?php echo esc_attr( $mon_champ_personnalise_5 ); ?>">
            </div>
        </div>

        <div class="section_3_items_simulateur">
            <div>
                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/game.svg" alt="Icone jeux-vidéos"/>
                <label for="mon_champ_personnalise_6">Temps passé sur les jeux-vidéos : </label>
                <input type="number" step="any" name="mon_champ_personnalise_6" value="<?php echo esc_attr( $mon_champ_personnalise_6 ); ?>">
            </div>

            <div>
                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/download.svg" alt="Icone téléchargements"/>
                <label for="mon_champ_personnalise_7">Nombre de téléchargements : </label>
                <input type="number" step="any" name="mon_champ_personnalise_7" value="<?php echo esc_attr( $mon_champ_personnalise_7 ); ?>">
            </div>

            <div>
                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/music.svg" alt="Icone musique"/>
                <label for="mon_champ_personnalise_8">Temps passé à écouter de la musique (Spotify/Deezer) : </label>
                <input type="number" step="any" name="mon_champ_personnalise_8" value="<?php echo esc_attr( $mon_champ_personnalise_8 ); ?>">
            </div>
        </div>

        <input type="submit" class="input_submit_simulateur" value="Mettre à jour">

    </form>

    <?php
    // Vérifie si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Récupère l'ID de la publication en cours
        $post_id = get_the_ID();
        // Récupère l'ID de l'utilisateur connecté
        $user_id = get_current_user_id();
        // Récupère l'ID de l'auteur de la publication
        $post_author_id = get_post_field( 'post_author', $post_id );
        // Vérifie si l'utilisateur connecté est l'auteur de la publication
        if ($user_id == $post_author_id) {
            // Ajoute le bouton de suppression de publication
            echo '<form class="delete_simulation_single" method="post">';
            echo '<input type="hidden" name="delete_post_id" value="'.$post_id.'" />';
            echo '<button type="submit" name="delete_post_submit" onclick="return confirm(\'Êtes-vous sûr de vouloir supprimer cette simulation ?\')">Supprimer la simulation</button>';
            echo '</form>';
        }
    }
    ?>

</div>

<?php get_footer(); ?>