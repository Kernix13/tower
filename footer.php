<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package Tower
 */

?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<!-- <div class="footer-container"> -->
		<?php
			if ( is_active_sidebar( 'sidebar-2' ) ||
						is_active_sidebar( 'sidebar-3' ) ||
				is_active_sidebar( 'sidebar-4' ) ) :
				?>
			<div class="widget-container">
			<h3 class="footer-widget-title"><?php bloginfo( 'name' ); ?></h3>
				<aside class="widget-area footer-widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'tower' ); ?>">
					<?php
					if ( is_active_sidebar( 'sidebar-2' ) ) {
						?>
						<div class="widget-column footer-widget-1">
							<?php dynamic_sidebar( 'sidebar-2' ); ?>
						</div>
						<?php
					}
					if ( is_active_sidebar( 'sidebar-3' ) ) {
						?>
						<div class="widget-column footer-widget-2">
							<?php dynamic_sidebar( 'sidebar-3' ); ?>
						</div>
						<?php
					}
					if ( is_active_sidebar( 'sidebar-4' ) ) {
						?>
						<div class="widget-column footer-widget-3">
							<?php dynamic_sidebar( 'sidebar-4' ); ?>
						</div>
					<?php } ?>
				</aside><!-- .widget-area -->

		<?php endif; ?>
			</div><!-- .widget-container -->

		<div class="bottom-footer">

			<div class="site-info">

				<span><?php esc_html_e('&copy; 2020 -', 'tower'); ?></span>
				<?php 
					printf(
						esc_html( date('Y') )
					);
				?>

				<span><?php esc_html_e('Design and WordPress theme by ', 'tower') ?></span>
				<?php
				$my_theme = wp_get_theme(); ?>

				<?php if( is_front_page() ) { ?>

				<span><a href="<?php echo esc_html( $my_theme->get( 'AuthorURI' ) ); ?>"><?php echo esc_html( $my_theme->get( 'Author' ) ); ?></a></span>

				<?php } else { ?>
				
				<span><a href="<?php echo esc_html( $my_theme->get( 'AuthorURI' ) ); ?>" rel="nofollow"><?php echo esc_html( $my_theme->get( 'Author' ) ); ?></a></span>

				<?php } ?>

			</div><!-- .site-info -->
		</div><!-- .bottom-footer -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->
</div>
<?php wp_footer(); ?>
</body>
</html>
