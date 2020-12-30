<?php
// setup
define('DEV_MODE', True);

// includes
include(get_theme_file_path('/includes/front/ud_enqueue.php'));
include(get_theme_file_path('/includes/front/supports.php'));
include(get_theme_file_path('/includes/front/ud_widgets.php'));
// include(get_theme_file_path('/includes/front/class-wp-bootstrap-navwalker.php'));
function ftf() {
	return 5;
}
// hooks
add_action('wp_enqueue_scripts', 'ud_enqueue');
add_action('after_setup_theme', 'supports');
add_action('widgets_init', 'ud_widgets');
apply_filters( 'excerpt_length', 'ftf' );
add_theme_support( 'post-thumbnails' );
//shortcodes


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
