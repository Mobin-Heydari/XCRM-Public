<?php
/**
 * Feature registry — single source of truth for /features/ pages.
 *
 * Scope: only capabilities verified in docs/product/features-business-logic.md
 * and listed in docs/website-content-map.md §5. `built` becomes true only
 * when the dedicated detail route actually exists in this theme.
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
			'short'       => 'هر مشتری، یک پروندهٔ واحد با اطلاعات تماس، ویژگی‌ها و تاریخچهٔ تعاملات.',
			'description' => 'اطلاعات تماس، رفتار، ویژگی‌های اختصاصی و تاریخچهٔ تعاملات هر مشتری را در یک پروفایل گردآوری کنید و آن را در اختیار فروش، بازاریابی و پشتیبانی بگذارید.',
			'group'       => 'data',
			'built'       => true,
			'icon'        => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
		),
		'website-tracking'      => array(
			'slug'        => 'website-tracking',
			'title'       => 'ردیابی وب‌سایت و SDK مرورگر',
			'short'       => 'ثبت خودکار بازدیدها، جلسات و رویدادهای وب‌سایت با اسکریپت SDK.',
			'description' => 'با نصب یک اسکریپت در وب‌سایت، بازدیدها، رویدادها، سبد خرید و اتریبیوشن UTM را ثبت کنید تا رفتار کاربران به پروفایل مشتری وصل شود.',
			'group'       => 'data',
			'built'       => true,
			'icon'        => '<path d="M3 5h18v14H3z"/><path d="M3 9h18"/><circle cx="6.5" cy="7" r=".5" fill="currentColor"/><circle cx="9" cy="7" r=".5" fill="currentColor"/>',
		),
		'analytics'             => array(
			'slug'        => 'analytics',
			'title'       => 'تحلیل رفتاری و گزارش‌گیری',
			'short'       => 'قیف تبدیل، کوهورت، RFM، LTV، مسیر مشتری و تحلیل قیف فروش.',
			'description' => 'قیف تبدیل و مقایسهٔ آن، نرخ بازگشت، کوهورت‌ها، RFM، مسیر مشتری و تحلیل قیف فروش را روی داده‌های واقعی ببینید و گزارش را با خروجی CSV یا XLSX تهیه کنید.',
			'group'       => 'data',
			'built'       => true,
			'icon'        => '<path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/>',
		),
		'segmentation'          => array(
			'slug'        => 'segmentation',
			'title'       => 'بخش‌بندی مشتریان',
			'short'       => 'سگمنت‌های ایستا و پویا با شرط‌های رفتاری و رویدادی.',
			'description' => 'مشتریان را با شرط‌های ترکیبی AND/OR، ویژگی‌ها و رویدادهای ثبت‌شده گروه‌بندی کنید؛ سگمنت‌های پویا به‌صورت خودکار به‌روز می‌شوند.',
			'group'       => 'data',
			'built'       => true,
			'icon'        => '<path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/>',
		),
		'sales-pipeline'        => array(
			'slug'        => 'sales-pipeline',
			'title'       => 'قیف فروش و پیگیری‌ها',
			'short'       => 'کانبان مراحل فروش، فعالیت‌ها، یادآوری‌ها و تحلیل قیف.',
			'description' => 'فرصت‌های فروش را در مراحل قابل تنظیم دنبال کنید، فعالیت‌ها و یادآوری‌ها را به اعضای تیم تخصیص دهید و عملکرد مراحل را تحلیل کنید.',
			'group'       => 'data',
			'built'       => true,
			'icon'        => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18"/><path d="M15 3v18"/>',
		),
		'automation'            => array(
			'slug'        => 'automation',
			'title'       => 'اتوماسیون بازاریابی و تریگرها',
			'short'       => 'کمپین زمان‌بندی‌شده و تریگرهای رویدادی، تأخیری و غیابی.',
			'description' => 'کمپین‌ها را روی سگمنت یا مراحل فروش زمان‌بندی کنید یا با رویداد، تأخیر و غیاب رفتار به‌صورت خودکار فعال کنید؛ اجرای هر مشتری ثبت و قابل پیگیری است.',
			'group'       => 'marketing',
			'built'       => true,
			'icon'        => '<path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/>',
		),
		'communication'         => array(
			'slug'        => 'communication',
			'title'       => 'ارتباط با مشتری',
			'short'       => 'پیامک، ایمیل، Push و تلگرام با تنظیمات و پنجرهٔ ارسال.',
			'description' => 'کانال‌های پیامک، ایمیل، Push و تلگرام را با تنظیمات شرکتی، ارائه‌دهندهٔ متصل و پنجرهٔ مجاز ارسال مدیریت کنید و پیامک زمان‌بندی‌شده ارسال کنید.',
			'group'       => 'marketing',
			'built'       => true,
			'icon'        => '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>',
		),
		'workflow-automation'   => array(
			'slug'        => 'workflow-automation',
			'title'       => 'اتوماسیون گردش‌کار اختصاصی n8n',
			'short'       => 'یک محیط n8n اختصاصی برای هر شرکت، همراه با گره‌های متصل به xCRM.',
			'description' => 'برای هر شرکت یک کانتینر و پایگاه‌دادهٔ n8n اختصاصی در نظر گرفته می‌شود؛ گردش‌کارها با وب‌هوک و شش گرهٔ اختصاصی به داده‌های CRM وصل می‌شوند.',
			'group'       => 'infra',
			'built'       => true,
			'icon'        => '<rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><path d="M10 6.5h4a3.5 3.5 0 0 1 3.5 3.5v4"/>',
		),
		'templates'             => array(
			'slug'        => 'templates',
			'title'       => 'قالب‌های آماده و پیشنهادها',
			'short'       => 'شش نوع قالب برای رویداد، ویژگی، سگمنت، پیپلاین، کمپین و گردش‌کار.',
			'description' => 'قالب‌های آمادهٔ رویداد، ویژگی، سگمنت، پیپلاین، کمپین و گردش‌کار را با یک کلیک بسازید؛ دسترسی به قالب‌ها به دسته‌بندی شرکت بستگی دارد.',
			'group'       => 'infra',
			'built'       => false,
			'icon'        => '<path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/>',
		),
		'team-management'       => array(
			'slug'        => 'team-management',
			'title'       => 'مدیریت تیم و دسترسی‌ها',
			'short'       => 'نقش‌ها، مجوزهای ریز و محدودهٔ دسترسی متناسب با پلن.',
			'description' => 'کارمندان را با نقش و مجوزهای مشخص اضافه کنید؛ دسترسی‌های قابل انتخاب بر اساس پلن فیلتر می‌شود و کلیدهای API نیز دامنهٔ مجوز دارند.',
			'group'       => 'infra',
			'built'       => false,
			'icon'        => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/>',
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
 * Group definitions for the directory page (content map §5).
 *
 * @return array<int, array<string, mixed>>
 */
function xcrm_get_feature_groups() {
	return array(
		array(
			'key'         => 'data',
			'title'       => 'داده مشتری و تحلیل',
			'headline'    => 'از پروفایل مشتری تا تحلیل رفتار',
			'description' => 'از ثبت رفتار تا پروفایل مشتری، بخش‌بندی و تحلیل نتیجه.',
			'slugs'       => array( 'customer-management', 'website-tracking', 'analytics', 'segmentation', 'sales-pipeline' ),
		),
		array(
			'key'         => 'marketing',
			'title'       => 'بازاریابی و ارتباط',
			'headline'    => 'فعال‌سازی پیام روی رفتار واقعی',
			'description' => 'کمپین و ارتباط با مشتری را بر اساس رفتار واقعی او راه‌اندازی کنید.',
			'slugs'       => array( 'automation', 'communication' ),
		),
		array(
			'key'         => 'infra',
			'title'       => 'زیرساخت، تیم و توسعه',
			'headline'    => 'هر شرکت، زیرساخت اختصاصی خودش',
			'description' => 'گردش‌کار اختصاصی، قالب‌های آماده و کنترل دسترسی تیم.',
			'slugs'       => array( 'workflow-automation', 'templates', 'team-management' ),
		),
	);
}
