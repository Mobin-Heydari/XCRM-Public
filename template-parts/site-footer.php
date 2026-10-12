<?php
/**
 * Shared site footer — used by all xCRM pages.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$xcrm_home = home_url( '/' );
?>
<footer class="hp__footer">
	<div class="hp__section-inner hp__footer-inner">

		<a href="<?php echo esc_url( $xcrm_home ); ?>" class="hp__brand hp__brand--footer" aria-label="xCRM">
			<span class="hp__brand-icon" aria-hidden="true">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
			</span>
			<span class="hp__brand-text">xCRM</span>
		</a>

		<p class="hp__footer-copy">
			&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> xCRM — تمامی حقوق محفوظ است.
		</p>

		<nav class="hp__footer-links" aria-label="پیوندهای کمکی">
			<a href="<?php echo esc_url( home_url( '/for-marketers/' ) ); ?>">برای مارکترها</a>
			<a href="<?php echo esc_url( home_url( '/for-business/' ) ); ?>">برای کسب‌وکارها</a>
			<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">حریم خصوصی</a>
			<a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">شرایط استفاده</a>
		</nav>

	</div>
</footer>
