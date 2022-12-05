<?php


function wizardsoft_assets()
{
  wp_enqueue_style('maincss', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_style('formscss', get_template_directory_uri() . '/assets/css/forms.css');
  wp_enqueue_style('tabscss', get_template_directory_uri() . '/assets/css/tabs.css');
  wp_enqueue_style('windowcss', get_template_directory_uri() . '/assets/css/window.css');
  wp_enqueue_style('carouselcss', get_template_directory_uri() . '/assets/css/carousel.css');

  // wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/scripts/jquery-3.6.1.min.js', array(), '20151215', true );
  wp_enqueue_script( 'nav-script', get_template_directory_uri() . '/assets/scripts/nav.js', array(), '20151215', true );
  wp_enqueue_script( 'nav-mobile-script', get_template_directory_uri() . '/assets/scripts/nav-mobile.js', array(), '20151215', true );
  wp_enqueue_script( 'tabs', get_template_directory_uri() . '/assets/scripts/tabs.js', array(), '20151215', true );
  wp_enqueue_script( 'window-script', get_template_directory_uri() . '/assets/scripts/window.js', array(), '20151215', true );
  wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/scripts/carousel.js', array(), '20151215', true );
  wp_enqueue_script( 'swiper-slider', get_template_directory_uri() . '/assets/scripts/swiper-slider.js', array(), '20151215', true );



}

add_action('wp_enqueue_scripts', 'wizardsoft_assets');

show_admin_bar(false);

add_theme_support('post-thumbnails');

add_theme_support('post-thumbnails', array('portfolio'));


