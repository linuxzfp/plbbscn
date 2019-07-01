<?php get_header();?>
<div class="category_div">
 <?php 
if (in_category(array("todaypl","plgk","tszs","dwgkl"))) {
get_template_part("category-nosidebar");
}
else{
	if (in_category(array("spdb","spdbjzxxpd","djztl","rwztl","syjsl"))) {
	get_sidebar();
	get_template_part("category-video");
		}
	else{
		get_sidebar();
		get_template_part("category-slug");
		}
	}
?>
</div>	
    <?php get_footer();?>