<?php
/**
 * Feature registry — single source of truth for every feature surface.
 *
 * Drives: desktop mega menu, mobile sidebar, homepage cards, the /features/
 * directory and the footer feature links. One array, no duplicated lists.
 *
 * Scope: only capabilities verified in docs/product/features-business-logic.md
 * and listed in docs/website-content-map.md §5. `built` becomes true only when
 * the dedicated detail route actually exists in this theme — planned or
 * unimplemented capabilities are never published as available.
 *
 * Entry fields:
 *   slug         string   route slug
 *   title        string   Persian display title
 *   short        string   one-line description (menu / cards)
 *   description  string   longer description (directory)
 *   group        string   category key (see xcrm_get_feature_groups)
 *   built        bool     detail route exists → safe to link
 *   icon         string   inner SVG markup
 *   url          string   canonical path (defaults to /features/<slug>/)
 *   nav          bool     show in mega menu + mobile sidebar
 *   home         bool     show in homepage features section
 *   footer       bool     show in footer features column
 *   sort         int      ordering for flat (home/footer) lists
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return all feature entries keyed by slug.
 *
 * @return array<string, array<string, mixed>>
 */
function xcrm_get_features() {
	static $features = null;

	if ( null !== $features ) {
		return $features;
	}

	$features = array(
		'customer-management'   => array(
			'slug'        => 'customer-management',
			'title'       => 'مدیریت مشتریان و پروفایل یکپارچه',
			'nav_title'   => 'مدیریت مشتریان',
			'short'       => 'هر مشتری، یک پروندهٔ واحد با اطلاعات تماس، ویژگی‌ها و تاریخچهٔ تعاملات.',
			'description' => 'اطلاعات تماس، رفتار، ویژگی‌های اختصاصی و تاریخچهٔ تعاملات هر مشتری را در یک پروفایل گردآوری کنید و آن را در اختیار فروش، بازاریابی و پشتیبانی بگذارید.',
			'group'       => 'data',
			'built'       => true,
			'icon'        => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
			'url'         => '/features/customer-management/',
			'nav'         => true,
			'home'        => true,
			'footer'      => true,
			'sort'        => 10,
		),
		'website-tracking'      => array(
			'slug'        => 'website-tracking',
			'title'       => 'ردیابی وب‌سایت و SDK مرورگر',
			'nav_title'   => 'ردیابی وب‌سایت',
			'short'       => 'ثبت خودکار بازدیدها، جلسات و رویدادهای وب‌سایت با اسکریپت SDK.',
			'description' => 'با نصب یک اسکریپت در وب‌سایت، بازدیدها، رویدادها، سبد خرید و اتریبیوشن UTM را ثبت کنید تا رفتار کاربران به پروفایل مشتری وصل شود.',
			'group'       => 'data',
			'built'       => true,
			'icon'        => '<path d="M3 5h18v14H3z"/><path d="M3 9h18"/><circle cx="6.5" cy="7" r=".5" fill="currentColor"/><circle cx="9" cy="7" r=".5" fill="currentColor"/>',
			'url'         => '/features/website-tracking/',
			'nav'         => true,
			'home'        => true,
			'footer'      => true,
			'sort'        => 20,
		),
		'identity-resolution'    => array(
			'slug'        => 'identity-resolution',
			'title'       => 'شناسایی هویت مشتریان',
			'nav_title'   => 'شناسایی هویت مشتری',
			'short'       => 'اتصال بازدیدهای ناشناس به پروفایل مشتریان شناسایی‌شده.',
			'description' => 'هویت‌های مختلف مشتریان (شماره، ایمیل، دستگاه و شناسه‌ها) را مدیریت کنید و فعالیت کاربران ناشناس را با قواعد شناسایی XCRM به پروفایل یکپارچهٔ مشتری وصل کنید.',
			'group'       => 'data',
			'built'       => true,
			'icon'        => '<path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/><path d="m16 11 2 2 4-4"/>',
			'url'         => '/features/identity-resolution/',
			'nav'         => true,
			'home'        => true,
			'footer'      => true,
			'sort'        => 30,
		),
		'event-management'       => array(
			'slug'        => 'event-management',
			'title'       => 'مدیریت رویداد و ردیابی رفتار',
			'nav_title'   => 'مدیریت رویدادها',
			'short'       => 'تعریف رویدادهای سفارشی، ویژگی‌های ساخت‌یافته و کاتالوگ رویدادهای SDK.',
			'description' => 'رویدادهای موردنیاز کسب‌وکار را با کلید و ویژگی‌های مشخص تعریف کنید، از رویدادهای آمادهٔ SDK استفاده کنید و تعاملات مشتریان را برای تحلیل، بخش‌بندی و اتوماسیون ثبت کنید.',
			'group'       => 'data',
			'built'       => true,
			'icon'        => '<path d="M4 6h16M4 12h16M4 18h10"/><circle cx="19" cy="12" r="2"/>',
			'url'         => '/features/event-management/',
			'nav'         => true,
			'home'        => true,
			'footer'      => true,
			'sort'        => 40,
		),
		'segmentation'          => array(
			'slug'        => 'segmentation',
			'title'       => 'بخش‌بندی مشتریان',
			'nav_title'   => 'بخش‌بندی مشتریان',
			'short'       => 'سگمنت‌های ایستا و پویا با شرط‌های رفتاری و رویدادی.',
			'description' => 'مشتریان را با شرط‌های ترکیبی AND/OR، ویژگی‌ها و رویدادهای ثبت‌شده گروه‌بندی کنید؛ سگمنت‌های پویا به‌صورت خودکار به‌روز می‌شوند.',
			'group'       => 'data',
			'built'       => true,
			'icon'        => '<path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/>',
			'url'         => '/features/segmentation/',
			'nav'         => true,
			'home'        => true,
			'footer'      => false,
			'sort'        => 50,
		),
		'analytics'             => array(
			'slug'        => 'analytics',
			'title'       => 'تحلیل رفتاری و گزارش‌گیری',
			'nav_title'   => 'تحلیل رفتار و گزارش‌ها',
			'short'       => 'قیف تبدیل، کوهورت، RFM، LTV، مسیر مشتری و تحلیل قیف فروش.',
			'description' => 'قیف تبدیل و مقایسهٔ آن، نرخ بازگشت، کوهورت‌ها، RFM، مسیر مشتری و تحلیل قیف فروش را روی داده‌های واقعی ببینید و گزارش را با خروجی CSV یا XLSX تهیه کنید.',
			'group'       => 'analytics',
			'built'       => true,
			'icon'        => '<path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/>',
			'url'         => '/features/analytics/',
			'nav'         => true,
			'home'        => true,
			'footer'      => false,
			'sort'        => 60,
		),
		'revenue-attribution'    => array(
			'slug'        => 'revenue-attribution',
			'title'       => 'تحلیل منابع درآمد و بازاریابی',
			'nav_title'   => 'تحلیل منابع درآمد',
			'short'       => 'اتریبیوشن UTM، درآمد بر اساس منبع و LTV بر اساس کانال جذب.',
			'description' => 'منابع جذب مشتری را با اتریبیوشن UTM (اولین و آخرین برخورد) شناسایی کنید، درآمد و ارزش طول عمر مشتری را بر اساس کانال جذب تحلیل کنید و ارتباط داده‌های بازاریابی را با عملکرد فروش ببینید.',
			'group'       => 'analytics',
			'built'       => true,
			'icon'        => '<path d="M12 2v20"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>',
			'url'         => '/features/revenue-attribution/',
			'nav'         => true,
			'home'        => false,
			'footer'      => false,
			'sort'        => 70,
		),
		'automation'            => array(
			'slug'        => 'automation',
			'title'       => 'اتوماسیون بازاریابی و تریگرها',
			'nav_title'   => 'اتوماسیون بازاریابی',
			'short'       => 'کمپین زمان‌بندی‌شده و تریگرهای رویدادی، تأخیری و غیابی.',
			'description' => 'کمپین‌ها را روی سگمنت یا مراحل فروش زمان‌بندی کنید یا با رویداد، تأخیر و غیاب رفتار به‌صورت خودکار فعال کنید؛ اجرای هر مشتری ثبت و قابل پیگیری است.',
			'group'       => 'growth',
			'built'       => true,
			'icon'        => '<path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/>',
			'url'         => '/features/automation/',
			'nav'         => true,
			'home'        => true,
			'footer'      => false,
			'sort'        => 80,
		),
		'communication'         => array(
			'slug'        => 'communication',
			'title'       => 'ارتباط با مشتری',
			'nav_title'   => 'مدیریت ارتباطات',
			'short'       => 'پیامک، ایمیل، Push و تلگرام با تنظیمات و پنجرهٔ ارسال.',
			'description' => 'کانال‌های پیامک، ایمیل، Push و تلگرام را با تنظیمات شرکتی، ارائه‌دهندهٔ متصل و پنجرهٔ مجاز ارسال مدیریت کنید و پیامک زمان‌بندی‌شده ارسال کنید.',
			'group'       => 'growth',
			'built'       => true,
			'icon'        => '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>',
			'url'         => '/features/communication/',
			'nav'         => true,
			'home'        => false,
			'footer'      => false,
			'sort'        => 90,
		),
		'sales-pipeline'        => array(
			'slug'        => 'sales-pipeline',
			'title'       => 'قیف فروش و پیگیری‌ها',
			'nav_title'   => 'مدیریت فرایند فروش',
			'short'       => 'کانبان مراحل فروش، فعالیت‌ها، یادآوری‌ها و تحلیل قیف.',
			'description' => 'فرصت‌های فروش را در مراحل قابل تنظیم دنبال کنید، فعالیت‌ها و یادآوری‌ها را به اعضای تیم تخصیص دهید و عملکرد مراحل را تحلیل کنید.',
			'group'       => 'growth',
			'built'       => true,
			'icon'        => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18"/><path d="M15 3v18"/>',
			'url'         => '/features/sales-pipeline/',
			'nav'         => true,
			'home'        => true,
			'footer'      => false,
			'sort'        => 100,
		),
		'templates'             => array(
			'slug'        => 'templates',
			'title'       => 'قالب‌های آماده و پیشنهادها',
			'nav_title'   => 'قالب‌های آماده',
			'short'       => 'شش نوع قالب برای رویداد، ویژگی، سگمنت، پیپلاین، کمپین و گردش‌کار.',
			'description' => 'قالب‌های آمادهٔ رویداد، ویژگی، سگمنت، پیپلاین، کمپین و گردش‌کار را با یک کلیک بسازید؛ دسترسی به قالب‌ها به دسته‌بندی شرکت بستگی دارد.',
			'group'       => 'growth',
			'built'       => true,
			'icon'        => '<path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/>',
			'url'         => '/features/templates/',
			'nav'         => true,
			'home'        => false,
			'footer'      => false,
			'sort'        => 120,
		),
		'workflow-automation'   => array(
			'slug'        => 'workflow-automation',
			'title'       => 'اتوماسیون گردش‌کار اختصاصی n8n',
			'nav_title'   => 'اتوماسیون n8n',
			'short'       => 'یک محیط n8n اختصاصی برای هر شرکت، همراه با گره‌های متصل به xCRM.',
			'description' => 'برای هر شرکت یک کانتینر و پایگاه‌دادهٔ n8n اختصاصی در نظر گرفته می‌شود؛ گردش‌کارها با وب‌هوک و شش گرهٔ اختصاصی به داده‌های CRM وصل می‌شوند.',
			'group'       => 'platform',
			'built'       => true,
			'icon'        => '<rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><path d="M10 6.5h4a3.5 3.5 0 0 1 3.5 3.5v4"/>',
			'url'         => '/features/workflow-automation/',
			'nav'         => true,
			'home'        => false,
			'footer'      => false,
			'sort'        => 110,
		),
		'team-management'       => array(
			'slug'        => 'team-management',
			'title'       => 'مدیریت تیم و دسترسی‌ها',
			'nav_title'   => 'مدیریت تیم و دسترسی',
			'short'       => 'نقش‌ها، مجوزهای ریز و محدودهٔ دسترسی متناسب با پلن.',
			'description' => 'کارمندان را با نقش و مجوزهای مشخص اضافه کنید؛ دسترسی‌های قابل انتخاب بر اساس پلن فیلتر می‌شود و کلیدهای API نیز دامنهٔ مجوز دارند.',
			'group'       => 'platform',
			'built'       => true,
			'icon'        => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/>',
			'url'         => '/features/team-management/',
			'nav'         => true,
			'home'        => false,
			'footer'      => false,
			'sort'        => 130,
		),
		'telegram-integration'   => array(
			'slug'        => 'telegram-integration',
			'title'       => 'ادغام تلگرام',
			'nav_title'   => 'ادغام تلگرام',
			'short'       => 'اکانت‌ها، گروه‌ها و پیام‌های تلگرام در کنار پروفایل مشتری.',
			'description' => 'اکانت‌های تلگرام شرکت را متصل کنید، گروه‌ها و کانال‌ها را پایش کنید و پیام‌ها را به رویداد و پروفایل مشتری گره بزنید.',
			'group'       => 'platform',
			'built'       => false,
			'icon'        => '<path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/>',
			'url'         => '/integrations/telegram/',
			'nav'         => false,
			'home'        => false,
			'footer'      => false,
			'sort'        => 140,
		),
		'instagram-data-integration' => array(
			'slug'        => 'instagram-data-integration',
			'title'       => 'ادغام دادهٔ اینستاگرام',
			'nav_title'   => 'ادغام اینستاگرام',
			'short'       => 'اتصال حساب اینستاگرام و ورود داده به تحلیل مشتریان.',
			'description' => 'حساب و نشست اینستاگرام شرکت را متصل کنید تا داده‌های جمع‌آوری‌شده در همان جریان تحلیل مشتریان و رویدادها قرار بگیرد.',
			'group'       => 'platform',
			'built'       => false,
			'icon'        => '<rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>',
			'url'         => '/integrations/instagram/',
			'nav'         => false,
			'home'        => false,
			'footer'      => false,
			'sort'        => 150,
		),
		'developer-platform'    => array(
			'slug'        => 'developer-platform',
			'title'       => 'پلتفرم توسعه‌دهندگان و SDK',
			'nav_title'   => 'پلتفرم توسعه‌دهندگان',
			'short'       => 'مستندات SDK، کلیدهای API، وب‌هوک و نمونه‌های اتصال.',
			'description' => 'نصب اسکریپت SDK، احراز هویت با کلیدهای API، وب‌هوک و نمونه‌های کد برای اتصال XCRM به پشتهٔ فنی شما.',
			'group'       => 'platform',
			'built'       => false,
			'icon'        => '<path d="m16 18 6-6-6-6"/><path d="m8 6-6 6 6 6"/>',
			'url'         => '/developers/',
			'nav'         => false,
			'home'        => false,
			'footer'      => false,
			'sort'        => 160,
		),
	);

	return $features;
}

