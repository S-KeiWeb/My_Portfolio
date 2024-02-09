<div id="loading-left">
  
</div>
<?php get_header(); ?>
  <?php if( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <main class="single-page-wrap">
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'article' ); ?>>
          <h1 class="page-title">
              <span class="title-en"><?php the_title(); ?></span>
          </h1>
          <div class="works-page-wrap">
            <?php the_content(); ?>
          </div>
        </article>
      </main>
    <?php endwhile; ?>
  <?php endif; ?>
 <?php get_footer(); ?>