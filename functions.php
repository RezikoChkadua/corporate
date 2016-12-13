<?php
require  get_template_directory() .'/includes/post_types_and_metaboxes.php';
require get_template_directory() . '/includes/corporate-theme-supports.php';














// -- enque scripts and styles -->
 function corporate_enqueue_styles_and_scripts(){
      //enque styles
      wp_enqueue_style('bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.css');
      wp_enqueue_style('nexa',get_template_directory_uri() .'/assets/fonts/nexa-stylesheet.css');
      wp_enqueue_style('magnific-popup',get_template_directory_uri() .'/assets/css/magnific-popup.css');
      wp_enqueue_style('jquery.reject',get_template_directory_uri() .'/assets/css/jquery.reject.css');
      wp_enqueue_style('styles',get_template_directory_uri() .'/assets/css/styles.css');
     
     
     
     // enqueue scripts
      wp_enqueue_script('jquery',get_template_directory_uri() .'/assets/javascripts/jquery-1.11.3.min.js',array(),'1.0.0',true);
      wp_enqueue_script('bootstrap',get_template_directory_uri() .'/assets/javascripts/bootstrap.min.js', array(),'1.0.0',true);
      wp_enqueue_script('jquery.mobile',get_template_directory_uri() .'/assets/javascripts/jquery.mobile.min.js',array(),'1.0.0',true);
      wp_enqueue_script('jquery.reject',get_template_directory_uri() .'/assets/javascripts/jquery.reject.js',array(),'1.0.0',true);
      wp_enqueue_script('smooth-scroll',get_template_directory_uri() .'/assets/javascripts/jquery.smooth-scroll.js',array(),'1.0.0',true);
      wp_enqueue_script('magnific-popup',get_template_directory_uri() .'/assets/javascripts/jquery.magnific-popup.min.js',array(),'1.0.0',true);
      wp_enqueue_script('app',get_template_directory_uri() .'/assets/javascripts/app.js',array(),'1.0.0',true);
 }





add_action( 'wp_enqueue_scripts', 'corporate_enqueue_styles_and_scripts' );
