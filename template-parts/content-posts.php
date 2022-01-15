<?php
/**
 * Template part for displaying posts
 *
 * @package Tower
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header"> -->
		<div class="single-section">			
			<?php if( has_post_thumbnail() ): ?>
				<div class="leftside-blog">
					<?php the_post_thumbnail( 'medium' ); ?>
				</div><!-- .leftside-blog -->

			<?php 	else : ?>

				<div class="leftside-no-image">
					<!-- <?php the_post_thumbnail(); ?> -->
				</div><!-- .leftside-blog -->

			<?php endif; ?>		

				<div class="rightside-blog">
					<?php
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

					if ( 'post' === get_post_type() ) :
						?>
					
						<div class="entry-meta">
							<?php
							get_template_part( 'template-parts/content', 'author' ); 

							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
					<!-- </header> -->
					<!-- .entry-header -->

					<div class="entry-content">
						<?php the_excerpt(); ?>
						<!-- <p><a href="<?php the_permalink(); ?>" class="btn btn--blue">Go to post &raquo</a></p> -->

					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php get_template_part( 'template-parts/content', 'meta' ); ?>
					</footer><!-- .entry-footer -->
				</div><!-- .rightside-blog -->
	</div><!-- .single-section -->
</div><!-- #post-<?php the_ID(); ?> -->