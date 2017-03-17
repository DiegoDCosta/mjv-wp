<!-- clients -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <!--[if lte IE 8]>
               <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->

        <div class="row clients">
            <div class="col-md-12">
                <h1 class="case__title">Clients</h1>
            </div>


            <?php query_posts(array('post_type' => 'client', 'orderby' => 'DESC', 'posts_per_page' => 8)); ?>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post() ?>

                    <div class="clients__box col-xs-6 col-sm-4 col-md-2">
                        <div class="clients__content">
                            <figure>
                                <?php
                                the_post_thumbnail('post-thumbnail');
                                ?>
                            </figure>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>


            <div class="clearfix"></div>
            <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-4 col-sm-offset-0 col-md-2 col-md-offset-0">
                <div class="btnLaranja">
                    <a href="<?php echo get_bloginfo('url') ?>/category/clients/">see all Clients</a>
                </div>
            </div>
        </div>

    </div><!-- .entry-content -->
</article><!-- #post-## -->

