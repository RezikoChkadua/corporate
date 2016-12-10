<?php


	function corporate_slider_callback( $post ) {

		$bigText = get_post_meta( $post->ID, 'corporate_slider_big_text_field', true );
		$MiddleText = get_post_meta( $post->ID, 'corporate_middle_text_field', true );
		$smallText = get_post_meta( $post->ID, 'corporate_little_text_field', true );



		echo '<label for="corporate_slider_big_text_field">Big Text: </label>';
		echo '<input type="text" id="corporate_slider_big_text_field" name="corporate_slider_big_text_field" value="' . esc_attr( $bigText ) . '" size="25" / style="margin-bottom:20px;"> <br>';

		echo '<label for="corporate_middle_text_field"> Middle Text: </label>';
		echo '<input type="text" id="corporate_middle_text_field" name="corporate_middle_text_field" value="' . esc_attr( $MiddleText ) . '" size="25" / style="margin-bottom:20px;"> <br>';

		echo '<label for="corporate_little_text_field"> Small Text: </label>';
		echo '<input type="text" id="corporate_little_text_field" name="corporate_little_text_field" value="' . esc_attr( $smallText ) . '"size="25"/><br><br>';


}

add_action( 'add_meta_boxes', 'corporate_add_slider_meta_box' );

function corporate_add_slider_meta_box() {
	add_meta_box( 'Slider', 'Text', 'corporate_slider_callback', 'Corporate_Slider', 'normal' );
}


function corporate_slider_save( $post_id) {

	if ( isset( $_POST[ 'corporate_slider_big_text_field' ] ) ) {
		update_post_meta( $post_id, 'corporate_slider_big_text_field', sanitize_text_field( $_POST[ 'corporate_slider_big_text_field' ] ) );
			}
	if ( isset( $_POST[ 'corporate_middle_text_field' ] ) ) {
		update_post_meta(  $post_id, 'corporate_middle_text_field', sanitize_text_field( $_POST[ 'corporate_middle_text_field' ] ) );
	  	}
	if ( isset( $_POST[ 'corporate_little_text_field' ] ) ) {
    update_post_meta( $post_id, 'corporate_little_text_field', sanitize_text_field( $_POST[ 'corporate_little_text_field' ] ) );
		}
	}



	add_action( 'save_post', 'corporate_slider_save' );
