<?php
  // Template Name: Landing Page
	// Template Post Type: post, page
	// change template part?
?>

<?php
/**
 * The template for displaying all pages
 *
 * @package Tower
 */

// get_header();
?>

	
	<main id="primary" class="site-main" role="main">
		<!-- <div class="container"> -->
			<?php
			// Show the selected front page content.
			if ( have_posts() ) :
			while ( have_posts() ) :
			the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile;
			else :
				get_template_part( 'template-parts/post/content', 'none' );
			endif;
			?>
		<!-- </div> -->
		<!-- .container -->
	</main><!-- #main -->

<?php
// do i need to close or remove the above php?
// get_footer();
