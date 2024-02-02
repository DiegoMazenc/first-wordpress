<?php
function loading_my_style_and_my_script(){
    wp_enqueue_style('my_main_css', get_template_directory_uri().'/style.css', array(), '1.0');
    wp_enqueue_script('my_main_js', get_template_directory_uri().'/script.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'loading_my_style_and_my_script', 10);

register_nav_menus(
    [
        'primary' => 'Menu Principal',
        'mobile' => 'Menu Mobile',
        'social' => 'Menu Social' 
    ]
);

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );

register_sidebar([
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
]);

register_sidebar([
    'name' => 'Footer',
    'id' => 'footer',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
]);