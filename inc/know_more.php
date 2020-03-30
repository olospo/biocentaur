<section class="know_more">
  <div class="container">
    <div class="more_intro twelve columns">
      <h4>Want to know more?</h4>
    </div>
    <div class="row">
      <div class="more_block one-third column">
        <h5><?php the_field('one_title','options'); ?></h5>
        <p><?php the_field('one_content','options'); ?></p>
        <a href="<?php the_field('one_link_url','options'); ?>" class="read_more"><?php the_field('one_link_text','options'); ?></a>
      </div>
      <div class="more_block one-third column">
        <h5><?php the_field('two_title','options'); ?></h5>
        <p><?php the_field('two_content','options'); ?></p>
        <a href="<?php the_field('two_link_url','options'); ?>" class="read_more"><?php the_field('two_link_text','options'); ?></a>
      </div>
      <div class="more_block one-third column">
        <h5><?php the_field('three_title','options'); ?></h5>
        <p><?php the_field('three_content','options'); ?></p>
        <a href="<?php the_field('three_link_url','options'); ?>" class="read_more"><?php the_field('three_link_text','options'); ?></a>
      </div>
    </div>
  </div>
</section>
