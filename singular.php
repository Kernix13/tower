<?php
/**
 * The template for displaying all single posts
 *
 * @package Tower
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container sidebar-page">
			<article class="blog-page">
				<h1 class="blog-page-title">
					<?php wp_title( '' ); ?>
				</h1>

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif; 
					
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						// get_template_part( 'template-parts/content', get_post_type() );
						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile;

					// the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</article><!-- .blog-page -->

			<aside class="blog-sidebar">
				<?php get_sidebar(); ?>
			</aside>

		</div><!-- .container .sidebar-page-->
	</main><!-- #main -->

<?php

get_footer();
