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

/*
 * Feature registry (single source of truth) is loaded globally so the shared
 * header/footer can render the Features mega menu and sidebar on EVERY page.
 * require_once keeps this idempotent — feature templates may also load it.
 */
require_once get_stylesheet_directory() . '/inc/features-data.php';

/**
 * Force RTL document direction on every page.
 *
 * The WP locale is en-US, so language_attributes() omits dir — but the whole
 * design (header, mega menu, off-canvas sidebar, page wrappers) assumes RTL.
 * The shared header sits outside the per-page RTL wrappers (.hp / .fm / .xcrm-b2),
 * so without dir="rtl" on <html> it renders LTR on landing pages.
 * The guard avoids a duplicate attribute if the locale ever outputs dir itself.
 */
add_filter( 'language_attributes', 'xcrm_language_attributes_rtl' );
function xcrm_language_attributes_rtl( $output ) {
	if ( false === stripos( (string) $output, 'dir=' ) ) {
		$output .= ' dir="rtl"';
	}
	return $output;
}

/**
 * Serve a routed custom template with a real 200 status.
 *
 * Routes like /features/ and /privacy-policy/ have no matching WP page, so the
 * main query is 404 even though our template renders the full page. Clear the
 * 404 state before the template loads so the response is indexable and the
 * document title is not "Page not found".
 *
 * @param string|null $custom Path to the custom template, or null.
 * @return string|null
 */
function xcrm_serve_custom_template( $custom ) {
	if ( file_exists( $custom ) ) {
		global $wp_query;
		if ( $wp_query instanceof WP_Query && ! empty( $wp_query->is_404 ) ) {
			$wp_query->is_404 = false;
			status_header( 200 );
		}
		return $custom;
	}
	return null;
}

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

	// Shared navigation (desktop Features mega menu + mobile off-canvas sidebar).
	wp_enqueue_script(
		'xcrm-nav-js',
		get_stylesheet_directory_uri() . '/assets/js/xcrm-nav.js',
		[ 'xcrm-core-js' ],
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

	// For Business landing (/for-business/) + v2 (/for-buisness/) — shared stylesheet
	wp_enqueue_style(
		'xcrm-business-style',
		get_stylesheet_directory_uri() . '/assets/css/xcrm-business.css',
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

	// Features (/features/ directory + /features/<slug>/ detail pages)
	wp_enqueue_style(
		'xcrm-features-style',
		get_stylesheet_directory_uri() . '/assets/css/xcrm-features.css',
		[
			'xcrm-design-system',
			'xcrm-home-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
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
		$served = xcrm_serve_custom_template( get_stylesheet_directory() . '/page-xcrm-privacy-policy.php' );
		if ( null !== $served ) {
			return $served;
		}
	}

	if ( $uri === '/terms' || substr( $uri, -6 ) === '/terms' ) {
		$served = xcrm_serve_custom_template( get_stylesheet_directory() . '/page-xcrm-terms.php' );
		if ( null !== $served ) {
			return $served;
		}
	}

	return $template;
}

/**
 * Route /features/ and /features/<built-slug>/ to their templates.
 * Unknown slugs fall through to the normal 404 template.
 */
add_filter( 'template_include', 'xcrm_features_template' );
function xcrm_features_template( $template ) {
	$uri = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ), PHP_URL_PATH ) : '';
	$uri = untrailingslashit( (string) $uri );

	// Detail pages — most specific match first.
	$detail_routes = array(
		'/features/customer-management' => '/page-xcrm-feature-customer-management.php',
		'/features/website-tracking'    => '/page-xcrm-feature-website-tracking.php',
		'/features/analytics'           => '/page-xcrm-feature-analytics.php',
		'/features/segmentation'        => '/page-xcrm-feature-segmentation.php',
		'/features/sales-pipeline'      => '/page-xcrm-feature-sales-pipeline.php',
		'/features/automation'          => '/page-xcrm-feature-automation.php',
		'/features/communication'       => '/page-xcrm-feature-communication.php',
		'/features/workflow-automation' => '/page-xcrm-feature-workflow-automation.php',
		'/features/templates'           => '/page-xcrm-feature-templates.php',
		'/features/team-management'     => '/page-xcrm-feature-team-management.php',
		'/features/revenue-attribution' => '/page-xcrm-feature-revenue-attribution.php',
		'/features/identity-resolution' => '/page-xcrm-feature-identity-resolution.php',
		'/features/event-management'    => '/page-xcrm-feature-event-management.php',
	);

	foreach ( $detail_routes as $route => $file ) {
		if ( $uri === $route || substr( $uri, -strlen( $route ) ) === $route ) {
			$served = xcrm_serve_custom_template( get_stylesheet_directory() . $file );
			if ( null !== $served ) {
				return $served;
			}
		}
	}

	// Directory.
	if ( $uri === '/features' || substr( $uri, -9 ) === '/features' ) {
		$served = xcrm_serve_custom_template( get_stylesheet_directory() . '/page-xcrm-features.php' );
		if ( null !== $served ) {
			return $served;
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
