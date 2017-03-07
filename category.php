<?php
/** Template Name: Categoria biblioteca de inovação

 */
if (is_home()) :
    get_header();
else :
    get_header('content');
endif;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="titHome">Content</h1>
            <p class="txtapoio" lingdex="5">Download free e-books, infographics and other publications produced by MJV
            </p>
        </div>			
    </div>

    <div class="row menu-biblioteca">
        <div class="col-md-3 menu-biblioteca__itens">
            <h1>BY FORMAT</h1>
            <ul>
                <?php wp_nav_menu(array('menu' => 'biblioteca')); ?>
            </ul>
        </div>


        <div class="col-md-9">
            <?php if (have_posts()) : ?>
                <div class="row biblioteca">
                    <?php
                    global $post;
                    $args = array('numberposts' => 3000, 'cat' => 8);
                    $myposts = get_posts($args);
                    foreach ($myposts as $post) : setup_postdata($post);
                        ?>

                        <div class="biblioteca-boxes col-xs-12 col-sm-4 col-md-4">
                            <div class="biblioteca-boxe__content">
                                <figure>
                                    <?php
                                    the_post_thumbnail('post-thumbnail');
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
                </div>
            <?php endif ?>
        </div>
    </div>
</div><!-- #container-->

<?php
get_footer();
/* End of file index.php */
/* Location: ./wp-content/themes/the-bootstrap/category.php */