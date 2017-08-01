<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>
	<!doctype html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content">
				<?php esc_html_e( 'Skip to content', 'underscores' ); ?>
			</a>
      
			<header id="masthead" class="site-header">
        <div class="banner">
					
					<?php if ( has_post_thumbnail() ) : ?>

						<?php the_post_thumbnail('banner-image'); ?>

					<?php endif; ?>
					
          <?php if ( is_page() || is_single() || is_archive() ) { ?>
					
					<div class="hd-branding">
						
						<div class="hd-branding-container">

							<img class="hd-logo" src="http://localhost/underscores/wp-content/themes/underscores/images/bannerLogo.png">

							<h2 class="page-title"><?php the_title(); ?></h2>

						</div>
						
<!--
						<nav class="site-nav">
				
							<?php

//								$args = array(
//									'theme_location' => 'hd-buttons'
//								);

							?>

							<?php // wp_nav_menu(  $args ); ?>

						</nav>
-->
						
					</div>
						
					<?php } else { ?>

					<?php } ?>
					
        </div>
				<div id="header-container" class="header-container">
					<div class="site-branding">
						<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'name' ); ?>
								</a>
							</h1>
							<?php else : ?>
							<p class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'name' ); ?>
								</a>
							</p>
							<?php endif; ?>
						
					</div>
					<!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'underscores' ); ?></button>
						<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
					</nav>
					<!-- #site-navigation -->
				</div>
				<!-- .header-container -->
			</header>
			<!-- #masthead -->

			<div id="content" class="site-content">
				<div id="container" class="content-container">
