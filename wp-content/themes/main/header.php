<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Main
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
		<?php while(the_flexible_field("content_blocks")): ?>

			<?php if( get_row_layout() === "logo"): ?>
					<img src="<?php the_sub_field( 'logo_image' ); ?>">


		<?php endif; ?>
		<nav id="site-navigation" class="main-navigation col-lg-12 col-lg-push-4" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'main' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<article class="full" style="background-image: url(<?php the_field( 'banner' ); ?>)">
		<img class="chand-swing col-lg-push-10 col-lg-2" src="<?php bloginfo( 'template_url' );?>/img/chandelier-black.png" alt="chandellier">
		</article>

<section>

	<div class=" fg-book col-lg-4 col-lg-push-4">

		<a href="<?php the_field( 'book_url' ); ?>"><img src="<?php the_field( 'book_image' ); ?>" alt=""></a>
		<h1>
			Featured Book
		</h1>

	</div>

</section>


<?php endwhile; ?>