/**
 * Return one feature entry by slug (or null).
 *
 * @param string $slug Feature slug.
 * @return array<string, mixed>|null
 */
function xcrm_get_feature( $slug ) {
	$features = xcrm_get_features();
	return isset( $features[ $slug ] ) ? $features[ $slug ] : null;
}

/**
 * Resolve a feature's canonical URL.
 *
 * Prefers the explicit `url` field (needed for routes outside /features/)
 * and falls back to the /features/<slug>/ convention.
 *
 * @param array<string, mixed>|string $feature Feature entry or slug.
 * @return string Absolute URL.
 */
function xcrm_feature_url( $feature ) {
	if ( is_string( $feature ) ) {
		$feature = xcrm_get_feature( $feature );
	}
	if ( ! is_array( $feature ) ) {
		return home_url( '/features/' );
	}
	if ( ! empty( $feature['url'] ) ) {
		return home_url( $feature['url'] );
	}
	return home_url( '/features/' . $feature['slug'] . '/' );
}

/**
 * Category definitions — shared by the desktop mega menu, the mobile sidebar
 * and the /features/ directory so navigation never drifts.
 *
 * `slugs` defines membership AND display order inside a category.
 *
 * @return array<int, array<string, mixed>>
 */
function xcrm_get_feature_groups() {
	return array(
		array(
			'key'         => 'data',
			'title'       => 'داده مشتری و شناخت رفتار',
			'headline'    => 'از بازدید ناشناس تا پروفایل یکپارچه',
			'description' => 'ردیابی وب‌سایت، شناسایی هویت، ثبت رویداد و بخش‌بندی مشتریان در یک جریان واحد.',
			'slugs'       => array( 'customer-management', 'website-tracking', 'identity-resolution', 'event-management', 'segmentation' ),
		),
		array(
			'key'         => 'analytics',
			'title'       => 'تحلیل و هوشمندی کسب‌وکار',
			'headline'    => 'از رفتار تا درآمد',
			'description' => 'قیف تبدیل، کوهورت، RFM و تحلیل منابع درآمد و اتریبیوشن بازاریابی.',
			'slugs'       => array( 'analytics', 'revenue-attribution' ),
		),
		array(
			'key'         => 'growth',
			'title'       => 'بازاریابی، فروش و اتوماسیون',
			'headline'    => 'فعال‌سازی پیام و مدیریت فروش',
			'description' => 'اتوماسیون کمپین‌ها، کانال‌های ارتباطی، قیف فروش و قالب‌های آماده.',
			'slugs'       => array( 'automation', 'communication', 'sales-pipeline', 'templates' ),
		),
		array(
			'key'         => 'platform',
			'title'       => 'یکپارچه‌سازی و مدیریت کسب‌وکار',
			'headline'    => 'زیرساخت اختصاصی و کنترل تیم',
			'description' => 'گردش‌کار n8n اختصاصی، کنترل دسترسی تیم و اتصال به ابزارها.',
			'slugs'       => array( 'workflow-automation', 'team-management', 'telegram-integration', 'instagram-data-integration', 'developer-platform' ),
		),
	);
}

