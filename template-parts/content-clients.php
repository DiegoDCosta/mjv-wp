<!-- clients -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <!--[if lte IE 8]>
               <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->

        <div class="row clients">
            <div class="col-md-12">
                <h1 class="clients__title">Clients</h1>
            </div>


            <?php query_posts(array('post_type' => 'client', 'orderby' => 'DESC', 'posts_per_page' => 8)); ?>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post() ?>

                    <div class="clients__box col-xs-6 col-sm-4 col-md-3">
                        <div class="clients__content">
                            <figure>
                                <?php the_post_thumbnail(); ?>
                            </figure>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>


            <div class="clearfix"></div>
            <div class="col-sm-4 col-sm-offset-4 col-md-2 col-md-offset-5 col-xs-10 col-xs-offset-1">
                <div class="btnLaranja">
                    <a href="<?php echo get_bloginfo('url') ?>/category/clients/">see all Clients</a>
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

