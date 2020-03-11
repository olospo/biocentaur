<?php /* Template Name: Individuals */
get_header();

while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'inc/hero' ); ?>

<section class="how_it_works">
  <div class="container">
    <article class="title">
      <h1>How it works</h1>
    </article>
    <article class="step ten columns offset-by-one">
      <div class="step_image six columns">
        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg">
      </div>
      <div class="step_text six columns">
        <strong>01</strong>
        <h2>Research the test</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </article>
    <article class="step ten columns offset-by-one">
      <div class="step_image six columns">
        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg">
      </div>
      <div class="step_text six columns">
        <strong>02</strong>
        <h2>Order a test</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </article>
    <article class="step ten columns offset-by-one">
      <div class="step_image six columns">
        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg">
      </div>
      <div class="step_text six columns">
        <strong>03</strong>
        <h2>Complete your test</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </article>
    <article class="step ten columns offset-by-one">
      <div class="step_image six columns">
        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg">
      </div>
      <div class="step_text six columns">
        <strong>04</strong>
        <h2>Return your test</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </article>
    <article class="step ten columns offset-by-one">
      <div class="step_image six columns">
        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg">
      </div>
      <div class="step_text six columns">
        <strong>05</strong>
        <h2>Your results</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </article>
  </div>
</section>

<?php get_template_part('inc/health_conditions'); ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>