<?php
/**
 *  ***** carrega os thumbs de DIGITAL PRODUCT (template para o breadcrumb)
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
         get_template_part('template-parts/content', 'digital_products');
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
