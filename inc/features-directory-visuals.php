<?php
/**
 * Features Directory visuals — lightweight category illustrations and
 * mini card graphics for /features/.
 *
 * All SVGs are decorative (aria-hidden), sized via CSS and animated only
 * with the fdv-* CSS classes defined in xcrm-features-directory.css.
 * ids (where unavoidable) are prefixed fdv- to avoid page collisions.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Category illustration by key.
 *
 * @param string $key One of: identities, pipeline, charts, groups, kanban,
 *                    triggers, channels, nodes, templates, roles, plans, dashboard.
 * @return string SVG markup ('' for unknown key).
 */
function xcrm_fd_visual( $key ) {
	static $map = null;
	if ( null === $map ) {
		$map = array(

			// 01 — identities converging into a customer profile
			'identities' =>
				'<svg class="fdv fdv--identities" viewBox="0 0 360 190" fill="none" aria-hidden="true" focusable="false">' .
				'<path class="fdv-link fdv-draw" d="M96 52 C150 52 170 78 206 92"/>' .
				'<path class="fdv-link fdv-draw" d="M96 95 C150 95 170 95 206 95"/>' .
				'<path class="fdv-link fdv-draw" d="M96 138 C150 138 170 112 206 98"/>' .
				'<g class="fdv-chip fdv-float" style="animation-delay:.1s"><circle cx="66" cy="52" r="22" class="fdv-bg"/><path class="fdv-ico" transform="translate(57,43) scale(0.75)" d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.7 2.6a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.5-1.2a2 2 0 0 1 2.1-.4c.8.3 1.7.5 2.6.7a2 2 0 0 1 1.7 2Z"/></g>' .
				'<g class="fdv-chip fdv-float" style="animation-delay:.7s"><circle cx="66" cy="95" r="22" class="fdv-bg"/><path class="fdv-ico" transform="translate(57,86) scale(0.75)" d="M22 7l-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2" class="fdv-ico" transform="translate(57,86) scale(0.75)"/></g>' .
				'<g class="fdv-chip fdv-float" style="animation-delay:1.3s"><circle cx="66" cy="138" r="22" class="fdv-bg"/><circle cx="66" cy="138" r="9" class="fdv-ico-ring"/><path class="fdv-ico" transform="translate(57,129) scale(0.75)" d="M2 12h20"/><path class="fdv-ico" transform="translate(57,129) scale(0.75)" d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></g>' .
				'<g class="fdv-card fdv-pulse"><rect x="206" y="52" width="118" height="86" rx="12" class="fdv-bg"/><circle cx="232" cy="80" r="12" class="fdv-fill-accent"/><rect x="252" y="70" width="56" height="7" rx="3.5" class="fdv-bar"/><rect x="252" y="83" width="38" height="7" rx="3.5" class="fdv-bar-dim"/><rect x="220" y="106" width="90" height="6" rx="3" class="fdv-bar-dim"/><rect x="220" y="118" width="66" height="6" rx="3" class="fdv-bar-dim"/></g>' .
				'</svg>',

			// 02 — events flowing through the tracking pipeline
			'pipeline' =>
				'<svg class="fdv fdv--pipeline" viewBox="0 0 360 190" fill="none" aria-hidden="true" focusable="false">' .
				'<rect x="234" y="28" width="92" height="60" rx="10" class="fdv-bg"/><rect x="244" y="40" width="46" height="6" rx="3" class="fdv-bar"/><rect x="244" y="52" width="66" height="6" rx="3" class="fdv-bar-dim"/><rect x="244" y="64" width="34" height="6" rx="3" class="fdv-bar-dim"/>' .
				'<path class="fdv-link fdv-draw" d="M234 58 C190 58 180 95 148 95"/>' .
				'<circle cx="148" cy="95" r="26" class="fdv-bg fdv-pulse"/><path class="fdv-ico" transform="translate(137,84) scale(0.92)" d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/>' .
				'<path class="fdv-link fdv-draw" d="M122 95 L86 95"/>' .
				'<ellipse cx="54" cy="78" rx="26" ry="10" class="fdv-stroke"/><path class="fdv-stroke" d="M28 78v30c0 5.5 11.6 10 26 10s26-4.5 26-10V78"/><path class="fdv-stroke" d="M28 93c0 5.5 11.6 10 26 10s26-4.5 26-10"/>' .
				'<circle cx="196" cy="46" r="4" class="fdv-dot fdv-float"/><circle cx="176" cy="128" r="3" class="fdv-dot fdv-float" style="animation-delay:.9s"/>' .
				'</svg>',

			// 03 — data becoming charts
			'charts' =>
				'<svg class="fdv fdv--charts" viewBox="0 0 360 190" fill="none" aria-hidden="true" focusable="false">' .
				'<path class="fdv-axis" d="M40 24 V158 H330"/>' .
				'<rect x="70" y="98" width="34" height="60" rx="6" class="fdv-fill-soft fdv-grow" style="animation-delay:.1s"/>' .
				'<rect x="124" y="72" width="34" height="86" rx="6" class="fdv-fill-accent fdv-grow" style="animation-delay:.3s"/>' .
				'<rect x="178" y="110" width="34" height="48" rx="6" class="fdv-fill-soft fdv-grow" style="animation-delay:.5s"/>' .
				'<path class="fdv-link fdv-draw" d="M76 78 L132 52 L188 66 L252 34 L310 48"/>' .
				'<circle cx="252" cy="34" r="5" class="fdv-dot fdv-pulse"/><circle cx="310" cy="48" r="4" class="fdv-dot fdv-float"/>' .
				'<rect x="236" y="96" width="76" height="44" rx="8" class="fdv-bg"/><rect x="246" y="118" width="12" height="14" rx="3" class="fdv-fill-soft"/><rect x="264" y="110" width="12" height="22" rx="3" class="fdv-fill-accent"/><rect x="282" y="114" width="12" height="18" rx="3" class="fdv-fill-soft"/>' .
				'</svg>',

			// 04 — customer nodes separating into dynamic groups
			'groups' =>
				'<svg class="fdv fdv--groups" viewBox="0 0 360 190" fill="none" aria-hidden="true" focusable="false">' .
				'<g class="fdv-float"><circle cx="286" cy="60" r="7" class="fdv-dot"/><circle cx="308" cy="84" r="7" class="fdv-dot"/><circle cx="282" cy="104" r="7" class="fdv-dot"/><circle cx="312" cy="126" r="7" class="fdv-dot"/><circle cx="276" cy="140" r="7" class="fdv-dot"/></g>' .
				'<path class="fdv-link fdv-draw" d="M270 70 C220 74 200 56 158 58"/>' .
				'<path class="fdv-link fdv-draw" d="M272 118 C222 116 200 136 158 134"/>' .
				'<circle cx="122" cy="58" r="36" class="fdv-ring fdv-pulse"/><circle cx="112" cy="52" r="6" class="fdv-dot"/><circle cx="132" cy="52" r="6" class="fdv-dot"/><circle cx="122" cy="70" r="6" class="fdv-dot"/>' .
				'<circle cx="122" cy="134" r="36" class="fdv-ring fdv-pulse" style="animation-delay:.8s"/><circle cx="112" cy="128" r="6" class="fdv-dot"/><circle cx="132" cy="128" r="6" class="fdv-dot"/><circle cx="122" cy="146" r="6" class="fdv-dot"/>' .
				'<rect x="24" y="74" width="42" height="42" rx="10" class="fdv-bg"/><path class="fdv-ico" transform="translate(33,83) scale(0.9)" d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/>' .
				'</svg>',

			// 05 — kanban stages with a moving customer card
			'kanban' =>
				'<svg class="fdv fdv--kanban" viewBox="0 0 360 190" fill="none" aria-hidden="true" focusable="false">' .
				'<rect x="24" y="24" width="96" height="142" rx="10" class="fdv-bg"/><rect x="132" y="24" width="96" height="142" rx="10" class="fdv-bg"/><rect x="240" y="24" width="96" height="142" rx="10" class="fdv-bg"/>' .
				'<rect x="34" y="36" width="44" height="7" rx="3.5" class="fdv-bar"/><rect x="142" y="36" width="52" height="7" rx="3.5" class="fdv-bar"/><rect x="250" y="36" width="38" height="7" rx="3.5" class="fdv-bar"/>' .
				'<rect x="34" y="56" width="76" height="34" rx="7" class="fdv-card-mini"/><rect x="34" y="98" width="76" height="34" rx="7" class="fdv-card-mini fdv-card-mini--dim"/>' .
				'<rect x="142" y="56" width="76" height="34" rx="7" class="fdv-card-mini fdv-card-mini--accent fdv-float" style="animation-delay:.4s"/>' .
				'<rect x="250" y="56" width="76" height="34" rx="7" class="fdv-card-mini fdv-card-mini--dim"/>' .
				'<path class="fdv-link fdv-draw" d="M124 74 H130"/>' .
				'<path class="fdv-link fdv-draw" d="M232 74 H238"/>' .
				'<circle cx="186" cy="132" r="12" class="fdv-bg fdv-pulse"/><path class="fdv-ico" transform="translate(178,124) scale(0.66)" d="m6 9 6 6 6-6"/>' .
				'</svg>',

			// 06 — event triggers branching into workflow paths
			'triggers' =>
				'<svg class="fdv fdv--triggers" viewBox="0 0 360 190" fill="none" aria-hidden="true" focusable="false">' .
				'<circle cx="304" cy="95" r="30" class="fdv-bg fdv-pulse"/><path class="fdv-ico" transform="translate(293,84) scale(0.92)" d="M4 4l7 16 2.2-7.2L20.5 10z"/>' .
				'<path class="fdv-link fdv-draw" d="M274 95 C230 95 220 44 176 44"/>' .
				'<path class="fdv-link fdv-draw" d="M274 95 H176"/>' .
				'<path class="fdv-link fdv-draw" d="M274 95 C230 95 220 146 176 146"/>' .
				'<rect x="70" y="24" width="106" height="40" rx="10" class="fdv-bg"/><circle cx="94" cy="44" r="9" class="fdv-fill-accent"/><rect x="110" y="34" width="52" height="6" rx="3" class="fdv-bar"/><rect x="110" y="46" width="36" height="6" rx="3" class="fdv-bar-dim"/>' .
				'<rect x="70" y="75" width="106" height="40" rx="10" class="fdv-bg"/><circle cx="94" cy="95" r="9" class="fdv-fill-soft"/><rect x="110" y="85" width="52" height="6" rx="3" class="fdv-bar"/><rect x="110" y="97" width="40" height="6" rx="3" class="fdv-bar-dim"/>' .
				'<rect x="70" y="126" width="106" height="40" rx="10" class="fdv-bg"/><circle cx="94" cy="146" r="9" class="fdv-fill-soft"/><rect x="110" y="136" width="52" height="6" rx="3" class="fdv-bar"/><rect x="110" y="148" width="30" height="6" rx="3" class="fdv-bar-dim"/>' .
				'<circle cx="44" cy="44" r="5" class="fdv-dot fdv-float"/><circle cx="44" cy="95" r="5" class="fdv-dot fdv-float" style="animation-delay:.6s"/><circle cx="44" cy="146" r="5" class="fdv-dot fdv-float" style="animation-delay:1.2s"/>' .
				'</svg>',
				// 07 — unified hub connected to communication channels
			'channels' =>
				'<svg class="fdv fdv--channels" viewBox="0 0 360 190" fill="none" aria-hidden="true" focusable="false">' .
				'<circle cx="180" cy="95" r="44" class="fdv-bg fdv-pulse"/><circle cx="180" cy="95" r="34" class="fdv-ring"/><path class="fdv-ico" transform="translate(168,83) scale(1)" d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>' .
				'<path class="fdv-link fdv-draw" d="M180 51 L180 30"/>' .
				'<path class="fdv-link fdv-draw" d="M143 116 L110 146"/>' .
				'<path class="fdv-link fdv-draw" d="M217 116 L250 146"/>' .
				'<path class="fdv-link fdv-draw" d="M224 95 L286 95"/>' .
				'<path class="fdv-link fdv-draw" d="M136 95 L74 95"/>' .
				'<g class="fdv-chip fdv-float"><circle cx="180" cy="18" r="16" class="fdv-bg"/><path class="fdv-ico" transform="translate(173,11) scale(0.58)" d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path class="fdv-ico" transform="translate(173,11) scale(0.58)" d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></g>' .
				'<g class="fdv-chip fdv-float" style="animation-delay:.5s"><circle cx="96" cy="156" r="16" class="fdv-bg"/><rect x="2" y="4" width="20" height="16" rx="2" class="fdv-ico" transform="translate(87,147) scale(0.75)"/></g>' .
				'<g class="fdv-chip fdv-float" style="animation-delay:1s"><circle cx="264" cy="156" r="16" class="fdv-bg"/><path class="fdv-ico" transform="translate(256,148) scale(0.66)" d="m22 2-7 20-4-9-9-4Z"/><path class="fdv-ico" transform="translate(256,148) scale(0.66)" d="M22 2 11 13"/></g>' .
				'<g class="fdv-chip fdv-float" style="animation-delay:1.5s"><circle cx="302" cy="95" r="16" class="fdv-bg"/><path class="fdv-ico" transform="translate(294,87) scale(0.66)" d="m22 2-7 20-4-9-9-4Z"/><path class="fdv-ico" transform="translate(294,87) scale(0.66)" d="M22 2 11 13"/></g>' .
				'<g class="fdv-chip fdv-float" style="animation-delay:2s"><circle cx="58" cy="95" r="16" class="fdv-bg"/><circle cx="58" cy="95" r="6" class="fdv-ico-ring"/></g>' .
				'</svg>',

			// 08 — external tools connected to XCRM ports
			'nodes' =>
				'<svg class="fdv fdv--nodes" viewBox="0 0 360 190" fill="none" aria-hidden="true" focusable="false">' .
				'<rect x="132" y="58" width="96" height="74" rx="14" class="fdv-bg fdv-pulse"/><rect x="146" y="76" width="68" height="8" rx="4" class="fdv-bar"/><rect x="146" y="92" width="48" height="8" rx="4" class="fdv-bar-dim"/><rect x="146" y="108" width="58" height="8" rx="4" class="fdv-bar-dim"/>' .
				'<path class="fdv-link fdv-draw" d="M132 76 C96 76 84 44 54 44"/>' .
				'<path class="fdv-link fdv-draw" d="M132 95 H54"/>' .
				'<path class="fdv-link fdv-draw" d="M132 114 C96 114 84 146 54 146"/>' .
				'<path class="fdv-link fdv-draw" d="M228 76 C264 76 276 44 306 44"/>' .
				'<path class="fdv-link fdv-draw" d="M228 114 C264 114 276 146 306 146"/>' .
				'<g class="fdv-chip fdv-float"><rect x="18" y="28" width="36" height="32" rx="8" class="fdv-bg"/><circle cx="36" cy="44" r="6" class="fdv-fill-accent"/></g>' .
				'<g class="fdv-chip fdv-float" style="animation-delay:.6s"><rect x="18" y="79" width="36" height="32" rx="8" class="fdv-bg"/><rect x="27" y="89" width="18" height="12" rx="3" class="fdv-fill-soft"/></g>' .
				'<g class="fdv-chip fdv-float" style="animation-delay:1.2s"><rect x="18" y="130" width="36" height="32" rx="8" class="fdv-bg"/><path class="fdv-ico" transform="translate(27,138) scale(0.75)" d="m16 18 6-6-6-6"/><path class="fdv-ico" transform="translate(27,138) scale(0.75)" d="m8 6-6 6 6 6"/></g>' .
				'<g class="fdv-chip fdv-float" style="animation-delay:.9s"><rect x="306" y="28" width="36" height="32" rx="8" class="fdv-bg"/><circle cx="324" cy="44" r="6" class="fdv-fill-soft"/></g>' .
				'<g class="fdv-chip fdv-float" style="animation-delay:1.6s"><rect x="306" y="130" width="36" height="32" rx="8" class="fdv-bg"/><path class="fdv-ico" transform="translate(315,138) scale(0.75)" d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></g>' .
				'</svg>',

			// 09 — reusable templates becoming configured resources
			'templates' =>
				'<svg class="fdv fdv--templates" viewBox="0 0 360 190" fill="none" aria-hidden="true" focusable="false">' .
				'<rect x="42" y="34" width="96" height="124" rx="12" class="fdv-card-mini fdv-card-mini--dim fdv-float" style="animation-delay:.4s"/>' .
				'<rect x="70" y="48" width="110" height="110" rx="12" class="fdv-bg fdv-pulse"/><rect x="86" y="70" width="52" height="8" rx="4" class="fdv-bar"/><rect x="86" y="88" width="78" height="6" rx="3" class="fdv-bar-dim"/><rect x="86" y="104" width="66" height="6" rx="3" class="fdv-bar-dim"/><rect x="86" y="120" width="72" height="6" rx="3" class="fdv-bar-dim"/>' .
				'<path class="fdv-link fdv-draw" d="M190 95 H240"/>' .
				'<circle cx="274" cy="95" r="34" class="fdv-bg fdv-pulse"/><path class="fdv-ico" transform="translate(262,83) scale(1)" d="M12 5v14"/><path class="fdv-ico" transform="translate(262,83) scale(1)" d="M5 12h14"/>' .
				'<circle cx="322" cy="52" r="5" class="fdv-dot fdv-float"/><circle cx="326" cy="138" r="4" class="fdv-dot fdv-float" style="animation-delay:1s"/><circle cx="30" cy="95" r="4" class="fdv-dot fdv-float" style="animation-delay:1.6s"/>' .
				'</svg>',

			// 10 — employees connected to role and permission layers
			'roles' =>
				'<svg class="fdv fdv--roles" viewBox="0 0 360 190" fill="none" aria-hidden="true" focusable="false">' .
				'<circle cx="180" cy="38" r="22" class="fdv-bg fdv-pulse"/><circle cx="180" cy="32" r="7" class="fdv-fill-accent"/><path class="fdv-stroke" d="M168 50c2-6 6-9 12-9s10 3 12 9"/>' .
				'<path class="fdv-link fdv-draw" d="M180 60 V78"/>' .
				'<path class="fdv-link fdv-draw" d="M96 78 H264"/>' .
				'<path class="fdv-link fdv-draw" d="M96 78 V96"/><path class="fdv-link fdv-draw" d="M180 78 V96"/><path class="fdv-link fdv-draw" d="M264 78 V96"/>' .
				'<g class="fdv-chip fdv-float"><rect x="64" y="96" width="64" height="30" rx="8" class="fdv-bg"/><rect x="74" y="107" width="44" height="7" rx="3.5" class="fdv-bar"/></g>' .
				'<g class="fdv-chip fdv-float" style="animation-delay:.5s"><rect x="148" y="96" width="64" height="30" rx="8" class="fdv-bg"/><rect x="158" y="107" width="44" height="7" rx="3.5" class="fdv-bar"/></g>' .
				'<g class="fdv-chip fdv-float" style="animation-delay:1s"><rect x="232" y="96" width="64" height="30" rx="8" class="fdv-bg"/><rect x="242" y="107" width="44" height="7" rx="3.5" class="fdv-bar"/></g>' .
				'<path class="fdv-link fdv-draw" d="M96 140 V152 H150"/>' .
				'<path class="fdv-link fdv-draw" d="M264 140 V152 H210"/>' .
				'<rect x="120" y="152" width="120" height="26" rx="8" class="fdv-bg"/><path class="fdv-ico" transform="translate(128,157) scale(0.58)" d="M20 6 9 17l-5-5"/><rect x="144" y="161" width="76" height="7" rx="3.5" class="fdv-bar-dim"/>' .
				'</svg>',

			// 11 — plan levels, wallet and payment flow
			'plans' =>
				'<svg class="fdv fdv--plans" viewBox="0 0 360 190" fill="none" aria-hidden="true" focusable="false">' .
				'<rect x="34" y="112" width="52" height="50" rx="8" class="fdv-fill-soft fdv-grow" style="animation-delay:.1s"/>' .
				'<rect x="100" y="84" width="52" height="78" rx="8" class="fdv-fill-soft fdv-grow" style="animation-delay:.3s"/>' .
				'<rect x="166" y="56" width="52" height="106" rx="8" class="fdv-fill-accent fdv-grow" style="animation-delay:.5s"/>' .
				'<rect x="46" y="34" width="40" height="14" rx="7" class="fdv-card-mini fdv-card-mini--dim"/>' .
				'<rect x="112" y="34" width="40" height="14" rx="7" class="fdv-card-mini fdv-card-mini--dim"/>' .
				'<rect x="178" y="34" width="40" height="14" rx="7" class="fdv-card-mini fdv-card-mini--accent fdv-float" style="animation-delay:.8s"/>' .
				'<path class="fdv-link fdv-draw" d="M232 95 H266"/>' .
				'<g class="fdv-chip fdv-pulse"><circle cx="300" cy="95" r="32" class="fdv-bg"/><rect x="284" y="84" width="32" height="22" rx="5" class="fdv-fill-accent"/><circle cx="300" cy="95" r="5" class="fdv-bg"/></g>' .
				'<circle cx="60" cy="70" r="4" class="fdv-dot fdv-float"/><circle cx="250" cy="150" r="4" class="fdv-dot fdv-float" style="animation-delay:1.1s"/>' .
				'</svg>',

			// 12 — dashboard, onboarding and installable app
			'dashboard' =>
				'<svg class="fdv fdv--dashboard" viewBox="0 0 360 190" fill="none" aria-hidden="true" focusable="false">' .
				'<rect x="34" y="24" width="240" height="142" rx="12" class="fdv-bg"/><circle cx="52" cy="42" r="5" class="fdv-dot"/><circle cx="68" cy="42" r="5" class="fdv-dot"/><circle cx="84" cy="42" r="5" class="fdv-dot"/>' .
				'<rect x="46" y="58" width="44" height="94" rx="8" class="fdv-fill-soft"/><rect x="54" y="70" width="28" height="6" rx="3" class="fdv-bar"/><rect x="54" y="84" width="20" height="6" rx="3" class="fdv-bar-dim"/><rect x="54" y="98" width="24" height="6" rx="3" class="fdv-bar-dim"/>' .
				'<rect x="102" y="58" width="70" height="40" rx="8" class="fdv-card-mini"/><rect x="184" y="58" width="70" height="40" rx="8" class="fdv-card-mini fdv-card-mini--dim"/>' .
				'<rect x="102" y="108" width="152" height="44" rx="8" class="fdv-card-mini fdv-card-mini--dim"/><path class="fdv-link fdv-draw" d="M112 140 L150 124 L188 132 L226 116 L246 122"/>' .
				'<g class="fdv-chip fdv-float" style="animation-delay:.6s"><circle cx="304" cy="120" r="30" class="fdv-bg fdv-pulse"/><path class="fdv-ico" transform="translate(294,108) scale(0.92)" d="M12 18h.01"/><rect x="5" y="2" width="14" height="20" rx="2" class="fdv-ico-stroke" transform="translate(294,108) scale(0.92)"/></g>' .
				'<circle cx="316" cy="52" r="5" class="fdv-dot fdv-float"/><circle cx="300" cy="170" r="4" class="fdv-dot fdv-float" style="animation-delay:1.4s"/>' .
				'</svg>',
		);
	}
	return isset( $map[ $key ] ) ? $map[ $key ] : '';
}

