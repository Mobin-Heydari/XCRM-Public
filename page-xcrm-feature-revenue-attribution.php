<?php
/**
 * Template Name: Feature — Revenue Attribution
 * Template Post Type: page
 *
 * صفحهٔ جزئیات قابلیت — تحلیل منابع درآمد و بازاریابی
 * /features/revenue-attribution/
 *
 * ادعاهای اتریبیوشن (۹ پارامتر UTM، اولین/آخرین برخورد، درآمد بر اساس
 * منبع، LTV بر اساس کانال جذب) از business-logic §3.12 و سورس واقعی
 * تحلیل‌ها (revenue/traffic/ltv) بازبینی شده‌اند. این صفحه ادعای
 * چندلمسی، هزینهٔ تبلیغات یا ROAS ندارد.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_stylesheet_directory() . '/inc/features-data.php';

$home_url  = home_url( '/' );
$features  = home_url( '/features/' );
$canonical = home_url( '/features/revenue-attribution/' );
$dash_url  = 'https://dashboard.xcrmforosh.com/';

$page_title       = 'تحلیل منابع درآمد و بازاریابی | Revenue Attribution در XCRM';
$page_description = 'منابع جذب مشتری را با اتریبیوشن UTM (اولین و آخرین برخورد) شناسایی کنید، درآمد و ارزش طول عمر مشتری (LTV) را بر اساس کانال جذب تحلیل کنید و ارتباط داده‌های بازاریابی را با عملکرد فروش ببینید.';
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
			array('@type'=>'ListItem','position'=>3,'name'=>'تحلیل منابع درآمد و بازاریابی','item'=>esc_url($canonical)),
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
				<span class="ft__breadcrumb-current">تحلیل منابع درآمد و بازاریابی</span>
			</nav>

			<span class="ft__label ft-anim ft-anim--1">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 2v20"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
				اتریبیوشن و تحلیل درآمد
			</span>

			<h1 class="ft__title ft-anim ft-anim--2">
				بدانید مشتریان <span class="text-gradient-primary">از کجا می‌آیند</span> و چه کانال‌هایی به رشد فروش شما کمک می‌کنند
			</h1>

			<p class="ft__hero-desc ft-anim ft-anim--3">
				مسیر جذب مشتری را بهتر بشناسید، منابع ورودی را تحلیل کنید و ارتباط میان
				داده‌های بازاریابی و عملکرد فروش را بررسی کنید — از اولین UTM تا درآمد و
				ارزش طول عمر مشتری بر اساس کانال جذب.
			</p>

			<div class="ft__hero-actions ft-anim ft-anim--4">
				<a href="<?php echo esc_url( $dash_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
					تحلیل منابع درآمد را شروع کنید
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="#revenue" class="hp__btn hp__btn--ghost" data-magnetic>
					مشاهده امکانات تحلیل
				</a>
			</div>

			<ul class="ft__hero-pills ft-anim ft-anim--5" aria-label="نکات کلیدی">
				<li>UTM: اولین و آخرین برخورد</li>
				<li>درآمد بر اساس منبع ورودی</li>
				<li>LTV بر اساس کانال جذب</li>
				<li>نرخ تبدیل هر کانال ترافیکی</li>
			</ul>
			</div>
			<div class="ft__hero-media">
			<?php get_template_part( 'template-parts/feature-hero-graphic', null, array( 'slug' => 'revenue-attribution' ) ); ?>

			<div class="ft__hero-visual ft-anim ft-anim--5">
				<div class="ft__attrib">
					<div class="ft__attrib-top">
						<span class="ft__attrib-title">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
							داشبورد اتریبیوشن — منبع تا درآمد
						</span>
						<span class="ft__attrib-badge">داده‌های نمونه</span>
					</div>

					<div class="ft__attrib-grid">
						<div class="ft__attrib-panel">
							<div class="ft__attrib-panel-title"><span>درآمد بر اساس منبع</span><span>۳۰ روز گذشته</span></div>
							<div class="ft__attrib-src">
								<div class="ft__attrib-src-row">
									<div class="ft__attrib-src-head">
										<span class="ft__attrib-src-name"><i class="is-success"></i>جستجوی ارگانیک</span>
										<span class="ft__attrib-src-val">۴۸٫۲ میلیون</span>
									</div>
									<div class="ft__attrib-track"><span class="ft__attrib-fill is-success" style="width: 92%;"></span></div>
								</div>
								<div class="ft__attrib-src-row">
									<div class="ft__attrib-src-head">
										<span class="ft__attrib-src-name"><i></i>کمپین پولی (cpc)</span>
										<span class="ft__attrib-src-val">۳۱٫۵ میلیون</span>
									</div>
									<div class="ft__attrib-track"><span class="ft__attrib-fill" style="width: 60%;"></span></div>
								</div>
								<div class="ft__attrib-src-row">
									<div class="ft__attrib-src-head">
										<span class="ft__attrib-src-name"><i class="is-info"></i>شبکه اجتماعی</span>
										<span class="ft__attrib-src-val">۱۲٫۸ میلیون</span>
									</div>
									<div class="ft__attrib-track"><span class="ft__attrib-fill is-ocean" style="width: 25%;"></span></div>
								</div>
								<div class="ft__attrib-src-row">
									<div class="ft__attrib-src-head">
										<span class="ft__attrib-src-name"><i class="is-warn"></i>ایمیل</span>
										<span class="ft__attrib-src-val">۸٫۴ میلیون</span>
									</div>
									<div class="ft__attrib-track"><span class="ft__attrib-fill is-sunset" style="width: 16%;"></span></div>
								</div>
							</div>
						</div>

						<div class="ft__attrib-panel">
							<div class="ft__attrib-panel-title"><span>UTM ثبت‌شده روی رویداد</span><span>اولین/آخرین برخورد</span></div>
							<div class="ft__attrib-utm">
								<code class="ft__attrib-utm-code">utm_<b>source</b>=google &nbsp; utm_<b>medium</b>=cpc</code>
								<div class="ft__attrib-chips">
									<span class="ft__attrib-chip">utm_source</span>
									<span class="ft__attrib-chip">utm_medium</span>
									<span class="ft__attrib-chip">utm_campaign</span>
									<span class="ft__attrib-chip">+ ۶ پارامتر</span>
								</div>
							</div>
							<div class="ft__attrib-panel-title" style="margin-top: 2px;"><span>نرخ تبدیل کانال‌ها</span><span>خرید ÷ بازدید</span></div>
							<div class="ft__attrib-src">
								<div class="ft__attrib-src-row">
									<div class="ft__attrib-src-head">
										<span class="ft__attrib-src-name"><i class="is-success"></i>ارگانیک</span>
										<span class="ft__attrib-src-val">۴٫۸٪</span>
									</div>
									<div class="ft__attrib-track"><span class="ft__attrib-fill is-success" style="width: 78%;"></span></div>
								</div>
								<div class="ft__attrib-src-row">
									<div class="ft__attrib-src-head">
										<span class="ft__attrib-src-name"><i></i>ایمیل</span>
										<span class="ft__attrib-src-val">۳٫۱٪</span>
									</div>
									<div class="ft__attrib-track"><span class="ft__attrib-fill" style="width: 50%;"></span></div>
								</div>
							</div>
						</div>
					</div>

					<div class="ft__attrib-foot">
						<span>کل درآمد (۳۰ روز): <b>۱۰۰٫۹ میلیون تومان</b></span>
						<span>بهترین منبع درآمد: <b>جستجوی ارگانیک</b></span>
					</div>
				</div>
				<p class="ft__mock-caption">داده‌های نمونه — نمایش تزئینی رابط تحلیل درآمد و اتریبیوشن</p>
			</div>
			</div>
		</div>
	</section>

	<!-- ============ 02 THE PROBLEM ============ -->
	<section class="ft__section ft__section--surface" id="problem">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
					چرا اتریبیوشن؟
				</span>
				<h2 class="ft__section-title">بازدید زیاد، اما <span class="text-gradient-primary">کدام منبع ارزشمند است؟</span></h2>
				<p class="ft__section-desc">
					بدون اتصال منبع ورودی به رفتار و درآمد، بازاریابی به حدس زدن تبدیل می‌شود —
					و بودجه به جای پربازده‌ترین کانال، جایی دیگر خرج می‌شود.
				</p>
			</div>

			<div class="ft__grid ft__grid--caps">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
					</span>
					<h3>نمی‌دانید بازدیدکنندهٔ ارزشمند از کجا می‌آید</h3>
					<p>همهٔ کانال‌ها بازدید می‌آورند، اما بدون اتصال بازدید به خرید، نمی‌دانید کدام کانال مشتریِ واقعاً سودآور آورده است.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 17H7A5 5 0 0 1 7 7h2"/><path d="M15 7h2a5 5 0 1 1 0 10h-2"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
					</span>
					<h3>اطلاعات منبع در مسیر مشتری گم می‌شود</h3>
					<p>کاربر از یک کانال می‌آید و چند روز بعد برمی‌گردد؛ بدون ثبت اولین و آخرین برخورد، مبدأ واقعی جذب او از دست می‌رود.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg>
					</span>
					<h3>ترافیک بدون ربط به درآمد</h3>
					<p>شمارش بازدید به تنهایی چیزی نمی‌گوید؛ بدون ارتباط با خرید و مبلغ، نمی‌توانید عملکرد واقعی هر کانال را بسنجید.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="180">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					</span>
					<h3>مقایسهٔ دشوار مشتریان کانال‌ها</h3>
					<p>مشتریانی که از کانال‌های مختلف آمده‌اند را باید کنار هم سنجید — ارزش هر مشتری در طول زمان (LTV) چقدر است؟</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ 03 UTM TRACKING ============ -->
	<section class="ft__section" id="utm">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					اتریبیوشن UTM
				</span>
				<h2 class="ft__section-title">هر لینک کمپین، <span class="text-gradient-primary">۹ پارامتر UTM</span></h2>
				<p class="ft__section-desc">
					SDK مرورگر اطلاعات کمپین و مبدأ ورودی را از URL می‌خواند و روی هر رویداد ثبت می‌کند —
					به‌طوری‌که تقریباً هر رفتاری که ثبت می‌شود، رد منبع ورودی را هم با خود دارد.
				</p>
			</div>

			<div data-reveal="up">
				<p class="ft__urlcap" style="margin-top: 0; margin-bottom: 9px;"><b>مثال تصویری</b> — لینک کمپین با پارامترهای UTM (داده‌های نمونه):</p>
				<div class="ft__urlbar">
					<span class="ft__urlbar-scheme">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
						HTTPS
					</span>
					<span class="ft__urlbar-text">
						<span class="u-path">shop.example.com/landing</span><span class="u-eq">?</span><span class="u-key">utm_source</span><span class="u-eq">=</span><span class="u-val">instagram</span><span class="u-eq">&amp;</span><span class="u-key">utm_medium</span><span class="u-eq">=</span><span class="u-val">social</span><span class="u-eq">&amp;</span><span class="u-key">utm_campaign</span><span class="u-eq">=</span><span class="u-val">winter_sale</span>
					</span>
				</div>
			</div>

			<div class="ft__split" style="margin-top: clamp(26px, 3.5vw, 36px);">
				<div class="ft__split-copy" data-reveal="up">
					<h3 style="font-size: clamp(1.05rem, 2.2vw, 1.3rem); font-weight: 900; color: var(--x-text); margin: 0 0 14px;">پارامترهای ثبت‌شده</h3>
					<div class="ft__params">
						<span class="ft__param"><code>utm_source</code><span>منبع</span></span>
						<span class="ft__param"><code>utm_medium</code><span>روش</span></span>
						<span class="ft__param"><code>utm_campaign</code><span>کمپین</span></span>
						<span class="ft__param"><code>utm_term</code><span>واژه</span></span>
						<span class="ft__param"><code>utm_content</code><span>محتوا</span></span>
						<span class="ft__param ft__param--more">۴ پارامتر دیگر — مجموعاً ۹</span>
					</div>
					<p class="ft__urlcap">SDK هر ۹ پارامتر UTM را جمع‌آوری می‌کند؛ پارامترهای بالا از قرارداد رویداد و تایپ‌های تحلیل تأیید شده‌اند.</p>

					<ul class="ft__checklist" style="margin-top: 18px;">
						<li><strong>تاریخچهٔ کامل UTM</strong> به‌همراه اولین و آخرین برخورد نگه داشته می‌شود</li>
						<li>اطلاعات UTM به‌صورت خودکار <strong>روی هر رویداد جمع‌آوری‌شده</strong> ضمیمه می‌شود</li>
						<li>ادغام کامل با جمع‌آوری رویداد SDK مرورگر — نیاز به پیکربندی جداگانه نیست</li>
						<li>دریافت دستی با متدهای <code dir="ltr">getFirstTouchUTM()</code> و <code dir="ltr">getLastTouchUTM()</code></li>
					</ul>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<div class="ft__chain">
						<div class="ft__chain-node">
							<span class="ft__chain-icon" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
							</span>
							<div class="ft__chain-body">
								<h3>لینک کمپین کلیک می‌شود</h3>
								<p>کاربر وارد سایت شما می‌شود؛ URL پارامترهای UTM را حمل می‌کند.</p>
							</div>
						</div>
						<div class="ft__chain-node">
							<span class="ft__chain-icon" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18"/><path d="M7 6.5h.01"/></svg>
							</span>
							<div class="ft__chain-body">
								<h3>SDK پارامترها را می‌خواند</h3>
								<p>اسکریپت مرورگر ۹ پارامتر را جمع‌آوری و در کوکی/حافظه نگه می‌دارد.</p>
							</div>
						</div>
						<div class="ft__chain-node">
							<span class="ft__chain-icon ft__chain-icon--end" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
							</span>
							<div class="ft__chain-body">
								<h3>رویدادها با UTM ارسال می‌شوند</h3>
								<p>هر بازدید و رویداد خرید به‌همراه اطلاعات UTM در تحلیل‌ها ثبت می‌شود.</p>
							</div>
						</div>
					</div>
					<p class="ft__mock-caption">جریان جمع‌آوری UTM از لینک تا تحلیل</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ 04 FIRST-TOUCH & LAST-TOUCH ============ -->
	<section class="ft__section ft__section--surface" id="touch">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M15 3h6v6"/><path d="M9 21H3v-6"/><path d="M21 3l-7 7"/><path d="M3 21l7-7"/></svg>
					اولین و آخرین برخورد
				</span>
				<h2 class="ft__section-title">مسیر مشتری: <span class="text-gradient-primary">از کجا شروع شد، از کجا اقدام کرد؟</span></h2>
				<p class="ft__section-desc">
					یک مشتری معمولاً چند بار برمی‌گردد. XCRM دو نقطهٔ کلیدی را ثبت می‌کند:
					<strong>اولین برخورد</strong> (مبدأ واقعی جذب) و <strong>آخرین برخورد</strong> (کانال مؤثر قبل از اقدام).
				</p>
			</div>

			<div class="ft__split">
				<div class="ft__split-copy" data-reveal="up">
					<div class="ft__chain">
						<div class="ft__chain-node">
							<span class="ft__chain-icon" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9.5 12 3l9 6.5"/><path d="M5 10v10h14V10"/><path d="M9 20v-6h6v6"/></svg>
							</span>
							<div class="ft__chain-body">
								<h3>۱ — اولین بازدید وب‌سایت</h3>
								<p>کاربر برای اولین بار از یک کمپین وارد می‌شود؛ اولین برخورد (first-touch) ثبت می‌شود.</p>
							</div>
						</div>
						<div class="ft__chain-node">
							<span class="ft__chain-icon" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
							</span>
							<div class="ft__chain-body">
								<h3>۲ — بازگشت از منبع دیگر</h3>
								<p>چند روز بعد از یک کانال دیگر برمی‌گردد؛ آخرین برخورد (last-touch) در بازهٔ ۳۰ دقیقهٔ اخیر به‌روز می‌شود.</p>
							</div>
						</div>
						<div class="ft__chain-node">
							<span class="ft__chain-icon" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
							</span>
							<div class="ft__chain-body">
								<h3>۳ — تعامل با محصولات</h3>
								<p>صفحات محصول، سبد خرید و رویدادهای رفتاری — همه با اطلاعات UTM ثبت می‌شوند.</p>
							</div>
						</div>
						<div class="ft__chain-node">
							<span class="ft__chain-icon ft__chain-icon--end" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
							</span>
							<div class="ft__chain-body">
								<h3>۴ — تکمیل خرید</h3>
								<p>خرید با درآمد ثبت می‌شود و به هر دو نقطهٔ اولین/آخرین برخورد قابل بازگشت است.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<div class="ft__utm">
						<div class="ft__touch ft__touch--first">
							<span class="ft__touch-dot" aria-hidden="true"></span>
							<div class="ft__touch-body">
								<span class="ft__touch-label">اولین برخورد (first-touch) — مبدأ جذب</span>
								<div class="ft__touch-params" dir="ltr">
									<code>utm_source=instagram</code>
									<code>utm_medium=social</code>
								</div>
							</div>
						</div>
						<div class="ft__touch ft__touch--last">
							<span class="ft__touch-dot" aria-hidden="true"></span>
							<div class="ft__touch-body">
								<span class="ft__touch-label">آخرین برخورد (last-touch) — در ۳۰ دقیقهٔ اخیر</span>
								<div class="ft__touch-params" dir="ltr">
									<code>utm_source=google</code>
									<code>utm_medium=cpc</code>
								</div>
							</div>
						</div>
					</div>
					<p class="ft__mock-caption">داده‌های نمونه — هر دو برخورد روی خودِ رویدادها نگه داشته می‌شوند</p>

					<div class="ft__note-box ft__note-box--info">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>مرز صادقانه:</strong> XCRM اولین و آخرین برخورد را ثبت می‌کند و
							تاریخچهٔ UTM را نگه می‌دارد — اما یک <strong>مدل چندلمسی (multi-touch)</strong>
							با تقسیم خودکار اعتبار بین کانال‌ها ارائه نمی‌دهد.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ 05 REVENUE BY SOURCE ============ -->
	<section class="ft__section" id="revenue">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 2v20"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
					درآمد بر اساس منبع
				</span>
				<h2 class="ft__section-title">کدام کانال <span class="text-gradient-primary">واقعاً می‌فروشد؟</span></h2>
				<p class="ft__section-desc">
					«مقایسه فروش و درآمد بر اساس منبع ورودی» — رویدادهای خرید بر اساس کانال جذب دسته‌بندی
					می‌شوند تا ببینید هر کانال چقدر بازدید، افزودن به سبد، خرید و درآمد داشته است.
				</p>
			</div>

			<div class="ft__grid ft__grid--cases" data-reveal="up">
				<article class="main-card ft__srccard">
					<div class="ft__srccard-top">
						<span class="ft__srccard-name"><i class="is-success"></i>جستجوی ارگانیک</span>
						<span class="ft__srccard-rank">بهترین منبع درآمد</span>
					</div>
					<div class="ft__srccard-rev"><b>۴۸٫۲</b><span>میلیون تومان</span></div>
					<div class="ft__srccard-track"><span class="ft__srccard-fill is-success" style="width: 92%;"></span></div>
					<div class="ft__srccard-stats">
						<span class="ft__srccard-stat"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>خریدها <b>۱۸۲</b></span>
						<span class="ft__srccard-stat"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>بازدیدها <b>۳٬۷۸۰</b></span>
					</div>
				</article>

				<article class="main-card ft__srccard" data-reveal="up" data-reveal-delay="60">
					<div class="ft__srccard-top">
						<span class="ft__srccard-name"><i></i>کمپین پولی (cpc)</span>
						<span class="ft__srccard-rank ft__srccard-rank--mute">رتبهٔ ۲</span>
					</div>
					<div class="ft__srccard-rev"><b>۳۱٫۵</b><span>میلیون تومان</span></div>
					<div class="ft__srccard-track"><span class="ft__srccard-fill" style="width: 60%;"></span></div>
					<div class="ft__srccard-stats">
						<span class="ft__srccard-stat"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>خریدها <b>۹۶</b></span>
						<span class="ft__srccard-stat"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>بازدیدها <b>۲٬۹۴۰</b></span>
					</div>
				</article>

				<article class="main-card ft__srccard" data-reveal="up" data-reveal-delay="120">
					<div class="ft__srccard-top">
						<span class="ft__srccard-name"><i class="is-info"></i>شبکه اجتماعی</span>
						<span class="ft__srccard-rank ft__srccard-rank--mute">رتبهٔ ۳</span>
					</div>
					<div class="ft__srccard-rev"><b>۱۲٫۸</b><span>میلیون تومان</span></div>
					<div class="ft__srccard-track"><span class="ft__srccard-fill is-ocean" style="width: 25%;"></span></div>
					<div class="ft__srccard-stats">
						<span class="ft__srccard-stat"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>خریدها <b>۵۱</b></span>
						<span class="ft__srccard-stat"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>بازدیدها <b>۱٬۶۱۰</b></span>
					</div>
				</article>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">داده‌های نمونه — کارت‌های مقایسهٔ منبع بر اساس رویدادهای خرید ثبت‌شده</p>

			<div class="ft__split" style="margin-top: clamp(28px, 4vw, 40px);">
				<div class="ft__split-copy" data-reveal="up">
					<h3 style="font-size: clamp(1.05rem, 2.2vw, 1.3rem); font-weight: 900; color: var(--x-text); margin: 0 0 14px;">توزیع درآمد بین کانال‌ها</h3>
					<div class="ft__hbars">
						<div class="ft__hbar">
							<div class="ft__hbar-head"><span class="ft__hbar-name">جستجوی ارگانیک</span><span class="ft__hbar-val">۴۸٪</span></div>
							<div class="ft__hbar-track"><span class="ft__hbar-fill" style="width: 48%;"></span></div>
						</div>
						<div class="ft__hbar">
							<div class="ft__hbar-head"><span class="ft__hbar-name">کمپین پولی (cpc)</span><span class="ft__hbar-val">۳۱٪</span></div>
							<div class="ft__hbar-track"><span class="ft__hbar-fill ft__hbar-fill--ocean" style="width: 31%;"></span></div>
						</div>
						<div class="ft__hbar">
							<div class="ft__hbar-head"><span class="ft__hbar-name">شبکه اجتماعی</span><span class="ft__hbar-val">۱۳٪</span></div>
							<div class="ft__hbar-track"><span class="ft__hbar-fill ft__hbar-fill--sunset" style="width: 13%;"></span></div>
						</div>
						<div class="ft__hbar">
							<div class="ft__hbar-head"><span class="ft__hbar-name">ایمیل</span><span class="ft__hbar-val">۸٪</span></div>
							<div class="ft__hbar-track"><span class="ft__hbar-fill ft__hbar-fill--success" style="width: 8%;"></span></div>
						</div>
					</div>
					<p class="ft__mock-caption">داده‌های نمونه — سهم هر کانال از کل درآمد</p>
				</div>

				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li><strong>عنوان گزارش:</strong> «درآمد بر اساس منبع» با نمودار «درآمد بر اساس کانال»</li>
						<li><strong>شاخص‌ها:</strong> «کل درآمد (تومان)»، «کل خریدها»، «افزودن به سبد» و «بهترین منبع درآمد»</li>
						<li><strong>جدول گزارش:</strong> کانال | بازدیدها | افزودن به سبد | خریدها | درآمد</li>
						<li><strong>مرتب‌سازی بر اساس:</strong> درآمد، خریدها، بازدیدها یا افزودن به سبد</li>
						<li><strong>فیلتر:</strong> «حداقل درآمد (تومان)» — «کانال‌هایی که درآمد کمتری دارند مخفی می‌شوند»</li>
						<li>مقایسهٔ خودکار: بهترین منبع نسبت به منبع دوم سنجیده می‌شود</li>
					</ul>

					<div class="ft__note-box">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>مرز صادقانه:</strong> این گزارش بر اساس <strong>داده‌های ثبت‌شدهٔ درآمد</strong>
							(رویداد خرید + کانال جذب) است؛ هزینهٔ تبلیغات، ROAS یا سود خالص را محاسبه نمی‌کند.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ 06 LIFETIME VALUE BY CHANNEL ============ -->
	<section class="ft__section ft__section--surface" id="ltv">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 2v20"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
					ارزش طول عمر بر اساس کانال
				</span>
				<h2 class="ft__section-title">کدام کانال <span class="text-gradient-primary">مشتری ارزشمند</span> می‌آورد؟</h2>
				<p class="ft__section-desc">
					هر مشتری به یک <strong>کانال جذب</strong> (اولین منبع غیرخالی ثبت‌شده) نسبت داده می‌شود؛
					سپس میانگین درآمد کل خریدهای او در طول زمان، در همان کانال خلاصه می‌شود —
					این یعنی مقایسهٔ ارزش طول عمر (LTV) مشتریان بین کانال‌های جذب.
				</p>
				<ul class="ft__checklist">
					<li><strong>کانال جذب:</strong> از اولین رویداد غیرخالی هر مشتری (channel یا utm_source) تعیین می‌شود</li>
					<li><strong>محاسبه:</strong> رویدادهای خرید (پیش‌فرض <code dir="ltr">purchase</code>) هر مشتری جمع می‌شوند</li>
					<li><strong>خروجی هر کانال:</strong> تعداد مشتریان، خریدها، کل درآمد، میانگین LTV و سهم از درآمد</li>
					<li>بازهٔ زمانی قابل انتخاب برای تحلیل</li>
				</ul>

				<div class="ft__note-box ft__note-box--info" style="margin-top: 18px;">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
					<p style="margin: 0;">
						<strong>مرز صادقانه:</strong> مقایسه بر اساس اولین کانال جذب هر مشتری و رویدادهای
						خرید ثبت‌شده است — نه مدل‌های کوهورتی پیچیده یا نسبت‌دهی چندکاناله.
					</p>
				</div>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="ft__hbars">
					<div class="ft__hbar-head">
						<span class="ft__hbar-name" style="font-size: 0.78rem; color: var(--x-text-muted);">میانگین LTV بر اساس کانال جذب (شاخص نسبی)</span>
					</div>
					<div class="ft__hbar">
						<div class="ft__hbar-head"><span class="ft__hbar-name">جستجوی ارگانیک</span><span class="ft__hbar-val">۱۰۰</span></div>
						<div class="ft__hbar-track"><span class="ft__hbar-fill" style="width: 100%;"></span></div>
					</div>
					<div class="ft__hbar">
						<div class="ft__hbar-head"><span class="ft__hbar-name">ایمیل</span><span class="ft__hbar-val">۸۲</span></div>
						<div class="ft__hbar-track"><span class="ft__hbar-fill ft__hbar-fill--success" style="width: 82%;"></span></div>
					</div>
					<div class="ft__hbar">
						<div class="ft__hbar-head"><span class="ft__hbar-name">ارجاع</span><span class="ft__hbar-val">۶۵</span></div>
						<div class="ft__hbar-track"><span class="ft__hbar-fill ft__hbar-fill--ocean" style="width: 65%;"></span></div>
					</div>
					<div class="ft__hbar">
						<div class="ft__hbar-head"><span class="ft__hbar-name">کمپین پولی (cpc)</span><span class="ft__hbar-val">۴۷</span></div>
						<div class="ft__hbar-track"><span class="ft__hbar-fill ft__hbar-fill--sunset" style="width: 47%;"></span></div>
					</div>
				</div>
				<p class="ft__mock-caption">داده‌های نمونه — شاخص نسبی، نه عدد ریالی؛ خروجی واقعی مشتریان/خریدها/درآمد/میانگین LTV/سهم درآمد است</p>
			</div>
		</div>
	</section>

	<!-- ============ 07 COMPLETE DATA FLOW ============ -->
	<section class="ft__section" id="flow">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					جریان کامل داده
				</span>
				<h2 class="ft__section-title">از لینک کمپین تا <span class="text-gradient-primary">بینش درآمد</span></h2>
				<p class="ft__section-desc">
					مسیر داده ساده و پیوسته است: منبع بازاریابی از لینک خوانده می‌شود، با رویدادها ثبت و
					تحلیل می‌شود و در نهایت به گزارش درآمد و ارزش مشتری می‌رسد.
				</p>
			</div>

			<ol class="ft__flow" data-reveal="up" aria-label="مراحل جریان داده از منبع بازاریابی تا بینش درآمد">
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۱</span>
					<div class="ft__flow-body">
						<h3>منبع بازاریابی</h3>
						<p>لینک کمپین با پارامترهای UTM از کانال‌های مختلف (ارگانیک، کمپین پولی، شبکه اجتماعی، ایمیل) کلیک می‌شود.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۲</span>
					<div class="ft__flow-body">
						<h3>جمع‌آوری UTM</h3>
						<p>SDK مرورگر ۹ پارامتر UTM را می‌خواند و اولین/آخرین برخورد + تاریخچه را نگه می‌دارد.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۳</span>
					<div class="ft__flow-body">
						<h3>SDK مرورگر</h3>
						<p>بازدیدها، جلسات و رویدادها (دیدن محصول، افزودن به سبد، خرید) به‌همراه اطلاعات دستگاه و UTM ارسال می‌شوند.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۴</span>
					<div class="ft__flow-body">
						<h3>دادهٔ مشتری و رویداد</h3>
						<p>هویت مشتری حل می‌شود (ناسناس ← شناسه) و رویدادها همراه منبع ورودی در پایگاه‌دادهٔ تحلیل ثبت می‌گردند.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۵</span>
					<div class="ft__flow-body">
						<h3>تحلیل XCRM</h3>
						<p>رویدادها بر اساس کانال جذب دسته‌بندی و با خریدها و درآمد گره می‌خورند؛ منابع ترافیک و درآمد محاسبه می‌شوند.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۶</span>
					<div class="ft__flow-body">
						<h3>بینش درآمد و ارزش مشتری</h3>
						<p>گزارش «درآمد بر اساس منبع»، نرخ تبدیل هر کانال و میانگین LTV بر اساس کانال جذب آماده می‌شود.</p>
					</div>
				</li>
			</ol>
		</div>
	</section>

	<!-- ============ 08 BUSINESS USE CASES ============ -->
	<section class="ft__section ft__section--surface" id="usecases">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
					کاربرد عملی
				</span>
				<h2 class="ft__section-title">پنج پرسش که <span class="text-gradient-primary">با این داده‌ها</span> پاسخ می‌گیرید</h2>
				<p class="ft__section-desc">
					سناریوهای واقعی تیم‌های بازاریابی و رشد — همه بر اساس امکانات پیاده‌سازی‌شده.
				</p>
			</div>

			<div class="ft__grid ft__grid--cases">
				<article class="main-card ft__scen" data-reveal="up">
					<span class="ft__case-badge">ارگانیک در برابر پولی</span>
					<h3>کدام بازدهی بیشتری دارد؟</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">سؤال</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">بازدید ارگانیک بیشتر است یا کمپین پولی فروش بیشتری دارد؟</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">از کجا بخوانید</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">نرخ تبدیل هر کانال + «درآمد بر اساس منبع» + مرتب‌سازی بر اساس درآمد یا خریدها.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="60">
					<span class="ft__case-badge">کانال‌های جذب</span>
					<h3>مشتریان از کجا می‌آیند؟</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">سؤال</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">ترکیب منابع ورودی بازدیدکنندگان و نرخ تبدیل هر کدام چیست؟</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">از کجا بخوانید</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">گزارش «منابع ترافیک»: بازدیدها، رویدادها و نرخ تبدیل هر کانال ترافیکی.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="120">
					<span class="ft__case-badge">توزیع درآمد</span>
					<h3>درآمد بین کانال‌ها چطور پخش شده؟</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">سؤال</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">سهم هر کانال از کل درآمد و مقایسهٔ بهترین منبع با منبع دوم چقدر است؟</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">از کجا بخوانید</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">نمودار «درآمد بر اساس کانال» + کارت‌های «کل درآمد» و «بهترین منبع درآمد».</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="60">
					<span class="ft__case-badge">LTV بین کانال‌ها</span>
					<h3>کدام کانال مشتری وفادارتر می‌آورد؟</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">سؤال</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">مشتریان کدام کانال در طول زمان درآمد بیشتری ایجاد می‌کنند؟</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">از کجا بخوانید</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">میانگین LTV بر اساس کانال جذب (اولین منبع غیرخالی هر مشتری).</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="120">
					<span class="ft__case-badge">منابع مشتریان ارزشمند</span>
					<h3>کدام منبع مشتریان پرارزش می‌آورد؟</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">سؤال</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">چه منبع ورودی با مشتریانی مرتبط است که بیشتر می‌خرند و ارزش بیشتری دارند؟</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">از کجا بخوانید</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">ترکیب «درآمد بر اساس منبع» + «میانگین LTV بر اساس کانال جذب».</p>
					</div>
				</article>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">سؤال‌های نمونه — پاسخ از گزارش‌های تحلیلی موجود در داشبورد استخراج می‌شود.</p>
		</div>
	</section>

	<!-- ============ 09 RELATED FEATURES ============ -->
	<section class="ft__section" id="related">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					قابلیت‌های مرتبط
				</span>
				<h2 class="ft__section-title">اتریبیوشن، <span class="text-gradient-primary">تنها نیست</span></h2>
				<p class="ft__section-desc">
					این تحلیل‌ها روی داده‌هایی ساخته می‌شوند که بقیهٔ پلتفرم ثبت می‌کند — از ردیابی SDK تا پروفایل مشتری و بخش‌بندی.
				</p>
			</div>

			<div class="ft__related-links" data-reveal="up">
				<a href="<?php echo esc_url( home_url( '/features/website-tracking/' ) ); ?>" class="ft__related-link">
					ردیابی وب‌سایت و SDK مرورگر
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/customer-management/' ) ); ?>" class="ft__related-link">
					تشخیص هویت و پروفایل یکپارچهٔ مشتری
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/analytics/#events' ) ); ?>" class="ft__related-link">
					مدیریت و تحلیل رویدادها
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
			'q' => 'اتریبیوشن بازاریابی چیست؟',
			'a' => 'اتریبیوشن یعنی نسبت دادن اقدامات بازاریابی (لینک کمپین، کانال ورودی) به رفتار و نتیجهٔ نهایی مشتری. در XCRM این کار با ثبت اطلاعات UTM روی رویدادها انجام می‌شود تا بدانید هر مشتری از کجا آمده، چه کرده و چقدر خرید کرده است.',
		),
		array(
			'q' => 'اتریبیوشن UTM چیست و چطور کار می‌کند؟',
			'a' => 'UTM پارامترهایی روی لینک کمپین‌هاست (مثل <code>utm_source</code>، <code>utm_medium</code>، <code>utm_campaign</code> که منبع، روش و نام کمپین را مشخص می‌کنند). SDK مرورگر XCRM <strong>۹ پارامتر UTM</strong> را جمع‌آوری می‌کند، تاریخچهٔ کامل آن را نگه می‌دارد و روی <strong>هر رویداد جمع‌آوری‌شده</strong> ضمیمه می‌کند — بنابراین تقریباً هر رفتاری رد منبع ورودی را دارد.',
		),
		array(
			'q' => 'اتریبیوشن اولین برخورد (first-touch) چیست؟',
			'a' => 'اولین برخورد همان <strong>مبدأ واقعی جذب مشتری</strong> است: نخستین باری که کاربر از یک کانال وارد شد. XCRM اولین برخورد را ثبت و برای هر مشتری نگه می‌دارد (و از آن برای تعیین «کانال جذب» در تحلیل LTV استفاده می‌کند). این مقدار را می‌توانید با <code>getFirstTouchUTM()</code> هم بخوانید.',
		),
		array(
			'q' => 'اتریبیوشن آخرین برخورد (last-touch) چیست؟',
			'a' => 'آخرین برخورد، <strong>کانال مؤثر قبل از اقدام</strong> است: آخرین منبع ورودی که کاربر در بازهٔ ۳۰ دقیقهٔ اخیر با آن برخورد داشته. با هر بازگشت تازه به‌روز می‌شود و با <code>getLastTouchUTM()</code> قابل خواندن است. توجه: XCRM هم اولین و هم آخرین برخورد را نگه می‌دارد، اما یک <strong>مدل چندلمسی</strong> با تقسیم خودکار اعتبار بین کانال‌ها ارائه نمی‌دهد.',
		),
		array(
			'q' => 'XCRM درآمد را چطور بر اساس منبع تحلیل می‌کند؟',
			'a' => 'رویدادهای خرید بر اساس <strong>کانال جذب</strong> دسته‌بندی می‌شوند و برای هر کانال، بازدیدها، افزودن به سبد، تعداد خریدها و مبلغ درآمد جمع می‌شود. گزارش «درآمد بر اساس منبع» با نمودار «درآمد بر اساس کانال»، کارت‌های «کل درآمد»، «کل خریدها» و «بهترین منبع درآمد» و امکان مرتب‌سازی/فیلتر «حداقل درآمد» ارائه می‌شود.',
		),
		array(
			'q' => 'LTV بر اساس کانال جذب چیست؟',
			'a' => 'هر مشتری به اولین کانال غیرخالی ثبت‌شده‌اش (channel یا منبع UTM) نسبت داده می‌شود؛ سپس برای هر کانال، تعداد مشتریان، خریدها، کل درآمد، <strong>میانگین LTV</strong> و سهم از درآمد محاسبه می‌شود. این یعنی مقایسهٔ میانگین ارزش طول عمر مشتریان بین کانال‌های مختلف جذب — بر اساس رویدادهای خرید ثبت‌شده، نه مدل‌های پیچیدهٔ نسبت‌دهی.',
		),
		array(
			'q' => 'آیا XCRM بازگشت سرمایهٔ تبلیغات (ROAS) را محاسبه می‌کند؟',
			'a' => 'خیر. XCRM <strong>هزینهٔ تبلیغات، بودجهٔ کمپین یا ROAS</strong> را محاسبه نمی‌کند، چون دادهٔ هزینه در سیستم ثبت نمی‌شود. آنچه ارائه می‌شود «گزارش‌های درآمد و عملکرد بر اساس داده‌های ثبت‌شده» است: درآمد، خرید، بازدید، نرخ تبدیل و LTV بر اساس منبع ورودی — نه سود خالص یا بازگشت تبلیغات.',
		),
	);
	$ft_faq_id    = 'faq';
	$ft_faq_title = 'پرسش‌های متداول دربارهٔ تحلیل منابع درآمد';
	$ft_faq_intro = 'برای بازاریابان دیجیتال، تیم‌های پرفورمنس و مدیران رشد.';
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
	$ft_cta_title         = 'تصمیم‌های بازاریابی خود را بر اساس داده بگیرید.';
	$ft_cta_desc          = 'منابع جذب را بشناسید، درآمد هر کانال را بسنجید و ارزش مشتریان هر منبع را مقایسه کنید.';
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
