<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mjv-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h3>Receive our updates and sign up for our newsletter:</h3>		
    </header><!-- .entry-header -->

    <div class="entry-content">
        <!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <script>
            hbspt.forms.create({
                css: '',
                portalId: '455690',
                formId: 'b1ebaa72-c3aa-483d-9eb0-c1d6356d52f8'
            });
        </script>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
