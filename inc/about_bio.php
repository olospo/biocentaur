<?php // Test CTA Vars
$aboutTitle = get_field('about_title');
$aboutContent = get_field('about_content');
$aboutImage = get_field('about_image');
?>
<section class="about_bio">
  <div class="container">
    <div class="image six columns">
      <img src="<?php echo $aboutImage; ?>" />
    </div>
    <div class="content six columns">
      <h4><?php echo $aboutTitle; ?></h4>
      <?php echo $aboutContent; ?>
      <a href="<?php echo get_site_url(); ?>/about" class="button filled">Learn more</a>
    </div>    
  </div>
</section>