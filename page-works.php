<?php get_header(); ?>

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
      <div class="works-message">
          <p>主に、クラウドソーシングサイトで、WEB制作の仕事を請け負い、WEBサイトやランディングページを制作してきました。<br>以下、詳細ページに詳しい制作内容を紹介しておりますので、ご覧いただけますと幸いです。</p>
        </div>
      <div class="works-image-wrap">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'my-works',
          'posts_per_page' => 6,
          'paged' => $paged
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()):
          while ($the_query->have_posts()):
            $the_query->the_post(); ?>
            <div class="main-works-image works-list">
              <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) {
                  the_post_thumbnail();
                }
                ?>
                <p class="works-excerpt">
                  <?php the_excerpt(); ?>
                </p>
                <p class="works-image-title">
                  <?php the_title(); ?>
                </p>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
        <div id="aside" class="side-menu page-side-menu">
          <div class="side-menu-title">
            <a href="#">Kei's Portfolio</a>
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
    </div>

  </main>
<?php endif; ?>

<?php get_footer(); ?>