<?php get_header() ?>
<div class="single_div">
<div id="plcenter" style="border:1px solid red; border-radius:10px;">
	<div class="single_fromwhere">
		<?php include ( TEMPLATEPATH . "/fromwhere.php"); ?>
	</div>
	<div class="single_header">
		<div class="single_title">
			<?php the_title(); ?>
				<?php $fbt = get_post_meta($post->ID, 'secTitle', true); ?>
     			<?php if ($fbt) { ?>
     			<div class="single_secTitle">
        		<?php echo '____'."$fbt"; ?>
    			</div>
    			<?php } ?>
        </div>
		<div class="single_info">
			<span>文章来源：
			<?php $single_from = get_post_meta($post->ID, 'singleFrom', ture); 
			if ($single_from) {
				echo '--'."$single_from"; 
			}
			else{
				echo "--本站--";
			}
			?>
			</span>
			<span>发布者： <?php the_author(); ?></span> 
			<span style="float:right;">发布时间： <?php the_time('Y年m月d日G:i:s');?> </span>
		</div>
	</div>

<div class="single_content">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
	<?php endif; wp_reset_query();?>
</div>
<div class="single_navi">
	<?php previous_post_link('上一篇: %link') ?><br>
	<?php next_post_link('下一篇: %link') ?>
</div>
</div>
</div>
<?php get_footer(); ?>