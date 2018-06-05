<?php

define( 'ASSETS_URL', get_template_directory_uri() . '/assets/');

add_action( 'wp_enqueue_scripts', 'adding_theme_styles_and_scripts' );

function adding_theme_styles_and_scripts() {
  wp_register_style( 'fontawesome_css','https://use.fontawesome.com/releases/v5.0.12/css/all.css', array(), false );
  wp_register_style( 'font_css', ASSETS_URL . 'fonts/stylesheet.css', array(), false );
  wp_register_style( 'reset_css', ASSETS_URL . 'css/reset.css', array(), false );
  wp_register_style( 'style_css', ASSETS_URL . 'styles.css', array(), false );
  wp_register_style( 'magnific_css', ASSETS_URL . 'css/magnific.css', array(), false);
  // wp_register_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', array(), false);

  wp_register_script( 'app_js', ASSETS_URL . 'js/app.js', array('masonry','jquery'), false, true );
  wp_register_script( 'masonry', ASSETS_URL . 'js/masonry.min.js', array('jquery'), false, true );
  wp_register_script( 'google_api_key', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDx7a6BEVP4QTBY0vancV8Tvv3Tet8L9cM' );
  wp_register_script( 'maps_js', ASSETS_URL . 'js/maps.js', array('google_api_key'), false, true );
  wp_register_script('instafeed_js', ASSETS_URL . 'js/instafeed.min.js', array(), false, true);
  wp_register_script('custom_js', ASSETS_URL . 'js/custom.js', array( 'magnific_js', 'jquery' ), false, true);
  wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), false, false );
  wp_register_script( 'magnific_js', ASSETS_URL . 'js/magnific.min.js', array(), false, true);

  wp_enqueue_style( 'fontawesome_css');
  wp_enqueue_style( 'font_css');
  wp_enqueue_style( 'reset_css');
  wp_enqueue_style( 'style_css');
  wp_enqueue_style( 'magnific_css' );
  // wp_enqueue_style( 'bootstrap_css');

  wp_enqueue_script( 'app_js' );
  wp_enqueue_script( 'masonry' );
  wp_enqueue_script( 'google_api_key' );
  wp_enqueue_script( 'maps_js' );
  wp_enqueue_script( 'instafeed_js' );
  wp_enqueue_script( 'custom_js' );
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'magnific_js' );
}

add_action( 'init', 'disable_admin_bar' );
function disable_admin_bar() {
  show_admin_bar(false);
}

add_action( 'init', 'adding_theme_supports' );
function adding_theme_supports () {
  add_theme_support( 'menu' );
  add_theme_support( 'post-thumbnails' );
}

add_action( 'init', 'registering_navigations');
function registering_navigations() {
  register_nav_menus( array(
    'header-menu' => __('viršutinis meniu'),
    'footer-menu' => __('apatinis meniu')
  ));
}
add_action ( 'init', 'adding_image_sizes');
function adding_image_sizes() {
  add_image_size( 'small_image', 480, 390, array( 'center', 'center' ) );
  add_image_size( 'double_image', 480, 780, array( 'center', 'center') );
  add_image_size( 'background_iamge', 1920, 830, array ( 'center', 'center' ) );
  add_image_size( 'blog_image', 380, 240, array ('center', 'center') );
  add_image_size( 'footer_blog_image', 120, 80, array( 'center', 'center' ) );
  add_image_size( 'insta_images', 88, 88, array( 'center', 'center' ) );
}
// AIzaSyDx7a6BEVP4QTBY0vancV8Tvv3Tet8L9cM
function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyDx7a6BEVP4QTBY0vancV8Tvv3Tet8L9cM';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
