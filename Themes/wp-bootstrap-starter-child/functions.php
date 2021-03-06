<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
* Custom Gutenburg blocks
* UNDER DEVELOPMENT
*/
// require get_theme_file_path() . '/inc/gutenburg.php';

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'wp-bootstrap-starter-bootstrap-css','wp-bootstrap-starter-fontawesome-cdn' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'chld_thm_cfg_parent','wp-bootstrap-starter-style','wp-bootstrap-starter-lux' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

function loadChildScipts(){ wp_enqueue_script('child-js',
  get_stylesheet_directory_uri().'/js/child-script.js', array('jquery', 'wp-bootstrap-starter-themejs'), null, true);

  if(get_theme_mod( 'preset_style_setting' ) === 'zeyada-carrios_gothic') {
        wp_enqueue_style( 'wp-bootstrap-starter-zeyada-carrios-font', 'https://fonts.googleapis.com/css?family=Zeyada:400,400i,700,700i|Carrois+Gothic:300,400,500,600,700' );
    }
}
add_action( 'wp_enqueue_scripts', 'loadChildScipts', 99 );


