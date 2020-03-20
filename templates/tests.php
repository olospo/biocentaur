<?php /* Template Name: Tests */
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="post">
  <div class="container">
    <div class="five columns offset-by-one">
      <img src="<?php the_post_thumbnail_url( 'full' ); ?>" />
      <a href="#" class="button filled">Order a test</a>
      <a href="#" class="button primary">FAQS</a>
    </div>
    <div class="five columns">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_template_part('inc/health_conditions'); ?>

<?php get_template_part('inc/know_more'); ?>

<?php get_template_part('inc/footer_faq'); ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>