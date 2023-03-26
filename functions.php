<?php

ob_start();

// Types de publication, taxonomies et metaboxes
require_once get_template_directory() . '/inc/post-types.php';
require_once get_template_directory() . '/inc/meta-boxes.php';


// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );


// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


// Ajouter les différents scripts/css
function moneimpact_register_assets() {

    // Déclarer jQuery
    wp_enqueue_script('jquery' );

    // Déclarer le JS
	  wp_enqueue_script(
        'moneimpact-script',
        get_template_directory_uri() . '/script.js',
        array( 'jquery' ),
        '1.0',
        true
    );

    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style(
        'moneimpact',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    // Déclarer le fichier CSS à un autre emplacement
    wp_enqueue_style(
        'moneimpact-main-css',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'moneimpact_register_assets' );


// Ajouter de la fonctionnalité des menus header/footer
register_nav_menus( array(
	'top_menu_not_connected' => 'Menu haut de page non connecté',
	'top_menu_connected' => 'Menu haut de page connecté',
	'bottom_menu' => 'Menu bas de page',
    'bottom_menu_2' => 'Menu bas de page 2'
) );


// Récuperation du login de l'utilisateur connecté
function wpb_current_user_info() {
    $current_user = wp_get_current_user();
    echo 'Bienvenue ' . $current_user->user_login . ' !';
}


// Ajout de la possibilité de déconnexion
function add_logout_button() {
    if ( is_user_logged_in() ) {
        $logout_url = wp_logout_url( home_url() );
        echo '<a class="logout_button" href="' . $logout_url . '">Déconnexion</a>';
    }
}


// Ajouter personnalisation de l'espace login
function moneimpact_login() {
	wp_enqueue_style(
        'custom-login',
        get_template_directory_uri() . '/assets/css/custom-login.css',
        array( 'login' )
    );
}
add_action( 'login_enqueue_scripts', 'moneimpact_login' );


// Fonction pour permettre l'inscription d'un nouvel utilisateur en BDD
function register_user() {
    if (isset($_POST['register'])) {
        $username = sanitize_user($_POST['username']);
        $email = sanitize_email($_POST['email']);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        
        if (username_exists($username)) {
            $error[] = 'Ce nom d\'utilisateur est déjà pris.';
        }
        
        if (!is_email($email)) {
            $error[] = 'Adresse e-mail invalide.';
        }
        
        if (email_exists($email)) {
            $error[] = 'Cette adresse e-mail est déjà utilisée.';
        }
        
        if ($password != $confirm_password) {
            $error[] = 'Les mots de passe ne correspondent pas.';
        }

        // Vérifie si le mot de passe à 10 chiffres minimum
        if (strlen($password) < 10)
        {
            $error[] = 'Le mot de passe doit avoir au minimum 10 caractères';
        }

        // Vérifie si le mot de passe à au moins une majuscule et une minuscule
        if(!preg_match("#[A-Z]+#", $password) || !preg_match("#[a-z]+#", $password))
        {
            $error[] = 'Le mot de passe doit avoir au moins une majuscule et une minuscule';
        }

        // Vérifie si le mot de passe possède au moins un chiffre
        if(!preg_match("#[0-9]+#", $password)) {
            $error[] = 'Le mot de passe doit contenir au moins un chiffre.';
        }

        // Vérifie si le mot de passe à au moins un caractère spécial
        if(!preg_match("#[\W]+#", $password)) {
            $error[] = 'Le mot de passe doit contenir au moins un caractère spécial.';
        }
        
        if (!empty($error)) {
            // Si des erreurs sont trouvées, les afficher dans le formulaire
            echo '<div id="register-error">' . implode('<br>', $error) . '</div>';
        }
        
        if (empty($error)) {
            $user_id = wp_create_user($username, $password, $email);
            wp_set_current_user($user_id);
            wp_set_auth_cookie($user_id);
            do_action('wp_login', $username);
            wp_redirect( 'https://mon-eimpact.online/mon-espace' );
            exit;
        }
    }
}
add_action('init', 'register_user');


// Fonction pour permettre la connexion d'utilisateur
function login_user() {
    if (isset($_POST['login'])) {
        $username = sanitize_user($_POST['username']);
        $password = $_POST['password'];
        
        $user = wp_signon(array(
            'user_login'    => $username,
            'user_password' => $password,
            'remember'      => true
        ));
        
        if (is_wp_error($user)) {
            $error = 'Nom d\'utilisateur ou mot de passe incorrect.';
        } else {
            wp_redirect( 'https://mon-eimpact.online/mon-espace' );
            exit;
        }
    }
}
add_action('init', 'login_user');


// Fonction pour masquer la barre d'administration si l'utilisateur n'est pas administrateur
function hide_admin_bar_for_non_admins() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'hide_admin_bar_for_non_admins');


// Fonction pour empêcher un utilisateur qui n'est pas administrateur d'aller sur le tableau de bord
function redirect_to_front_end() {
    // Vérifier si l'utilisateur est connecté
    if ( is_user_logged_in() && is_admin() && !current_user_can('administrator')) {
        // Rediriger l'utilisateur vers la page d'accueil
        wp_redirect( home_url() );
        exit;
    }
}
add_action( 'init', 'redirect_to_front_end' );


// Fonction pour permettre l'ajout d'une simulation depuis le formulaire du Simulateur
function ajouter_simulation() {
    $current_user = wp_get_current_user();
    $username = $current_user->user_login;
    $date_actuelle = wp_date('j F Y');
    $heureActuelle = date('H:i');
    $post_title = 'Simulation du '. $date_actuelle . ' à ' . $heureActuelle . ' - ' . $username; //Permet de renseigner un titre par défaut - permet de ne pas contraindre l'utilisateur à le faire

    if (isset($_POST['submit'])) {

        $simulation = array(
            'post_title'    => wp_strip_all_tags( $post_title ),
            'post_type' => 'simulation',
            'post_status' => 'publish'
        );
        $post_id = wp_insert_post($simulation);

        save_custom_meta( $post_id );

        if (!is_wp_error($post_id)) {

            if (!empty($mon_champ_personnalise)) {
                update_post_meta($post_id, '_mon_champ_personnalise', $mon_champ_personnalise);
            }

            if (!empty($mon_champ_personnalise_2)) {
                update_post_meta($post_id, '_mon_champ_personnalise_2', $mon_champ_personnalise_2);
            }

            if (!empty($mon_champ_personnalise_3)) {
                update_post_meta($post_id, '_mon_champ_personnalise_3', $mon_champ_personnalise_3);
            }

            if (!empty($mon_champ_personnalise_4)) {
                update_post_meta($post_id, '_mon_champ_personnalise_4', $mon_champ_personnalise_4);
            }

            if (!empty($mon_champ_personnalise_5)) {
                update_post_meta($post_id, '_mon_champ_personnalise_5', $mon_champ_personnalise_5);
            }

            if (!empty($mon_champ_personnalise_6)) {
                update_post_meta($post_id, '_mon_champ_personnalise_6', $mon_champ_personnalise_6);
            }

            if (!empty($mon_champ_personnalise_7)) {
                update_post_meta($post_id, '_mon_champ_personnalise_7', $mon_champ_personnalise_7);
            }

            if (!empty($mon_champ_personnalise_8)) {
                update_post_meta($post_id, '_mon_champ_personnalise_8', $mon_champ_personnalise_8);
            }

            wp_redirect(get_permalink($post_id));
            exit;
        }
    }
}
add_action( 'init', 'ajouter_simulation' );


// Fonction pour sauvegarder les données de la metaboxe du résultat de simulation
add_action( 'save_post', 'enregistrer_metabox_resultat' );
function enregistrer_metabox_resultat( $post_id ) {

    $valeur0 = get_post_meta( $post_id, 'custom_meta_key', true ); // Choix ordinateur
    $valeur = get_post_meta( $post_id, '_mon_champ_personnalise', true ); // Temps passé sur ordi
    $valeur2 = get_post_meta( $post_id, '_mon_champ_personnalise_2', true ); // Temps passé vidéo
    $valeur3 = get_post_meta( $post_id, '_mon_champ_personnalise_3', true ); // Temps passé stream
    $valeur4 = get_post_meta( $post_id, '_mon_champ_personnalise_4', true ); // Temps passé visio
    $valeur5 = get_post_meta( $post_id, '_mon_champ_personnalise_5', true ); // Nb de mails envoyés
    $valeur6 = get_post_meta( $post_id, '_mon_champ_personnalise_6', true ); // Temps passé sur les jeux-vidéos
    $valeur7 = get_post_meta( $post_id, '_mon_champ_personnalise_7', true ); // Nb de téléchargements
    $valeur8 = get_post_meta( $post_id, '_mon_champ_personnalise_8', true ); // Temps passé à écouter musique
    
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
}


// Fonction pour calculer et afficher la consommation des 10 dernieres simulations
function calculAdditionSimulation() {
    $args = array(
        'post_type' => 'simulation',
        'posts_per_page' => 10,
        'author' => get_current_user_id(),
        'orderby' => 'date',
        'order' => 'DESC'
    );
    
    $query = new WP_Query( $args );
    
    $meta_values = array();
    
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
    
            $meta_values[] = get_post_meta( get_the_ID(), 'total', true );
        }
    }
    
    $average = 0;
    
    if ( ! empty( $meta_values ) ) {
        $average = array_sum( $meta_values );
    }

    return round($average, 2);
    
    wp_reset_postdata();
}


