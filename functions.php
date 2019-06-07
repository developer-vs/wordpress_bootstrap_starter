<?php

function load_scripts()
{
  // Bootstrap CSS
  wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all');

  // Bootstrap JS
  wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true);


  // Main CSS
  wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');

  // Font-Awesome    
  wp_enqueue_style('font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  // alternative path: //maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css

  // Custom JQuery
  wp_enqueue_script('main-jquery', get_template_directory_uri() . '/js/main-jquery.js', array('jquery'), null, true);

  // Main JS
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'load_scripts');


function theme_config()
{
  // Title
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_config');
