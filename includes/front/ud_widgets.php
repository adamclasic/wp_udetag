<?php
function ud_widgets()
{
  
  register_sidebar(array(
    'id' => 'primary',
    'name' => 'Main Sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));
}