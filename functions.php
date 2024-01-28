<?php 
  add_theme_support( 'title-tag');
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'menus' );

  add_filter( 'document_title_separator', "my_document_title_separator");
  function my_document_title_separator($separator){
    $separator = '|';
    return $separator;
  }

  add_action( 'wp_enqueue_scripts', 'my_plugin_assets' );
  function my_plugin_assets() {
    wp_enqueue_style('destyle', 'https://unpkg.com/destyle.css@4.0.0/destyle.min.css');
    wp_enqueue_style('portfolio-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gothic+A1:wght@200;300;400&family=Montserrat:wght@100;200;300;400&display=swap');
    wp_enqueue_script('portfolio-main', get_template_directory_uri() . '/js/app.js');
  }

remove_filter( 'the_excerpt' , 'wpautop' );