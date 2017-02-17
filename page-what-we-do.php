<?php
/**
 * Template Name: What we do
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
        //carrega as páginas filhas de  INNOVATION IN PRODUCTS AND SERVICES
        get_template_part('template-parts/content', 'innovation-in-product-and-services');
        //carrega as páginas filhas de  TECHNOLOGY
        get_template_part('template-parts/content', 'technology');
        //carrega as páginas filhas de DIGITAL PRODUCT
        get_template_part('template-parts/content', 'digital-products');
        //carrega os boxes
        get_template_part('template-parts/content', 'see-also');
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
