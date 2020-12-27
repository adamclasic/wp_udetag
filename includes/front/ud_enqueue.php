<?php
function ud_enqueue()
{
  $uri = get_theme_file_uri();
  $ver = DEV_MODE ? time() : false;
  // Css files

  wp_register_style('bootstrap', $uri . '/css/bootstrap.css', [], $ver);
  wp_register_style('file_handle', $uri . '/css/style.css', [], $ver);
  wp_register_style('dark', $uri . '/css/dark.css', [], $ver);
  wp_register_style('font-icons', $uri . '/css/font-icons.css', [], $ver);
  wp_register_style('animate', $uri . '/css/animate.css', [], $ver);
  wp_register_style('magnific-popup', $uri . '/css/magnific-popup.css', [], $ver);
  wp_register_style('custom', $uri . '/css/custom.css', [], $ver);
  wp_register_style('responsive', $uri . '/css/responsive.css', [], $ver);

  wp_enqueue_style('bootstrap');
  wp_enqueue_style('file_handle');
  wp_enqueue_style('dark');
  wp_enqueue_style('font-icons');
  wp_enqueue_style('animate');
  wp_enqueue_style('magnific-popup');
  wp_enqueue_style('custom');
  wp_enqueue_style('responsive');

  // Javascripts files

  wp_register_script('plugins', $uri . '/js/plugins.js', [], $ver, true);
  wp_register_script('functions', $uri . '/js/functions.js', [], $ver, true);

  wp_enqueue_script('plugins');
  wp_enqueue_script('jquery');
  wp_enqueue_script('functions');
}