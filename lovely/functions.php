<?php 
//style
function theme_resource(){
    
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_resource');
//navigatie
    register_nav_menus(array(
    'primary' => __("Primary Menu"),
        'footer' => __("Footer Menu"),
    ));