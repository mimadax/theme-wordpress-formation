<?php
/*
 *  MON FICHIER DE FONCTION EN PHP
 */
 
 
 
// ##########################
//ajouter zone de menu
// ##########################
function register_my_menu() {
    register_nav_menu('menu-principal',__( 'Menu Principal' ));
    register_nav_menu('menu-secondaire',__( 'Menu Secondaire' ));
    register_nav_menu('menu-footer',__( 'Menu Footer' ));
}
add_action( 'init', 'register_my_menu' );



// ##########################
/* Register Custom Navigation Walker */
// ##########################
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );  
add_filter( 'nav_menu_link_attributes', 'bootstrap5_dropdown_fix' );
function bootstrap5_dropdown_fix( $atts ) {
     if ( array_key_exists( 'data-toggle', $atts ) ) {
         unset( $atts['data-toggle'] );
         $atts['data-bs-toggle'] = 'dropdown';
     }
     return $atts;  
}

function your_theme_enqueue_styles() {
    wp_enqueue_style('main-styles', get_stylesheet_uri());
    // Ajoutez d'autres fichiers CSS si nécessaire
}
add_action('wp_enqueue_scripts', 'your_theme_enqueue_styles');




