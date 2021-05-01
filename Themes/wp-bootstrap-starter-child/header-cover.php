<?php /* * * The header for our theme * * This is the template that
 displays all of the <head> section and everything up until <div
 id="content"> * * @link
 https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * * @package WP_Bootstrap_Starter */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php
    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) { wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }
  ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content',
	  'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
          <div class="container">

                        <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>

                          <a class="navbar-brand js-scroll-trigger site-title" href="<?php echo
                          esc_url( home_url( '/' )); ?>"><?php
                          esc_url(bloginfo('name')); ?></a>
                          <?php /*
                                <a class="navbar-brand js-scroll-trigger" href="<?php echo esc_url( home_url( '/' )); ?>">
                                    <img src="<?php echo esc_url(get_theme_mod('wp_bootstrap_starter_logo' )); ?>" alt="<?php
                                    echo esc_attr( get_bloginfo( 'name' ) ); ?>"> </a>  */?>
                        <?php else : ?>
                                <a class="navbar-brand js-scroll-trigger site-title" href="<?php echo
                                esc_url( home_url( '/' )); ?>"><?php
                                esc_url(bloginfo('name')); ?></a>
                        <?php endif; ?>

            <!-- <div id="navmenu-btn"
              class="navbar-toggler navbar-toggler-right"
              type="button"
              data-toggle="collapse"
              data-target="#navbarResponsive"
              aria-controls="navbarResponsive"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div> -->
            <button id="navmenu-btn"
              class="navbar-toggler navbar-toggler-right"
              type="button"
              data-toggle="collapse"
              data-target="#navbarResponsive"
              aria-controls="navbarResponsive"
              aria-expanded="false"
              aria-label="Toggle navigation">
                Menu
            </button>

            <!-- <button class="navbar-toggler navbar-toggler-right"
              type="button"
              data-toggle="collapse"
              data-target="#navbarResponsive"
              aria-controls="navbarResponsive"
              aria-expanded="false"
              aria-label="Toggle navigation"><i class="fas fa-bars ml-2"></i>
            </button> -->

            <?php
            wp_nav_menu(array(
              'theme_location' => 'primary',
              'container' => 'div',
              'container_id' => 'navbarResponsive',
              'container_class' => 'collapse navbar-collapse',
              'menu_id' => false,
              'menu_class' => 'navbar-nav text-uppercase ml-auto',
              'depth' => 3,
              'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
              'walker' => new wp_bootstrap_navwalker()
            )); ?>

          </div>
        </nav>
        <?php //end navigation ?>

        <!-- masthead -->
        <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
          <header class="masthead <?php echo wp_bootstrap_starter_bg_class(); ?>"
            style="background-image: url('<?php header_image();?>');
            background-size:cover !important; min-height:100vh;" role="banner">
        <?php else: ?>
          <header role="banner">
        <?php endif; ?>

            <div class="container">
              <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
                <div id="page-sub-header">
                      <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                              <a class="logo" href="<?php echo esc_url( home_url( '/' )); ?>">
                                  <img src="<?php echo esc_url(get_theme_mod('wp_bootstrap_starter_logo' )); ?>" alt="<?php
                                  echo esc_attr( get_bloginfo( 'name' ) ); ?>"> </a>
                      <?php endif; ?>
                        <br>
                       <a href="#content" style="padding-top:10vh;" class="page-scroller"><i class="fa fa-fw
                      fa-angle-down"></i></a>
                      <br>
                      <img src="http://jlbeautyinc.com/wp-content/uploads/2021/03/Artboard-12.png" alt="collage">
                      <!-- <br>
                       <a href="#content" style="padding-top:10vh;" class="page-scroller"><i class="fa fa-fw
                      fa-angle-down"></i></a> -->
                </div>
              <?php endif; ?>
            </div>
          </header>
          <?php //end masthead ?>

	<div id="content" class="site-content">

    <?php endif; ?>
