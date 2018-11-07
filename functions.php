<?php

add_action('after_setup_theme', 'customtheme_add_woocommerce_support');
function customtheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}

// Remove WooCommerce CSS
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

// Add theme style and scripts
function gp_enqueue_scripts() {

    wp_enqueue_style('toaster-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('gp-bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');


    wp_enqueue_script('gp-jquery', get_stylesheet_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '3.3.1', true);
    wp_enqueue_script('gp-boostrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '4.1.3', true);

}
add_action('wp_enqueue_scripts', 'gp_enqueue_scripts');

// Menu
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');