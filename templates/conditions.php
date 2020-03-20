<?php /* Template Name: Conditions */
get_header();

while ( have_posts() ) : the_post(); ?>

<?php get_template_part('inc/health_conditions'); ?>

<?php get_template_part('inc/know_more'); ?>

<?php get_template_part('inc/footer_faq'); ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>