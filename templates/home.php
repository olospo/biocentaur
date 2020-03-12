<?php /* Template Name: Home */
get_header();

while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'inc/hero' ); ?>

<section class="home_cta">
  <div class="container">
    <div class="cta__block individuals six columns">
      <div class="content">
        <h2>Individuals</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
        <a href="<?php echo get_site_url(); ?>/individuals" target="_blank" class="button primary">Learn more</a>
      </div>
    </div>
    <div class="cta__block clinicians six columns">
      <div class="content">
        <h2>Clinicians</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
        <a href="<?php echo get_site_url(); ?>/clinicians" class="button primary">Learn more</a>
      </div>
    </div>
  </div>
</section>

<section class="home_info">
  <div class="container">
    <div class="six columns">
      <h3>Experts in advanced medical genetics</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <a href="#" class="button primary">Learn more</a>
    </div>
    <div class="six columns">
      <p>Video here</p>
    </div>
  </div>
</section>

<?php get_template_part('inc/health_conditions'); ?>

<section class="home_help">
  <div class="container">
    <div class="help_intro twelve columns">
      <h4>We're here to help</h4>
    </div>
    <div class="row">
      <div class="help_block six columns">
        <h5>Individuals</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#" class="read_more">Conditions</a>
        <br />
        <a href="#" class="read_more">Health features</a>
      </div>
      <div class="help_block six columns">
        <h5>Clinicians</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#" class="read_more">See tests</a>
      </div>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>