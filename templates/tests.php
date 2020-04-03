<?php /* Template Name: Tests */
get_header();

$order = get_field('order_link');
$faq = get_field('faq_link');

while ( have_posts() ) : the_post(); ?>

<section class="post single_test">
  <div class="container flex">
    <aside class="five columns offset-by-one">
      <img src="<?php the_post_thumbnail_url( 'full' ); ?>" />
      <a href="<?php echo $order; ?>" class="button filled">Order a test</a>
      <a href="<?php echo $faq; ?>" class="button primary">FAQS</a>
    </aside>
    <div class="content five columns">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php if(is_page(211)) { get_template_part('inc/health_conditions'); } // Only show on Individual Test ?>

<?php get_template_part('inc/know_more'); ?>

<?php get_template_part('inc/footer_faq'); ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>