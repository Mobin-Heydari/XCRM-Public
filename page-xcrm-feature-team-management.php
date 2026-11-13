<?php
/**
 * Template Name: Feature — Team Management
 * Template Post Type: page
 *
 * صفحهٔ جزئیات قابلیت — مدیریت تیم و دسترسی‌ها
 * /features/team-management/
 *
 * برچسب‌ها، نقش‌های پیش‌فرض (سیستمی)، ساختار مجوزها، پیام‌های
 * کارمند/نقش و صندلی‌ها از سورس واقعی محصول استخراج شده‌اند؛
 * شناسه‌های داخلی مجوز در این صفحه افشا نمی‌شوند.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_stylesheet_directory() . '/inc/features-data.php';

$home_url  = home_url( '/' );
$features  = home_url( '/features/' );
$canonical = home_url( '/features/team-management/' );
$dash_url  = 'https://dashboard.xcrmforosh.com/';

$page_title       = 'مدیریت تیم و دسترسی‌ها | «xCRM فروش»';
$page_description = 'کارمندان را با نقش و مجوزهای مشخص اضافه کنید؛ دسترسی‌های قابل انتخاب بر اساس پلن فیلتر می‌شود و کلیدهای API نیز دامنهٔ مجوز دارند.';
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
			array('@type'=>'ListItem','position'=>3,'name'=>'مدیریت تیم و دسترسی‌ها','item'=>esc_url($canonical)),
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
				<span class="ft__breadcrumb-current">مدیریت تیم و دسترسی‌ها</span>
			</nav>

			<span class="ft__label ft-anim ft-anim--1">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
				اعضای سازمان و سطوح دسترسی
			</span>

			<h1 class="ft__title ft-anim ft-anim--2">
				تیم خود را مدیریت کنید و <span class="text-gradient-primary">دسترسی هر عضو</span> را متناسب با مسئولیتش تعریف کنید
			</h1>

			<p class="ft__hero-desc ft-anim ft-anim--3">
				کارمندان را با نقش و مجوزهای مشخص اضافه کنید؛ دسترسی‌های قابل انتخاب بر اساس پلن
				فیلتر می‌شود و کلیدهای API نیز دامنهٔ مجوز دارند — از «اعضای سازمان» و «نقش‌های سازمانی»
				تا «سطوح دسترسی»، همه در فضای اختصاصی همان شرکت.
			</p>

			<div class="ft__hero-actions ft-anim ft-anim--4">
				<a href="<?php echo esc_url( $dash_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
					مدیریت دسترسی تیم
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="#roles" class="hp__btn hp__btn--ghost" data-magnetic>
					نقش‌ها را ببینید
				</a>
			</div>

			<ul class="ft__hero-pills ft-anim ft-anim--5" aria-label="نکات کلیدی">
				<li>۸ نقش پیش‌فرض + نقش سفارشی</li>
				<li>مجوزهای ریز، درختی و ماتریسی</li>
				<li>مجوز اضافی اختصاصی هر عضو</li>
				<li>دامنهٔ مجوز برای کلید API</li>
			</ul>
		</div>
	</section>

	<!-- ============ WHY STRUCTURED PERMISSIONS ============ -->
	<section class="ft__section ft__section--surface" id="why">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
					چرا ساختار دسترسی؟
				</span>
				<h2 class="ft__section-title">تیم بزرگ‌تر می‌شود، <span class="text-gradient-primary">دسترسی باید دقیق‌تر شود</span></h2>
				<p class="ft__section-desc">
					وقتی همه چیز را همه می‌بینند، یک خطای کوچک یک رکورد حساس را می‌سوزاند؛
					و وقتی دسترسی‌ها سلیقه‌ای باشند، هر عضو تازه یک پیکربندی دستی دیگر است.
				</p>
			</div>

			<div class="ft__grid ft__grid--caps">
				<article class="main-card ft__cap" data-reveal="up">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
					</span>
					<h3>همه‌چیز برای همه</h3>
					<p>بدون نقش، هر کارمند به همهٔ بخش‌ها دسترسی دارد — از صورتحساب تا حذف مشتری. ساختار نقش، مرز مسئولیت را مشخص می‌کند.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="60">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					</span>
					<h3>ورود پرهزینهٔ عضو جدید</h3>
					<p>بدون نقش آماده، هر بار از صفر مجوز انتخاب می‌کنید. نقش‌های پیش‌فرض و «کپی نقش»، ورود تیم را چندکلیکی می‌کنند.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="120">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
					</span>
					<h3>دسترسی فراتر از پلن</h3>
					<p>امکانات پلن‌ها متفاوت‌اند؛ مجوزهای قابل انتخاب باید با پلن شرکت هم‌خوان شوند — نه چیزی که هنوز خریداری نشده.</p>
				</article>
				<article class="main-card ft__cap" data-reveal="up" data-reveal-delay="180">
					<span class="ft__cap-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="15" r="4"/><path d="m10.85 12.15-1.42-1.42"/><path d="M16 8h.01"/><path d="M13.5 3.5 21 11"/><path d="m18 6 3 3"/></svg>
					</span>
					<h3>کلیدهای API بدون مرز</h3>
					<p>یک کلید وب‌سایت نباید به همه‌چیز دسترسی داشته باشد. کلیدها هم «دامنه دسترسی‌ها»ی خودشان را دارند.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ EMPLOYEE MANAGEMENT ============ -->
	<section class="ft__section" id="employees">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></svg>
					اعضای سازمان
				</span>
				<h2 class="ft__section-title">مدیریت <span class="text-gradient-primary">کارکنان</span></h2>
				<p class="ft__section-desc">
					«مدیریت اعضای تیم و دسترسی کارکنان به فضای کاری.» — از «کارمند جدید» تا
					ویرایش نقش و مجوزهای هر عضو، با ویزارد سه‌مرحله‌ای.
				</p>
				<ul class="ft__checklist">
					<li><strong>ویزارد «کارمند جدید»:</strong> «مرحله ۱ از ۳» کاربر (نام و تماس) ← «دسترسی» (نقش و مجوز) ← «بازبینی» (تأیید و ایجاد)</li>
					<li>فیلدها: «نام کامل»، «تلفن»، «ایمیل» و «رمز عبور» با راهنمای «حداقل ۸ کاراکتر»</li>
					<li><strong>روش عضویت:</strong> «دعوت»، «مدیریتی» یا «درخواست» + یادداشت اختیاری</li>
					<li>نماها و فیلترها: «همه / فعال / غیرفعال / مالک»، جستجوی «جستجوی کارکنان...»</li>
					<li>حالت خالی: «هنوز کارمندی ندارید» — «اولین کارمند خود را اضافه کنید.» + «کارکنان مطابق این نما نمایش داده می‌شوند.»</li>
					<li>حذف امن: «مالک شرکت قابل حذف نیست.» — و تکراری‌ها با «کارمند قبلاً عضو شرکت است» رد می‌شوند</li>
					<li>تأیید هویت هر عضو: «تلفن تأیید شده»، «ایمیل تأیید شده» و «2FA» در جزئیات عضو</li>
				</ul>
			</div>

			<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
				<figure class="ft__mock-wrap" style="margin: 0;">
					<div class="ft__xtbl-wrap">
						<table class="ft__xtbl">
							<thead>
								<tr>
									<th scope="col">کارمند</th>
									<th scope="col">نقش</th>
									<th scope="col">وضعیت</th>
									<th scope="col">مالک</th>
									<th scope="col">تاریخ عضویت</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><strong>علی رضایی</strong><span class="ft__xtbl-err" style="color: var(--x-text-muted);">ali@example.com</span></td>
									<td>مالک</td>
									<td><span class="ft__st ft__st--done">فعال</span></td>
									<td><span class="ft__tcard-cat">مالک</span></td>
									<td>۱۴۰۳/۰۱/۱۲</td>
								</tr>
								<tr>
									<td><strong>مریم احمدی</strong><span class="ft__xtbl-err" style="color: var(--x-text-muted);">maryam@example.com</span></td>
									<td>بازاریابی</td>
									<td><span class="ft__st ft__st--done">فعال</span></td>
									<td>—</td>
									<td>۱۴۰۳/۰۳/۰۴</td>
								</tr>
								<tr>
									<td><strong>رضا کریمی</strong><span class="ft__xtbl-err" style="color: var(--x-text-muted);">reza@example.com</span></td>
									<td>پشتیبانی</td>
									<td><span class="ft__st ft__st--cancelled">غیرفعال</span></td>
									<td>—</td>
									<td>۱۴۰۳/۰۵/۲۱</td>
								</tr>
								<tr>
									<td><strong>سارا موسوی</strong><span class="ft__xtbl-err" style="color: var(--x-text-muted);">sara@example.com</span></td>
									<td>مشاهده‌گر</td>
									<td><span class="ft__st ft__st--done">فعال</span></td>
									<td>—</td>
									<td>۱۴۰۳/۰۷/۰۹</td>
								</tr>
							</tbody>
						</table>
					</div>
					<figcaption class="ft__mock-caption">داده‌های نمونه — جدول «کارکنان» با ستون‌های کارمند/نقش/وضعیت/مالک/تاریخ عضویت</figcaption>
				</figure>

				<div class="ft__note-box" style="margin-top: 14px;">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
					<p style="margin: 0;">
						<strong>هر عضو، یک صندلی:</strong> هر کاربری که به داشبورد شرکت شما دسترسی پیدا کند
						یک صندلی محسوب می‌شود و وضعیت صندلی‌ها در بخش اشتراک قابل مشاهده است.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ CREATING & MANAGING ROLES ============ -->
	<section class="ft__section ft__section--surface" id="roles">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
					نقش‌های سازمانی
				</span>
				<h2 class="ft__section-title">هشت نقش پیش‌فرض + <span class="text-gradient-primary">نقش دلخواه شما</span></h2>
				<p class="ft__section-desc">
					«تعریف نقش‌های سازمانی و تعیین سطح دسترسی هر نقش.» با هر شرکت جدید،
					این نقش‌های سیستمی کاشت می‌شوند و برچسب «پیش‌فرض» دارند؛ هر شرکت می‌تواند
					نقش سفارشی خودش را هم بسازد — مثلاً «فروش» یا «مدیر پروژه».
				</p>
			</div>

			<div class="ft__grid ft__grid--cards" data-reveal="up">
				<article class="main-card ft__role">
					<div class="ft__role-head">
						<span class="ft__role-dot ft__role-dot--purple" aria-hidden="true"></span>
						<h3 class="ft__role-name">مالک</h3>
						<span class="ft__role-chip">سیستمی</span>
						<span class="ft__role-chip ft__role-chip--default">پیش‌فرض</span>
					</div>
					<p class="ft__role-desc">بنیان‌گذار شرکت — به‌عنوان «مالک» در فهرست کارکنان هم علامت‌گذاری می‌شود.</p>
					<div class="ft__role-scope">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>
						دامنه: همهٔ مجوزهای فعال شرکت
					</div>
				</article>

				<article class="main-card ft__role" data-reveal="up" data-reveal-delay="40">
					<div class="ft__role-head">
						<span class="ft__role-dot" aria-hidden="true"></span>
						<h3 class="ft__role-name">مدیر</h3>
						<span class="ft__role-chip">سیستمی</span>
						<span class="ft__role-chip ft__role-chip--default">پیش‌فرض</span>
					</div>
					<p class="ft__role-desc">مدیریت کامل شرکت برای تیم‌های اجرایی — دومین نقش با دسترسی سراسری.</p>
					<div class="ft__role-scope">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>
						دامنه: همهٔ مجوزهای فعال شرکت
					</div>
				</article>

				<article class="main-card ft__role" data-reveal="up" data-reveal-delay="80">
					<div class="ft__role-head">
						<span class="ft__role-dot ft__role-dot--info" aria-hidden="true"></span>
						<h3 class="ft__role-name">مدیرعامل</h3>
						<span class="ft__role-chip">سیستمی</span>
						<span class="ft__role-chip ft__role-chip--default">پیش‌فرض</span>
					</div>
					<p class="ft__role-desc">دسترسی گستردهٔ روزمره: مشتریان، کمپین‌ها و گردش‌کارها، گروه‌ها و پیپلاین‌ها، مالی، شرکت، CRM، ارتباطات و گزارش‌ها — به‌علاوهٔ مشاهدهٔ بقیهٔ بخش‌ها.</p>
					<div class="ft__role-scope">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/></svg>
						دامنه: مجموعهٔ وسیع دسته‌ها + مشاهده
					</div>
				</article>

				<article class="main-card ft__role" data-reveal="up" data-reveal-delay="120">
					<div class="ft__role-head">
						<span class="ft__role-dot ft__role-dot--muted" aria-hidden="true"></span>
						<h3 class="ft__role-name">عضو</h3>
						<span class="ft__role-chip">سیستمی</span>
						<span class="ft__role-chip ft__role-chip--default">پیش‌فرض</span>
					</div>
					<p class="ft__role-desc">کار روزمرهٔ تیم: مشتریان، گروه‌ها و فرآیند فروش، شرکت، CRM، ارتباطات و مشاهدهٔ بخش‌های عمومی.</p>
					<div class="ft__role-scope">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
						دامنه: عملیات روزمره + مشاهده
					</div>
				</article>

				<article class="main-card ft__role" data-reveal="up" data-reveal-delay="40">
					<div class="ft__role-head">
						<span class="ft__role-dot ft__role-dot--warn" aria-hidden="true"></span>
						<h3 class="ft__role-name">مشاهده‌گر</h3>
						<span class="ft__role-chip">سیستمی</span>
						<span class="ft__role-chip ft__role-chip--default">پیش‌فرض</span>
					</div>
					<p class="ft__role-desc">فقط خواندن — برای مشاوران، سرمایه‌گذاران یا هر عضوی که فقط باید ببیند.</p>
					<div class="ft__role-scope">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
						دامنه: فقط مجوزهای مشاهده
					</div>
				</article>

				<article class="main-card ft__role" data-reveal="up" data-reveal-delay="80">
					<div class="ft__role-head">
						<span class="ft__role-dot ft__role-dot--success" aria-hidden="true"></span>
						<h3 class="ft__role-name">پشتیبانی</h3>
						<span class="ft__role-chip">سیستمی</span>
						<span class="ft__role-chip ft__role-chip--default">پیش‌فرض</span>
					</div>
					<p class="ft__role-desc">خدمت به مشتری: مشتریان، CRM، ارتباطات و مشتری عمومی — بدون دسترسی مالی.</p>
					<div class="ft__role-scope">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg>
						دامنه: مشتریان و ارتباطات + مشاهده
					</div>
				</article>

				<article class="main-card ft__role" data-reveal="up" data-reveal-delay="120">
					<div class="ft__role-head">
						<span class="ft__role-dot ft__role-dot--error" aria-hidden="true"></span>
						<h3 class="ft__role-name">بازاریابی</h3>
						<span class="ft__role-chip">سیستمی</span>
						<span class="ft__role-chip ft__role-chip--default">پیش‌فرض</span>
					</div>
					<p class="ft__role-desc">کمپین‌ها و گردش‌کارها، گروه‌ها و پیپلاین‌ها، CRM و ارتباطات — دنیای رشد و کمپین.</p>
					<div class="ft__role-scope">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
						دامنه: بازاریابی و مشتریان + مشاهده
					</div>
				</article>

				<article class="main-card ft__role" data-reveal="up" data-reveal-delay="160">
					<div class="ft__role-head">
						<span class="ft__role-dot ft__role-dot--cyan" aria-hidden="true"></span>
						<h3 class="ft__role-name">مالی</h3>
						<span class="ft__role-chip">سیستمی</span>
						<span class="ft__role-chip ft__role-chip--default">پیش‌فرض</span>
					</div>
					<p class="ft__role-desc">پرداخت، کیف پول، اشتراک، پلن‌ها و صورتحساب — حوزهٔ مالی بدون دسترسی عملیاتی.</p>
					<div class="ft__role-scope">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="6" width="20" height="12" rx="2"/><circle cx="12" cy="12" r="2"/><path d="M6 12h.01"/><path d="M18 12h.01"/></svg>
						دامنه: مالی و اشتراک + مشاهده
					</div>
				</article>
			</div>

			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">
				این‌ها نقش‌های پیش‌فرض (سیستمی) کاشت‌شده در محصول‌اند و دامنهٔ مجوزهایشان از پیکربندی واقعی خوانده شده؛
				نقش‌ها و مجوزهای نهایی هر شرکت قابل تنظیم‌اند. برچسب‌ها: «سیستمی» (قابل حذف/ویرایش نیست) و «پیش‌فرض».
			</p>

			<div class="ft__split" style="margin-top: clamp(28px, 4vw, 40px);">
				<div class="ft__split-copy" data-reveal="up">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li><strong>ساخت:</strong> «نقش جدید» با ویزارد «هویت» (نام و رنگ) ← «دسترسی‌ها» (مجوزهای نقش) ← «بازبینی»</li>
						<li>فیلدها: «نام نقش» (مثلاً: مدیر پروژه)، «توضیحات» و «حداکثر اعضا» (خالی = نامحدود)</li>
						<li><strong>کپی نقش:</strong> دکمهٔ «کپی» روی نقش سفارشی ← «نقش با موفقیت کپی شد» — نام کپی «{نام} (کپی)» می‌گیرد</li>
						<li><strong>مقایسه:</strong> تب «مقایسه» با «نقش مقایسه» — مجوزهای «مشترک» و «فقط «…»» بین دو نقش</li>
						<li>حذف امن: «نقش‌های سیستمی قابل حذف نیستند.» و هشدار «کارکنان این نقش دسترسی‌های خود را از دست خواهند داد.»</li>
						<li>جستجو و نماها: «جستجوی نقش‌ها...»، «همه / سیستمی / سفارشی»</li>
					</ul>
				</div>
				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<div class="ft__arch ft__arch--v">
						<div class="ft__arch-step">
							<span class="ft__arch-num" aria-hidden="true">۱</span>
							<span class="ft__arch-icon" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
							</span>
							<h3>هویت</h3>
							<p>نام نقش، توضیحات و رنگ نمایشی + برچسب سیستمی/سفارشی.</p>
						</div>
						<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
						<div class="ft__arch-step">
							<span class="ft__arch-num" aria-hidden="true">۲</span>
							<span class="ft__arch-icon ft__arch-icon--info" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
							</span>
							<h3>دسترسی‌ها</h3>
							<p>«{n} از {m} مجوز انتخاب شده» با «انتخاب همه» و «لغو همه» روی هر دسته.</p>
						</div>
						<svg class="ft__arch-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
						<div class="ft__arch-step">
							<span class="ft__arch-num" aria-hidden="true">۳</span>
							<span class="ft__arch-icon ft__arch-icon--success" aria-hidden="true">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
							</span>
							<h3>بازبینی</h3>
							<p>«بازبینی نهایی پیش از ایجاد» و ثبت با «ایجاد نقش».</p>
						</div>
					</div>
					<p class="ft__mock-caption">ویزارد ساخت نقش — سه مرحله</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ GRANULAR PERMISSIONS ============ -->
	<section class="ft__section" id="permissions">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m3 10 9-7 9 7v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M9 22V12h6v10"/></svg>
					سطوح دسترسی
				</span>
				<h2 class="ft__section-title">مجوزهای ریز، <span class="text-gradient-primary">درختی و ماتریسی</span></h2>
				<p class="ft__section-desc">
					«مدیریت مجوزهای جزئی و کنترل دسترسی به قابلیت‌های سیستم.» — کاتالوگ مجوز
					۳۶ قابلیت، حدود ۱۲۰ مجوز اتمی و ۱۰ دستهٔ نمایشی دارد و در دو نمای «درخت» و «ماتریس نقش‌ها» مرور می‌شود.
				</p>
			</div>

			<div class="ft__split">
				<div class="ft__split-copy" data-reveal="up">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li><strong>نماها:</strong> «درخت» و «ماتریس نقش‌ها» + جستجوی «جستجو در مجوزها...»</li>
						<li>شمارندهٔ بالای صفحه: «{n} مجوز · {m} قابلیت · {k} دسته» — عدد زنده از کاتالوگ شرکت</li>
						<li>دسته‌های نمایشی: سناریو‌های اتوماسیون، شرکت، کاربران، مالی، مدیریت CRM، گزارش، سیستم، مدیریت مشتریان، تلگرام و بازاریابی اتوماسیون</li>
						<li>هر مجوز یک عبارت نام‌دار است: «مشاهده کارکنان»، «ایجاد کارمند»، «ویرایش کارمند»، «حذف کارمند»، «مدیریت مجوزها»، «همگام‌سازی ورکفلو نیتن»…</li>
						<li>پیش‌نمایش مجوزها در صفحهٔ اختصاصی «مدیریت سطوح دسترسی» — بدون نمایش شناسه‌های داخلی</li>
						<li>حالت خالی ماتریس: «نقشی وجود ندارد» — «برای مشاهده ماتریس، ابتدا نقشی در صفحه نقش‌ها بسازید.»</li>
					</ul>

					<div class="ft__note-box" style="margin-top: 18px;">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
						<p style="margin: 0;">
							<strong>نکتهٔ صادقانه:</strong> ماتریس زیر نمای ساده‌شدهٔ انتخاب مجوزهاست —
							در محصول واقعی، هر خانه یک مجوز نام‌دار مشخص است و مجوزها با نام فارسی خودشان
							(و نه شناسهٔ عددی) نمایش داده می‌شوند.
						</p>
					</div>
				</div>

				<div class="ft__split-visual" data-reveal="up" data-reveal-delay="100">
					<div class="ft__perm-wrap">
						<div class="ft__perm-head">
							<span>انتخاب مجوزهای نقش — ماتریس ساده‌شده</span>
							<span class="ft__perm-count">۱۲ از ۱۲۰ مجوز انتخاب شده</span>
						</div>
						<div class="ft__perm-scroll">
							<table class="ft__perm">
								<thead>
									<tr>
										<th scope="col">دسته / قابلیت</th>
										<th scope="col">مشاهده</th>
										<th scope="col">ایجاد</th>
										<th scope="col">ویرایش</th>
										<th scope="col">حذف</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>کارکنان</td>
										<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
										<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
										<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
										<td><span class="ft__perm-no" aria-label="ندارد">—</span></td>
									</tr>
									<tr>
										<td>نقش‌ها</td>
										<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
										<td><span class="ft__perm-no" aria-label="ندارد">—</span></td>
										<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
										<td><span class="ft__perm-no" aria-label="ندارد">—</span></td>
									</tr>
									<tr>
										<td>مشتری‌ها</td>
										<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
										<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
										<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
										<td><span class="ft__perm-no" aria-label="ندارد">—</span></td>
									</tr>
									<tr>
										<td>گروه‌ها</td>
										<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
										<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
										<td><span class="ft__perm-no" aria-label="ندارد">—</span></td>
										<td><span class="ft__perm-no" aria-label="ندارد">—</span></td>
									</tr>
									<tr>
										<td>ارتباطات</td>
										<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
										<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
										<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
										<td><span class="ft__perm-no" aria-label="ندارد">—</span></td>
									</tr>
									<tr>
										<td>گزارش‌ها</td>
										<td><span class="ft__perm-yes" aria-label="دارد"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg></span></td>
										<td><span class="ft__perm-no" aria-label="ندارد">—</span></td>
										<td><span class="ft__perm-no" aria-label="ندارد">—</span></td>
										<td><span class="ft__perm-no" aria-label="ندارد">—</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<p class="ft__perm-caption">داده‌های نمونه — تیک‌ها انتخاب کاربر در همان لحظه‌اند، نه پیکربندی پیش‌فرض هیچ نقشی. در محصول: «دسته / قابلیت / مجوز» با مجوزهای نام‌دار.</p>
					</div>

					<div class="ft__note-box ft__note-box--info" style="margin-top: 14px;">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
						<p style="margin: 0;">
							<strong>دسترسی غیرمجاز صادقانه:</strong> بدون مجوز لازم، بخش باز نمی‌شود —
							«دسترسی محدود» + «شما اجازه مشاهده این بخش را ندارید. با مدیر سیستم تماس بگیرید.»
							و تعداد «{n} مجوز مورد نیاز» نمایش داده می‌شود.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ ROLE VS EMPLOYEE-SPECIFIC PERMISSIONS ============ -->
	<section class="ft__section ft__section--surface" id="extra-perms">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 5v14"/><path d="M5 12h14"/></svg>
					مجوز اضافی
				</span>
				<h2 class="ft__section-title">نقش + <span class="text-gradient-primary">مجوز اختصاصی فرد</span> = دسترسی نهایی</h2>
				<p class="ft__section-desc">
					هر عضو دو لایهٔ مجوز دارد: مجوزهای پایه از نقش، و «مجوزهای اضافی» اختصاصی خودش —
					دسترسی نهایی، اجتماع هر دو است.
				</p>
			</div>

			<div class="ft__math" data-reveal="up" aria-label="نقش به‌علاوه مجوزهای اضافی برابر است با مجوز مؤثر">
				<div class="ft__math-item">
					<b>نقش</b>
					<span>مجوزهای نقش (۱۸)<br>از پیکربندی نقش</span>
				</div>
				<span class="ft__math-op" aria-hidden="true">+</span>
				<div class="ft__math-item">
					<b>اضافی</b>
					<span>مجوزهای اضافی (۳)<br>اختصاصی همین عضو</span>
				</div>
				<span class="ft__math-op" aria-hidden="true">=</span>
				<div class="ft__math-item ft__math-item--final">
					<b>نهایی</b>
					<span>مجوز مؤثر — ۲۱ مجوز فعال</span>
				</div>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">داده‌های نمونه — ریاضی مجوز در جزئیات عضو: «نقش + اضافی = نهایی»</p>

			<div class="ft__split" style="margin-top: clamp(28px, 4vw, 40px);">
				<div class="ft__split-copy" data-reveal="up">
					<ul class="ft__checklist" style="margin-top: 0;">
						<li><strong>در ویزارد عضو:</strong> بخش «نقش سازمانی» با راهنمای «مجوزهای پایه از نقش انتخابی است» و بخش «مجوزهای اضافی» برای تکمیل</li>
						<li><strong>قفل نقش:</strong> «مجوزهای نقش قفل‌اند؛ فقط مجوزهای اضافی قابل ویرایش است» — تغییر پایه فقط از خود نقش</li>
						<li>راهنمای tooltip: «از طرف نقش اعطاشده — برای تغییر، نقش را ویرایش کنید»</li>
						<li><strong>بدون نقش:</strong> گزینهٔ «بدون نقش» با برچسب «permission اختصاصی» — «فقط مجوزهای اضافی انتخاب می‌شوند»</li>
						<li>در جزئیات عضو: بخش‌های «مجوزهای نقش ({n})»، «مجوزهای اضافی ({n})» و «{n} مجوز فعال»</li>
						<li>تغییر نقش از جزئیات: «تغییر نقش» ← «ذخیره نقش» ← «نقش با موفقیت تغییر کرد»</li>
					</ul>
				</div>
				<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
					<div class="main-card ft__form">
						<div class="ft__form-head">
							<h3>مجوزهای اضافی — مریم احمدی</h3>
							<p>تکمیل‌کنندهٔ نقش «بازاریابی» فقط برای همین عضو.</p>
						</div>
						<div class="ft__form-chips" aria-label="نمونه مجوزهای اضافی">
							<span class="ft__form-chip ft__form-chip--on">ایجاد کمپین (API)</span>
							<span class="ft__form-chip ft__form-chip--on">مشاهده گزارش‌ها</span>
							<span class="ft__form-chip ft__form-chip--on">مدیریت SDK</span>
						</div>
						<div class="ft__form-foot">
							<p class="ft__form-note">مجوزهای پایهٔ نقش در اینجا غیرقابل تغییرند — برای ویرایش آن‌ها، نقش را ویرایش کنید.</p>
							<div class="ft__form-btns">
								<span class="ft__form-btn ft__form-btn--ghost">انصراف</span>
								<span class="ft__form-btn">مجوزها با موفقیت ذخیره شد</span>
							</div>
						</div>
					</div>
					<p class="ft__mock-caption">نمایش تزئینی — ویرایش مجوزهای اضافی یک عضو</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ PLAN-BASED ACCESS ============ -->
	<section class="ft__section" id="plan">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 2v20"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
					دسترسی بر اساس پلن
				</span>
				<h2 class="ft__section-title">مجوزهای قابل انتخاب، <span class="text-gradient-primary">هم‌راستا با پلن</span></h2>
				<p class="ft__section-desc">
					کاتالوگ مجوزی که برای نقش، عضو یا کلید API انتخاب می‌کنید، ابتدا با امکانات
					پلن فعال شرکت بریده می‌شود — امکانی که خریداری نشده، مجوز هم ندارد.
				</p>
				<ul class="ft__checklist">
					<li><strong>فیلتر در زمان انتخاب:</strong> فهرست مجوزهای موجود («درخت») از ابتدا فقط مجوزهای مجازِ پلن را نشان می‌دهد</li>
					<li>اعمال روی هر سه: به‌روزرسانی مجوزهای نقش، مجوزهای اضافیِ عضو و دامنهٔ کلیدهای API</li>
					<li><strong>اشتراک منقضی یا معلق:</strong> دسترسی‌ها به‌جز بخش اشتراک بسته می‌شود تا بتوانید پلن را ببینید و تمدید کنید</li>
					<li>بدون اشتراک = سطح پایهٔ رایگان؛ بررسی‌های سطح دسترسی همیشه «بسته» (fail-closed) عمل می‌کنند</li>
					<li>پیام‌های مرتبط: «دسترسی غیرمجاز» در سرور و «دسترسی محدود» در رابط کاربری</li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="main-card ft__form">
					<div class="ft__form-head">
						<h3>درخت مجوزهای مجازِ پلن</h3>
						<p>فقط بخش‌های فعال‌شده در اشتراک، قابل انتخاب‌اند.</p>
					</div>
					<div class="ft__form-grid">
						<div class="ft__field">
							<span class="ft__field-label">دستهٔ فعال</span>
							<span class="ft__field-val">کاربران — مشتری‌ها، گروه‌ها، فرآیندفروش</span>
						</div>
						<div class="ft__field">
							<span class="ft__field-label">دستهٔ فعال</span>
							<span class="ft__field-val">شرکت — کارکنان، نقش‌ها، رویدادها</span>
						</div>
						<div class="ft__field">
							<span class="ft__field-label">دستهٔ فعال</span>
							<span class="ft__field-val">گزارش — گزارش‌ها</span>
						</div>
						<div class="ft__field">
							<span class="ft__field-label">خارج از پلن</span>
							<span class="ft__field-val ft__field-val--muted">در فهرست انتخاب نمایش داده نمی‌شود</span>
						</div>
					</div>
					<div class="ft__form-foot">
						<p class="ft__form-note">نمایش تزئینی — این صفحه شناسه یا کد داخلی مجوزی نشان نمی‌دهد.</p>
					</div>
				</div>

				<div class="ft__note-box ft__note-box--info" style="margin-top: 14px;">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
					<p style="margin: 0;">
						<strong>چرا این مهم است:</strong> بدون این فیلتر، یک مدیر می‌توانست مجوزهایی
						بدهد که پلن شرکت پشتیبانی‌شان نمی‌کند — اینجا سیستم خودش جلوی ناهماهنگی را می‌گیرد.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ API KEY PERMISSIONS ============ -->
	<section class="ft__section ft__section--surface" id="apikeys">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="8" cy="15" r="4"/><path d="m10.85 12.15-1.42-1.42"/><path d="M16 8h.01"/><path d="M13.5 3.5 21 11"/><path d="m18 6 3 3"/></svg>
					کلیدهای API
				</span>
				<h2 class="ft__section-title">کلید API هم <span class="text-gradient-primary">دامنهٔ مجوز</span> دارد</h2>
				<p class="ft__section-desc">
					کلیدهای API شرکت فقط با «دامنه دسترسی‌های» انتخابی ساخته می‌شوند —
					همان کاتالوگ مجوز، این‌بار برای ماشین‌ها به‌جای انسان‌ها.
				</p>
				<ul class="ft__checklist">
					<li><strong>دامنه دسترسی‌ها:</strong> گروه‌های مجوزی مثل «مشتری‌ها»، «اتوماسیون‌ها»، «شرکت»، «گروه‌ها»، «گزارشات» و «n8n»</li>
					<li>فیلدهای کلید: «نام کلید» (مثلاً: کلید وب‌سایت)، «پیشوند کلید»، «تاریخ انقضا» و وضعیت «فعال»</li>
					<li><strong>نمایش یک‌باره:</strong> مقدار کلید پس از ایجاد نمایش داده می‌شود؛ حذف با «کد تایید» دو مرحله‌ای</li>
					<li>نماها: «همه / فعال / باطل شده» + جستجوی «جستجوی کلیدها...»</li>
					<li>راهنمای سه‌قدمی: «ایجاد کلید» ← «افزودن به هدر» ← «اعتبارسنجی»</li>
					<li>بهترین شیوه‌های خود محصول: «حداقل دسترسی» — «فقط مجوزهای ضروری را اختصاص دهید»، «چرخش دوره‌ای» و «عدم افشا»</li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="main-card ft__form">
					<div class="ft__form-head">
						<h3>کلید وب‌سایت</h3>
						<p>دامنه دسترسی‌ها — فقط مجوزهای ضروری این یکپارچه‌سازی.</p>
					</div>
					<div class="ft__form-grid">
						<div class="ft__field">
							<span class="ft__field-label">نام کلید</span>
							<span class="ft__field-val">کلید وب‌سایت</span>
						</div>
						<div class="ft__field">
							<span class="ft__field-label">پیشوند کلید</span>
							<span class="ft__field-val ft__field-val--ltr">xcrm_live_8f2…</span>
						</div>
						<div class="ft__field">
							<span class="ft__field-label">تاریخ انقضا</span>
							<span class="ft__field-val">۱۴۰۴/۰۵/۰۱</span>
						</div>
						<div class="ft__field">
							<span class="ft__field-label">وضعیت</span>
							<span class="ft__field-val">فعال</span>
						</div>
					</div>
					<div class="ft__form-chips" aria-label="دامنه دسترسی‌های انتخابی">
						<span class="ft__form-chip ft__form-chip--on">مشتری‌ها</span>
						<span class="ft__form-chip ft__form-chip--on">گروه‌ها</span>
						<span class="ft__form-chip ft__form-chip--on">گزارشات</span>
						<span class="ft__form-chip">اتوماسیون‌ها</span>
						<span class="ft__form-chip">شرکت</span>
					</div>
					<div class="ft__form-foot">
						<p class="ft__form-note">تیک‌ها = دامنهٔ همین کلید؛ کلید بدون دامنه، جایی برای اجرا ندارد.</p>
						<div class="ft__form-btns">
							<span class="ft__form-btn ft__form-btn--ghost">راهنما</span>
							<span class="ft__form-btn">نمونه کد</span>
						</div>
					</div>
				</div>
				<p class="ft__mock-caption">نمایش تزئینی — فهرست کلیدها با تب‌های «کلیدها / راهنما / نمونه کد»</p>

				<div class="ft__note-box" style="margin-top: 14px;">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
					<p style="margin: 0;">
						دامنهٔ کلید هم مثل مجوزهای نقش، بر اساس پلن شرکت فیلتر می‌شود؛
						کلیدهای سیستمی n8n و وردپرس هم سازوکار دامنهٔ خودشان را دارند.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ TEAM GROWTH & SEATS ============ -->
	<section class="ft__section" id="seats">
		<div class="ft__inner ft__split">
			<div class="ft__split-copy" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					رشد تیم و صندلی‌ها
				</span>
				<h2 class="ft__section-title">هر عضو، یک <span class="text-gradient-primary">صندلی</span> — سقف، بر اساس پلن</h2>
				<p class="ft__section-desc">
					«مصرف صندلی‌ها (کاربران فعال)» در بخش اشتراک نمایش داده می‌شود:
					تعداد استفاده‌شده، سقف پلن و صندلی‌های باقی‌مانده.
				</p>
				<ul class="ft__checklist">
					<li><strong>تعریف صندلی (نسخهٔ رسمی محصول):</strong> «هر کاربری که به داشبورد شرکت شما دسترسی پیدا کند یک صندلی محسوب می‌شود. می‌توانید در بخش کارکنان، صندلی‌ها را مدیریت کنید و در صورت نیاز به سقف بالاتر، پلن خود را ارتقا دهید.»</li>
					<li>نمایش: «{used} / {max}» یا «{used} از ∞» برای پلن بدون سقف + «{n} صندلی خالی»</li>
					<li>دو وضعیت: «امکان افزودن صندلی جدید وجود دارد» یا «سقف صندلی‌ها تکمیل شده است»</li>
					<li><strong>سقف صندلی پلن‌های فعلی:</strong> رایگان ۵۰ · پایه ۵۰۰ · پیشرفته بدون سقف · حرفه‌ای ۵۰۰۰ کاربر فعال</li>
					<li>سقف همچنین به‌صورت «حداکثر اعضا» روی خودِ نقش هم قابل تنظیم است (خالی = نامحدود)</li>
				</ul>
			</div>

			<div class="ft__split-visual ft__visual-col" data-reveal="up" data-reveal-delay="100">
				<div class="ft__seat">
					<div class="ft__seat-head">
						<span>مصرف صندلی‌ها (کاربران فعال)</span>
						<span>۷ / ۵۰</span>
					</div>
					<div class="ft__seat-track" aria-hidden="true">
						<span class="ft__seat-fill" style="width: 14%;"></span>
					</div>
					<div class="ft__seat-foot">
						<span>۴۳ صندلی خالی</span>
						<span class="ft__seat-state">امکان افزودن صندلی جدید وجود دارد</span>
					</div>
				</div>
				<p class="ft__mock-caption">داده‌های نمونه — کارت صندلی‌ها در بخش اشتراک (پلن رایگان، سقف ۵۰)</p>

				<div class="ft__seat" style="margin-top: 14px;">
					<div class="ft__seat-head">
						<span>مصرف صندلی‌ها (کاربران فعال)</span>
						<span>۵۰ / ۵۰</span>
					</div>
					<div class="ft__seat-track" aria-hidden="true">
						<span class="ft__seat-fill" style="width: 100%;"></span>
					</div>
					<div class="ft__seat-foot">
						<span>۰ صندلی خالی</span>
						<span class="ft__seat-state ft__seat-state--full">سقف صندلی‌ها تکمیل شده است</span>
					</div>
				</div>
				<p class="ft__mock-caption">داده‌های نمونه — حالت پر بودن سقف صندلی</p>

				<div class="ft__note-box ft__note-box--info" style="margin-top: 14px;">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
					<p style="margin: 0;">
						<strong>شفاف دربارهٔ سقف:</strong> صندلی‌ها در بخش اشتراک <strong>نمایش و پیگیری</strong> می‌شوند
						و راه افزایش سقف، ارتقای پلن است — این صفحه ادعا نمی‌کند افزودن عضو همیشه به‌صورت سخت
						توسط سقف مسدود می‌شود.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ PRACTICAL EXAMPLES ============ -->
	<section class="ft__section ft__section--surface" id="examples">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
					سناریوهای عملی
				</span>
				<h2 class="ft__section-title">چهار تیم، <span class="text-gradient-primary">چهار ساختار دسترسی</span></h2>
				<p class="ft__section-desc">
					نمونه‌هایی از ترکیب نقش‌های پیش‌فرض و مجوزهای اختصاصی — دقیقاً با امکانات پیاده‌سازی‌شده.
				</p>
			</div>

			<div class="ft__grid ft__grid--cases">
				<article class="main-card ft__scen" data-reveal="up">
					<span class="ft__case-badge">استارت‌آپ کوچک</span>
					<h3>سه نفر، سه سطح</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">ترکیب</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">«مالک» برای بنیان‌گذار، «عضو» برای تیم روزمره و «مشاهده‌گر» برای مشاور — بدون هیچ مجوز دستی اضافه.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">نتیجه</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">هر عضو فقط دنیای خودش را می‌بیند؛ مالک همه‌جا.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="60">
					<span class="ft__case-badge">تیم فروش و بازاریابی</span>
					<h3>نقش پیش‌فرض + یک نقش سفارشی</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">ترکیب</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">«بازاریابی» برای کمپین و گروه‌ها + نقش سفارشی «فروش» با «نقش جدید» — مجوزهای فروش، بدون دست زدن به بقیه.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">نتیجه</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">نیروی فروش فقط سرنخ و فرآیند فروش را می‌بیند؛ بازاریابی کمپین‌ها را.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="120">
					<span class="ft__case-badge">پشتیبانی مشتریان</span>
					<h3>دسترسی بدون مالی</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">ترکیب</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">نقش «پشتیبانی» (مشتریان، CRM، ارتباطات) + مجوز اضافی «مشاهده گزارش‌ها» فقط برای سرپرست شیفت.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">نتیجه</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">پاسخ به مشتری بدون دسترسی به صورتحساب — استثناها هم ثبت‌شده‌اند.</p>
					</div>
				</article>

				<article class="main-card ft__scen" data-reveal="up" data-reveal-delay="180">
					<span class="ft__case-badge">یکپارچه‌ساز وب</span>
					<h3>کلید API با دامنهٔ باریک</h3>
					<div class="ft__scen-block">
						<span class="ft__scen-label">ترکیب</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">«کلید وب‌سایت» با دامنهٔ «مشتری‌ها + گروه‌ها + گزارشات»، بدون دسترسی شرکت و بدون امکانات مالی.</p>
					</div>
					<div class="ft__scen-block">
						<span class="ft__scen-label ft__scen-label--act">نتیجه</span>
						<p class="ft__scn-desc" style="margin-bottom: 0;">وب‌سایت فقط ثبت سرنخ می‌کند؛ کلید لو رفت هم فایده‌ای ندارد.</p>
					</div>
				</article>
			</div>
			<p class="ft__mock-caption" style="text-align: start;" data-reveal="up">سناریوهای نمونه با نقش‌ها و مجوزهای واقعی — ترکیب نهایی را خودتان در داشبورد می‌سازید.</p>

			<div class="ft__related-links" data-reveal="up" style="margin-top: clamp(26px, 3.5vw, 36px);">
				<a href="<?php echo esc_url( home_url( '/features/sales-pipeline/' ) ); ?>" class="ft__related-link">
					فرآیند فروش تیمی
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/segmentation/' ) ); ?>" class="ft__related-link">
					دسترسی به گروه‌های مشتریان
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/features/workflow-automation/' ) ); ?>" class="ft__related-link">
					کلید API و گردش‌کار n8n
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
			'q' => 'فرق نقش و مجوز چیست؟',
			'a' => 'مجوز یک دسترسی اتمی و نام‌دار است (مثل «مشاهده کارکنان» یا «ایجاد کارمند»)؛ نقش یک <strong>مجموعهٔ مجوز</strong> است که به چند نفر با هم تعلق می‌گیرد. صفحهٔ «مدیریت سطوح دسترسی» کل درخت مجوز را در دو نمای «درخت» و «ماتریس نقش‌ها» نشان می‌دهد و صفحهٔ «نقش‌های سازمانی» برای هر نقش مجوزها را ویرایش می‌کنید.',
		),
		array(
			'q' => 'نقش‌های پیش‌فرض کدام‌اند؟',
			'a' => 'با ساخت هر شرکت، هشت نقش سیستمی کاشت می‌شود: <strong>مالک، مدیر، مدیرعامل، عضو، مشاهده‌گر، پشتیبانی، بازاریابی و مالی</strong> — همه با برچسب «سیستمی» و «پیش‌فرض». «مالک» و «مدیر» به همهٔ مجوزهای فعال شرکت دسترسی دارند؛ بقیه دسته‌های محدودتر (عملیات روزمره، فقط مشاهده، پشتیبانی، بازاریابی، مالی). نقش‌های سیستمی قابل حذف و ویرایش نیستند؛ برای تغییر، نقش سفارشی خودتان را بسازید (مثلاً «فروش» یا «مدیر پروژه»).',
		),
		array(
			'q' => 'مجوز اضافیِ اختصاصی یک عضو چیست؟',
			'a' => 'کنار مجوزهای نقش، هر کارمند می‌تواند «مجوزهای اضافی» مخصوص خودش را داشته باشد: <strong>دسترسی نهایی = مجوزهای نقش + مجوزهای اضافی</strong>. مجوزهای نقش قفل‌اند و فقط از خودِ نقش ویرایش می‌شوند؛ در ویزارد عضو هم گزینهٔ «بدون نقش» هست که فقط با مجوزهای اضافی کار می‌کند.',
		),
		array(
			'q' => 'چرا بعضی مجوزها در پلن ما نیست؟',
			'a' => 'چون دسترسی‌های قابل انتخاب با <strong>پلن فعال شرکت</strong> فیلتر می‌شوند: فهرست مجوزهای موجود از ابتدا فقط امکاناتی را نشان می‌دهد که پلن شما پوشش می‌دهد — هم برای نقش، هم برای عضو و هم برای کلید API. اگر اشتراک منقضی یا معلق شود، دسترسی‌ها به‌جز بخش اشتراک بسته می‌شود تا بتوانید پلن را تمدید کنید؛ بدون اشتراک هم سطح پایهٔ رایگان برقرار است.',
		),
		array(
			'q' => 'کلید API چطور محدود می‌شود؟',
			'a' => 'هنگام ساخت کلید، «دامنه دسترسی‌ها» را از همان کاتالوگ مجوز انتخاب می‌کنید (مثل «مشتری‌ها»، «گروه‌ها»، «گزارشات») — کلید فقط در همین دامنه کار می‌کند. مقدار کلید یک‌بار نمایش داده می‌شود، حذفش با «کد تایید» دو مرحله‌ای است و خود محصول هم توصیه می‌کند: «فقط مجوزهای ضروری را اختصاص دهید»، «چرخش دوره‌ای» و «عدم افشا».',
		),
		array(
			'q' => 'صندلی تیم چطور محاسبه می‌شود؟',
			'a' => 'به گفتهٔ خود محصول: «هر کاربری که به داشبورد شرکت شما دسترسی پیدا کند یک صندلی محسوب می‌شود. می‌توانید در بخش کارکنان، صندلی‌ها را مدیریت کنید و در صورت نیاز به سقف بالاتر، پلن خود را ارتقا دهید.» مصرف در بخش اشتراک با وضعیت‌های «امکان افزودن صندلی جدید وجود دارد» یا «سقف صندلی‌ها تکمیل شده است» نمایش داده می‌شود؛ سقف پلن‌های فعلی: رایگان ۵۰، پایه ۵۰۰، پیشرفته بدون سقف و حرفه‌ای ۵۰۰۰.',
		),
		array(
			'q' => 'اگر عضوی دسترسی نداشته باشد چه می‌بیند؟',
			'a' => 'بخش باز نمی‌شود و پیام «دسترسی محدود» با توضیح «شما اجازه مشاهده این بخش را ندارید. با مدیر سیستم تماس بگیرید.» نمایش داده می‌شود؛ در صورت نیاز، تعداد «{n} مجوز مورد نیاز» هم مشخص است. در سطح سرور هم پاسخ «دسترسی غیرمجاز» برگشت می‌خورد — دسترسی همیشه بر اساس مجوز بررسی می‌شود، نه صرف ورود.',
		),
		array(
			'q' => 'نقش سیستمی با نقش سفارشی چه فرقی دارد؟',
			'a' => 'نقش‌های سیستمی (هشت نقش پیش‌فرض) قابل حذف و ویرایش نیستند تا ساختار پایهٔ شرکت از بین نرود؛ برچسب «سیستمی» دارند. نقش سفارشی را خودتان می‌سازید و با «کپی» تکثیر می‌کنید («نقش با موفقیت کپی شد» — نام کپی «{نام} (کپی)» می‌گیرد)، مجوزهایش را عوض می‌کنید و حتی می‌توانید بین دو نقش «مقایسه» بگیرید تا مجوزهای «مشترک» و اختصاصی‌ها را ببینید.',
		),
	);
	$ft_faq_id    = 'faq';
	$ft_faq_title = 'پرسش‌های متداول دربارهٔ مدیریت تیم و دسترسی‌ها';
	$ft_faq_intro = 'برای بنیان‌گذاران، مدیران عملیات و ادمین‌های سازمان.';
	get_template_part( 'template-parts/faq-section', null, array(
		'ft_faq_id'    => $ft_faq_id,
		'ft_faq_title' => $ft_faq_title,
		'ft_faq_intro' => $ft_faq_intro,
		'ft_faq_items' => $ft_faq_items,
	) );
	?>

	<?php
	$ft_cta_title         = 'دسترسی تیم خود را از امروز منظم کنید';
	$ft_cta_desc          = 'اولین کارمند را با نقش مناسب اضافه کنید، مجوزها را متناسب با مسئولیتش تنظیم کنید و کلید API را با دامنهٔ دقیق بسازید.';
	$ft_cta_primary_url   = $dash_url;
	$ft_cta_primary_label = 'مدیریت دسترسی تیم';
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
