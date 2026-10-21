<?php
if (!defined('ABSPATH')) {
  exit;
}
?>

<?php get_header(); ?>
<main class="site-main">
  <div class="container">
    <?php if (function_exists('woocommerce_content')) : ?>
      <?php woocommerce_content(); ?>
    <?php else : ?>
      <p><?php esc_html_e('Product details are unavailable until WooCommerce is activated.', 'fitforge'); ?></p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
