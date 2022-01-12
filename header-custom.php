<?php
/**
 * The header for our theme
 *
 * This is for a custom header file which I don't have yet
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
<?php if ( get_header_image() ) : ?>
    <div id="site-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
<?php endif; ?>
<button id="back-to-top-btn">&#8679;</button>
<!-- <div class="full-page"> -->
	<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tower' ); ?></a>

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

					<?php  
						while(have_posts()) {
							the_post(); ?>
							<h1 class="page-title"><?php the_title(); ?></h1>
							<h3 class="page-description"><?php the_excerpt(); ?></h3>
					<?php }
					?>

				</div>
			</div><!-- .site-branding -->
		</div><!-- .container .header-row -->
	</div>


