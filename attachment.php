<?php
/**
 * The template for displaying attachments
 *
 * @package Tower
 */

get_header( 'post');
?>

	<main id="primary" class="site-main">
		<div class="container sidebar-page">
			<article class="blog-page" id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
				<header>
					<!-- <h1 class="page-title"><?php single_post_title(); ?></h1> -->
					<h1 class="page-title"><?php the_title(); ?></h1>
					<!-- <?php the_title( '<h1 class="page-title">', '</h1>' ); ?> -->
				</header>
					<?php
					while ( have_posts() ) :
						the_post();
						?>

						<div class="blog-post" id="post-<?php the_ID(); ?>">
							<!-- <header class="entry-header"> -->
							<div class="single-section-page">
								<div class="entry-meta">
									<?php 
									
									get_template_part( 'template-parts/content', 'author' ); 

									the_content();
									?>

							<p><span class="highlight">Post type</span>: <?php echo wp_kses_post($post->post_type); ?></p>
							<p><span class="highlight">File type</span>: <?php echo wp_kses_post($post->post_mime_type); ?></p>
							<p><a href="<?php echo esc_url($post->guid); ?>">Open / Download</a></p>


								</div>

							</div><!-- .single-section -->
						</div><!-- .blog-post -->

					<?php

					endwhile; // End of the loop.
					?> 
			</article><!-- .article-post -->
			<aside class="blog-sidebar">
				<?php get_sidebar(); ?>
			</aside>
		</div><!-- .container .sidebar-page-->
	</main><!-- #main -->

<?php
get_footer();