/**
 * Mini card graphic by key (lightweight, used on selected feature cards).
 *
 * @param string $key One of: grid, flow, funnel, chart, groups, kanban,
 *                    channels, plans.
 * @return string SVG markup ('' for unknown key).
 */
function xcrm_fd_mini( $key ) {
	static $map = null;
	if ( null === $map ) {
		$map = array(
			'grid'     => '<svg class="fdm fdm--grid" viewBox="0 0 120 64" fill="none" aria-hidden="true" focusable="false"><rect x="6" y="8" width="44" height="22" rx="6" class="fdv-bg"/><rect x="60" y="8" width="44" height="22" rx="6" class="fdv-bg"/><rect x="6" y="36" width="44" height="22" rx="6" class="fdv-bg"/><rect x="60" y="36" width="44" height="22" rx="6" class="fdv-fill-soft"/><rect x="14" y="16" width="22" height="5" rx="2.5" class="fdv-bar"/><rect x="68" y="16" width="22" height="5" rx="2.5" class="fdv-bar"/><rect x="14" y="44" width="22" height="5" rx="2.5" class="fdv-bar"/><rect x="68" y="44" width="16" height="5" rx="2.5" class="fdv-bar-dim"/></svg>',
			'flow'     => '<svg class="fdm fdm--flow" viewBox="0 0 120 64" fill="none" aria-hidden="true" focusable="false"><circle cx="14" cy="32" r="10" class="fdv-bg"/><path class="fdv-link fdv-draw" d="M26 32 H58"/><circle cx="66" cy="32" r="10" class="fdv-fill-soft"/><path class="fdv-link fdv-draw" d="M78 32 H96"/><circle cx="104" cy="32" r="10" class="fdv-fill-accent fdv-pulse"/><circle cx="44" cy="16" r="3" class="fdv-dot fdv-float"/></svg>',
			'funnel'   => '<svg class="fdm fdm--funnel" viewBox="0 0 120 64" fill="none" aria-hidden="true" focusable="false"><path class="fdv-fill-soft" d="M14 10 H106 L74 36 V56 L46 46 V36 Z"/><path class="fdv-link fdv-draw" d="M14 10 H106"/><circle cx="60" cy="56" r="5" class="fdv-dot fdv-pulse"/></svg>',
			'chart'    => '<svg class="fdm fdm--chart" viewBox="0 0 120 64" fill="none" aria-hidden="true" focusable="false"><rect x="12" y="34" width="16" height="24" rx="4" class="fdv-fill-soft fdv-grow"/><rect x="40" y="20" width="16" height="38" rx="4" class="fdv-fill-accent fdv-grow" style="animation-delay:.2s"/><rect x="68" y="28" width="16" height="30" rx="4" class="fdv-fill-soft fdv-grow" style="animation-delay:.4s"/><path class="fdv-link fdv-draw" d="M18 26 L46 12 L74 18 L104 8"/><circle cx="104" cy="8" r="3.5" class="fdv-dot"/></svg>',
			'groups'   => '<svg class="fdm fdm--groups" viewBox="0 0 120 64" fill="none" aria-hidden="true" focusable="false"><circle cx="98" cy="20" r="5" class="fdv-dot"/><circle cx="106" cy="36" r="5" class="fdv-dot"/><circle cx="94" cy="46" r="5" class="fdv-dot"/><path class="fdv-link fdv-draw" d="M88 24 C66 30 56 22 36 22"/><path class="fdv-link fdv-draw" d="M90 44 C68 42 56 46 36 46"/><circle cx="24" cy="22" r="13" class="fdv-ring fdv-pulse"/><circle cx="24" cy="46" r="13" class="fdv-ring fdv-pulse" style="animation-delay:.7s"/><circle cx="21" cy="20" r="3" class="fdv-dot"/><circle cx="21" cy="44" r="3" class="fdv-dot"/></svg>',
			'kanban'   => '<svg class="fdm fdm--kanban" viewBox="0 0 120 64" fill="none" aria-hidden="true" focusable="false"><rect x="8" y="8" width="30" height="48" rx="6" class="fdv-bg"/><rect x="45" y="8" width="30" height="48" rx="6" class="fdv-bg"/><rect x="82" y="8" width="30" height="48" rx="6" class="fdv-bg"/><rect x="13" y="16" width="20" height="12" rx="4" class="fdv-card-mini"/><rect x="50" y="16" width="20" height="12" rx="4" class="fdv-card-mini fdv-card-mini--accent fdv-float"/><rect x="87" y="16" width="20" height="12" rx="4" class="fdv-card-mini fdv-card-mini--dim"/></svg>',
			'channels' => '<svg class="fdm fdm--channels" viewBox="0 0 120 64" fill="none" aria-hidden="true" focusable="false"><circle cx="60" cy="32" r="16" class="fdv-bg fdv-pulse"/><path class="fdv-link fdv-draw" d="M60 16 V6"/><path class="fdv-link fdv-draw" d="M46 44 L34 56"/><path class="fdv-link fdv-draw" d="M74 44 L86 56"/><path class="fdv-link fdv-draw" d="M76 32 H106"/><circle cx="60" cy="5" r="5" class="fdv-dot"/><circle cx="30" cy="58" r="5" class="fdv-dot"/><circle cx="90" cy="58" r="5" class="fdv-dot"/><circle cx="112" cy="32" r="5" class="fdv-dot"/></svg>',
			'plans'    => '<svg class="fdm fdm--plans" viewBox="0 0 120 64" fill="none" aria-hidden="true" focusable="false"><rect x="10" y="34" width="22" height="24" rx="5" class="fdv-fill-soft fdv-grow"/><rect x="42" y="22" width="22" height="36" rx="5" class="fdv-fill-soft fdv-grow" style="animation-delay:.2s"/><rect x="74" y="10" width="22" height="48" rx="5" class="fdv-fill-accent fdv-grow" style="animation-delay:.4s"/><circle cx="106" cy="50" r="9" class="fdv-ring fdv-pulse"/></svg>',
		);
	}
	return isset( $map[ $key ] ) ? $map[ $key ] : '';
}
