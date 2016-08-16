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
		<i class="fa fa-facebook"></i><i class="fa fa-twitter"></i>
		</header>

		<img class="main-logo" src="<?php bloginfo( 'template_url' );?>/img/signature-logo.png" alt="chandellier">



		<div class="chand">

			<img class="chand-swing col-lg-1" src="<?php bloginfo( 'template_url' );?>/img/chandelier-black.png" alt="chandellier">

		</div>

		<article class="full" style="background-image: url(<?php the_field( 'banner' ); ?>)">
			<div class="container">
			<?php if ( get_field('book_image') ) : ?>
				<div class="row">
					<div class="featured-img-wrap">
						<div class="featured-img">
							<h2>Featured Book</h2>
							<a href="<?php the_field( 'book_url' ); ?>"><img class="feat-bk" src="<?php the_field( 'book_image' ); ?>"></a>
						</div>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</article>







