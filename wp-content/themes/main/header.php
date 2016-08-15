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
		<header id="header">
				<div class="main-logo">
					<a id="logo" href="http://www.angelitagill.com"><img src="<?php bloginfo( 'template_url' );?>/img/signature-logo.png"></a>
				</div>
		</header>

		<div class="chand">

			<img class="chand-swing col-lg-1" src="<?php bloginfo( 'template_url' );?>/img/chandelier-black.png" alt="chandellier">

		</div>

		<article class="full" style="background-image: url(<?php the_field( 'banner' ); ?>)">
			<div class="container-fluid">
			<?php if ( get_field('book_image') ) : ?>
				<div class="col-lg-4">
				<img src="<?php the_field( 'book_image' ); ?>">
				</div>
				<?php endif; ?>
			</div>
		</article>







