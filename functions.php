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

/**
 * Register widget area.
 * 
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function nest378_widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Special Widgets', 'nest378' ),
			'id' => 'sidebar-special',
			'description' => __( 'Add widgets here to appear in your sidebar.', 'nest378' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Note', 'nest378' ),
			'id' => 'header-note',
			'description' => __( 'Add something to the header on the front page.', 'nest378' ),
			'before_widget' => '<aside class="header-note">',
			'after_widget' => '</aside>',
		)
	);
	
	register_sidebar(
		array(
			'name' => __( 'Entry Points', 'nest378' ),
			'id' => 'entry-points',
			'description' => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nest378_widgets_init' );

/**
 * Set excerpt length.
 */
add_filter( 'excerpt_length', function() {
	return 25;
});

function nest378_register_menu() {
	register_nav_menus( array(
		'footer-menu' => __( 'Footer Menu', 'nest378' ),
	) );
}
add_action( 'after_setup_theme', 'nest378_register_menu' );

add_filter( 'twentyfifteen_custom_header_args', function() {
	$color_scheme        = twentyfifteen_get_color_scheme();
	$default_text_color  = trim( $color_scheme[4], '#' );

	return array(
		'default-text-color'     => $default_text_color,
		'width'                  => 1403,
		'height'                 => 350,
		'wp-head-callback'       => 'twentyfifteen_header_style',
	);
});

function twentyfifteen_header_style() {

	// If no custom options for text are set, let's bail.
	if ( empty( $header_image ) && display_header_text() ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css" id="twentyfifteen-header-css">
		<?php

			// Has the text been hidden?
			if ( ! display_header_text() ) :
		?>
		.site-title,
		.site-description {
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
		}
		<?php endif; ?>
	</style>
	<?php
}
