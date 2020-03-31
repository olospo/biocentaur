<?php /* Template Name: Individuals */
get_header();

// Test CTA Vars
$testTitle = get_field('test_title');
$testContent = get_field('test_content');
$testImage = get_field('test_product_image');

while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'inc/hero' ); ?>

<?php get_template_part( 'inc/steps' ); ?>

<section class="order_test">
  <div class="container">
    <div class="test_content">
      <div class="text five columns offset-by-one">
        <h3>Our Future health test</h3>
        <p>Our Future health test has been developed to give you the information you need to make informed decisions about your health and wellbeing.</p>
        <a href="#" class="button filled">Order a test</a> <a href="<?php echo get_site_url(); ?>/individuals/future-health-test/" class="button primary">Learn more</a>
      </div>
      <div class="image five columns">
        <img src="/wp-content/uploads/2020/02/TESTBOX-predictive.png" />
      </div>
    </div>
  </div>
</section>

<?php get_template_part('inc/health_conditions'); ?>

<?php get_template_part('inc/know_more'); ?>

<?php get_template_part('inc/footer_faq'); ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
