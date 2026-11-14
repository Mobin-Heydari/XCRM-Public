<?php
/**
 * Template Name: Feature — Customer Identity Resolution
 * Template Post Type: page
 *
 * صفحهٔ جزئیات قابلیت — شناسایی هویت مشتریان
 * /features/identity-resolution/
 *
 * شناسه‌ها (LUID/CUID/PID)، ترتیب شناسایی، ایزولهٔ شرکت و رفتار SDK
 * از سورس واقعی (ingest.py، مدل‌های PrivateClient/چندارزشی، business-logic
 * §3.5/§6 و اسناد SDK) بازبینی شده‌اند. این صفحه ادعای ادغام خودکار
 * کامل، ردیابی بین‌دستگاهی نامحدود، دید بین‌شرکتی یا تضمین حقوقی ندارد.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_stylesheet_directory() . '/inc/features-data.php';

$home_url  = home_url( '/' );
$features  = home_url( '/features/' );
$canonical = home_url( '/features/identity-resolution/' );
$dash_url  = 'https://dashboard.xcrmforosh.com/';

$page_title       = 'شناسایی هویت مشتریان | Customer Identity Resolution در XCRM';
$page_description = 'هویت کاربران ناشناس را با شناسه‌های LUID و CUID و PID ردیابی کنید، پروفایل یکپارچهٔ مشتری بسازید و فعالیت وب‌سایت را به مدیریت داده‌های مشتریان، تحلیل رفتاری و بخش‌بندی وصل کنید.';
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
			array('@type'=>'ListItem','position'=>3,'name'=>'شناسایی هویت مشتریان','item'=>esc_url($canonical)),
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
				<span class="ft__breadcrumb-current">شناسایی هویت مشتریان</span>
			</nav>

			<span class="ft__label ft-anim ft-anim--1">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
				Customer Identity Resolution
			</span>

			<h1 class="ft__title ft-anim ft-anim--2">
				از بازدیدکنندهٔ ناشناس تا <span class="text-gradient-primary">شناخت یکپارچهٔ مشتری</span>
			</h1>

			<p class="ft__hero-lead ft-anim ft-anim--3">
				هر تعامل را به شناخت دقیق‌تری از مشتری متصل کنید.
			</p>
			<p class="ft__hero-desc ft-anim ft-anim--3">
				هویت‌های مختلف مشتریان را مدیریت کنید و ارتباط میان فعالیت کاربران ناشناس و
				پروفایل مشتریان شناسایی‌شده را در چارچوب قواعد شناسایی XCRM برقرار کنید.
			</p>

			<div class="ft__hero-actions ft-anim ft-anim--4">
				<a href="<?php echo esc_url( $dash_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
					مدیریت هویت مشتریان را شروع کنید
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="#resolution" class="hp__btn hp__btn--ghost" data-magnetic>
					دیدن فرایند شناسایی
				</a>
			</div>

			<ul class="ft__hero-pills ft-anim ft-anim--5" aria-label="نکات کلیدی">
				<li>شناسه‌ها: LUID، CUID، PID</li>
				<li>شناسایی با identify()</li>
				<li>تطبیق در محدودهٔ همان شرکت</li>
				<li>وصل به تحلیل و بخش‌بندی</li>
			</ul>
			</div>
			<div class="ft__hero-media">
			<?php get_template_part( 'template-parts/feature-hero-graphic', null, array( 'slug' => 'identity-resolution' ) ); ?>

			<div class="ft__hero-visual ft-anim ft-anim--5">
				<div class="ft__idvz">
					<div class="ft__idvz-top">
						<span class="ft__idvz-title">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M12 2v4"/><path d="M12 18v4"/><path d="M2 12h4"/><path d="M18 12h4"/><path d="m4.9 4.9 2.9 2.9"/><path d="m16.2 16.2 2.9 2.9"/><path d="m16.2 7.8 2.9-2.9"/><path d="m4.9 19.1 2.9-2.9"/></svg>
							نمودار هویت مشتری — از شناسه‌ها تا پروفایل
						</span>
						<span class="ft__idvz-badge">داده‌های نمونه</span>
					</div>

					<div class="ft__idsrcs">
						<div class="ft__idsrc">
							<div class="ft__idsrc-top">
								<span class="ft__idsrc-ico" aria-hidden="true">
									<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
								</span>
								<span class="ft__idsrc-name">بازدیدکنندهٔ ناشناس</span>
							</div>
							<code class="ft__idsrc-code">luid: 7f3a9c2e-…</code>
						</div>
						<div class="ft__idsrc">
							<div class="ft__idsrc-top">
								<span class="ft__idsrc-ico is-info" aria-hidden="true">
									<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="14" rx="2"/><path d="M8 21h8"/></svg>
								</span>
								<span class="ft__idsrc-name">جلسهٔ مرورگر</span>
							</div>
							<code class="ft__idsrc-code">session · 30m</code>
						</div>
						<div class="ft__idsrc">
							<div class="ft__idsrc-top">
								<span class="ft__idsrc-ico is-warn" aria-hidden="true">
									<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
								</span>
								<span class="ft__idsrc-name">دستگاه</span>
							</div>
							<code class="ft__idsrc-code">fingerprint · id</code>
						</div>
						<div class="ft__idsrc">
							<div class="ft__idsrc-top">
								<span class="ft__idsrc-ico is-success" aria-hidden="true">
									<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="m16 11 2 2 4-4"/></svg>
								</span>
								<span class="ft__idsrc-name">شناسهٔ شناسایی‌شده</span>
							</div>
							<code class="ft__idsrc-code">identify(…)</code>
						</div>
					</div>

					<div class="ft__idconv" aria-hidden="true">
						<span class="ft__idconv-line"></span>
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14"/><path d="m19 12-7 7-7-7"/></svg>
						<span class="ft__idconv-line"></span>
					</div>

					<div class="ft__idrec is-focus">
						<div class="ft__idrec-head">
							<span class="ft__idrec-av" aria-hidden="true">
								<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
							</span>
							<div class="ft__idrec-id">
								<p class="ft__idrec-name">مریم رضایی</p>
								<p class="ft__idrec-sub">پروفایل یکپارچهٔ مشتری در محدودهٔ شرکت شما</p>
							</div>
							<span class="ft__idrec-badge">
								<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>
								شناسایی‌شده
							</span>
						</div>
						<div class="ft__idrec-grid">
							<div class="ft__idf"><span class="ft__idf-k">PID (عمومی)</span><span class="ft__idf-v ltr">X7K2M9PQ4RT8W3</span></div>
							<div class="ft__idf"><span class="ft__idf-k">CUID (شرکت)</span><span class="ft__idf-v ltr">ORD-10255</span></div>
							<div class="ft__idf"><span class="ft__idf-k">LUID (سیستمی)</span><span class="ft__idf-v ltr">2 رکورد</span></div>
							<div class="ft__idf"><span class="ft__idf-k">شماره</span><span class="ft__idf-v ltr">+98912…</span></div>
						</div>
					</div>
				</div>
				<p class="ft__mock-caption">داده‌های نمونه — نمایش تزئینی شناسه‌ها؛ مقادیر واقعی از قواعد شناسایی XCRM پیروی می‌کنند</p>
			</div>
			</div>
		</div>
	</section>

	<!-- ============ 02 THE IDENTITY PROBLEM ============ -->
	<section class="ft__section ft__section--surface" id="problem">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
					چالش هویت
				</span>
				<h2 class="ft__section-title">پنج مسئلهٔ <span class="text-gradient-primary">داده‌های پراکندهٔ مشتری</span></h2>
				<p class="ft__section-desc">
					بدون شناسایی هویت، هر بازدید یک جزیره است — و تحلیل رفتار، بخش‌بندی و ارتباط با مشتری
					روی داده‌های ناقص ساخته می‌شود.
				</p>
			</div>

			<div class="ft__grid ft__grid--cards">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 12h.01"/><path d="M12 12h.01"/><path d="M16 12h.01"/><path d="M21 12c0 4.4-4 8-9 8a9.8 9.8 0 0 1-4-.8L3 21l1.9-4.1A7.9 7.9 0 0 1 3 12c0-4.4 4-8 9-8s9 3.6 9 8Z"/></svg>
					</span>
					<h3>همان مشتری، چند نقطهٔ تماس</h3>
					<p>مشتری هم از وب‌سایت، هم از تلگرام و هم با تماس تلفنی تعامل دارد؛ بدون یک شناسهٔ واحد، هر تعامل یک رکورد جدا می‌شود.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
					</span>
					<h3>رفتار قبل از شناسایی</h3>
					<p>بیشتر بازدیدها «ناشناس» شروع می‌شوند؛ تا وقتی کاربر اطلاعات شناسایی‌دهنده ندهد، رفتارش به پروفایلی گره نمی‌خورد.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.7 2.6a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.5-1.2a2 2 0 0 1 2.1-.4c.8.3 1.7.5 2.6.7a2 2 0 0 1 1.7 2Z"/></svg>
					</span>
					<h3>چند راه تماس در یک پرونده</h3>
					<p>هر مشتری می‌تواند چند شماره، چند ایمیل و چند دستگاه داشته باشد؛ نگهداری ناقص این‌ها یعنی پروندهٔ ناقص.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="180">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/><path d="M8 15l-4 4"/></svg>
					</span>
					<h3>جدایی رفتار ناشناس از پروفایل</h3>
					<p>تاریخچهٔ ناشناس و رکورد شناسایی‌شده اگر به هم وصل نشوند، تحلیل رفتار مشتری ناقص و گمراه‌کننده می‌شود.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="240">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
					</span>
					<h3>هویت ناقص، تحلیل دشوار</h3>
					<p>بدون تاریخچهٔ دستگاه‌ها، IPها و راه‌های تماس کامل، مقایسهٔ مشتریان و بخش‌بندی دقیق از دست می‌رود.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ 03 ANONYMOUS VS IDENTIFIED ============ -->
	<section class="ft__section" id="identity">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></svg>
					ناشناس در برابر شناسایی‌شده
				</span>
				<h2 class="ft__section-title">دو حالت هویت، <span class="text-gradient-primary">یک سیستم شناسایی</span></h2>
				<p class="ft__section-desc">
					هر بازدیدکننده از لحظهٔ اول یک شناسهٔ ناشناس دارد؛ با در دسترس قرار گرفتن اطلاعات
					شناسایی‌دهنده، رویدادها به مشتریِ شناسایی‌شده گره می‌خورند.
				</p>
			</div>

			<div class="ft__compare" data-reveal="up">
				<article class="main-card ft__cmp">
					<span class="ft__type-chip ft__type-chip--static">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
						ناشناس
					</span>
					<h3>بازدیدکنندهٔ ناشناس</h3>
					<p>از اولین لحظهٔ ورود، SDK یک شناسهٔ ناشناس یکتا (LUID) به‌صورت UUID در کوکی و لوکال‌استوریج می‌سازد و همهٔ رویدادهای همان بازدید به آن گره می‌خورند.</p>
					<ul class="ft__cmp-list">
						<li>رویدادها بدون نام و بدون تماس، اما با شناسهٔ پیوسته ثبت می‌شوند</li>
						<li>در همهٔ رویدادها، شناسهٔ <code dir="ltr">luid</code> اجباری است</li>
						<li>اگر هیچ شناسایی‌ای رخ ندهد، مشتری همین‌طور ناشناس می‌ماند</li>
					</ul>
				</article>

				<article class="main-card ft__cmp" data-reveal="up" data-reveal-delay="90">
					<span class="ft__type-chip ft__type-chip--dynamic">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="m16 11 2 2 4-4"/></svg>
						شناسایی‌شده
					</span>
					<h3>مشتریِ شناسایی‌شده</h3>
					<p>با فراخوانی <code dir="ltr">identify(client_pid, traits)</code> یا شناسایی خودکار، شناسهٔ مشتری به رفتار اضافه می‌شود و از این پس رویدادها هم شناسهٔ ناشناس و هم شناسهٔ مشتری را حمل می‌کنند.</p>
					<ul class="ft__cmp-list">
						<li>اتصال به رکورد واقعی مشتری در محدودهٔ شرکت شما</li>
						<li>شماره تماس به‌صورت خودکار به فرمت بین‌المللی (+۹۸…) تبدیل می‌شود</li>
						<li>تاریخچهٔ رفتار در پروفایل مشتری جمع می‌شود</li>
					</ul>
				</article>
			</div>

			<div class="ft__iddefs" style="margin-top: clamp(24px, 3vw, 32px);" data-reveal="up">
				<article class="main-card ft__iddef">
					<div class="ft__iddef-head">
						<code class="ft__iddef-code">LUID</code>
						<span class="ft__iddef-scope">سیستمی / شرکت</span>
					</div>
					<h3>شناسهٔ محلی (Local User ID)</h3>
					<p>شناسه‌های سیستمی داخلی مشتری — به‌صورت فهرست روی رکورد نگه داشته می‌شوند و هنگام تطبیق، شناسه‌های جدید به همان فهرست افزوده می‌شوند. ناشناس‌ها هم یک LUID دارند.</p>
				</article>
				<article class="main-card ft__iddef" data-reveal="up" data-reveal-delay="60">
					<div class="ft__iddef-head">
						<code class="ft__iddef-code">PID</code>
						<span class="ft__iddef-scope is-pub">عمومی، ۱۵ کاراکتری</span>
					</div>
					<h3>شناسهٔ عمومی مشتری (Client PID)</h3>
					<p>شناسهٔ ۱۵ کاراکتری یکتا (حروف بزرگ و اعداد) که به‌صورت خودکار و با تولید امن برای هر مشتری ساخته می‌شود و در رویدادهای شناسایی‌شده همراهش می‌آید.</p>
				</article>
				<article class="main-card ft__iddef" data-reveal="up" data-reveal-delay="120">
					<div class="ft__iddef-head">
						<code class="ft__iddef-code">CUID</code>
						<span class="ft__iddef-scope is-co">اختصاصی شرکت</span>
					</div>
					<h3>شناسهٔ مشتریِ شرکت (Company CUID)</h3>
					<p>شناسه‌ای که خودِ شرکت به مشتری‌اش اختصاص می‌دهد (در رابط کاربری با برچسب «شناسه مشتری») و برای تطبیق مشتریان واردشده از سیستم‌های جانبی به کار می‌رود.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ 04 IDENTITY RESOLUTION PROCESS ============ -->
	<section class="ft__section ft__section--surface" id="resolution">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					فرایند شناسایی هویت
				</span>
				<h2 class="ft__section-title">هر رویداد <span class="text-gradient-primary">چگونه تطبیق داده می‌شود؟</span></h2>
				<p class="ft__section-desc">
					ترتیب مستند شناسایی برای رویدادهای SDK — از شناسهٔ شرکت تا رکورد ناشناس به‌عنوان پشتیبان:
				</p>
			</div>

			<ol class="ft__flow" data-reveal="up" aria-label="مراحل فرایند شناسایی هویت">
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۱</span>
					<div class="ft__flow-body">
						<h3>رویداد ورودی</h3>
						<p>هر رویداد شناسهٔ شرکت و شناسهٔ ناشناس <code dir="ltr">luid</code> را حمل می‌کند؛ اگر کاربر شناسایی شده باشد، شناسهٔ مشتری (<code dir="ltr">client_pid</code>) همراهش است.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۲</span>
					<div class="ft__flow-body">
						<h3>جستجو با CUID</h3>
						<p>اگر رویداد CUID (شناسهٔ اختصاصی شرکت) داشته باشد، اول با همان در محدودهٔ شرکت جستجو می‌شود.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۳</span>
					<div class="ft__flow-body">
						<h3>جستجو با LUID</h3>
						<p>شناسهٔ سیستمی/ناشناس جستجو می‌شود — فقط اگر متعلق به همین شرکت باشد پذیرفته است؛ شناسهٔ شرکت دیگر نادیده گرفته می‌شود.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۴</span>
					<div class="ft__flow-body">
						<h3>تطبیق یا ایجاد (get-or-create)</h3>
						<p>بر اساس CUID، شمارهٔ تلفن نرمال‌شده، ایمیل یا LUID، در محدودهٔ همان شرکت رکورد پیدا می‌شود؛ در غیر این صورت رکورد جدید ساخته می‌شود.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۵</span>
					<div class="ft__flow-body">
						<h3>رکورد ناشناس (پشتیبان)</h3>
						<p>اگر هیچ شناسه‌ای نبود، یک مشتری ناشناس واقعی با یک LUID جدید و شناسهٔ عمومی ساخته می‌شود — نه فقط یک مقدار در کوکی.</p>
					</div>
				</li>
			</ol>

			<div class="ft__split" style="margin-top: clamp(28px, 4vw, 40px);">
				<div class="ft__split-copy" data-reveal="up">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li><strong>همه‌چیز در محدودهٔ شرکت:</strong> هر جستجو با شناسهٔ شرکتِ همان رویداد انجام می‌شود؛ شناسهٔ متعلق به شرکت دیگر پذیرفته نمی‌شود</li>
						<li><strong>شناسهٔ اشتباه رد می‌شود:</strong> اگر شناسهٔ CRM داده شده باشد و پیدا نشود، خطا برمی‌گردد — رکورد ناشناسِ بی‌دلیل ساخته نمی‌شود</li>
						<li><strong>افزودن شناسه:</strong> وقتی رویداد با شناسهٔ جدیدی تطبیق داده شود، همان شناسه به فهرست LUIDهای مشتریِ تطبیق‌یافته افزوده می‌شود</li>
						<li><strong>تطبیق در لحظه:</strong> تصمیم همیشه بر اساس شناسهٔ همان رویداد و در همان لحظهٔ ورود گرفته می‌شود</li>
					</ul>
				</div>
				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<div class="ft__note-box">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>مرز مهم — بدون ادغام خودکار:</strong> این فرایند یعنی
							<strong>تطبیق بر اساس شناسه</strong>، نه ادغام خودکارِ همهٔ رکوردهای یک مشتری.
							XCRM رکوردهای پراکنده را به‌صورت خودکار با هم ادغام نمی‌کند؛ هر تطبیق فقط با
							شناسهٔ ارائه‌شده در همان شرکت رخ می‌دهد.
						</p>
					</div>
					<div class="ft__note-box ft__note-box--info" style="margin-top: 14px;">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
						<p style="margin: 0;">
							<strong>برای تحلیل:</strong> نگاشت شناسهٔ ناشناس به مشتریِ تطبیق‌یافته
							(در محدودهٔ شرکت) در ذخیرهٔ رویدادها انجام می‌شود تا تاریخچهٔ بازدیدها
							در تحلیل‌ها به همان مشتری برسد.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ 05 MULTIPLE CUSTOMER IDENTITIES ============ -->
	<section class="ft__section" id="identifiers">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><rect x="2" y="2" width="8" height="8" rx="1"/></svg>
					شناسه‌های متعدد
				</span>
				<h2 class="ft__section-title">یک پرونده، <span class="text-gradient-primary">راه‌های تماس متعدد</span></h2>
				<p class="ft__section-desc">
					پروفایل مشتری فقط یک نام نیست: شماره‌ها، ایمیل‌ها، دستگاه‌ها، تاریخچهٔ IP،
					حساب‌های شبکهٔ اجتماعی و کلیدهای هویت همه در کنار هم نگهداری می‌شوند.
				</p>
				<ul class="ft__checklist">
					<li><strong>چند شماره و چند ایمیل:</strong> هر کدام با نوع، «اصلی» و «تأیید شده» — شماره‌ها با فرمت بین‌المللی (+۹۸…)</li>
					<li><strong>دستگاه‌ها:</strong> نوع، سیستم‌عامل، مرورگر و «اثر انگشت یکتای دستگاه» + اولین و آخرین بازدید</li>
					<li><strong>تاریخچهٔ IP:</strong> IPها و موقعیت (کشور/شهر) برای تحلیل و ردیابی الگوی رفتاری — برای مشتریان شناسایی‌شده</li>
					<li><strong>کلیدهای هویت:</strong> کوکی، شناسهٔ دستگاه و کلیدهای سفارشی با تاریخ انقضا</li>
					<li><strong>حساب‌های اجتماعی:</strong> یکتا در محدودهٔ شرکت + پلتفرم + نام کاربری</li>
				</ul>
				<div class="ft__note-box ft__note-box--info" style="margin-top: 18px;">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
					<p style="margin: 0;">
						<strong>چرا این مهم است:</strong> نگهداری چند راه تماس کنار هم یعنی وقتی مشتری
						از یک کانال در دسترس نبود، راه‌های دیگر و تاریخچهٔ رفتارش همچنان در یک پرونده
						قابل استفاده است — و شناسایی بعدی به همان پرونده وصل می‌شود.
					</p>
				</div>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<div class="main-card ft__prof">
					<div class="ft__prof-head">
						<span class="ft__prof-av" aria-hidden="true">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
						</span>
						<div class="ft__prof-id">
							<p class="ft__prof-name">مریم رضایی</p>
							<p class="ft__prof-sub">PID: X7K2M9PQ4RT8W3 · CUID: ORD-10255</p>
						</div>
						<span class="ft__prof-badge">شناسایی‌شده</span>
					</div>

					<div class="ft__prof-rows">
						<div class="ft__prof-row">
							<span class="ft__prof-row-ico is-primary" aria-hidden="true">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.7 2.6a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.5-1.2a2 2 0 0 1 2.1-.4c.8.3 1.7.5 2.6.7a2 2 0 0 1 1.7 2Z"/></svg>
							</span>
							<div class="ft__prof-row-body">
								<div class="ft__prof-row-k">تلفن‌ها</div>
								<div class="ft__prof-vals">
									<span class="ft__prof-v is-primary">+989121234567</span>
									<span class="ft__prof-v is-plain">اصلی</span>
									<span class="ft__prof-v is-plain">تأیید شده</span>
									<span class="ft__prof-v is-plain">تلگرام</span>
									<span class="ft__prof-v is-plain">+989355558888</span>
								</div>
							</div>
						</div>

						<div class="ft__prof-row">
							<span class="ft__prof-row-ico is-primary" aria-hidden="true">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
							</span>
							<div class="ft__prof-row-body">
								<div class="ft__prof-row-k">ایمیل‌ها</div>
								<div class="ft__prof-vals">
									<span class="ft__prof-v">maryam@example.com</span>
									<span class="ft__prof-v is-plain">کاری</span>
									<span class="ft__prof-v is-plain">تأیید شده</span>
								</div>
							</div>
						</div>

						<div class="ft__prof-row">
							<span class="ft__prof-row-ico" aria-hidden="true">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
							</span>
							<div class="ft__prof-row-body">
								<div class="ft__prof-row-k">دستگاه‌ها</div>
								<div class="ft__prof-vals">
									<span class="ft__prof-v is-plain">موبایل · Android</span>
									<span class="ft__prof-v is-plain">مرورگر · Chrome</span>
									<span class="ft__prof-v">fp:9a71c4…</span>
									<span class="ft__prof-v is-plain">اولین بازدید: ۱۴۰۳/۰۵/۱۲</span>
								</div>
							</div>
						</div>

						<div class="ft__prof-row">
							<span class="ft__prof-row-ico" aria-hidden="true">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
							</span>
							<div class="ft__prof-row-body">
								<div class="ft__prof-row-k">تاریخچهٔ IP</div>
								<div class="ft__prof-vals">
									<span class="ft__prof-v">185.123.x.x · Tehran</span>
									<span class="ft__prof-v">5.38.x.x · Mashhad</span>
								</div>
							</div>
						</div>

						<div class="ft__prof-row">
							<span class="ft__prof-row-ico" aria-hidden="true">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="m8.6 13.5 6.8 4"/><path d="m15.4 6.5-6.8 4"/></svg>
							</span>
							<div class="ft__prof-row-body">
								<div class="ft__prof-row-k">شبکه‌های اجتماعی</div>
								<div class="ft__prof-vals">
									<span class="ft__prof-v">@maryam_r</span>
									<span class="ft__prof-v is-plain">تلگرام</span>
									<span class="ft__prof-v is-plain">اینستاگرام</span>
								</div>
							</div>
						</div>

						<div class="ft__prof-row">
							<span class="ft__prof-row-ico" aria-hidden="true">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="8" cy="15" r="4"/><path d="m10.85 12.15-1.42-1.42"/><path d="M16 8h.01"/><path d="M13.5 3.5 21 11"/><path d="m18 6 3 3"/></svg>
							</span>
							<div class="ft__prof-row-body">
								<div class="ft__prof-row-k">کلیدهای هویت</div>
								<div class="ft__prof-vals">
									<span class="ft__prof-v">cookie · cpid</span>
									<span class="ft__prof-v">device_id</span>
									<span class="ft__prof-v is-plain">تاریخ انقضا دار</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<p class="ft__mock-caption">داده‌های نمونه — پیش‌نمایش پروفایل؛ تاریخچهٔ IP و کلیدهای هویت به‌صورت رکورد ذخیره می‌شوند</p>
			</div>
		</div>
	</section>

	<!-- ============ 06 SDK IDENTIFICATION ============ -->
	<section class="ft__section ft__section--surface" id="sdk">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m16 18 6-6-6-6"/><path d="m8 6-6 6 6 6"/></svg>
					شناسایی با SDK
				</span>
				<h2 class="ft__section-title">یک فراخوانی، <span class="text-gradient-primary">اتصال رفتار به مشتری</span></h2>
				<p class="ft__section-desc">
					توسعه‌دهندگان می‌توانند هر زمان شناسهٔ مشتری در دسترس قرار گرفت، با فراخوانی
					<code dir="ltr">identify(client_pid, traits)</code> رفتار جاری و آینده را به او وصل کنند.
				</p>
				<ul class="ft__checklist">
					<li><strong>امضای واقعی:</strong> <code dir="ltr">identify(client_pid, traits)</code> — شناسهٔ مشتری + ویژگی‌ها</li>
					<li><strong>شناسایی خودکار</strong> (بدون کد دستی): متا تگ <code dir="ltr">xcrm-page</code> → سرویس کاربر (nonce) → <code dir="ltr">window.xcrmUser</code> → در غیر این صورت ناشناس</li>
					<li><strong>نرمال‌سازی شماره:</strong> شمارهٔ موبایل به‌صورت خودکار به فرمت بین‌المللی (+۹۸) تبدیل می‌شود</li>
					<li><strong>قاعدة کلی رویدادها:</strong> هر رویداد شناسهٔ شرکت و <code dir="ltr">luid</code> را حمل می‌کند و پس از شناسایی، شناسهٔ مشتری هم افزوده می‌شود</li>
					<li>اسکریپت به‌صورت خودکار پس از بارگذاری صفحه راه‌اندازی می‌شود</li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="main-card ft__form">
					<div class="ft__form-head">
						<h3>نمونهٔ کد — شناسایی مشتری</h3>
						<p>از متدهای واقعی SDK مرورگر (xcrm.min.js)</p>
					</div>
					<pre class="ft__form-code" aria-label="نمونه کد شناسایی مشتری">// شناسایی هنگامی که شناسهٔ مشتری در دسترس است
xcrm.identify(1042, {
  phone: "09121234567"   // نرمال‌سازی خودکار به +989121234567
});

// از این پس هر رویداد، شناسهٔ مشتری را هم حمل می‌کند
xcrm.event("request_demo", { location: "hero" });</pre>
					<div class="ft__form-foot">
						<p class="ft__form-note">کد نمونه از SDK واقعی بازبینی شده است؛ شناسایی خودکار هم بدون فراخوانی دستی کار می‌کند.</p>
					</div>
				</div>

				<div class="ft__form" style="padding-top: 0;">
					<div class="ft__form-head">
						<h3>زنجیرهٔ شناسایی خودکار</h3>
						<p>SDK به‌ترتیب اولین منبع در دسترس را برای شناسایی استفاده می‌کند.</p>
					</div>
					<div class="ft__form-chips" aria-label="ترتیب شناسایی خودکار">
						<span class="ft__form-chip ft__form-chip--on">۱ متا تگ xcrm-page</span>
						<span class="ft__form-chip ft__form-chip--on">۲ سرویس کاربر (nonce)</span>
						<span class="ft__form-chip ft__form-chip--on">۳ window.xcrmUser</span>
						<span class="ft__form-chip">۴ ناشناس باقی بماند</span>
					</div>
					<div class="ft__form-foot">
						<p class="ft__form-note">اگر هیچ‌کدام در دسترس نباشد، کاربر با شناسهٔ ناشناس ادامه می‌دهد — رفتار از دست نمی‌رود، فقط به پروفایل وصل نمی‌شود.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ 07 CUSTOMER DATA CONNECTION ============ -->
	<section class="ft__section" id="connection">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					وصل شدن داده‌ها
				</span>
				<h2 class="ft__section-title">از رفتار وب‌سایت تا <span class="text-gradient-primary">تحلیل و بخش‌بندی</span></h2>
				<p class="ft__section-desc">
					وقتی شناسهٔ مشتری به رویدادها می‌خورد، هر بازدید به یک زنجیرهٔ واحد تبدیل می‌شود
					که تحلیل‌ها و گروه‌های شما روی آن ساخته می‌شوند.
				</p>
			</div>

			<div class="ft__arch" data-reveal="up" aria-label="جریان داده از رفتار وب‌سایت تا تحلیل و بخش‌بندی">
				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۱</span>
					<span class="ft__arch-icon" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18"/><path d="M7 6.5h.01"/></svg>
					</span>
					<h3>رفتار وب‌سایت</h3>
					<p>بازدید صفحات، دیدن محصول، سبد خرید و سایر رویدادها با SDK مرورگر ثبت می‌شوند.</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۲</span>
					<span class="ft__arch-icon ft__arch-icon--info" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M12 2v4"/><path d="M12 18v4"/><path d="M2 12h4"/><path d="M18 12h4"/></svg>
					</span>
					<h3>شناسهٔ مشتری</h3>
					<p>رویدادها با <code dir="ltr">luid</code> و در صورت شناسایی، شناسهٔ مشتری تطبیق داده می‌شوند.</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۳</span>
					<span class="ft__arch-icon ft__arch-icon--success" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/><path d="m16 11 2 2 4-4"/></svg>
					</span>
					<h3>رکورد مشتری</h3>
					<p>رویدادها در محدودهٔ شرکت به پروفایل مشتری می‌رسند و راه‌های تماس هم به‌روز می‌شوند.</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۴</span>
					<span class="ft__arch-icon ft__arch-icon--warn" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 2"/><circle cx="12" cy="12" r="10"/></svg>
					</span>
					<h3>خط زمانی</h3>
					<p>تاریخچهٔ تعاملات به‌ترتیب زمان در پروفایل جمع می‌شود — از اولین بازدید تا آخرین اقدام.</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۵</span>
					<span class="ft__arch-icon ft__arch-icon--end" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
					</span>
					<h3>تحلیل و بخش‌بندی</h3>
					<p>رویدادهای متصل به مشتری، پایهٔ قیف‌ها، گزارش‌ها و سگمنت‌های رفتاری شما می‌شوند.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ 08 REAL BUSINESS SCENARIOS ============ -->
	<section class="ft__section ft__section--surface" id="scenarios">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
					مسیر واقعی یک مشتری
				</span>
				<h2 class="ft__section-title">از بازدید ناشناس تا <span class="text-gradient-primary">بخش‌بندی رفتاری</span></h2>
				<p class="ft__section-desc">
					یک سفر پنج‌قدمی که با قواعد شناسایی XCRM طی می‌شود — همهٔ گام‌ها با امکانات
					پیاده‌سازی‌شده‌اند.
				</p>
				<div class="ft__note-box" data-reveal="up">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
					<p style="margin: 0;">
						<strong>مسیری نمونه و تصویری:</strong> این گام‌ها برای درک جریان است؛
						زمان‌بندی و نتیجهٔ هر مرحله به رفتار واقعی مشتری و پیکربندی شرکت شما بستگی دارد.
					</p>
				</div>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<div class="ft__chain">
					<div class="ft__chain-node">
						<span class="ft__chain-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>۱ — بازدید ناشناس یک فروشگاه آنلاین</h3>
							<p>کاربر بدون ورود، صفحات محصول را می‌بیند؛ SDK یک LUID می‌سازد و رویدادها با همان شناسه ثبت می‌شوند.</p>
						</div>
					</div>
					<div class="ft__chain-node">
						<span class="ft__chain-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="m16 11 2 2 4-4"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>۲ — کاربر اطلاعات شناسایی‌دهنده می‌دهد</h3>
							<p>ثبت‌نام، خرید یا فراخوانی identify با شماره/ایمیل — شناسهٔ مشتری در دسترس قرار می‌گیرد.</p>
						</div>
					</div>
					<div class="ft__chain-node">
						<span class="ft__chain-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>۳ — مشتری با شناسه‌های پشتیبانی‌شده تطبیق می‌یابد</h3>
							<p>فرایند شناسایی با شناسه‌های موجود در محدودهٔ شرکت (مثل شماره تلفن نرمال‌شده یا CUID) رکورد را پیدا می‌کند.</p>
						</div>
					</div>
					<div class="ft__chain-node">
						<span class="ft__chain-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18"/><path d="M7 14h.01"/><path d="M11 14h.01"/><path d="M15 14h.01"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>۴ — رویدادهای وب‌سایت به مشتریِ شناسایی‌شده وصل می‌شوند</h3>
							<p>از این پس بازدیدها و اقدامات جاری در پروفایل همان مشتری ثبت می‌شوند.</p>
						</div>
					</div>
					<div class="ft__chain-node">
						<span class="ft__chain-icon ft__chain-icon--end" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>۵ — رفتار در تحلیل و بخش‌بندی در دسترس می‌شود</h3>
							<p>همان تاریخچه پایهٔ گزارش‌ها، قیف‌ها و سگمنت‌های رفتاری می‌شود.</p>
						</div>
					</div>
				</div>
				<p class="ft__mock-caption">مسیر نمونه — برای درک جریان، نه یک سناریوی تضمینی</p>
			</div>
		</div>
	</section>

	<!-- ============ 09 PRIVACY AND DATA ISOLATION ============ -->
	<section class="ft__section" id="privacy">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
					حریم خصوصی و ایزولهٔ داده
				</span>
				<h2 class="ft__section-title">شناسایی در <span class="text-gradient-primary">محدودهٔ داده‌های خودتان</span></h2>
				<p class="ft__section-desc">
					رفتارهای احراز هویت و ایزوله‌ای که در پیاده‌سازی واقعی وجود دارد — فقط همان‌ها،
					بدون وعده‌ای فراتر از آنچه کد اثبات می‌کند.
				</p>
			</div>

			<div class="ft__grid ft__grid--cards" data-reveal="up">
				<article class="main-card ft__cap">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
					</span>
					<h3>ایزوله در محدودهٔ شرکت (Tenant)</h3>
					<p>شناسهٔ شرکت از توکن احراز هویت خوانده می‌شود، نه از درخواست کلاینت؛ هر پرس‌وجوی مشتری با شناسهٔ شرکت فیلتر می‌شود.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
					</span>
					<h3>رد شناسهٔ بیگانه</h3>
					<p>اگر شناسهٔ LUID متعلق به شرکت دیگری باشد، در شناسایی نادیده گرفته می‌شود؛ تطبیق هرگز از مرز شرکت رد نمی‌شود.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="15" r="4"/><path d="m10.85 12.15-1.42-1.42"/><path d="M16 8h.01"/><path d="M13.5 3.5 21 11"/><path d="m18 6 3 3"/></svg>
					</span>
					<h3>ذخیرهٔ شناسه‌ها در رکورد</h3>
					<p>فهرست LUIDها، کلیدهای هویت (کوکی/شناسهٔ دستگاه) با تاریخ انقضا و اثر انگشت دستگاه روی همان رکورد شرکت نگه داشته می‌شوند.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="180">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
					</span>
					<h3>کنترل رضایت در SDK</h3>
					<p>با فعال‌سازی قابلیت رضایت، تا اعلام رضایت کاربر رویدادی ارسال نمی‌شود؛ پرچم‌های رضایت کانالی هم روی پروفایل مشتری نگه داشته می‌شوند.</p>
				</article>
			</div>

			<div class="ft__note-box" style="margin-top: clamp(22px, 3vw, 30px);" data-reveal="up">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
				<p style="margin: 0;">
					<strong>آنچه این صفحه ادعا نمی‌کند:</strong> ادغام خودکار و کاملِ همهٔ رکوردهای یک
					مشتری، ردیابی بین‌دستگاهی نامحدود، دیدن مشتریان شرکت‌های دیگر یا هر تضمین حقوقی
					دربارهٔ حریم خصوصی — مسئولیت رضایت کاربران و الزامات قانونی بر عهدهٔ مدیر وب‌سایت است
					و این صفحه فقط رفتار فنی پیاده‌سازی‌شده را توضیح می‌دهد.
				</p>
			</div>
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
				<h2 class="ft__section-title">هویت، <span class="text-gradient-primary">ستون بقیهٔ داده‌ها</span></h2>
				<p class="ft__section-desc">
					شناسایی هویت به تنهایی معنا ندارد؛ خروجی‌اش را در پروفایل مشتری، ردیابی، تحلیل و بخش‌بندی ببینید.
				</p>
			</div>

			<div class="ft__related-links" data-reveal="up">
				<a href="<?php echo esc_url( home_url( '/features/customer-management/' ) ); ?>" class="ft__related-link">
					مدیریت مشتریان و پروفایل یکپارچه
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/website-tracking/' ) ); ?>" class="ft__related-link">
					ردیابی وب‌سایت و SDK مرورگر
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/analytics/#events' ) ); ?>" class="ft__related-link">
					مدیریت رویدادها
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/segmentation/' ) ); ?>" class="ft__related-link">
					بخش‌بندی مشتریان
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/analytics/' ) ); ?>" class="ft__related-link">
					تحلیل رفتاری و گزارش‌گیری
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
			'q' => 'شناسایی هویت مشتری (Customer Identity Resolution) چیست؟',
			'a' => 'فرایندی که رویدادها و تعاملات پراکنده (بازدید ناشناس، شماره تماس، ایمیل، شناسه‌های شرکت) را با <strong>رکورد درستِ همان مشتری</strong> در محدودهٔ شرکت شما تطبیق می‌دهد. در XCRM این کار هنگام ورود هر رویداد و بر اساس شناسه‌های ارائه‌شده انجام می‌شود تا پروفایل یکپارچهٔ مشتری رفتار واقعی را نشان دهد.',
		),
		array(
			'q' => 'بازدیدکنندهٔ ناشناس چیست؟',
			'a' => 'کاربری که هنوز اطلاعات شناسایی‌دهنده‌ای (مثل شماره تلفن) ارائه نکرده. SDK برای او یک شناسهٔ ناشناس یکتا به‌صورت UUID در کوکی و لوکال‌استوریج می‌سازد و همهٔ رویدادهایش با همان شناسه ثبت می‌شود. رفتار از دست نمی‌رود — فقط هنوز به پروفایل مشتریِ شناسایی‌شده وصل نیست.',
		),
		array(
			'q' => 'LUID چیست؟',
			'a' => '<strong>Local User ID</strong> — شناسهٔ سیستمی محلی مشتری است که توسط xCRM تولید می‌شود. هر رکورد مشتری فهرستی از LUIDها دارد و هنگامی که رویداد جدید با شناسهٔ جدیدی تطبیق داده شود، همان شناسه به فهرست افزوده می‌شود. در رویدادهای SDK، شناسهٔ <code dir="ltr">luid</code> اجباری است.',
		),
		array(
			'q' => 'CUID چیست؟',
			'a' => '<strong>Company User ID</strong> — شناسه‌ای است که <em>خودِ شرکت شما</em> به مشتری‌اش اختصاص می‌دهد (در رابط کاربری با برچسب «شناسه مشتری»). برای تطبیق مشتریانی که از سیستم‌های جانبی وارد می‌شوند به کار می‌رود و اولویت جستجو در فرایند شناسایی را دارد.',
		),
		array(
			'q' => 'PID چیست؟',
			'a' => '<strong>شناسهٔ عمومی مشتری</strong> — کد ۱۵ کاراکتری یکتا (حروف بزرگ و اعداد) که به‌صورت خودکار و با تولید امن برای هر مشتری ساخته می‌شود. هنگام شناسایی با <code dir="ltr">identify(client_pid, traits)</code> در رویدادها همراه مشتری می‌آید.',
		),
		array(
			'q' => 'XCRM چطور یک مشتری را شناسایی می‌کند؟',
			'a' => 'هر رویداد ورودی به‌ترتیب با شناسه‌های موجود بررسی می‌شود: اگر شناسهٔ شناسایی‌شده یا CUID باشد اول با آن‌ها، سپس با LUID در <strong>محدودهٔ همان شرکت</strong> جستجو می‌شود؛ اگر نخورد، با شمارهٔ تلفن نرمال‌شده یا ایمیل تطبیق داده یا رکورد جدید ساخته می‌شود. در نبودِ هر شناسه‌ای، یک رکورد ناشناس واقعی با یک LUID جدید ایجاد می‌گردد. از سمت SDK هم می‌توانید دستی با <code dir="ltr">identify()</code> شناسایی کنید یا از شناسایی خودکار (متا تگ <code dir="ltr">xcrm-page</code>، سرویس کاربر، <code dir="ltr">window.xcrmUser</code>) استفاده کنید.',
		),
		array(
			'q' => 'آیا XCRM همهٔ رکوردهای مشتری را به‌صورت خودکار ادغام می‌کند؟',
			'a' => 'خیر. <strong>ادغام خودکار و کاملِ رکوردها پیاده‌سازی نشده است.</strong> آنچه انجام می‌شود «تطبیق بر اساس شناسه» است: وقتی رویداد جدید با شناسهٔ موجودی (مثل CUID، شماره یا ایمیل) پیدا شود، به همان رکوردِ تطبیق‌یافته متصل می‌شود و شناسهٔ جدید به فهرست LUIDهایش افزوده می‌گردد — اما XCRM رکوردهای پراکندهٔ یک شخص را خودسرانه با هم یکی نمی‌کند.',
		),
		array(
			'q' => 'اطلاعات شناسایی چطور به تحلیل رفتار مشتری وصل می‌شود؟',
			'a' => 'رویدادهایی که با شناسهٔ مشتریِ تطبیق‌یافته ثبت می‌شوند در ذخیره‌سازی به همان مشتری نگاشت می‌شوند؛ بنابراین تاریخچهٔ بازدیدها در پروفایل جمع می‌شود و همان داده پایهٔ تحلیل رفتاری، قیف‌ها، گزارش‌ها و سگمنت‌های رفتاری شماست — از جمله ارتباط رفتار وب‌سایت با ارزش مشتری و منابع ورودی.',
		),
	);
	$ft_faq_id    = 'faq';
	$ft_faq_title = 'پرسش‌های متداول دربارهٔ شناسایی هویت مشتریان';
	$ft_faq_intro = 'برای تیم‌های محصول، توسعه‌دهندگان و متخصصان دادهٔ مشتری.';
	get_template_part( 'template-parts/faq-section', null, array(
		'ft_faq_id'    => $ft_faq_id,
		'ft_faq_title' => $ft_faq_title,
		'ft_faq_intro' => $ft_faq_intro,
		'ft_faq_items' => $ft_faq_items,
	) );
	?>

	<?php
	$ft_cta_title         = 'مشتریان خود را فراتر از یک بازدید ساده بشناسید.';
	$ft_cta_desc          = 'هویت کاربران ناشناس را به پروفایل واقعی مشتری وصل کنید و رفتارشان را در تحلیل‌ها و بخش‌بندی استفاده کنید.';
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
