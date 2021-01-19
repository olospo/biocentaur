<?php /* Template Name: Order - Checkout */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="test_navigation">
  <div class="container">
    <ul>
      <li>Customer</li>
      <li>Test</li>
      <li><a href="<?php echo get_site_url(); ?>/basket/">Basket</a></li>
      <li class="active">Checkout</li>
      <li>Confirm</li>
    </ul>
  </div>
</section>

<section class="test_content">
  <div class="container">
    <div class="ten columns offset-by-one">
      
      <div class="test_heading">
        <a href="<?php echo get_site_url(); ?>" class="back">Back to Biocentaur</a>
        <h1><?php the_title(); ?></h1>
      </div>
      <?php echo do_shortcode('[woocommerce_checkout]'); ?>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>