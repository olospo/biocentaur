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
    <div class="eight columns offset-by-two">
      <h1><?php echo $title; ?></h1>
      <?php echo $content; ?>
    </div>
    <?php $images = get_field('gallery'); if( $images ): ?>
    <div class="twelve columns">
      <div class="grid">
        <ul>
        <?php foreach( $images as $image ): ?>
          <li>
            <img src="<?php echo esc_url($image['sizes']['featured-img']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          </li>
        <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <?php endif; ?> 
  </div>
</section>
  
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
