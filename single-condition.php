<?php /* Single Post */
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="post">
  <?php echo numeric_posts_nav(); ?>
  <div class="container flex">
    <aside class="two columns offset-by-one">
      <img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" class="condition_image"> 
    </aside>
    <div class="content eight columns extra_gutter">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>