<?php
/**
 * Template Name: Features Directory
 * Template Post Type: page
 *
 * فهرست امکانات — /features/
 * XCRM Product Explorer: اکوسیستم متحرک، دسته‌بندی تعاملی، جست‌وجو،
 * مسیر مشتری، نمونه‌های کاربردی و لینک به همهٔ صفحه‌های جزئیات.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_stylesheet_directory() . '/inc/features-data.php';
require_once get_stylesheet_directory() . '/inc/features-directory-data.php';
require_once get_stylesheet_directory() . '/inc/features-directory-visuals.php';

$home_url   = home_url( '/' );
$features   = home_url( '/features/' );
$canonical  = home_url( '/features/' );
$dash_url   = 'https://dashboard.xcrmforosh.com/';

$fd_categories = xcrm_get_fd_categories();
$fd_modules    = xcrm_get_fd_hero_modules();
$fd_journey    = xcrm_get_fd_journey();
$fd_usecases   = xcrm_get_fd_usecases();

// Computed counts (never hard-coded).
$fd_card_total = 0;
$fd_cat_counts = array();
foreach ( $fd_categories as $fd_c ) {
	$fd_cat_counts[ $fd_c['key'] ] = count( $fd_c['cards'] );
	$fd_card_total                += count( $fd_c['cards'] );
}
$fd_built_total = 0;
foreach ( xcrm_get_features() as $fd_f ) {
	if ( ! empty( $fd_f['built'] ) ) {
		$fd_built_total++;
	}
}
$fd_fa_num = function ( $n ) {
	return strtr( (string) $n, '0123456789', '۰۱۲۳۴۵۶۷۸۹' );
};

$page_title       = 'امکانات XCRM | مدیریت مشتریان، تحلیل داده و اتوماسیون بازاریابی';
$page_description = 'با امکانات یکپارچه XCRM فروش، اطلاعات مشتریان را مدیریت کنید، رفتار کاربران را تحلیل کنید، مخاطبان را بخش‌بندی کنید و فرایندهای فروش و بازاریابی را هوشمندانه‌تر مدیریت کنید.';

// Structured data: breadcrumbs + ItemList of implemented feature pages.
$fd_item_list = array();
$fd_pos       = 0;
foreach ( xcrm_get_features() as $fd_f ) {
	if ( empty( $fd_f['built'] ) ) {
		continue;
	}
	$fd_pos++;
	$fd_item_list[] = array(
		'@type'    => 'ListItem',
		'position' => $fd_pos,
		'name'     => $fd_f['title'],
		'url'      => xcrm_feature_url( $fd_f ),
	);
}

// Category tab labels (short titles for the tab bar).
$fd_tab_labels = array(
	'all'           => 'نمای کلی',
	'customers'     => 'مشتریان',
	'tracking'      => 'ردیابی و رویدادها',
	'analytics'     => 'تحلیل',
	'segmentation'  => 'بخش‌بندی',
	'sales'         => 'فروش',
	'automation'    => 'اتوماسیون',
	'communication' => 'ارتباطات',
	'integrations'  => 'یکپارچه‌سازی',
	'templates'     => 'قالب‌ها',
	'team'          => 'تیم',
	'billing'       => 'پرداخت',
	'experience'    => 'تجربهٔ کاربری',
);
$fd_badge_labels = array(
	'config'   => 'پیکربندی لازم دارد',
	'provider' => 'وابسته به ارائه‌دهنده',
	'limited'  => 'محدود',
	'dash'     => 'در داشبورد',
);
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
	<script type="application/ld+json">
	<?php echo wp_json_encode( array(
		'@context' => 'https://schema.org',
		'@type' => 'ItemList',
		'name' => 'امکانات XCRM',
		'itemListElement' => $fd_item_list,
	), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ); ?>
	</script>
	<?php
	wp_enqueue_style( 'xcrm-features-directory' );
	wp_head();
	?>
</head>
<body <?php body_class( 'ft-page fd-page' ); ?>>
<?php wp_body_open(); ?>

<!-- HEADER -->
<?php get_template_part( 'template-parts/site-header' ); ?>

<main class="ft fd">

	<!-- ══════════ HERO — PRODUCT ECOSYSTEM ══════════ -->
	<section class="ft__hero fd__hero" data-spotlight-zone>
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
					محصول XCRM
				</span>

				<h1 class="ft__title ft-anim ft-anim--2">
					تمام ابزارهای شناخت مشتری، تحلیل داده و <span class="text-gradient-primary">رشد فروش</span> در یک پلتفرم.
				</h1>

				<p class="ft__hero-desc ft-anim ft-anim--3">
					«xCRM فروش» مجموعه‌ای یکپارچه از ابزارهای مدیریت مشتریان، جمع‌آوری داده‌های رفتاری، تحلیل عملکرد، بخش‌بندی مخاطبان، مدیریت فرصت‌های فروش و اتوماسیون بازاریابی را در اختیار کسب‌وکار شما قرار می‌دهد.
				</p>

				<div class="ft__hero-actions ft-anim ft-anim--4">
					<a href="<?php echo esc_url( $dash_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
						شروع استفاده از XCRM
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					</a>
					<a href="#catalog" class="hp__btn hp__btn--ghost" data-magnetic>مشاهده امکانات</a>
				</div>

				<ul class="ft__hero-pills ft-anim ft-anim--5" aria-label="خلاصهٔ پوشش محصول">
					<li><?php echo esc_html( $fd_fa_num( count( $fd_categories ) ) ); ?> دستهٔ توانمندی</li>
					<li><?php echo esc_html( $fd_fa_num( $fd_card_total ) ); ?> قابلیت کلیدی</li>
					<li><?php echo esc_html( $fd_fa_num( $fd_built_total ) ); ?> صفحهٔ جزئیات</li>
				</ul>

				<p class="fd__hero-note ft-anim ft-anim--5">
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
					از اولین تعامل کاربر تا تحلیل رفتار مشتری و اجرای فرایندهای فروش و بازاریابی، همه‌چیز را در یک مسیر یکپارچه مدیریت کنید.
				</p>
			</div>
			<?php
			/*
			 * Ecosystem geometry — 14 modules on an ellipse around the hub.
			 * Visual links run node → hub; reversed motion paths (fd-rev)
			 * carry the outbound particles hub → node.
			 */
			$fd_cx   = 500;
			$fd_cy   = 278;
			$fd_rx   = 348;
			$fd_ry   = 192;
			$fd_n    = count( $fd_modules );
			$fd_pos   = array();
			$fd_linkd = array();
			$fd_revd  = array();
			for ( $fd_i = 0; $fd_i < $fd_n; $fd_i++ ) {
				$fd_a = deg2rad( -90 + ( 360 / $fd_n ) * $fd_i );
				$fd_x = (int) round( $fd_cx + $fd_rx * cos( $fd_a ) );
				$fd_y = (int) round( $fd_cy + $fd_ry * sin( $fd_a ) );
				$fd_pos[] = array( $fd_x, $fd_y );
				$fd_dx = $fd_cx - $fd_x;
				$fd_dy = $fd_cy - $fd_y;
				$fd_l  = max( 1, sqrt( $fd_dx * $fd_dx + $fd_dy * $fd_dy ) );
				$fd_sx = (int) round( $fd_x + $fd_dx / $fd_l * 32 );
				$fd_sy = (int) round( $fd_y + $fd_dy / $fd_l * 30 );
				$fd_ex = (int) round( $fd_cx - $fd_dx / $fd_l * 78 );
				$fd_ey = (int) round( $fd_cy - $fd_dy / $fd_l * 74 );
				$fd_qx = (int) round( ( $fd_sx + $fd_ex ) / 2 + ( -$fd_dy / $fd_l ) * 20 );
				$fd_qy = (int) round( ( $fd_sy + $fd_ey ) / 2 + ( $fd_dx / $fd_l ) * 20 );
				$fd_linkd[ $fd_i ] = "M{$fd_sx} {$fd_sy} Q{$fd_qx} {$fd_qy} {$fd_ex} {$fd_ey}";
				$fd_revd[ $fd_i ]  = "M{$fd_ex} {$fd_ey} Q{$fd_qx} {$fd_qy} {$fd_sx} {$fd_sy}";
			}
			$fd_in_idx  = array( 0, 3, 6, 9 );
			$fd_out_idx = array( 1, 4, 7, 10 );
			?>
			<figure class="ft__hero-media fd__hero-media fd-anim fd-anim--3">
				<svg class="fdeck" viewBox="0 0 1000 560" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" data-fdeck role="presentation">
					<defs>
						<linearGradient id="fd-line" x1="0" y1="0" x2="1" y2="0">
							<stop offset="0%" class="fd-g1"/>
							<stop offset="50%" class="fd-g2"/>
							<stop offset="100%" class="fd-g3"/>
						</linearGradient>
						<radialGradient id="fd-core" cx="50%" cy="50%" r="50%">
							<stop offset="0%" class="fd-core-1"/>
							<stop offset="60%" class="fd-core-2"/>
							<stop offset="100%" class="fd-core-3"/>
						</radialGradient>
						<radialGradient id="fd-glow" cx="50%" cy="50%" r="50%">
							<stop offset="0%" class="fd-glow-1"/>
							<stop offset="100%" class="fd-glow-2"/>
						</radialGradient>
						<filter id="fd-blur" x="-50%" y="-50%" width="200%" height="200%">
							<feGaussianBlur stdDeviation="20"/>
						</filter>
					</defs>

					<ellipse class="fdeck-glow" cx="<?php echo (int) $fd_cx; ?>" cy="<?php echo (int) $fd_cy; ?>" rx="330" ry="220" fill="url(#fd-glow)" filter="url(#fd-blur)"/>
					<ellipse class="fdeck-orbit fdeck-orbit--1" cx="<?php echo (int) $fd_cx; ?>" cy="<?php echo (int) $fd_cy; ?>" rx="420" ry="244"/>
					<ellipse class="fdeck-orbit fdeck-orbit--2" cx="<?php echo (int) $fd_cx; ?>" cy="<?php echo (int) $fd_cy; ?>" rx="252" ry="142"/>
					<ellipse class="fdeck-orbit fdeck-orbit--3" cx="<?php echo (int) $fd_cx; ?>" cy="<?php echo (int) $fd_cy; ?>" rx="474" ry="286"/>

					<?php // Connection links (drawn on entrance). ?>
					<?php foreach ( $fd_linkd as $fd_li => $fd_d ) : ?>
						<?php $fd_aux = ! empty( $fd_modules[ $fd_li ]['aux'] ); ?>
						<path class="fdeck-link fdv-draw<?php echo $fd_aux ? ' fdeck-link--aux' : ''; ?>" pathLength="1" d="<?php echo esc_attr( $fd_d ); ?>" stroke="url(#fd-line)" stroke-width="1.7" stroke-dasharray="1" fill="none" style="animation-delay:<?php echo esc_attr( round( 0.15 + 0.07 * $fd_li, 2 ) ); ?>s"/>
					<?php endforeach; ?>

					<?php // Hidden motion paths for particles (in = link path, out = reversed). ?>
					<?php foreach ( $fd_in_idx as $fd_pi ) : ?>
						<path id="fd-p<?php echo (int) $fd_pi; ?>" class="fdeck-mpath" d="<?php echo esc_attr( $fd_linkd[ $fd_pi ] ); ?>" fill="none" stroke="none"/>
					<?php endforeach; ?>
					<?php foreach ( $fd_out_idx as $fd_pi ) : ?>
						<path id="fd-p<?php echo (int) $fd_pi; ?>" class="fdeck-mpath" d="<?php echo esc_attr( $fd_revd[ $fd_pi ] ); ?>" fill="none" stroke="none"/>
					<?php endforeach; ?>

					<?php // Particles: 4 flowing in, 4 flowing out (capped for calm motion). ?>
					<?php foreach ( $fd_in_idx as $fd_k => $fd_pi ) : ?>
						<circle r="4" class="fdeck-particle fdeck-particle--in">
							<animateMotion dur="3.6s" repeatCount="indefinite" begin="<?php echo esc_attr( round( 0.6 + 1.5 * $fd_k, 2 ) ); ?>s">
								<mpath href="#fd-p<?php echo (int) $fd_pi; ?>"/>
							</animateMotion>
						</circle>
					<?php endforeach; ?>
					<?php foreach ( $fd_out_idx as $fd_k => $fd_pi ) : ?>
						<circle r="3.5" class="fdeck-particle fdeck-particle--out">
							<animateMotion dur="4.2s" repeatCount="indefinite" begin="<?php echo esc_attr( round( 1.3 + 1.7 * $fd_k, 2 ) ); ?>s">
								<mpath href="#fd-p<?php echo (int) $fd_pi; ?>"/>
							</animateMotion>
						</circle>
					<?php endforeach; ?>

					<?php // Floating interface panels (static anchors with gentle float). ?>
					<g class="fdeck-panel fdv-float">
						<rect x="824" y="56" width="134" height="74" rx="12" class="fdeck-panel-bg"/>
						<rect x="840" y="74" width="56" height="9" rx="4.5" class="fdv-bar"/>
						<rect x="840" y="92" width="100" height="7" rx="3.5" class="fdv-bar-dim"/>
						<rect x="840" y="106" width="78" height="7" rx="3.5" class="fdv-bar-dim"/>
						<circle cx="940" cy="78" r="7" class="fdv-fill-accent"/>
					</g>
					<g class="fdeck-panel fdv-float" style="animation-delay:1.6s">
						<rect x="52" y="424" width="134" height="74" rx="12" class="fdeck-panel-bg"/>
						<rect x="68" y="442" width="70" height="9" rx="4.5" class="fdv-bar"/>
						<rect x="68" y="460" width="100" height="7" rx="3.5" class="fdv-bar-dim"/>
						<rect x="68" y="474" width="60" height="7" rx="3.5" class="fdv-bar-dim"/>
						<circle cx="166" cy="446" r="7" class="fdv-fill-soft"/>
					</g>

					<?php // Central hub. ?>
					<g class="fdeck-hub">
						<circle class="fdeck-hub-core" cx="<?php echo (int) $fd_cx; ?>" cy="<?php echo (int) $fd_cy; ?>" r="62" fill="url(#fd-core)"/>
						<circle class="fdeck-hub-ring" cx="<?php echo (int) $fd_cx; ?>" cy="<?php echo (int) $fd_cy; ?>" r="72"/>
						<circle class="fdeck-hub-ring fdeck-hub-ring--2" cx="<?php echo (int) $fd_cx; ?>" cy="<?php echo (int) $fd_cy; ?>" r="80"/>
						<text x="<?php echo (int) $fd_cx; ?>" y="<?php echo (int) ( $fd_cy - 3 ); ?>" text-anchor="middle" class="fdeck-hub-t">xCRM فروش</text>
						<text x="<?php echo (int) $fd_cx; ?>" y="<?php echo (int) ( $fd_cy + 16 ); ?>" text-anchor="middle" class="fdeck-hub-s">پلتفرم یکپارچه</text>
					</g>

					<?php // Product modules. ?>
					<?php $fd_icon_map = xcrm_fd_icons(); ?>
					<?php foreach ( $fd_modules as $fd_mi => $fd_mod ) : ?>
						<?php
						$fd_mx   = $fd_pos[ $fd_mi ][0];
						$fd_my   = $fd_pos[ $fd_mi ][1];
						$fd_aux  = ! empty( $fd_mod['aux'] );
						$fd_icon = isset( $fd_icon_map[ $fd_mod['i'] ] ) ? $fd_icon_map[ $fd_mod['i'] ] : '';
						?>
						<g class="fdeck-mod fdv-float<?php echo $fd_aux ? ' fdeck-mod--aux' : ''; ?>" style="animation-delay:<?php echo esc_attr( round( ( $fd_mi % 5 ) * 0.7, 2 ) ); ?>s">
							<circle class="fdeck-mod-ring" cx="<?php echo (int) $fd_mx; ?>" cy="<?php echo (int) $fd_my; ?>" r="34"/>
							<circle class="fdeck-mod-bg" cx="<?php echo (int) $fd_mx; ?>" cy="<?php echo (int) $fd_my; ?>" r="28"/>
							<g class="fdeck-mod-ico" transform="translate(<?php echo (int) ( $fd_mx - 9 ); ?>,<?php echo (int) ( $fd_my - 9 ); ?>) scale(0.8)" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><?php echo $fd_icon; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG paths from xcrm_fd_icons(). ?></g>
							<text class="fdeck-label" x="<?php echo (int) $fd_mx; ?>" y="<?php echo (int) ( $fd_my + 46 ); ?>" text-anchor="middle"><?php echo esc_html( $fd_mod['t'] ); ?></text>
						</g>
					<?php endforeach; ?>
				</svg>
				<figcaption class="ft__mock-caption">تصویرسازی مفهومی از اکوسیستم محصول XCRM — همهٔ ماژول‌ها روی یک پایگاه دادهٔ مشتری کار می‌کنند.</figcaption>
			</figure>
		</div>
	</section>

	<!-- ══════════ DISCOVERY — SEARCH + CATEGORY TABS ══════════ -->
	<section class="ft__section fd__discover" id="catalog">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
					کاوش در قابلیت‌ها
				</span>
				<h2 class="ft__section-title">هر قابلیت XCRM را <span class="text-gradient-primary">کشف کنید</span></h2>
				<p class="ft__section-desc">
					<?php echo esc_html( $fd_fa_num( count( $fd_categories ) ) ); ?> دستهٔ توانمندی با مسیر شفاف از داده تا اقدام؛ هر قابلیت به صفحهٔ جزئیات خودش یا نزدیک‌ترین صفحهٔ مرتبط وصل است.
				</p>
			</div>

			<div class="fd__toolbar" data-reveal="up">
				<div class="fd__search">
					<svg class="fd__search-ico" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
					<input type="search" id="fd-search" class="fd__search-input" placeholder="نام قابلیت موردنظر خود را جستجو کنید..." aria-label="جستجو در قابلیت‌ها" autocomplete="off">
					<button type="button" class="fd__search-clear" id="fd-search-clear" hidden aria-label="پاک کردن جستجو">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
					</button>
				</div>
				<p class="fd__count" id="fd-count" role="status" aria-live="polite" hidden></p>
			</div>

			<div class="fd__tabs-wrap" data-reveal="up">
				<div class="fd__tabs scrollbar-hide" role="tablist" aria-label="دسته‌های قابلیت" id="fd-tabs">
					<button type="button" role="tab" id="fd-tab-all" class="fd__tab is-active" aria-selected="true" aria-controls="fd-panels" data-cat="all" tabindex="0">
						<?php echo esc_html( $fd_tab_labels['all'] ); ?>
					</button>
					<?php foreach ( $fd_categories as $fd_cat ) : ?>
						<button type="button" role="tab" id="fd-tab-<?php echo esc_attr( $fd_cat['key'] ); ?>" class="fd__tab" aria-selected="false" aria-controls="cat-<?php echo esc_attr( $fd_cat['key'] ); ?>" data-cat="<?php echo esc_attr( $fd_cat['key'] ); ?>" tabindex="-1">
							<?php echo esc_html( $fd_tab_labels[ $fd_cat['key'] ] ); ?>
							<span class="fd__tab-count" aria-hidden="true"><?php echo esc_html( $fd_fa_num( $fd_cat_counts[ $fd_cat['key'] ] ) ); ?></span>
						</button>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="fd__panels" id="fd-panels">
				<?php foreach ( $fd_categories as $fd_cat ) : ?>
					<?php
					$fd_cat_url = xcrm_fd_resolve_url( $fd_cat['next'][1], $dash_url );
					$fd_cat_ico = xcrm_fd_icons();
					?>
					<section class="fd__panel" id="cat-<?php echo esc_attr( $fd_cat['key'] ); ?>" data-cat="<?php echo esc_attr( $fd_cat['key'] ); ?>" role="tabpanel" aria-labelledby="fd-tab-<?php echo esc_attr( $fd_cat['key'] ); ?>" tabindex="0">
						<header class="fd__panel-head" data-reveal="up">
							<div class="fd__panel-info">
								<div class="fd__panel-meta">
									<span class="fd__panel-num" aria-hidden="true"><?php echo esc_html( $fd_cat['num'] ); ?></span>
									<span class="fd__panel-ico" aria-hidden="true">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo isset( $fd_cat_ico[ $fd_cat['icon'] ] ) ? $fd_cat_ico[ $fd_cat['icon'] ] : ''; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static icon paths. ?></svg>
									</span>
									<span class="fd__panel-count"><?php echo esc_html( $fd_fa_num( $fd_cat_counts[ $fd_cat['key'] ] ) ); ?> قابلیت</span>
								</div>
								<h3 class="fd__panel-title"><?php echo esc_html( $fd_cat['title'] ); ?></h3>
								<p class="fd__panel-headline"><?php echo esc_html( $fd_cat['headline'] ); ?></p>
								<p class="fd__panel-desc"><?php echo esc_html( $fd_cat['desc'] ); ?></p>
								<p class="fd__panel-note"><b>برای چه کسی:</b> <?php echo esc_html( $fd_cat['who'] ); ?></p>
								<p class="fd__panel-note"><b>مثال واقعی:</b> <?php echo esc_html( $fd_cat['scenario'] ); ?></p>
								<a class="fd__panel-next" href="<?php echo esc_url( $fd_cat_url ); ?>">
									<?php echo esc_html( $fd_cat['next'][0] ); ?>
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
								</a>
							</div>
							<div class="fd__panel-visual" aria-hidden="true">
								<?php echo xcrm_fd_visual( $fd_cat['visual'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- local SVG generator. ?>
							</div>
						</header>

						<div class="fd__grid">
							<?php foreach ( $fd_cat['cards'] as $fd_card ) : ?>
								<?php
								$fd_card_url = xcrm_fd_resolve_url( isset( $fd_card['u'] ) ? $fd_card['u'] : '', $fd_cat_url );
								$fd_badge_k  = isset( $fd_card['b'], $fd_badge_labels[ $fd_card['b'] ] ) ? $fd_card['b'] : '';
								$fd_mini_svg = ! empty( $fd_card['v'] ) ? xcrm_fd_mini( $fd_card['v'] ) : '';
								$fd_text     = $fd_card['t'] . ' ' . $fd_card['en'] . ' ' . $fd_card['d'] . ' ' . implode( ' ', $fd_card['c'] ) . ' ' . $fd_cat['title'] . ' ' . $fd_cat['key'];
								?>
								<article class="fd__card<?php echo '' !== $fd_mini_svg ? ' fd__card--visual' : ''; ?>" data-fd-card data-cat="<?php echo esc_attr( $fd_cat['key'] ); ?>" data-text="<?php echo esc_attr( strtolower( $fd_text ) ); ?>" data-reveal="up">
									<div class="fd__card-head">
										<span class="fd__card-ico" aria-hidden="true">
											<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo isset( $fd_cat_ico[ $fd_card['i'] ] ) ? $fd_cat_ico[ $fd_card['i'] ] : ''; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static icon paths. ?></svg>
										</span>
										<?php if ( '' !== $fd_badge_k ) : ?>
											<span class="fd__badge fd__badge--<?php echo esc_attr( $fd_badge_k ); ?>"><?php echo esc_html( $fd_badge_labels[ $fd_badge_k ] ); ?></span>
										<?php endif; ?>
									</div>
									<h4 class="fd__card-title">
										<?php echo esc_html( $fd_card['t'] ); ?>
										<span class="fd__card-en" aria-hidden="true"><?php echo esc_html( $fd_card['en'] ); ?></span>
									</h4>
									<p class="fd__card-desc"><?php echo esc_html( $fd_card['d'] ); ?></p>
									<?php if ( '' !== $fd_mini_svg ) : ?>
										<div class="fd__card-vis" aria-hidden="true"><?php echo $fd_mini_svg; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- local SVG generator. ?></div>
									<?php endif; ?>
									<ul class="fd__card-caps">
										<?php foreach ( $fd_card['c'] as $fd_cap ) : ?>
											<li><?php echo esc_html( $fd_cap ); ?></li>
										<?php endforeach; ?>
									</ul>
									<?php if ( ! empty( $fd_card['desc2'] ) ) : ?>
										<p class="fd__card-note"><?php echo esc_html( $fd_card['desc2'] ); ?></p>
									<?php endif; ?>
									<div class="fd__card-foot">
										<span class="fd__card-cat"><?php echo esc_html( $fd_tab_labels[ $fd_cat['key'] ] ); ?></span>
										<?php if ( '' !== $fd_card_url ) : ?>
											<a class="fd__card-link" href="<?php echo esc_url( $fd_card_url ); ?>">
												مشاهدهٔ جزئیات
												<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
											</a>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; ?>
						</div>

						<?php if ( ! empty( $fd_cat['cta'] ) ) : ?>
							<?php
							get_template_part(
								'template-parts/cta-section',
								null,
								array(
									'ft_cta_id'              => 'cta-' . $fd_cat['key'],
									'ft_cta_title'           => $fd_cat['cta']['title'],
									'ft_cta_desc'            => $fd_cat['cta']['desc'],
									'ft_cta_primary_url'     => $fd_cat['cta']['url'],
									'ft_cta_primary_label'   => $fd_cat['cta']['label'],
									'ft_cta_secondary_url'   => $fd_cat_url,
									'ft_cta_secondary_label' => 'مشاهدهٔ صفحهٔ ' . $fd_cat['title'],
								)
							);
							?>
						<?php endif; ?>
					</section>
				<?php endforeach; ?>
			</div>

			<!-- Search results (cloned cards) + empty state -->
			<div class="fd__results" id="fd-results" hidden>
				<div class="fd__grid" id="fd-results-grid"></div>
			</div>
			<div class="fd__empty" id="fd-empty" hidden>
				<svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/><path d="m8 8 6 6"/></svg>
				<p class="fd__empty-title">نتیجه‌ای با این عبارت پیدا نشد.</p>
				<p class="fd__empty-desc">عبارت دیگری امتحان کنید یا جستجو را پاک کنید تا همهٔ قابلیت‌ها را ببینید.</p>
				<button type="button" class="hp__btn hp__btn--ghost" id="fd-empty-clear">پاک کردن جستجو</button>
			</div>
		</div>
	</section>

	<!-- ══════════ CUSTOMER LIFECYCLE JOURNEY ══════════ -->
	<section class="ft__section ft__section--surface fd__journey" id="journey">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
					مسیر مشتری
				</span>
				<h2 class="ft__section-title">تمام مسیر مشتری، <span class="text-gradient-primary">از اولین تعامل تا تبدیل و وفاداری</span></h2>
				<p class="ft__section-desc">
					این دیاگرام نحوهٔ اتصال اجزای پیاده‌سازی‌شدهٔ محصول را نشان می‌دهد، نه اینکه هر مشتری دقیقاً همین مسیر را طی کند.
				</p>
			</div>

			<?php $fd_icon_lib = xcrm_fd_icons(); ?>
			<div class="fd__journey-scroll scrollbar-hide" data-reveal="up">
				<div class="fd__track">
					<svg class="fd__track-line" viewBox="0 0 2010 56" preserveAspectRatio="none" aria-hidden="true" focusable="false">
						<path id="fd-jr-p" class="fd__track-path fdv-draw" pathLength="1" d="M2004 28 H6" stroke="url(#fd-line)" stroke-width="2.5" stroke-dasharray="1" fill="none"/>
						<circle r="5" class="fdeck-particle fdeck-particle--in">
							<animateMotion dur="7s" repeatCount="indefinite" begin="0.4s"><mpath href="#fd-jr-p"/></animateMotion>
						</circle>
						<circle r="4" class="fdeck-particle fdeck-particle--out">
							<animateMotion dur="8.5s" repeatCount="indefinite" begin="2.6s"><mpath href="#fd-jr-p"/></animateMotion>
						</circle>
					</svg>
					<ol class="fd__steps">
						<?php $fd_jnum = 0; ?>
						<?php foreach ( $fd_journey as $fd_step ) : ?>
							<?php $fd_jnum++; ?>
							<li class="fd__step">
								<span class="fd__step-num" aria-hidden="true"><?php echo esc_html( $fd_fa_num( $fd_jnum ) ); ?></span>
								<span class="fd__step-ico" aria-hidden="true">
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo isset( $fd_icon_lib[ $fd_step['i'] ] ) ? $fd_icon_lib[ $fd_step['i'] ] : ''; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static icon paths. ?></svg>
								</span>
								<h3 class="fd__step-t"><?php echo esc_html( $fd_step['t'] ); ?></h3>
								<p class="fd__step-d"><?php echo esc_html( $fd_step['d'] ); ?></p>
							</li>
						<?php endforeach; ?>
					</ol>
				</div>
			</div>
			<p class="fd__journey-hint" aria-hidden="true">برای دیدن همهٔ مراحل، افقی بکشید</p>
		</div>
	</section>

	<!-- ══════════ INDUSTRY USE CASES ══════════ -->
	<section class="ft__section fd__usecases" id="usecases">
		<div class="ft__inner">
			<div class="ft__section-head" data-reveal="up">
				<span class="ft__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>
					کاربرد در عمل
				</span>
				<h2 class="ft__section-title">XCRM در بخش‌های مختلف کسب‌وکار <span class="text-gradient-primary">چه کاربردی دارد؟</span></h2>
				<p class="ft__section-desc">
					هر بخش از همان قابلیت‌های پیاده‌سازی‌شده استفاده می‌کند؛ تفاوت فقط در این است که کدام مسیر برای شما مهم‌تر است.
				</p>
			</div>

			<div class="fd__grid fd__grid--uc">
				<?php foreach ( $fd_usecases as $fd_uc ) : ?>
					<article class="fd__card fd__uc" data-reveal="up">
						<div class="fd__card-head">
							<span class="fd__card-ico fd__card-ico--lg" aria-hidden="true">
								<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo isset( $fd_icon_lib[ $fd_uc['i'] ] ) ? $fd_icon_lib[ $fd_uc['i'] ] : ''; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static icon paths. ?></svg>
							</span>
						</div>
						<h3 class="fd__card-title"><?php echo esc_html( $fd_uc['t'] ); ?></h3>
						<p class="fd__card-desc"><?php echo esc_html( $fd_uc['d'] ); ?></p>
						<ul class="fd__card-caps fd__card-caps--chip">
							<?php foreach ( $fd_uc['c'] as $fd_ucc ) : ?>
								<li><?php echo esc_html( $fd_ucc ); ?></li>
							<?php endforeach; ?>
						</ul>
						<div class="fd__card-foot fd__uc-links">
							<?php foreach ( $fd_uc['links'] as $fd_ul ) : ?>
								<?php $fd_ul_url = xcrm_fd_resolve_url( $fd_ul[1] ); ?>
								<?php if ( '' !== $fd_ul_url ) : ?>
									<a class="fd__uc-link" href="<?php echo esc_url( $fd_ul_url ); ?>"><?php echo esc_html( $fd_ul[0] ); ?></a>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- ══════════ FAQ ══════════ -->
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
				array(
					'q' => 'جست‌وجوی این صفحه چطور کار می‌کند؟',
					'a' => 'نام فارسی یا فنی قابلیت موردنظر را بنویسید تا نتایج از میان همهٔ دسته‌ها نمایش داده شود؛ با تب‌های دسته‌بندی هم می‌توانید فقط یک حوزه را مرور کنید.',
				),
			),
		)
	);
	?>

	<!-- ══════════ FINAL CTA ══════════ -->
	<?php
	get_template_part(
		'template-parts/cta-section',
		null,
		array(
			'ft_cta_id'              => 'cta',
			'ft_cta_title'           => 'تمام ظرفیت کسب‌وکار خود را با شناخت بهتر مشتریان فعال کنید.',
			'ft_cta_desc'            => 'با امکانات یکپارچه XCRM، داده‌های مشتریان را به شناخت بهتر، تصمیم‌گیری دقیق‌تر و فرایندهای هدفمند فروش و بازاریابی تبدیل کنید.',
			'ft_cta_primary_url'     => $dash_url,
			'ft_cta_primary_label'   => 'شروع استفاده از XCRM',
			'ft_cta_secondary_url'   => home_url( '/for-business/' ),
			'ft_cta_secondary_label' => 'آشنایی با راهکارهای XCRM',
		)
	);
	?>

</main>

<!-- FOOTER -->
<?php get_template_part( 'template-parts/site-footer' ); ?>

<?php wp_enqueue_script( 'xcrm-features-directory' ); ?>
<?php wp_footer(); ?>
</body>
</html>



