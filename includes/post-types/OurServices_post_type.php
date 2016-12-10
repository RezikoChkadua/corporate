<?php


function Corporate_OurServices_post_types() {
  $labels = array(
    'name' 				=> 'OurServices',
    'singular_name' 	=> 'OurServices',
    'menu_name'			=> 'OurServices',
    'name_admin_bar'	=> 'OurServices'
  );

  $args = array(
    'labels'			=> $labels,
    'show_ui'			=> true,
    'show_in_menu'		=> true,
    'capability_type'	=> 'post',
    'hierarchical'		=> false,
    'menu_position'		=> 26,
    'menu_icon'			=> 'OurServices',
    'supports'			=> array('title','thumbnail')
  );

  register_post_type( 'Corporate_our_servic', $args );

}

add_action( 'init', 'Corporate_OurServices_post_types' );
