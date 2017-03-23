<?php
/**
 * The template for displaying the footer *
 * Contains the closing of the #content div and all content after. *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials *
 * @package mjv-theme
 */
?>

</div><!-- #content -->

<div class="container-fluid newsletter hidden-xs">
    <div class="row">
        <div class="newsletter-box">
            <div class="newsletter-box-form">
                <?php
                get_template_part('template-parts/content', 'newsletter');
                ?>
            </div>
        </div>
    </div>
</div>
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-xs-4 col-sm-2 col-lg-1 footer__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="hidden-xs footer__logo-desktop"></a>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="hidden-md hidden-lg footer__logo-mobile"></a>
            </div>
        </div>
        <div class="row">           
            <div class="col-xs-6 col-sm-4 col-md-2">
                <h3>LONDON</h3>
                <p>
                    35 Corbridge Crescent,
                    Containerville, London E2 9EZ
                    United Kingdom
                    +44 20 3586 1233
                </p>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-2">                
                <h3>ATLANTA</h3>
                <p>
                    75 5th Street NW
                    Suite 424 Atlanta, GA
                    30308 - United States
                    +1 404 771 7187
                </p>
            </div>
            <div class="clearfix visible-xs-block"></div>
            <div class="col-xs-6 col-sm-4 col-md-2">
                <h3>HOUSTON</h3>
                <p>                    
                    TMCx (x+131)
                    Texas Medical Center
                    Innovation Institute
                    2450 Holcombe Blvd., Ste. X
                    Houston, TX 77021
                    +1 (832) 272-5272
                </p>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-2">
                <h3>SÃO PAULO</h3>
                <p>                    
                    Rua Helena, 280 
                    Gr. 1103 Vila Olímpia - SP
                    04552-050 Brazil
                    +55 11 3045 0536

                </p>
            </div>
            <div class="clearfix visible-xs-block"></div>
            <div class="col-xs-6 col-sm-4 col-md-2">
                <h3>RIO DE JANEIRO</h3>
                <p>                    
                    Av. Marechal Câmara, 160 
                    Gr. 206 Centro - RJ.
                    20020-080 - Brazil
                    +55 21 2532 6423
                </p>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-2">
                <h3>ALPHAVILLE</h3>
                <p>                    
                   Avenida Sagitario Nº 138 Conj 2205B Bairro: Alphaville Conde I 
CEP: 06.473-073 Barueri - SP
                </p>
            </div>           
            <!-- 
            <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                <h3>PARTNER</h3>
                <div class="footer__logo-sap hidden-xs"></div>
                <div class="footer__logo-sap-mobile hidden-md hidden-lg"></div>
            </div>
            -->
        </div>
    </div>
</footer><!-- #colophon -->
<div class="container-fluid sub__footer">
    <div class="row bg-footer sub__footer-redes-sociais">       
        <ul>
            <li>
                <a class="sub__footer-redes-face" href="https://www.facebook.com/mjvinnovation" target="_blank"></a>
            </li>
            <li>
                <a class="sub__footer-redes-linkedin" href="http://linkedin.com/company/mjv-innovation" target="_blank"></a>
            </li>
            <li>
                <a class="sub__footer-redes-twitter" href="https://twitter.com/mjvinnovation" target="_blank"></a>
            </li>
        </ul>        
    </div>
</div>
</div>
</div><!-- #page -->


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
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/vendor/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.min.js" type="text/javascript"></script>
</body>
</html>
