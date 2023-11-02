<?php
/**
 * The template for displaying all pages
 *
 * @package Tower
 */

get_header( 'custom');
?>

	
	<main id="primary" class="front-main" role="main">
			<?php
			// Show the selected front page content.
			if ( have_posts() ) :
			while ( have_posts() ) :
			the_post();
				get_template_part( 'template-parts/content', 'front-page' ); ?>
			<!-- make sure to check for if has_thumbnail and if has_excerpt, etc. -->
			<aside class="bgcolor4">
				<div class="container">
					<h3 class="custom-title"><?php esc_html_e('Latest Articles ', 'tower') ?></h3>
					<div class="row">
						<?php 
						
						$query = new WP_Query( [
							'post__not_in' => get_option( 'sticky_posts'),
							'post_type'	=> 'post',
							// 'category_name' => 'code',
							'posts_per_page'	=> 3,
						] );

						if ($query->have_posts()) {
							while ($query->have_posts()) {
								$query->the_post(); ?>

								<div class="recent-row"> 
									<?php the_post_thumbnail() ?>
									<a class="recent-posts-link" href="<?php the_permalink(); ?>" rel="bookmark"><h4><?php the_title(); ?></h4></a>
									
									<?php get_template_part( 'template-parts/content', 'author' ); ?>

									<!-- <span><?php the_excerpt(); ?></span> -->
									<div class="excerpt"><?php echo wp_trim_words(get_the_excerpt(), 28); ?></div>
									<div class="recent-post-widget">
										<a class="recent-posts-button" href="<?php the_permalink(); ?>">Read more...</a>
									</div>
								</div>

								<?php
							}
						}
						wp_reset_postdata();
						?>
					</div>
				</div>
			</aside>

			<?php
			endwhile;
			else :
				get_template_part( 'template-parts/post/content', 'none' );
			endif;

			?>
			
	</main><!-- #main -->

<?php

get_footer();
