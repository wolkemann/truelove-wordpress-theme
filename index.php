<?php get_header(); ?>

<?php if(have_posts()): ?>

    <section class="posts-wrapper">

        <?php while(have_posts()): the_post(); ?>

        <?php get_template_part('template-parts/section', 'postlist'); ?>

        <?php endwhile; ?>

    </section>


    <?php get_template_part('template-parts/section', 'sidebar'); ?>




<?php endif; ?>

    
<?php get_footer(); ?>
