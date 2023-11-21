<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@4.0.0/destyle.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
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
    <a class="contact" href="#">Contact</a>
    <div class="openbtn">
      <div class="openbtn-area">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <nav class="mask-menu-wrap" id="mask-menu">
      <ul class="mask-nav">
        <li class="mask-nav-item"><a href="index.html">Kei's-Portfolio</a></li>
        <li class="mask-nav-item"><a href="about.html">About</a></li>
        <li class="mask-nav-item"><a href="works.html">Works</a></li>
        <li class="mask-nav-item"><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

