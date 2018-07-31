<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'cwilliams95' ); ?></a>

	<header id="masthead" class="header-profile" role="banner">

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>
		<!-- Profile start -->
		<div class="profile-wrap">
			<div class="headshot">
				<img src="https://cwilliams95.com/wp-content/uploads/2017/10/Headshot.png"/>
			</div>
			<div class="profile-content"><p>Hey, I'm <strong>Christopher Williams</strong>!<br> Welcome to my personal site!<br>
				 I'm a web developer with <a href="https://ny-ave.com/">New York Ave.</a> Please take a look around at my personal projects and press the button below for my (outdated) resumè.</p>
				 <a target="_blank" href="https://cwilliams95.com/wp-content/uploads/2017/09/Christopher_Williams-Resume.pdf"><button>See My Resumè</button></a></div>
		</div>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! cwilliams95_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'cwilliams95-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
