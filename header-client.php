<?php
/**
 * The header for our theme *
 * This is the template that displays all of the <head> section and everything up until <div id="content"> *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials *
 * @package mjv-theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>


        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo get_template_directory_uri(); ?>/vendor/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content">
                <?php esc_html_e('Skip to content', 'mjv-theme'); ?>
            </a>

            <header id="masthead" class="site-header insider" role="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/template_image/header__posts-internas-clients.jpg');">
                <div class="container">
                    <div class="row hidden-xs hidden-sm">
                        <div class="col-md-2">
                            <div class="header__logo site-branding">
                                <a href="<?php echo esc_url(home_url('/')); ?>"></a>
                            </div><!-- .site-branding -->
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="row header__busca">
                               
                                <div class="col-md-1 col-md-offset-5">
                                    <button type="button" class="ico-search" data-toggle="modal" data-target=".bs-example-modal-sm"></button>
                                </div>
                                <div class="col-md-6 header__submenu">
                                    <ul>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/contact/work-with-us">Work with us</a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/blog">Blog</a>
                                        </li>
                                        <li class="header__link_br">
                                            <a href="http://www.mjv.com.br/" target="_blank">
                                                BR <span class="ico-globo" aria-hidden="true"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--menu -->
                                <div class="menu">
                                    <nav id="site-navigation" class="header__navigation main-navigation" role="navigation">
                                        <?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu')); ?>
                                    </nav><!-- #site-navigation -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 breadcrumbs">
                            <div class="breadcrumbs-itens">
                                <?php the_breadcrumb(); ?>
                                <h1 class="breadcrumbs-titulo">Client</h1>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="header__shadow"></div>
            </header><!-- #masthead -->

            <div id="content" class="content container site-content">

                <!-- form search -->
