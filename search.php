<?php get_header(); ?>
<div id="plcenter" style="padding:30px;border-radius:10px;">
	<div class="single_fromwhere">
		<p>当前位置：文章检索</p>
	</div>
	<h3>检索结果：</h3> <br />
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div id="search_results">
				<a href="<?php  echo get_permalink($post->ID); ?>"><?php the_title(); ?></a>
			</div>
		<?php endwhile; ?>
		<?php else : ?>

		<article>
		<header class="list_header">
		<h1 class="list_title"><?php _e( '没有找到', 'leizi' ); ?></h1>
		</header>

		<div class="list_content">
		<p><?php _e( '抱歉没有找到该文章，请重新检索：', 'leizi' ); ?></p>
		<?php get_search_form(); ?>
		</div>
		</article>
		<?php endif; ?>
</div>
<?php get_footer(); ?>