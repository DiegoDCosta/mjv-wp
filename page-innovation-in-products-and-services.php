<?php
/**
 *  ***** carrega os thumbs de INNOVATION IN PRODUCTS AND SERVICES (template para o breadcrumb)
 * @package mjv-theme
 */
if (is_home()) :
    get_header();
else :
    get_header('insiders');
endif;
?>

<div id="primary" class="content-area lean-methodology">
    <main id="main" class="site-main" role="main">

        <?php
        get_template_part('template-parts/content', 'innovation_in_product_and_services');
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
