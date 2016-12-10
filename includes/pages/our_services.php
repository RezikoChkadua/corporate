
<section id="services" class="services">
<div class="container">
  <div class="row text-center">
    <div class="col-xs-12">
      <h2>Our Services</h2>
    </div>

    <?php

          $args = array( 'post_type' => 'Corporate_our_servic',
                          'posts_per_page' => '3'
                        );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
              ?>

    <div class="col-sm-4 col-xs-12 service-box">
      <div class="service-box-image">
        <img src=<?php $thumbnail_src = get_the_post_thumbnail_url($iD); echo $thumbnail_src ?>>
      </div>
      <div class="service-box-content">
        <h4><?php echo get_post_meta($post->ID, 'corporate_OurServices_Title_field', true); ?></h4>
        <p><?php echo get_post_meta($post->ID, 'corporate_OurServices_Text_field', true); ?></p>
      </div>
    </div>

  <?php endwhile;?>
</div>
</div>
</section>
