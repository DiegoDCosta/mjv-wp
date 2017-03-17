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
                <h1 class="case__title">Cases</h1>
            </div>
            
             <?php query_posts(array('post_type' => 'case', 'orderby' => 'ASC', 'posts_per_page' => 8)); ?>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post() ?>

                    <div class="cases__box col-xs-12 col-sm-4 col-md-4">
                    <div class="cases__content">
                        <figure>
                            <?php
                            the_post_thumbnail('post-thumbnail');
                            ?>
                            <figcaption class="case__description">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                    <?php
                endwhile;
            endif;
            ?>
            <div class="clearfix"></div>
            <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-2 col-md-offset-0">
                <div class="btnLaranja">
                    <a href="<?php echo get_bloginfo('url') ?>/category/cases/">see all Cases</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- content -->
    </div><!-- .entry-content -->
</article><!-- #post-## -->
