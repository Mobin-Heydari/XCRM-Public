<?php
/**
 * Feature hero graphic — shared animated SVG illustration for feature heroes.
 *
 * Renders a unique, feature-specific animated SVG based on the page's slug.
 * One partial drives every feature page so markup stays manageable while each
 * illustration keeps its own nodes, labels, connections and motion.
 *
 * Args (via get_template_part $args):
 *   slug    (string)  feature slug — selects the illustration spec
 *   caption (string, optional) overrides the default caption
 *
 * All SVG ids are prefixed with the illustration id (no cross-page collisions).
 * The graphic is decorative (aria-hidden) — surrounding copy explains the feature.
 * Reduced motion: CSS neutralises the animations and the inline script pauses
 * the SMIL particle timeline.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$xcrm_fhg_slug = '';
if ( isset( $args ) && is_array( $args ) && ! empty( $args['slug'] ) ) {
	$xcrm_fhg_slug = (string) $args['slug'];
}
if ( '' === $xcrm_fhg_slug && isset( $slug ) ) {
	$xcrm_fhg_slug = (string) $slug;
}

/* Icon library — 24-viewBox feather-style inner markup. */
$xcrm_fhg_icons = array(
	'phone'    => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.7 2.6a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.5-1.2a2 2 0 0 1 2.1-.4c.8.3 1.7.5 2.6.7a2 2 0 0 1 1.7 2Z"/>',
	'mail'     => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>',
	'device'   => '<rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/>',
	'tag'      => '<path d="M20.59 13.41 11 3H4v7l9.59 9.59a2 2 0 0 0 2.82 0l4.18-4.18a2 2 0 0 0 0-2.82z"/><circle cx="7.5" cy="7.5" r=".8"/>',
	'globe'    => '<circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',
	'clock'    => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
	'chart'    => '<path d="M3 3v18h18"/><path d="M7 16v-5"/><path d="M12 16V8"/><path d="M17 16v-3"/>',
	'funnel'   => '<path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/>',
	'users'    => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/>',
	'wallet'   => '<rect x="2" y="6" width="20" height="14" rx="2"/><circle cx="12" cy="13" r="2"/><path d="M6 10h.01"/><path d="M18 10h.01"/>',
	'eye'      => '<path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/>',
	'filter'   => '<path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/>',
	'file'     => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/>',
	'message'  => '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>',
	'check'    => '<path d="M20 6 9 17l-5-5"/>',
	'click'    => '<path d="M4 4l7 16 2.2-7.2L20.5 10z"/>',
	'bolt'     => '<path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/>',
	'send'     => '<path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/>',
	'bell'     => '<path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/>',
	'database' => '<ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.7 4 3 9 3s9-1.3 9-3V5"/><path d="M3 12c0 1.7 4 3 9 3s9-1.3 9-3"/>',
	'code'     => '<path d="m16 18 6-6-6-6"/><path d="m8 6-6 6 6 6"/>',
	'layers'   => '<path d="m12 2 9 5-9 5-9-5z"/><path d="m3 12 9 5 9-5"/><path d="m3 17 9 5 9-5"/>',
	'play'     => '<circle cx="12" cy="12" r="10"/><path d="m10 8 6 4-6 4Z"/>',
	'template' => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/>',
	'edit'     => '<path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/>',
	'plus'     => '<path d="M12 5v14"/><path d="M5 12h14"/>',
	'box'      => '<path d="M21 8 12 3 3 8v8l9 5 9-5z"/><path d="m3 8 9 5 9-5"/><path d="M12 13v8"/>',
	'crown'    => '<path d="M3 6l3.5 5L12 4l5.5 7L21 6l-2 13H5z"/>',
	'key'      => '<circle cx="8" cy="15" r="4"/><path d="m10.85 12.15-1.42-1.42"/><path d="M16 8h.01"/><path d="M13.5 3.5 21 11"/><path d="m18 6 3 3"/>',
	'shield'   => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
	'route'    => '<circle cx="6" cy="19" r="3"/><path d="M9 19h6.5a3.5 3.5 0 0 0 0-7h-7a3.5 3.5 0 0 1 0-7H15"/><circle cx="18" cy="5" r="3"/>',
	'search'   => '<circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/>',
	'sliders'  => '<path d="M4 21v-7"/><path d="M4 10V3"/><path d="M12 21v-9"/><path d="M12 8V3"/><path d="M20 21v-5"/><path d="M20 12V3"/><path d="M1 14h6"/><path d="M9 8h6"/><path d="M17 16h6"/>',
	'gear'     => '<circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 1 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/>',
);
/*
 * Illustration specs — one per feature page (structure + labels differ).
 * variant: hub | flow | branch | split  ·  wave: staggered y for flow lines
 */
