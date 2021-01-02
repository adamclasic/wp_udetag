<?php
function ud_footer_pages($wp_customize)
{

  //Footer pages start
  $wp_customize->add_setting('footer_page', array(
    'default'   => '0',
  ));

  $wp_customize->add_section('footer_pages', array(
    'title'      => __('Footer Pages', 'mytheme'),
    'priority'   => 30,
    'panel'       => 'my_panel'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_page', array(
    'label'      => __('Footer Page', 'mytheme'),
    'section'    => 'footer_pages',
    'settings'   => 'footer_page',
    'type'       => 'dropdown-pages'
  )));
  //Footer pages end
}