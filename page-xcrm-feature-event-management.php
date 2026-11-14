<?php
/**
 * Template Name: Feature — Event Management
 * Template Post Type: page
 *
 * صفحهٔ جزئیات قابلیت — مدیریت رویداد و ردیابی رفتار مشتری
 * /features/event-management/
 *
 * مدل‌های EventDefinition/EventPropertyDefinition، انواع ویژگی، کاتالوگ
 * رویدادهای SDK، قراردادها و پیشنهادها از سورس واقعی بازبینی شده‌اند.
 * این صفحه ادعای نسخه‌بندی رویداد، کشف خودکار یا ابزارسازی بدون‌کدنویسی ندارد.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_stylesheet_directory() . '/inc/features-data.php';

$home_url  = home_url( '/' );
$features  = home_url( '/features/' );
$canonical = home_url( '/features/event-management/' );
$dash_url  = 'https://dashboard.xcrmforosh.com/';

$page_title       = 'مدیریت رویداد و ردیابی رفتار مشتری | Event Management در XCRM';
$page_description = 'رویدادهای موردنیاز کسب‌وکارتان را تعریف کنید، ویژگی‌های رویداد را با انواع متن، عدد و تاریخ مدیریت کنید، از رویدادهای آمادهٔ SDK استفاده کنید و با ثبت رویداد وب‌سایت، رفتار کاربران را به تحلیل، بخش‌بندی و اتوماسیون وصل کنید.';
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
			array('@type'=>'ListItem','position'=>3,'name'=>'مدیریت رویداد','item'=>esc_url($canonical)),
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

	<!-- ============ 01 HERO ============ -->
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
				<span class="ft__breadcrumb-current">مدیریت رویداد</span>
			</nav>

			<span class="ft__label ft-anim ft-anim--1">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h10"/></svg>
				Event Tracking &amp; Custom Events
			</span>

			<h1 class="ft__title ft-anim ft-anim--2">
				هر رفتار مهم مشتری را به <span class="text-gradient-primary">یک رویداد قابل اندازه‌گیری</span> تبدیل کنید
			</h1>

			<p class="ft__hero-lead ft-anim ft-anim--3">
				رفتارهای مهم کسب‌وکار خود را تعریف کنید و به داده‌های قابل تحلیل تبدیل کنید.
			</p>
			<p class="ft__hero-desc ft-anim ft-anim--3">
				رویدادهای موردنیاز خود را تعریف کنید، ویژگی‌های مرتبط را مدیریت کنید و تعاملات
				مشتریان را برای تحلیل و اتوماسیون در XCRM ثبت کنید — فراتر از شمارش صرف بازدید صفحه.
			</p>

			<div class="ft__hero-actions ft-anim ft-anim--4">
				<a href="<?php echo esc_url( $dash_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
					تعریف رویدادهای کسب‌وکار را شروع کنید
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/website-tracking/#install' ) ); ?>" class="hp__btn hp__btn--ghost" data-magnetic>
					مشاهده راهنمای توسعه‌دهندگان
				</a>
			</div>

			<ul class="ft__hero-pills ft-anim ft-anim--5" aria-label="نکات کلیدی">
				<li>تعریف رویداد سفارشی با ویژگی‌ها</li>
				<li>کاتالوگ رویدادهای آمادهٔ SDK</li>
				<li>ایجاد یک‌کلیکی از پیشنهادهای صنعت</li>
				<li>وصل به تحلیل، سگمنت و اتوماسیون</li>
			</ul>
			</div>
			<div class="ft__hero-media">
			<?php get_template_part( 'template-parts/feature-hero-graphic', null, array( 'slug' => 'event-management' ) ); ?>

			<div class="ft__hero-visual ft-anim ft-anim--5">
				<div class="ft__evmock">
					<div class="ft__evmock-top">
						<span class="ft__evmock-title">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h10"/></svg>
							مدیریت رویدادها — نام، ویژگی و دسته
						</span>
						<span class="ft__evmock-badge">داده‌های نمونه</span>
					</div>

					<div class="ft__evmock-grid">
						<div class="ft__evmock-list">
							<div class="ft__evrow">
								<code>form_submit</code>
								<span class="ft__evrow-name">ارسال فرم</span>
								<span class="ft__evrow-tags"><span class="ft__evrow-tag">سیستمی SDK</span></span>
								<span class="ft__evrow-type">سیستمی</span>
							</div>
							<div class="ft__evrow">
								<code>request_demo</code>
								<span class="ft__evrow-name">درخواست دمو</span>
								<span class="ft__evrow-tags"><span class="ft__evrow-tag">location: hero</span></span>
								<span class="ft__evrow-type ft__evrow-type--custom">سفارشی</span>
							</div>
							<div class="ft__evrow">
								<code>product_view</code>
								<span class="ft__evrow-name">مشاهده محصول</span>
								<span class="ft__evrow-tags"><span class="ft__evrow-tag">سیستمی SDK</span></span>
								<span class="ft__evrow-type">سیستمی</span>
							</div>
							<div class="ft__evrow">
								<code>course_enrolled</code>
								<span class="ft__evrow-name">ثبت‌نام و خرید دوره آموزشی</span>
								<span class="ft__evrow-tags"><span class="ft__evrow-tag">پیشنهادی</span></span>
								<span class="ft__evrow-type ft__evrow-type--custom">سفارشی</span>
							</div>
						</div>

						<div class="ft__evmock-side">
							<div class="ft__evmock-side-title"><span>آمار رویدادها</span><span>۳۰ روز</span></div>
							<div class="ft__evstat"><span>تعداد کل</span><b>۲۴٬۸۳۱</b></div>
							<div class="ft__evstat"><span>کاربران یکتا</span><b>۳٬۱۰۲</b></div>
							<div class="ft__evstat"><span>اولین رویداد</span><b>۱۴۰۳/۰۸/۱۶</b></div>
							<div class="ft__evstat"><span>آخرین رویداد</span><b>همین الان</b></div>
						</div>
					</div>

					<div class="ft__evmock-foot">
						<span>هر رویداد: <b>کلید انگلیسی</b> + نام نمایشی فارسی + ویژگی‌های ساخت‌یافته</span>
						<span>نمای «پیشنهادی» بر اساس صنعت شرکت</span>
					</div>
				</div>
				<p class="ft__mock-caption">داده‌های نمونه — نمایش تزئینی رابط «تعریف رویدادها» و «آمار رویدادها»</p>
			</div>
			</div>
		</div>
	</section>

	<!-- ============ 02 WHAT IS EVENT TRACKING ============ -->
	<section class="ft__section ft__section--surface" id="basics">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
					ردیابی رفتار کاربران
				</span>
				<h2 class="ft__section-title">رویداد چیست و <span class="text-gradient-primary">چرا به آن نیاز دارید؟</span></h2>
				<p class="ft__section-desc">
					شمارش صفحه فقط می‌گوید کسی سر زده؛ رویداد می‌گوید <strong>چه کار مهمی کرده</strong> —
					و آن را برای تحلیل، بخش‌بندی و اتوماسیون قابل استفاده می‌کند.
				</p>
			</div>

			<div class="ft__grid ft__grid--cards">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
					</span>
					<h3>رویداد چیست؟</h3>
					<p>یک اتفاق مشخص با یک نام کلید و یک نام نمایشی — مثل «ارسال فرم درخواست دمو» یا «تکمیل خرید» — که در لحظهٔ وقوع برای یک مشتری ثبت می‌شود.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 6h16M4 12h10M4 18h7"/><path d="M18 15v6"/><path d="M15 18h6"/></svg>
					</span>
					<h3>ویژگی رویداد چیست؟</h3>
					<p>دادهٔ همراه رویداد با نوع مشخص — مثلاً <code dir="ltr">location=hero</code> با نوع متن، یا قیمت با نوع عدد — که رویداد را قابل فیلتر و قابل گزارش می‌کند.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
					</span>
					<h3>چرا رویداد سفارشی؟</h3>
					<p>هر کسب‌وکاری رفتار منحصر به فرد خودش را دارد: «ثبت‌نام و خرید دوره آموزشی»، «تایید احراز هویت (KYC)»، «شروع پروژه». این‌ها را خودتان تعریف می‌کنید.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="180">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
					</span>
					<h3>چطور به تحلیل و اتوماسیون وصل می‌شود؟</h3>
					<p>هر رویداد ثبت‌شده در تاریخچهٔ مشتری می‌نشیند، در کاشف رویداد تحلیل‌ها فیلتر می‌شود، به شرط سگمنت‌ها و تریگرهای اتوماسیون تبدیل می‌گردد.</p>
				</article>
			</div>

			<div class="ft__note-box" style="margin-top: clamp(22px, 3vw, 30px);" data-reveal="up">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
				<p style="margin: 0;">
					<strong>تفاوت با بازدید صفحه:</strong> بازدید صفحه به‌صورت خودکار ثبت می‌شود، اما
					«ارسال فرم درخواست دمو» یا «مشاهدهٔ پلن قیمت» یک <strong>رویداد کسب‌وکار</strong> است
					که باید تعریف و ثبت شود تا معنا پیدا کند.
				</p>
			</div>
		</div>
	</section>

	<!-- ============ 03 EVENT DEFINITIONS ============ -->
	<section class="ft__section" id="definitions">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 13h6"/><path d="M9 17h4"/></svg>
					تعاریف رویدادها
				</span>
				<h2 class="ft__section-title">هر شرکت، <span class="text-gradient-primary">رویدادهای خودش را تعریف می‌کند</span></h2>
				<p class="ft__section-desc">
					«تعریف رویدادهای قابل ثبت و مشخص‌کردن ویژگی‌های هر رویداد.» — تعاریف رویداد
					در محدودهٔ شرکت شما ساخته می‌شوند و هر کدام کلید، نام نمایشی، توضیحات اختیاری
					و فهرست ویژگی‌های خودش را دارد.
				</p>
			</div>

			<div class="ft__split">
				<div class="ft__split-copy" data-reveal="up">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li><strong>ویزارد چهارمرحله‌ای ساخت:</strong> «منبع» (پیشنهاد یا دستی) ← «هویت» (کلید و نام) ← «ویژگی‌ها» (فیلدهای رویداد) ← «بازبینی» (تأیید و ایجاد)</li>
						<li><strong>کلید رویداد:</strong> فقط حروف کوچک انگلیسی، اعداد و <code dir="ltr">_</code> — «کلید باید با حروف کوچک شروع شود و فقط حروف، اعداد و _ باشد»</li>
						<li><strong>نام نمایشی فارسی</strong> + «توضیحات اختیاری درباره این رویداد...» — نامی که در گزارش‌ها می‌بینید</li>
						<li><strong>نوع تعریف:</strong> برچسب «سیستمی» (از SDK/قالب‌ها) یا «سفارشی» (ساختِ شما) — «تعریف‌های سیستمی قابل ویرایش نیستند»</li>
						<li><strong>جستجو و نماها:</strong> «جستجوی رویدادها...» + نماهای «همه / فعال / پیشنهادی / سیستمی»</li>
						<li><strong>حالت خالی:</strong> «هنوز رویداد تعریف نشده است» — «اولین رویداد خود را ایجاد کنید.»</li>
						<li><strong>حذف امن:</strong> «آیا از حذف "…" اطمینان دارید؟ این عمل قابل بازگشت نیست.»</li>
					</ul>

					<div class="ft__note-box ft__note-box--info" style="margin-top: 18px;">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>آمار زنده:</strong> صفحهٔ «آمار رویدادها» با بازه‌های «۷ روز / ۳۰ روز / ۹۰ روز»
							ستون‌های «نام رویداد، تعداد کل، کاربران یکتا، اولین رویداد، آخرین رویداد» را
							از داده‌های واقعی همان بازه محاسبه می‌کند — شمارندهٔ ذخیره‌شده روی تعریف رویداد نیست.
						</p>
					</div>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<div class="main-card ft__form">
						<div class="ft__form-head">
							<h3>تعریف رویداد جدید</h3>
							<p>مرحله ۲ از ۴ · ویزارد گام‌به‌گام</p>
						</div>
						<div class="ft__form-chips" aria-label="مراحل ویزارد">
							<span class="ft__form-chip">۱ منبع</span>
							<span class="ft__form-chip ft__form-chip--on">۲ هویت</span>
							<span class="ft__form-chip">۳ ویژگی‌ها</span>
							<span class="ft__form-chip">۴ بازبینی</span>
						</div>
						<div class="ft__form-grid">
							<div class="ft__field">
								<span class="ft__field-label">کلید (فقط حروف کوچک انگلیسی، اعداد و _)</span>
								<span class="ft__field-val ft__field-val--ltr">user_signup</span>
							</div>
							<div class="ft__field">
								<span class="ft__field-label">نام نمایشی</span>
								<span class="ft__field-val">ثبت‌نام کاربر</span>
							</div>
							<div class="ft__field ft__field--full">
								<span class="ft__field-label">توضیحات</span>
								<span class="ft__field-val ft__field-val--muted">توضیحات اختیاری درباره این رویداد...</span>
							</div>
						</div>
						<div class="ft__form-foot">
							<p class="ft__form-note">خطای اعتبارسنجی واقعی: «کلید باید با حروف کوچک شروع شود و فقط حروف، اعداد و _ باشد».</p>
							<div class="ft__form-btns">
								<span class="ft__form-btn ft__form-btn--ghost">قبلی</span>
								<span class="ft__form-btn">بعدی</span>
							</div>
						</div>
					</div>

					<figure class="ft__mock-wrap" style="margin: 0;">
						<div class="ft__xtbl-wrap">
							<table class="ft__xtbl">
								<thead>
									<tr>
										<th scope="col">نام رویداد</th>
										<th scope="col">تعداد کل</th>
										<th scope="col">کاربران یکتا</th>
										<th scope="col">آخرین رویداد</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><strong>خرید</strong><span class="ft__xtbl-err" style="color: var(--x-text-muted);">purchase</span></td>
										<td>۱٬۲۴۸</td>
										<td>۸۹۳</td>
										<td>همین الان</td>
									</tr>
									<tr>
										<td><strong>ارسال فرم</strong><span class="ft__xtbl-err" style="color: var(--x-text-muted);">form_submit</span></td>
										<td>۳٬۵۱۷</td>
										<td>۲٬۱۰۶</td>
										<td>۱۲ دقیقه پیش</td>
									</tr>
									<tr>
										<td><strong>درخواست دمو</strong><span class="ft__xtbl-err" style="color: var(--x-text-muted);">request_demo</span></td>
										<td>۲۱۴</td>
										<td>۱۹۸</td>
										<td>۲ ساعت پیش</td>
									</tr>
								</tbody>
							</table>
						</div>
						<figcaption class="ft__mock-caption">داده‌های نمونه — «آمار رویدادها» با بازهٔ ۳۰ روز</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ 04 CUSTOM EVENT PROPERTIES ============ -->
	<section class="ft__section ft__section--surface" id="properties">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
					ویژگی‌های رویداد
				</span>
				<h2 class="ft__section-title">دادهٔ ساخت‌یافتهٔ <span class="text-gradient-primary">همراه هر رویداد</span></h2>
				<p class="ft__section-desc">
					هر ویژگی یک فیلد تعریف‌شده با کلید و نوع مشخص است؛ پنج نوع پشتیبانی‌شده در
					ویرایشگر ویژگی وجود دارد و هر ویژگی چهار پرچم «الزامی، فیلتر، گزارش، ایندکس» دارد.
				</p>
			</div>

			<div class="ft__split">
				<div class="ft__split-copy" data-reveal="up">
					<div class="ft__xtbl-wrap">
						<table class="ft__xtbl">
							<thead>
								<tr>
									<th scope="col">کلید ویژگی</th>
									<th scope="col">نوع</th>
									<th scope="col">الزامی</th>
									<th scope="col">فیلتر</th>
									<th scope="col">گزارش</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><span class="ft__xtbl-code">coupon_code</span></td>
									<td>متن</td>
									<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
									<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
									<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
								</tr>
								<tr>
									<td><span class="ft__xtbl-code">quantity</span></td>
									<td>عدد صحیح</td>
									<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
									<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
									<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
								</tr>
								<tr>
									<td><span class="ft__xtbl-code">discount</span></td>
									<td>عدد اعشاری</td>
									<td><span class="ft__perm-no" aria-label="ندارد">—</span></td>
									<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
									<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
								</tr>
								<tr>
									<td><span class="ft__xtbl-code">is_gift</span></td>
									<td>بله/خیر</td>
									<td><span class="ft__perm-no" aria-label="ندارد">—</span></td>
									<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
									<td><span class="ft__perm-no" aria-label="ندارد">—</span></td>
								</tr>
								<tr>
									<td><span class="ft__xtbl-code">delivery_date</span></td>
									<td>تاریخ و زمان</td>
									<td><span class="ft__perm-no" aria-label="ندارد">—</span></td>
									<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
									<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<p class="ft__mock-caption">داده‌های نمونه — پنج نوع پشتیبانی‌شده: متن، عدد صحیح، عدد اعشاری، بله/خیر، تاریخ و زمان</p>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li><strong>نام‌گذاری:</strong> کلید ویژگی مثل کلید رویداد — «فقط حروف کوچک، اعداد و _ مجاز است»</li>
						<li><strong>جلوگیری از تکرار:</strong> «کلید ویژگی تکراری است» هنگام ساخت اعتبارسنجی می‌شود</li>
						<li><strong>الزامی:</strong> برای ویژگی‌های الزامی، هنگام ثبت رویداد مقدار لازم است</li>
						<li><strong>پرچم‌ها:</strong> «الزامی»، «فیلتر»، «گزارش» و «ایندکس» برای هر ویژگی قابل تنظیم‌اند — در ویرایشگر با دکمهٔ «افزودن ویژگی»، «حذف ویژگی» و شمارنده‌های «{n} ویژگی» و «{n} معتبر»</li>
						<li><strong>کاربرد:</strong> ویژگی‌های ساخت‌یافته پایهٔ «شرط‌های پراپرتی رویداد ورودی» در تریگرهای اتوماسیون و شروط رویدادی سگمنت‌ها می‌شوند</li>
					</ul>

					<div class="ft__note-box" style="margin-top: 18px;">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
						<p style="margin: 0;">
							<strong>دو مسیر اعتبارسنجی جداگانه:</strong> «ویژگی‌های رویداد» به تعریف همان رویداد
							وابسته‌اند و هنگام ثبت رویداد بررسی می‌شوند؛ «ویژگی‌های مشتری» (مثل کد پروژه یا سطح هنرجو)
							مدل و اعتبارسنجی مجزای خودشان را دارند و این دو قابل تعویض نیستند.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ 05 BUILT-IN SDK EVENTS ============ -->
	<section class="ft__section" id="catalog">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
					کاتالوگ رویدادهای SDK
				</span>
				<h2 class="ft__section-title">رویدادهای پیش‌فرض، <span class="text-gradient-primary">آماده از لحظهٔ نصب</span></h2>
				<p class="ft__section-desc">
					با نصب SDK مرورگر، این رویدادها بدون هیچ کد اضافه‌ای ثبت می‌شوند — و با
					رویدادهای سفارشیِ خودتان ترکیب می‌شوند.
				</p>
			</div>

			<div class="ft__evgroups" data-reveal="up">
				<div class="ft__evgroup">
					<div class="ft__evgroup-title">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18"/></svg>
						صفحه و جلسه
						<small>PAGE &amp; SESSION</small>
					</div>
					<ul class="ft__events">
						<li class="ft__ev"><code>page_view</code><span>بازدید صفحه</span></li>
						<li class="ft__ev"><code>session_start</code><span>شروع جلسه</span></li>
					</ul>
				</div>

				<div class="ft__evgroup">
					<div class="ft__evgroup-title">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
						فروشگاه الکترونیک
						<small>E-COMMERCE</small>
					</div>
					<ul class="ft__events">
						<li class="ft__ev"><code>product_view</code><span>مشاهده محصول</span></li>
						<li class="ft__ev"><code>add_to_cart</code><span>افزودن به سبد</span></li>
						<li class="ft__ev"><code>remove_from_cart</code><span>حذف از سبد</span></li>
					</ul>
				</div>

				<div class="ft__evgroup">
					<div class="ft__evgroup-title">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M15 3h6v6"/><path d="M9 21H3v-6"/><path d="M21 3l-7 7"/><path d="M3 21l7-7"/></svg>
						تعاملات کاربر
						<small>USER INTERACTIONS</small>
					</div>
					<ul class="ft__events">
						<li class="ft__ev"><code>click</code><span>کلیک</span></li>
						<li class="ft__ev"><code>form_submit</code><span>ارسال فرم</span></li>
						<li class="ft__ev"><code>copy</code><span>کپی متن</span></li>
						<li class="ft__ev"><code>outbound</code><span>لینک خروجی</span></li>
					</ul>
				</div>

				<div class="ft__evgroup">
					<div class="ft__evgroup-title">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
						جستجو و محتوا
						<small>SEARCH &amp; CONTENT</small>
					</div>
					<ul class="ft__events">
						<li class="ft__ev"><code>search</code><span>جستجو</span></li>
						<li class="ft__ev"><code>download</code><span>دانلود</span></li>
						<li class="ft__ev"><code>video_play</code><span>پخش ویدیو</span></li>
						<li class="ft__ev"><code>share</code><span>اشتراک‌گذاری</span></li>
					</ul>
				</div>

				<div class="ft__evgroup">
					<div class="ft__evgroup-title">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 8v4"/><path d="M12 16h.01"/></svg>
						رویدادهای سیستمی
						<small>SYSTEM</small>
					</div>
					<ul class="ft__events">
						<li class="ft__ev"><code>error</code><span>خطای صفحه</span></li>
					</ul>
				</div>
			</div>

			<div class="ft__split" style="margin-top: clamp(28px, 4vw, 40px);">
				<div class="ft__split-copy" data-reveal="up">
					<h3 style="font-size: clamp(1.05rem, 2.2vw, 1.3rem); font-weight: 900; color: var(--x-text); margin: 0 0 14px;">پیش‌فرض در برابر سفارشی</h3>
					<ul class="ft__checklist" style="margin-top: 0;">
						<li><strong>رویدادهای پیش‌فرض SDK:</strong> توسط خودِ اسکریپت و به‌صورت خودکار ثبت می‌شوند؛ با نصب SDK در دسترس‌اند و برچسب «سیستمی» دارند (قابل ویرایش/حذف نیستند)</li>
						<li><strong>لینک خروجی (<code dir="ltr">outbound</code>):</strong> ردیابی خودکار خروج کاربر از سایت — به‌عنوان نوع تعامل، نه یک قرارداد رویدادِ جدا</li>
						<li><strong>رویدادهای سفارشی:</strong> با نام دلخواه خودتان و با ویژگی‌های اختصاصی تعریف و ثبت می‌شوند — برچسب «سفارشی» می‌گیرند</li>
						<li><strong>رویدادهای سمت سرور:</strong> علاوه بر SDK، رویدادهای سیستمی قراردادی مثل <code dir="ltr">purchase</code> (خرید) هم از پیش تعریف شده‌اند و پایهٔ گزارش درآمدند</li>
					</ul>
				</div>
				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<div class="ft__note-box ft__note-box--info">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg>
						<p style="margin: 0;">
							<strong>قرارداد رویدادها:</strong> هر رویداد سیستمی یک مشخصات‌نامهٔ قراردادی دارد
							(نام، نام نمایشی فارسی، توضیحات و فهرست ویژگی‌ها با نوع و پرچم‌هایش) که ساختار
							تعریف‌های سیستمی را مشخص می‌کند — نه یک فرایند نسخه‌بندی.
						</p>
					</div>
					<div class="ft__note-box" style="margin-top: 14px;">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							هر دو نوع در یک فهرست «تعریف رویدادها» کنار هم دیده می‌شوند و آمار مشترکی
							از همان بازهٔ زمانی دارند.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ 06 CUSTOM TRACKING WITH SDK ============ -->
	<section class="ft__section ft__section--surface" id="custom">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m16 18 6-6-6-6"/><path d="m8 6-6 6 6 6"/></svg>
					ثبت سفارشی با SDK
				</span>
				<h2 class="ft__section-title">دو روش <span class="text-gradient-primary">ثبت رویداد سفارشی</span></h2>
				<p class="ft__section-desc">
					با فراخوانی مستقیم متدهای SDK، یا فقط با یک ویژگی HTML روی هر عنصر —
					هر دو روش در نسخهٔ فعلی SDK موجود و قابل استفاده‌اند.
				</p>
				<ul class="ft__checklist">
					<li><strong>روش JS:</strong> <code dir="ltr">xcrm.event(نام، { ویژگی‌ها })</code> — نام رویداد سفارشی + شیء ویژگی‌ها در همان لحظه</li>
					<li><strong>روش توصیفی (HTML):</strong> ویژگی <code dir="ltr">data-xcrm-event</code> روی عنصر — با کلیک، رویداد با همان نام ثبت می‌شود</li>
					<li><strong>ویژگی‌های توصیفی:</strong> هر <code dir="ltr">data-xcrm-prop-*</code> به‌صورت خودکار به خواص رویداد تبدیل می‌شود — مثلاً <code dir="ltr">data-xcrm-prop-location="hero"</code></li>
					<li><strong>صفحات تک‌صفحه‌ای (SPA):</strong> تغییر مسیر با هوک‌های history پیگیری می‌شود و بازدید صفحهٔ جدید هم ثبت می‌شود</li>
					<li><strong>غنی‌سازی خودکار:</strong> هر رویداد با جلسه، دستگاه، UTM و (پس از شناسایی) شناسهٔ مشتری همراه می‌شود</li>
					<li><strong>ارسال دسته‌ای:</strong> رویدادها در پس‌زمینه جمع و ارسال می‌شوند تا تعامل کاربر مسدود نشود</li>
				</ul>

				<div class="ft__note-box" style="margin-top: 18px;">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 13h6"/><path d="M9 17h4"/></svg>
					<p style="margin: 0;">
						<strong>ترتیب کار:</strong> اول رویداد را در «تعاریف رویدادها» تعریف کنید (کلید + ویژگی‌ها)،
						بعد با یکی از دو روش بالا ثبتش کنید — این‌طوری نام‌ها یکپارچه و ویژگی‌ها ساخت‌یافته می‌مانند.
					</p>
				</div>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<figure class="ft__code-wrap">
					<div class="ft__code" dir="ltr"><pre><code><span class="c-cmt">&lt;!-- روش توصیفی — بدون فراخوانی JS --&gt;</span>
<span class="c-tag">&lt;button</span>
  <span class="c-attr">data-xcrm-event</span>=<span class="c-str">"request_demo"</span>
  <span class="c-attr">data-xcrm-prop-location</span>=<span class="c-str">"hero"</span><span class="c-tag">&gt;</span>
  درخواست دمو
<span class="c-tag">&lt;/button&gt;</span></code></pre></div>
					<figcaption class="ft__code-cap">ویژگی‌های <code dir="ltr">data-xcrm-prop-*</code> به‌صورت خودکار به خواص رویداد تبدیل می‌شوند.</figcaption>
				</figure>

				<figure class="ft__code-wrap" style="margin-top: 16px;">
					<div class="ft__code" dir="ltr"><pre><code><span class="c-cmt">// روش JS — ثبت مستقیم با خواص</span>
<span class="c-fn">xcrm.event</span>(<span class="c-str">"request_demo"</span>, { location: <span class="c-str">"hero"</span> });</code></pre></div>
					<figcaption class="ft__code-cap">نام رویداد سفارشی حداکثر ۱۰۰ کاراکتر است و همراه خواصش ثبت می‌شود.</figcaption>
				</figure>

				<figure class="ft__code-wrap" style="margin-top: 16px;">
					<div class="ft__code" dir="ltr"><pre><code><span class="c-cmt">&lt;!-- مرجع نصب — کد دقیق را از داشبورد کپی کنید --&gt;</span>
<span class="c-tag">&lt;script</span> <span class="c-attr">id</span>=<span class="c-str">"xcrm-js"</span>
        <span class="c-attr">src</span>=<span class="c-str">"YOUR_XCRM_SDK_URL"</span>
        <span class="c-attr">cpid</span>=<span class="c-str">"YOUR_COMPANY_ID"</span>
        <span class="c-attr">defer</span><span class="c-tag">&gt;&lt;/script&gt;</span></code></pre></div>
					<figcaption class="ft__code-cap">حداقل پیکربندی نصب؛ راهنمای کامل در صفحهٔ <a href="<?php echo esc_url( home_url( '/features/website-tracking/#install' ) ); ?>">ردیابی وب‌سایت</a>.</figcaption>
				</figure>
			</div>
		</div>
	</section>

	<!-- ============ 07 EVENT DATA FLOW ============ -->
	<section class="ft__section" id="flow">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					جریان دادهٔ رویداد
				</span>
				<h2 class="ft__section-title">از کلیک کاربر تا <span class="text-gradient-primary">گزارش و اتوماسیون</span></h2>
				<p class="ft__section-desc">
					مسیر رویداد ساده و پیوسته است — پنج مرحله از تعامل در سایت تا لحظه‌ای
					که داده در تحلیل‌ها و گردش‌کارهای مشتری قابل استفاده می‌شود.
				</p>
			</div>

			<ol class="ft__flow" data-reveal="up" aria-label="مراحل جریان داده رویداد">
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۱</span>
					<div class="ft__flow-body">
						<h3>تعامل در وب‌سایت یا اپلیکیشن</h3>
						<p>کاربر صفحه‌ای را می‌بیند، فرمی را می‌فرستد یا محصولی را به سبد اضافه می‌کند — همان لحظهٔ وقوع یک رویداد بالقوه است.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۲</span>
					<div class="ft__flow-body">
						<h3>SDK رویداد را ثبت می‌کند</h3>
						<p>اسکریپت مرورگر رویداد (پیش‌فرض یا سفارشی) را با ویژگی‌هایش شناسایی و به همراه جلسه، دستگاه و UTM بسته‌بندی می‌کند.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۳</span>
					<div class="ft__flow-body">
						<h3>بار رویداد ارسال می‌شود</h3>
						<p>رویدادها به‌صورت دسته‌ای و در پس‌زمینه به سرویس پذیرش رویداد XCRM فرستاده می‌شوند تا تعامل کاربر کند نشود.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۴</span>
					<div class="ft__flow-body">
						<h3>XCRM دادهٔ رویداد را پردازش می‌کند</h3>
						<p>هویت مشتری تطبیق داده می‌شود، ویژگی‌های تعریف‌شده از نظر نوع و الزام بررسی می‌شوند و رویداد با غنی‌سازی‌هایش آماده می‌شود.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۵</span>
					<div class="ft__flow-body">
						<h3>در تحلیل و گردش‌کارهای مشتری در دسترس است</h3>
						<p>رویداد در تاریخچهٔ مشتری، آمار رویدادها، کاشف رویداد، شروط سگمنت و تریگرهای اتوماسیون استفاده می‌شود.</p>
					</div>
				</li>
			</ol>

			<div class="ft__note-box" style="margin-top: clamp(22px, 3vw, 30px);" data-reveal="up">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
				<p style="margin: 0;">
					<strong>نکتهٔ فنی برای تیم‌های توسعه:</strong> در زیرساخت، پذیرش عمومی رویداد →
					صف پیام (Kafka) → خط لولهٔ پردازش رویداد (تطبیق هویت + اعتبارسنجی) → انبار تحلیل (ClickHouse)
					انجام می‌شود؛ سپس همان رویداد برای رویدادهای CRM، تریگرهای کمپین و ارزیابی سگمنت‌های شرط‌رویدادی
					هم استفاده می‌شود. این جزئیات زیرساختی صرفاً شفافیت است — برای استفاده نیازی به دانستنش نیست.
				</p>
			</div>
		</div>
	</section>

	<!-- ============ 08 EVENT SUGGESTIONS ============ -->
	<section class="ft__section ft__section--surface" id="suggestions">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m12.83 2.18 9.17 3.9a1 1 0 0 1 0 1.84l-9.17 3.9a2 2 0 0 1-1.66 0L2 7.92a1 1 0 0 1 0-1.84L11.17 2a2 2 0 0 1 1.66 0z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>
					پیشنهادهای رویداد
				</span>
				<h2 class="ft__section-title">با قالب‌های صنعتی <span class="text-gradient-primary">از صفر شروع نکنید</span></h2>
				<p class="ft__section-desc">
					«روی یک پیشنهاد بزنید تا رویداد جدید ساخته شود» — پیشنهادهای سمت سرور بر اساس
					دسته‌بندی صنعت شرکت نمایش داده می‌شوند و با یک کلیک تعریف می‌شوند.
				</p>
			</div>

			<div class="ft__grid ft__grid--cases">
				<article class="main-card ft__tcard" data-reveal="up">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat">رویداد</span>
						<span class="ft__tcard-star"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m12 3 2.7 5.5 6 .9-4.3 4.2 1 6-5.4-2.8L6.6 19.6l1-6L3.3 9.4l6-.9Z"/></svg>پیشنهاد</span>
					</div>
					<h3 class="ft__tcard-name">ثبت بازخورد — ملزومات کشاورزی</h3>
					<p class="ft__tcard-purpose">قالب رویداد برای ثبت بازخورد مشتریان در حوزهٔ کشاورزی — نام نمایشی با پسوند زیردسته تا در گزارش‌ها قابل تفکیک باشد.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> دسته‌بندی کشاورزی — زیردستهٔ ملزومات کشاورزی.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">ساختار</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">سفارشی</span>
						<span class="ft__tcard-btn">ایجاد رویداد از پیشنهاد</span>
					</div>
				</article>

				<article class="main-card ft__tcard" data-reveal="up" data-reveal-delay="60">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat">رویداد</span>
						<span class="ft__tcard-star"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m12 3 2.7 5.5 6 .9-4.3 4.2 1 6-5.4-2.8L6.6 19.6l1-6L3.3 9.4l6-.9Z"/></svg>پیشنهاد</span>
					</div>
					<h3 class="ft__tcard-name">رزرو نوبت — کلینیک</h3>
					<p class="ft__tcard-purpose">قالب رویداد برای رزرو نوبت در کلینیک‌ها — پایهٔ یادآوری‌ها و گزارش نوبت‌ها.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> دسته‌بندی سلامت — زیردستهٔ کلینیک.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">ساختار</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">سفارشی</span>
						<span class="ft__tcard-btn">ایجاد رویداد از پیشنهاد</span>
					</div>
				</article>

				<article class="main-card ft__tcard" data-reveal="up" data-reveal-delay="120">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat">رویداد</span>
						<span class="ft__tcard-star"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m12 3 2.7 5.5 6 .9-4.3 4.2 1 6-5.4-2.8L6.6 19.6l1-6L3.3 9.4l6-.9Z"/></svg>پیشنهاد</span>
					</div>
					<h3 class="ft__tcard-name">سبد خرید رها شده — مارکت‌پلیس</h3>
					<p class="ft__tcard-purpose">قالب رویداد رهاکردن سبد در مارکت‌پلیس‌ها — پایهٔ تحلیل ترک و سناریوهای پیگیری.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> دسته‌بندی فروشگاه‌های چندفروشنده‌ای.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">ساختار</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">سفارشی</span>
						<span class="ft__tcard-btn">ایجاد رویداد از پیشنهاد</span>
					</div>
				</article>

				<article class="main-card ft__tcard" data-reveal="up" data-reveal-delay="180">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat">رویداد</span>
						<span class="ft__tcard-star"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m12 3 2.7 5.5 6 .9-4.3 4.2 1 6-5.4-2.8L6.6 19.6l1-6L3.3 9.4l6-.9Z"/></svg>پیشنهاد</span>
					</div>
					<h3 class="ft__tcard-name">آغاز دوره آزمایشی رایگان (Free Trial)</h3>
					<p class="ft__tcard-purpose">قالب رویداد شروع نسخهٔ آزمایشی برای محصولات نرم‌افزاری — پایهٔ تبدیل دورهٔ آزمایشی.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> دسته‌بندی ابزارهای B2B نرم‌افزاری.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">ساختار</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">سفارشی</span>
						<span class="ft__tcard-btn">ایجاد رویداد از پیشنهاد</span>
					</div>
				</article>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">نام‌های واقعی پیشنهادها — نمایش هر پیشنهاد به دسته‌بندی صنعت شرکت شما بستگی دارد؛ این صفحه ادعای دسترسی همه‌جانبه ندارد.</p>

			<div class="ft__split" style="margin-top: clamp(28px, 4vw, 40px);">
				<div class="ft__split-copy" data-reveal="up">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li><strong>ایجاد یک‌کلیکی:</strong> «ایجاد رویداد از پیشنهاد» ← «رویداد از پیشنهاد با موفقیت ایجاد شد» — یا «سفارشی» برای ویرایش قبل از ساخت</li>
						<li><strong>درون ویزارد هم هست:</strong> مرحلهٔ «منبع» با «یا از پیشنهادهای ما استفاده کنید» و «{n} قالب آماده متناسب با دسته‌بندی شرکت شما، که می‌توانید از پایین انتخاب کنید»</li>
						<li><strong>تکرار امن:</strong> «این رویداد از قبل وجود دارد» — پیشنهاد تکراری رکورد جدید نمی‌سازد</li>
						<li><strong>ستون‌های جدول پیشنهادها:</strong> «کد پیشنهاد»، «نام نمایشی»، «توضیحات»، «ویژگی‌ها»، «دسته‌بندی»</li>
						<li><strong>نشان:</strong> برچسب «پیشنهاد» + وضعیت «ایجاد شده» پس از استفاده</li>
					</ul>
				</div>
				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<div class="ft__note-box ft__note-box--info">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>دسترسی فقط بر اساس صنعت:</strong> پیشنهادهای رویداد بر اساس دسته‌بندی
							شرکت فیلتر می‌شوند (پیشنهاد عمومی برای رویدادها تعریف نشده است). اگر دسته‌بندی
							تنظیم نشده باشد: «دسته‌بندی شرکت تنظیم نشده است؛ فقط پیشنهادهای ویژه نمایش داده
							می‌شوند. می‌توانید رویداد را دستی بسازید.»
						</p>
					</div>
					<div class="ft__note-box" style="margin-top: 14px;">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							هیچ پیشنهادی نبود: «پیشنهاد مناسبی یافت نشد.» — همیشه می‌توانید رویداد را
							دستی بسازید؛ خطای دریافت هم با «خطا در دریافت پیشنهادها» و تلاش مجدد اعلام می‌شود.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ 09 FROM EVENTS TO BUSINESS ACTIONS ============ -->
	<section class="ft__section" id="actions">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					از رویداد تا اقدام
				</span>
				<h2 class="ft__section-title">رویداد، <span class="text-gradient-primary">زنجیرهٔ کل اکوسیستم</span> است</h2>
				<p class="ft__section-desc">
					یک رویداد ثبت‌شده فقط یک ردیف داده نیست — ورودی پروفایل مشتری، سگمنت‌های رفتاری،
					گزارش‌های تحلیلی و تریگرهای اتوماسیون است.
				</p>
			</div>

			<div class="ft__arch" data-reveal="up" aria-label="زنجیره از جمع‌آوری رویداد تا اتوماسیون تریگرشده">
				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۱</span>
					<span class="ft__arch-icon" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h10"/></svg>
					</span>
					<h3>جمع‌آوری رویداد</h3>
					<p>رویدادهای پیش‌فرض و سفارشی در لحظهٔ وقوع با ویژگی‌هایشان ثبت می‌شوند.</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۲</span>
					<span class="ft__arch-icon ft__arch-icon--info" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
					</span>
					<h3>پروفایل مشتری</h3>
					<p>رویدادها در تاریخچهٔ مشتریِ تطبیق‌یافته می‌نشینند و خط زمانی رفتارش را می‌سازند.</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۳</span>
					<span class="ft__arch-icon ft__arch-icon--success" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/></svg>
					</span>
					<h3>بخش‌بندی مشتریان</h3>
					<p>شروط رویدادی (تعداد، بازهٔ زمانی، پراپرتی) گروه‌های رفتاری می‌سازند.</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۴</span>
					<span class="ft__arch-icon ft__arch-icon--warn" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
					</span>
					<h3>تحلیل رفتاری</h3>
					<p>کاشف رویداد با فیلترهای چندرویدادی، آمار رویدادها و گزارش‌ها را می‌سازد.</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۵</span>
					<span class="ft__arch-icon ft__arch-icon--end" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
					</span>
					<h3>اتوماسیون تریگرشده</h3>
					<p>رویداد ورودی، تریگر «فوری/تأخیردار/غیابی» را با شرط‌های پراپرتی فعال می‌کند.</p>
				</div>
			</div>

			<div class="ft__grid ft__grid--cases" style="margin-top: clamp(28px, 4vw, 40px);">
				<article class="main-card ft__scen" data-reveal="up">
					<span class="ft__case-badge">مشاهده محصول</span>
					<h3>محصولی دیده شد، هنوز نخریده</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">تحلیل</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">محبوب‌ترین محصولات را با «تعداد کل» و «کاربران یکتا»ی رویداد <code dir="ltr">product_view</code> بسنجید.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">سگمنت و اتوماسیون</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">گروه بازدیدکنندگان محصول + تریگر «تأخیردار» برای یادآوری با پیشنهاد مشابه.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="60">
					<span class="ft__case-badge">سبد رهاشده</span>
					<h3>به سبد زد، خرید نکرد</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">تحلیل</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">مقایسهٔ <code dir="ltr">add_to_cart</code> با <code dir="ltr">purchase</code> برای دیدن میزان ترک در هر بازه.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">سگمنت و اتوماسیون</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">شروط رویدادی سگمنت + تریگر «در صورت عدم وقوع» خرید تا ۳ روز پس از افزودن به سبد.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="120">
					<span class="ft__case-badge">ارسال فرم</span>
					<h3>فرمی ارسال شد</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">تحلیل</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">نرخ ارسال فرم هر صفحه را با فیلتر ویژگی‌هایی مثل <code dir="ltr">location</code> ببینید.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">سگمنت و اتوماسیون</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">گروه سرنخ‌های تازه + تریگر «فوری» برای پیام خوش‌آمدگویی بلافاصله پس از فرم.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="180">
					<span class="ft__case-badge">تکمیل خرید</span>
					<h3>خریدی انجام شد</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">تحلیل</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">رویداد <code dir="ltr">purchase</code> پایهٔ گزارش درآمد و خریدها در هر کانال ورودی است.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">سگمنت و اتوماسیون</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">گروه خریداران برای پیگیری پس از خرید + تریگر «تأخیردار» برای درخواست بازخورد.</p>
					</div>
				</article>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">مثال‌های تصویری — ترکیب رویدادها، سگمنت‌ها و تریگرها را متناسب با داده‌های خودتان می‌سازید.</p>
		</div>
	</section>

	<!-- ============ 10 RELATED FEATURES ============ -->
	<section class="ft__section ft__section--surface" id="related">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					قابلیت‌های مرتبط
				</span>
				<h2 class="ft__section-title">رویدادها را <span class="text-gradient-primary">کامل ببینید</span></h2>
				<p class="ft__section-desc">
					مدیریت رویداد نقطهٔ وسط مسیر داده است: از جمع‌آوری تا پروفایل، تحلیل و اقدام.
				</p>
			</div>

			<div class="ft__related-links" data-reveal="up">
				<a href="<?php echo esc_url( home_url( '/features/website-tracking/' ) ); ?>" class="ft__related-link">
					ردیابی وب‌سایت و SDK مرورگر
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/identity-resolution/' ) ); ?>" class="ft__related-link">
					شناسایی هویت مشتریان
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/customer-management/' ) ); ?>" class="ft__related-link">
					مدیریت مشتریان و پروفایل یکپارچه
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/analytics/' ) ); ?>" class="ft__related-link">
					تحلیل رفتاری و گزارش‌گیری
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/segmentation/' ) ); ?>" class="ft__related-link">
					بخش‌بندی مشتریان
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/automation/' ) ); ?>" class="ft__related-link">
					اتوماسیون بازاریابی و تریگرها
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/revenue-attribution/' ) ); ?>" class="ft__related-link">
					تحلیل منابع درآمد و بازاریابی
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
			'q' => 'ردیابی رویداد (Event Tracking) چیست؟',
			'a' => 'ثبت اتفاقات مهم کسب‌وکار در لحظهٔ وقوع برای یک کاربر یا مشتری — مثل «ارسال فرم» یا «تکمیل خرید» — به‌صورتی که بعداً قابل تحلیل، قابل فیلتر و قابل استفاده در اتوماسیون باشد. برخلاف شمارش صرف بازدید صفحه، رویداد <strong>معنای رفتار</strong> را ثبت می‌کند.',
		),
		array(
			'q' => 'رویداد سفارشی (Custom Event) چیست؟',
			'a' => 'رویدادی است که <strong>خودتان تعریف می‌کنید</strong>: یک کلید انگلیسی (مثل <code dir="ltr">request_demo</code>)، یک نام نمایشی فارسی (مثل «درخواست دمو») و فهرست ویژگی‌هایش. مثال‌های واقعی از پیشنهادها: «ثبت‌نام و خرید دوره آموزشی»، «تایید احراز هویت (KYC)»، «سبد خرید رها شده — مارکت‌پلیس». ثبتش با <code dir="ltr">xcrm.event()</code> یا ویژگی توصیفی <code dir="ltr">data-xcrm-event</code> انجام می‌شود.',
		),
		array(
			'q' => 'ویژگی رویداد (Event Property) چیست؟',
			'a' => 'دادهٔ ساخت‌یافتهٔ همراه رویداد، با کلید و <strong>نوع مشخص</strong>. پنج نوع پشتیبانی‌شده: «متن»، «عدد صحیح»، «عدد اعشاری»، «بله/خیر» و «تاریخ و زمان». هر ویژگی پرچم‌های «الزامی»، «فیلتر»، «گزارش» و «ایندکس» دارد و کلیدش فقط با حروف کوچک انگلیسی، اعداد و _ ساخته می‌شود. ویژگی‌های تعریف‌شده هنگام ثبت رویداد از نظر نوع و الزام بررسی می‌شوند.',
		),
		array(
			'q' => 'چطور در XCRM رویداد تعریف کنم؟',
			'a' => 'در «تعاریف رویدادها»، با ویزارد چهارمرحله‌ای: «منبع» (پیشنهاد یا دستی) ← «هویت» (کلید + نام نمایشی + توضیحات اختیاری) ← «ویژگی‌ها» (فیلدهای رویداد) ← «بازبینی». یا از همان‌جا با «افزودن رویداد» شروع کنید. تعریف‌های «سیستمی» قابل ویرایش نیستند ولی «سفارشی»ها را کامل کنترل می‌کنید.',
		),
		array(
			'q' => 'کدام رویدادهای پیش‌فرض SDK موجودند؟',
			'a' => 'رویدادهای پیش‌فرض در پنج دسته: <strong>صفحه و جلسه</strong> (<code dir="ltr">page_view</code>، <code dir="ltr">session_start</code>)، <strong>فروشگاه الکترونیک</strong> (<code dir="ltr">product_view</code>، <code dir="ltr">add_to_cart</code>، <code dir="ltr">remove_from_cart</code>)، <strong>تعاملات کاربر</strong> (<code dir="ltr">click</code>، <code dir="ltr">form_submit</code>، <code dir="ltr">copy</code>، ردیابی لینک خروجی)، <strong>جستجو و محتوا</strong> (<code dir="ltr">search</code>، <code dir="ltr">download</code>، <code dir="ltr">video_play</code>، <code dir="ltr">share</code>) و <strong>سیستمی</strong> (<code dir="ltr">error</code>). علاوه بر این‌ها، رویدادهای قراردادی سمت سرور مثل <code dir="ltr">purchase</code> هم از پیش تعریف شده‌اند.',
		),
		array(
			'q' => 'آیا می‌توانم رویداد سفارشی بسازم و ثبتش کنم؟',
			'a' => 'بله. اول در «تعاریف رویدادها» تعریفش کنید، بعد با یکی از دو روش SDK: فراخوانی <code dir="ltr">xcrm.event("نام", { ویژگی‌ها })</code>، یا روش توصیفی با <code dir="ltr">data-xcrm-event="نام"</code> روی هر عنصر (ویژگی‌های <code dir="ltr">data-xcrm-prop-*</code> به‌صورت خودکار به خواص رویداد تبدیل می‌شوند). اگر تعریفی نباشد، پیشنهاد مناسبی یافت نشود یا ویژگی تکراری باشد، پیام خطای مشخصی دریافت می‌کنید.',
		),
		array(
			'q' => 'رویدادها چطور به تحلیل وصل می‌شوند؟',
			'a' => 'هر رویداد ثبت‌شده سه مسیر دارد: <strong>تاریخچهٔ مشتری</strong> (تب «رویداد» در جزئیات مشتری)، <strong>آمار رویدادها</strong> (تعداد کل، کاربران یکتا، اولین/آخرین رویداد در بازه‌های ۷/۳۰/۹۰ روز) و <strong>کاشف رویداد تحلیل‌ها</strong> با فیلترهای چندرویدادی — و همان داده پایهٔ گزارش‌هایی مثل درآمد (رویداد <code dir="ltr">purchase</code>) است.',
		),
		array(
			'q' => 'آیا رویدادها می‌توانند اتوماسیون بازاریابی را تریگر کنند؟',
			'a' => 'بله. در تریگر اتوماسیون، «رویداد ورودی» با سه نوع «فوری»، «تأخیردار» و «در صورت عدم وقوع» انتخاب می‌شود و می‌توانید «شرط‌های پراپرتی رویداد ورودی» را هم اضافه کنید. رویدادها همچنین پایهٔ شروط رویدادی در <strong>سگمنت‌ها</strong> هستند (شرط تعداد، بازهٔ زمانی و پراپرتی). اگر هنوز رویدادی تعریف نکرده‌اید، تریگرساز هم راهنمایی می‌کند: «برای ساخت تریگر، ابتدا در بخش رویدادها یک تعریف بسازید.»',
		),
		array(
			'q' => 'تفاوت رویداد با ویژگی‌های مشتری چیست؟',
			'a' => 'دو مفهوم کاملاً جدا: <strong>رویداد</strong> یک اتفاق لحظه‌ای است که ویژگی‌هایش (مثل <code dir="ltr">location</code> یا <code dir="ltr">quantity</code>) به همان رویداد وابسته‌اند و با تعریفِ همان رویداد اعتبارسنجی می‌شوند؛ <strong>ویژگی‌های مشتری</strong> دادهٔ دائمی پروفایل (مثل کد پروژه یا سطح هنرجو) است که مدل، اعتبارسنجی (حداقل/حداکثر، الگو، فهرست گزینه‌ها) و صفحهٔ مدیریت جداگانهٔ خودش را دارد.',
		),
	);
	$ft_faq_id    = 'faq';
	$ft_faq_title = 'پرسش‌های متداول دربارهٔ مدیریت رویداد';
	$ft_faq_intro = 'برای بازاریابان دیجیتال، مدیران محصول، تیم‌های فروشگاهی و توسعه‌دهندگان.';
	get_template_part( 'template-parts/faq-section', null, array(
		'ft_faq_id'    => $ft_faq_id,
		'ft_faq_title' => $ft_faq_title,
		'ft_faq_intro' => $ft_faq_intro,
		'ft_faq_items' => $ft_faq_items,
	) );
	?>

	<?php
	$ft_cta_title         = 'داده‌های رفتاری کسب‌وکار خود را به تصمیم‌های عملی تبدیل کنید.';
	$ft_cta_desc          = 'رویدادهای مهم‌تان را تعریف کنید، ویژگی‌ها را ساخت‌یافته ثبت کنید و از همین امروز در تحلیل، بخش‌بندی و اتوماسیون استفاده کنید.';
	$ft_cta_primary_url   = $dash_url;
	$ft_cta_primary_label = 'شروع استفاده از XCRM';
	$ft_cta_secondary_url   = $features;
	$ft_cta_secondary_label = 'فهرست کامل امکانات';
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
