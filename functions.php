<?php
if (!defined('ABSPATH')) {
  exit;
}

function fitforge_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', array(
    'height'      => 56,
    'width'       => 220,
    'flex-height' => true,
    'flex-width'  => true,
  ));
  add_theme_support('woocommerce');
  add_theme_support('wp-block-styles');
  add_theme_support('editor-styles');
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
  add_theme_support('responsive-embeds');

  register_nav_menus(array(
    'primary' => __('Primary Menu', 'fitforge'),
    'footer'  => __('Footer Menu', 'fitforge'),
  ));
}
add_action('after_setup_theme', 'fitforge_theme_setup');

function fitforge_theme_assets() {
  wp_enqueue_style('fitforge-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap', array(), null);
  wp_enqueue_style('fitforge-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
  wp_enqueue_script('fitforge-main', get_template_directory_uri() . '/assets/js/theme.js', array(), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'fitforge_theme_assets');

function fitforge_theme_widgets_init() {
  register_sidebar(array(
    'name'          => __('Sidebar', 'fitforge'),
    'id'            => 'sidebar-1',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));
}
add_action('widgets_init', 'fitforge_theme_widgets_init');

add_filter('woocommerce_enqueue_styles', '__return_empty_array');

function fitforge_theme_cart_count() {
  if (class_exists('WooCommerce')) {
    return WC()->cart ? WC()->cart->get_cart_contents_count() : 0;
  }

  return 0;
}

function fitforge_theme_get_homepage_products($limit = 4) {
  if (!class_exists('WooCommerce')) {
    return array();
  }

  $args = array(
    'status' => 'publish',
    'limit' => $limit,
    'orderby' => 'date',
    'order' => 'DESC',
  );

  return wc_get_products($args);
}
