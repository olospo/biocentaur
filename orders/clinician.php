<?php /* Template Name: Order - Clinician */
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
        <p>You are a Clinician. Please select a test to order:</p>
      </div>
      
      <a href="<?php echo get_site_url(); ?>/basket/?add-to-cart=133" class="declaration">
        <div class="next_button">
        <img src="<?php bloginfo('template_directory'); ?>/img/predictive.svg" />
          <div class="content">
            <h2>PrediSpot test</h2>
            <p>Determine your patient’s risk of developing non-cancerous diseases.</p>
          </div>
        </div>
      </a>
      
      <a href="<?php echo get_site_url(); ?>/basket/?add-to-cart=137" class="declaration">
        <div class="next_button">
        <img src="<?php bloginfo('template_directory'); ?>/img/diagnostic.svg" />
          <div class="content">
            <h2>PrimeSpot test</h2>
            <p>Accurately diagnose Lyme Disease and chronic fatigue syndrome.</p>
          </div>
        </div>
      </a>
      
      <a href="<?php echo get_site_url(); ?>/basket/?add-to-cart=138" class="declaration">
        <div class="next_button">
        <img src="<?php bloginfo('template_directory'); ?>/img/targeted.svg" />
          <div class="content">
            <h2>SNPs test</h2>
            <p>Accurate screenings to determine your patient’s response to treatment.</p>
          </div>
        </div>
      </a>
      
      <a href="<?php echo get_site_url(); ?>/basket/?add-to-cart=661" class="declaration">
        <div class="next_button">
        <img src="<?php bloginfo('template_directory'); ?>/img/paldi.svg" />
          <div class="content">
            <h2>PaldiSpot test</h2>
            <p>Reliable tests to identify your patient’s strain of Lyme disease.</p>
          </div>
        </div>
      </a>
      
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
