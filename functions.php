<?php

/***** include scripts for theme name one *****/

add_action('wp_enqueue_scripts','theme_one_register_scripts');

function theme_one_register_scripts(){
  wp_enqueue_style('style',get_stylesheet_uri(),['bootstrap']);
  wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
  wp_enqueue_style('mystyle',get_template_directory_uri().'/css/mystyle.css');
  
  wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',['jquery'],'',true);  
  wp_enqueue_script('myscript',get_template_directory_uri().'/js/myscript.js',null,null,true);  
}

/*****  *****/
