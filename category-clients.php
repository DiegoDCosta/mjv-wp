<?php
/** Template Name: Categoria client

 */
get_header('client');
?>

<div id="primary" class="content-area client-custom-post">
    <main id="main" class="site-main" role="main">
        <div class="container">


            <div class="row cases">      
                <?php
                the_content();


                $clients = new WP_Query("cat=5&showposts=8");
                while ($clients->have_posts()) : $clients->the_post();
                    ?>
                    <div class="clients__box col-xs-6 col-sm-4 col-md-4">
                        <div class="clients__content">
                            <figure>
                                <?php
                                the_post_thumbnail('post-thumbnail');
                                ?>
                                <figcaption class="case__description">
                                  <?php the_title(); ?>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                <?php endwhile; ?>

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