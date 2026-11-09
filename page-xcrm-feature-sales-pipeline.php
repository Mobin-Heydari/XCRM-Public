<?php
/**
 * Template Name: Feature — Sales Pipeline
 * Template Post Type: page
 *
 * صفحهٔ جزئیات قابلیت — قیف فروش و پیگیری‌ها
 * /features/sales-pipeline/
 *
 * متن‌های رابط کاربری (کارت کانبان، منوی انتقال، یادآوری‌ها،
 * برای بعدا، آمار تحلیلی) از سورس واقعی داشبورد
 * (C:\Users\Mobin\Documents\xCRM\frontend\src\components\dashboard\sales)
 * استخراج و بازبینی شده‌اند.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_stylesheet_directory() . '/inc/features-data.php';

$home_url   = home_url( '/' );
$features   = home_url( '/features/' );
$canonical  = home_url( '/features/sales-pipeline/' );
$dash_url   = 'https://dashboard.xcrmforosh.com/';

$page_title       = 'قیف فروش و پیگیری فرصت‌ها | «xCRM فروش»';
$page_description = 'فرصت‌های فروش را در کانبان مراحل قابل تنظیم دنبال کنید؛ فعالیت‌ها و یادآوری‌ها را به تیم تخصیص دهید، کارت‌ها را مدیریت کنید و عملکرد قیف فروش را تحلیل کنید.';
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
			array('@type'=>'ListItem','position'=>3,'name'=>'قیف فروش','item'=>esc_url($canonical)),
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
			<nav class="ft__breadcrumb" aria-label="مسیر ناوبری" data-reveal="fade">
				<a href="<?php echo esc_url( $home_url ); ?>">خانه</a>
				<span class="ft__breadcrumb-sep" aria-hidden="true">‹</span>
				<a href="<?php echo esc_url( $features ); ?>">امکانات</a>
				<span class="ft__breadcrumb-sep" aria-hidden="true">‹</span>
				<span class="ft__breadcrumb-current">قیف فروش</span>
			</nav>

			<span class="ft__label ft-anim ft-anim--1">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18"/><path d="M15 3v18"/></svg>
				قیف فروش و پیگیری‌ها
			</span>

			<h1 class="ft__title ft-anim ft-anim--2">
				فرصت‌های فروش را مدیریت کنید و <span class="text-gradient-primary">هیچ پیگیری مهمی</span> را از دست ندهید
			</h1>

			<p class="ft__hero-desc ft-anim ft-anim--3">
				هر فرصت فروش روی یک تابلوی کانبان با مراحل دلخواه شما جریان دارد؛ فعالیت‌ها، یادآوری‌ها و
				یادداشت‌های تیم کنار هر کارت ثبت می‌شود و در نهایت همان داده‌ها به آمار تبدیل و ماتریس مراحل تبدیل می‌شوند.
			</p>

			<div class="ft__hero-actions ft-anim ft-anim--4">
				<a href="<?php echo esc_url( $dash_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
					شروع رایگان
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="#board" class="hp__btn hp__btn--ghost" data-magnetic>
					تابلوی کانبان را ببینید
				</a>
			</div>

			<ul class="ft__hero-pills ft-anim ft-anim--5" aria-label="نکات کلیدی">
				<li>چند فرآیند فروش هم‌زمان</li>
				<li>کارت کانبان با کنترل انتقال</li>
				<li>یادآوری، واگذاری و «برای بعدا»</li>
				<li>تحلیل قیف و ماتریس مراحل</li>
			</ul>
		</div>
	</section>

	<!-- ============ COST OF MISSED FOLLOW-UPS ============ -->
	<section class="ft__section ft__section--surface" id="cost">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
					هزینهٔ فراموشی
				</span>
				<h2 class="ft__section-title">پیگیری پراکنده، <span class="text-gradient-primary">فرصت‌های خاموش</span></h2>
				<p class="ft__section-desc">
					وقتی وضعیت معامله‌ها در ذهن تیم، چت‌ها و دفترچه پراکنده باشد،
					چهار اتفاق تکراری می‌افتد که قیف فروش برای همین‌ها ساخته شده است.
				</p>
			</div>

			<div class="ft__grid ft__grid--caps">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/><circle cx="12" cy="12" r="10"/></svg>
					</span>
					<h3>تماس مهم فراموش می‌شود</h3>
					<p>وقتی یادآوری در چت و حافظهٔ تیم پراکنده است، پیگیری بعدی به‌موقع انجام نمی‌شود.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 6v6l4 2"/><circle cx="12" cy="12" r="10"/></svg>
					</span>
					<h3>فرصت در مرحله می‌خوابد</h3>
					<p>بدون شمارندهٔ «روز در مرحله» و تاریخچه، معلوم نیست کدام معامله هفته‌هاست جا خوش کرده.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="m7 7 5 5 4-4 4 4"/></svg>
					</span>
					<h3>خروج بی‌صدا از قیف</h3>
					<p>مشتری از مرحله‌ای حذف یا رد می‌شود و کسی نمی‌داند کجا، چرا و با چه نرخی این اتفاق می‌افتد.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="180">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
					</span>
					<h3>بدون ثبت، بدون تحلیل</h3>
					<p>اگر حرکت‌ها و فعالیت‌ها ثبت نشوند، نرخ تبدیل واقعی مراحل قابل اندازه‌گیری نیست.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ VISUAL KANBAN (CENTERPIECE) ============ -->
	<section class="ft__section" id="board">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18"/><path d="M15 3v18"/></svg>
					تابلوی کانبان
				</span>
				<h2 class="ft__section-title">هر فرصت، <span class="text-gradient-primary">یک کارت در مرحلهٔ خودش</span></h2>
				<p class="ft__section-desc">
					کارت هر مشتری نام، تاریخ ورود، شماره‌های تماس و نشانگر یادآوری عقب‌افتاده را نشان می‌دهد
					و از همان کارت می‌توان یادداشت ثبت کرد، «برای بعداً» گذاشت، منتقل کرد و یادآوری ساخت.
				</p>
			</div>

			<figure class="ft__mock-wrap" data-reveal="up" style="margin: 0;">
				<div class="ft__board">
					<div class="ft__board-bar">
						<h3 class="ft__board-title">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="6" x2="6" y1="3" y2="15"/><circle cx="18" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><path d="M18 9a9 9 0 0 1-9 9"/></svg>
							فرآیند فروش اصلی
						</h3>
						<span class="ft__board-total">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
							<b>۳۳</b> مشتری
						</span>
					</div>

					<div class="ft__board-cols">
						<!-- COLUMN-1 -->
						<div class="ft__kcol">
							<div class="ft__kcol-head">
								<div class="ft__kcol-top">
									<div class="ft__kcol-name">
										<span class="ft__kcol-tile" aria-hidden="true"><span class="ft__kcol-dot"></span></span>
										<div>
											<span class="ft__kcol-title">سرنخ جدید</span>
											<span class="ft__kcol-count">۱۲ مشتری</span>
										</div>
									</div>
								</div>
							</div>
							<div class="ft__kcol-body">
								<div class="ft__kcard">
									<div class="ft__kcard-top">
										<span class="ft__kcard-name">مریم رضایی</span>
										<span class="ft__kcard-x" aria-hidden="true"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/></svg></span>
									</div>
									<div class="ft__kcard-meta">
										<span class="ft__kchip"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg>۱۴۰۳/۰۸/۱۲</span>
									</div>
									<div class="ft__kphone">
										<div class="ft__kphone-row">
											<span class="ft__kphone-type">موبایل</span>
											<span class="ft__kphone-num">0912 345 6789</span>
											<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
										</div>
									</div>
									<div class="ft__ktools" aria-hidden="true">
										<span class="ft__ktool" title="یادداشت"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z"/><path d="M14 2v5h5"/><path d="M8 13h8"/><path d="M8 17h5"/></svg></span>
										<span class="ft__ktool ft__ktool--warn" title="برای بعدا"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-9-9 9.75 9.75 0 0 0 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg></span>
										<span class="ft__ktool" title="انتقال"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m8 3 4 4-4 4"/><path d="M4 7h16"/><path d="m16 21-4-4 4-4"/><path d="M20 17H4"/></svg></span>
										<span class="ft__ktool ft__ktool--warn" title="ایجاد یادآوری"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg></span>
										<span class="ft__ktool" title="ثبت رویداد"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>
									</div>
									<div class="ft__kmove" aria-hidden="true">
										<span class="ft__kmove-btn ft__kmove-btn--ghost">مرحله قبلی</span>
										<span class="ft__kmove-btn">مرحله بعدی<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg></span>
									</div>
								</div>

								<div class="ft__kcard">
									<div class="ft__kcard-top">
										<span class="ft__kcard-name">شرکت آریا</span>
										<span class="ft__kcard-x" aria-hidden="true"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/></svg></span>
									</div>
									<div class="ft__kcard-meta">
										<span class="ft__kchip"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg>۱۴۰۳/۰۸/۱۴</span>
									</div>
									<div class="ft__ktools" aria-hidden="true">
										<span class="ft__ktool" title="یادداشت"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z"/><path d="M14 2v5h5"/><path d="M8 13h8"/><path d="M8 17h5"/></svg></span>
										<span class="ft__ktool ft__ktool--warn" title="برای بعدا"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-9-9 9.75 9.75 0 0 0 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg></span>
										<span class="ft__ktool" title="انتقال"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m8 3 4 4-4 4"/><path d="M4 7h16"/><path d="m16 21-4-4 4-4"/><path d="M20 17H4"/></svg></span>
										<span class="ft__ktool ft__ktool--warn" title="ایجاد یادآوری"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg></span>
										<span class="ft__ktool" title="ثبت رویداد"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>
									</div>
									<div class="ft__kmove" aria-hidden="true">
										<span class="ft__kmove-btn ft__kmove-btn--ghost">مرحله قبلی</span>
										<span class="ft__kmove-btn">مرحله بعدی<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg></span>
									</div>
								</div>
							</div>
						</div>

						<!-- COLUMN-2 -->
						<div class="ft__kcol ft__kcol--info">
							<div class="ft__kcol-head">
								<div class="ft__kcol-top">
									<div class="ft__kcol-name">
										<span class="ft__kcol-tile" aria-hidden="true"><span class="ft__kcol-dot"></span></span>
										<div>
											<span class="ft__kcol-title">واجد شرایط</span>
											<span class="ft__kcol-count">۸ مشتری</span>
										</div>
									</div>
								</div>
							</div>
							<div class="ft__kcol-body">
								<div class="ft__kcard">
									<div class="ft__kcard-top">
										<span class="ft__kcard-name">فروشگاه پارس</span>
										<span class="ft__kcard-x" aria-hidden="true"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/></svg></span>
									</div>
									<div class="ft__kcard-meta">
										<span class="ft__kchip"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg>۱۴۰۳/۰۸/۰۹</span>
										<span class="ft__koverdue"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>عقب‌افتاده</span>
									</div>
									<div class="ft__kphone">
										<div class="ft__kphone-row">
											<span class="ft__kphone-type">دفتر</span>
											<span class="ft__kphone-num">021 8877 6655</span>
											<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
										</div>
									</div>
									<div class="ft__ktools" aria-hidden="true">
										<span class="ft__ktool" title="یادداشت"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z"/><path d="M14 2v5h5"/><path d="M8 13h8"/><path d="M8 17h5"/></svg></span>
										<span class="ft__ktool ft__ktool--warn" title="برای بعدا"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-9-9 9.75 9.75 0 0 0 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg></span>
										<span class="ft__ktool" title="انتقال"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m8 3 4 4-4 4"/><path d="M4 7h16"/><path d="m16 21-4-4 4-4"/><path d="M20 17H4"/></svg></span>
										<span class="ft__ktool ft__ktool--warn" title="ایجاد یادآوری"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg></span>
										<span class="ft__ktool" title="ثبت رویداد"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>
									</div>
									<div class="ft__kmove" aria-hidden="true">
										<span class="ft__kmove-btn">مرحله قبلی<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg></span>
										<span class="ft__kmove-btn">مرحله بعدی<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg></span>
									</div>
								</div>

								<div class="ft__kcard">
									<div class="ft__kcard-top">
										<span class="ft__kcard-name">استارتاپ رها</span>
										<span class="ft__kcard-x" aria-hidden="true"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/></svg></span>
									</div>
									<div class="ft__kcard-meta">
										<span class="ft__kchip"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg>۱۴۰۳/۰۸/۱۵</span>
									</div>
									<div class="ft__ktools" aria-hidden="true">
										<span class="ft__ktool" title="یادداشت"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z"/><path d="M14 2v5h5"/><path d="M8 13h8"/><path d="M8 17h5"/></svg></span>
										<span class="ft__ktool ft__ktool--warn" title="برای بعدا"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-9-9 9.75 9.75 0 0 0 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg></span>
										<span class="ft__ktool" title="انتقال"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m8 3 4 4-4 4"/><path d="M4 7h16"/><path d="m16 21-4-4 4-4"/><path d="M20 17H4"/></svg></span>
										<span class="ft__ktool ft__ktool--warn" title="ایجاد یادآوری"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg></span>
										<span class="ft__ktool" title="ثبت رویداد"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>
									</div>
									<div class="ft__kmove" aria-hidden="true">
										<span class="ft__kmove-btn">مرحله قبلی<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg></span>
										<span class="ft__kmove-btn">مرحله بعدی<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg></span>
									</div>
								</div>
							</div>
						</div>

						<!-- COLUMN-3 -->
						<div class="ft__kcol ft__kcol--warn">
							<div class="ft__kcol-head">
								<div class="ft__kcol-top">
									<div class="ft__kcol-name">
										<span class="ft__kcol-tile" aria-hidden="true"><span class="ft__kcol-dot"></span></span>
										<div>
											<span class="ft__kcol-title">تماس برقرار شده</span>
											<span class="ft__kcol-count">۶ مشتری</span>
										</div>
									</div>
									<span class="ft__kcol-hidden" title="نمایش کسانی که برای بعدا گذاشته شده‌اند">
										<svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 12a9 9 0 1 1-9-9 9.75 9.75 0 0 0 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg>
										۲
									</span>
								</div>
							</div>
							<div class="ft__kcol-body">
								<div class="ft__kcard">
									<div class="ft__kcard-top">
										<span class="ft__kcard-name">بهنام کریمی</span>
										<span class="ft__kcard-x" aria-hidden="true"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/></svg></span>
									</div>
									<div class="ft__kcard-meta">
										<span class="ft__kchip"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg>۱۴۰۳/۰۸/۰۵</span>
										<span class="ft__koverdue"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>عقب‌افتاده (۲)</span>
									</div>
									<div class="ft__kphone">
										<div class="ft__kphone-row">
											<span class="ft__kphone-type">موبایل</span>
											<span class="ft__kphone-num">0935 111 2233</span>
											<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
										</div>
									</div>
									<div class="ft__ktools" aria-hidden="true">
										<span class="ft__ktool" title="یادداشت"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z"/><path d="M14 2v5h5"/><path d="M8 13h8"/><path d="M8 17h5"/></svg></span>
										<span class="ft__ktool ft__ktool--warn" title="برای بعدا"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-9-9 9.75 9.75 0 0 0 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg></span>
										<span class="ft__ktool" title="انتقال"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m8 3 4 4-4 4"/><path d="M4 7h16"/><path d="m16 21-4-4 4-4"/><path d="M20 17H4"/></svg></span>
										<span class="ft__ktool ft__ktool--warn" title="ایجاد یادآوری"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg></span>
										<span class="ft__ktool" title="ثبت رویداد"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>
									</div>
									<div class="ft__kmove" aria-hidden="true">
										<span class="ft__kmove-btn">مرحله قبلی<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg></span>
										<span class="ft__kmove-btn">مرحله بعدی<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg></span>
									</div>
								</div>

								<div class="ft__kcard">
									<div class="ft__kcard-top">
										<span class="ft__kcard-name">گروه نوین</span>
										<span class="ft__kcard-x" aria-hidden="true"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/></svg></span>
									</div>
									<div class="ft__kcard-meta">
										<span class="ft__kchip"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg>۱۴۰۳/۰۸/۰۳</span>
									</div>
									<div class="ft__ktools" aria-hidden="true">
										<span class="ft__ktool" title="یادداشت"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z"/><path d="M14 2v5h5"/><path d="M8 13h8"/><path d="M8 17h5"/></svg></span>
										<span class="ft__ktool ft__ktool--warn" title="برای بعدا"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-9-9 9.75 9.75 0 0 0 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg></span>
										<span class="ft__ktool" title="انتقال"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m8 3 4 4-4 4"/><path d="M4 7h16"/><path d="m16 21-4-4 4-4"/><path d="M20 17H4"/></svg></span>
										<span class="ft__ktool ft__ktool--warn" title="ایجاد یادآوری"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg></span>
										<span class="ft__ktool" title="ثبت رویداد"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>
									</div>
									<div class="ft__kmove" aria-hidden="true">
										<span class="ft__kmove-btn">مرحله قبلی<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg></span>
										<span class="ft__kmove-btn">مرحله بعدی<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg></span>
									</div>
								</div>
							</div>
						</div>

						<!-- COLUMN-4 -->
						<div class="ft__kcol ft__kcol--purple">
							<div class="ft__kcol-head">
								<div class="ft__kcol-top">
									<div class="ft__kcol-name">
										<span class="ft__kcol-tile" aria-hidden="true"><span class="ft__kcol-dot"></span></span>
										<div>
											<span class="ft__kcol-title">جلسه برنامه‌ریزی شده</span>
											<span class="ft__kcol-count">۴ مشتری</span>
										</div>
									</div>
								</div>
							</div>
							<div class="ft__kcol-body">
								<div class="ft__kcard">
									<div class="ft__kcard-top">
										<span class="ft__kcard-name">هلدینگ سپهر</span>
										<span class="ft__kcard-x" aria-hidden="true"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/></svg></span>
									</div>
									<div class="ft__kcard-meta">
										<span class="ft__kchip"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg>۱۴۰۳/۰۷/۲۸</span>
									</div>
									<div class="ft__kphone">
										<div class="ft__kphone-row">
											<span class="ft__kphone-type">موبایل</span>
											<span class="ft__kphone-num">0912 900 8070</span>
											<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
										</div>
									</div>
									<div class="ft__ktools" aria-hidden="true">
										<span class="ft__ktool" title="یادداشت"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z"/><path d="M14 2v5h5"/><path d="M8 13h8"/><path d="M8 17h5"/></svg></span>
										<span class="ft__ktool ft__ktool--warn" title="برای بعدا"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-9-9 9.75 9.75 0 0 0 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg></span>
										<span class="ft__ktool" title="انتقال"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m8 3 4 4-4 4"/><path d="M4 7h16"/><path d="m16 21-4-4 4-4"/><path d="M20 17H4"/></svg></span>
										<span class="ft__ktool ft__ktool--warn" title="ایجاد یادآوری"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg></span>
										<span class="ft__ktool" title="ثبت رویداد"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>
									</div>
									<div class="ft__kmove" aria-hidden="true">
										<span class="ft__kmove-btn">مرحله قبلی<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg></span>
										<span class="ft__kmove-btn">مرحله بعدی<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg></span>
									</div>
								</div>
							</div>
						</div>

						<!-- COLUMN-5 -->
						<div class="ft__kcol ft__kcol--success">
							<div class="ft__kcol-head">
								<div class="ft__kcol-top">
									<div class="ft__kcol-name">
										<span class="ft__kcol-tile" aria-hidden="true"><span class="ft__kcol-dot"></span></span>
										<div>
											<span class="ft__kcol-title">مذاکره</span>
											<span class="ft__kcol-count">۳ مشتری</span>
										</div>
									</div>
								</div>
							</div>
							<div class="ft__kcol-body">
								<div class="ft__kcard">
									<div class="ft__kcard-top">
										<span class="ft__kcard-name">برند مهر</span>
										<span class="ft__kcard-x" aria-hidden="true"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/></svg></span>
									</div>
									<div class="ft__kcard-meta">
										<span class="ft__kchip"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg>۱۴۰۳/۰۷/۲۰</span>
									</div>
									<div class="ft__ktools" aria-hidden="true">
										<span class="ft__ktool" title="یادداشت"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z"/><path d="M14 2v5h5"/><path d="M8 13h8"/><path d="M8 17h5"/></svg></span>
										<span class="ft__ktool ft__ktool--warn" title="برای بعدا"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-9-9 9.75 9.75 0 0 0 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg></span>
										<span class="ft__ktool" title="انتقال"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m8 3 4 4-4 4"/><path d="M4 7h16"/><path d="m16 21-4-4 4-4"/><path d="M20 17H4"/></svg></span>
										<span class="ft__ktool ft__ktool--warn" title="ایجاد یادآوری"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg></span>
										<span class="ft__ktool" title="ثبت رویداد"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>
									</div>
									<div class="ft__kmove" aria-hidden="true">
										<span class="ft__kmove-btn">مرحله قبلی<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg></span>
										<span class="ft__kmove-btn ft__kmove-btn--ghost">مرحله بعدی</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<figcaption class="ft__mock-caption">داده‌های نمونه — نمایش تزئینی از تابلوی کانبان داشبورد؛ تعداد هر ستون از کل مشتریان آن مرحله است.</figcaption>
			</figure>
		</div>
	</section>

	<!-- ============ MANAGING SALES STAGES ============ -->
	<section class="ft__section ft__section--surface" id="stages">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 6h16"/><path d="M4 12h10"/><path d="M4 18h6"/></svg>
					مدیریت مراحل
				</span>
				<h2 class="ft__section-title">مراحل را <span class="text-gradient-primary">خودتان می‌سازید</span></h2>
				<p class="ft__section-desc">
					هر فرآیند فروش مجموعه‌ای از مراحل مرتب‌شده با نام و رنگ دلخواه است؛
					مرحلهٔ نهایی قابل تنظیم است و حتی می‌توان چند مرحلهٔ نهایی (برد و باخت) داشت.
				</p>
				<ul class="ft__checklist">
					<li>هنگام ساخت فرآیند، مراحل پیشنهادی (سرنخ، فرصت، پیشنهاد، مذاکره، نتیجه مثبت/منفی) به‌صورت پیش‌فرض قابل ویرایش وجود دارد — هیچ مرحله‌ای اجباری نیست</li>
					<li>ویزارد ساخت: منبع (پیشنهاد یا دستی) ← هویت ← مراحل ← بازبینی</li>
					<li>قالب‌های آماده متناسب با دسته‌بندی شرکت شما نیز قابل انتخاب‌اند</li>
					<li>تغییر ترتیب مراحل با دکمه‌های «انتقال به بالا/پایین»</li>
					<li>قواعد گذارش: از مرحله‌ای به مرحلهٔ دیگر، با شرط و اولویت</li>
					<li>هر کارت «روز در مرحله» و تاریخ ورود را نشان می‌دهد</li>
				</ul>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<div class="ft__reorder">
					<div class="ft__reorder-head">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18"/><path d="M15 3v18"/></svg>
						ترتیب مراحل — فرآیند فروش اصلی
					</div>
					<!-- REORDER-ROWS -->
					<div class="ft__reorder-row">
						<span class="ft__reorder-idx">۱</span>
						<span class="ft__reorder-name">سرنخ</span>
						<span class="ft__reorder-btns" aria-hidden="true">
							<span class="ft__reorder-btn" title="انتقال به بالا"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m18 15-6-6-6 6"/></svg></span>
							<span class="ft__reorder-btn" title="انتقال به پایین"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg></span>
						</span>
					</div>
					<div class="ft__reorder-row">
						<span class="ft__reorder-idx">۲</span>
						<span class="ft__reorder-name">فرصت</span>
						<span class="ft__reorder-btns" aria-hidden="true">
							<span class="ft__reorder-btn" title="انتقال به بالا"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m18 15-6-6-6 6"/></svg></span>
							<span class="ft__reorder-btn" title="انتقال به پایین"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg></span>
						</span>
					</div>
					<div class="ft__reorder-row">
						<span class="ft__reorder-idx">۳</span>
						<span class="ft__reorder-name">پیشنهاد</span>
						<span class="ft__reorder-btns" aria-hidden="true">
							<span class="ft__reorder-btn" title="انتقال به بالا"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m18 15-6-6-6 6"/></svg></span>
							<span class="ft__reorder-btn" title="انتقال به پایین"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg></span>
						</span>
					</div>
					<div class="ft__reorder-row">
						<span class="ft__reorder-idx">۴</span>
						<span class="ft__reorder-name">مذاکره</span>
						<span class="ft__reorder-btns" aria-hidden="true">
							<span class="ft__reorder-btn" title="انتقال به بالا"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m18 15-6-6-6 6"/></svg></span>
							<span class="ft__reorder-btn" title="انتقال به پایین"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg></span>
						</span>
					</div>
					<div class="ft__reorder-row">
						<span class="ft__reorder-idx">۵</span>
						<span class="ft__reorder-name">نتیجه مثبت</span>
						<span class="ft__reorder-final">نهایی</span>
						<span class="ft__reorder-btns" aria-hidden="true">
							<span class="ft__reorder-btn" title="انتقال به بالا"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m18 15-6-6-6 6"/></svg></span>
							<span class="ft__reorder-btn" title="انتقال به پایین"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg></span>
						</span>
					</div>
				</div>
				<p class="ft__mock-caption">نمایش تزئینی — نام مراحل از پیشنهاد پیش‌فرض ساخت فرآیند فروش و کاملاً قابل ویرایش است</p>
			</div>
		</div>
	</section>

	<!-- ============ CUSTOMER ASSIGNMENT & MOVEMENT ============ -->
	<section class="ft__section" id="movement">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m8 3 4 4-4 4"/><path d="M4 7h16"/><path d="m16 21-4-4 4-4"/><path d="M20 17H4"/></svg>
					افزودن و جابه‌جایی
				</span>
				<h2 class="ft__section-title">از پروفایل تا <span class="text-gradient-primary">مرحلهٔ درست</span></h2>
				<p class="ft__section-desc">
					مشتری را می‌توان تک‌تک یا به‌صورت یک‌جا (کل یک سگمنت) وارد مرحلهٔ دلخواه کرد
					و جابه‌جایی‌ها همگی از منوی «انتقال» روی همان کارت انجام می‌شود.
				</p>
				<ul class="ft__checklist">
					<li><strong>افزودن تکی:</strong> انتخاب مشتری + مرحلهٔ مقصد، یا «ایجاد مشتری و افزودن به مرحله»</li>
					<li><strong>افزودن گروهی:</strong> کل اعضای یک سگمنت با تأیید «افزودن اعضای گروه»</li>
					<li><strong>جابه‌جایی سریع:</strong> دکمه‌های «مرحله قبلی / مرحله بعدی» روی کارت</li>
					<li><strong>منوی انتقال:</strong> مرحله در همین فرآیند فروش ← فرآیندفروش دیگر ← گروه</li>
					<li>هر انتقال در تاریخچهٔ فعالیت و تحلیل مراحل ثبت می‌شود</li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="ft__dialog">
					<div class="ft__dialog-head">
						<h3 class="ft__dialog-title">افزودن به فرآیند فروش</h3>
						<p class="ft__dialog-desc">میتوانید یک نفر یا گروه را به فرآیند فروش اضافه کنید</p>
					</div>
					<div class="ft__dialog-modes" aria-hidden="true">
						<span class="ft__dialog-mode is-active">افزودن</span>
						<span class="ft__dialog-mode">افزودن اعضا</span>
					</div>
					<div class="ft__dialog-body">
						<label class="ft__dialog-label">مرحله</label>
						<div class="ft__bld-select">
							<span>سرنخ جدید</span>
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
						</div>
					</div>
					<div class="ft__dialog-foot" aria-hidden="true">
						<span class="ft__dialog-btn">ایجاد مشتری و افزودن به مرحله</span>
						<span class="ft__dialog-btn ft__dialog-btn--primary">افزودن</span>
					</div>
				</div>

				<div class="ft__menu">
					<div class="ft__menu-head">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m8 3 4 4-4 4"/><path d="M4 7h16"/><path d="m16 21-4-4 4-4"/><path d="M20 17H4"/></svg>
						انتقال / افزودن مشتری از کارت کانبان
					</div>
					<div class="ft__menu-label">مرحله در همین فرآیندفروش</div>
					<div class="ft__menu-item">
						<span style="width: 10px; height: 10px; border-radius: 50%; background: var(--x-primary); flex-shrink: 0;" aria-hidden="true"></span>
						<span>سرنخ جدید</span>
					</div>
					<div class="ft__menu-item">
						<span style="width: 10px; height: 10px; border-radius: 50%; background: var(--x-info); flex-shrink: 0;" aria-hidden="true"></span>
						<span>واجد شرایط</span>
					</div>
					<div class="ft__menu-label">مقصد</div>
					<div class="ft__menu-item">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="6" x2="6" y1="3" y2="15"/><circle cx="18" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><path d="M18 9a9 9 0 0 1-9 9"/></svg>
						<span>فرآیندفروش</span>
						<svg class="ft__menu-chev" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m15 18-6-6 6-6"/></svg>
					</div>
					<div class="ft__menu-item">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
						<span>گروه</span>
						<svg class="ft__menu-chev" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m15 18-6-6 6-6"/></svg>
					</div>
					<div class="ft__menu-foot">جابه‌جایی به مرحلهٔ دیگر، افزودن به فرآیند فروش دیگر یا افزودن به گروه — از همین منو</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ SALES ACTIVITY TRACKING ============ -->
	<section class="ft__section ft__section--surface" id="activity">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
					ثبت فعالیت
				</span>
				<h2 class="ft__section-title">هر اقدام تیم، <span class="text-gradient-primary">در جای خودش</span></h2>
				<p class="ft__section-desc">
					از کارت مشتری می‌توان یادداشت، رویداد و فعالیت فروش ثبت کرد؛
					ورود و خروج از مرحله هم خودکار در تاریخچه ثبت می‌شود.
				</p>
				<ul class="ft__checklist">
					<li>انواع فعالیت مرحله: تماس، بدون پاسخ، پیام صوتی، پیامک ارسال شده، جلسه برنامه‌ریزی شده، یادداشت، رد یادآوری و سایر</li>
					<li>«ورود به مرحله» و «خروج از مرحله» به‌صورت خودکار ثبت می‌شوند</li>
					<li>هر فعالیت، ثبت‌کننده و زمان را نگه می‌دارد</li>
					<li>آمار اقدامات هر عضو تیم به تفکیک نوع فعالیت قابل مشاهده است</li>
					<li>یادداشت‌ها با تاریخ جلالی در پروندهٔ مشتری می‌مانند</li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="ft__acts" aria-label="انواع فعالیت مرحله">
					<span class="ft__act ft__act--warn"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>تماس</span>
					<span class="ft__act ft__act--muted"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/><path d="m2 2 20 20"/></svg>بدون پاسخ</span>
					<span class="ft__act ft__act--info"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 6a6 6 0 0 1 6 6c0 4-6 10-6 10"/><circle cx="12" cy="12" r="2"/></svg>پیام صوتی</span>
					<span class="ft__act ft__act--info"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>پیامک ارسال شده</span>
					<span class="ft__act ft__act--success"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/><path d="M12 14v4"/><path d="M10 16h4"/></svg>جلسه برنامه‌ریزی شده</span>
					<span class="ft__act ft__act--info"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z"/><path d="M14 2v5h5"/><path d="M8 13h8"/><path d="M8 17h5"/></svg>یادداشت</span>
					<span class="ft__act ft__act--muted"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/><path d="m2 2 20 20"/></svg>رد یادآوری</span>
					<span class="ft__act ft__act--muted"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 8v4"/><path d="M12 16h.01"/></svg>سایر</span>
				</div>

				<div class="ft__stream2">
					<div class="ft__stream2-head">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
						تاریخچهٔ فعالیت — هلدینگ سپهر
					</div>
					<div class="ft__stream2-row">
						<span class="ft__stream2-icon ft__stream2-icon--success" aria-hidden="true"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg></span>
						<div class="ft__stream2-body">
							<span class="ft__stream2-title">جلسه برنامه‌ریزی شده</span>
							<span class="ft__stream2-meta">ثبت توسط سارا احمدی — دیروز، ساعت ۱۴:۳۰</span>
						</div>
					</div>
					<div class="ft__stream2-row">
						<span class="ft__stream2-icon" aria-hidden="true"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg></span>
						<div class="ft__stream2-body">
							<span class="ft__stream2-title">تماس</span>
							<span class="ft__stream2-meta">ثبت توسط رضا محمدی — ۲ روز پیش، ساعت ۱۰:۱۵</span>
						</div>
					</div>
					<div class="ft__stream2-row">
						<span class="ft__stream2-icon ft__stream2-icon--warn" aria-hidden="true"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/><path d="m2 2 20 20"/></svg></span>
						<div class="ft__stream2-body">
							<span class="ft__stream2-title">بدون پاسخ</span>
							<span class="ft__stream2-meta">ثبت توسط رضا محمدی — ۳ روز پیش، ساعت ۰۹:۴۰</span>
						</div>
					</div>
					<div class="ft__stream2-row">
						<span class="ft__stream2-icon ft__stream2-icon--info" aria-hidden="true"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z"/><path d="M14 2v5h5"/></svg></span>
						<div class="ft__stream2-body">
							<span class="ft__stream2-title">یادداشت</span>
							<span class="ft__stream2-meta">ثبت توسط سارا احمدی — ۴ روز پیش</span>
							<span class="ft__stream2-note">در حال بررسی شرایط مالی — قرار است هفتهٔ آینده جواب بدهند.</span>
						</div>
					</div>
				</div>
				<p class="ft__mock-caption">داده‌های نمونه — تاریخچهٔ واقعی هر مشتری در جزئیات کارت نمایش داده می‌شود</p>
			</div>
		</div>
	</section>

	<!-- ============ FOLLOW-UP REMINDERS ============ -->
	<section class="ft__section" id="reminders">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
					یادآوری پیگیری
				</span>
				<h2 class="ft__section-title">یادآوری، به <span class="text-gradient-primary">نفر درست</span></h2>
				<p class="ft__section-desc">
					هر یادآوری به مشتری یا مرحلهٔ پیپلاین گره می‌خورد، زمان، وضعیت و مسئول دارد
					و اگر دیر شود، مستقیماً روی کارت همان مشتری نمایش داده می‌شود.
				</p>
				<ul class="ft__checklist">
					<li>ایجاد یادآوری جدید با عنوان و زمان («یادآوری برای پیگیری مشتری ثبت می‌شود»)</li>
					<li>سه وضعیت: «در انتظار»، «تکمیل شده»، «رد شده»</li>
					<li>یادآوری عقب‌افتاده با نشانگر روی کارت + پنجرهٔ «یادآوری‌های عقب‌افتاده»</li>
					<li>«واگذاری» یادآوری به کارمند دیگر شرکت</li>
					<li>تاریخ‌ها به‌صورت جلالی نمایش داده می‌شوند</li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="ft__rem">
					<div class="ft__rem-top">
						<span class="ft__rem-status"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>در انتظار</span>
					</div>
					<h3 class="ft__rem-title">پیگیری پیشنهاد قیمت — برند مهر</h3>
					<div class="ft__rem-time"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg>فردا، ساعت ۹:۰۰ — مرحلهٔ مذاکره</div>
					<div class="ft__rem-foot">
						<span class="ft__rem-who">مسئول: رضا محمدی</span>
						<span class="ft__rem-act"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m8 3 4 4-4 4"/><path d="M4 7h16"/><path d="m16 21-4-4 4-4"/><path d="M20 17H4"/></svg>واگذاری</span>
					</div>
				</div>

				<div class="ft__rem">
					<div class="ft__rem-top">
						<span class="ft__rem-status"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>در انتظار</span>
						<span class="ft__rem-badge">۲ روز تأخیر</span>
					</div>
					<h3 class="ft__rem-title">تماس مجدد — هلدینگ سپهر</h3>
					<div class="ft__rem-time is-overdue"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>۳ روز پیش، ساعت ۱۱:۰۰ — مرحلهٔ جلسه</div>
					<div class="ft__rem-foot">
						<span class="ft__rem-who">مسئول: سارا احمدی</span>
						<span class="ft__rem-act"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m8 3 4 4-4 4"/><path d="M4 7h16"/><path d="m16 21-4-4 4-4"/><path d="M20 17H4"/></svg>واگذاری</span>
					</div>
				</div>

				<div class="ft__rem">
					<div class="ft__rem-top">
						<span class="ft__rem-status ft__rem-status--done"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>تکمیل شده</span>
					</div>
					<h3 class="ft__rem-title">ارسال معرفی‌نامه — مریم رضایی</h3>
					<div class="ft__rem-time"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg>امروز، ساعت ۱۱:۰۰ — تکمیل توسط سارا احمدی</div>
				</div>

				<div class="ft__rem-statuses" aria-label="وضعیت‌های یادآوری">
					<span class="ft__rem-status"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>در انتظار</span>
					<span class="ft__rem-status ft__rem-status--done"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>تکمیل شده</span>
					<span class="ft__rem-status ft__rem-status--dismissed"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>رد شده</span>
				</div>
				<p class="ft__mock-caption">داده‌های نمونه — کارت‌های یادآوری در بخش «یادآوری‌ها» و روی کارت مشتری</p>
			</div>
		</div>
	</section>

	<!-- ============ SNOOZING & TASK MANAGEMENT ============ -->
	<section class="ft__section ft__section--surface" id="snooze">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 12a9 9 0 1 1-9-9 9.75 9.75 0 0 0 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg>
					«برای بعداً»
				</span>
				<h2 class="ft__section-title">کارت را پنهان کنید، <span class="text-gradient-primary">با زمان برگردد</span></h2>
				<p class="ft__section-desc">
					گاهی مشتری هنوز آمادهٔ خرید نیست. به‌جای حذف، کارت را «برای بعداً» می‌گذارید:
					از تابلو پنهان می‌شود اما در همان مرحله می‌ماند و در زمان تعیین‌شده برمی‌گردد.
				</p>
				<ul class="ft__checklist">
					<li>زمان‌های آماده: «۱ ساعت دیگه»، «فردا صبح»، «۳ روز دیگه» یا انتخاب دستی</li>
					<li>یادداشت دلیل با پیشنهادهای آماده (جواب نداد، مشغول بود، …)</li>
					<li>شمارندهٔ «برای بعداً» روی هر مرحله نمایش داده می‌شود</li>
					<li>در پنل مخصوص مرحله، هر کارت با دکمهٔ «بازگشت» به کانبان برمی‌گردد</li>
					<li>هیچ مشتری‌ای حذف یا فراموش نمی‌شود — فقط از دید جاری پنهان است</li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="ft__snooze">
					<div class="ft__snooze-head">
						<h3 class="ft__snooze-title">برای بعدا</h3>
						<p class="ft__snooze-desc">کارت تا زمان تعیین‌شده از تابلوی جاری پنهان و در همان مرحله نگه داشته می‌شود.</p>
					</div>
					<div class="ft__snooze-body">
						<span class="ft__snooze-label">زمان بازگشت</span>
						<div class="ft__snooze-presets" aria-hidden="true">
							<span class="ft__snooze-preset">۱ ساعت دیگه</span>
							<span class="ft__snooze-preset is-active">فردا صبح</span>
							<span class="ft__snooze-preset">۳ روز دیگه</span>
						</div>
						<span class="ft__snooze-notes-label">یادداشت (اختیاری)</span>
						<div class="ft__snooze-field">مثال: جواب نداد، بعداً تماس بگیرم</div>
						<span class="ft__snooze-notes-label">پیشنهادهای آماده</span>
						<div class="ft__snooze-notes" aria-hidden="true">
							<span class="ft__snooze-note">جواب نداد</span>
							<span class="ft__snooze-note">مشغول بود</span>
							<span class="ft__snooze-note">درخواست تماس بعداً کرد</span>
							<span class="ft__snooze-note">نیاز به هماهنگی مجدد</span>
							<span class="ft__snooze-note">در حال بررسی شرایط مالی</span>
						</div>
					</div>
					<div class="ft__snooze-foot" aria-hidden="true">
						<span class="ft__dialog-btn">انصراف</span>
						<span class="ft__dialog-btn ft__dialog-btn--primary">برای بعدا</span>
					</div>
				</div>

				<div class="ft__hidden-panel">
					<div class="ft__hidden-title">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 12a9 9 0 1 1-9-9 9.75 9.75 0 0 0 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg>
						برای بعدا (۲) — مرحلهٔ تماس برقرار شده
					</div>
					<div class="ft__hidden-row">
						<span class="ft__hidden-name">بهنام کریمی</span>
						<span class="ft__hidden-when">تا ۱۴۰۳/۰۸/۱۶، ساعت ۹:۰۰</span>
						<span class="ft__hidden-back">بازگشت</span>
					</div>
					<div class="ft__hidden-row" style="margin-top: 8px;">
						<span class="ft__hidden-name">فروشگاه لونا</span>
						<span class="ft__hidden-when">تا فردا، ساعت ۹:۰۰</span>
						<span class="ft__hidden-back">بازگشت</span>
					</div>
				</div>
				<p class="ft__mock-caption">نمایش تزئینی — پنجرهٔ «برای بعدا» و پنل کارت‌های پنهان‌شده در مرحله</p>
			</div>
		</div>
	</section>

	<!-- ============ PIPELINE PERFORMANCE ANALYTICS ============ -->
	<section class="ft__section" id="analytics">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
					عملکرد قیف
				</span>
				<h2 class="ft__section-title">از حرکت کارت‌ها تا <span class="text-gradient-primary">عدد و نمودار</span></h2>
				<p class="ft__section-desc">
					چون هر انتقال و خروج ثبت می‌شود، تحلیل‌ها از دادهٔ واقعی تابلو ساخته می‌شوند:
					آمار هر مرحله، نرخ تبدیل کلی، ماتریس گذارش مراحل و تعداد خروج‌ها.
				</p>
			</div>

			<div class="ft__kpis" data-reveal="up">
				<div class="ft__kpi">
					<span class="ft__kpi-label">کل ورودی‌ها به فرایند فروش</span>
					<span class="ft__kpi-value">۱٬۲۴۰</span>
					<span class="ft__kpi-hint">مشتری وارد شده به فرآیند فروش</span>
				</div>
				<div class="ft__kpi">
					<span class="ft__kpi-label">نرخ تبدیل کلی</span>
					<span class="ft__kpi-value">۲۱٪</span>
					<span class="ft__kpi-hint">از ورود تا مرحلهٔ نهایی برد</span>
				</div>
				<div class="ft__kpi">
					<span class="ft__kpi-label">حذف‌شده از فرایند فروش</span>
					<span class="ft__kpi-value">۱۸۷</span>
					<span class="ft__kpi-hint">خروج از مراحل (رد یا باخت)</span>
				</div>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">داده‌های نمونه — شاخص‌ها در صفحهٔ تحلیل قیف فروش داشبورد محاسبه می‌شوند</p>

			<div class="ft__split" style="margin-top: clamp(28px, 4vw, 40px);">
				<div class="ft__split-copy" data-reveal="up">
					<div class="ft__funnel">
						<div class="ft__fn-step">
							<div class="ft__fn-top">
								<h3 class="ft__fn-name">سرنخ جدید</h3>
								<span class="ft__fn-count">۱٬۲۴۰</span>
							</div>
							<div class="ft__fn-track"><span class="ft__fn-fill" style="width: 100%;"></span></div>
							<div class="ft__fn-meta"><span class="ft__fn-conv">گام اول — ۱۰۰٪</span></div>
						</div>
						<div class="ft__fn-step">
							<div class="ft__fn-top">
								<h3 class="ft__fn-name">تماس برقرار شده</h3>
								<span class="ft__fn-count">۶۹۰</span>
							</div>
							<div class="ft__fn-track"><span class="ft__fn-fill" style="width: 56%;"></span></div>
							<div class="ft__fn-meta">
								<span class="ft__fn-conv">تبدیل: ۵۶٪</span>
								<span class="ft__fn-drop">خروج: ۵۵۰</span>
							</div>
						</div>
						<div class="ft__fn-step">
							<div class="ft__fn-top">
								<h3 class="ft__fn-name">جلسه برنامه‌ریزی شده</h3>
								<span class="ft__fn-count">۳۸۰</span>
							</div>
							<div class="ft__fn-track"><span class="ft__fn-fill" style="width: 31%;"></span></div>
							<div class="ft__fn-meta">
								<span class="ft__fn-conv">تبدیل: ۵۵٪</span>
								<span class="ft__fn-drop">خروج: ۳۱۰</span>
							</div>
						</div>
						<div class="ft__fn-step ft__fn-step--last">
							<div class="ft__fn-top">
								<h3 class="ft__fn-name">برد (مرحلهٔ نهایی)</h3>
								<span class="ft__fn-count">۲۶۰</span>
							</div>
							<div class="ft__fn-track"><span class="ft__fn-fill" style="width: 21%;"></span></div>
							<div class="ft__fn-meta">
								<span class="ft__fn-conv">تبدیل: ۶۸٪ — کل قیف: ۲۱٪</span>
								<span class="ft__fn-drop">خروج: ۱۲۰</span>
							</div>
						</div>
					</div>
					<p class="ft__mock-caption" style="text-align: start;">داده‌های نمونه — نرخ تبدیل هر مرحله از حرکت واقعی کارت‌ها محاسبه می‌شود</p>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<figure class="ft__mock-wrap">
						<div class="ft__table-wrap">
							<table class="ft__cohort">
								<thead>
									<tr>
										<th scope="col">ماتریس گذارش مراحل</th>
										<th scope="col">مرحلهٔ بعدی</th>
										<th scope="col">برد</th>
										<th scope="col">خروج</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>سرنخ جدید</td>
										<td><span class="ft__co ft__co--hot">۵۶٪</span></td>
										<td><span class="ft__co ft__co--flat">—</span></td>
										<td><span class="ft__co ft__co--drop">۴۴٪</span></td>
									</tr>
									<tr>
										<td>تماس برقرار شده</td>
										<td><span class="ft__co ft__co--hot">۵۵٪</span></td>
										<td><span class="ft__co ft__co--flat">—</span></td>
										<td><span class="ft__co ft__co--drop">۴۵٪</span></td>
									</tr>
									<tr>
										<td>جلسه برنامه‌ریزی شده</td>
										<td><span class="ft__co ft__co--flat">—</span></td>
										<td><span class="ft__co ft__co--hot">۶۸٪</span></td>
										<td><span class="ft__co ft__co--drop">۳۲٪</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<figcaption class="ft__mock-caption">داده‌های نمونه — ستون «خروج» همان خروج‌ها و حذف‌های ثبت‌شده از هر مرحله است</figcaption>
					</figure>

					<div class="ft__note-box ft__note-box--info">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>کشف:</strong> بزرگ‌ترین خروجی این نمونه از مرحلهٔ «سرنخ جدید» (۴۴٪) است —
							یعنی بیشترین هدررفت همان اولین تماس است، نه مرحلهٔ مذاکره.
							برای جزئیات بیشتر، <a href="<?php echo esc_url( home_url( '/features/analytics/#pipeline' ) ); ?>">تحلیل قیف فروش</a> را ببینید.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ PRACTICAL SALES WORKFLOW ============ -->
	<section class="ft__section ft__section--surface" id="workflow">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
					کاربرد عملی
				</span>
				<h2 class="ft__section-title">یک زنجیره: <span class="text-gradient-primary">پروفایل ← مرحله ← یادآوری ← تحلیل</span></h2>
				<p class="ft__section-desc">
					چهار حلقهٔ این زنجیره به هم وصل‌اند: اطلاعات مشتری از پروفایل می‌آید،
					روی تابلو جریان پیدا می‌کند، با یادآوری پیگیری می‌شود و در نهایت به آمار تبدیل می‌شود.
				</p>
			</div>

			<div class="ft__rel" data-reveal="up" aria-label="ارتباط اجزای سیستم">
				<span class="ft__rel-node">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
					پروفایل مشتری
				</span>
				<svg class="ft__rel-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				<span class="ft__rel-node">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18"/><path d="M15 3v18"/></svg>
					مرحلهٔ فروش
				</span>
				<svg class="ft__rel-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				<span class="ft__rel-node">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
					یادآوری پیگیری
				</span>
				<svg class="ft__rel-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				<span class="ft__rel-node ft__rel-node--accent">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
					تحلیل و آمار
				</span>
			</div>

			<div class="ft__split" style="margin-top: clamp(32px, 4.5vw, 48px);">
				<div class="ft__split-copy" data-reveal="up">
					<span class="ft__bld-badge ft__bld-badge--warn" style="margin-bottom: 14px;">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
						نمونهٔ تصویری — مراحل اجباری نیستند
					</span>
					<h3 class="ft__section-title" style="font-size: clamp(1.1rem, 2.2vw, 1.4rem);">مسیر یک معاملهٔ واقعی (نمونه)</h3>
					<p class="ft__section-desc">
						این مسیر فقط یک مثال است: مراحل را خودتان می‌سازید و نام‌ها و تعدادشان
						کاملاً به فرایند فروش شرکت شما بستگی دارد.
					</p>
					<ul class="ft__checklist">
						<li>هر مرحله می‌تواند فعالیت، یادداشت و یادآوری خاص خودش را داشته باشد</li>
						<li>خروج از هر مرحله (رد/باخت) در تحلیل‌ها ثبت می‌شود</li>
						<li>مرحلهٔ نهایی می‌تواند «برد» باشد یا چند خروجی نهایی داشته باشید</li>
					</ul>
				</div>

				<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
					<ol class="ft__journey2">
						<li class="ft__j2-step">
							<span class="ft__j2-num" aria-hidden="true">۱</span>
							<div class="ft__j2-body">
								<h3>سرنخ جدید</h3>
								<p>مشتری از فرم تماس، تماس تلفنی یا معرفی وارد فرآیند فروش می‌شود.</p>
							</div>
						</li>
						<li class="ft__j2-step">
							<span class="ft__j2-num" aria-hidden="true">۲</span>
							<div class="ft__j2-body">
								<h3>واجد شرایط</h3>
								<p>نیاز و بودجه بررسی و مشخص می‌شود این سرنخ واقعاً شانس خرید دارد یا نه.</p>
							</div>
						</li>
						<li class="ft__j2-step">
							<span class="ft__j2-num" aria-hidden="true">۳</span>
							<div class="ft__j2-body">
								<h3>تماس برقرار شده</h3>
								<p>اولین گفتگوی جدی انجام می‌شود؛ نتیجهٔ تماس و یادداشت روی کارت ثبت می‌شود.</p>
							</div>
						</li>
						<li class="ft__j2-step">
							<span class="ft__j2-num" aria-hidden="true">۴</span>
							<div class="ft__j2-body">
								<h3>جلسه برنامه‌ریزی شده</h3>
								<p>جلسهٔ حضوری یا آنلاین زمان‌بندی می‌شود و یادآوری آن برای مسئول ساخته می‌شود.</p>
							</div>
						</li>
						<li class="ft__j2-step">
							<span class="ft__j2-num" aria-hidden="true">۵</span>
							<div class="ft__j2-body">
								<h3>مذاکره</h3>
								<p>قیمت، شرایط و زمان‌بندی نهایی می‌شود و پیشنهاد رسمی ارسال می‌گردد.</p>
							</div>
						</li>
						<li class="ft__j2-step ft__j2-step--final">
							<span class="ft__j2-num" aria-hidden="true">۶</span>
							<div class="ft__j2-body">
								<h3>برد / باخت <span class="ft__j2-tag ft__j2-tag--win">برد</span><span class="ft__j2-tag">باخت</span></h3>
								<p>معامله بسته می‌شود؛ هر دو خروجی در آمار قیف فروش ثبت و قابل تحلیل است.</p>
							</div>
						</li>
					</ol>
				</div>
			</div>

			<div class="ft__section-head" style="margin-top: clamp(36px, 5vw, 52px);" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					امکانات مرتبط
				</span>
				<h2 class="ft__section-title">قیف فروش را به <span class="text-gradient-primary">بقیهٔ پلتفرم وصل کنید</span></h2>
				<p class="ft__section-desc">
					اطلاعات مشتری از پروفایل می‌آید، مخاطبان از سگمنت و رفتارها از ردیابی وب‌سایت —
					صفحات تفصیلی این قابلیت‌ها را ببینید.
				</p>
			</div>

			<div class="ft__grid ft__grid--cards">
				<?php
				$ft_related_slugs = array( 'customer-management', 'segmentation', 'analytics', 'website-tracking' );
				$ft_delay         = 0;
				foreach ( $ft_related_slugs as $ft_slug ) :
					$ft_feature = xcrm_get_feature( $ft_slug );
					if ( ! $ft_feature ) {
						continue;
					}
					get_template_part(
						'template-parts/feature-card',
						null,
						array(
							'feature'       => $ft_feature,
							'ft_card_delay' => $ft_delay,
						)
					);
					$ft_delay += 70;
				endforeach;
				?>
			</div>

			<div class="ft__related-links" data-reveal="up">
				<a href="<?php echo esc_url( home_url( '/features/analytics/#pipeline' ) ); ?>" class="ft__related-link">
					تحلیل قیف فروش
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/for-business/' ) ); ?>" class="ft__related-link">
					مسیر کسب‌وکارها
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( $features ); ?>" class="ft__related-link">
					فهرست کامل امکانات
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
			</div>
		</div>
	</section>

	<!-- ============ FAQ ============ -->
	<?php
	get_template_part(
		'template-parts/faq-section',
		null,
		array(
			'ft_faq_id'    => 'faq',
			'ft_faq_title' => 'پرسش‌های متداول دربارهٔ قیف فروش',
			'ft_faq_intro' => 'پاسخ پرسش‌های رایج دربارهٔ مراحل، جابه‌جایی کارت‌ها، یادآوری‌ها و تحلیل‌ها.',
			'ft_faq_items' => array(
				array(
					'q' => 'آیا مراحل فروش از پیش تعریف‌شده‌اند؟',
					'a' => 'خیر. هنگام ساخت فرآیند فروش یک پیشنهاد پیش‌فرض از مراحل (سرنخ، فرصت، پیشنهاد، مذاکره، نتیجه مثبت/منفی) وجود دارد که کاملاً قابل ویرایش، حذف یا افزودن است؛ قالب‌های آمادهٔ دیگر هم بر اساس دسته‌بندی شرکت شما پیشنهاد می‌شوند. هیچ مرحله‌ای اجباری نیست.',
				),
				array(
					'q' => 'جابه‌جایی کارت بین مراحل چگونه انجام می‌شود؟',
					'a' => 'از روی خود کارت، با دکمه‌های «مرحله قبلی» و «مرحله بعدی»، یا از منوی «انتقال» که امکان جابه‌جایی به مرحلهٔ دیگر در همان فرآیند، افزودن به فرآیند فروش دیگر یا افزودن به گروه را می‌دهد. ترتیب مراحل هم با دکمه‌های «انتقال به بالا/پایین» در تنظیمات فرآیند قابل تغییر است.',
				),
				array(
					'q' => '«برای بعداً» چه فرقی با حذف دارد؟',
					'a' => 'با «برای بعداً»، کارت فقط از دید جاری پنهان می‌شود و در همان مرحله می‌ماند؛ در زمان تعیین‌شده (مثلاً فردا صبح) به تابلو برمی‌گردد. پنل مخصوص هر مرحله همهٔ کارت‌های پنهان‌شده را با دکمهٔ «بازگشت» نشان می‌دهد.',
				),
				array(
					'q' => 'یادآوری‌ها چطور بین اعضای تیم تقسیم می‌شوند؟',
					'a' => 'هر یادآوری یک مسئول دارد و با دکمهٔ «واگذاری» به کارمند دیگر شرکت منتقل می‌شود. یادآوری عقب‌افتاده با نشانگر روی کارت مشتری و در پنجرهٔ «یادآوری‌های عقب‌افتاده» نمایش داده می‌شود.',
				),
				array(
					'q' => 'آیا می‌توان کل یک سگمنت را وارد فرآیند فروش کرد؟',
					'a' => 'بله. در پنجرهٔ «افزودن به فرآیند فروش» حالت «افزودن اعضا» را انتخاب کنید، سگمنت و مرحلهٔ مقصد را مشخص کنید و با تأیید «افزودن اعضای گروه»، همهٔ اعضا وارد مرحله می‌شوند. <a href="' . esc_url( home_url( '/features/segmentation/' ) ) . '">بخش‌بندی مشتریان</a> را ببینید.',
				),
				array(
					'q' => 'آمار قیف فروش از کجا می‌آید؟',
					'a' => 'از حرکت واقعی کارت‌ها: هر انتقال و خروج ثبت می‌شود و صفحهٔ تحلیل، نرخ تبدیل هر مرحله، ماتریس گذارش مراحل و تعداد خروج‌ها را می‌سازد. نمونهٔ این تحلیل‌ها را در <a href="' . esc_url( home_url( '/features/analytics/#pipeline' ) ) . '">تحلیل رفتاری</a> ببینید.',
				),
			),
		)
	);
	?>

	<!-- ============ CTA ============ -->
	<?php
	get_template_part(
		'template-parts/cta-section',
		null,
		array(
			'ft_cta_title'           => 'فرصت‌های فروش را از امروز ساماندهی کنید',
			'ft_cta_desc'            => 'در داشبورد «xCRM فروش» اولین فرآیند فروش خود را بسازید، مشتریان را وارد مراحل کنید و پیگیری تیم را با یادآوری‌ها منظم کنید.',
			'ft_cta_primary_url'     => $dash_url,
			'ft_cta_primary_label'   => 'شروع رایگان',
			'ft_cta_secondary_url'   => home_url( '/features/segmentation/' ),
			'ft_cta_secondary_label' => 'ساخت مخاطب با سگمنت',
			'ft_cta_note'            => 'فعال‌سازی حساب با شماره موبایل انجام می‌شود.',
		)
	);
	?>

</main>

<!-- FOOTER -->
<?php get_template_part( 'template-parts/site-footer' ); ?>

<?php wp_footer(); ?>
</body>
</html>
