<?php


function Corporate_Slider_post_types() {
  $labels = array(
    'name' 				=> 'Slider',
    'singular_name' 	=> 'Slider',
    'menu_name'			=> 'Slider',
    'name_admin_bar'	=> 'Slider'
  );

  $args = array(
    'labels'			=> $labels,
    'show_ui'			=> true,
    'show_in_menu'		=> true,
    'capability_type'	=> 'post',
    'hierarchical'		=> false,
    'menu_position'		=> 26,
    'menu_icon'			=> 'Add Slider Item',
    'supports'			=> array('title','thumbnail')
  );

  register_post_type( 'Corporate_Slider', $args );

}

add_action( 'init', 'Corporate_Slider_post_types' );
