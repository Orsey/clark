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

function filter_search($query) {
    if ($query->is_search) {
	$query->set('post_type', array('post', 'portfolio'));
    };
    return $query;
};
add_filter('pre_get_posts', 'filter_search');

// add category nicenames in body and post class
function category_id_class($classes) {
    global $post;
    foreach((get_the_category($post->ID)) as $category)
        $classes[] = $category->category_nicename;
    return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

?>