<?php
/**
 * Template Name: Feature — Marketing Automation
 * Template Post Type: page
 *
 * صفحهٔ جزئیات قابلیت — اتوماسیون بازاریابی
 * /features/automation/
 *
 * متن‌های رابط کاربری (وضعیت‌ها، انواع زمان‌بندی، تریگرها و جملات
 * طبیعی آن‌ها، مخاطب هدف، اجراها و تاریخچه) از سورس واقعی داشبورد
 * (کامپوننت‌های پوشهٔ automations) استخراج و بازبینی شده‌اند.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_stylesheet_directory() . '/inc/features-data.php';

$home_url   = home_url( '/' );
$features   = home_url( '/features/' );
$canonical  = home_url( '/features/automation/' );
$dash_url   = 'https://dashboard.xcrmforosh.com/';

$page_title       = 'اتوماسیون بازاریابی و تریگرهای رفتاری | «xCRM فروش»';
$page_description = 'کمپین‌ها را زمان‌بندی کنید یا با تریگرهای فوری، تأخیری و غیابی به رفتار مشتری واکنش نشان دهید؛ مخاطب از سگمنت و پیپلاین فروش انتخاب و اجرای هر مشتری در n8n ثبت و پیگیری می‌شود.';
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
			array('@type'=>'ListItem','position'=>3,'name'=>'اتوماسیون بازاریابی','item'=>esc_url($canonical)),
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
				<span class="ft__breadcrumb-current">اتوماسیون بازاریابی</span>
			</nav>

			<span class="ft__label ft-anim ft-anim--1">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
				اتوماسیون بازاریابی
			</span>

			<h1 class="ft__title ft-anim ft-anim--2">
				رفتار مشتری را به <span class="text-gradient-primary">اقدام بازاریابی مناسب</span> تبدیل کنید
			</h1>

			<p class="ft__hero-desc ft-anim ft-anim--3">
				هم کمپین زمان‌بندی‌شده دارید، هم تریگرهای رفتاری: با وقوع یک رویداد، با تأخیر مشخص
				یا در صورت «نیامدنِ» یک رویداد — اتوماسیون برای همان مشتری اجرا می‌شود،
				با مخاطب انتخابی، تاریخچهٔ کامل اجرا و امکان تلاش مجدد.
			</p>

			<div class="ft__hero-actions ft-anim ft-anim--4">
				<a href="<?php echo esc_url( $dash_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
					شروع رایگان
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="#scenarios" class="hp__btn hp__btn--ghost" data-magnetic>
					سه سناریوی تریگر را ببینید
				</a>
			</div>

			<ul class="ft__hero-pills ft-anim ft-anim--5" aria-label="نکات کلیدی">
				<li>تریگر: فوری، با تأخیر، عدم وقوع</li>
				<li>زمان‌بندی: یکبار، روزانه، هر عضو</li>
				<li>مخاطب: سگمنت یا پیپلاین فروش</li>
				<li>اجرای n8n با تاریخچه و تلاش مجدد</li>
			</ul>
		</div>
	</section>

	<!-- ============ TRADITIONAL VS BEHAVIOR-TRIGGERED ============ -->
	<section class="ft__section ft__section--surface" id="vs">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
					دو مدل اجرا
				</span>
				<h2 class="ft__section-title">زمان‌بندی سنتی <span class="text-gradient-primary">و</span> واکنش به رفتار</h2>
				<p class="ft__section-desc">
					اتوماسیون «xCRM فروش» فقط زمان‌بندی ثابت نیست؛ هر دو مدل را دارد و انتخاب بین آن‌ها
					به نوع پیام شما بستگی دارد.
				</p>
			</div>

			<div class="ft__compare">
				<article class="main-card ft__cmp" data-reveal="up">
					<span class="ft__type-chip ft__type-chip--static">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg>
						زمان‌بندی‌شده
					</span>
					<h3>کمپین زمان‌بندی‌شده</h3>
					<p>پیام در زمان مشخص اجرا می‌شود: یک‌بار در تاریخی معین، هر روز ساعت مشخص، یا به ازای هر مشتری در بازهٔ خودش.</p>
					<ul class="ft__cmp-list">
						<li>مناسب خبرنامه، یادآوری دوره‌ای و کمپین‌های برنامه‌ریزی‌شده</li>
						<li>زمان شروع و ساعت اجرا الزامی و قابل تنظیم است</li>
						<li>همین حالا هم در پلتفرم پشتیبانی می‌شود</li>
					</ul>
				</article>

				<article class="main-card ft__cmp" data-reveal="up" data-reveal-delay="90">
					<span class="ft__type-chip ft__type-chip--dynamic">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
						تریگر رویدادی
					</span>
					<h3>اتوماسیون رفتاری</h3>
					<p>اجرا با وقوع یک رویداد خاص برای یک مشتری — بلافاصله، با تأخیر، یا در صورت نیامدنِ رویداد دیگر در بازهٔ مشخص.</p>
					<ul class="ft__cmp-list">
						<li>مناسب واکنش به رفتار واقعی: فرم، سبد خرید، بازدید محصول</li>
						<li>شرط‌های ورودی روی پراپرتی‌های رویداد</li>
						<li>محدودیت اجرا برای هر مشتری قابل تنظیم</li>
					</ul>
				</article>
			</div>

			<div class="ft__note-box" style="margin-top: clamp(22px, 3vw, 30px);" data-reveal="up">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
				<p style="margin: 0;">
					<strong>نکته:</strong> این دو مدل جایگزین هم نیستند؛ در یک اتوماسیون می‌توانید
					از زمان‌بندی استفاده کنید یا تریگر بسازید — و حتی چند تریگر مستقل را هم‌زمان داشته باشید.
					<strong>رابطه بین تریگرها: «یا»</strong> — برقراریِ یکی از تریگرها کافی است؛
					نیازی نیست همهٔ تریگرها با هم برقرار شوند.
				</p>
			</div>
		</div>
	</section>

	<!-- ============ AUTOMATION LIFECYCLE ============ -->
	<section class="ft__section" id="lifecycle">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg>
					چرخهٔ حیات
				</span>
				<h2 class="ft__section-title">از پیش‌نویس تا <span class="text-gradient-primary">تکمیل</span> — پنج وضعیت</h2>
				<p class="ft__section-desc">
					هر اتوماسیون یک چرخهٔ مشخص دارد؛ دکمه‌های مدیریت (اجرا، توقف موقت، ادامه، تکمیل)
					بر اساس وضعیت فعلی نمایش داده می‌شوند.
				</p>
			</div>

			<div data-reveal="up">
				<div class="ft__life">
					<span class="ft__life-node ft__life-node--draft"><span class="ft__life-dot" aria-hidden="true"></span>پیش‌نویس</span>
					<svg class="ft__life-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					<span class="ft__life-node ft__life-node--scheduled"><span class="ft__life-dot" aria-hidden="true"></span>زمان‌بندی شده</span>
					<svg class="ft__life-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					<span class="ft__life-node ft__life-node--running"><span class="ft__life-dot" aria-hidden="true"></span>در حال اجرا</span>
					<svg class="ft__life-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					<span class="ft__life-node ft__life-node--paused"><span class="ft__life-dot" aria-hidden="true"></span>متوقف</span>
					<svg class="ft__life-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					<span class="ft__life-node ft__life-node--done"><span class="ft__life-dot" aria-hidden="true"></span>تکمیل شده</span>
					<p class="ft__life-note">توقف موقت قابل بازگشت است؛ «تکمیل اتوماسیون» پایان چرخه است. فقط اتوماسیون‌های پیش‌نویس قابل حذف هستند.</p>
				</div>
				<div class="ft__life-actions" aria-label="دکمه‌های مدیریت اتوماسیون">
					<span class="ft__life-btn"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polygon points="6 3 20 12 6 21 6 3"/></svg>اجرای اتوماسیون</span>
					<span class="ft__life-btn ft__life-btn--warn"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="6" y="4" width="4" height="16"/><rect x="14" y="4" width="4" height="16"/></svg>توقف موقت</span>
					<span class="ft__life-btn"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polygon points="5 3 19 12 5 21 5 3"/></svg>ادامه اجرا</span>
					<span class="ft__life-btn ft__life-btn--muted"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>تکمیل اتوماسیون</span>
					<span class="ft__life-btn ft__life-btn--muted"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>کپی اتوماسیون</span>
				</div>
			</div>

			<div class="ft__section-head" style="margin-top: clamp(34px, 4.5vw, 46px);" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 6v6l4 2"/><circle cx="12" cy="12" r="10"/></svg>
					کی اجرا شود؟
				</span>
				<h2 class="ft__section-title">چهار حالت <span class="text-gradient-primary">اجرا</span></h2>
				<p class="ft__section-desc">
					در ویزارد ساخت (نام ← چه زمانی؟ ← مخاطب هدف ← بازبینی)، یکی از این چهار حالت را انتخاب می‌کنید.
				</p>
			</div>

			<div class="ft__opts" data-reveal="up">
				<div class="ft__opt">
					<div class="ft__opt-top">
						<span class="ft__opt-icon" aria-hidden="true"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>
						<span class="ft__opt-name">رویدادی</span>
					</div>
					<p class="ft__opt-hint">با وقوع یک رویداد اجرا شود — تریگرهای فوری، تأخیری و غیابی.</p>
				</div>
				<div class="ft__opt">
					<div class="ft__opt-top">
						<span class="ft__opt-icon ft__opt-icon--info" aria-hidden="true"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/><path d="M12 14v4"/><path d="M10 16h4"/></svg></span>
						<span class="ft__opt-name">یکبار</span>
					</div>
					<p class="ft__opt-hint">در زمان مشخص — «زمان شروع» برای این حالت الزامی است.</p>
				</div>
				<div class="ft__opt">
					<div class="ft__opt-top">
						<span class="ft__opt-icon ft__opt-icon--warn" aria-hidden="true"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></span>
						<span class="ft__opt-name">روزانه</span>
					</div>
					<p class="ft__opt-hint">هر روز ساعت مشخص — «ساعت اجرا» برای این حالت الزامی است.</p>
				</div>
				<div class="ft__opt">
					<div class="ft__opt-top">
						<span class="ft__opt-icon ft__opt-icon--success" aria-hidden="true"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></span>
						<span class="ft__opt-name">هر عضو</span>
					</div>
					<p class="ft__opt-hint">به ازای هر مشتری — «این اتوماسیون به ازای هر مشتری اجرا می‌شود».</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ IMMEDIATE TRIGGER ============ -->
	<section class="ft__section ft__section--surface" id="scenarios">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
					تریگر فوری
				</span>
				<h2 class="ft__section-title">A — اجرا <span class="text-gradient-primary">بلافاصله پس از رویداد</span></h2>
				<p class="ft__section-desc">
					مشتری رویداد خاصی را انجام می‌دهد؛ تریگر ارزیابی می‌شود و اگر شرط‌ها برقرار باشند،
					اکشن همان لحظه برای همان مشتری اجرا می‌شود.
				</p>
				<ul class="ft__checklist">
					<li>عنوان تریگر: «فوری» — اجرا بلافاصله پس از وقوع رویداد ورودی</li>
					<li>شرط ورودی اختیاری: فیلتر روی پراپرتی‌های رویداد (برابر با، مخالف، شامل، شروع با، بزرگتر از، …)</li>
					<li>رویدادها از فهرست تعریف‌شدهٔ شرکت شما انتخاب می‌شوند</li>
					<li>«محدودیت اجرا برای هر مشتری» قابل تنظیم است (۰ = بدون محدودیت)</li>
				</ul>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<div class="ft__scenario">
					<span class="ft__scn-badge">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
						فوری — نمونهٔ تصویری
					</span>
					<h3 class="ft__scn-title">سناریوی A: از رویداد تا اجرا</h3>
					<p class="ft__scn-desc">یک جریان سه‌قدمی که در آن هیچ تأخیری در کار نیست.</p>
					<div class="ft__chain">
						<div class="ft__chain-node">
							<span class="ft__chain-icon" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z"/><path d="M14 2v5h5"/><path d="M8 13h8"/><path d="M8 17h5"/></svg>
							</span>
							<div class="ft__chain-body">
								<h3>مشتری یک رویداد خاص را انجام می‌دهد</h3>
								<p>مثلاً فرم درخواست دمو را ارسال می‌کند.</p>
							</div>
						</div>
						<div class="ft__chain-node">
							<span class="ft__chain-icon" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
							</span>
							<div class="ft__chain-body">
								<h3>تریگر ارزیابی می‌شود</h3>
								<p>رویداد ورودی و شرط‌های فیلتر بررسی و واجد شرایط بودن تأیید می‌شود.</p>
							</div>
						</div>
						<div class="ft__chain-node">
							<span class="ft__chain-icon ft__chain-icon--end" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
							</span>
							<div class="ft__chain-body">
								<h3>اتوماسیون اجرا می‌شود</h3>
								<p>اکشن انتخاب‌شده (مثلاً ارسال پیام خوش‌آمدگویی) برای همان مشتری اجرا می‌شود.</p>
							</div>
						</div>
					</div>
					<div class="ft__scn-sentence">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>جملهٔ تریگر:</b> با وقوع «ارسال فرم»، اتوماسیون بلافاصله اجرا می‌شود.</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ DELAYED TRIGGER ============ -->
	<section class="ft__section" id="delayed">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
					تریگر با تأخیر
				</span>
				<h2 class="ft__section-title">B — <span class="text-gradient-primary">شمارش معکوس</span> پس از رویداد</h2>
				<p class="ft__section-desc">
					رویداد ورودی رخ می‌دهد، بازهٔ تأخیر شروع می‌شود و اتوماسیون پس از گذشت آن بازه
					برای همان مشتری اجرا می‌شود — مثلاً یادآوری دو روز پس از بازدید محصول.
				</p>
				<ul class="ft__checklist">
					<li>عنوان تریگر: «با تأخیر» — اجرا پس از گذشت مدت مشخص از وقوع رویداد</li>
					<li>مدت تأخیر و واحد آن قابل تنظیم است: دقیقه، ساعت، روز یا ماه</li>
					<li>اعتبارسنجی واقعی: «مدت تأخیر باید بیشتر از صفر باشد» و «واحد تأخیر را انتخاب کنید»</li>
					<li>تأخیر به‌ازای هر مشتری جداگانه شمرده می‌شود — نه یک زمان ثابت برای همه</li>
				</ul>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<div class="ft__scenario">
					<span class="ft__scn-badge ft__scn-badge--info">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
						با تأخیر — نمونهٔ تصویری
					</span>
					<h3 class="ft__scn-title">سناریوی B: از رویداد تا اجرای بعدی</h3>
					<p class="ft__scn-desc">بین رویداد و اجرا یک فاصلهٔ زمانی تعریف می‌شود.</p>
					<div class="ft__chain">
						<div class="ft__chain-node">
							<span class="ft__chain-icon" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
							</span>
							<div class="ft__chain-body">
								<h3>رویداد ورودی رخ می‌دهد</h3>
								<p>مثلاً مشتری محصولی را در سایت مشاهده می‌کند.</p>
							</div>
						</div>
						<div class="ft__chain-node">
							<span class="ft__chain-icon" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
							</span>
							<div class="ft__chain-body">
								<h3>بازهٔ تأخیر آغاز می‌شود</h3>
								<p>شمارش معکوس به‌ازای همان مشتری شروع می‌شود؛ مثلاً ۲ روز.</p>
							</div>
						</div>
						<div class="ft__chain-node">
							<span class="ft__chain-icon ft__chain-icon--end" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
							</span>
							<div class="ft__chain-body">
								<h3>اتوماسیون بعداً اجرا می‌شود</h3>
								<p>پس از پایان بازه، اکشن انتخاب‌شده برای همان مشتری اجرا می‌شود.</p>
							</div>
						</div>
					</div>
					<div class="ft__scn-sentence">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>جملهٔ تریگر:</b> پس از وقوع «مشاهده محصول»، ۲ روز صبر کن و سپس اتوماسیون را اجرا کن.</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ ABSENCE TRIGGER ============ -->
	<section class="ft__section ft__section--surface" id="absence">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m8 15 4-4 4 4"/><path d="M12 6v4"/></svg>
					تریگر عدم وقوع
				</span>
				<h2 class="ft__section-title">C — واکنش به <span class="text-gradient-primary">نیامدنِ</span> یک رویداد</h2>
				<p class="ft__section-desc">
					قدرتمندترین حالت برای سفرهای نیمه‌کاره: مشتری کاری را شروع کرده اما رویداد پایانی
					در بازهٔ تعیین‌شده رخ نداده — مثلاً سبد خرید پر شده اما خریدی ثبت نشده است.
				</p>
				<ul class="ft__checklist">
					<li>عنوان تریگر: «در صورت عدم وقوع» — اجرا اگر رویداد موردنظر در بازه مشخص پس از رخ دادن رویداد اول نیامد</li>
					<li>دو رویداد تعریف می‌شود: رویداد ورودی + رویدادی که نباید بیاید</li>
					<li>«بازه بررسی غیاب» و واحد آن (دقیقه، ساعت، روز یا ماه) قابل تنظیم است؛ اعتبارسنجی: «بازه بررسی غیاب باید بیشتر از صفر باشد»</li>
					<li>رایج‌ترین کاربرد: سبد خرید رهاشده — پر شد ولی خریدی نیامد</li>
				</ul>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<div class="ft__scenario">
					<span class="ft__scn-badge ft__scn-badge--warn">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m8 15 4-4 4 4"/><path d="M12 6v4"/></svg>
						در صورت عدم وقوع — نمونهٔ تصویری
					</span>
					<h3 class="ft__scn-title">سناریوی C: از سبد خرید تا یادآوری</h3>
					<p class="ft__scn-desc">شرط این تریگر، «نیامدنِ» رویداد پیکربندی‌شده در بازه است.</p>
					<div class="ft__chain">
						<div class="ft__chain-node">
							<span class="ft__chain-icon" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
							</span>
							<div class="ft__chain-body">
								<h3>محصول به سبد اضافه می‌شود</h3>
								<p>رویداد ورودی «افزودن به سبد خرید» برای مشتری ثبت می‌شود.</p>
							</div>
						</div>
						<div class="ft__chain-node">
							<span class="ft__chain-icon" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
							</span>
							<div class="ft__chain-body">
								<h3>بازهٔ غیاب بررسی می‌شود</h3>
								<p>تا ۳ روز آینده، رویداد «تکمیل خرید» نباید رخ دهد.</p>
							</div>
						</div>
						<div class="ft__chain-node">
							<span class="ft__chain-icon ft__chain-icon--end" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
							</span>
							<div class="ft__chain-body">
								<h3>اتوماسیون واجد شرایط می‌شود</h3>
								<p>اگر خریدی در بازه نیامد، اکشن (مثلاً یادآوری سبد) برای همان مشتری اجرا می‌شود.</p>
							</div>
						</div>
					</div>
					<div class="ft__scn-sentence">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<span><b>جملهٔ تریگر:</b> پس از «افزودن به سبد خرید»، اگر «تکمیل خرید» تا ۳ روز رخ نداد، اتوماسیون را اجرا کن.</span>
					</div>
					<div class="ft__scn-note">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
						<span><strong>شرطی، نه همیشه:</strong> تریگر غیابی فقط وقتی فعال می‌شود که رویداد پیکربندی‌شده در بازهٔ تعیین‌شده رخ نداده باشد — اگر مشتری در همان بازه خرید کند، اصلاً اجرا نمی‌شود.</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ AUDIENCE TARGETING ============ -->
	<section class="ft__section" id="audience">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					مخاطب هدف
				</span>
				<h2 class="ft__section-title">اکشن روی <span class="text-gradient-primary">چه کسانی</span> اجرا شود؟</h2>
				<p class="ft__section-desc">
					در قدم «مخاطب هدف» ویزارد، مخاطب را انتخاب می‌کنید: یک سگمنت، یک فرآیند فروش
					(و اختیاراً یک مرحلهٔ مشخص) یا همهٔ مشتریان بدون محدودیت گروه.
				</p>
				<ul class="ft__checklist">
					<li><strong>سگمنت:</strong> مخاطب از اعضای یک گروه بخش‌بندی‌شده انتخاب می‌شود</li>
					<li><strong>فرآیند فروش:</strong> همهٔ مشتریان آن فرآیند، یا فقط مرحلهٔ انتخابی (مثلاً «مذاکره»)</li>
					<li><strong>بدون محدودیت:</strong> «همه مشتریان — بدون محدودیت گروه»</li>
					<li>نگهبان هدف‌گیری: مشتری فقط وقتی واجد شرایط اجراست که در سگمنت یا مرحلهٔ تعریف‌شده باشد</li>
					<li>مرحله هدف فقط وقتی نمایش داده می‌شود که فرآیند فروش انتخاب شده باشد</li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="ft__target">
					<div class="ft__target-head">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
						مخاطب هدف — «اکشن بر روی چه کسانی اجرا شود؟»
					</div>
					<div class="ft__target-body">
						<div class="ft__target-row">
							<span class="ft__target-key">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/></svg>
								سگمنت (گروه)
							</span>
							<span class="ft__target-val">خریداران اخیر</span>
						</div>
						<div class="ft__target-row">
							<span class="ft__target-key">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18"/><path d="M15 3v18"/></svg>
								فرآیند فروش
							</span>
							<span class="ft__target-val">فرآیند فروش اصلی</span>
						</div>
						<div class="ft__target-row">
							<span class="ft__target-key">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 6h16"/><path d="M4 12h10"/><path d="M4 18h6"/></svg>
								مرحلهٔ هدف
							</span>
							<span class="ft__target-val">مذاکره — ۳ مرحله</span>
						</div>
						<div class="ft__target-row">
							<span class="ft__target-key">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
								محدودیت اجرا برای هر مشتری
							</span>
							<span class="ft__target-val ft__target-val--muted">بدون محدودیت</span>
						</div>
					</div>
					<div class="ft__target-foot">بدون انتخاب گروه: «همه مشتریان — بدون محدودیت گروه». بدون انتخاب فرآیند: «بدون محدودیت فرآیند فروش».</div>
				</div>
				<p class="ft__mock-caption">نمایش تزئینی از قدم «مخاطب هدف» در ویزارد ساخت اتوماسیون</p>
			</div>
		</div>
	</section>

	<!-- ============ N8N WORKFLOW EXECUTION ============ -->
	<section class="ft__section ft__section--surface" id="workflow">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
					اجرا در n8n
				</span>
				<h2 class="ft__section-title">تریگر در XCRM، <span class="text-gradient-primary">اکشن در n8n</span></h2>
				<p class="ft__section-desc">
					دو لایهٔ جداگانه و مشخص: XCRM تصمیم می‌گیرد «کِی» و «برای چه کسی» اجرا شود؛
					کار عملیاتی (ارسال پیام، به‌روزرسانی CRM و…) را ورکفلوی n8n شرکت شما انجام می‌دهد.
				</p>
			</div>

			<div class="ft__duo" data-reveal="up">
				<div class="ft__duo-panel">
					<span class="ft__duo-label">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
						لایهٔ اول — XCRM
					</span>
					<h3>پیکربندی تریگر: کِی و برای چه کسی؟</h3>
					<p>در داشبورد «xCRM فروش» تعریف می‌کنید چه زمانی و روی چه مخاطبانی اجرا شود.</p>
					<ul class="ft__duo-list">
						<li>رویداد ورودی + فیلترهای پراپرتی</li>
						<li>نوع تریگر: فوری، با تأخیر، در صورت عدم وقوع</li>
						<li>مخاطب: سگمنت، فرآیند فروش و مرحله</li>
						<li>محدودیت اجرا برای هر مشتری</li>
						<li>فعال/غیرفعال کردن هر تریگر</li>
					</ul>
				</div>

				<div class="ft__duo-arrow" aria-hidden="true">
					<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</div>

				<div class="ft__duo-panel ft__duo-panel--accent">
					<span class="ft__duo-label ft__duo-label--alt">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m13 2-10 12h7l-1 8 10-12h-7l1-8z"/></svg>
						لایهٔ دوم — n8n
					</span>
					<h3>اجرای اکشن: چه کاری انجام شود؟</h3>
					<p>«اکشن» انتخابی شما در واقع همان ورکفلوی n8n اختصاصی شرکت شماست که کار عملیاتی را اجرا می‌کند.</p>
					<ul class="ft__duo-list">
						<li>انتخاب ورکفلو از فهرست اکشن‌های متصل</li>
						<li>«باز کردن اکشن» برای ویرایش گره‌ها در n8n</li>
						<li>«تست اکشن» با یک داده تستی قبل از اجراهای واقعی</li>
						<li>نمونه payload وبهوک (<code>sample_payload.json</code>) + دکمهٔ «تست ورکفلو»</li>
					</ul>
				</div>
			</div>

			<div class="ft__grid ft__grid--caps" style="margin-top: clamp(24px, 3vw, 32px);">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 4-4 4"/><path d="M4 7h16"/><path d="m16 21-4-4 4-4"/><path d="M20 17H4"/></svg>
					</span>
					<h3>اتصال به سمت xCRM</h3>
					<p>گره‌های اختصاصی xCRM داخل ورکفلو، به داده‌های CRM دسترسی دارند: ایجاد و به‌روزرسانی مشتری، ارسال پیامک و تلگرام، راه‌اندازی کمپین.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>
					</span>
					<h3>نمونه payload و تست</h3>
					<p>قبل از اجرای واقعی، payload نمونه وبهوک را ببینید و با «تست ورکفلو» همان درخواست را به‌صورت واقعی ارسال کنید.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
					</span>
					<h3>هر شرکت، محیط n8n خودش</h3>
					<p>هر شرکت یک نمونهٔ n8n اختصاصی دارد؛ گردش‌کارها و داده‌های اتوماسیون بین شرکت‌ها قاطی نمی‌شود.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ EXECUTION MONITORING & RETRY ============ -->
	<section class="ft__section" id="monitor">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
					پایش اجراها
				</span>
				<h2 class="ft__section-title">هر اجرا، <span class="text-gradient-primary">برای هر مشتری</span> ثبت می‌شود</h2>
				<p class="ft__section-desc">
					تاریخچهٔ اجرا نشان می‌دهد برای چه کسی، کِی و با چه نتیجه‌ای اجرا شده است؛
					اجراهای ناموفق پیام خطا دارند و با «تلاش مجدد» قابل تکرارند.
				</p>
			</div>

			<div class="ft__kpis" data-reveal="up">
				<div class="ft__kpi">
					<span class="ft__kpi-label">کل اجراها</span>
					<span class="ft__kpi-value">۴۸۶</span>
					<span class="ft__kpi-hint">از زمان آخرین اجرا</span>
				</div>
				<div class="ft__kpi">
					<span class="ft__kpi-label">موفق</span>
					<span class="ft__kpi-value">۴۵۱</span>
					<span class="ft__kpi-hint">۹۳٪ کل اجراها</span>
				</div>
				<div class="ft__kpi">
					<span class="ft__kpi-label">ناموفق</span>
					<span class="ft__kpi-value">۲۳</span>
					<span class="ft__kpi-hint">قابل تلاش مجدد</span>
				</div>
				<div class="ft__kpi">
					<span class="ft__kpi-label">در انتظار</span>
					<span class="ft__kpi-value">۱۲</span>
					<span class="ft__kpi-hint">در صف اجرا</span>
				</div>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">داده‌های نمونه — شاخص‌ها از آمار همان اتوماسیون محاسبه می‌شوند</p>

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
										<td><span class="ft__xtbl-code">exe_9f2a…</span></td>
										<td>۱۴۰۳/۰۸/۱۵ — ۱۰:۳۲</td>
										<td>—</td>
									</tr>
									<tr>
										<td><strong>شرکت آریا</strong></td>
										<td>
											<span class="ft__st ft__st--failed"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>ناموفق</span>
											<span class="ft__xtbl-err">گرهٔ خروجی ورکفلو پاسخ نداد</span>
										</td>
										<td><span class="ft__xtbl-code">exe_71c4…</span></td>
										<td>۱۴۰۳/۰۸/۱۵ — ۱۰:۳۱</td>
										<td><span class="ft__xtbl-act"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg>تلاش مجدد</span></td>
									</tr>
									<tr>
										<td><strong>فروشگاه پارس</strong></td>
										<td><span class="ft__st"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>در انتظار</span></td>
										<td><span class="ft__xtbl-code">—</span></td>
										<td>در صف</td>
										<td>—</td>
									</tr>
								</tbody>
							</table>
						</div>
						<figcaption class="ft__mock-caption">داده‌های نمونه — تاریخچهٔ اجراها در جزئیات اتوماسیون، با فیلتر وضعیت</figcaption>
					</figure>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li>ستون‌ها: مخاطب، وضعیت (موفق/ناموفق/در انتظار)، شناسه n8n، زمان و عملیات</li>
						<li>پیام خطای اجرای ناموفق در همان ردیف نمایش داده می‌شود</li>
						<li><strong>تلاش مجدد</strong> برای اجرای ناموفق؛ در صورت شکست مکرر، وضعیت ناموفق نهایی می‌شود</li>
						<li><strong>کپی اتوماسیون:</strong> ایجاد کپی با نام و تنظیمات جدید</li>
						<li><strong>ریست تاریخچه اجراها:</strong> «تمام اجراها پاک شده و برای همه مخاطبین مجدداً اجرا خواهد شد»</li>
						<li>جستجو و فیلتر وضعیت روی همان جدول</li>
					</ul>

					<div class="ft__note-box ft__note-box--info">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>کشف:</strong> وقتی نرخ ناموفق‌ها بالا می‌رود، مشکل معمولاً از خود اکشن است —
							با «تست اکشن» قبل از روشن کردن اتوماسیون، همین خطاها را از همان اول پیدا کنید.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ REALISTIC AUTOMATION EXAMPLES ============ -->
	<section class="ft__section ft__section--surface" id="examples">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
					کاربرد عملی
				</span>
				<h2 class="ft__section-title">چهار اتوماسیون <span class="text-gradient-primary">واقعی</span></h2>
				<p class="ft__section-desc">
					نمونه‌هایی که با تریگرها و زمان‌بندی‌های همین صفحه قابل ساخت‌اند —
					همه با امکانات موجود، نه وعدهٔ آینده.
				</p>
			</div>

			<div class="ft__grid ft__grid--cases">
				<article class="main-card ft__scen" data-reveal="up">
					<span class="ft__case-badge">فوری — فرم</span>
					<h3>خوش‌آمدگویی آنی</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">تریگر</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">با وقوع «ارسال فرم»، پیام خوش‌آمدگویی بلافاصله برای همان مخاطب ارسال می‌شود.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">مخاطب</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">همهٔ بازدیدکنندگان — بدون محدودیت گروه.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="60">
					<span class="ft__case-badge">با تأخیر — بازدید</span>
					<h3>یادآوری بازدید محصول</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">تریگر</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">پس از «مشاهده محصول»، ۲ روز صبر و سپس یادآوری با پیشنهاد مشابه ارسال می‌شود.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">مخاطب</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">بازدیدکنندگان محصولات دستهٔ منتخب.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="120">
					<span class="ft__case-badge">عدم وقوع — سبد</span>
					<h3>سبد خرید رهاشده</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">تریگر</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">پس از «افزودن به سبد»، اگر «تکمیل خرید» تا ۳ روز نیامد، یادآوری خرید ارسال می‌شود.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">مخاطب</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">مشتریان دارای سبد باز + رضایت پیامک.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="180">
					<span class="ft__case-badge">زمان‌بندی — روزانه</span>
					<h3>گزارش روزانهٔ تیم فروش</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">زمان‌بندی</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">هر روز ساعت ۸ صبح، خلاصهٔ فرصت‌های در جریان برای تیم ارسال می‌شود.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">مخاطب</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">اعضای تیم فروش از سگمنت «کارمندان فروش».</p>
					</div>
				</article>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">داده‌های نمونه‌اند؛ رویدادها و سگمنت‌ها با تعریف‌های خود شما ساخته می‌شوند.</p>

			<div class="ft__related-links" data-reveal="up" style="margin-top: clamp(26px, 3.5vw, 36px);">
				<a href="<?php echo esc_url( home_url( '/features/segmentation/' ) ); ?>" class="ft__related-link">
					ساخت مخاطب با سگمنت
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/website-tracking/' ) ); ?>" class="ft__related-link">
					منبع رویدادها: ردیابی وب‌سایت
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/sales-pipeline/' ) ); ?>" class="ft__related-link">
					هدف‌گیری با پیپلاین فروش
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
			'q' => 'تریگر اتوماسیون چیست؟',
			'a' => 'با تریگر می‌توانید تنظیم کنید که هر زمان یک رویداد خاص برای یک مشتری ثبت شد، این اکشن بر روی آن مشتری اجرا شود. سه نوع تریگر داریم: <strong>فوری</strong> (اجرا بلافاصله پس از وقوع رویداد ورودی)، <strong>با تأخیر</strong> (اجرا پس از گذشت مدت مشخص از وقوع رویداد) و <strong>در صورت عدم وقوع</strong> (اجرا اگر رویداد موردنظر در بازه مشخص پس از رخ دادن رویداد اول نیامد).',
		),
		array(
			'q' => 'چند تریگر می‌توانم داشته باشم و چگونه ارزیابی می‌شوند؟',
			'a' => 'هر تعداد که بخواهید. تریگرها مستقل از هم ارزیابی می‌شوند و رابطهٔ بین آن‌ها «یا» است — یعنی نیازی نیست همهٔ تریگرها با هم برقرار شوند؛ کافی است یکی از آن‌ها شرایطش برقرار شود.',
		),
		array(
			'q' => 'زمان‌بندی سنتی و تریگر رفتاری، جایگزین هم هستند؟',
			'a' => 'خیر. هر دو در یک سیستم‌اند: با زمان‌بندی، اجرا را در زمان مشخص تعیین می‌کنید (یکبار، روزانه ساعت مشخص یا به ازای هر مشتری) و با تریگر، اجرا را به رفتار مشتری گره می‌زنید. انتخاب به نوع پیام شما بستگی دارد.',
		),
		array(
			'q' => 'مخاطب هدف از کجا انتخاب می‌شود؟',
			'a' => 'در قدم «مخاطب هدف» ویزارد، از یک سگمنت (گروه بخش‌بندی‌شده)، یک فرآیند فروش — با انتخاب اختیاری مرحلهٔ مشخص مانند «مذاکره» — یا از همهٔ مشتریان بدون محدودیت گروه. مشتری فقط وقتی واجد شرایط اجراست که در همان سگمنت یا مرحلهٔ تعریف‌شده باشد.',
		),
		array(
			'q' => '«اکشن» و n8n چه ربطی به هم دارند؟',
			'a' => 'لایه‌ها از هم جداست: XCRM تصمیم می‌گیرد <strong>کِی</strong> و <strong>برای چه کسی</strong> اجرا شود (تریگر، زمان‌بندی، مخاطب هدف)، و اکشن انتخابی شما در واقع همان <strong>ورکفلوی n8n</strong> اختصاصی شرکت شماست که کار عملیاتی — مثل ارسال پیامک، به‌روزرسانی اطلاعات مشتری یا راه‌اندازی کمپین — را انجام می‌دهد. برای هر اجرا، شناسهٔ n8n و وضعیت آن در تاریخچه ثبت می‌شود.',
		),
		array(
			'q' => 'اگر اجرایی ناموفق شود چه اتفاقی می‌افتد؟',
			'a' => 'وضعیت اجرا «ناموفق» می‌شود و پیام خطا در جدول تاریخچهٔ اجراها کنار همان مخاطب نمایش داده می‌شود. می‌توانید با دکمهٔ «تلاش مجدد» دوباره آن را اجرا کنید؛ پس از شکست مکرر، وضعیت ناموفق نهایی می‌شود. برای پاک‌سازی کامل و اجرای مجدد از «ریست تاریخچه اجراها» استفاده کنید — با این کار تمام اجراها پاک و برای همهٔ مخاطبین مجدداً اجرا می‌شوند.',
		),
		array(
			'q' => 'در تریگرساز شاخه‌بندی پیچیده یا تصمیم‌گیری هوش مصنوعی داریم؟',
			'a' => 'تریگرساز عمداً ساده و شفاف است: هر تریگر شرطی مشخص با جملهٔ قابل خواندن است و منطق چندشاخه‌ای پیچیده‌تر را می‌توانید داخل خود ورکفلوی n8n خود بسازید. هیچ تصمیم‌گیری مبهم یا شاخه‌بندی خودکار ناشناخته‌ای در تریگرها وجود ندارد؛ دقیقاً می‌دانید چه شرطی، چه زمانی و برای چه کسی فعال می‌شود.',
		),
	);
	$ft_faq_id     = 'faq';
	$ft_faq_title  = 'پرسش‌های متداول دربارهٔ اتوماسیون بازاریابی';
	$ft_faq_intro  = 'دقیقاً همان چیزی که تیم‌های بازاریابی قبل از ساخت اولین اتوماسیون می‌پرسند.';
	get_template_part( 'template-parts/faq-section', null, array(
		'ft_faq_id'    => $ft_faq_id,
		'ft_faq_title' => $ft_faq_title,
		'ft_faq_intro' => $ft_faq_intro,
		'ft_faq_items' => $ft_faq_items,
	) );
	?>

	<?php
	$ft_cta_title         = 'اولین اتوماسیون را در چند دقیقه بسازید';
	$ft_cta_desc          = 'ویزارد چهارمرحله‌ای، سه نوع تریگر و تاریخچهٔ کامل اجرا — همین حالا شروع کنید.';
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
