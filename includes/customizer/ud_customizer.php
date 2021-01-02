<?php
function ud_customizer($wp_customize)
{
  // echo '<pre>';
  // var_dump($wp_customize);
  // echo '<pre/>';
  $wp_customize->get_section('title_tagline')->title = 'General';
  $wp_customize->add_panel('my_panel', [
    'title' => 'Our Custom Panel',
    'description' => '<p>This is a man made panel</p>'
  ]);
  ud_download_cv($wp_customize);
  ud_socials($wp_customize);
  ud_top_right_btns($wp_customize);
  ud_footer_pages($wp_customize);
}
