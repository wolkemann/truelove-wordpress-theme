<?php 

function truelove_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
}

add_action('after_setup_theme', 'truelove_theme_support');

require get_template_directory() . '/template-parts/comments-helper.php';


function truelove_sidebar() {
    $locations = array(
        "primary" => "Main Menu",
    );

    register_sidebar(array(
			'name' => 'Sidebar widgets', 'id' => 'sidebar-widgets',
			'before_title' => '<h2 class="sidebar-widget-title">',
			'after_title' => '</h2>',
			'before_sidebar' => '<div class="sidebar-widgets-container">',
			'after_sidebar' => '</div>',
			'before_widget' => '<div class="sidebar-widget">',
			'after_widget' => '</div>'
	    )
    );

    register_sidebar(array(
			'name' => 'Footer widgets', 'id' => 'footer-widgets',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
			'before_sidebar' => '<div class="footer-widgets-container">',
			'after_sidebar' => '</div>',
			'before_widget' => '<div class="footer-widget">',
			'after_widget' => '</div>'
	    )
    );
    register_nav_menus($locations);
}

add_action("init", "truelove_sidebar");


function truelove_register_styles() {

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('truelove-style', get_template_directory_uri(). "/style.css", array(), $version);
    wp_enqueue_style('truelove-header', get_template_directory_uri(). "/assets/css/header.css", array(), $version);
    wp_enqueue_style('truelove-menu', get_template_directory_uri(). "/assets/css/menu.css", array(), $version);
    wp_enqueue_style('truelove-post', get_template_directory_uri(). "/assets/css/post.css", array(), $version);
    wp_enqueue_style('truelove-sidebar', get_template_directory_uri(). "/assets/css/sidebar.css", array(), $version);
    wp_enqueue_style('truelove-footer', get_template_directory_uri(). "/assets/css/footer.css", array(), $version);
    wp_enqueue_style('truelove-archive', get_template_directory_uri(). "/assets/css/archive.css", array(), $version);
    wp_enqueue_style('truelove-singlepost', get_template_directory_uri(). "/assets/css/singlepost.css", array(), $version);
    wp_enqueue_style('truelove-comments', get_template_directory_uri(). "/assets/css/comments.css", array(), $version);
    wp_enqueue_style('truelove-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
}

add_action('wp_enqueue_scripts', 'truelove_register_styles');



function truelove_register_scripts() {
    
    $version = wp_get_theme()->get('Version');
    
    wp_enqueue_script('truelove-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js", array(), "3.6.0", true);
    wp_enqueue_script('truelove-script', get_template_directory_uri(). "/assets/js/script.js", array(), $version, true);
    wp_enqueue_script('truelove-iconify', "https://code.iconify.design/2/2.2.1/iconify.min.js", array(), "2.2.1", true);
  
}

add_action('wp_enqueue_scripts', 'truelove_register_scripts');


function truelove_customize_register($wp_customize){
     
    $wp_customize->add_section('truelove_custom_options', array(
        'title'    => __('Truelove_95 Custom Options', 'truelove'),
        'description' => __('Custom properties for Truelove_95', 'truelove'),
        'priority' => 120,
    ));

    $wp_customize->add_setting('truelove_custom_options[disclaimer_enabled]', array(
        'capability' => 'edit_theme_options',
        'type'       => 'theme_mod',
		'sanitize_callback' => 'esc_attr',
    ));
  
    $wp_customize->add_control('truelove_custom_options_control', array(
        'settings' => 'truelove_custom_options[disclaimer_enabled]',
        'label'    => __('Disclaimer enabled', 'truelove'),
        'description'    => 'davai',
        'section'  => 'truelove_custom_options',
        'type'     => 'checkbox',
    ));
  
}
  
add_action('customize_register', 'truelove_customize_register');

?>