<?php get_header(); ?>

<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>

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
                <span class="main-concept">
                  <?php echo esc_html(get_field('main-concept')); ?>
                </span>
                <?php if(get_field('main-concept-text')): ?>
                <span class="main-concept-text">
                  <?php echo esc_html(get_field('main-concept-text')); ?>
                </span>
                <?php endif; ?>
              </strong>
            </h1>
          </div>
          <div class="concept-en">
            <h2 class="main-concept-en">
              <?php echo esc_html(get_field('main-concept-en')); ?>
            </h2>
            <p class="main-concept-message">
              <?php echo wp_kses_post(get_field('main-concept-message')); ?>
            </p>
          </div>
        </div>
      </section>

      <div id="main-container" class="main-section-wrap">
        <div class="main-section-content-wrap">
        <?php 
        $page = get_page_by_path('about');
        ?>
          <section class="main-section-content">
            <h2 class="main-section-content-title">
              <span class="main-section-content-title-en"><?php echo ucwords($page->post_name); ?></span>
              <span class="main-section-content-title-ja"><?php echo $page->post_title; ?></span>
            </h2>
            <div class="main-content-wrap">
              <div class="mainpage-about-image">
                <img class="main-content-img fadein" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-image.jpg"
                  alt="about-img">
              </div>
              <div class="main-about-content">
                <div class="main-about-text fadein">
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
          <section class="main-section-content">
            <h2 class="main-section-content-title">
              <span class="main-section-content-title-en"><?php echo ucwords($page->post_name); ?></span>
              <span class="main-section-content-title-ja"><?php echo $page->post_title; ?></span>
            </h2>
            <?php
            $args = array(
              'post_type' => 'my-works',
              'posts_per_page' => 4,
              'paged' => $paged,
              'orderby' => 'date',
              'order' => 'ASC'
            );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                <div class="main-works-image-wrap">
                  <div class="main-works-image">
                    <a href="<?php the_permalink(); ?>" ><?php
                      if (has_post_thumbnail()) {
                        the_post_thumbnail();
                      }
                    ?></a>
                  </div>
                  <div class="works-text-wrap">
                    <p class="works-text">
                      <?php the_excerpt(); ?>
                    </p>
                    <p class="works-image-text">
                      <?php the_title(); ?>
                    </p>
                  </div>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>
            <a class="main-button" href="<?php echo esc_url(home_url('/')); ?>works">Go to Works Page</a>
          </section>
        </div>
        <div id="aside" class="side-menu">
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
  <?php endwhile; endif; ?>
<?php get_footer(); ?>