<?php
/**
 * The header for home.php
 *
 * This is the first header file and there are too many
 * I need a conditional for all of them
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

	<div class="page-header">
		<header id="masthead" class="page-site-header">
			<div class="container header_row">
		
				<nav id="site-navigation" class="main-navigation nav">
					
					<div class="logo">
						<?php the_custom_logo(); ?>
					</div>

					<button id="hamburger" class="hamburger" aria-label="open navigation" tabindex="0" aria-expanded="false">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</button>

					<?php
						wp_nav_menu(
							array(
								'menu_class'		 => 'header-menu',
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
						<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
						<h3 class="site-description"><?php esc_html_e( 'Web Design and Development Articles', 'tower' ); ?></h3>
					</div>
				</div><!-- .site-branding -->
			</div><!-- .container .header-row -->
		</div>
	</div>


