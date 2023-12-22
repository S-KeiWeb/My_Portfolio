<?php get_header(); ?>  

  <main class="page-wrap">
    <h1 class="page-title">
        <span class="title-en"><?php echo ucwords ($post->post_name); ?></span>
        <span class="title-ja"><?php the_title(); ?></span>
    </h1>
    <section class="works-content-wrap">
      <h2 class="main-section-content-title">
        <span class="main-section-content-title-en works-responsive-title">Productions</span>
        <span class="main-section-content-title-ja">制作物</span>
      </h2>
      <div class="works-image-wrap">
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
          <a href="<?php the_permalink(); ?>">
            <h4 class="works-image-title"><?php the_title(); ?></h4>
              <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
              }
              ?>
              <p class="works-excerpt"><?php the_excerpt(); ?></p>
          </a>
        </div>
        <?php endwhile; ?>    
      </div>       
    </section>
    <section class="works-content-wrap">
      <h2 class="main-section-content-title">
        <span class="main-section-content-title-en works-responsive-title">Experience</span>
        <span class="main-section-content-title-ja">実績紹介</span>
      </h2>
      <img class="experience-img" src="<?php echo get_template_directory_uri(); ?>/img/Experience-image.png" alt="coconala画像">
      <p class="works-content-text">今まで仕事の依頼は全てクラウドソーシングサイトから請け負っておりました。<br>その中でも、一番依頼いただいたのがココナラからでした。<br>主に、新規店舗立ち上げのためのホームページや、新規会員募集のためのランディングページなどのデザインを頼まれたりしました。<br>クライアントからの要望をしっかり伺い、できるだけ形にできるよう努力してまいりました。<br>以下にリンクを貼っておきますので、実績・評価も併せてご覧ください。</p>
      <a class="mainpage-button" href="https://coconala.com/users/2346005" target="_blank">Go To coconala <br class="no-br">(External Sites)</a>
    </section>
    <section class="works-content-wrap">
      <h2 class="main-section-content-title">
        <span class="main-section-content-title-en">Contact</span>
        <span class="main-section-content-title-ja">お問い合わせについて</span>
      </h2>
      <p class="works-content-text">ポートフォリオサイトをご覧いただきありがとうございました。<br>業界未経験ではありますが、この転職の機会を通じて新たな挑戦でも貢献できるよう準備を整えております。<br>もし、追加の情報や質問がありましたらどうぞお気軽にお知らせください。<br>最後に、お忙しい中私のポートフォリオサイトにお時間を割いていただき、誠にありがとうございました。</p>
      <a class="mainpage-button" href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Please Message</a>
    </section>
  </main>
<?php endif; ?>

<?php get_footer(); ?>