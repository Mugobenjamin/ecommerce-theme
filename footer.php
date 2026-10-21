<?php
/**
 * The template for displaying the footer.
 */
?>

      <footer class="site-footer">
        <div class="container">
          <div class="footer-grid">
            <div class="footer-brand footer-col">
              <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
                <span class="brand-mark">F</span>
                <span><?php bloginfo('name'); ?></span>
              </a>
              <p><?php bloginfo('description'); ?></p>
              <div class="payment-list" aria-label="Accepted payment methods">
                <span class="payment-pill">Visa</span>
                <span class="payment-pill">Mastercard</span>
                <span class="payment-pill">PayPal</span>
                <span class="payment-pill">Apple Pay</span>
              </div>
            </div>

            <div class="footer-col">
              <h4>Shop</h4>
              <?php
              wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'footer-menu',
                'fallback_cb'    => false,
              ));
              ?>
            </div>

            <div class="footer-col">
              <h4>Customer service</h4>
              <ul>
                <li><a href="<?php echo esc_url(home_url('/shipping-and-returns')); ?>">Shipping & Returns</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a></li>
                <li><a href="<?php echo esc_url(home_url('/terms')); ?>">Terms</a></li>
              </ul>
            </div>

            <div class="footer-col">
              <h4>Contact</h4>
              <ul>
                <li>hello@fitforge.store</li>
                <li>+1 (800) 555-0147</li>
                <li>24/7 Fitness Support</li>
                <li>Mon–Sat | 8am–7pm</li>
              </ul>
            </div>
          </div>

          <div class="footer-bottom">
            <div class="footer-meta">© <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?>. All rights reserved.</div>
            <div class="footer-meta">Follow us: Instagram • Facebook • YouTube</div>
          </div>
        </div>
      </footer>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>
