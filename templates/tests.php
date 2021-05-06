<?php /* Template Name: Tests */
get_header();

$bgImg = get_field('background_image');

$order = get_field('order_link'); // GP Letter
$order_id = get_field('order_anchor'); // Order ID
$medical_form = get_field('medical_form'); // Medical Order Form
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
      <?php if ($order): ?><a href="<?php echo $order; ?>" class="button filled" download><?php echo $orderText; ?></a><?php endif; ?>
      <?php if ($order_id): ?><a href="<?php echo get_site_url(); ?>/?add-to-cart=<?php echo $order_id; ?>" class="button filled"><?php echo $orderText; ?></a><?php endif; ?>
      <a href="<?php echo $faq; ?>" class="button primary"><?php echo $faqText; ?></a>
      
      <?php if ($medical_form): ?>
      <div class="medical_form">
        Please download this <a href="<?php echo $medical_form; ?>" download>medical form</a> to complete and include with your sample once have been sent the test box by Biocentaur
      </div>
      <?php endif; ?>
    </aside>
    <div class="content five columns">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_template_part('inc/footer_faq'); ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
