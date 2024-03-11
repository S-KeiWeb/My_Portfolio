<?php get_header(); ?>

<?php if (have_posts()): ?>
	<?php while (have_posts()):
		the_post(); ?>
		<main class="other-page-wrap">
			<h1 class="page-title contact-page-title">
				<span class="title-en">
					<?php echo ucwords($post->post_name); ?>
				</span>
				<span class="title-ja">
					<?php the_title(); ?>
				</span>
			</h1>
			<div class="content">
				<?php the_content(); ?>
			</div>
		</main>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>