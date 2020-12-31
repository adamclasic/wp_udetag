<?php
function ud_customizer($wp_customize)
{
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
}