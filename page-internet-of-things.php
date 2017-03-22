<?php
/**
 * Template Name: Internet of Things (IoT)
 * @package mjv-theme
 */
if (is_home()) :
    get_header();
else :
    get_header('insiders');
endif;
?>

<div id="primary" class="content-area internet-of-things">
    <main id="main" class="site-main" role="main">
        <?php
            get_template_part('template-parts/content', 'insiders');
            //carrega os cases, clients e content
            get_template_part('template-parts/content', 'cases_e_content');

        ?>
    </main><!-- #main -->
</div><!-- #primary -->


<!-- modal hackathons -->
<div class="modal fade" id="modal-hackathons" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <iframe src="https://player.vimeo.com/video/140452154"  width="565" height="371" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- #modal hackathons -->

<!-- modal zelar -->
<div class="modal fade" id="modal-zelar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
               <iframe src="https://player.vimeo.com/video/140452156" width="565" height="371" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- #modal zelar -->

<!-- modal vehicle insurance -->
<div class="modal fade" id="modal-vehicle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                 <iframe src="https://player.vimeo.com/video/140469442" width="565" height="371" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- #modal vehicle insurance -->

<!-- modal lynks -->
<div class="modal fade" id="modal-lynks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                 <iframe src="https://player.vimeo.com/video/140471999" width="565" height="371" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- #modal lynks -->

<?php
get_sidebar();
get_footer();
