<?php
/** Template Name: Categoria biblioteca de inovação

 */
if (is_home()) :
    get_header();
else :
    get_header('content');
endif;
?>

<div class="row">
    <div class="col-md-12">
        <h1>Content</h1>
        <p>Download free e-books, infographics and other publications produced by MJV</p>
    </div>			
</div>

<div class="row menu-biblioteca">
    <div class="col-md-12 menu-biblioteca__itens">
        <h1>BY FORMAT</h1>
        <ul>
            <?php wp_nav_menu(array('menu' => 'biblioteca')); ?>
        </ul>
    </div>


    <div class="col-md-12">
        <?php if (have_posts()) : ?>
            <div class="row biblioteca">
                <?php
                global $post;
                $args = array('numberposts' => 3000, 'cat' => 10);
                $myposts = get_posts($args);
                foreach ($myposts as $post) : setup_postdata($post);
                    ?>

                    <div class="biblioteca-boxes col-xs-12 col-sm-3 col-md-3">
                        <div class="biblioteca-boxe__content">
                            <figure>
                                <a href="<?php echo get_post_meta($post->ID, 'wpcf-link-para-o-post-externo', true); ?>">
                                    <div style="background-image: url(<?php echo the_post_thumbnail_url('large'); ?>);" class="thumbs"> </div>
                                    <figcaption class="biblioteca-boxe__description">                                       
                                        <?php the_title(); ?>                                        
                                    </figcaption>
                                </a>
                            </figure>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif ?>

    </div>
    <div class="col-md-12 text-center">
        <div class="post-paginate">
            <?php echo paginate_links($args); ?>
        </div>
    </div>
</div>

<?php
get_footer();
/* End of file index.php */
/* Location: ./wp-content/themes/the-bootstrap/category.php */