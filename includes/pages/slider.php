<section id="home" class="banner">
  <div id="carousel-top" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-top" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-top" data-slide-to="1"></li>
    </ol>
<div class="carousel-inner" role="listbox">

  <?php
    global $post;
    $args = array( 'post_type' => 'Corporate_Slider',
                    'posts_per_page' => '3'
                  );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
        ?>
   <div class="item ">
    <img src=<?php $thumbnail_src = get_the_post_thumbnail_url(); echo $thumbnail_src ?>  alt="">
    <div class="carousel-caption text-left">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1><?php echo get_post_meta($post->ID, 'corporate_slider_big_text_field', true); ?></h1>
            <h2><?php echo get_post_meta($post->ID, 'corporate_middle_text_field', true); ?></h2>
            <p><?php echo get_post_meta($post->ID, 'corporate_little_text_field', true); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>

        <?php endwhile;?>

</div>

<!-- Controls -->
<a class="left carousel-control" href="#carousel-top" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-top" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
</section>
