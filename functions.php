<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');

add_filter('document_title_separator', "my_document_title_separator");
function my_document_title_separator($separator)
{
  $separator = '|';
  return $separator;
}

add_action('wp_enqueue_scripts', 'my_plugin_assets');
function my_plugin_assets()
{
  wp_enqueue_style('destyle', 'https://unpkg.com/destyle.css@4.0.0/destyle.min.css');
  wp_enqueue_style('portfolio-style', get_template_directory_uri() . '/css/style.css');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gothic+A1:wght@200;300;400&family=Zen+Kaku+Gothic+New:wght@300;400&family=Montserrat:wght@100;200;300;400&display=swap');
  wp_enqueue_script('portfolio-main-app', get_template_directory_uri() . '/js/app.js');
  wp_enqueue_script('portfolio-main-module', get_template_directory_uri() . '/js/module.js');
  wp_enqueue_script('gsap', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js');
  wp_enqueue_script('lenis', get_template_directory_uri() . 'https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"');
  wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/e4895282b1.js');
}

remove_filter('the_excerpt', 'wpautop');

function wpcf7_custom_email_validation_filter($result, $tag)
{
  if ('your-email-confirm' == $tag->name) {
    $your_email = isset($_POST['your-email']) ? trim($_POST['your-email']) : '';
    $your_email_confirm = isset($_POST['your-email-confirm']) ? trim($_POST['your-email-confirm']) : '';
    if ($your_email != $your_email_confirm) {
      $result->invalidate($tag, "メールアドレスが一致しません");
    }
  }
  return $result;
}
add_filter('wpcf7_validate_email', 'wpcf7_custom_email_validation_filter', 20, 2);
add_filter('wpcf7_validate_email*', 'wpcf7_custom_email_validation_filter', 20, 2);