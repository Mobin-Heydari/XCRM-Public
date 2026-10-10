# AGENTS.md — xCRM Child Theme

Instructions for AI agents (and humans) working in this repository.

---

## 1. Project overview

WordPress **child theme** of Hello Elementor. Persian/RTL marketing pages for xCRM.

- **No build step.** Vanilla CSS + vanilla JS only. No Tailwind, no npm, no bundler.
- **No frameworks.** Plain files enqueued via `functions.php`.
- **RTL by default** on landing templates. Font is IRANYekan (loaded in design system).
- **Dark mode is class-based** (`<html class="dark">`), not media-query-based.

---

## 2. File map

```
functions.php                        # All enqueues live here + /for-marketers/ + /for-business/ routes
style.css                            # Theme header only (WP requires it)
front-page.php                       # ⭐ Homepage (question + persona links + tabs)
page-xcrm-for-marketers.php          # For Marketers landing (/for-marketers/)
page-xcrm-for-business.php           # For Business landing (/for-business/)
assets/
  css/
    xcrm-design-system.css           # ⭐ BASE layer — tokens, cards, utilities, animations
    xcrm-home.css                    # Homepage (prefix hp-) — hero, tabs, toggle, bg shapes
    xcrm-marketers.css               # For Marketers (prefix fm-) — SVG animations, use-cases
    xcrm-business.css                # For Business (prefix fb-) — editorial, FAQ, UI mocks
  js/
    xcrm-core.js                     # ⭐ Shared utilities (auto-inits on load)
    xcrm-home.js                     # Theme toggle UI, sticky header, hero parallax (global)
  fonts/
    IRANYekanXVF.woff2
    iranyekanwebregular.woff
  image/
```

**Load order (important):**
`style.css` → `xcrm-design-system.css` → section CSS.
`xcrm-core.js` loads in the footer before `xcrm-home.js`.

To add a new section stylesheet/script, enqueue it in `functions.php` with
`xcrm-design-system` as the style dependency (see existing sections for the pattern).

**Routing:**
- Homepage: `front-page.php` (auto — WP front page)
- Marketers: `/for-marketers/` via `template_include` filter in `functions.php`
  (also available as page template "For Marketers" if a WP page is preferred)
- Business: `/for-business/` via `template_include` filter in `functions.php`
  (also available as page template "For Business" if a WP page is preferred)
- Homepage persona links: `$for_marketers` (`/for-marketers/`) and
  `$for_business` (`/for-business/`) at the top of `front-page.php`.

**Shared header:** the fixed glass header + dark/light toggle use `hp__*` classes
from `xcrm-home.css` and are driven by `xcrm-home.js` (enqueued globally).
Any page can reuse the same header markup.

---

## 3. Design system (`xcrm-design-system.css`)

Everything is namespaced with CSS custom properties prefixed `--x-`.
Component classes keep the original design-system names (`main-card`, `grid-primary`, …).

### 3.1 Dark mode

Add `class="dark"` on `<html>` (or any ancestor). All theme-aware variables flip
automatically. `XCRM.darkMode` (in JS) toggles it and persists the choice in
`localStorage` under the key `xcrm-theme`. With no stored choice it follows the
system `prefers-color-scheme`.

### 3.2 CSS variables — what to use where

| Purpose | Light value | Dark value | Use this var |
|---|---|---|---|
| Page background | `#F6F8FC` | `#070B14` | `var(--x-bg)` |
| Base / card background | `#FFFFFF` | `#0D1320` | `var(--x-base)` |
| Surface | `#FFFFFF` | `#111827` | `var(--x-surface)` |
| Surface hover | `#F9FAFB` | `#172033` | `var(--x-surface-hover)` |
| Border (forms/tables) | `#E7EAF0` | `#1E293B` | `var(--x-border)` |
| Subtle border | `#EEF0F4` | `#172033` | `var(--x-border-subtle)` |
| Main text | `#111827` | `#F8FAFC` | `var(--x-text)` |
| Highlight text | `#667085` | `#CBD5E1` | `var(--x-text-highlight)` |
| Muted text | `#98A2B3` | `#64748B` | `var(--x-text-muted)` |
| Main shadow | light | dark | `var(--x-shadow-main)` |
| Card shadow | light | dark | `var(--x-shadow-card)` |
| Card hover shadow | light | dark | `var(--x-shadow-card-hover)` |
| Soft shadow | light | dark | `var(--x-shadow-soft)` |

