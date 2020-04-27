<?php /* Template Name: About */

$title = get_field('intro_title');
$content = get_field('intro_content');


get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="hero single">
  <div class="background" style="background: url(' <?php the_post_thumbnail_url( 'full' ); ?> ') center center no-repeat; background-size: cover;">
</section>

<section class="about_intro">
  <div class="container">
    <div class="eight columns offset-by-one">
    <h1><?php echo $title; ?></h1>
    <?php echo $content; ?>
    </div>
  </div>
</section>

<section class="full-width">
  <div class="container">
    <div class="about_aims five columns offset-by-one">
      <p>We aim to:</p>
      <?php if( have_rows('aims') ): ?>
      <ul>
        <?php while ( have_rows('aims') ) : the_row(); // Aims
          // Vars
          $aimLogo = get_sub_field('aim_icon');
          $aimText = get_sub_field('aim_text');
        ?>
        <li><img src="<?php echo $aimLogo; ?>" /> <?php echo $aimText; ?></li>
        <?php endwhile; else : endif; ?>
      </ul>
    </div>
    <div class="about_image one-half column" style="background: url(' <?php the_field('aims_background_image'); ?> ') center center no-repeat; background-size: cover;">

    </div>
  </div>
</section>

<section class="about_test_intro">
  <div class="container">
    <div class="six columns offset-by-three">
    <p>We currently provide four genetic tests: Future health test, Diagnostic test and Targeted test.</p>
    </div>
  </div>
</section>

<?php if( have_rows('tests') ): ?>
<section class="about_slider order_test ">
  <div class="container">
    <div class="slider twelve columns">
	<?php while( have_rows('tests') ): the_row(); 
	// vars
	$image = get_sub_field('test_image');
	$title = get_sub_field('test_title');
	$content = get_sub_field('test_content');

	?>
	
  <div class="slide">
    <div class="test_content">
      <div class="image five columns">
        <img src="<?php echo $image; ?>" />
      </div>
      <div class="text five columns">
        <h3><?php echo $title; ?></h3>
        <?php echo $content; ?>
      </div>
    </div>
  </div>

	<?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="test_cta">
  <div class="container">
    <div class="text six columns">
    Find out more about our range of tests to determine whether they are suitable for you or your patients.
    </div>
    <div class="buttons six columns">
      <a href="<?php echo get_site_url(); ?>/individuals" class="button filled white">Individuals</a>
      <a href="<?php echo get_site_url(); ?>/clinicians" class="button filled white">Clinicians</a>
    </div>
  </div>
</section>
  
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
