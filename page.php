<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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
					'posts_per_page' => 3,
				];

				$latest_posts = new WP_Query( $latest_posts_args );

				if ( $latest_posts->have_posts() ) : ?>
					<div class="latest-posts-front-page-block">
						<h2><?php esc_html_e( 'Neueste Beiträge', 'nest378' ); ?></h2>
						<?php while ( $latest_posts->have_posts() ) :
							$latest_posts->the_post();

							printf(
								'<article>
	%1$s
	<h3><a href="%2$s">%3$s</a></h3>
	%4$s
</article>',
								sprintf(
									get_the_post_thumbnail() !== '' ? sprintf(
											'<figure><a href="%s" tabindex="-1"><img src="%s"></a></figure>',
											get_the_permalink(),
											get_the_post_thumbnail_url( get_the_ID(), 'medium' )
									) : ''
								),
								get_the_permalink(),
								get_the_title(),
								get_the_excerpt() !== '' ? '<p>' . get_the_excerpt() . '</p>' : ''
							);
						endwhile; ?>
					</div>
				<?php endif;
			endif;

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
