<?php /* Template Name: Clinicians */
get_header();

while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'inc/hero' ); ?>

<?php get_template_part( 'inc/our_tests' ); ?>

<section class="order_test">
  <div class="container">
    <div class="test_content">
      <div class="five columns offset-by-one">
        <h3>Order a test</h3>
        <p>Order your test online and we will send you a [saliva collection kit / blood sample kit] in the mail. Send your patient sample back to us and our team of genetic experts will do the rest.</p>
        <a href="#" class="button filled">Order a test</a>
      </div>
      <div class="five columns">
        <img src="/wp-content/uploads/2020/02/TESTBOX-predictive.png" />
      </div>
    </div>
  </div>
</section>

<section class="about_bio">
  <div class="container">
    <div class="six columns">
      <img src="/wp-content/uploads/2020/03/BioC_ABOUT-US_LAB_01bt.jpg" />
    </div>
    <div class="six columns">
      <h4>About Biocentaur</h4>
      <p>We are experts in the field of advanced medical genetics. Our team of scientists and medical experts, led by genetics pioneer Dr Ioannis Papasotiriou, have developed a range of predictive and diagnostic genetic tests so that you can make informed decisions about your patients’ healthcare. We work at the cutting edge of molecular biology, developing techniques that will help accurately diagnose diseases and improve outcomes for patients across the world.</p>
      <a href="<?php echo get_site_url(); ?>/about" class="button filled">Learn more</a>
    </div>    
  </div>
</section>

<?php get_template_part('inc/footer_faq'); ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
