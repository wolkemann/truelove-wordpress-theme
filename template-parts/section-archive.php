<section class="archive-post">

<?php if(has_post_thumbnail()): ?>
    <div>
    <img class="archive-featured-image"
    src="<?php echo the_post_thumbnail_url('thumbnail'); ?>" alt="featured image">
    </div>
 <?php endif; ?>

    <article>
        <p style="font-size: 0.8em"><?php echo get_the_date(); ?></p>
        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
        <p> <?php the_excerpt(); ?></p>
    </article>
</section>
        
