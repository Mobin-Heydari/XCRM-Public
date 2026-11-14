<?php
/**
 * Shared site header — used by all xCRM pages.
 *
 * Desktop: horizontal navigation with a registry-driven Features mega menu.
 * Mobile (≤960px): burger opens an off-canvas sidebar with a nested
 * features accordion. Both surfaces are fed by xcrm_get_nav_groups().
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$xcrm_home        = home_url( '/' );
$xcrm_dash        = 'https://dashboard.xcrmforosh.com/';
$xcrm_logo        = get_stylesheet_directory_uri() . '/assets/image/logo.png';
$xcrm_is_home     = is_front_page();
$xcrm_features    = home_url( '/features/' );
$xcrm_marketers   = home_url( '/for-marketers/' );
$xcrm_business    = home_url( '/for-business/' );
$xcrm_privacy     = home_url( '/privacy-policy/' );

// Current path for active states. Respect the project's custom
// template_include routing — never rely on get_page_by_path().
$xcrm_uri = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ), PHP_URL_PATH ) : '';
$xcrm_uri = untrailingslashit( (string) $xcrm_uri );

/** True when the current request path matches (or is under) $url. */
$xcrm_is_active = function ( $url ) use ( $xcrm_uri ) {
	$path = untrailingslashit( (string) wp_parse_url( (string) $url, PHP_URL_PATH ) );
	if ( '' === $path || '/' === $path ) {
		return false;
	}
	return ( $xcrm_uri === $path || substr( $xcrm_uri, -strlen( $path ) ) === $path );
};

$xcrm_nav_groups = function_exists( 'xcrm_get_nav_groups' ) ? xcrm_get_nav_groups() : array();

