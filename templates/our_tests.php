<?php /* Template Name: Our Tests */
get_header();

while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'inc/our_tests' ); ?>

<?php get_template_part('inc/footer_faq_clinician'); ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>