<?php

	function corporate_contact_us_callback( $post ) {

		$Adress = get_post_meta( $post->ID, 'corporate_Adress_field', true );
    $PhoneNumber = get_post_meta( $post->ID, 'corporate_PhoneNumber_field', true );


		echo '<label for="corporate_Info_field"> Info: </label>';
    echo '<input type="text" id="corporate_Info_field" name="corporate_Info_field" value="' . esc_attr( $Adress ) . '" size="25" / style="margin-bottom:20px;"> <br>';
}


function corporate_add_contact_us_meta_box() {
	add_meta_box( 'contact_us', 'contact_us', 'corporate_contact_us_callback', 'Corporate_contact_us', 'normal' );
}

add_action( 'add_meta_boxes', 'corporate_add_contact_us_meta_box' );


function corporate_contact_us_save($post_id) {

	if ( isset( $_POST[ 'corporate_Info_field' ] ) ) {
		update_post_meta( $post_id, 'corporate_Info_field', sanitize_text_field( $_POST[ 'corporate_Info_field' ] ) );
			}
	}

	add_action('save_post','corporate_contact_us_save');
