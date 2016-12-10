<?php

function Corporate_portfolio_us_post_types() {
  $labels = array(
    'name' 				=> 'Portfolio',
    'singular_name' 	=> 'Portfolio',
    'menu_name'			=> 'Portfolio',
    'name_admin_bar'	=> 'Portfolio'
  );

  $args = array(
    'labels'			=> $labels,
    'show_ui'			=> true,
    'show_in_menu'		=> true,
    'capability_type'	=> 'post',
    'hierarchical'		=> false,
    'menu_position'		=> 26,
    'menu_icon'			=> 'Add New Item',
    'supports'			=> array('title','thumbnail')
  );

  register_post_type( 'Corporate_Portfolio', $args );

}

add_action( 'init', 'Corporate_portfolio_us_post_types' );
