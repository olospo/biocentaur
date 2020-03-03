<?php /* Template Name: Clinicians */
get_header();

while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'inc/hero' ); ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>