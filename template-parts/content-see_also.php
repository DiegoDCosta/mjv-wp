<?php
/**
 * Template part, parte da página what we do SEE ALSO
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mjv-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header id="see-also" class="see-also">
        <h1>See Also</h1>
    </header>
    <div class="row">
        <div class="entry-content cases">
            <div class="cases__box col-xs-12 col-sm-4 col-md-4">
                <div class="cases__content">
                    <figure>
                        <a href="<?php bloginfo('url'); ?>/category/cases" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/template_image/what-we-do__cases.jpg" alt="Coolcenter" class="img-responsive" width="100%"/>
                            <figcaption class="case__description">
                                Cases
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>

            <div class="cases__box col-xs-12 col-sm-4 col-md-4">
                <div class="cases__content">
                    <figure>
                        <a href="<?php bloginfo('url'); ?>/category/library">
                            <img src="<?php echo get_template_directory_uri(); ?>/template_image/what-we-do__content.jpg" alt="GroundBreaker" class="img-responsive" width="100%"/>
                            <figcaption class="case__description">
                                Content
                            </figcaption>
                        </a>
                    </figure>                    
                </div>
            </div>

            <div class="cases__box col-xs-12 col-sm-4 col-md-4">
                <div class="cases__content">
                    <figure>
                        <a href="<?php bloginfo('url'); ?>/how-we-work/design-thinking">                        
                            <img src="<?php echo get_template_directory_uri(); ?>/template_image/what-we-do__areas-of-knowlegde.jpg" alt="Areas of knowlegde" class="img-responsive" width="100%"/>
                            <figcaption class="case__description">
                                Areas of knowlegde
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>

            <?php get_template_part('template-parts/contact', 'us'); ?>

        </div><!-- .entry-content -->
    </div>

</article><!-- #post-## -->
