<?php

//This is a simple shortcode template for Wordpress.
// To use this shortcode, use [ra_display_shortcode_result].

function ra_display_shortcode_template() {
    $message = 'Hello world!'; 
  
    return $message;
}
add_shortcode('ra_display_shortcode_result', 'ra_display_shortcode_template');