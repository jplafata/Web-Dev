<?php

function indica_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . 'css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies );
}

function indica_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'js/bootstrap.min.js', $dependencies, '4.1.3', true );
}

add_action( 'wp_enqueue_scripts', 'indica_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'indica_enqueue_scripts' );

?>
