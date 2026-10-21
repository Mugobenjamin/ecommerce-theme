<?php
if (!defined('ABSPATH')) {
  exit;
}

require_once get_template_directory() . '/inc/customizer.php';

function fitforge_setup() {
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

  register_nav_menus(array(
    'primary' => __('Primary Menu', 'fitforge'),
    'footer'  => __('Footer Menu', 'fitforge'),
  ));
}
add_action('after_setup_theme', 'fitforge_setup');

function fitforge_enqueue_assets() {
  wp_enqueue_style('fitforge-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap', array(), null);
  wp_enqueue_style('fitforge-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
  wp_enqueue_script('fitforge-main', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'fitforge_enqueue_assets');

function fitforge_widgets_init() {
  register_sidebar(array(
    'name'          => __('Sidebar', 'fitforge'),
    'id'            => 'sidebar-1',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));
}
add_action('widgets_init', 'fitforge_widgets_init');

add_filter('woocommerce_enqueue_styles', '__return_empty_array');

function fitforge_cart_count() {
  if (class_exists('WooCommerce')) {
    return WC()->cart ? WC()->cart->get_cart_contents_count() : 0;
  }

  return 0;
}

function fitforge_get_homepage_products($limit = 8, $status = 'publish') {
  if (!class_exists('WooCommerce')) {
    return array();
  }

  $args = array(
    'post_type'      => 'product',
    'posts_per_page' => $limit,
    'post_status'    => $status,
  );

  return new WP_Query($args);
}
