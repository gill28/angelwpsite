<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Main
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'header' );

				if ( have_rows( 'content_blocks' ) && ! post_password_required() ) {
					while ( have_rows( 'content_blocks' ) ) {
						the_row();

						if ( 'logo' === get_row_layout() ) {
							get_template_part( 'template-parts/content', 'logo' );
						}
					}
				}

			endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
