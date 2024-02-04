<?php get_header(); ?>

<?php if (have_posts()): ?>
	<?php while (have_posts()):
		the_post(); ?>
		<main>
			<div id="main-container">
				<div class="page-wrap">
					<h1 class="page-title">
						<span class="title-en">
							<?php echo ucwords($post->post_name); ?>
						</span>
						<span class="title-ja">
							<?php the_title(); ?>
						</span>
					</h1>
					<div class="profile">
						<div class="profile-img-wrap">
							<img class="my-img" src="<?php echo get_template_directory_uri(); ?>/img/profile-test.jpg" alt="齊藤恵画像">
						</div>
						<div class="profile-text-wrap">
							<div class="name-wrap">
								<p class="my-name">齊藤恵</p>
								<p class="my-name-kana">Kei Saitou</p>
							</div>
							<p class="profile-text">岩手県盛岡市出身、39歳。<br>
								現状に満足せず、スキルを磨ける場を求めるため、自らWebスキルを学び、WEB業界へのキャリアチェンジを目指しております。<br>
								現在、店舗マネジメントで培ったコミュニケーション能力と、自ら学んだWEB制作スキルを活かし、新しい企業で一緒に働く機会を探しています。
							</p>
						</div>
					</div>

					<div class="skill-content-wrap">
						<section class="main-section-content">
							<h2 class="main-section-content-title">
								<span class="main-section-content-title-en">Skill</span>
								<span class="main-section-content-title-ja">できること</span>
							</h2>
							<div class="web-production-wrap">
								<div class="web-production-title-wrap">
									<h2 class="web-production-title">WEB制作スキル</h2>
								</div>
								<div class="web-production-contents-wrap">
									<h3 class="skill-text-title">WEBデザイン</h3>
									<i class="fa-solid fa-pen-nib"></i>
									<p>WEBサイトを作る際、準備が大事だと感じています。仕事で学んだ経験を活かし、クライアントの声に耳を傾け、相手の意図や視点を理解・共感するよう心がけています。<br>デザインでは、基本の原則を押さえつつ、クライアントの希望を叶えつつも、使いやすく分かりやすいデザインを目指しています。</p>
								</div>
								<div class="web-production-contents-wrap">
									<h3 class="skill-text-title">WEBデザイン</h3>
									<i class="fa-regular fa-keyboard"></i>
									<p>WEBサイトを作る際、準備が大事だと感じています。仕事で学んだ経験を活かし、クライアントの声に耳を傾け、相手の意図や視点を理解・共感するよう心がけています。<br>デザインでは、基本の原則を押さえつつ、クライアントの希望を叶えつつも、使いやすく分かりやすいデザインを目指しています。</p>
								</div>
									
								<p class="skill-text">
									WEBサイトを立ち上げる際、準備段階が非常に重要だと学びました。<br>そのため、私は現職で培った経験を活かし、クライアントの声に耳を傾け、相手の意図や視点を理解し共感することを心掛けています。<br>また、デザインにおいては、基本的なデザインの原則を把握した上で、クライアントの要望を実現する一方で、エンドユーザーが使いやすい、分かりやすいデザインを追求しています。
								</p>
							</div>
							<div class="skill-text-wrap">
								<h3 class="skill-text-title">コーディング</h3>
								<p class="skill-text">
									HTMLを使用してウェブページの基本構造を作成し、CSSを用いて快適な閲覧環境を調整できます。<br>また、JavaScriptの基礎を理解し、jQueryなどのライブラリを使って動的な要素を持つサイトを制作できます。<br>さらに、HTMLをWordPressテーマとして実装するスキルも持っています。
								</p>
							</div>
							<div class="skill-content">
								<div class="skill-wrap">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110" class="circle-wrap">
										<circle cx="55" cy="55" r="50" class="circle-animation" />
										<text x="50%" y="40%" alignment-baseline="middle" text-anchor="middle" fill="#707070"
											class="circle-text text-html">HTML</text>
										<text x="50%" y="60%" alignment-baseline="middle" text-anchor="middle" fill="#707070"
											class="circle-text text-css">CSS</text>
									</svg>
									<p class="skill-item-text">HTML&CSS</p>
								</div>
								<div class="skill-wrap">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110" class="circle-wrap">
										<circle cx="55" cy="55" r="50" class="circle-animation" />
										<text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="#707070"
											class="circle-text">JS</text>
									</svg>
									<p class="skill-item-text">JavaScript</p>
								</div>
								<div class="skill-wrap">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110" class="circle-wrap">
										<circle cx="55" cy="55" r="50" class="circle-animation" />
										<text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="#707070"
											class="circle-text">WP</text>
									</svg>
									<p class="skill-item-text">WordPress</p>
								</div>
								<div class="skill-wrap">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110" class="circle-wrap">
										<circle cx="55" cy="55" r="50" class="circle-animation" />
										<text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="#707070"
											class="circle-text">PS</text>
									</svg>
									<p class="skill-item-text">Photoshop</p>
								</div>
								<div class="skill-wrap">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110" class="circle-wrap">
										<circle cx="55" cy="55" r="50" class="circle-animation" />
										<text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="#707070"
											class="circle-text">Ai</text>
									</svg>
									<p class="skill-item-text">illustrator</p>
								</div>
								<div class="skill-wrap">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110" class="circle-wrap">
										<circle cx="55" cy="55" r="50" class="circle-animation" />
										<text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="#707070"
											class="circle-text">XD</text>
									</svg>
									<p class="skill-item-text">Adobe XD</p>
								</div>
							</div>
						</section>
						<section>
							<div class="profile-text-wrap">
									<h2 class="profile-title">
										<span>マネジメント力</span>
										<span>×</span>
										<span>プログラミング</span>
									</h2>
									<p class="profile-text">
										私は現在、ドラッグストアの店長として働きながら、副業でWEB制作の仕事を行っています。<br>店長として100人以上の従業員をマネジメントし、幅広い年齢層のチームを指導する中で、常に謙虚な姿勢で接することを心がけてきました。<br>3年前からは独学でプログラミングを学び、その後MENTAのプロの指導を受けてスキルを高めてきました。<br>WEB制作の副業では、経験は浅いですが、WEBデザインやSEOマーケティングのアドバイスなどを通じてクライアントの期待以上の成果を提供できるよう努めてきました。<br>特にココナラでの評価が高く、WEB制作に関する相談も増えています。<br>今は、店舗マネジメントで培ったコミュニケーション能力と、プロから学んだプログラミング技術を活かして、新しい企業で一緒に働く機会を探しています。
									</p>
								</div>
						</section>
					</div>

				</div>
				<div id="aside" class="side-menu page-side-menu">
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
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>