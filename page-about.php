<?php get_header(); ?>  

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <main class="about-page-wrap">
    <h1 class="page-title">
        <span class="title-en"><?php echo strtoupper ($post->post_name); ?></span>
        <span class="title-ja"><?php the_title(); ?></span>
    </h1>
    <div class="profile">
        <div class="profile-img-wrap">
            <img class="my-img" src="<?php echo get_template_directory_uri(); ?>/img/profile-test.jpg" alt="齊藤恵画像">
            <div class="name-area">
              <div class="name-wrap">
                <p class="my-name-kana">さいとうけい</p>
                <p class="my-name">齊藤恵</p>
              </div>
              <p class="my-name-birth">（1985年2月7日）</p>
            </div>
              <p class="my-profile-text">岩手県盛岡市出身、今は奥さんと千葉県野田市に暮らしています。<br>得意なことはひたすら作業する事と、何事にも続けられる継続力です。</p>
        </div>
        <div class="profile-text-wrap">
            <h2 class="profile-title">
              <span>マネジメント力</span>
              <span>×</span>
              <span>プログラミング</span>
            </h2>
            <p class="profile-text">私は現在、ドラッグストアの店長として働きながら、副業でWEB制作の仕事を行っています。<br>店長として100人以上の従業員をマネジメントし、幅広い年齢層のチームを指導する中で、常に謙虚な姿勢で接することを心がけてきました。<br>3年前からは独学でプログラミングを学び、その後MENTAのプロの指導を受けてスキルを高めてきました。<br>WEB制作の副業では、経験は浅いですが、WEBデザインやSEOマーケティングのアドバイスなどを通じてクライアントの期待以上の成果を提供できるよう努めてきました。<br>特にココナラでの評価が高く、WEB制作に関する相談も増えています。<br>今は、店舗マネジメントで培ったコミュニケーション能力と、プロから学んだプログラミング技術を活かして、新しい企業で一緒に働く機会を探しています。</p>
        </div>
    </div>

    <div class="skill-content-wrap">
      <section class="main-content">
        <h2 class="main-content-title">
          <span class="main-content-title-en">Skill</span>
          <span class="main-content-title-ja">できること</span>
        </h2>
        <div class="skill-content">
          <div class="skill-wrap">
            <p class="skill-item skill-html-css">HTML<br>CSS</p>
            <p class="skill-item-text">HTML/CSS</p>
          </div>
          <div class="skill-wrap">
            <p class="skill-item">JS</p>
            <p class="skill-item-text">JavaScript</p>
          </div>
          <div class="skill-wrap">
            <p class="skill-item">WP</p>
            <p class="skill-item-text">WordPress</p>
            </div>
          <div class="skill-wrap">
            <p class="skill-item">PS</p>
            <p class="skill-item-text">Photoshop</p>
          </div>
          <div class="skill-wrap">
            <p class="skill-item">Ai</p>
            <p class="skill-item-text">illustrator</p>
          </div>
          <div class="skill-wrap">
            <p class="skill-item">XD</p>
            <p class="skill-item-text">Adobe XD</p>
          </div>
        </div>
        <div class="skill-text-wrap">
          <h3 class="skill-text-title">WEBデザイン</h3>
          <p class="skill-text">WEBサイトを立ち上げる際、準備段階が非常に重要だと学びました。<br>そのため、私は現職で培った経験を活かし、クライアントの声に耳を傾け、相手の意図や視点を理解し共感することを心掛けています。<br>また、デザインにおいては、基本的なデザインの原則を把握した上で、クライアントの要望を実現する一方で、エンドユーザーが使いやすい、分かりやすいデザインを追求しています。</p>
        </div>
        <div class="skill-text-wrap">
          <h3 class="skill-text-title">コーディング</h3>
          <p class="skill-text">HTMLを使用してウェブページの基本構造を作成し、CSSを用いて快適な閲覧環境を調整できます。<br>また、JavaScriptの基礎を理解し、jQueryなどのライブラリを使って動的な要素を持つサイトを制作できます。<br>さらに、HTMLをWordPressテーマとして実装するスキルも持っています。</p>
        </div>
      </section>
      <section>
          <h2 class="main-content-title">
            <span class="main-content-title-en">Prospects</span>
            <span class="main-content-title-ja">これからのこと</span>
          </h2>
          <div class="prospects-wrap">
            <img class="prospects-img" src="<?php echo get_template_directory_uri(); ?>/img/prospects-img.jpg" alt="出身県の風景">
            <p class="prospects-image-text">故郷岩手県の風景</p>
          </div>
          <p class="prospects-main-text">最後までご覧いただきありがとうございました。<br>日々楽しく、やりたいことをできるようにする<br>36歳の節目にして初めて人生の目的を見つけました。<br>そのために必要なスキルや知識を獲得するため努力し、日々ITリテラシーの向上に取り組んでいます。<br>私の目標は、自身の技術や知識を活かし、多くの人々がITに親しみを持てるようサポートすることです。<br>私は年齢に負けずに情熱を持ち、会社に求められるだけの価値を提供できると確信しており、ぜひ貴社でのチャンスを頂戴したいと考えています。どうぞよろしくお願いいたします。</p>
      </section>
    </div>
  </main>
  <?php endwhile; ?>
<?php endif; ?>
 
<?php get_footer(); ?>