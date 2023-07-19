<?php

function aquila_script_enqueue() {
  wp_enqueue_style('aquila-main-styles', get_template_directory_uri() . '/css/main.css', [], '1.0.0', 'all');
  wp_enqueue_script('aquila-main-script', get_template_directory_uri() . '/js/main.js', [], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'aquila_script_enqueue');

function aquila_theme_setup() {
  add_theme_support('menus');
  add_theme_support('custom-post-types');
  register_nav_menu('primary-menu', 'Primary header navigation');
  register_nav_menu('secondary-menu', 'Secondary navigation');
}

//add_action('after_setup_theme', 'aquila_theme_setup'); também é válido
add_action('init', 'aquila_theme_setup');