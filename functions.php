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


/***** register menu *****/

add_action('after_setup_theme','theme_one_register_menu');

function theme_one_register_menu(){
	register_nav_menus([
       'primery'=>'Главное меню',
       'footerMenu'=>'Меню в подвале'
	]);
}