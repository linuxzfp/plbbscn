<?php
/*
Template Name: leanhorse 的 page 模板
*/
?>
<?php get_header() ?>
<div id="plcenter">
<div class="plcenter_box" style='width:99%; height:100%;marign:auto;'>
	<div class="list_header">
		<div class="list_title"><?php the_title(); ?></div>
	</div>
	<div class="list_content" style="background:none;">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
	<?php endif; wp_reset_query();?>
	</div>
</div>
</div>
<?php get_footer(); ?>