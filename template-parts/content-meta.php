<?php
/**
 * Template part for displaying posts
 *
 * @package Tower
 */

?>

<?php if( is_front_page() ) { ?>

  <span class="recent-cat-links"><?php esc_html_e('| ', 'tower'); ?><?php echo wp_kses_post(get_the_category_list( esc_html__( ', ', 'tower' ) ) ); ?></span>
  <span class="recent-tags-links"><?php esc_html_e('| ', 'tower'); ?><?php echo wp_kses_post(get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'tower' ) ) ) ?></span>

<?php } else { ?>

  <span class="cat-links"><?php esc_html_e('Posted in ', 'tower'); ?><?php echo wp_kses_post(get_the_category_list( esc_html__( ', ', 'tower' ) ) ); ?></span>

  <span class="tags-links"><?php esc_html_e('| Keywords: ', 'tower'); ?><?php echo wp_kses_post(get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'tower' ) ) ) ?></span>

<?php } ?>
