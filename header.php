<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/Normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">
	<?php get_template_part(seo); ?>
	<?php wp_head(); ?>
</head>
<body>
<div id="zfp_all">
	<div id="pl_top_nav">
		<span>欢迎光临<?php bloginfo('name'); ?></span>
		<span style="float:right;">
			<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
			<input name="s" id="s" type="text" class="text" />
			<input id="searchsubmit" type="submit" class="submit" value="文章检索" />
			</form>
		</span>
	</div>
	<div id="pl_logo">
		<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
	</div>
	<div id="pl_topmenu">
	<?php wp_nav_menu( array( container => false, menu_id => 'navmenu', menu_class => 'navmenu') ); ?>
	</div>