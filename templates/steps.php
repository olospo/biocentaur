<?php /* Template Name: Steps */
get_header();

while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'inc/hero' ); // Hero section ?>

<?php get_template_part( 'inc/steps' ); // Animation steps ?>

<?php get_template_part('inc/footer_faq'); // Footer FAQ ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
