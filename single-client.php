<?php
/**
 * Template Name: Single-Client
 * The template for displaying all single posts clients
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mjv-theme
 */
get_header('client');
?>
<div id="primary" class="content-area client-custom-post">
    <main id="main" class="site-main" role="main">

        <div class="col-md-5">
                <div class="row">
                    <!-- post navigation -->        
                    <?php
                    $next_post = get_next_post();
                    if (!empty($next_post)):
                        ?>
                        <div class="col-xs-5 col-md-4 case-custom-post-navigation case-custom-post-navigation-previous">
                            <?php next_post_link('%link', 'Previous'); ?>
                        </div>
                    <?php endif; ?>		

                    <?php
                    $prev_post = get_previous_post();
                    if (!empty($prev_post)):
                        ?>
                        <div class="col-xs-5 col-md-4 case-custom-post-navigation">
                            <?php previous_post_link('%link', 'Next'); ?>
                        </div>

                    <?php endif ?>
                    <!-- end post navigation -->
                </div>
            </div>
        
        <?php
        while (have_posts()) : the_post();

            get_template_part('template-parts/content', get_post_format());

            the_post_navigation();

            // If comments are open or we have at least one comment, load up the comment template.
            /*if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
*/
            ?>
        <?php endwhile; // End of the loop. ?>
        

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
