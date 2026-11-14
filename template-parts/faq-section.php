<?php
/**
 * FAQ section partial — semantic <details> accordion.
 *
 * Argument contract — callers pass these via get_template_part()'s third
 * parameter ($args array):
 *
 *   Required: ft_faq_items (array of ['q' => string, 'a' => string])
 *   Optional: ft_faq_id, ft_faq_title, ft_faq_intro, ft_faq_class
 *
 * Values are resolved defensively:
 *   1. from the $args array (WordPress 5.5+ template-part arguments),
 *   2. from already-set legacy variables (extract() path) via isset(),
 *   3. from safe defaults.
 * No undefined variable is ever referenced; an empty item list skips the
 * section instead of rendering a broken box.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// 1) Preferred source: the $args array handed to get_template_part().
$ft_faq = array();
if ( isset( $args ) && is_array( $args ) ) {
	$ft_faq = $args;
}

// 2) Backwards compatibility: individual variables only when actually set.
if ( ! isset( $ft_faq['ft_faq_items'] ) && isset( $ft_faq_items ) ) {
	$ft_faq['ft_faq_items'] = $ft_faq_items;
}
if ( ! isset( $ft_faq['ft_faq_id'] ) && isset( $ft_faq_id ) ) {
	$ft_faq['ft_faq_id'] = $ft_faq_id;
}
if ( ! isset( $ft_faq['ft_faq_title'] ) && isset( $ft_faq_title ) ) {
	$ft_faq['ft_faq_title'] = $ft_faq_title;
}
if ( ! isset( $ft_faq['ft_faq_intro'] ) && isset( $ft_faq_intro ) ) {
	$ft_faq['ft_faq_intro'] = $ft_faq_intro;
}
if ( ! isset( $ft_faq['ft_faq_class'] ) && isset( $ft_faq_class ) ) {
	$ft_faq['ft_faq_class'] = $ft_faq_class;
}

// 3) Resolve to local values with safe defaults.
$ft_faq_items = isset( $ft_faq['ft_faq_items'] ) && is_array( $ft_faq['ft_faq_items'] ) ? $ft_faq['ft_faq_items'] : array();
$ft_faq_id    = isset( $ft_faq['ft_faq_id'] ) ? (string) $ft_faq['ft_faq_id'] : 'faq';
$ft_faq_title = isset( $ft_faq['ft_faq_title'] ) ? (string) $ft_faq['ft_faq_title'] : 'پرسش‌های متداول';
$ft_faq_intro = isset( $ft_faq['ft_faq_intro'] ) ? (string) $ft_faq['ft_faq_intro'] : '';
$ft_faq_class = isset( $ft_faq['ft_faq_class'] ) ? (string) $ft_faq['ft_faq_class'] : '';

// 4) Graceful degradation: no items → no section (never a warning).
if ( empty( $ft_faq_items ) ) {
	return;
}
?>
<section class="ft__section<?php echo '' !== $ft_faq_class ? ' ' . sanitize_html_class( $ft_faq_class ) : ''; ?>" id="<?php echo esc_attr( $ft_faq_id ); ?>">
	<div class="ft__inner">
		<div class="ft__section-head" data-reveal="up">
			<span class="ft__label">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
				پرسش‌های متداول
			</span>
			<h2 class="ft__section-title"><?php echo esc_html( $ft_faq_title ); ?></h2>
			<?php if ( '' !== $ft_faq_intro ) : ?>
				<p class="ft__section-desc"><?php echo esc_html( $ft_faq_intro ); ?></p>
			<?php endif; ?>
		</div>

		<div class="ft__faq" data-reveal="up">
			<?php foreach ( $ft_faq_items as $ft_item ) : ?>
				<?php if ( empty( $ft_item['q'] ) ) { continue; } ?>
				<details class="ft__faq-item">
					<summary class="ft__faq-q">
						<span><?php echo esc_html( $ft_item['q'] ); ?></span>
						<svg class="ft__faq-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
					</summary>
					<div class="ft__faq-a">
						<p><?php echo wp_kses_post( isset( $ft_item['a'] ) ? $ft_item['a'] : '' ); ?></p>
					</div>
				</details>
			<?php endforeach; ?>
		</div>
	</div>
</section>
