<?php get_header(); ?>
<div id="pl_center">
	<div id="contenter">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
	<?php endif; wp_reset_query();?>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>