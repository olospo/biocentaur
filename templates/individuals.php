<?php /* Template Name: Individuals */
get_header();

while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'inc/hero' ); // Hero section ?>

<section class="post individual_tests bg">
  <div class="container flex">
    <aside class="five columns offset-by-one">
      <?php the_field('animation'); ?>
    </aside>
    <div class="content five columns">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_template_part( 'inc/individuals_tests' ); // Our tests?>

<?php get_template_part('inc/footer_faq'); // Footer FAQ ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
