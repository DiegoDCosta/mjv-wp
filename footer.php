<?php
/**
 * The template for displaying the footer *
 * Contains the closing of the #content div and all content after. *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials *
 * @package mjv-theme
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo"style="background: gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-info">
                    <a href="<?php echo esc_url(__('https://wordpress.org/', 'mjv-theme')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'mjv-theme'), 'WordPress'); ?></a>
                    <span class="sep"> | </span>
                    <?php printf(esc_html__('Theme: %1$s by %2$s.', 'mjv-theme'), 'mjv-theme', '<a href="https://automattic.com/" rel="designer">Diego Costa</a>'); ?>
                </div><!-- .site-info -->
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
