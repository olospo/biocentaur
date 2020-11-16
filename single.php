<?php /* Single Post */
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="hero single">
  <div class="background" style="background: url(' <?php the_post_thumbnail_url( 'full' ); ?> ') center center no-repeat; background-size: cover;">
</section>

<?php
$thecontent = get_the_content();
if(!empty($thecontent)) { ?>
<section class="post single_post">
  <div class="container flex">
    <aside class="three columns">
      <div class="back">
        <a href="<?php echo get_site_url(); ?>/news">Back to news</a>
      </div>
      <div class="news-dates">
        <h2>Archive</h2>
        <ul class="archive">
        <?php $args = array(
        	'type'            => 'yearly',
        	'limit'           => '',
        	'format'          => 'html', 
        	'before'          => '',
        	'after'           => '',
        	'show_post_count' => false,
        	'echo'            => 1,
        	'order'           => 'DESC',
                'post_type'     => 'post'
        );
        wp_get_archives( $args ); ?>
        </ul>
      </div>
    </aside>
    <div class="content nine columns extra_gutter">
      <h1><?php the_title(); ?></h1>
      <span class="date"><strong>Posted:</strong> <?php the_time('jS F Y'); ?></span>
      
      <?php the_content(); ?>

    </div>
  </div>
</section>
<?php } ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>