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
                        <img src="<?php echo get_template_directory_uri(); ?>/template_image/what-we-do__cases.jpg" alt="Coolcenter" class="img-responsive" width="100%"/>
                        <figcaption class="case__description">
                            <a href="http://www.coolcentersoftware.com/" target="_blank">
                                Cases
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="cases__box col-xs-12 col-sm-4 col-md-4">
                <div class="cases__content">
                    <figure> 
                        <img src="<?php echo get_template_directory_uri(); ?>/template_image/what-we-do__content.jpg" alt="GroundBreaker" class="img-responsive" width="100%"/>
                        <figcaption class="case__description">
                            <a href="#" target="_blank" >
                                Content
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="cases__box col-xs-12 col-sm-4 col-md-4">
                <div class="cases__content">
                    <figure> 
                        <img src="<?php echo get_template_directory_uri(); ?>/template_image/what-we-do__areas-of-knowlegde.jpg" alt="Areas of knowlegde" class="img-responsive" width="100%"/>
                        <figcaption class="case__description">
                            <a href="#" target="_blank" >
                                Areas of knowlegde
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            
            <div class="col-sm-4 col-sm-offset-4 col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
                <h3 class="text-center">Are you prepared to transform your business? Talk to one of our consultants right now!</h3>
            </div>
            
            <div class="text-center contact-us">
                <div class="btnLaranja col-sm-4 col-sm-offset-4 col-md-2 col-md-offset-5 col-xs-10 col-xs-offset-1">
                    <a href="" class="contact-us-btn">CONTACT US</a>
                </div>
            </div>
            
        </div><!-- .entry-content -->
    </div>

</article><!-- #post-## -->
