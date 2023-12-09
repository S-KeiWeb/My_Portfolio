<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@4.0.0/destyle.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@300&family=Montserrat&family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="site-title"><a href="<?php echo home_url(); ?>">Kei's-Portfolio</a></div>
    <nav class="header-nav-wrap">
      <?php
      $args = array(
        'menu' => 'global-navigation',
        'menu_class' => 'header-nav',
        'container' => false,
      );
      wp_nav_menu($args);
      ?>
    </nav>
    <div class="openbtn">
      <div class="openbtn-area">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <nav class="mask-menu-wrap" id="mask-menu">
      <?php
      $args = array(
        'menu' => 'sp-global-navigation',
        'menu_class' => 'mask-nav-item',
        'container' => false,
      );
      wp_nav_menu($args);
      ?>
    </nav>
  </header>

