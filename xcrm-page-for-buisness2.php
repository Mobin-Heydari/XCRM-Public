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
		<span class="xcrm-b2__orb xcrm-b2__orb--1"></span>
		<span class="xcrm-b2__orb xcrm-b2__orb--2"></span>
		<span class="xcrm-b2__orb xcrm-b2__orb--3"></span>
		<span class="xcrm-b2__orb xcrm-b2__orb--4"></span>
	</div>
	<div class="xcrm-b2__hero-inner">
		<div class="xcrm-b2__hero-copy">
			<p class="xcrm-b2__eyebrow xcrm-b2-anim xcrm-b2-anim--1">مدیریت مشتری و اتوماسیون بازاریابی</p>
			<h1 class="xcrm-b2__h1 xcrm-b2-anim xcrm-b2-anim--2">مشتریان را بشناسید، فروش را مدیریت کنید، رشد کنید</h1>
			<p class="xcrm-b2__lead xcrm-b2-anim xcrm-b2-anim--3">اطلاعات مشتری، تحلیل رفتار، بخش‌بندی هوشمند و ارتباطات هدفمند — همه در یک پلتفرم یکپارچه برای کسب‌وکار شما.</p>
			<div class="xcrm-b2__hero-actions xcrm-b2-anim xcrm-b2-anim--4">
				<a href="<?php echo esc_url( $signup_url ); ?>" class="xcrm-b2__btn xcrm-b2__btn--primary">شروع استفاده از xCRM</a>
				<a href="#profiles" class="xcrm-b2__btn xcrm-b2__btn--secondary">آشنایی با امکانات</a>
			</div>
		</div>
		<div class="xcrm-b2__hero-visual xcrm-b2-anim xcrm-b2-anim--3" aria-hidden="true">
			<!-- Flow: visitor → profile → segment → automation → sale -->
			<svg class="xcrm-b2-flow" viewBox="0 0 440 340" fill="none" xmlns="http://www.w3.org/2000/svg">
				<defs>
					<linearGradient id="b2fLine" x1="0" y1="0" x2="440" y2="0"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#06B6D4"/></linearGradient>
					<linearGradient id="b2fNode" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#8B5CF6"/></linearGradient>
				</defs>
				<!-- connecting paths -->
				<path pathLength="1" class="b2f-draw b2f-draw--1" d="M90 80 Q160 80 180 140" stroke="url(#b2fLine)" stroke-width="2" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2f-draw b2f-draw--2" d="M220 170 Q260 170 280 100" stroke="url(#b2fLine)" stroke-width="2" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2f-draw b2f-draw--3" d="M280 130 Q300 170 340 170" stroke="url(#b2fLine)" stroke-width="2" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2f-draw b2f-draw--4" d="M220 200 Q200 260 160 260" stroke="url(#b2fLine)" stroke-width="2" stroke-dasharray="1" fill="none"/>
				<!-- node: visitor -->
				<g class="b2f-node b2f-node--visitor">
					<circle cx="70" cy="80" r="30" class="b2f-node-bg"/>
					<circle cx="70" cy="72" r="8" fill="#6366F1" opacity="0.8"/>
					<path d="M56 96 Q70 84 84 96" stroke="#6366F1" stroke-width="2" fill="none" stroke-linecap="round"/>
					<text x="70" y="125" text-anchor="middle" class="b2f-label">بازدیدکننده</text>
				</g>
				<!-- node: profile -->
				<g class="b2f-node b2f-node--profile">
					<rect x="160" y="130" width="80" height="60" rx="12" class="b2f-node-bg"/>
					<circle cx="185" cy="152" r="10" fill="url(#b2fNode)"/>
					<rect x="200" y="146" width="28" height="5" rx="2.5" class="b2f-line-sm"/>
					<rect x="200" y="156" width="20" height="4" rx="2" class="b2f-line-sm"/>
					<text x="200" y="208" text-anchor="middle" class="b2f-label">پروفایل مشتری</text>
				</g>
				<!-- node: segment -->
				<g class="b2f-node b2f-node--segment">
					<circle cx="310" cy="90" r="32" class="b2f-node-bg"/>
					<circle cx="300" cy="82" r="5" fill="#6366F1"/><circle cx="318" cy="78" r="5" fill="#06B6D4"/><circle cx="310" cy="98" r="5" fill="#8B5CF6"/>
					<text x="310" y="140" text-anchor="middle" class="b2f-label">بخش‌بندی</text>
				</g>
				<!-- node: automation -->
				<g class="b2f-node b2f-node--auto">
					<rect x="300" y="148" width="80" height="48" rx="12" class="b2f-node-bg"/>
					<polygon points="330,160 320,176 328,176 322,190 342,172 334,172 342,160" fill="#6366F1" opacity="0.85"/>
					<text x="340" y="215" text-anchor="middle" class="b2f-label">اتوماسیون</text>
				</g>
				<!-- node: sale -->
				<g class="b2f-node b2f-node--sale">
					<rect x="100" y="230" width="120" height="52" rx="14" class="b2f-node-bg b2f-node-bg--sale"/>
					<circle cx="130" cy="256" r="12" fill="#10B981" opacity="0.2"/>
					<path pathLength="1" class="b2f-check" d="M124 256 l4 4 8-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
					<text x="170" y="260" text-anchor="middle" class="b2f-label b2f-label--sale">فروش موفق</text>
				</g>
				<!-- floating dots -->
				<circle class="b2f-dot b2f-dot--1" cx="140" cy="60" r="3" fill="#6366F1"/>
				<circle class="b2f-dot b2f-dot--2" cx="370" cy="120" r="2.5" fill="#06B6D4"/>
				<circle class="b2f-dot b2f-dot--3" cx="50" cy="200" r="2" fill="#8B5CF6"/>
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
		<div class="xcrm-b2__grid-4">
			<article class="xcrm-b2__card" data-reveal="up">
				<div class="xcrm-b2__card-icon" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/></svg></div>
				<h3 class="xcrm-b2__card-title">پراکندگی اطلاعات مشتریان</h3>
				<p class="xcrm-b2__card-desc">اطلاعات تماس، سوابق و ویژگی‌های مشتریان در ابزارهای مختلف پراکنده است.</p>
			</article>
			<article class="xcrm-b2__card" data-reveal="up" data-reveal-delay="80">
				<div class="xcrm-b2__card-icon xcrm-b2__card-icon--warn" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 9v4M12 17h.01"/><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/></svg></div>
				<h3 class="xcrm-b2__card-title">از دست رفتن فرصت‌های فروش</h3>
				<p class="xcrm-b2__card-desc">فرصت‌های فروش بدون پیگیری منظم فراموش می‌شوند و درآمد از دست می‌رود.</p>
			</article>
			<article class="xcrm-b2__card" data-reveal="up" data-reveal-delay="160">
				<div class="xcrm-b2__card-icon xcrm-b2__card-icon--info" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
				<h3 class="xcrm-b2__card-title">ارتباطات غیرهدفمند</h3>
				<p class="xcrm-b2__card-desc">پیام‌های عمومی به همه مشتریان ارسال می‌شود و نرخ تعامل کاهش می‌یابد.</p>
			</article>
			<article class="xcrm-b2__card" data-reveal="up" data-reveal-delay="240">
				<div class="xcrm-b2__card-icon xcrm-b2__card-icon--success" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M7 14l4-4 4 4 5-6"/></svg></div>
				<h3 class="xcrm-b2__card-title">دشواری تحلیل عملکرد</h3>
				<p class="xcrm-b2__card-desc">بدون داده‌های ساختاریافته، تصمیم‌گیری بر اساس حدس و گمان انجام می‌شود.</p>
			</article>
		</div>
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
		<div class="xcrm-b2__kanban" data-reveal="up" aria-hidden="true">
			<div class="xcrm-b2__kcol"><header><span>سرنخ جدید</span><em>۳</em></header><div class="xcrm-b2__ktask"><strong>شرکت آریا</strong><span>تماس اولیه</span></div><div class="xcrm-b2__ktask"><strong>فروشگاه پارس</strong><span>درخواست دمو</span></div></div>
			<div class="xcrm-b2__kcol"><header><span>در حال پیگیری</span><em>۲</em></header><div class="xcrm-b2__ktask xcrm-b2__ktask--active"><strong>استارتاپ رها</strong><span>ارسال پیشنهاد</span></div><div class="xcrm-b2__ktask"><strong>شرکت کیان</strong><span>جلسه حضوری</span></div></div>
			<div class="xcrm-b2__kcol"><header><span>مذاکره</span><em>۲</em></header><div class="xcrm-b2__ktask"><strong>برند مهر</strong><span>شروط قرارداد</span></div><div class="xcrm-b2__ktask"><strong>هلدینگ سپهر</strong><span>تخفیف سالانه</span></div></div>
			<div class="xcrm-b2__kcol"><header><span>آماده تصمیم</span><em>۱</em></header><div class="xcrm-b2__ktask"><strong>آژانس نور</strong><span>تأیید مدیرعامل</span></div></div>
			<div class="xcrm-b2__kcol xcrm-b2__kcol--done"><header><span>نهایی‌شده</span><em>۲</em></header><div class="xcrm-b2__ktask"><strong>فروشگاه لونا</strong><span>قرارداد امضاشده</span></div></div>
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
				<g class="b2fu-task b2fu-task--1"><rect x="60" y="190" width="260" height="32" rx="10" class="b2fu-task-bg"/><circle cx="82" cy="206" r="7" class="b2fu-task-dot b2fu-task-dot--done"/><rect x="98" y="202" width="120" height="7" rx="3.5" class="b2fu-task-l"/><text x="300" y="210" text-anchor="end" fill="#10B981" font-size="8" font-weight="700" font-family="inherit">انجام‌شده</text></g>
				<g class="b2fu-task b2fu-task--2"><rect x="60" y="230" width="260" height="32" rx="10" class="b2fu-task-bg"/><circle cx="82" cy="246" r="7" class="b2fu-task-dot b2fu-task-dot--active"/><rect x="98" y="242" width="100" height="7" rx="3.5" class="b2fu-task-l"/><text x="300" y="250" text-anchor="end" fill="#6366F1" font-size="8" font-weight="700" font-family="inherit">امروز</text></g>
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
			<svg class="xcrm-b2-svg" viewBox="0 0 700 280" fill="none" xmlns="http://www.w3.org/2000/svg">
				<defs><linearGradient id="b2sG" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#10B981" stop-opacity="0.08"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.04"/></linearGradient></defs>
				<rect x="10" y="10" width="680" height="260" rx="22" fill="url(#b2sG)"/>
				<text x="100" y="50" text-anchor="middle" class="b2s-label">همه مشتریان</text>
				<circle cx="100" cy="120" r="50" class="b2s-cluster b2s-cluster--src"/>
				<circle cx="85" cy="110" r="7" class="b2s-node b2s-node--src"/><circle cx="115" cy="106" r="7" class="b2s-node b2s-node--src"/><circle cx="100" cy="136" r="7" class="b2s-node b2s-node--src"/><circle cx="80" cy="130" r="6" class="b2s-node b2s-node--src"/><circle cx="120" cy="130" r="6" class="b2s-node b2s-node--src"/>
				<path pathLength="1" class="b2s-flow b2s-flow--1" d="M155 100 Q220 70 280 70" stroke="#6366F1" stroke-width="2" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2s-flow b2s-flow--2" d="M150 120 H280" stroke="#06B6D4" stroke-width="2" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2s-flow b2s-flow--3" d="M155 140 Q220 170 280 170" stroke="#F59E0B" stroke-width="2" stroke-dasharray="1" fill="none"/>
				<circle cx="340" cy="70" r="42" class="b2s-cluster b2s-cluster--a"/>
				<circle cx="330" cy="62" r="6" class="b2s-node b2s-node--a"/><circle cx="352" cy="58" r="6" class="b2s-node b2s-node--a"/><circle cx="340" cy="82" r="6" class="b2s-node b2s-node--a"/>
				<g class="b2s-lbl b2s-lbl--a"><rect x="300" y="18" width="80" height="22" rx="8" class="b2s-lbl-bg"/><text x="340" y="33" text-anchor="middle" class="b2s-lbl-t">پرخرید</text></g>
				<circle cx="340" cy="120" r="38" class="b2s-cluster b2s-cluster--b"/>
				<circle cx="332" cy="114" r="6" class="b2s-node b2s-node--b"/><circle cx="350" cy="110" r="6" class="b2s-node b2s-node--b"/><circle cx="340" cy="132" r="6" class="b2s-node b2s-node--b"/>
				<g class="b2s-lbl b2s-lbl--b"><rect x="306" y="166" width="68" height="22" rx="8" class="b2s-lbl-bg"/><text x="340" y="181" text-anchor="middle" class="b2s-lbl-t">جدید</text></g>
				<circle cx="340" cy="175" r="40" class="b2s-cluster b2s-cluster--c"/>
				<circle cx="330" cy="168" r="6" class="b2s-node b2s-node--c"/><circle cx="352" cy="166" r="6" class="b2s-node b2s-node--c"/><circle cx="340" cy="188" r="6" class="b2s-node b2s-node--c"/>
				<g class="b2s-lbl b2s-lbl--c"><rect x="290" y="222" width="100" height="22" rx="8" class="b2s-lbl-bg"/><text x="340" y="237" text-anchor="middle" class="b2s-lbl-t">در معرض ریزش</text></g>
				<path pathLength="1" class="b2s-flow b2s-flow--4" d="M385 70 Q460 70 500 120" stroke="#6366F1" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2s-flow b2s-flow--5" d="M380 120 H500" stroke="#06B6D4" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2s-flow b2s-flow--6" d="M385 175 Q460 175 500 130" stroke="#F59E0B" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<rect x="500" y="90" width="140" height="70" rx="14" class="b2s-camp"/>
				<text x="570" y="120" text-anchor="middle" class="b2s-camp-t">کمپین هدفمند</text>
				<text x="570" y="140" text-anchor="middle" class="b2s-camp-s">ارسال به گروه انتخابی</text>
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
			<svg class="xcrm-b2-svg" viewBox="0 0 800 260" fill="none" xmlns="http://www.w3.org/2000/svg">
				<defs><linearGradient id="b2aBar" x1="0" y1="1" x2="0" y2="0"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.18"/><stop offset="100%" stop-color="#8B5CF6"/></linearGradient><linearGradient id="b2aLn" x1="0" y1="0" x2="800" y2="0"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#06B6D4"/></linearGradient></defs>
				<rect x="1" y="1" width="798" height="258" rx="18" class="b2a-frame"/>
				<text x="760" y="32" text-anchor="end" class="b2a-title">نمای کلی عملکرد — نمونهٔ نمایشی</text>
				<line x1="60" y1="70" x2="480" y2="70" class="b2a-grid"/><line x1="60" y1="115" x2="480" y2="115" class="b2a-grid"/><line x1="60" y1="160" x2="480" y2="160" class="b2a-grid"/><line x1="60" y1="205" x2="480" y2="205" class="b2a-grid"/>
				<rect class="b2a-bar" x="90" y="160" width="36" height="55" rx="6" fill="url(#b2aBar)" style="--i:0"/>
				<rect class="b2a-bar" x="150" y="125" width="36" height="90" rx="6" fill="url(#b2aBar)" style="--i:1"/>
				<rect class="b2a-bar" x="210" y="140" width="36" height="75" rx="6" fill="url(#b2aBar)" style="--i:2"/>
				<rect class="b2a-bar" x="270" y="95" width="36" height="120" rx="6" fill="url(#b2aBar)" style="--i:3"/>
				<rect class="b2a-bar" x="330" y="110" width="36" height="105" rx="6" fill="url(#b2aBar)" style="--i:4"/>
				<rect class="b2a-bar" x="390" y="75" width="36" height="140" rx="6" fill="url(#b2aBar)" style="--i:5"/>
				<path pathLength="1" class="b2a-line" d="M108 160 L168 125 L228 140 L288 95 L348 110 L408 75" stroke="url(#b2aLn)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
				<circle class="b2a-dot" cx="108" cy="160" r="4.5" style="--i:0"/><circle class="b2a-dot" cx="168" cy="125" r="4.5" style="--i:1"/><circle class="b2a-dot" cx="228" cy="140" r="4.5" style="--i:2"/><circle class="b2a-dot" cx="288" cy="95" r="4.5" style="--i:3"/><circle class="b2a-dot" cx="348" cy="110" r="4.5" style="--i:4"/><circle class="b2a-dot" cx="408" cy="75" r="5.5" style="--i:5"/>
				<text x="640" y="60" text-anchor="middle" class="b2a-title">قیف تبدیل</text>
				<rect x="540" y="75" width="200" height="28" rx="8" class="b2a-funnel b2a-funnel--1"/>
				<rect x="565" y="113" width="150" height="28" rx="8" class="b2a-funnel b2a-funnel--2"/>
				<rect x="590" y="151" width="100" height="28" rx="8" class="b2a-funnel b2a-funnel--3"/>
				<rect x="615" y="189" width="50" height="28" rx="8" class="b2a-funnel b2a-funnel--4"/>
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
		<div class="xcrm-b2__ind-grid">
			<article class="xcrm-b2__ind-card" data-reveal="up">
				<div class="xcrm-b2__ind-visual">
					<svg class="xcrm-b2-svg" viewBox="0 0 300 180" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs><linearGradient id="b2i1g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.1"/><stop offset="100%" stop-color="#8B5CF6" stop-opacity="0.04"/></linearGradient></defs>
						<rect x="10" y="10" width="280" height="160" rx="18" fill="url(#b2i1g)"/>
						<rect x="40" y="28" width="220" height="124" rx="10" class="b2i-frame"/>
						<circle cx="56" cy="42" r="3.5" fill="#F04438" opacity="0.5"/><circle cx="66" cy="42" r="3.5" fill="#F59E0B" opacity="0.5"/><circle cx="76" cy="42" r="3.5" fill="#10B981" opacity="0.5"/>
						<rect x="50" y="54" width="52" height="38" rx="5" class="b2i-tile b2i-tile--1"/>
						<rect x="110" y="54" width="52" height="38" rx="5" class="b2i-tile b2i-tile--2"/>
						<rect x="170" y="54" width="52" height="38" rx="5" class="b2i-tile b2i-tile--3"/>
						<rect x="58" y="106" width="140" height="8" rx="4" class="b2i-fbar b2i-fbar--1"/>
						<rect x="74" y="120" width="108" height="8" rx="4" class="b2i-fbar b2i-fbar--2"/>
						<rect x="90" y="134" width="76" height="8" rx="4" class="b2i-fbar b2i-fbar--3"/>
						<circle cx="230" cy="64" r="7" class="b2i-ping"/><circle cx="230" cy="64" r="3.5" fill="#10B981"/>
					</svg>
				</div>
				<div class="xcrm-b2__ind-body">
					<h3 class="xcrm-b2__ind-title">فروشگاه‌های اینترنتی</h3>
					<p class="xcrm-b2__ind-desc">رفتار بازدیدکنندگان، رویدادهای محصولات، بخش‌بندی مشتریان و اطلاعات قیف خرید را بررسی کنید.</p>
					<div class="xcrm-b2__tags"><span>ردیابی وب</span><span>قیف خرید</span><span>بخش‌بندی</span></div>
				</div>
			</article>
			<article class="xcrm-b2__ind-card" data-reveal="up" data-reveal-delay="80">
				<div class="xcrm-b2__ind-visual">
					<svg class="xcrm-b2-svg" viewBox="0 0 300 180" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs><linearGradient id="b2i2g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#06B6D4" stop-opacity="0.1"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.04"/></linearGradient></defs>
						<rect x="10" y="10" width="280" height="160" rx="18" fill="url(#b2i2g)"/>
						<g class="b2i-cap">
							<path pathLength="1" class="b2i-cap-top" d="M150 42 L100 62 L150 82 L200 62 Z" fill="#6366F1" opacity="0.85"/>
							<path pathLength="1" class="b2i-cap-tassel" d="M200 62 V88" stroke="#6366F1" stroke-width="2" stroke-linecap="round"/>
							<circle class="b2i-cap-ball" cx="200" cy="93" r="4" fill="#6366F1"/>
						</g>
						<rect x="80" y="108" width="140" height="10" rx="5" class="b2i-lbar b2i-lbar--1"/>
						<rect x="96" y="124" width="108" height="10" rx="5" class="b2i-lbar b2i-lbar--2"/>
						<rect x="112" y="140" width="76" height="10" rx="5" class="b2i-lbar b2i-lbar--3"/>
					</svg>
				</div>
				<div class="xcrm-b2__ind-body">
					<h3 class="xcrm-b2__ind-title">آموزش و دوره‌های آنلاین</h3>
					<p class="xcrm-b2__ind-desc">سرنخ‌های ثبت‌نام، پیگیری متقاضیان، مراحل فروش و یادآوری‌های تیم را ساختارمند مدیریت کنید.</p>
					<div class="xcrm-b2__tags"><span>پروفایل</span><span>پایپ‌لاین</span><span>یادآوری</span></div>
				</div>
			</article>
			<article class="xcrm-b2__ind-card" data-reveal="up" data-reveal-delay="160">
				<div class="xcrm-b2__ind-visual">
					<svg class="xcrm-b2-svg" viewBox="0 0 300 180" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs><linearGradient id="b2i3g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#10B981" stop-opacity="0.08"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.04"/></linearGradient></defs>
						<rect x="10" y="10" width="280" height="160" rx="18" fill="url(#b2i3g)"/>
						<rect x="70" y="30" width="160" height="56" rx="12" class="b2i-deal"/>
						<circle cx="110" cy="50" r="10" fill="#6366F1" opacity="0.8"/><circle cx="190" cy="50" r="10" fill="#06B6D4" opacity="0.8"/>
						<path pathLength="1" class="b2i-hand" d="M122 56 Q150 68 178 56" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" fill="none"/>
						<g class="b2i-ms b2i-ms--1"><rect x="50" y="108" width="52" height="22" rx="6" class="b2i-ms-bg"/><text x="76" y="123" text-anchor="middle" class="b2i-ms-t">سرنخ</text></g>
						<path pathLength="1" class="b2i-ms-a b2i-ms-a--1" d="M106 119 H120"/>
						<g class="b2i-ms b2i-ms--2"><rect x="124" y="108" width="52" height="22" rx="6" class="b2i-ms-bg"/><text x="150" y="123" text-anchor="middle" class="b2i-ms-t">مذاکره</text></g>
						<path pathLength="1" class="b2i-ms-a b2i-ms-a--2" d="M180 119 H194"/>
						<g class="b2i-ms b2i-ms--3"><rect x="198" y="108" width="52" height="22" rx="6" fill="#10B981"/><text x="224" y="123" text-anchor="middle" fill="#fff" font-size="8" font-weight="700" font-family="inherit">بسته</text></g>
					</svg>
				</div>
				<div class="xcrm-b2__ind-body">
					<h3 class="xcrm-b2__ind-title">شرکت‌های فروش و بازاریابی</h3>
					<p class="xcrm-b2__ind-desc">فرصت‌های فروش، سوابق تعامل، مراحل مذاکره و مسئولیت‌های اعضای تیم را مدیریت کنید.</p>
					<div class="xcrm-b2__tags"><span>پایپ‌لاین</span><span>گزارش فعالیت</span><span>دسترسی تیمی</span></div>
				</div>
			</article>
			<article class="xcrm-b2__ind-card" data-reveal="up" data-reveal-delay="240">
				<div class="xcrm-b2__ind-visual">
					<svg class="xcrm-b2-svg" viewBox="0 0 300 180" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs><linearGradient id="b2i4g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#F59E0B" stop-opacity="0.08"/><stop offset="100%" stop-color="#6366F1" stop-opacity="0.04"/></linearGradient></defs>
						<rect x="10" y="10" width="280" height="160" rx="18" fill="url(#b2i4g)"/>
						<rect x="80" y="25" width="140" height="130" rx="10" class="b2i-clip"/>
						<rect x="125" y="20" width="50" height="14" rx="5" class="b2i-clip-tab"/>
						<g class="b2i-ct b2i-ct--1"><circle cx="100" cy="58" r="5" class="b2i-ct-dot b2i-ct-dot--done"/><rect x="112" y="55" width="70" height="6" rx="3" class="b2i-ct-l"/></g>
						<g class="b2i-ct b2i-ct--2"><circle cx="100" cy="78" r="5" class="b2i-ct-dot b2i-ct-dot--done"/><rect x="112" y="75" width="56" height="6" rx="3" class="b2i-ct-l"/></g>
						<g class="b2i-ct b2i-ct--3"><circle cx="100" cy="98" r="5" class="b2i-ct-dot b2i-ct-dot--active"/><rect x="112" y="95" width="64" height="6" rx="3" class="b2i-ct-l"/></g>
						<g class="b2i-ct b2i-ct--4"><circle cx="100" cy="118" r="5" class="b2i-ct-dot"/><rect x="112" y="115" width="48" height="6" rx="3" class="b2i-ct-l"/></g>
						<circle cx="250" cy="50" r="12" fill="#6366F1" opacity="0.7"/>
						<circle cx="250" cy="50" r="16" class="b2i-ring"/>
						<path pathLength="1" class="b2i-clip-line" d="M236 50 H220"/>
					</svg>
				</div>
				<div class="xcrm-b2__ind-body">
					<h3 class="xcrm-b2__ind-title">خدمات و کسب‌وکارهای مبتنی بر مشتری</h3>
					<p class="xcrm-b2__ind-desc">اطلاعات مشتریان، پیگیری درخواست‌ها و سوابق تعاملات را در یک فرآیند منظم دنبال کنید.</p>
					<div class="xcrm-b2__tags"><span>پروفایل</span><span>یادآوری</span><span>ویژگی سفارشی</span></div>
				</div>
			</article>
		</div>
	</div>
</section>

<!-- ══════════ 11. INTEGRATIONS ══════════ -->
<section class="xcrm-b2__section" id="integrations">
	<div class="xcrm-b2__inner">
		<div class="xcrm-b2__head" data-reveal="up">
			<p class="xcrm-b2__eyebrow">یکپارچه‌سازی‌ها</p>
			<h2 class="xcrm-b2__h2">xCRM را با زیرساخت کسب‌وکار خود هماهنگ کنید</h2>
			<p class="xcrm-b2__desc">با استفاده از ابزارهای اتصال و توسعه موجود، داده‌های مشتریان و رویدادهای سایت را به xCRM منتقل کنید.</p>
		</div>
		<div class="xcrm-b2__hub-visual" data-reveal="up" aria-hidden="true">
			<svg class="xcrm-b2-svg" viewBox="0 0 700 300" fill="none" xmlns="http://www.w3.org/2000/svg">
				<defs>
					<linearGradient id="b2hG" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#6366F1" stop-opacity="0.08"/><stop offset="100%" stop-color="#06B6D4" stop-opacity="0.04"/></linearGradient>
					<radialGradient id="b2hCore" cx="50%" cy="50%" r="50%"><stop offset="0%" stop-color="#6366F1"/><stop offset="100%" stop-color="#8B5CF6"/></radialGradient>
				</defs>
				<rect x="10" y="10" width="680" height="280" rx="22" fill="url(#b2hG)"/>
				<!-- center xCRM -->
				<circle cx="350" cy="150" r="44" fill="url(#b2hCore)" class="b2h-core"/>
				<text x="350" y="155" text-anchor="middle" fill="#fff" font-size="14" font-weight="800" font-family="inherit">xCRM</text>
				<circle cx="350" cy="150" r="54" class="b2h-ring"/>
				<circle cx="350" cy="150" r="66" class="b2h-ring b2h-ring--2"/>
				<!-- spokes -->
				<path pathLength="1" class="b2h-spoke b2h-spoke--1" d="M306 130 L180 70" stroke="#6366F1" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2h-spoke b2h-spoke--2" d="M306 150 H160" stroke="#06B6D4" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2h-spoke b2h-spoke--3" d="M306 170 L180 230" stroke="#10B981" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2h-spoke b2h-spoke--4" d="M394 130 L520 70" stroke="#F59E0B" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2h-spoke b2h-spoke--5" d="M394 150 H540" stroke="#EC4899" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<path pathLength="1" class="b2h-spoke b2h-spoke--6" d="M394 170 L520 230" stroke="#8B5CF6" stroke-width="1.5" stroke-dasharray="1" fill="none"/>
				<!-- satellite nodes -->
				<g class="b2h-node b2h-node--1"><rect x="100" y="50" width="100" height="36" rx="10" class="b2h-node-bg"/><text x="150" y="73" text-anchor="middle" class="b2h-node-t">مرورگر SDK</text></g>
				<g class="b2h-node b2h-node--2"><rect x="80" y="132" width="80" height="36" rx="10" class="b2h-node-bg"/><text x="120" y="155" text-anchor="middle" class="b2h-node-t">API</text></g>
				<g class="b2h-node b2h-node--3"><rect x="100" y="210" width="100" height="36" rx="10" class="b2h-node-bg"/><text x="150" y="233" text-anchor="middle" class="b2h-node-t">وردپرس</text></g>
				<g class="b2h-node b2h-node--4"><rect x="500" y="50" width="100" height="36" rx="10" class="b2h-node-bg"/><text x="550" y="73" text-anchor="middle" class="b2h-node-t">n8n</text></g>
				<g class="b2h-node b2h-node--5"><rect x="540" y="132" width="80" height="36" rx="10" class="b2h-node-bg"/><text x="580" y="155" text-anchor="middle" class="b2h-node-t">تلگرام</text></g>
				<g class="b2h-node b2h-node--6"><rect x="500" y="210" width="100" height="36" rx="10" class="b2h-node-bg"/><text x="550" y="233" text-anchor="middle" class="b2h-node-t">پیامک</text></g>
			</svg>
		</div>
		<div class="xcrm-b2__center-cta" data-reveal="up"><a href="#start" class="xcrm-b2__text-link">مشاهده ابزارهای اتصال <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg></a></div>
	</div>
</section>

<!-- ══════════ 12. GETTING STARTED ══════════ -->
<section class="xcrm-b2__section xcrm-b2__section--surface" id="start">
	<div class="xcrm-b2__inner">
		<div class="xcrm-b2__head" data-reveal="up">
			<p class="xcrm-b2__eyebrow">شروع کار با xCRM</p>
			<h2 class="xcrm-b2__h2">از ثبت اطلاعات مشتریان تا مدیریت یکپارچه‌تر</h2>
		</div>
		<ol class="xcrm-b2__steps">
			<li class="xcrm-b2__step" data-reveal="up">
				<span class="xcrm-b2__step-num" aria-hidden="true">۱</span>
				<div>
					<svg class="xcrm-b2__step-icon" width="32" height="32" viewBox="0 0 32 32" fill="none" aria-hidden="true"><rect x="4" y="4" width="24" height="24" rx="6" class="b2st-frame"/><path pathLength="1" class="b2st-draw" d="M10 16 l4 4 8-10" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
					<h3>ایجاد حساب و تنظیمات اولیه</h3>
					<p>اطلاعات شرکت و تنظیمات اولیه را تکمیل کنید.</p>
				</div>
			</li>
			<li class="xcrm-b2__step" data-reveal="up" data-reveal-delay="100">
				<span class="xcrm-b2__step-num" aria-hidden="true">۲</span>
				<div>
					<svg class="xcrm-b2__step-icon" width="32" height="32" viewBox="0 0 32 32" fill="none" aria-hidden="true"><rect x="4" y="4" width="24" height="24" rx="6" class="b2st-frame"/><path pathLength="1" class="b2st-draw" d="M10 16 h12 M16 10 v12" stroke-width="2.5" stroke-linecap="round"/></svg>
					<h3>ثبت یا اتصال اطلاعات مشتریان</h3>
					<p>اطلاعات را از CSV، Excel، JSON یا API وارد کنید.</p>
				</div>
			</li>
			<li class="xcrm-b2__step" data-reveal="up" data-reveal-delay="200">
				<span class="xcrm-b2__step-num" aria-hidden="true">۳</span>
				<div>
					<svg class="xcrm-b2__step-icon" width="32" height="32" viewBox="0 0 32 32" fill="none" aria-hidden="true"><rect x="4" y="4" width="24" height="24" rx="6" class="b2st-frame"/><circle cx="12" cy="14" r="3" class="b2st-dot"/><circle cx="20" cy="14" r="3" class="b2st-dot"/><path pathLength="1" class="b2st-draw" d="M8 22 Q16 18 24 22" stroke-width="2" stroke-linecap="round"/></svg>
					<h3>پیکربندی بخش‌بندی و ارتباطات</h3>
					<p>بخش‌بندی‌ها و کانال‌های ارتباطی موردنیاز را تنظیم کنید.</p>
				</div>
			</li>
			<li class="xcrm-b2__step" data-reveal="up" data-reveal-delay="300">
				<span class="xcrm-b2__step-num" aria-hidden="true">۴</span>
				<div>
					<svg class="xcrm-b2__step-icon" width="32" height="32" viewBox="0 0 32 32" fill="none" aria-hidden="true"><rect x="4" y="4" width="24" height="24" rx="6" class="b2st-frame"/><path pathLength="1" class="b2st-draw" d="M8 22 l4-4 4 4 8-10" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
					<h3>بررسی داده‌ها و شروع استفاده</h3>
					<p>داده‌ها را بررسی کنید و از قابلیت‌های موجود استفاده کنید.</p>
				</div>
			</li>
		</ol>
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
