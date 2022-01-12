<?php
  // Template Name: Three Column
	// Template Post Type: post, page
	// change template part?
?>

<?php
/**
 * The template for displaying all single posts
 *
 * @package Tower
 */

get_header( 'post' );
?>

	<main id="primary" class="site-main">
		<div class="container sidebar-page">
			<aside class="left-sidebar">
				<?php get_sidebar( 'left' ); ?>
		<!-- I put 'left' but have to figure out how to build a three-column page - need to create sidebar-left.php-->
			</aside>
			<article class="blog-page">
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_format() ); 

					endwhile; // End of the loop.
					?>
			</article><!-- .article-post -->
			<aside class="right-sidebar">
				<?php get_sidebar(); ?>
			</aside>
		</div><!-- .container .sidebar-page-->
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
