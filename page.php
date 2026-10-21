<?php
if (!defined('ABSPATH')) {
  exit;
}
?>

<?php get_header(); ?>

<?php if (is_front_page()) : ?>
  <?php get_template_part('front-page'); ?>
<?php else : ?>
  <main class="site-main">
    <div class="container">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <div class="entry-content"><?php the_content(); ?></div>
          </article>
        <?php endwhile; ?>
      <?php else : ?>
        <p><?php esc_html_e('No content found.', 'fitforge'); ?></p>
      <?php endif; ?>
    </div>
  </main>
<?php endif; ?>

<?php get_footer(); ?>
