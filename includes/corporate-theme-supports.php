<?php

function corporate_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'corporate_post_thumbnails' );
