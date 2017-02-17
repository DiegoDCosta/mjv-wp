<?php
/**
 * Template Name: Cases
 * @package mjv-theme
 */
if (is_home()) :
    get_header();
else :
    get_header('insiders');
endif;
?>

<div id="primary" class="content-area cases">
    <main id="main" class="site-main" role="main">
        <?php the_content(); ?>
        <?php
        while (have_posts()) : the_post();
            //carrega todos cases
            get_template_part('template-parts/content', 'cases');
        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
