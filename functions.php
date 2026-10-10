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

	/*
	 * Parent + design system FIRST.
	 * Every section stylesheet depends on the design system so tokens,
	 * cards, utilities and animations are always available.
	 */
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	wp_enqueue_style(
		'xcrm-design-system',
		get_stylesheet_directory_uri() . '/assets/css/xcrm-design-system.css',
		[
			'hello-elementor-child-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	// Core JS (dark mode, reveal, counters, magnetic, tilt, spotlight, parallax)
	wp_enqueue_script(
		'xcrm-core-js',
		get_stylesheet_directory_uri() . '/assets/js/xcrm-core.js',
		[],
		HELLO_ELEMENTOR_CHILD_VERSION,
		true
	);

	// Homepage (front-page.php)
	wp_enqueue_style(
		'xcrm-home-style',
		get_stylesheet_directory_uri() . '/assets/css/xcrm-home.css',
		[
			'xcrm-design-system',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	wp_enqueue_script(
		'xcrm-home-js',
		get_stylesheet_directory_uri() . '/assets/js/xcrm-home.js',
		[
			'xcrm-core-js',
		],
		HELLO_ELEMENTOR_CHILD_VERSION,
		true
	);

	// For Marketers landing (/for-marketers/)
	wp_enqueue_style(
		'xcrm-marketers-style',
		get_stylesheet_directory_uri() . '/assets/css/xcrm-marketers.css',
		[
			'xcrm-design-system',
			'xcrm-home-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	// For Business landing (/for-business/)
	wp_enqueue_style(
		'xcrm-business-style',
		get_stylesheet_directory_uri() . '/assets/css/xcrm-business.css',
		[
			'xcrm-design-system',
			'xcrm-home-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );

/**
 * Force /for-marketers/ to render the For Marketers template
 * even when no WP page exists with that slug.
 */
add_filter( 'template_include', 'xcrm_for_marketers_template' );
function xcrm_for_marketers_template( $template ) {
	$uri = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ), PHP_URL_PATH ) : '';
	$uri = untrailingslashit( (string) $uri );

	// Match /for-marketers at site root or in a subdirectory install
	if ( $uri === '/for-marketers' || substr( $uri, -14 ) === '/for-marketers' ) {
		$custom = get_stylesheet_directory() . '/page-xcrm-for-marketers.php';
		if ( file_exists( $custom ) ) {
			return $custom;
		}
	}

	return $template;
}

/**
 * Force /for-business/ to render the For Business template
 * even when no WP page exists with that slug.
 */
add_filter( 'template_include', 'xcrm_for_business_template' );
function xcrm_for_business_template( $template ) {
	$uri = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ), PHP_URL_PATH ) : '';
	$uri = untrailingslashit( (string) $uri );

	if ( $uri === '/for-business' || substr( $uri, -13 ) === '/for-business' ) {
		$custom = get_stylesheet_directory() . '/page-xcrm-for-business.php';
		if ( file_exists( $custom ) ) {
			return $custom;
		}
	}

	return $template;
}
