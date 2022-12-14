<article class="post singlepost">
    
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
   
    <h1><?php the_title(); ?></h1>
    <?php truelove_get_shareicons(); ?>
    <?php if(has_post_thumbnail()): ?>
    <img class="singlepost-featured-image"
    src="<?php echo the_post_thumbnail_url(); ?>" alt="featured image">
    <?php endif; ?>

    <div class="singlepost-content">
    <?php  the_content(); ?>
    </div>

</article>

<?php if(comments_open()): ?>
<section class="comments-section">
    <div class="comments-number">
        <span class="iconify" data-icon="prime:comments"></span> <?php echo get_comments_number() ?> Comments
    </div>
    <article class="comments-wrapper">
        <?php comments_template(); ?>
    </article>
</section>
<?php endif; ?>