<?php
function ud_enqueue()
{
  $uri = get_theme_file_uri();
  // wp_enqueue_script('file_handle', get_theme_file_path('/css/style.css'));

//   <link
//   href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i"
//   rel="stylesheet" type="text/css" />
// <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
// <link rel="stylesheet" href="css/style.css" type="text/css" />
// <link rel="stylesheet" href="css/dark.css" type="text/css" />
// <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
// <link rel="stylesheet" href="css/animate.css" type="text/css" />
// <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
// <link rel="stylesheet" href="css/custom.css" type="text/css" />

// <link rel="stylesheet" href="css/responsive.css" type="text/css" />

wp_register_style('bootstrap', $uri . '/css/bootstrap.css');
  wp_register_style('file_handle', $uri . '/css/style.css');
  wp_register_style('dark', $uri . '/css/dark.css');
  wp_register_style('font-icons', $uri . '/css/font-icons.css');
  wp_register_style('animate', $uri . '/css/animate.css');
  wp_register_style('magnific-popup', $uri . '/css/magnific-popup.css');
  wp_register_style('custom', $uri . '/css/custom.css');
  wp_register_style('responsive', $uri . '/css/responsive.css');

  wp_enqueue_style('bootstrap');
  wp_enqueue_style('file_handle');
  wp_enqueue_style('dark');
  wp_enqueue_style('font-icons');
  wp_enqueue_style('animate');
  wp_enqueue_style('magnific-popup');
  wp_enqueue_style('custom');
  wp_enqueue_style('responsive');

  // <script src="js/jquery.js"></script>
  // <script src="js/plugins.js"></script>
  // <script src="js/functions.js"></script>

  // wp_register_script('plugins', $uri . '/js/plugins.js');
  wp_register_script('plugins', $uri . '/js/plugins.js', [], false, true);
  // wp_register_script('jquery', $uri . '/js/jquery.js', [], false, true);
  wp_register_script('functions', $uri . '/js/functions.js', [], false, true);

  wp_enqueue_script('plugins');
  wp_enqueue_script('jquery');
  wp_enqueue_script('functions');
}