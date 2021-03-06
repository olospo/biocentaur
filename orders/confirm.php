<?php /* Template Name: Order - Confirm */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="test_navigation">
  <div class="container">
    <ul>
      <li>Basket</li>
      <li>Checkout</li>
      <li class="active">Confirm</li>
    </ul>
  </div>
</section>

<section class="test_content">
  <div class="container">
    <div class="ten columns offset-by-one">
      
      <div class="test_heading">
        <a href="<?php echo get_site_url(); ?>" class="back">Back to Biocentaur</a>
        <h1>Order confirmed</h1>
        <p>Your order has been confirmed.</p>
      </div>
      
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>