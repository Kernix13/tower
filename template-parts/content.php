<?php
/**
 * Template part for displaying posts
 *
 * @package Tower
 */

?>

<div class="single-page" id="post-<?php the_ID(); ?>">
	<!-- <header class="entry-header"> -->
		<div class="single-section-page">
			<div class="single-blog">
				<?php if( has_post_thumbnail() ): ?>

					<?php the_post_thumbnail(); ?>

				<?php endif; ?>
				
				<?php
				the_title( '<h1 class="entry-title-blog">', '</h1>' );
				if ( 'post' === get_post_type() ) :
					?>
	
					<div class="entry-meta-page">
						<?php 
							get_template_part( 'template-parts/content', 'author' ); 
							get_template_part( 'template-parts/content', 'meta' );
						?>
					</div>

				<?php endif; ?>
				<!-- </header> -->
				<!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
					
				</div><!-- .entry-content -->
				
			</div>			<!-- .single-blog -->
	</div>	<!-- .single-section -->
</div><!-- .blog-post -->
