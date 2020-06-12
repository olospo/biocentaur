<?php /* Template Name: Order - Individual */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="test_navigation">
  <div class="container">
    <ul>
      <li><a href="<?php echo get_site_url(); ?>/customer/">Customer</a></li>
      <li class="active">Test</li>
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
        <p>You are an Individual ordering a <a href="<?php echo get_site_url(); ?>/individuals/future-health-test/">Future health test</a></p>
      </div>
      
      <a href="<?php echo get_site_url(); ?>/basket/?add-to-cart=269" class="declaration">
        <div class="next_button">
        <img src="<?php bloginfo('template_directory'); ?>/img/order-online.svg" />
          <div class="content">
            <h2>Order online</h2>
            <p>Order your test online and we will send you a [saliva collection kit / blood sample kit] in the mail. Send your patient sample back to us and our team of genetic experts will do the rest.</p>
          </div>
        </div>
      </a>
      
      <a href="#" class="declaration">
        <div class="next_button">
          <img src="<?php bloginfo('template_directory'); ?>/img/order-clinician.svg" />
            <div class="content">
            <h2>Order through your clinician</h2>
            <p>If you'd rather go through your personal healthcare provider, that's fine too. Download this letter and take it along to your appointment.</p>
            </div>
        </div>
      </a>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>