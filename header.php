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
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.min.css" />
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site ">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'mjv-theme'); ?></a>

            <header id="masthead" class="site-header" role="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="header__logo site-branding">
                                <?php if (is_front_page() && is_home()) : ?>
                                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                                <?php else : ?>
                                    <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                                <?php
                                endif;

                                $description = get_bloginfo('description', 'display');
                                if ($description || is_customize_preview()) :
                                    ?>
                                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                                <?php endif;
                                ?>
                            </div><!-- .site-branding -->
                        </div>
                        <div class="col-md-8 text-right">
                            <div class="row">
                                <div class="col-md-12 header__sup_menu">news</div>
                                <div class="col-md-12">
                                    <nav id="site-navigation" class="header__navigation main-navigation" role="navigation">
                                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                                            <?php esc_html_e('Primary Menu', 'mjv-theme'); ?>
                                        </button>
                                        <?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu')); ?>
                                    </nav><!-- #site-navigation -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header><!-- #masthead -->

            <div id="content" class="content container site-content">