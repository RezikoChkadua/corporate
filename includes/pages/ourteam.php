<section id="our-team" class="our-team">
  <div class="container">
    <div class="row text-center">
      <div class="col-xs-12">
        <h2>OUR TEAM</h2>
      </div>

                  <?php
                    global $post;
                    $args = array( 'post_type' => 'Corporate_OurTeam',
                                    'posts_per_page' => '4'
                                  );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();

                        ?>
                        <div class="col-sm-3 col-xs-12 team-box">
                           <div class="team-box-image">
                               <img src=<?php $thumbnail_src = get_the_post_thumbnail_url($iD); echo $thumbnail_src ?>  alt="">
                           </div>


                        <div class="team-box-content">
                          <h3>
                              <?php echo get_post_meta($post->ID, 'corporate_member_name_field', true); ?>
                           <span>	<?php echo get_post_meta($post->ID, 'corporate_member_position_field', true); ?></span></h3>
                          <p><?php echo get_post_meta($post->ID, 'corporate_member_ShortBio_field', true); ?></p>
                        </div>
                      </div>
                        <?php endwhile;?>
    </div>
  </div>
</section>
