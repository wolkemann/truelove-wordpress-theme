<nav class="menu-window">
    <div>
        <?php get_search_form(); ?>
        <h2 class="menu-title">
            <span class="iconify" data-icon="bi:menu-up"></span> 
            <?php echo wp_get_nav_menu_name("primary") ?>
        </h2>
        <?php 
            wp_nav_menu(
                array(
                    "theme_location" => "primary",
                    "container_class" => 'menu-container'

                )
            );
        ?>
        <div id="close-menu-button" class="close-menu-button">
            <span class="iconify icon-shadow" data-icon="fa:close"></span>
            <p>Close</p>
        </div>
    </div>
</nav>