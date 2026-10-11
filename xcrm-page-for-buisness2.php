<?php
/**
 * Template Name: For Business v2
 * Template Post Type: page
 *
 * لندینگ کسب‌وکارها v2 — /for-buisness/
 * ۱۵ بخش با SVGهای اختصاصی و انیمیشنی
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$home_url  = home_url( '/' );
$canonical = home_url( '/for-buisness/' );
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
	<?php echo wp_json_encode( array(
		'@context' => 'https://schema.org',
		'@type' => 'BreadcrumbList',
		'itemListElement' => array(
			array('@type'=>'ListItem','position'=>1,'name'=>'صفحه اصلی','item'=>esc_url($home_url)),
			array('@type'=>'ListItem','position'=>2,'name'=>'برای کسب‌وکارها','item'=>esc_url($canonical)),
		),
	), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ); ?>
	</script>
	<script type="application/ld+json">
	<?php echo wp_json_encode( array(
		'@context' => 'https://schema.org',
		'@type' => 'SoftwareApplication',
		'name' => 'xCRM',
		'applicationCategory' => 'BusinessApplication',
		'operatingSystem' => 'Web',
		'description' => $page_description,
		'url' => esc_url( $canonical ),
		'inLanguage' => 'fa-IR',
	), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ); ?>
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'xcrm-b2-page' ); ?>>
<?php wp_body_open(); ?>

<!-- HEADER -->
<header class="hp__header">
	<div class="hp__header-inner">
		<a href="<?php echo esc_url( $home_url ); ?>" class="hp__brand" aria-label="xCRM">
			<span class="hp__brand-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>
			<span class="hp__brand-text">xCRM</span>
		</a>
		<nav class="hp__nav" aria-label="ناوبری اصلی">
			<a href="#challenges" class="hp__nav-link">چالش‌ها</a>
			<a href="#profiles" class="hp__nav-link">امکانات</a>
			<a href="#industries" class="hp__nav-link">کاربردها</a>
			<a href="#faq" class="hp__nav-link">پرسش‌ها</a>
		</nav>
		<div class="hp__header-actions">
			<button id="hp-theme-toggle" class="hp__theme-toggle xcrm-focus" type="button" aria-label="تغییر حالت روشن و تاریک" aria-pressed="false">
				<span class="hp__theme-track" aria-hidden="true"><span class="hp__theme-thumb">
					<svg class="hp__theme-icon hp__theme-icon--sun" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/></svg>
					<svg class="hp__theme-icon hp__theme-icon--moon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
				</span></span>
			</button>
			<a href="<?php echo esc_url( $signup_url ); ?>" class="hp__btn hp__btn--sm hp__btn--primary">شروع کار</a>
		</div>
	</div>
</header>

<main class="xcrm-b2">

<!-- ══════════ 1. HERO ══════════ -->
<section class="xcrm-b2__hero" id="hero">
	<div class="xcrm-b2__hero-bg" aria-hidden="true">
		<div class="xcrm-grid-bg xcrm-b2__grid"></div>
		<div class="xcrm-b2__ring xcrm-b2__ring--1"></div>
		<div class="xcrm-b2__ring xcrm-b2__ring--2"></div>
		<div class="xcrm-b2__ring xcrm-b2__ring--3"></div>
		<svg class="xcrm-b2__mesh" viewBox="0 0 1200 800" fill="none" xmlns="http://www.w3.org/2000/svg">
			<line x1="100" y1="120" x2="300" y2="200" class="b2mesh-line"/><line x1="300" y1="200" x2="550" y2="140" class="b2mesh-line"/><line x1="550" y1="140" x2="800" y2="220" class="b2mesh-line"/><line x1="800" y1="220" x2="1050" y2="160" class="b2mesh-line"/>
			<line x1="200" y1="500" x2="450" y2="420" class="b2mesh-line"/><line x1="450" y1="420" x2="700" y2="480" class="b2mesh-line"/><line x1="700" y1="480" x2="950" y2="400" class="b2mesh-line"/>
			<line x1="300" y1="200" x2="450" y2="420" class="b2mesh-line"/><line x1="550" y1="140" x2="700" y2="480" class="b2mesh-line"/><line x1="800" y1="220" x2="950" y2="400" class="b2mesh-line"/>
			<circle cx="100" cy="120" r="3" class="b2mesh-dot"/><circle cx="300" cy="200" r="4" class="b2mesh-dot"/><circle cx="550" cy="140" r="3" class="b2mesh-dot"/><circle cx="800" cy="220" r="4" class="b2mesh-dot"/><circle cx="1050" cy="160" r="3" class="b2mesh-dot"/>
			<circle cx="200" cy="500" r="3" class="b2mesh-dot"/><circle cx="450" cy="420" r="4" class="b2mesh-dot"/><circle cx="700" cy="480" r="3" class="b2mesh-dot"/><circle cx="950" cy="400" r="4" class="b2mesh-dot"/>
		</svg>
		<span class="xcrm-b2__orb xcrm-b2__orb--1"></span>
		<span class="xcrm-b2__orb xcrm-b2__orb--2"></span>
		<span class="xcrm-b2__orb xcrm-b2__orb--3"></span>
		<span class="xcrm-b2__orb xcrm-b2__orb--4"></span>
	</div>
	<div class="xcrm-b2__inner xcrm-b2__hero-inner">
		<div class="xcrm-b2__hero-copy">
			<p class="xcrm-b2__eyebrow xcrm-b2-anim xcrm-b2-anim--1">مدیریت مشتری و اتوماسیون بازاریابی</p>
			<h1 class="xcrm-b2__h1 xcrm-b2-anim xcrm-b2-anim--2">مشتریان را بشناسید، فروش را مدیریت کنید، رشد کنید</h1>
			<p class="xcrm-b2__lead xcrm-b2-anim xcrm-b2-anim--3">اطلاعات مشتری، تحلیل رفتار، بخش‌بندی هوشمند و ارتباطات هدفمند — همه در یک پلتفرم یکپارچه برای کسب‌وکار شما.</p>
			<div class="xcrm-b2__hero-actions xcrm-b2-anim xcrm-b2-anim--4">
				<a href="<?php echo esc_url( $signup_url ); ?>" class="xcrm-b2__btn xcrm-b2__btn--primary">شروع استفاده از xCRM</a>
				<a href="#profiles" class="xcrm-b2__btn xcrm-b2__btn--secondary">آشنایی با امکانات</a>
			</div>
			<div class="xcrm-b2__hero-stats xcrm-b2-anim xcrm-b2-anim--5">
				<div class="xcrm-b2__hero-stat"><span class="xcrm-b2__hero-stat-n">۶</span><span class="xcrm-b2__hero-stat-l">محصول یکپارچه</span></div>
				<div class="xcrm-b2__hero-stat-sep" aria-hidden="true"></div>
				<div class="xcrm-b2__hero-stat"><span class="xcrm-b2__hero-stat-n">۴</span><span class="xcrm-b2__hero-stat-l">کانال ارتباطی</span></div>
				<div class="xcrm-b2__hero-stat-sep" aria-hidden="true"></div>
				<div class="xcrm-b2__hero-stat"><span class="xcrm-b2__hero-stat-n">∞</span><span class="xcrm-b2__hero-stat-l">بخش‌بندی پویا</span></div>
			</div>
		</div>
		<div class="xcrm-b2__hero-visual xcrm-b2-anim xcrm-b2-anim--3" aria-hidden="true">
			<!-- Central hub architecture: xCRM core with orbiting stages -->
			<svg class="xcrm-b2-flow" viewBox="0 0 620 480" fill="none" xmlns="http://www.w3.org/2000/svg">
				<defs>
					<linearGradient id="b2fLine" x1="0" y1="0" x2="620" y2="0"><stop offset="0%" stop-color="#6366F1"/><stop offset="50%" stop-color="#8B5CF6"/><stop offset="100%" stop-color="#06B6D4"/></linearGradient>
					<linearGradient id="b2fNode" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#8B5CF6"/></linearGradient>
					<radialGradient id="b2fCore" cx="50%" cy="50%" r="50%"><stop offset="0%" stop-color="#818CF8"/><stop offset="60%" stop-color="#6366F1"/><stop offset="100%" stop-color="#4F46E5"/></radialGradient>
					<radialGradient id="b2fGlow" cx="50%" cy="50%" r="50%"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.22"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0"/></radialGradient>
					<radialGradient id="b2fGlow2" cx="50%" cy="50%" r="50%"><stop offset="0%" stop-color="#06B6D4" stop-opacity="0.15"/><stop offset="100%" stop-color="#06B6D4" stop-opacity="0"/></radialGradient>
					<filter id="b2fSoft"><feGaussianBlur stdDeviation="8"/></filter>
				</defs>

				<!-- ambient glows -->
				<ellipse cx="310" cy="220" rx="240" ry="180" fill="url(#b2fGlow)" class="b2f-glow" filter="url(#b2fSoft)"/>
				<ellipse cx="480" cy="350" rx="100" ry="80" fill="url(#b2fGlow2)" class="b2f-glow"/>

				<!-- orbital rings around center -->
				<circle cx="310" cy="220" r="140" class="b2f-orbit b2f-orbit--1"/>
				<circle cx="310" cy="220" r="190" class="b2f-orbit b2f-orbit--2"/>
				<circle cx="310" cy="220" r="240" class="b2f-orbit b2f-orbit--3"/>

				<!-- connection paths: satellites → center -->
				<path pathLength="1" class="b2f-link b2f-link--1" d="M130 100 Q200 160 280 200" stroke="url(#b2fLine)" stroke-width="2" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2f-link b2f-link--2" d="M310 70 Q310 140 310 180" stroke="url(#b2fLine)" stroke-width="2" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2f-link b2f-link--3" d="M490 100 Q420 160 340 200" stroke="url(#b2fLine)" stroke-width="2" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2f-link b2f-link--4" d="M510 280 Q430 260 350 240" stroke="url(#b2fLine)" stroke-width="2" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2f-link b2f-link--5" d="M310 370 Q310 300 310 260" stroke="url(#b2fLine)" stroke-width="2" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2f-link b2f-link--6" d="M110 280 Q190 260 270 240" stroke="url(#b2fLine)" stroke-width="2" stroke-dasharray="1" fill="none"/>

				<!-- flowing particles: satellites → center (inbound) -->
				<circle r="4" fill="#6366F1" class="b2f-particle b2f-particle--1"><animateMotion dur="3s" repeatCount="indefinite" begin="0.3s"><mpath href="#b2fp1"/></animateMotion></circle>
				<path id="b2fp1" d="M130 100 Q200 160 280 200" fill="none" stroke="none"/>
				<circle r="3.5" fill="#8B5CF6" class="b2f-particle b2f-particle--2"><animateMotion dur="3s" repeatCount="indefinite" begin="0.9s"><mpath href="#b2fp2"/></animateMotion></circle>
				<path id="b2fp2" d="M310 70 Q310 140 310 180" fill="none" stroke="none"/>
				<circle r="4" fill="#06B6D4" class="b2f-particle b2f-particle--3"><animateMotion dur="3s" repeatCount="indefinite" begin="1.5s"><mpath href="#b2fp3"/></animateMotion></circle>
				<path id="b2fp3" d="M490 100 Q420 160 340 200" fill="none" stroke="none"/>

				<!-- flowing particles: center → satellites (outbound) -->
				<circle r="3.5" fill="#10B981" class="b2f-particle b2f-particle--4"><animateMotion dur="3s" repeatCount="indefinite" begin="2s"><mpath href="#b2fp4"/></animateMotion></circle>
				<path id="b2fp4" d="M350 240 Q430 260 510 280" fill="none" stroke="none"/>
				<circle r="4" fill="#F59E0B" class="b2f-particle b2f-particle--5"><animateMotion dur="3s" repeatCount="indefinite" begin="2.5s"><mpath href="#b2fp5"/></animateMotion></circle>
				<path id="b2fp5" d="M310 260 Q310 300 310 370" fill="none" stroke="none"/>
				<circle r="3.5" fill="#EC4899" class="b2f-particle b2f-particle--6"><animateMotion dur="3s" repeatCount="indefinite" begin="3s"><mpath href="#b2fp6"/></animateMotion></circle>
				<path id="b2fp6" d="M270 240 Q190 260 110 280" fill="none" stroke="none"/>

				<!-- ═══ CENTER: xCRM hub ═══ -->
				<g class="b2f-hub">
					<circle cx="310" cy="220" r="52" fill="url(#b2fCore)" class="b2f-hub-core"/>
					<circle cx="310" cy="220" r="62" class="b2f-hub-ring"/>
					<circle cx="310" cy="220" r="75" class="b2f-hub-ring b2f-hub-ring--2"/>
					<text x="310" y="218" text-anchor="middle" fill="#fff" font-size="16" font-weight="800" font-family="inherit">xCRM</text>
					<text x="310" y="236" text-anchor="middle" fill="rgba(255,255,255,0.6)" font-size="8" font-weight="600" font-family="inherit">هسته مرکزی</text>
				</g>

				<!-- ═══ SATELLITE 1: بازدیدکننده (top-left) ═══ -->
				<g class="b2f-node b2f-node--visitor">
					<circle cx="110" cy="85" r="30" class="b2f-node-bg"/>
					<circle cx="110" cy="85" r="36" class="b2f-node-ring"/>
					<circle cx="110" cy="76" r="7" fill="#6366F1" opacity="0.9"/>
					<path d="M98 98 Q110 88 122 98" stroke="#6366F1" stroke-width="2" fill="none" stroke-linecap="round"/>
					<text x="110" y="130" text-anchor="middle" class="b2f-label">بازدیدکننده</text>
				</g>

				<!-- ═══ SATELLITE 2: شناسایی (top-center) ═══ -->
				<g class="b2f-node b2f-node--identify">
					<circle cx="310" cy="60" r="26" class="b2f-node-bg"/>
					<circle cx="310" cy="60" r="32" class="b2f-node-ring"/>
					<path pathLength="1" class="b2f-eye" d="M297 60 Q310 48 323 60 Q310 72 297 60Z" stroke="#6366F1" stroke-width="2" fill="none"/>
					<circle cx="310" cy="60" r="4" fill="#6366F1"/>
					<text x="310" y="100" text-anchor="middle" class="b2f-label">شناسایی</text>
				</g>

				<!-- ═══ SATELLITE 3: پروفایل (top-right) ═══ -->
				<g class="b2f-node b2f-node--profile">
					<rect x="460" y="55" width="90" height="65" rx="12" class="b2f-node-bg b2f-node-bg--panel"/>
					<rect x="460" y="55" width="90" height="20" rx="12" class="b2f-panel-header"/>
					<circle cx="476" cy="65" r="4" fill="#6366F1" opacity="0.8"/>
					<circle cx="486" cy="65" r="4" fill="#06B6D4" opacity="0.6"/>
					<circle cx="496" cy="65" r="4" fill="#10B981" opacity="0.5"/>
					<circle cx="480" cy="88" r="7" fill="url(#b2fNode)"/>
					<rect x="492" y="84" width="30" height="4" rx="2" class="b2f-line-sm"/>
					<rect x="492" y="92" width="20" height="3" rx="1.5" class="b2f-line-sm"/>
					<rect x="470" y="100" width="55" height="3" rx="1.5" class="b2f-line-sm b2f-line-sm--faint"/>
					<text x="505" y="138" text-anchor="middle" class="b2f-label">پروفایل مشتری</text>
				</g>

				<!-- ═══ SATELLITE 4: بخش‌بندی (right) ═══ -->
				<g class="b2f-node b2f-node--segment">
					<circle cx="530" cy="280" r="28" class="b2f-node-bg"/>
					<circle cx="530" cy="280" r="34" class="b2f-node-ring"/>
					<circle cx="520" cy="272" r="5" fill="#6366F1"/><circle cx="540" cy="268" r="5" fill="#06B6D4"/><circle cx="530" cy="288" r="5" fill="#8B5CF6"/>
					<circle cx="530" cy="280" r="18" class="b2f-seg-ring"/>
					<text x="530" y="322" text-anchor="middle" class="b2f-label">بخش‌بندی</text>
				</g>

				<!-- ═══ SATELLITE 5: اتوماسیون (bottom-center) ═══ -->
				<g class="b2f-node b2f-node--auto">
					<rect x="280" y="355" width="60" height="44" rx="11" class="b2f-node-bg"/>
					<rect x="280" y="355" width="60" height="44" rx="11" class="b2f-node-ring"/>
					<polygon points="305,365 296,382 303,382 298,396 318,378 310,378 318,365" fill="#6366F1" opacity="0.9"/>
					<text x="310" y="418" text-anchor="middle" class="b2f-label">اتوماسیون</text>
				</g>

				<!-- ═══ SATELLITE 6: کانال‌ها (left) ═══ -->
				<g class="b2f-node b2f-node--chan">
					<rect x="55" y="260" width="80" height="40" rx="11" class="b2f-node-bg"/>
					<rect x="55" y="260" width="80" height="40" rx="11" class="b2f-node-ring"/>
					<circle cx="73" cy="280" r="4.5" fill="#6366F1"/><circle cx="87" cy="280" r="4.5" fill="#06B6D4"/><circle cx="101" cy="280" r="4.5" fill="#F59E0B"/><circle cx="115" cy="280" r="4.5" fill="#EC4899"/>
					<text x="95" y="318" text-anchor="middle" class="b2f-label">کانال‌ها</text>
				</g>

				<!-- floating accent dots -->
				<circle class="b2f-dot b2f-dot--1" cx="50" cy="160" r="3" fill="#6366F1"/>
				<circle class="b2f-dot b2f-dot--2" cx="570" cy="140" r="2.5" fill="#06B6D4"/>
				<circle class="b2f-dot b2f-dot--3" cx="40" cy="350" r="2.5" fill="#8B5CF6"/>
				<circle class="b2f-dot b2f-dot--4" cx="580" cy="380" r="2.5" fill="#10B981"/>
				<circle class="b2f-dot b2f-dot--5" cx="310" cy="440" r="3" fill="#F59E0B"/>
				<circle class="b2f-dot b2f-dot--6" cx="170" cy="400" r="2" fill="#EC4899"/>
				<circle class="b2f-dot b2f-dot--7" cx="450" cy="420" r="2.5" fill="#6366F1"/>

				<!-- constellation decorations -->
				<text class="b2f-plus b2f-plus--1" x="560" y="200" fill="#6366F1" font-size="14" font-weight="300" opacity="0.25">+</text>
				<text class="b2f-plus b2f-plus--2" x="50" y="220" fill="#06B6D4" font-size="12" font-weight="300" opacity="0.2">+</text>
				<text class="b2f-plus b2f-plus--3" x="480" y="440" fill="#8B5CF6" font-size="11" font-weight="300" opacity="0.2">+</text>
				<text class="b2f-plus b2f-plus--4" x="200" y="440" fill="#10B981" font-size="10" font-weight="300" opacity="0.18">+</text>
			</svg>
		</div>
	</div>
</section>

<!-- ══════════ 2. CHALLENGES ══════════ -->
<section class="xcrm-b2__section xcrm-b2__section--surface" id="challenges">
	<div class="xcrm-b2__deco xcrm-b2__deco--indigo" style="top:10%;left:-6%;" aria-hidden="true"></div>
	<div class="xcrm-b2__inner">
		<div class="xcrm-b2__head" data-reveal="up">
			<p class="xcrm-b2__eyebrow">چالش‌های کسب‌وکارها</p>
			<h2 class="xcrm-b2__h2">مشکلات واقعی که xCRM حل می‌کند</h2>
		</div>

		<!-- Challenge 1: Scattered data -->
		<article class="xcrm-b2__chal" data-reveal="up">
			<div class="xcrm-b2__chal-visual">
				<svg class="xcrm-b2-svg" viewBox="0 0 380 260" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<defs><linearGradient id="b2ch1g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.1"/><stop offset="100%" stop-color="#8B5CF6" stop-opacity="0.04"/></linearGradient></defs>
					<rect x="10" y="10" width="360" height="240" rx="20" fill="url(#b2ch1g)"/>
					<!-- scattered app windows -->
					<g class="b2ch1-win b2ch1-win--1"><rect x="30" y="40" width="90" height="60" rx="8" class="b2ch1-frame"/><rect x="30" y="40" width="90" height="16" rx="8" class="b2ch1-bar"/><circle cx="42" cy="48" r="2.5" fill="#F04438" opacity="0.6"/><circle cx="50" cy="48" r="2.5" fill="#F59E0B" opacity="0.6"/><rect x="40" y="64" width="50" height="5" rx="2.5" class="b2ch1-line"/><rect x="40" y="74" width="35" height="4" rx="2" class="b2ch1-line"/><rect x="40" y="84" width="42" height="4" rx="2" class="b2ch1-line"/></g>
					<g class="b2ch1-win b2ch1-win--2"><rect x="150" y="30" width="80" height="55" rx="8" class="b2ch1-frame"/><rect x="150" y="30" width="80" height="14" rx="8" class="b2ch1-bar"/><rect x="160" y="52" width="45" height="5" rx="2.5" class="b2ch1-line"/><rect x="160" y="62" width="30" height="4" rx="2" class="b2ch1-line"/></g>
					<g class="b2ch1-win b2ch1-win--3"><rect x="270" y="50" width="85" height="58" rx="8" class="b2ch1-frame"/><rect x="270" y="50" width="85" height="14" rx="8" class="b2ch1-bar"/><rect x="280" y="72" width="50" height="5" rx="2.5" class="b2ch1-line"/><rect x="280" y="82" width="38" height="4" rx="2" class="b2ch1-line"/><rect x="280" y="92" width="44" height="4" rx="2" class="b2ch1-line"/></g>
					<g class="b2ch1-win b2ch1-win--4"><rect x="50" y="150" width="85" height="55" rx="8" class="b2ch1-frame"/><rect x="50" y="150" width="85" height="14" rx="8" class="b2ch1-bar"/><rect x="60" y="172" width="48" height="5" rx="2.5" class="b2ch1-line"/><rect x="60" y="182" width="32" height="4" rx="2" class="b2ch1-line"/></g>
					<g class="b2ch1-win b2ch1-win--5"><rect x="170" y="140" width="90" height="60" rx="8" class="b2ch1-frame"/><rect x="170" y="140" width="90" height="14" rx="8" class="b2ch1-bar"/><rect x="180" y="162" width="55" height="5" rx="2.5" class="b2ch1-line"/><rect x="180" y="172" width="40" height="4" rx="2" class="b2ch1-line"/><rect x="180" y="182" width="48" height="4" rx="2" class="b2ch1-line"/></g>
					<!-- broken connections -->
					<path pathLength="1" class="b2ch1-link b2ch1-link--1" d="M120 70 L150 58" stroke-dasharray="1"/>
					<path pathLength="1" class="b2ch1-link b2ch1-link--2" d="M230 58 L270 68" stroke-dasharray="1"/>
					<path pathLength="1" class="b2ch1-link b2ch1-link--3" d="M92 100 L170 148" stroke-dasharray="1"/>
					<path pathLength="1" class="b2ch1-link b2ch1-link--4" d="M230 170 L270 110" stroke-dasharray="1"/>
					<!-- question marks floating -->
					<text class="b2ch1-q b2ch1-q--1" x="130" y="120" fill="#F59E0B" font-size="16" font-weight="800" font-family="inherit">؟</text>
					<text class="b2ch1-q b2ch1-q--2" x="260" y="130" fill="#6366F1" font-size="14" font-weight="800" font-family="inherit">؟</text>
					<text class="b2ch1-q b2ch1-q--3" x="100" y="220" fill="#06B6D4" font-size="12" font-weight="800" font-family="inherit">؟</text>
				</svg>
			</div>
			<div class="xcrm-b2__chal-body">
				<span class="xcrm-b2__chal-num" aria-hidden="true">۰۱</span>
				<h3 class="xcrm-b2__chal-title">پراکندگی اطلاعات مشتریان</h3>
				<p class="xcrm-b2__chal-desc">اطلاعات تماس، سوابق خرید، یادداشت‌های تیم فروش و ویژگی‌های اختصاصی مشتریان در ابزارهای مختلف پراکنده است. تیم شما مجبور است بین اکسل، ایمیل، شبکه‌های اجتماعی و یادداشت‌های جداگانه جستجو کند — و هر بار بخشی از اطلاعات مهم را از دست می‌دهد.</p>
				<ul class="xcrm-b2__chal-tags"><li>اتلاف زمان جستجو</li><li>اطلاعات ناقص</li><li>هماهنگی ضعیف تیم</li></ul>
			</div>
		</article>

		<!-- Challenge 2: Lost opportunities -->
		<article class="xcrm-b2__chal xcrm-b2__chal--rev" data-reveal="up">
			<div class="xcrm-b2__chal-visual">
				<svg class="xcrm-b2-svg" viewBox="0 0 380 260" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<defs><linearGradient id="b2ch2g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#F04438" stop-opacity="0.08"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.04"/></linearGradient></defs>
					<rect x="10" y="10" width="360" height="240" rx="20" fill="url(#b2ch2g)"/>
					<!-- rising chart that breaks -->
					<path pathLength="1" class="b2ch2-line" d="M40 200 L90 170 L140 180 L190 120 L240 100 L290 60" stroke="#6366F1" stroke-width="3" stroke-linecap="round" fill="none"/>
					<circle class="b2ch2-dot" cx="40" cy="200" r="4" fill="#6366F1"/>
					<circle class="b2ch2-dot" cx="90" cy="170" r="4" fill="#6366F1"/>
					<circle class="b2ch2-dot" cx="140" cy="180" r="4" fill="#6366F1"/>
					<circle class="b2ch2-dot" cx="190" cy="120" r="4" fill="#6366F1"/>
					<circle class="b2ch2-dot" cx="240" cy="100" r="4" fill="#6366F1"/>
					<!-- break X -->
					<path pathLength="1" class="b2ch2-break" d="M275 75 L295 55" stroke="#F04438" stroke-width="3" stroke-linecap="round"/>
					<path pathLength="1" class="b2ch2-break" d="M277 55 L297 75" stroke="#F04438" stroke-width="3" stroke-linecap="round"/>
					<!-- faded continuation -->
					<path pathLength="1" class="b2ch2-fade" d="M295 60 L330 50" stroke="#F04438" stroke-width="2" stroke-dasharray="4 4" fill="none"/>
					<!-- alert badge -->
					<g class="b2ch2-alert">
						<rect x="230" y="100" width="120" height="36" rx="10" class="b2ch2-alert-bg"/>
						<text x="290" y="123" text-anchor="middle" class="b2ch2-alert-t">فرصت از دست رفت!</text>
					</g>
					<!-- floating clock -->
					<g class="b2ch2-clock">
						<circle cx="70" cy="60" r="22" class="b2ch2-clock-face"/>
						<path pathLength="1" class="b2ch2-clock-hand" d="M70 60 L70 46" stroke="#F04438" stroke-width="2" stroke-linecap="round"/>
						<path pathLength="1" class="b2ch2-clock-hand" d="M70 60 L80 60" stroke="#F04438" stroke-width="1.5" stroke-linecap="round"/>
					</g>
					<!-- lost opportunity cards fading -->
					<g class="b2ch2-ghost b2ch2-ghost--1"><rect x="50" y="130" width="40" height="20" rx="5" class="b2ch2-ghost-bg"/><text x="70" y="144" text-anchor="middle" class="b2ch2-ghost-t">فرصت ۱</text></g>
					<g class="b2ch2-ghost b2ch2-ghost--2"><rect x="100" y="100" width="40" height="20" rx="5" class="b2ch2-ghost-bg"/><text x="120" y="114" text-anchor="middle" class="b2ch2-ghost-t">فرصت ۲</text></g>
				</svg>
			</div>
			<div class="xcrm-b2__chal-body">
				<span class="xcrm-b2__chal-num" aria-hidden="true">۰۲</span>
				<h3 class="xcrm-b2__chal-title">از دست رفتن فرصت‌های فروش</h3>
				<p class="xcrm-b2__chal-desc">وقتی پیگیری منظم وجود ندارد، فرصت‌های فروش به‌آرامی فراموش می‌شوند. مشتری علاقه‌مند دیروز، فردا پاسخ نمی‌گیرد و رقیب جای شما را می‌گیرد. بدون یادآوری و مسئول مشخص، هر فرصت در معرض از دست رفتن است.</p>
				<ul class="xcrm-b2__chal-tags"><li>فراموشی پیگیری</li><li>از دست رفتن درآمد</li><li>مزیت رقیب</li></ul>
			</div>
		</article>

		<!-- Challenge 3: Untargeted communication -->
		<article class="xcrm-b2__chal" data-reveal="up">
			<div class="xcrm-b2__chal-visual">
				<svg class="xcrm-b2-svg" viewBox="0 0 380 260" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<defs><linearGradient id="b2ch3g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#EC4899" stop-opacity="0.08"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.04"/></linearGradient></defs>
					<rect x="10" y="10" width="360" height="240" rx="20" fill="url(#b2ch3g)"/>
					<!-- center: broadcast source -->
					<circle cx="190" cy="130" r="24" class="b2ch3-source"/>
					<text x="190" y="135" text-anchor="middle" fill="#fff" font-size="10" font-weight="800" font-family="inherit">شما</text>
					<!-- broadcast waves -->
					<path pathLength="1" class="b2ch3-wave b2ch3-wave--1" d="M220 110 Q260 130 220 150" stroke="#6366F1" stroke-width="2" fill="none"/>
					<path pathLength="1" class="b2ch3-wave b2ch3-wave--2" d="M230 95 Q290 130 230 165" stroke="#6366F1" stroke-width="2" fill="none"/>
					<path pathLength="1" class="b2ch3-wave b2ch3-wave--3" d="M240 80 Q320 130 240 180" stroke="#6366F1" stroke-width="2" fill="none"/>
					<!-- recipients (most uninterested) -->
					<g class="b2ch3-user b2ch3-user--1"><circle cx="300" cy="60" r="14" class="b2ch3-user-bg"/><text x="300" y="65" text-anchor="middle" class="b2ch3-user-t">الف</text></g>
					<g class="b2ch3-user b2ch3-user--2"><circle cx="320" cy="120" r="14" class="b2ch3-user-bg"/><text x="320" y="125" text-anchor="middle" class="b2ch3-user-t">ب</text></g>
					<g class="b2ch3-user b2ch3-user--3"><circle cx="310" cy="190" r="14" class="b2ch3-user-bg"/><text x="310" y="195" text-anchor="middle" class="b2ch3-user-t">ج</text></g>
					<!-- X marks (not interested) -->
					<g class="b2ch3-x b2ch3-x--1"><circle cx="300" cy="60" r="16" class="b2ch3-x-ring"/><path d="M295 55 l10 10M305 55 l-10 10" stroke="#F04438" stroke-width="1.5" stroke-linecap="round"/></g>
					<g class="b2ch3-x b2ch3-x--2"><circle cx="320" cy="120" r="16" class="b2ch3-x-ring"/><path d="M315 115 l10 10M325 115 l-10 10" stroke="#F04438" stroke-width="1.5" stroke-linecap="round"/></g>
					<g class="b2ch3-x b2ch3-x--3"><circle cx="310" cy="190" r="16" class="b2ch3-x-ring"/><path d="M305 185 l10 10M315 185 l-10 10" stroke="#F04438" stroke-width="1.5" stroke-linecap="round"/></g>
					<!-- engagement counter -->
					<g class="b2ch3-counter">
						<rect x="40" y="180" width="100" height="40" rx="10" class="b2ch3-counter-bg"/>
						<text x="90" y="198" text-anchor="middle" class="b2ch3-counter-l">نرخ تعامل</text>
						<text x="90" y="214" text-anchor="middle" class="b2ch3-counter-v">۲٪</text>
					</g>
				</svg>
			</div>
			<div class="xcrm-b2__chal-body">
				<span class="xcrm-b2__chal-num" aria-hidden="true">۰۳</span>
				<h3 class="xcrm-b2__chal-title">ارتباطات غیرهدفمند</h3>
				<p class="xcrm-b2__chal-desc">ارسال یک پیام عمومی به همه مشتریان بدون در نظر گرفتن رفتار و ویژگی‌هایشان، نرخ تعامل را به شدت کاهش می‌دهد. مشتریان پیام‌های بی‌ربط را نادیده می‌گیرند و حتی ممکن است برند شما را مزاحم بدانند.</p>
				<ul class="xcrm-b2__chal-tags"><li>نرخ تعامل پایین</li><li>هزینه هدررفته</li><li>آسیب به برند</li></ul>
			</div>
		</article>

		<!-- Challenge 4: Blind decisions -->
		<article class="xcrm-b2__chal xcrm-b2__chal--rev" data-reveal="up">
			<div class="xcrm-b2__chal-visual">
				<svg class="xcrm-b2-svg" viewBox="0 0 380 260" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<defs><linearGradient id="b2ch4g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#F59E0B" stop-opacity="0.08"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.04"/></linearGradient></defs>
					<rect x="10" y="10" width="360" height="240" rx="20" fill="url(#b2ch4g)"/>
					<!-- bars with question marks -->
					<rect x="50" y="160" width="40" height="50" rx="6" class="b2ch4-bar b2ch4-bar--1"/>
					<text x="70" y="150" text-anchor="middle" fill="#F59E0B" font-size="14" font-weight="800" font-family="inherit">؟</text>
					<rect x="110" y="130" width="40" height="80" rx="6" class="b2ch4-bar b2ch4-bar--2"/>
					<text x="130" y="120" text-anchor="middle" fill="#F59E0B" font-size="14" font-weight="800" font-family="inherit">؟</text>
					<rect x="170" y="145" width="40" height="65" rx="6" class="b2ch4-bar b2ch4-bar--3"/>
					<text x="190" y="135" text-anchor="middle" fill="#F59E0B" font-size="14" font-weight="800" font-family="inherit">؟</text>
					<rect x="230" y="100" width="40" height="110" rx="6" class="b2ch4-bar b2ch4-bar--4"/>
					<text x="250" y="90" text-anchor="middle" fill="#F59E0B" font-size="14" font-weight="800" font-family="inherit">؟</text>
					<rect x="290" y="140" width="40" height="70" rx="6" class="b2ch4-bar b2ch4-bar--5"/>
					<text x="310" y="130" text-anchor="middle" fill="#F59E0B" font-size="14" font-weight="800" font-family="inherit">؟</text>
					<!-- blindfolded person -->
					<g class="b2ch4-person">
						<circle cx="190" cy="55" r="18" class="b2ch4-person-head"/>
						<rect x="172" y="50" width="36" height="10" rx="3" fill="#F04438" opacity="0.6"/>
						<path d="M175 75 Q190 65 205 75" stroke="var(--x-text-muted)" stroke-width="2" fill="none" stroke-linecap="round"/>
					</g>
					<!-- axis -->
					<line x1="40" y1="220" x2="340" y2="220" stroke="var(--x-border)" stroke-width="1.5"/>
					<text x="190" y="245" text-anchor="middle" class="b2ch4-axis-t">بدون داده، تصمیم کور است</text>
				</svg>
			</div>
			<div class="xcrm-b2__chal-body">
				<span class="xcrm-b2__chal-num" aria-hidden="true">۰۴</span>
				<h3 class="xcrm-b2__chal-title">دشواری تحلیل عملکرد</h3>
				<p class="xcrm-b2__chal-desc">بدون داده‌های ساختاریافته از رفتار مشتریان، مسیر خرید و عملکرد کمپین‌ها، تصمیم‌گیری بر اساس حدس و گمان انجام می‌شود. کدام کمپین مؤثر بود؟ کدام مشتری در معرض ریزش است؟ کدام محصول پرفروش است؟ بدون تحلیل، پاسخ این سؤالات مشخص نیست.</p>
				<ul class="xcrm-b2__chal-tags"><li>تصمیم کور</li><li>اتلاف بودجه</li><li>عدم شفافیت</li></ul>
			</div>
		</article>
	</div>
</section>

<!-- ══════════ 3. CUSTOMER PROFILES ══════════ -->
<section class="xcrm-b2__section" id="profiles">
	<div class="xcrm-b2__deco xcrm-b2__deco--cyan" style="top:15%;right:-5%;" aria-hidden="true"></div>
	<div class="xcrm-b2__inner xcrm-b2__split">
		<div class="xcrm-b2__split-copy" data-reveal="up">
			<p class="xcrm-b2__eyebrow">مدیریت یکپارچهٔ مشتریان</p>
			<h2 class="xcrm-b2__h2">هر مشتری، یک پروفایل کامل و قابل مدیریت</h2>
			<p class="xcrm-b2__desc">اطلاعات تماس، ویژگی‌های اختصاصی، تاریخچهٔ تعاملات و رویدادهای هر مشتری در یک محل گردآوری شده است.</p>
			<ul class="xcrm-b2__checklist">
				<li>پروفایل مشتری با اطلاعات تماس و ویژگی‌های اختصاصی</li>
				<li>تاریخچهٔ تعاملات و رویدادهای ثبت‌شده</li>
				<li>ارتباط اطلاعات مشتری با فعالیت‌های فروش و بازاریابی</li>
				<li>واردکردن اطلاعات از CSV، Excel، JSON یا API</li>
			</ul>
			<a href="#start" class="xcrm-b2__text-link">آشنایی با مدیریت مشتریان <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg></a>
		</div>
		<div class="xcrm-b2__split-visual" data-reveal="up" data-reveal-delay="100" aria-hidden="true">
			<svg class="xcrm-b2-svg" viewBox="0 0 380 300" fill="none" xmlns="http://www.w3.org/2000/svg">
				<defs><linearGradient id="b2pG" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.1"/><stop offset="100%" stop-color="#8B5CF6" stop-opacity="0.05"/></linearGradient><radialGradient id="b2pAv" cx="50%" cy="40%" r="50%"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#8B5CF6"/></radialGradient></defs>
				<rect x="20" y="20" width="340" height="260" rx="22" fill="url(#b2pG)"/>
				<rect x="50" y="40" width="280" height="230" rx="16" class="b2p-card"/>
				<circle cx="100" cy="85" r="24" fill="url(#b2pAv)" class="b2p-avatar"/>
				<circle cx="100" cy="85" r="30" class="b2p-ring"/>
				<rect x="136" y="72" width="100" height="9" rx="4.5" class="b2p-line b2p-line--1"/>
				<rect x="136" y="88" width="70" height="7" rx="3.5" class="b2p-line b2p-line--2"/>
				<g class="b2p-pill"><rect x="270" y="70" width="48" height="22" rx="11" fill="#ECFDF5"/><text x="294" y="85" text-anchor="middle" fill="#059669" font-size="9" font-weight="700" font-family="inherit">فعال</text></g>
				<rect x="70" y="130" width="240" height="6" rx="3" class="b2p-line b2p-line--3"/>
				<rect x="70" y="148" width="200" height="6" rx="3" class="b2p-line b2p-line--4"/>
				<rect x="70" y="166" width="180" height="6" rx="3" class="b2p-line b2p-line--5"/>
				<g class="b2p-tag b2p-tag--1"><rect x="70" y="190" width="60" height="22" rx="11" class="b2p-tag-bg"/><text x="100" y="205" text-anchor="middle" class="b2p-tag-t">ویژه</text></g>
				<g class="b2p-tag b2p-tag--2"><rect x="138" y="190" width="68" height="22" rx="11" class="b2p-tag-bg"/><text x="172" y="205" text-anchor="middle" class="b2p-tag-t">تکراری</text></g>
				<g class="b2p-tag b2p-tag--3"><rect x="214" y="190" width="56" height="22" rx="11" class="b2p-tag-bg"/><text x="242" y="205" text-anchor="middle" class="b2p-tag-t">جدید</text></g>
				<circle cx="82" cy="236" r="5" class="b2p-tl-dot"/>
				<path pathLength="1" class="b2p-tl-line" d="M94 236 H310"/>
			</svg>
		</div>
	</div>
</section>

<!-- ══════════ 4. SALES PIPELINE ══════════ -->
<section class="xcrm-b2__section xcrm-b2__section--surface" id="pipeline">
	<div class="xcrm-b2__inner">
		<div class="xcrm-b2__head" data-reveal="up">
			<p class="xcrm-b2__eyebrow">مدیریت فرایند فروش</p>
			<h2 class="xcrm-b2__h2">مسیر هر فرصت فروش را شفاف دنبال کنید</h2>
			<p class="xcrm-b2__desc">مراحل فروش را تعریف کنید، وضعیت فرصت‌ها را تغییر دهید و مسئول هر کار را مشخص کنید.</p>
		</div>
		<div class="xcrm-b2__kanban-wrap" data-reveal="up" aria-hidden="true">
			<div class="xcrm-b2__kanban">
				<!-- Stage 1: سرنخ جدید -->
				<div class="xcrm-b2__kcol">
					<header><span>سرنخ جدید</span><em class="b2k-count b2k-count--1">۳</em></header>
					<div class="xcrm-b2__ktask b2k-card b2k-card--a"><strong>شرکت آریا</strong><span>تماس اولیه</span></div>
					<div class="xcrm-b2__ktask b2k-card b2k-card--b"><strong>فروشگاه پارس</strong><span>درخواست دمو</span></div>
					<div class="xcrm-b2__ktask b2k-card b2k-card--c"><strong>گروه نوین</strong><span>فرم وب‌سایت</span></div>
					<!-- incoming new card (infinite) -->
					<div class="xcrm-b2__ktask b2k-new b2k-new--1"><strong>شرکت آریانا</strong><span>سرنخ جدید</span></div>
				</div>
				<!-- Stage 2: در حال پیگیری -->
				<div class="xcrm-b2__kcol">
					<header><span>در حال پیگیری</span><em class="b2k-count b2k-count--2">۲</em></header>
					<div class="xcrm-b2__ktask xcrm-b2__ktask--active b2k-card b2k-card--d"><strong>استارتاپ رها</strong><span>ارسال پیشنهاد</span></div>
					<div class="xcrm-b2__ktask b2k-card b2k-card--e"><strong>شرکت کیان</strong><span>جلسه حضوری</span></div>
					<!-- moving in card -->
					<div class="xcrm-b2__ktask b2k-move b2k-move--1"><strong>شرکت آریا</strong><span>پیگیری</span></div>
				</div>
				<!-- Stage 3: مذاکره -->
				<div class="xcrm-b2__kcol">
					<header><span>مذاکره</span><em class="b2k-count b2k-count--3">۲</em></header>
					<div class="xcrm-b2__ktask b2k-card b2k-card--f"><strong>برند مهر</strong><span>شروط قرارداد</span></div>
					<div class="xcrm-b2__ktask b2k-card b2k-card--g"><strong>هلدینگ سپهر</strong><span>تخفیف سالانه</span></div>
					<div class="xcrm-b2__ktask b2k-move b2k-move--2"><strong>استارتاپ رها</strong><span>مذاکره</span></div>
				</div>
				<!-- Stage 4: آماده تصمیم -->
				<div class="xcrm-b2__kcol">
					<header><span>آماده تصمیم</span><em class="b2k-count b2k-count--4">۱</em></header>
					<div class="xcrm-b2__ktask b2k-card b2k-card--h"><strong>آژانس نور</strong><span>تأیید مدیرعامل</span></div>
					<div class="xcrm-b2__ktask b2k-move b2k-move--3"><strong>برند مهر</strong><span>تصمیم نهایی</span></div>
				</div>
				<!-- Stage 5: نهایی‌شده -->
				<div class="xcrm-b2__kcol xcrm-b2__kcol--done">
					<header><span>نهایی‌شده</span><em class="b2k-count b2k-count--5">۲</em></header>
					<div class="xcrm-b2__ktask b2k-card b2k-card--i"><strong>فروشگاه لونا</strong><span>قرارداد امضاشده</span></div>
					<div class="xcrm-b2__ktask b2k-card b2k-card--j"><strong>شرکت پارمیس</strong><span>شروع پشتیبانی</span></div>
					<div class="xcrm-b2__ktask b2k-win b2k-win--1"><strong>آژانس نور</strong><span>✓ فروش موفق</span></div>
				</div>
			</div>
			<!-- animated flow arrows between columns -->
			<div class="b2k-arrows" aria-hidden="true">
				<svg class="b2k-arrow b2k-arrow--1" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				<svg class="b2k-arrow b2k-arrow--2" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				<svg class="b2k-arrow b2k-arrow--3" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				<svg class="b2k-arrow b2k-arrow--4" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</div>
		</div>
		<p class="xcrm-b2__note" data-reveal="up">نام مراحل صرفاً نمونه‌اند و متناسب با فرآیند فروش شما قابل تنظیم‌اند.</p>
	</div>
</section>

<!-- ══════════ 5. FOLLOW-UPS ══════════ -->
<section class="xcrm-b2__section" id="followups">
	<div class="xcrm-b2__deco xcrm-b2__deco--purple" style="bottom:10%;left:-5%;" aria-hidden="true"></div>
	<div class="xcrm-b2__inner xcrm-b2__split xcrm-b2__split--rev">
		<div class="xcrm-b2__split-copy" data-reveal="up">
			<p class="xcrm-b2__eyebrow">پیگیری و یادآوری هوشمند</p>
			<h2 class="xcrm-b2__h2">هیچ پیگیری مهمی را از دست ندهید</h2>
			<p class="xcrm-b2__desc">یادآوری‌ها را به مشتریان و مراحل فروش مرتبط کنید، مسئول انجام کارها را مشخص کنید و وضعیت پیگیری‌ها را دنبال کنید.</p>
			<ul class="xcrm-b2__checklist">
				<li>یادآوری فعالیت‌ها با تاریخ و ساعت</li>
				<li>تخصیص وظایف به اعضای تیم</li>
				<li>پیگیری مرحله‌های بعدی</li>
				<li>کاهش وابستگی به حافظه و ابزارهای پراکنده</li>
			</ul>
			<a href="#start" class="xcrm-b2__text-link">آشنایی با یادآوری‌ها <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg></a>
		</div>
		<div class="xcrm-b2__split-visual" data-reveal="up" data-reveal-delay="100" aria-hidden="true">
			<svg class="xcrm-b2-svg" viewBox="0 0 380 300" fill="none" xmlns="http://www.w3.org/2000/svg">
				<defs><linearGradient id="b2fuG" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#F59E0B" stop-opacity="0.1"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.05"/></linearGradient></defs>
				<rect x="20" y="20" width="340" height="260" rx="22" fill="url(#b2fuG)"/>
				<rect x="60" y="50" width="140" height="120" rx="14" class="b2fu-cal"/>
				<rect x="60" y="50" width="140" height="30" rx="14" class="b2fu-cal-head"/>
				<text x="130" y="70" text-anchor="middle" fill="#fff" font-size="10" font-weight="700" font-family="inherit">تقویم</text>
				<circle cx="90" cy="100" r="6" class="b2fu-cal-dot b2fu-cal-dot--1"/>
				<circle cx="115" cy="100" r="6" class="b2fu-cal-dot b2fu-cal-dot--2"/>
				<circle cx="140" cy="100" r="6" class="b2fu-cal-dot b2fu-cal-dot--3"/>
				<circle cx="165" cy="100" r="6" class="b2fu-cal-dot b2fu-cal-dot--4"/>
				<circle cx="90" cy="125" r="6" class="b2fu-cal-dot b2fu-cal-dot--5"/>
				<circle cx="115" cy="125" r="6" class="b2fu-cal-dot b2fu-cal-dot--6"/>
				<circle cx="140" cy="125" r="6" class="b2fu-cal-dot b2fu-cal-dot--active"/>
				<g class="b2fu-bell">
					<path pathLength="1" class="b2fu-bell-path" d="M280 60 c-12 0-20 9-20 20 v16 l-8 10 h56 l-8-10 v-16 c0-11-8-20-20-20z" stroke-width="2" fill="none" stroke-linecap="round"/>
					<circle cx="280" cy="112" r="6" class="b2fu-bell-clapper"/>
				</g>
				<g class="b2fu-nbadge"><circle cx="302" cy="56" r="11" fill="#F04438"/><text x="302" y="60" text-anchor="middle" fill="#fff" font-size="9" font-weight="800" font-family="inherit">۳</text></g>
				<g class="b2fu-task b2fu-task--1"><rect x="60" y="190" width="260" height="32" rx="10" class="b2fu-task-bg"/><circle cx="82" cy="206" r="7" class="b2fu-task-dot b2fu-task-dot--done"/><rect x="98" y="202" width="120" height="7" rx="3.5" class="b2fu-task-l"/><text x="280" y="210" text-anchor="end" fill="#10B981" font-size="8" font-weight="700" font-family="inherit">انجام‌شده</text></g>
				<g class="b2fu-task b2fu-task--2"><rect x="60" y="230" width="260" height="32" rx="10" class="b2fu-task-bg"/><circle cx="82" cy="246" r="7" class="b2fu-task-dot b2fu-task-dot--active"/><rect x="98" y="242" width="100" height="7" rx="3.5" class="b2fu-task-l"/><text x="290" y="250" text-anchor="end" fill="#6366F1" font-size="8" font-weight="700" font-family="inherit">امروز</text></g>
				<path pathLength="1" class="b2fu-link" d="M200 110 H252" stroke="#E7EAF0" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
			</svg>
		</div>
	</div>
</section>

<!-- ══════════ 6. SEGMENTATION ══════════ -->
<section class="xcrm-b2__section xcrm-b2__section--surface" id="segmentation">
	<div class="xcrm-b2__inner">
		<div class="xcrm-b2__head" data-reveal="up">
			<p class="xcrm-b2__eyebrow">بخش‌بندی مشتریان</p>
			<h2 class="xcrm-b2__h2">مشتریان را بر اساس ویژگی‌ها و رفتارشان گروه‌بندی کنید</h2>
			<p class="xcrm-b2__desc">فیلتر بر اساس ویژگی‌ها، اطلاعات تماس، تعاملات و شرایط کسب‌وکار — برای ارتباطات هدفمند.</p>
		</div>
		<div class="xcrm-b2__seg-visual" data-reveal="up" aria-hidden="true">
			<svg class="xcrm-b2-svg" viewBox="0 0 820 360" fill="none" xmlns="http://www.w3.org/2000/svg">
				<defs>
					<linearGradient id="b2sG" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.07"/><stop offset="100%" stop-color="#06B6D4" stop-opacity="0.04"/></linearGradient>
					<linearGradient id="b2sInA" x1="0" y1="0" x2="1" y2="0"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#8B5CF6"/></linearGradient>
					<linearGradient id="b2sInB" x1="0" y1="0" x2="1" y2="0"><stop offset="0%" stop-color="#06B6D4"/><stop offset="100%" stop-color="#22D3EE"/></linearGradient>
					<linearGradient id="b2sInC" x1="0" y1="0" x2="1" y2="0"><stop offset="0%" stop-color="#F59E0B"/><stop offset="100%" stop-color="#FBBF24"/></linearGradient>
					<radialGradient id="b2sGlow" cx="50%" cy="50%" r="50%"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.12"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0"/></radialGradient>
					<filter id="b2sSoft"><feGaussianBlur stdDeviation="10"/></filter>
				</defs>
				<rect x="10" y="10" width="800" height="340" rx="24" fill="url(#b2sG)"/>
				<!-- ambient glow -->
				<ellipse cx="410" cy="180" rx="260" ry="140" fill="url(#b2sGlow)" class="b2s-glow" filter="url(#b2sSoft)"/>

				<!-- ═══════ PHASE 1: SOURCE (all customers) ═══════ -->
				<g class="b2s-src">
					<!-- outer ring -->
					<circle cx="90" cy="180" r="60" class="b2s-src-ring"/>
					<circle cx="90" cy="180" r="68" class="b2s-src-ring b2s-src-ring--2"/>
					<!-- core -->
					<circle cx="90" cy="180" r="48" class="b2s-src-core"/>
					<!-- customer dots inside -->
					<circle cx="72" cy="168" r="6" class="b2s-dot b2s-dot--src"/>
					<circle cx="108" cy="164" r="6" class="b2s-dot b2s-dot--src"/>
					<circle cx="90" cy="196" r="6" class="b2s-dot b2s-dot--src"/>
					<circle cx="68" cy="188" r="5" class="b2s-dot b2s-dot--src"/>
					<circle cx="112" cy="188" r="5" class="b2s-dot b2s-dot--src"/>
					<circle cx="90" cy="158" r="4" class="b2s-dot b2s-dot--src"/>
					<!-- label -->
					<text x="90" y="262" text-anchor="middle" class="b2s-title">همه مشتریان</text>
					<text x="90" y="278" text-anchor="middle" class="b2s-sub">پایگاه داده</text>
				</g>

				<!-- ═══════ PHASE 2: FILTER ENGINE ═══════ -->
				<g class="b2s-engine">
					<!-- engine frame -->
					<rect x="200" y="100" width="130" height="160" rx="16" class="b2s-engine-frame"/>
					<rect x="200" y="100" width="130" height="32" rx="16" class="b2s-engine-header"/>
					<text x="265" y="121" text-anchor="middle" class="b2s-engine-t">موتور فیلتر</text>
					<!-- filter conditions -->
					<g class="b2s-cond b2s-cond--1"><rect x="212" y="145" width="106" height="24" rx="6" class="b2s-cond-bg"/><text x="265" y="161" text-anchor="middle" class="b2s-cond-t">برچسب = ویژه</text></g>
					<g class="b2s-cond b2s-cond--2"><rect x="212" y="177" width="106" height="24" rx="6" class="b2s-cond-bg"/><text x="265" y="193" text-anchor="middle" class="b2s-cond-t">خرید &gt; ۳ بار</text></g>
					<g class="b2s-cond b2s-cond--3"><rect x="212" y="209" width="106" height="24" rx="6" class="b2s-cond-bg"/><text x="265" y="225" text-anchor="middle" class="b2s-cond-t">آخرین فعالیت &lt; ۳۰ روز</text></g>
					<!-- AND badges -->
					<text x="360" y="166" class="b2s-and">AND</text>
					<text x="359" y="198" class="b2s-and">OR</text>
				</g>

				<!-- ═══════ PHASE 3: SEGMENT GROUPS ═══════ -->
				<!-- Group A: پرخرید -->
				<g class="b2s-group b2s-group--a">
					<circle cx="470" cy="80" r="42" class="b2s-g-circle"/>
					<circle cx="470" cy="80" r="48" class="b2s-g-pulse"/>
					<circle cx="458" cy="70" r="5.5" class="b2s-dot b2s-dot--a"/>
					<circle cx="484" cy="66" r="5.5" class="b2s-dot b2s-dot--a"/>
					<circle cx="470" cy="90" r="5.5" class="b2s-dot b2s-dot--a"/>
					<circle cx="454" cy="84" r="4.5" class="b2s-dot b2s-dot--a"/>
					<g class="b2s-g-lbl"><rect x="428" y="128" width="84" height="22" rx="7" class="b2s-g-lbl-bg"/><text x="470" y="143" text-anchor="middle" class="b2s-g-lbl-t">پرخرید</text></g>
				</g>
				<!-- Group B: جدید -->
				<g class="b2s-group b2s-group--b">
					<circle cx="470" cy="180" r="38" class="b2s-g-circle"/>
					<circle cx="470" cy="180" r="44" class="b2s-g-pulse"/>
					<circle cx="460" cy="172" r="5.5" class="b2s-dot b2s-dot--b"/>
					<circle cx="482" cy="168" r="5.5" class="b2s-dot b2s-dot--b"/>
					<circle cx="470" cy="192" r="5.5" class="b2s-dot b2s-dot--b"/>
					<g class="b2s-g-lbl"><rect x="442" y="224" width="56" height="22" rx="7" class="b2s-g-lbl-bg"/><text x="470" y="239" text-anchor="middle" class="b2s-g-lbl-t">جدید</text></g>
				</g>
				<!-- Group C: در معرض ریزش -->
				<g class="b2s-group b2s-group--c">
					<circle cx="470" cy="280" r="40" class="b2s-g-circle"/>
					<circle cx="470" cy="280" r="46" class="b2s-g-pulse"/>
					<circle cx="458" cy="272" r="5.5" class="b2s-dot b2s-dot--c"/>
					<circle cx="484" cy="270" r="5.5" class="b2s-dot b2s-dot--c"/>
					<circle cx="470" cy="292" r="5.5" class="b2s-dot b2s-dot--c"/>
					<g class="b2s-g-lbl"><rect x="418" y="326" width="104" height="22" rx="7" class="b2s-g-lbl-bg"/><text x="470" y="341" text-anchor="middle" class="b2s-g-lbl-t">در معرض ریزش</text></g>
				</g>

				<!-- ═══════ PHASE 4: TARGETED CAMPAIGN ═══════ -->
				<g class="b2s-camp">
					<rect x="600" y="130" width="180" height="100" rx="18" class="b2s-camp-frame"/>
					<rect x="600" y="130" width="180" height="32" rx="18" class="b2s-camp-header"/>
					<text x="690" y="151" text-anchor="middle" class="b2s-camp-header-t">کمپین هدفمند</text>
					<!-- channel icons -->
					<g class="b2s-c-ch b2s-c-ch--1"><rect x="616" y="176" width="44" height="22" rx="7" class="b2s-c-ch-bg"/><text x="638" y="191" text-anchor="middle" class="b2s-c-ch-t">پیامک</text></g>
					<g class="b2s-c-ch b2s-c-ch--2"><rect x="668" y="176" width="44" height="22" rx="7" class="b2s-c-ch-bg"/><text x="690" y="191" text-anchor="middle" class="b2s-c-ch-t">تلگرام</text></g>
					<g class="b2s-c-ch b2s-c-ch--3"><rect x="720" y="176" width="44" height="22" rx="7" class="b2s-c-ch-bg"/><text x="742" y="191" text-anchor="middle" class="b2s-c-ch-t">ایمیل</text></g>
					<!-- status -->
					<circle cx="760" cy="219" r="5" fill="#10B981"/>
					<text x="752" y="221" class="b2s-camp-status">در حال ارسال</text>
				</g>

				<!-- ═══════ FLOW PATHS ═══════ -->
				<!-- source → engine -->
				<path pathLength="1" class="b2s-flow b2s-flow--in" d="M150 180 H195" stroke="url(#b2sInA)" stroke-width="2.5" stroke-linecap="round" fill="none"/>
				<!-- engine → groups (3 paths) -->
				<path pathLength="1" class="b2s-flow b2s-flow--1" d="M335 140 Q400 90 425 80" stroke="url(#b2sInA)" stroke-width="2" stroke-linecap="round" fill="none"/>
				<path pathLength="1" class="b2s-flow b2s-flow--2" d="M335 180 H425" stroke="url(#b2sInB)" stroke-width="2" stroke-linecap="round" fill="none"/>
				<path pathLength="1" class="b2s-flow b2s-flow--3" d="M335 220 Q400 270 425 280" stroke="url(#b2sInC)" stroke-width="2" stroke-linecap="round" fill="none"/>
				<!-- groups → campaign (3 paths) -->
				<path pathLength="1" class="b2s-flow b2s-flow--4" d="M515 80 Q560 100 595 140" stroke="url(#b2sInA)" stroke-width="1.5" stroke-linecap="round" fill="none"/>
				<path pathLength="1" class="b2s-flow b2s-flow--5" d="M512 180 H595" stroke="url(#b2sInB)" stroke-width="1.5" stroke-linecap="round" fill="none"/>
				<path pathLength="1" class="b2s-flow b2s-flow--6" d="M515 280 Q560 260 595 220" stroke="url(#b2sInC)" stroke-width="1.5" stroke-linecap="round" fill="none"/>

				<!-- ═══════ FLOWING PARTICLES ═══════ -->
				<!-- source → engine -->
				<circle r="3.5" fill="#6366F1" class="b2s-particle b2s-particle--1"><animateMotion dur="2.2s" repeatCount="indefinite" begin="0.2s"><mpath href="#b2sp1"/></animateMotion></circle>
				<path id="b2sp1" d="M150 180 H195" fill="none" stroke="none"/>
				<circle r="3" fill="#8B5CF6" class="b2s-particle b2s-particle--2"><animateMotion dur="2.2s" repeatCount="indefinite" begin="1.1s"><mpath href="#b2sp1"/></animateMotion></circle>

				<!-- engine → groups -->
				<circle r="3.5" fill="#6366F1" class="b2s-particle b2s-particle--3"><animateMotion dur="2.5s" repeatCount="indefinite" begin="0.4s"><mpath href="#b2sp2"/></animateMotion></circle>
				<path id="b2sp2" d="M335 140 Q400 90 425 80" fill="none" stroke="none"/>
				<circle r="3" fill="#06B6D4" class="b2s-particle b2s-particle--4"><animateMotion dur="2.5s" repeatCount="indefinite" begin="1.2s"><mpath href="#b2sp3"/></animateMotion></circle>
				<path id="b2sp3" d="M335 180 H425" fill="none" stroke="none"/>
				<circle r="3.5" fill="#F59E0B" class="b2s-particle b2s-particle--5"><animateMotion dur="2.5s" repeatCount="indefinite" begin="2s"><mpath href="#b2sp4"/></animateMotion></circle>
				<path id="b2sp4" d="M335 220 Q400 270 425 280" fill="none" stroke="none"/>

				<!-- groups → campaign -->
				<circle r="3" fill="#6366F1" class="b2s-particle b2s-particle--6"><animateMotion dur="2.5s" repeatCount="indefinite" begin="0.8s"><mpath href="#b2sp5"/></animateMotion></circle>
				<path id="b2sp5" d="M515 80 Q560 100 595 140" fill="none" stroke="none"/>
				<circle r="2.5" fill="#06B6D4" class="b2s-particle b2s-particle--7"><animateMotion dur="2.5s" repeatCount="indefinite" begin="1.6s"><mpath href="#b2sp6"/></animateMotion></circle>
				<path id="b2sp6" d="M512 180 H595" fill="none" stroke="none"/>
				<circle r="3" fill="#F59E0B" class="b2s-particle b2s-particle--8"><animateMotion dur="2.5s" repeatCount="indefinite" begin="2.4s"><mpath href="#b2sp7"/></animateMotion></circle>
				<path id="b2sp7" d="M515 280 Q560 260 595 220" fill="none" stroke="none"/>
			</svg>
		</div>
		<p class="xcrm-b2__note" data-reveal="up">نوع شرط‌ها به اطلاعات ثبت‌شده و رویدادهای در دسترس بستگی دارد.</p>
	</div>
</section>

<!-- ══════════ 7. ANALYTICS ══════════ -->
<section class="xcrm-b2__section" id="analytics">
	<div class="xcrm-b2__deco xcrm-b2__deco--indigo" style="top:8%;right:-6%;" aria-hidden="true"></div>
	<div class="xcrm-b2__inner">
		<div class="xcrm-b2__head" data-reveal="up">
			<p class="xcrm-b2__eyebrow">تحلیل رفتار و عملکرد</p>
			<h2 class="xcrm-b2__h2">به‌جای حدس‌زدن، رفتار مشتریان را بررسی کنید</h2>
			<p class="xcrm-b2__desc">رویدادهای مشتری، مسیر کاربر، قیف تبدیل و عملکرد فعالیت‌های بازاریابی را تحلیل کنید.</p>
		</div>
		<div class="xcrm-b2__chart-wrap" data-reveal="up" aria-hidden="true">
			<svg class="xcrm-b2-svg" viewBox="0 0 860 380" fill="none" xmlns="http://www.w3.org/2000/svg">
				<defs>
					<linearGradient id="b2aBar" x1="0" y1="1" x2="0" y2="0"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.18"/><stop offset="100%" stop-color="#8B5CF6"/></linearGradient>
					<linearGradient id="b2aLn" x1="0" y1="0" x2="860" y2="0"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#06B6D4"/></linearGradient>
					<linearGradient id="b2aArea" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.15"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0"/></linearGradient>
					<radialGradient id="b2aGlow" cx="50%" cy="50%" r="50%"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.1"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0"/></radialGradient>
				</defs>
				<rect x="1" y="1" width="858" height="378" rx="20" class="b2a-frame"/>
				<ellipse cx="300" cy="180" rx="200" ry="120" fill="url(#b2aGlow)" class="b2a-glow"/>

				<!-- Dashboard header -->
				<rect x="1" y="1" width="858" height="44" rx="20" class="b2a-header"/>
				<circle cx="24" cy="23" r="5" fill="#F04438" opacity="0.6"/><circle cx="38" cy="23" r="5" fill="#F59E0B" opacity="0.6"/><circle cx="52" cy="23" r="5" fill="#10B981" opacity="0.6"/>
				<text x="710" y="28" text-anchor="end" class="b2a-header-t">داشبورد تحلیلی — نمونهٔ نمایشی</text>

				<!-- ═══ KPI Cards (top row) ═══ -->
				<g class="b2a-kpi b2a-kpi--1"><rect x="20" y="58" width="110" height="52" rx="10" class="b2a-kpi-bg"/><text x="75" y="78" text-anchor="middle" class="b2a-kpi-l">بازدیدکنندگان</text><text x="75" y="100" text-anchor="middle" class="b2a-kpi-v">۱۲,۴۰۰</text></g>
				<g class="b2a-kpi b2a-kpi--2"><rect x="165" y="58" width="110" height="52" rx="10" class="b2a-kpi-bg"/><text x="220" y="78" text-anchor="middle" class="b2a-kpi-l">نرخ تبدیل</text><text x="220" y="100" text-anchor="middle" class="b2a-kpi-v">۳.۲٪</text></g>
				<g class="b2a-kpi b2a-kpi--3"><rect x="310" y="58" width="110" height="52" rx="10" class="b2a-kpi-bg"/><text x="365" y="78" text-anchor="middle" class="b2a-kpi-l">میانگین سفارش</text><text x="365" y="100" text-anchor="middle" class="b2a-kpi-v">۲.۱M</text></g>
				<g class="b2a-kpi b2a-kpi--4"><rect x="455" y="58" width="110" height="52" rx="10" class="b2a-kpi-bg"/><text x="510" y="78" text-anchor="middle" class="b2a-kpi-l">نرخ بازگشت</text><text x="510" y="100" text-anchor="middle" class="b2a-kpi-v">۴۲٪</text></g>
				<g class="b2a-kpi b2a-kpi--5"><rect x="600" y="58" width="110" height="52" rx="10" class="b2a-kpi-bg"/><text x="655" y="78" text-anchor="middle" class="b2a-kpi-l">ارزش مشتری</text><text x="655" y="100" text-anchor="middle" class="b2a-kpi-v">۸.۷M</text></g>
				<g class="b2a-kpi b2a-kpi--6"><rect x="730" y="58" width="110" height="52" rx="10" class="b2a-kpi-bg"/><text x="785" y="78" text-anchor="middle" class="b2a-kpi-l">ارزش محصول</text><text x="785" y="100" text-anchor="middle" class="b2a-kpi-v">3.۷M</text></g>


				<!-- ═══ Bar Chart (bottom-left) ═══ -->
				<text x="60" y="140" class="b2a-chart-t">عملکرد ماهانه</text>
				<line x1="30" y1="330" x2="420" y2="330" class="b2a-axis"/>
				<line x1="30" y1="170" x2="30" y2="330" class="b2a-axis"/>
				<rect class="b2a-bar b2a-bar--1" x="50" y="270" width="32" height="60" rx="5" fill="url(#b2aBar)" style="--i:0"/>
				<rect class="b2a-bar b2a-bar--2" x="100" y="240" width="32" height="90" rx="5" fill="url(#b2aBar)" style="--i:1"/>
				<rect class="b2a-bar b2a-bar--3" x="150" y="255" width="32" height="75" rx="5" fill="url(#b2aBar)" style="--i:2"/>
				<rect class="b2a-bar b2a-bar--4" x="200" y="210" width="32" height="120" rx="5" fill="url(#b2aBar)" style="--i:3"/>
				<rect class="b2a-bar b2a-bar--5" x="250" y="225" width="32" height="105" rx="5" fill="url(#b2aBar)" style="--i:4"/>
				<rect class="b2a-bar b2a-bar--6" x="300" y="185" width="32" height="145" rx="5" fill="url(#b2aBar)" style="--i:5"/>
				<rect class="b2a-bar b2a-bar--7" x="350" y="200" width="32" height="130" rx="5" fill="url(#b2aBar)" style="--i:6"/>
				<!-- bar labels -->
				<text x="66" y="348" text-anchor="middle" class="b2a-bar-l">فروردین</text>
				<text x="116" y="348" text-anchor="middle" class="b2a-bar-l">اردیبهشت</text>
				<text x="166" y="348" text-anchor="middle" class="b2a-bar-l">خرداد</text>
				<text x="216" y="348" text-anchor="middle" class="b2a-bar-l">تیر</text>
				<text x="266" y="348" text-anchor="middle" class="b2a-bar-l">مرداد</text>
				<text x="316" y="348" text-anchor="middle" class="b2a-bar-l">شهریور</text>
				<text x="366" y="348" text-anchor="middle" class="b2a-bar-l">مهر</text>

				<!-- ═══ Line Chart (top-right) ═══ -->
				<text x="490" y="140" class="b2a-chart-t">روند بازدید</text>
				<line x1="470" y1="330" x2="680" y2="330" class="b2a-axis"/>
				<line x1="470" y1="170" x2="470" y2="330" class="b2a-axis"/>
				<!-- area fill -->
				<path pathLength="1" class="b2a-area" d="M490 280 L530 250 L570 265 L610 200 L650 220 L670 180 L670 330 L490 330 Z" fill="url(#b2aArea)"/>
				<!-- line -->
				<path pathLength="1" class="b2a-line" d="M490 280 L530 250 L570 265 L610 200 L650 220 L670 180" stroke="url(#b2aLn)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
				<!-- dots -->
				<circle class="b2a-dot" cx="490" cy="280" r="4" style="--i:0"/><circle class="b2a-dot" cx="530" cy="250" r="4" style="--i:1"/>
				<circle class="b2a-dot" cx="570" cy="265" r="4" style="--i:2"/><circle class="b2a-dot" cx="610" cy="200" r="4" style="--i:3"/>
				<circle class="b2a-dot" cx="650" cy="220" r="4" style="--i:4"/><circle class="b2a-dot" cx="670" cy="180" r="5" style="--i:5"/>
				<!-- pulse on last dot -->
				<circle cx="670" cy="180" r="10" class="b2a-pulse"/>

				<!-- ═══ Donut Chart (bottom-right) ═══ -->
				<!-- <text x="770" y="140" text-anchor="middle" class="b2a-chart-t">ترافیک منابع</text>
				<circle cx="770" cy="230" r="55" class="b2a-donut-bg"/>
				<circle class="b2a-donut b2a-donut--1" cx="770" cy="230" r="55" pathLength="1" stroke="#6366F1" stroke-width="14" stroke-dasharray="0.4 0.6" stroke-dashoffset="0.25" fill="none" stroke-linecap="round" transform="rotate(-90 770 230)"/>
				<circle class="b2a-donut b2a-donut--2" cx="770" cy="230" r="55" pathLength="1" stroke="#06B6D4" stroke-width="14" stroke-dasharray="0.25 0.75" stroke-dashoffset="-0.15" fill="none" stroke-linecap="round" transform="rotate(-90 770 230)"/>
				<circle class="b2a-donut b2a-donut--3" cx="770" cy="230" r="55" pathLength="1" stroke="#F59E0B" stroke-width="14" stroke-dasharray="0.18 0.82" stroke-dashoffset="-0.4" fill="none" stroke-linecap="round" transform="rotate(-90 770 230)"/>
				<circle class="b2a-donut b2a-donut--4" cx="770" cy="230" r="55" pathLength="1" stroke="#10B981" stroke-width="14" stroke-dasharray="0.12 0.88" stroke-dashoffset="-0.58" fill="none" stroke-linecap="round" transform="rotate(-90 770 230)"/>
				<text x="770" y="226" text-anchor="middle" class="b2a-donut-c">۴</text>
				<text x="770" y="242" text-anchor="middle" class="b2a-donut-l">منبع</text> -->

				<!-- ═══ Funnel (far right) ═══ -->
				<text x="770" y="210" text-anchor="middle" class="b2a-chart-t">قیف تبدیل</text>
				<rect x="710" y="218" width="120" height="18" rx="6" class="b2a-funnel b2a-funnel--1"/>
				<rect x="725" y="242" width="90" height="18" rx="6" class="b2a-funnel b2a-funnel--2"/>
				<rect x="740" y="266" width="60" height="18" rx="6" class="b2a-funnel b2a-funnel--3"/>
				<rect x="755" y="290" width="30" height="18" rx="6" class="b2a-funnel b2a-funnel--4"/>
			</svg>
		</div>
	</div>
</section>

<!-- ══════════ 8. COMMUNICATION ══════════ -->
<section class="xcrm-b2__section xcrm-b2__section--surface" id="communication">
	<div class="xcrm-b2__inner xcrm-b2__split">
		<div class="xcrm-b2__split-copy" data-reveal="up">
			<p class="xcrm-b2__eyebrow">ارتباطات مشتریان</p>
			<h2 class="xcrm-b2__h2">از هر کانالی، به مشتری درست برسید</h2>
			<p class="xcrm-b2__desc">تنظیمات پیامک، تلگرام، ایمیل و اعلان‌ها را مدیریت کنید و پیام‌ها را از طریق کانال‌های پشتیبانی‌شده ارسال کنید.</p>
			<ul class="xcrm-b2__checklist">
				<li>پیامک با ارائه‌دهنده پشتیبانی‌شده</li>
				<li>تلگرام با اتصال حساب</li>
				<li>ایمیل و اعلان‌های پوش</li>
				<li>زمان‌بندی ارسال پیام</li>
			</ul>
			<a href="#start" class="xcrm-b2__text-link">مشاهده امکانات ارتباطی <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg></a>
		</div>
		<div class="xcrm-b2__split-visual" data-reveal="up" data-reveal-delay="100" aria-hidden="true">
			<svg class="xcrm-b2-svg" viewBox="0 0 380 300" fill="none" xmlns="http://www.w3.org/2000/svg">
				<defs><linearGradient id="b2cG" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#EC4899" stop-opacity="0.08"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.05"/></linearGradient><linearGradient id="b2cCore" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#8B5CF6"/></linearGradient></defs>
				<rect x="20" y="20" width="340" height="260" rx="22" fill="url(#b2cG)"/>
				<circle cx="190" cy="150" r="36" fill="url(#b2cCore)" class="b2c-core"/>
				<circle cx="190" cy="142" r="10" fill="#fff" opacity="0.9"/>
				<path d="M172 170 Q190 156 208 170" stroke="#fff" stroke-width="2.5" fill="none" stroke-linecap="round" opacity="0.9"/>
				<text x="190" y="210" text-anchor="middle" class="b2c-label">مشتری</text>
				<g class="b2c-chan b2c-chan--sms"><rect x="40" y="50" width="80" height="36" rx="10" class="b2c-chan-bg"/><text x="80" y="73" text-anchor="middle" class="b2c-chan-t">پیامک</text></g>
				<g class="b2c-chan b2c-chan--tg"><rect x="260" y="50" width="80" height="36" rx="10" class="b2c-chan-bg"/><text x="300" y="73" text-anchor="middle" class="b2c-chan-t">تلگرام</text></g>
				<g class="b2c-chan b2c-chan--email"><rect x="40" y="220" width="80" height="36" rx="10" class="b2c-chan-bg"/><text x="80" y="243" text-anchor="middle" class="b2c-chan-t">ایمیل</text></g>
				<g class="b2c-chan b2c-chan--push"><rect x="260" y="220" width="80" height="36" rx="10" class="b2c-chan-bg"/><text x="300" y="243" text-anchor="middle" class="b2c-chan-t">پوش</text></g>
				<path pathLength="1" class="b2c-flow b2c-flow--1" d="M120 68 Q155 100 165 130" stroke="#6366F1" stroke-width="2" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2c-flow b2c-flow--2" d="M260 68 Q225 100 215 130" stroke="#06B6D4" stroke-width="2" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2c-flow b2c-flow--3" d="M120 232 Q155 200 165 175" stroke="#F59E0B" stroke-width="2" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2c-flow b2c-flow--4" d="M260 232 Q225 200 215 175" stroke="#EC4899" stroke-width="2" stroke-dasharray="1" fill="none"/>
			</svg>
		</div>
	</div>
</section>

<!-- ══════════ 9. TEAM ══════════ -->
<section class="xcrm-b2__section" id="team">
	<div class="xcrm-b2__deco xcrm-b2__deco--cyan" style="bottom:8%;left:-5%;" aria-hidden="true"></div>
	<div class="xcrm-b2__inner xcrm-b2__split xcrm-b2__split--rev">
		<div class="xcrm-b2__split-copy" data-reveal="up">
			<p class="xcrm-b2__eyebrow">مدیریت تیم و دسترسی‌ها</p>
			<h2 class="xcrm-b2__h2">هر عضو تیم، دسترسی متناسب با مسئولیت خود</h2>
			<p class="xcrm-b2__desc">نقش‌ها و مجوزهای دسترسی را تعریف کنید، فعالیت‌ها را تخصیص دهید و همکاری اعضای تیم را مدیریت کنید.</p>
			<ul class="xcrm-b2__checklist">
				<li>تعریف نقش‌ها و مجوزها</li>
				<li>تخصیص فعالیت‌ها به اعضای تیم</li>
				<li>همکاری میان اعضای تیم</li>
				<li>دسترسی متناسب با مسئولیت هر فرد</li>
			</ul>
			<a href="#start" class="xcrm-b2__text-link">آشنایی با مدیریت تیم <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg></a>
		</div>
		<div class="xcrm-b2__split-visual" data-reveal="up" data-reveal-delay="100" aria-hidden="true">
			<svg class="xcrm-b2-svg" viewBox="0 0 380 300" fill="none" xmlns="http://www.w3.org/2000/svg">
				<defs><linearGradient id="b2tG" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#F97316" stop-opacity="0.08"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.05"/></linearGradient></defs>
				<rect x="20" y="20" width="340" height="260" rx="22" fill="url(#b2tG)"/>
				<g class="b2t-role b2t-role--mgr"><rect x="140" y="40" width="100" height="50" rx="12" class="b2t-role-bg"/><circle cx="168" cy="62" r="12" fill="#6366F1" opacity="0.8"/><text x="168" y="67" text-anchor="middle" fill="#fff" font-size="10" font-weight="800" font-family="inherit">م</text><rect x="186" y="54" width="40" height="6" rx="3" class="b2t-line"/><rect x="186" y="66" width="28" height="5" rx="2.5" class="b2t-line"/></g>
				<path pathLength="1" class="b2t-link b2t-link--1" d="M190 95 V130" stroke="#6366F1" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2t-link b2t-link--2" d="M110 130 H270" stroke="#6366F1" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2t-link b2t-link--3" d="M110 130 V160" stroke="#6366F1" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2t-link b2t-link--4" d="M190 130 V160" stroke="#6366F1" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2t-link b2t-link--5" d="M270 130 V160" stroke="#6366F1" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<g class="b2t-role b2t-role--m1"><rect x="70" y="160" width="80" height="44" rx="10" class="b2t-role-bg"/><circle cx="94" cy="178" r="10" fill="#06B6D4" opacity="0.8"/><text x="94" y="182" text-anchor="middle" fill="#fff" font-size="9" font-weight="800" font-family="inherit">ف</text><rect x="110" y="172" width="28" height="5" rx="2.5" class="b2t-line"/></g>
				<g class="b2t-role b2t-role--m2"><rect x="150" y="160" width="80" height="44" rx="10" class="b2t-role-bg"/><circle cx="174" cy="178" r="10" fill="#10B981" opacity="0.8"/><text x="174" y="182" text-anchor="middle" fill="#fff" font-size="9" font-weight="800" font-family="inherit">پ</text><rect x="190" y="172" width="28" height="5" rx="2.5" class="b2t-line"/></g>
				<g class="b2t-role b2t-role--m3"><rect x="230" y="160" width="80" height="44" rx="10" class="b2t-role-bg"/><circle cx="254" cy="178" r="10" fill="#F59E0B" opacity="0.8"/><text x="254" y="182" text-anchor="middle" fill="#fff" font-size="9" font-weight="800" font-family="inherit">ب</text><rect x="270" y="172" width="28" height="5" rx="2.5" class="b2t-line"/></g>
				<circle cx="90" cy="225" r="4" class="b2t-pdot b2t-pdot--y"/><circle cx="106" cy="225" r="4" class="b2t-pdot b2t-pdot--y"/><circle cx="122" cy="225" r="4" class="b2t-pdot b2t-pdot--n"/>
				<circle cx="170" cy="225" r="4" class="b2t-pdot b2t-pdot--y"/><circle cx="186" cy="225" r="4" class="b2t-pdot b2t-pdot--n"/><circle cx="202" cy="225" r="4" class="b2t-pdot b2t-pdot--y"/>
				<circle cx="250" cy="225" r="4" class="b2t-pdot b2t-pdot--y"/><circle cx="266" cy="225" r="4" class="b2t-pdot b2t-pdot--y"/><circle cx="282" cy="225" r="4" class="b2t-pdot b2t-pdot--n"/>
				<text x="190" y="258" text-anchor="middle" class="b2t-label">سطح دسترسی هر عضو</text>
			</svg>
		</div>
	</div>
</section>

<!-- ══════════ 10. INDUSTRIES ══════════ -->
<section class="xcrm-b2__section xcrm-b2__section--surface" id="industries">
	<div class="xcrm-b2__inner">
		<div class="xcrm-b2__head" data-reveal="up">
			<p class="xcrm-b2__eyebrow">کاربرد xCRM در صنایع مختلف</p>
			<h2 class="xcrm-b2__h2">متناسب با مدل کسب‌وکار خود از امکانات xCRM استفاده کنید</h2>
		</div>

		<!-- Industry 1: E-commerce -->
		<article class="xcrm-b2__ind-sec" data-reveal="up">
			<div class="xcrm-b2__ind-sec-visual">
				<svg class="xcrm-b2-svg" viewBox="0 0 380 260" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<defs><linearGradient id="b2i1g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.1"/><stop offset="100%" stop-color="#8B5CF6" stop-opacity="0.04"/></linearGradient></defs>
					<rect x="10" y="10" width="360" height="240" rx="20" fill="url(#b2i1g)"/>
					<!-- browser frame -->
					<rect x="40" y="30" width="300" height="200" rx="12" class="b2i1-frame"/>
					<circle cx="58" cy="46" r="4" fill="#F04438" opacity="0.5"/><circle cx="70" cy="46" r="4" fill="#F59E0B" opacity="0.5"/><circle cx="82" cy="46" r="4" fill="#10B981" opacity="0.5"/>
					<!-- product grid -->
					<rect x="55" y="60" width="70" height="50" rx="6" class="b2i1-tile b2i1-tile--1"/>
					<rect x="135" y="60" width="70" height="50" rx="6" class="b2i1-tile b2i1-tile--2"/>
					<rect x="215" y="60" width="70" height="50" rx="6" class="b2i1-tile b2i1-tile--3"/>
					<rect x="55" y="120" width="70" height="50" rx="6" class="b2i1-tile b2i1-tile--4"/>
					<rect x="135" y="120" width="70" height="50" rx="6" class="b2i1-tile b2i1-tile--5"/>
					<rect x="215" y="120" width="70" height="50" rx="6" class="b2i1-tile b2i1-tile--6"/>
					<!-- cursor -->
					<g class="b2i1-cursor"><path d="M155 100 l0 16 4-3 3 7 4-2-3-7 6-1z" fill="#6366F1"/></g>
					<!-- funnel bars -->
					<rect x="70" y="185" width="200" height="10" rx="5" class="b2i1-fbar b2i1-fbar--1"/>
					<rect x="95" y="200" width="150" height="10" rx="5" class="b2i1-fbar b2i1-fbar--2"/>
					<rect x="120" y="215" width="100" height="10" rx="5" class="b2i1-fbar b2i1-fbar--3"/>
					<!-- tracking ping -->
					<circle cx="290" cy="75" r="10" class="b2i1-ping"/><circle cx="290" cy="75" r="5" fill="#10B981"/>
					<!-- visitor counter chip -->
					<g class="b2i1-chip"><rect x="240" y="48" width="80" height="22" rx="8" class="b2i1-chip-bg"/><text x="280" y="63" text-anchor="middle" class="b2i1-chip-t">بازدیدکننده</text></g>
				</svg>
			</div>
			<div class="xcrm-b2__ind-sec-body">
				<span class="xcrm-b2__ind-sec-num" aria-hidden="true">۰۱</span>
				<h3 class="xcrm-b2__ind-sec-title">فروشگاه‌های اینترنتی</h3>
				<p class="xcrm-b2__ind-sec-desc">رفتار بازدیدکنندگان، رویدادهای محصولات، بخش‌بندی مشتریان و اطلاعات قیف خرید را بررسی کنید. بدانید مشتریان کجا سبد را رها می‌کنند، کدام محصولات پربازدید هستند و چگونه می‌توانید نرخ تبدیل را افزایش دهید.</p>
				<ul class="xcrm-b2__ind-sec-tags"><li>ردیابی وب‌سایت</li><li>قیف خرید</li><li>بخش‌بندی مشتریان</li><li>بازیابی سبد خرید</li></ul>
			</div>
		</article>

		<!-- Industry 2: Education -->
		<article class="xcrm-b2__ind-sec xcrm-b2__ind-sec--rev" data-reveal="up">
			<div class="xcrm-b2__ind-sec-visual">
				<svg class="xcrm-b2-svg" viewBox="0 0 380 260" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<defs><linearGradient id="b2i2g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#06B6D4" stop-opacity="0.1"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.04"/></linearGradient></defs>
					<rect x="10" y="10" width="360" height="240" rx="20" fill="url(#b2i2g)"/>
					<!-- graduation cap -->
					<g class="b2i2-cap">
						<path pathLength="1" class="b2i2-cap-top" d="M190 50 L120 80 L190 110 L260 80 Z" fill="#6366F1" opacity="0.85"/>
						<path pathLength="1" class="b2i2-cap-tassel" d="M260 80 V120" stroke="#6366F1" stroke-width="2.5" stroke-linecap="round"/>
						<circle class="b2i2-cap-ball" cx="260" cy="126" r="5" fill="#6366F1"/>
						<path pathLength="1" class="b2i2-cap-base" d="M150 95 V120 C150 135 230 135 230 120 V95" stroke="#6366F1" stroke-width="2" fill="none" stroke-linecap="round"/>
					</g>
					<!-- lead funnel -->
					<rect x="80" y="155" width="220" height="12" rx="6" class="b2i2-lbar b2i2-lbar--1"/>
					<rect x="105" y="175" width="170" height="12" rx="6" class="b2i2-lbar b2i2-lbar--2"/>
					<rect x="130" y="195" width="120" height="12" rx="6" class="b2i2-lbar b2i2-lbar--3"/>
					<rect x="155" y="215" width="70" height="12" rx="6" class="b2i2-lbar b2i2-lbar--4"/>
					<!-- bell notification -->
					<g class="b2i2-bell">
						<path pathLength="1" d="M310 55 c-10 0-17 7-17 17 v12 l-6 8 h46 l-6-8 v-12 c0-10-7-17-17-17z" stroke="#F59E0B" stroke-width="2" fill="none" stroke-linecap="round"/>
						<circle cx="310" cy="100" r="4" fill="#F59E0B"/>
					</g>
					<g class="b2i2-nbadge"><circle cx="325" cy="52" r="10" fill="#F04438"/><text x="325" y="56" text-anchor="middle" fill="#fff" font-size="8" font-weight="800" font-family="inherit">۵</text></g>
					<!-- student avatars -->
					<g class="b2i2-student b2i2-student--1"><circle cx="70" cy="80" r="14" fill="#6366F1" opacity="0.7"/><text x="70" y="85" text-anchor="middle" fill="#fff" font-size="10" font-weight="800" font-family="inherit">الف</text></g>
					<g class="b2i2-student b2i2-student--2"><circle cx="100" cy="65" r="12" fill="#06B6D4" opacity="0.7"/><text x="100" y="70" text-anchor="middle" fill="#fff" font-size="9" font-weight="800" font-family="inherit">ب</text></g>
					<g class="b2i2-student b2i2-student--3"><circle cx="80" cy="110" r="11" fill="#10B981" opacity="0.7"/><text x="80" y="114" text-anchor="middle" fill="#fff" font-size="8" font-weight="800" font-family="inherit">ج</text></g>
				</svg>
			</div>
			<div class="xcrm-b2__ind-sec-body">
				<span class="xcrm-b2__ind-sec-num" aria-hidden="true">۰۲</span>
				<h3 class="xcrm-b2__ind-sec-title">آموزش و دوره‌های آنلاین</h3>
				<p class="xcrm-b2__ind-sec-desc">سرنخ‌های ثبت‌نام، پیگیری متقاضیان، مراحل فروش و یادآوری‌های تیم را ساختارمند مدیریت کنید. بدانید کدام دوره‌ها بیشترین تقاضا را دارند و متقاضیان در کدام مرحله رها می‌کنند.</p>
				<ul class="xcrm-b2__ind-sec-tags"><li>مدیریت سرنخ</li><li>پایپ‌لاین فروش</li><li>یادآوری ثبت‌نام</li><li>تحلیل دوره‌ها</li></ul>
			</div>
		</article>

		<!-- Industry 3: B2B -->
		<article class="xcrm-b2__ind-sec" data-reveal="up">
			<div class="xcrm-b2__ind-sec-visual">
				<svg class="xcrm-b2-svg" viewBox="0 0 380 260" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<defs><linearGradient id="b2i3g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#10B981" stop-opacity="0.08"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.04"/></linearGradient></defs>
					<rect x="10" y="10" width="360" height="240" rx="20" fill="url(#b2i3g)"/>
					<!-- handshake / deal -->
					<rect x="80" y="40" width="220" height="70" rx="14" class="b2i3-deal"/>
					<circle cx="130" cy="65" r="14" fill="#6366F1" opacity="0.8"/><circle cx="250" cy="65" r="14" fill="#06B6D4" opacity="0.8"/>
					<path pathLength="1" class="b2i3-hand" d="M148 75 Q190 95 232 75" stroke="#10B981" stroke-width="3" stroke-linecap="round" fill="none"/>
					<text x="190" y="102" text-anchor="middle" class="b2i3-deal-t">قرارداد امضاشده</text>
					<!-- pipeline stages -->
					<g class="b2i3-stage b2i3-stage--1"><rect x="40" y="140" width="70" height="28" rx="8" class="b2i3-stage-bg"/><text x="75" y="158" text-anchor="middle" class="b2i3-stage-t">سرنخ</text></g>
					<path pathLength="1" class="b2i3-arrow b2i3-arrow--1" d="M114 154 H130"/>
					<g class="b2i3-stage b2i3-stage--2"><rect x="134" y="140" width="70" height="28" rx="8" class="b2i3-stage-bg"/><text x="169" y="158" text-anchor="middle" class="b2i3-stage-t">مذاکره</text></g>
					<path pathLength="1" class="b2i3-arrow b2i3-arrow--2" d="M208 154 H224"/>
					<g class="b2i3-stage b2i3-stage--3"><rect x="228" y="140" width="70" height="28" rx="8" fill="#10B981"/><text x="263" y="158" text-anchor="middle" fill="#fff" font-size="9" font-weight="700" font-family="inherit">بسته</text></g>
					<!-- activity timeline -->
					<circle cx="60" cy="200" r="5" class="b2i3-adot b2i3-adot--1"/>
					<circle cx="100" cy="200" r="5" class="b2i3-adot b2i3-adot--2"/>
					<circle cx="140" cy="200" r="5" class="b2i3-adot b2i3-adot--3"/>
					<circle cx="180" cy="200" r="5" class="b2i3-adot b2i3-adot--4"/>
					<circle cx="220" cy="200" r="5" class="b2i3-adot b2i3-adot--5"/>
					<path pathLength="1" class="b2i3-timeline" d="M60 200 H220" stroke="var(--x-border)" stroke-width="2" stroke-dasharray="1" fill="none"/>
					<!-- check badge -->
					<g class="b2i3-check"><circle cx="310" cy="65" r="18" fill="#ECFDF5"/><path pathLength="1" d="M302 65 l5 5 10-12" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/></g>
				</svg>
			</div>
			<div class="xcrm-b2__ind-sec-body">
				<span class="xcrm-b2__ind-sec-num" aria-hidden="true">۰۳</span>
				<h3 class="xcrm-b2__ind-sec-title">شرکت‌های فروش و بازاریابی B2B</h3>
				<p class="xcrm-b2__ind-sec-desc">فرصت‌های فروش، سوابق تعامل، مراحل مذاکره و مسئولیت‌های اعضای تیم را مدیریت کنید. قراردادها را از سرنخ تا امضا دنبال کنید و هر فعالیت فروش را ثبت کنید.</p>
				<ul class="xcrm-b2__ind-sec-tags"><li>پایپ‌لاین فروش</li><li>گزارش فعالیت</li><li>دسترسی تیمی</li><li>تاریخچه تعامل</li></ul>
			</div>
		</article>

		<!-- Industry 4: Services -->
		<article class="xcrm-b2__ind-sec xcrm-b2__ind-sec--rev" data-reveal="up">
			<div class="xcrm-b2__ind-sec-visual">
				<svg class="xcrm-b2-svg" viewBox="0 0 380 260" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<defs><linearGradient id="b2i4g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#F59E0B" stop-opacity="0.08"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.04"/></linearGradient></defs>
					<rect x="10" y="10" width="360" height="240" rx="20" fill="url(#b2i4g)"/>
					<!-- clipboard -->
					<rect x="100" y="30" width="180" height="200" rx="12" class="b2i4-clip"/>
					<rect x="160" y="24" width="60" height="16" rx="6" class="b2i4-clip-tab"/>
					<!-- tasks -->
					<g class="b2i4-task b2i4-task--1"><circle cx="125" cy="70" r="7" class="b2i4-tdot b2i4-tdot--done"/><rect x="140" y="66" width="100" height="7" rx="3.5" class="b2i4-tline"/><text x="260" y="74" text-anchor="end" fill="#10B981" font-size="8" font-weight="700" font-family="inherit">✓</text></g>
					<g class="b2i4-task b2i4-task--2"><circle cx="125" cy="100" r="7" class="b2i4-tdot b2i4-tdot--done"/><rect x="140" y="96" width="80" height="7" rx="3.5" class="b2i4-tline"/><text x="260" y="104" text-anchor="end" fill="#10B981" font-size="8" font-weight="700" font-family="inherit">✓</text></g>
					<g class="b2i4-task b2i4-task--3"><circle cx="125" cy="130" r="7" class="b2i4-tdot b2i4-tdot--active"/><rect x="140" y="126" width="90" height="7" rx="3.5" class="b2i4-tline"/><text x="260" y="134" text-anchor="end" fill="#6366F1" font-size="8" font-weight="700" font-family="inherit">●</text></g>
					<g class="b2i4-task b2i4-task--4"><circle cx="125" cy="160" r="7" class="b2i4-tdot"/><rect x="140" y="156" width="70" height="7" rx="3.5" class="b2i4-tline"/></g>
					<g class="b2i4-task b2i4-task--5"><circle cx="125" cy="190" r="7" class="b2i4-tdot"/><rect x="140" y="186" width="85" height="7" rx="3.5" class="b2i4-tline"/></g>
					<!-- customer profile mini -->
					<circle cx="310" cy="70" r="16" fill="#6366F1" opacity="0.75"/>
					<circle cx="310" cy="70" r="22" class="b2i4-ring"/>
					<path pathLength="1" class="b2i4-clip-line" d="M290 70 H280"/>
					<!-- custom field pills -->
					<g class="b2i4-pill b2i4-pill--1"><rect x="40" y="80" width="45" height="20" rx="10" class="b2i4-pill-bg"/><text x="62" y="94" text-anchor="middle" class="b2i4-pill-t">VIP</text></g>
					<g class="b2i4-pill b2i4-pill--2"><rect x="40" y="110" width="45" height="20" rx="10" class="b2i4-pill-bg"/><text x="62" y="124" text-anchor="middle" class="b2i4-pill-t">ویژه</text></g>
				</svg>
			</div>
			<div class="xcrm-b2__ind-sec-body">
				<span class="xcrm-b2__ind-sec-num" aria-hidden="true">۰۴</span>
				<h3 class="xcrm-b2__ind-sec-title">خدمات و کسب‌وکارهای مبتنی بر مشتری</h3>
				<p class="xcrm-b2__ind-sec-desc">اطلاعات مشتریان، پیگیری درخواست‌ها و سوابق تعاملات را در یک فرآیند منظم دنبال کنید. هر درخواست، هر تماس و هر یادداشت در پروفایل مشتری ثبت می‌شود.</p>
				<ul class="xcrm-b2__ind-sec-tags"><li>پروفایل مشتری</li><li>یادآوری و پیگیری</li><li>ویژگی سفارشی</li><li>سوابق تعامل</li></ul>
			</div>
		</article>
	</div>
</section>

<!-- ══════════ 11. INTEGRATIONS ══════════ -->
<section class="xcrm-b2__section" id="integrations">
	<div class="xcrm-b2__deco xcrm-b2__deco--purple" style="top:10%;right:-5%;" aria-hidden="true"></div>
	<div class="xcrm-b2__inner">
		<div class="xcrm-b2__head" data-reveal="up">
			<p class="xcrm-b2__eyebrow">یکپارچه‌سازی‌ها</p>
			<h2 class="xcrm-b2__h2">xCRM را با زیرساخت کسب‌وکار خود هماهنگ کنید</h2>
			<p class="xcrm-b2__desc">با استفاده از ابزارهای اتصال و توسعه موجود، داده‌های مشتریان و رویدادهای سایت را به xCRM منتقل کنید.</p>
		</div>
		<div class="xcrm-b2__hub-visual" data-reveal="up" aria-hidden="true">
			<svg class="xcrm-b2-svg" viewBox="0 0 760 320" fill="none" xmlns="http://www.w3.org/2000/svg">
				<defs>
					<linearGradient id="b2hG" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.08"/><stop offset="100%" stop-color="#06B6D4" stop-opacity="0.04"/></linearGradient>
					<radialGradient id="b2hCore" cx="50%" cy="50%" r="50%"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#8B5CF6"/></radialGradient>
					<radialGradient id="b2hGlow" cx="50%" cy="50%" r="50%"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.2"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0"/></radialGradient>
				</defs>
				<rect x="10" y="10" width="740" height="300" rx="22" fill="url(#b2hG)"/>
				<!-- ambient glow -->
				<ellipse cx="380" cy="160" rx="160" ry="120" fill="url(#b2hGlow)" class="b2h-glow"/>
				<!-- center xCRM -->
				<circle cx="380" cy="160" r="46" fill="url(#b2hCore)" class="b2h-core"/>
				<text x="380" y="165" text-anchor="middle" fill="#fff" font-size="15" font-weight="800" font-family="inherit">xCRM</text>
				<circle cx="380" cy="160" r="56" class="b2h-ring"/>
				<circle cx="380" cy="160" r="70" class="b2h-ring b2h-ring--2"/>
				<!-- spokes with flowing particles -->
				<path pathLength="1" class="b2h-spoke b2h-spoke--1" d="M334 140 L200 75" stroke="#6366F1" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2h-spoke b2h-spoke--2" d="M334 160 H180" stroke="#06B6D4" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2h-spoke b2h-spoke--3" d="M334 180 L200 245" stroke="#10B981" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2h-spoke b2h-spoke--4" d="M426 140 L560 75" stroke="#F59E0B" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2h-spoke b2h-spoke--5" d="M426 160 H580" stroke="#EC4899" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2h-spoke b2h-spoke--6" d="M426 180 L560 245" stroke="#8B5CF6" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<!-- flowing particles along spokes -->
				<circle r="2.5" fill="#6366F1" class="b2h-particle b2h-particle--1"><animateMotion dur="3s" repeatCount="indefinite" begin="0.5s"><mpath href="#b2hp1"/></animateMotion></circle>
				<path id="b2hp1" d="M334 140 L200 75" fill="none" stroke="none"/>
				<circle r="2.5" fill="#06B6D4" class="b2h-particle b2h-particle--2"><animateMotion dur="3s" repeatCount="indefinite" begin="1.2s"><mpath href="#b2hp2"/></animateMotion></circle>
				<path id="b2hp2" d="M334 160 H180" fill="none" stroke="none"/>
				<circle r="2.5" fill="#10B981" class="b2h-particle b2h-particle--3"><animateMotion dur="3s" repeatCount="indefinite" begin="1.9s"><mpath href="#b2hp3"/></animateMotion></circle>
				<path id="b2hp3" d="M426 160 H580" fill="none" stroke="none"/>
				<circle r="2.5" fill="#F59E0B" class="b2h-particle b2h-particle--4"><animateMotion dur="3s" repeatCount="indefinite" begin="2.6s"><mpath href="#b2hp4"/></animateMotion></circle>
				<path id="b2hp4" d="M426 140 L560 75" fill="none" stroke="none"/>
				<!-- satellite nodes -->
				<g class="b2h-node b2h-node--1"><rect x="120" y="55" width="110" height="38" rx="10" class="b2h-node-bg"/><text x="175" y="79" text-anchor="middle" class="b2h-node-t">مرورگر SDK</text></g>
				<g class="b2h-node b2h-node--2"><rect x="100" y="142" width="80" height="36" rx="10" class="b2h-node-bg"/><text x="140" y="165" text-anchor="middle" class="b2h-node-t">API</text></g>
				<g class="b2h-node b2h-node--3"><rect x="120" y="226" width="110" height="38" rx="10" class="b2h-node-bg"/><text x="175" y="250" text-anchor="middle" class="b2h-node-t">وردپرس</text></g>
				<g class="b2h-node b2h-node--4"><rect x="530" y="55" width="110" height="38" rx="10" class="b2h-node-bg"/><text x="585" y="79" text-anchor="middle" class="b2h-node-t">n8n</text></g>
				<g class="b2h-node b2h-node--5"><rect x="580" y="142" width="80" height="36" rx="10" class="b2h-node-bg"/><text x="620" y="165" text-anchor="middle" class="b2h-node-t">تلگرام</text></g>
				<g class="b2h-node b2h-node--6"><rect x="530" y="226" width="110" height="38" rx="10" class="b2h-node-bg"/><text x="585" y="250" text-anchor="middle" class="b2h-node-t">پیامک</text></g>
				<!-- pulse rings on nodes -->
				<circle cx="175" cy="74" r="22" class="b2h-npulse b2h-npulse--1"/>
				<circle cx="140" cy="160" r="20" class="b2h-npulse b2h-npulse--2"/>
				<circle cx="175" cy="245" r="22" class="b2h-npulse b2h-npulse--3"/>
				<circle cx="585" cy="74" r="22" class="b2h-npulse b2h-npulse--4"/>
				<circle cx="620" cy="160" r="20" class="b2h-npulse b2h-npulse--5"/>
				<circle cx="585" cy="245" r="22" class="b2h-npulse b2h-npulse--6"/>
			</svg>
		</div>
		<div class="xcrm-b2__center-cta" data-reveal="up"><a href="#start" class="xcrm-b2__text-link">مشاهده ابزارهای اتصال <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg></a></div>
	</div>
</section>

<!-- ══════════ 12. GETTING STARTED ══════════ -->
<section class="xcrm-b2__section xcrm-b2__section--surface" id="start">
	<div class="xcrm-b2__deco xcrm-b2__deco--indigo" style="top:5%;left:-6%;" aria-hidden="true"></div>
	<div class="xcrm-b2__inner">
		<div class="xcrm-b2__head" data-reveal="up">
			<p class="xcrm-b2__eyebrow">شروع کار با xCRM</p>
			<h2 class="xcrm-b2__h2">از ثبت اطلاعات مشتریان تا مدیریت یکپارچه‌تر</h2>
		</div>

		<!-- Step 1: Account Setup -->
		<article class="xcrm-b2__chal" data-reveal="up">
			<div class="xcrm-b2__chal-visual">
				<svg class="xcrm-b2-svg" viewBox="0 0 380 260" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<defs><linearGradient id="b2s1g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.1"/><stop offset="100%" stop-color="#8B5CF6" stop-opacity="0.04"/></linearGradient><radialGradient id="b2s1av" cx="50%" cy="40%" r="50%"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#8B5CF6"/></radialGradient></defs>
					<rect x="10" y="10" width="360" height="240" rx="20" fill="url(#b2s1g)"/>
					<!-- company card -->
					<rect x="60" y="40" width="260" height="180" rx="16" class="b2s1-card"/>
					<!-- header bar -->
					<rect x="60" y="40" width="260" height="36" rx="16" class="b2s1-header"/>
					<circle cx="84" cy="58" r="6" fill="#6366F1" opacity="0.8"/>
					<circle cx="98" cy="58" r="6" fill="#06B6D4" opacity="0.6"/>
					<circle cx="112" cy="58" r="6" fill="#10B981" opacity="0.5"/>
					<text x="190" y="62" text-anchor="end" class="b2s1-header-t">تنظیمات فضای کاری</text>
					<!-- avatar -->
					<circle cx="115" cy="110" r="24" fill="url(#b2s1av)" class="b2s1-avatar"/>
					<circle cx="115" cy="110" r="30" class="b2s1-ring"/>
					<!-- info lines -->
					<rect x="150" y="96" width="100" height="8" rx="4" class="b2s1-line b2s1-line--1"/>
					<rect x="150" y="112" width="70" height="6" rx="3" class="b2s1-line b2s1-line--2"/>
					<!-- form fields -->
					<rect x="80" y="150" width="100" height="28" rx="8" class="b2s1-field b2s1-field--1"/>
					<rect x="195" y="150" width="100" height="28" rx="8" class="b2s1-field b2s1-field--2"/>
					<rect x="80" y="190" width="215" height="28" rx="8" class="b2s1-field b2s1-field--3"/>
					<!-- checkmark -->
					<g class="b2s1-check"><circle cx="300" cy="58" r="14" fill="#012517"/><path pathLength="1" d="M294 55 l4 4 8-10" stroke="#10B981" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></g>
					<!-- floating gear -->
					<g class="b2s1-gear">
						<circle cx="330" cy="120" r="12" fill="none" stroke="#6366F1" stroke-width="2"/>
						<circle cx="330" cy="120" r="5" fill="#6366F1" opacity="0.6"/>
						<path d="M330 104 v-4M330 140 v4M314 120 h-4M350 120 h4M319 109 l-3-3M341 131 l3 3M319 131 l-3 3M341 109 l3-3" stroke="#6366F1" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
					</g>
					<!-- floating dots -->
					<circle class="b2s1-dot b2s1-dot--1" cx="50" cy="130" r="3" fill="#6366F1"/>
					<circle class="b2s1-dot b2s1-dot--2" cx="340" cy="200" r="2.5" fill="#06B6D4"/>
					<circle class="b2s1-dot b2s1-dot--3" cx="40" cy="210" r="2" fill="#8B5CF6"/>
				</svg>
			</div>
			<div class="xcrm-b2__chal-body">
				<span class="xcrm-b2__chal-num" aria-hidden="true">گام اول</span>
				<h3 class="xcrm-b2__chal-title">ایجاد حساب و تنظیمات اولیه</h3>
				<p class="xcrm-b2__chal-desc">حساب کاربری ایجاد کنید، اطلاعات شرکت و لوگو را بارگذاری کنید و تنظیمات اولیه فضای کاری را تکمیل کنید. این مرحله فقط چند دقیقه طول می‌کشد و پس از آن آماده واردکردن اطلاعات مشتریان خواهید بود.</p>
				<ul class="xcrm-b2__chal-tags"><li>ایجاد حساب</li><li>اطلاعات شرکت</li><li>تنظیمات اولیه</li></ul>
			</div>
		</article>

		<!-- Step 2: Import Data -->
		<article class="xcrm-b2__chal xcrm-b2__chal--rev" data-reveal="up">
			<div class="xcrm-b2__chal-visual">
				<svg class="xcrm-b2-svg" viewBox="0 0 380 260" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<defs><linearGradient id="b2s2g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#06B6D4" stop-opacity="0.1"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.04"/></linearGradient></defs>
					<rect x="10" y="10" width="360" height="240" rx="20" fill="url(#b2s2g)"/>
					<!-- source file -->
					<g class="b2s2-file">
						<rect x="30" y="70" width="80" height="100" rx="8" class="b2s2-file-bg"/>
						<path pathLength="1" class="b2s2-file-fold" d="M30 78 Q30 70 38 70 H62 L72 80 H112 Q120 80 120 88 V162 Q120 170 112 170 H38 Q30 170 30 162 Z"/>
						<text x="70" y="130" text-anchor="middle" class="b2s2-file-t">CSV</text>
					</g>
					<!-- arrow -->
					<path pathLength="1" class="b2s2-arrow" d="M125 120 H165" stroke="#6366F1" stroke-width="2.5" stroke-linecap="round"/>
					<path pathLength="1" class="b2s2-arrow-head" d="M158 112 l8 8-8 8" stroke="#6366F1" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
					<!-- target dashboard -->
					<rect x="175" y="50" width="180" height="160" rx="12" class="b2s2-target"/>
					<rect x="175" y="50" width="180" height="28" rx="12" class="b2s2-target-header"/>
					<text x="265" y="69" text-anchor="middle" class="b2s2-target-t">پایگاه داده مشتریان</text>
					<!-- imported rows -->
					<g class="b2s2-row b2s2-row--1"><rect x="190" y="90" width="150" height="22" rx="6" class="b2s2-row-bg"/><circle cx="204" cy="101" r="6" fill="#6366F1" opacity="0.7"/><rect x="216" y="97" width="80" height="6" rx="3" class="b2s2-row-l"/></g>
					<g class="b2s2-row b2s2-row--2"><rect x="190" y="120" width="150" height="22" rx="6" class="b2s2-row-bg"/><circle cx="204" cy="131" r="6" fill="#06B6D4" opacity="0.7"/><rect x="216" y="127" width="65" height="6" rx="3" class="b2s2-row-l"/></g>
					<g class="b2s2-row b2s2-row--3"><rect x="190" y="150" width="150" height="22" rx="6" class="b2s2-row-bg"/><circle cx="204" cy="161" r="6" fill="#10B981" opacity="0.7"/><rect x="216" y="157" width="90" height="6" rx="3" class="b2s2-row-l"/></g>
					<g class="b2s2-row b2s2-row--4"><rect x="190" y="180" width="150" height="22" rx="6" class="b2s2-row-bg"/><circle cx="204" cy="191" r="6" fill="#F59E0B" opacity="0.7"/><rect x="216" y="187" width="70" height="6" rx="3" class="b2s2-row-l"/></g>
					<!-- progress bar -->
					<rect x="190" y="220" width="150" height="8" rx="4" class="b2s2-progress-bg"/>
					<rect x="190" y="220" width="150" height="8" rx="4" class="b2s2-progress-fill"/>
					<!-- floating format chips -->
					<g class="b2s2-chip b2s2-chip--1"><rect x="30" y="30" width="40" height="20" rx="8" class="b2s2-chip-bg"/><text x="50" y="44" text-anchor="middle" class="b2s2-chip-t">Excel</text></g>
					<g class="b2s2-chip b2s2-chip--2"><rect x="30" y="190" width="40" height="20" rx="8" class="b2s2-chip-bg"/><text x="50" y="204" text-anchor="middle" class="b2s2-chip-t">JSON</text></g>
					<circle class="b2s2-dot b2s2-dot--1" cx="150" cy="50" r="3" fill="#6366F1"/>
					<circle class="b2s2-dot b2s2-dot--2" cx="360" cy="140" r="2.5" fill="#06B6D4"/>
				</svg>
			</div>
			<div class="xcrm-b2__chal-body">
				<span class="xcrm-b2__chal-num" aria-hidden="true">گام دوم</span>
				<h3 class="xcrm-b2__chal-title">ثبت یا اتصال اطلاعات مشتریان</h3>
				<p class="xcrm-b2__chal-desc">اطلاعات مشتریان موجود را از فایل‌های CSV، Excel یا JSON وارد کنید یا از طریق API متصل شوید. فیلدها را نگاشت کنید و اطلاعات را در چند دقیقه به پایگاه داده xCRM منتقل کنید.</p>
				<ul class="xcrm-b2__chal-tags"><li>واردکردن CSV/Excel</li><li>اتصال API</li><li>نگاشت فیلدها</li></ul>
			</div>
		</article>

		<!-- Step 3: Configure -->
		<article class="xcrm-b2__chal" data-reveal="up">
			<div class="xcrm-b2__chal-visual">
				<svg class="xcrm-b2-svg" viewBox="0 0 380 260" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<defs><linearGradient id="b2s3g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#10B981" stop-opacity="0.08"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.04"/></linearGradient></defs>
					<rect x="10" y="10" width="360" height="240" rx="20" fill="url(#b2s3g)"/>
					<!-- segment builder panel -->
					<rect x="40" y="40" width="200" height="180" rx="12" class="b2s3-panel"/>
					<text x="140" y="65" text-anchor="middle" class="b2s3-panel-t">ساخت بخش مشتریان</text>
					<!-- condition rows -->
					<g class="b2s3-cond b2s3-cond--1"><rect x="55" y="80" width="170" height="30" rx="8" class="b2s3-cond-bg"/><text x="165" y="99" class="b2s3-cond-t">برچسب = ویژه</text></g>
					<g class="b2s3-cond b2s3-cond--2"><rect x="55" y="120" width="170" height="30" rx="8" class="b2s3-cond-bg"/><text x="165" y="139" class="b2s3-cond-t">آخرین خرید &lt; ۳۰ روز</text></g>
					<g class="b2s3-cond b2s3-cond--3"><rect x="55" y="160" width="170" height="30" rx="8" class="b2s3-cond-bg"/><text x="165" y="179" class="b2s3-cond-t">ارزش سفارش &gt; ۱ میلیون</text></g>
					<!-- AND badges -->
					<!-- <circle cx="230" cy="95" r="10" class="b2s3-logic"/><text x="230" y="99" text-anchor="middle" class="b2s3-logic-t">و</text>
					<circle cx="230" cy="135" r="10" class="b2s3-logic"/><text x="230" y="139" text-anchor="middle" class="b2s3-logic-t">و</text> -->
					<!-- channel icons -->
					<g class="b2s3-chan b2s3-chan--sms"><rect x="270" y="60" width="80" height="36" rx="10" class="b2s3-chan-bg"/><text x="310" y="83" text-anchor="middle" class="b2s3-chan-t">پیامک</text></g>
					<g class="b2s3-chan b2s3-chan--tg"><rect x="270" y="110" width="80" height="36" rx="10" class="b2s3-chan-bg"/><text x="310" y="133" text-anchor="middle" class="b2s3-chan-t">تلگرام</text></g>
					<g class="b2s3-chan b2s3-chan--email"><rect x="270" y="160" width="80" height="36" rx="10" class="b2s3-chan-bg"/><text x="310" y="183" text-anchor="middle" class="b2s3-chan-t">ایمیل</text></g>
					<!-- flow lines to channels -->
					<path pathLength="1" class="b2s3-flow b2s3-flow--1" d="M245 95 Q258 78 270 78" stroke="#6366F1" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
					<path pathLength="1" class="b2s3-flow b2s3-flow--2" d="M245 135 H270" stroke="#06B6D4" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
					<path pathLength="1" class="b2s3-flow b2s3-flow--3" d="M245 175 Q258 192 270 178" stroke="#F59E0B" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
					<!-- activate toggle -->
					<g class="b2s3-toggle"><rect x="100" y="210" width="80" height="28" rx="14" class="b2s3-toggle-bg"/><text x="140" y="229" text-anchor="middle" class="b2s3-toggle-t">فعال</text></g>
					<!-- <circle class="b2s3-dot b2s3-dot--1" cx="30" cy="100" r="3" fill="#10B981"/> -->
					<circle class="b2s3-dot b2s3-dot--2" cx="360" cy="220" r="2.5" fill="#6366F1"/>
				</svg>
			</div>
			<div class="xcrm-b2__chal-body">
				<span class="xcrm-b2__chal-num" aria-hidden="true">گام سوم</span>
				<h3 class="xcrm-b2__chal-title">پیکربندی بخش‌بندی و ارتباطات</h3>
				<p class="xcrm-b2__chal-desc">بخش‌بندی‌های موردنیاز خود را با شرط‌های دلخواه بسازید، کانال‌های ارتباطی (پیامک، تلگرام، ایمیل) را تنظیم کنید و گردش‌کارهای اتوماسیون را فعال کنید تا ارتباطات هدفمند شروع شود.</p>
				<ul class="xcrm-b2__chal-tags"><li>بخش‌بندی پویا</li><li>تنظیم کانال‌ها</li><li>اتوماسیون</li></ul>
			</div>
		</article>

		<!-- Step 4: Review & Grow -->
		<article class="xcrm-b2__chal xcrm-b2__chal--rev" data-reveal="up">
			<div class="xcrm-b2__chal-visual">
				<svg class="xcrm-b2-svg" viewBox="0 0 380 260" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<defs><linearGradient id="b2s4g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#8B5CF6" stop-opacity="0.08"/><stop offset="100%" stop-color="#06B6D4" stop-opacity="0.04"/></linearGradient><linearGradient id="b2s4bar" x1="0" y1="1" x2="0" y2="0"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.2"/><stop offset="100%" stop-color="#8B5CF6"/></linearGradient><linearGradient id="b2s4ln" x1="0" y1="0" x2="380" y2="0"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#06B6D4"/></linearGradient></defs>
					<rect x="10" y="10" width="360" height="240" rx="20" fill="url(#b2s4g)"/>
					<!-- dashboard frame -->
					<rect x="30" y="30" width="320" height="200" rx="14" class="b2s4-frame"/>
					<rect x="30" y="30" width="320" height="28" rx="14" class="b2s4-header"/>
					<circle cx="48" cy="44" r="4" fill="#F04438" opacity="0.5"/><circle cx="58" cy="44" r="4" fill="#F59E0B" opacity="0.5"/><circle cx="68" cy="44" r="4" fill="#10B981" opacity="0.5"/>
					<text x="290" y="49" text-anchor="end" class="b2s4-header-t">داشبورد تحلیلی</text>
					<!-- KPI cards -->
					<g class="b2s4-kpi b2s4-kpi--1"><rect x="45" y="170" width="85" height="50" rx="8" class="b2s4-kpi-bg"/><text x="87" y="190" text-anchor="middle" class="b2s4-kpi-l">بازدیدکنندگان</text><text x="87" y="210" text-anchor="middle" class="b2s4-kpi-v">۱۲,۴۰۰</text></g>
					<g class="b2s4-kpi b2s4-kpi--2"><rect x="145" y="170" width="85" height="50" rx="8" class="b2s4-kpi-bg"/><text x="187" y="190" text-anchor="middle" class="b2s4-kpi-l">نرخ تبدیل</text><text x="187" y="210" text-anchor="middle" class="b2s4-kpi-v">۳.۲٪</text></g>
					<g class="b2s4-kpi b2s4-kpi--3"><rect x="245" y="170" width="85" height="50" rx="8" class="b2s4-kpi-bg"/><text x="287" y="190" text-anchor="middle" class="b2s4-kpi-l">فروش ماه</text><text x="287" y="210" text-anchor="middle" class="b2s4-kpi-v">۸۴.۵M</text></g>
					<!-- chart bars -->
					<rect class="b2s4-bar b2s4-bar--1" x="55" y="175" width="30" height="35" rx="5" fill="url(#b2s4bar)" style="--i:0"/>
					<rect class="b2s4-bar b2s4-bar--2" x="100" y="155" width="30" height="55" rx="5" fill="url(#b2s4bar)" style="--i:1"/>
					<rect class="b2s4-bar b2s4-bar--3" x="145" y="165" width="30" height="45" rx="5" fill="url(#b2s4bar)" style="--i:2"/>
					<rect class="b2s4-bar b2s4-bar--4" x="190" y="135" width="30" height="75" rx="5" fill="url(#b2s4bar)" style="--i:3"/>
					<rect class="b2s4-bar b2s4-bar--5" x="235" y="145" width="30" height="65" rx="5" fill="url(#b2s4bar)" style="--i:4"/>
					<rect class="b2s4-bar b2s4-bar--6" x="280" y="120" width="30" height="90" rx="5" fill="url(#b2s4bar)" style="--i:5"/>
					<!-- trend line -->
					<path pathLength="1" class="b2s4-line" d="M70 170 L115 150 L160 160 L205 130 L250 140 L295 115" stroke="url(#b2s4ln)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
					<circle class="b2s4-dot" cx="70" cy="170" r="4" style="--i:0"/><circle class="b2s4-dot" cx="115" cy="150" r="4" style="--i:1"/><circle class="b2s4-dot" cx="160" cy="160" r="4" style="--i:2"/><circle class="b2s4-dot" cx="205" cy="130" r="4" style="--i:3"/><circle class="b2s4-dot" cx="250" cy="140" r="4" style="--i:4"/><circle class="b2s4-dot" cx="295" cy="115" r="5" style="--i:5"/>
					<!-- success pulse -->
					<circle cx="295" cy="115" r="10" class="b2s4-pulse"/>
					<!-- floating badge -->
					<g class="b2s4-badge"><rect x="260" y="85" width="70" height="22" rx="8" class="b2s4-badge-bg"/><text x="295" y="100" text-anchor="middle" class="b2s4-badge-t">رشد +۲۴٪</text></g>
				</svg>
			</div>
			<div class="xcrm-b2__chal-body">
				<span class="xcrm-b2__chal-num" aria-hidden="true">گام چهارم</span>
				<h3 class="xcrm-b2__chal-title">بررسی داده‌ها و شروع استفاده</h3>
				<p class="xcrm-b2__chal-desc">داشبورد تحلیلی خود را بررسی کنید، گزارش‌های رفتار مشتریان را ببینید و بر اساس داده‌های واقعی فرآیندهای فروش و بازاریابی خود را بهبود دهید. xCRM به شما کمک می‌کند تصمیمات بهتری بگیرید.</p>
				<ul class="xcrm-b2__chal-tags"><li>داشبورد تحلیلی</li><li>گزارش‌گیری</li><li>بهبود فرآیند</li></ul>
			</div>
		</article>

		<div class="xcrm-b2__center-cta" data-reveal="up"><a href="<?php echo esc_url( $signup_url ); ?>" class="xcrm-b2__btn xcrm-b2__btn--primary">شروع استفاده از xCRM</a></div>
	</div>
</section>

<!-- ══════════ 13. PRICING ══════════ -->
<section class="xcrm-b2__section" id="pricing">
	<div class="xcrm-b2__inner">
		<div class="xcrm-b2__pricing-box" data-reveal="up">
			<p class="xcrm-b2__eyebrow">پلن‌ها و قیمت‌گذاری</p>
			<h2 class="xcrm-b2__h2">طرح مناسب کسب‌وکار خود را انتخاب کنید</h2>
			<p class="xcrm-b2__desc">بر اساس اندازه تیم، حجم داده‌ها و قابلیت‌های موردنیاز، طرح مناسب را بررسی کنید. دسترسی به قابلیت‌ها بر اساس طرح اشتراک تعیین می‌شود.</p>
			<a href="<?php echo esc_url( $pricing_url ); ?>" class="xcrm-b2__btn xcrm-b2__btn--primary">مشاهده طرح‌ها و قیمت‌ها</a>
		</div>
	</div>
</section>

<!-- ══════════ 14. FAQ ══════════ -->
<section class="xcrm-b2__section xcrm-b2__section--surface" id="faq">
	<div class="xcrm-b2__inner xcrm-b2__faq-wrap">
		<div class="xcrm-b2__head" data-reveal="up">
			<p class="xcrm-b2__eyebrow">سؤالات متداول</p>
			<h2 class="xcrm-b2__h2">پاسخ پرسش‌های شما درباره xCRM</h2>
		</div>
		<div class="xcrm-b2__faq" data-reveal="up">
			<details class="xcrm-b2__faq-item"><summary><span>xCRM برای چه کسب‌وکارهایی مناسب است؟</span><svg class="xcrm-b2__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></summary><div class="xcrm-b2__faq-a"><p>xCRM برای کسب‌وکارهایی طراحی شده است که به مدیریت اطلاعات مشتریان، پیگیری فرصت‌های فروش، بخش‌بندی مشتریان و تحلیل رفتار کاربران نیاز دارند. امکانات موردنیاز هر کسب‌وکار به مدل فعالیت و تنظیمات آن بستگی دارد.</p></div></details>
			<details class="xcrm-b2__faq-item"><summary><span>آیا امکان مدیریت گروه‌ها و اطلاعات مشتری وجود دارد؟</span><svg class="xcrm-b2__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></summary><div class="xcrm-b2__faq-a"><p>بله، امکان ایجاد بخش‌های پویا بر اساس شرایط تعریف‌شده وجود دارد. نوع بخش‌بندی قابل استفاده به اطلاعات مشتریان و رویدادهای ثبت‌شده بستگی دارد.</p></div></details>
			<details class="xcrm-b2__faq-item"><summary><span>اتوماسیون بازاریابی چه کاربردی دارد؟</span><svg class="xcrm-b2__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></summary><div class="xcrm-b2__faq-a"><p>اتوماسیون بازاریابی به شما کمک می‌کند تا بر اساس رفتار مشتریان، پیام‌ها و کمپین‌ها را به صورت خودکار ارسال کنید و پیگیری‌های منظم داشته باشید.</p></div></details>
			<details class="xcrm-b2__faq-item"><summary><span>چه کانال‌ها و سرویس‌هایی قابل اتصال هستند؟</span><svg class="xcrm-b2__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></summary><div class="xcrm-b2__faq-a"><p>xCRM قابلیت‌های ارتباطی پیامکی و تلگرامی دارد. امکانات در دسترس به تنظیمات حساب، ارائه‌دهندگان متصل و عملیات پشتیبانی‌شده بستگی دارد.</p></div></details>
			<details class="xcrm-b2__faq-item"><summary><span>چگونه می‌توان استفاده از محصول را آغاز کرد؟</span><svg class="xcrm-b2__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></summary><div class="xcrm-b2__faq-a"><p>کافی است حساب ایجاد کنید، اطلاعات مشتریان را وارد کنید و تنظیمات اولیه را انجام دهید. سپس می‌توانید از قابلیت‌های موجود استفاده کنید.</p></div></details>
			<details class="xcrm-b2__faq-item"><summary><span>چطور می‌توان دربارهٔ پلن‌ها و پشتیبانی اطلاعات گرفت؟</span><svg class="xcrm-b2__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></summary><div class="xcrm-b2__faq-a"><p>برای اطلاع از جزئیات پلن‌ها و شرایط پشتیبانی، <a href="<?php echo esc_url( $pricing_url ); ?>">صفحه قیمت‌گذاری</a> را بررسی کنید یا با تیم پشتیبانی تماس بگیرید.</p></div></details>
		</div>
	</div>
</section>

<!-- ══════════ 15. FINAL CTA ══════════ -->
<section class="xcrm-b2__section xcrm-b2__final" id="cta">
	<div class="xcrm-b2__inner">
		<div class="xcrm-b2__final-box" data-reveal="scale">
			<div class="xcrm-b2__final-deco" aria-hidden="true">
				<svg class="xcrm-b2-svg" viewBox="0 0 400 200" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="200" cy="100" r="30" fill="rgba(255,255,255,0.15)"/>
					<circle cx="200" cy="100" r="50" stroke="rgba(255,255,255,0.1)" stroke-width="1" fill="none"/>
					<circle cx="200" cy="100" r="70" stroke="rgba(255,255,255,0.06)" stroke-width="1" fill="none"/>
					<circle cx="200" cy="100" r="90" stroke="rgba(255,255,255,0.04)" stroke-width="1" fill="none"/>
					<circle class="b2fc-dot b2fc-dot--1" cx="140" cy="60" r="4" fill="rgba(255,255,255,0.4)"/>
					<circle class="b2fc-dot b2fc-dot--2" cx="280" cy="80" r="3" fill="rgba(255,255,255,0.3)"/>
					<circle class="b2fc-dot b2fc-dot--3" cx="160" cy="150" r="3.5" fill="rgba(255,255,255,0.35)"/>
					<circle class="b2fc-dot b2fc-dot--4" cx="260" cy="140" r="3" fill="rgba(255,255,255,0.25)"/>
					<path pathLength="1" class="b2fc-line b2fc-line--1" d="M170 80 L200 100" stroke="rgba(255,255,255,0.2)" stroke-width="1" fill="none"/>
					<path pathLength="1" class="b2fc-line b2fc-line--2" d="M230 85 L200 100" stroke="rgba(255,255,255,0.2)" stroke-width="1" fill="none"/>
					<path pathLength="1" class="b2fc-line b2fc-line--3" d="M175 140 L200 100" stroke="rgba(255,255,255,0.2)" stroke-width="1" fill="none"/>
					<path pathLength="1" class="b2fc-line b2fc-line--4" d="M250 135 L200 100" stroke="rgba(255,255,255,0.2)" stroke-width="1" fill="none"/>
				</svg>
			</div>
			<div class="xcrm-b2__final-content">
				<h2 class="xcrm-b2__h2">مدیریت مشتریان را از امروز هدفمندتر کنید</h2>
				<p class="xcrm-b2__desc">اطلاعات مشتریان، پیگیری‌های فروش و تحلیل رفتار کاربران را در یک مسیر منظم قرار دهید و امکانات xCRM را متناسب با نیاز کسب‌وکار خود بشناسید.</p>
				<div class="xcrm-b2__final-actions">
					<a href="<?php echo esc_url( $signup_url ); ?>" class="xcrm-b2__btn xcrm-b2__btn--on-dark">شروع استفاده از xCRM</a>
					<a href="#profiles" class="xcrm-b2__btn xcrm-b2__btn--ghost-light">آشنایی با امکانات</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- FOOTER -->
<footer class="xcrm-b2__footer">
	<div class="xcrm-b2__inner xcrm-b2__footer-inner">
		<a href="<?php echo esc_url( $home_url ); ?>" class="hp__brand">
			<span class="hp__brand-icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>
			<span class="hp__brand-text">xCRM</span>
		</a>
		<p class="xcrm-b2__footer-copy">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> xCRM — مدیریت مشتریان و فروش برای کسب‌وکارها.</p>
		<div class="xcrm-b2__footer-links">
			<a href="<?php echo esc_url( home_url( '/for-marketers/' ) ); ?>">برای مارکترها</a>
			<a href="#profiles">امکانات</a>
			<a href="<?php echo esc_url( $home_url ); ?>">صفحه اصلی</a>
		</div>
	</div>
</footer>

</main>

<?php wp_footer(); ?>
</body>
</html>
