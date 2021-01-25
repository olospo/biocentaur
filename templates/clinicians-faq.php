<?php /* Template Name: FAQ - Clinicians */

/* This template is not being used currently. All FAQs have been combined and is using the Individuals-FAQ template to display them */

get_header();
$searchterm = $_REQUEST['faq_searchterm'] ?? "";
$category = $_REQUEST['category'] ?? false;
?>
<section class="faq_page" id="content">
  <div class="container">
    <div class="filter ten columns offset-by-one">
      <h1>Frequently asked questions</h1>
      <p>Filter frequently asked questions by topic or search the database for specific keywords.</p>
        <form id="faq-archive-form" action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="post">
          <input type="hidden" name="action" value="faq_search" />
          <input type="hidden" name="anchor" value="main" />
          <input type="hidden" name="form_id" value="faq-archive-form" />
          <input type="hidden" name="content_area_id" value="faq-archive-content" />
          <?php wp_nonce_field( 'faq_search_form', 'faq_search_nonce' ); ?>
          <input type="search" id="archive-faq-search" name="faq_searchterm" value="<?php echo $searchterm; ?>"><input type="submit" id="archive-faq-submit" value/>
          <div class="category-buttons">
          <?php 
          $terms = get_terms(array(
              'taxonomy' => 'question_cat',
              'hide_empty' => false,
              'parent' => '19', // Live
              // 'parent' => '26', // Local
          ));
          $selected = ($category === 'all' || !$category) ? 'checked="checked"': "";
  
          echo '<div class="button_wrapper"><input type="radio" name="category" value="clinicians" '.$selected.'/><label>All</label></div>';
          foreach ($terms as $term) {
              if ($category === $term->slug) {
                  $selected = 'checked="checked"';
              } else {
                  $selected = "";
              }
              echo '<div class="button_wrapper"><input type="radio" name="category" value="'.$term->slug.'" '.$selected.'/><label>' . $term->name .'</label></div>';
          }
          ?>
          
          </div>
        </form>
    </div>
    <div class="faq-archive ten columns offset-by-one" id="faq-archive-content">
      <?php the_faq_content_clinician( 10 ); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>