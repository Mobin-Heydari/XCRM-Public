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

	// For Business v2 landing (/for-buisness/)
	wp_enqueue_style(
		'xcrm-business2-style',
		get_stylesheet_directory_uri() . '/assets/css/xcrm-business2.css',
		[
			'xcrm-design-system',
			'xcrm-home-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	// Legal pages (/privacy-policy/ + /terms/)
	wp_enqueue_style(
		'xcrm-legal-style',
		get_stylesheet_directory_uri() . '/assets/css/xcrm-legal.css',
		[
			'xcrm-design-system',
			'xcrm-home-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);
	wp_enqueue_script(
		'xcrm-legal-js',
		get_stylesheet_directory_uri() . '/assets/js/xcrm-legal.js',
		[ 'xcrm-core-js' ],
		HELLO_ELEMENTOR_CHILD_VERSION,
		true
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );

/**
 * Route /privacy-policy/ and /terms/ to their dedicated templates.
 */
add_filter( 'template_include', 'xcrm_legal_template' );
function xcrm_legal_template( $template ) {
	$uri = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ), PHP_URL_PATH ) : '';
	$uri = untrailingslashit( (string) $uri );

	if ( $uri === '/privacy-policy' || substr( $uri, -15 ) === '/privacy-policy' ) {
		$custom = get_stylesheet_directory() . '/page-xcrm-privacy-policy.php';
		if ( file_exists( $custom ) ) {
			return $custom;
		}
	}

	if ( $uri === '/terms' || substr( $uri, -6 ) === '/terms' ) {
		$custom = get_stylesheet_directory() . '/page-xcrm-terms.php';
		if ( file_exists( $custom ) ) {
			return $custom;
		}
	}

	return $template;
}

/**
 * Force /for-marketers/ to render the For Marketers template
 * even when no WP page exists with that slug.
 */
// add_filter( 'template_include', 'xcrm_for_marketers_template' );
// function xcrm_for_marketers_template( $template ) {
// 	$uri = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ), PHP_URL_PATH ) : '';
// 	$uri = untrailingslashit( (string) $uri );

// 	// Match /for-marketers at site root or in a subdirectory install
// 	if ( $uri === '/for-marketers' || substr( $uri, -14 ) === '/for-marketers' ) {
// 		$custom = get_stylesheet_directory() . '/page-xcrm-for-marketers.php';
// 		if ( file_exists( $custom ) ) {
// 			return $custom;
// 		}
// 	}

// 	return $template;
// }

/**
 * Force /for-business/ to render the For Business template
 * even when no WP page exists with that slug.
 */
// add_filter( 'template_include', 'xcrm_for_business_template' );
// function xcrm_for_business_template( $template ) {
// 	$uri = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ), PHP_URL_PATH ) : '';
// 	$uri = untrailingslashit( (string) $uri );

// 	if ( $uri === '/for-business' || substr( $uri, -13 ) === '/for-business' ) {
// 		$custom = get_stylesheet_directory() . '/page-xcrm-for-business.php';
// 		if ( file_exists( $custom ) ) {
// 			return $custom;
// 		}
// 	}

// 	return $template;
// }

// /**
//  * Force /for-buisness/ to render the For Business v2 template.
//  */
// add_filter( 'template_include', 'xcrm_for_buisness2_template' );
// function xcrm_for_buisness2_template( $template ) {
// 	$uri = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ), PHP_URL_PATH ) : '';
// 	$uri = untrailingslashit( (string) $uri );

// 	if ( $uri === '/for-buisness' || substr( $uri, -13 ) === '/for-buisness' ) {
// 		$custom = get_stylesheet_directory() . '/xcrm-page-for-buisness2.php';
// 		if ( file_exists( $custom ) ) {
// 			return $custom;
// 		}
// 	}

// 	return $template;
// }
