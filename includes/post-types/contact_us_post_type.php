<?php

function Corporate_contact_us_post_types() {
  $labels = array(
    'name' 				=> 'New Field',
    'singular_name' 	=> 'Contact_Us',
    'menu_name'			=> 'Contact Us',
    'name_admin_bar'	=> 'Contact_Us'
  );

  $args = array(
    'labels'  			  => $labels,
    'show_ui'			    => true,
    'show_in_menu'		=> true,
    'capability_type'	=> 'post',
    'hierarchical'		=> false,
    'menu_position'		=> 26,
    'menu_icon'			  => 'New Field',
    'supports'			  => array('title','thumbnail','thumbnail')
  );

  register_post_type( 'corporate_contact_us', $args );

}

add_action( 'init', 'Corporate_contact_us_post_types' );
