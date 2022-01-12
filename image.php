<?php
/**
 * The template for displaying image attachments
 *
 * @package Tower
 */

// Retrieve attachment metadata.
$metadata = wp_get_attachment_metadata();

get_header( 'post' );
?>

<main id="primary" class="site-main">
	<div class="container sidebar-page">

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				?>
		<article class="blog-page">
			<header class="entry-header">
				<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>

				<div class="entry-meta">

					<?php get_template_part( 'template-parts/content', 'author' ); ?>
					<span class="full-size-link"><?php esc_html_e('| ', 'tower') ?>

						<a href="<?php echo esc_url( wp_get_attachment_image_src( $post->ID, 'full' )[0] ); ?>">View Image</a>

					</span>

					<?php edit_post_link( __( 'Edit', 'tower' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->

			<div class="entry-content">
				<div class="entry-attachment">
					<div class="attachment">
					
						<p><img src="<?php echo esc_url( wp_get_attachment_image_src( $post->ID, 'full' )[0] ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>"></p>

					</div><!-- .attachment -->
				</div><!-- .entry-attachment -->	
			</div><!-- .entry-content -->
			
			<?php the_content(); ?>
			<!-- if there is no caption for the image, the content will be repeated so need a conditional -->
			<?php
				if ( ! has_excerpt() ) {
						echo '';
				} else {
						the_excerpt();
				}
			?>
			<p><span class="highlight">Post type</span>: <?php echo wp_kses_post($post->post_type); ?></p>
			<p><span class="highlight">Mime type</span>: <?php echo wp_kses_post($post->post_mime_type); ?></p>

			<nav id="image-navigation" class="navigation image-navigation">
				<div class="nav-links">
				<?php previous_image_link( false, '<span class="previous-image">' . __( 'Previous image', 'tower' ) . '</span>' ); ?>
				<?php next_image_link( false, '<span class="next-image">' . __( 'Next image', 'tower' ) . '</span>' ); ?>
				</div>
			</nav>

			<?php endwhile; ?>

		</article>
		<aside class="blog-sidebar">
			<?php get_sidebar(); ?>
		</aside>
	</div><!-- .container .sidebar-page-->
</main><!-- #main -->


<?php

get_footer();
