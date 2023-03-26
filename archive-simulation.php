<?php get_header(); ?>

<div class="container">
          
    <h2 class="simulations_mon_espace">Voici le bilan de vos 10 dernières simulations</h2>
    <span class="">Votre consommation lors des 10 dernières simulation est de : <span class="custom_font_result_simulation"><?php echo calculAdditionSimulation() ?></span> kgCO2e</span>
    
    <?php
            $total = calculAdditionSimulation();
            
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
            
            
    <?php
        $args = array(
        'post_type' => 'simulation',
        'author' => get_current_user_id(),
        'posts_per_page' => 10,
        'orderby' => 'date'
        );

        $simulations = new WP_Query( $args );

        if ( $simulations->have_posts() ) {
            while ( $simulations->have_posts() ) {
                $simulations->the_post();               
                ?>
                <div class="wrapper_simulation_item">
                        <h3><?php the_title(); ?></h3>

                        <div class="div_result_simulation_mon_espace">
                            <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/result.svg" alt="Icone résultat"/>
                            <?php
                                // Récupérer la valeur de la méta box "RESULTAT"
                                $total = get_post_meta( get_the_ID(), 'total', true );
                                // Afficher la valeur de la méta box "RESULTAT"
                                echo '<p>Votre empreinte carbone est de : ' . round($total, 2) . ' kgCO2e</p>';
                            ?>
                        </div>

                        <div>
                            <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/computer.svg" alt="Icone d'un ordinateur"/>
                            <?php
                                // Récupérer la valeur de la méta donnée du choix d'ordinateur pour le post en cours
                                $custom_meta_value = get_post_meta( get_the_ID(), 'custom_meta_key', true );
                                // Afficher la valeur de la méta box "Temps passé sur l'ordi"
                                echo '<p> Choix de l\'ordinateur : ' . $custom_meta_value . '</p>';
                            ?>
                        </div>

                        <div>
                            <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/uptime.svg" alt="Icone du temps passé sur ordinateur"/>
                            <?php
                                // Récupérer la valeur de la méta box "Temps passé sur l'ordi"
                                $metabox = get_post_meta( get_the_ID(), '_mon_champ_personnalise', true );
                                // Afficher la valeur de la méta box "Temps passé sur l'ordi"
                                echo '<p> Temps passé sur l\'ordinateur : ' . $metabox . '</p>';
                            ?>
                        </div>

                        <div>
                            <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/video.svg" alt="Icone vidéo"/>
                            <?php
                                // Récupérer la valeur de la méta box "champ personnalisé 2"
                                $metabox2 = get_post_meta( get_the_ID(), '_mon_champ_personnalise_2', true );
                                // Afficher la valeur de la méta box "nom de l'utilisateur"
                                echo '<p> Temps passé à visionner du contenu vidéo (YouTube/Netflix) : ' . $metabox2 . '</p>';
                            ?>
                        </div>

                        <div>
                            <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/live.svg" alt="Icone live"/>
                            <?php
                                // Récupérer la valeur de la méta box "champ personnalisé 3"
                                $metabox3 = get_post_meta( get_the_ID(), '_mon_champ_personnalise_3', true );
                                // Afficher la valeur de la méta box "nom de l'utilisateur"
                                echo '<p> Temps passé à visionner du contenu live (Twitch/YouTube) : ' . $metabox3 . '</p>';
                            ?>
                        </div>

                        <div>
                            <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/conference.svg" alt="Icone visioconférence"/>
                            <?php
                                // Récupérer la valeur de la méta box "champ personnalisé 4"
                                $metabox4 = get_post_meta( get_the_ID(), '_mon_champ_personnalise_4', true );
                                // Afficher la valeur de la méta box "nom de l'utilisateur"
                                echo '<p> Temps passé en visioconférence (Teams/Zoom) : ' . $metabox4 . '</p>';
                            ?>
                        </div>

                        <div>
                            <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/mails.svg" alt="Icone mails"/>
                            <?php
                                // Récupérer la valeur de la méta box "champ personnalisé 5"
                                $metabox5 = get_post_meta( get_the_ID(), '_mon_champ_personnalise_5', true );
                                // Afficher la valeur de la méta box "nom de l'utilisateur"
                                echo '<p> Nombre de mails envoyés : ' . $metabox5 . '</p>';
                            ?>
                        </div>

                        <div>
                            <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/game.svg" alt="Icone jeux-vidéos"/>
                            <?php
                                // Récupérer la valeur de la méta box "champ personnalisé 6"
                                $metabox6 = get_post_meta( get_the_ID(), '_mon_champ_personnalise_6', true );
                                // Afficher la valeur de la méta box "nom de l'utilisateur"
                                echo '<p> Temps passé sur les jeux-vidéos : ' . $metabox6 . '</p>';
                            ?>
                        </div>

                        <div>
                            <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/download.svg" alt="Icone téléchargements"/>
                            <?php
                                // Récupérer la valeur de la méta box "champ personnalisé 7"
                                $metabox7 = get_post_meta( get_the_ID(), '_mon_champ_personnalise_7', true );
                                // Afficher la valeur de la méta box "nom de l'utilisateur"
                                echo '<p> Nombre de téléchargements : ' . $metabox7 . '</p>';
                            ?>
                        </div>

                        <div>
                            <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/music.svg" alt="Icone musique"/>
                            <?php
                                // Récupérer la valeur de la méta box "champ personnalisé 8"
                                $metabox8 = get_post_meta( get_the_ID(), '_mon_champ_personnalise_8', true );
                                // Afficher la valeur de la méta box "nom de l'utilisateur"
                                echo '<p> Temps passé à écouter de la musique (Spotify/Deezer) : ' . $metabox8 . '</p>';
                            ?>
                        </div>

                        <a href="<?php echo get_permalink(); ?>">Voir la simulation</a>
                    </div>
                <?php
            }
            wp_reset_postdata();
        } else {
            ?>
            <br>
            Aucune publication n'a été trouvée
            <?php
        }
        ?>

</div>

<?php get_footer(); ?>