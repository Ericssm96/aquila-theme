<?php

function aquila_script_enqueue() {
  wp_enqueue_style('aquila-main-styles', get_template_directory_uri() . '/css/main.css', [], '1.0.0', 'all');
  wp_enqueue_script('aquila-main-script', get_template_directory_uri() . '/js/main.js', [], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'aquila_script_enqueue');