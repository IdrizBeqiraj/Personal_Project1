<?php
function rich_reals_theme_setup() {
 
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'rich-reals')
    ));


    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'rich_reals_theme_setup');

function rich_reals_scripts() {
 
    wp_enqueue_style('rich-reals-style', get_stylesheet_uri());

    wp_enqueue_script('rich-reals-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'rich_reals_scripts');


function theme_setup() {
 
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form'));
}
add_action('after_setup_theme', 'theme_setup');

function theme_scripts() {
  
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_scripts');

