<?php /* Template Name: About */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="hero single">
  <div class="background" style="background: url(' <?php the_post_thumbnail_url( 'full' ); ?> ') center center no-repeat; background-size: cover;">
</section>

<section class="about_intro">
  <div class="container">
    <div class="eight columns offset-by-one">
    <h1>About Biocentaur</h1>
    <p>We are experts in the field of advanced medical genetics. Our team of scientists and medical experts, led by genetics pioneer Dr Ionannis Papasotiriou, have developed a range of predictive, diagnostic and targeted genetic tests so that individuals can make informed decisions about their health and wellbeing. We work at the cutting edge of molecular biology, developing techniques that will help accurately diagnose diseases and improve outcomes for patients across the world.</p>
    </p>
    </
  </div>
</section>

<section class="full-width">
  <div class="container">
    <div class="about_aims five columns offset-by-one">
      <p>We aim to:</p>
      <ul>
        <li><img src="<?php bloginfo('template_directory'); ?>/img/about-1.svg" /> help patients make informed decisions about their health.</li>
        <li><img src="<?php bloginfo('template_directory'); ?>/img/about-2.svg" /> enable healthcare professionals to improve outcomes for their patients.</li>
        <li><img src="<?php bloginfo('template_directory'); ?>/img/about-3.svg" /> drive innovation and improve standards.</li>
        <li><img src="<?php bloginfo('template_directory'); ?>/img/about-4.svg" /> become a leader in the field of genetics testing.</li>
      </ul>
    </div>
    <div class="about_image one-half column">

    </div>
  </div>
</section>

<section class="about_test_intro">
  <div class="container">
    <div class="six columns offset-by-three">
    <p>We currently provide three genetic tests: Future health test, Diagnostic test and Targeted test.</p>
    </div>
  </div>
</section>

<section class="test_cta">
  <div class="container">
    <div class="text six columns">
    Find out more about our range of tests to determine whether they are suitable for you or your patients.
    </div>
    <div class="buttons six columns">
      <a href="<?php echo get_site_url(); ?>/clinicians" class="button filled white">Clinicians</a>
      <a href="<?php echo get_site_url(); ?>/individuals" class="button filled white">Individuals</a>
    </div>
  </div>
</section>
  
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>