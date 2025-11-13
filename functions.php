<?php
/**
 * DevStarter Theme Functions
 */

function devstarter_enqueue_assets() {
    wp_enqueue_style('devstarter-style', get_stylesheet_uri(), [], time());
}
add_action('wp_enqueue_scripts', 'devstarter_enqueue_assets');
 
function devstarter_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ));
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'devstarter_theme_setup');
