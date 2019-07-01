<?php 
//限制标题长度
function ODD_title($char) {
         $title = get_the_title($post->ID);
         $title = mb_strimwidth($title, 0, $char, '...');
         echo $title;
}
//默认用户注册后不再显示上面的工具栏
add_action("user_register", "set_user_admin_bar_false_by_default", 10, 1);
function set_user_admin_bar_false_by_default($user_id) {
    update_user_meta( $user_id, 'show_admin_bar_front', 'false' );
    update_user_meta( $user_id, 'show_admin_bar_admin', 'false' );
}
function get_category_root_id($cat)
{
    $this_category = get_category($cat); // 取得当前分类
    while($this_category->category_parent) // 若当前分类有上级分类时，循环
    {
        $this_category = get_category($this_category->category_parent); // 将当前分类设为上级分类（往上爬）
    }
    return $this_category->term_id; // 返回根分类的id号
}
/*
Plugin Name: DW Replace Open Sans
Plugin URI: http://devework.com/replace-open-sans.html
Description: 将WordPress 后台中的open-sans字体加载源从Google Fonts替换为360的CDN加载源。
Author: Jeff
Author URI: http://devework.com/
Version: 1.0
Text Domain: dw-replace-open-sans
*/
function devework_replace_open_sans() {
  wp_deregister_style('open-sans');
  wp_register_style( 'open-sans', '//fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,300,400,600' );
  wp_enqueue_style( 'open-sans');
}
add_action( 'wp_enqueue_scripts', 'devework_replace_open_sans' );
add_action('admin_enqueue_scripts', 'devework_replace_open_sans');
//支持外链缩略图
    if ( function_exists('add_theme_support') )
    add_theme_support('post-thumbnails');
    function catch_first_image() {
      global $post, $posts;
      $first_img = '';
      ob_start();
      ob_end_clean();
      $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
      $first_img = $matches [1] [0];

      if(empty($first_img)){ //Defines a default image
                    $random = mt_rand(1, 3);
                    echo get_bloginfo ( 'stylesheet_directory' );
                    echo '/image/random/'.$random.'.jpg';
      }
      return $first_img;
}
add_filter( 'pre_option_link_manager_enabled', '__return_true' ); 
// This theme uses wp_nav_menu() in one location.
register_nav_menus( array() );
// 去掉 pw_nav_menu() 里面的css属性
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
	return is_array($var) ? array('') : '';
	}
// catagory文章列表分页导航
function par_pagenavi($range = 9){
	global $paged, $wp_query;
	if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
	if($max_page > 1){if(!$paged){$paged = 1;}
	if($paged != 1){echo " 返回首页 ";}
	previous_posts_link(' 上一页 ');
    if($max_page > $range){
		if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "$i";}}
    elseif($paged >= ($max_page - ceil(($range/2)))){
		for($i = $max_page - $range; $i <= $max_page; $i++){echo "$i";}}
	elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
		for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "$i";}}}
    else{for($i = 1; $i <= $max_page; $i++){echo "$i";}}
	next_posts_link(' 下一页 ');
    if($paged != $max_page){echo " 最后一页 ";}}
}
// 使用https加载gravatar头像
function get_ssl_avatar($avatar) {
   $avatar = preg_replace('/.*\/avatar\/(.*)\?s=([\d]+)&.*/','<img src="https://secure.gravatar.com/avatar/$1?s=$2" class="avatar avatar-$2" height="$2" width="$2">',$avatar);
   return $avatar;
}
add_filter('get_avatar', 'get_ssl_avatar')
?>