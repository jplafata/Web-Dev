<?php
/**
 * Custom Gutenberg functions
 */

function heyjp_gutenburg_blocks(){
  //wp_register_script('image-hover-block-js', get_stylesheet_directory_uri().'/js/image-hover-block.js', array('wp-blocks'));
  wp_enqueue_script('image-hover-block-js', get_stylesheet_directory_uri().'/js/image-hover-block.js', array('wp-blocks'));

  register_block_type('heyjp/custom-image-hover', array(
    'editor-script' => 'image-hover-block-js'
  ));

}

add_action('init','heyjp_gutenburg_blocks');