/**
 * Features visible in navigation surfaces (mega menu + mobile sidebar),
 * grouped and ordered — built routes only, never a planned page.
 *
 * @return array<int, array<string, mixed>> Each: key, title, items (feature arrays).
 */
function xcrm_get_nav_groups() {
	$features = xcrm_get_features();
	$groups   = array();

	foreach ( xcrm_get_feature_groups() as $group ) {
		$items = array();
		foreach ( $group['slugs'] as $slug ) {
			$feature = isset( $features[ $slug ] ) ? $features[ $slug ] : null;
			if ( ! $feature || empty( $feature['built'] ) || empty( $feature['nav'] ) ) {
				continue;
			}
			$items[] = $feature;
		}
		if ( $items ) {
			$groups[] = array(
				'key'   => $group['key'],
				'title' => $group['title'],
				'items' => $items,
			);
		}
	}

	return $groups;
}

/**
 * Features for the homepage section (home = true and built), ordered by sort.
 *
 * @return array<int, array<string, mixed>>
 */
function xcrm_get_home_features() {
	$features = xcrm_get_features();
	$home     = array();

	foreach ( $features as $feature ) {
		if ( ! empty( $feature['built'] ) && ! empty( $feature['home'] ) ) {
			$home[] = $feature;
		}
	}

	usort( $home, function ( $a, $b ) {
		return $a['sort'] <=> $b['sort'];
	} );

	return $home;
}

/**
 * Features for the footer column (footer = true and built), ordered by sort.
 *
 * @return array<int, array<string, mixed>>
 */
function xcrm_get_footer_features() {
	$features = xcrm_get_features();
	$footer   = array();

	foreach ( $features as $feature ) {
		if ( ! empty( $feature['built'] ) && ! empty( $feature['footer'] ) ) {
			$footer[] = $feature;
		}
	}

	usort( $footer, function ( $a, $b ) {
		return $a['sort'] <=> $b['sort'];
	} );

	return $footer;
}