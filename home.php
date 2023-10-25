<?php
/**
 *
 * @package Tower
 */

get_header( 'blog-page');
?>

	<main id="primary" class="site-main">
		<div class="container">
		<span class="breadcrumb"><?php get_breadcrumb(); ?></span>
			<!-- wp_title('') was here  -->
			
		</div>
		<div class="container sidebar-page">
			<article class="blog-page">
				
				<?php
				if ( have_posts() ) :
					
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