// Fonction pour vérifier et empêcher l'accès à un utilisateur d'aller sur une simulation d'un autre
function check_post_authorization($query) {
    // Vérifiez que la requête est pour un single post d'un CPT personnalisé
    if (is_singular('simulation')) {
        // Récupérer l'ID de l'utilisateur connecté
        $current_user_id = get_current_user_id();
        
        // Récupérer l'ID de l'auteur du post en cours de consultation
        $post_author_id = get_post_field('post_author', $query->query_vars['p']);
        
        // Vérifier si l'utilisateur connecté est l'auteur du post
        if ($current_user_id != $post_author_id) {
            // Si l'utilisateur n'est pas l'auteur, redirigez-le vers une page d'erreur ou une autre page de votre choix
            wp_redirect('https://mon-eimpact.online/mon-espace/');
            exit;
        }
    }
}
add_action('pre_get_posts', 'check_post_authorization');


// Ajout de l'ouverture/fermeture par clic des rubriques de la page "conseils"
function wpdocs_enqueue_my_script() {
    wp_enqueue_script( 'conseils', get_template_directory_uri() . '/assets/js/conseils.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_enqueue_my_script' );


// Hamburger function
function hamburger() {
    wp_enqueue_script( 'hamburger', get_template_directory_uri() . '/assets/js/hamburger.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'hamburger' );


// Modal function

function modal() {
    wp_enqueue_script( 'modal', get_template_directory_uri() . '/assets/js/modal.js', array(), '3.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'modal' );


//front-page function

function frontpage() {
    wp_enqueue_script( 'frontpage', get_template_directory_uri() . '/assets/js/front-page.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'frontpage' );


// Back to top
add_action( 'wp_footer', 'wppln_back_to_top' );
function wppln_back_to_top() {
    echo '<div class="div_to_top">
        <a id="totop" href="#">
            <img class="img_to_top" src="https://mon-eimpact.online/wp-content/themes/mon-eimpact/assets/images/arrow-up-alt-svgrepo-com.svg" />︎
        </a>
        </div>';
}


add_action( 'wp_head', 'wppln_back_to_top_style' );
function wppln_back_to_top_style() {
    echo '<style type="text/css">
        #totop {
            position: fixed;
            right: 30px;
            bottom: 30px;
            display: none;
            outline: none;
            border: solid #71AD47;
            background-color: #ffffff;
            border-radius: 25px;
        }
        
        .img_to_top {
            display: flex;
            margin: 0 auto;
            width: 5vh;
        }
        
        @media screen and (max-width: 800px) {
        #totop {
        right: 0px;
        bottom: 0px;
        }
        }
    </style>';
}


add_action( 'wp_footer', 'wppln_back_to_top_script' );
function wppln_back_to_top_script() {
    echo '<script type="text/javascript">
        jQuery(document).ready(function($){
            $(window).scroll(function () {
                if ( $(this).scrollTop() > 400 )
                    $("#totop").fadeIn();
                else
                    $("#totop").fadeOut();
            });
 
            $("#totop").click(function () {
                $("body,html").animate({ scrollTop: 0 }, 100 );
                return false;
            });
        });
    </script>';
}