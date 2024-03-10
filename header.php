<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="site-title"><a href="<?php echo home_url(); ?>">
        <?php bloginfo('name'); ?>
      </a></div>
    <nav class="header-nav-wrap">
      <?php
      $args = array(
        'menu' => 'global-navigation',
        'menu_class' => 'header-nav main-nav',
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