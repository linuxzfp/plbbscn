<?php get_header(); ?>
<div id="pl_main">
	<div id="pl_main_left" style="border:none;">
<div id="pl_main_left_hd">
<?php echo do_shortcode("[metaslider id=237]"); ?>
</div>
	</div>


	<div id="pl_main_right">
		<div id="pl_main_right_news">
			<div class="list_header">
				<div class="list_title">今日蓬莱</div>
<div class="link_more"><a href="<?php $cat=get_category_by_slug('todaypl'); $cat_links=get_category_link($cat->term_id); 
    echo $cat_links;     
?>">更多>></a></div>
			</div>
			<div class="list_content">
				<ul>
				<?php $myposts_array = get_posts('numberposts=6&category_name=todaypl');foreach($myposts_array as $post) : ?> 
    			<li><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php echo mb_strimwidth(get_the_title(),0,40,'...'); ?></a></li> 
				<?php endforeach;?>
				</ul>
			</div>
		</div>
		<div id="pl_main_right_gg">
			<div class="list_header">
				<div class="list_title">党务公开栏</div>
<div class="link_more"><a href="<?php $cat=get_category_by_slug('dwgkl'); $cat_links=get_category_link($cat->term_id); 
    echo $cat_links;     
?>">更多>></a></div>
			</div>
			<div class="list_content" style="height:168px;">
				<ul>
				<?php $myposts_array = get_posts('numberposts=5&category_name=dwgkl');
				foreach($myposts_array as $post) : ?> 
    			<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo mb_strimwidth(get_the_title(),0,32,'...'); ?></a></li> 
				<?php endforeach;?>
				</ul>
			</div>			
		</div>
		<div id="clr"></div>
	</div>
	<div id="clr"></div>
		<div class="pl_tlad">
		<img src="<?php bloginfo('template_directory') ?>/image/syss.gif" alt="">
		</div>
</div>


<div id="plcenter" style="margin-bottom:0px;">
	<div id="pl_left_img">
		<div><a href="http://www.12371.cn/" target=_blank><img src="<?php bloginfo('template_directory'); ?>/image/12371cn.jpg" style="height:70px;"/> </a></div>
		<div><a href="http://cpc.people.com.cn/" target=_blank><img src="<?php bloginfo('template_directory'); ?>/image/zggcdxww.jpg" /> </a></div>
		<div><a href="http://www.qlxf.cn/" target=_blank><img src="<?php bloginfo('template_directory'); ?>/image/qlxf1.jpg"  /> </a></div>
		<div><a href="<?php bloginfo('url'); ?>?page_id=145"><img src="<?php bloginfo('template_directory'); ?>/image/jbzx.jpg" /> </a></div>
		<div><a href="http://wlkt.plswdx.cn:8045/"><img src="<?php bloginfo('template_directory'); ?>/image/wangLuoKeTang.jpg"  /></a></div>
	</div>
	<div id="pl_main_right">
		<div class="plcenter_box" style="height:200px;width:330px;">
						<div class="list_header">
				<div class="list_title">干部之窗</div>
				<div class="link_more"><a href="<?php $cat=get_category_by_slug('gbzc'); //获取分类别名为 wordpress 的分类数据  
    $cat_links=get_category_link($cat->term_id); // 通过$cat数组里面的分类id获取分类链接 
    echo $cat_links;     
?>">更多>></a></div>
			</div>
			<div class="list_content">
				<ul>
				<?php $myposts_array = get_posts('numberposts=5&category_name=gbzc');foreach($myposts_array as $post) : ?> 
    			<li><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php echo mb_strimwidth(get_the_title(),0,36,'...'); ?></a></li> 
				<?php endforeach;?>
				</ul>
			</div>
		</div>
		<div class="plcenter_box" style="height:200px;width:330px;float:right;">
						<div class="list_header">
				<div class="list_title">基层党建</div>
				<div class="link_more"><a href="<?php $cat=get_category_by_slug('jcdj'); $cat_links=get_category_link($cat->term_id); 
    echo $cat_links;     
?>">更多>></a></div>
			</div>
			<div class="list_content">
				<ul>
				<?php $myposts_array = get_posts('numberposts=5&category_name=jcdj');foreach($myposts_array as $post) : ?> 
    			<li><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php echo mb_strimwidth(get_the_title(),0,36,'...'); ?></a></li> 
				<?php endforeach;?>
				</ul>
			</div>
		</div>
		<div class="clr"></div>
		<div class="plcenter_box" style="height:200px;width:330px;">
						<div class="list_header">
				<div class="list_title">干部教育</div>
				<div class="link_more"><a href="<?php $cat=get_category_by_slug('gbjy'); $cat_links=get_category_link($cat->term_id); 
    echo $cat_links;     
