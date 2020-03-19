(function($) {
  $(document).ready(function() {
      var delay = (function() {
          var timer = 0;
          return function(callback, ms) {
              clearTimeout(timer);
              timer = setTimeout(callback, ms);
          };
      })();
      /* ARCHIVE FAQ */
      $("#faq-archive-form .category-buttons input").click(function() {
          faq_ajax($("#faq-archive-form"));
      });

      $("#archive-faq-search").on("keyup search", function() {
          delay(function() {
              faq_ajax($("#faq-archive-form"));
          }, 500);
      });

      $("#faq-archive-form").submit(function(e) {
          e.preventDefault();
          faq_ajax($("#faq-archive-form"));
      });

      /* FOOTER FAQ */

      $("#footer-faq-search").on("keyup search", function() {
          delay(function() {
              faq_ajax($("#footer-faq-form"));
          }, 500);
      });

      $("#footer-faq-form").submit(function(e) {
          e.preventDefault();
          faq_ajax($("#footer-faq-form"));
      });

      /* TESTS ARCHIVE */
      $("#test-archive-submit").hide();
      $(".test-category-select").click(function() {
          tests_ajax();
      });

      /* PAGINATION */
      function pagination_ajax() {
          $("#faq-archive-content .pagination a").click(function(e) {
              e.preventDefault();
              var $page_no = $(this).html();
              faq_ajax($("#faq-archive-form"), $page_no);
          });
          $("#tests-archive-content .pagination a").click(function(e) {
              e.preventDefault();
              var $page_no = $(this).html();
              tests_ajax($page_no);
          });
      }
      pagination_ajax();

      /* Loading posts content */
      function get_loading_content($loaded_object = "posts") {
          return (
              '<div class="page-content" id="loader">' +
              myAjax.loadingicon +
              "Loading new " +
              $loaded_object +
              "...</div>"
          );
      }

      /* AJAX FUNCTIONS */

      function faq_ajax($form, $page = 1) {
          var $form_data_objs = $form.serializeArray(),
              $form_data = {};
          $.each($form_data_objs, function(i, field) {
              $form_data[field.name] = field.value;
          });
          var $action = $form_data.action,
              $form_id = $form_data.form_id,
              $anchor = $form_data.anchor,
              $nonce = $form_data.faq_search_nonce,
              $category = $form_data.category,
              $searchterm = $form_data.faq_searchterm,
              $content = $("#" + $form_data.content_area_id);

          $.ajax({
              type: "post",
              url: myAjax.ajaxurl,
              data: {
                  action: $action,
                  faq_search_nonce: $nonce,
                  category: $category,
                  faq_searchterm: $searchterm,
                  anchor: $anchor,
                  form_id: $form_id,
                  selected_page: $page
              },
              beforeSend: function() {
                  $content.empty();
                  $content.append(get_loading_content("questions"));
              },
              success: function(html) {
                  var accordion = function() {
                      $(this)
                          .next()
                          .slideToggle("fast");
                      $(this).toggleClass("border");
                      $(this)
                          .find("svg")
                          .toggleClass("rotated");
                  };
                  $content.empty();
                  $content.append(html);
                  $(".accordion")
                      .find(".accordion-content")
                      .hide();
                  $(".accordion")
                      .find(".accordion-toggle")
                      .click(accordion);
              },
              complete: function() {
                  pagination_ajax();
              }
          });
      }
      function tests_ajax($page = 1) {
          var $form_data_objs = $("#test-archive-form").serializeArray(),
              $form_data = {};
          $.each($form_data_objs, function(i, field) {
              $form_data[field.name] = field.value;
          });
          var $action = $form_data.action,
              $nonce = $form_data.smart_filter_nonce,
              $category = $form_data.category,
              $content = $("#" + $form_data.content_area_id);

          $.ajax({
              type: "post",
              url: myAjax.ajaxurl,
              data: {
                  action: $action,
                  smart_filter_nonce: $nonce,
                  category: $category,
                  selected_page: $page
              },
              beforeSend: function() {
                  $content.empty();
                  $content.append(get_loading_content());
                  $("html, body").animate(
                      {
                          scrollTop:
                              $content.offset().top -
                              $("#masthead").height() -
                              54
                      },
                      "fast"
                  );
              },
              success: function(html) {
                  $content.empty();
                  $content.append(html);
              },
              complete: function() {
                  pagination_ajax();
              }
          });
      }
  });
})(jQuery);
