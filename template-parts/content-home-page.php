<?php
/**
 * Template part for displaying page content in page.php
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package mjv-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
        <?php
        the_content();

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'mjv-theme'),
            'after' => '</div>',
        ));
        ?>
        <div class="clearfix"></div>
       <!-- expertises -->
        <div class="row">
            <div class="expertise col-xs-12 col-md-4 col-sm-4">
                <div class="expertise__design-thinking">
                    <figure class="expertise__bg-1">
                        <img src="<?php echo get_post_meta($post->ID, 'wpcf-design-thinking', true); ?>">
                        <figcaption class="expertise__description"><?php echo get_post_meta($post->ID, 'wpcf-design-thinking-description', true); ?></figcaption>
                    </figure>
                </div>
            </div>
            <div class="expertise col-xs-12 col-md-4 col-sm-4">
                <div class="expertise__gamefication">
                    <figure class="expertise__bg-2">
                        <img src="<?php echo get_post_meta($post->ID, 'wpcf-gamefication', true); ?>">
                        <figcaption class="expertise__description"><?php echo get_post_meta($post->ID, 'wpcf-gamefication-description', true); ?></figcaption>
                    </figure>
                </div>
            </div>
            <div class="expertise col-xs-12 col-md-4 col-sm-4">
                <div class="expertise__big-data-analysis">
                    <figure class="expertise__bg-3">
                        <img src="<?php echo get_post_meta($post->ID, 'wpcf-big-data-analysis', true); ?>">
                        <figcaption class="expertise__description"><?php echo get_post_meta($post->ID, 'wpcf-big-data-analysis-description', true); ?></figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="row">            
            <div class="expertise col-xs-12 col-sm-4 col-md-4">
                <div class="expertise__lean-methodology">
                    <figure class="expertise__bg-4">
                        <img src="<?php echo get_post_meta($post->ID, 'wpcf-lean-methodology', true); ?>">
                        <figcaption class="expertise__description"><?php echo get_post_meta($post->ID, 'wpcf-lean-methodology-description', true); ?></figcaption>
                    </figure>
                </div>
            </div>
            <div class="expertise col-xs-12 col-sm-4 col-md-4">
                <div class="expertise__digital-strategy">
                    <figure class="expertise__bg-5">
                        <img src="<?php echo get_post_meta($post->ID, 'wpcf-digital-strategy', true); ?>">
                        <figcaption class="expertise__description"><?php echo get_post_meta($post->ID, 'wpcf-digital-strategy-description', true); ?></figcaption>
                    </figure>
                </div>
            </div>
            <div class="expertise col-xs-12 col-sm-4 col-sm-offset-0 col-md-4">
                <div class="expertise__internet-of-things">
                    <figure class="expertise__bg-6">
                        <img src="<?php echo get_post_meta($post->ID, 'wpcf-internet-of-things', true); ?>">
                        <figcaption class="expertise__description"><?php echo get_post_meta($post->ID, 'wpcf-internet-of-things-description', true); ?></figcaption>
                    </figure>
                </div>
            </div>

        </div>
        <!-- clients -->
        <div class="row clients">
            <div class="col-md-12">
                <h1 class="clients__title">Clients</h1>
            </div>
            <?php
            global $post;
            $argsClients = array('numberposts' => 8, 'cat' => 5);
            $clients = get_posts($argsClients);
            foreach ($clients as $post) : setup_postdata($post);
                ?>
                <div class="clients__box col-xs-6 col-sm-4 col-md-2">
                    <div class="clients__content">
                        <figure>
                            <?php
                            the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full']);
                            ?>
                        </figure>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="clearfix"></div>
            <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-4 col-sm-offset-0 col-md-2 col-md-offset-0">
                <div class="btnLaranja">
                    <a href="#">see all Clients</a>
                </div>
            </div>
        </div>
        <!-- Cases -->
        <div class="row cases">
            <div class="col-md-12">
                <h1 class="cases__title">Cases</h1>
            </div>
            <?php
            global $post;
            $args = array('numberposts' => 3, 'cat' => 4);
            $myposts = get_posts($args);
            foreach ($myposts as $post) : setup_postdata($post);
                ?>

                <div class="cases__box col-xs-12 col-sm-4 col-md-4">
                    <div class="cases__content">
                        <figure>
                            <?php
                            the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full']);
                            ?>
                            <figcaption class="case__description">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="clearfix"></div>
            <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-2 col-md-offset-0">
                <div class="btnLaranja">
                    <a href="#">see all Cases</a>
                </div>
            </div>
        </div>
        <!-- content -->
        <div class="row content">
            <div class="col-md-12">
                <h1 class="content__title">Content</h1>
            </div>
            <?php
            global $post;
            $argsContent = array('numberposts' => 4, 'cat' => 6);
            $content = get_posts($argsContent);
            foreach ($content as $post) : setup_postdata($post);
                ?>

                <div class="content__box col-xs-12 col-sm-4 col-md-4">
                    <div class="content__content">
                        <figure>
                            <?php
                            the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full']);
                            ?>
                            <figcaption class="content__description">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="clearfix"></div>
            <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-2 col-md-offset-0">
                <div class="btnLaranja">
                    <a href="#">see all Content</a>
                </div>
            </div>
        </div>

    </div><!-- .entry-content -->

    <?php if (get_edit_post_link()) : ?>
        <footer class="entry-footer">
            <?php
            edit_post_link(
                    sprintf(
                            /* translators: %s: Name of current post */
                            esc_html__('Edit %s', 'mjv-theme'), the_title('<span class="screen-reader-text">"', '"</span>', false)
                    ), '<span class="edit-link">', '</span>'
            );
            ?>
        </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-## -->