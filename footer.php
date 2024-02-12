<footer class="footer">
  <div class="footer-contact-wrap">
    <p class="footer-message">
    ポートフォリオサイトをご覧いただきありがとうございました。<br>
    業界未経験ではありますが、この転職の機会を通じて新たな挑戦でも貢献できるよう準備を整えております。<br>
    もし、追加の情報や質問がありましたらどうぞお気軽にお知らせください。<br>
    最後に、お忙しい中私のポートフォリオサイトにお時間を割いていただき、誠にありがとうございました。
    </p>
    <div class="footer-contact-button-wrap">
      <a class="footer-contact-button" href="<?php echo esc_url( home_url( '/' ) ); ?>contact">
        <span class="footer-contact-button-item">Contact Me</span>
      </a>
    </div>
  </div>
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