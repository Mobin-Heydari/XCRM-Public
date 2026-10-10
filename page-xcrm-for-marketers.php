<?php
/**
 * Template Name: For Marketers
 * Template Post Type: page
 *
 * لندینگ دیجیتال مارکترها — /for-marketers/
 * xCRM به عنوان ابزار افزایش فروش + کاربردها با انیمیشن SVG
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$home_url  = home_url( '/' );
$cta_url   = home_url( '/for-marketers/' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?>برای دیجیتال مارکترها — <?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'fm-page' ); ?>>
<?php wp_body_open(); ?>

<!-- ============ HEADER (shared with homepage) ============ -->
<header class="hp__header">
	<div class="hp__header-inner">

		<a href="<?php echo esc_url( $home_url ); ?>" class="hp__brand" aria-label="xCRM">
			<span class="hp__brand-icon" aria-hidden="true">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
			</span>
			<span class="hp__brand-text">xCRM</span>
		</a>

		<nav class="hp__nav" aria-label="ناوبری اصلی">
			<a href="#value" class="hp__nav-link">ابزار فروش</a>
			<a href="#usecases" class="hp__nav-link">کاربردها</a>
			<a href="#features" class="hp__nav-link">امکانات</a>
			<a href="#steps" class="hp__nav-link">شروع</a>
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

			<a href="#usecases" class="hp__btn hp__btn--sm hp__btn--primary">کاربردها</a>
		</div>
	</div>
</header>

<main class="fm">

	<!-- ============ HERO ============ -->
	<section class="fm__hero" data-spotlight-zone>

		<div class="fm__hero-bg" aria-hidden="true">
			<div class="hp__grid-bg xcrm-grid-bg"></div>
			<div class="hp__blob-wrap hp__blob-wrap--1" data-depth="1.3">
				<div class="hp__blob hp__blob--indigo"></div>
			</div>
			<div class="hp__blob-wrap hp__blob-wrap--2" data-depth="0.9">
				<div class="hp__blob hp__blob--purple"></div>
			</div>
			<div class="hp__blob-wrap hp__blob-wrap--3" data-depth="0.6">
				<div class="hp__blob hp__blob--cyan"></div>
			</div>
			<div class="hp__ring hp__ring--1"></div>
			<div class="hp__ring hp__ring--2"></div>
			<div class="hp__ring hp__ring--3"></div>
			<div class="hero-spotlight" data-spotlight></div>
		</div>

		<div class="fm__hero-inner">

			<div class="fm__hero-copy">
				<div class="hp__badge fm-anim fm-anim--1">
					<span class="hp__badge-dot" aria-hidden="true"></span>
					برای دیجیتال مارکترها
				</div>

				<h1 class="fm__title fm-anim fm-anim--2">
					xCRM — ابزار افزایش <span class="text-gradient-primary">فروش واقعی</span>
				</h1>

				<p class="fm__subtitle fm-anim fm-anim--3">
					رفتار مشتری را به تصمیم فروش تبدیل کنید. سبدهای رهاشده را برگردانید،
					مشتریان فعال را پیدا کنید و کمپین‌ها را دقیقاً در لحظه درست اجرا کنید.
				</p>

				<div class="fm__hero-cta fm-anim fm-anim--4">
					<a href="#usecases" class="hp__btn hp__btn--primary" data-magnetic>
						مشاهده کاربردها
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					</a>
					<a href="#value" class="hp__btn hp__btn--ghost" data-magnetic>چرا xCRM؟</a>
				</div>

				<ul class="fm__hero-points fm-anim fm-anim--5">
					<li>
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
						بازیابی سبد خرید
					</li>
					<li>
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
						کمپین رفتاری
					</li>
					<li>
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
						سگمنت زنده
					</li>
				</ul>
			</div>

			<!-- Animated growth dashboard SVG -->
			<div class="fm__hero-visual fm-anim fm-anim--3" aria-hidden="true">
				<div class="fm__dash">
					<svg class="fm__dash-svg" viewBox="0 0 420 300" fill="none" xmlns="http://www.w3.org/2000/svg">
						<defs>
							<linearGradient id="fmLineGrad" x1="0" y1="0" x2="420" y2="0">
								<stop offset="0%" stop-color="#6366F1"/>
								<stop offset="100%" stop-color="#06B6D4"/>
							</linearGradient>
							<linearGradient id="fmAreaGrad" x1="0" y1="0" x2="0" y2="1">
								<stop offset="0%" stop-color="#6366F1" stop-opacity="0.25"/>
								<stop offset="100%" stop-color="#6366F1" stop-opacity="0"/>
							</linearGradient>
							<linearGradient id="fmBarGrad" x1="0" y1="1" x2="0" y2="0">
								<stop offset="0%" stop-color="#6366F1" stop-opacity="0.25"/>
								<stop offset="100%" stop-color="#8B5CF6"/>
							</linearGradient>
						</defs>

						<!-- frame -->
						<rect x="8" y="8" width="404" height="284" rx="20" class="fm-dash-frame"/>

						<!-- header dots -->
						<circle cx="34" cy="36" r="5" fill="#F04438" opacity="0.85"/>
						<circle cx="52" cy="36" r="5" fill="#F59E0B" opacity="0.85"/>
						<circle cx="70" cy="36" r="5" fill="#10B981" opacity="0.85"/>
						<text x="392" y="41" text-anchor="end" class="fm-dash-label">فروش · زنده</text>

						<!-- grid lines -->
						<line x1="48" y1="90" x2="380" y2="90" class="fm-dash-grid"/>
						<line x1="48" y1="140" x2="380" y2="140" class="fm-dash-grid"/>
						<line x1="48" y1="190" x2="380" y2="190" class="fm-dash-grid"/>
						<line x1="48" y1="240" x2="380" y2="240" class="fm-dash-grid"/>

						<!-- bars -->
						<rect class="fm-bar" x="70"  y="200" width="28" height="60"  rx="6" fill="url(#fmBarGrad)" style="--i:0"/>
						<rect class="fm-bar" x="118" y="170" width="28" height="90"  rx="6" fill="url(#fmBarGrad)" style="--i:1"/>
						<rect class="fm-bar" x="166" y="185" width="28" height="75"  rx="6" fill="url(#fmBarGrad)" style="--i:2"/>
						<rect class="fm-bar" x="214" y="130" width="28" height="130" rx="6" fill="url(#fmBarGrad)" style="--i:3"/>
						<rect class="fm-bar" x="262" y="145" width="28" height="115" rx="6" fill="url(#fmBarGrad)" style="--i:4"/>
						<rect class="fm-bar" x="310" y="95"  width="28" height="165" rx="6" fill="url(#fmBarGrad)" style="--i:5"/>

						<!-- area under line -->
						<path class="fm-area" d="M84 190 L132 160 L180 172 L228 118 L276 132 L324 85 L324 260 L84 260 Z" fill="url(#fmAreaGrad)"/>

						<!-- growth line -->
						<path class="fm-line" pathLength="1" d="M84 190 L132 160 L180 172 L228 118 L276 132 L324 85" stroke="url(#fmLineGrad)" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>

						<!-- data points -->
						<circle class="fm-dot" cx="84"  cy="190" r="5" style="--i:0"/>
						<circle class="fm-dot" cx="132" cy="160" r="5" style="--i:1"/>
						<circle class="fm-dot" cx="180" cy="172" r="5" style="--i:2"/>
						<circle class="fm-dot" cx="228" cy="118" r="5" style="--i:3"/>
						<circle class="fm-dot" cx="276" cy="132" r="5" style="--i:4"/>
						<circle class="fm-dot" cx="324" cy="85"  r="6" style="--i:5"/>

						<!-- floating KPI chips -->
						<g class="fm-chip fm-chip--1">
							<rect x="250" y="48" width="120" height="34" rx="10"/>
							<text x="310" y="70" text-anchor="middle">+۴۵٪ نرخ تبدیل</text>
						</g>
						<g class="fm-chip fm-chip--2">
							<rect x="40" y="100" width="108" height="34" rx="10"/>
							<text x="94" y="122" text-anchor="middle">۱۲ سبد برگشته</text>
						</g>
					</svg>
				</div>
			</div>

		</div>
	</section>

	<!-- ============ STATS ============ -->
	<section class="fm__stats" id="stats">
		<div class="fm__section-inner">
			<div class="fm__stats-grid">
				<div class="fm__stat" data-reveal="up">
					<span class="fm__stat-value"><span data-count-to="45" data-count-suffix="%">0</span></span>
					<span class="fm__stat-label">رشد نرخ تبدیل</span>
				</div>
				<div class="fm__stat" data-reveal="up" data-reveal-delay="80">
					<span class="fm__stat-value"><span data-count-to="32" data-count-suffix="%">0</span></span>
					<span class="fm__stat-label">بازیابی سبد خرید</span>
				</div>
				<div class="fm__stat" data-reveal="up" data-reveal-delay="160">
					<span class="fm__stat-value"><span data-count-to="3" data-count-suffix="x">0</span></span>
					<span class="fm__stat-label">بازگشت مشتری</span>
				</div>
				<div class="fm__stat" data-reveal="up" data-reveal-delay="240">
					<span class="fm__stat-value"><span data-count-to="12" data-count-suffix="+">0</span></span>
					<span class="fm__stat-label">کانال یکپارچه</span>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ VALUE — xCRM as sales tool ============ -->
	<section class="fm__value" id="value">
		<div class="fm__section-inner">

			<div class="fm__section-head" data-reveal="up">
				<span class="hp__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 17l6-6 4 4 8-8"/><path d="M14 7h7v7"/></svg>
					ابزار افزایش فروش
				</span>
				<h2 class="fm__section-title">
					داده‌محور بفروشید، <span class="text-gradient-primary">حدس نزنید</span>
				</h2>
				<p class="fm__section-desc">
					xCRM برای تیم‌های مارکتینگ ساخته شده — جایی که داده رفتاری مشتری،
					مستقیماً به درآمد تبدیل می‌شود.
				</p>
			</div>

			<div class="fm__value-grid">

				<article class="fm__value-card main-card" data-reveal="up" data-tilt data-tilt-max="4">
					<div class="fm__value-icon" aria-hidden="true">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
					</div>
					<h3 class="fm__value-title">لححظه طلایی</h3>
					<p class="fm__value-desc">پیام درست را درست وقتی بفرستید — وقتی مشتری هنوز آماده خرید است.</p>
					<div class="fm__value-spark" aria-hidden="true">
						<svg viewBox="0 0 80 28" fill="none"><path pathLength="1" class="fm-spark-path" d="M2 22 C14 22 18 8 30 10 C42 12 46 4 58 6 C68 8 74 3 78 3"/></svg>
					</div>
				</article>

				<article class="fm__value-card main-card" data-reveal="up" data-reveal-delay="80" data-tilt data-tilt-max="4">
					<div class="fm__value-icon fm__value-icon--cyan" aria-hidden="true">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/><circle cx="12" cy="12" r="3"/></svg>
					</div>
					<h3 class="fm__value-title">هوش رفتاری</h3>
					<p class="fm__value-desc">الگوهای خرید، ریزش و وفاداری را ببینید و قبل از رقبا عمل کنید.</p>
					<div class="fm__value-spark" aria-hidden="true">
						<svg viewBox="0 0 80 28" fill="none"><path pathLength="1" class="fm-spark-path" d="M2 20 C12 20 16 14 26 12 C36 10 40 18 50 14 C60 10 68 6 78 4"/></svg>
					</div>
				</article>

				<article class="fm__value-card main-card" data-reveal="up" data-reveal-delay="160" data-tilt data-tilt-max="4">
					<div class="fm__value-icon fm__value-icon--success" aria-hidden="true">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
					</div>
					<h3 class="fm__value-title">ROI شفاف</h3>
					<p class="fm__value-desc">هر کمپین را با درآمد واقعی بسنجید — نه فقط کلیک و ایمپرشن.</p>
					<div class="fm__value-spark" aria-hidden="true">
						<svg viewBox="0 0 80 28" fill="none"><path pathLength="1" class="fm-spark-path" d="M2 24 L18 18 L32 20 L48 10 L62 12 L78 2"/></svg>
					</div>
				</article>

			</div>
		</div>
	</section>

	<!-- ============ USE CASES ============ -->
	<section class="fm__usecases" id="usecases">
		<div class="fm__section-inner">

			<div class="fm__section-head" data-reveal="up">
				<span class="hp__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg>
					کاربردها
				</span>
				<h2 class="fm__section-title">
					xCRM چه <span class="text-gradient-primary">کارهایی</span> برای فروش شما می‌کند؟
				</h2>
				<p class="fm__section-desc">
					پنج کاربرد عملی که همین امروز می‌توانید با آن‌ها شروع کنید.
				</p>
			</div>

			<!-- ── Use case 1: Abandoned carts ── -->
			<article class="fm__uc fm__uc--rtl" data-reveal="up">
				<div class="fm__uc-visual">
					<svg class="fm-uc-svg" viewBox="0 0 360 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs>
							<linearGradient id="uc1g" x1="0" y1="0" x2="1" y2="1">
								<stop offset="0%" stop-color="#6366F1" stop-opacity="0.12"/>
								<stop offset="100%" stop-color="#8B5CF6" stop-opacity="0.06"/>
							</linearGradient>
						</defs>
						<rect x="20" y="20" width="320" height="240" rx="24" fill="url(#uc1g)" class="fm-uc-bg"/>

						<!-- cart -->
						<g class="fm-uc-cart">
							<path pathLength="1" class="fm-draw fm-draw--1" d="M110 100 h20 l8 70 h90 l16-50 h-96" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"/>
							<circle class="fm-uc-wheel fm-uc-wheel--1" cx="148" cy="196" r="8"/>
							<circle class="fm-uc-wheel fm-uc-wheel--2" cx="210" cy="196" r="8"/>
							<path pathLength="1" class="fm-draw fm-draw--2" d="M130 130 h88" stroke-width="2" stroke-dasharray="1" opacity="0.5"/>
						</g>

						<!-- abandoned badge -->
						<g class="fm-uc-badge-abandoned">
							<circle cx="248" cy="88" r="22" class="fm-uc-badge-bg"/>
							<path pathLength="1" class="fm-draw fm-draw--3" d="M240 88 l6 6 10-12" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
						</g>

						<!-- recovery message bubble -->
						<g class="fm-uc-msg">
							<rect x="70" y="36" width="130" height="48" rx="14" class="fm-uc-msg-bg"/>
							<path d="M96 84 l8-12 12 4 z" class="fm-uc-msg-tail"/>
							<circle cx="92" cy="60" r="5" class="fm-uc-msg-avatar"/>
							<rect x="104" y="50" width="78" height="6" rx="3" class="fm-uc-msg-line fm-uc-msg-line--1"/>
							<rect x="104" y="62" width="56" height="6" rx="3" class="fm-uc-msg-line fm-uc-msg-line--2"/>
						</g>

						<!-- pulse ring on send -->
						<circle cx="200" cy="60" r="10" class="fm-uc-pulse"/>
					</svg>
				</div>
				<div class="fm__uc-body">
					<span class="fm__uc-num" aria-hidden="true">۰۱</span>
					<h3 class="fm__uc-title">شناسایی سبد خرید رهاشده و پیام خودکار</h3>
					<p class="fm__uc-desc">
						لحظه‌ای که مشتری سبد را رها می‌کند، xCRM آن را می‌شناسد و یک پیام شخصی‌سازی‌شده
						از همان کانالی که می‌شناسد برایش می‌فرستد — تا خرید نیمه‌تمام کامل شود.
					</p>
					<ul class="fm__uc-tags">
						<li>تریگر لحظه‌ای</li>
						<li>پیام شخصی</li>
						<li>چندکاناله</li>
					</ul>
				</div>
			</article>

			<!-- ── Use case 2: Active customers ── -->
			<article class="fm__uc fm__uc--ltr" data-reveal="up">
				<div class="fm__uc-visual">
					<svg class="fm-uc-svg" viewBox="0 0 360 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs>
							<linearGradient id="uc2g" x1="0" y1="0" x2="1" y2="1">
								<stop offset="0%" stop-color="#06B6D4" stop-opacity="0.12"/>
								<stop offset="100%" stop-color="#6366F1" stop-opacity="0.06"/>
							</linearGradient>
							<radialGradient id="uc2core" cx="50%" cy="40%" r="50%">
								<stop offset="0%" stop-color="#6366F1"/>
								<stop offset="100%" stop-color="#8B5CF6"/>
							</radialGradient>
						</defs>
						<rect x="20" y="20" width="320" height="240" rx="24" fill="url(#uc2g)" class="fm-uc-bg"/>

						<!-- radar rings -->
						<circle cx="180" cy="130" r="40"  class="fm-uc-ring fm-uc-ring--1"/>
						<circle cx="180" cy="130" r="70"  class="fm-uc-ring fm-uc-ring--2"/>
						<circle cx="180" cy="130" r="100" class="fm-uc-ring fm-uc-ring--3"/>

						<!-- person -->
						<circle cx="180" cy="112" r="22" fill="url(#uc2core)" class="fm-uc-person-head"/>
						<path d="M148 178 c0-22 14-36 32-36 s32 14 32 36" fill="url(#uc2core)" class="fm-uc-person-body" opacity="0.9"/>

						<!-- orbiting active dots -->
						<circle cx="250" cy="90"  r="6" class="fm-uc-orbit-dot fm-uc-orbit-dot--1"/>
						<circle cx="110" cy="100" r="5" class="fm-uc-orbit-dot fm-uc-orbit-dot--2"/>
						<circle cx="230" cy="180" r="5" class="fm-uc-orbit-dot fm-uc-orbit-dot--3"/>
						<circle cx="120" cy="170" r="6" class="fm-uc-orbit-dot fm-uc-orbit-dot--4"/>

						<!-- active chip -->
						<g class="fm-uc-chip">
							<rect x="128" y="210" width="104" height="30" rx="15"/>
							<circle cx="148" cy="225" r="4"/>
							<text x="192" y="230" text-anchor="middle">مشتری فعال</text>
						</g>
					</svg>
				</div>
				<div class="fm__uc-body">
					<span class="fm__uc-num" aria-hidden="true">۰۲</span>
					<h3 class="fm__uc-title">شناسایی مشتریان فعال</h3>
					<p class="fm__uc-desc">
						مشتری‌هایی که الان آماده خرید مجدد هستند را با رادار رفتاری پیدا کنید.
						سطح تعامل، امتیاز وفاداری و علائم خرید را در یک نگاه ببینید.
					</p>
					<ul class="fm__uc-tags">
						<li>امتیازدهی رفتاری</li>
						<li>سیگنال خرید</li>
						<li>لیست آماده</li>
					</ul>
				</div>
			</article>

			<!-- ── Use case 3: Campaigns ── -->
			<article class="fm__uc fm__uc--rtl" data-reveal="up">
				<div class="fm__uc-visual">
					<svg class="fm-uc-svg" viewBox="0 0 360 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs>
							<linearGradient id="uc3g" x1="0" y1="0" x2="1" y2="1">
								<stop offset="0%" stop-color="#8B5CF6" stop-opacity="0.12"/>
								<stop offset="100%" stop-color="#EC4899" stop-opacity="0.06"/>
							</linearGradient>
							<linearGradient id="uc3meg" x1="0" y1="0" x2="1" y2="1">
								<stop offset="0%" stop-color="#6366F1"/>
								<stop offset="100%" stop-color="#8B5CF6"/>
							</linearGradient>
						</defs>
						<rect x="20" y="20" width="320" height="240" rx="24" fill="url(#uc3g)" class="fm-uc-bg"/>

						<!-- megaphone -->
						<g class="fm-uc-mega">
							<path d="M96 130 l70-36 v96 l-70-36 z" fill="url(#uc3meg)" class="fm-uc-mega-horn"/>
							<rect x="78" y="118" width="22" height="48" rx="8" class="fm-uc-mega-handle"/>
							<path d="M100 178 l-8 36 h18 l10-30" class="fm-uc-mega-grip" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
						</g>

						<!-- signal waves -->
						<path pathLength="1" class="fm-uc-wave fm-uc-wave--1" d="M186 100 a50 50 0 0 1 0 84" stroke-width="3" stroke-linecap="round"/>
						<path pathLength="1" class="fm-uc-wave fm-uc-wave--2" d="M210 82 a78 78 0 0 1 0 120" stroke-width="3" stroke-linecap="round"/>
						<path pathLength="1" class="fm-uc-wave fm-uc-wave--3" d="M236 64 a106 106 0 0 1 0 156" stroke-width="3" stroke-linecap="round"/>

						<!-- floating message chips -->
						<g class="fm-uc-float-chip fm-uc-float-chip--1">
							<rect x="250" y="70" width="72" height="28" rx="10"/>
							<text x="286" y="89" text-anchor="middle">پیامک</text>
						</g>
						<g class="fm-uc-float-chip fm-uc-float-chip--2">
							<rect x="260" y="130" width="72" height="28" rx="10"/>
							<text x="296" y="149" text-anchor="middle">تلگرام</text>
						</g>
						<g class="fm-uc-float-chip fm-uc-float-chip--3">
							<rect x="250" y="190" width="72" height="28" rx="10"/>
							<text x="286" y="209" text-anchor="middle">ایمیل</text>
						</g>
					</svg>
			 </div>
				<div class="fm__uc-body">
					<span class="fm__uc-num" aria-hidden="true">۰۳</span>
					<h3 class="fm__uc-title">ارسال کمپین‌های تبلیغاتی هدفمند</h3>
					<p class="fm__uc-desc">
						کمپین پیامکی، تلگرامی، ایمیلی و Push را بر اساس رفتار واقعی بسازید و اجرا کنید.
						هر پیام، به دست مخاطب درست، در زمان درست می‌رسد.
					</p>
					<ul class="fm__uc-tags">
						<li>صفحه‌ساز کمپین</li>
						<li>A/B تست</li>
						<li>زمان‌بندی هوشمند</li>
					</ul>
				</div>
			</article>

			<!-- ── Use case 4: Segmentation ── -->
			<article class="fm__uc fm__uc--ltr" data-reveal="up">
				<div class="fm__uc-visual">
					<svg class="fm-uc-svg" viewBox="0 0 360 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs>
							<linearGradient id="uc4g" x1="0" y1="0" x2="1" y2="1">
								<stop offset="0%" stop-color="#10B981" stop-opacity="0.1"/>
								<stop offset="100%" stop-color="#6366F1" stop-opacity="0.06"/>
							</linearGradient>
						</defs>
						<rect x="20" y="20" width="320" height="240" rx="24" fill="url(#uc4g)" class="fm-uc-bg"/>

						<!-- three cluster groups -->
						<!-- group A -->
						<circle cx="110" cy="110" r="58" class="fm-uc-cluster fm-uc-cluster--a"/>
						<circle cx="95"  cy="100" r="9" class="fm-uc-node fm-uc-node--a"/>
						<circle cx="125" cy="96"  r="9" class="fm-uc-node fm-uc-node--a"/>
						<circle cx="108" cy="128" r="9" class="fm-uc-node fm-uc-node--a"/>
						<circle cx="132" cy="124" r="7" class="fm-uc-node fm-uc-node--a"/>

						<!-- group B -->
						<circle cx="230" cy="100" r="50" class="fm-uc-cluster fm-uc-cluster--b"/>
						<circle cx="218" cy="92"  r="8" class="fm-uc-node fm-uc-node--b"/>
						<circle cx="244" cy="88"  r="8" class="fm-uc-node fm-uc-node--b"/>
						<circle cx="230" cy="118" r="8" class="fm-uc-node fm-uc-node--b"/>

						<!-- group C -->
						<circle cx="175" cy="200" r="48" class="fm-uc-cluster fm-uc-cluster--c"/>
						<circle cx="162" cy="192" r="8" class="fm-uc-node fm-uc-node--c"/>
						<circle cx="188" cy="190" r="8" class="fm-uc-node fm-uc-node--c"/>
						<circle cx="175" cy="216" r="8" class="fm-uc-node fm-uc-node--c"/>

						<!-- connecting lines between clusters -->
						<path pathLength="1" class="fm-draw fm-draw--link" d="M150 130 L195 125"/>
						<path pathLength="1" class="fm-draw fm-draw--link fm-draw--link-2" d="M130 155 L160 175"/>
						<path pathLength="1" class="fm-draw fm-draw--link fm-draw--link-3" d="M210 145 L190 170"/>

						<!-- labels -->
						<g class="fm-uc-label-chip fm-uc-label-chip--a">
							<rect x="70" y="46" width="80" height="24" rx="8"/>
							<text x="110" y="63" text-anchor="middle">پرخرید</text>
						</g>
						<g class="fm-uc-label-chip fm-uc-label-chip--b">
							<rect x="198" y="36" width="80" height="24" rx="8"/>
							<text x="238" y="53" text-anchor="middle">جدید</text>
						</g>
						<g class="fm-uc-label-chip fm-uc-label-chip--c">
							<rect x="140" y="248" width="80" height="24" rx="8"/>
							<text x="180" y="265" text-anchor="middle">در معرض ریزش</text>
						</g>
					</svg>
				</div>
				<div class="fm__uc-body">
					<span class="fm__uc-num" aria-hidden="true">۰۴</span>
					<h3 class="fm__uc-title">گروه‌بندی هوشمند مشتریان</h3>
					<p class="fm__uc-desc">
						مشتری‌ها را بر اساس رفتار، ارزش و مرحله سفر دسته‌بندی کنید.
						سگمنت‌ها زنده‌اند — با هر خرید و هر تعامل، خودشان به‌روز می‌شوند.
					</p>
					<ul class="fm__uc-tags">
						<li>سگمنت زنده</li>
						<li>فیلتر رفتاری</li>
						<li>خروجی کمپین</li>
					</ul>
				</div>
			</article>

			<!-- ── Use case 5: Customer management ── -->
			<article class="fm__uc fm__uc--rtl" data-reveal="up">
				<div class="fm__uc-visual">
					<svg class="fm-uc-svg" viewBox="0 0 360 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs>
							<linearGradient id="uc5g" x1="0" y1="0" x2="1" y2="1">
								<stop offset="0%" stop-color="#F59E0B" stop-opacity="0.1"/>
								<stop offset="100%" stop-color="#6366F1" stop-opacity="0.06"/>
							</linearGradient>
							<linearGradient id="uc5bar" x1="0" y1="0" x2="1" y2="0">
								<stop offset="0%" stop-color="#6366F1"/>
								<stop offset="100%" stop-color="#06B6D4"/>
							</linearGradient>
						</defs>
						<rect x="20" y="20" width="320" height="240" rx="24" fill="url(#uc5g)" class="fm-uc-bg"/>

						<!-- window -->
						<rect x="56" y="48" width="248" height="196" rx="16" class="fm-uc-window"/>
						<circle cx="80" cy="70" r="5" fill="#F04438" opacity="0.7"/>
						<circle cx="96" cy="70" r="5" fill="#F59E0B" opacity="0.7"/>
						<circle cx="112" cy="70" r="5" fill="#10B981" opacity="0.7"/>
						<line x1="56" y1="88" x2="304" y2="88" class="fm-uc-window-line"/>

						<!-- list rows -->
						<g class="fm-uc-row fm-uc-row--1">
							<circle cx="88" cy="118" r="12" class="fm-uc-avatar"/>
							<rect x="112" y="110" width="100" height="7" rx="3.5" class="fm-uc-row-line"/>
							<rect x="112" y="122" width="64" height="6" rx="3" class="fm-uc-row-line fm-uc-row-line--sub"/>
							<rect x="236" y="110" width="44" height="18" rx="9" class="fm-uc-row-pill"/>
							<path pathLength="1" class="fm-draw fm-draw--check" d="M248 119 l4 4 8-10"/>
						</g>
						<g class="fm-uc-row fm-uc-row--2">
							<circle cx="88" cy="160" r="12" class="fm-uc-avatar fm-uc-avatar--2"/>
							<rect x="112" y="152" width="110" height="7" rx="3.5" class="fm-uc-row-line"/>
							<rect x="112" y="164" width="56" height="6" rx="3" class="fm-uc-row-line fm-uc-row-line--sub"/>
							<rect x="236" y="152" width="44" height="18" rx="9" class="fm-uc-row-pill fm-uc-row-pill--2"/>
							<path pathLength="1" class="fm-draw fm-draw--check fm-draw--check-2" d="M248 161 l4 4 8-10"/>
						</g>
						<g class="fm-uc-row fm-uc-row--3">
							<circle cx="88" cy="202" r="12" class="fm-uc-avatar fm-uc-avatar--3"/>
							<rect x="112" y="194" width="88" height="7" rx="3.5" class="fm-uc-row-line"/>
							<rect x="112" y="206" width="72" height="6" rx="3" class="fm-uc-row-line fm-uc-row-line--sub"/>
							<!-- progress bar -->
							<rect x="220" y="198" width="64" height="8" rx="4" class="fm-uc-progress-bg"/>
							<rect x="220" y="198" width="64" height="8" rx="4" class="fm-uc-progress-fill"/>
						</g>
					</svg>
				</div>
				<div class="fm__uc-body">
					<span class="fm__uc-num" aria-hidden="true">۰۵</span>
					<h3 class="fm__uc-title">مدیریت یکپارچه مشتریان</h3>
					<p class="fm__uc-desc">
						تمام تاریخچه، تعاملات، سفارش‌ها و یادداشت‌های تیم فروش در یک پروفایل واحد.
						هر هم‌تیمی، همان دیدِ شما را از مشتری دارد.
					</p>
					<ul class="fm__uc-tags">
						<li>پروفایل واحد</li>
						<li>تیم‌محور</li>
						<li>تاریخچه کامل</li>
					</ul>
				</div>
			</article>

		</div>
	</section>

	<!-- ============ FEATURES GRID ============ -->
	<section class="fm__features" id="features">
		<div class="fm__section-inner">

			<div class="fm__section-head" data-reveal="up">
				<span class="hp__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
					امکانات xCRM
				</span>
				<h2 class="fm__section-title">
					شش محصول، <span class="text-gradient-primary">یک پروفایل مشتری.</span>
				</h2>
			</div>

			<div class="fm__features-grid">
				<article class="fm__feature main-card" data-reveal="up">
					<div class="fm__feature-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
					</div>
					<h3 class="fm__feature-title">پروفایل مشتری</h3>
					<p class="fm__feature-desc">CDP با تمام رفتارها و رویدادها در یک خط زمانی.</p>
				</article>
				<article class="fm__feature main-card" data-reveal="up" data-reveal-delay="60">
					<div class="fm__feature-icon fm__feature-icon--cyan" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
					</div>
					<h3 class="fm__feature-title">تحلیل رفتار</h3>
					<p class="fm__feature-desc">قیف تبدیل، مسیر مشتری و نقاط ریزش به صورت زنده.</p>
				</article>
				<article class="fm__feature main-card" data-reveal="up" data-reveal-delay="120">
					<div class="fm__feature-icon fm__feature-icon--success" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					</div>
					<h3 class="fm__feature-title">سگمنت‌بندی</h3>
					<p class="fm__feature-desc">گروه‌های پویا بر اساس رفتار واقعی مشتریان.</p>
				</article>
				<article class="fm__feature main-card" data-reveal="up" data-reveal-delay="180">
					<div class="fm__feature-icon fm__feature-icon--warn" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg>
					</div>
					<h3 class="fm__feature-title">کمپین‌ها</h3>
					<p class="fm__feature-desc">کمپین‌های هدفمند چندکاناله با A/B تست.</p>
				</article>
				<article class="fm__feature main-card" data-reveal="up" data-reveal-delay="240">
					<div class="fm__feature-icon fm__feature-icon--purple" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
					</div>
					<h3 class="fm__feature-title">اتوماسیون</h3>
					<p class="fm__feature-desc">Workflow بصری بدون کدنویسی، با تریگر رفتاری.</p>
				</article>
				<article class="fm__feature main-card" data-reveal="up" data-reveal-delay="300">
					<div class="fm__feature-icon fm__feature-icon--pink" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
					</div>
					<h3 class="fm__feature-title">کانال‌ها</h3>
					<p class="fm__feature-desc">پیامک، تلگرام، ایمیل، Push و API در یک پنل.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ HOW IT WORKS ============ -->
	<section class="fm__steps" id="steps">
		<div class="fm__section-inner">
			<div class="fm__section-head" data-reveal="up">
				<span class="hp__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
					شروع سریع
				</span>
				<h2 class="fm__section-title">سه قدم تا <span class="text-gradient-primary">فروش بیشتر</span></h2>
			</div>

			<ol class="fm__steps-list">
				<li class="fm__step" data-reveal="up">
					<div class="fm__step-num" aria-hidden="true">۱</div>
					<h3 class="fm__step-title">سایت را وصل کنید</h3>
					<p class="fm__step-desc">یک تگ ساده یا افزونه وردپرس — داده‌ها از همان لحظه جریان می‌یابند.</p>
				</li>
				<li class="fm__step" data-reveal="up" data-reveal-delay="120">
					<div class="fm__step-num" aria-hidden="true">۲</div>
					<h3 class="fm__step-title">سگمنت بسازید</h3>
					<p class="fm__step-desc">مشتریان را گروه‌بندی کنید و تریگرهای رفتاری را روشن کنید.</p>
				</li>
				<li class="fm__step" data-reveal="up" data-reveal-delay="240">
					<div class="fm__step-num" aria-hidden="true">۳</div>
					<h3 class="fm__step-title">فروش را ببینید</h3>
					<p class="fm__step-desc">کمپین و اتوماسیون جواب می‌دهند — نتیجه را روی نمودار ببینید.</p>
				</li>
			</ol>
		</div>
	</section>

	<!-- ============ CTA ============ -->
	<section class="fm__cta" id="cta">
		<div class="fm__section-inner">
			<div class="fm__cta-box brand-surface" data-reveal="scale">
				<div class="fm__cta-deco" aria-hidden="true">
					<div class="fm__cta-orb fm__cta-orb--1"></div>
					<div class="fm__cta-orb fm__cta-orb--2"></div>
				</div>
				<div class="fm__cta-content">
					<h2 class="fm__cta-title">آماده‌اید فروش را داده‌محور کنید؟</h2>
					<p class="fm__cta-desc">همین امروز شروع کنید — ۱۴ روز تست رایگان، بدون کارت اعتباری.</p>
					<div class="fm__cta-actions">
						<a href="<?php echo esc_url( $home_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
							بازگشت به صفحه اصلی
							<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
						</a>
						<a href="#usecases" class="hp__btn hp__btn--ghost" data-magnetic>مرور کاربردها</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ FOOTER ============ -->
	<footer class="fm__footer">
		<div class="fm__section-inner fm__footer-inner">
			<a href="<?php echo esc_url( $home_url ); ?>" class="hp__brand">
				<span class="hp__brand-icon" aria-hidden="true">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
				</span>
				<span class="hp__brand-text">xCRM</span>
			</a>
			<p class="fm__footer-copy">© <?php echo esc_html( gmdate( 'Y' ) ); ?> xCRM — ابزار افزایش فروش برای مارکترها.</p>
			<div class="fm__footer-links">
				<a href="#usecases">کاربردها</a>
				<a href="#features">امکانات</a>
				<a href="<?php echo esc_url( $home_url ); ?>">صفحه اصلی</a>
			</div>
		</div>
	</footer>

</main>

<?php wp_footer(); ?>
</body>
</html>
