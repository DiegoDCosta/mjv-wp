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
                <h1 class="cases__title">Related Cases</h1>
            </div>
            <?php
            global $post;
            $args = array('numberposts' => 3, 'cat' => 4);
            $myposts = get_posts($args);
            foreach ($myposts as $post) : setup_postdata($post);
                ?>

                <div class="cases__box col-xs-12 col-sm-4 col-md-4">
                    <div class="cases__content">
                        <figure>
                            <?php
                            the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full']);
                            ?>
                            <figcaption class="case__description">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="clearfix"></div>
            <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-2 col-md-offset-0">
                <div class="btnLaranja">
                    <a href="#">see all Cases</a>
                </div>
            </div>
        </div>
        <!-- content -->
        <div class="row content">
            <div class="col-md-12">
                <h1 class="content__title">Related Materials</h1>
            </div>
            <?php
            global $post;
            $argsContent = array('numberposts' => 4, 'cat' => 6);
            $content = get_posts($argsContent);
            foreach ($content as $post) : setup_postdata($post);
                ?>

                <div class="content__box col-xs-12 col-sm-4 col-md-4">
                    <div class="content__content">
                        <figure>
                            <?php
                            the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full']);
                            ?>
                            <figcaption class="content__description">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="clearfix"></div>
            <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-2 col-md-offset-0">
                <div class="btnLaranja">
                    <a href="#">see all Content</a>
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
