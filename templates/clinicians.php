<?php /* Template Name: Clinicians */
get_header();

while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'inc/hero' ); // Hero section ?>

<?php get_template_part( 'inc/our_tests' ); // Our Tests ?>

<?php get_template_part( 'inc/about_bio' ); // About Biocentaur ?>

<?php get_template_part('inc/footer_faq_clinician'); // Footer FAQ ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
