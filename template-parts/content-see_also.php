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
                        <a href="<?php bloginfo('url'); ?>/category/cases">
                            <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/template_image/see-also-cases.jpg');" class="thumbs" > </div>
                            <figcaption class="cases__description">                                   
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
                            <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/template_image/see-also-content.jpg');" class="thumbs" > </div>
                            <figcaption class="cases__description">                                   
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
                            <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/template_image/see-alse-knowledge.jpg');" class="thumbs" > </div>
                            <figcaption class="cases__description">                                   
                                Areas de knowlegde                              
                            </figcaption>
                        </a>                        
                    </figure>
                </div>
            </div>

            <?php get_template_part('template-parts/contact', 'us'); ?>

        </div><!-- .entry-content -->
    </div>

</article><!-- #post-## -->
