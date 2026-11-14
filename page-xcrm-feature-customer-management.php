<?php
/**
 * Template Name: Feature — Customer Management
 * Template Post Type: page
 *
 * صفحهٔ جزئیات قابلیت — مدیریت مشتریان / features/customer-management/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_stylesheet_directory() . '/inc/features-data.php';

$home_url   = home_url( '/' );
$features   = home_url( '/features/' );
$canonical  = home_url( '/features/customer-management/' );
$dash_url   = 'https://dashboard.xcrmforosh.com/';

$page_title       = 'مدیریت مشتریان و پروفایل یکپارچه | «xCRM فروش»';
$page_description = 'اطلاعات تماس، رفتار، ویژگی‌های اختصاصی و تاریخچهٔ تعاملات هر مشتری را در یک پروفایل واحد ثبت کنید؛ با ورود CSV، Excel، JSON و API و حل خودکار هویت.';
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
			array('@type'=>'ListItem','position'=>3,'name'=>'مدیریت مشتریان','item'=>esc_url($canonical)),
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
				<span class="ft__breadcrumb-current">مدیریت مشتریان</span>
			</nav>

			<span class="ft__label ft-anim ft-anim--1">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
				مدیریت مشتریان
			</span>

			<h1 class="ft__title ft-anim ft-anim--2">
				هر مشتری، <span class="text-gradient-primary">یک پروفایل کامل</span>
			</h1>

			<p class="ft__hero-desc ft-anim ft-anim--3">
				شماره‌های تماس، ایمیل‌ها، شبکه‌های اجتماعی، دستگاه‌ها و رفتار خرید در یک پروندهٔ واحد جمع می‌شود
				تا تیم فروش، بازاریابی و پشتیبانی با یک تصویر مشترک از مشتری کار کنند.
			</p>

			<div class="ft__hero-actions ft-anim ft-anim--4">
				<a href="<?php echo esc_url( $dash_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
					شروع رایگان
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( $features ); ?>" class="hp__btn hp__btn--ghost" data-magnetic>
					فهرست امکانات
				</a>
			</div>

			<ul class="ft__hero-pills ft-anim ft-anim--5" aria-label="نکات کلیدی">
				<li>چند شماره و ایمیل برای هر مشتری</li>
				<li>ویژگی‌های اختصاصی قابل تعریف</li>
				<li>ورود CSV، Excel، JSON و API</li>
			</ul>
			</div>
			<div class="ft__hero-media">
			<?php get_template_part( 'template-parts/feature-hero-graphic', null, array( 'slug' => 'customer-management' ) ); ?>
			</div>
		</div>
	</section>

	<!-- ============ CAPABILITIES ============ -->
	<section class="ft__section" id="capabilities">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>
					چه چیزی دریافت می‌کنید
				</span>
				<h2 class="ft__section-title">امکانات پروفایل <span class="text-gradient-primary">مشتری</span></h2>
				<p class="ft__section-desc">
					هر بخش از پروندهٔ مشتری برای پاسخ به یک پرسش روزمرهٔ تیم‌های فروش، بازاریابی و پشتیبانی طراحی شده است.
				</p>
			</div>

			<div class="ft__grid ft__grid--caps">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
					</span>
					<h3>پروفایل واحد</h3>
					<p>نام، اطلاعات تماس، ویژگی‌ها، برچسب‌ها و تاریخچهٔ تعاملات هر مشتری در یک صفحه گرد آمده است.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
					</span>
					<h3>چند شماره و ایمیل</h3>
					<p>برای هر مشتری چند شماره تلفن و ایمیل ثبت کنید؛ شماره‌ها وضعیت حضور در تلگرام و واتساپ را نشان می‌دهند.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8"/><path d="M12 17v4"/></svg>
					</span>
					<h3>دستگاه‌ها و تاریخچهٔ IP</h3>
					<p>دستگاه‌ها و نشانی‌های ثبت‌شدهٔ هر مشتری برای شناخت بهتر رفتار او در دسترس است.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="180">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 21v-7"/><path d="M4 10V3"/><path d="M12 21v-9"/><path d="M12 8V3"/><path d="M20 21v-5"/><path d="M20 12V3"/><path d="M1 14h6"/><path d="M9 8h6"/><path d="M17 16h6"/></svg>
					</span>
					<h3>ویژگی‌های اختصاصی</h3>
					<p>فیلدهای دلخواه با انواع و اعتبارسنجی تعریف کنید؛ مقدارهای نامعتبر هنگام ورود داده رد می‌شوند.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="240">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"/><circle cx="7.5" cy="7.5" r=".5" fill="currentColor"/></svg>
					</span>
					<h3>برچسب‌ها</h3>
					<p>مشتریان را با برچسب دسته‌بندی کنید و در فیلترها و گزارش‌ها از آن‌ها استفاده کنید.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="300">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
					</span>
					<h3>خط زمانی تعاملات</h3>
					<p>تاریخچهٔ رویدادها، یادداشت‌ها و فعالیت‌های ثبت‌شدهٔ هر مشتری به‌ترتیب زمانی نمایش داده می‌شود.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="360">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
					</span>
					<h3>جستجو و فیلتر</h3>
					<p>فهرست مشتریان را با فیلترها و جستجو پیدا کنید و آمار کلی را در همان نما ببینید.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="420">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					</span>
					<h3>حل خودکار هویت</h3>
					<p>رویدادهای وب‌سایت و منابع تماس با شناسه‌های ثبت‌شده به پروفایل درست مشتری نگاشت می‌شوند؛ در صورت نبودِ تطابق، مشتری جدید ساخته می‌شود.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ WORKFLOW ============ -->
	<section class="ft__section ft__section--surface" id="workflow">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
					گام به گام
				</span>
				<h2 class="ft__section-title">از ورود اطلاعات تا <span class="text-gradient-primary">فعال‌سازی</span></h2>
				<p class="ft__section-desc">
					پروندهٔ مشتری در چهار گام شکل می‌گیرد و آمادهٔ استفاده در بقیهٔ امکانات می‌شود.
				</p>
			</div>

			<ol class="ft__flow" data-reveal="up">
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۱</span>
					<div class="ft__flow-body">
						<h3>ورود اطلاعات</h3>
						<p>از فهرست‌های CSV، Excel یا JSON استفاده کنید، از طریق API داده بفرستید یا مشتریان را دستی ثبت کنید.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۲</span>
					<div class="ft__flow-body">
						<h3>غنی‌سازی خودکار</h3>
						<p>رویدادهای وب‌سایت (SDK)، تعاملات تلگرام و فعالیت‌های ثبت‌شده به پروفایل مشتری اضافه می‌شوند.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۳</span>
					<div class="ft__flow-body">
						<h3>سازمان‌دهی</h3>
						<p>با ویژگی‌های اختصاصی و برچسب‌ها پرونده‌ها را استاندارد و قابل فیلتر کنید.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۴</span>
					<div class="ft__flow-body">
						<h3>فعال‌سازی</h3>
						<p>مشتریان را وارد سگمنت، پیپلاین فروش یا کمپین اتوماسیون کنید.</p>
					</div>
				</li>
			</ol>
		</div>
	</section>

	<!-- ============ INTERFACE EXAMPLES ============ -->
	<section class="ft__section" id="interface">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8"/><path d="M12 17v4"/></svg>
					نمایی از محصول
				</span>
				<h2 class="ft__section-title">فهرست و پروفایل، <span class="text-gradient-primary">کنار هم</span></h2>
				<p class="ft__section-desc">
					از فهرست فیلترشده به پروفایل کامل مشتری بروید و همهٔ اطلاعات را در همان صفحه ببینید.
				</p>
			</div>

			<div class="ft__mock-grid">
				<!-- List mock -->
				<figure class="ft__mock-wrap" data-reveal="up">
					<div class="ft__mock" aria-hidden="true">
						<div class="ft__mock-bar"><span></span><span></span><span></span></div>
						<div class="ft__mock-body">
							<div class="ft__mock-main ft__mock-main--full">
								<div class="ft__mock-toolbar">
									<span class="ft__mock-search"></span>
									<span class="ft__mock-chip ft__mock-chip--accent"></span>
								</div>
								<div class="ft__mock-rows">
									<span class="ft__mock-row"><i></i><b></b><em></em></span>
									<span class="ft__mock-row"><i></i><b></b><em></em></span>
									<span class="ft__mock-row"><i></i><b></b><em></em></span>
									<span class="ft__mock-row"><i></i><b></b><em></em></span>
									<span class="ft__mock-row"><i></i><b></b><em></em></span>
								</div>
							</div>
						</div>
					</div>
					<figcaption class="ft__mock-caption">فهرست مشتریان با فیلتر و جستجو — نمایش تزئینی</figcaption>
				</figure>

				<!-- Profile mock -->
				<figure class="ft__mock-wrap" data-reveal="up" data-reveal-delay="100">
					<div class="ft__mock" aria-hidden="true">
						<div class="ft__mock-bar"><span></span><span></span><span></span></div>
						<div class="ft__mock-body">
							<div class="ft__mock-main ft__mock-main--full">
								<div class="ft__mock-profile-head">
									<span class="ft__mock-avatar"></span>
									<span class="ft__mock-profile-lines"><b></b><i></i></span>
								</div>
								<div class="ft__mock-tabs">
									<span class="is-active"></span><span></span><span></span><span></span>
								</div>
								<div class="ft__mock-fields">
									<span></span><span></span><span></span><span></span>
								</div>
								<div class="ft__mock-timeline">
									<span></span><span></span><span></span>
								</div>
							</div>
						</div>
					</div>
					<figcaption class="ft__mock-caption">پروفایل مشتری با تب‌های اطلاعات و خط زمانی — نمایش تزئینی</figcaption>
				</figure>
			</div>
		</div>
	</section>

	<!-- ============ IMPORT ============ -->
	<section class="ft__section ft__section--surface" id="import">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="M7 10l5 5 5-5"/><path d="M12 15V3"/></svg>
					ورود دسته‌ای
				</span>
				<h2 class="ft__section-title">اطلاعات قبلی را <span class="text-gradient-primary">وارد کنید</span></h2>
				<p class="ft__section-desc">
					فایل‌ها و منابع داده را با نگاشت فیلدها وارد کنید تا ستون‌های منبع به فیلدهای پروفایل مشتری تبدیل شوند.
				</p>
				<ul class="ft__checklist">
					<li>ساخت گروهی مشتریان با پیگیری وضعیت پردازش</li>
					<li>نگاشت ستون‌های فایل به فیلدهای پروفایل</li>
					<li>اعتبارسنجی ویژگی‌های اختصاصی هنگام ورود</li>
					<li>دریافت از طریق URL API بدون نیاز به فایل</li>
				</ul>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<div class="ft__import-card main-card" aria-hidden="true">
					<div class="ft__import-formats">
						<span class="ft__import-fmt">CSV</span>
						<span class="ft__import-fmt">Excel</span>
						<span class="ft__import-fmt">JSON</span>
						<span class="ft__import-fmt">API URL</span>
					</div>
					<div class="ft__import-map">
						<span class="ft__import-row"><b>name</b><i></i><em>نام</em></span>
						<span class="ft__import-row"><b>mobile</b><i></i><em>شماره موبایل</em></span>
						<span class="ft__import-row"><b>email</b><i></i><em>ایمیل</em></span>
						<span class="ft__import-row"><b>created_at</b><i></i><em>تاریخ عضویت</em></span>
					</div>
					<div class="ft__import-status">
						<span class="ft__import-progress"><i></i></span>
						<span class="ft__import-count">۲۴۰ از ۳۰۰ رکورد</span>
					</div>
				</div>
				<p class="ft__mock-caption">نمایش تزئینی از فرایند نگاشت فیلدها هنگام ورود اطلاعات</p>
			</div>
		</div>
	</section>

	<!-- ============ USE CASES ============ -->
	<section class="ft__section" id="usecases">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
					کاربردها
				</span>
				<h2 class="ft__section-title">پروفایل مشتری <span class="text-gradient-primary">به زبان کسب‌وکار شما</span></h2>
				<p class="ft__section-desc">
					سه مثال واقعی از اینکه پروندهٔ یکپارچه در روزمرگی تیم‌ها چه نقشی دارد.
				</p>
			</div>

			<div class="ft__grid ft__grid--cases">
				<article class="main-card ft__case" data-reveal="up">
					<span class="ft__case-badge">مثال</span>
					<h3>فروشگاه آنلاین</h3>
					<p>سفارش‌ها و رفتار بازدید را در کنار اطلاعات تماس مشتری ببینید و پروندهٔ کاملی از خریداران بسازید.</p>
				</article>

				<article class="main-card ft__case" data-reveal="up" data-reveal-delay="80">
					<span class="ft__case-badge">مثال</span>
					<h3>فروش B2B</h3>
					<p>برای هر شرکت چند مخاطب با شماره‌های مختلف ثبت کنید و تاریخچهٔ پیگیری را در پروفایل نگه دارید.</p>
				</article>

				<article class="main-card ft__case" data-reveal="up" data-reveal-delay="160">
					<span class="ft__case-badge">مثال</span>
					<h3>کسب‌وکار خدماتی</h3>
					<p>درخواست‌ها، یادداشت‌های کارشناسان و تاریخچهٔ ارتباطات هر مشتری را یکجا نگه دارید.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ RELATED ============ -->
	<section class="ft__section ft__section--surface" id="related">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					امکانات مرتبط
				</span>
				<h2 class="ft__section-title">پروفایل مشتری را <span class="text-gradient-primary">به کجا وصل کنید</span></h2>
				<p class="ft__section-desc">
					پروندهٔ مشتری پایهٔ بخش‌بندی، ردیابی رفتار، تحلیل و مدیریت فروش است.
					صفحات تفصیلی این قابلیت‌ها به‌تدریج اضافه می‌شوند؛ برای آشنایی فوری، مسیرهای زیر در دسترس‌اند.
				</p>
			</div>

			<div class="ft__grid ft__grid--cards">
				<?php
				$ft_related_slugs = array( 'website-tracking', 'segmentation', 'analytics', 'sales-pipeline' );
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
				<a href="<?php echo esc_url( home_url( '/for-business/#profiles' ) ); ?>" class="ft__related-link">
					مدیریت مشتریان در مسیر کسب‌وکارها
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/for-marketers/' ) ); ?>" class="ft__related-link">
					تحلیل و بخش‌بندی برای مارکترها
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
			'ft_faq_title' => 'پرسش‌های متداول دربارهٔ مدیریت مشتریان',
			'ft_faq_intro' => 'پاسخ پرسش‌های رایج دربارهٔ ورود اطلاعات، شماره‌های چندگانه، رضایت و حریم خصوصی.',
			'ft_faq_items' => array(
				array(
					'q' => 'فرمت‌های پشتیبانی‌شده برای ورود اطلاعات کدام است؟',
					'a' => 'فایل‌های CSV و Excel، دادهٔ JSON و همچنین دریافت از طریق URL API. هنگام ورود فایل، ستون‌های منبع را به فیلدهای پروفایل مشتری نگاشت می‌کنید.',
				),
				array(
					'q' => 'آیا برای یک مشتری چند شماره یا ایمیل می‌توان ثبت کرد؟',
					'a' => 'بله؛ شماره‌ها و ایمیل‌ها به‌صورت چندتایی برای هر مشتری نگهداری می‌شوند و امکان جستجوی آن‌ها وجود دارد. شماره‌های موبایل وضعیت حضور در تلگرام و واتساپ را نشان می‌دهند.',
				),
				array(
					'q' => 'در مورد حریم خصوصی و رضایت کاربران چه باید کرد؟',
					'a' => 'پرچم‌های رضایت برای کانال‌های ایمیل، پیامک، Push و واتساپ به‌صورت پیش‌فرض غیرفعال ثبت می‌شوند و فعال‌سازی آن‌ها بر عهدهٔ تنظیمات شماست. برای جزئیات بیشتر <a href="' . esc_url( home_url( '/privacy-policy/' ) ) . '">صفحهٔ حریم خصوصی</a> را ببینید.',
				),
				array(
					'q' => 'ویژگی اختصاصی چیست؟',
					'a' => 'فیلدهای دلخواهی مانند «نام فروشگاه» یا «تاریخ عضویت» هستند که با انواع و قواعد اعتبارسنجی خودتان تعریف می‌شوند و هنگام ورود داده کنترل می‌شوند.',
				),
				array(
					'q' => 'داده‌های مشتریان کجا نگهداری می‌شود؟',
					'a' => 'اطلاعات در محیط چندمستأجری «xCRM فروش» و در محدودهٔ شرکت خودتان ذخیره و مدیریت می‌شوند؛ هر درخواست به شرکت متعلق به کاربر محدود است.',
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
			'ft_cta_title'           => 'پروفایل مشتریانتان را همین امروز یکپارچه کنید',
			'ft_cta_desc'            => 'در داشبورد حساب بسازید، اطلاعات موجود را وارد کنید و ببینید هر مشتری چه داستانی دارد.',
			'ft_cta_primary_url'     => $dash_url,
			'ft_cta_primary_label'   => 'شروع رایگان',
			'ft_cta_secondary_url'   => $features,
			'ft_cta_secondary_label' => 'فهرست امکانات',
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
