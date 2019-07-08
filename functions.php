<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// add_action( 'wp_head', 'adds_head' );
// function adds_head() {
// 	// wp_enqueue_style( 'bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" );
// //	wp_enqueue_style( 'assets-icons-styles-css', get_theme_file_uri() . '/assets/icons/styles.css' );
// }

// add_action( 'wp_head', 'blog_favicon' );
// function blog_favicon() {
// //	echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_stylesheet_directory_uri() . '/images/favicon.ico" />' . "\n";
// }

// add_action( 'wp_footer', 'adds_footer' );
// function adds_footer() {
// //	wp_enqueue_script( 'example-js', get_theme_file_uri() . '/js/jquery-1.11.3.min.js', true );
// //	wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/5025074fc9.js', true );
// }

// add_action( 'after_setup_theme', 'your_site_wp_setup' );
// function your_site_wp_setup() {
// 	register_nav_menus( array( 'top' => 'Top Menu', ) );
// }

?>
