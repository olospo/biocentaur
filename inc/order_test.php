<?php // Test CTA Vars
$testTitle = get_field('test_title');
$testContent = get_field('test_content');
$testImage = get_field('test_product_image');
$testOrder = get_field('order_button_link'); 
$testMore = get_field('learn_more_link'); 
?>
<section class="order_test">
  <div class="container">
    <div class="test_content">
      <div class="text five columns offset-by-one">
        <h3><?php echo $testTitle; ?></h3>
        <p><?php echo $testContent; ?></p>
        <a href="<?php echo $testOrder; ?>" class="button filled">Order a test</a> <?php if( $testMore ): ?><a href="<?php echo $testMore; ?>" class="button primary">Learn more</a><?php endif; ?>
      </div>
      <div class="image five columns">
        <img src="<?php echo $testImage; ?>" />
      </div>
    </div>
  </div>
</section>
