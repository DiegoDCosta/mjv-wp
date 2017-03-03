<!-- clients -->
<div class="row clients">
    <div class="col-md-12">
        <h1 class="clients__title">Clients</h1>
    </div>
    <?php
    $clients = new WP_Query("cat=5&showposts=8");
    while ($clients->have_posts()) : $clients->the_post();
        ?>
        <div class="clients__box col-xs-6 col-sm-4 col-md-2">
            <div class="clients__content">
                <figure>
                    <?php
                    the_post_thumbnail('post-thumbnail');
                    ?>
                </figure>
            </div>
        </div>
    <?php endwhile; ?>

    <div class="clearfix"></div>
    <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-4 col-sm-offset-0 col-md-2 col-md-offset-0">
        <div class="btnLaranja">
            <a href="#">see all Clients</a>
        </div>
    </div>
</div>