**Static palette vars** (never flip — brand/semantic values):

```
--x-primary            --x-primary-hover       --x-primary-active
--x-secondary          --x-secondary-hover     --x-secondary-active
--x-success            --x-info                --x-warn              --x-error
--x-purple             --x-cyan                --x-pink              --x-orange
```

Each semantic color also has `-soft`, `-soft-dark`, `-strong`, `-on-dark` variants.
Theme-aware soft/accent vars: `--x-soft-primary`, `--x-soft-success`,
`--x-accent-info`, `--x-accent-warn`, etc.

**Charts** (always static): `--x-chart-primary`, `--x-chart-secondary`,
`--x-chart-success`, `--x-chart-warning`, `--x-chart-danger`,
`--x-chart-purple`, `--x-chart-pink`, `--x-chart-orange`.

**Sidebar / inputs** (theme-aware): `--x-sidebar`, `--x-sidebar-active`,
`--x-sidebar-hover`, `--x-input`, `--x-input-border`, `--x-input-focus`.

### 3.3 Gradients

```css
var(--x-gradient-primary)     /* #6366F1 → #8B5CF6 */
var(--x-gradient-ocean)       /* #6366F1 → #06B6D4 */
var(--x-gradient-premium)     /* #7C3AED → #EC4899 */
var(--x-gradient-success)     /* #10B981 → #06B6D4 */
var(--x-gradient-sunset)      /* #F97316 → #EC4899 */
var(--x-gradient-dark)        /* #0B1120 → #111827 */
var(--x-gradient-brand-glow)  /* radial brand glow */
```

### 3.4 Border radius

```css
var(--x-radius-xs)   /* 0.375rem */
var(--x-radius-sm)   /* 0.5rem */
var(--x-radius-md)   /* 0.625rem */
var(--x-radius-lg)   /* 0.875rem  ← cards default */
var(--x-radius-xl)   /* 1.125rem */
var(--x-radius-2xl)  /* 1.25rem */
```

### 3.5 Motion tokens

```css
var(--x-ease-standard)  /* cubic-bezier(0.22, 1, 0.36, 1) — snappy, modern */
var(--x-ease-smooth)    /* cubic-bezier(0.4, 0, 0.2, 1)  — standard material */

var(--x-dur-150)  /* 150ms */
var(--x-dur-180)  /* 180ms */
var(--x-dur-220)  /* 220ms */
var(--x-dur-250)  /* 250ms */
```

Always use these vars instead of hard-coded easing/durations.

---

## 4. Component classes

Cards are **borderless by default** (hierarchy = shadow, not lines) and
auto-adapt to dark mode. Padding on cards is intentionally small (`0.25rem`) —
put your own padding on the inner content.

| Class | Purpose |
|---|---|
| `.main-card` | Neutral white/dark card |
| `.primary-card` | Indigo-tinted card |
| `.secondary-card` | Gray-tinted card |
| `.success-card` | Green-tinted card |
| `.info-card` | Blue-tinted card |
| `.warn-card` | Amber-tinted card |
| `.error-card` | Red-tinted card |
| `.glass-card` | Frosted glass (backdrop blur) |
| `.hover-card` | Lifts on hover (`translateY(-2px)`) |
| `.brand-surface` | Gradient brand background surface |

Containers:

```html
<div class="base-container">…</div>   <!-- max 1300px, centered -->
<div class="container-main">…</div>   <!-- max 80vw, centered -->
```

Grids:

```html
<div class="grid-primary">…</div>    <!-- 3 columns -->
<div class="grid-secondary">…</div>  <!-- 2 columns -->
<div class="grid-full">…</div>       <!-- 1 column -->
<div class="grid-auto">…</div>       <!-- auto-fit, minmax(280px, 1fr) -->
```

Interactive / focus:

```html
<div class="interactive-surface">…</div>  <!-- hover bg using --x-surface-hover -->
<button class="xcrm-focus">…</button>     <!-- accessible focus ring -->
```

