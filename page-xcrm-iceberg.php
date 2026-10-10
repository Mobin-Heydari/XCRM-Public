<?php
/**
 * Template Name: Iceberg Landing
 * Template Post Type: page
 *
 * لندینگ دیجیتال مارکترها — کوه یخ مشتری
 * تمام‌صفحه، مدرن، هدر خالی
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$iceberg_url = get_stylesheet_directory_uri() . '/assets/image/Iceberg.png';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'iceberg-page' ); ?>>
<?php wp_body_open(); ?>

<main class="ic">

	<section class="ic__hero">

		<!-- Full-bleed image -->
		<img
			class="ic__img"
			src="<?php echo esc_url( $iceberg_url ); ?>"
			alt="کوه یخ — از رصد مشتری به درک مشتری"
		>

		<!-- Overlays -->
		<div class="ic__overlay"></div>
		<div class="ic__vignette"></div>

		<!-- Floating particles -->
		<div class="ic__particles" aria-hidden="true">
			<span class="ic__particle"></span>
			<span class="ic__particle"></span>
			<span class="ic__particle"></span>
			<span class="ic__particle"></span>
			<span class="ic__particle"></span>
			<span class="ic__particle"></span>
		</div>

		<!-- Center divider -->
		<div class="ic__divider" aria-hidden="true"></div>

		<!-- Brand — left -->
		<div class="ic__brand">
			<span class="ic__brand-name">xCRM</span>
			<span class="ic__brand-sub">Customer Behavior Platform</span>
		</div>

		<!-- Top-right text -->
		<div class="ic__text-top">
			<span class="ic__line">The Tip of the Iceberg</span>
			<span class="ic__text">از رصد مشتری</span>
		</div>

		<!-- Bottom row -->
		<div class="ic__text-bottom">
			<div class="ic__text-block">
				<span class="ic__line">Below the Surface</span>
				<span class="ic__text">به درک مشتری</span>
			</div>
			<div class="ic__cta">
				<a href="#" class="ic-btn ic-btn--primary">
					شروع کاوش
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="#" class="ic-btn ic-btn--ghost">مشاهده دمو</a>
			</div>
		</div>

		<!-- Scroll indicator -->
		<div class="ic__scroll" aria-hidden="true">
			<span class="ic__scroll-text">Scroll</span>
			<div class="ic__scroll-line"></div>
		</div>

	</section>

	<!-- ============ FEATURES TABS ============ -->
	<section class="ft">

		<div class="ft__bg-glow ft__bg-glow--1" aria-hidden="true"></div>
		<div class="ft__bg-glow ft__bg-glow--2" aria-hidden="true"></div>

		<!-- Header -->
		<div class="ft__inner">
		<div class="ft__header">
			<div class="ft__label">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
				امکانات xCRM
			</div>
			<h2 class="ft__title">
				شش محصول، <span class="ft__title-accent">یک پروفایل مشتری.</span>
			</h2>
			<p class="ft__desc">
				از هر جایی که مشکل دارید شروع کنید. همه‌چیز به هم متصل است.
			</p>
		</div>

		<!-- Tabs -->
		<div class="ft__tabs-wrap">
			<div class="ft__tabs" role="tablist" aria-label="امکانات xCRM">

				<button class="ft__tab is-active" data-tab="cdp" role="tab" aria-selected="true">
					<span class="ft__tab-dot"></span>
					<span class="ft__tab-icon-box">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
					</span>
					<span class="ft__tab-text">
						<span class="ft__tab-fa">پروفایل مشتری</span>
						<span class="ft__tab-en">Customer Data Platform</span>
					</span>
					<svg class="ft__tab-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</button>

				<button class="ft__tab" data-tab="analytics" role="tab" aria-selected="false">
					<span class="ft__tab-dot"></span>
					<span class="ft__tab-icon-box">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
					</span>
					<span class="ft__tab-text">
						<span class="ft__tab-fa">تحلیل رفتار</span>
						<span class="ft__tab-en">Behavioral Analytics</span>
					</span>
					<svg class="ft__tab-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</button>

				<button class="ft__tab" data-tab="segment" role="tab" aria-selected="false">
					<span class="ft__tab-dot"></span>
					<span class="ft__tab-icon-box">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					</span>
					<span class="ft__tab-text">
						<span class="ft__tab-fa">سگمنت‌بندی</span>
						<span class="ft__tab-en">Segmentation</span>
					</span>
					<svg class="ft__tab-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</button>

				<button class="ft__tab" data-tab="campaign" role="tab" aria-selected="false">
					<span class="ft__tab-dot"></span>
					<span class="ft__tab-icon-box">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg>
					</span>
					<span class="ft__tab-text">
						<span class="ft__tab-fa">کمپین‌ها</span>
						<span class="ft__tab-en">Campaigns</span>
					</span>
					<svg class="ft__tab-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</button>

				<button class="ft__tab" data-tab="automation" role="tab" aria-selected="false">
					<span class="ft__tab-dot"></span>
					<span class="ft__tab-icon-box">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
					</span>
					<span class="ft__tab-text">
						<span class="ft__tab-fa">اتوماسیون</span>
						<span class="ft__tab-en">Automation & Workflow</span>
					</span>
					<svg class="ft__tab-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</button>

				<button class="ft__tab" data-tab="channels" role="tab" aria-selected="false">
					<span class="ft__tab-dot"></span>
					<span class="ft__tab-icon-box">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
					</span>
					<span class="ft__tab-text">
						<span class="ft__tab-fa">کانال‌ها</span>
						<span class="ft__tab-en">Multi-Channel</span>
					</span>
					<svg class="ft__tab-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</button>

			</div>

			<!-- Panels -->
			<div class="ft__panels">

				<!-- Panel: CDP -->
				<div class="ft__panel is-active" data-panel="cdp" role="tabpanel">
					<div class="ft__panel-visual">
						<div class="ft__panel-deco"><span></span><span></span><span></span></div>
						<div class="ft__panel-visual-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
						</div>
					</div>
					<div class="ft__panel-content">
						<div class="ft__panel-tag">CDP</div>
						<h3 class="ft__panel-title">پروفایل یکپارچه مشتری — نه فقط نام و شماره</h3>
						<p class="ft__panel-desc">
							xCRM تمام رفتارها، رویدادها و تعاملات مشتری را در یک پروفایل واحد جمع می‌کند.
						</p>
						<a href="#" class="ft__panel-link">
							مشاهده جزئیات
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
						</a>
					</div>
				</div>

				<!-- Panel: Analytics -->
				<div class="ft__panel" data-panel="analytics" role="tabpanel">
					<div class="ft__panel-visual">
						<div class="ft__panel-deco"><span></span><span></span><span></span></div>
						<div class="ft__panel-visual-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
						</div>
					</div>
					<div class="ft__panel-content">
						<div class="ft__panel-tag">Analytics</div>
						<h3 class="ft__panel-title">هر رفتار، یک داده قابل‌فهم</h3>
						<p class="ft__panel-desc">
							رویدادها را جمع کنید و به صورت زنده تحلیل کنید. قیف تبدیل، مسیر مشتری و نقاط ریزش.
						</p>
						<a href="#" class="ft__panel-link">
							مشاهده جزئیات
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
						</a>
					</div>
				</div>

				<!-- Panel: Segmentation -->
				<div class="ft__panel" data-panel="segment" role="tabpanel">
					<div class="ft__panel-visual">
						<div class="ft__panel-deco"><span></span><span></span><span></span></div>
						<div class="ft__panel-visual-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
						</div>
					</div>
					<div class="ft__panel-content">
						<div class="ft__panel-tag">Segmentation</div>
						<h3 class="ft__panel-title">سگمنت‌های پویا بر اساس رفتار واقعی</h3>
						<p class="ft__panel-desc">
							مشتری‌ها را بر اساس کاری که انجام داده‌اند دسته‌بندی کنید.
						</p>
						<a href="#" class="ft__panel-link">
							مشاهده جزئیات
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
						</a>
					</div>
				</div>

				<!-- Panel: Campaigns -->
				<div class="ft__panel" data-panel="campaign" role="tabpanel">
					<div class="ft__panel-visual">
						<div class="ft__panel-deco"><span></span><span></span><span></span></div>
						<div class="ft__panel-visual-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg>
						</div>
					</div>
					<div class="ft__panel-content">
						<div class="ft__panel-tag">Campaigns</div>
						<h3 class="ft__panel-title">کمپین‌های هدفمند، درست در زمان مناسب</h3>
						<p class="ft__panel-desc">
							کمپین‌های پیامکی، تلگرامی، ایمیلی و Push را بر اساس رفتار مشتری اجرا کنید.
						</p>
						<a href="#" class="ft__panel-link">
							مشاهده جزئیات
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
						</a>
					</div>
				</div>

				<!-- Panel: Automation -->
				<div class="ft__panel" data-panel="automation" role="tabpanel">
					<div class="ft__panel-visual">
						<div class="ft__panel-deco"><span></span><span></span><span></span></div>
						<div class="ft__panel-visual-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
						</div>
					</div>
					<div class="ft__panel-content">
						<div class="ft__panel-tag">Automation</div>
						<h3 class="ft__panel-title">رفتار مشتری را به Workflow تبدیل کن</h3>
						<p class="ft__panel-desc">
							سفر مشتری را به صورت بصری بسازید. بدون کدنویسی.
						</p>
						<a href="#" class="ft__panel-link">
							مشاهده جزئیات
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
						</a>
					</div>
				</div>

				<!-- Panel: Channels -->
				<div class="ft__panel" data-panel="channels" role="tabpanel">
					<div class="ft__panel-visual">
						<div class="ft__panel-deco"><span></span><span></span><span></span></div>
						<div class="ft__panel-visual-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
						</div>
					</div>
					<div class="ft__panel-content">
						<div class="ft__panel-tag">Channels</div>
						<h3 class="ft__panel-title">از هر کانالی به مشتری برس</h3>
						<p class="ft__panel-desc">
							پیامک، تلگرام، ایمیل، Push و API — همه در یک پلتفرم.
						</p>
						<a href="#" class="ft__panel-link">
							مشاهده جزئیات
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
						</a>
					</div>
				</div>

			</div>
		</div>
		</div>

	</section>

	<!-- ============ AUDIENCE SECTION ============ -->
	<section class="aud">

		<div class="aud__inner">

			<!-- Header -->
			<div class="aud__header">
				<div class="aud__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
					مخاطبان xCRM
				</div>
				<h2 class="aud__title">
					یک پلتفرم. <span class="aud__title-accent">هر کسب‌وکاری.</span> تأثیر نامحدود.
				</h2>
				<p class="aud__subtitle">از کسب‌وکارهای نوپا تا برندهای بزرگ</p>
			</div>

			<!-- Body -->
			<div class="aud__body">

				<!-- Accordion -->
				<div class="aud__accordion">

					<details class="aud__item" data-item="store" open>
						<summary>
							<div class="aud__item-summary-left">
								<span class="aud__item-number">01</span>
								<span class="aud__item-title">فروشگاه‌های آنلاین</span>
							</div>
							<div class="aud__item-arrow">
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
							</div>
						</summary>
						<div class="aud__item-body">
							<p class="aud__item-desc">
								رفتار خرید را درک کنید، سبدهای رهاشده را بازیابی کنید و فروش را با تحلیل لحظه‌ای افزایش دهید.
							</p>
							<div class="aud__item-tags">
								<span class="aud__tag">WooCommerce</span>
								<span class="aud__tag">بازیابی سبد</span>
								<span class="aud__tag">قیف فروش</span>
							</div>
						</div>
					</details>

					<details class="aud__item" data-item="service">
						<summary>
							<div class="aud__item-summary-left">
								<span class="aud__item-number">02</span>
								<span class="aud__item-title">کسب‌وکارهای خدماتی</span>
							</div>
							<div class="aud__item-arrow">
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
							</div>
						</summary>
						<div class="aud__item-body">
							<p class="aud__item-desc">
								لیدها، نوبت‌دهی و تعاملات مشتری را بشناسید و مسیر فروش را شفاف و خودکار کنید.
							</p>
							<div class="aud__item-tags">
								<span class="aud__tag">پایپ‌لاین فروش</span>
								<span class="aud__tag">یادآوری</span>
							</div>
						</div>
					</details>

					<details class="aud__item" data-item="growth">
						<summary>
							<div class="aud__item-summary-left">
								<span class="aud__item-number">03</span>
								<span class="aud__item-title">کسب‌وکارهای در حال رشد</span>
							</div>
							<div class="aud__item-arrow">
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
							</div>
						</summary>
						<div class="aud__item-body">
							<p class="aud__item-desc">
								داده‌های پراکنده را به یک سیستم بازاریابی تکرارپذیر تبدیل کنید و مقیاس‌پذیر رشد کنید.
							</p>
							<div class="aud__item-tags">
								<span class="aud__tag">اتوماسیون</span>
								<span class="aud__tag">نودهای N8N</span>
								<span class="aud__tag">تحلیل رفتار</span>
							</div>
						</div>
					</details>

				</div>

				<!-- Customer Grid -->
				<div class="aud__grid-wrap">

					<div class="aud__grid-inner is-active" data-grid="store">
						<p class="aud__grid-label">فروشگاه‌های آنلاین</p>
						<h3 class="aud__grid-heading">برندهایی که با xCRM رشد می‌کنند</h3>
						<div class="aud__grid">
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--blue">د</div><span class="aud__card-name">دیجی‌کالا</span></div>
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--slate">ب</div><span class="aud__card-name">باسلام</span></div>
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--indigo">ت</div><span class="aud__card-name">تپسی</span></div>
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--teal">ا</div><span class="aud__card-name">اسنپ‌مارکت</span></div>
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--navy">م</div><span class="aud__card-name">مدیسه</span></div>
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--purple">ز</div><span class="aud__card-name">زنبیل</span></div>
							<a href="#" class="aud__join">
								<span class="aud__join-icon">
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
								</span>
								<span class="aud__join-text">شما هم به مشتریان ما بپیوندید</span>
							</a>
						</div>
					</div>

					<div class="aud__grid-inner" data-grid="service">
						<p class="aud__grid-label">کسب‌وکارهای خدماتی</p>
						<h3 class="aud__grid-heading">برندهایی که با xCRM رشد می‌کنند</h3>
						<div class="aud__grid">
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--blue">آ</div><span class="aud__card-name">آچاره</span></div>
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--slate">س</div><span class="aud__card-name">سنجاق</span></div>
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--indigo">ه</div><span class="aud__card-name">همراه‌مکانیک</span></div>
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--teal">ن</div><span class="aud__card-name">نوبت‌ده</span></div>
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--navy">پ</div><span class="aud__card-name">پونیشا</span></div>
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--purple">ک</div><span class="aud__card-name">کارلنسر</span></div>
							<a href="#" class="aud__join">
								<span class="aud__join-icon">
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
								</span>
								<span class="aud__join-text">شما هم به مشتریان ما بپیوندید</span>
							</a>
						</div>
					</div>

					<div class="aud__grid-inner" data-grid="growth">
						<p class="aud__grid-label">کسب‌وکارهای در حال رشد</p>
						<h3 class="aud__grid-heading">برندهایی که با xCRM رشد می‌کنند</h3>
						<div class="aud__grid">
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--blue">ر</div><span class="aud__card-name">رتیبا</span></div>
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--slate">ف</div><span class="aud__card-name">فرصت</span></div>
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--indigo">س</div><span class="aud__card-name">ساده‌ساز</span></div>
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--teal">د</div><span class="aud__card-name">داده‌کاوان</span></div>
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--navy">م</div><span class="aud__card-name">مارکتینو</span></div>
							<div class="aud__card"><div class="aud__card-logo aud__card-logo--purple">ب</div><span class="aud__card-name">برندآپ</span></div>
							<a href="#" class="aud__join">
								<span class="aud__join-icon">
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
								</span>
								<span class="aud__join-text">شما هم به مشتریان ما بپیوندید</span>
							</a>
						</div>
					</div>

				</div>

			</div>

		</div>

	</section>

	<!-- ============ DATA VISUALIZATION SECTION ============ -->
	<section class="dvs">
		<div class="dvs__inner">
			<div class="dvs__header">
				<div class="dvs__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
					داده‌های زنده
				</div>
				<h2 class="dvs__title">
					هر کلیک، هر بازدید، <span class="dvs__title-accent">هر خرید</span> — در لحظه
				</h2>
				<p class="dvs__subtitle">
					xCRM رویدادهای مشتریان شما را جمع‌آوری و به صورت بلادرنگ تحلیل می‌کند
				</p>
			</div>
			<div class="dvs__visual">
				<img
					src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/image/data-1.svg' ); ?>"
					alt="تصویرسازی داده‌های xCRM"
					loading="lazy"
				>
			</div>
		</div>
	</section>

	<!-- ============ TESTIMONIALS SECTION ============ -->
	<section class="tst">
		<div class="tst__inner">

			<div class="tst__header">
				<div class="tst__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
					نظر مشتریان
				</div>
				<h2 class="tst__title">
					تیم‌های پیشرو چه می‌گویند؟
				</h2>
			</div>

			<!-- Tabs -->
			<div class="tst__tabs">
				<button class="tst__tab is-active" data-tab="ecommerce">فروشگاه آنلاین</button>
				<button class="tst__tab" data-tab="service">خدماتی</button>
				<button class="tst__tab" data-tab="saas">نرم‌افزار</button>
				<button class="tst__tab" data-tab="agency">آژانس تبلیغاتی</button>
			</div>

			<!-- Panel: E-commerce -->
			<div class="tst__panel is-active" data-panel="ecommerce">
				<div class="tst__cards">

					<div class="tst__card is-active">
						<div class="tst__card-color"></div>
						<div class="tst__card-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg></div>
						<div class="tst__card-compact">
							<div class="tst__card-metric">+۳۲<span>٪</span></div>
							<p class="tst__card-copy">افزایش نرخ تبدیل در سه ماه اول</p>
							<span class="tst__card-logo">فروشگاه نمونه</span>
						</div>
						<div class="tst__card-expanded">
							<p class="tst__card-quote">با xCRM فهمیدیم مشتری‌ها دقیقاً کجا سبد را رها می‌کنند. فقط با یک کمپین خودکار، فروش ۳۲ درصد رشد کرد.</p>
							<div class="tst__card-author">
								<div class="tst__card-avatar">م</div>
								<div>
									<div class="tst__card-name">مریم احمدی</div>
									<div class="tst__card-role">مدیر بازاریابی · فروشگاه نمونه</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tst__card">
						<div class="tst__card-color"></div>
						<div class="tst__card-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg></div>
						<div class="tst__card-compact">
							<div class="tst__card-metric">-۴۵<span>٪</span></div>
							<p class="tst__card-copy">کاهش سبد خرید رهاشده</p>
							<span class="tst__card-logo">مارکت پلاس</span>
						</div>
						<div class="tst__card-expanded">
							<p class="tst__card-quote">قبلاً ۶۰ درصد سبدها رها می‌شد. با اتوماسیون xCRM این عدد به ۳۳ درصد رسید. واقعاً معجزه کرد.</p>
							<div class="tst__card-author">
								<div class="tst__card-avatar">ع</div>
								<div>
									<div class="tst__card-name">علی رضایی</div>
									<div class="tst__card-role">بنیان‌گذار · مارکت پلاس</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tst__card">
						<div class="tst__card-color"></div>
						<div class="tst__card-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg></div>
						<div class="tst__card-compact">
							<div class="tst__card-metric">۳<span>x</span></div>
							<p class="tst__card-copy">بازگشت مشتریان قبلی</p>
							<span class="tst__card-logo">استایل‌مارت</span>
						</div>
						<div class="tst__card-expanded">
							<p class="tst__card-quote">سگمنت‌بندی رفتاری xCRM به ما نشان داد کدام مشتری‌ها آماده خرید دوم هستند. نرخ بازگشت سه برابر شد.</p>
							<div class="tst__card-author">
								<div class="tst__card-avatar">س</div>
								<div>
									<div class="tst__card-name">سارا کریمی</div>
									<div class="tst__card-role">مدیر ارشد · استایل‌مارت</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tst__card">
						<div class="tst__card-color"></div>
						<div class="tst__card-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg></div>
						<div class="tst__card-compact">
							<div class="tst__card-metric">۸۹<span>٪</span></div>
							<p class="tst__card-copy">دقت پیش‌بینی خرید</p>
							<span class="tst__card-logo">الکترومارکت</span>
						</div>
						<div class="tst__card-expanded">
							<p class="tst__card-quote">با تحلیل رفتار xCRM می‌توانیم قبل از خرید، مشتری را پیش‌بینی کنیم. تیم فروش ما حالا هوشمندتر از همیشه است.</p>
							<div class="tst__card-author">
								<div class="tst__card-avatar">ر</div>
								<div>
									<div class="tst__card-name">رضا موسوی</div>
									<div class="tst__card-role">مدیر فروش · الکترومارکت</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<!-- Panel: Service -->
			<div class="tst__panel" data-panel="service">
				<div class="tst__cards">

					<div class="tst__card is-active">
						<div class="tst__card-color"></div>
						<div class="tst__card-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg></div>
						<div class="tst__card-compact">
							<div class="tst__card-metric">+۲<span>x</span></div>
							<p class="tst__card-copy">سرعت پیگیری لیدها</p>
							<span class="tst__card-logo">خدماتی نمونه</span>
						</div>
						<div class="tst__card-expanded">
							<p class="tst__card-quote">قبلاً لیدها روزها بدون پاسخ می‌ماندند. با اتوماسیون xCRM هر لید در کمتر از ۵ دقیقه پیگیری می‌شود.</p>
							<div class="tst__card-author">
								<div class="tst__card-avatar">ح</div>
								<div>
									<div class="tst__card-name">حسن محمدی</div>
									<div class="tst__card-role">مدیر فروش · خدماتی نمونه</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tst__card">
						<div class="tst__card-color"></div>
						<div class="tst__card-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg></div>
						<div class="tst__card-compact">
							<div class="tst__card-metric">۹۰<span>٪</span></div>
							<p class="tst__card-copy">شفافیت در مسیر فروش</p>
							<span class="tst__card-logo">مشاوره‌پارس</span>
						</div>
						<div class="tst__card-expanded">
							<p class="tst__card-quote">پایپ‌لاین فروش xCRM به ما نشان داد هر مشتری در کدام مرحله است. دیگر هیچ فرصتی از دست نمی‌رود.</p>
							<div class="tst__card-author">
								<div class="tst__card-avatar">ن</div>
								<div>
									<div class="tst__card-name">نازنین صادقی</div>
									<div class="tst__card-role">مدیرعامل · مشاوره‌پارس</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tst__card">
						<div class="tst__card-color"></div>
						<div class="tst__card-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg></div>
						<div class="tst__card-compact">
							<div class="tst__card-metric">۷۵<span>٪</span></div>
							<p class="tst__card-copy">کاهش زمان گزارش‌دهی</p>
							<span class="tst__card-logo">تک‌سرвис</span>
						</div>
						<div class="tst__card-expanded">
							<p class="tst__card-quote">گزارش‌های دستی جای خود را به داشبورد زنده xCRM داده. تیم ما هفته‌ای ۱۰ ساعت صرفه‌جویی می‌کند.</p>
							<div class="tst__card-author">
								<div class="tst__card-avatar">م</div>
								<div>
									<div class="tst__card-name">مهدی قاسمی</div>
									<div class="tst__card-role">مدیر عملیات · تک‌سرвис</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<!-- Panel: SaaS -->
			<div class="tst__panel" data-panel="saas">
				<div class="tst__cards">

					<div class="tst__card is-active">
						<div class="tst__card-color"></div>
						<div class="tst__card-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg></div>
						<div class="tst__card-compact">
							<div class="tst__card-metric">+۴۱<span>٪</span></div>
							<p class="tst__card-copy">رشد کاربران فعال</p>
							<span class="tst__card-logo">سافت‌لند</span>
						</div>
						<div class="tst__card-expanded">
							<p class="tst__card-quote">با تحلیل رفتار کاربران در xCRM، فهمیدیم کجاها گیر می‌کنند. اصلاحات UI منجر به ۴۱ درصد رشد شد.</p>
							<div class="tst__card-author">
								<div class="tst__card-avatar">ب</div>
								<div>
									<div class="tst__card-name">بهنام استادی</div>
									<div class="tst__card-role">Head of Product · سافت‌لند</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tst__card">
						<div class="tst__card-color"></div>
						<div class="tst__card-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg></div>
						<div class="tst__card-compact">
							<div class="tst__card-metric">-۲۸<span>٪</span></div>
							<p class="tst__card-copy">کاهش ریزش کاربران</p>
							<span class="tst__card-logo">کلود‌تِک</span>
						</div>
						<div class="tst__card-expanded">
							<p class="tst__card-quote">کمپین‌های خودکار xCRM کاربران در معرض ریزش را نجات دادند. ریزش مشترک‌شدن ۲۸ درصد کاهش یافت.</p>
							<div class="tst__card-author">
								<div class="tst__card-avatar">ف</div>
								<div>
									<div class="tst__card-name">فرشاد نوری</div>
									<div class="tst__card-role">مدیر موفقیت مشتری · کلود‌تِک</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tst__card">
						<div class="tst__card-color"></div>
						<div class="tst__card-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg></div>
						<div class="tst__card-compact">
							<div class="tst__card-metric">۵<span> روز</span></div>
							<p class="tst__card-copy">از نصب تا اولین گزارش</p>
							<span class="tst__card-logo">دیتاکس</span>
						</div>
					 <div class="tst__card-expanded">
							<p class="tst__card-quote">فقط ۵ روز بعد از نصب xCRM، اولین بینش‌های ارزشمند را از رفتار کاربران گرفتیم. سرعت پیاده‌سازی عالی بود.</p>
							<div class="tst__card-author">
								<div class="tst__card-avatar">ش</div>
								<div>
									<div class="tst__card-name">شقایق رفیعی</div>
									<div class="tst__card-role">CTO · دیتاکس</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<!-- Panel: Agency -->
			<div class="tst__panel" data-panel="agency">
				<div class="tst__cards">

					<div class="tst__card is-active">
						<div class="tst__card-color"></div>
						<div class="tst__card-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg></div>
						<div class="tst__card-compact">
							<div class="tst__card-metric">+۵۰<span>٪</span></div>
							<p class="tst__card-copy">بازگشت سرمایه تبلیغات</p>
							<span class="tst__card-logo">ادویه دیجیتال</span>
						</div>
						<div class="tst__card-expanded">
							<p class="tst__card-quote">با xCRM فهمیدیم کدام کمپین واقعاً درآمدزاست. بودجه را از کانال‌های بی‌بازده به کانال‌های سودآور منتقل کردیم.</p>
							<div class="tst__card-author">
								<div class="tst__card-avatar">ک</div>
								<div>
									<div class="tst__card-name">کیان فروتن</div>
									<div class="tst__card-role">مدیر استراتژی · ادویه دیجیتال</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tst__card">
						<div class="tst__card-color"></div>
						<div class="tst__card-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg></div>
						<div class="tst__card-compact">
							<div class="tst__card-metric">۴<span> برابر</span></div>
							<p class="tst__card-copy">افزایش دقت هدفگذاری</p>
							<span class="tst__card-logo">کمپین‌پرو</span>
						</div>
						<div class="tst__card-expanded">
							<p class="tst__card-quote">سگمنت‌های رفتاری xCRM به ما اجازه داد دقیقاً به آدم‌های درست، پیام درست را برسانیم. دقت هدفگذاری چهار برابر شد.</p>
							<div class="tst__card-author">
								<div class="tst__card-avatar">ل</div>
								<div>
									<div class="tst__card-name">لیلا توکلی</div>
									<div class="tst__card-role">مدیر کمپین · کمپین‌پرو</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tst__card">
						<div class="tst__card-color"></div>
						<div class="tst__card-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg></div>
						<div class="tst__card-compact">
							<div class="tst__card-metric">۱<span> پنل</span></div>
							<p class="tst__card-copy">برای همه مشتریان آژانس</p>
							<span class="tst__card-logo">گروه تبلیغاتی+</span>
						</div>
						<div class="tst__card-expanded">
							<p class="tst__card-quote">قبلاً برای هر مشتری چند ابزار جدا لازم بود. حالا همه‌چیز در یک پنل xCRM است. مدیریت هم‌زمان ۱۵ برند آسان شده.</p>
							<div class="tst__card-author">
								<div class="tst__card-avatar">و</div>
								<div>
									<div class="tst__card-name">وحید نادری</div>
									<div class="tst__card-role">مدیرعامل · گروه تبلیغاتی+</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>

</main>

<!-- ============ FOOTER ============ -->
<footer class="xf">
	<div class="xf__main">
		<div class="xf__inner">
			<div class="xf__brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="xf__logo">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
					xCRM
				</a>
				<p class="xf__tagline">پلتفرم رفتار مشتری — از رصد تا درک، از درک تا اقدام.</p>
				<div class="xf__socials">
					<a href="#" class="xf__social" aria-label="اینستاگرام"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="5"/><circle cx="17.5" cy="6.5" r="1.5" fill="currentColor" stroke="none"/></svg></a>
					<a href="#" class="xf__social" aria-label="لینکدین"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
					<a href="#" class="xf__social" aria-label="توییتر"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4l11.733 16h4.267l-11.733 -16z"/><path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"/></svg></a>
					<a href="#" class="xf__social" aria-label="تلگرام"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M15 10l-4 4L6 10"/><path d="M22 4L11 13"/><path d="M22 4L15 22 11 13 2 10l20-6z"/></svg></a>
				</div>
			</div>
			<div class="xf__col">
				<h4 class="xf__col-title">محصول</h4>
				<ul class="xf__list">
					<li><a href="#">پروفایل مشتری (CDP)</a></li>
					<li><a href="#">تحلیل رفتار</a></li>
					<li><a href="#">سگمنت‌بندی</a></li>
					<li><a href="#">کمپین‌ها</a></li>
					<li><a href="#">اتوماسیون</a></li>
					<li><a href="#">کانال‌های ارتباطی</a></li>
				</ul>
			</div>
			<div class="xf__col">
				<h4 class="xf__col-title">منابع</h4>
				<ul class="xf__list">
					<li><a href="#">مستندات API</a></li>
					<li><a href="#">مستندات SDK</a></li>
					<li><a href="#">افزونه وردپرس</a></li>
					<li><a href="#">مستندات N8N</a></li>
					<li><a href="#">وبلاگ</a></li>
					<li><a href="#">تغییرات</a></li>
				</ul>
			</div>
			<div class="xf__col">
				<h4 class="xf__col-title">شرکت</h4>
				<ul class="xf__list">
					<li><a href="#">درباره ما</a></li>
					<li><a href="#">مشتریان</a></li>
					<li><a href="#">فرصت‌های شغلی</a></li>
					<li><a href="#">تماس با ما</a></li>
				</ul>
			</div>
			<div class="xf__col">
				<h4 class="xf__col-title">پشتیبانی</h4>
				<ul class="xf__list">
					<li><a href="#">مرکز راهنما</a></li>
					<li><a href="#">تیکت پشتیبانی</a></li>
					<li><a href="#">حریم خصوصی</a></li>
					<li><a href="#">شرایط استفاده</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="xf__newsletter">
		<div class="xf__inner xf__newsletter-inner">
			<div class="xf__newsletter-text">
				<h4>خبرنامه xCRM</h4>
				<p>آخرین ترندهای بازاریابی رفتاری و آموزش‌های رشد را دریافت کنید.</p>
			</div>
			<form class="xf__form" onsubmit="return false;">
				<input type="email" class="xf__input" placeholder="ایمیل خود را وارد کنید..." aria-label="ایمیل">
				<button type="submit" class="xf__submit">عضویت</button>
			</form>
		</div>
	</div>
	<div class="xf__bottom">
		<div class="xf__inner xf__bottom-inner">
			<p class="xf__copy">© <?php echo esc_html( gmdate( 'Y' ) ); ?> xCRM Forosh — تمامی حقوق محفوظ است.</p>
			<div class="xf__bottom-links">
				<a href="#">حریم خصوصی</a>
				<span class="xf__sep">·</span>
				<a href="#">شرایط استفاده</a>
				<span class="xf__sep">·</span>
				<a href="#">نقشه سایت</a>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
