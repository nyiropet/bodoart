<?php

add_theme_support('menus');

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
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'bodoart_theme_styles');

// Add JavaScript to theme
// function bodoart_theme_js() {
// 	wp_enqueue_scripts('main_js', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );
// }
// add_action('wp_enqueue_scripts', 'bodoart_theme_js');

?>