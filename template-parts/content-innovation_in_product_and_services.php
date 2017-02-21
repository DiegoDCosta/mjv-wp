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
            <?php endwhile; ?>
        </div><!-- .entry-content -->
    </div>

</article><!-- #post-## -->
