<?php

//This is a simple shortcode template for Wordpress.
//To show the shortcode result, use [ra_display_shortcode_result] in a page or compatible field.

function ra_display_shortcode_template() {
    $message = 'Hello world!'; 
  
    return $message;
}
add_shortcode('ra_display_shortcode_result', 'ra_display_shortcode_template');