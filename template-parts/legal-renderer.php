<?php
/**
 * Shared legal page renderer.
 *
 * Expects: $data (array), $icons (array), $accents (array),
 *          $home_url (string), $canonical (string),
 *          $page_title (string), $page_desc (string)
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function xcrm_legal_icon( $icons, $name, $size = 20, $cls = '' ) {
	$path = isset( $icons[ $name ] ) ? $icons[ $name ] : $icons['info'];
	return '<svg width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="' . $cls . '" aria-hidden="true">' . $path . '</svg>';
}
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
	<meta property="og:site_name" content="xCRM فروش">
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
<?php get_template_part( 'template-parts/site-header' ); ?>

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
					<?php foreach ( $data['sections'] as $sec ) : ?>
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
<?php get_template_part( 'template-parts/site-footer' ); ?>

<?php wp_footer(); ?>
</body>
</html>
