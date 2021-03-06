<?php

function theme_setup() {
  // Menus
  register_nav_menu( 'main', 'Main Menu' );
  register_nav_menu( 'mobile_main', 'Mobile Main Menu' );
  register_nav_menu( 'sub', 'Sub Menu' );
  register_nav_menu( 'individuals', 'Individuals Menu' );
  register_nav_menu( 'clinicians', 'Clinicians Menu' );
  // RSS Feed
  add_theme_support( 'automatic-feed-links' );
  // Thumbnails
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'thumb', 150, 150, true ); // Normal thumbnail size
  add_image_size( 'large-thumb', 300, 300, true ); // Large thumbnail size 
  add_image_size( 'featured-img', 740, 420, true ); // Featured Image size 
  add_image_size( 'background-img', 1400, 700, true ); // Featured Image size 
}
add_action( 'after_setup_theme', 'theme_setup' );

// Enqueue styles
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'main', get_stylesheet_directory_uri().'/css/main.css', false, filemtime( get_stylesheet_directory() . '/style.css' ) );
  wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/style.css', false, filemtime( get_stylesheet_directory() . '/style.css' ) );
}

$loading = '<img src="/wp-content/themes/biocentaur/img/ajax-loader.gif">';

// Enqueue scripts
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
function theme_enqueue_scripts() {

  wp_deregister_script( 'jquery' ); // Deregister to put jQuery into footer
  wp_register_script( 'jquery', get_stylesheet_directory_uri().'/js/jquery.min.js', false, NULL, true );
  
  wp_enqueue_script( 'jquery' ); // Re-register jQuery
  
  wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri().'/js/application.min.js', 'jquery', NULL, true );
  wp_enqueue_script( 'theme-functions', get_stylesheet_directory_uri().'/js/functions.js', 'jquery', NULL , true ); 

  wp_enqueue_script('ajax', get_stylesheet_directory_uri(). '/js/ajax.min.js', 'jquery', NULL, true );
  wp_localize_script('ajax', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
  wp_enqueue_script('ajax');
  
  

}

// Disable Emoji Loading
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Disable WP Embed
function my_deregister_scripts() {
 wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

// Options Page

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true,
		'menu_position'       => 20,
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Settings',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

// Excerpt Length
function excerpt_length($length) {
  return 30;
}
add_filter('excerpt_length', 'excerpt_length');

// Read More after excerpt
function new_excerpt_more($more) {
  global $post;
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Get ID from Page Name
function ID_from_page_name($page_name)
{
	global $wpdb;
	$page_name_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$page_name."'");
	return $page_name_id;
}

// Disable WooCommerce CSS
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// Pagination
function numeric_posts_nav() {
	if( is_singular() )
		return;
	global $wp_query;
	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;
	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );
	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;
	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}
	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}
	echo '<div class="pagination"><ul>' . "\n";
	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li class="prev">%s</li>' . "\n", get_previous_posts_link('< Previous Page') );
	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}
	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}
	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";
		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}
	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li class="next">%s</li>' . "\n", get_next_posts_link('Next Page >') );
	echo '</ul></div>' . "\n";
}
// This stuff fixes the pagination issue with custom posts. 
function remove_page_from_query_string($query_string)
{ 
    if ($query_string['name'] == 'page' && isset($query_string['page'])) {
        unset($query_string['name']);
        // 'page' in the query_string looks like '/2', so i'm spliting it out
        list($delim, $page_index) = split('/', $query_string['page']);
        $query_string['paged'] = $page_index;
    }      
    return $query_string;
}

// Remove Menu Items 
function remove_menus(){
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'tools.php' );                  //Tools
}
add_action( 'admin_menu', 'remove_menus' );

