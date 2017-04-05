<?php
/**
 * Template Name: Single-Case
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mjv-theme
 */
get_header('case-internas');
?>

<div id="primary" class="content-area case-custom-post">
    <main id="main" class="site-main" role="main">

        <div class="col-md-5">
            <div class="row">
                <!-- post navigation -->        
                <?php
                $next_post = get_next_post();
                if (!empty($next_post)):
                    ?>
                    <div class="col-xs-6 col-md-4 case-custom-post-navigation case-custom-post-navigation-previous">
                        <?php next_post_link('%link', 'Previous'); ?>
                    </div>
                <?php endif; ?>		

                <?php
                $prev_post = get_previous_post();
                if (!empty($prev_post)):
                    ?>
                    <div class="col-xs-6 col-md-4 case-custom-post-navigation case-custom-post-navigation-next">
                        <?php previous_post_link('%link', 'Next'); ?>
                    </div>

                <?php endif ?>
                <!-- end post navigation -->
            </div>
        </div>

        <div class="col-md-7">
            <div class="row">
                <div class="case-custom-post-box">
                    <div class="case-custom-post-box-icone text-center">
                        <img src="<?php echo get_post_meta($post->ID, 'wpcf-icone-case', true); ?>">
                    </div>
                    <div class="case-custom-post-box-titulo">
                        <?php echo get_post_meta($post->ID, 'wpcf-titulo-icone-case', true); ?>
                    </div>
                </div>                       

                <div class="clearfix"></div>
            </div>
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




        <?php endwhile; // End of the loop.   ?>

        <?php
        get_template_part('template-parts/contact', 'us');
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();



