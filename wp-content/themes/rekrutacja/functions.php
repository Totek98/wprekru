<?php 

add_action('after_setup_theme', 'simpleblog_themesetup');
function simpleblog_themesetup()
{
    add_theme_support('post-thumbnails');
    add_action('init', 'simpleblog_register_menus');
}
function simpleblog_register_menus()
{
    register_nav_menus(array(
        'top-navigation' => 'Top navigation',
        'bottom-navigation' => 'Bottom Navigation'
    ));
}