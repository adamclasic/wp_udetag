<?php
// setup
define('DEV_MODE', True);


// includes
include(get_theme_file_path('/includes/front/ud_enqueue.php'));
include(get_theme_file_path('/includes/front/supports.php'));

// hooks
add_action('wp_enqueue_scripts', 'ud_enqueue');
add_action('after_setup_theme', 'supports');

//shortcodes