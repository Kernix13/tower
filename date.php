<?php
/**
 *
 * @package Tower
 */

get_header( 'post');
?>

	<main id="primary" class="site-main">
		<div class="container">
			<h1 class="page-title">
				<?php wp_title( '' ); ?>
			</h1>
		</div>
		<div class="container sidebar-page">
			<article class="blog-page">
				
				<?php
				if ( have_posts() ) :

						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'posts' );

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
