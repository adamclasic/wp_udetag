<?php
function ud_breakign_news($wp_customize)
{
  //breaking news Start
  $wp_customize->add_setting('breaking_link1', array(
    'default'   => '0',
  ));

  $wp_customize->add_section('breaking_news', array(
    'title'      => __('Breaking news links', 'mytheme'),
    'priority'   => 30,
    'panel'       => 'my_panel'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'breaking_link1', array(
    'label'      => __('Breaking Link 1', 'mytheme'),
    'section'    => 'breaking_news',
    'settings'   => 'breaking_link1',
    'type'      => 'dropdown-pages'
  )));
    // 02
  $wp_customize->add_setting('breaking_link2', array(
    'default'   => '0',
  ));

  $wp_customize->add_section('breaking_news', array(
    'title'      => __('Breaking news links', 'mytheme'),
    'priority'   => 30,
    'panel'       => 'my_panel'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'breaking_link2', array(
    'label'      => __('Breaking Link 2', 'mytheme'),
    'section'    => 'breaking_news',
    'settings'   => 'breaking_link2',
    'type'      => 'dropdown-pages'
  )));
    // 03
  $wp_customize->add_setting('breaking_link3', array(
    'default'   => '0',
  ));

  $wp_customize->add_section('breaking_news', array(
    'title'      => __('Breaking news links', 'mytheme'),
    'priority'   => 30,
    'panel'       => 'my_panel'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'breaking_link3', array(
    'label'      => __('Breaking Link 3', 'mytheme'),
    'section'    => 'breaking_news',
    'settings'   => 'breaking_link3',
    'type'      => 'dropdown-pages'
  )));
  //breaking news end
  }