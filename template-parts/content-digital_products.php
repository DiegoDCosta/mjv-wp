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
    <header id="digitalproducts">

    </header>
    <div class="row">
        <div class="entry-content cases">
            <div class="what-we-do__box">
                <div class="what-we-do__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/template_image/titulo__ico-seta-what-we-do.png" alt=""/>
                </div>
                <h2 class="what-we-do__desc">
                    DIGITAL PRODUCT
                </h2>
            </div>

            <div class="cases__box col-xs-12 col-sm-4 col-md-4">
                <div class="cases__content">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/template_image/what-we-do__coolcenter.jpg" alt="Coolcenter" class="img-responsive" width="100%"/>
                        <figcaption class="case__description">
                            <a href="http://www.coolcentersoftware.com/" target="_blank">
                                Coolcenter
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="cases__box col-xs-12 col-sm-4 col-md-4">
                <div class="cases__content">
                    <figure> 
                        <img src="<?php echo get_template_directory_uri(); ?>/template_image/what-we-do__groundbreaker.png" alt="GroundBreaker" class="img-responsive" width="100%"/>
                        <figcaption class="case__description">
                            <a href="#" target="_blank" >
                                BroundBreak
                            </a>
                        </figcaption>
                    </figure>
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
    </div>

</article><!-- #post-## -->
