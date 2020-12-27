<?php
// setup


// includes
include(get_theme_file_path('/includes/front/ud_enqueue.php'));

// hooks
add_action('wp_enqueue_scripts', 'ud_enqueue');

//shortcodes