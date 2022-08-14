<article class="post singlepost">
        
    <h2><?php the_title(); ?></h2>
    <?php if(has_post_thumbnail()): ?>
    <img class="singlepost-featured-image"
    src="<?php echo the_post_thumbnail_url('thumbnail'); ?>" alt="featured image">
    <?php endif; ?>

    <?php  the_content(); ?>
</article>