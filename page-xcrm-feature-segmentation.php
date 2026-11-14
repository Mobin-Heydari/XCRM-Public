<?php
/**
 * Template Name: Feature — Segmentation
 * Template Post Type: page
 *
 * صفحهٔ جزئیات قابلیت — بخش‌بندی مشتریان
 * /features/segmentation/
 *
 * فیلدها، اپراتورها و متن‌های رابط کاربری از سورس واقعی فرانت‌اند
 * (conditionMeta.ts / GroupConditionBuilder.tsx / EventConditionRow.tsx)
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
$canonical  = home_url( '/features/segmentation/' );
$dash_url   = 'https://dashboard.xcrmforosh.com/';

$page_title       = 'بخش‌بندی مشتریان و سگمنت‌بندی | «xCRM فروش»';
$page_description = 'مشتریان را بر اساس رفتار واقعی، ویژگی‌ها و تعاملاتشان دسته‌بندی کنید؛ سگمنت‌های ایستا و پویا با شرط‌های AND/OR، پیش‌نمایش تعداد مخاطب و اتصال به کمپین و اتوماسیون.';
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
			array('@type'=>'ListItem','position'=>3,'name'=>'بخش‌بندی مشتریان','item'=>esc_url($canonical)),
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
				<span class="ft__breadcrumb-current">بخش‌بندی مشتریان</span>
			</nav>

			<span class="ft__label ft-anim ft-anim--1">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/></svg>
				بخش‌بندی مشتریان
			</span>

			<h1 class="ft__title ft-anim ft-anim--2">
				مخاطبان خود را بر اساس <span class="text-gradient-primary">رفتار واقعی</span> دسته‌بندی کنید
			</h1>

			<p class="ft__hero-desc ft-anim ft-anim--3">
				به‌جای فرض دربارهٔ مشتریان، از داده‌های ثبت‌شده شرط بسازید: چه کسی چه چیزی را دیده، چه چیزی را
				به سبد اضافه کرده و چه چیزی را نخریده — سپس همان گروه را به‌عنوان مخاطب کمپین و اتوماسیون خود استفاده کنید.
			</p>

			<div class="ft__hero-actions ft-anim ft-anim--4">
				<a href="<?php echo esc_url( $dash_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
					شروع رایگان
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="#builder" class="hp__btn hp__btn--ghost" data-magnetic>
					سازندهٔ شرط را ببینید
				</a>
			</div>

			<ul class="ft__hero-pills ft-anim ft-anim--5" aria-label="نکات کلیدی">
				<li>سگمنت ایستا و پویا</li>
				<li>شرط‌های AND/OR و رویدادی</li>
				<li>پیش‌نمایش تعداد مخاطب</li>
				<li>اولویت سگمنت‌های موازی</li>
			</ul>
			</div>
			<div class="ft__hero-media">
			<?php get_template_part( 'template-parts/feature-hero-graphic', null, array( 'slug' => 'segmentation' ) ); ?>
			</div>
		</div>
	</section>

	<!-- ============ STATIC VS DYNAMIC ============ -->
	<section class="ft__section ft__section--surface" id="types">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M8 6h13"/><path d="M8 12h13"/><path d="M8 18h13"/><path d="M3 6h.01"/><path d="M3 12h.01"/><path d="M3 18h.01"/></svg>
					دو نوع سگمنت
				</span>
				<h2 class="ft__section-title">سگمنت ایستا یا پویا؟ <span class="text-gradient-primary">هر کدام جای خود</span></h2>
				<p class="ft__section-desc">
					«xCRM فروش» برای هر دو نیاز امکان دارد: لیست‌های ثابت که خودتان عضوها را مدیریت می‌کنید
					و گروه‌های پویا که شرط‌ها تعریف می‌کنید و عضویت را سیستم نگه می‌دارد.
				</p>
			</div>

			<div class="ft__compare">
				<article class="main-card ft__cmp" data-reveal="up">
					<span class="ft__type-chip ft__type-chip--static">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>
						استاتیک (دستی)
					</span>
					<h3>سگمنت ایستا</h3>
					<p>بدون شرط خودکار؛ عضوها را دستی اضافه یا حذف می‌کنید. برای لیست‌های ثابت مثل «مشتریان ویژه» یا «همکاران نمایشگاه».</p>
					<ul class="ft__cmp-list">
						<li>کنترل کامل و دستی روی هر عضو</li>
						<li>مناسب فهرست‌های کوچک و مشخص</li>
						<li>در رابط سیستم: «عضویت دستی — بدون شرط خودکار»</li>
					</ul>
				</article>

				<article class="main-card ft__cmp" data-reveal="up" data-reveal-delay="90">
					<span class="ft__type-chip ft__type-chip--dynamic">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
						داینامیک (خودکار)
					</span>
					<h3>سگمنت پویا</h3>
					<p>شرط‌ها را یک‌بار می‌سازید و سیستم عضویت را با ارزیابی خودکار و دوره‌ای به‌روز نگه می‌دارد. برای گروه‌هایی که مدام در حال تغییرند.</p>
					<ul class="ft__cmp-list">
						<li>شرط‌های ترکیبی و/یا روی ویژگی‌ها و رویدادها</li>
						<li>ارزیابی خودکار هنگام ثبت رویداد + پایش دوره‌ای</li>
						<li>تعداد اعضا با پیش‌نمایش قبل از ذخیره قابل بررسی است</li>
					</ul>
				</article>
			</div>

			<div class="ft__note-box" style="margin-top: clamp(22px, 3vw, 30px);" data-reveal="up">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
				<p style="margin: 0;">
					<strong>منبع عضویت ثبت می‌شود:</strong> سیستم مشخص می‌کند هر عضو چطور وارد سگمنت شده —
					دستی، خودکار (شرط‌ها)، API، تلگرام یا اینستاگرام — تا بعدها بتوانید این گروه‌ها را مقایسه کنید.
				</p>
			</div>
		</div>
	</section>

	<!-- ============ BEHAVIOR-BASED TARGETING ============ -->
	<section class="ft__section" id="behavior">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
					هدف‌گیری رفتاری
				</span>
				<h2 class="ft__section-title">رفتار واقعی، <span class="text-gradient-primary">به‌جای حدس</span></h2>
				<p class="ft__section-desc">
					رویدادهایی که SDK روی وب‌سایت شما ثبت می‌کند — بازدید محصول، افزودن به سبد، جستجو —
					پایهٔ شرط‌های رفتاری‌اند. هر جملهٔ زیر با یک سگمنت قابل ساخت است:
				</p>
			</div>

			<div class="ft__grid ft__grid--caps" data-reveal="up">
				<article class="main-card ft__cap">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
					</span>
					<h3>بازدیدکنندهٔ جدی</h3>
					<p>کسی که در ۳۰ روز گذشته بیش از ۳ بار محصولی را دیده اما هنوز نخریده است.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
					</span>
					<h3>نیمه‌آمادهٔ خرید</h3>
					<p>کسی که در ۷ روز گذشته محصولی را به سبد اضافه کرده اما فرایند خرید را کامل نکرده است.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/></svg>
					</span>
					<h3>در جستجوی محصول</h3>
					<p>کسی که در ۳۰ روز گذشته بیش از ۵ بار در سایت جستجو کرده — نشانهٔ تقاضای مشخص.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="180">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg>
					</span>
					<h3>مشتری در معرض ریزش</h3>
					<p>کسی که بیش از ۳۰ روز است خرید نکرده و آخرین فعالیتش به این زمان‌ها برمی‌گردد.</p>
				</article>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">جمله‌های نمونه — شرط‌های دقیق را خودتان با سازندهٔ شرط می‌سازید.</p>
		</div>
	</section>

	<!-- ============ ATTRIBUTE-BASED TARGETING ============ -->
	<section class="ft__section ft__section--surface" id="attributes">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 7V4h16v3"/><path d="M9 20h6"/><path d="M12 4v16"/></svg>
					هدف‌گیری با ویژگی
				</span>
				<h2 class="ft__section-title">فیلدهای آماده و <span class="text-gradient-primary">ویژگی‌های سفارشی</span></h2>
				<p class="ft__section-desc">
					سازندهٔ شرط با فهرست مشخصی از فیلدها کار می‌کند — از مشخصات شخصی تا رضایت‌های ارتباطی —
					و علاوه بر آن‌ها، ویژگی‌های سفارشی تعریف‌شده توسط خود شرکت شما نیز به همان روش فیلتر می‌شوند.
				</p>
			</div>

			<div data-reveal="up">
				<div class="ft__cat-group">
					<h3 class="ft__cat-title"><span class="ft__bld-num">۱</span>شخصی</h3>
					<div class="ft__cat-chips">
						<span class="ft__fchip">نام کامل</span>
						<span class="ft__fchip">نام</span>
						<span class="ft__fchip">نام خانوادگی</span>
						<span class="ft__fchip">تاریخ تولد</span>
						<span class="ft__fchip">جنسیت</span>
						<span class="ft__fchip">شرکت</span>
					</div>
				</div>

				<div class="ft__cat-group">
					<h3 class="ft__cat-title"><span class="ft__bld-num">۲</span>مکان</h3>
					<div class="ft__cat-chips">
						<span class="ft__fchip">کشور</span>
						<span class="ft__fchip">شهر</span>
						<span class="ft__fchip">استان</span>
					</div>
				</div>

				<div class="ft__cat-group">
					<h3 class="ft__cat-title"><span class="ft__bld-num">۳</span>تعامل</h3>
					<div class="ft__cat-chips">
						<span class="ft__fchip">امتیاز</span>
						<span class="ft__fchip">منبع</span>
						<span class="ft__fchip">فعال</span>
					</div>
				</div>

				<div class="ft__cat-group">
					<h3 class="ft__cat-title"><span class="ft__bld-num">۴</span>ترجیحات (رضایت)</h3>
					<div class="ft__cat-chips">
						<span class="ft__fchip">رضایت ایمیل</span>
						<span class="ft__fchip">رضایت پیامک</span>
						<span class="ft__fchip">رضایت نوتیفیکیشن</span>
						<span class="ft__fchip">رضایت واتساپ</span>
					</div>
				</div>

				<div class="ft__cat-group">
					<h3 class="ft__cat-title"><span class="ft__bld-num">۵</span>ویژگی‌ها</h3>
					<div class="ft__cat-chips">
						<span class="ft__fchip">برچسب‌ها</span>
						<span class="ft__fchip">روز از ثبت‌نام</span>
						<span class="ft__fchip">تعداد بازدید</span>
						<span class="ft__fchip">روز از آخرین فعالیت</span>
						<span class="ft__fchip ft__fchip--attr">ویژگی سفارشی شرکت شما</span>
					</div>
				</div>

				<div class="ft__cat-group">
					<h3 class="ft__cat-title"><span class="ft__bld-num">+</span>اپراتورهای مقایسه (بر اساس نوع فیلد)</h3>
					<div class="ft__cat-chips">
						<span class="ft__fchip ft__fchip--op">برابر با</span>
						<span class="ft__fchip ft__fchip--op">مخالف</span>
						<span class="ft__fchip ft__fchip--op">شامل</span>
						<span class="ft__fchip ft__fchip--op">شامل نیست</span>
						<span class="ft__fchip ft__fchip--op">شروع با</span>
						<span class="ft__fchip ft__fchip--op">بزرگتر از</span>
						<span class="ft__fchip ft__fchip--op">بزرگتر مساوی</span>
						<span class="ft__fchip ft__fchip--op">کوچکتر از</span>
						<span class="ft__fchip ft__fchip--op">کوچکتر مساوی</span>
						<span class="ft__fchip ft__fchip--op">بعد از</span>
						<span class="ft__fchip ft__fchip--op">قبل از</span>
					</div>
				</div>
			</div>

			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">
				فیلدها و اپراتورهای موجود در نسخهٔ فعلی محصول — اپراتور متنی، عددی و تاریخی با هم متفاوت‌اند.
			</p>
		</div>
	</section>

	<!-- ============ EVENT-BASED CONDITIONS ============ -->
	<section class="ft__section" id="events">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
					شرط رویداری
				</span>
				<h2 class="ft__section-title">شرط روی <span class="text-gradient-primary">رویدادهای واقعی</span></h2>
				<p class="ft__section-desc">
					شرط رویداری سه جزء دارد: کدام رویداد، با چه آستانه‌ای از تعداد، و در چه بازهٔ زمانی —
					به‌علاوهٔ فیلتر اختیاری روی پراپرتی‌های همان رویداد.
				</p>
				<ul class="ft__checklist">
					<li><strong>تعداد:</strong> حداقل، بیش از، دقیقاً، حداکثر، کمتر از، غیر از</li>
					<li><strong>بازهٔ زمانی:</strong> دقیقه، ساعت، روز، ماه (مثلاً «در ۷ روز گذشته»)</li>
					<li><strong>پراپرتی (اختیاری):</strong> فقط فیلدهای فیلترشدنی رویداد انتخابی نمایش داده می‌شوند</li>
					<li>رویدادها از فهرست تعریف‌شدهٔ شرکت شما انتخاب می‌شوند</li>
				</ul>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<div class="ft__bld-row">
					<div class="ft__bld-row-head">
						<div class="ft__bld-row-id">
							<span class="ft__bld-num">۱</span>
							<span class="ft__bld-row-label">شرط رویدار ۱ <small>از ۱</small></span>
						</div>
					</div>

					<div class="ft__bld-fields">
						<div class="ft__bld-field ft__bld-field--full">
							<label>رویدار</label>
							<div class="ft__bld-select">
								<span>مشاهده محصول</span>
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
							</div>
						</div>
						<div class="ft__bld-field">
							<label>تعداد</label>
							<div class="ft__bld-pair">
								<div class="ft__bld-select"><span>حداقل</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg></div>
								<div class="ft__bld-input">۳</div>
							</div>
						</div>
						<div class="ft__bld-field">
							<label>در چند واحد گذشته</label>
							<div class="ft__bld-pair">
								<div class="ft__bld-input">۳۰</div>
								<div class="ft__bld-select"><span>روز</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg></div>
							</div>
						</div>
					</div>

					<div class="ft__bld-props">
						<div class="ft__bld-props-head">
							<span class="ft__bld-props-title">فیلتر پراپرتی (اختیاری)</span>
						</div>
						<div class="ft__bld-props-row">
							<div class="ft__bld-select ft__bld-select--ltr"><span>category</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg></div>
							<div class="ft__bld-select"><span>شامل</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg></div>
							<div class="ft__bld-select ft__bld-select--ltr"><span>کفش</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg></div>
						</div>
						<p class="ft__bld-props-note">بدون فیلتر — همه رویدادهای این رویدار در نظر گرفته می‌شوند.</p>
					</div>

					<div class="ft__bld-trans">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>ترجمه:</b> product_view حداقل ۳ بار در ۳۰ روز گذشته (category contains کفش)</span>
					</div>
				</div>
				<p class="ft__mock-caption">نمایش تزئینی از یک شرط رویداری — رابط واقعی در داشبورد</p>
			</div>
		</div>
	</section>

	<!-- ============ VISUAL SEGMENT BUILDER (CENTERPIECE) ============ -->
	<section class="ft__section ft__section--surface" id="builder">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
					سازندهٔ شرط
				</span>
				<h2 class="ft__section-title">سازندهٔ بصری <span class="text-gradient-primary">سگمنت</span></h2>
				<p class="ft__section-desc">
					شرط‌ها را ردیف‌به‌ردیف بسازید، منطق ترکیب را با یک کلید عوض کنید و ترجمهٔ فارسی هر شرط را
					همزمان ببینید. مثال زیر یک قاعدهٔ نمونه است — نه تنظیم پیش‌فرض و نه چیزی که خودکار فعال شود.
				</p>
			</div>

			<figure class="ft__mock-wrap" data-reveal="up" style="margin: 0;">
				<div class="ft__builder">
					<div class="ft__bld-head">
						<h3 class="ft__bld-head-title">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/></svg>
							قاعدهٔ عضویت سگمنت
						</h3>
						<span class="ft__bld-badge ft__bld-badge--warn">
							<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
							نمونهٔ تصویری — قاعدهٔ پیش‌فرض نیست
						</span>
					</div>

					<div class="ft__bld-body">
						<!-- Logic toggle -->
						<div class="ft__bld-logic">
							<div class="ft__bld-logic-info">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M8 3 4 7l4 4"/><path d="M4 7h16"/><path d="m16 21 4-4-4-4"/><path d="M20 17H4"/></svg>
								<div class="ft__bld-logic-text">
									<strong>چگونه شرط‌ها ترکیب شوند؟</strong>
									<span>مشتری باید هر ۳ شرط را هم‌زمان برآورده کند تا عضو شود.</span>
								</div>
							</div>
							<div class="ft__bld-toggle" role="group" aria-label="منطق ترکیب شرط‌ها">
								<span class="ft__bld-toggle-btn is-active">همه شرط‌ها (و)</span>
								<span class="ft__bld-toggle-btn">حداقل یکی (یا)</span>
							</div>
						</div>

						<!-- Validation banner -->
						<div class="ft__bld-banner">
							<span class="ft__bld-banner-main">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
								۳ شرط آماده ذخیره
							</span>
							<span class="ft__bld-banner-tag">و (AND)</span>
						</div>

						<!-- Condition 1 -->
						<div class="ft__bld-row">
							<div class="ft__bld-row-head">
								<div class="ft__bld-row-id">
									<span class="ft__bld-num">۱</span>
									<span class="ft__bld-row-label">شرط رویدار ۱ <small>از ۳</small></span>
								</div>
								<span class="ft__bld-row-tools" aria-hidden="true">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/></svg>
								</span>
							</div>
							<div class="ft__bld-fields">
								<div class="ft__bld-field ft__bld-field--full">
									<label>رویدار</label>
									<div class="ft__bld-select">
										<span>مشاهده محصول</span>
										<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
									</div>
								</div>
								<div class="ft__bld-field">
									<label>تعداد</label>
									<div class="ft__bld-pair">
										<div class="ft__bld-select"><span>حداقل</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg></div>
										<div class="ft__bld-input">۱</div>
									</div>
								</div>
								<div class="ft__bld-field">
									<label>در چند واحد گذشته</label>
									<div class="ft__bld-pair">
										<div class="ft__bld-input">۷</div>
										<div class="ft__bld-select"><span>روز</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg></div>
									</div>
								</div>
							</div>
							<div class="ft__bld-trans">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
								<span><b>ترجمه:</b> product_view حداقل ۱ بار در ۷ روز گذشته</span>
							</div>
						</div>

						<div class="ft__bld-joiner" aria-hidden="true">
							<span class="ft__bld-joiner-chip">AND</span>
						</div>

						<!-- Condition 2 -->
						<div class="ft__bld-row">
							<div class="ft__bld-row-head">
								<div class="ft__bld-row-id">
									<span class="ft__bld-num">۲</span>
									<span class="ft__bld-row-label">شرط رویدار ۲ <small>از ۳</small></span>
								</div>
								<span class="ft__bld-row-tools" aria-hidden="true">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/></svg>
								</span>
							</div>
							<div class="ft__bld-fields">
								<div class="ft__bld-field ft__bld-field--full">
									<label>رویدار</label>
									<div class="ft__bld-select">
										<span>افزودن به سبد خرید</span>
										<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
									</div>
								</div>
								<div class="ft__bld-field">
									<label>تعداد</label>
									<div class="ft__bld-pair">
										<div class="ft__bld-select"><span>حداقل</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg></div>
										<div class="ft__bld-input">۱</div>
									</div>
								</div>
								<div class="ft__bld-field">
									<label>در چند واحد گذشته</label>
									<div class="ft__bld-pair">
										<div class="ft__bld-input">۷</div>
										<div class="ft__bld-select"><span>روز</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg></div>
									</div>
								</div>
							</div>
							<div class="ft__bld-trans">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
								<span><b>ترجمه:</b> add_to_cart حداقل ۱ بار در ۷ روز گذشته</span>
							</div>
						</div>

						<div class="ft__bld-joiner" aria-hidden="true">
							<span class="ft__bld-joiner-chip">AND</span>
						</div>

						<!-- Condition 3 -->
						<div class="ft__bld-row">
							<div class="ft__bld-row-head">
								<div class="ft__bld-row-id">
									<span class="ft__bld-num">۳</span>
									<span class="ft__bld-row-label">شرط رویدار ۳ <small>از ۳</small></span>
								</div>
								<span class="ft__bld-row-tools" aria-hidden="true">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/></svg>
								</span>
							</div>
							<div class="ft__bld-fields">
								<div class="ft__bld-field ft__bld-field--full">
									<label>رویدار</label>
									<div class="ft__bld-select">
										<span>تکمیل خرید</span>
										<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
									</div>
								</div>
								<div class="ft__bld-field">
									<label>تعداد</label>
									<div class="ft__bld-pair">
										<div class="ft__bld-select"><span>دقیقاً</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg></div>
										<div class="ft__bld-input">۰</div>
									</div>
								</div>
								<div class="ft__bld-field">
									<label>در چند واحد گذشته</label>
									<div class="ft__bld-pair">
										<div class="ft__bld-input">۷</div>
										<div class="ft__bld-select"><span>روز</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg></div>
									</div>
								</div>
							</div>
							<div class="ft__bld-trans">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
								<span><b>ترجمه:</b> تکمیل خرید دقیقاً ۰ بار در ۷ روز گذشته — یعنی خرید نکرده است</span>
							</div>
						</div>

						<button class="ft__bld-add" type="button" tabindex="-1" aria-hidden="true">
							<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 5v14"/><path d="M5 12h14"/></svg>
							افزودن شرط
						</button>
					</div>
				</div>
				<figcaption class="ft__mock-caption">نمایش تزئینی از سازندهٔ شرط — نام رویدادها از فهرست تعریف‌شدهٔ شرکت انتخاب می‌شوند</figcaption>
			</figure>

			<!-- Business-language restatement of the same rule -->
			<div class="ft__rule" style="margin-top: clamp(22px, 3vw, 30px);" data-reveal="up">
				<span class="ft__rule-badge">
					<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
					نمونهٔ تصویری — این قاعده به‌صورت پیش‌فرض وجود ندارد
				</span>

				<div class="ft__rule-steps">
					<div class="ft__rule-step">
						<span class="ft__rule-icon" aria-hidden="true">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/><path d="M11 8v6"/><path d="M8 11h6"/></svg>
						</span>
						<div class="ft__rule-body">
							<h3 class="ft__rule-title">مشتری محصولی را دیده باشد</h3>
							<p class="ft__rule-sentence">رویداد <code>product_view</code> حداقل ۱ بار در ۷ روز گذشته ثبت شده باشد.</p>
						</div>
					</div>

					<div class="ft__rule-op" aria-hidden="true"><span class="ft__rule-op-chip">AND</span></div>

					<div class="ft__rule-step">
						<span class="ft__rule-icon" aria-hidden="true">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
						</span>
						<div class="ft__rule-body">
							<h3 class="ft__rule-title">محصول را به سبد اضافه کرده باشد</h3>
							<p class="ft__rule-sentence">رویداد <code>add_to_cart</code> حداقل ۱ بار در ۷ روز گذشته ثبت شده باشد.</p>
						</div>
					</div>

					<div class="ft__rule-op" aria-hidden="true"><span class="ft__rule-op-chip">AND</span></div>

					<div class="ft__rule-step">
						<span class="ft__rule-icon ft__rule-icon--neg" aria-hidden="true">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>
						</span>
						<div class="ft__rule-body">
							<h3 class="ft__rule-title">خرید را در بازهٔ تعیین‌شده کامل نکرده باشد</h3>
							<p class="ft__rule-sentence">رویداد تکمیل خرید در ۷ روز گذشته <strong>دقیقاً ۰ بار</strong> ثبت شده باشد.</p>
						</div>
					</div>
				</div>

				<div class="ft__rule-foot">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
					<span>
						<strong>کاربرد:</strong> همین سگمنت می‌تواند مخاطب یک اتوماسیون بازاریابی باشد —
						مثلاً ارسال یادآوری خرید از طریق پیامک یا تلگرام به این گروه، مشروط به داشتن رضایت ارتباطی.
					</span>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ SEGMENT PREVIEW & EVALUATION ============ -->
	<section class="ft__section" id="preview">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
					پیش‌نمایش و ارزیابی
				</span>
				<h2 class="ft__section-title">اول ببینید، <span class="text-gradient-primary">بعد ذخیره کنید</span></h2>
				<p class="ft__section-desc">
					قبل از ذخیرهٔ هر سگمنت، سازندهٔ شرط تعداد مشتریان مطابق با قاعده را به‌صورت زنده برآورد می‌کند —
					تا مشخص شود شرط‌ها بیش از حد سفت‌اند یا بیش از حد باز.
				</p>
				<ul class="ft__checklist">
					<li><strong>پیش‌نمایش:</strong> تعداد مطابقت از کل مشتریان، بدون دست زدن به عضویت واقعی</li>
					<li>عضویت واقعی پس از ذخیره و ارزیابی سگمنت اعمال می‌شود</li>
					<li><strong>ارزیابی خودکار:</strong> با هر رویداد ثبت‌شده، ارزیابی سگمنت‌های پویا در صف قرار می‌گیرد</li>
					<li><strong>پایش دوره‌ای:</strong> شرط‌های بازه‌ای (مثل «۳۰ روز گذشته») به‌صورت دوره‌ای هم دوباره بررسی می‌شوند</li>
					<li><strong>ارزیابی دستی:</strong> دکمهٔ «ارزیابی حالا» + نمایش تاریخ آخرین ارزیابی</li>
				</ul>
				<div class="ft__note-box" style="margin-top: 18px;">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
					<p style="margin: 0;">
						<strong>صادقانه:</strong> همهٔ سگمنت‌ها در لحظهٔ ثبت رویداد به‌روز نمی‌شوند.
						ارزیابی خودکار هنگام رویداد + پایش دوره‌ای + ارزیابی دستی پیاده‌سازی شده‌اند؛
						سرعت نهایی به نوع شرط و زمان‌بندی ارزیابی بستگی دارد.
					</p>
				</div>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<figure class="ft__mock-wrap" style="margin: 0;">
					<div class="ft__bld-preview">
						<div class="ft__bld-prev-head">
							<div class="ft__bld-prev-head-main">
								<span class="ft__bld-prev-icon" aria-hidden="true">
									<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
								</span>
								<div>
									<span class="ft__bld-prev-title">برآورد مخاطبان</span>
									<span class="ft__bld-prev-sub">بر اساس داده‌های واقعی سیستم</span>
								</div>
							</div>
							<span class="ft__bld-prev-pct">۶٪</span>
						</div>
						<div class="ft__bld-prev-body">
							<div class="ft__bld-prev-count">۲۴۸</div>
							<div class="ft__bld-prev-count-label">از ۴٬۳۱۰ مشتری مطابقت دارند</div>
							<div class="ft__bld-prev-track" aria-hidden="true">
								<div class="ft__bld-prev-fill" style="width: 6%;"></div>
							</div>
							<p class="ft__bld-prev-note">
								<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
								این برآورد زنده محاسبه می‌شود؛ عضویت واقعی پس از ذخیره و ارزیابی سگمنت اعمال می‌شود.
							</p>
						</div>
					</div>
					<figcaption class="ft__mock-caption">داده‌های نمونه — برآورد پیش از ذخیرهٔ سگمنت</figcaption>
				</figure>

				<div class="ft__eval">
					<div class="ft__eval-item">
						<span class="ft__eval-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
						</span>
						<div class="ft__eval-body">
							<h3>ارزیابی با هر رویداد</h3>
							<p>ثبت هر رویداد جدید، ارزیابی سگمنت‌های وابسته به آن را به‌صورت خودکار در صف قرار می‌دهد.</p>
						</div>
					</div>
					<div class="ft__eval-item">
						<span class="ft__eval-icon ft__eval-icon--alt" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg>
						</span>
						<div class="ft__eval-body">
							<h3>پایش دوره‌ای شرط‌های بازه‌ای</h3>
							<p>شرط‌هایی که به گذشت زمان وابسته‌اند (مثل «۳۰ روز از آخرین فعالیت») در چرخهٔ دوره‌ای هم دوباره بررسی می‌شوند.</p>
						</div>
					</div>
					<div class="ft__eval-item">
						<span class="ft__eval-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
						</span>
						<div class="ft__eval-body">
							<h3>ارزیابی دستی «ارزیابی حالا»</h3>
							<p>در صورت نیاز می‌توانید هر سگمنت را فوراً دوباره ارزیابی کنید و تاریخ آخرین ارزیابی را ببینید.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ PARALLEL SEGMENT PRIORITIES ============ -->
	<section class="ft__section ft__section--surface" id="parallel">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M8 6h13"/><path d="M8 12h13"/><path d="M8 18h13"/><path d="M3 6h.01"/><path d="M3 12h.01"/><path d="M3 18h.01"/></svg>
					سگمنت‌های موازی
				</span>
				<h2 class="ft__section-title">اولویت، وقتی <span class="text-gradient-primary">یک مشتری چندجا جا می‌شود</span></h2>
				<p class="ft__section-desc">
					ممکن است یک مشتری هم‌زمان واجد شرایط چند سگمنت باشد. با مشخص‌کردن رابطهٔ موازی و اولویت،
					سیستم می‌داند عضویت او در کدام سگمنت نگه داشته شود.
				</p>
				<ul class="ft__checklist">
					<li><strong>اولویت (در رقابت سگمنت‌های موازی):</strong> اگر کاربر هم‌زمان در چند سگمنت موازی واجد شرایط باشد، در سگمنت با اولویت بالاتر قرار می‌گیرد.</li>
					<li><strong>سگمنت‌های موازی:</strong> گروه‌هایی که با این سگمنت رابطهٔ رقابتی دارند را انتخاب می‌کنید.</li>
					<li>بدون تعریف رابطهٔ موازی، سگمنت‌ها مستقل از هم عمل می‌کنند.</li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="ft__prio">
					<div class="ft__prio-card is-winner">
						<div class="ft__prio-main">
							<span class="ft__prio-dot ft__prio-dot--win" aria-hidden="true"></span>
							<div>
								<span class="ft__prio-name">خریداران اخیر ویژه</span>
								<span class="ft__prio-meta">سگمنت موازی با «همهٔ خریداران»</span>
							</div>
						</div>
						<div class="ft__prio-rank">
							<span class="ft__prio-value">3</span>
							<span class="ft__prio-label">اولویت</span>
							<span class="ft__prio-win-tag">عضویت نهایی</span>
						</div>
					</div>

					<div class="ft__prio-arrow" aria-hidden="true">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14"/><path d="m19 12-7 7-7-7"/></svg>
					</div>

					<div class="ft__prio-card">
						<div class="ft__prio-main">
							<span class="ft__prio-dot ft__prio-dot--alt" aria-hidden="true"></span>
							<div>
								<span class="ft__prio-name">همهٔ خریداران</span>
								<span class="ft__prio-meta">در رقابت با سگمنت بالا</span>
							</div>
						</div>
						<div class="ft__prio-rank">
							<span class="ft__prio-value">1</span>
							<span class="ft__prio-label">اولویت</span>
						</div>
					</div>

					<div class="ft__prio-card">
						<div class="ft__prio-main">
							<span class="ft__prio-dot" aria-hidden="true"></span>
							<div>
								<span class="ft__prio-name">مشتریان در معرض ریزش</span>
								<span class="ft__prio-meta">مستقل از دو سگمنت بالا</span>
							</div>
						</div>
						<div class="ft__prio-rank">
							<span class="ft__prio-value">—</span>
							<span class="ft__prio-label">بدون رقابت</span>
						</div>
					</div>
				</div>
				<p class="ft__mock-caption">نمایش تزئینی — مشتری واجد شرایط هر دو سگمنت بالایی، در نهایت عضو سگمنت با اولویت ۳ می‌شود</p>
			</div>
		</div>
	</section>

	<!-- ============ CONNECTING SEGMENTS TO CAMPAIGNS ============ -->
	<section class="ft__section" id="campaigns">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
					اتصال به کمپین
				</span>
				<h2 class="ft__section-title">سگمنت، <span class="text-gradient-primary">مخاطب کمپین و اتوماسیون</span></h2>
				<p class="ft__section-desc">
					سگمنت‌ها جایی ختم نمی‌شوند: در ساخت کمپین و اتوماسیون، سگمنت به‌عنوان «مخاطب هدف» انتخاب می‌شود
					و گردش‌کار روی همان اعضا اجرا می‌شود.
				</p>
				<ul class="ft__checklist">
					<li>در کمپین: مخاطب از اعضای سگمنت و/یا مرحله‌های پیپلاین فروش انتخاب می‌شود</li>
					<li>در اتوماسیون: گام «مخاطب هدف» مستقیماً یک سگمنت را برمی‌دارد</li>
					<li>تریگرهای رویدادی نیز به عضویت در سگمنت یا مرحلهٔ پیپلاین وابسته‌اند</li>
				</ul>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<div class="ft__chain">
					<div class="ft__chain-node">
						<span class="ft__chain-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>سگمنت ساخته می‌شود</h3>
							<p>شرط‌ها تعریف، پیش‌نمایش گرفته و سگمنت ذخیره می‌شود؛ اعضا با ارزیابی خودکار مشخص می‌شوند.</p>
						</div>
					</div>
					<div class="ft__chain-node">
						<span class="ft__chain-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>به‌عنوان مخاطب انتخاب می‌شود</h3>
							<p>در ویزارد کمپین یا اتوماسیون، همین سگمنت به‌عنوان مخاطب هدف انتخاب می‌شود.</p>
							<div class="ft__chain-tags">
								<span class="ft__chain-tag">کمپین زمان‌بندی‌شده</span>
								<span class="ft__chain-tag">تریگر رویدادی</span>
								<span class="ft__chain-tag">گردش‌کار n8n</span>
							</div>
						</div>
					</div>
					<div class="ft__chain-node">
						<span class="ft__chain-icon ft__chain-icon--end" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>پیام روی اعضای سگمنت اجرا می‌شود</h3>
							<p>پیامک، ایمیل یا تلگرام — در صورت داشتن رضایت ارتباطی — به همان گروه ارسال و نتیجه ثبت می‌شود.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ PRACTICAL INDUSTRY USE CASES ============ -->
	<section class="ft__section ft__section--surface" id="usecases">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
					کاربردها
				</span>
				<h2 class="ft__section-title">سگمنت‌ها در <span class="text-gradient-primary">عمل چطور استفاده می‌شوند</span></h2>
				<p class="ft__section-desc">
					چهار مثال واقعی از ترکیب ویژگی‌ها و رویدادها برای ساخت مخاطب —
					هر کدام با شرط‌هایی که همین حالا در محصول قابل ساخت‌اند.
				</p>
			</div>

			<div class="ft__grid ft__grid--cases">
				<article class="main-card ft__scen" data-reveal="up">
					<span class="ft__case-badge">مثال — فروشگاه آنلاین</span>
					<h3>یادآوری سبد خرید رهاشده</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">شرط‌ها</span>
						<p class="ft__scen-text">افزودن به سبد در ۷ روز گذشته + تکمیل خرید دقیقاً ۰ بار + رضایت پیامک فعال.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">اقدام</span>
						<p class="ft__scen-text">کمپین یادآوری خرید فقط برای این گروه — نه همهٔ مشتریان.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="60">
					<span class="ft__case-badge">مثال — B2B</span>
					<h3>پیگیری مشتریان بالقوهٔ ارزشمند</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">شرط‌ها</span>
						<p class="ft__scen-text">امتیاز بزرگتر از ۸۰ + روز از آخرین فعالیت کمتر از ۱۴ + بدون خرید در ۶۰ روز اخیر.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">اقدام</span>
						<p class="ft__scen-text">ساخت سگمنت برای تیم فروش تا تماس پیگیری فقط با این مخاطبان انجام شود.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="120">
					<span class="ft__case-badge">مثال — کمپین بازگشت</span>
					<h3>بازگرداندن مشتریان غیرفعال</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">شرط‌ها</span>
						<p class="ft__scen-text">روز از آخرین فعالیت بزرگتر از ۳۰ + رضایت ایمیل فعال + آخرین خرید قبل از ۹۰ روز پیش.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">اقدام</span>
						<p class="ft__scen-text">ارسال ایمیل بازگشت با پیشنهاد مرتبط؛ اثر کمپین با مقایسهٔ عضویت قبل/بعد سنجیده می‌شود.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="180">
					<span class="ft__case-badge">مثال — محتوا/خدمات</span>
					<h3>مخاطبان علاقه‌مند به موضوع مشخص</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">شرط‌ها</span>
						<p class="ft__scen-text">بازدید بیش از ۵ صفحه از دستهٔ «آموزش» در ۳۰ روز گذشته + رضایت ایمیل فعال.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">اقدام</span>
						<p class="ft__scen-text">اعلام دوره یا محتوای جدید همان دسته به‌صورت هدفمند، بدون اسپم به بقیهٔ فهرست.</p>
					</div>
				</article>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">مثال‌ها فرضی‌اند؛ شرط‌ها با فیلدها و رویدادهای واقعی محصول قابل ساخت‌اند.</p>

			<div class="ft__related-links" data-reveal="up" style="margin-top: clamp(26px, 3.5vw, 36px);">
				<a href="<?php echo esc_url( home_url( '/features/website-tracking/' ) ); ?>" class="ft__related-link">
					ردیابی وب‌سایت — منبع رویدادها
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/analytics/' ) ); ?>" class="ft__related-link">
					تحلیل رفتاری — بررسی نتیجه
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
			'ft_faq_title' => 'پرسش‌های متداول دربارهٔ بخش‌بندی مشتریان',
			'ft_faq_intro' => 'پاسخ پرسش‌های رایج دربارهٔ سرعت به‌روزرسانی، فیلدها و اتصال به کمپین.',
			'ft_faq_items' => array(
				array(
					'q' => 'آیا سگمنت پویا بلافاصله به‌روز می‌شود؟',
					'a' => 'ارزیابی با هر رویداد ثبت‌شده به‌صورت خودکار در صف قرار می‌گیرد و شرط‌های بازه‌ای در پایش دوره‌ای هم دوباره بررسی می‌شوند؛ افزون بر آن دکمهٔ «ارزیابی حالا» برای ارزیابی دستی وجود دارد. با این حال به‌روزرسانی لحظه‌ایِ همهٔ سگمنت‌ها تضمین نمی‌شود و سرعت نهایی به نوع شرط بستگی دارد.',
				),
				array(
					'q' => 'با چه فیلدهایی می‌توان شرط ساخت؟',
					'a' => 'فیلدهای ثابت شامل مشخصات شخصی (نام، تاریخ تولد، جنسیت، شرکت)، مکان (کشور، شهر، استان)، تعامل (امتیاز، منبع، وضعیت فعال)، ترجیحات رضایت (ایمیل، پیامک، نوتیفیکیشن، واتساپ) و ویژگی‌ها (برچسب‌ها، روز از ثبت‌نام، تعداد بازدید، روز از آخرین فعالیت) است. ویژگی‌های سفارشی تعریف‌شده توسط شرکت شما و رویدادها نیز به همان سازنده اضافه می‌شوند.',
				),
				array(
					'q' => 'فرق سگمنت ایستا و پویا چیست؟',
					'a' => 'سگمنت ایستا شرط ندارد و عضوها را دستی اضافه/حذف می‌کنید؛ سگمنت پویا شرط تعریف می‌کند و عضویت با ارزیابی خودکار و دوره‌ای نگه داشته می‌شود. در رابط محصول هر کدام با برچسب «استاتیک (دستی)» و «داینامیک (خودکار)» نمایش داده می‌شوند.',
				),
				array(
					'q' => 'سگمنت موازی چه زمانی لازم است؟',
					'a' => 'وقتی یک مشتری ممکن است هم‌زمان واجد شرایط چند سگمنت باشد. با تعریف رابطهٔ موازی و اولویت، مشتری در سگمنت با اولویت بالاتر نگه داشته می‌شود. سگمنت‌هایی که رابطهٔ موازی ندارند مستقل عمل می‌کنند.',
				),
				array(
					'q' => 'چطور بفهمم این شرط چند مشتری را دربر می‌گیرد؟',
					'a' => 'قبل از ذخیره، پنل «برآورد مخاطبان» تعداد مطابقت از کل مشتریان را نشان می‌دهد. این برآورد زنده است و عضویت واقعی فقط پس از ذخیره و ارزیابی سگمنت اعمال می‌شود.',
				),
				array(
					'q' => 'سگمنت به کجا وصل می‌شود؟',
					'a' => 'به‌عنوان مخاطب هدف در <a href="' . esc_url( home_url( '/features/' ) ) . '">کمپین و اتوماسیون‌ها</a> انتخاب می‌شود؛ کمپین می‌تواند روی اعضای سگمنت یا مرحله‌های <a href="' . esc_url( home_url( '/for-business/' ) ) . '">پیپلاین فروش</a> اجرا شود. برای ساخت شرط‌های رویدادی، <a href="' . esc_url( home_url( '/features/website-tracking/' ) ) . '">ردیابی وب‌سایت</a> پیش‌نیاز است.',
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
			'ft_cta_title'           => 'مخاطبان درست را همین امروز بسازید',
			'ft_cta_desc'            => 'در داشبورد «xCRM فروش» اولین سگمنت پویا را با شرط‌های واقعی بسازید، پیش‌نمایش تعداد مخاطب را ببینید و آن را به کمپین بعدی وصل کنید.',
			'ft_cta_primary_url'     => $dash_url,
			'ft_cta_primary_label'   => 'شروع رایگان',
			'ft_cta_secondary_url'   => home_url( '/features/website-tracking/' ),
			'ft_cta_secondary_label' => 'نصب ردیابی وب‌سایت',
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
