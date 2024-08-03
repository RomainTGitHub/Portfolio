<?php
function mon_theme_register_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'mon_theme_register_menus');

function mon_theme_enqueue_styles()
{
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'mon_theme_enqueue_styles');
