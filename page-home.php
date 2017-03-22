<?php
/**
 * Template Name: Home Page
 * @package mjv-theme
 */
get_header();
?>

<div class="slider__revolution">
    <?php putRevSlider("slider_home_page") ?>
</div>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        get_template_part('template-parts/content', 'home');
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
