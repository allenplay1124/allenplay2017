<?php

require_once get_stylesheet_directory().'/theme-options.php';
//產生主選單
register_nav_menus();

function get_img_url($_int_post_id = 0, $_arr_size = '')
{
    if ($_arr_size == '') {
        $_arr_size = array(700, 300);
    }

    $_str_img = get_the_post_thumbnail($_int_post_id, $_arr_size);

    preg_match_all("/\<img.*?src\=\"(.*?)\"[^>]*>/i", $_str_img, $_arr_img);

    return $_arr_img[1][0];
}

function echoArray($data = [])
{
    echo '<PRE>';
    print_r($data);
    echo '</PRE>';
}

register_sidebar(array(
    'name' => '首頁側邊欄',
    'id' => 'home_sidebar',
    'description' => '顯示頁尾前面',
    'before_widget' => '<section id="%1$s" class="home_sidebar">',
    'after_widget' => '</section>',
    'before_title' => '<h1 class="sidebar-title">',
    'after_title' => '</h1>',
));

register_sidebar(array(
    'name' => '部落格側邊欄',
    'id' => 'blog_sidebar',
    'description' => '顯示部落格側邊欄',
    'before_widget' => '<section id="%1$s" class="blog-sidebar">',
    'after_widget' => '</section>',
    'before_title' => '<h1 class="blog-sidebar-title"><span class="blog-sidebar-title-word">',
    'after_title' => '</span></h1>',
));

add_theme_support('post-thumbnails'); 
