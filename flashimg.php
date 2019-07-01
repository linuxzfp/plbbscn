<!-- 幻灯 把下面的('showposts=5&cat=6')括号里面cat=6的6改成你的幻灯分类代表的分类ID-->
<?php 
// 添加幻灯片代码
add_action('init', 'ashu_post_type');
function ashu_post_type() {
    /**********幻灯片*****************/
    register_post_type( 'slider_type',
        array(
            'labels' => array(
                'name' => '幻灯片',
                'singular_name' => '幻灯片',
                'add_new' => '添加',
                'add_new_item' => '添加新幻灯片',
                'edit_item' => '编辑幻灯片',
                'new_item' => '新幻灯片'
            ),
        'public' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'supports' => array( 'title','thumbnail'),
        )
    );
}

	// <!-- /幻灯 -->
?>