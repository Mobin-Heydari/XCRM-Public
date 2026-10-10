<?php
/**
 * Template Name: For Business
 * Template Post Type: page
 *
 * لندینگ صاحبان کسب‌وکار — /for-business/
 * مدیریت مشتریان، فروش، پیگیری، تحلیل و ارتباطات
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$home_url    = home_url( '/' );
$marketers   = home_url( '/for-marketers/' );
$canonical   = home_url( '/for-business/' );

/*
 * Conversion destinations.
 * Point $signup_url at your real registration/login page when it exists.
 * Until then, CTAs scroll to the on-page getting-started section.
 */
$signup_url  = '#start';
$pricing_url = '#pricing';

$page_title       = 'مدیریت مشتریان و فروش کسب‌وکارها | xCRM';
$page_description = 'با xCRM اطلاعات مشتریان، فرصت‌های فروش، پیگیری‌ها، بخش‌بندی مشتریان و تحلیل رفتار کاربران را در یک پلتفرم یکپارچه مدیریت کنید.';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo esc_html( $page_title ); ?></title>
	<meta name="description" content="<?php echo esc_attr( $page_description ); ?>">
	<link rel="canonical" href="<?php echo esc_url( $canonical ); ?>">

	<meta property="og:type" content="website">
	<meta property="og:locale" content="fa_IR">
	<meta property="og:site_name" content="xCRM">
	<meta property="og:title" content="<?php echo esc_attr( $page_title ); ?>">
	<meta property="og:description" content="<?php echo esc_attr( $page_description ); ?>">
	<meta property="og:url" content="<?php echo esc_url( $canonical ); ?>">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo esc_attr( $page_title ); ?>">
	<meta name="twitter:description" content="<?php echo esc_attr( $page_description ); ?>">

	<script type="application/ld+json">
	<?php
	echo wp_json_encode(
		array(
			'@context'        => 'https://schema.org',
			'@type'           => 'BreadcrumbList',
			'itemListElement' => array(
				array(
					'@type'    => 'ListItem',
					'position' => 1,
					'name'     => 'صفحه اصلی',
					'item'     => esc_url( $home_url ),
				),
				array(
					'@type'    => 'ListItem',
					'position' => 2,
					'name'     => 'برای کسب‌وکارها',
					'item'     => esc_url( $canonical ),
				),
			),
		),
		JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
	);
	?>
	</script>
	<script type="application/ld+json">
	<?php
	echo wp_json_encode(
		array(
			'@context'         => 'https://schema.org',
			'@type'            => 'SoftwareApplication',
			'name'             => 'xCRM',
			'applicationCategory' => 'BusinessApplication',
			'operatingSystem'  => 'Web',
			'description'      => $page_description,
			'url'              => esc_url( $canonical ),
			'inLanguage'       => 'fa-IR',
		),
		JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
	);
	?>
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class( 'fb-page' ); ?>>
<?php wp_body_open(); ?>

<!-- ============ HEADER ============ -->
<header class="hp__header">
	<div class="hp__header-inner">
		<a href="<?php echo esc_url( $home_url ); ?>" class="hp__brand" aria-label="xCRM">
			<span class="hp__brand-icon" aria-hidden="true">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
			</span>
			<span class="hp__brand-text">xCRM</span>
		</a>
		<nav class="hp__nav" aria-label="ناوبری اصلی">
			<a href="#challenges" class="hp__nav-link">چالش‌ها</a>
			<a href="#uc" class="hp__nav-link">امکانات</a>
			<a href="#industries" class="hp__nav-link">کاربردها</a>
			<a href="#faq" class="hp__nav-link">پرسش‌ها</a>
		</nav>
		<div class="hp__header-actions">
			<button id="hp-theme-toggle" class="hp__theme-toggle xcrm-focus" type="button" aria-label="تغییر حالت روشن و تاریک" aria-pressed="false">
				<span class="hp__theme-track" aria-hidden="true">
					<span class="hp__theme-thumb">
						<svg class="hp__theme-icon hp__theme-icon--sun" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/></svg>
						<svg class="hp__theme-icon hp__theme-icon--moon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
					</span>
				</span>
			</button>
			<a href="<?php echo esc_url( $signup_url ); ?>" class="hp__btn hp__btn--sm hp__btn--primary">شروع کار</a>
		</div>
	</div>
