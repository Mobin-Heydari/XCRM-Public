/**
 * xCRM Core
 * --------------------------------------------------------------------------
 * Shared vanilla JS utilities for the xCRM WordPress child theme.
 * No dependencies. Auto-initializes on DOMContentLoaded.
 *
 * Exposed as window.XCRM:
 *   XCRM.darkMode    — class-based dark theme (localStorage + system)
 *   XCRM.reveal      — scroll reveal for [data-reveal]
 *   XCRM.counters    — animated counters for [data-count-to]
 *   XCRM.magnetic    — magnetic hover for [data-magnetic]
 *   XCRM.tilt        — 3D tilt for [data-tilt]
 *   XCRM.spotlight   — cursor-follow spotlight for [data-spotlight]
 *   XCRM.parallax    — subtle parallax for [data-parallax]
 *   XCRM.smoothScroll— smooth anchor scrolling for a[href^="#"]
 *
 * Every module respects prefers-reduced-motion.
 */
(function () {
  'use strict';

  var XCRM = (window.XCRM = window.XCRM || {});
  XCRM.version = '1.0.0';

  /* ========================================================================
     Helpers
     ======================================================================== */

  var motionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
  var isTouch =
    'ontouchstart' in window ||
    (navigator.maxTouchPoints && navigator.maxTouchPoints > 0);

  function reducedMotion() {
    return motionQuery.matches;
  }

  function $(sel, ctx) {
    return (ctx || document).querySelector(sel);
  }

  function $$(sel, ctx) {
    return Array.prototype.slice.call((ctx || document).querySelectorAll(sel));
  }

  function clamp(value, min, max) {
    return Math.min(max, Math.max(min, value));
  }

  function onReady(fn) {
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', fn, { once: true });
    } else {
      fn();
    }
  }

  XCRM.reducedMotion = reducedMotion;
  XCRM.$ = $;
  XCRM.$$ = $$;

  /* ========================================================================
     Dark Mode
     ---------------------------------------------------------------------
     Usage:
       <html class="dark">                     — force dark
       XCRM.darkMode.toggle()                 — flip + persist
       XCRM.darkMode.enable() / .disable()    — explicit
       XCRM.darkMode.isDark()                 — query
     Persists choice in localStorage ('xcrm-theme').
     Falls back to system preference when no explicit choice stored.
     ======================================================================== */

  var STORAGE_KEY = 'xcrm-theme';

  var darkMode = {
    init: function () {
      var stored = null;
      try {
        stored = localStorage.getItem(STORAGE_KEY);
      } catch (e) {
        /* private mode */
      }

      if (stored === 'dark') {
        this.enable(true);
      } else if (stored === 'light') {
        this.disable(true);
      } else {
        // No explicit choice — follow system
        var prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        if (prefersDark) this.enable(true);
      }

      // Follow system changes only while no explicit choice is stored
      var mq = window.matchMedia('(prefers-color-scheme: dark)');
      var onChange = function (e) {
        var choice = null;
        try {
          choice = localStorage.getItem(STORAGE_KEY);
        } catch (err) {}
        if (choice) return;
        if (e.matches) darkMode.enable(true);
        else darkMode.disable(true);
      };
      if (mq.addEventListener) mq.addEventListener('change', onChange);
      else if (mq.addListener) mq.addListener(onChange);
    },

    isDark: function () {
      return document.documentElement.classList.contains('dark');
    },

    enable: function (silent) {
      document.documentElement.classList.add('dark');
      if (!silent) this.persist('dark');
    },

    disable: function (silent) {
      document.documentElement.classList.remove('dark');
      if (!silent) this.persist('light');
    },

    toggle: function () {
      if (this.isDark()) this.disable();
      else this.enable();
      return this.isDark();
    },

    persist: function (value) {
      try {
        localStorage.setItem(STORAGE_KEY, value);
      } catch (e) {}
    },
  };

  XCRM.darkMode = darkMode;

  /* ========================================================================
     Reveal on scroll
     ---------------------------------------------------------------------
     Markup:
       <div data-reveal>                       — fade up (default)
       <div data-reveal="up|down|left|right|scale|fade">
       <div data-reveal data-reveal-delay="150">

     JS:
       XCRM.reveal.observe(el)   — observe a dynamic element
       XCRM.reveal.refresh()     — re-scan the document
     ======================================================================== */

  var reveal = {
    _observer: null,

    init: function () {
      var els = $$('[data-reveal]');
      if (!els.length) return;

      if (reducedMotion() || !('IntersectionObserver' in window)) {
        els.forEach(function (el) {
          el.classList.add('is-visible');
        });
        return;
      }

      this._observer = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;
            var el = entry.target;
            var delay = parseInt(el.getAttribute('data-reveal-delay') || '0', 10);
            if (delay > 0) el.style.transitionDelay = delay + 'ms';
            el.classList.add('is-visible');
            reveal._observer.unobserve(el);
          });
        },
        {
          threshold: 0.12,
          rootMargin: '0px 0px -8% 0px',
        }
      );

      els.forEach(function (el) {
        reveal._observer.observe(el);
      });
    },

    observe: function (el) {
      if (!el) return;
      if (reducedMotion() || !this._observer) {
        el.classList.add('is-visible');
        return;
      }
      this._observer.observe(el);
    },

    refresh: function () {
      var els = $$('[data-reveal]:not(.is-visible)');
      var self = this;
      els.forEach(function (el) {
        self.observe(el);
      });
    },
  };

  XCRM.reveal = reveal;

  /* ========================================================================
     Counters
     ---------------------------------------------------------------------
     Markup:
       <span data-count-to="12000" data-count-duration="1600"
             data-count-prefix="" data-count-suffix="+"
             data-count-decimals="0">0</span>
     ======================================================================== */

  var counters = {
    init: function () {
      var els = $$('[data-count-to]');
      if (!els.length) return;

      var animate = function (el) {
        var target = parseFloat(el.getAttribute('data-count-to')) || 0;
        var duration = parseInt(el.getAttribute('data-count-duration') || '1600', 10);
        var decimals = parseInt(el.getAttribute('data-count-decimals') || '0', 10);
        var prefix = el.getAttribute('data-count-prefix') || '';
        var suffix = el.getAttribute('data-count-suffix') || '';

        var format = function (value) {
          var n =
            decimals > 0
              ? value.toFixed(decimals)
              : Math.round(value).toString();
          // thousands separator
          var parts = n.split('.');
          parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
          return prefix + parts.join('.') + suffix;
        };

        if (reducedMotion()) {
          el.textContent = format(target);
          return;
        }

        var start = null;
        var easeOutExpo = function (t) {
          return t === 1 ? 1 : 1 - Math.pow(2, -10 * t);
        };

        var step = function (timestamp) {
          if (!start) start = timestamp;
          var progress = clamp((timestamp - start) / duration, 0, 1);
          var eased = easeOutExpo(progress);
          el.textContent = format(target * eased);
          if (progress < 1) {
            requestAnimationFrame(step);
          } else {
            el.textContent = format(target);
          }
        };

        requestAnimationFrame(step);
      };

      if (!('IntersectionObserver' in window)) {
        els.forEach(animate);
        return;
      }

      var io = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;
            animate(entry.target);
            io.unobserve(entry.target);
          });
        },
        { threshold: 0.4 }
      );

      els.forEach(function (el) {
        io.observe(el);
      });
    },
  };

  XCRM.counters = counters;

  /* ========================================================================
     Magnetic hover
     ---------------------------------------------------------------------
     Markup: <button data-magnetic data-magnetic-strength="0.3">
     Element is translated toward the cursor while hovered.
     Skipped on touch devices and reduced motion.
     ======================================================================== */

  var magnetic = {
    init: function () {
      if (isTouch || reducedMotion()) return;

      $$('[data-magnetic]').forEach(function (el) {
        var strength = parseFloat(el.getAttribute('data-magnetic-strength') || '0.35');

        el.style.transition = 'transform 0.25s cubic-bezier(0.22, 1, 0.36, 1)';

        el.addEventListener('mousemove', function (e) {
          var rect = el.getBoundingClientRect();
          var x = e.clientX - rect.left - rect.width / 2;
          var y = e.clientY - rect.top - rect.height / 2;
          el.style.transform =
            'translate(' + x * strength + 'px, ' + y * strength + 'px)';
        });

        el.addEventListener('mouseleave', function () {
          el.style.transform = 'translate(0, 0)';
        });
      });
    },
  };

  XCRM.magnetic = magnetic;

  /* ========================================================================
     3D Tilt
     ---------------------------------------------------------------------
     Markup: <div data-tilt data-tilt-max="8" data-tilt-glare>
     ======================================================================== */

  var tilt = {
    init: function () {
      if (isTouch || reducedMotion()) return;

      $$('[data-tilt]').forEach(function (el) {
        var max = parseFloat(el.getAttribute('data-tilt-max') || '6');

        el.style.transition = 'transform 0.2s ease-out';
        el.style.transformStyle = 'preserve-3d';

        el.addEventListener('mousemove', function (e) {
          var rect = el.getBoundingClientRect();
          var px = (e.clientX - rect.left) / rect.width;
          var py = (e.clientY - rect.top) / rect.height;
          var rotateY = (px - 0.5) * max * 2;
          var rotateX = (0.5 - py) * max * 2;
          el.style.transform =
            'perspective(800px) rotateX(' +
            rotateX.toFixed(2) +
            'deg) rotateY(' +
            rotateY.toFixed(2) +
            'deg)';
        });

        el.addEventListener('mouseleave', function () {
          el.style.transform = 'perspective(800px) rotateX(0deg) rotateY(0deg)';
        });
      });
    },
  };

  XCRM.tilt = tilt;

  /* ========================================================================
     Spotlight follow
     ---------------------------------------------------------------------
     Markup:
       <div class="hero" data-spotlight-zone>   — relative container
         <div class="hero-spotlight" data-spotlight></div>
       ...
     The [data-spotlight] element moves toward the cursor inside the zone.
     ======================================================================== */

  var spotlight = {
    init: function () {
      if (reducedMotion()) return;

      $$('[data-spotlight-zone]').forEach(function (zone) {
        var spot = $('[data-spotlight]', zone);
        if (!spot) return;

        zone.addEventListener('mousemove', function (e) {
          var rect = zone.getBoundingClientRect();
          var x = e.clientX - rect.left;
          var y = e.clientY - rect.top;
          spot.style.left = x + 'px';
          spot.style.top = y + 'px';
        });
      });
    },
  };

  XCRM.spotlight = spotlight;

  /* ========================================================================
     Parallax (subtle)
     ---------------------------------------------------------------------
     Markup: <div data-parallax="0.12">
     Positive values move slower than scroll; negative move faster.
     ======================================================================== */

  var parallax = {
    _els: [],

    init: function () {
      if (reducedMotion()) return;

      this._els = $$('[data-parallax]');
      if (!this._els.length) return;

      var ticking = false;
      var self = this;

      var update = function () {
        var vh = window.innerHeight;
        self._els.forEach(function (el) {
          var speed = parseFloat(el.getAttribute('data-parallax')) || 0.1;
          var rect = el.getBoundingClientRect();
          var center = rect.top + rect.height / 2;
          var offset = (center - vh / 2) * speed;
          el.style.transform = 'translateY(' + offset.toFixed(1) + 'px)';
        });
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
    },
  };

  XCRM.parallax = parallax;

  /* ========================================================================
     Smooth anchor scroll
     ---------------------------------------------------------------------
     <a href="#section-id"> scrolls smoothly (unless reduced motion).
     ======================================================================== */

  var smoothScroll = {
    init: function () {
      document.addEventListener('click', function (e) {
        var link = e.target.closest ? e.target.closest('a[href^="#"]') : null;
        if (!link) return;

        var hash = link.getAttribute('href');
        if (!hash || hash === '#') return;

        var target = null;
        try {
          target = document.querySelector(hash);
        } catch (err) {
          return;
        }
        if (!target) return;

        e.preventDefault();
        target.scrollIntoView({
          behavior: reducedMotion() ? 'auto' : 'smooth',
          block: 'start',
        });
      });
    },
  };

  XCRM.smoothScroll = smoothScroll;

  /* ========================================================================
     Auto-init
     ======================================================================== */

  onReady(function () {
    darkMode.init();
    reveal.init();
    counters.init();
    magnetic.init();
    tilt.init();
    spotlight.init();
    parallax.init();
    smoothScroll.init();
  });
})();
