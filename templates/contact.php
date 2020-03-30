<?php /* Template Name: Contact */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="post">
  <div class="container flex">
    <aside class="three columns">
      <p>
        <strong>Biocentaur</strong><br />
        Baarerstrasse 75, Zug, 6300.<br />
        Switzerland
      </p>
      <p>
        <a href="tel:+441179181506">+44 117 918 1506</a><br />
        <a href="mailto:info@biocentaur.com">info@biocentaur.com</a>
      </p>
    </aside>
    <div class="content nine columns extra_gutter">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php echo do_shortcode('[ninja_form id=1]'); ?>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>