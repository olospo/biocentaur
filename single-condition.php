<?php /* Single Post */
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="condition">
  <?php echo numeric_posts_nav(); ?>
  <div class="container flex">
    <aside class="two columns offset-by-one">
      <img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" class="condition_image"> 
    </aside>
    <div class="content eight columns extra_gutter">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </div>
</section>

<section class="test_cta">
  <div class="container">
    <div class="seven columns offset-by-one">
    Our predictive genetic tests help determine if you are at an increased risk of developing <?php the_title(); ?>
    </div>
    <div class="three columns">
      <a href="#" class="button secondary">Order a test</a>
    </div>
  </div>
</section>

<section class="know_more">
  <div class="container">
    <div class="know_intro twelve columns">
      <h4>We're here to help</h4>
    </div>
    <div class="row">
      <div class="know_block one-third column">
        <h5>Conditions</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="know_block one-third column">
        <h5>Health features</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="know_block one-third column">
        <h5>About Biocentaur</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>