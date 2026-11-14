<?php
/**
 * Template Name: Feature — Customer Communication
 * Template Post Type: page
 *
 * صفحهٔ جزئیات قابلیت — ارتباط با مشتریان
 * /features/communication/
 *
 * متن‌های رابط کاربری (نام کانال‌ها، بازه مجاز ارسال، ارائه‌دهندگان،
 * تاریخچه پیامک‌ها، وضعیت‌ها، تست اتصال و تلگرام) از سورس واقعی
 * داشبورد (کامپوننت‌های پوشهٔ communications) استخراج و بازبینی شده‌اند.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_stylesheet_directory() . '/inc/features-data.php';

$home_url  = home_url( '/' );
$features  = home_url( '/features/' );
$canonical = home_url( '/features/communication/' );
$dash_url  = 'https://dashboard.xcrmforosh.com/';

$page_title       = 'ارتباط با مشتریان | «xCRM فروش»';
$page_description = 'کانال‌های پیامک، ایمیل، پوش نوتیفیکیشن و تلگرام را از یک نقطه مدیریت کنید؛ ارائه‌دهندگان، بازه مجاز ارسال، پیامک زمان‌بندی‌شده و تاریخچه تحویل پیام‌ها همگی در یک مرکز.';
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
	<meta property="og:site_name" content="xCRM فروش">
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
			array('@type'=>'ListItem','position'=>2,'name'=>'امکانات','item'=>esc_url($features)),
			array('@type'=>'ListItem','position'=>3,'name'=>'ارتباط با مشتریان','item'=>esc_url($canonical)),
		),
	), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ); ?>
	</script>
	<script type="application/ld+json">
	<?php echo wp_json_encode( array(
		'@context' => 'https://schema.org',
		'@type' => 'SoftwareApplication',
		'name' => 'xCRM فروش',
		'applicationCategory' => 'BusinessApplication',
		'operatingSystem' => 'Web',
		'description' => $page_description,
		'url' => esc_url( $canonical ),
		'inLanguage' => 'fa-IR',
	), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ); ?>
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'ft-page ft-page--detail' ); ?>>
<?php wp_body_open(); ?>

<!-- HEADER -->
<?php get_template_part( 'template-parts/site-header' ); ?>

<main class="ft">

	<!-- ============ HERO ============ -->
	<section class="ft__hero" data-spotlight-zone>
		<div class="ft__hero-bg" aria-hidden="true">
			<div class="hp__grid-bg xcrm-grid-bg"></div>
			<div class="hero-spotlight" data-spotlight></div>
			<div class="ft__hero-orb ft__hero-orb--1"></div>
			<div class="ft__hero-orb ft__hero-orb--2"></div>
		</div>

		<div class="ft__inner ft__hero-inner">
			<div class="ft__hero-copy">
			<nav class="ft__breadcrumb" aria-label="مسیر ناوبری" data-reveal="fade">
				<a href="<?php echo esc_url( $home_url ); ?>">خانه</a>
				<span class="ft__breadcrumb-sep" aria-hidden="true">‹</span>
				<a href="<?php echo esc_url( $features ); ?>">امکانات</a>
				<span class="ft__breadcrumb-sep" aria-hidden="true">‹</span>
				<span class="ft__breadcrumb-current">ارتباط با مشتریان</span>
			</nav>

			<span class="ft__label ft-anim ft-anim--1">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="m22 6-10 7L2 6"/></svg>
				مرکز ارتباط با مشتریان
			</span>

			<h1 class="ft__title ft-anim ft-anim--2">
				ارتباط با مشتریان را <span class="text-gradient-primary">از یک نقطه</span> مدیریت کنید
			</h1>

			<p class="ft__hero-desc ft-anim ft-anim--3">
				کانال‌های پیامک، ایمیل، پوش و تلگرام را از یک جا مدیریت کنید؛ وضعیت ارائه‌دهندگان،
				بازه ارسال و تاریخچه پیام‌ها را لحظه‌ای ببینید. فعال‌سازی هر کانال دستی است و
				به پیکربندی و ارائه‌دهندهٔ فعال آن کانال بستگی دارد.
			</p>

			<div class="ft__hero-actions ft-anim ft-anim--4">
				<a href="<?php echo esc_url( $dash_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
					شروع رایگان
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="#channels" class="hp__btn hp__btn--ghost" data-magnetic>
					کانال‌ها را ببینید
				</a>
			</div>

			<ul class="ft__hero-pills ft-anim ft-anim--5" aria-label="نکات کلیدی">
				<li>کانال‌ها: پیامک، ایمیل، پوش، تلگرام</li>
				<li>ارائه‌دهنده با تست اتصال و پیش‌فرض</li>
				<li>بازه مجاز ارسال برای هر کانال</li>
				<li>تاریخچه پیامک با وضعیت تحویل</li>
			</ul>
			</div>
			<div class="ft__hero-media">
			<?php get_template_part( 'template-parts/feature-hero-graphic', null, array( 'slug' => 'communication' ) ); ?>
			</div>
		</div>
	</section>

	<!-- ============ PROBLEMS ============ -->
	<section class="ft__section ft__section--surface" id="problems">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
					چرا ارتباطات پراکنده می‌شود؟
				</span>
				<h2 class="ft__section-title">چهار دردسر <span class="text-gradient-primary">مدیریت چندپاره</span></h2>
				<p class="ft__section-desc">
					وقتی هر کانال در پنل جداگانه‌ای پیکربندی می‌شود، ارسال هم سخت می‌شود —
					و بدتر از آن، هیچ‌کس نمی‌داند پیام واقعاً به دست مشتری رسیده یا نه.
				</p>
			</div>

			<div class="ft__grid ft__grid--caps">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M12 12v.01"/></svg>
					</span>
					<h3>پنل‌های پراکنده</h3>
					<p>کلید API هر سرویس در پنل خودش؛ فرستنده، پترن و محدودیت‌ها جای دیگری. پیکربندی‌ها پخش می‌شوند و هیچ‌جا تصویر کامل نیست.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
					</span>
					<h3>ارسال بی‌زمانه</h3>
					<p>بدون بازه مجاز ارسال، پیام تبلیغاتی نیمه‌شب می‌رود. تنظیم «از ساعت / تا ساعت» برای هر کانال، دقیقاً همین مشکل را حل می‌کند.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
					</span>
					<h3>ناآگاهی از تحویل</h3>
					<p>«ارسال شد» یعنی چه؟ بدون تاریخچه با وضعیت‌های در انتظار، ارسال شده، تحویل شده و ناموفق، نمی‌دانید پیام به مقصد رسیده یا نه.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="180">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg>
					</span>
					<h3>صف و تلاش بدون ردپا</h3>
					<p>پیام زمان‌بندی‌شده در کجا می‌ماند؟ چند بار تلاش شده؟ بدون شمارندهٔ تلاش و دلیل خطا، ارسال ناموفق یک معما می‌ماند.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ CHANNEL OVERVIEW ============ -->
	<section class="ft__section" id="channels">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="m22 6-10 7L2 6"/></svg>
					نمای کلی کانال‌ها
				</span>
				<h2 class="ft__section-title">کانال‌های ارتباطی — <span class="text-gradient-primary">وضعیت و پیکربندی</span></h2>
				<p class="ft__section-desc">
					هر کانال یک کارت جداگانه با وضعیت فعال/غیرفعال، ارائه‌دهندگان متصل و بازه مجاز ارسال خودش دارد.
					هیچ کانالی به‌صورت خودکار فعال نمی‌شود؛ فعال‌سازی و پیکربندی با شماست.
				</p>
			</div>

			<div class="ft__kpis" data-reveal="up">
				<div class="ft__kpi">
					<span class="ft__kpi-label">کانال فعال</span>
					<span class="ft__kpi-value">۳ از ۵</span>
					<span class="ft__kpi-hint">بسته به پیکربندی شرکت</span>
				</div>
				<div class="ft__kpi">
					<span class="ft__kpi-label">کل ارائه‌دهندگان</span>
					<span class="ft__kpi-value">۴</span>
					<span class="ft__kpi-hint">پیامک، ایمیل و پوش</span>
				</div>
				<div class="ft__kpi">
					<span class="ft__kpi-label">ارائه‌دهنده فعال</span>
					<span class="ft__kpi-value">۳</span>
					<span class="ft__kpi-hint">با ۱ پیش‌فرض</span>
				</div>
				<div class="ft__kpi">
					<span class="ft__kpi-label">پیامک اخیر</span>
					<span class="ft__kpi-value">۱۲۸</span>
					<span class="ft__kpi-hint">از ۷ روز گذشته</span>
				</div>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">داده‌های نمونه — آمار از نمای کلی ارتباطات همان شرکت محاسبه می‌شود</p>

			<div class="ft__grid ft__grid--cards" style="margin-top: clamp(22px, 3vw, 30px);">
				<article class="main-card ft__chan" data-reveal="up">
					<div class="ft__chan-head">
						<span class="ft__chan-icon" aria-hidden="true">
							<svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
						</span>
						<div class="ft__chan-title">
							<h3>پیامک</h3>
							<p>ارسال پیامک تبلیغاتی و تراکنشی</p>
						</div>
						<span class="ft__chan-state ft__chan-state--on">فعال</span>
					</div>
					<div class="ft__chan-rows">
						<div class="ft__chan-row"><span>ارائه‌دهندگان</span><span>۲ — پیش‌فرض: کاوه نگار</span></div>
						<div class="ft__chan-row"><span>بازه مجاز ارسال</span><span>۰۸:۰۰ تا ۲۱:۰۰</span></div>
						<div class="ft__chan-row"><span>تاریخچه پیام</span><span class="ft__chan-ok">فعال</span></div>
					</div>
					<div class="ft__chan-foot">
						<span>فعال/غیرفعال کردن پیامک</span>
						<span class="ft__chan-toggle ft__chan-toggle--on" aria-hidden="true"></span>
					</div>
				</article>

				<article class="main-card ft__chan" data-reveal="up" data-reveal-delay="60">
					<div class="ft__chan-head">
						<span class="ft__chan-icon ft__chan-icon--info" aria-hidden="true">
							<svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
						</span>
						<div class="ft__chan-title">
							<h3>ایمیل</h3>
							<p>ارسال ایمیل تبلیغاتی و تراکنشی</p>
						</div>
						<span class="ft__chan-state ft__chan-state--on">فعال</span>
					</div>
					<div class="ft__chan-rows">
						<div class="ft__chan-row"><span>ارائه‌دهندگان</span><span>۱ — SendGrid</span></div>
						<div class="ft__chan-row"><span>بازه مجاز ارسال</span><span>۰۹:۰۰ تا ۲۰:۰۰</span></div>
						<div class="ft__chan-row"><span>دامنه فرستنده</span><span class="ft__chan-ok">احرازشده</span></div>
					</div>
					<div class="ft__chan-foot">
						<span>فعال/غیرفعال کردن ایمیل</span>
						<span class="ft__chan-toggle ft__chan-toggle--on" aria-hidden="true"></span>
					</div>
				</article>

				<article class="main-card ft__chan" data-reveal="up" data-reveal-delay="120">
					<div class="ft__chan-head">
						<span class="ft__chan-icon ft__chan-icon--success" aria-hidden="true">
							<svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
						</span>
						<div class="ft__chan-title">
							<h3>پوش نوتیفیکیشن</h3>
							<p>ارسال نوتیفیکیشن به اپلیکیشن</p>
						</div>
						<span class="ft__chan-state ft__chan-state--on">فعال</span>
					</div>
					<div class="ft__chan-rows">
						<div class="ft__chan-row"><span>ارائه‌دهندگان</span><span>۱ — FCM</span></div>
						<div class="ft__chan-row"><span>بازه مجاز ارسال</span><span>۰۰:۰۰ تا ۲۴:۰۰</span></div>
						<div class="ft__chan-row"><span>پلتفرم</span><span>اندروید و وب</span></div>
					</div>
					<div class="ft__chan-foot">
						<span>فعال/غیرفعال کردن پوش</span>
						<span class="ft__chan-toggle ft__chan-toggle--on" aria-hidden="true"></span>
					</div>
				</article>

				<article class="main-card ft__chan" data-reveal="up" data-reveal-delay="180">
					<div class="ft__chan-head">
						<span class="ft__chan-icon ft__chan-icon--info" aria-hidden="true">
							<svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
						</span>
						<div class="ft__chan-title">
							<h3>تلگرام</h3>
							<p>ارسال پیام از طریق ربات تلگرام</p>
						</div>
						<span class="ft__chan-state ft__chan-state--on">فعال</span>
					</div>
					<div class="ft__chan-rows">
						<div class="ft__chan-row"><span>اتصال</span><span>۱ اکانت متصل</span></div>
						<div class="ft__chan-row"><span>بازه مجاز ارسال</span><span>۰۰:۰۰ تا ۲۴:۰۰</span></div>
						<div class="ft__chan-row"><span>پیکربندی</span><span>api اختصاصی شرکت</span></div>
					</div>
					<div class="ft__chan-foot">
						<span>فعال/غیرفعال کردن تلگرام</span>
						<span class="ft__chan-toggle ft__chan-toggle--on" aria-hidden="true"></span>
					</div>
				</article>

				<article class="main-card ft__chan" data-reveal="up" data-reveal-delay="240">
					<div class="ft__chan-head">
						<span class="ft__chan-icon ft__chan-icon--muted" aria-hidden="true">
							<svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
						</span>
						<div class="ft__chan-title">
							<h3>اینستاگرام</h3>
							<p>ارسال پیام از طریق اینستاگرام</p>
						</div>
						<span class="ft__chan-state ft__chan-state--soon">به‌زودی</span>
					</div>
					<div class="ft__chan-rows">
						<div class="ft__chan-row"><span>وضعیت</span><span class="ft__chan-pending">غیرفعال — به‌زودی</span></div>
						<div class="ft__chan-row"><span>ارائه‌دهنده</span><span>—</span></div>
						<div class="ft__chan-row"><span>بازه مجاز ارسال</span><span>—</span></div>
					</div>
					<div class="ft__chan-foot">
						<span>فعال/غیرفعال کردن اینستاگرام</span>
						<span class="ft__chan-toggle ft__chan-toggle--disabled" aria-hidden="true"></span>
					</div>
				</article>
			</div>

			<div class="ft__note-box" style="margin-top: clamp(22px, 3vw, 30px);" data-reveal="up">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
				<p style="margin: 0;">
					<strong>دسترسی به کانال‌ها شرطی است:</strong> هر کانال فقط زمانی ارسال می‌کند که
					<strong>فعال</strong> شده و حداقل یک <strong>ارائه‌دهنده فعال و پیش‌فرض</strong> برایش تنظیم شده باشد.
					کارت بالا صرفاً نمایش وضعیت است — همه‌چیز به پیکربندی خود شرکت بستگی دارد.
				</p>
			</div>
		</div>
	</section>

	<!-- ============ SMS MANAGEMENT ============ -->
	<section class="ft__section ft__section--surface" id="sms">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
					مدیریت پیامک
				</span>
				<h2 class="ft__section-title">ارسال پیامک — <span class="text-gradient-primary">متنی، الگویی، OTP و انبوه</span></h2>
				<p class="ft__section-desc">
					از «ارسال پیامک» دستی گرفته تا پیام زمان‌بندی‌شده؛ همه از طریق ارائه‌دهندهٔ
					پیش‌فرض شرکت به صف ارسال می‌روند.
				</p>
				<ul class="ft__checklist">
					<li><strong>چهار نوع پیام:</strong> «پیامک متنی»، «الگویی (Pattern)»، «رمز یکبار مصرف (OTP)» و «انبوه (Bulk)»</li>
					<li><strong>زمان‌بندی ارسال (اختیاری):</strong> خالی = ارسال فوری؛ در صورت انتخاب زمان، پیام در صف ارسال زمان‌بندی‌شده قرار می‌گیرد</li>
					<li>برای الگویی و OTP به «کد پترن» نیاز است؛ مقادیر پترن برای OTP الزامی است</li>
					<li>اعتبارسنجی واقعی: «شماره گیرنده الزامی است» و «شماره نامعتبر است»</li>
					<li>«پیامک با provider پیش‌فرض شرکت ارسال می‌شود. برای OTP به کد پترن نیاز است.»</li>
				</ul>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<div class="main-card ft__form">
					<div class="ft__form-head">
						<h3>ارسال پیامک</h3>
						<p>پیامک جدید ایجاد و در صف ارسال قرار دهید</p>
					</div>
					<div class="ft__form-chips" aria-label="نوع پیام">
						<span class="ft__form-chip ft__form-chip--on">پیامک متنی</span>
						<span class="ft__form-chip">الگویی (Pattern)</span>
						<span class="ft__form-chip">رمز یکبار مصرف (OTP)</span>
						<span class="ft__form-chip">انبوه (Bulk)</span>
					</div>
					<div class="ft__form-grid">
						<div class="ft__field">
							<span class="ft__field-label">شماره گیرنده</span>
							<span class="ft__field-val ft__field-val--ltr">09120000000</span>
						</div>
						<div class="ft__field">
							<span class="ft__field-label">نوع پیام</span>
							<span class="ft__field-val">پیامک متنی</span>
						</div>
						<div class="ft__field">
							<span class="ft__field-label">کد پترن</span>
							<span class="ft__field-val ft__field-val--muted">مثلاً: 10000012345</span>
						</div>
						<div class="ft__field">
							<span class="ft__field-label">زمان‌بندی ارسال (اختیاری)</span>
							<span class="ft__field-val ft__field-val--muted">خالی = ارسال فوری</span>
						</div>
						<div class="ft__field ft__field--full">
							<span class="ft__field-label">متن پیام</span>
							<span class="ft__field-val ft__field-val--muted">متن پیامک را بنویسید...</span>
						</div>
					</div>
					<div class="ft__form-foot">
						<p class="ft__form-note">در صورت انتخاب زمان، پیام در صف ارسال زمان‌بندی‌شده قرار می‌گیرد. پیامک با provider پیش‌فرض شرکت ارسال می‌شود.</p>
						<div class="ft__form-btns">
							<span class="ft__form-btn ft__form-btn--ghost">انصراف</span>
							<span class="ft__form-btn"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>ارسال</span>
						</div>
					</div>
				</div>
				<p class="ft__mock-caption">نمایش تزئینی از مودال «ارسال پیامک»</p>
			</div>
		</div>
	</section>

	<!-- ============ EMAIL CONFIGURATION ============ -->
	<section class="ft__section" id="email">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
					پیکربندی ایمیل
				</span>
				<h2 class="ft__section-title">ایمیل با <span class="text-gradient-primary">دامنهٔ اختصاصی</span> شرکت شما</h2>
				<p class="ft__section-desc">
					ارائه‌دهندهٔ ایمیل را اضافه می‌کنید، فرستنده و دامنه را معرفی می‌کنید و
					حداکثر پیام در روز/ماه را محدود می‌کنید — همه در همان صفحهٔ ارائه‌دهندگان ایمیل.
				</p>
				<ul class="ft__checklist">
					<li><strong>گزینه‌های موجود در سورس:</strong> SendGrid (ارسال ایمیل تراکنشی و تبلیغاتی) و Mailgun (ارسال ایمیل از دامنه اختصاصی)</li>
					<li>فیلدها: «نام نمایشی»، «کلید API»، «ایمیل فرستنده»، «نام فرستنده» و «دامنه» (دامنه احرازشده برای ارسال)</li>
					<li>«محدودیت روزانه» و «محدودیت ماهانه» — با مقدار ۰ یعنی بدون محدودیت</li>
					<li>نکتهٔ راهنما: «حداقل یک ارائه‌دهنده فعال و پیش‌فرض برای هر کانال داشته باشید.»</li>
				</ul>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<div class="main-card ft__form">
					<div class="ft__form-head">
						<h3>افزودن ارائه‌دهنده ایمیل</h3>
						<p>مشخصات و اتصال — نوع ارائه‌دهنده پس از ایجاد قابل تغییر نیست.</p>
					</div>
					<div class="ft__form-chips" aria-label="نوع ارائه‌دهنده">
						<span class="ft__form-chip ft__form-chip--on">SendGrid</span>
						<span class="ft__form-chip">Mailgun</span>
					</div>
					<div class="ft__form-grid">
						<div class="ft__field">
							<span class="ft__field-label">نام نمایشی</span>
							<span class="ft__field-val">سرور اصلی</span>
						</div>
						<div class="ft__field">
							<span class="ft__field-label">کلید API</span>
							<span class="ft__field-val ft__field-val--ltr ft__field-val--muted">••••••••••••</span>
						</div>
						<div class="ft__field">
							<span class="ft__field-label">ایمیل فرستنده</span>
							<span class="ft__field-val ft__field-val--ltr">no-reply@example.com</span>
						</div>
						<div class="ft__field">
							<span class="ft__field-label">نام فرستنده</span>
							<span class="ft__field-val">xCRM فروش</span>
						</div>
						<div class="ft__field">
							<span class="ft__field-label">دامنه</span>
							<span class="ft__field-val ft__field-val--ltr">example.com</span>
						</div>
						<div class="ft__field">
							<span class="ft__field-label">محدودیت روزانه / ماهانه</span>
							<span class="ft__field-val ft__field-val--muted">بدون محدودیت</span>
						</div>
					</div>
					<div class="ft__form-foot">
						<p class="ft__form-note">نام فرستنده یعنی نام نمایشی در صندوق ورودی. ارائه‌دهندهٔ غیرفعال هیچ ارسالی ندارد.</p>
						<div class="ft__form-btns">
							<span class="ft__form-btn ft__form-btn--ghost">انصراف</span>
							<span class="ft__form-btn">افزودن ایمیل</span>
						</div>
					</div>
				</div>
				<p class="ft__mock-caption">نمایش تزئینی از فرم ارائه‌دهندهٔ ایمیل</p>
			</div>
		</div>
	</section>

	<!-- ============ PUSH CONFIGURATION ============ -->
	<section class="ft__section ft__section--surface" id="push">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
					پیکربندی پوش
				</span>
				<h2 class="ft__section-title">پوش نوتیفیکیشن <span class="text-gradient-primary">به اپلیکیشن</span></h2>
				<p class="ft__section-desc">
					کلید سرویس ارائه‌دهنده را به‌صورت JSON وارد می‌کنید و نوتیفیکیشن
					از سمت سرویس پوش خودِ شرکت ارسال می‌شود.
				</p>
				<ul class="ft__checklist">
					<li><strong>گزینه‌های موجود در سورس:</strong> Firebase Cloud Messaging (نوتیفیکیشن اندروید و وب) و Apple Push Notification (نوتیفیکیشن iOS)</li>
					<li>فیلدها: «نام نمایشی» + «تنظیمات (JSON)» — همان کلید سرویس یا تنظیمات مربوط به ارائه‌دهنده</li>
					<li>JSON نامعتبر پذیرفته نمی‌شود: «تنظیمات JSON معتبر نیست؛ ساختار را بررسی کنید»</li>
					<li>محدودیت روزانه/ماهانه و وضعیت فعال/پیش‌فرض، مانند بقیهٔ کانال‌ها قابل تنظیم است</li>
				</ul>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<div class="main-card ft__form">
					<div class="ft__form-head">
						<h3>افزودن ارائه‌دهنده پوش</h3>
						<p>مشخصات و پیکربندی — نوتیفیکیشن به اپلیکیشن شما ارسال می‌شود.</p>
					</div>
					<div class="ft__form-chips" aria-label="نوع ارائه‌دهنده">
						<span class="ft__form-chip ft__form-chip--on">Firebase Cloud Messaging</span>
						<span class="ft__form-chip">Apple Push Notification</span>
					</div>
					<div class="ft__form-grid">
						<div class="ft__field">
							<span class="ft__field-label">نام نمایشی</span>
							<span class="ft__field-val">FCM اصلی</span>
						</div>
						<div class="ft__field">
							<span class="ft__field-label">وضعیت</span>
							<span class="ft__field-val">فعال — ارائه‌دهنده پیش‌فرض</span>
						</div>
						<div class="ft__field ft__field--full">
							<span class="ft__field-label">تنظیمات (JSON)</span>
						</div>
					</div>
					<pre class="ft__form-code" aria-label="نمونه تنظیمات JSON">{
  "server_key": "••••••••••••"
}</pre>
					<div class="ft__form-foot">
						<p class="ft__form-note">پیام‌های بدون provider مشخص، از ارائه‌دهندهٔ پیش‌فرض ارسال می‌شوند.</p>
						<div class="ft__form-btns">
							<span class="ft__form-btn ft__form-btn--ghost">انصراف</span>
							<span class="ft__form-btn">افزودن پوش نوتیفیکیشن</span>
						</div>
					</div>
				</div>
				<p class="ft__mock-caption">نمایش تزئینی از فرم ارائه‌دهندهٔ پوش</p>
			</div>
		</div>
	</section>

	<!-- ============ TELEGRAM ============ -->
	<section class="ft__section" id="telegram">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
					اتصال تلگرام
				</span>
				<h2 class="ft__section-title">تلگرام از طریق <span class="text-gradient-primary">اکانت و ربات</span> خود شرکت</h2>
				<p class="ft__section-desc">
					تلگرام برخلاف پیامک/ایمیل/پوش، ارائه‌دهنده ندارد: اکانت تلگرام شرکت را
					با ورود دو مرحله‌ای اضافه می‌کنید و پیام‌ها از طریق ربات همان اکانت می‌رود.
				</p>
				<ul class="ft__checklist">
					<li><strong>ورود دو مرحله‌ای با تلگرام:</strong> شماره تلفن → کد تایید → اکانت اضافه می‌شود</li>
					<li>اطلاعات هر اکانت: نام، نام کاربری و شناسه چت — با دکمه‌های «تست پیام» و «قطع اتصال»</li>
					<li><strong>تنظیمات API:</strong> api_id و api_hash اختصاصی شرکت (اختیاری) — بدون آن، از تنظیمات سراسری سیستم استفاده می‌شود</li>
					<li>حالت خالی: «اکانت تلگرامی متصل نیست» + «افزودن اکانت تلگرام»</li>
					<li>پس از تست: «پیام تستی با موفقیت ارسال شد — آن را در تلگرام خود بررسی کنید»</li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="main-card ft__tg">
					<div class="ft__tg-head">
						<span class="ft__tg-avatar" aria-hidden="true">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
						</span>
						<div class="ft__tg-id">
							<p class="ft__tg-name">اکانت تلگرام شرکت</p>
							<p class="ft__tg-user">@xcrm_company</p>
						</div>
						<span class="ft__tg-badge">فعال</span>
					</div>
					<div class="ft__tg-rows">
						<div class="ft__tg-row"><span>شناسه چت</span><span>123456789</span></div>
						<div class="ft__tg-row"><span>تاریخ اتصال</span><span>1403/08/02</span></div>
						<div class="ft__tg-row"><span>تنظیمات API</span><span>api اختصاصی شرکت</span></div>
					</div>
					<div class="ft__tg-actions">
						<span class="ft__tg-btn"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>تست پیام</span>
						<span class="ft__tg-btn"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>تنظیمات API</span>
						<span class="ft__tg-btn ft__tg-btn--danger"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M18.36 6.64A9 9 0 1 1 5.64 6.64"/><path d="M12 2v10"/></svg>قطع اتصال</span>
					</div>
				</div>
				<p class="ft__mock-caption">نمایش تزئینی از کارت اکانت تلگرام</p>

				<div class="ft__note-box ft__note-box--info" style="margin-top: 14px;">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
					<p style="margin: 0;">
						تلگرام در بخش «ارائه‌دهندگان» فهرست نمی‌شود؛ پیکربندی آن از مسیر
						«اتصال تلگرام» و با ورود دو مرحله‌ای انجام می‌شود — برخلاف پیامک، ایمیل و پوش.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ SEND WINDOWS / QUIET HOURS ============ -->
	<section class="ft__section ft__section--surface" id="windows">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
					کنترل ارسال پیام
				</span>
				<h2 class="ft__section-title">بازه مجاز ارسال — <span class="text-gradient-primary">از ساعت / تا ساعت</span></h2>
				<p class="ft__section-desc">
					«هر کانال را فعال یا غیرفعال کنید و بازه زمانی مجاز ارسال را مشخص کنید تا پیام‌ها
					در ساعت مناسب به دست مشتری برسند.» خارج از این بازه، پیام‌ها نمی‌سوزند — نگه داشته می‌شوند.
				</p>
			</div>

			<div data-reveal="up">
				<div class="ft__win">
					<div class="ft__win-head">
						<span>پیامک — بازه مجاز ارسال</span>
						<span class="ft__win-range-label">۰۸:۰۰ تا ۲۱:۰۰</span>
					</div>
					<div class="ft__win-track" aria-hidden="true">
						<span class="ft__win-bar" style="--win-start: 33.3%; --win-end: 87.5%;"></span>
					</div>
					<div class="ft__win-marks" aria-hidden="true">
						<span>00:00</span><span>06:00</span><span>12:00</span><span>18:00</span><span>24:00</span>
					</div>
					<p class="ft__win-note">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span>پیام‌های خارج از بازه زمانی مشخص‌شده، پس از پایان بازه ارسال خواهند شد.</span>
					</p>
				</div>

				<div class="ft__win">
					<div class="ft__win-head">
						<span>پوش نوتیفیکیشن — بازه مجاز ارسال</span>
						<span class="ft__win-range-label ft__win-range-label--all">ارسال در تمام ساعات شبانه‌روز مجاز است</span>
					</div>
					<div class="ft__win-track" aria-hidden="true">
						<span class="ft__win-bar ft__win-bar--full"></span>
					</div>
					<div class="ft__win-marks" aria-hidden="true">
						<span>00:00</span><span>06:00</span><span>12:00</span><span>18:00</span><span>24:00</span>
					</div>
				</div>

				<div class="ft__win">
					<div class="ft__win-head">
						<span>اینستاگرام — بازه مجاز ارسال</span>
						<span class="ft__win-range-label ft__win-range-label--all">این کانال غیرفعال است</span>
					</div>
					<div class="ft__win-track" aria-hidden="true">
						<span class="ft__win-bar ft__win-bar--full" style="opacity: .35;"></span>
					</div>
					<div class="ft__win-marks" aria-hidden="true">
						<span>00:00</span><span>06:00</span><span>12:00</span><span>18:00</span><span>24:00</span>
					</div>
					<p class="ft__win-note ft__win-note--disabled">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
						<span>کانال غیرفعال، بازه هم غیرقابل تنظیم است — دقیقاً همان‌طور که در تنظیمات داشبورد رفتار می‌کند.</span>
					</p>
				</div>
			</div>

			<div class="ft__grid ft__grid--caps" style="margin-top: clamp(24px, 3vw, 32px);">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
					</span>
					<h3>بازه زمانی ارسال</h3>
					<p>«در تنظیمات، بازه مجاز ارسال هر کانال را مشخص کنید.» — این اولین قدم راهنمای سریع خود داشبورد است.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
					</span>
					<h3>ذخیره خودکار</h3>
					<p>«تغییرات به‌صورت خودکار ذخیره می‌شوند.» در تنظیمات کانال‌ها دکمهٔ ذخیرهٔ جدا ندارید — تغییر بازه لحظه‌ای اعمال می‌شود.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg>
					</span>
					<h3>صفِ نگه‌داشته</h3>
					<p>پیام‌های خارج از بازه، به جای لغو در صف می‌مانند و «پس از پایان بازه ارسال خواهند شد» — نگه‌داشتن، تلاش مجدد حساب نمی‌شود.</p>
				</article>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">داده‌های نمونه — بازه‌ها در تنظیمات کانال‌های همان شرکت پیکربندی شده‌اند</p>
		</div>
	</section>

	<!-- ============ PROVIDER CONFIGURATION ============ -->
	<section class="ft__section" id="providers">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="m22 6-10 7L2 6"/></svg>
					ارائه‌دهندگان
				</span>
				<h2 class="ft__section-title">پیکربندی ارائه‌دهنده + <span class="text-gradient-primary">تست اتصال</span></h2>
				<p class="ft__section-desc">
					برای هر کانال (پیامک، ایمیل، پوش) چند ارائه‌دهنده می‌سازید، یکی را «پیش‌فرض» می‌کنید
					و قبل از ارسال واقعی، اتصال را تست می‌کنید.
				</p>
			</div>

			<div class="ft__split">
				<div class="ft__split-copy" data-reveal="up">
					<div class="ft__xtbl-wrap">
						<table class="ft__xtbl">
							<thead>
								<tr>
									<th scope="col">نام</th>
									<th scope="col">پیش‌فرض</th>
									<th scope="col">نوع</th>
									<th scope="col">وضعیت</th>
									<th scope="col">عملیات</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><strong>خط اصلی تبلیغاتی</strong></td>
									<td>بله</td>
									<td>کاوه نگار</td>
									<td><span class="ft__st ft__st--done"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>فعال</span></td>
									<td><span class="ft__xtbl-act"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>تست</span></td>
								</tr>
								<tr>
									<td><strong>خط بکاپ بین‌المللی</strong></td>
									<td>خیر</td>
									<td>تویلیو</td>
									<td><span class="ft__st ft__st--done"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>فعال</span></td>
									<td><span class="ft__xtbl-act"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>تست</span></td>
								</tr>
								<tr>
									<td><strong>آزمایشی</strong></td>
									<td>خیر</td>
									<td>قاصدک</td>
									<td><span class="ft__st"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>غیرفعال</span></td>
									<td><span class="ft__xtbl-act"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>تست</span></td>
								</tr>
								<tr>
									<td><strong>سرور اصلی</strong></td>
									<td>بله</td>
									<td>SendGrid</td>
									<td><span class="ft__st ft__st--done"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>فعال</span></td>
									<td><span class="ft__xtbl-act"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>تست</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<p class="ft__mock-caption">داده‌های نمونه — جدول ارائه‌دهندگان (همه/فعال/غیرفعال) با افزودن ارائه‌دهنده جدید</p>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li><strong>افزودن:</strong> دکمهٔ «ارائه‌دهنده جدید» + فیلترهای «همه / فعال / غیرفعال» و جستجوی ارائه‌دهندگان</li>
						<li><strong>تست اتصال:</strong> «بررسی صحت اتصال به ارائه‌دهنده» — نتیجه: «اتصال با موفقیت برقرار شد» یا «خطا در اتصال»</li>
						<li><strong>پیش‌فرض:</strong> «پیام‌های بدون provider مشخص، از این ارائه‌دهنده ارسال شوند»</li>
						<li><strong>محدودیت‌ها:</strong> «محدودیت روزانه» و «محدودیت ماهانه» روی خود ارائه‌دهنده</li>
						<li><strong>فیلدها بسته به کانال فرق می‌کنند:</strong> پیامک (شماره فرستنده، کد پترن)، ایمیل (دامنه، ایمیل فرستنده)، پوش (تنظیمات JSON)</li>
						<li>هشدار واقعی فرم: «نوع ارائه‌دهنده پس از ایجاد قابل تغییر نیست.»</li>
						<li>حذف از «منطقه خطرناک» و غیرقابل بازگشت است</li>
					</ul>

					<div class="ft__note-box">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>مرجع‌های موجود در سورس:</strong> پیامک — کاوه نگار، قاصدک، تویلیو، آی‌پی‌پنل، اس‌ام‌اس‌آی‌آر؛
							ایمیل — SendGrid و Mailgun؛ پوش — Firebase Cloud Messaging و Apple Push Notification.
							امکانات هر ارائه‌دهنده یکسان نیست و این صفحه چیزی بیش از همین فهرست وعده نمی‌دهد.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ MESSAGE DELIVERY LIFECYCLE ============ -->
	<section class="ft__section ft__section--surface" id="lifecycle">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
					وضعیت تحویل پیام
				</span>
				<h2 class="ft__section-title">چرخهٔ تحویل — <span class="text-gradient-primary">از صف تا تحویل</span></h2>
				<p class="ft__section-desc">
					هر پیامک پنج وضعیت دارد و همه در «تاریخچه پیامک‌ها» با خطای قابل خواندن ثبت می‌شوند؛
					شمارندهٔ «تلاش: n/m» هم کنار همان ردیف است.
				</p>
			</div>

			<div data-reveal="up">
				<div class="ft__life">
					<span class="ft__life-node ft__life-node--wait"><span class="ft__life-dot" aria-hidden="true"></span>در انتظار</span>
					<svg class="ft__life-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					<span class="ft__life-node ft__life-node--sent"><span class="ft__life-dot" aria-hidden="true"></span>ارسال شده</span>
					<svg class="ft__life-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					<span class="ft__life-node ft__life-node--delivered"><span class="ft__life-dot" aria-hidden="true"></span>تحویل شده</span>
					<svg class="ft__life-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					<span class="ft__life-node ft__life-node--failed"><span class="ft__life-dot" aria-hidden="true"></span>ناموفق</span>
					<svg class="ft__life-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					<span class="ft__life-node ft__life-node--cancelled"><span class="ft__life-dot" aria-hidden="true"></span>لغو شده</span>
					<p class="ft__life-note">
						مسیر اصلی: در انتظار ← ارسال شده ← تحویل شده. «ناموفق» شاخهٔ خطاست و «لغو شده» برای پیام‌های باطل‌شده —
						همه در نماهای «همه / ارسال شده / تحویل شده / ناموفق» فیلتر می‌شوند.
					</p>
				</div>
			</div>

			<div class="ft__split" style="margin-top: clamp(28px, 4vw, 40px);">
				<div class="ft__split-copy" data-reveal="up">
					<figure class="ft__mock-wrap" style="margin: 0;">
						<div class="ft__xtbl-wrap">
							<table class="ft__xtbl">
								<thead>
									<tr>
										<th scope="col">شماره گیرنده</th>
										<th scope="col">نوع</th>
										<th scope="col">وضعیت</th>
										<th scope="col">تاریخ ارسال</th>
										<th scope="col">خطا</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><span class="ft__xtbl-code">09121234567</span></td>
										<td>الگویی</td>
										<td><span class="ft__st ft__st--delivered"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>تحویل شده</span></td>
										<td>۱۴۰۳/۰۸/۱۵ — ۱۰:۳۲</td>
										<td>—</td>
									</tr>
									<tr>
										<td><span class="ft__xtbl-code">09355558888</span></td>
										<td>انبوه</td>
										<td>
											<span class="ft__st ft__st--failed"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>ناموفق</span>
											<span class="ft__xtbl-err">اعتبار خط ارسال — کد 13</span>
										</td>
										<td>۱۴۰۳/۰۸/۱۵ — ۱۰:۳۱</td>
										<td>تلاش: ۳/۳</td>
									</tr>
									<tr>
										<td><span class="ft__xtbl-code">09127770000</span></td>
										<td>پیامک</td>
										<td><span class="ft__st ft__st--wait"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>در انتظار</span></td>
										<td>زمان‌بندی: ۱۶:۰۰</td>
										<td>—</td>
									</tr>
									<tr>
										<td><span class="ft__xtbl-code">09901234567</span></td>
										<td>رمز یکبار مصرف</td>
										<td><span class="ft__st ft__st--sent"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>ارسال شده</span></td>
										<td>۱۴۰۳/۰۸/۱۵ — ۱۰:۳۵</td>
										<td>—</td>
									</tr>
								</tbody>
							</table>
						</div>
						<figcaption class="ft__mock-caption">داده‌های نمونه — جدول «تاریخچه پیامک‌ها» با جستجوی شماره و فیلتر وضعیت/نوع پیام</figcaption>
					</figure>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li><strong>راهنمای سریع:</strong> «وضعیت تحویل پیامک‌ها را در تاریخچه بررسی کنید.»</li>
						<li><strong>پنج نوع پیام در لاگ:</strong> «پیامک»، «الگویی»، «رمز یکبار مصرف»، «انبوه» و «سیستمی»</li>
						<li><strong>جزئیات پیامک:</strong> شماره گیرنده، وضعیت، نوع، تاریخ ایجاد/ارسال/تحویل، کد پترن، شناسه خارجی، تلاش‌ها و متن پیام</li>
						<li><strong>شمارنده تلاش:</strong> «تلاش: n/m» — پس از پایان تلاش‌ها، وضعیت ناموفق نهایی می‌شود و خطا به‌صورت ساختاریافتهٔ فارسی ثبت می‌گردد</li>
						<li>پیام ناموفق، علت دقیق (کد/پیام خطا) را در همان ردیف دارد</li>
						<li>نماها: «همه»، «ارسال شده»، «تحویل شده»، «ناموفق» + جستجوی شماره</li>
					</ul>

					<div class="ft__note-box ft__note-box--info">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>نگه داشتن = تلاش نیست:</strong> پیامی که به خاطر بازه مجاز ارسال یا زمان‌بندی در صف می‌ماند،
							شمارندهٔ تلاش را کم نمی‌کند؛ فقط پیام‌هایی که واقعاً تلاش ارسال شکست خورده‌اند، شمرده می‌شوند.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ INTEGRATION WITH SEGMENTATION & AUTOMATION ============ -->
	<section class="ft__section" id="integration">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					یکپارچگی
				</span>
				<h2 class="ft__section-title">از سگمنت تا <span class="text-gradient-primary">وضعیت تحویل</span> — یک سناریو</h2>
				<p class="ft__section-desc">
					کانال‌های ارتباطی ایزوله نیستند: سگمنت‌ها مخاطب را می‌سازند، اتوماسیون‌ها کانال را انتخاب
					و زمان‌بندی می‌کنند و همین صفحه، وضعیت تحویل را برمی‌گرداند.
				</p>
			</div>

			<div class="ft__scenario" data-reveal="up">
				<span class="ft__scn-badge">
					<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					سناریوی نمونه
				</span>
				<h3 class="ft__scn-title">مشتری در معرض ریزش ← یادآوری پیامکی</h3>
				<p class="ft__scn-desc">پنج قدم، از انتخاب مخاطب تا دیدن نتیجه در تاریخچه — داده‌های نمونه.</p>

				<div class="ft__chain">
					<div class="ft__chain-node">
						<span class="ft__chain-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>۱. سگمنت مشتری</h3>
							<p>گروه «در معرض ریزش» — مشتریان بدون خرید در ۶۰ روز گذشته از سگمنت‌ها انتخاب می‌شوند.</p>
						</div>
					</div>
					<div class="ft__chain-node">
						<span class="ft__chain-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>۲. تریگر اتوماسیون</h3>
							<p>اتوماسیون «یادآوری بازدید» با تریگر «با تأخیر — ۳ روز پس از رویداد بازدید محصول» فعال می‌شود.</p>
						</div>
					</div>
					<div class="ft__chain-node">
						<span class="ft__chain-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>۳. کانال پیکربندی‌شده</h3>
							<p>اکشن اتوماسیون، ارسال پیامک را با ارائه‌دهندهٔ پیش‌فرض انتخاب می‌کند — کانال باید فعال باشد.</p>
						</div>
					</div>
					<div class="ft__chain-node">
						<span class="ft__chain-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/><path d="M12 14v4"/><path d="M10 16h4"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>۴. زمان‌بندی ارسال</h3>
							<p>اگر لحظهٔ اجرا بیرون از بازه مجاز باشد، پیام در صف می‌ماند و پس از پایان بازه ارسال می‌شود.</p>
						</div>
					</div>
					<div class="ft__chain-node">
						<span class="ft__chain-icon ft__chain-icon--end" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>۵. وضعیت تحویل</h3>
							<p>ردیف همان مخاطب در «تاریخچه پیامک‌ها»: تحویل شده — یا ناموفق با پیام خطا و شمارندهٔ تلاش.</p>
						</div>
					</div>
				</div>

				<div class="ft__scn-sentence">
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
					<span><b>خلاصه:</b> سگمنت ← تریگر اتوماسیون ← کانال پیکربندی‌شده ← زمان‌بندی ارسال ← وضعیت تحویل.</span>
				</div>
			</div>

			<div class="ft__related-links" data-reveal="up" style="margin-top: clamp(26px, 3.5vw, 36px);">
				<a href="<?php echo esc_url( home_url( '/features/segmentation/' ) ); ?>" class="ft__related-link">
					ساخت مخاطب با سگمنت
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/automation/' ) ); ?>" class="ft__related-link">
					تریگر و اجرای اتوماسیون
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/website-tracking/' ) ); ?>" class="ft__related-link">
					منبع رویدادها: ردیابی وب‌سایت
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( $features ); ?>" class="ft__related-link">
					فهرست کامل امکانات
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
			</div>
		</div>
	</section>

	<?php
	$ft_faq_items = array(
		array(
			'q' => 'کانال‌های ارتباطی کدام‌اند؟',
			'a' => 'چهار کانال قابل استفاده: <strong>پیامک</strong> (ارسال پیامک تبلیغاتی و تراکنشی)، <strong>ایمیل</strong> (ارسال ایمیل تبلیغاتی و تراکنشی)، <strong>پوش نوتیفیکیشن</strong> (ارسال نوتیفیکیشن به اپلیکیشن) و <strong>تلگرام</strong> (ارسال پیام از طریق ربات تلگرام). کانال «اینستاگرام» هم در فهرست تنظیمات دیده می‌شود اما با نشان «به‌زودی» و غیرفعال است.',
		),
		array(
			'q' => 'آیا همه کانال‌ها به‌صورت خودکار فعال‌اند؟',
			'a' => 'خیر. فعال‌سازی هر کانال دستی است و ارسال فقط زمانی ممکن است که کانال <strong>فعال</strong> باشد و حداقل یک <strong>ارائه‌دهنده فعال و پیش‌فرض</strong> برایش تنظیم شده باشد. در نمای کلی، تعداد «کانال فعال» دقیقاً همین وضعیت را نشان می‌دهد.',
		),
		array(
			'q' => 'بازه مجاز ارسال چیست؟',
			'a' => 'برای هر کانال بازه‌ای از «از ساعت» تا «تا ساعت» تعیین می‌کنید تا پیام‌ها در ساعت مناسب برسند (این همان مفهوم «ساعت سکوت» است: خارج از بازه، ارسال انجام نمی‌شود). اگر بازه‌ای تنظیم نشود، «ارسال در تمام ساعات شبانه‌روز مجاز است». پیام‌های خارج از بازه لغو نمی‌شوند — «پس از پایان بازه ارسال خواهند شد».',
		),
		array(
			'q' => 'پیام زمان‌بندی‌شده چطور ارسال می‌شود؟',
			'a' => 'در مودال «ارسال پیامک» گزینهٔ «زمان‌بندی ارسال (اختیاری)» را انتخاب می‌کنید (خالی = ارسال فوری). پیام در صف ارسال زمان‌بندی‌شده قرار می‌گیرد با وضعیت «در انتظار» و در زمان تعیین‌شده — و پس از احترام به بازه مجاز ارسال — وارد اجرا می‌شود. صف به‌صورت دوره‌ای چک می‌شود.',
		),
		array(
			'q' => 'اگر ارسال ناموفق شد چه اتفاقی می‌افتد؟',
			'a' => 'وضعیت «ناموفق» ثبت می‌شود، پیام خطا در همان ردیف تاریخچه دیده می‌شود و شمارندهٔ «تلاش: n/m» تعداد تلاش‌ها را نشان می‌دهد. پس از پایان تلاش‌ها، وضعیت ناموفق نهایی می‌شود و خطا به‌صورت ساختاریافتهٔ فارسی ذخیره می‌گردد. پیام‌هایی که فقط به خاطر بازه یا زمان‌بندی نگه داشته شده‌اند، تلاش حساب نمی‌شوند.',
		),
		array(
			'q' => 'ارائه‌دهنده چیست و چرا «پیش‌فرض» مهم است؟',
			'a' => 'ارائه‌دهنده، سرویس واقعی پشت هر کانال است (برای پیامک و ایمیل و پوش — با فیلدها و محدودیت‌های متفاوت هرکدام). ارائه‌دهندهٔ پیش‌فرض همانی است که «پیام‌های بدون provider مشخص» از او ارسال می‌شوند. با دکمهٔ «تست» می‌توانید «اتصال با موفقیت برقرار شد» را قبل از ارسال واقعی ببینید. توجه: امکانات ارائه‌دهندگان مختلف یکسان نیست.',
		),
		array(
			'q' => 'تلگرام چطور وصل می‌شود؟',
			'a' => 'تلگرام ارائه‌دهنده ندارد؛ با «افزودن اکانت تلگرام» و «ورود دو مرحله‌ای با تلگرام» (شماره تلفن و کد تایید) متصل می‌شود. api_id و api_hash اختصاصی شرکت اختیاری است و بدون آن از تنظیمات سراسری سیستم استفاده می‌شود. هر اکانت «تست پیام» و «قطع اتصال» دارد.',
		),
		array(
			'q' => 'ارسال واتس‌اپ یا پیام اینستاگرام دارید؟',
			'a' => 'این سرویس <strong>ارسال واتس‌اپ ندارد</strong>. «اینستاگرام» هم فعلاً فقط با نشان «به‌زودی» در تنظیمات کانال‌ها آمده و قابل فعال‌سازی نیست — هیچ‌کدام بخشی از سرویس ارسال پیام این صفحه نیستند. مرزهای کانال دقیقاً همین‌اند: پیامک، ایمیل، پوش و تلگرام، در صورت پیکربندی.',
		),
	);
	$ft_faq_id      = 'faq';
	$ft_faq_title   = 'پرسش‌های متداول دربارهٔ ارتباط با مشتریان';
	$ft_faq_intro   = 'دقیقاً همان چیزی که تیم‌های بازاریابی قبل از فعال‌سازی اولین کانال می‌پرسند.';
	$ft_faq_class   = 'ft__section--surface';
	get_template_part( 'template-parts/faq-section', null, array(
		'ft_faq_id'    => $ft_faq_id,
		'ft_faq_title' => $ft_faq_title,
		'ft_faq_intro' => $ft_faq_intro,
		'ft_faq_class' => $ft_faq_class,
		'ft_faq_items' => $ft_faq_items,
	) );
	?>

	<?php
	$ft_cta_title         = 'ارتباط با مشتریان را از همین امروز متمرکز کنید';
	$ft_cta_desc          = 'کانال را فعال کنید، ارائه‌دهنده را تست کنید و اولین پیام را از یک نقطه بفرستید.';
	$ft_cta_primary_url   = $dash_url;
	$ft_cta_primary_label = 'شروع رایگان';
	$ft_cta_secondary_url   = $features;
	$ft_cta_secondary_label = 'بازگشت به فهرست امکانات';
	$ft_cta_note          = 'بدون نیاز به کارت اعتباری';
	get_template_part( 'template-parts/cta-section', null, array(
		'ft_cta_title'           => $ft_cta_title,
		'ft_cta_desc'            => $ft_cta_desc,
		'ft_cta_primary_url'     => $ft_cta_primary_url,
		'ft_cta_primary_label'   => $ft_cta_primary_label,
		'ft_cta_secondary_url'   => $ft_cta_secondary_url,
		'ft_cta_secondary_label' => $ft_cta_secondary_label,
		'ft_cta_note'            => $ft_cta_note,
	) );
	?>

</main>

<!-- FOOTER -->
<?php get_template_part( 'template-parts/site-footer' ); ?>

<?php wp_footer(); ?>
</body>
</html>
