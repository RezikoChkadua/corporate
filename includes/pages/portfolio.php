
<section id="portfolio" class="portfolio">
  <h2 class="text-center text-blue">PORTFOLIO</h2>
  <div class="portfolio-wrapper">
    <div class="row-fluid clearfix">
<?php
      $args = array( 'post_type' => 'Corporate_Portfolio',
                      'posts_per_page' => '40'
                    );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
          ?>
        <a href=<?php $thumbnail_src = get_the_post_thumbnail_url($iD); echo $thumbnail_src ?>>
          <img src=<?php $thumbnail_src = get_the_post_thumbnail_url($iD); echo $thumbnail_src ?> alt=""></a>
        <?php endwhile;?>
  </div>
    <div class="row-fluid">
      <button type="button" class="btn btn-more">load more</button>
    </div>
  </div>
</section>
