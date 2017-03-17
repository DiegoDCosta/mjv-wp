<?php
/**
 * Template Name: Single-Case
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mjv-theme
 */
get_header('case');
?>

<div id="primary" class="content-area case-custom-post">
    <main id="main" class="site-main" role="main">

        <div class="col-xs-5 col-md-2 case-custom-post-navigation">
            <?php next_post_link('%link', 'Previous'); ?>
        </div>

        <div class="col-xs-5 col-md-2 col-xs-offset-2 col-md-offset-1 case-custom-post-navigation">
            <?php previous_post_link('%link', 'Next'); ?>
        </div>
        <div class="col-xs-12 col-md-4 col-md-offset-2 case-custom-post-box">
            <span class="case-custom-post-box-icone">
                <img src="<?php echo get_post_meta($post->ID, 'wpcf-icone-case', true); ?>">
            </span>
            <span class="case-custom-post-box-titulo">
                <?php echo get_post_meta($post->ID, 'wpcf-titulo-icone-case', true); ?>
            </span>
        </div>
        <div class="clearfix"></div>


        <?php
        while (have_posts()) : the_post();

            the_content();

            // If comments are open or we have at least one comment, load up the comment template.
            /* if (comments_open() || get_comments_number()) :
              comments_template();
              endif;
             */
            ?>




        <?php endwhile; // End of the loop.  ?>

        <?php
        get_template_part('template-parts/contact', 'us');
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
