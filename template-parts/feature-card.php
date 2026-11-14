<?php
/**
 * Feature card partial.
 *
 * Renders an <a> only when the detail route is built — never a dead link.
 *
 * Expects: $feature (array from xcrm_get_features()),
 *          optional $ft_card_delay (int, data-reveal-delay ms).
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( empty( $feature ) || ! is_array( $feature ) ) {
	return;
}

$ft_delay = isset( $ft_card_delay ) ? (int) $ft_card_delay : 0;
$ft_url   = function_exists( 'xcrm_feature_url' ) ? xcrm_feature_url( $feature ) : home_url( '/features/' . $feature['slug'] . '/' );
$ft_tag   = ! empty( $feature['built'] ) ? 'a' : 'div';
?>
<<?php echo $ft_tag; ?>
	<?php if ( 'a' === $ft_tag ) : ?>href="<?php echo esc_url( $ft_url ); ?>"<?php endif; ?>
	class="main-card<?php echo 'a' === $ft_tag ? ' hover-card ft__card--linked' : ''; ?> ft__card"
	data-reveal="up"
	<?php if ( $ft_delay > 0 ) : ?>data-reveal-delay="<?php echo esc_attr( $ft_delay ); ?>"<?php endif; ?>
>
	<div class="ft__card-body">
		<span class="ft__card-icon" aria-hidden="true">
			<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo $feature['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG path data from registry. ?></svg>
		</span>
		<h3 class="ft__card-title"><?php echo esc_html( $feature['title'] ); ?></h3>
		<p class="ft__card-desc"><?php echo esc_html( $feature['short'] ); ?></p>
		<?php if ( 'a' === $ft_tag ) : ?>
			<span class="ft__card-link">
				مشاهده جزئیات
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
			</span>
		<?php endif; ?>
	</div>
</<?php echo $ft_tag; ?>>
