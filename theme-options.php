<?php

add_action('admin_init', 'theme_options_init');
add_action('admin_menu', 'theme_options_add_page');
function theme_options_init()
{
    register_setting('sample_options', 'top_bar_option', 'theme_options_validate');
}
function theme_options_add_page()
{
    add_theme_page(
        __('佈景設定', 'sampletheme'),
        __('佈景設定', 'sampletheme'),
        'edit_theme_options',
        'theme_options',
        'theme_options_do_page'
    );
}

function theme_options_do_page()
{
    include_once 'option_view.php';
}
function theme_options_validate($input = [])
{
    $input['facebook'] = wp_filter_nohtml_kses($input['facebook']);
    $input['instagram'] = wp_filter_nohtml_kses($input['instagram']);
    $input['twitter'] = wp_filter_nohtml_kses($input['twitter']);
    $input['google'] = wp_filter_nohtml_kses($input['google']);
    $input['github'] = wp_filter_nohtml_kses($input['github']);
    $input['footer'] = ($input['footer']);

    return $input;
}