?>">更多>></a></div>
			</div>
			<div class="list_content">
				<ul>
				<?php $myposts_array = get_posts('numberposts=5&category_name=gbjy');foreach($myposts_array as $post) : ?> 
    			<li><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php echo mb_strimwidth(get_the_title(),0,36,'...'); ?></a></li> 
				<?php endforeach;?>
				</ul>
			</div>
		</div>

		<div class="plcenter_box" style="height:200px;width:330px;float:right;">
						<div class="list_header">
				<div class="list_title">人才工作</div>
				<div class="link_more"><a href="<?php $cat=get_category_by_slug('rcgz'); //获取分类别名为 wordpress 的分类数据  
    $cat_links=get_category_link($cat->term_id); // 通过$cat数组里面的分类id获取分类链接 
    echo $cat_links;     
?>">更多>></a></div>
			</div>
			<div class="list_content">
				<ul>
				<?php $myposts_array = get_posts('numberposts=5&category_name=rcgz');foreach($myposts_array as $post) : ?> 
    			<li><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php echo mb_strimwidth(get_the_title(),0,36,'...'); ?></a></li> 
				<?php endforeach;?>
				</ul>
			</div>
		</div>
	</div>

	<div class="pl_tlad">
		<img src="<?php bloginfo('template_directory') ?>/image/hgb1.gif" alt="">
	</div>
</div>



<div id="plcenter">
	<div id="pl_main_left" style="height:200px;margin-top:5px;margin-bottom:0px;border:none;">
					<div class="plcenter_box" style="border:none;width:290px;">
						<div class="list_header">
				<div class="list_title">专题栏目</div>
				<div class="link_more">
				<a href="<?php $cat=get_category_by_slug('ztlm'); $cat_links=get_category_link($cat->term_id); echo $cat_links;?>">更多>></a>
				</div>
			</div>
			<div class="list_content">
				<ul>
				<?php 
				$cat= single_cat_title('', false); 
				wp_list_cats("orderby=id&show_count=0&hide_empty=0&use_desc_for_title=0&child_of=3");
				?>
				</ul>
			</div>
		</div>
	</div>
	<div id="pl_main_right">
		<div class="plcenter_box" style="height:200px;width:320px;">
						<div class="list_header">
				<div class="list_title">党员教育</div>
				<div class="link_more"><a href="<?php $cat=get_category_by_slug('dyjy'); $cat_links=get_category_link($cat->term_id); 
    echo $cat_links;     
?>">更多>></a></div>
			</div>
			<div class="list_content">
				<ul>
				<?php $myposts_array = get_posts('numberposts=5&category_name=dyjy');foreach($myposts_array as $post) : ?> 
    			<li><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php echo mb_strimwidth(get_the_title(),0,36,'...'); ?></a></li> 
				<?php endforeach;?>
				</ul>
			</div>
		</div>
		<div class="plcenter_box" style="width:320px;height:280px;">
						<div class="list_header">
				<div class="list_title">新农村建设</div>
				<div class="link_more">
				<a href="<?php $cat=get_category_by_slug('xncjs'); $cat_links=get_category_link($cat->term_id); echo $cat_links;?>">更多>></a>
				</div>
			</div>
			<div class="list_content">
				<ul>
				<?php $myposts_array = get_posts('numberposts=5&category_name=xncjs');foreach($myposts_array as $post) : ?> 
    			<li><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php echo mb_strimwidth(get_the_title(),0,36,'...'); ?></a></li> 
				<?php endforeach;?>
				</ul>
			</div>
		</div>


	</div>
</div>
<!-- 滚动图文 -->
<?php include ( TEMPLATEPATH . '/scrollimg.php'); ?>
<!-- 友情链接 -->
<div id="plcenter">
	<div class="plcenter_box" style="width:980px;height:80px;border:1px solid gray;">
			<div class="list_header" style="border:none;">
				<div class="list_title">友情链接</div>
			</div>
			<div class="friendLink">
		<ul>
			<?php wp_list_bookmarks('title_li=&categorize=0&before=<li>&after= </li> ');?>
		</ul>
			</div>
	</div>
	<div class="clr"></div>
</div>
<?php get_footer();?>