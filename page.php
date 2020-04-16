<?php /* Page */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php if ( has_post_thumbnail() ) { ?>
<section class="hero single">
  <div class="background" style="background: url(' <?php the_post_thumbnail_url( 'full' ); ?> ') center center no-repeat; background-size: cover;">
</section>
<section class="post">
<?php } else { ?>
<section class="post no_hero">
<?php } ?>
  <div class="container flex">
    <div class="content ten columns offset-by-one">
       <h1><?php the_title(); ?></h1>
      <?php $content = get_the_content(); if($content) { ?>
        <?php echo $content; ?>
      <?php } ?>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_template_part('inc/health_conditions'); // Health Conditions Accordion ?>

<?php get_template_part('inc/know_more'); // Know More section ?>

<?php get_template_part('inc/footer_faq'); // Footer FAQ ?>

<?php get_footer(); ?>