</header>
<main class="fb">

	<!-- HERO -->
	<section class="fb__hero" id="hero">
		<div class="fb__hero-bg" aria-hidden="true">
			<div class="xcrm-grid-bg fb__grid"></div>
			<div class="fb__hero-rings">
				<div class="fb__hero-ring fb__hero-ring--1"></div>
				<div class="fb__hero-ring fb__hero-ring--2"></div>
				<div class="fb__hero-ring fb__hero-ring--3"></div>
			</div>
			<span class="fb-hero-orb fb-hero-orb--1"></span>
			<span class="fb-hero-orb fb-hero-orb--2"></span>
			<span class="fb-hero-orb fb-hero-orb--3"></span>
		</div>
		<div class="fb__section-inner fb__hero-inner">
			<div class="fb__hero-copy">
				<p class="fb__eyebrow fb-anim fb-anim--1">مدیریت مشتریان و فروش، یکپارچه و هوشمند</p>
				<h1 class="fb__h1 fb-anim fb-anim--2">مشتریان بیشتر، پیگیری دقیق‌تر، مدیریت ساده‌تر</h1>
				<p class="fb__lead fb-anim fb-anim--3">اطلاعات مشتریان، فرصت‌های فروش، یادآوری پیگیری‌ها و تحلیل رفتار کاربران را در یک پلتفرم یکپارچه مدیریت کنید. با شناخت بهتر مشتریان، تصمیم‌های دقیق‌تری بگیرید و فرآیند فروش کسب‌وکار خود را منظم‌تر کنید.</p>
				<div class="fb__hero-actions fb-anim fb-anim--4">
					<a href="<?php echo esc_url( $signup_url ); ?>" class="fb__btn fb__btn--primary">شروع کار با xCRM</a>
					<a href="#uc" class="fb__btn fb__btn--secondary">مشاهده امکانات</a>
				</div>
			</div>
			<div class="fb__hero-visual fb-anim fb-anim--3" aria-hidden="true">
				<div class="fb-dash">
					<svg class="fb-dash-svg" viewBox="0 0 420 300" fill="none" xmlns="http://www.w3.org/2000/svg">
						<defs>
							<linearGradient id="fbLG" x1="0" y1="0" x2="420" y2="0"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#06B6D4"/></linearGradient>
							<linearGradient id="fbAG" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.22"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0"/></linearGradient>
							<linearGradient id="fbBG" x1="0" y1="1" x2="0" y2="0"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.2"/><stop offset="100%" stop-color="#8B5CF6"/></linearGradient>
						</defs>
						<rect x="8" y="8" width="404" height="284" rx="20" class="fb-dash-frame"/>
						<circle cx="34" cy="36" r="5" fill="#F04438" opacity="0.8"/><circle cx="52" cy="36" r="5" fill="#F59E0B" opacity="0.8"/><circle cx="70" cy="36" r="5" fill="#10B981" opacity="0.8"/>
						<text x="392" y="41" text-anchor="end" class="fb-dash-label">فرصت‌های فروش</text>
						<line x1="48" y1="90" x2="380" y2="90" style="stroke:var(--x-border-subtle)" stroke-width="1" opacity="0.5"/>
						<line x1="48" y1="140" x2="380" y2="140" style="stroke:var(--x-border-subtle)" stroke-width="1" opacity="0.5"/>
						<line x1="48" y1="190" x2="380" y2="190" style="stroke:var(--x-border-subtle)" stroke-width="1" opacity="0.5"/>
						<line x1="48" y1="240" x2="380" y2="240" style="stroke:var(--x-border-subtle)" stroke-width="1" opacity="0.5"/>
						<rect class="fb-bar" x="70" y="200" width="28" height="60" rx="6" fill="url(#fbBG)" style="--i:0"/>
						<rect class="fb-bar" x="118" y="170" width="28" height="90" rx="6" fill="url(#fbBG)" style="--i:1"/>
						<rect class="fb-bar" x="166" y="185" width="28" height="75" rx="6" fill="url(#fbBG)" style="--i:2"/>
						<rect class="fb-bar" x="214" y="130" width="28" height="130" rx="6" fill="url(#fbBG)" style="--i:3"/>
						<rect class="fb-bar" x="262" y="145" width="28" height="115" rx="6" fill="url(#fbBG)" style="--i:4"/>
						<rect class="fb-bar" x="310" y="95" width="28" height="165" rx="6" fill="url(#fbBG)" style="--i:5"/>
						<path class="fb-area" d="M84 190 L132 160 L180 172 L228 118 L276 132 L324 85 L324 260 L84 260 Z" fill="url(#fbAG)"/>
						<path class="fb-line" pathLength="1" d="M84 190 L132 160 L180 172 L228 118 L276 132 L324 85" stroke="url(#fbLG)" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
						<circle class="fb-dot" cx="84" cy="190" r="5" style="--i:0"/><circle class="fb-dot" cx="132" cy="160" r="5" style="--i:1"/><circle class="fb-dot" cx="180" cy="172" r="5" style="--i:2"/><circle class="fb-dot" cx="228" cy="118" r="5" style="--i:3"/><circle class="fb-dot" cx="276" cy="132" r="5" style="--i:4"/><circle class="fb-dot" cx="324" cy="85" r="6" style="--i:5"/>
						<g class="fb-chip fb-chip--1"><rect x="248" y="46" width="124" height="34" rx="10" class="fb-chip-bg"/><text x="310" y="68" text-anchor="middle" class="fb-chip-text">۳ فرصت در مذاکره</text></g>
						<g class="fb-chip fb-chip--2"><rect x="36" y="100" width="118" height="34" rx="10" class="fb-chip-bg"/><text x="95" y="122" text-anchor="middle" class="fb-chip-text">۲ پیگیری امروز</text></g>
						<g class="fb-chip fb-chip--3"><rect x="260" y="196" width="108" height="34" rx="10" class="fb-chip-bg"/><text x="314" y="218" text-anchor="middle" class="fb-chip-text">سرنخ جدید</text></g>
					</svg>
				</div>
			</div>
		</div>
	</section>

	<!-- CHALLENGES -->
	<section class="fb__section fb__section--surface" id="challenges">
		<div class="fb__section-inner">
			<div class="fb__head" data-reveal="up">
				<p class="fb__eyebrow">چالش‌های مدیریت کسب‌وکار</p>
				<h2 class="fb__h2">وقتی اطلاعات پراکنده است، فرصت‌های فروش از دست می‌روند</h2>
				<p class="fb__desc">با بزرگ‌تر شدن کسب‌وکار، پیگیری مشتریان و هماهنگی تیم فروش پیچیده‌تر می‌شود. xCRM کمک می‌کند اطلاعات و فعالیت‌های مهم را ساختارمندتر مدیریت کنید.</p>
			</div>
			<div class="fb__grid-4">
				<article class="fb__card" data-reveal="up"><div class="fb__card-icon" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div><h3 class="fb__card-title">اطلاعات پراکنده مشتریان</h3><p class="fb__card-desc">اطلاعات تماس، سوابق تعامل و ویژگی‌های مشتریان را در یک نمای منظم دنبال کنید.</p></article>
				<article class="fb__card" data-reveal="up" data-reveal-delay="80"><div class="fb__card-icon fb__card-icon--warn" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="fb__card-title">پیگیری‌های فراموش‌شده</h3><p class="fb__card-desc">برای فرصت‌های فروش و مشتریان، یادآوری ثبت کنید و وضعیت انجام پیگیری‌ها را ببینید.</p></article>
				<article class="fb__card" data-reveal="up" data-reveal-delay="160"><div class="fb__card-icon fb__card-icon--info" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="9" rx="1.5"/><rect x="14" y="3" width="7" height="5" rx="1.5"/><rect x="14" y="12" width="7" height="9" rx="1.5"/><rect x="3" y="16" width="7" height="5" rx="1.5"/></svg></div><h3 class="fb__card-title">نبود دید واضح از فرآیند فروش</h3><p class="fb__card-desc">مشتریان و فرصت‌ها را در مراحل مشخص فروش قرار دهید و جابه‌جایی آن‌ها را دنبال کنید.</p></article>
				<article class="fb__card" data-reveal="up" data-reveal-delay="240"><div class="fb__card-icon fb__card-icon--success" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M7 14l4-4 4 4 5-6"/></svg></div><h3 class="fb__card-title">تصمیم‌گیری بدون شناخت رفتار مشتری</h3><p class="fb__card-desc">با تحلیل رویدادها، قیف‌ها و فعالیت کاربران، شناخت بهتری از مسیر مشتریان به دست آورید.</p></article>
			</div>
		</div>
	</section>

	<!-- USE CASES: animated SVG rows -->
	<section class="fb__usecases" id="uc">
		<div class="fb__section-inner">
			<div class="fb__head" data-reveal="up">
				<p class="fb__eyebrow">امکانات xCRM برای کسب‌وکار شما</p>
				<h2 class="fb__h2">هر بخش، <span class="text-gradient-primary">ابزاری قدرتمند</span> برای رشد</h2>
				<p class="fb__desc">از پروفایل مشتری تا تحلیل رفتار — همهچیز در یک پلتفرم یکپارچه.</p>
			</div>

			<!-- UC1 Profiles -->
			<article class="fb__uc fb__uc--rtl" data-reveal="up">
				<div class="fb__uc-visual">
					<svg class="fb-uc-svg" viewBox="0 0 360 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs>
							<linearGradient id="uc1g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.12"/><stop offset="100%" stop-color="#8B5CF6" stop-opacity="0.06"/></linearGradient>
							<radialGradient id="uc1av" cx="50%" cy="40%" r="50%"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#8B5CF6"/></radialGradient>
						</defs>
						<rect x="20" y="20" width="320" height="240" rx="24" fill="url(#uc1g)" class="fb-uc-bg"/>
						<rect x="70" y="50" width="220" height="190" rx="16" class="fb-uc-card-frame"/>
						<circle cx="110" cy="90" r="22" fill="url(#uc1av)" class="fb-uc-avatar-c"/>
						<circle cx="110" cy="90" r="28" class="fb-uc-ring fb-uc-ring--pulse"/>
						<rect x="142" y="78" width="90" height="8" rx="4" class="fb-uc-line fb-uc-line--1"/>
						<rect x="142" y="92" width="60" height="6" rx="3" class="fb-uc-line fb-uc-line--2"/>
						<rect x="90" y="130" width="160" height="6" rx="3" class="fb-uc-line fb-uc-line--3"/>
						<rect x="90" y="146" width="120" height="6" rx="3" class="fb-uc-line fb-uc-line--4"/>
						<rect x="90" y="162" width="140" height="6" rx="3" class="fb-uc-line fb-uc-line--5"/>
						<g class="fb-uc-tag-pill fb-uc-tag-pill--1"><rect x="90" y="186" width="64" height="22" rx="11"/><text x="122" y="201" text-anchor="middle">ویژه</text></g>
						<g class="fb-uc-tag-pill fb-uc-tag-pill--2"><rect x="162" y="186" width="72" height="22" rx="11"/><text x="198" y="201" text-anchor="middle">تکراری</text></g>
						<circle cx="98" cy="224" r="5" class="fb-uc-tl-dot"/>
						<path pathLength="1" class="fb-uc-tl-line" d="M110 224 H240"/>
						<g class="fb-uc-badge"><circle cx="260" cy="82" r="16" class="fb-uc-badge-bg"/><path pathLength="1" class="fb-uc-badge-check" d="M253 82 l5 5 9-11"/></g>
					</svg>
				</div>
				<div class="fb__uc-body">
					<span class="fb__uc-num" aria-hidden="true">۰۱</span>
					<h3 class="fb__uc-title">پروفایل یکپارچه مشتری</h3>
					<p class="fb__uc-desc">اطلاعات تماس، ویژگی‌های اختصاصی، برچسب‌ها و سوابق تعامل را در یک پروفایل قابل مدیریت گردآوری کنید تا تیم شما با شناخت بهتری ارتباط برقرار کند.</p>
					<ul class="fb__uc-tags"><li>اطلاعات تماس</li><li>ویژگی سفارشی</li><li>سوابق تعامل</li><li>واردکردن CSV/Excel</li></ul>
					<a href="#start" class="fb__text-link">آشنایی با مدیریت مشتریان <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg></a>
				</div>
			</article>

			<!-- UC2 Pipeline -->
			<article class="fb__uc fb__uc--ltr" data-reveal="up">
				<div class="fb__uc-visual">
					<svg class="fb-uc-svg" viewBox="0 0 360 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs>
							<linearGradient id="uc2g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#06B6D4" stop-opacity="0.12"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.06"/></linearGradient>
							<linearGradient id="uc2f" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#06B6D4"/></linearGradient>
						</defs>
						<rect x="20" y="20" width="320" height="240" rx="24" fill="url(#uc2g)" class="fb-uc-bg"/>
						<g class="fb-uc-stage fb-uc-stage--1"><rect x="80" y="50" width="200" height="36" rx="10" class="fb-uc-stage-bg"/><text x="180" y="73" text-anchor="middle" class="fb-uc-stage-t">سرنخ جدید</text></g>
						<path pathLength="1" class="fb-uc-arrow fb-uc-arrow--1" d="M180 90 V108"/>
						<g class="fb-uc-stage fb-uc-stage--2"><rect x="95" y="112" width="170" height="36" rx="10" class="fb-uc-stage-bg"/><text x="180" y="135" text-anchor="middle" class="fb-uc-stage-t">در حال پیگیری</text></g>
						<path pathLength="1" class="fb-uc-arrow fb-uc-arrow--2" d="M180 152 V170"/>
						<g class="fb-uc-stage fb-uc-stage--3"><rect x="110" y="174" width="140" height="36" rx="10" fill="url(#uc2f)"/><text x="180" y="197" text-anchor="middle" class="fb-uc-stage-t fb-uc-stage-t--w">نهایی‌شده</text></g>
						<g class="fb-uc-move-card"><rect x="40" y="120" width="48" height="28" rx="8" class="fb-uc-move-bg"/><text x="64" y="138" text-anchor="middle" class="fb-uc-move-t">فرصت</text></g>
						<circle cx="60" cy="68" r="4" class="fb-uc-pdot fb-uc-pdot--1"/><circle cx="60" cy="130" r="4" class="fb-uc-pdot fb-uc-pdot--2"/><circle cx="60" cy="192" r="4" class="fb-uc-pdot fb-uc-pdot--3"/>
					</svg>
				</div>
				<div class="fb__uc-body">
					<span class="fb__uc-num" aria-hidden="true">۰۲</span>
					<h3 class="fb__uc-title">پایپ‌لاین و کانبان فروش</h3>
					<p class="fb__uc-desc">فرآیند فروش را به مراحل مشخص تقسیم کنید، وضعیت مشتریان را تغییر دهید و دید واضح‌تری از کارهای پیش رو داشته باشید. نام مراحل متناسب با فرآیند شما قابل تنظیم است.</p>
					<ul class="fb__uc-tags"><li>ایجاد مراحل</li><li>نمای کانبان</li><li>انتقال بین مراحل</li><li>یادداشت فروش</li></ul>
					<a href="#start" class="fb__text-link">مشاهده امکانات مدیریت فروش <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg></a>
				</div>
			</article>

			<!-- UC3 Follow-ups -->
			<article class="fb__uc fb__uc--rtl" data-reveal="up">
				<div class="fb__uc-visual">
					<svg class="fb-uc-svg" viewBox="0 0 360 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs>
							<linearGradient id="uc3g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#F59E0B" stop-opacity="0.1"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.06"/></linearGradient>
						</defs>
						<rect x="20" y="20" width="320" height="240" rx="24" fill="url(#uc3g)" class="fb-uc-bg"/>
						<g class="fb-uc-bell">
							<path pathLength="1" class="fb-uc-bell-path" d="M180 70 c-22 0-36 16-36 36 v28 l-12 16 h96 l-12-16 v-28 c0-20-14-36-36-36z" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path pathLength="1" class="fb-uc-bell-clapper" d="M168 156 a12 12 0 0 0 24 0" stroke-width="2.5" stroke-linecap="round"/>
						</g>
						<g class="fb-uc-nbadge fb-uc-nbadge--1"><circle cx="230" cy="70" r="14" fill="#F04438"/><text x="230" y="75" text-anchor="middle" fill="#fff" font-size="11" font-weight="800" font-family="inherit">۳</text></g>
						<g class="fb-uc-nbadge fb-uc-nbadge--2"><circle cx="130" cy="80" r="10" fill="#6366F1"/><text x="130" y="84" text-anchor="middle" fill="#fff" font-size="9" font-weight="800" font-family="inherit">۱</text></g>
						<g class="fb-uc-task-row fb-uc-task-row--1"><rect x="80" y="178" width="200" height="28" rx="8" class="fb-uc-task-bg"/><circle cx="98" cy="192" r="6" class="fb-uc-task-dot fb-uc-task-dot--done"/><rect x="112" y="188" width="100" height="6" rx="3" class="fb-uc-line"/></g>
						<g class="fb-uc-task-row fb-uc-task-row--2"><rect x="80" y="214" width="200" height="28" rx="8" class="fb-uc-task-bg"/><circle cx="98" cy="228" r="6" class="fb-uc-task-dot fb-uc-task-dot--active"/><rect x="112" y="224" width="80" height="6" rx="3" class="fb-uc-line"/></g>
					</svg>
				</div>
				<div class="fb__uc-body">
					<span class="fb__uc-num" aria-hidden="true">۰۳</span>
					<h3 class="fb__uc-title">یادآوری و پیگیری تیمی</h3>
					<p class="fb__uc-desc">یادآوری‌ها را به مشتریان و مراحل فروش مرتبط کنید، مسئول انجام کارها را مشخص کنید و وضعیت پیگیری‌های انجام‌شده یا عقب‌افتاده را ببینید.</p>
					<ul class="fb__uc-tags"><li>یادآوری قابل مدیریت</li><li>مسئولیت تیمی</li><li>وضعیت انجام</li></ul>
					<a href="#start" class="fb__text-link">آشنایی با یادآوری‌ها <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg></a>
				</div>
			</article>

			<!-- UC4 Segmentation -->
			<article class="fb__uc fb__uc--ltr" data-reveal="up">
				<div class="fb__uc-visual">
					<svg class="fb-uc-svg" viewBox="0 0 360 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs>
							<linearGradient id="uc4g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#10B981" stop-opacity="0.1"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.06"/></linearGradient>
						</defs>
						<rect x="20" y="20" width="320" height="240" rx="24" fill="url(#uc4g)" class="fb-uc-bg"/>
						<circle cx="120" cy="110" r="52" class="fb-uc-cluster fb-uc-cluster--a"/>
						<circle cx="108" cy="100" r="8" class="fb-uc-node fb-uc-node--a"/><circle cx="136" cy="96" r="8" class="fb-uc-node fb-uc-node--a"/><circle cx="120" cy="126" r="8" class="fb-uc-node fb-uc-node--a"/>
						<circle cx="240" cy="100" r="46" class="fb-uc-cluster fb-uc-cluster--b"/>
						<circle cx="230" cy="92" r="7" class="fb-uc-node fb-uc-node--b"/><circle cx="252" cy="88" r="7" class="fb-uc-node fb-uc-node--b"/><circle cx="240" cy="116" r="7" class="fb-uc-node fb-uc-node--b"/>
						<circle cx="180" cy="200" r="44" class="fb-uc-cluster fb-uc-cluster--c"/>
						<circle cx="170" cy="192" r="7" class="fb-uc-node fb-uc-node--c"/><circle cx="192" cy="190" r="7" class="fb-uc-node fb-uc-node--c"/><circle cx="180" cy="214" r="7" class="fb-uc-node fb-uc-node--c"/>
						<path pathLength="1" class="fb-uc-link" d="M160 130 L200 125"/>
						<path pathLength="1" class="fb-uc-link fb-uc-link--2" d="M135 155 L160 180"/>
						<path pathLength="1" class="fb-uc-link fb-uc-link--3" d="M220 140 L200 175"/>
						<g class="fb-uc-lbl fb-uc-lbl--a"><rect x="80" y="38" width="80" height="24" rx="8" class="fb-uc-lbl-bg"/><text x="120" y="55" text-anchor="middle" class="fb-uc-lbl-t">پرخرید</text></g>
						<g class="fb-uc-lbl fb-uc-lbl--b"><rect x="208" y="30" width="72" height="24" rx="8" class="fb-uc-lbl-bg"/><text x="244" y="47" text-anchor="middle" class="fb-uc-lbl-t">جدید</text></g>
						<g class="fb-uc-lbl fb-uc-lbl--c"><rect x="140" y="248" width="90" height="24" rx="8" class="fb-uc-lbl-bg"/><text x="185" y="265" text-anchor="middle" class="fb-uc-lbl-t">در معرض ریزش</text></g>
					</svg>
				</div>
				<div class="fb__uc-body">
					<span class="fb__uc-num" aria-hidden="true">۰۴</span>
					<h3 class="fb__uc-title">بخش‌بندی هوشمند مشتریان</h3>
					<p class="fb__uc-desc">مشتریان را بر اساس ویژگی‌ها، اطلاعات تماس، تعاملات و شرایط کسب‌وکار دسته‌بندی کنید. سگمنت‌های پویا با منطق AND/OR خودشان به‌روز می‌مانند.</p>
					<ul class="fb__uc-tags"><li>سگمنت پویا</li><li>منطق AND/OR</li><li>فیلتر رفتاری</li><li>خروجی کمپین</li></ul>
					<p class="fb__uc-fine">نوع شرط‌ها به اطلاعات ثبت‌شده و رویدادهای در دسترس بستگی دارد.</p>
					<a href="#start" class="fb__text-link">مشاهده امکانات بخش‌بندی <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg></a>
				</div>
			</article>

			<!-- UC5 Analytics -->
			<article class="fb__uc fb__uc--rtl" data-reveal="up">
				<div class="fb__uc-visual">
					<svg class="fb-uc-svg" viewBox="0 0 360 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs>
							<linearGradient id="uc5g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#8B5CF6" stop-opacity="0.1"/><stop offset="100%" stop-color="#06B6D4" stop-opacity="0.06"/></linearGradient>
							<linearGradient id="uc5bar" x1="0" y1="1" x2="0" y2="0"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.2"/><stop offset="100%" stop-color="#8B5CF6"/></linearGradient>
							<linearGradient id="uc5ln" x1="0" y1="0" x2="360" y2="0"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#06B6D4"/></linearGradient>
						</defs>
						<rect x="20" y="20" width="320" height="240" rx="24" fill="url(#uc5g)" class="fb-uc-bg"/>
						<rect class="fb-uc-bar" x="70" y="160" width="32" height="50" rx="6" fill="url(#uc5bar)" style="--i:0"/>
						<rect class="fb-uc-bar" x="118" y="130" width="32" height="80" rx="6" fill="url(#uc5bar)" style="--i:1"/>
						<rect class="fb-uc-bar" x="166" y="145" width="32" height="65" rx="6" fill="url(#uc5bar)" style="--i:2"/>
						<rect class="fb-uc-bar" x="214" y="100" width="32" height="110" rx="6" fill="url(#uc5bar)" style="--i:3"/>
						<rect class="fb-uc-bar" x="262" y="80" width="32" height="130" rx="6" fill="url(#uc5bar)" style="--i:4"/>
						<path pathLength="1" class="fb-uc-chart-line" d="M86 160 L134 130 L182 145 L230 100 L278 80" stroke="url(#uc5ln)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
						<circle class="fb-uc-cdot" cx="86" cy="160" r="4" style="--i:0"/><circle class="fb-uc-cdot" cx="134" cy="130" r="4" style="--i:1"/><circle class="fb-uc-cdot" cx="182" cy="145" r="4" style="--i:2"/><circle class="fb-uc-cdot" cx="230" cy="100" r="4" style="--i:3"/><circle class="fb-uc-cdot" cx="278" cy="80" r="5" style="--i:4"/>
						<circle cx="300" cy="60" r="28" style="stroke:var(--x-border-subtle)" stroke-width="8" fill="none" opacity="0.4"/>
						<circle class="fb-uc-donut" cx="300" cy="60" r="28" pathLength="1" stroke="#6366F1" stroke-width="8" stroke-dasharray="0.45 0.55" stroke-dashoffset="0.22" fill="none" stroke-linecap="round" transform="rotate(-90 300 60)"/>
						<g class="fb-uc-kpi"><rect x="60" y="40" width="100" height="32" rx="10" class="fb-uc-kpi-bg"/><text x="110" y="61" text-anchor="middle" class="fb-uc-kpi-t">قیف تبدیل</text></g>
					</svg>
				</div>
				<div class="fb__uc-body">
					<span class="fb__uc-num" aria-hidden="true">۰۵</span>
					<h3 class="fb__uc-title">تحلیل عملکرد کسب‌وکار</h3>
					<p class="fb__uc-desc">منابع ورودی، قیف فروش، رفتار کاربران، محصولات پربازدید، سبدهای رهاشده و مسیر مشتری را بررسی کنید. به‌جای حدس‌زدن، بر اساس داده‌های ثبت‌شده تصمیم بگیرید.</p>
					<ul class="fb__uc-tags"><li>منابع ورودی</li><li>قیف فروش</li><li>رفتار کاربران</li><li>مسیر مشتری</li></ul>
					<a href="#start" class="fb__text-link">آشنایی با تحلیل رفتار <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg></a>
				</div>
			</article>

			<!-- UC6 Communication -->
			<article class="fb__uc fb__uc--ltr" data-reveal="up">
				<div class="fb__uc-visual">
					<svg class="fb-uc-svg" viewBox="0 0 360 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs>
							<linearGradient id="uc6g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#EC4899" stop-opacity="0.08"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.06"/></linearGradient>
							<linearGradient id="uc6m" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#8B5CF6"/></linearGradient>
						</defs>
						<rect x="20" y="20" width="320" height="240" rx="24" fill="url(#uc6g)" class="fb-uc-bg"/>
						<g class="fb-uc-mega">
							<path d="M100 120 l60-30 v80 l-60-30 z" fill="url(#uc6m)" class="fb-uc-mega-horn"/>
							<rect x="82" y="108" width="22" height="48" rx="8" class="fb-uc-mega-handle"/>
						</g>
						<path pathLength="1" class="fb-uc-wave fb-uc-wave--1" d="M176 100 a46 46 0 0 1 0 72" stroke-width="3" stroke-linecap="round"/>
						<path pathLength="1" class="fb-uc-wave fb-uc-wave--2" d="M200 84 a72 72 0 0 1 0 104" stroke-width="3" stroke-linecap="round"/>
						<path pathLength="1" class="fb-uc-wave fb-uc-wave--3" d="M226 68 a98 98 0 0 1 0 136" stroke-width="3" stroke-linecap="round"/>
						<g class="fb-uc-ch fb-uc-ch--1"><rect x="250" y="60" width="70" height="28" rx="10" class="fb-uc-chip-bg"/><text x="285" y="79" text-anchor="middle" class="fb-uc-chip-t">پیامک</text></g>
						<g class="fb-uc-ch fb-uc-ch--2"><rect x="256" y="116" width="70" height="28" rx="10" class="fb-uc-chip-bg"/><text x="291" y="135" text-anchor="middle" class="fb-uc-chip-t">تلگرام</text></g>
						<g class="fb-uc-ch fb-uc-ch--3"><rect x="250" y="172" width="70" height="28" rx="10" class="fb-uc-chip-bg"/><text x="285" y="191" text-anchor="middle" class="fb-uc-chip-t">ایمیل</text></g>
					</svg>
				</div>
				<div class="fb__uc-body">
					<span class="fb__uc-num" aria-hidden="true">۰۶</span>
					<h3 class="fb__uc-title">ارتباط چندکاناله با مشتریان</h3>
					<p class="fb__uc-desc">تنظیمات پیامک، تلگرام، ایمیل و اعلان‌ها را مدیریت کنید. ارائه‌دهندگان متصل، بازه‌های مجاز ارسال و الگوهای پیام را متناسب با نیاز کسب‌وکار خود تنظیم کنید.</p>
					<ul class="fb__uc-tags"><li>پیامک</li><li>تلگرام</li><li>ایمیل و پوش</li><li>زمان‌بندی</li></ul>
					<a href="#start" class="fb__text-link">مشاهده امکانات ارتباطی <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg></a>
				</div>
			</article>

			<!-- UC7 Team -->
			<article class="fb__uc fb__uc--rtl" data-reveal="up">
				<div class="fb__uc-visual">
					<svg class="fb-uc-svg" viewBox="0 0 360 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs>
							<linearGradient id="uc7g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#F97316" stop-opacity="0.08"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.06"/></linearGradient>
						</defs>
						<rect x="20" y="20" width="320" height="240" rx="24" fill="url(#uc7g)" class="fb-uc-bg"/>
						<g class="fb-uc-role fb-uc-role--1"><rect x="50" y="50" width="120" height="70" rx="14" class="fb-uc-role-bg"/><circle cx="80" cy="78" r="14" fill="#6366F1" opacity="0.8"/><text x="80" y="83" text-anchor="middle" fill="#fff" font-size="11" font-weight="800" font-family="inherit">م</text><rect x="102" y="68" width="52" height="7" rx="3.5" class="fb-uc-line"/><rect x="102" y="82" width="38" height="5" rx="2.5" class="fb-uc-line"/></g>
						<g class="fb-uc-role fb-uc-role--2"><rect x="190" y="50" width="120" height="70" rx="14" class="fb-uc-role-bg"/><circle cx="220" cy="78" r="14" fill="#06B6D4" opacity="0.8"/><text x="220" y="83" text-anchor="middle" fill="#fff" font-size="11" font-weight="800" font-family="inherit">ف</text><rect x="242" y="68" width="52" height="7" rx="3.5" class="fb-uc-line"/><rect x="242" y="82" width="38" height="5" rx="2.5" class="fb-uc-line"/></g>
						<g class="fb-uc-role fb-uc-role--3"><rect x="120" y="150" width="120" height="70" rx="14" class="fb-uc-role-bg"/><circle cx="150" cy="178" r="14" fill="#10B981" opacity="0.8"/><text x="150" y="183" text-anchor="middle" fill="#fff" font-size="11" font-weight="800" font-family="inherit">پ</text><rect x="172" y="168" width="52" height="7" rx="3.5" class="fb-uc-line"/><rect x="172" y="182" width="38" height="5" rx="2.5" class="fb-uc-line"/></g>
						<circle cx="70" cy="170" r="4" class="fb-uc-pdot fb-uc-pdot--y"/><circle cx="86" cy="170" r="4" class="fb-uc-pdot fb-uc-pdot--y"/><circle cx="102" cy="170" r="4" class="fb-uc-pdot fb-uc-pdot--n"/>
						<circle cx="70" cy="186" r="4" class="fb-uc-pdot fb-uc-pdot--y"/><circle cx="86" cy="186" r="4" class="fb-uc-pdot fb-uc-pdot--n"/><circle cx="102" cy="186" r="4" class="fb-uc-pdot fb-uc-pdot--y"/>
						<circle cx="70" cy="202" r="4" class="fb-uc-pdot fb-uc-pdot--y"/><circle cx="86" cy="202" r="4" class="fb-uc-pdot fb-uc-pdot--y"/><circle cx="102" cy="202" r="4" class="fb-uc-pdot fb-uc-pdot--n"/>
						<path pathLength="1" class="fb-uc-link" d="M170 85 H190"/>
						<path pathLength="1" class="fb-uc-link fb-uc-link--2" d="M110 120 L140 150"/>
						<path pathLength="1" class="fb-uc-link fb-uc-link--3" d="M250 120 L200 150"/>
					</svg>
				</div>
				<div class="fb__uc-body">
					<span class="fb__uc-num" aria-hidden="true">۰۷</span>
					<h3 class="fb__uc-title">مدیریت تیم و دسترسی‌ها</h3>
					<p class="fb__uc-desc">نقش‌ها و مجوزهای دسترسی را تعریف کنید تا مشخص شود هر عضو تیم به کدام بخش‌ها و عملیات دسترسی دارد. نقش‌ها قابل کپی و ویرایش هستند.</p>
					<ul class="fb__uc-tags"><li>اعضای شرکت</li><li>نقش‌ها</li><li>مجوزهای دسترسی</li><li>کپی نقش</li></ul>
					<a href="#start" class="fb__text-link">آشنایی با مدیریت اعضا <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg></a>
				</div>
			</article>

		</div>
	</section>

	<!-- INDUSTRIES -->
	<section class="fb__section fb__section--surface" id="industries">
		<div class="fb__deco-blob fb__deco-blob--indigo" style="top:8%;left:-6%;" aria-hidden="true"></div>
		<div class="fb__deco-blob fb__deco-blob--cyan" style="bottom:12%;right:-5%;" aria-hidden="true"></div>
		<div class="fb__section-inner">
			<div class="fb__head" data-reveal="up">
				<p class="fb__eyebrow">کاربرد xCRM در کسب‌وکارهای مختلف</p>
				<h2 class="fb__h2">متناسب با مدل کسب‌وکار خود از امکانات xCRM استفاده کنید</h2>
			</div>
			<div class="fb__ind-grid">

				<!-- Industry 1: E-commerce -->
				<article class="fb__ind-card" data-reveal="up">
					<div class="fb__ind-visual">
						<svg class="fb-ind-svg" viewBox="0 0 300 200" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
							<defs>
								<linearGradient id="ind1g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.12"/><stop offset="100%" stop-color="#8B5CF6" stop-opacity="0.05"/></linearGradient>
								<linearGradient id="ind1bar" x1="0" y1="1" x2="0" y2="0"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.2"/><stop offset="100%" stop-color="#8B5CF6"/></linearGradient>
							</defs>
							<rect x="10" y="10" width="280" height="180" rx="20" fill="url(#ind1g)"/>
							<!-- browser frame -->
							<rect x="40" y="30" width="220" height="140" rx="12" class="fb-ind-frame"/>
							<circle cx="58" cy="44" r="4" fill="#F04438" opacity="0.6"/><circle cx="70" cy="44" r="4" fill="#F59E0B" opacity="0.6"/><circle cx="82" cy="44" r="4" fill="#10B981" opacity="0.6"/>
							<!-- product grid -->
							<rect x="52" y="56" width="58" height="42" rx="6" class="fb-ind-tile fb-ind-tile--1"/>
							<rect x="118" y="56" width="58" height="42" rx="6" class="fb-ind-tile fb-ind-tile--2"/>
							<rect x="184" y="56" width="58" height="42" rx="6" class="fb-ind-tile fb-ind-tile--3"/>
							<!-- cursor -->
							<g class="fb-ind-cursor"><path d="M150 95 l0 18 5-4 3 8 4-2-3-8 7-1z" fill="var(--x-primary)"/></g>
							<!-- funnel bars -->
							<rect x="60" y="118" width="160" height="10" rx="5" class="fb-ind-fbar fb-ind-fbar--1"/>
							<rect x="80" y="134" width="120" height="10" rx="5" class="fb-ind-fbar fb-ind-fbar--2"/>
							<rect x="100" y="150" width="80" height="10" rx="5" class="fb-ind-fbar fb-ind-fbar--3"/>
							<!-- tracking dot -->
							<circle cx="240" cy="70" r="8" class="fb-ind-ping-ring"/>
							<circle cx="240" cy="70" r="4" fill="var(--x-success)"/>
						</svg>
					</div>
					<div class="fb__ind-body">
						<h3 class="fb__ind-title">فروشگاه‌های اینترنتی</h3>
						<p class="fb__ind-desc">رفتار بازدیدکنندگان، رویدادهای محصولات، بخش‌بندی مشتریان و اطلاعات قیف خرید را بررسی کنید.</p>
						<div class="fb__cap-tags"><span>ردیابی وب</span><span>قیف خرید</span><span>بخش‌بندی</span></div>
					</div>
				</article>

				<!-- Industry 2: Education -->
				<article class="fb__ind-card" data-reveal="up" data-reveal-delay="80">
					<div class="fb__ind-visual">
						<svg class="fb-ind-svg" viewBox="0 0 300 200" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
							<defs>
								<linearGradient id="ind2g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#06B6D4" stop-opacity="0.12"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.05"/></linearGradient>
								<linearGradient id="ind2cap" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#06B6D4"/></linearGradient>
							</defs>
							<rect x="10" y="10" width="280" height="180" rx="20" fill="url(#ind2g)"/>
							<!-- graduation cap -->
							<g class="fb-ind-cap">
								<path pathLength="1" class="fb-ind-cap-top" d="M150 50 L90 75 L150 100 L210 75 Z" fill="url(#ind2cap)"/>
								<path pathLength="1" class="fb-ind-cap-tassel" d="M210 75 V105" stroke="var(--x-primary)" stroke-width="2.5" stroke-linecap="round"/>
								<circle class="fb-ind-cap-ball" cx="210" cy="110" r="5" fill="var(--x-primary)"/>
								<path pathLength="1" class="fb-ind-cap-base" d="M120 88 V105 C120 115 180 115 180 105 V88" stroke="var(--x-primary)" stroke-width="2" fill="none" stroke-linecap="round"/>
							</g>
							<!-- lead funnel -->
							<rect x="70" y="128" width="160" height="12" rx="6" class="fb-ind-lbar fb-ind-lbar--1"/>
							<rect x="90" y="146" width="120" height="12" rx="6" class="fb-ind-lbar fb-ind-lbar--2"/>
							<rect x="110" y="164" width="80" height="12" rx="6" class="fb-ind-lbar fb-ind-lbar--3"/>
							<!-- bell -->
							<g class="fb-ind-bell-sm">
								<path pathLength="1" d="M250 48 c-8 0-13 6-13 13 v10 l-5 7 h36 l-5-7 v-10 c0-7-5-13-13-13z" stroke="var(--x-accent-warn)" stroke-width="2" fill="none" stroke-linecap="round"/>
								<circle cx="250" cy="82" r="4" fill="var(--x-accent-warn)"/>
							</g>
							<g class="fb-ind-nbadge"><circle cx="262" cy="46" r="9" fill="#F04438"/><text x="262" y="50" text-anchor="middle" fill="#fff" font-size="8" font-weight="800" font-family="inherit">۵</text></g>
						</svg>
					</div>
					<div class="fb__ind-body">
						<h3 class="fb__ind-title">کسب‌وکارهای آموزشی</h3>
						<p class="fb__ind-desc">سرنخ‌های ثبت‌نام، پیگیری متقاضیان، مراحل فروش و یادآوری‌های تیم را ساختارمند مدیریت کنید.</p>
						<div class="fb__cap-tags"><span>پروفایل</span><span>پایپ‌لاین</span><span>یادآوری</span></div>
					</div>
				</article>

				<!-- Industry 3: B2B -->
				<article class="fb__ind-card" data-reveal="up" data-reveal-delay="160">
					<div class="fb__ind-visual">
						<svg class="fb-ind-svg" viewBox="0 0 300 200" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
							<defs>
								<linearGradient id="ind3g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#10B981" stop-opacity="0.1"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.05"/></linearGradient>
								<linearGradient id="ind3deal" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#10B981"/></linearGradient>
							</defs>
							<rect x="10" y="10" width="280" height="180" rx="20" fill="url(#ind3g)"/>
							<!-- handshake / deal card -->
							<rect x="70" y="40" width="160" height="70" rx="14" class="fb-ind-deal-bg"/>
							<!-- two person icons shaking -->
							<circle cx="120" cy="62" r="12" fill="var(--x-primary)" opacity="0.8"/>
							<circle cx="180" cy="62" r="12" fill="var(--x-cyan)" opacity="0.8"/>
							<path pathLength="1" class="fb-ind-hand" d="M132 70 Q150 82 168 70" stroke="var(--x-success)" stroke-width="3" stroke-linecap="round" fill="none"/>
							<text x="150" y="100" text-anchor="middle" class="fb-ind-deal-t">قرارداد امضاشده</text>
							<!-- pipeline mini stages -->
							<g class="fb-ind-mini-stage fb-ind-mini-stage--1"><rect x="50" y="130" width="52" height="22" rx="6" class="fb-ind-ms-bg"/><text x="76" y="145" text-anchor="middle" class="fb-ind-ms-t">سرنخ</text></g>
							<path pathLength="1" class="fb-ind-ms-arrow fb-ind-ms-arrow--1" d="M106 141 H120"/>
							<g class="fb-ind-mini-stage fb-ind-mini-stage--2"><rect x="124" y="130" width="52" height="22" rx="6" class="fb-ind-ms-bg"/><text x="150" y="145" text-anchor="middle" class="fb-ind-ms-t">مذاکره</text></g>
							<path pathLength="1" class="fb-ind-ms-arrow fb-ind-ms-arrow--2" d="M180 141 H194"/>
							<g class="fb-ind-mini-stage fb-ind-mini-stage--3"><rect x="198" y="130" width="52" height="22" rx="6" fill="url(#ind3deal)"/><text x="224" y="145" text-anchor="middle" class="fb-ind-ms-t fb-ind-ms-t--w">بسته</text></g>
							<!-- activity dots -->
							<circle cx="80" cy="170" r="4" class="fb-ind-adot fb-ind-adot--1"/><circle cx="96" cy="170" r="4" class="fb-ind-adot fb-ind-adot--2"/><circle cx="112" cy="170" r="4" class="fb-ind-adot fb-ind-adot--3"/>
							<!-- check badge -->
							<g class="fb-ind-check"><circle cx="250" cy="55" r="14" fill="var(--x-soft-success)"/><path pathLength="1" d="M244 55 l4 4 8-10" stroke="var(--x-accent-success)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></g>
						</svg>
					</div>
					<div class="fb__ind-body">
						<h3 class="fb__ind-title">شرکت‌های B2B</h3>
						<p class="fb__ind-desc">فرصت‌های فروش، سوابق تعامل، مراحل مذاکره و مسئولیت‌های اعضای تیم را مدیریت کنید.</p>
						<div class="fb__cap-tags"><span>پایپ‌لاین</span><span>گزارش فعالیت</span><span>دسترسی تیمی</span></div>
					</div>
				</article>

				<!-- Industry 4: Services -->
				<article class="fb__ind-card" data-reveal="up" data-reveal-delay="240">
					<div class="fb__ind-visual">
						<svg class="fb-ind-svg" viewBox="0 0 300 200" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
							<defs>
								<linearGradient id="ind4g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#F59E0B" stop-opacity="0.1"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.05"/></linearGradient>
							</defs>
							<rect x="10" y="10" width="280" height="180" rx="20" fill="url(#ind4g)"/>
							<!-- clipboard -->
							<rect x="80" y="30" width="140" height="150" rx="12" class="fb-ind-clip-bg"/>
							<rect x="125" y="24" width="50" height="16" rx="6" class="fb-ind-clip-tab"/>
							<!-- task rows on clipboard -->
							<g class="fb-ind-ctask fb-ind-ctask--1"><circle cx="102" cy="68" r="6" class="fb-ind-ctask-dot fb-ind-ctask-dot--done"/><rect x="116" y="64" width="80" height="7" rx="3.5" class="fb-ind-ctask-l"/></g>
							<g class="fb-ind-ctask fb-ind-ctask--2"><circle cx="102" cy="92" r="6" class="fb-ind-ctask-dot fb-ind-ctask-dot--done"/><rect x="116" y="88" width="64" height="7" rx="3.5" class="fb-ind-ctask-l"/></g>
							<g class="fb-ind-ctask fb-ind-ctask--3"><circle cx="102" cy="116" r="6" class="fb-ind-ctask-dot fb-ind-ctask-dot--active"/><rect x="116" y="112" width="72" height="7" rx="3.5" class="fb-ind-ctask-l"/></g>
							<g class="fb-ind-ctask fb-ind-ctask--4"><circle cx="102" cy="140" r="6" class="fb-ind-ctask-dot"/><rect x="116" y="136" width="56" height="7" rx="3.5" class="fb-ind-ctask-l"/></g>
							<!-- custom field pills -->
							<g class="fb-ind-fpill fb-ind-fpill--1"><rect x="40" y="60" width="34" height="18" rx="9" class="fb-ind-fpill-bg"/><text x="57" y="73" text-anchor="middle" class="fb-ind-fpill-t">ویژه</text></g>
							<g class="fb-ind-fpill fb-ind-fpill--2"><rect x="230" y="100" width="34" height="18" rx="9" class="fb-ind-fpill-bg"/><text x="247" y="113" text-anchor="middle" class="fb-ind-fpill-t">VIP</text></g>
							<!-- profile avatar mini -->
							<circle cx="240" cy="55" r="14" fill="var(--x-primary)" opacity="0.75"/>
							<circle cx="240" cy="55" r="18" class="fb-ind-ring-pulse"/>
							<!-- connecting line -->
							<path pathLength="1" class="fb-ind-clip-line" d="M226 55 H190"/>
						</svg>
					</div>
					<div class="fb__ind-body">
						<h3 class="fb__ind-title">کسب‌وکارهای خدماتی</h3>
						<p class="fb__ind-desc">اطلاعات مشتریان، پیگیری درخواست‌ها و سوابق تعاملات را در یک فرآیند منظم دنبال کنید.</p>
						<div class="fb__cap-tags"><span>پروفایل</span><span>یادآوری</span><span>ویژگی سفارشی</span></div>
					</div>
				</article>

			</div>
		</div>
	</section>

	<!-- INTEGRATIONS -->
	<section class="fb__section" id="integrations">
		<div class="fb__section-inner">
			<div class="fb__head" data-reveal="up">
				<p class="fb__eyebrow">اتصال و توسعه</p>
				<h2 class="fb__h2">xCRM را با زیرساخت کسب‌وکار خود هماهنگ کنید</h2>
				<p class="fb__desc">با استفاده از ابزارهای اتصال و توسعه موجود، داده‌های مشتریان و رویدادهای سایت را به xCRM منتقل کنید.</p>
			</div>
			<div class="fb__integrations">
				<article class="fb__int-card" data-reveal="up"><div class="fb__int-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>مرورگر SDK</h3><p>ثبت رویدادهای سایت برای تحلیل رفتار.</p></article>
				<article class="fb__int-card" data-reveal="up" data-reveal-delay="60"><div class="fb__int-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></div><h3>API و کلیدها</h3><p>کلیدهای دارای محدوده مجوز.</p></article>
				<article class="fb__int-card" data-reveal="up" data-reveal-delay="120"><div class="fb__int-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20M2 12h20"/></svg></div><h3>اتصال وردپرس</h3><p>راهنمای نصب و اتصال وردپرس.</p></article>
				<article class="fb__int-card" data-reveal="up" data-reveal-delay="180"><div class="fb__int-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><path d="M14 17.5h7M17.5 14v7"/></svg></div><h3>نودهای n8n</h3><p>گردش‌کارهای خودکار با n8n.</p></article>
				<article class="fb__int-card" data-reveal="up" data-reveal-delay="240"><div class="fb__int-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg></div><h3>تلگرام و ارائه‌دهندگان</h3><p>اتصال حساب‌های پشتیبانی‌شده.</p></article>
			</div>
			<div class="fb__center-cta" data-reveal="up"><a href="#start" class="fb__text-link">مشاهده ابزارهای اتصال <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg></a></div>
		</div>
	</section>

	<!-- GETTING STARTED -->
	<section class="fb__section fb__section--surface" id="start">
		<div class="fb__section-inner">
			<div class="fb__head" data-reveal="up">
				<p class="fb__eyebrow">شروع کار با xCRM</p>
				<h2 class="fb__h2">از ثبت اطلاعات مشتریان تا مدیریت یکپارچه‌تر کسب‌وکار</h2>
			</div>
			<ol class="fb__steps">
				<li class="fb__step" data-reveal="up"><span class="fb__step-num" aria-hidden="true">۱</span><div><h3>تنظیم فضای کاری</h3><p>اطلاعات شرکت و تنظیمات اولیه را تکمیل کنید.</p></div></li>
				<li class="fb__step" data-reveal="up" data-reveal-delay="80"><span class="fb__step-num" aria-hidden="true">۲</span><div><h3>واردکردن مشتریان</h3><p>اطلاعات را از CSV، Excel، JSON یا API وارد کنید.</p></div></li>
				<li class="fb__step" data-reveal="up" data-reveal-delay="160"><span class="fb__step-num" aria-hidden="true">۳</span><div><h3>تنظیم فرآیندها</h3><p>ویژگی‌ها، مراحل فروش، بخش‌بندی‌ها و یادآوری‌ها را تعریف کنید.</p></div></li>
				<li class="fb__step" data-reveal="up" data-reveal-delay="240"><span class="fb__step-num" aria-hidden="true">۴</span><div><h3>بررسی و بهبود</h3><p>گزارش‌ها را بررسی و فرآیندها را بهبود دهید.</p></div></li>
			</ol>
			<div class="fb__center-cta" data-reveal="up"><a href="<?php echo esc_url( $signup_url ); ?>" class="fb__btn fb__btn--primary">شروع کار با xCRM</a></div>
		</div>
	</section>

	<!-- PRICING -->
	<section class="fb__section" id="pricing">
		<div class="fb__section-inner">
			<div class="fb__pricing-box" data-reveal="up">
				<p class="fb__eyebrow">انتخاب متناسب با نیاز شما</p>
				<h2 class="fb__h2">امکانات موردنیاز کسب‌وکار خود را انتخاب کنید</h2>
				<p class="fb__desc">بر اساس اندازه تیم، حجم داده‌ها و قابلیت‌های موردنیاز، طرح مناسب کسب‌وکار خود را بررسی کنید. دسترسی به قابلیت‌ها بر اساس طرح اشتراک تعیین می‌شود.</p>
				<a href="<?php echo esc_url( $pricing_url ); ?>" class="fb__btn fb__btn--primary">مشاهده طرح‌ها و قیمت‌ها</a>
			</div>
		</div>
	</section>

	<!-- FAQ -->
	<section class="fb__section fb__section--surface" id="faq">
		<div class="fb__section-inner fb__faq-wrap">
			<div class="fb__head" data-reveal="up">
				<p class="fb__eyebrow">پرسش‌های متداول</p>
				<h2 class="fb__h2">پاسخ پرسش‌های شما درباره xCRM</h2>
			</div>
			<div class="fb__faq" data-reveal="up">
				<details class="fb__faq-item"><summary><span>xCRM برای چه کسب‌وکارهایی مناسب است؟</span><svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></summary><div class="fb__faq-a"><p>xCRM برای کسب‌وکارهایی طراحی شده است که به مدیریت اطلاعات مشتریان، پیگیری فرصت‌های فروش، بخش‌بندی مشتریان و تحلیل رفتار کاربران نیاز دارند. امکانات موردنیاز هر کسب‌وکار به مدل فعالیت و تنظیمات آن بستگی دارد.</p></div></details>
				<details class="fb__faq-item"><summary><span>آیا می‌توان اطلاعات مشتریان را از فایل اکسل وارد کرد؟</span><svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></summary><div class="fb__faq-a"><p>بله، امکان واردکردن اطلاعات از فایل‌های CSV، Excel و JSON با قابلیت نگاشت فیلدها وجود دارد. برای ورود اطلاعات از API نیز باید از روش‌های پشتیبانی‌شده استفاده کنید.</p></div></details>
				<details class="fb__faq-item"><summary><span>آیا می‌توان مراحل فروش را مطابق فرآیند شرکت تنظیم کرد؟</span><svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></summary><div class="fb__faq-a"><p>بله، امکانات مدیریت پایپ‌لاین، ایجاد و مرتب‌سازی مراحل و انتقال مشتریان میان مراحل در xCRM وجود دارد.</p></div></details>
				<details class="fb__faq-item"><summary><span>آیا امکان اختصاص پیگیری به کارکنان وجود دارد؟</span><svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></summary><div class="fb__faq-a"><p>بله، می‌توانید یادآوری‌ها را به اعضای تیم اختصاص دهید، وضعیت آن‌ها را بررسی کنید و در صورت نیاز مسئول پیگیری را تغییر دهید.</p></div></details>
				<details class="fb__faq-item"><summary><span>آیا می‌توان مشتریان را بر اساس رفتارشان دسته‌بندی کرد؟</span><svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></summary><div class="fb__faq-a"><p>امکان ایجاد بخش‌های پویا بر اساس شرایط تعریف‌شده وجود دارد. نوع بخش‌بندی قابل استفاده به اطلاعات مشتریان و رویدادهای ثبت‌شده بستگی دارد.</p></div></details>
				<details class="fb__faq-item"><summary><span>آیا xCRM از پیامک و تلگرام پشتیبانی می‌کند؟</span><svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></summary><div class="fb__faq-a"><p>xCRM قابلیت‌های ارتباطی پیامکی و تلگرامی دارد. امکانات در دسترس به تنظیمات حساب، ارائه‌دهندگان متصل و عملیات پشتیبانی‌شده بستگی دارد.</p></div></details>
				<details class="fb__faq-item"><summary><span>آیا امکان تحلیل رفتار کاربران سایت وجود دارد؟</span><svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></summary><div class="fb__faq-a"><p>بله، مرورگر SDK و زیرساخت ثبت رویداد xCRM برای گردآوری و تحلیل رویدادهای پشتیبانی‌شده استفاده می‌شوند. برای دریافت گزارش‌های دقیق، نصب صحیح SDK و ثبت رویدادهای موردنیاز اهمیت دارد.</p></div></details>
				<details class="fb__faq-item"><summary><span>آیا امکانات xCRM برای همه طرح‌ها یکسان است؟</span><svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></summary><div class="fb__faq-a"><p>خیر، دسترسی به قابلیت‌ها و محدودیت‌های استفاده بر اساس طرح اشتراک تعیین می‌شود. برای اطلاع از جزئیات، <a href="<?php echo esc_url( $pricing_url ); ?>">صفحه قیمت‌گذاری</a> را بررسی کنید.</p></div></details>
				<details class="fb__faq-item"><summary><span>چگونه می‌توان xCRM را به وب‌سایت متصل کرد؟</span><svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></summary><div class="fb__faq-a"><p>برای اتصال وب‌سایت می‌توانید از مرورگر SDK و امکانات توسعه‌دهندگان استفاده کنید. روش راه‌اندازی به ساختار وب‌سایت بستگی دارد.</p></div></details>
				<details class="fb__faq-item"><summary><span>آیا برای استفاده از xCRM به دانش برنامه‌نویسی نیاز دارم؟</span><svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></summary><div class="fb__faq-a"><p>بسیاری از امکانات مدیریتی از طریق داشبورد قابل استفاده هستند. برخی قابلیت‌ها مانند نصب SDK و اتصال API ممکن است به کمک فنی نیاز داشته باشند.</p></div></details>
			</div>
		</div>
	</section>

	<!-- FINAL CTA -->
	<section class="fb__section fb__final" id="cta">
		<div class="fb__section-inner">
			<div class="fb__final-box" data-reveal="scale">
				<h2 class="fb__h2">مدیریت مشتریان را از امروز هدفمندتر کنید</h2>
				<p class="fb__desc">اطلاعات مشتریان، پیگیری‌های فروش و تحلیل رفتار کاربران را در یک مسیر منظم قرار دهید و امکانات xCRM را متناسب با نیاز کسب‌وکار خود بشناسید.</p>
				<div class="fb__final-actions">
					<a href="<?php echo esc_url( $signup_url ); ?>" class="fb__btn fb__btn--primary">شروع کار با xCRM</a>
					<a href="#uc" class="fb__btn fb__btn--secondary">مشاهده امکانات</a>
				</div>
			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<footer class="fb__footer">
		<div class="fb__section-inner fb__footer-inner">
			<a href="<?php echo esc_url( $home_url ); ?>" class="hp__brand">
				<span class="hp__brand-icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>
				<span class="hp__brand-text">xCRM</span>
			</a>
			<p class="fb__footer-copy">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> xCRM — مدیریت مشتریان و فروش برای کسب‌وکارها.</p>
			<div class="fb__footer-links">
				<a href="<?php echo esc_url( $marketers ); ?>">برای مارکترها</a>
				<a href="#uc">امکانات</a>
				<a href="<?php echo esc_url( $home_url ); ?>">صفحه اصلی</a>
			</div>
		</div>
	</footer>

</main>

<?php wp_footer(); ?>
</body>
</html>
