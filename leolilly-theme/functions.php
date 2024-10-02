<?php
function leolilly_enqueue_styles() {
    wp_enqueue_style( 'leolilly-style', get_stylesheet_uri() );

    // Enqueue Google Fonts
    wp_enqueue_style( 'leolilly-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway|Ubuntu|Pacifico|Cutive+Mono|Source+Sans+Pro' );
    
    // Enqueue Font Awesome
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
    
    // Enqueue custom JavaScript
    wp_enqueue_script( 'leolilly-script', get_template_directory_uri() . '/js/script.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'leolilly_enqueue_styles' );
?>