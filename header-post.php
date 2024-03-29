<?php
/**
 * The header for our theme
 *
 * This header was not updated and is not being used for any template file.
 * I am keeping it for now...
 * 
 * @package Tower
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<button id="back-to-top-btn"><i class="fa-solid fa-angle-up"></i></button>
	<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to main content', 'tower' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container header-row">
			<button class="nav-toggle" aria-label="open navigation" type="button">
				<span class="hamburger"></span>
			</button>
			<div class="logo">
				<?php the_custom_logo(); ?>
			</div>		
			<nav id="site-navigation" class="main-navigation nav">
				
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container'			 => '',
						)
					);
				?>
			</nav><!-- #site-navigation -->


		</div><!-- .container -->
	</header><!-- #masthead -->
	<div class="site-brand-header">
		<div class="container header-row">
			<div class="site-branding">
				<div class="site-brand">
					<!-- <?php the_title( '<h1 class="entry-title-posts">', '</h1>' ); ?> -->
					<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
					<h3 class="site-description"><?php bloginfo( 'description' ); ?></h3>
					
				</div>
			</div><!-- .site-branding -->
		</div><!-- .container .header-row -->
	</div>
