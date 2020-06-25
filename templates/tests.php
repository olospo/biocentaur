<?php /* Template Name: Tests */
get_header();

$bgImg = get_field('background_image');

$order = get_field('order_link');
$faq = get_field('faq_link');

$orderText = get_field('order_text');
$faqText = get_field('faq_text');

while ( have_posts() ) : the_post(); ?>

<?php if ($bgImg): ?>
<section class="hero single">
  <div class="background" style="background: url(' <?php echo $bgImg; ?> ') center center no-repeat; background-size: cover;">
</section>
<?php endif; ?>

<section class="post single_test <?php if ($bgImg): ?>bg<?php endif; ?>">
  <div class="container flex">
    <aside class="five columns offset-by-one">
      <img src="<?php the_post_thumbnail_url( 'full' ); ?>" />
      <a href="<?php echo $order; ?>" class="button filled"><?php echo $orderText; ?></a>
      <a href="<?php echo $faq; ?>" class="button primary"><?php echo $faqText; ?></a>
    </aside>
    <div class="content five columns">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </div>
</section>



<?php 
  if ( is_tree(460) || is_tree(738) ) { 
    get_template_part('inc/health_cta');
    get_template_part('inc/footer_faq_clinician'); 
  } else { 
    get_template_part('inc/footer_faq'); 
  }
?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>