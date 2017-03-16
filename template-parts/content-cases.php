<?php
/**
 * Template part for displaying page content in page.php
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package mjv-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">       
        <div class="clearfix"></div>
        <!-- Cases -->
        <div class="row cases">
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
            <div class="clearfix"></div>
        </div>
        <!-- content -->
    </div><!-- .entry-content -->
</article><!-- #post-## -->



<div class="iot">
    <div class="iot__box">
        <div class="iot__content">
            <a href="#" data-toggle="modal" data-target="#myModal" title="Hackaton">
                <figure>
                    <img class="aligncenter size-full wp-image-471" src="http://novosite.mjv.com.br/wp-content/uploads/2017/02/iot-arduino.png" alt="" width="567" height="373" />
                    <figcaption class="iot__description">
                        <strong>HACKATHONS</strong>
                        <br />MJV organizes programming marathons, where innovative solutions to various problems and challenges arise.
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
</div>



<div class="iot">
    <div class="iot__box">
        <div class="iot__content">
            <a href="#" data-toggle="modal" data-target="#myModal" title="Hackaton">
                <figure>
                    <img class="aligncenter size-full wp-image-471" src="http://novosite.mjv.com.br/wp-content/uploads/2017/02/iot-arduino.png" alt="" width="567" height="373" />
                    <figcaption class="iot__description">
                        <strong>HACKATHONS</strong>
                        <br />MJV organizes programming marathons, where innovative solutions to various problems and challenges arise.
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
</div>