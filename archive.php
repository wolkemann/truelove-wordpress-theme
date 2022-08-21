<?php get_header(); ?>

<?php if(have_posts()): ?>

    <section class="posts-wrapper archive-wrapper">
        <h1 class="archive-title"><?php the_category( ' ' ); ?></h1>
        <article class="post archive-container">
            <?php while(have_posts()): the_post(); ?>

                

            <?php get_template_part('template-parts/section', 'archive'); ?>

            <?php endwhile; ?>

        </article>
</section>



    <?php get_template_part('template-parts/section', 'sidebar'); ?>


<?php endif; ?>

    
<?php get_footer(); ?>