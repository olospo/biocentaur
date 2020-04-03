<?php /* Template Name: Contact */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="post">
  <div class="container flex">
    <div class="content nine columns offset-by-three">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
  <div class="container flex">
    <aside class="three columns">
      <p>
        <strong>Biocentaur</strong><br />
        <?php the_field('address','options'); ?><br />
        <a href="tel:<?php the_field('phone_number','options'); ?>"><?php the_field('phone_number','options'); ?></a><br />
        <a href="mailto:<?php the_field('email','options'); ?>"><?php the_field('email','options'); ?></a>
      </p>
    </aside>
    <div class="content nine columns">
      <?php the_content(); ?>
      <?php echo do_shortcode('[ninja_form id=1]'); ?>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>