<?php get_header(); ?>
               
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                
        <div class="container">

            <h1 class="h1_page"><?php the_title(); ?></h1>

        </div>
        
        <?php if ( is_page( 8 ) ) { ?>

        <div class="container">

            <span class="sous_titre_conseils"><?php the_field('sous-titre'); ?></span>

            <ul>
                <li class="systeme_puce">
                <div class="liste_categorie">
            <h2 class="titre_page_conseils" id="title_systeme" name="title_systeme"><?php the_field('titre_1_section_conseils'); ?></h2>
            <div class="div_contenu_section_conseils" id="systeme" name="systeme">
                <?php the_field('contenu_section_1_conseils'); ?>
            </div>
                </li>

            <h2 class="titre_page_conseils" id="title_stockage" name="title_stockage"><?php the_field('titre_2_section_conseils'); ?></h2>

            <div class="div_contenu_section_conseils" id="stockage" name="stockage">
                <?php the_field('contenu_section_2_conseils'); ?>
            </div>

            <h2 class="titre_page_conseils" id="title_internet" name="title_internet"><?php the_field('titre_3_section_conseils'); ?></h2>

            <div class="div_contenu_section_conseils" id="internet" name="internet">
                <?php the_field('contenu_section_3_conseils'); ?>
            </div>

            <h2 class="titre_page_conseils" id="title_mails" name="title_mails"><?php the_field('titre_4_section_conseils'); ?></h2>

            <div class="div_contenu_section_conseils" id="mails" name="mails">
                <?php the_field('contenu_section_4_conseils'); ?>
            </div>
                </div>
            </ul>

        </div>

        <?php  } ?>

        <?php if ( is_page( 64 ) ) { ?>

        <div class="container">

            <span class="sous_titre_propos"><?php the_field('qui_somme_nous_texte'); ?></span>
            
            <div class="grid_qui_sommes_nous">
                <div class="emilien_qui_sommes_nous">
                    <?php
                    $emilien_qui_sommes_nous = get_field('emilien_qui_sommes_nous');
                    if( $emilien_qui_sommes_nous ): ?>

                    <img class="img_qui_sommes_nous" src="https://mon-eimpact.online/wp-content/uploads/2023/03/EmilienChauvetAvatar.png" />
                    <h2 class="nom_qui_sommes_nous"><?php echo $emilien_qui_sommes_nous['emilien_nom_qui_sommes_nous']; ?></h2>
                    <p class="qui_sommes_nous_license"><?php echo $emilien_qui_sommes_nous['emilien_license_qui_sommes_nous']; ?></p>
                    <p><?php echo $emilien_qui_sommes_nous['emilien_role_qui_sommes_nous']; ?></p>
                    <?php endif; ?>
                </div>
                <div class="jeremy_qui_sommes_nous">
                    <?php
                    $jeremy_qui_sommes_nous = get_field('jeremy_qui_sommes_nous');
                    if( $jeremy_qui_sommes_nous ): ?>

                    <img class="img_qui_sommes_nous" src="https://mon-eimpact.online/wp-content/uploads/2023/03/JeremyHayotteAvatar.png" />
                    <h2 class="nom_qui_sommes_nous"><?php echo $jeremy_qui_sommes_nous['jeremy_nom_qui_sommes_nous']; ?></h2>
                    <p class="qui_sommes_nous_license"><?php echo $jeremy_qui_sommes_nous['jeremy_license_qui_sommes_nous']; ?></p>
                    <p><?php echo $jeremy_qui_sommes_nous['jeremy_role_qui_sommes_nous']; ?></p>
                    <?php endif; ?>
                </div>
                <div class="martin_qui_sommes_nous">
                    <?php
                    $martin_qui_sommes_nous = get_field('martin_qui_sommes_nous');
                    if( $martin_qui_sommes_nous ): ?>

                    <img class="img_qui_sommes_nous" src="https://mon-eimpact.online/wp-content/uploads/2023/03/MartinNguyenAvatar.png" />
                    <h2 class="nom_qui_sommes_nous"><?php echo $martin_qui_sommes_nous['martin_nom_qui_sommes_nous']; ?></h2>
                    <p class="qui_sommes_nous_license"><?php echo $martin_qui_sommes_nous['martin_license_qui_sommes_nous']; ?></p>
                    <p><?php echo $martin_qui_sommes_nous['martin_role_qui_sommes_nous']; ?></p>
                    <?php endif; ?>
                </div>
                <div class="pauline_qui_sommes_nous">
                    <?php
                    $pauline_qui_sommes_nous = get_field('pauline_qui_sommes_nous');
                    if( $emilien_qui_sommes_nous ): ?>

                    <img class="img_qui_sommes_nous" src="https://mon-eimpact.online/wp-content/uploads/2023/03/PaulineLemarchandAvatar.png" />
                    <h2 class="nom_qui_sommes_nous"><?php echo $pauline_qui_sommes_nous['pauline_nom_qui_sommes_nous']; ?></h2>
                    <p class="qui_sommes_nous_license"><?php echo $pauline_qui_sommes_nous['pauline_license_qui_sommes_nous']; ?></p>
                    <p><?php echo $pauline_qui_sommes_nous['pauline_role_qui_sommes_nous']; ?></p>
                    <?php endif; ?>
                </div>
                <div class="hugo_qui_sommes_nous">
                    <?php
                    $hugo_qui_sommes_nous = get_field('hugo_qui_sommes_nous');
                    if( $hugo_qui_sommes_nous ): ?>

                    <img class="img_qui_sommes_nous" src="https://mon-eimpact.online/wp-content/uploads/2023/03/HugoSarnickAvatar.png" />
                    <h2 class="nom_qui_sommes_nous"><?php echo $hugo_qui_sommes_nous['hugo_nom_qui_sommes_nous']; ?></h2>
                    <p class="qui_sommes_nous_license"><?php echo $hugo_qui_sommes_nous['hugo_license_qui_sommes_nous']; ?></p>
                    <p><?php echo $hugo_qui_sommes_nous['hugo_role_qui_sommes_nous']; ?></p>
                    <?php endif; ?>
                </div>
                <div class="jerome_qui_sommes_nous">
                    <?php
                    $jerome_qui_sommes_nous = get_field('jerome_qui_sommes_nous');
                    if( $jerome_qui_sommes_nous ): ?>

                    <img class="img_qui_sommes_nous" src="https://mon-eimpact.online/wp-content/uploads/2023/03/JeromeVasseurAvatar.png" />
                    <h2 class="nom_qui_sommes_nous"><?php echo $jerome_qui_sommes_nous['jerome_nom_qui_sommes_nous']; ?></h2>
                    <p class="qui_sommes_nous_license"><?php echo $jerome_qui_sommes_nous['jerome_license_qui_sommes_nous']; ?></p>
                    <p><?php echo $jerome_qui_sommes_nous['jerome_role_qui_sommes_nous']; ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div id="nous-contacter">
                <a href="https://mon-eimpact.online/contact/" bis_skin_checked="1">Nous contacter</a>
            </div>

            <h1><?php the_field('titre_partenaires'); ?></h1>
            <span class="sous_titre_propos"><?php the_field('texte_partenaires'); ?></span>

            <div class="grid_nos_partenaires">

                <div class="grid_partenaires_1">
                    <?php
                    $partenaire_1 = get_field('partenaire_1');
                    if( $partenaire_1 ): ?>

                    <img class="img_partenaires" src="https://mon-eimpact.online/wp-content/uploads/2023/03/academie-limoges.png" />
                    <h2 class="nom_partenaires"><?php echo $partenaire_1['nom_partenaire_1']; ?></h2>
                    <?php endif; ?>
                </div>

                <div class="grid_partenaires_2">
                    <?php
                    $partenaire_2 = get_field('partenaire_2');
                    if( $partenaire_2 ): ?>

                    <img class="img_partenaires" src="https://mon-eimpact.online/wp-content/uploads/2023/03/academie-lilles.png" />
                    <h2 class="nom_partenaires"><?php echo $partenaire_2['nom_partenaire_2']; ?></h2>
                    <?php endif; ?>
                </div>

                <div class="grid_partenaires_3">
                    <?php
                    $partenaire_3 = get_field('partenaire_3');
                    if( $partenaire_3 ): ?>

                    <img class="img_partenaires" src="https://mon-eimpact.online/wp-content/uploads/2023/03/total-energies.png" />
                    <h2 class="nom_partenaires"><?php echo $partenaire_3['nom_partenaire_3']; ?></h2>
                    <?php endif; ?>
                </div>

                <div class="grid_partenaires_4">
                    <?php
                    $partenaire_4 = get_field('partenaire_4');
                    if( $partenaire_4 ): ?>

                    <img class="img_partenaires" src="https://mon-eimpact.online/wp-content/uploads/2023/03/Auchan-Groupe-Mulliez.png" />
                    <h2 class="nom_partenaires"><?php echo $partenaire_4['nom_partenaire_4']; ?></h2>
                    <?php endif; ?>
                </div>

                <div class="grid_partenaires_5">
                    <?php
                    $partenaire_5 = get_field('partenaire_5');
                    if( $partenaire_5 ): ?>

                    <img class="img_partenaires" src="https://mon-eimpact.online/wp-content/uploads/2023/03/stellantis.png" />
                    <h2 class="nom_partenaires"><?php echo $partenaire_5['nom_partenaire_5']; ?></h2>
                    <?php endif; ?>
                </div>

                <div class="grid_partenaires_6">
                    <?php
                    $partenaire_6 = get_field('partenaire_6');
                    if( $partenaire_6 ): ?>

                    <img class="img_partenaires" src="https://mon-eimpact.online/wp-content/uploads/2023/03/atos.png" />
                    <h2 class="nom_partenaires"><?php echo $partenaire_6['nom_partenaire_6']; ?></h2>
                    <?php endif; ?>
                </div>

            </div>

        </div>

        <?php  } ?>
        <!-- CONTACT -->

        <?php if ( is_page( 66 ) ) { ?>

        <div class="container">
        <div class="grid_contact">

                <div class="grid_contact_1">
                    <?php
                    $contact_1 = get_field('contact_1');
                    if( $contact_1 ): ?>
                        <h2 class="nom_qui_sommes_nous"><?php echo $contact_1['contact_1_nom']; ?></h2>
                        <p class="contact_tel"><?php echo $contact_1['contact_1_tel']; ?></p>
                        <p class="contact_mail"><?php echo $contact_1['contact_1_mail']; ?></p>
                    <?php endif; ?>
                </div>

                <div class="grid_contact_2">
                    <?php
                    $contact_2 = get_field('contact_2');
                    if( $contact_2 ): ?>
                        <h2 class="nom_qui_sommes_nous"><?php echo $contact_2['contact_2_nom']; ?></h2>
                        <p class="contact_tel"><?php echo $contact_2['contact_2_tel']; ?></p>
                        <p class="contact_mail"><?php echo $contact_2['contact_2_mail']; ?></p>
                    <?php endif; ?>
                </div>

                <div class="grid_contact_3">
                    <?php
                    $contact_3 = get_field('contact_3');
                    if( $contact_3 ): ?>
                        <h2 class="nom_qui_sommes_nous"><?php echo $contact_3['contact_3_nom']; ?></h2>
                        <p class="contact_tel"><?php echo $contact_3['contact_3_tel']; ?></p>
                        <p class="contact_mail"><?php echo $contact_3['contact_3_mail']; ?></p>
                    <?php endif; ?>
                </div>

                <div class="grid_contact_4">
                    <?php
                    $contact_4 = get_field('contact_4');
                    if( $contact_4 ): ?>
                        <h2 class="nom_qui_sommes_nous"><?php echo $contact_4['contact_4_nom']; ?></h2>
                        <p class="contact_tel"><?php echo $contact_4['contact_4_tel']; ?></p>
                        <p class="contact_mail"><?php echo $contact_4['contact_4_mail']; ?></p>
                    <?php endif; ?>
                </div>

                <div class="grid_contact_5">
                    <?php
                    $contact_5 = get_field('contact_5');
                    if( $contact_5 ): ?>
                        <h2 class="nom_qui_sommes_nous"><?php echo $contact_5['contact_5_nom']; ?></h2>
                        <p class="contact_tel"><?php echo $contact_5['contact_5_tel']; ?></p>
                        <p class="contact_mail"><?php echo $contact_5['contact_5_mail']; ?></p>
                    <?php endif; ?>
                </div>

                <div class="grid_contact_6">
                    <?php
                    $contact_6 = get_field('contact_6');
                    if( $contact_6 ): ?>
                        <h2 class="nom_qui_sommes_nous"><?php echo $contact_6['contact_6_nom']; ?></h2>
                        <p class="contact_tel"><?php echo $contact_6['contact_6_tel']; ?></p>
                        <p class="contact_mail"><?php echo $contact_6['contact_6_mail']; ?></p>
                    <?php endif; ?>
                </div>

            </div>
        </div>

        <?php  } ?>
        
        <?php if ( is_page( 167 ) ) { ?>
        <!-- CONNEXION -->
            <style>.h1_page{display:none;}</style>
            <div class="container">

                <div class="login-form">
                    <img src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/hiker-walk-svgrepo-com.svg" alt="Image d'un humain qui marche"/>
                    <h2>Connexion</h2>
                    <form id="login-form" method="post">
                        <input type="text" name="username" placeholder="Nom d'utilisateur" required>
                        <input type="password" name="password" placeholder="Mot de passe" required>
                        <button type="submit" name="login">Se connecter</button>
                    </form>
                </div>

                <div class="div_redirection_inscription">
                    <p>Pas encore inscrit ? <a href="https://mon-eimpact.online/inscription/">S'inscrire</a></p>
                    <p><a href="<?php echo wp_lostpassword_url(); ?>">Mot de passe oublié ?</a></p>
                </div>

            </div>

        <?php  } ?>
        
        <?php if ( is_page( 171 ) ) { ?>
        <!-- INSCRIPTION -->
            <style>.h1_page{display:none;}.container{height:auto;}</style>
            <div class="container">
                <div class="register-form">
                    <img src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/hiker-walk-svgrepo-com.svg" alt="Image d'un humain qui marche"/>
                    <h2>Pas encore inscrit ?</h2>
                    <form id="register-form" method="post" onsubmit="return checkPassword()">
                        <input type="text" name="username" placeholder="Nom d'utilisateur" required>
                        <input type="email" name="email" placeholder="Adresse e-mail" required>
                        <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirmer le mot de passe" required>
                        <button type="submit" name="register">S'inscrire</button>
                        <div id="password-error"></div>
                    </form>
                </div>
            </div>

        <?php  } ?>
        
        
        <?php if ( is_page( 169 ) ) { ?>
        <!-- MON ESPACE (CONNECTE) -->
            
        <div class="container">
            <span class="message_bienvenue"><?php wpb_current_user_info(); ?></span>
            <div class="top_section_mon_espace">
                <span class="top_section_mon_espace_left">Votre consommation lors des 10 dernières simulation est de : <span class="custom_font_result_simulation"><?php echo calculAdditionSimulation() ?></span> kgCO2e</span>
                <div class="top_section_mon_espace_right">
                    <a href="<?php echo get_post_type_archive_link('simulation'); ?>" class="voir_toutes_les_simulations_button">Voir les 10 dernières simulations</a>
                    <a href="https://mon-eimpact.online/parametres/" class="settings_button">Paramètres</a>
                    <?php add_logout_button(); ?>
                </div>
            </div>

            <h2 class="dernieres_simulations_mon_espace">Toutes vos simulations</h2>
            <?php
            $args = array(
            'post_type' => 'simulation',
            'author' => get_current_user_id(),
            'orderby' => 'date',
            'posts_per_page' => 5,
            'paged' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1
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

                        <a href="<?php echo get_permalink(); ?>">Voir la simulation</a>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            }
            else {
                ?>
                <br>
                Aucune publication n'a été trouvée
                <?php
            }
            ?>
            <div class="pagination">
                <?php echo paginate_links(array(
                    'total' => $simulations->max_num_pages,
                    'prev_text' => __('« Précédent'),
                    'next_text' => __('Suivant »'),
                    'mid_size' => 1,
                    'class' => 'pagination-link', // Ajout de la classe "pagination-link"
                    'prev_next' => true,
                    'prev_arrow' => '<span class="prev-icon"></span>',
                    'next_arrow' => '<span class="next-icon"></span>',
                )); ?>
            </div>



        </div>

        <?php  } ?>
        
        <?php if ( is_page( 41 ) ) { ?>
        <!-- SIMULATEUR -->
            
        <div class="container">
            <?php
                if ( is_user_logged_in() ) {
                    ?>

                    <div class="section_buttons_sim_aide">
                        <div class="div_input modal_trigger">
                            <div class="input_submit_simulateur" id="btn_aide">Besoin d'aide ?</div>
                        </div>
                        <div class="div_aide modal_trigger">
                            <img class="icons_simulateur_aide" id="icon_aide" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/green_help-svgrepo-com.svg" alt="Icone d'aide"/>
                        </div>
                    </div>

                    <p class="info-simulation">Pour information, dans la saisie du simulateur : 1 = 1 heure et 0,5 = 30 minutes.</p>
                    <form id="ajout-simulation-form" method="post" enctype="multipart/form-data">

                        <div class="section_3_items_simulateur">
                            
                            <div>
                                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/computer.svg" alt="Icone d'un ordinateur"/>
                                <label for="custom_meta_field">Choisir une option :</label>
                                <select name="custom_meta_field" id="custom_meta_field">
                                    <option value="Ordinateur portable">Ordinateur portable</option>
                                    <option value="Ordinateur fixe">Ordinateur fixe</option>
                                </select>
                            </div>

                            <div>
                                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/uptime.svg" alt="Icone du temps passé sur ordinateur"/>
                                <label for="mon_champ_personnalise">Temps passé sur l'ordinateur, nombre d'heure(s) :</label>
                                <input type="number" step="any" id="mon_champ_personnalise" name="mon_champ_personnalise" required="required">
                            </div>

                            <div>
                                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/video.svg" alt="Icone vidéo"/>
                                <label for="mon_champ_personnalise_2">Temps passé à visionner du contenu vidéo (YouTube/Netflix) :</label>
                                <input type="number" step="any" id="mon_champ_personnalise_2" name="mon_champ_personnalise_2" required="required">
                            </div>
            
                        </div>

                        <div class="section_3_items_simulateur">

                            <div>
                                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/live.svg" alt="Icone live"/>
                                <label for="mon_champ_personnalise_3">Temps passé à visionner du contenu live (Twitch/YouTube) :</label>
                                <input type="number" step="any" id="mon_champ_personnalise_3" name="mon_champ_personnalise_3" required="required">
                            </div>
                            
                            <div>
                                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/conference.svg" alt="Icone visioconférence"/>
                                <label for="mon_champ_personnalise_4">Temps passé en visioconférence (Teams/Zoom) :</label>
                                <input type="number" step="any" id="mon_champ_personnalise_4" name="mon_champ_personnalise_4" required="required">
                            </div>
                            
                            <div>
                                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/mails.svg" alt="Icone mails"/>
                                <label for="mon_champ_personnalise_5">Nombre de mails envoyés :</label>
                                <input type="number" step="any" id="mon_champ_personnalise_5" name="mon_champ_personnalise_5" required="required">
                            </div>
                            
                        
                        </div>

                        <div class="section_3_items_simulateur">

                            <div>
                                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/game.svg" alt="Icone jeux-vidéos"/>
                                <label for="mon_champ_personnalise_6">Temps passé sur les jeux-vidéos :</label>
                                <input type="number" step="any" id="mon_champ_personnalise_6" name="mon_champ_personnalise_6" required="required">
                            </div>
                            
                            <div>
                                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/download.svg" alt="Icone téléchargements"/>
                                <label for="mon_champ_personnalise_7">Nombre de téléchargements :</label>
                                <input type="number" step="any" id="mon_champ_personnalise_7" name="mon_champ_personnalise_7" required="required">
                            </div>
                            
                            <div>
                                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/music.svg" alt="Icone musique"/>
                                <label for="mon_champ_personnalise_8">Temps passé à écouter de la musique (Spotify/Deezer) :</label>
                                <input type="number" step="any" id="mon_champ_personnalise_8" name="mon_champ_personnalise_8" required="required">
                            </div>

                        </div>
        
                        <input class="input_submit_simulateur" type="submit" name="submit" value="Faire la simulation">
                    </form>

                    <div class="modal_container">
                        <div class="modal_overlay modal_trigger"></div>
                        <div class="modal_content">
                            <button class="modal_close modal_trigger">X</button>
                            <h1>Pour vous aider à mieux vous familiariser avec le simulateur :</h1>
                            <p>La capture ci-dessous vous montre un exemple fait avec le simulateur avec l'empreinte carbone total émis et trois classes d'équivalence utiles.
                                Il est à noter qu'une fois l'utilisateur inscrit et connecté et qu'il procède à la simulation, le simulateur stockera les données sur les 10 dernières simulations.
                            </p>
                            <img src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/simulateur_results_cropped.png" width=100% alt="résultat simulateur"/>
                        </div>
                    </div>

                    <?php
                } else {
                    ?>

                    <form id="ajout-simulation-form" class="simulation_guest">
                        <div class="section_3_items_simulateur">

                            <div>
                                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/uptime.svg" alt="Icone du temps passé sur ordinateur"/>
                                <label for="temps-ordinateur">Temps passé sur l'ordinateur, nombre d'heure(s) :</label>
                                <input type="number" id="temps-ordinateur" name="temps-ordinateur" min="0" required="required">
                            </div>

                            <div>
                                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/video.svg" alt="Icone vidéo"/>
                                <label for="temps-youtube">Temps passé à visionner du contenu vidéo (YouTube/Netflix) :</label>
                                <input type="number" id="temps-youtube" name="temps-youtube" min="0" required="required">
                            </div>


                            <div>
                                <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/mails.svg" alt="Icone mails"/>
                                <label for="nb-emails">Nombre de mails envoyés :</label>
                                <input type="number" id="nb-emails" name="nb-emails" required="required">
                            </div>

                        </div>
                        <input type="button" class="submit_guest" id="button_results" onclick="calculer()" value="Calculer">
                    </form>
                    <div class="div_result_single_simulation" id="resultat_guest" name="resultat_guest">
                        <img class="icons_simulateur" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/result.svg" alt="Icone résultat">
                        <div id="resultat"></div>
                    </div>
                    
                    <?php
                }
            ?>
            
        </div>

        <?php  } ?>
        
        
        <?php if ( is_page( 269 ) ) {
            // PAGE PARAMETRES 
            if ( is_user_logged_in() ) {
                ?>
                <div class="container">                    
                    <?php echo 'En construction'; ?> <br>
                    <?php echo 'Notre application continue à évoluer et nous ajoutons les dernières retouches. Revenez plus tard et merci pour votre patience.'; ?> 
                </div>
                <br>
                <?php
            } else {
                ?>
                <div class="container">
                    <?php echo 'Vous n\'avez pas le droit d\'être là'; ?> 
                </div>
                <?php
            }
        }
        ?>

        <?php if ( is_page( 70 ) ) {
            // Article de presse 
                ?>
                <div class="container">
                    <?php echo 'En construction'; ?> <br>
                    <?php echo 'Notre application continue à évoluer et nous ajoutons les dernières retouches. Revenez plus tard et merci pour votre patience.'; ?> 
                </div>
                <br>
                <?php
        }
        ?>

        <?php if ( is_page( 72 ) ) {
            // FAQ 
                ?>
                <div class="container">
                    <?php echo 'En construction'; ?> <br>
                    <?php echo 'Notre application continue à évoluer et nous ajoutons les dernières retouches. Revenez plus tard et merci pour votre patience.'; ?> 
                </div>
                <br>
                <?php
        }
        ?>

        <?php if ( is_page( 3 ) ) {
            // Mentions légales 
                ?>
                <div class="container">
                <br>
                    <p>Conformément aux dispositions de la loi n° 2004-575 du 21 juin 2004 pour la confiance en l'économie numérique, il est précisé aux utilisateurs du site Mon e-impact l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi.
                    </p>
                    <br>
                    <h2>Edition du site</h3>
                    <br>
                    <p>Le présent site, accessible à l’URL https://mon-eimpact.online/ (le « Site »), est édité par :<br>
                    Mon e-impact , société au capital de 42000 euros, inscrite au R.C.S. de LIMOGES sous le numéro RCS LIMOGES B 514 919 844321 645 987 RM 012, dont le siège social est situé au 33 Rue François Mitterrand, 87000 Limoges, représenté(e) par Pauline Lemarchand dûment habilité(e)
                    </p>
                    <br>
                    <h2>Hébergement</h3>
                    <br>
                    <p>Le Site est hébergé par la société Hostinger International LTD, situé , (contact téléphonique ou email : https://www.hostinger.fr/contact).</p>
                    <br>
                    <h2>Directeur de publication </h3>
                    <br>
                    <p>Le Directeur de la publication du Site est Pauline Lemarchand.</p>
                    <br>
                    <h2>Nous contacter </h3>
                    <br>
                    <p>Par téléphone : +33123456789<br>
                    Par email : Moneimpact@gmail.com<br>
                    Par courrier : 33 Rue François Mitterrand, 87000 Limoges<br>
                    </p>
                    <br>
                    <h2>Données personnelles</h3>
                    <br>
                    <p>Le traitement de vos données à caractère personnel est régi par notre Charte du respect de la vie privée, disponible depuis la section "Charte de Protection des Données Personnelles", conformément au Règlement Général sur la Protection des Données 2016/679 du 27 avril 2016 («RGPD»).</p>
                    <br>
                </div>
                <br>
                <?php
        }
        ?>

        <?php if ( is_page( 74 ) ) {
            // Politique de gestion de cookies
                ?>
                <div class="container">
                <br>

                <h2>Introduction</h2>
                <br>
                <p>Mon e-impact (accessible à l'adresse https://mon-eimpact.online/) utilise des cookies pour améliorer l'expérience utilisateur et optimiser les performances de notre site web. La présente politique de gestion des cookies a pour but de vous informer sur l'utilisation des cookies sur notre site et la manière dont vous pouvez gérer vos préférences.</p>
                <br>
                <h2>Qu'est-ce qu'un cookie ?</h2>
                <br>
                <p>Un cookie est un petit fichier texte stocké sur votre ordinateur, tablette ou téléphone portable lorsque vous visitez un site web. Les cookies sont utilisés pour faciliter la navigation sur le site, améliorer les performances et fournir des informations aux propriétaires du site.</p>
                <br>
                <h2>Types de cookies et utilisation</h2>
                <br>
                <p>Mon e-impact utilise les types de cookies suivants :<br>

                a. Cookies indispensables : Ces cookies sont nécessaires au fonctionnement de notre site web. Ils ne peuvent pas être désactivés dans nos systèmes.<br>

                b. Cookies de performance : Ces cookies nous permettent de mesurer et d'analyser la manière dont les visiteurs utilisent notre site afin d'améliorer sa performance et de proposer un meilleur contenu.<br>

                c. Cookies fonctionnels : Ces cookies permettent d'améliorer les fonctionnalités et la personnalisation de notre site, en mémorisant vos préférences et choix.<br>

                d. Cookies de ciblage et publicitaires : Ces cookies sont utilisés pour afficher des publicités pertinentes en fonction de vos centres d'intérêt et pour limiter le nombre de fois où vous voyez une publicité.</p>
                <br>
                <h2>Gestion des préférences</h2>
                <br>
                <p>Vous pouvez gérer vos préférences en matière de cookies en modifiant les paramètres de votre navigateur. La plupart des navigateurs vous permettent de bloquer ou de supprimer les cookies, mais cela peut affecter la fonctionnalité du site.

                Pour plus d'informations sur la gestion des cookies, veuillez consulter le guide d'utilisation de votre navigateur ou visiter www.allaboutcookies.org.</p>
                <br>
                <h2>Consentement</h2>
                <br>
                <p>En utilisant notre site, vous acceptez l'utilisation des cookies conformément à cette politique de gestion des cookies. Si vous n'acceptez pas l'utilisation de ces cookies, veuillez modifier les paramètres de votre navigateur comme décrit ci-dessus.</p>
                <br>
                <h2>Modifications de la politique de gestion des cookies</h2>
                <br>
                <p>Nous nous réservons le droit de modifier cette politique de gestion des cookies à tout moment. Nous vous encourageons à consulter régulièrement cette page pour prendre connaissance des éventuelles modifications.</p>
                <br>
                <h2>Contact</h2>
                <br>
                <p>Si vous avez des questions ou des préoccupations concernant notre utilisation des cookies, n'hésitez pas à nous contacter à l'adresse e-mail suivante : moneimpact@gmail.com.</p>
                </div>
                <br>
                <?php
        }
        ?>


        <?php if ( is_page( 19 ) ) { ?>
        <?php if( get_field('image_banniere_de_front_page') ): ?>
            <div class="div_image_banniere_de_front_page">
                <div class="wrapper_content_banniere_front_page">
                    <div class="container">
                        <h1>Simulez votre impact environnemental</h1>
                        <span>Pour une navigation éco-responsable</span>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php
        $section_cest_quoi_de_front_page = get_field('section_cest_quoi_de_front_page');
        if( $section_cest_quoi_de_front_page ): ?>

            <div class="container">

                <div class="section_cest_quoi">

                    <div class="wrapper_content_cest_quoi">
                        <h2><?php echo $section_cest_quoi_de_front_page['titre_section']; ?></h2>
                        <div class="content_cest_quoi">
                            <p><?php echo $section_cest_quoi_de_front_page['zone_de_texte_de_la_section']; ?></p>
                        </div>
                    </div>

                    <div class="wrapper_img_cest_quoi">
                        <img class="image_section_cest_quoi" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/LogoMonEImpact.svg" />
                    </div>

                </div>

            </div>

        <?php endif; ?>

        <?php
        $section_nos_objectifs = get_field('section_nos_objectifs');
        if( $section_nos_objectifs ): ?>

            <div class="container">

                <div class="section_nos_objectifs">

                    <div class="title_nos_objectifs">
                        <h2><?php echo $section_nos_objectifs['titre_section']; ?></h2>
                    </div>
                    <div class="img_objectifs">
                        <img class="image_section_nos_objectifs" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/earth-green.svg" />
                    </div>
                </div>

            </div>

        <?php endif; ?>

        <?php
        $section_redirection_simulateur = get_field('section_redirection_simulateur');
        if( $section_redirection_simulateur ): ?>

            <div class="section_redirection_simulateur">

                <div class="container">
                    <div class="section_simulator">
                        <div class="content_simulator">
                            <h2><?php echo $section_redirection_simulateur['titre_section']; ?></h2>
                            <p><?php echo $section_redirection_simulateur['texte_section']; ?></p>
                            <a href="#">Essayer</a>
                        </div>
                        <div class="img_section_simulator">
                            <img class="img_simulator" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/computer-and-people-svgrepo-com.svg" />
                        </div>
                    </div>
                </div>

            </div>


        <?php endif; ?>

        <?php
        $section_conseils = get_field('section_conseils');
        if( $section_conseils ): ?>

            <div class="container">

                <div class="section_conseils">


                    <div class="wrapper_img_conseils">
                        <!--<img class="image_section_conseils" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/solution-svgrepo-com.svg" />-->
                        <h1>Le numérique au coeur de notre quotidien</h1>
                    </div>
                    <div class="wrapper_content_conseils">
                        <!--<h2><?php echo $section_conseils['titre_section']; ?></h2>-->
                        <div class="content_conseils">
                            <p><?php echo $section_conseils['zone_de_texte_de_la_section_3']; ?></p>
                        </div>
                        <div class="link_conseils">
                            <a href="#">Eclairez-moi</a>
                        </div>
                    </div>

                </div>

            </div>

        <?php endif; ?>

        <?php
        $section_espace = get_field('section_espace');
        if( $section_espace ): ?>

            <div class="section_espace">

                <div class="container">

                    <h2><?php echo $section_espace['titre_section']; ?></h2>
                    <a href="#">S'inscrire</a>

                </div>

            </div>


        <?php endif; ?>

        <?php  } ?>


	<?php endwhile; endif; ?>

<?php get_footer(); ?>