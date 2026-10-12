<?php
/**
 * Template Name: Legal Page
 * Template Post Type: page
 *
 * Shared template for Privacy Policy (/privacy-policy)
 * and Terms of Service (/terms).
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_stylesheet_directory() . '/inc/legal-content.php';

/* Detect which legal page based on URI */
$uri = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ), PHP_URL_PATH ) : '';
$uri = untrailingslashit( (string) $uri );
$legal_key = ( false !== strpos( $uri, '/terms' ) ) ? 'terms' : 'privacy';

$data = xcrm_get_legal_data( $legal_key );

$home_url  = home_url( '/' );
$canonical = home_url( '/' . $legal_key === 'terms' ? '/terms/' : '/privacy-policy/' );
$page_title = $data['title'] . ' | xCRM';
$page_desc  = $data['description'];

/* Icon SVGs (inline, no library) */
$icons = array(
	'lock'        => '<path d="M7 11V7a5 5 0 0 1 10 0v4"/><rect x="3" y="11" width="18" height="11" rx="2"/>',
	'shield-check' => '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/>',
	'shield'      => '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/>',
	'sparkles'    => '<path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/>',
	'calendar'    => '<path d="M8 2v4M16 2v4"/><rect x="2" y="4" width="20" height="18" rx="2"/><path d="M2 10h20"/>',
	'layers'      => '<path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/>',
	'clock'       => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
	'list'        => '<path d="M3 12h.01M3 18h.01M3 6h.01M8 12h13M8 18h13M8 6h13"/>',
	'arrow-left'  => '<path d="m12 19-7-7 7-7"/><path d="M19 12H5"/>',
	'arrow-up'    => '<path d="m18 15-6-6-6 6"/>',
	'database'    => '<ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14a9 3 0 0 0 18 0V5"/><path d="M3 12a9 3 0 0 0 18 0"/>',
	'server'      => '<rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><path d="M6 6h.01M6 18h.01"/>',
	'users'       => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
	'globe'       => '<circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20M2 12h20"/>',
	'key'         => '<path d="m21 2-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0 3 3L22 7l-3-3m-3.5 3.5L19 4"/>',
	'timer'       => '<path d="M10 2h4"/><path d="M12 14l3-3"/><circle cx="12" cy="14" r="8"/>',
	'refresh'     => '<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/><path d="M8 16H3v5"/>',
	'mail'        => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>',
	'user-cog'    => '<path d="M18 21a6 6 0 0 0-12 0"/><circle cx="12" cy="10" r="4"/><circle cx="12" cy="12" r="10"/>',
	'user-x'      => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="m17 8 5 5M22 8l-5 5"/>',
	'book'        => '<path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/>',
	'ban'         => '<circle cx="12" cy="12" r="10"/><path d="m4.9 4.9 14.2 14.2"/>',
	'copyright'   => '<circle cx="12" cy="12" r="10"/><path d="M14.83 14.83a4 4 0 1 1 0-5.66"/>',
	'credit-card' => '<rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/>',
	'file'        => '<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z"/><path d="M14 2v5h6"/>',
	'scale'       => '<path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="M7 21h10"/><path d="M12 3v18"/><path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"/>',
	'check'       => '<path d="M20 6 9 17l-5-5"/>',
	'alert'       => '<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/>',
	'info'        => '<circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/>',
	'success'     => '<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/>',
	'chevron'     => '<path d="m6 9 6 6 6-6"/>',
);

function xcrm_legal_icon( $icons, $name, $size = 20, $cls = '' ) {
	$path = isset( $icons[ $name ] ) ? $icons[ $name ] : $icons['info'];
	return '<svg width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="' . $cls . '" aria-hidden="true">' . $path . '</svg>';
}

/* Accent color map */
$accents = array(
	'primary' => array( 'bg' => 'rgba(99,102,241,0.1)',  'text' => '#6366F1', 'border' => 'rgba(99,102,241,0.2)' ),
	'info'    => array( 'bg' => 'rgba(14,165,233,0.1)',   'text' => '#0EA5E9', 'border' => 'rgba(14,165,233,0.25)' ),
	'success' => array( 'bg' => 'rgba(16,185,129,0.1)',   'text' => '#10B981', 'border' => 'rgba(16,185,129,0.25)' ),
	'warn'    => array( 'bg' => 'rgba(245,158,11,0.1)',   'text' => '#F59E0B', 'border' => 'rgba(245,158,11,0.25)' ),
	'cyan'    => array( 'bg' => 'rgba(6,182,212,0.1)',    'text' => '#06B6D4', 'border' => 'rgba(6,182,212,0.2)' ),
	'purple'  => array( 'bg' => 'rgba(139,92,246,0.1)',   'text' => '#8B5CF6', 'border' => 'rgba(139,92,246,0.2)' ),
);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo esc_html( $page_title ); ?></title>
	<meta name="description" content="<?php echo esc_attr( $page_desc ); ?>">
	<link rel="canonical" href="<?php echo esc_url( $canonical ); ?>">
	<meta property="og:type" content="website">
	<meta property="og:locale" content="fa_IR">
	<meta property="og:site_name" content="xCRM">
	<meta property="og:title" content="<?php echo esc_attr( $page_title ); ?>">
	<meta property="og:description" content="<?php echo esc_attr( $page_desc ); ?>">
	<meta property="og:url" content="<?php echo esc_url( $canonical ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'xcrm-legal-page' ); ?>>
