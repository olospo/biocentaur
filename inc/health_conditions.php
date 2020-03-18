<section class="health_conditions">
  <div class="container">
    <div class="block__title ten columns offset-by-one">
      <h3>Future health test</h3>
      <p>Our Future health test can help determine your risk of developing the following diseases:</p>
    </div>
    <div class="block__conditions ten columns offset-by-one">
      <?php 
          $args = array(
            'post_type'      => 'condition',
            'order_by'       => 'title',
            'order'          => 'ASC',
            'post_status'    => 'publish',
            'posts_per_page' => -1
          ); 
          query_posts($args); ?>
      <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
      
      <article class="accordionItem close">
        <div class="title accordionItemHeading">
          <img src="<?php the_post_thumbnail_url( 'featured-img' ); ?>" height="50px" width="50px" />
          <?php the_title(); ?>
        </div>
        
        <div class="accordionItemContent">
          <div class="content">
            <?php if( get_field('short_description')) { // Check if short description is added ?>
              <?php the_field('short_description'); ?>
            <?php } else { ?>
              <?php the_excerpt(); ?>
            <?php } ?> 
            <a href="<?php the_permalink(); ?>" class="button primary">Learn more</a>       
          </div>
        </div>
      </article>

      <?php endwhile; ?>
      
      <?php else : ?>
      <!-- No posts found -->
      <?php endif; wp_reset_query(); ?>
    </div>
  </div>
</section>
