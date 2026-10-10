<?php
/**
 * Template Name: Question Hero
 * Template Post Type: page
 *
 * تک‌هیرو — سؤال «آیا شما دیجیتال مارکتر هستید؟»
 * مینیمال، تمیز، بدون المان زائد
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'question-hero-page' ); ?>>
<?php wp_body_open(); ?>

<main class="qh">

	<header class="qh__header">
		<div class="qh__header-brand">
			<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
			<span>xCRM</span>
		</div>
		<a href="#" class="qh__login">ورود</a>
	</header>

	<div class="qh__content">
		<h1 class="qh__question">آیا شما دیجیتال مارکتر هستید؟</h1>

		<div class="qh__choices">
			<button class="qh__choice qh__choice--yes" type="button">بله</button>
			<button class="qh__choice qh__choice--no" type="button">خیر</button>
		</div>

		<div class="qh__result"></div>
	</div>

</main>

<?php wp_footer(); ?>
</body>
</html>
