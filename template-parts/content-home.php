
<?php
/**
 * Template part for displaying page content in page.php
 * @link https://codex.wordpress.org/Template_Hierarchy
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
        <!-- expertises -->
        <div class="row">
            <div class="expertise col-xs-12 col-md-4 col-sm-4">
                <div class="expertise__design-thinking">
                    <figure class="expertise__bg-1">
                        <a href="<?php echo get_bloginfo('url') ?>/how-we-work/design-thinking/">
                            <div style="background-image: url(<?php echo get_post_meta($post->ID, 'wpcf-design-thinking', true); ?>);" class="thumbs"> </div>
                            <figcaption class="expertise__description">                            
                                <?php echo get_post_meta($post->ID, 'wpcf-design-thinking-description', true); ?>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
            <div class="expertise col-xs-12 col-md-4 col-sm-4">
                <div class="expertise__gamefication">
                    <figure class="expertise__bg-2">
                        <a href="<?php echo get_bloginfo('url') ?>/how-we-work/gamification/">
                            <div style="background-image: url(<?php echo get_post_meta($post->ID, 'wpcf-gamefication', true); ?>);" class="thumbs"> </div>
                            <figcaption class="expertise__description">                            
                                <?php echo get_post_meta($post->ID, 'wpcf-gamefication-description', true); ?>                            
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
            <div class="expertise col-xs-12 col-md-4 col-sm-4">
                <div class="expertise__big-data-analysis">
                    <figure class="expertise__bg-3">
                        <a href="<?php echo get_bloginfo('url') ?>/how-we-work/big-data-analytics/">
                            <div style="background-image: url(<?php echo get_post_meta($post->ID, 'wpcf-big-data-analysis', true); ?>);" class="thumbs"> </div>
                            <figcaption class="expertise__description">                           
                                <?php echo get_post_meta($post->ID, 'wpcf-big-data-analysis-description', true); ?>                            
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
        </div>
        <div class="row">            
            <div class="expertise col-xs-12 col-sm-4 col-md-4">
                <div class="expertise__lean-methodology">
                    <figure class="expertise__bg-4">
                        <a href="<?php echo get_bloginfo('url') ?>/how-we-work/lean-methodology/">
                            <div style="background-image: url(<?php echo get_post_meta($post->ID, 'wpcf-lean-methodology', true); ?>);" class="thumbs"> </div>
                            <figcaption class="expertise__description">                            
                                <?php echo get_post_meta($post->ID, 'wpcf-lean-methodology-description', true); ?>                            
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
            <div class="expertise col-xs-12 col-sm-4 col-md-4">
                <div class="expertise__digital-strategy">
                    <figure class="expertise__bg-5">
                        <a href="<?php echo get_bloginfo('url') ?>/how-we-work/digital-strategy/">
                            <div style="background-image: url(<?php echo get_post_meta($post->ID, 'wpcf-digital-strategy', true); ?>);" class="thumbs"> </div>
                            <figcaption class="expertise__description">
                                <?php echo get_post_meta($post->ID, 'wpcf-digital-strategy-description', true); ?>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
            <div class="expertise col-xs-12 col-sm-4 col-sm-offset-0 col-md-4">
                <div class="expertise__internet-of-things">
                    <figure class="expertise__bg-6">
                        <a href="<?php echo get_bloginfo('url') ?>/how-we-work/design-thinking/">
                            <div style="background-image: url(<?php echo get_post_meta($post->ID, 'wpcf-internet-of-things', true); ?>);" class="thumbs"> </div>
                            <figcaption class="expertise__description">
                                <?php echo get_post_meta($post->ID, 'wpcf-internet-of-things-description', true); ?>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>

        </div>
        <!-- clients -->
        <?php
        // carrega clientes
        get_template_part('template-parts/content', 'clients');
        get_template_part('template-parts/content', 'cases');
        ?>



        <!-- content -->
        <div class="row content">
            <div class="col-md-12">
                <h1 class="content__title">Content</h1>
            </div>

            <?php
            $content = new WP_Query("cat=8&showposts=3");
            while ($content->have_posts()) : $content->the_post();
                ?>

                <div class="content__box col-xs-12 col-sm-4 col-md-4">
                    <div class="content__content">
                        <figure>
                             <a href="<?php echo get_post_meta($post->ID, 'wpcf-link-para-o-post-externo', true); ?>" target="_blank">
                              <div style="background-image: url(<?php echo the_post_thumbnail_url( 'large' ); ?>);" class="thumbs"> </div>
                                <figcaption class="content__description">                               
                                    <?php the_title(); ?>                               
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
            <?php endwhile; ?>

            <div class="clearfix"></div>
            <div class="col-sm-4 col-sm-offset-4 col-md-2 col-md-offset-5 col-xs-10 col-xs-offset-1">
                <div class="btnLaranja">
                    <a href="<?php echo get_bloginfo('url') ?>/category/library/">see all Content</a>
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
