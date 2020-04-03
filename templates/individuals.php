<?php /* Template Name: Individuals */
get_header();

while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'inc/hero' ); // Hero section ?>

<?php get_template_part( 'inc/steps' ); // Animation steps ?>

<?php get_template_part( 'inc/order_test' ); // Order Test CTA ?>

<?php get_template_part('inc/health_conditions'); // Health Conditions Accordion ?>

<?php get_template_part('inc/know_more'); // Know More section ?>

<?php get_template_part('inc/footer_faq'); // Footer FAQ ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
