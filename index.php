<?php get_header(); ?>  
  <main>
    <div class="top">
      <h1 class="concept">
        <strong>
          <span class="main-concept">継続と挑戦</span>
          <span class="concept-text">キャリアチェンジを目指して</span>
        </strong>
      </h1>
      <img class="top-img" src="<?php echo get_template_directory_uri(); ?>/img/top_demo.jpg" alt="メイン画像">
    </div>

    <div class="main-section-wrap" id="section-nav-wrap">
        <div class="side-menu" id="section-nav">
          <div class="side-menu-title">
            <a href="#">Kei's</a>
            <a href="#">Portfolio</a>
          </div>
          <ul class="side-menu-list">
            <li class="side-menu-item"><a href="about.html">About</a></li>
            <li class="side-menu-item"><a href="works.html">Works</a></li>
            <li class="side-menu-item"><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="main-section-content-wrap">
          <section class="main-content">
            <h2 class="main-content-title">
              <span class="main-content-title-en">About</span>
              <span class="main-content-title-ja">わたしについて</span>
            </h2>
            <div class="main-content-wrap">
                <img class="main-content-img" src="<?php echo get_template_directory_uri(); ?>/img/profile-test.jpg" alt="about-img">
                <div class="main-about-text">
                  <p>はじめまして、齊藤恵と申します。<br>当サイトをご覧いただきありがとうございます。</p>
                  <p>3年前から、更なるキャリアチェンジを目指し、独学でプログラミングを学び始めました。<br>プログラミングスクール、MENTAを利用して、プロからの技術指導も受けております。<br>その成果として、クラウドソーシングサイトでWEB制作の仕事を請け負うまでになりました。</p>
                </div>
            </div>
            <a class="mainpage-button" href="<?php echo esc_url( home_url( '/' ) ); ?>about">経歴をもっと見る</a>
          </section>
          <section class="main-content">
            <h2 class="main-content-title">
              <span class="main-content-title-en">Works</span>
              <span class="main-content-title-ja">制作物について</span>
            </h2>
            <div class="main-content-text">
            <p class="main-text">
              制作物については、ココナラ、CloudWorksなどクラウドソーシングサイトから、WEB制作の依頼をいただき制作しました。<br>詳しい制作内容も紹介しておりますので、リンクからご覧いただけますと幸いです。
            </p>
            </div>
            <div class="main-works-image-wrap">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
              'post_type' => 'my-works',
              'posts_per_page' => 4,
              'paged' => $paged
            );
            $the_query = new WP_Query( $args );
          ?>
          <?php if($the_query->have_posts() ) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="main-works-image">
              <h4 class="works-image-title"><?php the_title(); ?></h4>
                <?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail();
                }
                ?>
          </div>
          <?php endwhile; ?>    
              <?php endif; ?>
            </div>
            <a class="mainpage-button" href="<?php echo esc_url( home_url( '/' ) ); ?>works">制作物はこちらから</a>
          </section>
          <section class="main-content">
            <h2 class="main-content-title">
              <span class="main-content-title-en">Contact</span>
              <span class="main-content-title-ja">お問い合わせについて</span>
            </h2>
            <div class="main-content-text">
              <p class="main-text">
                ポートフォリオサイトをご覧いただきありがとうございました。<br>業界未経験ではありますが、転職の機会を通じて新たな挑戦でも貢献できるよう準備を整えております。<br>もし、追加の情報や質問がありましたらどうぞお気軽にお知らせください。<br>最後に、お忙しい中私のポートフォリオサイトにお時間を割いていただき、誠にありがとうございました。
              </p>
            </div>
            <a class="mainpage-button" href="<?php echo esc_url( home_url( '/' ) ); ?>contact">お問い合わせはこちら</a>
          </section>
        </div>
    </div>
  </main>
<?php get_footer(); ?>