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

<?php get_template_part('inc/know_more'); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>