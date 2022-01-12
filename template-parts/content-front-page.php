<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @package Tower
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="page-container">
		<header class="front-header">
			<?php if( has_post_thumbnail() ): ?>

				<?php the_post_thumbnail(); ?>

			<?php endif; ?>
			<!-- <?php the_title( '<h1 class="page-title">', '</h1>' ); ?> -->
		</header><!-- .front-header -->
	</div><!-- .page-container -->

	<div class="front-content">
		<?php
		the_content();
		?>
	</div><!-- .front-content -->
</article><!-- #post-<?php the_ID(); ?> -->
