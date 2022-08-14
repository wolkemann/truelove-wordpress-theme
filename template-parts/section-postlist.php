<article class="post post-featured-image">
        <div class="post-category-wrapper">
                <span class="iconify" data-icon="dashicons:category"></span>
                <?php 	
                        $categories = get_the_category();
                        foreach($categories as $cat): ?>
                        <a href="<?php echo get_category_link($cat); ?>">
                        <i class="post-category-label"><?php echo $cat->name; ?></i>
                        </a>
                        <?php endforeach;
                ?>
        </div>
         <p style="font-size: 0.8em"><?php echo get_the_date(); ?></p>
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <?php if(has_post_thumbnail()): ?>
                <div class="post-featured-image-container" 
                        style="background-image: url(<?php echo the_post_thumbnail_url('thumbnail'); ?>)">
                </div>
        <?php endif; ?>

       
        <?php if(!has_post_thumbnail()): ?>
                <?php the_excerpt(); ?>
        <?php endif; ?>   
</article>

