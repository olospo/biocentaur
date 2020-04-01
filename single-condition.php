<?php /* Single Post */
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="condition">
  <?php echo numeric_posts_nav(); ?>
  <div class="container flex">
    <aside class="two columns offset-by-one">
      <img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" class="condition_image"> 
    </aside>
    <div class="content seven columns extra_gutter">
      <div class="breadcrumbs"><a href="<?php echo get_site_url(); ?>/individuals/health-conditions">Conditions</a> <img src="<?php bloginfo('template_directory'); ?>/img/blue_arrow.svg"> <?php the_title(); ?></div>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <!-- Related Info/Documents -->
      <?php if( have_rows('related_info__documents') ): ?>
      <div class="related">
        <div class="content">
        <ul>
        <?php while( have_rows('related_info__documents') ): the_row(); 

    		// vars
    		$select = get_sub_field('url_or_upload');
    		$title = get_sub_field('title');
    		$url = get_sub_field('url');
    		$upload = get_sub_field('upload');
    		
    		$ext = pathinfo($upload, PATHINFO_EXTENSION);
    
    		?>
    		
    		<?php if( $select == 'url' ): ?>
        <li class="link">
          <a href="<?php echo $url; ?>" target="_blank">
            <?php echo $title; ?>
			    </a>
        </li>
        <?php endif; ?>
        
        <?php if( $select == 'upload' ): ?>
        <li class="<?php echo $ext; ?>">
          <a href="<?php echo $upload; ?>">
            <?php echo $title; ?>
			    </a>
        </li>
        <?php endif; ?>

    	  <?php endwhile; ?>
    	  </ul>
      </div>
      <?php endif; ?> 
    </div>
  </div>
</section>

<section class="test_cta">
  <div class="container">
    <div class="text seven columns offset-by-one">
    Our predictive genetic tests help determine if you are at an increased risk of developing <?php the_title(); ?>
    </div>
    <div class="buttons three columns">
      <a href="#" class="button filled white">Order a test</a>
    </div>
  </div>
</section>

<?php get_template_part('inc/know_more'); ?>

<?php get_template_part('inc/footer_faq'); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>