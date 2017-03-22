<?php
/**
 * Template Name: Lean Methodology
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
            get_template_part('template-parts/content', 'insiders');
            // contact
            get_template_part('template-parts/contact', 'us');
            //carrega os cases, clients e content
            get_template_part('template-parts/content', 'cases_e_content');
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
