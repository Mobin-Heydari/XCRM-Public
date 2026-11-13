<?php
/**
 * Template Name: Feature — n8n Workflow Automation
 * Template Post Type: page
 *
 * صفحهٔ جزئیات قابلیت — اتوماسیون گردش‌کار اختصاصی n8n
 * /features/workflow-automation/
 *
 * متن‌های رابط کاربری (وضعیت نمونه، همگام‌سازی گردش کارها، وب‌هوک‌ها،
 * اجراها و نام/شرح شش گره اختصاصی) از سورس واقعی داشبورد و بسته‌های
 * n8n Nodes استخراج و بازبینی شده‌اند.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_stylesheet_directory() . '/inc/features-data.php';

$home_url  = home_url( '/' );
$features  = home_url( '/features/' );
$canonical = home_url( '/features/workflow-automation/' );
$dash_url  = 'https://dashboard.xcrmforosh.com/';

$page_title       = 'اتوماسیون گردش‌کار اختصاصی n8n | «xCRM فروش»';
$page_description = 'برای هر شرکت یک کانتینر و پایگاه‌دادهٔ n8n اختصاصی؛ گردش کارها با وب‌هوک و شش گرهٔ اختصاصی به داده‌های CRM وصل می‌شوند و از کمپین‌های XCRM اجرا می‌شوند.';
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
			array('@type'=>'ListItem','position'=>3,'name'=>'اتوماسیون گردش‌کار اختصاصی n8n','item'=>esc_url($canonical)),
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
				<span class="ft__breadcrumb-current">اتوماسیون گردش‌کار اختصاصی n8n</span>
			</nav>

			<span class="ft__label ft-anim ft-anim--1">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><path d="M7 10v4a3 3 0 0 0 3 3h4"/></svg>
				زیرساخت اختصاصی هر شرکت
			</span>

			<h1 class="ft__title ft-anim ft-anim--2">
				قدرت اتوماسیون n8n، <span class="text-gradient-primary">در زیرساخت اختصاصی</span> هر کسب‌وکار
			</h1>

			<p class="ft__hero-desc ft-anim ft-anim--3">
				برای هر شرکت یک کانتینر Docker و یک پایگاه‌دادهٔ n8n اختصاصی با پورت و زیردامنهٔ خودش؛
				گردش‌کارها با وب‌هوک و شش گرهٔ اختصاصی به داده‌های CRM وصل می‌شوند و از کمپین‌های
				XCRM اجرا می‌شوند — داده‌های مشتری، کمپین و موتور اتوماسیون در یک حلقه.
			</p>

			<div class="ft__hero-actions ft-anim ft-anim--4">
				<a href="<?php echo esc_url( $dash_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
					قدرت اتوماسیون اختصاصی XCRM را تجربه کنید
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="#architecture" class="hp__btn hp__btn--ghost" data-magnetic>
					معماری را ببینید
				</a>
			</div>

			<ul class="ft__hero-pills ft-anim ft-anim--5" aria-label="نکات کلیدی">
				<li>کانتینر + اسکیمای اختصاصی هر شرکت</li>
				<li>همگام‌سازی گردش کارها با XCRM</li>
				<li>شش گرهٔ اختصاصی xCRM</li>
				<li>اجرای کمپین و پایش اجراها</li>
			</ul>
		</div>
	</section>

	<!-- ============ WHY WORKFLOW AUTOMATION ============ -->
	<section class="ft__section ft__section--surface" id="why">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
					چرا گردش‌کار خودکار؟
				</span>
				<h2 class="ft__section-title">کارهای تکراری را <span class="text-gradient-primary">به گردش‌کار بسپارید</span></h2>
				<p class="ft__section-desc">
					وقتی ارسال پیام، به‌روزرسانی مشتری و پیگیری سرنخ‌ها دستی انجام می‌شود،
					هم کند است هم خطاپذیر. یک موتور گردش‌کار درست‌شده، همان مسیرها را
					با دادهٔ زندهٔ CRM و بدون تکرار اجرا می‌کند.
				</p>
			</div>

			<div class="ft__grid ft__grid--caps">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
					</span>
					<h3>اتوماسیون با دادهٔ واقعی</h3>
					<p>گردش‌کار فقط اسکریپت نیست؛ به مشتریان، مراحل فروش، گروه‌ها و رویدادهای همان شرکت وصل است — نه به یک دیتابیس جداگانه و بی‌ربط.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
					</span>
					<h3>جدا از همسایه‌ها</h3>
					<p>هر شرکت محیط n8n خودش را دارد: کانتینر، پایگاه‌داده، پورت و زیردامنهٔ اختصاصی — داده و گردش‌کارها با شرکت دیگر قاطی نمی‌شود.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					</span>
					<h3>کمپین = اجرای گردش‌کار</h3>
					<p>«کمپین» در XCRM یعنی اجرای یک گردش‌کار n8n روی یک مخاطب‌گروه — از زمان‌بندی و تریگر گرفته تا ثبت اجرای هر مشتری.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="180">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
					</span>
					<h3>قابل پایش و پشتیبان</h3>
					<p>همگام‌سازی گردش کارها، پشتیبان‌گیری، وضعیت لحظه‌ای نمونه و تاریخچهٔ اجراها — همه از داخل داشبورد، بدون سرک کشیدن به سرور.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ ARCHITECTURE ============ -->
	<section class="ft__section" id="architecture">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><path d="M7 10v4a3 3 0 0 0 3 3h4"/></svg>
					معماری اتصال
				</span>
				<h2 class="ft__section-title">XCRM و n8n: <span class="text-gradient-primary">یک حلقه، شش قدم</span></h2>
				<p class="ft__section-desc">
					«نحوه اتصال ورک‌فلاوها، اتوماسیون‌ها و گروه‌ها» — داده از رویداد مشتری وارد
					خط لولهٔ رویداد XCRM می‌شود، کمپین آن را به یک گردش‌کار n8n گره می‌زند،
					گره‌های اقدام کار را انجام می‌دهند و نتیجه به‌صورت اجرا ثبت می‌شود.
				</p>
			</div>

			<div class="ft__arch" data-reveal="up" aria-label="معماری جریان داده از رویداد مشتری تا نتیجه اجرا">
				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۱</span>
					<span class="ft__arch-icon" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					</span>
					<h3>رویداد مشتری</h3>
					<p>Customer event — بازدید محصول، ارسال فرم، تغییر مرحلهٔ فروش یا هر رویداد ثبت‌شده برای یک مشتری.</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۲</span>
					<span class="ft__arch-icon ft__arch-icon--info" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
					</span>
					<h3>خط لولهٔ رویداد XCRM</h3>
					<p>رویدادها به پروفایل مشتری، سگمنت‌ها و محرک‌های اتوماسیون می‌رسند و شرط‌ها ارزیابی می‌شوند.</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۳</span>
					<span class="ft__arch-icon ft__arch-icon--warn" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
					</span>
					<h3>تریگر کمپین</h3>
					<p>کمپین (زمان‌بندی‌شده یا تریگر رویدادی) مشخص می‌کند کِی، کدام گردش‌کار و برای کدام مخاطب‌گروه اجرا شود.</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۴</span>
					<span class="ft__arch-icon" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><path d="M7 10v4a3 3 0 0 0 3 3h4"/></svg>
					</span>
					<h3>گردش‌کار n8n</h3>
					<p>در کانتینر اختصاصی همان شرکت اجرا می‌شود — «ورک‌فلاو»، «پردازش و اتومیشن» با n8n Engine.</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۵</span>
					<span class="ft__arch-icon ft__arch-icon--success" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
					</span>
					<h3>اقدام‌های پشتیبانی‌شده</h3>
					<p>گره‌های اختصاصی: ایجاد/به‌روزرسانی مشتری، ارسال پیامک، دریافت و ارسال تلگرام، منطق زمانی، شروع کمپین.</p>
				</div>

				<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>

				<div class="ft__arch-step">
					<span class="ft__arch-num" aria-hidden="true">۶</span>
					<span class="ft__arch-icon ft__arch-icon--end" aria-hidden="true">
						<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
					</span>
					<h3>نتیجهٔ اجرا</h3>
					<p>وضعیت اجرا (موفق/ناموفق/در انتظار) با شناسهٔ n8n در تاریخچهٔ اجراها ثبت می‌شود.</p>
				</div>
			</div>

			<div class="ft__split" style="margin-top: clamp(30px, 4vw, 42px);">
				<div class="ft__split-copy" data-reveal="up">
					<div class="ft__section-head" style="margin-bottom: 18px;">
						<span class="ft__label">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
							نحوه عملکرد
						</span>
					</div>
					<ul class="ft__checklist" style="margin-top: 0;">
						<li>«وقتی یک اتوماسیون اجرا می‌شود، ورک‌فلاو مرتبط در n8n فعال شده و اعضای گروه هدف را شناسایی می‌کند. سپس اتوماسیون برای هر عضو به صورت خودکار اجرا می‌شود.»</li>
						<li>سه عنصر معماری داشبورد: «اتوماسیون» (Automation Runner)، «گروه» (Target Audience) و «ورک‌فلاو» (n8n Engine)</li>
						<li>Django از طریق REST API گردش‌کارها و اجراها را کنترل می‌کند؛ گره‌های n8n برعکس با هدر <code>X-API-Key</code> به XCRM وصل می‌شوند</li>
						<li>«جریان داده زنده» — هر سه لایه روی همان دادهٔ شرکت کار می‌کنند</li>
					</ul>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<div class="ft__kpis">
						<div class="ft__kpi">
							<span class="ft__kpi-label">ورک‌فلاوهای فعال</span>
							<span class="ft__kpi-value">۱۲</span>
							<span class="ft__kpi-hint">از نمونهٔ اختصاصی</span>
						</div>
						<div class="ft__kpi">
							<span class="ft__kpi-label">اتوماسیون‌های فعال</span>
							<span class="ft__kpi-value">۵</span>
							<span class="ft__kpi-hint">در حال اجرا</span>
						</div>
					</div>
					<p class="ft__mock-caption" style="text-align: start;">داده‌های نمونه — آمار بخش «معماری اتصال» در داشبورد</p>

					<div class="ft__note-box ft__note-box--info" style="margin-top: 14px;">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>مرز معماری:</strong> تریگرهای کمپین XCRM با شاخه‌بندی بصری داخل خود n8n یکی نیستند —
							XCRM کِی و برای چه کسی تصمیم می‌گیرد؛ پیچیدگی گردش‌کار (شرط، حلقه، ادغام) داخل همان ورک‌فلاو ساخته می‌شود.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ DEDICATED COMPANY INSTANCE ============ -->
	<section class="ft__section ft__section--surface" id="instance">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="3" width="20" height="8" rx="2"/><rect x="2" y="13" width="20" height="8" rx="2"/><path d="M6 7h.01"/><path d="M6 17h.01"/></svg>
					نمونهٔ اختصاصی شرکت
				</span>
				<h2 class="ft__section-title">هر شرکت، <span class="text-gradient-primary">یک n8n خودش</span></h2>
				<p class="ft__section-desc">
					«مدیریت n8n» یعنی «مدیریت و نظارت بر اتصال XCRM به موتور اتوماسیون n8n.»
					با یک کانتینر Docker و یک پایگاه‌دادهٔ اختصاصی برای هر شرکت.
				</p>
				<ul class="ft__checklist">
					<li><strong>راه‌اندازی (Provisioning):</strong> Docker manager و schema manager نمونه را با پورت و زیردامنهٔ یکتا می‌سازند؛ وضعیت‌ها: «در حال ایجاد» ← «فعال»، یا «متوقف» / «خطا»</li>
					<li><strong>پایش وضعیت:</strong> کارت نمونه هر ۳۰ ثانیه وضعیت را تازه می‌کند — «اتصال» فعال/قطع، «بروزرسانی» و «ورک‌فلاوها»</li>
					<li>زمان آماده‌سازی اولیه با شمارش معکوس نمایش داده می‌شود: «در حال آماده‌سازی {m:ss}» تا «ورود به n8n»</li>
					<li>خطای اتصال صادقانه ثبت می‌شود: «اتصال به n8n برقرار نشد» + «سرور در دسترس نیست. لطفاً بعداً تلاش کنید.» با دکمهٔ «تلاش مجدد»</li>
					<li>منابع هر نمونه (حافظه/هسته) بر اساس پلن شرکت تخصیص می‌یابد — نه اشتراکی، نه نامحدود</li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="main-card ft__inst">
					<div class="ft__inst-head">
						<span class="ft__inst-logo" aria-hidden="true">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><path d="M7 10v4a3 3 0 0 0 3 3h4"/></svg>
						</span>
						<div class="ft__inst-title">
							<h3>n8n Engine</h3>
							<p>n8n-acme-8f21.xcrm.internal</p>
						</div>
						<div class="ft__inst-badges">
							<span class="ft__chan-state ft__chan-state--on">فعال</span>
							<span class="ft__tg-badge">امن</span>
						</div>
					</div>
					<div class="ft__inst-rows">
						<div class="ft__inst-row"><span>آدرس</span><span class="ft__inst-ltr">n8n-acme-8f21.xcrm.internal</span></div>
						<div class="ft__inst-row"><span>کانتینر</span><span class="ft__inst-ltr">n8n_company_42</span></div>
						<div class="ft__inst-row"><span>اسکیمای اختصاصی</span><span class="ft__inst-ltr">n8n_company_42</span></div>
						<div class="ft__inst-row"><span>اتصال</span><span>فعال</span></div>
						<div class="ft__inst-row"><span>بروزرسانی</span><span>همین الان</span></div>
						<div class="ft__inst-row"><span>ورک‌فلاوها</span><span>فعال</span></div>
					</div>
					<div class="ft__inst-foot">
						<p class="ft__inst-note">ورود با حساب XCRM؛ نشانی زیردامنه قابل کپی است.</p>
						<span class="ft__inst-btn">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><path d="m10 17 5-5-5-5"/><path d="M15 12H3"/></svg>
							ورود به n8n
						</span>
					</div>
				</div>
				<p class="ft__mock-caption">نمایش تزئینی از کارت «مدیریت n8n» — داده‌های نمونه</p>
			</div>
		</div>
	</section>

	<!-- ============ WORKFLOW SYNCHRONIZATION ============ -->
	<section class="ft__section" id="sync">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg>
					فرایندهای خودکار
				</span>
				<h2 class="ft__section-title">همگام‌سازی <span class="text-gradient-primary">دوطرفهٔ گردش کارها</span></h2>
				<p class="ft__section-desc">
					«مشاهده و مدیریت گردش کارهای متصل به n8n.» — ساخته/ویرایش/حذف در n8n با هوک‌ها
					JSON گردش‌کار را به XCRM می‌فرستد و دکمهٔ «همگام سازی» دستی هم همه‌چیز را تازه می‌کند.
				</p>
			</div>

			<div class="ft__split">
				<div class="ft__split-copy" data-reveal="up">
					<figure class="ft__mock-wrap" style="margin: 0;">
						<div class="ft__xtbl-wrap">
							<table class="ft__xtbl">
								<thead>
									<tr>
										<th scope="col">نام</th>
										<th scope="col">وضعیت</th>
										<th scope="col">همگام‌سازی</th>
										<th scope="col">وب‌هوک‌ها</th>
										<th scope="col">زیردامنه</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><strong>خوش‌آمدگویی سرنخ</strong><span class="ft__xtbl-err" style="color: var(--x-text-muted);">۸ گره</span></td>
										<td><span class="ft__st ft__st--delivered">فعال</span></td>
										<td><span class="ft__st ft__st--done">همگام</span></td>
										<td>۲ وب‌هوک</td>
										<td><span class="ft__xtbl-code">n8n-acme-8f21</span></td>
									</tr>
									<tr>
										<td><strong>یادآوری قرار</strong><span class="ft__xtbl-err" style="color: var(--x-text-muted);">۵ گره</span></td>
										<td><span class="ft__st ft__st--delivered">فعال</span></td>
										<td><span class="ft__st ft__st--wait">در انتظار</span></td>
										<td>۱ وب‌هوک</td>
										<td><span class="ft__xtbl-code">n8n-acme-8f21</span></td>
									</tr>
									<tr>
										<td><strong>همگام‌سازی انبوه</strong><span class="ft__xtbl-err" style="color: var(--x-text-muted);">۱۱ گره</span></td>
										<td><span class="ft__st ft__st--cancelled">غیرفعال</span></td>
										<td><span class="ft__st ft__st--failed">خطا</span></td>
										<td>۳ وب‌هوک</td>
										<td><span class="ft__xtbl-code">n8n-acme-8f21</span></td>
									</tr>
									<tr>
										<td><strong>گزارش هفتگی</strong><span class="ft__xtbl-err" style="color: var(--x-text-muted);">۶ گره</span></td>
										<td><span class="ft__st ft__st--cancelled">بایگانی</span></td>
										<td><span class="ft__st ft__st--done">همگام</span></td>
										<td>—</td>
										<td><span class="ft__xtbl-code">n8n-acme-8f21</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<figcaption class="ft__mock-caption">داده‌های نمونه — جدول «گردش کارها» با فیلترهای نام، وضعیت، همگام‌سازی و زیردامنه</figcaption>
					</figure>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li>ستون‌ها: «نام»، «وضعیت»، «همگام‌سازی»، «وب‌هوک‌ها» و «زیردامنه» + جستجوی «جستجوی گردش کارها...»</li>
					<li><strong>هوک‌های n8n:</strong> ایجاد/ویرایش/حذف گردش‌کار در n8n، JSON آن را به XCRM پوش می‌دهد</li>
						<li><strong>همگام‌سازی دستی:</strong> دکمهٔ «همگام سازی» ← «همگام‌سازی با موفقیت انجام شد» یا «خطا در همگام‌سازی گردش کارها»</li>
						<li><strong>سه وضعیت همگام‌سازی:</strong> «همگام»، «در انتظار»، «خطا» — با «آخرین همگام‌سازی» در هر ردیف</li>
						<li>وضعیت‌های گردش‌کار: «فعال»، «غیرفعال»، «بایگانی» + فیلتر نمای «همه / فعال / پیشنهادی / سیستمی»</li>
						<li>هر ردیف: «پیش‌نمایش» جریان و «باز کردن در n8n» برای ویرایش مستقیم</li>
						<li>حالت خالی: «گردش کاری وجود ندارد» — «برای شروع، یک گردش کار جدید ایجاد کنید یا از n8n همگام‌سازی کنید.»</li>
					</ul>

					<div class="ft__note-box">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>پشتیبان‌گیری:</strong> کنار همگام‌سازی، از گردش‌کارها پشتیبان‌گیری هم انجام می‌شود؛
							با ورود مجدد به n8n هم کلید سیستمی شرکت دوباره تحویل می‌شود تا اتصال قطع نماند.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ CUSTOM N8N NODES ============ -->
	<section class="ft__section ft__section--surface" id="nodes">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="5" cy="6" r="3"/><circle cx="19" cy="18" r="3"/><path d="M12 6h4a2 2 0 0 1 2 2v7"/><path d="M8 18H6a2 2 0 0 1-2-2V9"/></svg>
					گره‌های اختصاصی
				</span>
				<h2 class="ft__section-title">شش گرهٔ xCRM <span class="text-gradient-primary">داخل n8n شما</span></h2>
				<p class="ft__section-desc">
					این شش بستهٔ npm (n8n Nodes API v1) در محیط شرکت نصب می‌شوند تا گردش‌کارها
					مستقیماً با APIهای XCRM حرف بزنند — بدون کد نوشتن برای هر فراخوانی.
				</p>
			</div>

			<div class="ft__grid ft__grid--cases">
				<article class="main-card ft__node" data-reveal="up">
					<div class="ft__node-head">
						<code class="ft__node-name">XcrmClient</code>
						<span class="ft__node-type ft__node-type--action">اکشن</span>
					</div>
					<p class="ft__node-desc"><code>Add or update xCRM clients via API</code> — ایجاد یا به‌روزرسانی مشتری در XCRM.</p>
					<div class="ft__node-params">
						<span class="ft__node-param">نام کامل</span>
						<span class="ft__node-param">شماره تماس</span>
						<span class="ft__node-param">فرایند فروش</span>
						<span class="ft__node-param">مرحله فرایند فروش</span>
						<span class="ft__node-param">نام گروه</span>
						<span class="ft__node-param">اطلاعات بیشتر</span>
					</div>
					<div class="ft__node-foot">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 5v14"/><path d="M5 12h14"/></svg>
						عملیات: Create / Update — با جستجوی شماره تماس
					</div>
				</article>

				<article class="main-card ft__node" data-reveal="up" data-reveal-delay="60">
					<div class="ft__node-head">
						<code class="ft__node-name">XcrmSendSms</code>
						<span class="ft__node-type ft__node-type--action">اکشن</span>
					</div>
					<p class="ft__node-desc">«ارسال پیامک توسط سامانه‌های تنظیم شده شما» — از همان ارائه‌دهندگان پیکربندی‌شدهٔ شرکت.</p>
					<div class="ft__node-params">
						<span class="ft__node-param">سامانه</span>
						<span class="ft__node-param">گیرنده</span>
						<span class="ft__node-param">نوع پیامک</span>
						<span class="ft__node-param">Content</span>
						<span class="ft__node-param">Pattern Code</span>
						<span class="ft__node-param">Pattern Values</span>
					</div>
					<div class="ft__node-foot">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
						نوع پیامک: متنی (Normal) یا الگویی (Pattern)
					</div>
				</article>

				<article class="main-card ft__node" data-reveal="up" data-reveal-delay="120">
					<div class="ft__node-head">
						<code class="ft__node-name">XcrmTelegramAccounts</code>
						<span class="ft__node-type ft__node-type--action">اکشن</span>
					</div>
					<p class="ft__node-desc">«دریافت لیست اکانت‌های تلگرام شرکت» — فهرست اکانت‌های متصل را برای گره‌های بعدی آماده می‌کند.</p>
					<div class="ft__node-params">
						<span class="ft__node-param">فیلتر فعال: همه</span>
						<span class="ft__node-param">فقط فعال</span>
						<span class="ft__node-param">فقط غیرفعال</span>
						<span class="ft__node-param">خروجی تکی</span>
					</div>
					<div class="ft__node-foot">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
						خروجی: فهرست اکانت‌ها برای حلقهٔ بعدی
					</div>
				</article>

				<article class="main-card ft__node" data-reveal="up" data-reveal-delay="60">
					<div class="ft__node-head">
						<code class="ft__node-name">XcrmTelegramSendMessage</code>
						<span class="ft__node-type ft__node-type--action">اکشن</span>
					</div>
					<p class="ft__node-desc">«ارسال پیام تلگرام از اکانت شرکت» — با انتخاب اکانت و نوع گیرنده.</p>
					<div class="ft__node-params">
						<span class="ft__node-param">اکانت تلگرام</span>
						<span class="ft__node-param">نوع گیرنده</span>
						<span class="ft__node-param">نام کاربری</span>
						<span class="ft__node-param">شناسه عددی چت</span>
						<span class="ft__node-param">متن پیام</span>
					</div>
					<div class="ft__node-foot">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
						گیرنده: سیو مسیج / نام کاربری / شناسه عددی چت
					</div>
				</article>

				<article class="main-card ft__node" data-reveal="up" data-reveal-delay="120">
					<div class="ft__node-head">
						<code class="ft__node-name">XcrmTimeCondition</code>
						<span class="ft__node-type ft__node-type--logic">منطقی</span>
					</div>
					<p class="ft__node-desc"><code>Checks if a datetime field is older than a specified duration</code> — مقایسهٔ زمانی، بدون فراخوانی شبکه.</p>
					<div class="ft__node-params">
						<span class="ft__node-param">Date Field</span>
						<span class="ft__node-param">Duration Value</span>
						<span class="ft__node-param">Duration Unit</span>
						<span class="ft__node-param">خروجی: true / false</span>
					</div>
					<div class="ft__node-foot">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 3v12"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="6" r="3"/><path d="M18 9a9 9 0 0 1-9 9"/></svg>
						منطق خالص: فیلد زمانی قدیمی‌تر از بازهٔ مشخص؟
					</div>
				</article>

				<article class="main-card ft__node" data-reveal="up" data-reveal-delay="180">
					<div class="ft__node-head">
						<code class="ft__node-name">XcrmTriggerCampaign</code>
						<span class="ft__node-type ft__node-type--trigger">ماشه (Trigger)</span>
					</div>
					<p class="ft__node-desc">«شروع کمپین های شما بایستی با این تریگر باشد» — وب‌هوک امن با تأیید کلید API.</p>
					<div class="ft__node-params">
						<span class="ft__node-param">فقط POST</span>
						<span class="ft__node-param">XCRM API Key (پیشنهادی)</span>
						<span class="ft__node-param">None — فقط برای تست</span>
					</div>
					<div class="ft__node-foot">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
						هدر X-API-Key با کلید سیستمی شرکت تأیید می‌شود
					</div>
				</article>
			</div>

			<div class="ft__note-box" style="margin-top: clamp(22px, 3vw, 30px);" data-reveal="up">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
				<p style="margin: 0;">
					<strong>دقیقاً شش گره پیاده‌سازی شده است</strong> (۴ اکشن، ۱ منطقی، ۱ ماشه) — همین‌ها مستند و در دسترس‌اند.
					گره‌های دیگر فقط در فهرست برنامه‌ریزی‌اند و ادعای در دسترس بودنشان را نداریم.
					هیچ‌کدام از این گره‌ها ادعای «ده‌ها گره اختصاصی» را پوشش نمی‌دهند.
				</p>
			</div>
		</div>
	</section>

	<!-- ============ CONNECTING CRM CUSTOMERS WITH N8N ============ -->
	<section class="ft__section" id="crm">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					دادهٔ CRM در گردش‌کار
				</span>
				<h2 class="ft__section-title">مشتریان، مراحل و گروه‌ها <span class="text-gradient-primary">داخل n8n</span></h2>
				<p class="ft__section-desc">
					گره‌های اختصاصی با APIهای زندهٔ XCRM کار می‌کنند: مشتری می‌سازند، به فرایند فروش
					و گروه وصل می‌شوند و فهرست اکانت‌های تلگرام را می‌خوانند — داده همان دادهٔ داشبورد است.
				</p>
			</div>

			<div class="ft__split">
				<div class="ft__split-copy" data-reveal="up">
					<div class="main-card ft__form">
						<div class="ft__form-head">
							<h3><code style="font-family: ui-monospace, Menlo, Consolas, monospace; font-size: .9em;">XcrmClient</code> — ایجاد / به‌روزرسانی</h3>
							<p>فیلدهای گرهٔ مشتری، همان داده‌های پروفایل CRM هستند.</p>
						</div>
						<div class="ft__form-grid">
							<div class="ft__field">
								<span class="ft__field-label">نام کامل</span>
								<span class="ft__field-val">مریم رضایی</span>
							</div>
							<div class="ft__field">
								<span class="ft__field-label">شماره تماس</span>
								<span class="ft__field-val ft__field-val--ltr">09121234567</span>
							</div>
							<div class="ft__field">
								<span class="ft__field-label">فرایند فروش</span>
								<span class="ft__field-val">فرآیند فروش اصلی</span>
							</div>
							<div class="ft__field">
								<span class="ft__field-label">مرحله فرایند فروش</span>
								<span class="ft__field-val">مذاکره</span>
							</div>
							<div class="ft__field">
								<span class="ft__field-label">نام گروه</span>
								<span class="ft__field-val">سرنخ‌های داغ</span>
							</div>
							<div class="ft__field">
								<span class="ft__field-label">اطلاعات بیشتر</span>
								<span class="ft__field-val ft__field-val--muted">JSON — اختیاری</span>
							</div>
						</div>
						<div class="ft__form-foot">
							<p class="ft__form-note">Create مستقیم ایجاد می‌کند؛ Update ابتدا با شماره تماس جستجو و سپس به‌روزرسانی می‌کند. اعتبارسنجی‌ها: «نام کامل الزامی است»، «شماره تماس الزامی است».</p>
							<div class="ft__form-btns">
								<span class="ft__form-btn ft__form-btn--ghost">Update</span>
								<span class="ft__form-btn">Create</span>
							</div>
						</div>
					</div>
					<p class="ft__mock-caption">نمایش تزئینی از پارامترهای گرهٔ XcrmClient</p>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li><strong>منابع دادهٔ زنده:</strong> فهرست فرایندها، مراحل و گروه‌ها از API خوانده و داخل گره به‌صورت dropdown بارگذاری می‌شوند</li>
						<li><strong>بدون credential اضافه:</strong> همهٔ گره‌ها با هدر <code>X-API-Key</code> به Django وصل می‌شوند — نه Username/Password در n8n</li>
						<li><strong>کلید خودترمیم:</strong> اگر کلید منقضی (401) شود، گره یک‌بار به‌صورت خودکار کلید تازه می‌گیرد (با قفل تک‌پروازه و دورهٔ خنک‌سازی)</li>
						<li><strong>آدرس Django:</strong> از متغیر محیطی <code>N8N_JWT_AUTH_URL</code> در همان شبکهٔ کانتینر خوانده می‌شود</li>
						<li>خروجی گره‌ها در Pin Data قابل بازبینی و اتصال به گره‌های بعدی است</li>
					</ul>

					<div class="ft__note-box ft__note-box--info">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>حلقهٔ احراز هویت:</strong> ورود به XCRM با JWT ← هوک n8n از طریق
							<code>auth/n8n/verify</code> تأیید می‌کند ← کلید API نوع n8nِ همان شرکت
							<strong>فقط در تنظیمات n8n</strong> ذخیره می‌شود (نه در کوکی مرورگر) و گره‌ها با آن برمی‌گردند.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ CAMPAIGN TRIGGER ============ -->
	<section class="ft__section ft__section--surface" id="campaign">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
					کمپین = اجرای گردش‌کار
				</span>
				<h2 class="ft__section-title">شروع خودکار از <span class="text-gradient-primary">کمپین‌های XCRM</span></h2>
				<p class="ft__section-desc">
					کمپین یعنی اجرای یک گردش‌کار n8n روی مخاطب‌گروه — با زمان‌بندی یکبار/روزانه/هر عضو
					یا تریگر رویدادی. برای شروع‌های وب‌هوکی، ترجیحاً از نود «XCRM Trigger Campaign» استفاده کنید.
				</p>
				<ul class="ft__checklist">
					<li><strong>چهار حالت زمان‌بندی:</strong> «یکبار»، «روزانه»، «هر عضو» و «تریگر رویدادی»</li>
					<li>اعتبارسنجی‌های واقعی: «زمان شروع برای اجرای یکبار الزامی است» و «ساعت اجرا برای اجرای روزانه الزامی است»</li>
					<li>برای هر اجرا، شناسهٔ n8n در کنار وضعیت (موفق/ناموفق/در انتظار) ثبت می‌شود</li>
					<li>تست قبل از اجرا: «تست ورکفلو» همان payload نمونه (<code>sample_payload.json</code>) را واقعاً می‌فرستد؛ اگر payload نباشد: «نمونه payload برای این اتوماسیون در دسترس نیست.»</li>
					<li>«نود Webhook باید حتماً ابتدای ورکفلو باشد» — داده‌ها با متد POST ارسال می‌شوند</li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="ft__chain">
					<div class="ft__chain-node">
						<span class="ft__chain-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>تریگر کمپین</h3>
							<p>رویداد یا زمان‌بندی، کمپین را با وضعیت «در صف اجرا» شروع می‌کند.</p>
						</div>
					</div>
					<div class="ft__chain-node">
						<span class="ft__chain-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>پخش به ازای هر مخاطب</h3>
							<p>اعضای گروه هدف جدا می‌شوند و برای هر مشتری یک اجرا شروع می‌شود (حداکثر ۱۰۰ پیام در هر اجرا).</p>
						</div>
					</div>
					<div class="ft__chain-node">
						<span class="ft__chain-icon" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><path d="M7 10v4a3 3 0 0 0 3 3h4"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>فراخوانی وب‌هوک گردش‌کار</h3>
							<p>«تست ورکفلو» یا اجرای واقعی، اولین وب‌هوک ورک‌فلاو را با POST و هدر X-API-Key صدا می‌زند.</p>
						</div>
					</div>
					<div class="ft__chain-node">
						<span class="ft__chain-icon ft__chain-icon--end" aria-hidden="true">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
						</span>
						<div class="ft__chain-body">
							<h3>ثبت اجرا</h3>
							<p>موفق/ناموفق + شناسهٔ n8n؛ در شکست، تا سه بار تلاش مجدد و سپس وضعیت نهایی ناموفق.</p>
						</div>
					</div>
				</div>

				<div class="ft__note-box" style="margin-top: 14px;">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
					<p style="margin: 0;">
						<strong>مرز مهم:</strong> تریگر کمپین فقط «کِی اجرا شود» را تعیین می‌کند؛
						منطق داخلی گردش‌کار (شرط، حلقه، تأخیر) داخل خود n8n ساخته می‌شود —
						تریگر XCRM معادل شاخه‌بندی بصری داخل n8n نیست.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ WEBHOOK MANAGEMENT ============ -->
	<section class="ft__section" id="webhooks">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					مدیریت وب‌هوک‌ها
				</span>
				<h2 class="ft__section-title">وب‌هوک‌های <span class="text-gradient-primary">همگام‌شده</span> از گردش کارها</h2>
				<p class="ft__section-desc">
					«مشاهده و مدیریت وب‌هوک‌های مورد استفاده در گردش کارها.» — هر وب‌هوکِ تعریف‌شده در n8n
					با همگام‌سازی وارد XCRM می‌شود و آدرس کاملش قابل کپی است.
				</p>
			</div>

			<div class="ft__split">
				<div class="ft__split-copy" data-reveal="up">
					<figure class="ft__mock-wrap" style="margin: 0;">
						<div class="ft__xtbl-wrap">
							<table class="ft__xtbl">
								<thead>
									<tr>
										<th scope="col">مسیر</th>
										<th scope="col">متد</th>
										<th scope="col">گردش کار</th>
										<th scope="col">نود</th>
										<th scope="col">ایجاد</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><span class="ft__xtbl-code">/webhook/lead-welcome</span></td>
										<td><span class="ft__form-chip ft__form-chip--on">POST</span></td>
										<td>خوش‌آمدگویی سرنخ</td>
										<td>Webhook</td>
										<td>۱۴۰۳/۰۸/۱۰</td>
									</tr>
									<tr>
										<td><span class="ft__xtbl-code">/webhook/cart-remind</span></td>
										<td><span class="ft__form-chip ft__form-chip--on">POST</span></td>
										<td>یادآوری قرار</td>
										<td>Webhook</td>
										<td>۱۴۰۳/۰۸/۱۲</td>
									</tr>
									<tr>
										<td><span class="ft__xtbl-code">/webhook/status-pull</span></td>
										<td><span class="ft__form-chip">GET</span></td>
										<td>همگام‌سازی انبوه</td>
										<td>Webhook</td>
										<td>۱۴۰۳/۰۸/۱۴</td>
									</tr>
								</tbody>
							</table>
						</div>
						<figcaption class="ft__mock-caption">داده‌های نمونه — جدول «وب‌هوک‌ها» با نماهای همه / GET / POST / سایر</figcaption>
					</figure>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li>ستون‌ها: «مسیر»، «متد»، «گردش کار»، «نود»، «آدرس کامل» و «ایجاد» — با عنوان بالای جدول «وب‌هوک‌های فعال»</li>
						<li>«کپی آدرس» برای هر وب‌هوک + «باز کردن در n8n»</li>
						<li>شمارنده‌های بالای جدول: «{n} POST» و «{n} GET»</li>
						<li>خالی: «وب‌هوکی وجود ندارد» — «وب‌هوک‌ها از گردش کارهای n8n همگام‌سازی می‌شوند. ابتدا یک گردش کار ایجاد کنید.»</li>
						<li>در بخش n8n: «{n} وب‌هوک از {m} ورک‌فلاو» + حالت خالی «وب‌هوکی یافت نشد»</li>
						<li>فراخوانی وب‌هوک از سمت کمپین با هدر <code>X-API-Key</code> همان شرکت امضا می‌شود</li>
					</ul>

					<div class="ft__note-box">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>نکتهٔ تست:</strong> «تست ورکفلو» در جزئیات اتوماسیون، اولین وب‌هوک را صدا می‌زند
							و آدرس آن (<code>webhook_url</code>) را برمی‌گرداند — همان payload نمونه‌ای که در
							<code>sample_payload.json</code> می‌بینید.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ EXECUTION & MONITORING ============ -->
	<section class="ft__section ft__section--surface" id="monitor">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
					پایش اجراها
				</span>
				<h2 class="ft__section-title">اجرای گردش‌کار، <span class="text-gradient-primary">ردیف‌به‌ردیف</span></h2>
				<p class="ft__section-desc">
					«تاریخچه اجراها» در جزئیات اتوماسیون: برای هر مخاطب وضعیت، شناسهٔ n8n، زمان و
					در صورت خطا، علت + شمارندهٔ تلاش — با فیلتر و جستجو.
				</p>
			</div>

			<div class="ft__kpis" data-reveal="up">
				<div class="ft__kpi">
					<span class="ft__kpi-label">کل اجراها</span>
					<span class="ft__kpi-value">۳۱۲</span>
					<span class="ft__kpi-hint">از زمان آخرین اجرا</span>
				</div>
				<div class="ft__kpi">
					<span class="ft__kpi-label">موفق</span>
					<span class="ft__kpi-value">۲۸۹</span>
					<span class="ft__kpi-hint">۹۳٪ کل اجراها</span>
				</div>
				<div class="ft__kpi">
					<span class="ft__kpi-label">ناموفق</span>
					<span class="ft__kpi-value">۱۴</span>
					<span class="ft__kpi-hint">قابل تلاش مجدد</span>
				</div>
				<div class="ft__kpi">
					<span class="ft__kpi-label">در انتظار</span>
					<span class="ft__kpi-value">۹</span>
					<span class="ft__kpi-hint">در صف اجرا</span>
				</div>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">داده‌های نمونه — «پیشرفت کلی» با درصدهای موفق/ناموفق/در انتظار</p>

			<div class="ft__split" style="margin-top: clamp(28px, 4vw, 40px);">
				<div class="ft__split-copy" data-reveal="up">
					<figure class="ft__mock-wrap" style="margin: 0;">
						<div class="ft__xtbl-wrap">
							<table class="ft__xtbl">
								<thead>
									<tr>
										<th scope="col">مخاطب</th>
										<th scope="col">وضعیت</th>
										<th scope="col">شناسه n8n</th>
										<th scope="col">زمان</th>
										<th scope="col">عملیات</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><strong>مریم رضایی</strong></td>
										<td><span class="ft__st ft__st--done"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>موفق</span></td>
										<td><span class="ft__xtbl-code">exe_5d81…</span></td>
										<td>۱۴۰۳/۰۸/۱۵ — ۱۱:۰۴</td>
										<td>—</td>
									</tr>
									<tr>
										<td><strong>شرکت آریا</strong></td>
										<td>
											<span class="ft__st ft__st--failed"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>ناموفق</span>
											<span class="ft__xtbl-err">گرهٔ خروجی پاسخ نداد</span>
										</td>
										<td><span class="ft__xtbl-code">exe_20b7…</span></td>
										<td>۱۴۰۳/۰۸/۱۵ — ۱۱:۰۳</td>
										<td><span class="ft__xtbl-act"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg>تلاش مجدد</span></td>
									</tr>
									<tr>
										<td><strong>فروشگاه پارس</strong></td>
										<td><span class="ft__st ft__st--wait"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>در انتظار</span></td>
										<td><span class="ft__xtbl-code">—</span></td>
										<td>در صف اجرا</td>
										<td>—</td>
									</tr>
								</tbody>
							</table>
						</div>
						<figcaption class="ft__mock-caption">داده‌های نمونه — نماهای «همه / موفق / ناموفق / در انتظار» + جستجوی مخاطب یا شناسه اجرا</figcaption>
					</figure>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li>وضعیت‌های اجرا: «موفق»، «ناموفق»، «در انتظار» — با نشان «زنده» هنگام اجرای جاری</li>
						<li>ستون خطا در همان ردیف + دکمهٔ «تلاش مجدد» فقط روی اجراهای ناموفق</li>
						<li>تلاش تا سه بار؛ پس از آن وضعیت نهایی ناموفق با ثبت صف مرده (DLQ)</li>
						<li>حالت خالی: «هنوز اجرایی ثبت نشده» — «پس از اجرای اتوماسیون، اجراها اینجا نمایش داده می‌شوند»</li>
						<li>پایش نمونه: وضعیت هر ۳۰ ثانیه + بروزرسانی نسبی «همین الان / {n} دقیقه پیش»</li>
					</ul>

					<div class="ft__note-box ft__note-box--info">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>دو سطح پایش:</strong> سطح نمونه (فعال/متوقف/خطا، اتصال، بروزرسانی) و
							سطح اجرا (موفق/ناموفق/در انتظار + شناسه n8n) — هر دو از داخل داشبورد،
							بدون دسترسی مستقیم به سرور.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ PRACTICAL SCENARIOS ============ -->
	<section class="ft__section" id="scenarios">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
					سناریوهای عملی
				</span>
				<h2 class="ft__section-title">چهار گردش‌کار <span class="text-gradient-primary">واقعی</span></h2>
				<p class="ft__section-desc">
					ترکیب‌هایی از همان شش گره و امکانات بالا — با فرض وجود کمپین و مخاطب‌گروه مناسب.
				</p>
			</div>

			<div class="ft__grid ft__grid--cases">
				<article class="main-card ft__scen" data-reveal="up">
					<span class="ft__case-badge">خوش‌آمدگویی</span>
					<h3>سرنخ تازه، پیام آنی</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">مسیر گره‌ها</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">Webhook ← XcrmClient (Create) ← XcrmSendSms — سرنخ ثبت شد، پیامک خوش‌آمدگویی با ارائه‌دهندهٔ پیش‌فرض می‌رود.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">راه‌انداز</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">کمپین «تریگر رویدادی» روی رویداد ارسال فرم.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="60">
					<span class="ft__case-badge">یادآوری</span>
					<h3>قرار ملاقات فردا</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">مسیر گره‌ها</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">Webhook ← XcrmTimeCondition ← XcrmTelegramSendMessage — اگر زمان قرار قدیمی‌تر از بازه بود، پیام تلگرامی از اکانت شرکت می‌رود.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">راه‌انداز</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">کمپین «روزانه» ساعت ۸ صبح روی گروه «قرارهای امروز».</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="120">
					<span class="ft__case-badge">به‌روزرسانی داده</span>
					<h3>همگام‌سازی انبوه مشتریان</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">مسیر گره‌ها</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">Schedule Trigger ← حلقه ← XcrmClient (Update) — تغییر مرحلهٔ فروش برای همهٔ اعضا، ردیف‌به‌ردیف با جستجوی شماره تماس.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">راه‌انداز</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">کمپین «یکبار» یا «هر عضو» با مخاطب از سگمنت.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="180">
					<span class="ft__case-badge">شروع دستی</span>
					<h3>کمپین دستی با تست</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">مسیر گره‌ها</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">XcrmTriggerCampaign (POST + X-API-Key) ← منطق ← XcrmSendSms — اول با «تست ورکفلو» payload واقعی را بفرستید، بعد اجرا کنید.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">راه‌انداز</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">دکمهٔ «اجرای اتوماسیون» در جزئیات کمپین.</p>
					</div>
				</article>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">داده‌های نمونه — مثال‌ها بر اساس گره‌ها و امکانات پیاده‌سازی‌شده نوشته شده‌اند؛ کمپین و گروه هدف را خودتان می‌سازید.</p>

			<div class="ft__related-links" data-reveal="up" style="margin-top: clamp(26px, 3.5vw, 36px);">
				<a href="<?php echo esc_url( home_url( '/features/automation/' ) ); ?>" class="ft__related-link">
					تریگر و کمپین بازاریابی
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/communication/' ) ); ?>" class="ft__related-link">
					کانال‌های ارتباطی پیامک و تلگرام
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/segmentation/' ) ); ?>" class="ft__related-link">
					گروه‌های هدف با سگمنت
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
			'q' => 'n8n اختصاصی برای هر شرکت یعنی چه؟',
			'a' => 'به این معنی که هر شرکت یک <strong>کانتینر Docker</strong> و یک <strong>پایگاه‌دادهٔ جداگانه</strong> با پورت و زیردامنهٔ یکتا دارد (وضعیت‌ها: «در حال ایجاد»، «فعال»، «متوقف»، «خطا»). گردش‌کارها، کلیدها و داده‌های اجرا بین شرکت‌ها مشترک نیست؛ منابع هر نمونه هم بر اساس پلن شرکت تخصیص می‌یابد.',
		),
		array(
			'q' => 'گردش کارها چطور با XCRM همگام می‌شوند؟',
			'a' => 'دو مسیر دارد: (۱) هوک‌های n8n هنگام ایجاد/ویرایش/حذف گردش‌کار، JSON آن را به XCRM پوش می‌دهند؛ (۲) دکمهٔ «همگام سازی» در داشبورد، همه را تازه می‌کند («همگام‌سازی با موفقیت انجام شد»). وضعیت هر ردیف یکی از «همگام»، «در انتظار» یا «خطا» است و در کنارش آخرین زمان همگام‌سازی دیده می‌شود. پشتیبان‌گیری از گردش‌کارها هم بخشی از همین فرایند است.',
		),
		array(
			'q' => 'ارتباط کمپین XCRM با گردش‌کار n8n چیست؟',
			'a' => 'یک «کمپین» در XCRM در واقع اجرای یک گردش‌کار n8n روی یک مخاطب‌گروه است: با زمان‌بندی «یکبار»، «روزانه»، «هر عضو» یا «تریگر رویدادی». برای هر مشتری یک اجرا ثبت می‌شود با وضعیت موفق/ناموفق/در انتظار و شناسهٔ n8n. توجه کنید که تریگر کمپین فقط «کِی و برای چه کسی» را تعیین می‌کند — شاخه‌بندی و منطق داخلی داخل خود گردش‌کار n8n ساخته می‌شود و تریگرهای کمپین معادل آن نیستند.',
		),
		array(
			'q' => 'گره‌های اختصاصی چه می‌کنند و چند تا هستند؟',
			'a' => 'دقیقاً <strong>شش گره پیاده‌سازی و مستند شده‌اند</strong>: <code>XcrmClient</code> (ایجاد/به‌روزرسانی مشتری)، <code>XcrmSendSms</code> (ارسال پیامک از سامانه‌های خودتان)، <code>XcrmTelegramAccounts</code> (فهرست اکانت‌های تلگرام)، <code>XcrmTelegramSendMessage</code> (ارسال پیام تلگرام)، <code>XcrmTimeCondition</code> (منطق زمانی true/false) و <code>XcrmTriggerCampaign</code> (ماشهٔ امن شروع کمپین با هدر X-API-Key). گره‌های دیگری در فهرست برنامه‌ریزی وجود دارند اما هنوز پیاده‌سازی نشده‌اند و در دسترس نیستند.',
		),
		array(
			'q' => 'احراز هویت بین XCRM و n8n چگونه است؟',
			'a' => 'با ورود به XCRM، یک کلید API نوع n8n برای همان شرکت ساخته و <strong>فقط در تنظیمات n8n</strong> ذخیره می‌شود (نه در کوکی مرورگر). گره‌های اختصاصی درخواست‌ها را با هدر <code>X-API-Key</code> به بک‌اند می‌فرستند و اگر کلید منقضی شود، به‌صورت خودکار یک‌بار کلید تازه می‌گیرند. طرف کمپین هم وب‌هوک‌ها را با کلید سیستمی همان شرکت امضا می‌کند.',
		),
		array(
			'q' => 'وب‌هوک‌ها از کجا می‌آیند؟',
			'a' => 'از خود گردش‌کارها: هر وب‌هوک تعریف‌شده در n8n با همگام‌سازی وارد بخش «مدیریت وب‌هوک‌ها» می‌شود و ستون‌های «مسیر»، «متد» (GET/POST)، «گردش کار»، «نود» و «آدرس کامل» (با دکمهٔ کپی) را دارد. حالت خالی هم توضیح می‌دهد: «وب‌هوک‌ها از گردش کارهای n8n همگام‌سازی می‌شوند. ابتدا یک گردش کار ایجاد کنید.»',
		),
		array(
			'q' => 'آیا منابع نامحدود یا بدون محدودیت است؟',
			'a' => 'خیر. هر نمونه بر اساس پلن شرکت منابع مشخص (مثل حافظه و هسته) می‌گیرد و دسترسی به بخش n8n هم به قابلیت‌های فعال اشتراک شرکت وابسته است. این صفحه ادعای منابع نامحدود یا زیرساخت بدون محدودیت ندارد.',
		),
		array(
			'q' => 'اگر اتصال یا اجرا خطا داد چه می‌شود؟',
			'a' => 'کارت نمونه خطا را صادقانه نشان می‌دهد: «اتصال به n8n برقرار نشد» + «سرور در دسترس نیست. لطفاً بعداً تلاش کنید.» با دکمهٔ «تلاش مجدد». در سطح اجرا، اجرای ناموفق پیام خطا و دکمهٔ «تلاش مجدد» دارد و تا سه بار تلاش می‌شود؛ بعد از آن وضعیت نهایی ناموفق ثبت می‌شود. وضعیت همگام‌سازی هم «خطا» را کنار همان ردیف گردش‌کار نگه می‌دارد.',
		),
	);
	$ft_faq_id    = 'faq';
	$ft_faq_title = 'پرسش‌های متداول دربارهٔ اتوماسیون گردش‌کار n8n';
	$ft_faq_intro = 'برای تیم‌های فنی، آژانس‌ها و متخصصان اتوماسیون بازاریابی.';
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
	$ft_cta_title         = 'قدرت اتوماسیون اختصاصی XCRM را تجربه کنید';
	$ft_cta_desc          = 'نمونهٔ n8n خود را بسازید، گردش‌کارها را همگام کنید و با شش گرهٔ اختصاصی به داده‌های CRM وصل شوید.';
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
