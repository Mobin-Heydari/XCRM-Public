<?php
/**
 * Final conversion CTA section.
 *
 * Argument contract — every caller passes these via the get_template_part()
 * third parameter ($args array):
 *
 *   Required: ft_cta_title, ft_cta_desc, ft_cta_primary_url, ft_cta_primary_label
 *   Optional: ft_cta_secondary_url, ft_cta_secondary_label, ft_cta_note
 *
 * Values are resolved defensively:
 *   1. from the $args array (WordPress 5.5+ template-part arguments),
 *   2. from already-set legacy variables (extract() path) via isset(),
 *   3. from safe defaults.
 * No undefined variable is ever referenced and no empty/broken href is emitted.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// 1) Preferred source: the $args array handed to get_template_part().
$ft_cta = array();
if ( isset( $args ) && is_array( $args ) ) {
	$ft_cta = $args;
}

// 2) Backwards compatibility: individual variables only when actually set.
if ( ! isset( $ft_cta['ft_cta_title'] ) && isset( $ft_cta_title ) ) {
	$ft_cta['ft_cta_title'] = $ft_cta_title;
}
if ( ! isset( $ft_cta['ft_cta_desc'] ) && isset( $ft_cta_desc ) ) {
	$ft_cta['ft_cta_desc'] = $ft_cta_desc;
}
if ( ! isset( $ft_cta['ft_cta_primary_url'] ) && isset( $ft_cta_primary_url ) ) {
	$ft_cta['ft_cta_primary_url'] = $ft_cta_primary_url;
}
if ( ! isset( $ft_cta['ft_cta_primary_label'] ) && isset( $ft_cta_primary_label ) ) {
	$ft_cta['ft_cta_primary_label'] = $ft_cta_primary_label;
}
if ( ! isset( $ft_cta['ft_cta_secondary_url'] ) && isset( $ft_cta_secondary_url ) ) {
	$ft_cta['ft_cta_secondary_url'] = $ft_cta_secondary_url;
}
if ( ! isset( $ft_cta['ft_cta_secondary_label'] ) && isset( $ft_cta_secondary_label ) ) {
	$ft_cta['ft_cta_secondary_label'] = $ft_cta_secondary_label;
}
if ( ! isset( $ft_cta['ft_cta_note'] ) && isset( $ft_cta_note ) ) {
	$ft_cta['ft_cta_note'] = $ft_cta_note;
}

// 3) Resolve to local strings with safe defaults.
$ft_cta_title          = isset( $ft_cta['ft_cta_title'] ) ? (string) $ft_cta['ft_cta_title'] : '';
$ft_cta_desc            = isset( $ft_cta['ft_cta_desc'] ) ? (string) $ft_cta['ft_cta_desc'] : '';
$ft_cta_primary_url     = isset( $ft_cta['ft_cta_primary_url'] ) ? (string) $ft_cta['ft_cta_primary_url'] : '';
$ft_cta_primary_label   = isset( $ft_cta['ft_cta_primary_label'] ) ? (string) $ft_cta['ft_cta_primary_label'] : '';
$ft_cta_secondary_url   = isset( $ft_cta['ft_cta_secondary_url'] ) ? (string) $ft_cta['ft_cta_secondary_url'] : '';
$ft_cta_secondary_label = isset( $ft_cta['ft_cta_secondary_label'] ) ? (string) $ft_cta['ft_cta_secondary_label'] : '';
$ft_cta_note            = isset( $ft_cta['ft_cta_note'] ) ? (string) $ft_cta['ft_cta_note'] : '';
$ft_cta_id              = isset( $ft_cta['ft_cta_id'] ) && '' !== $ft_cta['ft_cta_id'] ? sanitize_html_class( (string) $ft_cta['ft_cta_id'] ) : 'cta';

// 4) Graceful degradation: without a title or a primary action there is
//    nothing meaningful to render, so skip the section instead of outputting
//    an empty box (and never emit warnings).
if ( '' === $ft_cta_title && '' === $ft_cta_primary_label ) {
	return;
}

$ft_cta_has_primary   = ( '' !== $ft_cta_primary_url && '' !== $ft_cta_primary_label );
$ft_cta_has_secondary = ( '' !== $ft_cta_secondary_url && '' !== $ft_cta_secondary_label );
?>
<section class="ft__section ft__cta-section" id="<?php echo esc_attr( $ft_cta_id ); ?>">
	<div class="ft__inner">
		<div class="ft__cta-box brand-surface" data-reveal="scale">
			<div class="ft__cta-deco" aria-hidden="true">
				<span class="ft__cta-orb ft__cta-orb--1"></span>
				<span class="ft__cta-orb ft__cta-orb--2"></span>
			</div>
			<div class="ft__cta-content">
				<?php if ( '' !== $ft_cta_title ) : ?>
					<h2 class="ft__cta-title"><?php echo esc_html( $ft_cta_title ); ?></h2>
				<?php endif; ?>
				<?php if ( '' !== $ft_cta_desc ) : ?>
					<p class="ft__cta-desc"><?php echo esc_html( $ft_cta_desc ); ?></p>
				<?php endif; ?>
				<?php if ( $ft_cta_has_primary || $ft_cta_has_secondary ) : ?>
					<div class="ft__cta-actions">
						<?php if ( $ft_cta_has_primary ) : ?>
							<a href="<?php echo esc_url( $ft_cta_primary_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
								<?php echo esc_html( $ft_cta_primary_label ); ?>
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
							</a>
						<?php endif; ?>
						<?php if ( $ft_cta_has_secondary ) : ?>
							<a href="<?php echo esc_url( $ft_cta_secondary_url ); ?>" class="hp__btn hp__btn--ghost" data-magnetic>
								<?php echo esc_html( $ft_cta_secondary_label ); ?>
							</a>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<?php if ( '' !== $ft_cta_note ) : ?>
					<p class="ft__cta-note"><?php echo esc_html( $ft_cta_note ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