<?php wp_body_open(); ?>

<!-- Scroll Progress -->
<div class="xlg-progress" id="xlg-progress" aria-hidden="true"><div class="xlg-progress__bar" id="xlg-progress-bar"></div></div>

<!-- HEADER -->
<header class="hp__header">
	<div class="hp__header-inner">
		<a href="<?php echo esc_url( $home_url ); ?>" class="hp__brand" aria-label="xCRM">
			<span class="hp__brand-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>
			<span class="hp__brand-text">xCRM</span>
		</a>
		<nav class="hp__nav" aria-label="ناوبری اصلی">
			<a href="<?php echo esc_url( $home_url ); ?>" class="hp__nav-link">صفحه اصلی</a>
			<a href="<?php echo esc_url( home_url( '/for-business/' ) ); ?>" class="hp__nav-link">برای کسب‌وکارها</a>
			<a href="<?php echo esc_url( home_url( '/for-marketers/' ) ); ?>" class="hp__nav-link">برای مارکترها</a>
		</nav>
		<div class="hp__header-actions">
			<button id="hp-theme-toggle" class="hp__theme-toggle xcrm-focus" type="button" aria-label="تغییر حالت روشن و تاریک" aria-pressed="false">
				<span class="hp__theme-track" aria-hidden="true"><span class="hp__theme-thumb">
					<svg class="hp__theme-icon hp__theme-icon--sun" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/></svg>
					<svg class="hp__theme-icon hp__theme-icon--moon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
				</span></span>
			</button>
		</div>
	</div>
</header>

