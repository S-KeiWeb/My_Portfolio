<?php get_header(); ?>

 <?php if( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
  <main class="page-wrap">
		<h1 class="page-title">
        <span class="title-en"><?php echo strtoupper ($post->post_name); ?></span>
        <span class="title-ja"><?php the_title(); ?></span>
    </h1>
		<div class="container">
			<div class="content">
				<?php the_content(); ?>
			</div>
		</div>
	</main>

	<?php endwhile; ?>
 <?php endif; ?>

<?php get_footer(); ?>