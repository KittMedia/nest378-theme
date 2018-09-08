<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Nest378
 * @since 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( is_front_page() && is_active_sidebar( 'entry-points' ) ) : ?>
				<div id="widget-area-entry" class="hentry entry-points" role="complementary">
					<?php dynamic_sidebar( 'entry-points' ); ?>
				</div><!-- .widget-area -->
			<?php endif; ?>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			if ( is_front_page() ) :
				$latest_posts_args = [
					'no_found_rows' => true,
					'update_post_meta_cache' => false,
					'posts_per_page' => 4,
				];

				$latest_posts = new WP_Query( $latest_posts_args );

				if ( $latest_posts->have_posts() ) : ?>
					<div class="latest-posts-front-page-block entry-content">
						<h2><?php esc_html_e( 'Latest posts', 'nest378' ); ?></h2>
						<div>
							<?php while ( $latest_posts->have_posts() ) :
								$latest_posts->the_post();

								printf(
									'<article>
		<h3><a href="%1$s">%2$s</a></h3>
		%3$s
	</article>',
									get_the_permalink(),
									get_the_title(),
									get_the_excerpt() !== '' ? '<p>' . get_the_excerpt() . '</p>' : ''
								);
							endwhile; ?>
						</div>
					</div>
				<?php endif;
			endif;

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
