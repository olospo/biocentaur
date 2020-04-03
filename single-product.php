<?php /* Single Post */
get_header();

while ( have_posts() ) : the_post(); ?>
<section class="test_navigation">
  <div class="container">
    <ul>
      <li><a href="<?php echo get_site_url(); ?>/customer/">Customer</a></li>
      <li><a href="<?php echo get_site_url(); ?>/customer/<?php if ( is_page('269') ) { echo "individual-test"; } else { echo "clinician-test"; } ?>">Test</a></li>
      <li class="active">Checkout</li>
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
        <p>You are an <?php if ( is_page('269') ) { echo "Individual"; } else { echo "Clinician"; } ?> ordering a <?php the_title(); ?></p>
      </div>
      <div class="row">
        <div class="register six columns">
          <form>
            <div class="half">
              <div class="element">
                <label>First name *</label>
                <input type="text" />
              </div>
              
              <div class="element">
                <label>Last name *</label>
                <input type="text" />
              </div>
              
            </div>
            <div class="full">
              <div class="element">
                <label>Email *</label>
                <input type="email" />
              </div>
            </div>
            
            <div class="half">
              <div class="element">
                <label>Password *</label>
                <input type="password" />
              </div>
              
              <div class="element">
                <label>Repeat password *</label>
                <input type="password" />
              </div>
            </div>

          <a href="<?php echo get_site_url(); ?>/customer/confirm" class="button primary filled">Register</a>
          </form>
        </div>
        <div class="product six columns">
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>
          <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
        </div>
      </div>
      </div>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>