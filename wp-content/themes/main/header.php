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
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/animate.min.css">

<?php wp_head(); ?>
</head>

<body style="background-size: cover;" <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'main' ); ?></a>
	<header id="masthead" class="site-header" role="banner">

		<div class="header-banner">
			<img href=""class="header-img" src="<?php bloginfo( 'template_url' );?>/img/signature.png" alt="Angelita Gill">
			<img class="chand-swing" src="<?php bloginfo( 'template_url' );?>/img/chand.png" alt="chandellier">
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'main' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div class="slider">
	<?php
    echo do_shortcode("[metaslider id=25]");
	?>
	</div>
	<div id="content" class="site-content">
