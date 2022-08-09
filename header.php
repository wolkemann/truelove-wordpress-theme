<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<?php get_template_part('template-parts/section', 'menu'); ?>
<header class="blog-header">
    <h1><a href="<?php echo get_site_url() ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
</header>

<?php  /*
    wp_nav_menu(
        array(
            "menu" => "primary",
            "container" => "",
            "theme_location" => "primary",
            "items_wrap" => "<ul>%3$s</ul>"
        )
    );
*/
?>
