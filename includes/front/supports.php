<?php
function supports()
{
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
  
  register_nav_menu('primary', 'Primary Menu');
}