<article class="post singlepost">
    <p>
        <?php echo get_the_date(); ?>
        <span class="iconify" data-icon="dashicons:category"></span>
        <?php 	
            $categories = get_the_category();
            foreach($categories as $cat): ?>
            <a href="<?php echo get_category_link($cat); ?>">
            <i class="post-category-label"><?php echo $cat->name; ?></i>
            </a>
            <?php endforeach;
        ?>
    </p>
    <h2><?php the_title(); ?></h2>
    <?php if(has_post_thumbnail()): ?>
    <img class="singlepost-featured-image"
    src="<?php echo the_post_thumbnail_url('thumbnail'); ?>" alt="featured image">
    <?php endif; ?>

    <?php  the_content(); ?>
</article>
