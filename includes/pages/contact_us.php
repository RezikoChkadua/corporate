



		<section id="contact-us" class="contact-us">
				<div class=" text-center">
					<div class="map-wrapper">
					<div id="map"></div>
					</div>
					<h2></h2>
					<ul class="contact-info center-block">

			<?php

			$args = array( 'post_type' => 'Corporate_contact_us',
											'posts_per_page' => '3'
										);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<li><img src= <?php $thumbnail_src = get_the_post_thumbnail_url(); echo $thumbnail_src ?> alt="">	<?php echo get_post_meta($post->ID, 'corporate_Info_field', true); ?></li>
					<?php endwhile;?>
				</ul>
		 </div>
		</section>
