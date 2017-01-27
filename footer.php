<?php
/**
 * The template for displaying the footer *
 * Contains the closing of the #content div and all content after. *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials *
 * @package mjv-theme
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-2 footer__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>"></a>
            </div>
            <div class="col-md-2">2</div>
            <div class="col-md-2">3</div>
            <div class="col-md-2">4</div>
            <div class="col-md-2">5</div>
            <div class="col-md-2">6</div>
        </div>
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
    <!-- form de busca modal -->
    <div class="modal fade bs-example-modal-sm header__form_busca" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">            
                <form role="search" method="get" action="<?php home_url('/'); ?>">                    
                    <input type="search" class="form-control search" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" title="Search" />
                </form>
            </div>
        </div>
    </div>
    <!-- #form de busca modal -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/vendor/js/_bootstrap.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.min.js" type="text/javascript"></script>
</body>
</html>