function custom_post_type() {
  
  // Services Post Type
	$labels = array(
		'name'                => _x( 'Conditions', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Condition', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Conditions', 'text_domain' ),
		'all_items'           => __( 'All Conditions', 'text_domain' ),
		'view_item'           => __( 'View Condition', 'text_domain' ),
		'add_new_item'        => __( 'Add New Condition', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Condition', 'text_domain' ),
		'update_item'         => __( 'Update Condition', 'text_domain' ),
		'search_items'        => __( 'Search Conditions', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Conditions', 'text_domain' ),
		'description'         => __( 'Conditions', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom fields' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'condition', $args );		
	
	// FAQ Post Type
	$labels = array(
		'name'                => _x( 'FAQs', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'FAQ', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'FAQ', 'text_domain' ),
		'all_items'           => __( 'All FAQs', 'text_domain' ),
		'view_item'           => __( 'View FAQ', 'text_domain' ),
		'add_new_item'        => __( 'Add New FAQ', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit FAQ', 'text_domain' ),
		'update_item'         => __( 'Update FAQ', 'text_domain' ),
		'search_items'        => __( 'Search FAQs', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'FAQ', 'text_domain' ),
		'description'         => __( 'Frequently asked questions', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom fields' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 30,
		'menu_icon'           => 'dashicons-admin-comments',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'faq', $args );		

}
// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );

register_taxonomy('question_cat', 'faq', array(
  'hierarchical' => true,
  'labels' => array(
  'name' => _x( 'Categories', 'taxonomy general name' ),
  'singular_name' => _x( 'Category', 'taxonomy singular name' ),
  ),
));
    

// CPT Menu Item

add_filter('nav_menu_css_class', 'current_type_nav_class', 10, 2);
function current_type_nav_class($classes, $item) {
  // Get post_type for this post
  $post_type = get_query_var('post_type');

  // Go to Menus and add a menu class named: {custom-post-type}-menu-item
  // This adds a 'current_page_parent' class to the parent menu item
  if( in_array( $post_type.'-menu-item', $classes ) )
      array_push($classes, 'current_page_parent');

  return $classes;
}

class childNav extends Walker_page {
  public function start_el(&$output, $page, $depth = 0, $args = array(), $current_page = 0) {
    if($depth)
        $indent = str_repeat("\t", $depth);
    else
        $indent = '';
    extract($args, EXTR_SKIP);
    $css_class = array('page_item');
    if(!empty($current_page)) {
        $_current_page = get_page( $current_page );
        $children = get_children('post_parent='.$page->ID);
        if(count($children) != 0) {
            $css_class[] = 'hasChildren';
        }
        if(isset($_current_page->ancestors) && in_array($page->ID, (array) $_current_page->ancestors))
            $css_class[] = 'current_page_ancestor';
        if($page->ID == $current_page)
            $css_class[] = 'current_page_item';
        elseif($_current_page && $page->ID == $_current_page->post_parent)
            $css_class[] = 'current_page_parent';
    } elseif($page->ID == get_option('page_for_posts')) {
        $css_class[] = 'current_page_parent';
    }
    $css_class = implode( ' ', apply_filters( 'page_css_class', $css_class, $page, $depth, $args, $current_page ) );
    if($page->ID == $current_page) {
        $output .= $indent .'<li class="' . $css_class . '"><a href="' . get_permalink($page->ID) . '">' . $page->post_title .'</a>';
    } else {
        $output .= $indent .'<li class="' . $css_class . '"><a href="' . get_permalink($page->ID) . '">' . $page->post_title .'</a>';
    }
  }
}

/**
 * This function modifies the main WordPress query to include an array of 
 * post types instead of the default 'post' post type.
 *
 * @param object $query  The original query.
 * @return object $query The amended query.
 */

// is_tree
function is_tree( $pid ) {      // $pid = The ID of the page we're looking for pages underneath
  global $post;               // load details about this page
	if ( is_page($pid) )
		return TRUE;            // we're at the page or at a sub page
	$anc = get_post_ancestors( $post->ID );
	foreach ( $anc as $ancestor ) {
		if( is_page() && $ancestor == $pid ) {
			return TRUE;
		}
	}
	return FALSE;  // we aren't at the page, and the page is not an ancestor
}

// FAQ Pagination
function posts_navigation( $custom_query = NULL) {
  if ($custom_query !== NULL) {
    global $wp_query;
    $temp_query = $wp_query;
    $wp_query   = NULL;
    $wp_query   = $custom_query;
  }
  the_posts_pagination(
    array(
      'mid_size'  => 2,
      'prev_next' => false,
      'screen_reader_text' => ' ', 
    )
  );
  if ($custom_query !== NULL) {
    $wp_query = NULL;
    $wp_query = $temp_query;
  }
}


// FAQ functions
function the_faq_content( $posts_per_page, $pagination = true ) {
  
  $searchterm = $_REQUEST['faq_searchterm'] ?? "";
  $category = $_REQUEST['category'] ?? false;

  $args = array(
    'post_type' => 'faq',
    'posts_per_page' => $posts_per_page,
  );

  if($searchterm !== "") {
    $args['s'] = $searchterm; 
  }
  if ($category && $category !== 'all') {
    $args['tax_query'] = array(
      array(
        'post_type' => 'faq',
        'taxonomy' => 'question_cat',
        'field'    => 'slug',
        'terms'    => $category,
      ),
    );
  }
  
  $args['post_status'] = 'publish';
  $args['paged'] = $pagination ? get_query_var( 'paged', 1 ) : 1;
  $args['paged'] = $_REQUEST['selected_page'] ?? $args['paged'];
  $args['post_type'] = 'faq';

  $faq_query = new WP_Query( $args ); 

  if ( $faq_query->have_posts() ) : 

      while ( $faq_query->have_posts() ) : $faq_query->the_post(); 
          get_template_part( 'inc/faq' );
      endwhile;

      if ($pagination) {
          // Previous/next page navigation.
          posts_navigation($faq_query);
      }
      
      wp_reset_postdata();
  
  else : 
      echo "<div class='no_results'>Sorry, no FAQs match your search.</div>"; 
  endif;
}

// Add Ajax Functions
add_action("wp_ajax_smart_filter", "smartFilter");
add_action("wp_ajax_nopriv_smart_filter", "smartFilter");

function smartFilter() {
    if ( ! isset( $_REQUEST['smart_filter_nonce'] ) || ! wp_verify_nonce( $_REQUEST['smart_filter_nonce'], 'smart_filter_form' )) {
        exit("No naughty business please");
    }

    $category = $_REQUEST['category'];

    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        the_smarttest_content();
    } else {
        $referer = parse_url($_SERVER["HTTP_REFERER"]);
        $return_url = $referer['scheme'] . '://' . $referer['host'] . $referer['path'] . '?category=' . $category;

        header("Location: ".$return_url);
    }
    die();
}

add_action("wp_ajax_faq_search", "faqSearch");
add_action("wp_ajax_nopriv_faq_search", "faqSearch");

function faqSearch() {
    if ( ! isset( $_REQUEST['faq_search_nonce'] ) || ! wp_verify_nonce( $_REQUEST['faq_search_nonce'], 'faq_search_form' )) {
        exit("No naughty business please");
    }
    $category = $_REQUEST['category'] ?? false;
    $searchterm = $_REQUEST['faq_searchterm'] ?? false;
    $anchor = $_REQUEST['anchor'] ?? false;

    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        if ($_REQUEST['form_id'] === "faq-archive-form") {
            the_faq_content( 10 );
        } else {
            the_faq_content_clinicians( 10 );
        }
    } else {
        $referer = parse_url($_SERVER["HTTP_REFERER"]);
        $query = false;
        if($category) {
            if (!$query) {
                $query = "?";
            }
            $query .= 'category=' . $category;
        }
        if($searchterm) {
            if (!$query) {
                $query = "?";
            } else {
                $query .= "&";
            }
            $query .= 'faq_searchterm=' . $searchterm;
        }

        $return_url = $referer['scheme'] . '://' . $referer['host'] . $referer['path'];
        if ($query) {
            $return_url = $return_url . $query;
        }
        if ($anchor) {
            $return_url = $return_url . '#' . $anchor;
        }

        header("Location: ".$return_url);
    }
    die();
}
?>