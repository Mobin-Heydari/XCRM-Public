<?php
/**
 * Template Name: Feature — Website Tracking
 * Template Post Type: page
 *
 * صفحهٔ جزئیات قابلیت — ردیابی وب‌سایت و SDK مرورگر
 * /features/website-tracking/
 *
 * کدهای نمونه از SDK واقعی (xcrm.min.js v1.1.0) استخراج و بازبینی شده‌اند.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_stylesheet_directory() . '/inc/features-data.php';

$home_url   = home_url( '/' );
$features   = home_url( '/features/' );
$canonical  = home_url( '/features/website-tracking/' );
$dash_url   = 'https://dashboard.xcrmforosh.com/';

$page_title       = 'ردیابی وب‌سایت و SDK مرورگر | «xCRM فروش»';
$page_description = 'با اسکریپت SDK «xCRM فروش» بازدیدها، جلسات، جستجوها و رویدادهای خرید را ثبت کنید، به پروفایل مشتری وصل کنید و از همان داده برای تحلیل، سگمنت و اتوماسیون استفاده کنید.';
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
			array('@type'=>'ListItem','position'=>3,'name'=>'ردیابی وب‌سایت','item'=>esc_url($canonical)),
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
				<span class="ft__breadcrumb-current">ردیابی وب‌سایت</span>
			</nav>

			<span class="ft__label ft-anim ft-anim--1">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 5h18v14H3z"/><path d="M3 9h18"/><circle cx="6.5" cy="7" r=".5" fill="currentColor"/><circle cx="9" cy="7" r=".5" fill="currentColor"/></svg>
				ردیابی وب‌سایت و SDK مرورگر
			</span>

			<h1 class="ft__title ft-anim ft-anim--2">
				رفتار کاربران وب‌سایت را جمع‌آوری کنید و به <span class="text-gradient-primary">دادهٔ قابل استفاده</span> تبدیل کنید
			</h1>

			<p class="ft__hero-desc ft-anim ft-anim--3">
				بازدید صفحه، جستجو، کلیک، فرم و خرید — همه در یک جریان ثبت می‌شوند،
				به پروفایل مشتری وصل می‌شوند و از همان لحظه در اختیار تحلیل، بخش‌بندی و اتوماسیون قرار می‌گیرند.
			</p>

			<div class="ft__hero-actions ft-anim ft-anim--4">
				<a href="<?php echo esc_url( $dash_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
					شروع رایگان
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="#install" class="hp__btn hp__btn--ghost" data-magnetic>
					مشاهدهٔ نحوهٔ نصب
				</a>
			</div>

			<ul class="ft__hero-pills ft-anim ft-anim--5" aria-label="نکات کلیدی">
				<li>نصب با یک خط اسکریپت</li>
				<li>هویت ناشناس و شناسایی‌شده</li>
				<li>UTM، Web Vitals و رویدادهای فروشگاهی</li>
			</ul>
			</div>
			<div class="ft__hero-media">
			<?php get_template_part( 'template-parts/feature-hero-graphic', null, array( 'slug' => 'website-tracking' ) ); ?>
			</div>
		</div>
	</section>

	<!-- ============ WHY ORDINARY VISITOR STATS ARE NOT ENOUGH ============ -->
	<section class="ft__section ft__section--surface" id="why">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
					ریشهٔ مشکل
				</span>
				<h2 class="ft__section-title">چرا شمارش بازدید <span class="text-gradient-primary">کافی نیست؟</span></h2>
				<p class="ft__section-desc">
					ابزارهای شمارش بازدید می‌گویند چند نفر آمده‌اند، اما نمی‌گویند چه کسی چه کرد،
					کجا متوقف شد و آیا اصلاً به مشتری تبدیل شد یا نه.
				</p>
			</div>

			<div class="ft__grid ft__grid--caps">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
					</span>
					<h3>بازدید بی‌نام</h3>
					<p>عدد بازدید هویت ندارد؛ نمی‌توانید رفتار یک بازدیدکننده را دنبال کنید یا به او برگردید.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
					</span>
					<h3>دادهٔ پراکنده</h3>
					<p>آمار وب‌سایت در یک ابزار و سوابق مشتری در جای دیگر؛ هیچ‌کدام به هم وصل نیستند.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
					</span>
					<h3>رویدادهای نادیده</h3>
					<p>جستجوی داخل سایت، افزودن به سبد و فرم نیمه‌کاره؛ مهم‌ترین سیگنال‌ها اصلاً ثبت نمی‌شوند.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="180">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 17H7A5 5 0 0 1 7 7h2"/><path d="M15 7h2a5 5 0 0 1 4 8"/><path d="M8 12h4"/><path d="m2 2 20 20"/></svg>
					</span>
					<h3>دادهٔ بی‌اقدام</h3>
					<p>داده‌ای که به پروفایل مشتری، سگمنت یا کمپین وصل نشود، فقط نمودار است — نه اقدام.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ HOW THE SDK WORKS ============ -->
	<section class="ft__section" id="how">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m18 16 4-4-4-4"/><path d="m6 8-4 4 4 4"/><path d="m14.5 4-5 16"/></svg>
					مکانیزم کار
				</span>
				<h2 class="ft__section-title">SDK ردیابی <span class="text-gradient-primary">چگونه کار می‌کند؟</span></h2>
				<p class="ft__section-desc">
					یک اسکریپت کوچک در صفحهٔ شما قرار می‌گیرد و بقیهٔ کار را خودش انجام می‌دهد —
					از ثبت رویداد تا ارسال امن آن‌ها به پلتفرم.
				</p>
			</div>

			<div class="ft__grid ft__grid--caps">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 16 4-4-4-4"/><path d="m6 8-4 4 4 4"/><path d="m14.5 4-5 16"/></svg>
					</span>
					<h3>تگ با شناسهٔ شما</h3>
					<p>اسکریپت با شناسهٔ <code>cpid</code> شرکت شما بارگذاری می‌شود و خودکار فعال می‌شود؛ بدون تنظیم دستی.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>
					</span>
					<h3>قلاب‌های خودکار</h3>
					<p>بازدید صفحه، کلیک، ارسال فرم، کپی متن، لینک‌های خروجی و ناوبری‌های تک‌صفحه‌ای بدون کدنویسی ثبت می‌شوند.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
					</span>
					<h3>ارسال دسته‌ای</h3>
					<p>رویدادها در صف قرار می‌گیرند و به‌صورت دسته‌ای (حداکثر ۵۰ رویداد یا هر ۵ ثانیه) ارسال می‌شوند؛ در صورت امکان با <code>sendBeacon</code>.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="180">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4"/><path d="M12 18v4"/><path d="M4.93 4.93l2.83 2.83"/><path d="M16.24 16.24l2.83 2.83"/><path d="M2 12h4"/><path d="M18 12h4"/><path d="M4.93 19.07l2.83-2.83"/><path d="M16.24 7.76l2.83-2.83"/></svg>
					</span>
					<h3>غنی‌سازی خودکار</h3>
					<p>هر رویداد همراه جلسهٔ کاربر، اطلاعات دستگاه و پارامترهای UTM ارسال می‌شود؛ دادهٔ خام نیست.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ VISUAL JOURNEY ============ -->
	<section class="ft__section ft__section--surface" id="journey">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
					مسیر داده
				</span>
				<h2 class="ft__section-title">از بازدیدکننده تا اتوماسیون، <span class="text-gradient-primary">در ۷ گام</span></h2>
				<p class="ft__section-desc">
					سفر کامل یک بازدید تا تبدیل‌شدن به اقدام بازاریابی — در سطح کسب‌وکار،
					بدون نیاز به درک جزئیات فنی زیرساخت.
				</p>
				<ul class="ft__checklist">
					<li>هر مرحله به مرحلهٔ بعد وصل است؛ داده قطع نمی‌شود</li>
					<li>کاربر ناشناس هم از همان لحظهٔ اول ثبت می‌شود</li>
					<li>خروجی نهایی: سگمنت و کمپین آمادهٔ فعال‌سازی</li>
				</ul>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<ol class="ft__journey">
					<li class="ft__j-step">
						<span class="ft__j-num" aria-hidden="true">۱</span>
						<div class="ft__j-body">
							<h3>بازدیدکننده وارد سایت می‌شود</h3>
							<p>کاربر از هر کانالی — تبلیغ، جستجو یا شبکهٔ اجتماعی — به صفحه‌ای از وب‌سایت شما می‌رسد.</p>
						</div>
					</li>
					<li class="ft__j-step">
						<span class="ft__j-num" aria-hidden="true">۲</span>
						<div class="ft__j-body">
							<h3>SDK فعال می‌شود</h3>
							<p>تگ اسکریپت با شناسهٔ شرکت شما بارگذاری می‌شود و آمادهٔ ثبت رویدادها می‌شود.</p>
						</div>
					</li>
					<li class="ft__j-step">
						<span class="ft__j-num" aria-hidden="true">۳</span>
						<div class="ft__j-body">
							<h3>رویدادها جمع‌آوری می‌شوند</h3>
							<p>بازدید صفحه، جستجو، کلیک، فرم و رویدادهای فروشگاهی به‌صورت خودکار ثبت می‌شوند.</p>
						</div>
					</li>
					<li class="ft__j-step">
						<span class="ft__j-num" aria-hidden="true">۴</span>
						<div class="ft__j-body">
							<h3>هویت شناسایی می‌شود</h3>
							<p>رفتار به شناسهٔ ناشناس گره می‌خورد و در صورت شناسایی کاربر، به شناسهٔ مشتری شما وصل می‌شود.</p>
						</div>
					</li>
					<li class="ft__j-step">
						<span class="ft__j-num" aria-hidden="true">۵</span>
						<div class="ft__j-body">
							<h3>داده وارد xCRM می‌شود</h3>
							<p>رویدادها به‌صورت دسته‌ای و همراه اطلاعات جلسه و دستگاه به پلتفرم ارسال می‌شوند.</p>
						</div>
					</li>
					<li class="ft__j-step">
						<span class="ft__j-num" aria-hidden="true">۶</span>
						<div class="ft__j-body">
							<h3>رفتار قابل تحلیل می‌شود</h3>
							<p>پروفایل مشتری، قیف‌ها و گزارش‌ها از همین رویدادها ساخته و به‌روز می‌شوند.</p>
						</div>
					</li>
					<li class="ft__j-step ft__j-step--now">
						<span class="ft__j-num" aria-hidden="true">۷</span>
						<div class="ft__j-body">
							<h3>رویدادها اقدام را فعال می‌کنند</h3>
							<p>یک رویداد می‌تواند عضویت کاربر در سگمنت یا اجرای یک کمپین را رقم بزند.</p>
						</div>
					</li>
				</ol>
			</div>
		</div>
	</section>

	<!-- ============ EVENT TRACKING VISUAL ============ -->
	<section class="ft__section" id="events">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h10"/></svg>
					کاتالوگ رویدادها
				</span>
				<h2 class="ft__section-title">هر تعامل، <span class="text-gradient-primary">یک رویداد ثبت‌شده</span></h2>
				<p class="ft__section-desc">
					بخش بزرگی از این رویدادها بدون هیچ کدنویسی ثبت می‌شوند؛ برای موارد سفارشی هم دو روش ساده دارید.
				</p>
			</div>

			<ul class="ft__events" data-reveal="up" aria-label="رویدادهای پیش‌فرض SDK">
				<li class="ft__ev"><code>page_view</code><span>بازدید صفحه</span></li>
				<li class="ft__ev"><code>session_start</code><span>شروع جلسه</span></li>
				<li class="ft__ev"><code>product_view</code><span>مشاهده محصول</span></li>
				<li class="ft__ev"><code>add_to_cart</code><span>افزودن به سبد</span></li>
				<li class="ft__ev"><code>remove_from_cart</code><span>حذف از سبد</span></li>
				<li class="ft__ev"><code>search</code><span>جستجو</span></li>
				<li class="ft__ev"><code>form_submit</code><span>ارسال فرم</span></li>
				<li class="ft__ev"><code>click</code><span>کلیک</span></li>
				<li class="ft__ev"><code>copy</code><span>کپی متن</span></li>
				<li class="ft__ev"><code>download</code><span>دانلود</span></li>
				<li class="ft__ev"><code>video_play</code><span>پخش ویدیو</span></li>
				<li class="ft__ev"><code>share</code><span>اشتراک‌گذاری</span></li>
				<li class="ft__ev"><code>error</code><span>خطای صفحه</span></li>
				<li class="ft__ev"><code>outbound</code><span>لینک خروجی</span></li>
			</ul>

			<div class="ft__split" style="margin-top: clamp(28px, 4vw, 40px);">
				<div class="ft__split-copy" data-reveal="up">
					<h3 class="ft__section-title" style="font-size: clamp(1.1rem, 2.2vw, 1.4rem);">دو روش برای ثبت رویداد سفارشی</h3>
					<p class="ft__section-desc">
						بدون JS: با یک ویژگی HTML روی هر عنصر. با JS: فراخوانی مستقیم متدهای SDK.
						هر دو روش در نسخهٔ فعلی SDK موجود و قابل استفاده‌اند.
					</p>

					<figure class="ft__code-wrap" style="margin-top: 18px;">
						<div class="ft__code" dir="ltr"><pre><code><span class="c-tag">&lt;button</span>
  <span class="c-attr">data-xcrm-event</span>=<span class="c-str">"request_demo"</span>
  <span class="c-attr">data-xcrm-prop-location</span>=<span class="c-str">"hero"</span><span class="c-tag">&gt;</span>
  درخواست دمو
<span class="c-tag">&lt;/button&gt;</span></code></pre></div>
						<figcaption class="ft__code-cap">ویژگی‌های <code dir="ltr">data-xcrm-prop-*</code> به‌صورت خودکار به خواص رویداد تبدیل می‌شوند.</figcaption>
					</figure>

					<figure class="ft__code-wrap" style="margin-top: 16px;">
						<div class="ft__code" dir="ltr"><pre><code><span class="c-fn">xcrm.event</span>(<span class="c-str">"request_demo"</span>, { location: <span class="c-str">"hero"</span> });</code></pre></div>
						<figcaption class="ft__code-cap">نام رویداد سفارشی حداکثر ۱۰۰ کاراکتر است و همراه خواصش ثبت می‌شود.</figcaption>
					</figure>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<figure class="ft__mock-wrap">
						<div class="ft__stream">
							<div class="ft__stream-row"><code>page_view</code><span>/product/red-shoes</span><em>۲ ثانیه پیش</em></div>
							<div class="ft__stream-row"><code>search</code><span>"running shoes"</span><em>۹ ثانیه پیش</em></div>
							<div class="ft__stream-row"><code>product_view</code><span>SKU-1042</span><em>۱۵ ثانیه پیش</em></div>
							<div class="ft__stream-row"><code>add_to_cart</code><span>SKU-1042 ×1</span><em>۲۱ ثانیه پیش</em></div>
							<div class="ft__stream-row"><code>form_submit</code><span>request-demo</span><em>۱ دقیقه پیش</em></div>
						</div>
						<figcaption class="ft__mock-caption">نمایش تزئینی از جریان رویدادها — داده‌های نمونه‌اند.</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ ANONYMOUS VS IDENTIFIED ============ -->
	<section class="ft__section ft__section--surface" id="identity">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					هویت کاربر
				</span>
				<h2 class="ft__section-title">کاربر ناشناس یا <span class="text-gradient-primary">مشتری شناسایی‌شده؟</span></h2>
				<p class="ft__section-desc">
					ثبت رفتار از لحظهٔ اول شروع می‌شود؛ هر وقت کاربر شناسایی شد، همان تاریخچه زیر نام او قرار می‌گیرد.
				</p>
			</div>

			<div class="ft__compare">
				<article class="main-card ft__cmp" data-reveal="up">
					<span class="ft__cmp-badge">مرحلهٔ اول</span>
					<h3>ناشناس — با شناسهٔ LUID</h3>
					<p>
						با اولین بازدید، یک شناسهٔ یکتا (LUID) در کوکی و حافظهٔ مرورگر ساخته می‌شود.
						رفتار کامل کاربر از همین‌جا ثبت می‌شود — بی‌آنکه نام یا اطلاعات تماسی داشته باشیم.
					</p>
					<code class="ft__cmp-code">xcrm.getAnonymousId();</code>
					<ul class="ft__cmp-list">
						<li>ثبت بلافصل بازدیدها و رویدادها بدون فرم ورود</li>
						<li>شناسهٔ ناشناس تا ۳۶۵ روز در مرورگر نگه داشته می‌شود</li>
						<li>جلسهٔ کاربر تا ۳۰ دقیقه عدم فعالیت ادامه دارد</li>
					</ul>
				</article>

				<article class="main-card ft__cmp" data-reveal="up" data-reveal-delay="90">
					<span class="ft__cmp-badge ft__cmp-badge--alt">پس از شناسایی</span>
					<h3>شناسایی‌شده — با client_pid</h3>
					<p>
						با فراخوانی <code dir="ltr">identify()</code>، شناسهٔ مشتری به رفتار گره می‌خورد.
						از این پس هر رویداد، هم شناسهٔ ناشناس و هم شناسهٔ مشتری را حمل می‌کند.
					</p>
					<code class="ft__cmp-code">xcrm.identify(1042, { phone: "09121234567" });</code>
					<ul class="ft__cmp-list">
						<li>شماره موبایل به‌صورت خودکار به فرمت بین‌المللی تبدیل می‌شود</li>
						<li>شناسایی خودکار: متا تگ <code dir="ltr">xcrm-page</code>، سرویس کاربر یا <code dir="ltr">window.xcrmUser</code></li>
						<li>اگر هیچ‌کدام در دسترس نباشد، کاربر ناشناس باقی می‌ماند</li>
					</ul>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ E-COMMERCE ============ -->
	<section class="ft__section" id="ecommerce">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
					رفتار خرید
				</span>
				<h2 class="ft__section-title">مسیر خرید را <span class="text-gradient-primary">قدم‌به‌قدم ببینید</span></h2>
				<p class="ft__section-desc">
					از مشاهدهٔ محصول تا حذف از سبد — هر گام فروشگاهی به‌صورت رویداد استاندارد ثبت می‌شود
					و در تحلیل‌ها و سگمنت‌ها قابل استفاده است.
				</p>
				<ul class="ft__checklist">
					<li>تشخیص خودکار محصول از متا تگ‌ها، Open Graph، JSON-LD و الگوی آدرس صفحه</li>
					<li>تاریخچهٔ سبد خرید، علاقه‌مندی‌ها و محصولات بازدیدشده در سمت مرورگر (حداکثر ۵۰ قلم، ۳۰ روز)</li>
					<li>جستجوی داخل فروشگاه همراه عبارت، تعداد نتایج و فیلترها ثبت می‌شود</li>
					<li>رویدادهای سفارشی فروشگاهی با یک متد آماده</li>
				</ul>

				<figure class="ft__code-wrap" style="margin-top: 18px;">
					<div class="ft__code" dir="ltr"><pre><code><span class="c-fn">xcrm.trackProductView</span>(<span class="c-str">"P1042"</span>, <span class="c-str">"کفش ورزشی"</span>, <span class="c-str">890000</span>, <span class="c-str">"ورزشی"</span>);
<span class="c-fn">xcrm.trackAddToCart</span>(<span class="c-str">"P1042"</span>, <span class="c-str">1</span>, <span class="c-str">890000</span>);</code></pre></div>
					<figcaption class="ft__code-cap">نمونه — شناسه، نام، قیمت و دستهٔ محصول را خودتان پر می‌کنید.</figcaption>
				</figure>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<div class="ft__visual-col">
					<div class="ft__prod">
						<div class="ft__prod-card" aria-hidden="true">
							<span class="ft__prod-img"></span>
							<span class="ft__prod-lines"><b></b><i></i><em></em></span>
						</div>
						<div class="ft__prod-fires" aria-hidden="true">
							<span class="ft__prod-fire">product_view</span>
							<span class="ft__prod-arrow">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
							</span>
							<span class="ft__prod-fire">add_to_cart</span>
							<span class="ft__prod-arrow">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
							</span>
							<span class="ft__prod-fire">remove_from_cart</span>
						</div>
					</div>
					<p class="ft__mock-caption">نمایش تزئینی از زنجیرهٔ رویدادهای فروشگاهی</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ UTM ATTRIBUTION ============ -->
	<section class="ft__section ft__section--surface" id="utm">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					اتریبیوشن
				</span>
				<h2 class="ft__section-title">از کجا آمدند؟ <span class="text-gradient-primary">اتریبیوشن UTM</span></h2>
				<p class="ft__section-desc">
					هر ۹ پارامتر UTM روی هر رویداد ثبت می‌شود؛ هم اولین برخورد کاربر با کمپین‌ها
					و هم آخرین برخورد (در بازهٔ ۳۰ دقیقهٔ اخیر) به‌همراه تاریخچهٔ کامل نگه داشته می‌شود.
				</p>
				<ul class="ft__checklist">
					<li>اولین برخورد (first-touch): مبدأ واقعی جذب مشتری</li>
					<li>آخرین برخورد (last-touch): کانال مؤثر قبل از اقدام</li>
					<li>تاریخچهٔ کامل UTM برای تحلیل مسیر چندلمسی</li>
					<li>دریافت از طریق متدهای <code dir="ltr">getFirstTouchUTM()</code> و <code dir="ltr">getLastTouchUTM()</code></li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="ft__utm">
					<div class="ft__touch ft__touch--first">
						<span class="ft__touch-dot" aria-hidden="true"></span>
						<div class="ft__touch-body">
							<span class="ft__touch-label">اولین برخورد — ۲ هفته پیش</span>
							<div class="ft__touch-params" dir="ltr">
								<code>utm_source=instagram</code>
								<code>utm_medium=social</code>
							</div>
						</div>
					</div>
					<div class="ft__touch ft__touch--last">
						<span class="ft__touch-dot" aria-hidden="true"></span>
						<div class="ft__touch-body">
							<span class="ft__touch-label">آخرین برخورد — ۲۰ دقیقه پیش</span>
							<div class="ft__touch-params" dir="ltr">
								<code>utm_source=google</code>
								<code>utm_medium=cpc</code>
							</div>
						</div>
					</div>
				</div>
				<p class="ft__mock-caption">نمایش تزئینی — داده‌های نمونه برای درک ساختار</p>
			</div>
		</div>
	</section>

	<!-- ============ DEVICE & PERFORMANCE ============ -->
	<section class="ft__section" id="device">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8"/><path d="M12 17v4"/></svg>
					دستگاه و عملکرد
				</span>
				<h2 class="ft__section-title">دستگاه، سرعت صفحه <span class="text-gradient-primary">و خطاهای مرورگر</span></h2>
				<p class="ft__section-desc">
					کنار هر رویداد، اطلاعات دستگاه و کیفیت فنی صفحه هم ثبت می‌شود —
					برای اینکه بدانید تجربهٔ کاربر روی چه سخت‌افزار و مرورگری چگونه بوده است.
				</p>
			</div>

			<div class="ft__metrics" data-reveal="up" aria-label="معیارهای Web Vitals">
				<div class="ft__metric"><code>LCP</code><span>بزرگ‌ترین محتوای قابل مشاهده</span></div>
				<div class="ft__metric"><code>CLS</code><span>جابه‌جایی چیدمان انباشته</span></div>
				<div class="ft__metric"><code>INP</code><span>زمان پاسخ‌گویی به تعامل</span></div>
				<div class="ft__metric"><code>FCP</code><span>اولین رنگ محتوا</span></div>
				<div class="ft__metric"><code>TTFB</code><span>زمان تا اولین بایت</span></div>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">همهٔ معیارهای Web Vitals به‌همراه امتیازدهی ثبت می‌شوند و از طریق متدهای <code dir="ltr">getWebVitals()</code> و <code dir="ltr">onWebVitals()</code> قابل دریافت‌اند.</p>

			<div class="ft__grid ft__grid--caps" style="margin-top: clamp(24px, 3vw, 32px);">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
					</span>
					<h3>اطلاعات دستگاه</h3>
					<p>مرورگر و سیستم‌عامل تشخیص داده می‌شود و شناسهٔ دستگاه نگه داشته می‌شود. اثر انگشت دستگاه (fingerprint) اختیاری و قابل فعال‌سازی است.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
					</span>
					<h3>خطاهای صفحه</h3>
					<p>خطاهای جاوااسکریپت (onerror و unhandledrejection) همراه stack trace ثبت می‌شوند؛ خطاهای تکراری در بازهٔ کوتاه یکجا می‌شوند تا شلوغ نشود.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
					</span>
					<h3>Web Push</h3>
					<p>در صورت فعال‌سازی، اشتراک‌گذاری Push و رویدادهای نمایش/کلیک آن ثبت می‌شود. درخواست مجوز Push حداکثر ۳ بار و با فاصلهٔ حداقل ۷ روز نمایش داده می‌شود.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ PRIVACY & CONSENT ============ -->
	<section class="ft__section ft__section--surface" id="privacy">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
					حریم خصوصی
				</span>
				<h2 class="ft__section-title">رضایت کاربر، <span class="text-gradient-primary">در کنترل شما</span></h2>
				<p class="ft__section-desc">
					SDK گزینهٔ رضایت صریح دارد؛ با فعال‌سازی آن، ارسال هر رویداد تا اعلام رضایت کاربر متوقف می‌ماند.
				</p>
			</div>

			<div class="ft__grid ft__grid--caps">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
					</span>
					<h3>بنر رضایت داخلی</h3>
					<p>با افزودن ویژگی <code dir="ltr">consent="true"</code> به تگ اسکریپت، یک بنر رضایت فارسی و راست‌چین در صفحه نمایش داده می‌شود.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
					</span>
					<h3>درِ بسته تا پذیرش</h3>
					<p>تا زمانی که کاربر رضایت ندهد، SDK راه‌اندازی نمی‌شود و رویدادی ارسال نمی‌شود. در صورت ردِ رضایت، فعالیت کاملاً متوقف می‌ماند.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
					</span>
					<h3>کنترل برنامه‌ای</h3>
					<p>وضعیت رضایت از داخل کد هم قابل تنظیم است؛ برای اتصال به سامانهٔ رضایت خودتان:</p>
					<code class="ft__cmp-code" style="margin-bottom: 0;">xcrm.setConsent("granted");</code>
				</article>
			</div>

			<div class="ft__note-box" style="margin-top: clamp(22px, 3vw, 30px);" data-reveal="up">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
				<p style="margin: 0;">
					<strong>نکته:</strong> فعال‌سازی ردیابی تابع الزامات رضایت و مقررات حوزهٔ فعالیت شماست.
					SDK جایگزین الزامات رضایت مرورگر یا قانونی نمی‌شود؛ مسئولیت اخذ رضایت کاربران بر عهدهٔ مدیر وب‌سایت است.
				</p>
			</div>
		</div>
	</section>

	<!-- ============ CONNECTING TO CUSTOMER PROFILES ============ -->
	<section class="ft__section" id="profiles">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
					وصل به CRM
				</span>
				<h2 class="ft__section-title">هر رویداد، به <span class="text-gradient-primary">پروفایل مشتری</span> می‌چسبد</h2>
				<p class="ft__section-desc">
					رویدادهای وب‌سایت در همان پروفایلی قرار می‌گیرند که اطلاعات تماس، سفارش‌ها و یادداشت‌های تیم در آن است —
					تاریخچهٔ کامل و یکپارچه، نه داده‌های جدا در ابزارهای مختلف.
				</p>
				<ul class="ft__checklist">
					<li>تشخیص خودکار هویت: از شناسهٔ مشتری تا شناسهٔ ناشناس، بدون دخالت دستی</li>
					<li>خط زمانی تعاملات: هر بازدید، جستجو و خرید در جای خودش</li>
					<li>تیم فروش، بازاریابی و پشتیبانی یک تصویر مشترک از مشتری می‌بینند</li>
				</ul>
				<a href="<?php echo esc_url( home_url( '/features/customer-management/' ) ); ?>" class="ft__related-link" style="margin-top: 20px;">
					آشنایی با مدیریت مشتریان
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<div class="ft__mock">
					<div class="ft__mock-bar" aria-hidden="true"><span></span><span></span><span></span></div>
					<div class="ft__mock-body">
						<div class="ft__mock-main ft__mock-main--full" aria-hidden="true">
							<div class="ft__mock-profile-head">
								<span class="ft__mock-avatar"></span>
								<span class="ft__mock-profile-lines"><b></b><i></i></span>
							</div>
							<div class="ft__mock-tabs">
								<span class="is-active"></span><span></span><span></span><span></span>
							</div>
							<div class="ft__mock-timeline">
								<span></span><span></span><span></span>
							</div>
						</div>
					</div>
				</div>
				<p class="ft__mock-caption">خط زمانی پروفایل مشتری — نمایش تزئینی</p>
			</div>
		</div>
	</section>

	<!-- ============ CONNECT TO ANALYTICS / SEGMENTS / AUTOMATION ============ -->
	<section class="ft__section ft__section--surface" id="activate">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
					فعال‌سازی
				</span>
				<h2 class="ft__section-title">از رویداد به <span class="text-gradient-primary">تحلیل، سگمنت و اتوماسیون</span></h2>
				<p class="ft__section-desc">
					رویدادهای جمع‌آوری‌شده خوراک سه ماژول اصلی‌اند. صفحات تفصیلی این قابلیت‌ها به‌تدریج اضافه می‌شوند؛
					مسیرهای زیر همین حالا در دسترس‌اند.
				</p>
			</div>

			<div class="ft__grid ft__grid--caps">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
					</span>
					<h3>تحلیل رفتار</h3>
					<p>قیف تبدیل، نرخ بازگشت، کوهورت‌ها، RFM و مسیر مشتری — مستقیماً از همین رویدادها ساخته می‌شوند و با خروجی CSV قابل بررسی‌اند.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/></svg>
					</span>
					<h3>سگمنت رویدادی</h3>
					<p>شرط بگذارید: «کسانی که در ۷ روز گذشته محصولی را دیده‌اند اما نخریده‌اند» — با پیش‌نمایش تعداد اعضا پیش از اعمال.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>
					</span>
					<h3>اتوماسیون رفتاری</h3>
					<p>رویداد می‌تواند کمپین را همان لحظه فعال کند، با تأخیر اجرا شود یا بر اساس «انجام نشدنِ» رفتار — مثل سبد خرید رهاشده — شلیک شود.</p>
				</article>
			</div>

			<div class="ft__related-links" data-reveal="up">
				<a href="<?php echo esc_url( home_url( '/features/customer-management/' ) ); ?>" class="ft__related-link">
					مدیریت مشتریان
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/for-marketers/' ) ); ?>" class="ft__related-link">
					مسیر دیجیتال مارکترها
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( $features ); ?>" class="ft__related-link">
					فهرست کامل امکانات
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
			</div>
		</div>
	</section>

	<!-- ============ INSTALLATION ============ -->
	<section class="ft__section" id="install">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="M7 10l5 5 5-5"/><path d="M12 15V3"/></svg>
					شروع کار
				</span>
				<h2 class="ft__section-title">نصب، <span class="text-gradient-primary">در چند دقیقه</span></h2>
				<p class="ft__section-desc">
					شناسهٔ <code dir="ltr">cpid</code> و کد نصب را از بخش «SDK وب‌سایت» داشبورد دریافت کنید —
					کد دقیق مخصوص شرکت شماست.
				</p>
				<ul class="ft__checklist">
					<li><strong>وردپرس:</strong> پلاگین xCRM فایل SDK را بارگذاری می‌کند و تگ نصب را با شناسهٔ شما درج می‌کند</li>
					<li><strong>سایر وب‌سایت‌ها:</strong> یک تگ اسکریپت را در بخش <code dir="ltr">&lt;head&gt;</code> صفحه قرار دهید</li>
					<li>فعال‌سازی خودکار هنگام بارگذاری صفحه — نیازی به فراخوانی دستی نیست</li>
					<li>ویژگی‌های اختیاری تگ: <code dir="ltr">consent</code>، <code dir="ltr">debug</code>، <code dir="ltr">auto-track</code>، <code dir="ltr">fingerprint</code>، <code dir="ltr">web-vitals</code>، <code dir="ltr">error-tracking</code></li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<figure class="ft__code-wrap">
					<div class="ft__code" dir="ltr"><pre><code><span class="c-cmt">&lt;!-- کد دقیق را از داشبورد کپی کنید --&gt;</span>
<span class="c-tag">&lt;script</span> <span class="c-attr">id</span>=<span class="c-str">"xcrm-js"</span>
        <span class="c-attr">src</span>=<span class="c-str">"YOUR_XCRM_SDK_URL"</span>
        <span class="c-attr">cpid</span>=<span class="c-str">"YOUR_COMPANY_ID"</span>
        <span class="c-attr">consent</span>=<span class="c-str">"true"</span>
        <span class="c-attr">defer</span><span class="c-tag">&gt;&lt;/script&gt;</span></code></pre></div>
					<figcaption class="ft__code-cap">حداقل پیکربندی: شناسهٔ شرکت + آدرس فایل SDK. ویژگی <code dir="ltr">consent</code> در صورت نیاز به بنر رضایت.</figcaption>
				</figure>

				<figure class="ft__code-wrap">
					<div class="ft__code" dir="ltr"><pre><code><span class="c-cmt">// یا از طریق پیکربندی سراسری</span>
<span class="c-fn">window</span>.xcrmConfig = { cpid: <span class="c-str">"YOUR_COMPANY_ID"</span> };</code></pre></div>
					<figcaption class="ft__code-cap">جایگزین تگ — برای زمانی که ترجیح می‌دهید پیکربندی را در اسکریپت خودتان نگه دارید.</figcaption>
				</figure>
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
			'ft_faq_class' => 'ft__section--surface',
			'ft_faq_title' => 'پرسش‌های متداول دربارهٔ ردیابی وب‌سایت',
			'ft_faq_intro' => 'پاسخ پرسش‌های رایج دربارهٔ نصب، رضایت، سرعت و اتصال داده‌ها.',
			'ft_faq_items' => array(
				array(
					'q' => 'برای نصب به توسعه‌دهنده نیاز دارم؟',
					'a' => 'در وردپرس، با نصب پلاگین xCRM تگ نصب خودکار درج می‌شود. در وب‌سایت‌های دیگر، قراردادن یک تگ اسکریپت کافی است. برای رویدادهای سفارشی هم می‌توانید بدون کدنویسی از ویژگی‌های <code dir="ltr">data-xcrm-event</code> استفاده کنید.',
				),
				array(
					'q' => 'اگر کاربر رضایت ندهد چه اتفاقی می‌افتد؟',
					'a' => 'با فعال‌سازی حالت رضایت (<code dir="ltr">consent="true"</code>)، یک بنر رضایت نمایش داده می‌شود و تا پذیرش کاربر، SDK راه‌اندازی نمی‌شود و رویدادی ارسال نمی‌شود. در صورت ردِ رضایت، فعالیت کاملاً متوقف می‌ماند. اخذ رضایت مطابق مقررات حوزهٔ فعالیت شما بر عهدهٔ مدیر وب‌سایت است.',
				),
				array(
					'q' => 'آیا اسکریپت روی سرعت صفحه اثر می‌گذارد؟',
					'a' => 'رویدادها به‌صورت دسته‌ای (حداکثر ۵۰ رویداد در هر ۵ ثانیه) و در پس‌زمینه ارسال می‌شوند و از <code dir="ltr">sendBeacon</code> استفاده می‌شود تا تعامل کاربر مسدود نشود. ارسال هنگام ترک صفحه نیز انجام می‌شود.',
				),
				array(
					'q' => 'کاربران ناشناس چطور به پروفایل مشتری وصل می‌شوند؟',
					'a' => 'هر بازدیدکننده یک شناسهٔ ناشناس (LUID) دارد که همهٔ رویدادهایش به آن گره می‌خورد. با شناسایی کاربر — از طریق متا تگ <code dir="ltr">xcrm-page</code>، سرویس کاربر یا فراخوانی <code dir="ltr">xcrm.identify()</code> — شناسهٔ مشتری به رفتار افزوده می‌شود و تاریخچه در پروفایل او جمع می‌شود.',
				),
				array(
					'q' => 'برای فروشگاه آنلاین چه چیزهایی ثبت می‌شود؟',
					'a' => 'مشاهدهٔ محصول، افزودن و حذف از سبد خرید و جستجوی داخل فروشگاه به‌صورت خودکار. اطلاعات محصول از متا تگ‌ها، Open Graph یا دادهٔ ساخت‌یافته JSON-LD صفحه تشخیص داده می‌شود. برای موارد خاص هم متدهای آماده‌ای مثل <code dir="ltr">trackProductView</code> و <code dir="ltr">trackAddToCart</code> در دسترس است.',
				),
				array(
					'q' => 'پس از نصب، داده‌ها کجا دیده می‌شوند؟',
					'a' => 'رویدادها در همان پلتفرم «xCRM فروش» پردازش می‌شوند: در پروفایل مشتری (خط زمانی تعاملات)، در بخش تحلیل‌ها (قیف، کوهورت، RFM) و به‌عنوان ورودی سگمنت‌ها و اتوماسیون‌ها. <a href="' . esc_url( home_url( '/features/' ) ) . '">فهرست امکانات</a> را ببینید.',
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
			'ft_cta_title'           => 'آماده‌اید رفتار واقعی بازدیدکنندگان را ببینید؟',
			'ft_cta_desc'            => 'شناسهٔ cpid و کد نصب را از داشبورد دریافت کنید، اسکریپت را بگذارید و از همان روز اول رویدادها را در پروفایل مشتری و تحلیل‌ها دنبال کنید.',
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
