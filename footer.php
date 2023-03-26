    <footer class="footer">

        <div class="container">

            <div class="inside_container_footer">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoMonEImpact2.svg" alt="Logo mon e-impact">

                <div class="elmt-footer">
                <div class="div_footer_menu">
                    <h3>NAVIGATION</h3>
                    <?php
                        wp_nav_menu(
                            array(
                            'theme_location' => 'bottom_menu', // choix du menu
                            'container' => 'ul', // éviter d'avoir une div autour mais une balise HTML ul
                            'menu_class' => 'footer_menu', // ma classe personnalisée CSS
                            )
                        );
                    ?>
                </div>

                <div class="div_footer_menu_2">
                    <h3>À PROPOS</h3>
                    <?php
                        wp_nav_menu(
                            array(
                            'theme_location' => 'bottom_menu_2', // choix du menu
                            'container' => 'ul', // éviter d'avoir une div autour mais une balise HTML ul
                            'menu_class' => 'footer_menu_2', // ma classe personnalisée CSS
                            )
                        );
                    ?>
                </div>

                <div class="div_footer_menu_2">
                    <h3>SUIVEZ-NOUS</h3>
                    <div class="section_reseaux_sociaux_footer">
                        <img class="logo_facebook" src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-svgrepo-com.svg" alt="Logo facebook">
                        <img class="logo_twitter" src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-round-svgrepo-com.svg" alt="Logo twitter">
                        <img class="logo_instagram" src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-round-svgrepo-com.svg" alt="Logo instagram">
                    </div>
                </div>
                </div>

            </div>
            
            <div class="copyright_footer">
                <p>Copyright 2023 © Mon e-impact | Tous droits réservés</p>
            </div>

        </div>

    </footer>
    <?php wp_footer(); ?>

    <!-- script google possiblement ici -->
    </body>
</html>