$xcrm_chevron = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>';
?>
<header class="hp__header" id="hp-header">
	<div class="hp__header-inner">

		<a href="<?php echo esc_url( $xcrm_home ); ?>" class="hp__brand" aria-label="xCRM فروش">
			<img
				class="hp__brand-logo"
				src="<?php echo esc_url( $xcrm_logo ); ?>"
				width="36"
				height="36"
				alt="لوگوی xCRM فروش"
				loading="eager"
				decoding="async"
			>
			<span class="hp__brand-text">xCRM فروش</span>
		</a>

		<nav class="hp__nav" aria-label="ناوبری اصلی">
			<a href="<?php echo esc_url( $xcrm_home ); ?>" class="hp__nav-link<?php echo $xcrm_is_home ? ' is-active' : ''; ?>">صفحه اصلی</a>

			<!-- ===== Features mega menu ===== -->
			<div class="hp__mega-wrap">
				<button
					type="button"
					class="hp__nav-link hp__mega-btn"
					id="hp-mega-btn"
					aria-expanded="false"
					aria-controls="hp-mega"
					aria-haspopup="true"
				>
					امکانات
					<?php echo $xcrm_chevron; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG markup. ?>
				</button>

				<div class="hp__mega" id="hp-mega" role="region" aria-label="فهرست امکانات">
					<div class="hp__mega-inner">
						<div class="hp__mega-grid">
							<?php foreach ( $xcrm_nav_groups as $xcrm_group ) : ?>
								<div class="hp__mega-col">
									<h3 class="hp__mega-cat"><?php echo esc_html( $xcrm_group['title'] ); ?></h3>
									<ul class="hp__mega-list">
										<?php foreach ( $xcrm_group['items'] as $xcrm_f ) : ?>
											<?php $xcrm_f_url = xcrm_feature_url( $xcrm_f ); ?>
											<li>
												<a href="<?php echo esc_url( $xcrm_f_url ); ?>" class="hp__mega-item<?php echo $xcrm_is_active( $xcrm_f_url ) ? ' is-active' : ''; ?>">
													<span class="hp__mega-ico" aria-hidden="true">
														<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo $xcrm_f['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG path data from registry. ?></svg>
													</span>
													<span class="hp__mega-text">
														<span class="hp__mega-title"><?php echo esc_html( $xcrm_f['title'] ); ?></span>
														<span class="hp__mega-desc"><?php echo esc_html( $xcrm_f['short'] ); ?></span>
													</span>
												</a>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							<?php endforeach; ?>
						</div>

						<div class="hp__mega-foot">
							<div class="hp__mega-foot-text">
								<strong>تمام امکانات XCRM را کشف کنید</strong>
								<span>از شناخت رفتار مشتریان و تحلیل داده‌ها تا مدیریت فروش و اتوماسیون فرایندهای بازاریابی.</span>
							</div>
							<a href="<?php echo esc_url( $xcrm_features ); ?>" class="hp__btn hp__btn--primary hp__btn--sm">
								مشاهده همه امکانات
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- ===== /Features mega menu ===== -->

			<a href="<?php echo esc_url( $xcrm_marketers ); ?>" class="hp__nav-link<?php echo $xcrm_is_active( $xcrm_marketers ) ? ' is-active' : ''; ?>">برای مارکترها</a>
			<a href="<?php echo esc_url( $xcrm_business ); ?>" class="hp__nav-link<?php echo $xcrm_is_active( $xcrm_business ) ? ' is-active' : ''; ?>">برای کسب‌وکارها</a>
			<a href="<?php echo esc_url( $xcrm_privacy ); ?>" class="hp__nav-link<?php echo $xcrm_is_active( $xcrm_privacy ) ? ' is-active' : ''; ?>">حریم خصوصی</a>
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

			<button
				id="hp-burger"
				class="hp__burger xcrm-focus"
				type="button"
				aria-label="باز کردن منو"
				aria-expanded="false"
				aria-controls="hp-sidebar"
			>
				<span class="hp__burger-bars" aria-hidden="true"><i></i><i></i><i></i></span>
			</button>
		</div>
	</div>
</header>

<!-- ===== Mobile off-canvas sidebar ===== -->
<div class="hp__backdrop" id="hp-backdrop" hidden></div>

<aside class="hp__sidebar" id="hp-sidebar" aria-label="منوی موبایل" aria-hidden="true">
	<div class="hp__sidebar-head">
		<a href="<?php echo esc_url( $xcrm_home ); ?>" class="hp__brand" aria-label="xCRM فروش">
			<img
				class="hp__brand-logo"
				src="<?php echo esc_url( $xcrm_logo ); ?>"
				width="34"
				height="34"
				alt="لوگوی xCRM فروش"
				loading="lazy"
				decoding="async"
			>
			<span class="hp__brand-text">xCRM فروش</span>
		</a>
		<button type="button" class="hp__sidebar-close xcrm-focus" id="hp-sidebar-close" aria-label="بستن منو">
			<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
		</button>
	</div>

	<nav class="hp__sidebar-nav" aria-label="ناوبری موبایل">
		<a href="<?php echo esc_url( $xcrm_home ); ?>" class="hp__sidebar-link">خانه</a>

		<!-- Features accordion -->
		<div class="hp__acc">
			<button type="button" class="hp__acc-btn" id="hp-acc-btn" aria-expanded="false" aria-controls="hp-acc-panel">
				<span>امکانات</span>
				<?php echo $xcrm_chevron; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG markup. ?>
			</button>
			<div class="hp__acc-panel" id="hp-acc-panel" hidden>
				<?php foreach ( $xcrm_nav_groups as $xcrm_gkey => $xcrm_group ) : ?>
					<?php $xcrm_acc_id = 'hp-acc-' . $xcrm_group['key']; ?>
					<div class="hp__acc-group">
						<button type="button" class="hp__acc-sub" aria-expanded="false" aria-controls="<?php echo esc_attr( $xcrm_acc_id ); ?>">
							<span><?php echo esc_html( $xcrm_group['title'] ); ?></span>
							<?php echo $xcrm_chevron; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG markup. ?>
						</button>
						<div class="hp__acc-subpanel" id="<?php echo esc_attr( $xcrm_acc_id ); ?>" hidden>
							<?php foreach ( $xcrm_group['items'] as $xcrm_f ) : ?>
								<?php $xcrm_f_url = xcrm_feature_url( $xcrm_f ); ?>
								<a href="<?php echo esc_url( $xcrm_f_url ); ?>" class="hp__acc-link<?php echo $xcrm_is_active( $xcrm_f_url ) ? ' is-active' : ''; ?>">
									<?php echo $xcrm_f['icon'] ? '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">' . $xcrm_f['icon'] . '</svg>' : ''; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG path data from registry. ?>
									<span><?php echo esc_html( $xcrm_f['title'] ); ?></span>
								</a>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<a href="<?php echo esc_url( $xcrm_marketers ); ?>" class="hp__sidebar-link">برای مارکترها</a>
		<a href="<?php echo esc_url( $xcrm_business ); ?>" class="hp__sidebar-link">برای کسب‌وکارها</a>
		<a href="<?php echo esc_url( $xcrm_privacy ); ?>" class="hp__sidebar-link">حریم خصوصی</a>
		<a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>" class="hp__sidebar-link">شرایط استفاده</a>
	</nav>

	<div class="hp__sidebar-cta">
		<a href="<?php echo esc_url( $xcrm_dash ); ?>" class="hp__btn hp__btn--ghost">ورود</a>
		<a href="<?php echo esc_url( $xcrm_dash ); ?>" class="hp__btn hp__btn--primary">شروع رایگان</a>
	</div>
</aside>
<!-- ===== /Mobile off-canvas sidebar ===== -->
