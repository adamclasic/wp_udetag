<?php
function ud_top_right_btns($wp_customize)
{
  
  //header right buttons start
  $wp_customize->add_setting('header_btns', array(
    'default'   => 'yes',
  ));

  $wp_customize->add_section('header_btns', array(
    'title'      => __('Header Buttons', 'mytheme'),
    'priority'   => 30,
    'panel'       => 'my_panel'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header_btns', array(
    'label'      => __('Header Buttons', 'mytheme'),
    'section'    => 'header_btns',
    'settings'   => 'header_btns',
    'type'       => 'checkbox'
  )));
  //header right buttons end
}