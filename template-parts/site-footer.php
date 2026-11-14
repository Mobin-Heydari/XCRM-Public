<?php
/**
 * Shared site footer — used by all xCRM pages.
 *
 * Multi-column SaaS footer. Feature links come from the shared registry
 * (xcrm_get_footer_features) so navigation never drifts from the registry.
 * Only verified, existing routes are linked — no planned/404 destinations.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$xcrm_home  = home_url( '/' );
$xcrm_logo  = get_stylesheet_directory_uri() . '/assets/image/logo.png';
$xcrm_dash  = 'https://dashboard.xcrmforosh.com/';

$xcrm_f_features   = home_url( '/features/' );
$xcrm_f_n8n        = home_url( '/features/workflow-automation/' );
$xcrm_f_track      = home_url( '/features/website-tracking/' );
$xcrm_f_track_inst = home_url( '/features/website-tracking/#install' );
$xcrm_f_tg         = home_url( '/features/communication/#telegram' );
$xcrm_f_marketers  = home_url( '/for-marketers/' );
$xcrm_f_business   = home_url( '/for-business/' );
$xcrm_f_privacy    = home_url( '/privacy-policy/' );
$xcrm_f_terms      = home_url( '/terms/' );

$xcrm_footer_features = function_exists( 'xcrm_get_footer_features' ) ? xcrm_get_footer_features() : array();
?>
<footer class="hp__footer">
	<div class="hp__section-inner hp__footer-inner">

		<!-- ===== A. Brand ===== -->
		<div class="hp__foot-brand">
			<a href="<?php echo esc_url( $xcrm_home ); ?>" class="hp__brand hp__brand--footer" aria-label="xCRM فروش">
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
			<p class="hp__foot-tagline">از شناخت مشتری تا هوشمندسازی فرایند فروش.</p>
			<p class="hp__foot-desc">
				«xCRM فروش» یک پلتفرم یکپارچه برای مدیریت مشتریان، جمع‌آوری و تحلیل داده‌های رفتاری،
				بخش‌بندی مخاطبان، مدیریت فرایند فروش و اتوماسیون بازاریابی است. با استفاده از داده‌های
				واقعی تعامل کاربران، شناخت دقیق‌تری از مشتریان خود به دست آورید و فرایندهای بازاریابی و
				فروش کسب‌وکار خود را هدفمندتر مدیریت کنید.
			</p>
			<div class="hp__foot-cta">
				<a href="<?php echo esc_url( $xcrm_dash ); ?>" class="hp__btn hp__btn--primary hp__btn--sm">
					شروع استفاده از XCRM
				</a>
				<?php // No verified demo/contact route exists yet — secondary CTA intentionally omitted. ?>
			</div>

			<!-- Trust strip: verified product behaviours only (no fabricated badges/stats). -->
			<ul class="hp__foot-trust" aria-label="نکات اعتماد و امنیت">
				<li>
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
					داده‌ها و دسترسی‌ها در محدودهٔ هر شرکت ایزوله می‌شوند
				</li>
				<li>
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
					کنترل دسترسی نقش‌ها و مجوزها + دامنهٔ کلیدهای API
				</li>
				<li>
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
					کنترل رضایت کاربر پیش از فعال‌سازی ردیابی در SDK
				</li>
			</ul>
			<!--
				Enamad (نماد اعتماد الکترونیکی) trust badge slot:
				no official verification code / logo asset is available in this project,
				so no badge is rendered (a fake badge must never be published).
				To enable: add the official enamad asset under assets/image/ and insert the
				verified verification link/badge markup here.
			-->
		</div>

		<!-- ===== Link columns ===== -->
		<div class="hp__foot-cols">

			<?php if ( $xcrm_footer_features ) : ?>
				<div class="hp__foot-col">
					<h3 class="hp__foot-h">امکانات</h3>
					<ul class="hp__foot-list hp__foot-list--features">
						<?php foreach ( $xcrm_footer_features as $xcrm_ff ) : ?>
							<li>
								<a href="<?php echo esc_url( xcrm_feature_url( $xcrm_ff ) ); ?>">
									<?php echo esc_html( ! empty( $xcrm_ff['nav_title'] ) ? $xcrm_ff['nav_title'] : $xcrm_ff['title'] ); ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
					<a href="<?php echo esc_url( $xcrm_f_features ); ?>" class="hp__foot-all">
						مشاهده همه امکانات
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					</a>
				</div>
			<?php endif; ?>

			<div class="hp__foot-col">
				<h3 class="hp__foot-h">راهکارها</h3>
				<ul class="hp__foot-list">
					<li><a href="<?php echo esc_url( $xcrm_f_marketers ); ?>">برای مارکترها</a></li>
					<li><a href="<?php echo esc_url( $xcrm_f_business ); ?>">برای کسب‌وکارها</a></li>
				</ul>
			</div>

			<div class="hp__foot-col">
				<h3 class="hp__foot-h">یکپارچه‌سازی و توسعه</h3>
				<ul class="hp__foot-list">
					<li><a href="<?php echo esc_url( $xcrm_f_n8n ); ?>">اتوماسیون اختصاصی n8n</a></li>
					<li><a href="<?php echo esc_url( $xcrm_f_tg ); ?>">اتصال تلگرام</a></li>
					<li><a href="<?php echo esc_url( $xcrm_f_track ); ?>">SDK ردیابی وب‌سایت</a></li>
					<li><a href="<?php echo esc_url( $xcrm_f_track_inst ); ?>">وردپرس و نصب SDK</a></li>
				</ul>
			</div>

			<div class="hp__foot-col">
				<h3 class="hp__foot-h">قوانین و حریم خصوصی</h3>
				<ul class="hp__foot-list">
					<li><a href="<?php echo esc_url( $xcrm_f_privacy ); ?>">حریم خصوصی</a></li>
					<li><a href="<?php echo esc_url( $xcrm_f_terms ); ?>">شرایط استفاده</a></li>
				</ul>
			</div>
		</div>

		<!-- ===== Bottom bar ===== -->
		<div class="hp__foot-bottom">
			<p class="hp__footer-copy">
				&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> «xCRM فروش» — تمامی حقوق محفوظ است.
			</p>
			<nav class="hp__footer-links" aria-label="پیوندهای کمکی">
				<a href="<?php echo esc_url( $xcrm_f_privacy ); ?>">حریم خصوصی</a>
				<a href="<?php echo esc_url( $xcrm_f_terms ); ?>">شرایط استفاده</a>
			</nav>
		</div>

	</div>
</footer>
