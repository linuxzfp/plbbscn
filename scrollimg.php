<div id="plcenter">
	<div class="plcenter_box" id="pic_list805" style="width:98%;height:220px;border:1px solid gray;">
			<div class="list_header" style="border:none;">
				<div class="list_title">视频点播</div>
<div class="link_more"><a href="<?php $cat=get_category_by_slug('spdb'); $cat_links=get_category_link($cat->term_id); 
    echo $cat_links;     
?>">更多>></a></div>
			</div>
		<ul class="clr" id="prolist805" style="padding:5px 5px;margin:3px 0px;">
            
         <div id="demo"> 
<div id="indemo"> 
<div id="demo1"> 

<?php if (have_posts()) : ?>
<?php query_posts('category_name=spdb' . $mcatID. '&caller_get_posts=1&showposts=8'); ?>
<?php while (have_posts()) : the_post(); ?>
<div class="thumb"><?php include( TEMPLATEPATH . '/thumbnail.php' ); ?><br><a href="<?php the_permalink() ?>" target="_blank"> <?php echo mb_strimwidth(get_the_title(), 0, 16, ''); ?></a></div>
<?php endwhile;?>
<?php endif; wp_reset_query(); ?>



</div> 
<div id="demo2"></div> 
</div> 
</div> 
<script> 
var speed=10; //数字越大速度越慢 
var tab=document.getElementById("demo"); 
var tab1=document.getElementById("demo1"); 
var tab2=document.getElementById("demo2"); 
tab2.innerHTML=tab1.innerHTML; 
function Marquee(){ 
if(tab2.offsetWidth-tab.scrollLeft<=0) 
tab.scrollLeft-=tab1.offsetWidth 
else{ 
tab.scrollLeft++; 
} 
} 
var MyMar=setInterval(Marquee,speed); 
tab.onmouseover=function() {clearInterval(MyMar)}; 
tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)}; 
</script>     
</ul>
</div>
</div>