---

## 5. Utilities

| Class | Purpose |
|---|---|
| `.scrollbar-hide` | Hides scrollbar (cross-browser) |
| `.scrollbar-thin` | Thin scrollbar (Firefox) |
| `.text-gradient-primary` | Gradient text (primary → purple) |
| `.text-gradient-shimmer` | Animated shimmering gradient text |
| `.xcrm-grid-bg` | Subtle 32px grid background pattern |
| `.section-contain` | CSS containment for long pages (perf) |
| `.will-animate` | `will-change: transform, opacity` |
| `.gpu-accelerated` | `translateZ(0)` GPU hint |
| `.icon-pulse` / `.icon-pulse-fast` | Pulsing icon animation |
| `.animated-border` | Conic gradient border appears on hover |

Card flip (hover to rotate):

```html
<div class="card-flip-container">
  <div class="card-flip-inner">
    <div class="card-flip-front">…</div>
    <div class="card-flip-back">…</div>
  </div>
</div>
```

Hero utilities: `.hero-mesh-gradient`, `.hero-spotlight`, `.hero-glass`,
`.hero-orbit-ring`, `.hero-connection-line`, `.hero-accordion-trigger`.

---

## 6. Animations

### 6.1 Keyframes (all prefixed `x-` to avoid collisions)

```
x-ping                  x-pulse-slow            x-fade-in
x-scale-in              x-shimmer               x-float
x-icon-pulse            x-gradient-shift        x-orbit-dot
x-hero-gradient-rotate  x-spotlight-follow      x-glow-breathe
x-float-subtle          x-mesh-shift
```

### 6.2 Ready-made animation classes

Just add the class — no keyframe wiring needed:

```html
<div class="anim-fade-in">…</div>
<div class="anim-scale-in">…</div>
<div class="anim-float">…</div>
<div class="anim-float-subtle">…</div>
<div class="anim-pulse-slow">…</div>
<div class="anim-shimmer">…</div>
<div class="anim-icon-pulse">…</div>
<div class="anim-icon-pulse-fast">…</div>
<div class="anim-gradient-shift">…</div>
<div class="anim-orbit-dot">…</div>
<div class="anim-hero-gradient-rotate">…</div>
<div class="anim-spotlight-follow">…</div>
<div class="anim-glow-breathe">…</div>
<div class="anim-mesh-shift">…</div>
<div class="anim-ping-3">…</div>
```

All animation classes and reveal transitions are disabled under
`prefers-reduced-motion: reduce` automatically.

### 6.3 Custom keyframes in a section file

If you need a section-specific animation, define it **inside that section's CSS
file** with a short prefix matching the section (existing convention):

- `hp-` / `hp__` for homepage
- `fm-` / `fm__` for for-marketers landing
- `fb-` / `fb__` for for-business landing

Never redefine `x-` keyframes in section files.

---

## 7. JavaScript (`xcrm-core.js`)

Auto-initializes on `DOMContentLoaded`. Exposes `window.XCRM`.
All modules no-op safely when elements are missing and respect reduced motion.

### 7.1 Dark mode

```js
XCRM.darkMode.toggle();     // flip + persist
XCRM.darkMode.enable();     // force dark
XCRM.darkMode.disable();    // force light
XCRM.darkMode.isDark();     // boolean
```

### 7.2 Scroll reveal

Add attributes to markup — no JS wiring needed:

```html
<div data-reveal>…</div>                                  <!-- fade up -->
<div data-reveal="up">…</div>                             <!-- directions: -->
<div data-reveal="down">…</div>                           <!-- up down -->
<div data-reveal="left">…</div>                           <!-- left right -->
<div data-reveal="right">…</div>                          <!-- scale fade -->
<div data-reveal="scale">…</div>
<div data-reveal="fade">…</div>

<div data-reveal data-reveal-delay="150">…</div>          <!-- stagger (ms) -->
```

For dynamically added elements:

```js
XCRM.reveal.observe(newElement);
XCRM.reveal.refresh();   // re-scan document for new [data-reveal]
```

### 7.3 Counters

