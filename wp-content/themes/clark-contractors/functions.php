<?php

// Custom functions to support child theme

function enqueue_custom_sripts() {
    wp_enqueue_script( 'masonry_js', get_stylesheet_directory_uri() . '/js/masonry.pkgd.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'portfolio_stack', get_stylesheet_directory_uri() . '/js/portfolio-stack.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_custom_sripts' );

function hwl_home_pagesize( $query ) {
    if ( is_post_type_archive( 'portfolio' ) ) {
    $query->set( 'posts_per_page', 50 );
    return;
    }
}
add_action( 'pre_get_posts', 'hwl_home_pagesize', 1 );

function span_first_word($title) {
	$words = explode(' ', $title);
	$words[0] = '<span>'.$words[0].'</span>';
	$title = implode(' ', $words);
	return $title;
}
add_filter('the_title', 'span_first_word');

function wpzoom_fix_widgets($old_title) {
    $title = explode(" ", $old_title,2);
    $titleNew = "<span>$title[0]</span> $title[1]";
    return $titleNew;
}
add_filter ('widget_title', 'wpzoom_fix_widgets');

function filter_search($query) {
    if ($query->is_search) {
	$query->set('post_type', array('post', 'portfolio'));
    };
    return $query;
};
add_filter('pre_get_posts', 'filter_search');

?>