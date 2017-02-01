<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mjv-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <div class="entry-content">
        <?php
        the_content();

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'mjv-theme'),
            'after' => '</div>',
        ));
        ?>
        <div class="clearfix"></div>
        <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header><!-- .entry-header -->

        <div class="row">
            <div class="expertise col-xs-12 col-md-4">
                <div class="expertise__design-thinking">
                    <figure class="expertise__bg-1">
                        <img src="<?php echo get_post_meta($post->ID, 'wpcf-design-thinking', true); ?>">
                        <figcaption class="expertise__description"><?php echo get_post_meta($post->ID, 'wpcf-design-thinking-description', true); ?></figcaption>
                    </figure>
                </div>
            </div>
            <div class="expertise col-xs-12 col-md-4">
                <div class="expertise__gamefication">
                    <figure class="expertise__bg-2">
                        <img src="<?php echo get_post_meta($post->ID, 'wpcf-gamefication', true); ?>">
                        <figcaption class="expertise__description"><?php echo get_post_meta($post->ID, 'wpcf-gamefication-description', true); ?></figcaption>
                    </figure>
                </div>
            </div>
            <div class="expertise col-xs-12 col-md-4">
                <div class="expertise__big-data-analysis">
                    <figure class="expertise__bg-3">
                        <img src="<?php echo get_post_meta($post->ID, 'wpcf-big-data-analysis', true); ?>">
                        <figcaption class="expertise__description"><?php echo get_post_meta($post->ID, 'wpcf-big-data-analysis-description', true); ?></figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="expertise col-xs-12 col-md-4">
                <div class="expertise__lean-methodology">
                    <figure class="expertise__bg-4">
                        <img src="<?php echo get_post_meta($post->ID, 'wpcf-lean-methodology', true); ?>">
                        <figcaption class="expertise__description"><?php echo get_post_meta($post->ID, 'wpcf-lean-methodology-description', true); ?></figcaption>
                    </figure>
                </div>
            </div>
            <div class="expertise col-xs-12 col-md-4">
                <div class="expertise__digital-strategy">
                    <figure class="expertise__bg-5">
                        <img src="<?php echo get_post_meta($post->ID, 'wpcf-digital-strategy', true); ?>">
                        <figcaption class="expertise__description"><?php echo get_post_meta($post->ID, 'wpcf-digital-strategy-description', true); ?></figcaption>
                    </figure>
                </div>
            </div>
            <div class="expertise col-xs-12 col-md-4">
                <div class="expertise__internet-of-things">
                    <figure class="expertise__bg-6">
                        <img src="<?php echo get_post_meta($post->ID, 'wpcf-internet-of-things', true); ?>">
                        <figcaption class="expertise__description"><?php echo get_post_meta($post->ID, 'wpcf-internet-of-things-description', true); ?></figcaption>
                    </figure>
                </div>
            </div>
        </div>

    </div><!-- .entry-content -->

    <?php if (get_edit_post_link()) : ?>
        <footer class="entry-footer">
            <?php
            edit_post_link(
                    sprintf(
                            /* translators: %s: Name of current post */
                            esc_html__('Edit %s', 'mjv-theme'), the_title('<span class="screen-reader-text">"', '"</span>', false)
                    ), '<span class="edit-link">', '</span>'
            );
            ?>
        </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-## -->
