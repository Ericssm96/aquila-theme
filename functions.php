<?php

function aquila_script_enqueue() {
  wp_enqueue_style('aquila-main-styles', get_template_directory_uri() . '/css/main.css', [], '1.0.0', 'all');
  wp_enqueue_script('aquila-main-script', get_template_directory_uri() . '/js/main.js', [], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'aquila_script_enqueue');

function aquila_theme_setup() {
  add_theme_support('menus');
  add_theme_support('custom-background');
  add_theme_support('custom-header');
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats', [
    'aside', 'image', 'video'
  ]);
  register_nav_menu('primary-menu', 'Primary header navigation');
  register_nav_menu('secondary-menu', 'Secondary navigation');
}

//add_action('after_setup_theme', 'aquila_theme_setup'); também é válido
add_action('init', 'aquila_theme_setup');

function aquila_widget_setup() {
  register_sidebar([
    'name' => 'My sidebar',
    'id' => 'sidebar-1',
    'class' => 'test',
    'description' => 'footer sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
  ]);
}

add_action('widgets_init', 'aquila_theme_setup');