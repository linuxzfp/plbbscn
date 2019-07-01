<div class="category_right" style="border:1px solid red;border-radius:10px;">
	<div class="single_fromwhere">
	<?php include ( TEMPLATEPATH . "/fromwhere.php"); ?>
	</div>
	<div class="list_header">
	<div class="list_title">文章列表</div>
	</div>
	<div  class="category_content">
		<ul>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<li><span ><?php the_date_xml(); ?></span><a href="<?php the_permalink() ?>" target="_blank"> <?php echo mb_strimwidth(get_the_title(), 0, 56, '......'); ?> </a></li>
		<?php endwhile; ?>
		<?php endif; wp_reset_query();?>
		</ul>
	</div>
	<div class="page_navi"><?php par_pagenavi(6); ?></div>
</div>