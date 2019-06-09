<?php

function gspottheme_scripts() {
  wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css' );
  
  wp_register_script('jsfile', get_template_directory_uri() . '/index.js', array(), false, true );
	wp_enqueue_script( 'jsfile' );
}

add_action( 'wp_enqueue_scripts', 'gspottheme_scripts' ); //enqueue stylesheet & script

add_theme_support( 'post-thumbnails' ); // add theme support for featured images

function max_title_length( $title ) {
  $max = 55;
  if( strlen( $title ) > $max ) {
  return substr( $title, 0, $max ). " &hellip;";
  } else {
  return $title;
  }
} // limit post title to 60 characters

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 ); // limit excerpt length to no. of words

// function no_wordpress_errors(){
//   return 'Something is wrong!';
// }
// add_filter( 'login_errors', 'no_wordpress_errors' );

add_theme_support( 'custom-logo' );

?>