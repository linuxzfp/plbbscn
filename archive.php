
<?php get_header();?>
	<div class="pl_main">
		<?php $cat= single_cat_title('', false);
		if (get_cat_ID($cat)== 11) { 
			get_sidebar();
			include (TEMPLATEPATH . '/archive-video.php');
		} 
			elseif (get_cat_ID($cat)== 10 ) {
			 	get_sidebar();
			 	include (TEMPLATEPATH . '/archive-dw.php');
			 }
		else{
			 get_sidebar();
			 include (TEMPLATEPATH . '/archive-normal.php');
			} 
			 ?>

		<div class="clr"></div>
	</div>	
    <?php get_footer();?>