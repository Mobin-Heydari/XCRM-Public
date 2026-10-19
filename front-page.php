<?php
/**
 * Front Page — xCRM Home
 *
 * صفحه اصلی xCRM — سؤال «آیا شما دیجیتال مارکتر هستید؟»
 * دو مسیر: دیجیتال مارکترها / صاحبان کسب‌وکار
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * Destination links for the two persona buttons.
 * Create WP pages with these slugs (or change the URLs here).
 */
$for_marketers = home_url( '/for-marketers/' );
$for_business  = home_url( '/for-business/' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'hp-page' ); ?>>
<?php wp_body_open(); ?>

<div class="hp">

	<!-- ============ HEADER ============ -->
	<?php get_template_part( 'template-parts/site-header' ); ?>

	<!-- ============ HERO — THE QUESTION ============ -->
	<section class="hp__hero" id="hero" data-spotlight-zone>

		<!-- Animated background layer -->
		<div class="hp__hero-bg" aria-hidden="true">

			<div class="hp__grid-bg xcrm-grid-bg"></div>

			<!-- Gradient blobs (parallax wrappers) -->
			<div class="hp__blob-wrap hp__blob-wrap--1" data-depth="1.4">
				<div class="hp__blob hp__blob--indigo"></div>
			</div>
			<div class="hp__blob-wrap hp__blob-wrap--2" data-depth="1">
				<div class="hp__blob hp__blob--purple"></div>
			</div>
			<div class="hp__blob-wrap hp__blob-wrap--3" data-depth="0.7">
				<div class="hp__blob hp__blob--cyan"></div>
			</div>

			<!-- Orbit rings -->
			<div class="hp__ring hp__ring--1"></div>
			<div class="hp__ring hp__ring--2"></div>
			<div class="hp__ring hp__ring--3"></div>

			<!-- Persona watermark shapes (describe the question) -->
			<div class="hp__persona-shape hp__persona-shape--marketer" data-depth="0.5">
				<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
					<path d="M3 11l18-5v12L3 14v-3z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/>
				</svg>
			</div>
			<div class="hp__persona-shape hp__persona-shape--owner" data-depth="0.5">
				<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
					<path d="M3 9l1-5h16l1 5"/><path d="M3 9v11a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V9"/><path d="M3 9h18"/><path d="M9 21v-6h6v6"/>
				</svg>
			</div>

			<!-- Scattered decorations -->
			<svg class="hp__deco hp__deco--plus hp__deco--1" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 2v14M2 9h14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
			<svg class="hp__deco hp__deco--plus hp__deco--2" width="14" height="14" viewBox="0 0 18 18" fill="none"><path d="M9 2v14M2 9h14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
			<svg class="hp__deco hp__deco--plus hp__deco--3" width="12" height="12" viewBox="0 0 18 18" fill="none"><path d="M9 2v14M2 9h14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
			<svg class="hp__deco hp__deco--diamond hp__deco--4" width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="3" y="3" width="10" height="10" rx="1.5" transform="rotate(45 8 8)" stroke="currentColor" stroke-width="1.2"/></svg>
			<svg class="hp__deco hp__deco--diamond hp__deco--5" width="12" height="12" viewBox="0 0 16 16" fill="none"><rect x="3" y="3" width="10" height="10" rx="1.5" transform="rotate(45 8 8)" stroke="currentColor" stroke-width="1.2"/></svg>
			<span class="hp__dot hp__dot--1"></span>
			<span class="hp__dot hp__dot--2"></span>
			<span class="hp__dot hp__dot--3"></span>
			<span class="hp__dot hp__dot--4"></span>
			<span class="hp__dot hp__dot--5"></span>
			<span class="hp__dot hp__dot--6"></span>

			<!-- Cursor spotlight -->
			<div class="hero-spotlight" data-spotlight></div>
		</div>

		<div class="hp__hero-inner">

			<div class="hp__badge hp-anim hp-anim--1">
				<span class="hp__badge-dot" aria-hidden="true"></span>
				شروع هوشمند برای رشد
			</div>

			<h1 class="hp__title hp-anim hp-anim--2">
				آیا شما <span class="text-gradient-primary">دیجیتال مارکتر</span> هستید؟
			</h1>

			<p class="hp__subtitle hp-anim hp-anim--3">
				مسیر خود را انتخاب کنید. هر مسیر، تجربه‌ای مخصوص به شما می‌سازد —
				از پروفایل مشتری تا کمپین و اتوماسیون.
			</p>

			<!-- Two persona LINKS -->
			<div class="hp__choices hp-anim hp-anim--4">

				<a href="<?php echo esc_url( $for_marketers ); ?>" class="hp__choice hp__choice--marketer" data-tilt data-tilt-max="5">
					<span class="hp__choice-glow" aria-hidden="true"></span>
					<span class="hp__choice-icon" aria-hidden="true">
						<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
					</span>
					<span class="hp__choice-body">
						<span class="hp__choice-title">بله، دیجیتال مارکتر هستم</span>
						<span class="hp__choice-desc">داشبورد حرفه‌ای، سگمنت‌بندی پویا و کمپین‌های چندکاناله برای تیم‌های مارکتینگ.</span>
					</span>
					<span class="hp__choice-cta">
						ورود به مسیر متخصصان
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					</span>
				</a>

				<a href="<?php echo esc_url( $for_business ); ?>" class="hp__choice hp__choice--owner" data-tilt data-tilt-max="5">
					<span class="hp__choice-glow" aria-hidden="true"></span>
					<span class="hp__choice-icon" aria-hidden="true">
						<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l1-5h16l1 5"/><path d="M3 9v11a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V9"/><path d="M9 21v-6h6v6"/></svg>
					</span>
					<span class="hp__choice-body">
						<span class="hp__choice-title">خیر، صاحب کسب‌وکار هستم</span>
						<span class="hp__choice-desc">مشتریانتان را بشناسید، فروش را باز کنید و رشد پایدار را بدون تیم فنی ببینید.</span>
					</span>
					<span class="hp__choice-cta">
						ورود به مسیر کسب‌وکارها
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					</span>
				</a>

			</div>

			<!-- Trust strip -->
			<ul class="hp__trust hp-anim hp-anim--5">
				<li class="hp__trust-item">
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
					۱۴ روز تست رایگان
				</li>
				<li class="hp__trust-item">
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
					بدون کارت اعتباری
				</li>
				<li class="hp__trust-item">
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
					پشتیبانی فارسی
				</li>
			</ul>

		</div>

		<!-- Scroll indicator -->
		<a href="#stats" class="hp__scroll-hint" aria-label="پایین اسکرول کنید">
			<span class="hp__scroll-mouse" aria-hidden="true"><span></span></span>
		</a>
	</section>

	<!-- ============ STATS ============ -->
	<section class="hp__stats" id="stats">
		<div class="hp__section-inner">
			<div class="hp__stats-grid">

				<div class="hp__stat" data-reveal="up">
					<span class="hp__stat-value">
						<span data-count-to="12000" data-count-suffix="+">0</span>
					</span>
					<span class="hp__stat-label">کاربر فعال</span>
				</div>

				<div class="hp__stat" data-reveal="up" data-reveal-delay="80">
					<span class="hp__stat-value">
						<span data-count-to="98" data-count-suffix="%">0</span>
					</span>
					<span class="hp__stat-label">رضایت مشتریان</span>
				</div>

				<div class="hp__stat" data-reveal="up" data-reveal-delay="160">
					<span class="hp__stat-value">
						<span data-count-to="45" data-count-suffix="%">0</span>
					</span>
					<span class="hp__stat-label">افزایش نرخ تبدیل</span>
				</div>

				<div class="hp__stat" data-reveal="up" data-reveal-delay="240">
					<span class="hp__stat-value">
						<span data-count-to="6" data-count-suffix="">0</span>
					</span>
					<span class="hp__stat-label">محصول یکپارچه</span>
				</div>

			</div>
		</div>
	</section>

	<!-- ============ WHY ============ -->
	<section class="hp__why" id="why">
		<div class="hp__section-inner">

			<div class="hp__section-head" data-reveal="up">
				<span class="hp__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
					چرا «xCRM فروش»
				</span>
				<h2 class="hp__section-title">
					همه‌چیز درباره مشتری، <span class="text-gradient-primary">در یک جا</span>
				</h2>
				<p class="hp__section-desc">
					چه مارکتر باشید و چه صاحب کسب‌وکار — «xCRM فروش» رفتار مشتری را به تصمیم تبدیل می‌کند.
				</p>
			</div>

			<div class="hp__why-grid">

				<article class="hp__why-card main-card" data-reveal="up">
					<div class="hp__why-icon hp__why-icon--primary" aria-hidden="true">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
					</div>
					<h3 class="hp__why-title">پروفایل واحد مشتری</h3>
					<p class="hp__why-desc">هر کلیک، پیام و خرید در یک پروفایل زنده جمع می‌شود — نه ده‌ها ابزار پراکنده.</p>
				</article>

				<article class="hp__why-card main-card" data-reveal="up" data-reveal-delay="80">
					<div class="hp__why-icon hp__why-icon--info" aria-hidden="true">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
					</div>
					<h3 class="hp__why-title">تحلیل لحظه‌ای</h3>
					<p class="hp__why-desc">قیف تبدیل، مسیر مشتری و نقاط ریزش را به صورت زنده ببینید و سریع تصمیم بگیرید.</p>
				</article>

				<article class="hp__why-card main-card" data-reveal="up" data-reveal-delay="160">
					<div class="hp__why-icon hp__why-icon--success" aria-hidden="true">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
					</div>
					<h3 class="hp__why-title">اتوماسیون بدون کد</h3>
					<p class="hp__why-desc">سفر مشتری را بصری بسازید. کمپین‌ها با رفتار واقعی راه‌اندازی شوند، نه حدس.</p>
				</article>

				<article class="hp__why-card main-card" data-reveal="up" data-reveal-delay="240">
					<div class="hp__why-icon hp__why-icon--warn" aria-hidden="true">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
					</div>
					<h3 class="hp__why-title">کمپین چندکاناله</h3>
					<p class="hp__why-desc">پیامک، تلگرام، ایمیل و Push — همه از یک داشبورد، همه هماهنگ با هم.</p>
				</article>

				<article class="hp__why-card main-card" data-reveal="up" data-reveal-delay="320">
					<div class="hp__why-icon hp__why-icon--purple" aria-hidden="true">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					</div>
					<h3 class="hp__why-title">سگمنت پویا</h3>
					<p class="hp__why-desc">مخاطبان بر اساس رفتار واقعی دسته‌بندی می‌شوند و خودشان به‌روز می‌مانند.</p>
				</article>

				<article class="hp__why-card main-card" data-reveal="up" data-reveal-delay="400">
					<div class="hp__why-icon hp__why-icon--cyan" aria-hidden="true">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8M16 17H8M10 9H8"/></svg>
					</div>
					<h3 class="hp__why-title">گزارش هوشمند</h3>
					<p class="hp__why-desc">گزارش‌های آماده برای جلسه مدیران و تحلیل عمیق برای تیم مارکتینگ.</p>
				</article>

			</div>
		</div>
	</section>

	<!-- ============ FEATURES TABS ============ -->
	<section class="hp__features" id="features">
		<div class="hp__section-inner">

			<div class="hp__section-head" data-reveal="up">
				<span class="hp__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
					امکانات «xCRM فروش»
				</span>
				<h2 class="hp__section-title">
					شش محصول، <span class="text-gradient-primary">یک پروفایل مشتری.</span>
				</h2>
				<p class="hp__section-desc">
					از هر جایی که مشکل دارید شروع کنید. همه‌چیز به هم متصل است.
				</p>
			</div>

			<div class="hp__tabs-wrap" data-reveal="up" data-reveal-delay="100">

				<div class="hp__tabs" role="tablist" aria-label="امکانات xCRM">

					<button class="hp__tab is-active" data-tab="cdp" role="tab" aria-selected="true" type="button">
						<span class="hp__tab-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
						</span>
						<span class="hp__tab-text">پروفایل مشتری</span>
					</button>

					<button class="hp__tab" data-tab="analytics" role="tab" aria-selected="false" type="button">
						<span class="hp__tab-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
						</span>
						<span class="hp__tab-text">تحلیل رفتار</span>
					</button>

					<button class="hp__tab" data-tab="segment" role="tab" aria-selected="false" type="button">
						<span class="hp__tab-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
						</span>
						<span class="hp__tab-text">سگمنت‌بندی</span>
					</button>

					<button class="hp__tab" data-tab="campaign" role="tab" aria-selected="false" type="button">
						<span class="hp__tab-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg>
						</span>
						<span class="hp__tab-text">کمپین‌ها</span>
					</button>

					<button class="hp__tab" data-tab="automation" role="tab" aria-selected="false" type="button">
						<span class="hp__tab-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
						</span>
						<span class="hp__tab-text">اتوماسیون</span>
					</button>

					<button class="hp__tab" data-tab="channels" role="tab" aria-selected="false" type="button">
						<span class="hp__tab-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
						</span>
						<span class="hp__tab-text">کانال‌ها</span>
					</button>

				</div>

				<div class="hp__panels">

					<div class="hp__panel is-active" data-panel="cdp" role="tabpanel">
						<div class="hp__panel-visual">
							<div class="hp__panel-deco" aria-hidden="true"><span></span><span></span><span></span></div>
							<div class="hp__panel-icon" aria-hidden="true">
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
							</div>
						</div>
						<div class="hp__panel-content">
							<span class="hp__panel-tag">CDP</span>
							<h3 class="hp__panel-title">پروفایل یکپارچه مشتری — نه فقط نام و شماره</h3>
							<p class="hp__panel-desc">xCRM تمام رفتارها، رویدادها و تعاملات مشتری را در یک پروفایل واحد جمع می‌کند تا هر تصمیم، داده‌محور باشد.</p>
							<ul class="hp__panel-list">
								<li>اتصال خودکار به وب‌سایت و اپلیکیشن</li>
								<li>تاریخچه کامل تعاملات در یک خط زمانی</li>
								<li>هوش مصنوعی برای پیشنهاد بعدی</li>
							</ul>
						</div>
					</div>

					<div class="hp__panel" data-panel="analytics" role="tabpanel">
						<div class="hp__panel-visual">
							<div class="hp__panel-deco" aria-hidden="true"><span></span><span></span><span></span></div>
							<div class="hp__panel-icon" aria-hidden="true">
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
							</div>
						</div>
						<div class="hp__panel-content">
							<span class="hp__panel-tag">Analytics</span>
							<h3 class="hp__panel-title">هر رفتار، یک داده قابل‌فهم</h3>
							<p class="hp__panel-desc">رویدادها را جمع کنید و به صورت زنده تحلیل کنید. قیف تبدیل، مسیر مشتری و نقاط ریزش را شفاف ببینید.</p>
							<ul class="hp__panel-list">
								<li>داشبورد لحظه‌ای KPI</li>
								<li>قیف تبدیل چندمرحله‌ای</li>
								<li>گزارش خروجی برای مدیران</li>
							</ul>
						</div>
					</div>

					<div class="hp__panel" data-panel="segment" role="tabpanel">
						<div class="hp__panel-visual">
							<div class="hp__panel-deco" aria-hidden="true"><span></span><span></span><span></span></div>
							<div class="hp__panel-icon" aria-hidden="true">
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
							</div>
						</div>
						<div class="hp__panel-content">
							<span class="hp__panel-tag">Segmentation</span>
							<h3 class="hp__panel-title">سگمنت‌های پویا بر اساس رفتار واقعی</h3>
							<p class="hp__panel-desc">مشتری‌ها را بر اساس کاری که انجام داده‌اند دسته‌بندی کنید — سگمنت‌ها خودشان به‌روز می‌مانند.</p>
							<ul class="hp__panel-list">
								<li>فیلتر رفتاری و دموگرافیک</li>
								<li>سگمنت زنده (Live Segments)</li>
								<li>خروجی آماده کمپین</li>
							</ul>
						</div>
					</div>

					<div class="hp__panel" data-panel="campaign" role="tabpanel">
						<div class="hp__panel-visual">
							<div class="hp__panel-deco" aria-hidden="true"><span></span><span></span><span></span></div>
							<div class="hp__panel-icon" aria-hidden="true">
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg>
							</div>
						</div>
						<div class="hp__panel-content">
							<span class="hp__panel-tag">Campaigns</span>
							<h3 class="hp__panel-title">کمپین‌های هدفمند، درست در زمان مناسب</h3>
							<p class="hp__panel-desc">کمپین‌های پیامکی، تلگرامی، ایمیلی و Push را بر اساس رفتار مشتری اجرا کنید و نتیجه را بلافاصله بسنجید.</p>
							<ul class="hp__panel-list">
								<li>صفحه‌ساز کمپین drag &amp; drop</li>
								<li>زمان‌بندی هوشمند ارسال</li>
								<li>A/B تست پیام و کانال</li>
							</ul>
						</div>
					</div>

					<div class="hp__panel" data-panel="automation" role="tabpanel">
						<div class="hp__panel-visual">
							<div class="hp__panel-deco" aria-hidden="true"><span></span><span></span><span></span></div>
							<div class="hp__panel-icon" aria-hidden="true">
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
							</div>
						</div>
						<div class="hp__panel-content">
							<span class="hp__panel-tag">Automation</span>
							<h3 class="hp__panel-title">رفتار مشتری را به Workflow تبدیل کن</h3>
							<p class="hp__panel-desc">سفر مشتری را به صورت بصری بسازید. بدون کدنویسی، بدون تیم فنی — فقط منطق کسب‌وکار شما.</p>
							<ul class="hp__panel-list">
								<li>تریگرهای رفتاری و رویدادی</li>
								<li>گره‌های شرطی و تاخیر</li>
								<li>نظرسنجی و ردیابی نتیجه هر مسیر</li>
							</ul>
						</div>
					</div>

					<div class="hp__panel" data-panel="channels" role="tabpanel">
						<div class="hp__panel-visual">
							<div class="hp__panel-deco" aria-hidden="true"><span></span><span></span><span></span></div>
							<div class="hp__panel-icon" aria-hidden="true">
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
							</div>
						</div>
						<div class="hp__panel-content">
							<span class="hp__panel-tag">Channels</span>
							<h3 class="hp__panel-title">از هر کانالی به مشتری برس</h3>
							<p class="hp__panel-desc">پیام درست را در کانال درست تحویل بده. همه کانال‌ها از یک هویت و یک تقویم کار می‌کنند.</p>
							<ul class="hp__panel-list">
								<li>پیامک، تلگرام، ایمیل، Push و وب‌چت</li>
								<li>قالب‌های آماده فارسی</li>
								<li>گزارش تحویل و نرخ باز شدن</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- ============ HOW IT WORKS ============ -->
	<section class="hp__steps" id="steps">
		<div class="hp__section-inner">

			<div class="hp__section-head" data-reveal="up">
				<span class="hp__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
					شروع سریع
				</span>
				<h2 class="hp__section-title">
					سه قدم تا <span class="text-gradient-primary">رشد واقعی</span>
				</h2>
			</div>

			<ol class="hp__steps-list">
				<li class="hp__step" data-reveal="up">
					<div class="hp__step-num" aria-hidden="true">۱</div>
					<div class="hp__step-body">
						<h3 class="hp__step-title">متصل شوید</h3>
						<p class="hp__step-desc">وب‌سایت، فروشگاه و کانال‌های ارتباطی را در چند دقیقه به xCRM وصل کنید.</p>
					</div>
				</li>
				<li class="hp__step" data-reveal="up" data-reveal-delay="120">
					<div class="hp__step-num" aria-hidden="true">۲</div>
					<div class="hp__step-body">
						<h3 class="hp__step-title">مشتری را بشناسید</h3>
						<p class="hp__step-desc">پروفایل‌ها ساخته می‌شوند، سگمنت‌ها شکل می‌گیرند و داده‌ها معنی پیدا می‌کنند.</p>
					</div>
				</li>
				<li class="hp__step" data-reveal="up" data-reveal-delay="240">
					<div class="hp__step-num" aria-hidden="true">۳</div>
					<div class="hp__step-body">
						<h3 class="hp__step-title">رشد دهید</h3>
						<p class="hp__step-desc">کمپین و اتوماسیون را روشن کنید و تاثیر را روی نرخ تبدیل و فروش ببینید.</p>
					</div>
				</li>
			</ol>
		</div>
	</section>

	<!-- ============ CTA ============ -->
	<section class="hp__cta" id="cta">
		<div class="hp__section-inner">
			<div class="hp__cta-box brand-surface" data-reveal="scale">

				<div class="hp__cta-deco" aria-hidden="true">
					<div class="hp__cta-orb hp__cta-orb--1"></div>
					<div class="hp__cta-orb hp__cta-orb--2"></div>
				</div>

				<div class="hp__cta-content">
					<h2 class="hp__cta-title">هنوز مردد هستید؟ مسیر خود را انتخاب کنید.</h2>
					<p class="hp__cta-desc">
						فرقی نمی‌کند مارکتر باشید یا صاحب کسب‌وکار —
						دو دقیقه طول می‌کشد تا ببینید xCRM چه می‌تواند برای شما بکند.
					</p>
					<div class="hp__cta-actions">
						<a href="<?php echo esc_url( $for_marketers ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
							مسیر دیجیتال مارکترها
							<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
						</a>
						<a href="<?php echo esc_url( $for_business ); ?>" class="hp__btn hp__btn--ghost" data-magnetic>
							مسیر کسب‌وکارها
							<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ FOOTER ============ -->
	<?php get_template_part( 'template-parts/site-footer' ); ?>

</div>

<?php wp_footer(); ?>
</body>
</html>
