<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu')
		)
	);
}
add_action('init', 'register_theme_menus');


// Add stylesheets to theme
function bodoart_theme_styles() {
	wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('raleway_font', 'https://fonts.googleapis.com/css?family=Raleway:300,400,700');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'bodoart_theme_styles');

// Add JavaScript to theme
function bodoart_theme_js() {
	wp_enqueue_script( 'hamburger_js', get_template_directory_uri() . '/js/hamburger.js', array('jquery'), '', true );
	wp_enqueue_script( 'scroll_anchor_js', get_template_directory_uri() . '/js/scroll-anchor.js', array('jquery'), '', true );
}
add_action('wp_enqueue_scripts', 'bodoart_theme_js');

?>