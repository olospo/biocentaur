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
        <h3>Individuals</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="<?php echo get_site_url(); ?>/individuals" target="_blank" class="button secondary reversed">Learn more</a>
      </div>
    </div>
    <div class="clinicians six columns">
      <div class="content">
        <h3>Clinicians</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="<?php echo get_site_url(); ?>/clinicians" class="button secondary reversed">Learn more</a>
      </div>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>