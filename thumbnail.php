  <?php if ( get_post_meta($post->ID, 'thumbnail', true) ) : ?>
            <?php $image = get_post_meta($post->ID, 'thumbnail', true); ?>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php echo $image; ?>" alt="<?php the_title(); ?>"/></a>
            <?php else: ?>
   
    <!-- 截图 -->

    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
    <?php if (has_post_thumbnail()) { the_post_thumbnail('thumbnail'); }
    else { ?>
    <img class="home-thumb" src="<?php echo catch_first_image() ?>" width="367px" height="240px" alt="<?php the_title(); ?>"/>
    <?php } ?>
    </a>
<?php endif; ?>
