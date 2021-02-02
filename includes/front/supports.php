<?php
function supports()
{
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'custom-logo' );
  add_theme_support( 'woocomerce' );

  register_nav_menu('primary', 'Primary Menu');
  register_nav_menu('secondary', 'Secondary Menu');
}