<?php
function ud_customizer($wp_customize)
{

  //socials start
  $wp_customize->add_setting('facebook', array(
    'default'   => '',
  ));

  $wp_customize->add_section('socials', array(
    'title'      => __('Social Links', 'mytheme'),
    'priority'   => 30,
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'facebook', array(
    'label'      => __('facebook', 'mytheme'),
    'section'    => 'socials',
    'settings'   => 'facebook',
  )));
  
  $wp_customize->add_setting('twitter', array(
    'default'   => '',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'twitter', array(
    'label'      => __('twitter', 'mytheme'),
    'section'    => 'socials',
    'settings'   => 'twitter',
  ))); 
  //socials end

  //header right buttons start
  $wp_customize->add_setting('header_btns', array(
    'default'   => 'yes',
  ));

  $wp_customize->add_section('header_btns', array(
    'title'      => __('Header Buttons', 'mytheme'),
    'priority'   => 30,
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header_btns', array(
    'label'      => __('Header Buttons', 'mytheme'),
    'section'    => 'header_btns',
    'settings'   => 'header_btns',
    'type'       => 'checkbox'
  )));
  //header right buttons end
}