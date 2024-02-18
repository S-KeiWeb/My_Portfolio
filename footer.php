<footer class="footer">
  <?php if(!is_page('contact')): ?>
  <?php get_template_part('cta'); ?>
  <?php endif; ?>
  <nav class="footer-nav-wrap">
    <?php
    $args = array(
      'menu' => 'footer-navigation',
      'menu_class' => 'footer-nav main-nav',
      'container' => false,
    );
    wp_nav_menu($args);
    ?>
  </nav>
  <p class="copyright">©︎ Kei's Portfolio</p>
</footer>
<?php wp_footer(); ?>
</body>

</html>