<?php
	function corporate_Our_services_meta_box_callback( $post ) {

		$Title = get_post_meta( $post->ID, 'corporate_OurServices_Title_field', true );
		$Text = get_post_meta( $post->ID, 'corporate_OurServices_Text_field', true );



		echo '<label for="corporate_OurServices_Title_field">Title: </label>';
		echo '<input type="text" id="corporate_OurServices_Title_field" name="corporate_OurServices_Title_field" value="' . esc_attr( $Title ) . '" size="25" / style="margin-bottom:20px;"> <br>';

		echo '<label for="corporate_OurServices_Text_field"> Text: </label>';
		echo '<input type="text" id="corporate_OurServices_Text_field" name="corporate_OurServices_Text_field" value="' . esc_attr( $Text ) . '"style="width:250px; height:100px; "margin-bottom:20px;"/><br><br>';



}

add_action( 'add_meta_boxes', 'corporate_add_Our_Services_meta_box' );

function corporate_add_Our_Services_meta_box() {
	add_meta_box( 'Contact_Us', 'Contact_Us', 'corporate_Our_services_meta_box_callback', 'Corporate_our_servic', 'normal' );
}


function corporate_OurServices_save( $post_id) {

	if ( isset( $_POST[ 'corporate_OurServices_Title_field' ] ) ) {
		update_post_meta( $post_id, 'corporate_OurServices_Title_field', sanitize_text_field( $_POST[ 'corporate_OurServices_Title_field' ] ) );
			}
	if ( isset( $_POST[ 'corporate_OurServices_Text_field' ] ) ) {
		update_post_meta(  $post_id, 'corporate_OurServices_Text_field', sanitize_text_field( $_POST[ 'corporate_OurServices_Text_field' ] ) );
	  	}

	}



	add_action( 'save_post', 'corporate_OurServices_save' );
