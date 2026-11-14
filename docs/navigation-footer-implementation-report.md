# Navigation, Header, Footer & Feature Synchronization — Implementation Report

Date: 2026-11-14 · Scope: global navigation, shared header/footer, feature
registry synchronization, routed-page fixes and per-feature hero graphics in the
xCRM child theme (repo `XCRM-Public`, local site `xcrm.local`).

---

## 1. Summary of delivered work

- Shared `template-parts/site-header.php` on every page: unified nav, desktop
  Features mega menu, mobile off-canvas sidebar with features accordion
  (`assets/js/xcrm-nav.js`).
- Shared `template-parts/site-footer.php`: brand block, trust strip, Enamad
  slot, four registry-driven link columns, bottom bar.
- Feature registry `inc/features-data.php` (16 entries) as the single source of
  truth for mega menu, sidebar, homepage feature grid and footer link column.
- CTA/FAQ partials rewritten to accept `$args` (fixes the PHP warnings).
- Site-wide `dir="rtl"`, identical nav links on all pages, routed templates
  serving HTTP 200 (details in §3–§6).
- Unique animated SVG hero graphic per feature page via shared partial
  `template-parts/feature-hero-graphic.php` (§8).

## 2. Shared header

`site-header.php` renders logo tile + brand text, nav (صفحه اصلی · امکانات ·
برای مارکترها · برای کسب‌وکارها · حریم خصوصی), theme toggle, «ورود» →
dashboard, burger (≤960px). «امکانات» opens a mega menu built from
`xcrm_get_nav_groups()` (4 registry categories + bottom CTA → `/features/`).
The burger opens a right-anchored off-canvas sidebar with a two-level features
accordion (registry loop, unique `hp-acc-<key>` ids), backdrop, scroll lock,
focus trap/restoration, Escape close and desktop-width release — all in
`xcrm-nav.js` (enqueued globally, depends on `xcrm-core-js`).

## 3. CTA / FAQ PHP warnings — root cause and fix

`template-parts/cta-section.php` read page-local variables (`$ft_cta_title`,
…) directly. WordPress `get_template_part()` renders partials in their own
scope, so those variables were undefined → PHP warnings and empty CTAs.
Both partials now read an `$args` array first (passed as the third
`get_template_part()` argument), fall back to legacy variables via `isset()`,
apply defaults, and return gracefully when required values are missing — no
`extract()`, all output escaped (`esc_html`/`esc_url`). All 14 callers pass the
full `$ft_cta_*` set.

## 4. RTL — root cause and fix (reported issue: “header is not RTL”)

Root cause (verified in browser): WP locale is `en-US`, so
`language_attributes()` emits `<html lang="en-US">` **without `dir`**. RTL only
existed inside per-page wrappers (`.hp`, `.fm`, `.xcrm-b2`, `.ft-page`,
`.xcrm-legal-page`), and the shared header is rendered *outside* those
wrappers — so on `/for-marketers/` and `/for-business/` the header, nav and
sidebar computed to `direction: ltr`.

Fixes:

1. `language_attributes` filter in `functions.php` appends `dir="rtl"` to
   `<html>` on every page (guarded so it never duplicates an existing `dir`).
2. `.fm-page` / `.xcrm-b2-page { direction: rtl }` added to their stylesheets
   for parity with the `.ft-page` / `.xcrm-legal-page` pattern.

Verified: `getComputedStyle(header).direction === 'rtl'` on home, marketers,
business, features and legal pages; sidebar opens anchored to the right edge.

## 5. Nav links — root cause and fix (reported issue: “different links”)

The header previously had a per-page branch: homepage showed in-page anchors
(چرا / شروع / تماس) while every other page showed the site links. Fixed by
unifying one nav for all pages (site links everywhere; homepage keeps
`is-active` on صفحه اصلی). The homepage hero CTAs still expose the in-page
sections. `qa-nav.mjs` now asserts the unified set and the absence of the old
anchor branch.

## 6. Sidebar — root cause and fix (reported issue: “sidebar doesn’t work”)

Root cause: `assets/js/xcrm-nav.js` was present in the repo but **not synced to
the served theme** → script 404 → burger/accordion/mega had no behavior. After
syncing, verified in-browser: burger opens the sidebar (right side under RTL),
accordion expands, close button and `aria-expanded` reset, backdrop works.
Guardrail: the file is untracked in git — it must be included in any deploy
(see §11).

## 7. Routed pages returning HTTP 404

`/features/` and `/privacy-policy/` have no WordPress page (the DB privacy slug
is the typo `privicy-policy`), so the main query was 404 even though the
`template_include` templates rendered the full page (second `<title>` was
“Page not found”, robots noindex). New helper `xcrm_serve_custom_template()`
clears `is_404` and calls `status_header( 200 )` before serving the template.
All routes now return 200: `/`, `/for-marketers/`, `/for-business/`,
`/features/`, `/features/<slug>/`, `/privacy-policy/`, `/terms/`.

## 8. Feature hero graphics

