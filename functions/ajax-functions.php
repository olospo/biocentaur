<?php
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
            the_faq_content( 20 );
        } elseif ($_REQUEST['form_id'] === "footer-faq-form") {
            the_faq_content( 5, false );
        } else {
            rgcc_error("Unrecognised form ID, please try again.");
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