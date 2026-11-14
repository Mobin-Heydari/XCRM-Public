<?php
/**
 * Template Name: Feature — Analytics
 * Template Post Type: page
 *
 * صفحهٔ جزئیات قابلیت — تحلیل رفتاری و گزارش‌گیری
 * /features/analytics/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_stylesheet_directory() . '/inc/features-data.php';

$home_url   = home_url( '/' );
$features   = home_url( '/features/' );
$canonical  = home_url( '/features/analytics/' );
$dash_url   = 'https://dashboard.xcrmforosh.com/';

$page_title       = 'تحلیل رفتاری و هوش تجاری | «xCRM فروش»';
$page_description = 'قیف تبدیل، کوهورت، RFM، مسیر مشتری، درآمد بر اساس منبع و تحلیل قیف فروش — همه از داده‌های رفتاری واقعی، با خروجی CSV و XLSX.';
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
			array('@type'=>'ListItem','position'=>3,'name'=>'تحلیل رفتاری','item'=>esc_url($canonical)),
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
				<span class="ft__breadcrumb-current">تحلیل رفتاری</span>
			</nav>

			<span class="ft__label ft-anim ft-anim--1">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
				تحلیل رفتاری و هوش تجاری
			</span>

			<h1 class="ft__title ft-anim ft-anim--2">
				از داده‌های رفتاری تا <span class="text-gradient-primary">تصمیم‌های دقیق‌تر</span> برای رشد فروش
			</h1>

			<p class="ft__hero-desc ft-anim ft-anim--3">
				مشتریانتان را بهتر بشناسید، نرخ تبدیل را مرحله‌به‌مرحله زیر نظر بگیرید و فرصت‌های پنهان کسب‌وکار —
				از محصول پربازدیدِ کم‌تبدیل تا گلوگاه قیف فروش — با دادهٔ واقعی پیدا کنید.
			</p>

			<div class="ft__hero-actions ft-anim ft-anim--4">
				<a href="<?php echo esc_url( $dash_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
					شروع رایگان
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/website-tracking/' ) ); ?>" class="hp__btn hp__btn--ghost" data-magnetic>
					داده از کجا می‌آید؟
				</a>
			</div>

			<ul class="ft__hero-pills ft-anim ft-anim--5" aria-label="نکات کلیدی">
				<li>قیف تبدیل، کوهورت و RFM</li>
				<li>درآمد، محصولات و سبد خرید</li>
				<li>تحلیل قیف فروش و ماتریس مراحل</li>
				<li>خروجی CSV و XLSX</li>
			</ul>
			</div>
			<div class="ft__hero-media">
			<?php get_template_part( 'template-parts/feature-hero-graphic', null, array( 'slug' => 'analytics' ) ); ?>
			</div>
		</div>
	</section>

	<!-- ============ WHY BEHAVIORAL ANALYTICS ============ -->
	<section class="ft__section ft__section--surface" id="why">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
					چرا تحلیل رفتاری
				</span>
				<h2 class="ft__section-title">بدون دادهٔ رفتاری، <span class="text-gradient-primary">تصمیم نصفه است</span></h2>
				<p class="ft__section-desc">
					فروش نتیجهٔ زنجیره‌ای از تصمیم‌های کوچک است: چه محصولی نمایش داده شود، کجا پیگیری شود،
					کدام مخاطب هدف باشد. تحلیل رفتاری این زنجیره را از حدس به اندازه‌گیری تبدیل می‌کند.
				</p>
			</div>

			<div class="ft__grid ft__grid--caps">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/><circle cx="12" cy="12" r="10"/></svg>
					</span>
					<h3>جای «چرا» خالی نماند</h3>
					<p>عدد فروش می‌گوید چه شد؛ دادهٔ رفتاری می‌گوید مشتری کجا متوقف شد و چرا نخرید.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg>
					</span>
					<h3>ریزش‌ها مرئی می‌شوند</h3>
					<p>قیف تبدیل نشان می‌دهد مشتری در کدام گام می‌پرد — نه اینکه فقط بدانیم فروش کم شد.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/><path d="M11 8v6"/><path d="M8 11h6"/></svg>
					</span>
					<h3>فرصت‌ها پیدا می‌شوند</h3>
					<p>محصولات پربازدید با تبدیل کم، سبدهای رهاشده و مشتریان غیرفعال — همه در داده پنهان‌اند.</p>
				</article>

				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="180">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
					</span>
					<h3>اثر تصمیم‌ها سنجیده می‌شود</h3>
					<p>پس از هر تغییر، مقایسهٔ دوره‌ها و سگمنت‌ها نشان می‌دهد اثر آن روی رفتار واقعی چه بوده است.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ TRAFFIC & ACQUISITION ============ -->
	<section class="ft__section" id="traffic">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg>
					ترافیک و جذب
				</span>
				<h2 class="ft__section-title">بازدیدکنندگان از <span class="text-gradient-primary">کجا می‌آیند؟</span></h2>
				<p class="ft__section-desc">
					تحلیل ترافیک نشان می‌دهد هر کانال چقدر بازدیدکننده می‌آورد، چه مدت می‌ماند
					و کدام منبع بازدیدکنندگانی می‌آورد که واقعاً درگیر می‌شوند.
				</p>
				<ul class="ft__checklist">
					<li>نمای ترافیک: بازدیدها، نشست‌ها، آمار و مدت نشست</li>
					<li>منابع جذب همراه کیفیت رفتار (UTM اولین و آخرین برخورد)</li>
					<li>رفتار هر کانال جداگانه قابل بررسی است</li>
					<li>داده‌ها از <a href="<?php echo esc_url( home_url( '/features/website-tracking/' ) ); ?>">ردیابی وب‌سایت</a> می‌آیند</li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="ft__kpis">
					<div class="ft__kpi">
						<span class="ft__kpi-label">بازدیدها</span>
						<span class="ft__kpi-value">۸۴٬۲۰۰</span>
						<span class="ft__kpi-hint">در ۳۰ روز گذشته</span>
					</div>
					<div class="ft__kpi">
						<span class="ft__kpi-label">نشست‌ها</span>
						<span class="ft__kpi-value">۶۱٬۴۵۰</span>
						<span class="ft__kpi-hint">بازدیدهای منحصربه‌فرد</span>
					</div>
					<div class="ft__kpi">
						<span class="ft__kpi-label">میانگین مدت نشست</span>
						<span class="ft__kpi-value">۳:۴۲</span>
						<span class="ft__kpi-hint">دقیقه:ثانیه</span>
					</div>
					<div class="ft__kpi">
						<span class="ft__kpi-label">صفحه در هر نشست</span>
						<span class="ft__kpi-value">۲٫۸</span>
						<span class="ft__kpi-hint">عمق متوسط مطالعه</span>
					</div>
				</div>

				<div class="ft__hbars">
					<div class="ft__hbar">
						<div class="ft__hbar-head"><span class="ft__hbar-name">جستجوی ارگانیک</span><span class="ft__hbar-val">۴۲٪</span></div>
						<div class="ft__hbar-track"><span class="ft__hbar-fill" style="width: 42%;"></span></div>
					</div>
					<div class="ft__hbar">
						<div class="ft__hbar-head"><span class="ft__hbar-name">مستقیم</span><span class="ft__hbar-val">۲۶٪</span></div>
						<div class="ft__hbar-track"><span class="ft__hbar-fill ft__hbar-fill--ocean" style="width: 26%;"></span></div>
					</div>
					<div class="ft__hbar">
						<div class="ft__hbar-head"><span class="ft__hbar-name">شبکه‌های اجتماعی</span><span class="ft__hbar-val">۱۸٪</span></div>
						<div class="ft__hbar-track"><span class="ft__hbar-fill ft__hbar-fill--sunset" style="width: 18%;"></span></div>
					</div>
					<div class="ft__hbar">
						<div class="ft__hbar-head"><span class="ft__hbar-name">کمپین‌ها (ایمیل/پیامک)</span><span class="ft__hbar-val">۹٪</span></div>
						<div class="ft__hbar-track"><span class="ft__hbar-fill ft__hbar-fill--success" style="width: 9%;"></span></div>
					</div>
					<div class="ft__hbar">
						<div class="ft__hbar-head"><span class="ft__hbar-name">ارجاع از سایت‌های دیگر</span><span class="ft__hbar-val">۵٪</span></div>
						<div class="ft__hbar-track"><span class="ft__hbar-fill" style="width: 5%;"></span></div>
					</div>
				</div>
				<p class="ft__mock-caption" style="text-align: start;">داده‌های نمونه — برای درک ساختار نماها</p>
			</div>
		</div>
	</section>

	<!-- ============ EVENT EXPLORER ============ -->
	<section class="ft__section ft__section--surface" id="events">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 6h16M4 12h10M4 18h6"/></svg>
					کاوش رویداد
				</span>
				<h2 class="ft__section-title">هر رویداد، <span class="text-gradient-primary">یک سؤال قابل پرسش</span></h2>
				<p class="ft__section-desc">
					با کاوشگر رویدادها می‌توانید چند رویداد را همزمان فیلتر کنید، محاسبات دلخواه بسازید
					و نتیجه را در نمودار دلخواه ببینید — از رفتار خرید تا استفاده از قابلیت‌های سایت.
				</p>
				<ul class="ft__checklist">
					<li>فیلتر چندرویدادی با شرط‌های ترکیبی</li>
					<li>محاسبات سفارشی روی رویدادها (تعداد، نسبت، مقدار)</li>
					<li>انواع نمودار: ستونی، خطی، جدولی</li>
					<li>تحلیل جداگانه برای هر سگمنت مشتریان</li>
				</ul>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<figure class="ft__mock-wrap">
					<div class="ft__chart">
						<div class="ft__chart-head">
							<h3 class="ft__chart-title">پرتردیدترین رویدادها — ۳۰ روز</h3>
							<span class="ft__chart-legend"><span><i></i>تعداد رویداد</span></span>
						</div>
						<div class="ft__cols" aria-hidden="true">
							<div class="ft__col">
								<span class="ft__col-val">۸۴٬۲۰۰</span>
								<span class="ft__col-bar" style="height: 128px;"></span>
								<span class="ft__col-lbl">page_view</span>
							</div>
							<div class="ft__col">
								<span class="ft__col-val">۳۱٬۴۰۰</span>
								<span class="ft__col-bar" style="height: 48px;"></span>
								<span class="ft__col-lbl">product_view</span>
							</div>
							<div class="ft__col">
								<span class="ft__col-val">۱۲٬۸۰۰</span>
								<span class="ft__col-bar" style="height: 20px;"></span>
								<span class="ft__col-lbl">add_to_cart</span>
							</div>
							<div class="ft__col">
								<span class="ft__col-val">۶٬۱۰۰</span>
								<span class="ft__col-bar" style="height: 10px;"></span>
								<span class="ft__col-lbl">search</span>
							</div>
							<div class="ft__col">
								<span class="ft__col-val">۳٬۹۰۰</span>
								<span class="ft__col-bar" style="height: 7px;"></span>
								<span class="ft__col-lbl">form_submit</span>
							</div>
						</div>
						<figcaption class="ft__mock-caption">داده‌های نمونه — بازهٔ زمانی واقعی در داشبورد قابل انتخاب است</figcaption>
					</div>
				</figure>
			</div>
		</div>
	</section>

	<!-- ============ CONVERSION FUNNELS ============ -->
	<section class="ft__section" id="funnels">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/></svg>
					قیف تبدیل
				</span>
				<h2 class="ft__section-title">قیف تبدیل: <span class="text-gradient-primary">کجا می‌ریزیم؟</span></h2>
				<p class="ft__section-desc">
					مسیر خرید را از بازدید تا خرید به‌صورت گام‌به‌گام ببینید، دو دوره یا دو گروه را مقایسه کنید
					و قیف‌های پرکاربرد را برای استفادهٔ مجدد ذخیره کنید.
				</p>
			</div>

			<div class="ft__funnel" data-reveal="up">
				<div class="ft__fn-step">
					<div class="ft__fn-top">
						<h3 class="ft__fn-name">بازدید فروشگاه</h3>
						<span class="ft__fn-count">۱۲٬۴۰۰</span>
					</div>
					<div class="ft__fn-track"><span class="ft__fn-fill" style="width: 100%;"></span></div>
					<div class="ft__fn-meta"><span class="ft__fn-conv">گام اول — ۱۰۰٪</span></div>
				</div>
				<div class="ft__fn-step">
					<div class="ft__fn-top">
						<h3 class="ft__fn-name">مشاهدهٔ محصول</h3>
						<span class="ft__fn-count">۷٬۹۴۰</span>
					</div>
					<div class="ft__fn-track"><span class="ft__fn-fill" style="width: 64%;"></span></div>
					<div class="ft__fn-meta">
						<span class="ft__fn-conv">تبدیل از گام قبل: ۶۴٪</span>
						<span class="ft__fn-drop">ریزش: ۴٬۴۶۰ نفر</span>
					</div>
				</div>
				<div class="ft__fn-step">
					<div class="ft__fn-top">
						<h3 class="ft__fn-name">افزودن به سبد خرید</h3>
						<span class="ft__fn-count">۴٬۷۱۰</span>
					</div>
					<div class="ft__fn-track"><span class="ft__fn-fill" style="width: 38%;"></span></div>
					<div class="ft__fn-meta">
						<span class="ft__fn-conv">تبدیل از گام قبل: ۵۹٪</span>
						<span class="ft__fn-drop">ریزش: ۳٬۲۳۰ نفر</span>
					</div>
				</div>
				<div class="ft__fn-step">
					<div class="ft__fn-top">
						<h3 class="ft__fn-name">شروع فرایند پرداخت</h3>
						<span class="ft__fn-count">۲٬۶۰۰</span>
					</div>
					<div class="ft__fn-track"><span class="ft__fn-fill" style="width: 21%;"></span></div>
					<div class="ft__fn-meta">
						<span class="ft__fn-conv">تبدیل از گام قبل: ۵۵٪</span>
						<span class="ft__fn-drop">ریزش: ۲٬۱۱۰ نفر — کمترین نرخ تبدیل</span>
					</div>
				</div>
				<div class="ft__fn-step ft__fn-step--last">
					<div class="ft__fn-top">
						<h3 class="ft__fn-name">خرید موفق</h3>
						<span class="ft__fn-count">۱٬۴۹۰</span>
					</div>
					<div class="ft__fn-track"><span class="ft__fn-fill" style="width: 12%;"></span></div>
					<div class="ft__fn-meta">
						<span class="ft__fn-conv">تبدیل از گام قبل: ۵۷٪ — کل قیف: ۱۲٪</span>
					</div>
				</div>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">داده‌های نمونه — قیف‌ها از رویدادهای واقعی وب‌سایت شما ساخته می‌شوند.</p>

			<div class="ft__note-box ft__note-box--info" style="margin-top: clamp(20px, 3vw, 28px);" data-reveal="up">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
				<p style="margin: 0;">
					<strong>کشف:</strong> در این نمونه، ضعیف‌ترین نرخ تبدیل بین «افزودن به سبد» و «شروع پرداخت» است —
					یعنی همان‌جایی که می‌توان با بررسی هزینه‌های ارسال، فرم پرداخت یا اعتمادسازی، سفر خرید را ساده‌تر کرد.
					ریزش‌کنندگان این مرحله را می‌توانید به‌عنوان یک سگمنت جدا کنید.
				</p>
			</div>
		</div>
	</section>

	<!-- ============ RETENTION & COHORTS ============ -->
	<section class="ft__section ft__section--surface" id="retention">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg>
					بازگشت مشتری
				</span>
				<h2 class="ft__section-title">نرخ بازگشت و <span class="text-gradient-primary">تحلیل کوهورت</span></h2>
				<p class="ft__section-desc">
					مشتریان هر ماه را به‌عنوان یک گروه (کوهورت) دنبال کنید و ببینید هر نسل بعد از خرید اول،
					چند هفته با شما می‌ماند. مقایسهٔ کوهورت‌ها نشان می‌دهد تغییرات شما اثر واقعی داشته یا نه.
				</p>
				<ul class="ft__checklist">
					<li>نرخ بازگشت هفتگی برای هر گروه مشتریان</li>
					<li>مقایسهٔ کوهورت‌ها در بازه‌های زمانی مختلف</li>
					<li>شناسایی مشتریان غیرفعال برای کمپین بازگشت</li>
					<li>آمار نشست‌ها و مدت حضور در کنار بازگشت</li>
				</ul>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<figure class="ft__mock-wrap">
					<div class="ft__table-wrap">
						<table class="ft__cohort">
							<thead>
								<tr>
									<th scope="col">کوهورت</th>
									<th scope="col">هفتهٔ ۰</th>
									<th scope="col">هفتهٔ ۱</th>
									<th scope="col">هفتهٔ ۲</th>
									<th scope="col">هفتهٔ ۳</th>
									<th scope="col">هفتهٔ ۴</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>مهر</td>
									<td><span class="ft__co ft__co--5">۱۰۰٪</span></td>
									<td><span class="ft__co ft__co--4">۴۲٪</span></td>
									<td><span class="ft__co ft__co--3">۳۱٪</span></td>
									<td><span class="ft__co ft__co--2">۲۵٪</span></td>
									<td><span class="ft__co ft__co--2">۲۱٪</span></td>
								</tr>
								<tr>
									<td>آبان</td>
									<td><span class="ft__co ft__co--5">۱۰۰٪</span></td>
									<td><span class="ft__co ft__co--4">۴۵٪</span></td>
									<td><span class="ft__co ft__co--3">۳۴٪</span></td>
									<td><span class="ft__co ft__co--2">۲۷٪</span></td>
									<td><span class="ft__co ft__co--flat">—</span></td>
								</tr>
								<tr>
									<td>آذر</td>
									<td><span class="ft__co ft__co--5">۱۰۰٪</span></td>
									<td><span class="ft__co ft__co--3">۳۸٪</span></td>
									<td><span class="ft__co ft__co--2">۲۹٪</span></td>
									<td><span class="ft__co ft__co--flat">—</span></td>
									<td><span class="ft__co ft__co--flat">—</span></td>
								</tr>
								<tr>
									<td>دی</td>
									<td><span class="ft__co ft__co--5">۱۰۰٪</span></td>
									<td><span class="ft__co ft__co--4">۴۷٪</span></td>
									<td><span class="ft__co ft__co--flat">—</span></td>
									<td><span class="ft__co ft__co--flat">—</span></td>
									<td><span class="ft__co ft__co--flat">—</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<figcaption class="ft__mock-caption">داده‌های نمونه — درصد بازگشت هفتگی هر گروه مشتریان</figcaption>
				</figure>
			</div>
		</div>
	</section>

	<!-- ============ RFM & CUSTOMER VALUE ============ -->
	<section class="ft__section" id="rfm">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/></svg>
					ارزش مشتری
				</span>
				<h2 class="ft__section-title">RFM و <span class="text-gradient-primary">ارزش طول عمر</span></h2>
				<p class="ft__section-desc">
					هر مشتری با سه معیار دسته‌بندی می‌شود: تازگی خرید (R)، تعداد خرید (F) و مجموع خرج (M) —
					و LTV نشان می‌دهد هر مشتری یا هر کانال در طول زمان چقدر ارزش داشته است.
				</p>
			</div>

			<div class="ft__rfm" data-reveal="up">
				<div class="ft__rfm-seg ft__rfm-seg--success">
					<span class="ft__rfm-code">R5 · F5 · M5</span>
					<span class="ft__rfm-name">قهرمانان</span>
					<span class="ft__rfm-count">۳۱۲ نفر</span>
					<span class="ft__rfm-share">۱۴٪ از پایگاه مشتریان</span>
				</div>
				<div class="ft__rfm-seg ft__rfm-seg--info">
					<span class="ft__rfm-code">R4 · F4 · M4</span>
					<span class="ft__rfm-name">وفاداران</span>
					<span class="ft__rfm-count">۴۵۸ نفر</span>
					<span class="ft__rfm-share">۲۱٪ از پایگاه مشتریان</span>
				</div>
				<div class="ft__rfm-seg">
					<span class="ft__rfm-code">R5 · F1 · M2</span>
					<span class="ft__rfm-name">تازه‌واردان امیدوارکننده</span>
					<span class="ft__rfm-count">۳۸۰ نفر</span>
					<span class="ft__rfm-share">۱۷٪ از پایگاه مشتریان</span>
				</div>
				<div class="ft__rfm-seg ft__rfm-seg--warn">
					<span class="ft__rfm-code">R2 · F2 · M3</span>
					<span class="ft__rfm-name">در معرض ریزش</span>
					<span class="ft__rfm-count">۵۰۰ نفر</span>
					<span class="ft__rfm-share">۲۳٪ از پایگاه مشتریان</span>
				</div>
				<div class="ft__rfm-seg ft__rfm-seg--error">
					<span class="ft__rfm-code">R1 · F1 · M1</span>
					<span class="ft__rfm-name">خوابیده</span>
					<span class="ft__rfm-count">۵۵۵ نفر</span>
					<span class="ft__rfm-share">۲۵٪ از پایگاه مشتریان</span>
				</div>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">داده‌های نمونه — دسته‌ها از خریدهای واقعی محاسبه می‌شوند.</p>

			<div class="ft__split" style="margin-top: clamp(28px, 4vw, 40px);">
				<div class="ft__split-copy" data-reveal="up">
					<h3 class="ft__section-title" style="font-size: clamp(1.1rem, 2.2vw, 1.4rem);">LTV: هر مشتری چقدر ارزش دارد؟</h3>
					<p class="ft__section-desc">
						ارزش طول عمر مشتری (LTV) و مقایسهٔ آن بر اساس کانال جذب، به شما می‌گوید
						کدام منبع مشتریانی می‌آورد که در طول زمان بیشتر می‌خرند — نه فقط مشتریانی که زودتر می‌آیند.
					</p>
					<ul class="ft__checklist">
						<li>LTV کلی و تفکیک‌شده بر اساس کانال جذب</li>
						<li>ترکیب RFM + LTV برای اولویت‌بندی تیم فروش</li>
						<li>پایهٔ تصمیم برای بودجه‌بندی کمپین‌ها</li>
					</ul>
				</div>

				<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
					<div class="ft__hbars">
						<div class="ft__hbar-head" style="margin-bottom: 4px;">
							<span class="ft__hbar-name" style="font-size: 0.78rem; color: var(--x-text-muted);">LTV بر اساس کانال جذب (شاخص نسبی)</span>
						</div>
						<div class="ft__hbar">
							<div class="ft__hbar-head"><span class="ft__hbar-name">جستجوی ارگانیک</span><span class="ft__hbar-val">۱۰۰</span></div>
							<div class="ft__hbar-track"><span class="ft__hbar-fill ft__hbar-fill--success" style="width: 100%;"></span></div>
						</div>
						<div class="ft__hbar">
							<div class="ft__hbar-head"><span class="ft__hbar-name">کمپین‌ها</span><span class="ft__hbar-val">۷۸</span></div>
							<div class="ft__hbar-track"><span class="ft__hbar-fill" style="width: 78%;"></span></div>
						</div>
						<div class="ft__hbar">
							<div class="ft__hbar-head"><span class="ft__hbar-name">ارجاع</span><span class="ft__hbar-val">۶۴</span></div>
							<div class="ft__hbar-track"><span class="ft__hbar-fill ft__hbar-fill--ocean" style="width: 64%;"></span></div>
						</div>
						<div class="ft__hbar">
							<div class="ft__hbar-head"><span class="ft__hbar-name">مستقیم</span><span class="ft__hbar-val">۵۱</span></div>
							<div class="ft__hbar-track"><span class="ft__hbar-fill ft__hbar-fill--sunset" style="width: 51%;"></span></div>
						</div>
					</div>
					<p class="ft__mock-caption">داده‌های نمونه — شاخص نسبی، بالاترین مقدار = ۱۰۰</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ CUSTOMER PATHS ============ -->
	<section class="ft__section ft__section--surface" id="paths">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="6" cy="19" r="3"/><path d="M9 19h8.5a3.5 3.5 0 0 0 0-7h-11a3.5 3.5 0 0 1 0-7H15"/><circle cx="18" cy="5" r="3"/></svg>
					مسیر مشتری
				</span>
				<h2 class="ft__section-title">مشتریان <span class="text-gradient-primary">کجا می‌روند؟</span></h2>
				<p class="ft__section-desc">
					مسیرهای واقعی ناوبری را ببینید: از کدام صفحه آمدند، بین کدام صفحات رفت‌وبرگشت داشتند
					و در نهایت به کجا رسیدند یا کجا خارج شدند.
				</p>
				<ul class="ft__checklist">
					<li>متداول‌ترین مسیرها از بازدید تا خرید</li>
					<li>مسیرهای خروج: صفحاتی که مشتری را می‌پرانند</li>
					<li>نقطه‌های مقایسه و برگشت قبل از تصمیم نهایی</li>
					<li>برای هر مسیر ناقص می‌توان سگمنت ساخت</li>
				</ul>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<div class="ft__pm">
					<span class="ft__pm-entry">بازدید صفحهٔ محصول</span>
					<span class="ft__pm-stem" aria-hidden="true"></span>
					<div class="ft__pm-branches">
						<div class="ft__pm-branch">
							<div class="ft__pm-head"><span class="ft__pm-name">افزودن به سبد و خرید</span><span class="ft__pm-pct">۱۲٪</span></div>
							<span class="ft__pm-track"><span class="ft__pm-fill" style="width: 12%;"></span></span>
							<p class="ft__pm-note">مسیر تکمیل‌شده</p>
						</div>
						<div class="ft__pm-branch">
							<div class="ft__pm-head"><span class="ft__pm-name">بازگشت به فهرست</span><span class="ft__pm-pct">۳۴٪</span></div>
							<span class="ft__pm-track"><span class="ft__pm-fill" style="width: 34%;"></span></span>
							<p class="ft__pm-note">در حال مقایسهٔ محصولات</p>
						</div>
						<div class="ft__pm-branch">
							<div class="ft__pm-head"><span class="ft__pm-name">خروج از سایت</span><span class="ft__pm-pct">۲۶٪</span></div>
							<span class="ft__pm-track"><span class="ft__pm-fill" style="width: 26%;"></span></span>
							<p class="ft__pm-note">ریزش از صفحهٔ محصول</p>
						</div>
						<div class="ft__pm-branch ft__pm-branch--exit">
							<div class="ft__pm-head"><span class="ft__pm-name">سبد رهاشده</span><span class="ft__pm-pct">۲۸٪</span></div>
							<span class="ft__pm-track"><span class="ft__pm-fill" style="width: 28%;"></span></span>
							<p class="ft__pm-note">افزوده بدون خرید</p>
						</div>
					</div>
				</div>
				<p class="ft__mock-caption">داده‌های نمونه — سهم هر مسیر از بازدیدکنندگان صفحهٔ محصول</p>
			</div>
		</div>
	</section>

	<!-- ============ REVENUE & PRODUCT INSIGHTS ============ -->
	<section class="ft__section" id="revenue">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 2v20"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
					درآمد و محصولات
				</span>
				<h2 class="ft__section-title">کدام محصول واقعاً <span class="text-gradient-primary">درآمد می‌سازد؟</span></h2>
				<p class="ft__section-desc">
					درآمد بر اساس منبع جذب، آمار محصولات و تحلیل سبد خرید — سه نما که نشان می‌دهند
					پول از کجا می‌آید، کدام محصول جذاب است ولی نمی‌فروشد و سبد کجا رها می‌شود.
				</p>
			</div>

			<div class="ft__split">
				<div class="ft__split-copy" data-reveal="up">
					<figure class="ft__chart" style="margin: 0;">
						<div class="ft__chart-head">
							<h3 class="ft__chart-title">روند درآمد ماهانه</h3>
							<span class="ft__chart-legend"><span><i></i>درآمد ثبت‌شده</span></span>
						</div>
						<svg viewBox="0 0 320 150" role="img" aria-label="نمودار خطی درآمد ماهانه — داده نمونه">
							<defs>
								<linearGradient id="ftAreaGrad" x1="0" y1="0" x2="0" y2="1">
									<stop offset="0%" stop-color="#6366F1" stop-opacity="0.35"/>
									<stop offset="100%" stop-color="#6366F1" stop-opacity="0"/>
								</linearGradient>
							</defs>
							<g class="ft__chart-grid">
								<line x1="0" y1="30" x2="320" y2="30"/>
								<line x1="0" y1="60" x2="320" y2="60"/>
								<line x1="0" y1="90" x2="320" y2="90"/>
								<line x1="0" y1="120" x2="320" y2="120"/>
							</g>
							<path class="ft__chart-area" d="M300 95 L250 80 L200 88 L150 60 L100 70 L50 45 L50 120 L300 120 Z"/>
							<polyline class="ft__chart-line" points="300,95 250,80 200,88 150,60 100,70 50,45"/>
							<circle class="ft__chart-dot" cx="300" cy="95" r="3.5"/>
							<circle class="ft__chart-dot" cx="250" cy="80" r="3.5"/>
							<circle class="ft__chart-dot" cx="200" cy="88" r="3.5"/>
							<circle class="ft__chart-dot" cx="150" cy="60" r="3.5"/>
							<circle class="ft__chart-dot" cx="100" cy="70" r="3.5"/>
							<circle class="ft__chart-dot" cx="50" cy="45" r="3.5"/>
							<g class="ft__chart-axis">
								<text x="300" y="140" text-anchor="middle">مهر</text>
								<text x="250" y="140" text-anchor="middle">آبان</text>
								<text x="200" y="140" text-anchor="middle">آذر</text>
								<text x="150" y="140" text-anchor="middle">دی</text>
								<text x="100" y="140" text-anchor="middle">بهمن</text>
								<text x="50" y="140" text-anchor="middle">اسفند</text>
							</g>
						</svg>
						<figcaption class="ft__mock-caption">داده‌های نمونه — درآمد از سفارش‌های ثبت‌شدهٔ واقعی محاسبه می‌شود</figcaption>
					</figure>

					<div class="ft__hbars">
						<div class="ft__hbar-head" style="margin-bottom: 4px;">
							<span class="ft__hbar-name" style="font-size: 0.78rem; color: var(--x-text-muted);">درآمد بر اساس منبع جذب</span>
						</div>
						<div class="ft__hbar">
							<div class="ft__hbar-head"><span class="ft__hbar-name">جستجوی ارگانیک</span><span class="ft__hbar-val">۴۶٪</span></div>
							<div class="ft__hbar-track"><span class="ft__hbar-fill ft__hbar-fill--success" style="width: 46%;"></span></div>
						</div>
						<div class="ft__hbar">
							<div class="ft__hbar-head"><span class="ft__hbar-name">کمپین‌ها</span><span class="ft__hbar-val">۲۲٪</span></div>
							<div class="ft__hbar-track"><span class="ft__hbar-fill" style="width: 22%;"></span></div>
						</div>
						<div class="ft__hbar">
							<div class="ft__hbar-head"><span class="ft__hbar-name">شبکه‌های اجتماعی</span><span class="ft__hbar-val">۱۸٪</span></div>
							<div class="ft__hbar-track"><span class="ft__hbar-fill ft__hbar-fill--ocean" style="width: 18%;"></span></div>
						</div>
						<div class="ft__hbar">
							<div class="ft__hbar-head"><span class="ft__hbar-name">مستقیم</span><span class="ft__hbar-val">۱۴٪</span></div>
							<div class="ft__hbar-track"><span class="ft__hbar-fill ft__hbar-fill--sunset" style="width: 14%;"></span></div>
						</div>
					</div>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<figure class="ft__mock-wrap">
						<div class="ft__table-wrap">
							<table class="ft__tbl">
								<thead>
									<tr>
										<th scope="col">محصول</th>
										<th scope="col">بازدید</th>
										<th scope="col">سبد خرید</th>
										<th scope="col">خرید</th>
										<th scope="col">نرخ تبدیل</th>
										<th scope="col">وضعیت</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><strong>کفش ورزشی X</strong></td>
										<td class="ft__tbl-num">۴٬۸۲۰</td>
										<td class="ft__tbl-num">۱٬۲۴۰</td>
										<td class="ft__tbl-num">۳۱۰</td>
										<td class="ft__tbl-num">۶٫۴٪</td>
										<td><span class="ft__flag ft__flag--good">فروش خوب</span></td>
									</tr>
									<tr>
										<td><strong>کوله‌پشتی Y</strong></td>
										<td class="ft__tbl-num">۳٬۹۶۰</td>
										<td class="ft__tbl-num">۹۸۰</td>
										<td class="ft__tbl-num">۴۲</td>
										<td class="ft__tbl-num">۱٫۱٪</td>
										<td><span class="ft__flag">پربازدید، کم‌تبدیل</span></td>
									</tr>
									<tr>
										<td><strong>عینک Z</strong></td>
										<td class="ft__tbl-num">۲٬۴۱۰</td>
										<td class="ft__tbl-num">۱۹۰</td>
										<td class="ft__tbl-num">۸</td>
										<td class="ft__tbl-num">۰٫۳٪</td>
										<td><span class="ft__flag">پربازدید، کم‌تبدیل</span></td>
									</tr>
									<tr>
										<td><strong>کمربند W</strong></td>
										<td class="ft__tbl-num">۸۹۰</td>
										<td class="ft__tbl-num">۳۱۰</td>
										<td class="ft__tbl-num">۹۶</td>
										<td class="ft__tbl-num">۱۰٫۸٪</td>
										<td><span class="ft__flag ft__flag--good">تبدیل بالا</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<figcaption class="ft__mock-caption">داده‌های نمونه — نگاهی به نمای محصولات با فیلتر «پربازدید، کم‌تبدیل»</figcaption>
					</figure>

					<div class="ft__note-box ft__note-box--info">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>کشف:</strong> «کوله‌پشتی Y» با ۹۸۰ افزودن به سبد فقط ۴۲ فروش دارد —
							جذابیت دارد اما چیزی در مسیر خرید مانع است. سبدهای رهاشده و مشتریان غیرفعال
							نیز به‌صورت نمای جداگانه در داشبورد قابل پیگیری‌اند.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ SALES PIPELINE ANALYTICS ============ -->
	<section class="ft__section ft__section--surface" id="pipeline">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18"/><path d="M15 3v18"/></svg>
					تحلیل قیف فروش
				</span>
				<h2 class="ft__section-title">قیف فروش تیم: <span class="text-gradient-primary">کجا گیر می‌کنیم؟</span></h2>
				<p class="ft__section-desc">
					برای تیم فروش، هر مرحلهٔ پیپلاین یک شاخص است: نرخ گذارش بین مراحل،
					ماتریس جابه‌جایی مراحل و تعداد مشتریان خارج‌شده از هر مرحله.
				</p>
			</div>

			<div class="ft__split">
				<div class="ft__split-copy" data-reveal="up">
					<div class="ft__pipe" data-reveal="up">
						<div class="ft__pipe-stage">
							<span class="ft__pipe-name">سرنخ جدید</span>
							<span class="ft__pipe-track"><span class="ft__pipe-fill" style="width: 100%;"></span></span>
							<span class="ft__pipe-right">
								<span class="ft__pipe-count">۲۴۰</span>
							</span>
						</div>
						<div class="ft__pipe-stage">
							<span class="ft__pipe-name">تماس اولیه</span>
							<span class="ft__pipe-track"><span class="ft__pipe-fill" style="width: 65%;"></span></span>
							<span class="ft__pipe-right">
								<span class="ft__pipe-count">۱۵۶</span>
								<span class="ft__pipe-conv">۶۵٪<small>از مرحلهٔ قبل</small></span>
							</span>
						</div>
						<div class="ft__pipe-stage">
							<span class="ft__pipe-name">پیشنهاد قیمت</span>
							<span class="ft__pipe-track"><span class="ft__pipe-fill" style="width: 38%;"></span></span>
							<span class="ft__pipe-right">
								<span class="ft__pipe-count">۹۲</span>
								<span class="ft__pipe-conv">۵۹٪<small>از مرحلهٔ قبل</small></span>
							</span>
						</div>
						<div class="ft__pipe-stage">
							<span class="ft__pipe-name">مذاکره</span>
							<span class="ft__pipe-track"><span class="ft__pipe-fill" style="width: 17%;"></span></span>
							<span class="ft__pipe-right">
								<span class="ft__pipe-count">۴۰</span>
								<span class="ft__pipe-conv ft__pipe-conv--bottleneck">۴۴٪<small>گلوگاه</small></span>
							</span>
						</div>
						<div class="ft__pipe-stage">
							<span class="ft__pipe-name">قرارداد</span>
							<span class="ft__pipe-track"><span class="ft__pipe-fill" style="width: 11%;"></span></span>
							<span class="ft__pipe-right">
								<span class="ft__pipe-count">۲۶</span>
								<span class="ft__pipe-conv ft__pipe-conv--last">۶۵٪<small>از مرحلهٔ قبل</small></span>
							</span>
						</div>
					</div>
					<p class="ft__mock-caption" style="text-align: start;">داده‌های نمونه — نرخ گذارش از هر مرحله به مرحلهٔ بعد</p>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<figure class="ft__mock-wrap">
						<div class="ft__table-wrap">
							<table class="ft__cohort">
								<thead>
									<tr>
										<th scope="col">ماتریس گذارش مراحل</th>
										<th scope="col">تماس</th>
										<th scope="col">پیشنهاد</th>
										<th scope="col">مذاکره</th>
										<th scope="col">قرارداد</th>
										<th scope="col">خروج</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>سرنخ جدید</td>
										<td><span class="ft__co ft__co--hot">۶۵٪</span></td>
										<td><span class="ft__co ft__co--flat">—</span></td>
										<td><span class="ft__co ft__co--flat">—</span></td>
										<td><span class="ft__co ft__co--flat">—</span></td>
										<td><span class="ft__co ft__co--drop">۳۵٪</span></td>
									</tr>
									<tr>
										<td>تماس اولیه</td>
										<td><span class="ft__co ft__co--flat">—</span></td>
										<td><span class="ft__co ft__co--hot">۵۹٪</span></td>
										<td><span class="ft__co ft__co--flat">—</span></td>
										<td><span class="ft__co ft__co--flat">—</span></td>
										<td><span class="ft__co ft__co--drop">۴۱٪</span></td>
									</tr>
									<tr>
										<td>پیشنهاد قیمت</td>
										<td><span class="ft__co ft__co--flat">—</span></td>
										<td><span class="ft__co ft__co--flat">—</span></td>
										<td><span class="ft__co ft__co--hot">۴۴٪</span></td>
										<td><span class="ft__co ft__co--flat">—</span></td>
										<td><span class="ft__co ft__co--drop">۵۶٪</span></td>
									</tr>
									<tr>
										<td>مذاکره</td>
										<td><span class="ft__co ft__co--flat">—</span></td>
										<td><span class="ft__co ft__co--flat">—</span></td>
										<td><span class="ft__co ft__co--flat">—</span></td>
										<td><span class="ft__co ft__co--hot">۶۵٪</span></td>
										<td><span class="ft__co ft__co--drop">۳۵٪</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<figcaption class="ft__mock-caption">داده‌های نمونه — ستون «خروج» همان مشتریان خارج‌شده از هر مرحله است</figcaption>
					</figure>

					<div class="ft__note-box ft__note-box--info">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>کشف:</strong> گلوگاه این قیف، مرحلهٔ «پیشنهاد قیمت ← مذاکره» با ۴۴٪ است —
							۵۶٪ مشتریان در همین مرحله خارج می‌شوند. بررسی کنید پیشنهادها دیر می‌رسند،
							قیمت شفاف نیست یا پیگیری این مرحله به‌موقع انجام نمی‌شود.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ EXPORT & REPORTING ============ -->
	<section class="ft__section" id="export">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="M7 10l5 5 5-5"/><path d="M12 15V3"/></svg>
					گزارش‌گیری
				</span>
				<h2 class="ft__section-title">داده را با خود <span class="text-gradient-primary">ببرید</span></h2>
				<p class="ft__section-desc">
					هر نمای تحلیلی قابل خروجی گرفتن است — برای جلسهٔ مدیران، همکاری با تیم مالی
					یا تحلیل بیشتر در ابزار دلخواه خودتان.
				</p>
				<ul class="ft__checklist">
					<li>خروجی CSV برای همهٔ صفحات آماری</li>
					<li>خروجی XLSX برای گزارش‌های آمادهٔ ارائه</li>
					<li>انتخاب بازهٔ زمانی هنگام خروجی گرفتن</li>
					<li>سازگار با اکسل و ابزارهای تحلیل داده</li>
				</ul>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<div class="ft__export">
					<div class="ft__export-formats">
						<span class="ft__export-fmt">CSV</span>
						<span class="ft__export-fmt ft__export-fmt--alt">XLSX</span>
					</div>
					<div class="ft__export-views">
						<span class="ft__export-view">قیف تبدیل</span>
						<span class="ft__export-view">کوهورت و بازگشت</span>
						<span class="ft__export-view">RFM</span>
						<span class="ft__export-view">مسیر مشتری</span>
						<span class="ft__export-view">درآمد و محصولات</span>
						<span class="ft__export-view">قیف فروش</span>
						<span class="ft__export-view">ترافیک</span>
						<span class="ft__export-view">رویدادها</span>
					</div>
					<p class="ft__export-note">
						خروجی از همان نمایی گرفته می‌شود که روی صفحه می‌بینید؛ ستون‌ها و بازهٔ زمانی متناسب با نمای انتخابی خواهد بود.
					</p>
				</div>
				<p class="ft__mock-caption">نمایش تزئینی — فرمت‌ها و نماهای قابل خروجی</p>
			</div>
		</div>
	</section>

	<!-- ============ EXAMPLE BUSINESS SCENARIOS ============ -->
	<section class="ft__section ft__section--surface" id="scenarios">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
					کاربرد عملی
				</span>
				<h2 class="ft__section-title">از نمودار تا <span class="text-gradient-primary">تصمیم عملی</span></h2>
				<p class="ft__section-desc">
					پنج سناریوی واقعی که نشان می‌دهد هر یافتهٔ تحلیلی چه سؤالی را جواب می‌دهد و چه اقدامی را ممکن می‌کند.
					مثال‌ها فرضی‌اند؛ ساختار فکری آن‌ها قابل استفاده روی داده‌های خودتان است.
				</p>
			</div>

			<div class="ft__grid ft__grid--cases">
				<article class="main-card ft__scen" data-reveal="up">
					<span class="ft__case-badge">مثال</span>
					<h3>محصول پربازدید، کم‌تبدیل</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">سیگنال از داده</span>
						<p class="ft__scen-text">بازدید بالا + افزودن به سبد متوسط + فروش خیلی کم (نمای محصولات با فیلتر «پربازدید، کم‌تبدیل»).</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">اقدام</span>
						<p class="ft__scen-text">بررسی قیمت، عکس، موجودی و نقد محصول؛ ساخت سگمنت بازدیدکنندگان آن محصول و پیگیری هدفمند.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="60">
					<span class="ft__case-badge">مثال</span>
					<h3>سبد خرید رهاشده</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">سیگنال از داده</span>
						<p class="ft__scen-text">رویداد add_to_cart بدون purchase در همان بازه — نمای سبدهای رهاشده در داشبورد.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">اقدام</span>
						<p class="ft__scen-text">این افراد را سگمنت کنید و با اتوماسیون بازاریابی، یادآوری خرید با پیام مناسب زمان‌بندی کنید.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="120">
					<span class="ft__case-badge">مثال</span>
					<h3>مشتریان غیرفعال</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">سیگنال از داده</span>
						<p class="ft__scen-text">کاهش نرخ بازگشت در جدول کوهورت + نبود خرید در بازهٔ RFM (دستهٔ «خوابیده»).</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">اقدام</span>
						<p class="ft__scen-text">برای دستهٔ «در معرض ریزش» کمپین بازگشت بسازید و اثر آن را در کوهورت بعدی مقایسه کنید.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="180">
					<span class="ft__case-badge">مثال</span>
					<h3>ریزش در سفر خرید</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">سیگنال از داده</span>
						<p class="ft__scen-text">بزرگ‌ترین پرش قیف بین دو گام متوالی + مسیرهای خروج پرتکرار در نمای مسیر مشتری.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">اقدام</span>
						<p class="ft__scen-text">آن مرحله را ساده‌تر کنید (فرم، هزینه‌ها، اعتمادسازی) و قبل/بعدش را با مقایسهٔ دوره‌ها بسنجید.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="240">
					<span class="ft__case-badge">مثال</span>
					<h3>گلوگاه قیف فروش</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">سیگنال از داده</span>
						<p class="ft__scen-text">پایین‌ترین نرخ گذارش بین مراحل + بالاترین «خروج» در ماتریس مراحل پیپلاین.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">اقدام</span>
						<p class="ft__scen-text">علت را در فرایند تیم فروش پیدا کنید (پیگیری، قیمت، شفافیت) و سپس عملکرد همان مرحله را دوباره بسنجید.</p>
					</div>
				</article>
			</div>

			<div class="ft__section-head" style="margin-top: clamp(36px, 5vw, 52px);" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					امکانات مرتبط
				</span>
				<h2 class="ft__section-title">تحلیل را به <span class="text-gradient-primary">اقدام وصل کنید</span></h2>
				<p class="ft__section-desc">
					داده وقتی ارزش دارد که به بقیهٔ پلتفرم وصل شود. صفحات تفصیلی این قابلیت‌ها به‌تدریج اضافه می‌شوند.
				</p>
			</div>

			<div class="ft__grid ft__grid--cards">
				<?php
				$ft_related_slugs = array( 'website-tracking', 'segmentation', 'automation', 'sales-pipeline' );
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
				<a href="<?php echo esc_url( home_url( '/features/website-tracking/' ) ); ?>" class="ft__related-link">
					ردیابی وب‌سایت — منبع داده
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

	<!-- ============ FAQ ============ -->
	<?php
	get_template_part(
		'template-parts/faq-section',
		null,
		array(
			'ft_faq_id'    => 'faq',
			'ft_faq_title' => 'پرسش‌های متداول دربارهٔ تحلیل رفتاری',
			'ft_faq_intro' => 'پاسخ پرسش‌های رایج دربارهٔ منبع داده، دقت محاسبات و خروجی گزارش‌ها.',
			'ft_faq_items' => array(
				array(
					'q' => 'داده‌های تحلیلی از کجا می‌آیند؟',
					'a' => 'از دو منبع: اسکریپت SDK که روی وب‌سایت شما نصب می‌شود (رویدادها، بازدیدها، سبد خرید) و اطلاعاتی که خودتان در «xCRM فروش» ثبت می‌کنید (مشتریان، مراحل فروش، سفارش‌ها). <a href="' . esc_url( home_url( '/features/website-tracking/' ) ) . '">جزئیات ردیابی وب‌سایت</a> را ببینید.',
				),
				array(
					'q' => 'آیا اعداد و درصدها به‌صورت خودکار محاسبه می‌شوند؟',
					'a' => 'بله — نرخ تبدیل قیف، درصد بازگشت کوهورت، امتیازهای RFM و نرخ گذارش مراحل از رویدادها و سوابق ثبت‌شده محاسبه می‌شوند. توجه: این تحلیل‌ها بر اساس داده‌های موجود شما ساخته می‌شوند و جایگزین قضاوت تخصصی تیم فروش یا بازاریابی نیستند.',
				),
				array(
					'q' => 'قیف تبدیل را می‌توانم با هم مقایسه کنم؟',
					'a' => 'بله. هم مقایسهٔ دو قیف با هم و هم مقایسهٔ یک قیف بین دو دورهٔ زمانی یا دو گروه مشتری امکان‌پذیر است. قیف‌های پرکاربرد نیز قابل ذخیره برای استفادهٔ مجدد‌اند.',
				),
				array(
					'q' => 'خروجی گزارش به چه فرمتی است؟',
					'a' => 'خروجی CSV برای همهٔ صفحات آماری و خروجی XLSX برای گزارش‌های آمادهٔ ارائه در دسترس است؛ بازهٔ زمانی هنگام خروجی گرفتن قابل انتخاب است.',
				),
				array(
					'q' => 'تحلیل قیف فروش چه چیزی را نشان می‌دهد؟',
					'a' => 'نرخ تبدیل هر مرحلهٔ پیپلاین فروش به مرحلهٔ بعد، ماتریس جابه‌جایی مراحل و تعداد مشتریان خارج‌شده از هر مرحله را نشان می‌دهد — با همین نما می‌توانید گلوگاه فروش را پیدا کنید.',
				),
				array(
					'q' => 'این تحلیل‌ها به کدام بخش‌ها وصل می‌شوند؟',
					'a' => 'یافته‌ها پایهٔ <a href="' . esc_url( home_url( '/features/' ) ) . '">سگمنت‌بندی</a> و اتوماسیون بازاریابی می‌شوند: هر گروهی که در تحلیل پیدا کنید (ریزش‌کنندگان، سبدرهاکنندگان، مشتریان غیرفعال) قابل تبدیل به مخاطب کمپین است. مسیر کامل را در <a href="' . esc_url( home_url( '/for-marketers/' ) ) . '">صفحهٔ مارکترها</a> ببینید.',
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
			'ft_cta_title'           => 'آماده‌اید داده‌های رفتاری را به تصمیم تبدیل کنید؟',
			'ft_cta_desc'            => 'در داشبورد «xCRM فروش» حساب بسازید، SDK را نصب کنید و اولین قیف تبدیل و گزارش ترافیک خود را ببینید.',
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
