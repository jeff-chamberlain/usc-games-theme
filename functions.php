<?php
/**
 * USC Games Theme functions and definitions
 *
 * @package USC Games Theme
 * @since USCGames Theme v1.0
 */
 if ( ! isset( $content_width ) )
    $content_width = 980; /* pixels */
/** Enqueue scripts and styles */
function uscgames_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'feature-slider', get_template_directory_uri()  . '/feature-slider.css' );
    wp_enqueue_style( 'faculty-slider', get_template_directory_uri()  . '/faculty-slider.css' );
    wp_enqueue_script( 'jquery.min', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js' );
	wp_enqueue_script( 'jquery.nivo.slider.pack', get_template_directory_uri()  . '/scripts/jquery.nivo.slider.pack.js' );
}
add_action( 'wp_enqueue_scripts', 'uscgames_scripts' );
register_sidebar();


