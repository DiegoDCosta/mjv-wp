<?php
/** Template Name: Categoria client

 */
get_header('client');
?>

<div id="primary" class="content-area client-custom-post">
    <main id="main" class="site-main" role="main">
        <div class="container client-custom-post">


            <div class="row clients">      
                <?php the_content(); ?>

              <?php query_posts(array('post_type' => 'client', 'orderby' => 'DESC', 'posts_per_page' => 3000)); ?>
                <?php if (have_posts()) : ?> 
                    <?php while (have_posts()) : the_post() ?>

                        <div class="clients__box col-xs-6 col-sm-3 col-md-3">
                            <div class="clients__content">
                                <figure>
                                    <?php the_post_thumbnail(); ?>
                                    <figcaption class="clients__description">
                                        <?php the_title(); ?>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>

                <div class="post-paginate">
                    <?php echo paginate_links($args); ?>
                </div>

            </div>
        </div>
    </main>
</div><!-- #container-->


<?php
get_footer();
/* End of file index.php */
/* Location: ./wp-content/themes/the-bootstrap/category.php */