$xcrm_fhg_graphics = array(
	'customer-management' => array(
		'id'      => 'cm',
		'variant' => 'hub',
		'center'  => array( 't' => 'پروفایل مشتری', 's' => 'هستهٔ داده' ),
		'nodes'   => array(
			array( 't' => 'تلفن', 'i' => 'phone', 'c' => 'primary' ),
			array( 't' => 'ایمیل', 'i' => 'mail', 'c' => 'cyan' ),
			array( 't' => 'دستگاه', 'i' => 'device', 'c' => 'warn' ),
			array( 't' => 'برچسب‌ها', 'i' => 'tag', 'c' => 'purple' ),
			array( 't' => 'حساب اجتماعی', 'i' => 'globe', 'c' => 'pink' ),
			array( 't' => 'خط زمانی', 'i' => 'clock', 'c' => 'success' ),
		),
		'cap'     => 'تصویرسازی مفهومی: پروفایل مشتری و راه‌های ارتباطی متعدد که به یک رکورد وصل می‌شوند',
	),
	'website-tracking' => array(
		'id'      => 'wt',
		'variant' => 'flow',
		'wave'    => true,
		'nodes'   => array(
			array( 't' => 'مرورگر', 'i' => 'browser', 'c' => 'primary' ),
			array( 't' => 'SDK', 'i' => 'code', 'c' => 'cyan' ),
			array( 't' => 'XCRM', 'i' => 'database', 'c' => 'purple' ),
			array( 't' => 'رویدادها', 'i' => 'chart', 'c' => 'success' ),
		),
		'cap'     => 'تصویرسازی مفهومی: مرورگر رویدادها را از طریق SDK به XCRM می‌فرستد',
	),
	'analytics' => array(
		'id'      => 'an',
		'variant' => 'hub',
		'center'  => array( 't' => 'تحلیل رفتار', 's' => 'داشبورد' ),
		'nodes'   => array(
			array( 't' => 'ترافیک', 'i' => 'chart', 'c' => 'primary' ),
			array( 't' => 'قیف تبدیل', 'i' => 'funnel', 'c' => 'cyan' ),
			array( 't' => 'کوهورت', 'i' => 'users', 'c' => 'purple' ),
			array( 't' => 'درآمد', 'i' => 'wallet', 'c' => 'success' ),
			array( 't' => 'رفتار', 'i' => 'eye', 'c' => 'warn' ),
		),
		'cap'     => 'تصویرسازی مفهومی: مرکز تحلیل متصل به نمودارها، قیف، کوهورت، درآمد و رفتار',
	),
	'segmentation' => array(
		'id'      => 'sg',
		'variant' => 'split',
		'nodes'   => array(
			array( 't' => 'جمعیت مشتریان', 'i' => 'users', 'c' => 'primary', 'cluster' => true ),
			array( 't' => 'ویژگی‌ها', 'i' => 'tag', 'c' => 'cyan', 'seg' => true ),
			array( 't' => 'رفتار', 'i' => 'bolt', 'c' => 'warn', 'seg' => true ),
			array( 't' => 'گروه‌ها', 'i' => 'filter', 'c' => 'success', 'seg' => true ),
		),
		'cap'     => 'تصویرسازی مفهومی: جمعیت مشتریان بر اساس ویژگی و رفتار به گروه‌های جدا تقسیم می‌شود',
	),
	'sales-pipeline' => array(
		'id'      => 'sp',
		'variant' => 'flow',
		'nodes'   => array(
			array( 't' => 'سرنخ', 'i' => 'users', 'c' => 'primary' ),
			array( 't' => 'پیشنهاد', 'i' => 'file', 'c' => 'cyan' ),
			array( 't' => 'مذاکره', 'i' => 'message', 'c' => 'warn' ),
			array( 't' => 'بستن قرارداد', 'i' => 'check', 'c' => 'success' ),
		),
		'cap'     => 'تصویرسازی مفهومی: حرکت کارت‌های فروش از سرنخ تا بستن قرارداد',
	),
	'automation' => array(
		'id'      => 'au',
		'variant' => 'branch',
		'nodes'   => array(
			array( 't' => 'رویداد', 'i' => 'click', 'c' => 'primary' ),
			array( 't' => 'فوری', 'i' => 'bolt', 'c' => 'success' ),
			array( 't' => 'تأخیردار', 'i' => 'clock', 'c' => 'warn' ),
			array( 't' => 'در صورت عدم وقوع', 'i' => 'eye', 'c' => 'cyan' ),
		),
		'cap'     => 'تصویرسازی مفهومی: رویداد ورودی به سه مسیر فوری، تأخیردار و غیابی وصل می‌شود',
	),
	'communication' => array(
		'id'      => 'co',
		'variant' => 'hub',
		'center'  => array( 't' => 'ارتباطات', 's' => 'کانال‌ها' ),
		'nodes'   => array(
			array( 't' => 'پیامک', 'i' => 'send', 'c' => 'primary' ),
			array( 't' => 'ایمیل', 'i' => 'mail', 'c' => 'cyan' ),
			array( 't' => 'پوش', 'i' => 'bell', 'c' => 'warn' ),
			array( 't' => 'تلگرام', 'i' => 'message', 'c' => 'purple' ),
		),
		'cap'     => 'تصویرسازی مفهومی: مرکز ارتباطات متصل به پیامک، ایمیل، پوش و تلگرام',
	),
	'workflow-automation' => array(
		'id'      => 'wf',
		'variant' => 'flow',
		'wave'    => true,
		'nodes'   => array(
			array( 't' => 'XCRM', 'i' => 'database', 'c' => 'primary' ),
			array( 't' => 'وب‌هوک', 'i' => 'code', 'c' => 'cyan' ),
			array( 't' => 'گردش‌کار n8n', 'i' => 'layers', 'c' => 'purple' ),
			array( 't' => 'اجرا', 'i' => 'play', 'c' => 'success' ),
		),
		'cap'     => 'تصویرسازی مفهومی: گردش‌کار گره‌ای n8n متصل به هستهٔ XCRM',
	),
	'templates' => array(
		'id'      => 'tp',
		'variant' => 'flow',
		'nodes'   => array(
			array( 't' => 'قالب آماده', 'i' => 'template', 'c' => 'primary' ),
			array( 't' => 'سفارشی‌سازی', 'i' => 'edit', 'c' => 'warn' ),
			array( 't' => 'ایجاد یک‌کلیکی', 'i' => 'plus', 'c' => 'cyan' ),
			array( 't' => 'منابع آماده', 'i' => 'box', 'c' => 'success' ),
		),
		'cap'     => 'تصویرسازی مفهومی: قالب آماده به منبع پیکربندی‌شده تبدیل می‌شود',
	),
	'team-management' => array(
		'id'      => 'tm',
		'variant' => 'hub',
		'center'  => array( 't' => 'منابع شرکت', 's' => 'دسترسی' ),
		'nodes'   => array(
			array( 't' => 'مدیر', 'i' => 'crown', 'c' => 'primary' ),
			array( 't' => 'اعضا', 'i' => 'users', 'c' => 'cyan' ),
			array( 't' => 'مجوزها', 'i' => 'key', 'c' => 'warn' ),
			array( 't' => 'پشتیبانی', 'i' => 'shield', 'c' => 'success' ),
			array( 't' => 'مالی', 'i' => 'wallet', 'c' => 'purple' ),
		),
		'cap'     => 'تصویرسازی مفهومی: کارکنان با نقش‌ها و مجوزها به منابع شرکت وصل می‌شوند',
	),
	'revenue-attribution' => array(
		'id'      => 'ra',
		'variant' => 'flow',
		'wave'    => true,
		'nodes'   => array(
			array( 't' => 'منابع ورودی', 'i' => 'globe', 'c' => 'primary' ),
			array( 't' => 'UTM', 'i' => 'tag', 'c' => 'cyan' ),
			array( 't' => 'مسیر مشتری', 'i' => 'route', 'c' => 'warn' ),
			array( 't' => 'درآمد', 'i' => 'wallet', 'c' => 'success' ),
			array( 't' => 'LTV', 'i' => 'chart', 'c' => 'purple' ),
		),
		'cap'     => 'تصویرسازی مفهومی: منابع ورودی و UTM به درآمد و ارزش مشتری تبدیل می‌شوند',
	),
	'identity-resolution' => array(
		'id'      => 'ir',
		'variant' => 'flow',
		'nodes'   => array(
			array( 't' => 'LUID ناشناس', 'i' => 'database', 'c' => 'primary' ),
			array( 't' => 'CUID', 'i' => 'key', 'c' => 'cyan' ),
			array( 't' => 'PID', 'i' => 'file', 'c' => 'warn' ),
			array( 't' => 'تطبیق هویت', 'i' => 'search', 'c' => 'purple' ),
			array( 't' => 'پروفایل', 'i' => 'users', 'c' => 'success' ),
		),
		'cap'     => 'تصویرسازی مفهومی: شناسه‌های ناشناس و شرکتی از فرایند تطبیق به پروفایل مشتری می‌رسند',
	),
	'event-management' => array(
		'id'      => 'em',
		'variant' => 'flow',
		'wave'    => true,
		'nodes'   => array(
			array( 't' => 'تعامل کاربر', 'i' => 'click', 'c' => 'primary' ),
			array( 't' => 'رویداد', 'i' => 'bolt', 'c' => 'cyan' ),
			array( 't' => 'ویژگی‌ها', 'i' => 'sliders', 'c' => 'warn' ),
			array( 't' => 'تحلیل', 'i' => 'chart', 'c' => 'success' ),
			array( 't' => 'اتوماسیون', 'i' => 'gear', 'c' => 'purple' ),
		),
		'cap'     => 'تصویرسازی مفهومی: تعامل کاربر به رویداد ساخت‌یافته و سپس تحلیل و اتوماسیون تبدیل می‌شود',
	),
);

