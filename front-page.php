<?php get_header(); ?>  

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <main>
      <section class="top-main-wrap">
        <div id="loading">
          <p>Loading...</p>
          <div id="loading-screen"></div>
        </div>
        <div class="top-main">
          <div class="top-concept-wrap">
            <h1 class="concept">
              <strong>
                <span class="main-concept"><?php echo esc_html( get_field('main-concept') ); ?></span>
                <span class="main-concept-text"><?php echo esc_html( get_field('main-concept-text') ); ?></span>
              </strong>
            </h1>
          </div>
          <div class="concept-en">
            <h2 class="main-concept-en"><?php echo esc_html( get_field('main-concept-en') ); ?></h2>
            <p class="main-concept-message"><?php echo wp_kses_post ( get_field('main-concept-message') ); ?></p>
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
                    <?php echo wp_kses_post ( get_field('main-about-text') ); ?>
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
                  <?php endif; wp_reset_postdata(); ?>
                </div>
                <div class="works-overlay-text fadein">
                  <p><?php echo wp_kses_post ( get_field('works-overlay-text') ); ?></p>
                </div>          
              </div>
              <a class="mainpage-button" href="<?php echo esc_url( home_url( '/' ) ); ?>works">Go to Works Page</a>
            </section>
            <section class="main-section-content">
              <h2 class="main-section-content-title">
                <span class="main-section-content-title-en">Contact</span>
                <span class="main-section-content-title-ja">お問い合わせについて</span>
              </h2>
              <div class="contact-wrap">
                <div class="contact-text-wrap">
                  <p class="contact-text"><?php echo wp_kses_post ( get_field('contact-text') ); ?></p>
                  <p class="contact-button-wrap">
                    <a class="contact-button" href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Please Message ＞＞</a>
                  </p>
                </div>
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
  <?php endwhile; endif; ?>
<?php get_footer(); ?>