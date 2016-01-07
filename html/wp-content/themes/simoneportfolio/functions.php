<?php

add_theme_support( 'menus' );

add_theme_support( 'post-thumbnails' );

function register_theme_menus() {

    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' )
        )
    );
}

add_action( 'init', 'register_theme_menus' );

function wps_theme_styles() {

    wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );

    wp_enqueue_style( 'muli', 'https://fonts.googleapis.com/css?family=Muli:400,700' );

    wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700' );

    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

    add_action('wp_enqueue_scripts', 'wps_theme_styles');


//function wps_theme_js() {
//
//    wp_enqueue_script('')
//}
?>