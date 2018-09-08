<?php
/**
 * Dequeue Google Fonts.
 */
function nest378_dequeue_google_fonts() {
	wp_dequeue_style( 'twentyfifteen-fonts' );
}

add_action( 'wp_enqueue_scripts', 'nest378_dequeue_google_fonts', 20 );

/**
 * Add styles in the correct order.
 */
function nest378_styles() {
	wp_deregister_style( 'twentyfifteen-style' );
	wp_register_style( 'twentyfifteen-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'twentyfifteen-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'nest378-style', get_stylesheet_directory_uri() . '/style.css', [ 'twentyfifteen-style' ] );
}

add_action( 'wp_enqueue_scripts', 'nest378_styles' );
