<?php
/**
 * The template for displaying all single posts
 *
 * @package Tower
 */

get_header( 'blog-page' );
?>

	<main id="primary" class="site-main">
	<div class="container">
		<span class="breadcrumb"><?php get_breadcrumb(); ?></span>
	</div>
		<div class="container sidebar-page">
			<article class="blog-page">
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
					<?php

					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_format() );
						?> 

					<aside class="bgcolor4">
						<div class="container">
							<h3 class="custom-title"><?php esc_html_e('Similar articles you may like... ', 'tower') ?></h3>
							<div class="row">
								<?php 

								$cats = wp_get_post_categories( get_the_ID(), ['fields'=>'ids',]);
								
									$relatedPosts = get_posts(
										[ 'numberposts'=> 3,
											'category'=> implode(',', $cats),
											'post__not_in'=> [get_the_ID(),],
										]);
								 	global $post;
									 if ( $relatedPosts ) {
									foreach ($relatedPosts as $post) {
										setup_postdata($post); ?>
										
											<div class="single-recent-row"> 
											
											<a class="single-recent-posts-link" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail() ?></a>
											<a class="single-recent-posts-link" href="<?php the_permalink(); ?>" rel="bookmark"><h4 class="single-recent-row-title"><?php the_title(); ?></h4></a>
											
											<?php get_template_part( 'template-parts/content', 'author' ); ?>
											
										</div>

										<?php

									}
									wp_reset_postdata();
								} else {
									echo "No other articles in this category...for now"; 
								}
								?>
							</div>
						</div>
					</aside> 
					
					<?php
						
						// If comments are open or we have at least one comment, load up the comment template.

						// if ( comments_open() || get_comments_number() ) :
						// 	comments_template();
						// endif;

					endwhile; // End of the loop.
					?>

			</article>

			<aside class="blog-sidebar">
				<?php get_sidebar(); ?>
			</aside>

		</div><!-- .container .sidebar-page-->
	</main><!-- #main -->

<?php
get_footer();