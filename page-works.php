<?php get_header(); ?>  

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <main class="page-wrap">
    <h1 class="page-title">
        <span class="title-en"><?php echo strtoupper ($post->post_name); ?></span>
        <span class="title-ja"><?php the_title(); ?></span>
    </h1>
    <div class="works-page-wrap">
      <section class="works-content-wrap">
        <h2 class="main-content-title">
          <span class="main-content-title-en works-responsive-title">Works and Experience</span>
          <span class="main-content-title-ja">制作物と実績紹介</span>
        </h2>
        <h3 class="works-content-title">制作物</h3>
        <div class="works-image-wrap">
          <a href="works-nextrise.html">
          <div class="main-works-img">
            <h4 class="works-title">NEXT RISE</h4>
            <img class="works-image" src="<?php echo get_template_directory_uri(); ?>img/nextrise-hp-top.png" alt="NEXTRISEホームページ画像">
            <p class="works-text">埼玉県越谷市で蓄電池販売を行っている企業様のホームページを制作させていただきました。</p>
          </div>
          </a>
          <a href="works-nextrise.html">
          <div class="main-works-img">
            <h4 class="works-title">株式会社松栄</h4>
            <img class="works-image" src="img/shouei-hp-top.png" alt="株式会社松栄ホームページ画像">
            <p class="works-text">オンライン講座受講予約用ホームページを制作と、保守管理を任せていただきました。<br><span class="shouei-comment">※業務終了のためHPは閉鎖しています</span>
            </p>
          </div>
          </a>
          <a href="works-nextrise.html">
          <div class="main-works-img">
            <h4 class="works-title">JOYROASTER</h4>
            <img class="works-image" src="img/joyroaster-hp-top.png" alt="JOYROASTERホームページ画像">    
            <p class="works-text">ローストチキン販売店のテイクアウト予約用のホームページを制作させていただきました。</p>
          </div>
          </a>
          <a href="works-nextrise.html">
          <div class="main-works-img">
            <h4 class="works-title">Rainbow Ark</h4>
            <img class="works-image" src="img/ultimateone-lp-top.png" alt="UltimateOneランディングページ画像">
            <p class="works-text">Ultimate Oneという美容液のランディングページを制作させていただきました。</p>
          </div>
          </a>
        </div>       
      </section>
      <section class="works-summary">
        <h2 class="works-content-title">実績</h2>
        <p class="works-content-text">今まで仕事の依頼は全てクラウドソーシングサイトから請け負っておりました。<br>その中でも、一番依頼いただいたのがココナラからでした。<br>以下にリンクを貼っておきますので、実績・評価も併せてご覧ください。</p>
        <a class="mainpage-button" href="https://coconala.com/users/2346005" target="_blank">ココナラ（外部サイト）へ</a>
      </section>
      <section class="works-contact">
        <h2 class="main-content-title">
          <span class="main-content-title-en">Contact</span>
          <span class="main-content-title-ja">お問い合わせについて</span>
        </h2>
        <p class="works-content-text">ポートフォリオサイトをご覧いただきありがとうございました。<br>業界未経験ではありますが、この転職の機会を通じて新たな挑戦でも貢献できるよう準備を整えております。<br>もし、追加の情報や質問がありましたらどうぞお気軽にお知らせください。<br>最後に、お忙しい中私のポートフォリオサイトにお時間を割いていただき、誠にありがとうございました。</p>
        <a class="mainpage-button" href="#">お問い合せはこちらから</a>
      </section>
    </div>
  </main>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>