if ( '' === $xcrm_fhg_slug || ! isset( $xcrm_fhg_graphics[ $xcrm_fhg_slug ] ) ) {
	return;
}

$fhg        = $xcrm_fhg_graphics[ $xcrm_fhg_slug ];
$id         = $fhg['id'];
$variant    = $fhg['variant'];
$nodes      = $fhg['nodes'];
$node_count = count( $nodes );
$cap        = ( isset( $args['caption'] ) && '' !== $args['caption'] ) ? (string) $args['caption'] : ( isset( $fhg['cap'] ) ? $fhg['cap'] : '' );

/* ---------------- geometry: node positions + connection paths ----------------
 * viewBox 640x400, logical centre (320,190). RTL reading order: flow and
 * branch variants start on the right and travel left.
 */
$ccx   = 320;
$ccy   = 190;
$pos   = array(); // per node: array( x, y, r )
$links = array(); // visible connection path data (d attributes)

if ( 'hub' === $variant ) {
	$rx = 200;
	$ry = 124;
	for ( $i = 0; $i < $node_count; $i++ ) {
		$a     = deg2rad( -90 + ( 360 / $node_count ) * $i );
		$pos[] = array(
			round( $ccx + $rx * cos( $a ) ),
			round( $ccy + $ry * sin( $a ) ),
			30,
		);
	}
	foreach ( $pos as $p ) {
		$nx  = $p[0];
		$ny  = $p[1];
		$dx  = $ccx - $nx;
		$dy  = $ccy - $ny;
		$len = max( 1, sqrt( $dx * $dx + $dy * $dy ) );
		// Gentle perpendicular bow so curved links read as an organic web.
		$qx     = round( ( $nx + $ccx ) / 2 + ( -$dy / $len ) * 22 );
		$qy     = round( ( $ny + $ccy ) / 2 + ( $dx / $len ) * 22 );
		$links[] = "M{$nx} {$ny} Q{$qx} {$qy} {$ccx} {$ccy}";
	}
} elseif ( 'flow' === $variant ) {
	$wave = ! empty( $fhg['wave'] );
	for ( $i = 0; $i < $node_count; $i++ ) {
		$x = $node_count > 1 ? round( 560 - $i * ( 420 / ( $node_count - 1 ) ) ) : $ccx;
		$y = $ccy;
		if ( $wave && $node_count > 1 ) {
			$y = $ccy + ( 0 === $i % 2 ? -42 : 42 );
		}
		$pos[] = array( $x, $y, 34 );
	}
	for ( $i = 0; $i < $node_count - 1; $i++ ) {
		$y1  = $pos[ $i ][1];
		$y2  = $pos[ $i + 1 ][1];
		$ex1 = $pos[ $i ][0] - $pos[ $i ][2];
		$ex2 = $pos[ $i + 1 ][0] + $pos[ $i + 1 ][2];
		$links[] = "M{$ex1} {$y1} L{$ex2} {$y2}";
	}
} else {
	// branch / split: one source (right) fans out to targets (left).
	$targets = array_slice( $nodes, 1 );
	$t_count = count( $targets );
	$pos[]   = array( 525, $ccy, 40 );
	if ( 3 === $t_count ) {
		$ys = array( 78, 190, 302 );
	} elseif ( 2 === $t_count ) {
		$ys = array( 118, 262 );
	} else {
		$ys   = array();
		$step = 260 / max( 1, $t_count - 1 );
		for ( $k = 0; $k < $t_count; $k++ ) {
			$ys[] = round( 70 + $step * $k );
		}
	}
	foreach ( $ys as $ty ) {
		$pos[]   = array( 115, $ty, 32 );
		$links[] = 'M485 ' . $ccy . ' C380 ' . $ccy . ', 250 ' . $ty . ', 147 ' . $ty;
	}
}
?>
<div class="ft__hero-graphic" data-reveal="up">
	<svg class="fhg fhg--<?php echo esc_attr( $variant ); ?>" viewBox="0 0 640 400" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" data-fhg role="presentation">
		<defs>
			<linearGradient id="<?php echo esc_attr( $id ); ?>-line" x1="0" y1="0" x2="1" y2="0">
				<stop offset="0%" class="fhg-g1"/>
				<stop offset="50%" class="fhg-g2"/>
				<stop offset="100%" class="fhg-g3"/>
			</linearGradient>
			<radialGradient id="<?php echo esc_attr( $id ); ?>-core" cx="50%" cy="50%" r="50%">
				<stop offset="0%" class="fhg-core-1"/>
				<stop offset="60%" class="fhg-core-2"/>
				<stop offset="100%" class="fhg-core-3"/>
			</radialGradient>
			<radialGradient id="<?php echo esc_attr( $id ); ?>-glow" cx="50%" cy="50%" r="50%">
				<stop offset="0%" class="fhg-glow-1"/>
				<stop offset="100%" class="fhg-glow-2"/>
			</radialGradient>
			<filter id="<?php echo esc_attr( $id ); ?>-blur" x="-50%" y="-50%" width="200%" height="200%">
				<feGaussianBlur stdDeviation="14"/>
			</filter>
		</defs>
		<!-- ambient glow + orbital rings -->
		<ellipse class="fhg-glow" cx="<?php echo (int) $ccx; ?>" cy="<?php echo (int) $ccy; ?>" rx="250" ry="168" fill="url(#<?php echo esc_attr( $id ); ?>-glow)" filter="url(#<?php echo esc_attr( $id ); ?>-blur)"/>
		<circle class="fhg-orbit fhg-orbit--1" cx="<?php echo (int) $ccx; ?>" cy="<?php echo (int) $ccy; ?>" r="150"/>
		<circle class="fhg-orbit fhg-orbit--2" cx="<?php echo (int) $ccx; ?>" cy="<?php echo (int) $ccy; ?>" r="205"/>
		<circle class="fhg-orbit fhg-orbit--3" cx="<?php echo (int) $ccx; ?>" cy="<?php echo (int) $ccy; ?>" r="258"/>

		<?php // visible connection paths (drawn on reveal) + hidden motion paths. ?>
		<?php foreach ( $links as $li => $d ) : ?>
			<path class="fhg-link fhg-link--<?php echo ( ( $li % 6 ) + 1 ); ?>" pathLength="1" d="<?php echo esc_attr( $d ); ?>" stroke="url(#<?php echo esc_attr( $id ); ?>-line)" stroke-width="2" stroke-dasharray="1" fill="none"/>
			<path id="<?php echo esc_attr( $id ); ?>-p<?php echo (int) $li; ?>" d="<?php echo esc_attr( $d ); ?>" fill="none" stroke="none"/>
		<?php endforeach; ?>

		<?php // flowing particles — capped at 6, staggered, to avoid motion clutter. ?>
		<?php
		$fhg_particles = min( 6, count( $links ) );
		for ( $p = 0; $p < $fhg_particles; $p++ ) :
			?>
			<circle r="<?php echo 0 === $p % 2 ? 4 : 3.5; ?>" class="fhg-particle fhg-p-<?php echo ( ( $p % 6 ) + 1 ); ?>">
				<animateMotion dur="<?php echo 0 === $p % 2 ? '3.2s' : '3.8s'; ?>" repeatCount="indefinite" begin="<?php echo esc_attr( round( 0.6 + $p * 0.45, 2 ) ); ?>s">
					<mpath href="#<?php echo esc_attr( $id ); ?>-p<?php echo (int) $p; ?>"/>
				</animateMotion>
			</circle>
		<?php endfor; ?>

		<?php if ( 'hub' === $variant && ! empty( $fhg['center'] ) ) : ?>
			<g class="fhg-hub">
				<circle class="fhg-hub-core" cx="<?php echo (int) $ccx; ?>" cy="<?php echo (int) $ccy; ?>" r="54" fill="url(#<?php echo esc_attr( $id ); ?>-core)"/>
				<circle class="fhg-hub-ring" cx="<?php echo (int) $ccx; ?>" cy="<?php echo (int) $ccy; ?>" r="64"/>
				<circle class="fhg-hub-ring fhg-hub-ring--2" cx="<?php echo (int) $ccx; ?>" cy="<?php echo (int) $ccy; ?>" r="70"/>
				<text x="<?php echo (int) $ccx; ?>" y="<?php echo (int) ( $ccy - 3 ); ?>" text-anchor="middle" class="fhg-hub-t"><?php echo esc_html( $fhg['center']['t'] ); ?></text>
				<text x="<?php echo (int) $ccx; ?>" y="<?php echo (int) ( $ccy + 15 ); ?>" text-anchor="middle" class="fhg-hub-s"><?php echo esc_html( $fhg['center']['s'] ); ?></text>
			</g>
		<?php endif; ?>

		<?php // feature nodes (icon inside, Persian label below). ?>
		<?php foreach ( $nodes as $ni => $node ) : ?>
			<?php
			$nx  = $pos[ $ni ][0];
			$ny  = $pos[ $ni ][1];
			$nr  = $pos[ $ni ][2];
			$ico = isset( $xcrm_fhg_icons[ $node['i'] ] ) ? $xcrm_fhg_icons[ $node['i'] ] : '';
			$cls = 'fhg-node is-' . ( isset( $node['c'] ) ? $node['c'] : 'primary' );
			$ly  = $ny + $nr + 19;
			?>
			<g class="<?php echo esc_attr( $cls ); ?>">
				<circle class="fhg-node-bg" cx="<?php echo (int) $nx; ?>" cy="<?php echo (int) $ny; ?>" r="<?php echo (int) $nr; ?>"/>
				<circle class="fhg-node-ring" cx="<?php echo (int) $nx; ?>" cy="<?php echo (int) $ny; ?>" r="<?php echo (int) ( $nr + 6 ); ?>"/>
				<?php if ( ! empty( $node['cluster'] ) ) : ?>
					<circle class="fhg-mini m1" cx="<?php echo (int) ( $nx - 11 ); ?>" cy="<?php echo (int) ( $ny - 7 ); ?>" r="5"/>
					<circle class="fhg-mini m2" cx="<?php echo (int) ( $nx + 11 ); ?>" cy="<?php echo (int) ( $ny - 10 ); ?>" r="5"/>
					<circle class="fhg-mini m3" cx="<?php echo (int) $nx; ?>" cy="<?php echo (int) ( $ny + 9 ); ?>" r="5"/>
				<?php elseif ( ! empty( $node['seg'] ) ) : ?>
					<circle class="fhg-mini-ring" cx="<?php echo (int) $nx; ?>" cy="<?php echo (int) $ny; ?>" r="<?php echo (int) ( $nr - 12 ); ?>"/>
				<?php elseif ( '' !== $ico ) : ?>
					<g class="fhg-ico" transform="translate(<?php echo (int) ( $nx - 9 ); ?>,<?php echo (int) ( $ny - 9 ); ?>) scale(0.75)" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><?php echo $ico; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG path data from the local icon map. ?></g>
				<?php endif; ?>
				<text class="fhg-label" x="<?php echo (int) $nx; ?>" y="<?php echo (int) $ly; ?>" text-anchor="middle"><?php echo esc_html( $node['t'] ); ?></text>
			</g>
		<?php endforeach; ?>

		<!-- floating accent dots + plus marks -->
		<circle class="fhg-dot fhg-dot--1" cx="46" cy="150" r="3"/>
		<circle class="fhg-dot fhg-dot--2" cx="612" cy="110" r="2.5"/>
		<circle class="fhg-dot fhg-dot--3" cx="34" cy="330" r="2.5"/>
		<circle class="fhg-dot fhg-dot--4" cx="612" cy="344" r="2.5"/>
		<circle class="fhg-dot fhg-dot--5" cx="395" cy="384" r="3"/>
		<circle class="fhg-dot fhg-dot--6" cx="150" cy="372" r="2"/>
		<circle class="fhg-dot fhg-dot--7" cx="470" cy="378" r="2.5"/>
		<text class="fhg-plus fhg-plus--1" x="600" y="60" font-size="14">+</text>
		<text class="fhg-plus fhg-plus--2" x="52" y="238" font-size="12">+</text>
		<text class="fhg-plus fhg-plus--3" x="500" y="66" font-size="11">+</text>
		<text class="fhg-plus fhg-plus--4" x="200" y="40" font-size="10">+</text>
	</svg>
	<?php if ( '' !== $cap ) : ?>
		<p class="ft__mock-caption"><?php echo esc_html( $cap ); ?></p>
	<?php endif; ?>
</div>
<script>
( function () {
	try {
		if ( window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches ) {
			document.querySelectorAll( 'svg[data-fhg]' ).forEach( function ( svg ) {
				if ( typeof svg.pauseAnimations === 'function' ) { svg.pauseAnimations(); }
			} );
		}
	} catch ( e ) { /* no-op */ }
} )();
</script>
