<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('fitforge-body'); ?>>
    <?php wp_body_open(); ?>
    <div class="site-shell">
      <div class="announcement-bar">
        <div class="container">
          <p><?php echo esc_html(get_theme_mod('fitforge_announcement_text', __('Free shipping on orders over $75', 'fitforge'))); ?></p>
        </div>
      </div>

      <header class="site-header" id="masthead">
        <div class="container header-inner">
          <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?>">
            <?php if (has_custom_logo()) : ?>
              <?php the_custom_logo(); ?>
            <?php else : ?>
              <span class="brand-mark">F</span>
              <span><?php bloginfo('name'); ?></span>
            <?php endif; ?>
          </a>

          <nav class="site-nav" aria-label="<?php esc_attr_e('Primary navigation', 'fitforge'); ?>">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'primary',
              'container'      => false,
              'menu_class'     => 'menu',
              'fallback_cb'    => false,
            ));
            ?>
          </nav>

          <div class="header-tools">
            <form class="search-form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
              <button type="submit" aria-label="<?php esc_attr_e('Search', 'fitforge'); ?>">
                <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true"><path d="M10.5 3a7.5 7.5 0 015.89 12.8l4.56 4.56 1.41-1.41-4.56-4.56A7.5 7.5 0 1110.5 3zm0 2a5.5 5.5 0 100 11 5.5 5.5 0 000-11z" fill="currentColor"/></svg>
              </button>
              <input type="search" name="s" value="<?php echo get_search_query(); ?>" placeholder="Search products" aria-label="Search products">
            </form>

            <button class="icon-button" type="button" aria-label="Account">
              <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12a4 4 0 100-8 4 4 0 000 8zm0 2c-4.42 0-8 2.69-8 6v1h16v-1c0-3.31-3.58-6-8-6z" fill="currentColor"/></svg>
            </button>

            <button class="icon-button" type="button" aria-label="Wishlist">
              <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5A4.5 4.5 0 016.5 4c1.74 0 3.41.81 4.5 2.09A6.2 6.2 0 0115.5 4 4.5 4.5 0 0120 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="currentColor"/></svg>
            </button>

            <a class="cart-link" href="<?php echo esc_url(class_exists('WooCommerce') ? wc_get_cart_url() : home_url('/cart')); ?>" aria-label="Shopping cart">
              <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 18a2 2 0 110 4 2 2 0 010-4zm10 0a2 2 0 110 4 2 2 0 010-4zM6.2 6h14.2l-1.7 8.2a2 2 0 01-1.98 1.6H9.3a2 2 0 01-1.97-1.57L5.2 4H2V2h4l.6 3z" fill="currentColor"/></svg>
              <span class="cart-count"><?php echo esc_html(fitforge_cart_count()); ?></span>
            </a>

            <button class="mobile-menu-toggle" type="button" aria-expanded="false" aria-controls="site-navigation" aria-label="Toggle menu">
              <svg width="20" height="20" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 7h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" fill="currentColor"/></svg>
            </button>
          </div>
        </div>
      </header>
