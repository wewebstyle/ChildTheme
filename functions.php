<?php
// Activation du Thémes Enfant
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// retrait des erreurs de login de wordpress 
add_filter('login_errors', 'wpm_hide_errors');

function wpm_hide_errors() {
    // On retourne notre propre phrase d'erreur
    return "L'identifiant ou le mot de passe est incorrect";
}

// retait de la version php 
remove_action('wp_head', 'wp_generator');