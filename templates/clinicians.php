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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        <a href="#" class="button filled">Order a test</a>
      </div>
      <div class="five columns">
        <img src="<?php bloginfo('template_directory'); ?>/img/targeted.svg" />
      </div>
    </div>
  </div>
</section>

<section class="about_bio">
  <div class="container">
    <div class="six columns">
      <p>Image here</p>
    </div>
    <div class="six columns">
      <h4>About Biocentaur</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <a href="#" class="button primary">Learn more</a>
    </div>    
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>