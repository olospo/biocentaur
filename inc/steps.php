<section class="illustration_steps">
  <div class="container">
    <?php if( have_rows('step') ): $count = 0 ?>
    <div class="title">
      <h1><?php the_field('section_title'); ?></h1>
    </div>
    <?php while( have_rows('step') ): the_row(); 
		// vars
		$image = get_sub_field('illustration');
		$title = get_sub_field('title');
		$content = get_sub_field('description');
		
		$count++ // Increment count ?>
		<article class="step ten columns offset-by-one">
      <div class="step_image six columns">
        <img src="<?php echo $image; ?>" />
      </div>
      <div class="step_text six columns">
        <strong>0<?php echo $count ?></strong>
        <h2><?php echo $title; ?></h2>
        <?php echo $content; ?>
      </div>
    </article>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>