```html
<span data-count-to="12000"
      data-count-duration="1600"
      data-count-prefix=""
      data-count-suffix="+"
      data-count-decimals="0">0</span>
```

Animates with easeOutExpo when scrolled into view. Thousands separators are
added automatically.

### 7.4 Magnetic hover

```html
<button data-magnetic data-magnetic-strength="0.35">…</button>
```

Skipped on touch devices.

### 7.5 3D Tilt

```html
<div data-tilt data-tilt-max="8">…</div>
```

Skipped on touch devices.

### 7.6 Spotlight follow

```html
<div data-spotlight-zone>              <!-- position: relative container -->
  <div class="hero-spotlight" data-spotlight></div>
  …
</div>
```

Moves the spotlight element toward the cursor inside the zone.

### 7.7 Parallax

```html
<div data-parallax="0.12">…</div>
```

Positive = slower than scroll, negative = faster. Uses passive scroll + rAF.

### 7.8 Smooth anchor scroll

Automatic for any `<a href="#section">`. No attributes needed.

---

## 8. Conventions (follow these strictly)

1. **Never add Tailwind** or any CSS framework. Plain CSS only.
2. **Section CSS files** use a short BEM-like prefix (`ic`, `ft`, `aud`, `qh`,
   `dvs`, `tst`, `xf`) with `__` for elements and `--` for modifiers:
   `.ft__tab`, `.ft__tab--active` (though `is-active` is the shared state class).
3. **State classes** are always `.is-*`: `is-active`, `is-visible`, `is-light`,
   `is-selected`, `is-disabled`.
4. **Section JS** is an IIFE with `'use strict'`, `var`, and no ES modules —
   match the existing style in `features-tabs.js` / `audience.js`.
5. **Typography** uses `clamp()` for fluid sizing. Example pattern:
   `font-size: clamp(1.5rem, 3.5vw, 2.4rem);`
6. **Colors in section CSS**: prefer design-system vars (`var(--x-text)`).
   Hard-code only when a section is intentionally a fixed dark/light zone
   (e.g. iceberg is always black) — that is acceptable and already the pattern.
7. **Transitions** should use `var(--x-ease-standard)` or `var(--x-ease-smooth)`
   and `var(--x-dur-*)` instead of raw values.
8. **Reduced motion**: if you write a custom animation, add a
   `@media (prefers-reduced-motion: reduce)` block that disables it (or rely on
   the existing global kill-switch in the design system).
9. **Performance**: long sections get `.section-contain`. Heavy transforms get
   `.will-animate` or `.gpu-accelerated`.
10. **Enqueues**: register new files in `functions.php` only. Styles depend on
    `xcrm-design-system`. Scripts load in the footer (`true` as 5th arg).

---

## 9. Adding a new landing section — checklist

1. Create `assets/css/your-section.css` with a unique short prefix.
2. Create `assets/js/your-section.js` as an IIFE (if interaction is needed).
3. Enqueue both in `functions.php` with `xcrm-design-system` as style dep.
4. Use design-system vars for anything theme-aware; use component classes
   (`main-card`, `grid-auto`, …) instead of rebuilding them.
5. Add `data-reveal` attributes for entrance animations instead of writing
   custom scroll JS.
6. Add `data-count-to` for stat numbers instead of custom counter JS.
7. Test with `<html class="dark">` forced on — colors must not break.

---

## 10. Quick reference — most used snippets

```html
<!-- Card grid that auto-adapts to dark mode -->
<div class="grid-auto">
  <div class="main-card" data-reveal="up">
    <h3>Title</h3>
    <p style="color: var(--x-text-highlight)">Body</p>
  </div>
</div>

<!-- Gradient heading -->
<h2 class="text-gradient-primary">Heading</h2>

<!-- Stat -->
<span data-count-to="98" data-count-suffix="%">0</span>

<!-- Accessible button with focus ring -->
<button class="xcrm-focus" data-magnetic>CTA</button>

<!-- Glass hero bar -->
<div class="hero-glass" style="border-radius: var(--x-radius-lg)">
  …
</div>
```

When in doubt: use the design-system vars and component classes first;
write section-specific CSS only for layout/visuals the system does not cover.
