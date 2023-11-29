<?php get_header(); ?>
  <?php if( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <main class="page-wrap">
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'article' ); ?>>
          <h1 class="page-title">
              <span class="title-en">Works</span>
              <span class="title-ja">制作物について</span>
          </h1>
          <div class="works-page-wrap">
            <?php the_category(); ?>
            <h2 class="works-content-title"><?php the_title(); ?></h2>
             <?php the_content(); ?>
          </div>
        </article>
      </main>
    <?php endwhile; ?>
  <?php endif; ?>
 <?php get_footer(); ?>