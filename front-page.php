<?php get_header(); ?>

<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>

    <main>
      <section class="main">
        <div id="loading">
          <p>Loading...</p>
          <div id="loading-screen"></div>
        </div>
        <div class="concept">
          <h1 class="title">
            <strong>
              <span class="title-main">
                <?php echo esc_html(get_field('title-main')); ?>
              </span>
              <?php if (get_field('title-sub')): ?>
                <span class="title-sub">
                  <?php echo esc_html(get_field('title-sub')); ?>
                </span>
              <?php endif; ?>
            </strong>
          </h1>
        </div>
        <div class="message">
          <p class="message-text">
            <?php echo wp_kses_post(get_field('message-text')); ?>
          </p>
        </div>
      </section>

      <div id="main-container" class="container">
        <div class="section-wrap">
          <?php
          $page = get_page_by_path('about');
          ?>
          <section class="section-content">
            <h2 class="section-content-title">
              <span class="section-content-title-en">
                <?php echo ucwords($page->post_name); ?>
              </span>
              <span class="section-content-title-ja">
                <?php echo $page->post_title; ?>
              </span>
            </h2>
            <div class="about-section-wrap">
              <div class="about-section-image-wrap">
                <img class="about-section-image fadein"
                  src="<?php echo get_template_directory_uri(); ?>/img/portfolio-image.jpg" alt="about-img">
              </div>
              <div class="about-section-text-wrap">
                <div class="about-section-text fadein">
                  <?php echo wp_kses_post(get_field('main-about-text')); ?>
                </div>
                <div class="mainpage-about-button">
                  <a class="main-button" href="<?php echo esc_url(home_url('/')); ?>about">Who is Kei?</a>
                </div>
              </div>
            </div>
          </section>
          <?php
          $page = get_page_by_path('works');
          ?>
          <section class="section-content">
            <h2 class="section-content-title">
              <span class="section-content-title-en">
                <?php echo ucwords($page->post_name); ?>
              </span>
              <span class="section-content-title-ja">
                <?php echo $page->post_title; ?>
              </span>
            </h2>
            <?php
            $args = array(
              'post_type' => 'my-works',
              'posts_per_page' => 4,
              'paged' => $paged,
              'orderby' => 'date',
              'order' => 'ASC'
            );
            $myposts = get_posts($args);
            foreach ($myposts as $post):
              setup_postdata($post); ?>
              <div class="works-section-image-wrap">
                <div class="works-section-image">
                  <a href="<?php the_permalink(); ?>">
                    <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail();
                    }
                    ?>
                  </a>
                </div>
                <div class="works-section-wrap">
                  <p class="works-section-text">
                    <?php the_excerpt(); ?>
                  </p>
                  <p class="works-section-company">
                    <?php the_title(); ?>
                  </p>
                </div>
              </div>
            <?php endforeach;
            wp_reset_postdata(); ?>
            <a class="main-button" href="<?php echo esc_url(home_url('/')); ?>works">Go to Works Page</a>
          </section>
        </div>
        <div id="aside" class="side-menu">
          <div class="side-menu-title">
            <a href="<?php echo home_url(); ?>">
              <?php bloginfo('name'); ?>
            </a>
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