<?php
/** Template Name: Categoria biblioteca de inovação

 */
if (is_home()) :
    get_header();
else :
    get_header('case');
endif;
?>

<div id="primary" class="content-area cases-custom-post">
    <main id="main" class="site-main" role="main">
        <div class="container">


            <div class="row cases"> 
                <?php query_posts(array('post_type' => 'case', 'orderby' => 'DESC', 'posts_per_page' => 3000)); ?>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post() ?>

                        <div class="cases__box col-xs-12 col-sm-4 col-md-4">
                            <div class="cases__content">
                                <figure>
                                    <div style="background-image: url(<?php echo the_post_thumbnail_url( 'large' ); ?>);" class="thumbs"> </div>
                                    <figcaption class="case__description">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
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