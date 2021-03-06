<?php /* Template Name: Blank Page */
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
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>