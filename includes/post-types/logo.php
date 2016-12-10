<?php

function Corporate_Logo_custom_post_types() {
	$labels = array(
		'name' 				=> 'Logo',
		'singular_name' 	=> 'Logo',
		'menu_name'			=> 'Logo',
		'name_admin_bar'	=> 'Logo'
	);

	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'hierarchical'		=> false,
		'menu_position'		=> 26,
		'menu_icon'			=> 'OurTeam',
		'supports'			=> array('title','thumbnail')
	);

	register_post_type( 'Corporate_Logo', $args );

}

add_action('init','Corporate_Logo_custom_post_types');
