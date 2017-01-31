<div class="page-nav">

<?php
    global $wp_query, $wp_rewrite;
    $current = ($wp_query->query_vars['paged'] > 1)?$wp_query->query_vars['paged']:1;
    $pageNav = array(
        'base' => @add_query_arg('page','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'prev_text' => 'Prev',
        'next_text' => 'Next'
    );
    if( $wp_rewrite->using_permalinks() ) {
        $pageNav['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');
    }
    if( !empty($wp_query->query_vars['s']) ) {
        $pageNav['add_args'] = array('s'=>get_query_var('s'));
    }
     echo paginate_links($pageNav);
?>

</div>
