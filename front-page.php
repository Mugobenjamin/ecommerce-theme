<?php
if (!defined('ABSPATH')) {
  exit;
}

$hero_title = get_theme_mod('fitforge_hero_title', __('BUILD YOUR STRONGER.', 'fitforge'));
$hero_text = get_theme_mod('fitforge_hero_text', __('Premium gym equipment, daily essentials, and performance gear designed to help you train harder and recover smarter.', 'fitforge'));
$cta_primary = get_theme_mod('fitforge_primary_cta', __('Shop Equipment', 'fitforge'));
$cta_secondary = get_theme_mod('fitforge_secondary_cta', __('Explore Accessories', 'fitforge'));
$promo_title = get_theme_mod('fitforge_promo_title', __('Build the home gym you actually stay consistent with.', 'fitforge'));

$category_links = array(
  array('title' => 'Dumbbells & Free Weights', 'image' => 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=900&q=80', 'url' => home_url('/shop/?product_cat=dumbbells-free-weights')),
  array('title' => 'Barbells & Weight Plates', 'image' => 'https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?auto=format&fit=crop&w=900&q=80', 'url' => home_url('/shop/?product_cat=barbells-weight-plates')),
  array('title' => 'Resistance Bands', 'image' => 'https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?auto=format&fit=crop&w=900&q=80', 'url' => home_url('/shop/?product_cat=resistance-bands')),
  array('title' => 'Benches & Racks', 'image' => 'https://images.unsplash.com/photo-1517838277536-f5f99be501cd?auto=format&fit=crop&w=900&q=80', 'url' => home_url('/shop/?product_cat=benches-racks')),
  array('title' => 'Gym Flooring & Accessories', 'image' => 'https://images.unsplash.com/photo-1518611012118-696072aa579a?auto=format&fit=crop&w=900&q=80', 'url' => home_url('/shop/?product_cat=gym-flooring-accessories')),
  array('title' => 'Cardio Equipment', 'image' => 'https://images.unsplash.com/photo-1571902943202-507ec2618e8f?auto=format&fit=crop&w=900&q=80', 'url' => home_url('/shop/?product_cat=cardio-equipment')),
  array('title' => 'Workout Accessories', 'image' => 'https://images.unsplash.com/photo-1541534401786-2077eed87a74?auto=format&fit=crop&w=900&q=80', 'url' => home_url('/shop/?product_cat=workout-accessories')),
  array('title' => 'Home Gym Packages', 'image' => 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=900&q=80', 'url' => home_url('/shop/?product_cat=home-gym-packages')),
);

$products = array();
if (class_exists('WooCommerce')) {
  $product_args = array(
    'status' => 'publish',
    'limit' => 4,
    'orderby' => 'date',
    'order' => 'DESC',
  );

  $products = wc_get_products($product_args);
}

$feature_items = array(
  array('title' => 'Quality-Tested Products', 'text' => 'Every item is selected for durability, performance, and daily training use.', 'icon' => '✓'),
  array('title' => 'Secure Checkout', 'text' => 'Protected transactions with trusted payment and order processing.', 'icon' => '🔒'),
  array('title' => 'Reliable Delivery', 'text' => 'Fast shipping for home gyms, accessories, and gear bundles.', 'icon' => '🚚'),
  array('title' => 'Customer Support', 'text' => 'Expert guidance for setup, maintenance, and product fit.', 'icon' => '☎'),
  array('title' => 'Warranty Coverage', 'text' => 'Clear manufacturer protection and product support for core purchases.', 'icon' => '🛡'),
);

$guide_cards = array(
  array('title' => 'Home Gym Setup Guide', 'copy' => 'Choose the right floor, bench, rack, and storage plan for your space and goals.', 'image' => 'https://images.unsplash.com/photo-1526506118085-60ce8714f8c5?auto=format&fit=crop&w=900&q=80', 'meta' => 'Gym Planning'),
  array('title' => 'Equipment Buying Advice', 'copy' => 'Learn what to prioritize based on training style, budget, and recovery needs.', 'image' => 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=900&q=80', 'meta' => 'Buying Guide'),
  array('title' => 'Maintenance Tips', 'copy' => 'Keep plates, cables, bands, and benches in peak condition for long-term performance.', 'image' => 'https://images.unsplash.com/photo-1518611012118-696072aa579a?auto=format&fit=crop&w=900&q=80', 'meta' => 'Care & Safety'),
);
?>

<?php get_header(); ?>

<main class="site-main">
  <section class="hero">
    <div class="container hero-inner">
      <div>
        <span class="eyebrow">Performance first</span>
        <h1><?php echo esc_html($hero_title); ?></h1>
        <p><?php echo esc_html($hero_text); ?></p>
        <div class="hero-actions">
          <a class="primary-btn" href="<?php echo esc_url(home_url('/shop')); ?>"><?php echo esc_html($cta_primary); ?></a>
          <a class="secondary-btn" href="<?php echo esc_url(home_url('/shop')); ?>"><?php echo esc_html($cta_secondary); ?></a>
        </div>
      </div>

      <div class="hero-card" aria-label="Store overview">
        <div class="metric-grid">
          <div class="metric">
            <strong>12k+</strong>
            <span>Products</span>
          </div>
          <div class="metric">
            <strong>4.9/5</strong>
            <span>Average</span>
          </div>
          <div class="metric">
            <strong>24h</strong>
            <span>Dispatch</span>
          </div>
          <div class="metric">
            <strong>2.4k</strong>
            <span>Reviews</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header">
        <div>
          <span class="kicker">Shop by category</span>
          <h2>Build a stronger setup.</h2>
        </div>
      </div>

      <div class="category-grid">
        <?php foreach ($category_links as $category) : ?>
          <article class="category-card">
            <img src="<?php echo esc_url($category['image']); ?>" alt="<?php echo esc_attr($category['title']); ?>" loading="lazy" width="600" height="420">
            <div class="category-body">
              <h3><?php echo esc_html($category['title']); ?></h3>
              <a class="category-link" href="<?php echo esc_url($category['url']); ?>">Shop now</a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header">
        <div>
          <span class="kicker">Featured equipment</span>
          <h2>Top picks for your next session.</h2>
        </div>
        <p class="section-copy">Fresh arrivals and core training essentials selected for strength, comfort, and performance.</p>
      </div>

      <div class="product-tabs" aria-label="Product filters">
        <button class="product-tab is-active" type="button">Best Sellers</button>
        <button class="product-tab" type="button">New Arrivals</button>
        <button class="product-tab" type="button">Special Offers</button>
      </div>

      <div class="feature-grid">
        <?php if (!empty($products)) : ?>
          <?php foreach ($products as $product) : ?>
            <?php
            $product_url = $product->get_permalink();
            $price = $product->get_price_html();
            $rating = $product->get_average_rating();
            $review_count = $product->get_review_count();
            $image_id = $product->get_image_id();
            $image_url = $image_id ? wp_get_attachment_image_url($image_id, 'large') : 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=900&q=80';
            ?>
            <article class="product-card">
              <div class="product-image">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($product->get_name()); ?>" loading="lazy" width="500" height="420">
                <div class="product-badges">
                  <span class="badge sale">Sale</span>
                  <span class="badge new">New</span>
                </div>
              </div>
              <div class="product-body">
                <div class="product-rating">
                  <span>★★★★★</span>
                  <span>(<?php echo esc_html($review_count); ?>)</span>
                </div>
                <h3><a href="<?php echo esc_url($product_url); ?>"><?php echo esc_html($product->get_name()); ?></a></h3>
                <div class="product-pricing">
                  <?php echo $price; ?>
                </div>
                <div class="product-actions">
                  <a class="add-to-cart-btn" href="<?php echo esc_url($product_url); ?>">Shop now</a>
                  <button class="inline-action" type="button" aria-label="Save item">♡</button>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        <?php else : ?>
          <?php for ($i = 0; $i < 4; $i++) : ?>
            <article class="product-card">
              <div class="product-image">
                <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=900&q=80" alt="Featured product" loading="lazy" width="500" height="420">
                <div class="product-badges">
                  <span class="badge sale">Sale</span>
                  <span class="badge new">New</span>
                </div>
              </div>
              <div class="product-body">
                <div class="product-rating"><span>★★★★★</span><span>(42)</span></div>
                <h3><a href="<?php echo esc_url(home_url('/shop')); ?>">Power Rack Combo</a></h3>
                <div class="product-pricing"><span class="price-current">$899</span></div>
                <div class="product-actions">
                  <a class="add-to-cart-btn" href="<?php echo esc_url(home_url('/shop')); ?>">Shop now</a>
                  <button class="inline-action" type="button" aria-label="Save item">♡</button>
                </div>
              </div>
            </article>
          <?php endfor; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="promo-banner">
        <div class="promo-banner-inner">
          <div>
            <span class="kicker" style="color: #c8ee59;">Limited-time offer</span>
            <h3><?php echo esc_html($promo_title); ?></h3>
            <p>Build a premium training space with smart bundles, premium lifting essentials, and durable gear designed for everyday progress.</p>
          </div>
          <div>
            <a class="primary-btn" href="<?php echo esc_url(home_url('/shop')); ?>">View bundles</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header">
        <div>
          <span class="kicker">Why shop with us</span>
          <h2>Built around real training needs.</h2>
        </div>
      </div>

      <div class="trust-grid">
        <?php foreach ($feature_items as $item) : ?>
          <article class="trust-item">
            <div class="trust-icon"><?php echo esc_html($item['icon']); ?></div>
            <h3><?php echo esc_html($item['title']); ?></h3>
            <p><?php echo esc_html($item['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header">
        <div>
          <span class="kicker">Customer reviews</span>
          <h2>Real feedback from serious lifters.</h2>
        </div>
      </div>

      <div class="review-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p>“The quality is excellent and the setup was straightforward. It feels like a premium brand, and the gear is built to last.”</p>
          <div class="review-author">
            <div class="avatar">A</div>
            <div>
              <strong>Alex P.</strong>
              <span>Verified buyer</span>
            </div>
          </div>
        </article>

        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p>“Fast shipping, clean packaging, and a product lineup that matches the quality I was looking for in a home gym setup.”</p>
          <div class="review-author">
            <div class="avatar">M</div>
            <div>
              <strong>Marcus T.</strong>
              <span>Verified buyer</span>
            </div>
          </div>
        </article>

        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p>“Helpful support and product details that made it easy to choose the right accessories and rack configuration.”</p>
          <div class="review-author">
            <div class="avatar">J</div>
            <div>
              <strong>Janelle M.</strong>
              <span>Verified buyer</span>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header">
        <div>
          <span class="kicker">Fitness guides</span>
          <h2>Train smarter with expert advice.</h2>
        </div>
      </div>

      <div class="guide-grid">
        <?php foreach ($guide_cards as $guide) : ?>
          <article class="guide-card">
            <img src="<?php echo esc_url($guide['image']); ?>" alt="<?php echo esc_attr($guide['title']); ?>" loading="lazy" width="700" height="440">
            <div class="guide-body">
              <div class="guide-meta"><?php echo esc_html($guide['meta']); ?></div>
              <h3><?php echo esc_html($guide['title']); ?></h3>
              <p><?php echo esc_html($guide['copy']); ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="newsletter">
        <div class="newsletter-inner">
          <div>
            <h3>Fuel your next workout.</h3>
            <p>Get fitness tips, new gear alerts, and exclusive training offers in your inbox.</p>
          </div>

          <form class="newsletter-form" method="post" action="#">
            <label class="screen-reader-text" for="newsletter-email">Email</label>
            <input id="newsletter-email" type="email" name="email" placeholder="Enter your email" aria-label="Enter your email">
            <button class="primary-btn" type="submit">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>

















































































































