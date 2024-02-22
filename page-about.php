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
						<div class="profile-img-wrap fadeup">
							<img class="my-img" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-image.jpg" alt="齊藤恵画像">
						</div>
						<div class="profile-text-wrap">
							<div class="name-wrap fade-left">
								<p class="my-name">齊藤恵</p>
								<p class="my-name-kana">Kei Saitou</p>
							</div>
							<p class="profile-text fade-left">岩手県盛岡市出身、39歳。<br>
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
								<div class="production-title-wrap">
									<h3 class="production-title">WEB制作スキル</h3>
								</div>
								<div class="production-contents-wrap">
									<div class="production-contents">
										<i class="fa-solid fa-pen-nib production-contents-icon"></i>
										<h3 class="production-contents-title">WEBデザイン</h3>
										<p class="production-contents-text">
											WEBサイトを作る際、準備が大事だと感じています。仕事で学んだ経験を活かし、クライアントの声に耳を傾け、相手の意図や視点を理解・共感するよう心がけています。<br>デザインでは、基本の原則を押さえつつ、クライアントの希望を叶えつつも、使いやすく分かりやすいデザインを目指しています。
										</p>
									</div>
									<div class="production-contents">
										<i class="fa-regular fa-keyboard production-contents-icon"></i>
										<h3 class="production-contents-title">コーディング</h3>
										<p class="production-contents-text">
											HTMLを使用してウェブページの基本構造を作成し、CSSを用いて快適な閲覧環境を調整できます。また、JavaScriptの基礎を理解し、jQueryなどのライブラリを使って動的な要素を持つサイトを制作できます。さらに、HTMLをWordPressテーマとして実装するスキルも持っています。
										</p>
									</div>
								</div>
								<div class="skill-content">
									<div class="skill-wrap">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110" class="circle-wrap">
											<circle cx="55" cy="55" r="50" class="circle-animation html-css-circle-color" />
											<text x="50%" y="40%" alignment-baseline="middle" text-anchor="middle" fill="#4b6aa5"
												class="circle-text text-html">HTML</text>
											<text x="50%" y="60%" alignment-baseline="middle" text-anchor="middle" fill="#4b6aa5"
												class="circle-text text-css">CSS</text>
										</svg>
										<p class="skill-item-text">HTML&CSS</p>
									</div>
									<div class="skill-wrap">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110" class="circle-wrap">
											<circle cx="55" cy="55" r="50" class="circle-animation js-circle-color" />
											<text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="#4b6aa5"
												class="circle-text">JS</text>
										</svg>
										<p class="skill-item-text">JavaScript</p>
									</div>
									<div class="skill-wrap">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110" class="circle-wrap">
											<circle cx="55" cy="55" r="50" class="circle-animation wp-circle-color" />
											<text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="#4b6aa5"
												class="circle-text">WP</text>
										</svg>
										<p class="skill-item-text">WordPress</p>
									</div>
									<div class="skill-wrap">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110" class="circle-wrap">
											<circle cx="55" cy="55" r="50" class="circle-animation ps-circle-color" />
											<text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="#4b6aa5"
												class="circle-text">PS</text>
										</svg>
										<p class="skill-item-text">Photoshop</p>
									</div>
									<div class="skill-wrap">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110" class="circle-wrap">
											<circle cx="55" cy="55" r="50" class="circle-animation ai-circle-color" />
											<text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="#4b6aa5"
												class="circle-text">Ai</text>
										</svg>
										<p class="skill-item-text">illustrator</p>
									</div>
									<div class="skill-wrap">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110" class="circle-wrap">
											<circle cx="55" cy="55" r="50" class="circle-animation xd-circle-color" />
											<text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="#4b6aa5"
												class="circle-text">XD</text>
										</svg>
										<p class="skill-item-text">Adobe XD</p>
									</div>
								</div>
							</div>
							<div class="web-production-wrap">
								<div class="production-title-wrap">
									<h3 class="production-title">マネジメントスキル</h3>
								</div>
								<div class="production-contents-wrap">
									<div class="production-contents">
										<i class="fa-solid fa-people-group production-contents-icon"></i>
										<h3 class="production-contents-title">コミュニケーションスキル</h3>
										<p class="production-contents-text">
											私は現在、ドラッグストアの店長として働きながら、副業でWEB制作の仕事を行っています。<br>店長として100人以上の従業員をマネジメントし、幅広い年齢層のチームを指導する中で、常に謙虚な姿勢で接することを心がけてきました。
										</p>
									</div>
									<div class="production-contents">
										<i class="fa-solid fa-list-check production-contents-icon"></i>
										<h3 class="production-contents-title">自己管理能力</h3>
										<p class="production-contents-text">
											自分の思考や感情、行動をコントロールし、店舗の目標数値を達成するために行動していました。<br>さらに、自分のスキルアップのため、仕事のまえの時間や休日は、自己研鑽に時間を費やすように時間を管理を行いました。
										</p>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="archive-contents">
						<section class="main-section-content">
							<h2 class="main-section-content-title">
								<span class="main-section-content-title-en">Experience</span>
								<span class="main-section-content-title-ja">実績紹介</span>
							</h2>
							<div class="archive-wrap">
								<div class="production-title-wrap">
									<h3 class="production-title">WEB制作の実績と評価</h3>
								</div>
							</div>
							<div class="archive-text-wrap">
								<p class="archive-text">
									これまでの仕事はすべてクラウドソーシングサイトから受けてきました。その中で最も多かったのがココナラでのの仕事です。<br>主に新規店舗のホームページや会員募集のランディングページのデザインをお願いされました。クライアントの要望を注意深く聞き、できる限り形にしてきました。<br>WEB制作の副業では経験が浅いですが、クライアントへのWEBデザインやSEOマーケティングのアドバイスを通じて、期待以上の成果を提供するよう心がけております。特にココナラで高い評価をいただいており、WEB制作に関する相談も増えています。実績と評価は以下のリンクからご覧いただけます。
								</p>
								<div class="mainpage-about-button">
									<a class="main-button" href="https://coconala.com/users/2346005" target="_blank"
										rel="noopener noreferrer">Go To coconala</a>
								</div>
							</div>
						</section>
					</div>
				</div>
				<div id="aside" class="side-menu page-side-menu">
					<div class="side-menu-title">
						<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
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