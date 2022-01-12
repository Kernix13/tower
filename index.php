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

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content' );

					endwhile;

					// the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
				<div class="paginate-container">
					<div class="page-nav">
						<?php echo wp_kses_post( paginate_links() ) ?>
					</div>
				</div>
			</article><!-- .blog-page -->
			<aside class="blog-sidebar">
				<?php get_sidebar(); ?>
			</aside>
		</div><!-- .container .sidebar-page-->
	</main><!-- #main -->

<?php

get_footer();
