<?php
/**
 *  Template Name: Frontpage
 */
?>
<?php get_header(); ?>

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


<?php get_footer(); ?>
