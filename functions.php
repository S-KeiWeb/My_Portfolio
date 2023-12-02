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
  wp_enqueue_script('jquery');
  wp_enqueue_script('portfolio-main', get_template_directory_uri() . '/js/app.js');
}

remove_filter( 'the_excerpt' , 'wpautop' );