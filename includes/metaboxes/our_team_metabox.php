<?php


	function corporate_Ourteam_callback( $post ) {

		$streetName = get_post_meta( $post->ID, 'corporate_member_name_field', true );
		$Position = get_post_meta( $post->ID, 'corporate_member_position_field', true );
		$bio = get_post_meta( $post->ID, 'corporate_member_ShortBio_field', true );



		echo '<label for="corporate_member_name_field">Member Name: </label>';
		echo '<input type="text" id="corporate_member_name_field" name="corporate_member_name_field" value="' . esc_attr( $name ) . '" size="25" / style="margin-bottom:20px;"> <br>';

		echo '<label for="corporate_member_position_field"> Member Position: </label>';
		echo '<input type="text" id="corporate_member_position_field" name="corporate_member_position_field" value="' . esc_attr( $Position ) . '" size="25" / style="margin-bottom:20px;"> <br>';

		echo '<label for="corporate_member_ShortBio_field"> Member Short Bio: </label>';
		echo '<input type="text" id="corporate_member_ShortBio_field" name="corporate_member_ShortBio_field" value="' . esc_attr( $bio ) . '"style="width:250px; height:100px; "margin-bottom:20px;"/><br><br>';


}

add_action( 'add_meta_boxes', 'corporate_add_OurTeam_meta_box' );

function corporate_add_OurTeam_meta_box() {
	add_meta_box( 'Contact_Us', 'Contact_Us', 'corporate_Contact_Us_callback', 'Corporate_OurTeam', 'normal' );
}


function corporate_Member_save( $post_id) {

	if ( isset( $_POST[ 'corporate_member_name_field' ] ) ) {
		update_post_meta( $post_id, 'corporate_member_name_field', sanitize_text_field( $_POST[ 'corporate_member_name_field' ] ) );
			}
	if ( isset( $_POST[ 'corporate_member_position_field' ] ) ) {
		update_post_meta(  $post_id, 'corporate_member_position_field', sanitize_text_field( $_POST[ 'corporate_member_position_field' ] ) );
	  	}
	if ( isset( $_POST[ 'corporate_member_ShortBio_field' ] ) ) {
		update_post_meta( $post_id, 'corporate_member_ShortBio_field', sanitize_text_field( $_POST[ 'corporate_member_ShortBio_field' ] ) );
		}
	}



	add_action( 'save_post', 'corporate_Member_save' );
