<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Tower
 */

get_header( 'post');
?>

	<main id="primary" class="site-main">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!-- <div class="page-container"></div> -->

			<div class="front-content">
			<section class="bgcolor8">
				<div class="header-404">
					<div class="content-container single-col-content">
						<h2 class="contact-title-404"><?php esc_html_e( '404: Page Not Found!', 'tower' ); ?></h2>
						<p><?php esc_html_e( 'The page you are searching for does not exist. Let us know if a link got you here and we will fix the link. But however you got here, try the links at the top of the page or in the footer at the bottom.', 'tower' ); ?></p>
						
						<a class="btn btn--home" href="https://kernixwebdesign.com/">HOME</a>
					</div>
				</div>
  </section>
			</div><!-- .front-content -->
		</article><!-- #post-<?php the_ID(); ?> -->

	</main><!-- #main -->

<?php
get_footer();
