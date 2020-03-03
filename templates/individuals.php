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

<section class="home_conditions">
  <div class="container">
    <div class="block__title ten columns offset-by-one">
      <h3>Health Conditions</h3>
      <p>Learn more about your health and take care of your lifestyle choices</p>
    </div>
    <div class="block__conditions ten columns offset-by-one">
      <?php 
          $args = array(
            'post_type'      => 'condition',
            'order_by'       => 'title',
            'order'          => 'ASC',
            'post_status'    => 'publish',
            'posts_per_page' => -1
          ); 
          query_posts($args); ?>
      <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
      
      <article>
        <div class="title">
          <img src="<?php the_post_thumbnail_url( 'featured-img' ); ?>" />
          <?php the_title(); ?>
        </div>
        <div class="content">
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="button primary">Learn more</a>
        </div>
      </article>
      
      <?php endwhile; ?>
      
      <?php else : ?>
      <!-- No posts found -->
      <?php endif; wp_reset_query(); ?>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>