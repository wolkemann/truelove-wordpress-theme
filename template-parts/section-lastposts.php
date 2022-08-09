<section class="sidebar-wrapper">
    <div class="lastposts-per-category-wrapper">
        <?php 
        $categories = get_categories( array(
            'orderby' => 'name',
            'parent'  => 0
        ) );
        
        foreach ( $categories as $category ):

            $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => esc_html( $category->name ),
            'posts_per_page' => 5,
            );

            $arr_posts = new WP_Query( $args );

            if($arr_posts->have_posts()): ?>

                <div>
                    <p class="lastsposts-per-category-category-name"><?php echo esc_html( $category->name ) ?></p>
                    <ul>
                        <?php while($arr_posts->have_posts()): $arr_posts->the_post() ?>
                        
                            <a href="<?php the_permalink(); ?>"><li><?php the_title(); ?></li></a>

                        <?php endwhile; ?>
                    </ul>
                 </div>

            <?php endif; ?>
        <?php endforeach; ?>
    </div>

</section>