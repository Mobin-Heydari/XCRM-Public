<?php
/**
 * Template Name: Features Directory
 * Template Post Type: page
 *
 * فهرست امکانات — /features/
 * نقشهٔ قابلیت‌های پلتفرم + مسیریابی به صفحه‌های جزئیات
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_stylesheet_directory() . '/inc/features-data.php';

$home_url   = home_url( '/' );
$features   = home_url( '/features/' );
$canonical  = home_url( '/features/' );
$dash_url   = 'https://dashboard.xcrmforosh.com/';
$groups     = xcrm_get_feature_groups();

	$page_title       = 'امکانات «xCRM فروش» — مدیریت مشتری، تحلیل، اتوماسیون و فروش';
	$page_description = 'فهرست کامل قابلیت‌های «xCRM فروش» در چهار دسته: داده و تحلیل مشتری، اتوماسیون بازاریابی، یکپارچه‌سازی و زیرساخت توسعه، و مدیریت کسب‌وکار — با پیوند به صفحهٔ جزئیات هر قابلیت.';
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
			array('@type'=>'ListItem','position'=>2,'name'=>'امکانات','item'=>esc_url($canonical)),
		),
	), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ); ?>
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'ft-page' ); ?>>
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
				<span class="ft__breadcrumb-current">امکانات</span>
			</nav>

			<span class="ft__label ft-anim ft-anim--1">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h10"/></svg>
				فهرست امکانات
			</span>

			<h1 class="ft__title ft-anim ft-anim--2">
				همهٔ امکانات «xCRM فروش»، <span class="text-gradient-primary">در یک نگاه</span>
			</h1>

			<p class="ft__hero-desc ft-anim ft-anim--3">
				«xCRM فروش» دادهٔ مشتری، تحلیل رفتار، بخش‌بندی، قیف فروش و اتوماسیون بازاریابی را به هم وصل می‌کند.
				از این صفحه می‌توانید هر قابلیت را جداگانه بررسی کنید یا مسیر متناسب با نقش خودتان را انتخاب کنید.
			</p>

			<div class="ft__hero-actions ft-anim ft-anim--4">
				<a href="<?php echo esc_url( $dash_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
					شروع رایگان
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/for-marketers/' ) ); ?>" class="hp__btn hp__btn--ghost" data-magnetic>
					مسیر دیجیتال مارکترها
				</a>
			</div>

			<ul class="ft__hero-pills ft-anim ft-anim--5" aria-label="خلاصهٔ قابلیت‌ها">
				<li>ردیابی وب‌سایت با SDK</li>
				<li>پروفایل یکپارچهٔ مشتری</li>
				<li>اتوماسیون روی n8n اختصاصی</li>
				<li>تحلیل قیف، کوهورت و RFM</li>
			</ul>
			</div>
		</div>
	</section>

	<!-- ============ CAPABILITY GROUPS ============ -->
	<?php foreach ( $groups as $ft_group_index => $ft_group ) : ?>
	<section class="ft__section<?php echo 0 === (int) $ft_group_index % 2 ? ' ft__section--surface' : ''; ?>" id="group-<?php echo esc_attr( $ft_group['key'] ); ?>">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
					<?php echo esc_html( $ft_group['title'] ); ?>
				</span>
				<h2 class="ft__section-title"><?php echo esc_html( $ft_group['headline'] ); ?></h2>
				<p class="ft__section-desc"><?php echo esc_html( $ft_group['description'] ); ?></p>
			</div>

			<div class="ft__grid ft__grid--cards">
				<?php
				$ft_delay = 0;
				foreach ( $ft_group['slugs'] as $ft_slug ) :
					$ft_feature = xcrm_get_feature( $ft_slug );
					if ( ! $ft_feature ) {
						continue;
					}
					get_template_part(
						'template-parts/feature-card',
						null,
						array(
							'feature'        => $ft_feature,
							'ft_card_delay'  => $ft_delay,
						)
					);
					$ft_delay += 70;
				endforeach;
				?>
			</div>
		</div>
	</section>
	<?php endforeach; ?>

	<!-- ============ HOW IT CONNECTS ============ -->
	<section class="ft__section ft__section--surface" id="workflow">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
					چطور به هم وصل می‌شوند
				</span>
				<h2 class="ft__section-title">از دادهٔ خام تا <span class="text-gradient-primary">اقدام هدفمند</span></h2>
				<p class="ft__section-desc">
					امکانات «xCRM فروش» مجموعه‌ای جدا از هم نیستند؛ هر مرحله به مرحلهٔ بعد وصل می‌شود.
				</p>
			</div>

			<ol class="ft__flow" data-reveal="up">
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۱</span>
					<div class="ft__flow-body">
						<h3>اتصال داده</h3>
						<p>اسکریپت SDK را روی وب‌سایت بگذارید یا فهرست مشتریان را از CSV، Excel، JSON و API وارد کنید.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۲</span>
					<div class="ft__flow-body">
						<h3>شناسایی هویت</h3>
						<p>رویدادها و منابع تماس به پروفایل درست مشتری نگاشت می‌شوند تا تاریخچه یکپارچه بماند.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۳</span>
					<div class="ft__flow-body">
						<h3>تحلیل و بخش‌بندی</h3>
						<p>قیف، کوهورت و مسیر مشتری را بررسی کنید و مخاطبان را با شرط‌های پویا گروه‌بندی کنید.</p>
					</div>
				</li>
				<li class="ft__flow-step">
					<span class="ft__flow-num" aria-hidden="true">۴</span>
					<div class="ft__flow-body">
						<h3>فعال‌سازی</h3>
						<p>کمپین و یادآوری فروش را روی همان سگمنت‌ها راه‌اندازی کنید و نتیجه را بسنجید.</p>
					</div>
				</li>
			</ol>
		</div>
	</section>

	<!-- ============ INTERFACE EXAMPLE ============ -->
	<section class="ft__section" id="interface">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8"/><path d="M12 17v4"/></svg>
					نمایی از محصول
				</span>
				<h2 class="ft__section-title">داشبوردی که داده را <span class="text-gradient-primary">کنار هم می‌گذارد</span></h2>
				<p class="ft__section-desc">
					فهرست مشتریان، وضعیت فروش و بخش‌بندی مخاطبان در یک فضای کاری مشترک دیده می‌شود.
				</p>
			</div>

			<figure class="ft__mock-wrap" data-reveal="up">
				<div class="ft__mock" aria-hidden="true">
					<div class="ft__mock-bar">
						<span></span><span></span><span></span>
					</div>
					<div class="ft__mock-body">
						<aside class="ft__mock-side">
							<span class="ft__mock-side-item is-active"></span>
							<span class="ft__mock-side-item"></span>
							<span class="ft__mock-side-item"></span>
							<span class="ft__mock-side-item"></span>
						</aside>
						<div class="ft__mock-main">
							<div class="ft__mock-toolbar">
								<span class="ft__mock-search"></span>
								<span class="ft__mock-chip ft__mock-chip--accent"></span>
							</div>
							<div class="ft__mock-stats">
								<span class="ft__mock-stat"></span>
								<span class="ft__mock-stat"></span>
								<span class="ft__mock-stat"></span>
							</div>
							<div class="ft__mock-rows">
								<span class="ft__mock-row"><i></i><b></b><em></em></span>
								<span class="ft__mock-row"><i></i><b></b><em></em></span>
								<span class="ft__mock-row"><i></i><b></b><em></em></span>
								<span class="ft__mock-row"><i></i><b></b><em></em></span>
							</div>
						</div>
					</div>
				</div>
				<figcaption class="ft__mock-caption">نمایش تزئینی از ساختار داشبورد — تصویر واقعی محصول در داشبورد قابل مشاهده است.</figcaption>
			</figure>
		</div>
	</section>

	<!-- ============ CHOOSE YOUR PATH ============ -->
	<section class="ft__section ft__section--surface" id="paths">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 3v12"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="6" r="3"/><path d="M18 9c0 6-12 4-12 9"/></svg>
					از کجا شروع کنید
				</span>
				<h2 class="ft__section-title">مسیر خودتان را انتخاب کنید</h2>
				<p class="ft__section-desc">
					هر دو مسیر از همان پایگاه دادهٔ مشتری استفاده می‌کنند؛ تفاوت در دغدغهٔ اولیهٔ شماست.
				</p>
			</div>

			<div class="ft__paths">
				<a href="<?php echo esc_url( home_url( '/for-marketers/' ) ); ?>" class="main-card hover-card ft__path" data-reveal="up">
					<span class="ft__path-eyebrow">دیجیتال مارکترها</span>
					<h3>رفتار مشتری را تحلیل و فعال کنید</h3>
					<p>قیف و کوهورت را بررسی کنید، سگمنت بسازید و کمپین را روی رفتار واقعی راه‌اندازی کنید.</p>
					<span class="ft__card-link">
						ورود به مسیر مارکترها
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					</span>
				</a>

				<a href="<?php echo esc_url( home_url( '/for-business/' ) ); ?>" class="main-card hover-card ft__path" data-reveal="up" data-reveal-delay="90">
					<span class="ft__path-eyebrow">صاحبان کسب‌وکار</span>
					<h3>مشتریان و فروش را ساماندهی کنید</h3>
					<p>پروفایل مشتری، مراحل فروش، یادآوری‌ها و دسترسی تیم را در یک سامانه مدیریت کنید.</p>
					<span class="ft__card-link">
						ورود به مسیر کسب‌وکارها
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					</span>
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
			'ft_faq_title' => 'پرسش‌های متداول دربارهٔ امکانات «xCRM فروش»',
			'ft_faq_intro' => 'پاسخ کوتاه به پرسش‌های رایج دربارهٔ ماژول‌ها، شروع کار و گردش‌کار اختصاصی.',
			'ft_faq_items' => array(
				array(
					'q' => 'آیا باید همهٔ امکانات را همزمان فعال کنم؟',
					'a' => 'خیر. امکانات به‌صورت ماژولار طراحی شده‌اند و دسترسی به هر قابلیت به پلن و تنظیمات شرکت شما بستگی دارد. بسیاری از تیم‌ها با پروفایل مشتری و ورود اطلاعات شروع می‌کنند و بقیهٔ ماژول‌ها را به‌تدریج فعال می‌کنند.',
				),
				array(
					'q' => 'برای شروع به چه چیزی نیاز دارم؟',
					'a' => 'یک حساب در داشبورد «xCRM فروش»، سپس ورود اطلاعات مشتریان (دستی یا فایل CSV، Excel، JSON و API) و در صورت نیاز، نصب اسکریپت SDK روی وب‌سایت برای ثبت رفتار بازدیدکنندگان.',
				),
				array(
					'q' => 'گردش‌کار اختصاصی n8n چیست؟',
					'a' => 'برای هر شرکت یک محیط n8n اختصاصی با پایگاه‌دادهٔ جدا در نظر گرفته می‌شود تا اتوماسیون‌های شما از داده‌های CRM استفاده کنند. شش گرهٔ اختصاصی xCRM برای ایجاد و به‌روزرسانی مشتری، ارسال پیامک و تلگرام و راه‌اندازی کمپین در این محیط نصب هستند. جزئیات بیشتر در صفحهٔ گردش‌کار اختصاصی ارائه می‌شود.',
				),
				array(
					'q' => 'برای اطلاع از قیمت و پلن‌ها چه کار کنم؟',
					'a' => 'در داشبورد می‌توانید پلن‌های موجود و امکانات هر پلن را بررسی کنید. برای دریافت راهنمای انتخاب پلن متناسب با حجم کاریتان، از مسیرهای ارتباطی موجود در داشبورد استفاده کنید.',
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
			'ft_cta_title'           => 'آماده‌اید امکانات را روی دادهٔ واقعی خودتان ببینید؟',
			'ft_cta_desc'            => 'در داشبورد «xCRM فروش» حساب بسازید، اطلاعات مشتریان را وارد کنید و از همان روز اول از پروفایل یکپارچه استفاده کنید.',
			'ft_cta_primary_url'     => $dash_url,
			'ft_cta_primary_label'   => 'شروع رایگان',
			'ft_cta_secondary_url'   => home_url( '/for-business/' ),
			'ft_cta_secondary_label' => 'مسیر کسب‌وکارها',
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
