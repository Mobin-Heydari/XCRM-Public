<?php
/**
 * Theme functions and definitions.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	// Iceberg Landing
	wp_enqueue_style(
		'iceberg-style',
		get_stylesheet_directory_uri() . '/assets/css/iceberg.css',
		[
			'hello-elementor-child-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	wp_enqueue_style(
		'features-tabs-style',
		get_stylesheet_directory_uri() . '/assets/css/features-tabs.css',
		[
			'hello-elementor-child-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	wp_enqueue_script(
		'features-tabs-js',
		get_stylesheet_directory_uri() . '/assets/js/features-tabs.js',
		[],
		HELLO_ELEMENTOR_CHILD_VERSION,
		true
	);

	wp_enqueue_style(
		'audience-style',
		get_stylesheet_directory_uri() . '/assets/css/audience.css',
		[
			'hello-elementor-child-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	wp_enqueue_script(
		'audience-js',
		get_stylesheet_directory_uri() . '/assets/js/audience.js',
		[],
		HELLO_ELEMENTOR_CHILD_VERSION,
		true
	);

	wp_enqueue_style(
		'data-visual-style',
		get_stylesheet_directory_uri() . '/assets/css/data-visual.css',
		[
			'hello-elementor-child-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	wp_enqueue_script(
		'data-visual-js',
		get_stylesheet_directory_uri() . '/assets/js/data-visual.js',
		[],
		HELLO_ELEMENTOR_CHILD_VERSION,
		true
	);

	wp_enqueue_style(
		'testimonials-style',
		get_stylesheet_directory_uri() . '/assets/css/testimonials.css',
		[
			'hello-elementor-child-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	wp_enqueue_script(
		'testimonials-js',
		get_stylesheet_directory_uri() . '/assets/js/testimonials.js',
		[],
		HELLO_ELEMENTOR_CHILD_VERSION,
		true
	);

	// Footer
	wp_enqueue_style(
		'xcrm-footer-style',
		get_stylesheet_directory_uri() . '/assets/css/xcrm-footer.css',
		[
			'hello-elementor-child-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	// Question Hero
	wp_enqueue_style(
		'question-hero-style',
		get_stylesheet_directory_uri() . '/assets/css/question-hero.css',
		[
			'hello-elementor-child-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	wp_enqueue_script(
		'question-hero-js',
		get_stylesheet_directory_uri() . '/assets/js/question-hero.js',
		[],
		HELLO_ELEMENTOR_CHILD_VERSION,
		true
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );
