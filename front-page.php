<?php get_header(); ?>  
<section class="top-main-wrap">
  <main>
      <div id="loading">
        <p>Loading...</p>
        <div id="loading-screen"></div>
      </div>
      <div class="top-main">
        <div class="top-concept-wrap">
          <h1 class="concept">
            <strong>
              <span class="main-concept">継続と挑戦</span>
              <span class="main-concept-text">キャリアチェンジを目指して</span>
            </strong>
          </h1>
        </div>
        <div class="concept-en">
          <h2 class="main-concept-en">A new beginning.</h2>
          <p class="main-concept-message">Even if you lose, it doesn’t end there.<br>There is always a next time.<br>As long as one is aiming for the next,<br>one is never finished.</p>
        </div>
      </div>
    </section>

    <div id="main-container" class="main-section-wrap">
        <div class="main-section-content-wrap">
          <section class="main-section-content">
            <h2 class="main-section-content-title">
              <span class="main-section-content-title-en">About</span>
              <span class="main-section-content-title-ja">わたしについて</span>
            </h2>
            <div class="main-content-wrap">
              <div class="mainpage-about-image">
                <img class="main-content-img fadein" src="<?php echo get_template_directory_uri(); ?>/img/profile-test.jpg" alt="about-img">
              </div>
                <div class="main-about-content">
                  <div class="main-about-text fadein">
                    <p>はじめまして、齊藤恵と申します。<br>当サイトをご覧いただきありがとうございます。</p>
                    <p>更なるキャリアチェンジを目指し、独学でプログラミングを学び始めました。<br>その成果として、クラウドソーシングサイトでWEB制作の仕事を請け負うまでになりました。</p>
                  </div>
                  <div class="mainpage-about-button">
                    <a class="mainpage-button" href="<?php echo esc_url( home_url( '/' ) ); ?>about">Who is Kei?</a>
                  </div>
                </div>
            </div>
          </section>
          <section class="main-section-content">
            <h2 class="main-section-content-title">
              <span class="main-section-content-title-en">Works</span>
              <span class="main-section-content-title-ja">制作物について</span>
            </h2>
            <div class="overlay-text-wrap">
              <div class="main-works-image-wrap">
                <?php
                  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                  $args = array(
                    'post_type' => 'my-works',
                    'posts_per_page' => 4,
                    'paged' => $paged
                  );
                  $the_query = new WP_Query( $args );
                  if($the_query->have_posts() ) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <div class="main-works-image">
                    <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    }
                  ?>
                </div>
                <?php endwhile; ?>    
                <?php endif; ?>
              </div>
              <div class="works-overlay-text fadein">
                  <p>
                  制作物については、ココナラ、CloudWorksなどクラウドソーシングサイトから、WEB制作の依頼をいただき制作しました。<br>詳しい制作内容も紹介しておりますので、リンクからご覧いただけますと幸いです。
                  </p>
              </div>          
            </div>
            <a class="mainpage-button" href="<?php echo esc_url( home_url( '/' ) ); ?>works">Go to Works Page</a>
          </section>
          <section class="main-section-content">
            <h2 class="main-section-content-title">
              <span class="main-section-content-title-en">Contact</span>
              <span class="main-section-content-title-ja">お問い合わせについて</span>
            </h2>
            <div class="overlay-text-wrap">
              <img class="contact-image" src="<?php echo get_template_directory_uri(); ?>/img/contact-background.jpg" alt="contact-image">
              <p class="overlay-text">
                ポートフォリオサイトをご覧いただきありがとうございました。<br>業界未経験ではありますが、転職の機会を通じて新たな挑戦でも貢献できるよう準備を整えております。<br>もし、追加の情報や質問がありましたらどうぞお気軽にお知らせください。<br>最後に、お忙しい中私のポートフォリオサイトにお時間を割いていただき、誠にありがとうございました。
              </p>
              <a class="contact-button" href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Please Message >></a>
            </div>
          </section>
        </div>
        <div id="aside" class="side-menu">
          <div class="side-menu-title">
            <a href="#">Kei's</a>
            <a href="#">Portfolio</a>
          </div>
          <nav class="side-nav-wrap">
            <?php
            $args = array(
              'menu' => 'side-global-navigation',
              'menu_class' => 'side-nav',
              'container' => false,
            );
            wp_nav_menu($args);
            ?>
          </nav>
        </div>
    </div>
  </main>
<?php get_footer(); ?>