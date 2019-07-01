<div class="fwmain_nleft edit_putHere" id="edit_putHere_area1" savetitle="area1">
			<div class="label clear fwtop_nav6" id="700" rel="700" titles="竖形分类菜单">
	<div class="label_head">
		<div class="label_title">相关文章</div>
	</div>
	<div class="label_content">
    <!--
    <?php
$args=array(
  'orderby' => 'name',
   'child_of' => '29',
  'order' => 'ASC'
  );
$categories=get_categories($args);
  foreach($categories as $category) { 
    echo '<h1><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></h1>';
    } 
?>


	
	-->

	<div class="news_detail_morenews">
	<div class="news_detail_morenewssub1">相关文章</div>
	<div class="news_detail_morenewssub2">
		<ul>
<?php
$cats = wp_get_post_categories($post->ID);
if ($cats) {
$args = array(
'category__in' => array( $cats[0] ),
'post__not_in' => array( $post->ID ),
'showposts' => 6,
'caller_get_posts' => 1
);
query_posts($args);
if (have_posts()) : 
while (have_posts()) : the_post(); update_post_caches($posts); ?>
<li>. <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; else : ?>
<li>* 暂无相关文章</li>
<?php endif; wp_reset_query(); } ?>
</ul>

	</div>
</div>



	</div>  
	<div class="label_foot"></div>
</div>

<!--
<div class="label clear fwtop_nav6" id="701" rel="701" titles="竖形分类菜单">
	<div class="label_head">
		<div class="label_title">旅游观光</div>
	</div>
	<div class="label_content">
	    <?php
$args=array(
  'orderby' => 'name',
   'child_of' => '9',
  'order' => 'ASC'
  );
$categories=get_categories($args);
  foreach($categories as $category) { 
    echo '<h1><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></h1>';
    } 
?>

	</div>
	<div class="label_foot"></div>
</div>
<div class="label clear fwtop_nav6" id="702" rel="702" titles="竖形分类菜单">
	<div class="label_head">
		<div class="label_title">政务公开</div>
	</div>
	<div class="label_content">
		    <?php
$args=array(
  'orderby' => 'name',
   'child_of' => '7',
  'order' => 'ASC'
  );
$categories=get_categories($args);
  foreach($categories as $category) { 
    echo '<h1><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></h1>';
    } 
?>
	</div>
	<div class="label_foot"></div>
</div>

<script type="text/javascript">
var ary = location.href.split("&");
jQuery(".slide821").slide( { mainCell:"#bd821 ul", effect:"topLoop",autoPlay:"true",trigger:"mouseover",easing:"swing",delayTime:"1000",mouseOverStop:"true",pnLoop:"true"});
</script>
	-->
		</div>