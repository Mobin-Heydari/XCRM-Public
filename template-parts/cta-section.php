<?php
/**
 * Final conversion CTA section.
 *
 * Expects: $ft_cta_title (string), $ft_cta_desc (string),
 *          $ft_cta_primary_url (string), $ft_cta_primary_label (string).
 * Optional: $ft_cta_secondary_url, $ft_cta_secondary_label,
 *           $ft_cta_note (string).
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="ft__section ft__cta-section" id="cta">
	<div class="ft__inner">
		<div class="ft__cta-box brand-surface" data-reveal="scale">
			<div class="ft__cta-deco" aria-hidden="true">
				<span class="ft__cta-orb ft__cta-orb--1"></span>
				<span class="ft__cta-orb ft__cta-orb--2"></span>
			</div>
			<div class="ft__cta-content">
				<h2 class="ft__cta-title"><?php echo esc_html( $ft_cta_title ); ?></h2>
				<p class="ft__cta-desc"><?php echo esc_html( $ft_cta_desc ); ?></p>
				<div class="ft__cta-actions">
					<a href="<?php echo esc_url( $ft_cta_primary_url ); ?>" class="hp__btn hp__btn--primary" data-magnetic>
						<?php echo esc_html( $ft_cta_primary_label ); ?>
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					</a>
					<?php if ( ! empty( $ft_cta_secondary_url ) && ! empty( $ft_cta_secondary_label ) ) : ?>
						<a href="<?php echo esc_url( $ft_cta_secondary_url ); ?>" class="hp__btn hp__btn--ghost" data-magnetic>
							<?php echo esc_html( $ft_cta_secondary_label ); ?>
						</a>
					<?php endif; ?>
				</div>
				<?php if ( ! empty( $ft_cta_note ) ) : ?>
					<p class="ft__cta-note"><?php echo esc_html( $ft_cta_note ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
