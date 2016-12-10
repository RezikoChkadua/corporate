<header>
  <nav class="navbar">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">


      <?php
          $args = array( 'post_type' => 'Corporate_our_servic',
                         'posts_per_page' => '1'
                    );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
?>
             <img alt="Font 14" src=<?php $thumbnail_src = get_the_post_thumbnail_url($iD);
                                      echo $thumbnail_src ?>>
          <?php endwhile;?>
        </a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right">
          <li><a class="active" href="#home">home</a></li>
          <li><a href="#services">our services</a></li>
          <li><a href="#portfolio">portfolio</a></li>
          <li><a href="#our-team">team</a></li>
          <!-- <li><a href="#blog">blog</a></li> -->
          <li><a href="#contact-us">contact-us</a></li>
        </ul>
        </div>
    </div>
  </nav>
</header>
