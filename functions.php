<?php

function polypress_theme_support(){
    // Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'polypress_theme_support');

function polypress_menus(){
    $locations = array(
        'primary' => "Desktop Primary Right Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'polypress_menus');

function polypress_register_styles(){

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('polypress-style', get_template_directory_uri() . '/style.css', array('polypress-polykit'), $version, 'all');

    wp_enqueue_style('polypress-polykit',"https://polykit.xyz/app/css/polykit-v0-1.css", array(), '0.1', 'all');
    
}

add_action('wp_enqueue_scripts', 'polypress_register_styles');

function polypress_register_scripts(){

    wp_enqueue_script('polypress-polykit', "https://polykit.xyz/app/js/polykit-v0-1.js", array(), '0.0', true);

    wp_enqueue_script('polypress-main', get_template_directory_uri() . '/assets/js/main.js', array(), '0.1', true);
    
}

add_action('wp_enqueue_scripts', 'polypress_register_scripts');

?>