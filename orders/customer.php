<?php /* Template Name: Order - Customer */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="test_navigation">
  <div class="container">
    <ul>
      <li class="active">Customer</li>
      <li>Test</li>
      <li>Basket</li>
      <li>Checkout</li>
      <li>Confirm</li>
    </ul>
  </div>
</section>

<section class="test_content">
  <div class="container">
    <div class="ten columns offset-by-one">
      
      <div class="test_heading">
        <a href="<?php echo get_site_url(); ?>" class="back">Back to Biocentaur</a>
        <h1>Order your test</h1>
      </div>
      
      <a href="<?php echo get_site_url(); ?>/customer/individual-test/" class="declaration">
        <div class="next_button">
        I am an individual
        </div>
      </a>
      
      <a href="<?php echo get_site_url(); ?>/customer/clinician-test/" class="declaration">
        <div class="next_button">
        I am a clinician
        </div>
      </a>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
