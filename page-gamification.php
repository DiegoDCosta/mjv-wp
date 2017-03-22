<?php
/**
 * Template Name: Gamification
 * @package mjv-theme
 */
if (is_home()) :
    get_header();
else :
    get_header('insiders');
endif;
?>

<div id="primary" class="content-area gamification">
    <main id="main" class="site-main" role="main">
        <?php
        get_template_part('template-parts/content', 'insiders');

        //carrega os cases, clients e content
        get_template_part('template-parts/content', 'cases_e_content');
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
