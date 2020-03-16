<?php /* Template Name: Individuals */
get_header();

while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'inc/hero' ); ?>

<?php get_template_part( 'inc/steps' ); ?>

<section class="predictive_test">
  <div class="container">
    <div class="test_content">
      <div class="five columns offset-by-one">
        <h3>Our predictive genetic test</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        <a href="#" class="button filled">Order a test</a> <a href="#" class="button primary">Learn more</a>
      </div>
      <div class="five columns">
        <img src="<?php bloginfo('template_directory'); ?>/img/predictive.svg" />
      </div>
    </div>
  </div>
</section>

<?php get_template_part('inc/health_conditions'); ?>

<?php get_template_part('inc/know_more'); ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>