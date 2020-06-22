<?php /* Template Name: About */

$title = get_field('intro_title');
$content = get_field('intro_content');


get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="hero single">
  <div class="background" style="background: url(' <?php the_post_thumbnail_url( 'full' ); ?> ') center center no-repeat; background-size: cover;">
</section>

<section class="about_intro">
  <div class="container">
    <div class="eight columns offset-by-one">
    <h1><?php echo $title; ?></h1>
    <?php echo $content; ?>
    </div>
  </div>
</section>
  
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
