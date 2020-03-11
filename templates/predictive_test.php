<?php /* Template Name: Predictive Test */
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="post">
  <div class="container">
    <h1>Predictive test</h1>
  </div>
</section>

<?php get_template_part('inc/health_conditions'); ?>

<?php get_template_part('inc/know_more'); ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>