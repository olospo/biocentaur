<?php $searchterm = $_REQUEST['faq_searchterm'] ?? "";
$category = $_REQUEST['category'] ?? false; ?>
<div class="footer_faq">
  <div class="container">

    <div class="filter ten columns offset-by-one">
      <h2>Frequently asked questions</h2>
        <form id="faq-archive-form" action="<?php echo admin_url('admin-ajax.php'); ?>" method="post">
          <input type="hidden" name="action" value="faq_search" />
          <input type="hidden" name="anchor" value="main" />
          <input type="hidden" name="form_id" value="faq-archive-form" />
          <input type="hidden" name="content_area_id" value="faq-archive-content" />
          <?php wp_nonce_field( 'faq_search_form', 'faq_search_nonce' ); ?>
          <input type="search" id="archive-faq-search" name="faq_searchterm" value="<?php echo $searchterm ?>"><input type="submit" id="archive-faq-submit" value/>
          <div class="category-buttons" style="display:none;">
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
      <?php the_faq_content_clinician( 5 ); ?>
    </div>
    <div class="answer ten columns offset-by-one">
    <p>Didn't find an answer to your question?</p>
    <a href="<?php echo get_site_url(); ?>/clinicians/faq-clin" class="button primary">More support</a>
    </div>
  </div>
</div>
