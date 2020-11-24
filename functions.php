<?php
add_action('wp_enqueue_scripts', 'acecv_scripts');

remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

function my_deregister_styles_and_scripts() {
    wp_dequeue_style('wp-block-library');
}

add_action( 'wp_print_styles', 'my_deregister_styles_and_scripts', 100 );


add_action('init', 'remove_admin_bar');
function remove_admin_bar() {
	show_admin_bar(false);
}


function acecv_scripts() {
    wp_enqueue_style( 'acecv-style', get_stylesheet_uri() );
    wp_enqueue_style( 'acecv-normalize', get_template_directory_uri() . '/assets/css/normalize.css' );

    wp_enqueue_script( 'acecv-scripts', get_template_directory_uri() . '/assets/js/script.js', array(), null, true );
};

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

?>