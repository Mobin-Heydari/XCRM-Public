<?php
/**
 * Shared site header — used by all xCRM pages.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$xcrm_home    = home_url( '/' );
$xcrm_dash    = 'https://dashboard.xcrmforosh.com/';
$xcrm_is_home = is_front_page();
?>
<header class="hp__header">
	<div class="hp__header-inner">

		<a href="<?php echo esc_url( $xcrm_home ); ?>" class="hp__brand" aria-label="xCRM">
			<span class="hp__brand-icon" aria-hidden="true">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
			</span>
			<span class="hp__brand-text">xCRM</span>
		</a>

		<nav class="hp__nav" aria-label="ناوبری اصلی">
			<?php if ( $xcrm_is_home ) : ?>
				<a href="#why" class="hp__nav-link">چرا xCRM</a>
				<a href="#features" class="hp__nav-link">امکانات</a>
				<a href="#steps" class="hp__nav-link">شروع</a>
				<a href="#cta" class="hp__nav-link">تماس</a>
			<?php else : ?>
				<a href="<?php echo esc_url( $xcrm_home ); ?>" class="hp__nav-link">صفحه اصلی</a>
				<a href="<?php echo esc_url( home_url( '/for-marketers/' ) ); ?>" class="hp__nav-link">برای مارکترها</a>
				<a href="<?php echo esc_url( home_url( '/for-business/' ) ); ?>" class="hp__nav-link">برای کسب‌وکارها</a>
				<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" class="hp__nav-link">حریم خصوصی</a>
			<?php endif; ?>
		</nav>

		<div class="hp__header-actions">
			<button
				id="hp-theme-toggle"
				class="hp__theme-toggle xcrm-focus"
				type="button"
				aria-label="تغییر حالت روشن و تاریک"
				aria-pressed="false"
			>
				<span class="hp__theme-track" aria-hidden="true">
					<span class="hp__theme-thumb">
						<svg class="hp__theme-icon hp__theme-icon--sun" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/></svg>
						<svg class="hp__theme-icon hp__theme-icon--moon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
					</span>
				</span>
			</button>

			<a href="<?php echo esc_url( $xcrm_dash ); ?>" class="hp__btn hp__btn--sm hp__btn--primary">
				ورود
			</a>
		</div>
	</div>
</header>
