<?php
/**
 * Template Name: Feature — Ready-Made Templates
 * Template Post Type: page
 *
 * صفحهٔ جزئیات قابلیت — قالب‌های آماده و پیشنهادها
 * /features/templates/
 *
 * نام‌های قالب، برچسب‌ها، پیام‌های ایجاد/هم‌پوشانی و قواعد
 * دسته‌بندی از سورس واقعی محصول (seedهای static/data/*_suggestions
 * و کامپوننت‌های suggestions داشبورد) استخراج و بازبینی شده‌اند.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_stylesheet_directory() . '/inc/features-data.php';

$home_url  = home_url( '/' );
$features  = home_url( '/features/' );
$canonical = home_url( '/features/templates/' );
$dash_url  = 'https://dashboard.xcrmforosh.com/';

$page_title       = 'قالب‌های آماده و پیشنهادها | «xCRM فروش»';
$page_description = 'شش نوع قالب برای رویداد، ویژگی، سگمنت، پیپلاین، کمپین و گردش‌کار — با ایجاد یک‌کلیکی، سفارشی‌سازی قبل از ایجاد و دسترسی وابسته به دسته‌بندی شرکت.';
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
			array('@type'=>'ListItem','position'=>3,'name'=>'قالب‌های آماده','item'=>esc_url($canonical)),
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
				<span class="ft__breadcrumb-current">قالب‌های آماده</span>
			</nav>

			<span class="ft__label ft-anim ft-anim--1">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
				قالب‌های آماده و پیشنهادها
			</span>

			<h1 class="ft__title ft-anim ft-anim--2">
				به‌جای شروع از صفر، <span class="text-gradient-primary">با الگوهای آماده XCRM</span> سریع‌تر شروع کنید
			</h1>

			<p class="ft__hero-desc ft-anim ft-anim--3">
				قالب‌های آمادهٔ رویداد، ویژگی، سگمنت، پیپلاین، کمپین و گردش‌کار را با یک کلیک بسازید؛ دسترسی به قالب‌ها به دسته‌بندی شرکت بستگی دارد.
				قالب‌های «ویژه» را همه می‌بینند و بقیه بر اساس صنعت انتخاب‌شدهٔ شما نمایش داده می‌شوند.
			</p>

			<div class="ft__hero-actions ft-anim ft-anim--4">
				<a href="<?php echo esc_url( $dash_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
					شروع با الگوهای آماده
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="#library" class="hp__btn hp__btn--ghost" data-magnetic>
					کتابخانه را ببینید
				</a>
			</div>

			<ul class="ft__hero-pills ft-anim ft-anim--5" aria-label="نکات کلیدی">
				<li>شش نوع قالب، از رویداد تا گردش‌کار</li>
				<li>ایجاد یک‌کلیکی یا سفارشی‌سازی</li>
				<li>بدون تکرار — ایجاد ایدمپوتنت</li>
				<li>ورود قالب به n8n اختصاصی شرکت</li>
			</ul>
			</div>
			<div class="ft__hero-media">
			<?php get_template_part( 'template-parts/feature-hero-graphic', null, array( 'slug' => 'templates' ) ); ?>
			</div>
		</div>
	</section>

	<!-- ============ STARTING FROM SCRATCH ============ -->
	<section class="ft__section ft__section--surface" id="challenge">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
					شروع از صفر
				</span>
				<h2 class="ft__section-title">چهار هزینهٔ <span class="text-gradient-primary">خالی بودن داشبورد</span></h2>
				<p class="ft__section-desc">
					CRM تازه‌نصب یک صفحهٔ خالی است: رویدادها، ویژگی‌ها، گروه‌ها و فرآیندها همه
					روی کاغذ تصمیم‌گیری می‌شوند — و هفته‌ها طول می‌کشد تا به اولین اتوماسیون برسید.
				</p>
			</div>

			<div class="ft__grid ft__grid--caps">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><path d="M14 2v6h6"/></svg>
					</span>
					<h3>طراحی از صفر</h3>
					<p>لیست رویدادها، کلیدهای ویژگی، نام‌ها و مراحل فروش را باید خودتان از پایه طراحی کنید — بدون مرجع و بدون مثال واقعی صنعت.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
					</span>
					<h3>خطای نام‌گذاری</h3>
					<p>دو تیم، دو نام برای یک رویداد — گزارش‌ها به‌هم می‌ریزند و سگمنت‌ها دقیق نمی‌شوند. قالب‌ها یک نام‌گذاری سازگار پیش می‌برند.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					</span>
					<h3>گروه و قیف ناقص</h3>
					<p>سگمنت «مشتریان وفادار» و فرآیند پیگیری را همه می‌خواهند، اما شرط‌بندی و مراحلش را کمتر کسی از اول درست می‌سازد.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="180">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><path d="M7 10v4a3 3 0 0 0 3 3h4"/></svg>
					</span>
					<h3>گره‌های گردش‌کار</h3>
					<p>حتی ساده‌ترین ورک‌فلاوی n8n هم چند گره و اتصال می‌خواهد؛ بدون قالب، از یک صفحهٔ خالی باید شروع کنید.</p>
				</article>
			</div>

			<div class="ft__note-box" style="margin-top: clamp(22px, 3vw, 30px);" data-reveal="up">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
				<p style="margin: 0;">
					<strong>راه‌حل:</strong> پیشنهادهای سمت سرور — قالب‌هایی که توسط تیم XCRM
					کاشت و همگام‌سازی می‌شوند، در همان لیست‌هایی که روزانه کار می‌کنید ظاهر می‌شوند
					و با یک کلیک به منبع واقعی تبدیل می‌شوند.
				</p>
			</div>
		</div>
	</section>

	<!-- ============ TEMPLATE LIBRARY OVERVIEW ============ -->
	<section class="ft__section" id="library">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m16 6 4 14"/><path d="M12 6v14"/><path d="M8 8v12"/><path d="M4 4v16"/></svg>
					کتابخانهٔ قالب‌ها
				</span>
				<h2 class="ft__section-title">شش نوع قالب، <span class="text-gradient-primary">در همان لیست‌های کاری</span></h2>
				<p class="ft__section-desc">
					شش نوع قالب برای رویداد، ویژگی، سگمنت، پیپلاین، کمپین و گردش‌کار.
					قالب‌ها صفحهٔ جداگانه ندارند؛ زیر نمای «پیشنهادی» همان فهرست‌های رویداد، ویژگی،
					گروه، پیپلاین، کمپین و گردش کار می‌نشینند — «قالب‌های آماده برای ساخت سریع بر اساس صنعت شما».
				</p>
			</div>

			<div class="ft__opts" data-reveal="up">
				<div class="ft__opt">
					<div class="ft__opt-top">
						<span class="ft__opt-icon" aria-hidden="true"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>
						<span class="ft__opt-name">قالب رویداد</span>
					</div>
					<p class="ft__opt-hint">تعریف رویدادهای پرکاربرد صنعت شما — «روی یک پیشنهاد بزنید تا رویداد جدید ساخته شود».</p>
				</div>
				<div class="ft__opt">
					<div class="ft__opt-top">
						<span class="ft__opt-icon ft__opt-icon--info" aria-hidden="true"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg></span>
						<span class="ft__opt-name">قالب ویژگی مشتری</span>
					</div>
					<p class="ft__opt-hint">ویژگی‌های استاندارد پروفایل (مثل «نوع مشتری») — «روی یک پیشنهاد بزنید تا ویژگی جدید ساخته شود».</p>
				</div>
				<div class="ft__opt">
					<div class="ft__opt-top">
						<span class="ft__opt-icon ft__opt-icon--success" aria-hidden="true"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></svg></span>
						<span class="ft__opt-name">قالب سگمنت</span>
					</div>
					<p class="ft__opt-hint">گروه‌های آماده مثل «مشتریان جدید» — «روی یک پیشنهاد بزنید تا گروه جدید ساخته شود».</p>
				</div>
				<div class="ft__opt">
					<div class="ft__opt-top">
						<span class="ft__opt-icon ft__opt-icon--warn" aria-hidden="true"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><rect x="7" y="12" width="3" height="6"/><rect x="12" y="8" width="3" height="10"/><rect x="17" y="5" width="3" height="13"/></svg></span>
						<span class="ft__opt-name">قالب پیپلاین</span>
					</div>
					<p class="ft__opt-hint">قیف فروش استاندارد یا پروژه‌ای با مراحل از پیش چیده‌شده.</p>
				</div>
				<div class="ft__opt">
					<div class="ft__opt-top">
						<span class="ft__opt-icon" aria-hidden="true"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg></span>
						<span class="ft__opt-name">قالب کمپین</span>
					</div>
					<p class="ft__opt-hint">اتوماسیون بازاریابی آماده — «ایجاد اتوماسیون (پیش‌نویس) از پیشنهاد» با گروه و گردش‌کار پیشنهادی.</p>
				</div>
				<div class="ft__opt">
					<div class="ft__opt-top">
						<span class="ft__opt-icon ft__opt-icon--info" aria-hidden="true"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><path d="M7 10v4a3 3 0 0 0 3 3h4"/></svg></span>
						<span class="ft__opt-name">قالب گردش‌کار n8n</span>
					</div>
					<p class="ft__opt-hint">«روی یک پیشنهاد بزنید تا اکشن در n8n ساخته و فعال شود» — ورود مستقیم به نمونهٔ اختصاصی شرکت.</p>
				</div>
			</div>

			<div class="ft__note-box ft__note-box--info" style="margin-top: clamp(22px, 3vw, 30px);" data-reveal="up">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
				<p style="margin: 0;">
					<strong>نکتهٔ شفاف:</strong> این صفحه ادعای «فهرست ثابت و کامل برای همه» ندارد؛
					تعداد قالب‌هایی که هر شرکت می‌بیند پویا است و به دسته‌بندی انتخابی و قالب‌های
					منتشرشده بستگی دارد. در ویزارد ساخت هم همین‌طور است:
					«{N} قالب آماده متناسب با دسته‌بندی شرکت شما، که می‌توانید از پایین انتخاب کنید».
				</p>
			</div>
		</div>
	</section>

	<!-- ============ EVENTS & ATTRIBUTES ============ -->
	<section class="ft__section ft__section--surface" id="events">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
					رویداد و ویژگی
				</span>
				<h2 class="ft__section-title">اساس داده‌ها: <span class="text-gradient-primary">رویدادها و ویژگی‌ها</span></h2>
				<p class="ft__section-desc">
					در «تعریف رویدادها» و «ویژگی‌های مشتری»، نمای «پیشنهادی» پیشنهادهای منطبق با
					صنعت شرکت را نشان می‌دهد — نام‌های دسته‌بندی‌شده که مستقیم قابل ایجادند.
				</p>
			</div>

			<div class="ft__grid ft__grid--cases">
				<article class="main-card ft__tcard" data-reveal="up">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat">رویداد</span>
					</div>
					<h3 class="ft__tcard-name">ثبت بازخورد — کشاورزی</h3>
					<p class="ft__tcard-purpose">قالب رویداد برای ثبت بازخورد مشتریان در حوزهٔ کشاورزی؛ نام نمایشی با پسوند دسته‌بندی تا در گزارش‌ها قابل تفکیک باشد.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> شرکت‌های حوزهٔ کشاورزی و تأمین ملزومات — نام رویداد از پیش با دسته‌بندی‌شان یکی است.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>پیش‌نمایش</span>
						<span class="ft__tcard-btn">ایجاد رویداد از پیشنهاد</span>
					</div>
				</article>

				<article class="main-card ft__tcard" data-reveal="up" data-reveal-delay="60">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat">رویداد</span>
					</div>
					<h3 class="ft__tcard-name">شروع پروژه — ملزومات کشاورزی</h3>
					<p class="ft__tcard-purpose">قالب رویداد استارت پروژه، آمادهٔ ایجاد با یک کلیک — برای شروع ردیابی مراحل کار مشتریان.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> پروژه‌محورها — بعد از ایجاد، در لیست رویدادها با برچسب «ایجاد شده» می‌ماند.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">سفارشی</span>
						<span class="ft__tcard-btn">ایجاد رویداد</span>
					</div>
				</article>

				<article class="main-card ft__tcard" data-reveal="up" data-reveal-delay="120">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat ft__tcard-cat--attr">ویژگی</span>
					</div>
					<h3 class="ft__tcard-name">نوع مشتری</h3>
					<p class="ft__tcard-purpose">پرکاربردترین ویژگی پروفایل برای تفکیک مشتریان — اولین گزینهٔ پیشنهادی در ویزارد ویژگی.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> همهٔ صنایع — بعد از ساخت، در سگمنت‌ها و فیلترها قابل استفاده است.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">سفارشی</span>
						<span class="ft__tcard-btn">ایجاد ویژگی از پیشنهاد</span>
					</div>
				</article>
			</div>

			<div class="ft__split" style="margin-top: clamp(28px, 4vw, 40px);">
				<div class="ft__split-copy" data-reveal="up">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li>نماهای فهرست: «همه»، «فعال»، «سیستمی» و «پیشنهادی» — با راهنمای «قالب‌های آماده برای ساخت سریع بر اساس صنعت شما»</li>
						<li>دو اقدام روی هر پیشنهاد: <strong>ایجاد یک‌کلیکی</strong> («در حال ایجاد...» ← «ایجاد شده») یا <strong>سفارشی</strong> که فرم ساخت را از قبل پر می‌کند</li>
						<li>در ویزارد ساخت هم پیشنهاد هست: «یا از پیشنهادهای ما استفاده کنید» + دکمهٔ «ایجاد فوری»</li>
						<li>پس از ایجاد، برچسب «از پیشنهاد» روی منبع می‌ماند و با «حذف پیشنهاد» قابل جداکردن است</li>
						<li>نام‌های ویژگی‌ها در سطح صنعت: «کد بیمار»، «سطح هنرجو»، «کد پروژه»، «امتیاز وفاداری» و…</li>
					</ul>
				</div>
				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<div class="ft__note-box">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>بدون تکرار:</strong> اگر منبعی با همین نام از قبل ساخته شده باشد،
							«این مورد از قبل وجود دارد» می‌بینید — «آیتم جدیدی ساخته نشد؛ همان مورد قبلی
							در فهرست شما وجود دارد.» (کد پیشنهاد در منبع ثبت می‌شود و قالب همچنان در لیست می‌ماند)
						</p>
					</div>
					<div class="ft__note-box ft__note-box--info" style="margin-top: 14px;">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
						<p style="margin: 0;">
							پیام‌های موفقیت واقعی: «رویداد از پیشنهاد با موفقیت ایجاد شد» و
							«ویژگی از پیشنهاد با موفقیت ایجاد شد» — در صورت خطا هم
							«خطا در ایجاد رویداد از پیشنهاد» + «تلاش مجدد».
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ SEGMENTATION TEMPLATES ============ -->
	<section class="ft__section" id="segments">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					سگمنت‌ها
				</span>
				<h2 class="ft__section-title">گروه‌های آمادهٔ <span class="text-gradient-primary">مشتریان</span></h2>
				<p class="ft__section-desc">
					در «گروه‌ها»، پیشنهادها همان گروه‌هایی‌اند که هر تیم بازاریابی اول از همه
					می‌سازد — با «ایجاد سریع» یا ویرایش «سفارشی» قبل از ایجاد.
				</p>
			</div>

			<div class="ft__grid ft__grid--cases">
				<article class="main-card ft__tcard" data-reveal="up">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat ft__tcard-cat--seg">سگمنت</span>
						<span class="ft__tcard-star"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m12 3 2.7 5.5 6 .9-4.3 4.2 1 6-5.4-2.8L6.6 19.6l1-6L3.3 9.4l6-.9Z"/></svg>ویژه</span>
					</div>
					<h3 class="ft__tcard-name">مشتریان جدید (سراسری)</h3>
					<p class="ft__tcard-purpose">گروه همهٔ مشتریان تازه‌وارد — برای خوش‌آمدگویی و شروع سری ارتباطات.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> همهٔ دسته‌بندی‌ها — پیشنهاد «ویژه» (سراسری) است و بدون تنظیم دسته‌بندی هم دیده می‌شود.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">سفارشی</span>
						<span class="ft__tcard-btn">ایجاد سریع</span>
					</div>
				</article>

				<article class="main-card ft__tcard" data-reveal="up" data-reveal-delay="60">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat ft__tcard-cat--seg">سگمنت</span>
						<span class="ft__tcard-star"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m12 3 2.7 5.5 6 .9-4.3 4.2 1 6-5.4-2.8L6.6 19.6l1-6L3.3 9.4l6-.9Z"/></svg>ویژه</span>
					</div>
					<h3 class="ft__tcard-name">مشتریان VIP (سراسری)</h3>
					<p class="ft__tcard-purpose">گروه مشتریان پرارزش برای برنامه‌های وفاداری و ارتباط ویژه.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> همهٔ دسته‌بندی‌ها — در کمپین «برنامه آنبوردینگ VIP» هم به‌صورت خودکار همراه ساخته می‌شود.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">سفارشی</span>
						<span class="ft__tcard-btn">ایجاد سریع</span>
					</div>
				</article>

				<article class="main-card ft__tcard" data-reveal="up" data-reveal-delay="120">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat ft__tcard-cat--seg">سگمنت</span>
						<span class="ft__tcard-star"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m12 3 2.7 5.5 6 .9-4.3 4.2 1 6-5.4-2.8L6.6 19.6l1-6L3.3 9.4l6-.9Z"/></svg>ویژه</span>
					</div>
					<h3 class="ft__tcard-name">مشتریان غیرفعال ۹۰ روزه (سراسری)</h3>
					<p class="ft__tcard-purpose">گروه مشتریانی که ۹۰ روز است خرید/تعاملی نکرده‌اند — پایهٔ کمپین بازگشت.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> همهٔ دسته‌بندی‌ها — همراه کمپین «بازگشت مشتریان غیرفعال» قابل استفاده است.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">سفارشی</span>
						<span class="ft__tcard-btn">ایجاد سریع</span>
					</div>
				</article>
			</div>

			<div class="ft__note-box" style="margin-top: clamp(22px, 3vw, 30px);" data-reveal="up">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
				<p style="margin: 0;">
					<strong>علاوه بر سراسری‌ها:</strong> برای هر دسته‌بندی صنعت، گروه‌هایی مثل
					«مشتریان جدید»، «مشتریان وفادار» و «مشتریان غیرفعال» با شرط‌های منطبق با همان صنعت
					پیشنهاد می‌شوند — همین‌ها در نمای «پیشنهادی» گروه‌ها دیده می‌شوند.
					پیام موفقیت: «گروه از پیشنهاد با موفقیت ایجاد شد».
				</p>
			</div>
		</div>
	</section>

	<!-- ============ SALES PIPELINE TEMPLATES ============ -->
	<section class="ft__section ft__section--surface" id="pipelines">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 3v18h18"/><rect x="7" y="12" width="3" height="6"/><rect x="12" y="8" width="3" height="10"/><rect x="17" y="5" width="3" height="13"/></svg>
					پیپلاین‌ها
				</span>
				<h2 class="ft__section-title">قیف فروش <span class="text-gradient-primary">با مراحل از پیش چیده‌شده</span></h2>
				<p class="ft__section-desc">
					قالب‌های فرآیند فروش، مراحل و ترتیبشان را آماده می‌دهند؛ در حالت خالی فهرست فروش هم
					دکمهٔ «مشاهده پیشنهادها» همان گالری را باز می‌کند.
				</p>
			</div>

			<div class="ft__grid ft__grid--cases">
				<article class="main-card ft__tcard" data-reveal="up">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat ft__tcard-cat--pipe">پیپلاین</span>
						<span class="ft__tcard-star"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m12 3 2.7 5.5 6 .9-4.3 4.2 1 6-5.4-2.8L6.6 19.6l1-6L3.3 9.4l6-.9Z"/></svg>ویژه</span>
					</div>
					<h3 class="ft__tcard-name">قیف فروش استاندارد (سراسری)</h3>
					<p class="ft__tcard-purpose">فرآیند فروش کلاسیک با مراحل استاندارد سرنخ تا نتیجه — آمادهٔ ویرایش پس از ایجاد.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> فروش B2B و خدماتی — ویژه است و برای همهٔ دسته‌بندی‌ها دیده می‌شود.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش مراحل</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">سفارشی</span>
						<span class="ft__tcard-btn">ایجاد فرآیند فروش</span>
					</div>
				</article>

				<article class="main-card ft__tcard" data-reveal="up" data-reveal-delay="60">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat ft__tcard-cat--pipe">پیپلاین</span>
						<span class="ft__tcard-star"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m12 3 2.7 5.5 6 .9-4.3 4.2 1 6-5.4-2.8L6.6 19.6l1-6L3.3 9.4l6-.9Z"/></svg>ویژه</span>
					</div>
					<h3 class="ft__tcard-name">قیف پروژه‌ای (سراسری)</h3>
					<p class="ft__tcard-purpose">فرآیند مناسب پروژه‌ها و قراردادها با مراحل تحویل و پیگیری پروژه.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> آژانس‌ها و پیمانکاران — هم در گالری پیپلاین، هم در زنجیرهٔ کمپین «برنامه آنبوردینگ VIP».</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش مراحل</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">سفارشی</span>
						<span class="ft__tcard-btn">ایجاد فرآیند فروش</span>
					</div>
				</article>

				<article class="main-card ft__tcard" data-reveal="up" data-reveal-delay="120">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat ft__tcard-cat--pipe">پیپلاین</span>
					</div>
					<h3 class="ft__tcard-name">فرآیند پیگیری</h3>
					<p class="ft__tcard-purpose">قالب فرآیند برای پیگیری منظم تماس‌ها و فرصت‌ها — از مجموعهٔ پیشنهادهای دسته‌ای.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> دسته‌بندی‌های دارای پیشنهاد «فرآیند پیگیری» — در نمای پیشنهادی همان دسته نمایش داده می‌شود.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش مراحل</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">سفارشی</span>
						<span class="ft__tcard-btn">ایجاد فرآیند فروش</span>
					</div>
				</article>
			</div>

			<div class="ft__note-box" style="margin-top: clamp(22px, 3vw, 30px);" data-reveal="up">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
				<p style="margin: 0;">
					همه‌چیز قابل ویرایش است: بعد از ایجاد، مراحل را جابه‌جا/حذف/افزوده و نام‌ها را
					به زبان خودتان عوض می‌کنید. پیام موفقیت: «فرآیند فروش از پیشنهاد با موفقیت ایجاد شد»؛
					اگر تکراری زده شود: «این فرآیند فروش از قبل وجود دارد».
				</p>
			</div>
		</div>
	</section>

	<!-- ============ CAMPAIGN & AUTOMATION TEMPLATES ============ -->
	<section class="ft__section" id="campaigns">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
					کمپین‌ها
				</span>
				<h2 class="ft__section-title">اتوماسیون‌های بازاریابی <span class="text-gradient-primary">آماده</span></h2>
				<p class="ft__section-desc">
					قالب کمپین فقط یک نام نیست: با ایجاد، به‌صورت پیش‌نویس ساخته می‌شود و در صورت نیاز
					<strong>گروه هدف</strong> و <strong>گردش‌کار n8n</strong> مرتبط را هم زنجیره‌ای می‌سازد.
				</p>
			</div>

			<div class="ft__grid ft__grid--cases">
				<article class="main-card ft__tcard" data-reveal="up">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat ft__tcard-cat--camp">کمپین</span>
						<span class="ft__tcard-star"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m12 3 2.7 5.5 6 .9-4.3 4.2 1 6-5.4-2.8L6.6 19.6l1-6L3.3 9.4l6-.9Z"/></svg>ویژه</span>
					</div>
					<h3 class="ft__tcard-name">سری خوش‌آمدگویی</h3>
					<p class="ft__tcard-purpose">خوش‌آمدگویی خودکار به مشتریان تازه — با ایجاد، گروه «مشتریان جدید» و جریان خوش‌آمدگویی چندمرحله‌ای را هم می‌سازد.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> همهٔ صنایع — اولین کمپینی که بیشتر شرکت‌ها می‌خواهند.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">زنجیرهٔ خودکار هنگام ایجاد</span>
						<div class="ft__tcard-chain">
							<span>گروه: مشتریان جدید</span>
							<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
							<span>گردش‌کار: جریان خوش‌آمدگویی چندمرحله‌ای</span>
						</div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>پیش‌نمایش</span>
						<span class="ft__tcard-btn">استفاده از قالب</span>
					</div>
				</article>

				<article class="main-card ft__tcard" data-reveal="up" data-reveal-delay="60">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat ft__tcard-cat--camp">کمپین</span>
						<span class="ft__tcard-star"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m12 3 2.7 5.5 6 .9-4.3 4.2 1 6-5.4-2.8L6.6 19.6l1-6L3.3 9.4l6-.9Z"/></svg>ویژه</span>
					</div>
					<h3 class="ft__tcard-name">تبریک تولد</h3>
					<p class="ft__tcard-purpose">پیام تولد خودکار در روز تولد مشتریان — کمپین ساده برای شروع ارتباط شخصی‌سازی‌شده.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> همهٔ صنایع — پیشنهاد «ویژه» و همیشه قابل مشاهده.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>پیش‌نمایش</span>
						<span class="ft__tcard-btn">استفاده از قالب</span>
					</div>
				</article>

				<article class="main-card ft__tcard" data-reveal="up" data-reveal-delay="120">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat ft__tcard-cat--camp">کمپین</span>
					</div>
					<h3 class="ft__tcard-name">یادآوری سبد خرید رهاشده</h3>
					<p class="ft__tcard-purpose">بازگرداندن مشتریانی که سبد را رها کرده‌اند — سناریوی کلاسیک فروشگاهی با پیگیری خودکار.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> فروشگاه‌های آنلاین — همراه با گروه و گردش‌کار پیشنهادی همان مسیر.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">سفارشی</span>
						<span class="ft__tcard-btn">استفاده از قالب</span>
					</div>
				</article>

				<article class="main-card ft__tcard" data-reveal="up" data-reveal-delay="60">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat ft__tcard-cat--camp">کمپین</span>
					</div>
					<h3 class="ft__tcard-name">یادآوری نوبت</h3>
					<p class="ft__tcard-purpose">یادآوری خودکار نوبت به بیماران — پیشنهاد دسته‌ای برای حوزهٔ پزشکی و کلینیک.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> مطب‌ها و کلینیک‌ها — فقط در دسته‌بندی‌های مرتبط نمایش داده می‌شود.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">سفارشی</span>
						<span class="ft__tcard-btn">استفاده از قالب</span>
					</div>
				</article>

				<article class="main-card ft__tcard" data-reveal="up" data-reveal-delay="120">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat ft__tcard-cat--camp">کمپین</span>
					</div>
					<h3 class="ft__tcard-name">پیشنهاد هفتگی</h3>
					<p class="ft__tcard-purpose">ارسال پیشنهاد هفتگی به مشتریان فعال — پیشنهاد دسته‌ای برای رستوران‌ها و کسب‌وکارهای غذایی.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> رستوران‌ها و فروشگاه‌های مواد غذایی — وابسته به دسته‌بندی شرکت.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">سفارشی</span>
						<span class="ft__tcard-btn">استفاده از قالب</span>
					</div>
				</article>

				<article class="main-card ft__tcard" data-reveal="up" data-reveal-delay="180">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat ft__tcard-cat--camp">کمپین</span>
					</div>
					<h3 class="ft__tcard-name">یادآوری پایان دوره آزمایشی</h3>
					<p class="ft__tcard-purpose">یادآوری نزدیک شدن پایان دورهٔ آزمایشی نرم‌افزار — پیشنهاد دسته‌ای برای شرکت‌های نرم‌افزاری.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> SaaS و شرکت‌های نرم‌افزاری — فقط با دسته‌بندی مرتبط دیده می‌شود.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">سفارشی</span>
						<span class="ft__tcard-btn">استفاده از قالب</span>
					</div>
				</article>
			</div>

			<div class="ft__split" style="margin-top: clamp(28px, 4vw, 40px);">
				<div class="ft__split-copy" data-reveal="up">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li><strong>ایجاد کمپین:</strong> «کمپین (پیش‌نویس) از پیشنهاد با موفقیت ایجاد شد» — وضعیت اولیه پیش‌نویس است و بعداً قابل ویرایش/اجراست</li>
						<li><strong>گروه هدف پیشنهادی:</strong> در ویزارد، گروه سمت قالب انتخاب و قابل تغییر است</li>
						<li><strong>گردش‌کار همراه:</strong> اگر قالب کد گردش‌کار داشته باشد، هنگام ایجاد به نمونهٔ n8n شرکت وارد می‌شود (ساخت + فعال‌سازی + آینه‌کاری وب‌هوک) و برای انتخابش در ویزارد از «ایجاد و انتخاب» استفاده می‌شود</li>
						<li><strong>زنجیرهٔ گروه و فرآیند:</strong> برخی قالب‌ها سگمنت و پیپلاین مرتبط را اول می‌سازند یا از موجودی استفاده می‌کنند</li>
						<li>دکمه‌های ویزارد: «استفاده از قالب» ← «انتخاب و ادامه»؛ نکته: «نام و جزئیات را می‌توانید بعداً ویرایش کنید»</li>
					</ul>
				</div>
				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<div class="ft__note-box ft__note-box--info">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>نمونهٔ زنجیرهٔ کامل (سری خوش‌آمدگویی):</strong>
							کمپین ← گروه «مشتریان جدید» ← گردش‌کار «جریان خوش‌آمدگویی چندمرحله‌ای» —
							هر سه با یک ایجاد، آماده می‌شوند.
						</p>
					</div>
					<div class="ft__note-box" style="margin-top: 14px;">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							تکرار امن است: «این کمپین از قبل وجود دارد» یا «این اتوماسیون از قبل وجود دارد» —
							منبع جدید ساخته نمی‌شود.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ N8N WORKFLOW TEMPLATES ============ -->
	<section class="ft__section ft__section--surface" id="workflows">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><path d="M7 10v4a3 3 0 0 0 3 3h4"/></svg>
					گردش‌کارهای n8n
				</span>
				<h2 class="ft__section-title">ورک‌فلاوهای آماده، <span class="text-gradient-primary">مستقیم در n8n شما</span></h2>
				<p class="ft__section-desc">
					قالب گردش‌کار را که بزنید، در نمونهٔ اختصاصی همان شرکت ساخته و فعال می‌شود —
					«روی یک پیشنهاد بزنید تا اکشن در n8n ساخته و فعال شود».
				</p>
			</div>

			<div class="ft__grid ft__grid--cases">
				<article class="main-card ft__tcard" data-reveal="up">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat ft__tcard-cat--flow">گردش‌کار</span>
						<span class="ft__tcard-star"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m12 3 2.7 5.5 6 .9-4.3 4.2 1 6-5.4-2.8L6.6 19.6l1-6L3.3 9.4l6-.9Z"/></svg>ویژه</span>
					</div>
					<h3 class="ft__tcard-name">جریان خوش‌آمدگویی چندمرحله‌ای</h3>
					<p class="ft__tcard-purpose">ورک‌فلاوی چندمرحله‌ای خوش‌آمدگویی — همانی که کمپین «سری خوش‌آمدگویی» به‌صورت خودکار وارد می‌کند.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> همهٔ صنایع — هم مستقل قابل ایجاد است، هم از مسیر کمپین.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش جریان</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">پیش‌نمایش</span>
						<span class="ft__tcard-btn">ایجاد و فعال‌سازی</span>
					</div>
				</article>

				<article class="main-card ft__tcard" data-reveal="up" data-reveal-delay="60">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat ft__tcard-cat--flow">گردش‌کار</span>
						<span class="ft__tcard-star"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m12 3 2.7 5.5 6 .9-4.3 4.2 1 6-5.4-2.8L6.6 19.6l1-6L3.3 9.4l6-.9Z"/></svg>ویژه</span>
					</div>
					<h3 class="ft__tcard-name">جریان بازیابی سبد خرید</h3>
					<p class="ft__tcard-purpose">گردش‌کار بازگرداندن سبد رهاشده — با «پیش‌نمایش» جریان گره‌ها را قبل از ایجاد ببینید.</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> فروشگاه‌های آنلاین — ویژه و سراسری.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش جریان</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">پیش‌نمایش</span>
						<span class="ft__tcard-btn">ایجاد و فعال‌سازی</span>
					</div>
				</article>

				<article class="main-card ft__tcard" data-reveal="up" data-reveal-delay="120">
					<div class="ft__tcard-top">
						<span class="ft__tcard-cat ft__tcard-cat--flow">گردش‌کار</span>
					</div>
					<h3 class="ft__tcard-name">ورکفلوی یادآوری نوبت</h3>
					<p class="ft__tcard-purpose">جریان یادآوری نوبت برای مطب‌ها — قابل ایجاد مستقل یا همراه کمپین «یادآوری نوبت».</p>
					<div class="ft__tcard-scenario">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="flex-shrink:0;margin-top:3px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>مناسب:</b> مطب‌ها و کلینیک‌ها — وابسته به دسته‌بندی شرکت.</span>
					</div>
					<div class="ft__tcard-preview">
						<span class="ft__tcard-preview-label">پیش‌نمایش جریان</span>
						<div class="ft__tcard-skel" aria-hidden="true"><span></span><span></span><span></span></div>
					</div>
					<div class="ft__tcard-foot">
						<span class="ft__tcard-btn ft__tcard-btn--ghost">پیش‌نمایش</span>
						<span class="ft__tcard-btn">ایجاد و فعال‌سازی</span>
					</div>
				</article>
			</div>

			<div class="ft__split" style="margin-top: clamp(28px, 4vw, 40px);">
				<div class="ft__split-copy" data-reveal="up">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li><strong>ورود به n8n شرکت:</strong> ایجاد از طریق API عمومی n8n + فعال‌سازی + آینه‌کاری رکورد گردش‌کار و وب‌هوک‌ها در XCRM</li>
						<li><strong>وضعیت‌ها:</strong> «همگام»، «در انتظار»، «خطا» + نمایش «N گره» و «{n} وب‌هوک» روی کارت</li>
						<li><strong>پیام موفقیت:</strong> «اکشن از پیشنهاد ایجاد و فعال شد» — حالت جزئی هم صادقانه اعلام می‌شود: «ورکفلو ایجاد شد اما فعال‌سازی ناموفق بود؛ از n8n فعال کنید»</li>
						<li><strong>پیش‌نمایش جریان:</strong> مودال پیش‌نمایش، گره‌ها را با رنگ‌بندی «شروع/پیام/منطق/داده» نشان می‌دهد</li>
						<li><strong>تکرار:</strong> «این اکشن از قبل از این پیشنهاد ساخته شده است» — بدون رکورد تکراری</li>
						<li>حالت خالی فهرست: «برای شروع، یک گردش کار جدید ایجاد کنید یا از n8n همگام‌سازی کنید.»</li>
					</ul>
				</div>
				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<div class="ft__note-box">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>مرز صادقانه:</strong> قالب‌های گردش‌کار همان‌هایی‌اند که در منبع
							کاشت و منتشر شده‌اند؛ فهرست گره‌های نرم‌افزاری هر شرکت، محتوای خودِ ورک‌فلاو
							را تشکیل می‌دهد — این صفحه گرهٔ بیشتری وعده نمی‌دهد.
						</p>
					</div>
					<div class="ft__note-box ft__note-box--info" style="margin-top: 14px;">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
						<p style="margin: 0;">
							اگر قالب قبلاً وارد شده باشد، همان نسخهٔ موجود انتخاب می‌شود —
							«اکشنی پیشنهادی از قبل وجود دارد و انتخاب شد».
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ ONE-CLICK ADOPTION ============ -->
	<section class="ft__section" id="adoption">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
					پذیرش یک‌کلیکی
				</span>
				<h2 class="ft__section-title">از دسته‌بندی تا <span class="text-gradient-primary">منبع آماده</span> در پنج قدم</h2>
				<p class="ft__section-desc">
					مسیر استاندارد پذیرش یک قالب — از انتخاب صنعت تا استفاده از منبع ساخته‌شده:
				</p>
			</div>

			<div class="ft__arch" data-reveal="up" aria-label="مسیر پذیرش قالب از انتخاب دسته‌بندی تا شروع استفاده">
				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۱</span>
					<span class="ft__arch-icon" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><rect x="7" y="12" width="3" height="6"/><rect x="12" y="8" width="3" height="10"/><rect x="17" y="5" width="3" height="13"/></svg>
					</span>
					<h3>دسته‌بندی کسب‌وکار را انتخاب کنید</h3>
					<p>«صنعت و حوزه فعالیت شرکت خود را انتخاب کنید» — از «دسته‌بندی شرکت» با «جستجو در دسته‌بندی‌ها…».</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۲</span>
					<span class="ft__arch-icon ft__arch-icon--info" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m16 6 4 14"/><path d="M12 6v14"/><path d="M8 8v12"/><path d="M4 4v16"/></svg>
					</span>
					<h3>پیشنهادهای مرتبط را بگردید</h3>
					<p>در نمای «پیشنهادی» فهرست‌ها، قالب‌های منطبق با صنعتتان — و قالب‌های «ویژه» برای همه — نمایش داده می‌شوند.</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۳</span>
					<span class="ft__arch-icon ft__arch-icon--warn" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
					</span>
					<h3>قالب را پیش‌نمایش بزنید</h3>
					<p>«پیش‌نمایش» — برای گردش‌کارها جریان گره‌ها، برای کمپین‌ها زنجیرهٔ منابع و برای بقیه، ساختار منبع را قبل از ایجاد ببینید.</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۴</span>
					<span class="ft__arch-icon ft__arch-icon--success" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
					</span>
					<h3>سفارشی کنید یا ایجاد کنید</h3>
					<p>«سفارشی» فرم را با داده‌های قالب پر می‌کند تا ویرایش کنید، یا همان «ایجاد یک‌کلیکی» را بزنید.</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۵</span>
					<span class="ft__arch-icon ft__arch-icon--end" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
					</span>
					<h3>شروع استفاده از منبع</h3>
					<p>منبع در فهرست شما ثبت می‌شود («ایجاد شده»)، ردیابی «کد پیشنهاد» رویش می‌ماند و بلافاصله قابل استفاده است.</p>
				</div>
			</div>

			<div class="ft__grid ft__grid--caps" style="margin-top: clamp(26px, 3.5vw, 36px);">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
					</span>
					<h3>ایجاد یک‌کلیکی</h3>
					<p>یک دکمه، یک منبع: «در حال ایجاد...» و بعد «ایجاد شده». پیام موفقیت نوع به نوع هست، مثل «گروه از پیشنهاد با موفقیت ایجاد شد».</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
					</span>
					<h3>سفارشی قبل از ایجاد</h3>
					<p>دکمهٔ «سفارشی» ویزارد ساخت را از قبل پر می‌کند؛ نام، شرط‌ها و مراحل را عوض کنید و بعد «ایجاد فوری» یا ثبت نهایی را بزنید.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg>
					</span>
					<h3>ایجاد ایدمپوتنت</h3>
					<p>دوباره زدن همان قالب، منبع تکراری نمی‌سازد: 200 با پیام «این مورد از قبل وجود دارد» — همان منبع قبلی در فهرست شماست.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="180">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					</span>
					<h3>منبع در جای خودش می‌ماند</h3>
					<p>قالب‌ها بعد از ایجاد از فهرست حذف نمی‌شوند؛ با برچسب «ایجاد شده» علامت می‌خورند و «کد پیشنهاد» روی منبع ثبت می‌شود.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ CATEGORY-SPECIFIC RECOMMENDATIONS ============ -->
	<section class="ft__section ft__section--surface" id="category">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 3v18h18"/><rect x="7" y="12" width="3" height="6"/><rect x="12" y="8" width="3" height="10"/><rect x="17" y="5" width="3" height="13"/></svg>
					دسته‌بندی شرکت
				</span>
				<h2 class="ft__section-title">پیشنهادها <span class="text-gradient-primary">متناسب با صنعت شما</span></h2>
				<p class="ft__section-desc">
					قالب‌ها بر اساس «دسته‌بندی شرکت» فیلتر می‌شوند — و این یعنی صنایع مختلف،
					قالب‌های مختلفی می‌بینند. این صفحه ادعا نمی‌کند همهٔ قالب‌ها برای همهٔ صنایع در دسترس‌اند.
				</p>
				<ul class="ft__checklist">
					<li><strong>دو لایهٔ دید:</strong> قالب‌های «ویژه» (منتشرشده برای همه) + قالب‌های منطبق با دسته‌بندی شرکت شما</li>
					<li>فیلتر سمت سرور: رویدادها/ویژگی‌ها یا «ویژه» یا منطبق با زیردستهٔ دقیق شرکت</li>
					<li>دسته‌بندی تنظیم نشده؟ فقط ویژه‌ها: «دسته‌بندی شرکت تنظیم نشده است؛ فقط پیشنهادهای ویژه نمایش داده می‌شوند.»</li>
					<li>هیچ پیشنهادی نبود: «پیشنهاد مناسبی یافت نشد.» — و همیشه می‌توانید منبع را دستی بسازید</li>
					<li>نمای خالی فهرست: «پیشنهادی برای این دسته‌بندی یافت نشد» — «پیشنهادهای «گروه‌ها» مطابق صنعت شرکت شما نمایش داده می‌شوند.»</li>
					<li>خطای دریافت: «خطا در دریافت پیشنهادها.» + «تلاش مجدد»</li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="main-card ft__form">
					<div class="ft__form-head">
						<h3>دسته‌بندی شرکت</h3>
						<p>صنعت و حوزه فعالیت شرکت خود را انتخاب کنید</p>
					</div>
					<div class="ft__form-grid">
						<div class="ft__field">
							<span class="ft__field-label">دسته‌بندی اصلی</span>
							<span class="ft__field-val">غذا و رستوران</span>
						</div>
						<div class="ft__field">
							<span class="ft__field-label">زیردسته</span>
							<span class="ft__field-val">رستوران</span>
						</div>
					</div>
					<div class="ft__form-chips" aria-label="نمونه پیشنهادهای این دسته">
						<span class="ft__form-chip ft__form-chip--on">پیشنهاد هفتگی</span>
						<span class="ft__form-chip ft__form-chip--on">مشتریان جدید (سراسری)</span>
						<span class="ft__form-chip ft__form-chip--on">قیف فروش استاندارد (سراسری)</span>
					</div>
					<div class="ft__form-foot">
						<p class="ft__form-note">برای مطب‌ها «یادآوری نوبت»، برای نرم‌افزار «یادآوری پایان دوره آزمایشی» و… نمایش داده می‌شود.</p>
					</div>
				</div>
				<p class="ft__mock-caption">نمایش تزئینی — داده‌های نمونهٔ ترکیب پیشنهادها پس از انتخاب دسته‌بندی</p>

				<div class="ft__note-box ft__note-box--info" style="margin-top: 14px;">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
					<p style="margin: 0;">
						تعداد پیشنهادهای هر فهرست <strong>پویا</strong> است؛ در ویزارد ساخت هم
						همین عدد زنده نمایش داده می‌شود: «{N} قالب آماده متناسب با دسته‌بندی شرکت شما،
						که می‌توانید از پایین انتخاب کنید» — این صفحه عدد ثابتی برای تعداد کل قالب‌ها ادعا نمی‌کند.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ PRACTICAL EXAMPLES ============ -->
	<section class="ft__section" id="examples">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
					سناریوهای عملی
				</span>
				<h2 class="ft__section-title">چهار مسیر <span class="text-gradient-primary">شروع واقعی</span></h2>
				<p class="ft__section-desc">
					ترکیب‌هایی از همان قالب‌های نام‌بردهٔ بالا — انتخاب نهایی به دسته‌بندی و قالب‌های منتشرشدهٔ شرکت شما بستگی دارد.
				</p>
			</div>

			<div class="ft__grid ft__grid--cases">
				<article class="main-card ft__scen" data-reveal="up">
					<span class="ft__case-badge">روز اول</span>
					<h3>پروفایل و رویدادها</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">قالب‌ها</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">ویژگی «نوع مشتری» + رویدادهای دسته‌ای صنعتتان — «ایجاد رویداد از پیشنهاد» و «ایجاد ویژگی از پیشنهاد».</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">نتیجه</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">داده‌های ساختاریافته برای سگمنت‌ها و گزارش‌ها — بدون نام‌گذاری دوباره.</p>
					</div>
				 </article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="60">
					<span class="ft__case-badge">هفتهٔ اول</span>
					<h3>گروه و قیف فروش</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">قالب‌ها</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">«مشتریان جدید (سراسری)» + «قیف فروش استاندارد (سراسری)» — هر دو ویژه و همیشه در دسترس.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">نتیجه</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">اولین سگمنت و اولین فرآیند فروش آمادهٔ تیم — قابل ویرایش کامل.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="120">
					<span class="ft__case-badge">فروشگاه آنلاین</span>
					<h3>مسیر سبد خرید</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">قالب‌ها</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">کمپین «یادآوری سبد خرید رهاشده» + گردش‌کار «جریان بازیابی سبد خرید» + گروه پیشنهادی همراه.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">نتیجه</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">زنجیرهٔ بازگرداندن سبد با پیش‌نویس کمپین و ورک‌فلاوی فعال در n8n.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="180">
					<span class="ft__case-badge">همه‌جا</span>
					<h3>خوش‌آمدگویی کامل</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">قالب‌ها</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">کمپین «سری خوش‌آمدگویی» ← گروه «مشتریان جدید» ← گردش‌کار «جریان خوش‌آمدگویی چندمرحله‌ای» — یک ایجاد، سه منبع.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">نتیجه</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">سری خوش‌آمدگویی آمادهٔ اجرا — با امکان ویرایش همهٔ بخش‌ها پس از ساخت.</p>
					</div>
				</article>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">ترکیب‌های نمونه با نام‌های واقعی قالب‌ها — ترکیب نهایی به دسته‌بندی و قالب‌های منتشرشدهٔ شرکت شما بستگی دارد.</p>

			<div class="ft__related-links" data-reveal="up" style="margin-top: clamp(26px, 3.5vw, 36px);">
				<a href="<?php echo esc_url( home_url( '/features/segmentation/' ) ); ?>" class="ft__related-link">
					ساخت گروه با سگمنت
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/sales-pipeline/' ) ); ?>" class="ft__related-link">
					فرآیند فروش
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/automation/' ) ); ?>" class="ft__related-link">
					اتوماسیون بازاریابی
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
			'q' => 'قالب‌های آماده دقیقاً چه چیزهایی هستند؟',
			'a' => 'پیشنهادهایی که تیم XCRM روی سرور کاشت و همگام‌سازی می‌کند و در شش نوع ارائه می‌شوند: <strong>رویداد، ویژگی مشتری، سگمنت، پیپلاین، کمپین (اتوماسیون) و گردش‌کار n8n</strong>. هر پیشنهاد یک کد یکتا، نام نمایشی، دسته‌بندی و دادهٔ payload دارد و مستقیماً به منبع واقعی تبدیل می‌شود.',
		),
		array(
			'q' => 'چرا بعضی قالب‌ها را نمی‌بینم؟',
			'a' => 'چون دسترسی به قالب‌ها به <strong>دسته‌بندی شرکت</strong> بستگی دارد: قالب‌های «ویژه» (منتشرشده) را همه می‌بینند و بقیه بر اساس صنعت انتخاب‌شدهٔ شما فیلتر می‌شوند. اگر دسته‌بندی تنظیم نشده باشد پیام «دسته‌بندی شرکت تنظیم نشده است؛ فقط پیشنهادهای ویژه نمایش داده می‌شوند.» را می‌بینید. بنابراین این صفحه ادعای «همهٔ قالب‌ها برای همهٔ صنایع» را ندارد.',
		),
		array(
			'q' => 'ایجاد یک‌کلیکی چطور کار می‌کند؟',
			'a' => 'روی پیشنهاد دکمهٔ ایجاد می‌زنید (مثل «ایجاد رویداد از پیشنهاد»، «ایجاد سریع» یا «ایجاد و فعال‌سازی»)؛ سرور منبع را با «کد پیشنهاد» می‌سازد و پاسخ موفق می‌دهد («رویداد از پیشنهاد با موفقیت ایجاد شد»). حالت دوم «سفارشی» است که فرم ساخت را از قبل پر می‌کند تا قبل از ایجاد ویرایش کنید.',
		),
		array(
			'q' => 'اگر دوباره همان قالب را بزنم چه می‌شود؟',
			'a' => 'هیچ منبع تکراری ساخته نمی‌شود. سرور اگر منبعی با همان کد پیشنهاد (یا همان نام) پیدا کند، همان قبلی را برمی‌گرداند و پیام «این مورد از قبل وجود دارد» با توضیح «آیتم جدیدی ساخته نشد؛ همان مورد قبلی در فهرست شما وجود دارد.» نشان می‌دهد. این رفتار برای هر شش نوع یکسان است (مثلاً «این کمپین از قبل وجود دارد»، «این فرآیند فروش از قبل وجود دارد»).',
		),
		array(
			'q' => 'قالب کمپین فقط کمپین می‌سازد؟',
			'a' => 'خیر — در صورت نیاز، منابع وابسته را هم زنجیره‌ای می‌سازد: اول گروه سگمنت و فرآیند فروش پیشنهادی (یا استفاده از موجودی)، بعد اگر قالب کد گردش‌کار داشته باشد، <strong>ورکفلو را به نمونهٔ n8n اختصاصی شرکت وارد می‌کند</strong> (ساخت + فعال‌سازی + آینه‌کاری وب‌هوک). نمونه: «سری خوش‌آمدگویی» ← «مشتریان جدید» ← «جریان خوش‌آمدگویی چندمرحله‌ای».',
		),
		array(
			'q' => 'قالب گردش‌کار کجا نصب می‌شود؟',
			'a' => 'در همان نمونهٔ n8n اختصاصی شرکت شما — نه یک محیط مشترک. با «ایجاد و فعال‌سازی»، ورکفلو از طریق API عمومی n8n ساخته و فعال می‌شود و رکوردهای گردش‌کار و وب‌هوک‌هایش در XCRM آینه می‌شوند. اگر فعال‌سازی ناقص بماند، صادقانه اعلام می‌شود: «ورکفلو ایجاد شد اما فعال‌سازی ناموفق بود؛ از n8n فعال کنید».',
		),
		array(
			'q' => 'چند قالب کلی دارید؟',
			'a' => 'عدد ثابتی ادعا نمی‌کنیم. تعداد قالب‌های قابل مشاهده برای هر شرکت پویاست و به دسته‌بندی انتخابی و قالب‌های منتشرشده بستگی دارد — همان عددی هم که در ویزارد ساخت می‌بینید («{N} قالب آماده متناسب با دسته‌بندی شرکت شما…») زنده محاسبه می‌شود. آنچه ثابت است: <strong>شش نوع قالب</strong> و مسیر یکسان پذیرش برای همهٔ آن‌ها.',
		),
		array(
			'q' => 'اگر هیچ پیشنهادی نخوردم چه کنم؟',
			'a' => 'همه‌چیز با دستی هم قابل ساخت است: «پیشنهاد مناسبی یافت نشد.» فقط یک حالت خالی است و ویزارد ساخت باز می‌ماند؛ دسته‌بندی شرکت را هم می‌توانید بعداً عوض کنید تا پیشنهادهای همان صنعت ظاهر شوند. خطای دریافت شبکه هم با «خطا در دریافت پیشنهادها.» + «تلاش مجدد» قابل تکرار است.',
		),
	);
	$ft_faq_id    = 'faq';
	$ft_faq_title = 'پرسش‌های متداول دربارهٔ قالب‌های آماده';
	$ft_faq_intro = 'برای تیم‌های تازه‌نصب، بازاریابان و مدیران CRM.';
	$ft_faq_class = 'ft__section--surface';
	get_template_part( 'template-parts/faq-section', null, array(
		'ft_faq_id'    => $ft_faq_id,
		'ft_faq_title' => $ft_faq_title,
		'ft_faq_intro' => $ft_faq_intro,
		'ft_faq_class' => $ft_faq_class,
		'ft_faq_items' => $ft_faq_items,
	) );
	?>

	<?php
	$ft_cta_title         = 'اولین قالب خود را امروز بسازید';
	$ft_cta_desc          = 'دسته‌بندی شرکت را انتخاب کنید، پیشنهادهای صنعتتان را ببینید و با یک کلیک اولین منبع را آماده کنید.';
	$ft_cta_primary_url   = $dash_url;
	$ft_cta_primary_label = 'شروع با الگوهای آماده';
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
