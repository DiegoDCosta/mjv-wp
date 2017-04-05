<?php
/**
 * Template part, lista páginas filhas em what we do
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mjv-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header id="innovation">

    </header>
    <div class="row">
        <div class="entry-content cases">
            <div class="what-we-do__box">
                <div class="what-we-do__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/template_image/titulo__ico-seta-what-we-do.png" alt=""/>
                </div>
                <h2 class="what-we-do__desc first">
                    INNOVATION IN PRODUCTS AND SERVICES
                </h2>
            </div>
            <div class="clearfix visible-xs-block"></div>
            <?php
            $parent = "150";
            query_posts('posts_per_page=8&post_type=page&post_parent=' . $parent);
            while (have_posts()) : the_post();
                ?>
                <div class="cases__box col-xs-12 col-sm-4 col-md-4">
                    <div class="cases__content">
                        <figure>
                            <a href="<?php echo get_post_meta($post->ID, 'wpcf-link-para-o-post-externo', true); ?>" target="_blank">
                                <div style="background-image: url(<?php echo the_post_thumbnail_url('large'); ?>);" class="thumbs"> </div>
                                <figcaption class="case__description">                               
                                    <?php the_title(); ?>                                
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
            <?php endwhile; ?>
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
    </div>

</article><!-- #post-## -->
