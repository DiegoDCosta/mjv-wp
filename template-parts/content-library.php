<?php
/**
 * Template part for displaying page content in page.php
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package mjv-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">       
        <div class="clearfix"></div>
        <!-- Cases -->
        <div class="row cases">
            <div class="col-md-12">
                <h1 class="cases__title"><?php the_title(); ?></h1>
            </div>
            <div class="clearfix"></div>
            <aside class="col-xs-12 col-sm-4 col-md-4" style="background: red;">
                <h3>BY FORMAT</h3>
                <ul>
                    <?php wp_nav_menu(array('menu' => 'menu biblioteca')); ?>
                </ul>
            </aside>
            <?php
            global $post;
            $args = array('cat' => 8);
            $myposts = get_posts($args);
            foreach ($myposts as $post) : setup_postdata($post);
                ?>

                <div class="row">
                    <div class="cases__box col-xs-12 col-sm-4 col-md-4">
                        <div class="cases__content">
                            <figure>
                                <a href="<?php echo get_post_meta($post->ID, 'wpcf-link-para-o-post-externo', true); ?>">
                                    <div style="background-image: url(<?php echo the_post_thumbnail_url('large'); ?>);" class="thumbs"> </div>
                                    <figcaption class="case__description">                                   
                                        <?php the_title(); ?>                                    
                                    </figcaption>
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
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
