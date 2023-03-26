<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
      <?php wp_head(); ?>
  </head>

  <body id="body" <?php body_class(); ?>>

    <header class="header">

        <div class="container">

            <div class="inside_container_header">
                
                <a href="https://mon-eimpact.online/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoMonEImpact2.svg" alt="Logo mon e-impact"></a>

                <?php
                    if (is_user_logged_in()) {
                        wp_nav_menu(
                            array(
                            'theme_location' => 'top_menu_connected', // choix du menu
                            'container' => 'ul', // éviter d'avoir une div autour mais une balise HTML ul
                            'menu_class' => 'header_menu', // ma classe personnalisée CSS
                            )
                        );
                        ?>
                        <div id="mySidenav" class="sidenav">
                            <a id="closeBtn" href="#" class="close">&times;</a>
                            <ul>
                                <li><a href="https://mon-eimpact.online/simulateur/">Simulateur</a></li>
                                <li><a href="https://mon-eimpact.online/nos-astuces/">Conseils</a></li>
                                <li><a href="https://mon-eimpact.online/a-propos/">Qui sommes-nous</a></li>
                                <li><a href="https://mon-eimpact.online/contact/">Contact</a></li>
                                <li calss="account_button""><a href="https://mon-eimpact.online/mon-espace/">Mon espace</a></li>
                            </ul>
                        </div>

                        <a href="#" id="openBtn">
                            <span class="burger-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                            </span>
                        </a>
                        <?php
                    } else {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'top_menu_not_connected', // choix du menu
                                'container' => 'ul', // éviter d'avoir une div autour mais une balise HTML ul
                                'menu_class' => 'header_menu', // ma classe personnalisée CSS
                            )
                        );
                        ?>
                        <div id="mySidenav" class="sidenav">
                            <a id="closeBtn" href="#" class="close">&times;</a>
                            <ul>
                                <li><a href="https://mon-eimpact.online/simulateur/">Simulateur</a></li>
                                <li><a href="https://mon-eimpact.online/nos-astuces/">Conseils</a></li>
                                <li><a href="https://mon-eimpact.online/a-propos/">Qui sommes-nous</a></li>
                                <li><a href="https://mon-eimpact.online/contact/">Contact</a></li>
                                <li class="account_button"><a href="https://mon-eimpact.online/sidentifier/">S'identifier</a></li>
                            </ul>
                        </div>

                        <a href="#" id="openBtn">
                            <span class="burger-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                            </span>
                        </a>
                        <?php
                    }
                ?>

<!--
                <div id="mySidenav" class="sidenav">
                    <a id="closeBtn" href="#" class="close">&times;</a>
                    <ul>
                        <li><a href="https://mon-eimpact.online/simulateur/">Simulateur</a></li>
                        <li><a href="https://mon-eimpact.online/nos-astuces/">Conseils</a></li>
                        <li><a href="https://mon-eimpact.online/a-propos/">Qui sommes-nous</a></li>
                        <li><a href="https://mon-eimpact.online/contact/">Contact</a></li>
                    </ul>
                </div>

                <a href="#" id="openBtn">
                <span class="burger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                </a>
-->
            </div>

        </div>

    </header>

    <?php wp_body_open(); ?>