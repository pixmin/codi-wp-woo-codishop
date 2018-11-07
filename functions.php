<?php

add_action('after_setup_theme', 'customtheme_add_woocommerce_support');
function customtheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}

// Remove WooCommerce CSS
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

// Add theme style
function gp_enqueue_scripts() {
    wp_enqueue_style('toaster-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'gp_enqueue_scripts');