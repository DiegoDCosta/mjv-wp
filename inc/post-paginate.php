<?php

// cria paginação
function page_content_nav() {
    global $wp_query, $wp_rewrite;

    $paged = ( get_query_var('paged') ) ? intval(get_query_var('paged')) : 1;

    $pagenum_link = html_entity_decode(get_pagenum_link());
    $query_args = array();
    $url_parts = explode('?', $pagenum_link);

    if (isset($url_parts[1])) {
        wp_parse_str($url_parts[1], $query_args);
    }
    $pagenum_link = remove_query_arg(array_keys($query_args), $pagenum_link);
    $pagenum_link = trailingslashit($pagenum_link) . '%_%';

    $format = ( $wp_rewrite->using_index_permalinks() AND ! strpos($pagenum_link, 'index.php') ) ? 'index.php/' : '';
    $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit('page/%#%', 'paged') : '?paged=%#%';

    $links = paginate_links(array(
        'base' => $pagenum_link,
        'format' => $format,
        'total' => $wp_query->max_num_pages,
        'current' => $paged,
        'mid_size' => 3,
        'type' => 'list',
        'add_args' => array_map('urlencode', $query_args),
        'prev_text' => __('« Previous'),
        'next_text' => __('Next »')
    ));

    if ($links) {
        echo "<nav class=\"pagination pagination-centered clearfix\">{$links}</nav>";
    }
}
