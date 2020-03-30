<?php /* Template Name: Customer */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="page_navigation">
  <div class="container">
    
  </div>
</section>

<section class="post">
  <div class="container">
    <a href="<?php echo get_site_url(); ?>" class="back">Back to Biocentaur</a>
    <h1>Order your test</h1>
    <div class="individual_button">
    
    </div>
    <div class="clinician_button">
      
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>