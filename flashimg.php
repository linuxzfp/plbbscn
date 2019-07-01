<!-- 幻灯 把下面的('showposts=5&cat=6')括号里面cat=6的6改成你的幻灯分类代表的分类ID-->

<div id="flashimg">
<?php query_posts('showposts=5&cat=14'); ?>
<div id="fade_focus">
    <div class="loading"><br /><br />Loading...<br /><br /></div>
    <ul>
    <?php while (have_posts()) : the_post(); ?>
      <li>
     
      <a href="<?php the_permalink() ?>" target="_blank"><?php include( TEMPLATEPATH . '/thumbnail.php' ); ?></a>
     
      </li>
    <?php endwhile;?> 
    </ul>
</div>
</div>
<script src="<?php bloginfo('template_url'); ?>/js/js.js" type="text/javascript"></script>
<div class="spacebox"></div>
	<!-- /幻灯 -->