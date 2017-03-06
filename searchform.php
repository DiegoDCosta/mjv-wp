<?php
// form 404 page
?>

<form role="search" method="get" id="searchform" class="form-busca-404" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="form-group">
        <div class="input-group form-busca-404__grupo">
            <input type="text" placeholder="Search" class="form-control search-404" value="<?php echo get_search_query(); ?>" name="s" id="s" />
            <div class="input-group-addon">
                <button type="submit" class="ico-search"></button>
            </div>
        </div>
    </div>
</form>
