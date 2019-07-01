<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js"> 
<head>  
	<meta http-equiv="Content-Type" content="text/html;charset=<?php bloginfo( 'charset' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/Normalize.css">
	<?php include (TEMPLATEPATH . "/title.php"); ?>
	<?php wp_head(); ?>
</head>
<body>
	<div id="pl_all"> <!-- 总页面开始 -->
 		<div id="pl_top_nav">
			<span style="padding:5px 0px 0px 20px;">欢迎光临蓬莱党建网</span>
			<span style="float:right;padding:0px 10px 0px 0px;">
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
				<input name="s" id="s" type="text" class="text" />
				<input id="searchsubmit" type="submit" class="submit" value="文章检索" />
				</form>
			</span>
		</div>
		<div id="plcenter" style="border:none;">
		<div id="pl_top_banner">
			<img src="<?php bloginfo("template_url"); ?>/image/top_banner.jpg" alt="<?php bloginfo('name'); ?>">
		</div>
		</div>
		<div id="pl_top_navmenu">
			<?php wp_nav_menu( array( container => false, menu_id => 'navmenu_ul', menu_class => 'navmenu_ul') ); ?>
		</div>