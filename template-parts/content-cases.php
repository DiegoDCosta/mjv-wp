<?php
/**
 * Template part for displaying page content in page.php
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package mjv-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <div class="entry-content">       
        <div class="clearfix"></div>
        <!-- Cases -->
        <div class="row cases">
            <div class="col-md-12">
                <h1 class="cases__title">Cases</h1>
            </div>

            <?php query_posts(array('post_type' => 'case', 'orderby' => 'ASC', 'posts_per_page' => 3)); ?>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post() ?>

                    <div class="cases__box col-xs-12 col-sm-4 col-md-4">
                        <div class="cases__content">
                            <figure>
                                <a href="<?php the_permalink(); ?>">
                                    <div style="background-image: url(<?php echo the_post_thumbnail_url('large'); ?>);" class="thumbs"> </div>
                                    <figcaption class="case__description">                                
                                        <?php the_title(); ?>                                
                                    </figcaption>
                                </a>
                            </figure>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
            <div class="clearfix"></div>
            <div class="col-sm-4 col-sm-offset-4 col-md-2 col-md-offset-5 col-xs-10 col-xs-offset-1">
                <div class="btnLaranja">
                    <a href="<?php echo get_bloginfo('url') ?>/category/cases/">see all Cases</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- content -->
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
