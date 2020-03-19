<?php /* Template Name: About */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="hero single">
  <div class="background" style="background: url(' <?php the_post_thumbnail_url( 'full' ); ?> ') center center no-repeat; background-size: cover;">
</section>

<section class="about_intro">
  <div class="container">
    <h1>About Biocentaur</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </p>
  </div>
</section>

<section class="about_aims">
  <div class="container">
    <p>We aim to:</p>
    <ul>
      <li>help patients make informed decisions about their health.</li>
      <li>enable healthcare professionals to improve outcomes for their patients.</li>
      <li>drive innovation and improve standards.</li>
      <li>become a leader in the field of genetics testing.</li>
    </ul>
  </div>
</section>

<section class="about_test_intro">
  <div class="container">
    <p>We currently provide three genetic tests: Future health test, Diagnostic test and Targeted test.</p>
  </div>
</section>
  
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>