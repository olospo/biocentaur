<?php /* Single Post */
get_header();

while ( have_posts() ) : the_post(); ?>
<section class="test_navigation">
  <div class="container">
    <ul>
      <li><a href="<?php echo get_site_url(); ?>/customer/">Customer</a></li>
      <li><a href="<?php echo get_site_url(); ?>/customer/<?php if ( is_page('269') ) { echo "individual-test"; } else { echo "clinician-test"; } ?>">Test</a></li>
      <li class="active"><a href="<?php echo get_site_url(); ?>/basket/">Basket</a></li>
      <li>Checkout</li>
      <li>Confirm</li>
    </ul>
  </div>
</section>

<section class="test_content">
  <div class="container">
    <div class="ten columns offset-by-one">
      
      <div class="test_heading">
        <a href="<?php echo get_site_url(); ?>" class="back">Back to Biocentaur</a>
        <h1>Order your test</h1>
        <p>You are <?php if ( is_page('269') ) { echo "an Individual"; } else { echo "a Clinician"; } ?> ordering a <?php the_title(); ?> via online transaction.</p>
      </div>
      <div class="row">
        <div class="product six columns">
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>
          <p><img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>"></p>
            <?php echo apply_filters(
                    'woocommerce_loop_add_to_cart_link',
                    sprintf(
                        '<a href="%s" rel="nofollow" data-product_id="133" data-product_sku="%s" class="button filled %s product_type_%s">Add to basket</a>',
                        esc_url( $product->add_to_cart_url() ),
                        esc_attr( $product->get_id() ),
                        esc_attr( $product->get_sku() ),
                        $product->is_purchasable() ? 'add_to_cart_button' : '',
                        esc_attr( $product->product_type ),
                        esc_html( $product->add_to_cart_text() )
                    ),
                    $product
                );?>
        </div>
      </div>
    </div>
  </div>
</section>


<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>