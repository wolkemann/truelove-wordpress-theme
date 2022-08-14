<?php get_header(); ?>

<?php if(have_posts()): ?>

    <section class="posts-wrapper">
<article class="post post-featured-image archive-wrapper">
        <?php while(have_posts()): the_post(); ?>

        

        <?php get_template_part('template-parts/section', 'archive'); ?>

        <?php endwhile; ?>

</article>
</section>

    <section>

        <?php get_template_part('template-parts/section', 'lastposts'); ?>

    </section>


<?php endif; ?>

    
<?php get_footer(); ?>