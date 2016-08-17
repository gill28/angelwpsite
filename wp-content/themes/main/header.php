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

			<nav class="close-menu">
				<ul>
					<li><a href="http://www.angelitagill.com">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#books">Book Series</a>
						<ul>
							<li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'The Priceless Collection' ) ) ); ?>">The Priceless Collection</a></li>
							<li><a href="#">1 Night Stand</a></li>
							<li><a href="#">Paranormal/Fantasy</a></li>
							<li><a href="#">Contemporary</a></li>
							<li><a href="#">Holidays</a></li>
						</ul>
					</li>
					<li><a href="#">Contact</a></li>
				</ul>
				<div class="icons">
				<i class="fa fa-facebook"></i>
				<i class="fa fa-twitter"></i>
			</div>
			</nav>



			<div class="main-logo">
				<img class="main-logo" src="<?php bloginfo( 'template_url' );?>/img/signature-logo.png" alt="chandellier">
			</div>

		</header>





		<div class="chand">

			<img class="chand-swing col-lg-1" src="<?php bloginfo( 'template_url' );?>/img/chandelier-black.png" alt="chandellier">

		</div>

		<?php if ( get_field('banner') ) : ?>



		<article class="full" style="background-image: url(<?php echo get_field('banner'); ?>)">
				<?php endif; ?>
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







