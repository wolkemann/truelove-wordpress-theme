<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo truelove_get_og_data(); ?>
    <?php wp_head(); ?>
</head>
<body>
<?php get_template_part('template-parts/section', 'menu'); ?>
<span class="iconify open-menu-button" id="open-menu-button" data-icon="gg:menu-boxed"></span>
<header class="blog-header">
    <h1><a href="<?php echo get_site_url() ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
</header>
