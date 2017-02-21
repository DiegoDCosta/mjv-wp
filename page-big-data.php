<?php
/**
 * Template Name: Big Data/Analytics
 * @package mjv-theme
 */
if (is_home()) :
    get_header();
else :
    get_header('insiders');
endif;
?>

<div id="primary" class="content-area big-data-analytics">
    <main id="main" class="site-main" role="main">
        <?php the_content(); ?>
        <?php
        while (have_posts()) : the_post();

            get_template_part('template-parts/content', 'insiders');
           
            //carrega os cases, clients e content
            get_template_part('template-parts/content', 'cases_e_content');

        // If comments are open or we have at least one comment, load up the comment template.
        /* if (comments_open() || get_comments_number()) :
          comments_template();
          endif;
         */
        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