`template-parts/feature-hero-graphic.php` (arg: `slug`) renders one unique
animated SVG per feature: 13 specs, 4 layout variants (hub / flow / branch /
split), Persian labels + feather-style icons, gradient connection paths drawn on
entrance (`pathLength=1`), ≤6 staggered SMIL particles (`mpath`), ambient
glow/orbits/accents, per-page prefixed ids (`cm-`, `wt-`, …), decorative
`aria-hidden` markup + caption. CSS: `fhg-*` block in `xcrm-features.css`
(keyframes `fhg-*`, node colour modifiers `is-*`, responsive label bump ≤480px,
full `prefers-reduced-motion` kill-switch; inline script calls
`svg.pauseAnimations()` under reduced motion). Wired after each page’s
`ft__hero-pills` (script-verified insertion).

**Hero layout (follow-up):** `.ft__hero-inner` is now `flex-direction: row`
(wrap, not column) on all 14 feature templates — the copy (breadcrumb, title,
actions, pills) sits in `.ft__hero-copy` beside a `.ft__hero-media` column that
holds the animated graphic (and the page-specific `ft__hero-visual` mock on
revenue/identity/event). Columns wrap to a stack below ~860px with no
horizontal overflow.

## 9. Files changed

| File | Change |
|---|---|
| `functions.php` | Registry require, `xcrm-nav.js` enqueue, RTL `language_attributes` filter, `xcrm_serve_custom_template()` + route rewiring |
| `template-parts/site-header.php` | Rewritten: unified nav, mega, burger, sidebar, accordion |
| `template-parts/site-footer.php` | Rewritten: brand, trust strip, Enamad slot, 4 columns, bottom bar |
| `template-parts/cta-section.php`, `faq-section.php` | `$args`-based rewrite (warning fix) |
| `template-parts/feature-card.php` | `xcrm_feature_url()` links |
| `template-parts/feature-hero-graphic.php` | **New** shared hero SVG partial |
| `inc/features-data.php` | 16-entry registry + nav/home/footer groups/helpers; footer flags reduced to 4 links |
| `assets/js/xcrm-nav.js` | **New** mega/sidebar/accordion behavior |
| `assets/css/xcrm-home.css` | Header, mega, sidebar, footer, logo CSS |
| `assets/css/xcrm-features.css` | `fhg-*` hero-graphic CSS + hero row layout (`.ft__hero-copy`/`.ft__hero-media`) + responsive/reduced-motion |
| `assets/css/xcrm-marketers.css`, `xcrm-business.css` | Body-class RTL rules |
| `front-page.php` | `hp__feature-pages` registry grid |
| `page-xcrm-feature-*.php` (13) + `page-xcrm-features.php` | Hero-graphic wiring + hero copy/media wrappers |
| `AGENTS.md`, `docs/website-content-map.md` | Docs/tracker updates |
| `.gitignore` | Added `.playwright-mcp/` (browser test artifacts) |

## 10. Tests executed

- Browser (local `xcrm.local`): RTL + unified links + `is-active` on
  home/marketers/business/features; mega open/close; sidebar open (right side),
  accordion, close; hero graphics (branch + hub) with 0 console errors.
- `qa-nav.mjs` — 94 checks (extended: unified nav, RTL filter, 200 helper,
  body-class RTL).
- `qa-fhg.mjs` — 63 checks (specs ×13, wiring ×13, unique ids, CSS coverage).
- Page QA suites: automation, communication, event, features, identity,
  revenue, team, templates, workflow — all pass.
- `lint-php.mjs` — 31 PHP files balanced; `lint-registry.mjs`,
  `lint-partials.mjs`; `node --check assets/js/xcrm-nav.js`.

## 11. Remaining issues / open items

1. **Deployment:** changes are uncommitted in git; `assets/js/xcrm-nav.js` and
   `template-parts/feature-hero-graphic.php` are *untracked* — a git-only deploy
   would miss them (this exact miss caused §6). Sync the whole theme folder.
   Local dev theme path: `C:\Users\Mobin\Local Sites\xcrm\app\public\wp-content\themes\hello-child`.
2. **Enamad:** no official badge/credentials available — footer renders an HTML
   comment slot only; add the real asset when provided (never fabricate).
3. **WP locale** is still `en-US` (`<html lang="en-US">`); direction is forced
   RTL by filter, but switching the site language to `fa_IR` would fix `lang`,
   dates and admin localization.
4. **DB slug typo:** privacy page slug is `privicy-policy`; `/privacy-policy/`
   works through the template route, but the alternate URL
   `/privicy-policy/` also resolves via the WP page. Consider renaming the slug.
5. **Double `<title>`:** templates hardcode `<title>` and `wp_head()` adds a
   second one (browsers use the first). Cosmetic/SEO cleanup pending.
6. **v2 templates** (`For Business v2` / `For Marketers v2`) exist and also use
   the shared header; only one template can be assigned per page — confirm which
   is intended.
7. Homepage in-page anchors (چرا/شروع/تماس) were removed from the header for
   link consistency; re-add as a homepage-only enhancement only if desired.
