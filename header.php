<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage NeSt378
 * @since 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	
	<style>
		@font-face {
			font-family: 'Open Sans';
			font-style: normal;
			font-weight: 400;
			src: local('Open Sans Regular'), local('OpenSans-Regular'),
			url('/assets/fonts/open-sans-v15-latin-regular.woff2') format('woff2'), url('/assets/fonts/open-sans-v15-latin-regular.woff') format('woff');
		}
		
		@font-face {
			font-family: 'Open Sans';
			font-style: italic;
			font-weight: 400;
			src: local('Open Sans Italic'), local('OpenSans-Italic'),
			url('/assets/fonts/open-sans-v15-latin-italic.woff2') format('woff2'), url('/assets/fonts/open-sans-v15-latin-italic.woff') format('woff');
		}
		
		@font-face {
			font-family: 'Open Sans';
			font-style: normal;
			font-weight: 700;
			src: local('Open Sans Bold'), local('OpenSans-Bold'),
			url('/assets/fonts/open-sans-v15-latin-700.woff2') format('woff2'), url('/assets/fonts/open-sans-v15-latin-700.woff') format('woff');
		}
		
		@font-face {
			font-family: 'Open Sans';
			font-style: italic;
			font-weight: 700;
			src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'),
			url('/assets/fonts/open-sans-v15-latin-700italic.woff2') format('woff2'), url('/assets/fonts/open-sans-v15-latin-700italic.woff') format('woff');
		}
	</style>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>
	
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="custom-logo-link">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 234 84" xml:space="preserve">
					<style type="text/css">
						.st0{fill:#4473C4;}
						.st1{fill:#FFFFFF;}
					</style>
					
					<path class="st0" d="M75.6,1.1c4.9,3.2,5.5,8.1,4.7,13.2c-3.3,20.5-9.7,40.1-17.7,59.1C62,74.9,61,76.4,60,77.6C55.7,83,50,83,45.8,77.5c-8.1-10.5-12.3-22.7-16-35.2c-1.1-3.8-2.2-7.7-3.3-11.7c-2.1,1.6-1.9,3.9-2.5,5.9c-4.2,13.3-8.2,26.7-12.3,40.1C10.5,80,9,83.8,4.5,82.3C0.2,81-0.2,77.2,1,73.2c5.6-18.3,11.1-36.6,16.7-54.9c1-3.2,2.7-5.8,6.4-6.2c4.4-0.4,7.5,2.2,9.3,5.6c2.1,3.9,3.5,8.3,4.9,12.5c3.1,9.7,6.1,19.4,10.4,28.6c1.2,2.5,2.1,5.2,4.7,7.5C60.4,48.2,66,30,68.6,11c0.5-3.5,0.8-6.9,3-9.9C73.1-0.3,74.5,0.4,75.6,1.1z"/>
					<path class="st0" d="M145.4,71.9c10.6-2,17.7-8.6,22.9-17.6c2-3.5,1.1-5.5-2.8-6.4c-3.3-0.8-6.6-0.4-9.9-0.2c-7.2,0.6-14.5,0.4-18.3-7c-3.9-7.4-0.1-13.7,4.8-19c8.5-9.1,18.1-16.7,30.9-18.9c1-0.2,7.1-0.2,8.3,0.2c3.2,1,5.7,2.7,6.7,6.1c1.5,5.2-1.1,8.2-6.4,7.1c-11.5-2.3-26.9,4.6-32.9,14.8c-1.7,3-1,4.9,2.5,5.1c4,0.2,8-0.1,12-0.2c6.7-0.2,12.7,1.5,16.2,7.7c3.3,5.9,1.7,11.7-1.7,17c-7.5,12-17,21.4-32,23c-5.8,0.6-11.2-0.8-16-4.4c-2.2-1.6-3.8-3.7-4.1-6.6c-0.6-4.7,1.2-6.1,5.6-4.4c3.6,1.3,7.2,2.5,10.8,3.8C143,72.9,144.2,73.2,145.4,71.9z"/>
					<path class="st0" d="M233.6,36.2c0,0.1,0,0.2,0,0.3c0.5,4.9-4,6.7-7.6,7.5c-5.2,1.2-10.3,2.5-15.6,3.6c-2.3,0.5-3.4,1.5-3.9,3.8c-0.9,4.1-2.1,8.1-2.1,12.3c0,5.2,2.6,6.9,7.4,4.5c4-1.9,6.8-5.2,9.6-8.6c1.2-1.6,2.4-3.2,3.7-4.7c1.2-1.2,2.7-1.2,4.2-0.5c1.4,0.7,1.6,2,1.6,3.4c-0.1,8.9-11.3,21.3-20.2,22.4c-11.2,1.4-18.5-5.7-17.7-17.3c0.3-3.5,0.9-6.9,1.7-10.3c0.5-2.3,0.3-3.6-2.2-4.5c-2.8-0.9-4.4-3-3.8-6.2c0.7-3.5,3.3-4.4,6.4-4c3.3,0.4,4.8-1.1,5.4-4.2c0.8-4.2,2.3-8.3,2.2-12.7c-0.1-3.2,1.2-6,5.1-6c3.9,0,5.6,2.4,6,6c0.5,4.1-1.2,7.9-2.1,11.7c-0.7,3-0.3,2.9,4.2,2.5c2.2-0.2,3.9-0.9,6-1.3C225.9,33.1,232.1,31.2,233.6,36.2z"/>
					<path class="st0" d="M95.7,82C84,82.1,80.2,77.2,78.3,66.3c-2-11.5,18.6-30.7,29.3-31.1c4.9-0.2,9.3,1.3,11.4,6.4c1.9,4.6,0.4,10.4-3.7,14.1c-4.9,4.4-11,6-17.2,7.4c-1.5,0.3-2.9,0.6-4.4,0.7c-2,0.2-3.7,0.5-3.8,3c-0.1,2.3,0.9,3.8,3,4.6c2.8,1.1,5.5,0.8,8.3,0.1c4.3-1.1,7.9-3.5,11.6-5.7c2.4-1.4,5.4-3.5,7.5-0.4c2,2.8,0.4,6-1.8,8.1c-5.8,5.5-13,7.9-20.8,8.5C97,82,96.4,82,95.7,82z"/>
					<path class="st0" d="M145.4,71.9c-1.3,2-3,1.4-4.7,0.6c0.4-0.2,0.8-0.4,1.2-0.5C143,72,144.2,72,145.4,71.9z"/>
					<path class="st1" d="M95.5,53.1c2.2-3.3,4.5-5.4,7.3-6.8c1.4-0.7,3.3-1.8,4.5,0c1.2,1.9-0.8,3-2,3.9C102.6,51.9,99.7,52.9,95.5,53.1z"/>
				</svg>
			</a>
			
			<?php
			$description = get_bloginfo( 'description', 'display' );
			
			if ( $description || is_customize_preview() ) :
			?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php
			endif;
			?>
			<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
		</div><!-- .site-branding -->
		<?php
		$header_image = get_header_image(); ?>
			<figure>
				<?php printf(
						'<img src="%s">',
						$header_image
				);
				if ( is_active_sidebar( 'header-note' ) && $header_image !== '' ) : ?>
					<div class="header-note">
						<?php dynamic_sidebar( 'header-note' ); ?>
					</div>
				<?php endif; ?>
			</figure>
	</header><!-- .site-header -->

	<div id="sidebar" class="sidebar">
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
