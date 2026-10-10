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
			<a href="#profiles" class="hp__nav-link">امکانات</a>
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

	<!-- ══════════ 1. HERO ══════════ -->
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
				<p class="fb__lead fb-anim fb-anim--3">
					اطلاعات مشتریان، فرصت‌های فروش، یادآوری پیگیری‌ها و تحلیل رفتار کاربران را در یک پلتفرم یکپارچه مدیریت کنید. با شناخت بهتر مشتریان، تصمیم‌های دقیق‌تری بگیرید و فرآیند فروش کسب‌وکار خود را منظم‌تر کنید.
				</p>
				<div class="fb__hero-actions fb-anim fb-anim--4">
					<a href="<?php echo esc_url( $signup_url ); ?>" class="fb__btn fb__btn--primary">شروع کار با xCRM</a>
					<a href="#profiles" class="fb__btn fb__btn--secondary">مشاهده امکانات</a>
				</div>
			</div>

			<!-- Animated dashboard SVG -->
			<div class="fb__hero-visual fb-anim fb-anim--3" aria-hidden="true">
				<div class="fb-dash">
					<svg class="fb-dash-svg" viewBox="0 0 420 300" fill="none" xmlns="http://www.w3.org/2000/svg">
						<defs>
							<linearGradient id="fbLineGrad" x1="0" y1="0" x2="420" y2="0">
								<stop offset="0%" stop-color="#6366F1"/>
								<stop offset="100%" stop-color="#06B6D4"/>
							</linearGradient>
							<linearGradient id="fbAreaGrad" x1="0" y1="0" x2="0" y2="1">
								<stop offset="0%" stop-color="#6366F1" stop-opacity="0.22"/>
								<stop offset="100%" stop-color="#6366F1" stop-opacity="0"/>
							</linearGradient>
							<linearGradient id="fbBarGrad" x1="0" y1="1" x2="0" y2="0">
								<stop offset="0%" stop-color="#6366F1" stop-opacity="0.2"/>
								<stop offset="100%" stop-color="#8B5CF6"/>
							</linearGradient>
						</defs>
						<rect x="8" y="8" width="404" height="284" rx="20" class="fb-dash-frame"/>
						<circle cx="34" cy="36" r="5" fill="#F04438" opacity="0.8"/>
						<circle cx="52" cy="36" r="5" fill="#F59E0B" opacity="0.8"/>
						<circle cx="70" cy="36" r="5" fill="#10B981" opacity="0.8"/>
						<text x="392" y="41" text-anchor="end" class="fb-dash-label">فرصت‌های فروش</text>
						<line x1="48" y1="90" x2="380" y2="90" class="fb-dash-gridline"/>
						<line x1="48" y1="140" x2="380" y2="140" class="fb-dash-gridline"/>
						<line x1="48" y1="190" x2="380" y2="190" class="fb-dash-gridline"/>
						<line x1="48" y1="240" x2="380" y2="240" class="fb-dash-gridline"/>
						<rect class="fb-bar" x="70"  y="200" width="28" height="60"  rx="6" fill="url(#fbBarGrad)" style="--i:0"/>
						<rect class="fb-bar" x="118" y="170" width="28" height="90"  rx="6" fill="url(#fbBarGrad)" style="--i:1"/>
						<rect class="fb-bar" x="166" y="185" width="28" height="75"  rx="6" fill="url(#fbBarGrad)" style="--i:2"/>
						<rect class="fb-bar" x="214" y="130" width="28" height="130" rx="6" fill="url(#fbBarGrad)" style="--i:3"/>
						<rect class="fb-bar" x="262" y="145" width="28" height="115" rx="6" fill="url(#fbBarGrad)" style="--i:4"/>
						<rect class="fb-bar" x="310" y="95"  width="28" height="165" rx="6" fill="url(#fbBarGrad)" style="--i:5"/>
						<path class="fb-area" d="M84 190 L132 160 L180 172 L228 118 L276 132 L324 85 L324 260 L84 260 Z" fill="url(#fbAreaGrad)"/>
						<path class="fb-line" pathLength="1" d="M84 190 L132 160 L180 172 L228 118 L276 132 L324 85" stroke="url(#fbLineGrad)" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
						<circle class="fb-dot" cx="84"  cy="190" r="5" style="--i:0"/>
						<circle class="fb-dot" cx="132" cy="160" r="5" style="--i:1"/>
						<circle class="fb-dot" cx="180" cy="172" r="5" style="--i:2"/>
						<circle class="fb-dot" cx="228" cy="118" r="5" style="--i:3"/>
						<circle class="fb-dot" cx="276" cy="132" r="5" style="--i:4"/>
						<circle class="fb-dot" cx="324" cy="85"  r="6" style="--i:5"/>
						<g class="fb-chip fb-chip--1">
							<rect x="248" y="46" width="124" height="34" rx="10" class="fb-chip-bg"/>
							<text x="310" y="68" text-anchor="middle" class="fb-chip-text">۳ فرصت در مذاکره</text>
						</g>
						<g class="fb-chip fb-chip--2">
							<rect x="36" y="100" width="118" height="34" rx="10" class="fb-chip-bg"/>
							<text x="95" y="122" text-anchor="middle" class="fb-chip-text">۲ پیگیری امروز</text>
						</g>
						<g class="fb-chip fb-chip--3">
							<rect x="260" y="196" width="108" height="34" rx="10" class="fb-chip-bg"/>
							<text x="314" y="218" text-anchor="middle" class="fb-chip-text">سرنخ جدید</text>
						</g>
					</svg>
				</div>
			</div>
		</div>
	</section>

	<!-- ══════════ 2. CHALLENGES ══════════ -->
	<section class="fb__section fb__section--surface" id="challenges">
		<div class="fb__section-inner">
			<div class="fb__head" data-reveal="up">
				<p class="fb__eyebrow">چالش‌های مدیریت کسب‌وکار</p>
				<h2 class="fb__h2">وقتی اطلاعات پراکنده است، فرصت‌های فروش از دست می‌روند</h2>
				<p class="fb__desc">
					با بزرگ‌تر شدن کسب‌وکار، پیگیری مشتریان و هماهنگی تیم فروش پیچیده‌تر می‌شود. xCRM کمک می‌کند اطلاعات و فعالیت‌های مهم را ساختارمندتر مدیریت کنید.
				</p>
			</div>
			<div class="fb__grid-4">
				<article class="fb__card" data-reveal="up">
					<div class="fb__card-icon" aria-hidden="true">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					</div>
					<h3 class="fb__card-title">اطلاعات پراکنده مشتریان</h3>
					<p class="fb__card-desc">اطلاعات تماس، سوابق تعامل و ویژگی‌های مشتریان را در یک نمای منظم دنبال کنید.</p>
				</article>
				<article class="fb__card" data-reveal="up" data-reveal-delay="80">
					<div class="fb__card-icon fb__card-icon--warn" aria-hidden="true">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
					</div>
					<h3 class="fb__card-title">پیگیری‌های فراموش‌شده</h3>
					<p class="fb__card-desc">برای فرصت‌های فروش و مشتریان، یادآوری ثبت کنید و وضعیت انجام پیگیری‌ها را ببینید.</p>
				</article>
				<article class="fb__card" data-reveal="up" data-reveal-delay="160">
					<div class="fb__card-icon fb__card-icon--info" aria-hidden="true">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="9" rx="1.5"/><rect x="14" y="3" width="7" height="5" rx="1.5"/><rect x="14" y="12" width="7" height="9" rx="1.5"/><rect x="3" y="16" width="7" height="5" rx="1.5"/></svg>
					</div>
					<h3 class="fb__card-title">نبود دید واضح از فرآیند فروش</h3>
					<p class="fb__card-desc">مشتریان و فرصت‌ها را در مراحل مشخص فروش قرار دهید و جابه‌جایی آن‌ها را دنبال کنید.</p>
				</article>
				<article class="fb__card" data-reveal="up" data-reveal-delay="240">
					<div class="fb__card-icon fb__card-icon--success" aria-hidden="true">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M7 14l4-4 4 4 5-6"/></svg>
					</div>
					<h3 class="fb__card-title">تصمیم‌گیری بدون شناخت رفتار مشتری</h3>
					<p class="fb__card-desc">با تحلیل رویدادها، قیف‌ها و فعالیت کاربران، شناخت بهتری از مسیر مشتریان به دست آورید.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ══════════ 3. CUSTOMER PROFILES ══════════ -->
	<section class="fb__section" id="profiles">
		<div class="fb__deco-blob fb__deco-blob--purple" style="top:20%;left:-8%;" aria-hidden="true"></div>
		<div class="fb__section-inner fb__split">
			<div class="fb__split-copy" data-reveal="up">
				<p class="fb__eyebrow">مدیریت اطلاعات مشتریان</p>
				<h2 class="fb__h2">برای شناخت هر مشتری، فقط به یک شماره تماس بسنده نکنید</h2>
				<p class="fb__desc">
					اطلاعات تماس، ویژگی‌های اختصاصی، برچسب‌ها و سوابق تعامل مشتری را در یک پروفایل قابل مدیریت گردآوری کنید تا تیم شما با شناخت بهتری ارتباط برقرار کند.
				</p>
				<ul class="fb__checklist">
					<li>مدیریت اطلاعات تماس و راه‌های ارتباطی</li>
					<li>تعریف ویژگی‌های اختصاصی متناسب با کسب‌وکار</li>
					<li>مشاهده برچسب‌ها و اطلاعات دسته‌بندی</li>
					<li>بررسی سوابق فعالیت و تعامل مشتری</li>
					<li>مشاهده اطلاعات دستگاه‌ها و حساب‌های اجتماعی ثبت‌شده</li>
					<li>واردکردن اطلاعات از فایل‌های CSV، Excel و JSON یا آدرس API پشتیبانی‌شده</li>
				</ul>
				<a href="#start" class="fb__text-link">
					آشنایی با مدیریت مشتریان
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
			</div>
			<div class="fb__split-visual" data-reveal="up" data-reveal-delay="100" aria-hidden="true">
				<div class="fb-ui fb-ui--profile">
					<div class="fb-ui__profile-head">
						<div class="fb-ui__avatar">س‌ع</div>
						<div>
							<strong>سارا علوی</strong>
							<span>مشتری ویژه · تهران</span>
						</div>
						<span class="fb-ui__pill fb-ui__pill--ok">فعال</span>
					</div>
					<div class="fb-ui__profile-grid">
						<div><label>موبایل</label><span>۰۹۱۲••••۴۵۲۱</span></div>
						<div><label>ایمیل</label><span>s.alavi@example.com</span></div>
						<div><label>ارزش مشتری</label><span>سطح طلایی</span></div>
						<div><label>آخرین خرید</label><span>۱۲ روز پیش</span></div>
					</div>
					<div class="fb-ui__tags">
						<span>خریدار تکراری</span>
						<span>علاقه‌مند پوشاک</span>
						<span>کمپین زمستان</span>
					</div>
					<div class="fb-ui__timeline">
						<div class="fb-ui__tl-item"><i></i><span>بازدید صفحه محصول — کت زمستانی</span><em>امروز</em></div>
						<div class="fb-ui__tl-item"><i></i><span>دریافت پیامک یادآوری سبد خرید</span><em>دیروز</span></div>
						<div class="fb-ui__tl-item"><i></i><span>ثبت سفارش موفق</span><em>۱۲ روز پیش</span></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ══════════ 4. SALES PIPELINE ══════════ -->
	<section class="fb__section fb__section--surface" id="pipeline">
		<div class="fb__deco-blob fb__deco-blob--indigo" style="bottom:5%;left:-6%;" aria-hidden="true"></div>
		<div class="fb__section-inner">
			<div class="fb__head fb__head--start" data-reveal="up">
				<p class="fb__eyebrow">مدیریت فرصت‌های فروش</p>
				<h2 class="fb__h2">مسیر هر فرصت فروش را از ابتدا تا نتیجه دنبال کنید</h2>
				<p class="fb__desc">
					فرآیند فروش را به مراحل مشخص تقسیم کنید، وضعیت مشتریان را تغییر دهید و دید واضح‌تری از کارهای پیش رو داشته باشید.
				</p>
			</div>
			<div class="fb__pipeline-layout">
				<ul class="fb__checklist fb__checklist--compact" data-reveal="up">
					<li>ایجاد و مرتب‌سازی مراحل فروش</li>
					<li>مشاهده مشتریان در نمای کانبان</li>
					<li>انتقال مشتریان بین مراحل</li>
					<li>ثبت یادداشت و فعالیت‌های فروش</li>
					<li>ثبت تماس، جلسه، پیام ارسال‌شده و سایر فعالیت‌های پشتیبانی‌شده</li>
					<li>پنهان‌کردن موقت موارد برای پیگیری در زمان مناسب</li>
				</ul>
				<a href="#start" class="fb__text-link" data-reveal="up" data-reveal-delay="80">
					مشاهده امکانات مدیریت فروش
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
			</div>
			<!-- Kanban visual (illustrative stage names) -->
			<div class="fb-ui fb-ui--kanban" data-reveal="up" data-reveal-delay="120" aria-hidden="true">
				<div class="fb-ui__kboard">
					<div class="fb-ui__kcol">
						<header><span>سرنخ جدید</span><em>۳</em></header>
						<div class="fb-ui__ktask"><strong>شرکت آریا</strong><span>تماس اولیه</span></div>
						<div class="fb-ui__ktask"><strong>فروشگاه پارس</strong><span>درخواست دمو</span></div>
						<div class="fb-ui__ktask"><strong>گروه نوین</strong><span>فرم وب‌سایت</span></div>
					</div>
					<div class="fb-ui__kcol">
						<header><span>در حال پیگیری</span><em>۲</em></header>
						<div class="fb-ui__ktask fb-ui__ktask--active"><strong>استارتاپ رها</strong><span>ارسال پیشنهاد</span></div>
						<div class="fb-ui__ktask"><strong>شرکت کیان</strong><span>جلسه حضوری</span></div>
					</div>
					<div class="fb-ui__kcol">
						<header><span>مذاکره</span><em>۲</em></header>
						<div class="fb-ui__ktask"><strong>برند مهر</strong><span>شروط قرارداد</span></div>
						<div class="fb-ui__ktask"><strong>هلدینگ سپهر</strong><span>تخفیف سالانه</span></div>
					</div>
					<div class="fb-ui__kcol">
						<header><span>آماده تصمیم‌گیری</span><em>۱</em></header>
						<div class="fb-ui__ktask"><strong>آژانس نور</strong><span>تأیید مدیرعامل</span></div>
					</div>
					<div class="fb-ui__kcol fb-ui__kcol--done">
						<header><span>نهایی‌شده</span><em>۲</em></header>
						<div class="fb-ui__ktask"><strong>فروشگاه لونا</strong><span>قرارداد امضاشده</span></div>
						<div class="fb-ui__ktask"><strong>شرکت پارمیس</strong><span>شروع پشتیبانی</span></div>
					</div>
				</div>
				<p class="fb-ui__note">نام مراحل صرفاً نمونه‌اند و متناسب با فرآیند فروش شما قابل تنظیم‌اند.</p>
			</div>
		</div>
	</section>

	<!-- ══════════ 5. FOLLOW-UPS ══════════ -->
	<section class="fb__section" id="followups">
		<div class="fb__section-inner fb__split fb__split--reverse">
			<div class="fb__split-copy" data-reveal="up">
				<p class="fb__eyebrow">مدیریت پیگیری‌ها</p>
				<h2 class="fb__h2">هر مشتری، پیگیری مشخص؛ هر کار، مسئول مشخص</h2>
				<p class="fb__desc">
					یادآوری‌ها را به مشتریان و مراحل فروش مرتبط کنید، مسئول انجام کارها را مشخص کنید و وضعیت پیگیری‌های انجام‌شده یا عقب‌افتاده را ببینید.
				</p>
				<a href="#start" class="fb__text-link">
					آشنایی با یادآوری‌ها و پیگیری‌ها
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
			</div>
			<div class="fb__split-visual" data-reveal="up" data-reveal-delay="100" aria-hidden="true">
				<div class="fb-ui fb-ui--tasks">
					<div class="fb-ui__task is-done">
						<span class="fb-ui__task-check"></span>
						<div>
							<strong>تماس با شرکت آریا</strong>
							<span>مسئول: علی رضایی</span>
						</div>
						<em class="fb-ui__due">انجام‌شده</em>
					</div>
					<div class="fb-ui__task is-today">
						<span class="fb-ui__task-check"></span>
						<div>
							<strong>ارسال پیشنهاد قیمت — استارتاپ رها</strong>
							<span>مسئول: مریم کاظمی</span>
						</div>
						<em class="fb-ui__due fb-ui__due--today">امروز</em>
					</div>
					<div class="fb-ui__task">
						<span class="fb-ui__task-check"></span>
						<div>
							<strong>جلسه پیگیری — برند مهر</strong>
							<span>مسئول: علی رضایی</span>
						</div>
						<em class="fb-ui__due">فردا</em>
					</div>
					<div class="fb-ui__task is-late">
						<span class="fb-ui__task-check"></span>
						<div>
							<strong>یادآوری تماس مجدد — گروه نوین</strong>
							<span>مسئول: سارا محمدی</span>
						</div>
						<em class="fb-ui__due fb-ui__due--late">۲ روز عقب‌افتاده</em>
					</div>
				</div>
			</div>
		</div>
		<div class="fb__section-inner">
			<div class="fb__grid-3">
				<article class="fb__card" data-reveal="up">
					<div class="fb__card-icon" aria-hidden="true">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
					</div>
					<h3 class="fb__card-title">یادآوری‌های قابل مدیریت</h3>
					<p class="fb__card-desc">پیگیری‌های موردنیاز را ثبت کنید و وضعیت انجام آن‌ها را دنبال کنید.</p>
				</article>
				<article class="fb__card" data-reveal="up" data-reveal-delay="80">
					<div class="fb__card-icon fb__card-icon--info" aria-hidden="true">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					</div>
					<h3 class="fb__card-title">مسئولیت‌پذیری تیمی</h3>
					<p class="fb__card-desc">کارها را به اعضای تیم اختصاص دهید یا در صورت نیاز مسئول آن‌ها را تغییر دهید.</p>
				</article>
				<article class="fb__card" data-reveal="up" data-reveal-delay="160">
					<div class="fb__card-icon fb__card-icon--success" aria-hidden="true">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/></svg>
					</div>
					<h3 class="fb__card-title">پیگیری فعالیت‌ها</h3>
					<p class="fb__card-desc">فعالیت‌های ثبت‌شده و یادداشت‌های مرتبط با مشتری را برای ادامه ارتباط مرور کنید.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ══════════ 6. SEGMENTATION ══════════ -->
	<section class="fb__section fb__section--surface" id="segmentation">
		<div class="fb__section-inner fb__split">
			<div class="fb__split-copy" data-reveal="up">
				<p class="fb__eyebrow">شناخت بهتر مشتریان</p>
				<h2 class="fb__h2">با هر مشتری، متناسب با ویژگی‌ها و رفتارش ارتباط برقرار کنید</h2>
				<p class="fb__desc">
					مشتریان را بر اساس ویژگی‌ها، اطلاعات تماس، تعاملات و شرایط کسب‌وکار دسته‌بندی کنید تا مدیریت و پیگیری آن‌ها هدفمندتر شود.
				</p>
				<ul class="fb__checklist">
					<li>گروه‌بندی دستی مشتریان</li>
					<li>ایجاد بخش‌های پویا بر اساس شرایط مشخص</li>
					<li>ترکیب چند شرط با منطق AND و OR</li>
					<li>دسته‌بندی بر اساس ویژگی‌ها، موقعیت، تعامل، برچسب‌ها و فعالیت‌های پشتیبانی‌شده</li>
					<li>استفاده از بخش‌های مشتریان در فرآیندهای فروش و کمپین‌های پشتیبانی‌شده</li>
				</ul>
				<p class="fb__fineprint">نوع شرط‌های قابل استفاده به اطلاعات ثبت‌شده مشتریان و رویدادهای در دسترس بستگی دارد.</p>
				<a href="#start" class="fb__text-link">
					مشاهده امکانات بخش‌بندی مشتریان
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
			</div>
			<div class="fb__split-visual" data-reveal="up" data-reveal-delay="100" aria-hidden="true">
				<div class="fb-ui fb-ui--conditions">
					<header class="fb-ui__cond-head">
						<strong>ساخت بخش مشتریان</strong>
						<span class="fb-ui__pill">پویا</span>
					</header>
					<div class="fb-ui__cond-row">
						<span class="fb-ui__logic">و</span>
						<div class="fb-ui__cond">
							<em>آخرین فعالیت مشتری</em>
							<strong>در بازه ۳۰ روز گذشته</strong>
						</div>
					</div>
					<div class="fb-ui__cond-row">
						<span class="fb-ui__logic">و</span>
						<div class="fb-ui__cond">
							<em>برچسب مشتری</em>
							<strong>برابر با «مشتری ویژه»</strong>
						</div>
					</div>
					<div class="fb-ui__cond-row">
						<span class="fb-ui__logic fb-ui__logic--or">یا</span>
						<div class="fb-ui__cond">
							<em>تعامل با رویداد</em>
							<strong>«افزودن به سبد» ثبت شده</strong>
						</div>
					</div>
					<footer class="fb-ui__cond-foot">۳ شرط · منطق ترکیبی</footer>
				</div>
			</div>
		</div>
	</section>

	<!-- ══════════ 7. ANALYTICS ══════════ -->
	<section class="fb__section" id="analytics">
		<div class="fb__deco-blob fb__deco-blob--indigo" style="top:10%;left:-5%;" aria-hidden="true"></div>
		<div class="fb__section-inner">
			<div class="fb__head" data-reveal="up">
				<p class="fb__eyebrow">تحلیل عملکرد کسب‌وکار</p>
				<h2 class="fb__h2">به‌جای حدس‌زدن، رفتار مشتریان را بررسی کنید</h2>
				<p class="fb__desc">
					گزارش‌های تحلیلی xCRM به شما کمک می‌کنند مسیر کاربران، عملکرد قیف‌ها، منابع جذب و فعالیت مشتریان را بهتر بررسی کنید.
				</p>
			</div>

			<!-- Animated chart SVG -->
			<div class="fb__chart-wrap" data-reveal="up" aria-hidden="true">
				<div class="fb-chart">
					<svg class="fb-chart-svg" viewBox="0 0 800 240" fill="none" xmlns="http://www.w3.org/2000/svg">
						<defs>
							<linearGradient id="fbChartBarG" x1="0" y1="1" x2="0" y2="0">
								<stop offset="0%" stop-color="#6366F1" stop-opacity="0.15"/>
								<stop offset="100%" stop-color="#8B5CF6"/>
							</linearGradient>
							<linearGradient id="fbChartLineG" x1="0" y1="0" x2="800" y2="0">
								<stop offset="0%" stop-color="#6366F1"/>
								<stop offset="100%" stop-color="#06B6D4"/>
							</linearGradient>
						</defs>
						<rect x="1" y="1" width="798" height="238" rx="16" class="fb-chart-frame"/>
						<text x="760" y="32" text-anchor="end" class="fb-chart-title">نمای کلی عملکرد</text>
						<!-- grid -->
						<line x1="60" y1="70" x2="480" y2="70" style="stroke:var(--x-border-subtle)" stroke-width="1" opacity="0.5"/>
						<line x1="60" y1="110" x2="480" y2="110" style="stroke:var(--x-border-subtle)" stroke-width="1" opacity="0.5"/>
						<line x1="60" y1="150" x2="480" y2="150" style="stroke:var(--x-border-subtle)" stroke-width="1" opacity="0.5"/>
						<line x1="60" y1="190" x2="480" y2="190" style="stroke:var(--x-border-subtle)" stroke-width="1" opacity="0.5"/>
						<!-- bars -->
						<rect class="fb-chart-bar" x="90"  y="150" width="36" height="50"  rx="6" fill="url(#fbChartBarG)" style="--i:0"/>
						<rect class="fb-chart-bar" x="150" y="120" width="36" height="80"  rx="6" fill="url(#fbChartBarG)" style="--i:1"/>
						<rect class="fb-chart-bar" x="210" y="135" width="36" height="65"  rx="6" fill="url(#fbChartBarG)" style="--i:2"/>
						<rect class="fb-chart-bar" x="270" y="90"  width="36" height="110" rx="6" fill="url(#fbChartBarG)" style="--i:3"/>
						<rect class="fb-chart-bar" x="330" y="105" width="36" height="95"  rx="6" fill="url(#fbChartBarG)" style="--i:4"/>
						<rect class="fb-chart-bar" x="390" y="70"  width="36" height="130" rx="6" fill="url(#fbChartBarG)" style="--i:5"/>
						<!-- line -->
						<path class="fb-chart-line" pathLength="1" d="M108 155 L168 125 L228 140 L288 95 L348 110 L408 75" stroke="url(#fbChartLineG)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
						<circle class="fb-chart-dot" cx="108" cy="155" r="4.5" style="--i:0"/>
						<circle class="fb-chart-dot" cx="168" cy="125" r="4.5" style="--i:1"/>
						<circle class="fb-chart-dot" cx="228" cy="140" r="4.5" style="--i:2"/>
						<circle class="fb-chart-dot" cx="288" cy="95"  r="4.5" style="--i:3"/>
						<circle class="fb-chart-dot" cx="348" cy="110" r="4.5" style="--i:4"/>
						<circle class="fb-chart-dot" cx="408" cy="75"  r="5.5" style="--i:5"/>
						<!-- donut -->
						<circle cx="620" cy="130" r="60" style="stroke:var(--x-border-subtle)" stroke-width="14" fill="none" opacity="0.5"/>
						<circle class="fb-chart-donut-seg fb-chart-donut-seg--1" cx="620" cy="130" r="60" pathLength="1" stroke="#6366F1" stroke-dasharray="0.4 0.6" stroke-dashoffset="0.25" transform="rotate(-90 620 130)"/>
						<circle class="fb-chart-donut-seg fb-chart-donut-seg--2" cx="620" cy="130" r="60" pathLength="1" stroke="#8B5CF6" stroke-dasharray="0.25 0.75" stroke-dashoffset="-0.15" transform="rotate(-90 620 130)"/>
						<circle class="fb-chart-donut-seg fb-chart-donut-seg--3" cx="620" cy="130" r="60" pathLength="1" stroke="#06B6D4" stroke-dasharray="0.18 0.82" stroke-dashoffset="-0.4" transform="rotate(-90 620 130)"/>
						<text x="620" y="126" text-anchor="middle" class="fb-chart-title">قیف فروش</text>
						<text x="620" y="144" text-anchor="middle" class="fb-chart-label">۳ مرحله فعال</text>
					</svg>
				</div>
			</div>

			<div class="fb__grid-3">
				<article class="fb__card fb__card--flat" data-reveal="up">
					<div class="fb__card-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 17l6-6 4 4 8-8"/><path d="M14 7h7v7"/></svg></div>
					<h3 class="fb__card-title">تحلیل منابع ورودی</h3>
					<p class="fb__card-desc">منابع ثبت‌شده ورود و جذب کاربران را بررسی کنید.</p>
				</article>
				<article class="fb__card fb__card--flat" data-reveal="up" data-reveal-delay="60">
					<div class="fb__card-icon fb__card-icon--info" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 4h16l-6 8v6l-4 2v-8L4 4z"/></svg></div>
					<h3 class="fb__card-title">تحلیل قیف فروش</h3>
					<p class="fb__card-desc">مراحل مسیر مشتری را بررسی کنید و نقاط افت تبدیل را بهتر بشناسید.</p>
				</article>
				<article class="fb__card fb__card--flat" data-reveal="up" data-reveal-delay="120">
					<div class="fb__card-icon fb__card-icon--success" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
					<h3 class="fb__card-title">تحلیل رفتار کاربران</h3>
					<p class="fb__card-desc">رویدادها و فعالیت‌های ثبت‌شده کاربران را تحلیل کنید.</p>
				</article>
				<article class="fb__card fb__card--flat" data-reveal="up" data-reveal-delay="180">
					<div class="fb__card-icon fb__card-icon--warn" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg></div>
					<h3 class="fb__card-title">تحلیل محصولات و سبد خرید</h3>
					<p class="fb__card-desc">اطلاعات موجود درباره محصولات پربازدید و سبدهای رهاشده را بررسی کنید.</p>
				</article>
				<article class="fb__card fb__card--flat" data-reveal="up" data-reveal-delay="240">
					<div class="fb__card-icon fb__card-icon--error" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 11l-6-6M23 11h-6M23 11v-6"/></svg></div>
					<h3 class="fb__card-title">شناسایی مشتریان غیرفعال</h3>
					<p class="fb__card-desc">مشتریانی را که با معیارهای تعریف‌شده غیرفعال شناخته می‌شوند، شناسایی کنید.</p>
				</article>
				<article class="fb__card fb__card--flat" data-reveal="up" data-reveal-delay="300">
					<div class="fb__card-icon fb__card-icon--purple" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M16 3h5v5M8 21H3v-5M21 3l-7 7M3 21l7-7"/></svg></div>
					<h3 class="fb__card-title">بررسی مسیر مشتری</h3>
					<p class="fb__card-desc">توالی تعاملات ثبت‌شده را برای شناخت بهتر تجربه مشتری بررسی کنید.</p>
				</article>
			</div>
			<div class="fb__center-cta" data-reveal="up">
				<a href="#start" class="fb__text-link">
					آشنایی با تحلیل رفتار مشتریان
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
			</div>
		</div>
	</section>

	<!-- ══════════ 8. COMMUNICATION ══════════ -->
	<section class="fb__section fb__section--surface" id="communication">
		<div class="fb__deco-blob fb__deco-blob--cyan" style="bottom:10%;right:-5%;" aria-hidden="true"></div>
		<div class="fb__section-inner">
			<div class="fb__head" data-reveal="up">
				<p class="fb__eyebrow">ارتباط با مشتریان</p>
				<h2 class="fb__h2">ارتباط با مشتریان را متناسب با نیاز کسب‌وکار مدیریت کنید</h2>
				<p class="fb__desc">
					تنظیمات کانال‌های ارتباطی و ارائه‌دهندگان پشتیبانی‌شده را مدیریت کنید و از قابلیت‌های موجود برای هماهنگی پیام‌ها و پیگیری مشتریان بهره ببرید.
				</p>
			</div>

			<!-- Animated channels visual -->
			<div class="fb__comm-visual" data-reveal="up" aria-hidden="true">
				<div class="fb-comm">
					<div class="fb-comm__item">
						<div class="fb-comm__icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
						</div>
						<h3>پیامک</h3>
						<p>تنظیم ارائه‌دهنده و ارسال پیام</p>
					</div>
					<div class="fb-comm__item">
						<div class="fb-comm__icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg>
						</div>
						<h3>تلگرام</h3>
						<p>اتصال حساب و مدیریت پیام</p>
					</div>
					<div class="fb-comm__item">
						<div class="fb-comm__icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
						</div>
						<h3>ایمیل و اعلان</h3>
						<p>مدیریت ارائه‌دهندگان پوش و ایمیل</p>
					</div>
					<div class="fb-comm__item">
						<div class="fb-comm__icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
						</div>
						<h3>زمان‌بندی</h3>
						<p>بازه‌های مجاز ارسال پیام</p>
					</div>
				</div>
			</div>

			<div class="fb__center-cta" data-reveal="up">
				<a href="#start" class="fb__text-link">
					مشاهده امکانات ارتباط با مشتریان
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
			</div>
		</div>
	</section>

	<!-- ══════════ 9. TEAM & PERMISSIONS ══════════ -->
	<section class="fb__section" id="team">
		<div class="fb__deco-blob fb__deco-blob--purple" style="bottom:10%;right:-5%;" aria-hidden="true"></div>
		<div class="fb__section-inner fb__split fb__split--reverse">
			<div class="fb__split-copy" data-reveal="up">
				<p class="fb__eyebrow">مدیریت تیم</p>
				<h2 class="fb__h2">هر عضو تیم، دسترسی متناسب با مسئولیت خود</h2>
				<p class="fb__desc">
					با تعریف نقش‌ها و مجوزهای دسترسی، مشخص کنید اعضای تیم به کدام بخش‌ها و عملیات دسترسی داشته باشند.
				</p>
				<ul class="fb__checklist">
					<li>مدیریت اعضای شرکت</li>
					<li>ایجاد و ویرایش نقش‌ها</li>
					<li>تنظیم مجوزهای دسترسی</li>
					<li>کپی‌کردن نقش‌های موجود</li>
					<li>اختصاص مجوزهای تکمیلی به کارکنان در صورت نیاز</li>
					<li>مدیریت دسترسی به امکانات مرتبط با اشتراک</li>
				</ul>
				<a href="#start" class="fb__text-link">
					آشنایی با مدیریت اعضا و دسترسی‌ها
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
			</div>
			<div class="fb__split-visual" data-reveal="up" data-reveal-delay="100" aria-hidden="true">
				<div class="fb-ui fb-ui--perms">
					<table>
						<thead>
							<tr>
								<th>مجوز</th>
								<th>مدیر</th>
								<th>فروش</th>
								<th>پشتیبانی</th>
							</tr>
						</thead>
						<tbody>
							<tr><td>مشاهده مشتریان</td><td class="is-yes"></td><td class="is-yes"></td><td class="is-yes"></td></tr>
							<tr><td>ویرایش مشتریان</td><td class="is-yes"></td><td class="is-yes"></td><td class="is-partial"></td></tr>
							<tr><td>مدیریت پایپ‌لاین</td><td class="is-yes"></td><td class="is-yes"></td><td class="is-no"></td></tr>
							<tr><td>ارسال کمپین</td><td class="is-yes"></td><td class="is-partial"></td><td class="is-no"></td></tr>
							<tr><td>تنظیمات شرکت</td><td class="is-yes"></td><td class="is-no"></td><td class="is-no"></td></tr>
						</tbody>
					</table>
					<p class="fb-ui__note">جدول صرفاً نمونه‌ای برای نمایش ساختار نقش‌ها است.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ══════════ 10. INDUSTRIES ══════════ -->
	<section class="fb__section fb__section--surface" id="industries">
		<div class="fb__deco-blob fb__deco-blob--cyan" style="top:15%;right:-7%;" aria-hidden="true"></div>
		<div class="fb__section-inner">
			<div class="fb__head" data-reveal="up">
				<p class="fb__eyebrow">کاربرد xCRM در کسب‌وکارهای مختلف</p>
				<h2 class="fb__h2">متناسب با مدل کسب‌وکار خود از امکانات xCRM استفاده کنید</h2>
			</div>
			<div class="fb__grid-4">
				<article class="fb__card fb__card--industry" data-reveal="up">
					<h3 class="fb__card-title">فروشگاه‌های اینترنتی</h3>
					<p class="fb__card-desc">رفتار بازدیدکنندگان، رویدادهای محصولات، بخش‌بندی مشتریان و اطلاعات قیف خرید را بررسی کنید.</p>
					<div class="fb__cap-tags">
						<span>ردیابی وب‌سایت</span>
					 <span>تحلیل فروشگاه</span>
						<span>بخش‌بندی</span>
					</div>
				</article>
				<article class="fb__card fb__card--industry" data-reveal="up" data-reveal-delay="80">
					<h3 class="fb__card-title">کسب‌وکارهای آموزشی</h3>
					<p class="fb__card-desc">سرنخ‌های ثبت‌نام، پیگیری متقاضیان، مراحل فروش و یادآوری‌های تیم را ساختارمند مدیریت کنید.</p>
					<div class="fb__cap-tags">
						<span>پروفایل مشتری</span>
						<span>پایپ‌لاین</span>
						<span>یادآوری</span>
					</div>
				</article>
				<article class="fb__card fb__card--industry" data-reveal="up" data-reveal-delay="160">
					<h3 class="fb__card-title">شرکت‌های B2B</h3>
					<p class="fb__card-desc">فرصت‌های فروش، سوابق تعامل، مراحل مذاکره و مسئولیت‌های اعضای تیم را مدیریت کنید.</p>
					<div class="fb__cap-tags">
						<span>پایپ‌لاین</span>
						<span>گزارش فعالیت</span>
						<span>دسترسی تیمی</span>
					</div>
				</article>
				<article class="fb__card fb__card--industry" data-reveal="up" data-reveal-delay="240">
					<h3 class="fb__card-title">کسب‌وکارهای خدماتی</h3>
					<p class="fb__card-desc">اطلاعات مشتریان، پیگیری درخواست‌ها و سوابق تعاملات را در یک فرآیند منظم دنبال کنید.</p>
					<div class="fb__cap-tags">
						<span>پروفایل مشتری</span>
						<span>یادآوری</span>
						<span>ویژگی سفارشی</span>
					</div>
				</article>
			</div>
		</div>
	</section>

	<!-- ══════════ 11. INTEGRATIONS ══════════ -->
	<section class="fb__section" id="integrations">
		<div class="fb__section-inner">
			<div class="fb__head" data-reveal="up">
				<p class="fb__eyebrow">اتصال و توسعه</p>
				<h2 class="fb__h2">xCRM را با زیرساخت کسب‌وکار خود هماهنگ کنید</h2>
				<p class="fb__desc">
					با استفاده از ابزارهای اتصال و توسعه موجود، داده‌های مشتریان و رویدادهای سایت را به xCRM منتقل کنید و فرآیندهای پشتیبانی‌شده را با ابزارهای دیگر هماهنگ کنید.
				</p>
			</div>
			<div class="fb__integrations">
				<article class="fb__int-card" data-reveal="up">
					<div class="fb__int-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
					</div>
					<h3>مرورگر SDK</h3>
					<p>ثبت رویدادهای سایت برای تحلیل رفتار کاربران.</p>
				</article>
				<article class="fb__int-card" data-reveal="up" data-reveal-delay="60">
					<div class="fb__int-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					</div>
					<h3>API و کلیدهای دسترسی</h3>
					<p>کلیدهای دارای محدوده مجوز برای یکپارچه‌سازی امن.</p>
				</article>
				<article class="fb__int-card" data-reveal="up" data-reveal-delay="120">
					<div class="fb__int-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20M2 12h20"/></svg>
					</div>
					<h3>اتصال وردپرس</h3>
					<p>راهنمای نصب و اتصال برای وب‌سایت‌های وردپرسی.</p>
				</article>
				<article class="fb__int-card" data-reveal="up" data-reveal-delay="180">
					<div class="fb__int-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><path d="M14 17.5h7M17.5 14v7"/></svg>
					</div>
					<h3>نودهای اختصاصی n8n</h3>
					<p>گردش‌کارهای خودکار با نودهای پشتیبانی‌شده xCRM.</p>
				</article>
				<article class="fb__int-card" data-reveal="up" data-reveal-delay="240">
					<div class="fb__int-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg>
					</div>
					<h3>تلگرام و ارائه‌دهندگان</h3>
					<p>اتصال حساب‌های پشتیبانی‌شده و سرویس‌های ارتباطی.</p>
				</article>
			</div>
			<div class="fb__center-cta" data-reveal="up">
				<a href="#start" class="fb__text-link">
					مشاهده ابزارهای اتصال
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
			</div>
		</div>
	</section>

	<!-- ══════════ 12. GETTING STARTED ══════════ -->
	<section class="fb__section fb__section--surface" id="start">
		<div class="fb__section-inner">
			<div class="fb__head" data-reveal="up">
				<p class="fb__eyebrow">شروع کار با xCRM</p>
				<h2 class="fb__h2">از ثبت اطلاعات مشتریان تا مدیریت یکپارچه‌تر کسب‌وکار</h2>
			</div>
			<ol class="fb__steps">
				<li class="fb__step" data-reveal="up">
					<span class="fb__step-num" aria-hidden="true">۱</span>
					<div>
						<h3>گام اول: تنظیم فضای کاری</h3>
						<p>اطلاعات شرکت و تنظیمات اولیه را تکمیل کنید.</p>
					</div>
				</li>
				<li class="fb__step" data-reveal="up" data-reveal-delay="80">
					<span class="fb__step-num" aria-hidden="true">۲</span>
					<div>
						<h3>گام دوم: واردکردن اطلاعات مشتریان</h3>
						<p>اطلاعات موجود را از فرمت‌های پشتیبانی‌شده وارد کنید یا از API استفاده کنید.</p>
					</div>
				</li>
				<li class="fb__step" data-reveal="up" data-reveal-delay="160">
					<span class="fb__step-num" aria-hidden="true">۳</span>
					<div>
						<h3>گام سوم: تنظیم فرآیندهای کسب‌وکار</h3>
						<p>ویژگی‌های مشتریان، مراحل فروش، بخش‌بندی‌ها و یادآوری‌های موردنیاز را تعریف کنید.</p>
					</div>
				</li>
				<li class="fb__step" data-reveal="up" data-reveal-delay="240">
					<span class="fb__step-num" aria-hidden="true">۴</span>
					<div>
						<h3>گام چهارم: بررسی و بهبود</h3>
						<p>فعالیت مشتریان و گزارش‌های موجود را بررسی کنید و بر اساس داده‌های ثبت‌شده، فرآیندها را بهبود دهید.</p>
					</div>
				</li>
			</ol>
			<div class="fb__center-cta" data-reveal="up">
				<a href="<?php echo esc_url( $signup_url ); ?>" class="fb__btn fb__btn--primary">شروع کار با xCRM</a>
			</div>
		</div>
	</section>

	<!-- ══════════ 13. PRICING PREVIEW ══════════ -->
	<section class="fb__section" id="pricing">
		<div class="fb__section-inner">
			<div class="fb__pricing-box" data-reveal="up">
				<p class="fb__eyebrow">انتخاب متناسب با نیاز شما</p>
				<h2 class="fb__h2">امکانات موردنیاز کسب‌وکار خود را انتخاب کنید</h2>
				<p class="fb__desc">
					بر اساس اندازه تیم، حجم داده‌ها و قابلیت‌های موردنیاز، طرح مناسب کسب‌وکار خود را بررسی کنید. دسترسی به قابلیت‌ها و محدودیت‌های استفاده بر اساس طرح اشتراک انتخابی تعیین می‌شود.
				</p>
				<a href="<?php echo esc_url( $pricing_url ); ?>" class="fb__btn fb__btn--primary">مشاهده طرح‌ها و قیمت‌ها</a>
			</div>
		</div>
	</section>

	<!-- ══════════ 14. FAQ ══════════ -->
	<section class="fb__section fb__section--surface" id="faq">
		<div class="fb__section-inner fb__faq-wrap">
			<div class="fb__head" data-reveal="up">
				<p class="fb__eyebrow">پرسش‌های متداول</p>
				<h2 class="fb__h2">پاسخ پرسش‌های شما درباره xCRM</h2>
			</div>
			<div class="fb__faq" data-reveal="up">

				<details class="fb__faq-item">
					<summary>
						<span>xCRM برای چه کسب‌وکارهایی مناسب است؟</span>
						<svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
					</summary>
					<div class="fb__faq-a">
						<p>xCRM برای کسب‌وکارهایی طراحی شده است که به مدیریت اطلاعات مشتریان، پیگیری فرصت‌های فروش، بخش‌بندی مشتریان و تحلیل رفتار کاربران نیاز دارند. امکانات موردنیاز هر کسب‌وکار به مدل فعالیت و تنظیمات آن بستگی دارد.</p>
					</div>
				</details>

				<details class="fb__faq-item">
					<summary>
						<span>آیا می‌توان اطلاعات مشتریان را از فایل اکسل وارد کرد؟</span>
						<svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
					</summary>
					<div class="fb__faq-a">
						<p>بله، امکان واردکردن اطلاعات از فایل‌های CSV، Excel و JSON با قابلیت نگاشت فیلدها وجود دارد. برای ورود اطلاعات از API نیز باید از روش‌های پشتیبانی‌شده استفاده کنید.</p>
					</div>
				</details>

				<details class="fb__faq-item">
					<summary>
						<span>آیا می‌توان مراحل فروش را مطابق فرآیند شرکت تنظیم کرد؟</span>
						<svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
					</summary>
					<div class="fb__faq-a">
						<p>بله، امکانات مدیریت پایپ‌لاین، ایجاد و مرتب‌سازی مراحل و انتقال مشتریان میان مراحل در xCRM وجود دارد.</p>
					</div>
				</details>

				<details class="fb__faq-item">
					<summary>
						<span>آیا امکان اختصاص پیگیری به کارکنان وجود دارد؟</span>
						<svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
					</summary>
					<div class="fb__faq-a">
						<p>بله، می‌توانید یادآوری‌ها را به اعضای تیم اختصاص دهید، وضعیت آن‌ها را بررسی کنید و در صورت نیاز مسئول پیگیری را تغییر دهید.</p>
					</div>
				</details>

				<details class="fb__faq-item">
					<summary>
						<span>آیا می‌توان مشتریان را بر اساس رفتارشان دسته‌بندی کرد؟</span>
						<svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
					</summary>
					<div class="fb__faq-a">
						<p>امکان ایجاد بخش‌های پویا بر اساس شرایط تعریف‌شده وجود دارد. نوع بخش‌بندی قابل استفاده به اطلاعات مشتریان و رویدادهای ثبت‌شده بستگی دارد.</p>
					</div>
				</details>

				<details class="fb__faq-item">
					<summary>
						<span>آیا xCRM از پیامک و تلگرام پشتیبانی می‌کند؟</span>
						<svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
					</summary>
					<div class="fb__faq-a">
						<p>xCRM قابلیت‌های ارتباطی پیامکی و تلگرامی دارد. امکانات در دسترس به تنظیمات حساب، ارائه‌دهندگان متصل و عملیات پشتیبانی‌شده بستگی دارد.</p>
					</div>
				</details>

				<details class="fb__faq-item">
					<summary>
						<span>آیا امکان تحلیل رفتار کاربران سایت وجود دارد؟</span>
						<svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
					</summary>
					<div class="fb__faq-a">
						<p>بله، مرورگر SDK و زیرساخت ثبت رویداد xCRM برای گردآوری و تحلیل رویدادهای پشتیبانی‌شده استفاده می‌شوند. برای دریافت گزارش‌های دقیق، نصب صحیح SDK و تعریف یا ثبت رویدادهای موردنیاز اهمیت دارد.</p>
					</div>
				</details>

				<details class="fb__faq-item">
					<summary>
						<span>آیا امکانات xCRM برای همه طرح‌ها یکسان است؟</span>
						<svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
					</summary>
					<div class="fb__faq-a">
						<p>خیر، دسترسی به قابلیت‌ها و محدودیت‌های استفاده بر اساس طرح اشتراک و تنظیمات مربوط به آن تعیین می‌شود. برای اطلاع از جزئیات، <a href="<?php echo esc_url( $pricing_url ); ?>">صفحه قیمت‌گذاری</a> را بررسی کنید.</p>
					</div>
				</details>

				<details class="fb__faq-item">
					<summary>
						<span>چگونه می‌توان xCRM را به وب‌سایت متصل کرد؟</span>
						<svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
					</summary>
					<div class="fb__faq-a">
						<p>برای اتصال وب‌سایت می‌توانید از مرورگر SDK و امکانات توسعه‌دهندگان استفاده کنید. روش راه‌اندازی به ساختار وب‌سایت و نوع اطلاعات موردنیاز بستگی دارد.</p>
					</div>
				</details>

				<details class="fb__faq-item">
					<summary>
						<span>آیا برای استفاده از xCRM به دانش برنامه‌نویسی نیاز دارم؟</span>
						<svg class="fb__faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
					</summary>
					<div class="fb__faq-a">
						<p>بسیاری از امکانات مدیریتی از طریق داشبورد قابل استفاده هستند. برخی از قابلیت‌ها، مانند نصب SDK، اتصال API و تنظیم گردش‌کارهای سفارشی، ممکن است به کمک فنی نیاز داشته باشند.</p>
					</div>
				</details>

			</div>
		</div>
	</section>

	<!-- ══════════ 15. FINAL CTA ══════════ -->
	<section class="fb__section fb__final" id="cta">
		<div class="fb__section-inner">
			<div class="fb__final-box" data-reveal="scale">
				<h2 class="fb__h2">مدیریت مشتریان را از امروز هدفمندتر کنید</h2>
				<p class="fb__desc">
					اطلاعات مشتریان، پیگیری‌های فروش و تحلیل رفتار کاربران را در یک مسیر منظم قرار دهید و امکانات xCRM را متناسب با نیاز کسب‌وکار خود بشناسید.
				</p>
				<div class="fb__final-actions">
					<a href="<?php echo esc_url( $signup_url ); ?>" class="fb__btn fb__btn--primary">شروع کار با xCRM</a>
					<a href="#profiles" class="fb__btn fb__btn--secondary">مشاهده امکانات</a>
				</div>
			</div>
		</div>
	</section>

	<!-- ══════════ FOOTER ══════════ -->
	<footer class="fb__footer">
		<div class="fb__section-inner fb__footer-inner">
			<a href="<?php echo esc_url( $home_url ); ?>" class="hp__brand">
				<span class="hp__brand-icon" aria-hidden="true">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
				</span>
				<span class="hp__brand-text">xCRM</span>
			</a>
			<p class="fb__footer-copy">© <?php echo esc_html( gmdate( 'Y' ) ); ?> xCRM — مدیریت مشتریان و فروش برای کسب‌وکارها.</p>
			<div class="fb__footer-links">
				<a href="<?php echo esc_url( $marketers ); ?>">برای مارکترها</a>
				<a href="#profiles">امکانات</a>
				<a href="<?php echo esc_url( $home_url ); ?>">صفحه اصلی</a>
			</div>
		</div>
	</footer>

</main>

<?php wp_footer(); ?>
</body>
</html>
