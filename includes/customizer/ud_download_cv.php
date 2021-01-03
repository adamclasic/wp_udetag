<?php
function ud_download_cv($wp_customize)
{
  //Download button start
    //settings
  $wp_customize->add_setting('btn_color', array(
    'default'   => '#888',
  ));

  $wp_customize->add_setting('download_link', array(
    'default'   => '',
  ));
    //section

  $wp_customize->add_section('download_cv', array(
    'title'      => __('Download CV', 'mytheme'),
    'priority'   => 30,
    'panel'       => 'my_panel'
  ));
  
    //controlers
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ud_downn_color', array(
    'label'      => __('Download button color', 'mytheme'),
    'section'    => 'download_cv',
    'settings'   => 'btn_color',
  )));

  $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'ud_downn_link', array(
    'label'      => __('Download button link', 'mytheme'),
    'section'    => 'download_cv',
    'settings'   => 'download_link',
  )));
  //Download button end
}
