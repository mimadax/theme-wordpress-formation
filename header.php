<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/accessconfig.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
		<script src="<?php echo get_template_directory_uri(); ?>/js/JQuery.min.js"></script>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header>
			
		<nav class="navbar navbar-expand-lg">
            <div class="container">
                <?php
                // Récupérer l'ID du logo depuis la page d'options
                $logo_id = get_field('logo', 'option');
                if ($logo_id) {
                    // Récupérer l'URL de l'image du logo
                    $logo_url = wp_get_attachment_image_url($logo_id, 'full');
                    // Afficher le logo avec un lien vers la page d'accueil
                    echo '<a class="navbar-brand" href="' . esc_url(home_url('/')) . '">';
                    echo '<img src="' . esc_url($logo_url) . '" alt="logo" class="img-fluid">';
                    echo '</a>';
                } else {
                    // Si aucun logo n'est défini, afficher le nom du site
                    echo '<a class="navbar-brand" href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
                }
                ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'menu-principal',
                        'container'       => false,
                        'depth'           => 3,
                        'menu_class'      => 'navbar-nav ml-auto',
                        'link_class'      => 'nav-link',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?> 
                </div>
            </div>
        </nav>

		</header><!-- #site-header -->

		<main>