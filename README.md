# FitForge Gym & Fitness Store Theme

FitForge is a premium WordPress theme built for athletic, strength-focused retail brands selling gym equipment, accessories, home fitness products, and apparel.

## Features

- Premium dark-and-sport aesthetic with electric accent colors
- Responsive header with search, cart, menu, and mobile navigation
- Conversion-focused homepage with category cards, featured products, trust benefits, reviews, guides, and newsletter CTA
- WooCommerce compatible shop, archive, product, cart, and checkout styling
- Customizer settings for announcement bar and hero content
- WordPress coding standards and translation-friendly output
- Mobile-first layout and accessible interactions

## Theme Structure

- `style.css` – theme metadata and primary styling
- `functions.php` – setup, enqueue, WooCommerce hooks, and customizer integration
- `inc/customizer.php` – editable theme settings for promo and hero content
- `header.php` / `footer.php` – site shell and global layout
- `front-page.php` – polished storefront homepage
- `archive-product.php` / `single-product.php` – WooCommerce catalog and product templates
- `assets/js/theme.js` – responsive menu behavior
- `theme.json` – editor/theme configuration

## Installation

1. Download or clone this repository.
2. Copy the theme folder into your WordPress installation under `wp-content/themes/`.
3. Activate the theme from Appearance → Themes.
4. Install and activate WooCommerce.
5. Configure your shop pages in WooCommerce settings.
6. Customize the announcement bar and hero content from Appearance → Customize.

## Recommended Plugins

- WooCommerce
- WooCommerce Product Image Zoom (optional)
- WooCommerce Blocks (optional)
- Yoast SEO or Rank Math (optional)
- Mailchimp for WordPress or similar newsletter integration (optional)

## Development Notes

This theme is built as a classic WordPress theme with WooCommerce compatibility. It does not replace WooCommerce checkout or payment processing. It uses the default secure WooCommerce cart and checkout flows.

## Testing Checklist

- Activate theme on a clean WordPress install with WooCommerce
- Confirm navigation and mobile menu behavior
- Confirm shop/product pages render correctly
- Validate product archives, filters, and search
- Check cart and checkout from the WooCommerce defaults
- Verify accessibility focus states and contrast

## Limitations

- This repo contains the theme code and demo-friendly storefront markup; real product images, inventory, and checkout settings must be configured in the live WordPress environment.
- Some blocks and page sections are designed as starter content and should be adapted to your store catalog.
