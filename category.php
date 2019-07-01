<?php get_header(); ?>
<div class="plcenter" style="border:1px dotted red;border-radius:10px;">
    <div id="contenter" style="width:60%;">
    <div class="box_header">
    <?php include ( TEMPLATEPATH . "/fromwhere.php"); ?>
    </div>
    <div class="box_header">
	<div class="box_title">文章列表</div>
    </div>
    <div id="contenter">
<?php
// 全局声明$cat，再用$cats获得当前分类父子关系
    global $cat;
    $cats = get_categories(array( //该函数可以返回与查询参数相匹配的类别对象数组
        'child_of' => $cat, //(整数)仅显示标注了编号的分类的子类。该参数无默认值。使用该参数时应将hide_empty参数设为false
        'parent' => $cat, //(整数)只显示某个父级分类以及下面的子分类(注：子分类只显示一个层级)
        'hide_empty' => 0,
        'orderby' => 'ID'
    ));
    if(empty($cats)){ /*如果$cats为空，就说明当前分类没有子分类，如果当前分类下有文章就列出*/
?>

    <ul>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <li><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">slug_up<?php echo mb_strimwidth(get_the_title(),0,50,'...'); ?></a></li>
    
    <?php endwhile; ?>

    <!-- ，如果没有就显示“文章稍后更新”. -->
    <?php else: ?> 
        <div class="post"><p>文章稍后更新</p></div>
    <?php endif; ?>
    </ul>
    <!-- <div class="page_navi"><?php par_pagenavi(6); ?></div> -->

<?php
// 如果$cats不为空，说明有子分类 
}else{
    foreach($cats as $the_cat){  //先遍历出所有子分类
        $posts = get_posts(array(
            'category' => $the_cat->cat_ID,
            'numberposts' => 5
        ));
        if(!empty($posts)){ //如果分类下有文章列表，列出/* 先用item cat_item 的h2标签列出分类名字及链接,再用ul+foreach列出文章列表
            echo '
            <div class="box" style="min-height:30px;height:100%;padding-bottom:20px;width:100%;">
                <div style="padding:5px 10px 0px 20px;">
                 <p><span> <a style="color:#000;" href="' . get_category_link($the_cat).'">更多>></a> </span>
                 <a style="color:#000;font-size:16px;font-weight:600;" title="'.$the_cat->name.'" href="'.get_category_link($the_cat).'">'.$the_cat->name.'</a>
                 </p>
                 </div>  
                <ul>';
                    foreach($posts as $post){
                        echo '<li><span class="alignright">'.mysql2date('Y-m-d', $post->post_date).'</span>
                        <a title="'.$post->post_title.'" href="'.get_permalink($post->ID).'">'.mb_strimwidth(($post->post_title),0,50,'...').'</a></li>';
                    echo '<div class="box_list">';
                         the_excerpt();
                    echo '</div>';
                    }
                echo '</ul>

            </div>';
        }
    }
}
?>
	</div>
<!-- 	<div class="page_navi"><?php par_pagenavi(6); ?></div> -->
</div>
</div>
<?php get_footer(); ?>