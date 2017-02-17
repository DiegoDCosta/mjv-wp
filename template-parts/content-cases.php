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
        </div>
        <!-- content -->
    </div><!-- .entry-content -->
</article><!-- #post-## -->
