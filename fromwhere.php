<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
  <?php /* If this is a category archive */ if (is_home()) { ?>
		当前位置: <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name');?></a>
  <?php /* If this is a tag archive */ } elseif(is_category()) { ?>
		当前位置: <a href="<?php echo get_settings('home'); ?>">首页</a> > <?php single_cat_title(); ?>
  <?php /* If this is a search result */ } elseif (is_search()) { ?>
		当前位置: <a href="<?php echo get_settings('home'); ?>">首页</a> > <?php echo $s; ?>
  <?php /* If this is a tag archive */ } elseif(is_tag()) { ?>
		当前位置: <a href="<?php echo get_settings('home'); ?>">首页</a> > <?php single_tag_title(); ?>
  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		当前位置: <a href="<?php echo get_settings('home'); ?>">首页</a> ><?php the_time('Y, F jS'); ?>
  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		当前位置: <a href="<?php echo get_settings('home'); ?>">首页</a> ><?php the_time('Y, F'); ?>
  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		当前位置: <a href="<?php echo get_settings('home'); ?>">首页</a> ><?php the_time('Y'); ?>
  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		当前位置: <a href="<?php echo get_settings('home'); ?>">首页</a> > 作者文章列表
  <?php /* If this is a single page */ } elseif (is_single()) { ?>
		当前位置: <a href="<?php echo get_settings('home'); ?>">首页</a> > <?php the_category('>','multiple') ?>
  <?php /* If this is a page */ } elseif (is_page()) { ?>
		当前位置: <a href="<?php echo get_settings('home'); ?>">首页</a> > <?php the_title(); ?>
  <?php /* If this is a 404 error page */ } elseif (is_404()) { ?>
		当前位置: <a href="<?php echo get_settings('home'); ?>">首页</a> > 404 错误页面
  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		当前位置: <a href="<?php echo get_settings('home'); ?>">首页</a> > 存档
  <?php } ?>
<?php wp_reset_query(); ?>