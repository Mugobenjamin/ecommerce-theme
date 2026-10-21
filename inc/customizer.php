<?php
/**
 * Theme customizer settings for FitForge.
 */

function fitforge_customize_register($wp_customize) {
  $wp_customize->add_section('fitforge_homepage', array(
    'title'    => __('FitForge Homepage', 'fitforge'),
    'priority' => 30,
  ));

  $settings = array(
    'fitforge_announcement_text' => array(
      'default'   => __('Free shipping on orders over $75', 'fitforge'),
      'transport' => 'refresh',
    ),
    'fitforge_hero_title' => array(
      'default'   => __('BUILD YOUR STRONGER.', 'fitforge'),
      'transport' => 'refresh',
    ),
    'fitforge_hero_text' => array(
      'default'   => __('Premium gym equipment, daily essentials, and performance gear designed to help you train harder and recover smarter.', 'fitforge'),
      'transport' => 'refresh',
    ),
    'fitforge_primary_cta' => array(
      'default'   => __('Shop Equipment', 'fitforge'),
      'transport' => 'refresh',
    ),
    'fitforge_secondary_cta' => array(
      'default'   => __('Explore Accessories', 'fitforge'),
      'transport' => 'refresh',
    ),
    'fitforge_promo_title' => array(
      'default'   => __('Build the home gym you actually stay consistent with.', 'fitforge'),
      'transport' => 'refresh',
    ),
  );

  foreach ($settings as $key => $config) {
    $wp_customize->add_setting($key, array(
      'default'   => $config['default'],
      'sanitize_callback' => 'sanitize_text_field',
      'transport' => $config['transport'],
    ));

    $wp_customize->add_control($key, array(
      'label'   => ucfirst(str_replace('fitforge_', '', str_replace('_', ' ', $key))),
      'section' => 'fitforge_homepage',
      'type'    => 'text',
    ));
  }
}
add_action('customize_register', 'fitforge_customize_register');
