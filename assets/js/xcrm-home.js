/**
 * xCRM Homepage
 * --------------------------------------------------------------------------
 * front-page.php interactions:
 *   - Theme toggle UI (syncs with XCRM.darkMode)
 *   - Sticky header background on scroll
 *   - Feature tabs (hp__tab / hp__panel)
 *   - Hero mouse parallax for background shapes
 *
 * Depends on xcrm-core.js (window.XCRM).
 */
(function () {
  'use strict';

  var reduced =
    window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ========================================================================
     Theme toggle button
     ======================================================================== */

  function initThemeToggle() {
    var toggle = document.getElementById('hp-theme-toggle');
    if (!toggle || !window.XCRM || !XCRM.darkMode) return;

    var sync = function () {
      var isDark = XCRM.darkMode.isDark();
      toggle.classList.toggle('is-dark', isDark);
      toggle.setAttribute('aria-pressed', isDark ? 'true' : 'false');
    };

    toggle.addEventListener('click', function () {
      XCRM.darkMode.toggle();
      sync();
    });

    sync();

    // Keep in sync if dark mode changes elsewhere (system preference, core API)
    if ('MutationObserver' in window) {
      var mo = new MutationObserver(sync);
      mo.observe(document.documentElement, {
        attributes: true,
        attributeFilter: ['class'],
      });
    }
  }

  /* ========================================================================
     Sticky header
     ======================================================================== */

  function initHeader() {
    var header = document.querySelector('.hp__header');
    if (!header) return;

    var ticking = false;

    var update = function () {
      header.classList.toggle('is-scrolled', window.scrollY > 24);
      ticking = false;
    };

    window.addEventListener(
      'scroll',
      function () {
        if (!ticking) {
          requestAnimationFrame(update);
          ticking = true;
        }
      },
      { passive: true }
    );

    update();
  }

  /* ========================================================================
     Feature tabs
     ======================================================================== */

  function initTabs() {
    var tabs = document.querySelectorAll('.hp__tab');
    var panels = document.querySelectorAll('.hp__panel');
    if (!tabs.length || !panels.length) return;

    tabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        var target = tab.getAttribute('data-tab');

        tabs.forEach(function (t) {
          t.classList.remove('is-active');
          t.setAttribute('aria-selected', 'false');
        });
        panels.forEach(function (p) {
          p.classList.remove('is-active');
        });

        tab.classList.add('is-active');
        tab.setAttribute('aria-selected', 'true');

        var panel = document.querySelector('.hp__panel[data-panel="' + target + '"]');
        if (panel) panel.classList.add('is-active');
      });
    });
  }

  /* ========================================================================
     Hero mouse parallax
     --------------------------------------------------------------------------
     Moves [data-depth] wrappers; CSS animations run on children so
     transforms never conflict.
     ======================================================================== */

  function initHeroParallax() {
    if (reduced) return;

    var hero = document.querySelector('.hp__hero');
    if (!hero) return;

    var layers = hero.querySelectorAll('[data-depth]');
    if (!layers.length) return;

    var rect = null;
    var raf = null;
    var targetX = 0;
    var targetY = 0;

    var apply = function () {
      raf = null;
      layers.forEach(function (layer) {
        var depth = parseFloat(layer.getAttribute('data-depth')) || 1;
        var x = targetX * 18 * depth;
        var y = targetY * 14 * depth;
        layer.style.transform = 'translate3d(' + x.toFixed(1) + 'px,' + y.toFixed(1) + 'px,0)';
      });
    };

    hero.addEventListener(
      'mousemove',
      function (e) {
        if (!rect) rect = hero.getBoundingClientRect();
        // normalized -0.5 … 0.5
        targetX = (e.clientX - rect.left) / rect.width - 0.5;
        targetY = (e.clientY - rect.top) / rect.height - 0.5;
        if (!raf) raf = requestAnimationFrame(apply);
      },
      { passive: true }
    );

    hero.addEventListener(
      'mouseleave',
      function () {
        targetX = 0;
        targetY = 0;
        rect = null;
        if (!raf) raf = requestAnimationFrame(apply);
      },
      { passive: true }
    );

    // Recalc rect on resize
    window.addEventListener(
      'resize',
      function () {
        rect = null;
      },
      { passive: true }
    );
  }

  /* ========================================================================
     Init
     ======================================================================== */

  function init() {
    initThemeToggle();
    initHeader();
    initTabs();
    initHeroParallax();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init, { once: true });
  } else {
    init();
  }
})();
