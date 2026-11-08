<?php
/**
 * FAQ section partial — semantic <details> accordion.
 *
 * Expects: $ft_faq_id (string, section anchor id),
 *          $ft_faq_title (string, H2 text),
 *          $ft_faq_items (array of ['q' => string, 'a' => string]).
 * Optional: $ft_faq_intro (string).
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( empty( $ft_faq_items ) || ! is_array( $ft_faq_items ) ) {
	return;
}
?>
<section class="ft__section<?php echo ! empty( $ft_faq_class ) ? ' ' . sanitize_html_class( $ft_faq_class ) : ''; ?>" id="<?php echo esc_attr( $ft_faq_id ); ?>">
	<div class="ft__inner">
		<div class="ft__section-head" data-reveal="up">
			<span class="ft__label">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
				پرسش‌های متداول
			</span>
			<h2 class="ft__section-title"><?php echo esc_html( $ft_faq_title ); ?></h2>
			<?php if ( ! empty( $ft_faq_intro ) ) : ?>
				<p class="ft__section-desc"><?php echo esc_html( $ft_faq_intro ); ?></p>
			<?php endif; ?>
		</div>

		<div class="ft__faq" data-reveal="up">
			<?php foreach ( $ft_faq_items as $ft_item ) : ?>
				<details class="ft__faq-item">
					<summary class="ft__faq-q">
						<span><?php echo esc_html( $ft_item['q'] ); ?></span>
						<svg class="ft__faq-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
					</summary>
					<div class="ft__faq-a">
						<p><?php echo wp_kses_post( $ft_item['a'] ); ?></p>
					</div>
				</details>
			<?php endforeach; ?>
		</div>
	</div>
</section>
