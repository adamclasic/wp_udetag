<?php
function ud_customizer($wp_customize)
{
  $wp_customize->add_panel('my_panel', [
    'title' => 'Our Custom Panel',
    'description' => '<p>This is a man made panel</p>'
  ]);
  ud_socials($wp_customize);
  ud_top_right_btns($wp_customize);
  ud_footer_pages($wp_customize);
}
