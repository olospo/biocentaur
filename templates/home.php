<?php /* Template Name: Home */
get_header();

// Vars
$serviceText = get_field('services_text');
$ctaBG = get_field('cta_background_image');

while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'inc/hero' ); ?>

<section class="home_cta">
  <div class="container">
    <div class="individuals six columns">
      <div class="content">
        <h2>Individuals</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="<?php echo get_site_url(); ?>/individuals" target="_blank" class="button primary">Learn more</a>
      </div>
    </div>
    <div class="clinicians six columns">
      <div class="content">
        <h2>Clinicians</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
      <a href="#" class="button">Learn more</a>
    </div>
    <div class="six columns">
      
    </div>
  </div>
</section>

<section class="home_accordian">
  <div class="container">
    <h3>Predictive genetic testing</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
  </div>
</section>

<section class="home_help">
  <div class="container">
    <div class="help__intro twelve columns">
      <h4>We're here to help</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
    </div>
    <div class="help__individual six columns">
      <h5>Individuals</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="help__clinicians six columns">
      <h5>Clinicians</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>