<main class="xlg">

	<!-- HERO -->
	<section class="xlg__hero">
		<div class="xlg__hero-bg" aria-hidden="true">
			<div class="xcrm-grid-bg xlg__grid"></div>
			<div class="xlg__orb xlg__orb--1"></div>
			<div class="xlg__orb xlg__orb--2"></div>
		</div>
		<div class="xlg__hero-inner">
			<nav class="xlg__breadcrumb" aria-label="مسیر ناوبری">
				<a href="<?php echo esc_url( $home_url ); ?>">خانه</a>
				<span class="xlg__breadcrumb-sep" aria-hidden="true">‹</span>
				<span class="xlg__breadcrumb-current"><?php echo esc_html( $data['breadcrumbLabel'] ); ?></span>
			</nav>

			<div class="xlg__hero-icon-wrap xlg-anim xlg-anim--1">
				<div class="xlg__hero-glow" aria-hidden="true"></div>
				<div class="xlg__hero-dash" aria-hidden="true"></div>
				<div class="xlg__hero-icon">
					<?php echo xcrm_legal_icon( $icons, $data['icon'], 28 ); ?>
				</div>
			</div>

			<p class="xlg__eyebrow xlg-anim xlg-anim--2">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?php echo $icons['sparkles']; ?></svg>
				<?php echo esc_html( $data['eyebrow'] ); ?>
			</p>

			<h1 class="xlg__title xlg-anim xlg-anim--3"><?php echo esc_html( $data['title'] ); ?></h1>
			<p class="xlg__desc xlg-anim xlg-anim--4"><?php echo esc_html( $data['description'] ); ?></p>

			<div class="xlg__meta xlg-anim xlg-anim--5">
				<span class="xlg__meta-pill">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?php echo $icons['calendar']; ?></svg>
					<span class="xlg__meta-label">تاریخ لازم‌الاجرا</span>
					<span class="xlg__meta-val"><?php echo esc_html( $data['effectiveDate'] ); ?></span>
				</span>
				<span class="xlg__meta-pill">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?php echo $icons['layers']; ?></svg>
					<span class="xlg__meta-label">نسخه</span>
					<span class="xlg__meta-val"><?php echo esc_html( $data['version'] ); ?></span>
				</span>
				<span class="xlg__meta-pill">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?php echo $icons['clock']; ?></svg>
					<span class="xlg__meta-label">زمان مطالعه</span>
					<span class="xlg__meta-val"><?php echo esc_html( $data['readingTime'] ); ?></span>
				</span>
			</div>
		</div>
	</section>

	<!-- CONTENT -->
	<div class="xlg__content">
		<div class="xlg__layout">

			<!-- TOC (desktop) -->
			<aside class="xlg__toc" aria-label="فهرست مطالب">
				<div class="xlg__toc-header">
					<span class="xlg__toc-icon">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?php echo $icons['list']; ?></svg>
					</span>
					<span class="xlg__toc-title">فهرست مطالب</span>
					<span class="xlg__toc-pct" id="xlg-toc-pct">۰٪</span>
				</div>
				<div class="xlg__toc-progress"><div class="xlg__toc-progress-bar" id="xlg-toc-bar"></div></div>
				<nav class="xlg__toc-nav" id="xlg-toc-nav">
					<?php foreach ( $data['sections'] as $i => $sec ) : ?>
					<a href="#<?php echo esc_attr( $sec['id'] ); ?>" class="xlg__toc-link" data-target="<?php echo esc_attr( $sec['id'] ); ?>">
						<span class="xlg__toc-num"><?php echo esc_html( $sec['num'] ); ?></span>
						<span class="xlg__toc-text"><?php echo esc_html( $sec['title'] ); ?></span>
					</a>
					<?php endforeach; ?>
				</nav>
			</aside>

			<!-- MAIN COLUMN -->
			<div class="xlg__main">

				<!-- Mobile TOC -->
				<div class="xlg__toc-mobile" aria-label="فهرست مطالب">
					<div class="xlg__toc-mobile-header">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?php echo $icons['list']; ?></svg>
						<span>فهرست مطالب</span>
						<span class="xlg__toc-mobile-pct" id="xlg-toc-m-pct">۰٪</span>
					</div>
					<div class="xlg__toc-mobile-scroll" id="xlg-toc-mobile">
						<?php foreach ( $data['sections'] as $sec ) : ?>
						<a href="#<?php echo esc_attr( $sec['id'] ); ?>" class="xlg__toc-chip" data-target="<?php echo esc_attr( $sec['id'] ); ?>">
							<span><?php echo esc_html( $sec['num'] ); ?></span> <?php echo esc_html( $sec['title'] ); ?>
						</a>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- Intro callout -->
				<div class="xlg__intro" data-reveal="up">
					<div class="xlg__intro-icon">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?php echo $icons['sparkles']; ?></svg>
					</div>
					<p><?php echo esc_html( $data['intro'] ); ?></p>
				</div>

				<!-- Sections -->
				<?php foreach ( $data['sections'] as $sec ) :
					$accent = isset( $accents[ $sec['accentColor'] ] ) ? $accents[ $sec['accentColor'] ] : $accents['primary'];
				?>
				<article class="xlg__section" id="<?php echo esc_attr( $sec['id'] ); ?>" data-reveal="up">
					<div class="xlg__section-accent" aria-hidden="true"></div>
					<div class="xlg__section-header">
						<div class="xlg__section-icon" style="background:<?php echo esc_attr( $accent['bg'] ); ?>;color:<?php echo esc_attr( $accent['text'] ); ?>">
							<?php echo xcrm_legal_icon( $icons, $sec['icon'], 22 ); ?>
							<span class="xlg__section-num" style="background:linear-gradient(135deg,#6366F1,#8B5CF6)"><?php echo esc_html( $sec['num'] ); ?></span>
						</div>
						<h2 class="xlg__section-title">
							<a href="#<?php echo esc_attr( $sec['id'] ); ?>"><?php echo esc_html( $sec['title'] ); ?></a>
						</h2>
					</div>
					<div class="xlg__section-body">
						<?php foreach ( $sec['blocks'] as $block ) : ?>
							<?php if ( 'paragraph' === $block['type'] ) : ?>
								<p class="xlg__p"><?php echo esc_html( $block['text'] ); ?></p>

							<?php elseif ( 'list' === $block['type'] ) : ?>
								<ul class="xlg__list">
									<?php foreach ( $block['items'] as $item ) : ?>
									<li>
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg>
										<span><?php echo esc_html( $item ); ?></span>
									</li>
									<?php endforeach; ?>
								</ul>

							<?php elseif ( 'callout' === $block['type'] ) :
								$tone = isset( $block['tone'] ) ? $block['tone'] : 'primary';
								$tone_colors = array(
									'primary' => array( 'bg' => 'rgba(99,102,241,0.06)', 'border' => 'rgba(99,102,241,0.2)', 'text' => '#6366F1', 'icon' => 'sparkles' ),
									'info'    => array( 'bg' => 'rgba(14,165,233,0.06)',  'border' => 'rgba(14,165,233,0.25)', 'text' => '#0EA5E9', 'icon' => 'info' ),
									'success' => array( 'bg' => 'rgba(16,185,129,0.06)',  'border' => 'rgba(16,185,129,0.25)', 'text' => '#10B981', 'icon' => 'success' ),
									'warn'    => array( 'bg' => 'rgba(245,158,11,0.06)',  'border' => 'rgba(245,158,11,0.25)', 'text' => '#F59E0B', 'icon' => 'alert' ),
								);
								$tc = isset( $tone_colors[ $tone ] ) ? $tone_colors[ $tone ] : $tone_colors['primary'];
							?>
								<div class="xlg__callout" style="background:<?php echo esc_attr( $tc['bg'] ); ?>;border-color:<?php echo esc_attr( $tc['border'] ); ?>">
									<div class="xlg__callout-icon" style="background:<?php echo esc_attr( $tc['bg'] ); ?>;color:<?php echo esc_attr( $tc['text'] ); ?>">
										<?php echo xcrm_legal_icon( $icons, $tc['icon'], 16 ); ?>
									</div>
									<div class="xlg__callout-body">
										<?php if ( ! empty( $block['title'] ) ) : ?>
										<strong class="xlg__callout-title" style="color:<?php echo esc_attr( $tc['text'] ); ?>"><?php echo esc_html( $block['title'] ); ?></strong>
										<?php endif; ?>
										<p><?php echo esc_html( $block['text'] ); ?></p>
										<?php if ( ! empty( $block['link'] ) ) : ?>
										<a href="<?php echo esc_url( $block['link']['url'] ); ?>" class="xlg__callout-link" <?php echo ! empty( $block['link']['external'] ) ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>>
											<?php echo esc_html( $block['link']['label'] ); ?>
											<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
										</a>
										<?php endif; ?>
									</div>
								</div>

							<?php elseif ( 'subsections' === $block['type'] ) : ?>
								<div class="xlg__subs">
									<?php foreach ( $block['items'] as $sub ) : ?>
									<div class="xlg__sub">
										<strong><?php echo esc_html( $sub['title'] ); ?></strong>
										<p><?php echo esc_html( $sub['text'] ); ?></p>
									</div>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</article>
				<?php endforeach; ?>

				<!-- Related links -->
				<div class="xlg__related" data-reveal="up">
					<div class="xgl__related-header">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?php echo $icons['sparkles']; ?></svg>
						<span>ادامه مطالعه</span>
					</div>
					<div class="xlg__related-grid">
						<?php foreach ( $data['relatedLinks'] as $link ) :
							$tint_bg = 'info' === $link['tint'] ? 'rgba(14,165,233,0.1)' : 'rgba(99,102,241,0.1)';
							$tint_tx = 'info' === $link['tint'] ? '#0EA5E9' : '#6366F1';
						?>
						<a href="<?php echo esc_url( $link['url'] ); ?>" class="xlg__related-card">
							<div class="xlg__related-icon" style="background:<?php echo esc_attr( $tint_bg ); ?>;color:<?php echo esc_attr( $tint_tx ); ?>">
								<?php echo xcrm_legal_icon( $icons, $link['icon'], 20 ); ?>
							</div>
							<div class="xlg__related-body">
								<strong><?php echo esc_html( $link['label'] ); ?></strong>
								<span><?php echo esc_html( $link['description'] ); ?></span>
							</div>
							<svg class="xlg__related-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
						</a>
						<?php endforeach; ?>
					</div>
				</div>

			</div><!-- /main -->
		</div><!-- /layout -->
	</div><!-- /content -->
</main>

<!-- Back to top FAB -->
<button class="xlg__fab" id="xlg-fab" aria-label="بازگشت به بالا" type="button">
	<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m18 15-6-6-6 6"/></svg>
</button>

<!-- FOOTER -->
<footer class="xlg__footer">
	<div class="xlg__footer-inner">
		<a href="<?php echo esc_url( $home_url ); ?>" class="hp__brand">
			<span class="hp__brand-icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>
			<span class="hp__brand-text">xCRM</span>
		</a>
		<p class="xlg__footer-copy">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> xCRM — تمامی حقوق محفوظ است.</p>
		<div class="xlg__footer-links">
			<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">حریم خصوصی</a>
			<a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">شرایط استفاده</a>
			<a href="<?php echo esc_url( $home_url ); ?>">صفحه اصلی</a>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
