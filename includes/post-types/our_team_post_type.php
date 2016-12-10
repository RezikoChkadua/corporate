<?php

function Corporate_OurTeam_custom_post_types() {
	$labels = array(
		'name' 				=> 'Our Team',
		'singular_name' 	=> 'OurTeam',
		'menu_name'			=> 'Our Team',
		'name_admin_bar'	=> 'Our Teams'
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

	register_post_type( 'Corporate_OurTeam', $args );

}

add_action('init','Corporate_OurTeam_custom_post_types');
