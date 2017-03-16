<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mjv-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <?php mjv_theme_posted_on(); ?>
            </div><!-- .entry-meta -->
        <?php endif;?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        the_content(sprintf(
                        /* translators: %s: Name of current post. */
                        wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'mjv-theme'), array('span' => array('class' => array()))), the_title('<span class="screen-reader-text">"', '"</span>', false)
        ));

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'mjv-theme'),
            'after' => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php mjv_theme_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
