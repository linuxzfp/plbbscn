<?php get_header(); ?>
<div id="pl_center">
	<div id="contenter">
		<?php
           $sticky = get_option('sticky_posts');
           rsort( $sticky );
           $sticky = array_slice( $sticky, 0, 5);
           query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1,'showposts' => 4) );
		?>
	           <?php if (have_posts()) : ?>
	           <?php while (have_posts()) : the_post(); ?>
		      		<div class="box">
					<div class="box_header" style="background:#F0E68C;">
					<a href="<?php echo get_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><?php ODD_title(40); ?></a>
					<span>荐</span>
					</div>
					<div class="box_pic">
						<img src="<?php bloginfo('template_url') ?>/images/video.png" alt="">
					</div>
					<div class="box_list">
						<?php the_excerpt(); ?>
					</div>
					</div>
               <?php endwhile; ?>
               <?php else : ?><p class="center">没有数据。</p>
               <?php endif; ?>
	</div>
	<div id="contenter">
 
		<?php   
		$myposts = get_posts('numberposts=15&offset=1');  
		foreach($myposts as $post) :  
				setup_postdata($post); 
			?>     
		   <div class="box" style="width:100%;">
		   		<div class="box_header">
		   			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>  
		   		</div>
		   		<div class="box_list" style="width:100%;">
		   			<?php the_excerpt($post); ?>
		   		</div>
		   		<div class="box_bottom">
		   			<p>发表时间： <?php the_time('Y年n月j日'); ?></p>
		   			<a href="<?php the_permalink(); ?>"><span>全文阅读</span></a>
		   		</div>
		   </div>
		 <?php endforeach; ?>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>