<div id="loading-left">

</div>
<?php get_header(); ?>
  <?php if( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <main class="my-works-page-wrap">
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'article' ); ?>>
          <h1 class="page-title">
              <span class="title-en"><?php the_title(); ?></span>
          </h1>
          <div>
            <div class="my-works-image">
              <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('large');
                }
              ?>
            </div>
            <div class="my-works-content-wrap">
              <div class="my-works-content-item">
                <h3>URL</h3>
                <?php $url = get_field('my-works-url');
                 if ($url) : ?>
                <a class="my-works-text" href="<?php echo esc_attr( get_field('my-works-url') ); ?>" target="_blank"><?php echo esc_attr( get_field('my-works-url') ); ?></a>
                <?php else : ?>
                    <p class="closing-text">事業閉鎖のためページは閉鎖しました。</p>
                <?php endif; ?>
              </div>
              <div class="my-works-content-item">
                <h3>使用技術</h3>
                <p class="my-works-text"><?php echo esc_html(get_field('my-works-skill')); ?></p>
              </div>
              <div class="my-works-content-item">
                <h3>制作期間</h3>
                <p class="my-works-text"><?php echo esc_html(get_field('my-works-term')); ?></p>
              </div>
              <div class="my-works-content-item">
                <h3>制作内容</h3>
                <p class="my-works-text">
                <?php echo wp_kses_post(get_field('my-works-details')); ?>
              </p>
              </div>
            </div>
            <div class="return-button">
              <?php $referrer = wp_get_referer();
              if ($referrer) {
                echo '<a href="'. esc_url($referrer) . '" class="back-button">Works Pageに戻る>></a>';
              }
              ?>
            </div>
          </div>
        </article>
      </main>
    <?php endwhile; ?>
  <?php endif; ?>
 <?php get_footer(); ?>