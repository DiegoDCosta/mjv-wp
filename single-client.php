<?php
/**
 * Template Name: Single-Client
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mjv-theme
 */
get_header('client');
?>

<div id="primary" class="content-area client-custom-post">
    <main id="main" class="site-main" role="main">

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
        
        <div class="col-xs-5 col-md-2 case-custom-post-navigation">
            <?php next_post_link('%link', 'Previous'); ?>
        </div>

        <div class="col-xs-5 col-md-2 col-xs-offset-2 col-md-offset-1 case-custom-post-navigation">
            <?php previous_post_link('%link', 'Next'); ?>
        </div>
        
        <div class="clearfix"></div>

        

        <?php endwhile; // End of the loop. ?>
        

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
