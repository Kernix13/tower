<?php
/**
 * Template part for displaying posts
 *
 * @package Tower
 */

?>      
        <?php if( is_front_page() || is_single() ) { ?>

        <span class="posted-on"><?php echo get_the_date('M j, Y'); ?></span>

        <span class="byline"><?php esc_html_e('by ', 'tower'); ?>
          <span class="author vcard">
            <a class="url fn n" href="<?php echo wp_kses_post(get_author_posts_url(get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author(); ?></a>
          </span>
        </span>

        <?php } else { ?>
        
        <span class="posted-on"><?php esc_html_e('Posted ', 'tower'); ?><?php echo get_the_date(); ?></span>

        <span class="byline"><?php esc_html_e('by ', 'tower'); ?>
          <span class="author vcard">
            <a class="url fn n" href="<?php echo wp_kses_post(get_author_posts_url(get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author(); ?></a>
          </span>
        </span>

        <?php } ?>

        