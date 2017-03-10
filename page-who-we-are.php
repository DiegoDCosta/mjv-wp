<?php
/**
 * Template Name: who we are
 * @package mjv-theme
 */
if (is_home()) :
    get_header();
else :
    get_header('insiders');
endif;
?>

<div id="primary" class="content-area what-we-do">
    <main id="main" class="site-main" role="main">

        <?php
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', 'insiders');
        endwhile; // End of the loop.
        
        // carrega clientes
        get_template_part('template-parts/content', 'clients');
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
