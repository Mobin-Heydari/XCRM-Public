/**
 * xCRM Legal Pages
 * --------------------------------------------------------------------------
 * Scroll progress, TOC active state, back-to-top, Persian digits.
 * Depends on xcrm-core.js (window.XCRM) for theme toggle.
 */
(function () {
	'use strict';

	var reduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	/* Persian digit helper */
	function toPersian(n) {
		return String(n).replace(/[0-9]/g, function (d) { return '۰۱۲۳۴۵۶۷۸۹'[d]; });
	}

	/* ── Scroll Progress Bar ── */
	function initProgress() {
		var bar = document.getElementById('xlg-progress-bar');
		if (!bar) return;
		var ticking = false;
		function update() {
			var h = document.documentElement.scrollHeight - window.innerHeight;
			var pct = h > 0 ? (window.scrollY / h) * 100 : 0;
			bar.style.width = Math.min(100, Math.max(0, pct)) + '%';
			ticking = false;
		}
		window.addEventListener('scroll', function () {
			if (!ticking) { requestAnimationFrame(update); ticking = true; }
		}, { passive: true });
		update();
	}

	/* ── TOC Active State + Progress ── */
	function initTOC() {
		var sections = document.querySelectorAll('.xlg__section[id]');
		var tocLinks = document.querySelectorAll('.xlg__toc-link');
		var tocChips = document.querySelectorAll('.xlg__toc-chip');
		var tocBar = document.getElementById('xlg-toc-bar');
		var tocPct = document.getElementById('xlg-toc-pct');
		var tocMPct = document.getElementById('xlg-toc-m-pct');
		if (!sections.length) return;

		function setActive(id) {
			tocLinks.forEach(function (l) { l.classList.toggle('is-active', l.getAttribute('data-target') === id); });
			tocChips.forEach(function (c) { c.classList.toggle('is-active', c.getAttribute('data-target') === id); });
		}

		/* IntersectionObserver for active section */
		if ('IntersectionObserver' in window) {
			var observer = new IntersectionObserver(function (entries) {
				entries.forEach(function (entry) {
					if (entry.isIntersecting) {
						setActive(entry.target.id);
					}
				});
			}, { rootMargin: '-15% 0px -70% 0px', threshold: 0 });
			sections.forEach(function (s) { observer.observe(s); });
		}

		/* Scroll percentage → TOC progress */
		var ticking = false;
		function updateTOC() {
			var h = document.documentElement.scrollHeight - window.innerHeight;
			var pct = h > 0 ? (window.scrollY / h) * 100 : 0;
			pct = Math.min(100, Math.max(0, pct));
			if (tocBar) tocBar.style.width = pct + '%';
			var pStr = toPersian(Math.round(pct)) + '٪';
			if (tocPct) tocPct.textContent = pStr;
			if (tocMPct) tocMPct.textContent = pStr;
			ticking = false;
		}
		window.addEventListener('scroll', function () {
			if (!ticking) { requestAnimationFrame(updateTOC); ticking = true; }
		}, { passive: true });
		updateTOC();

		/* Smooth scroll for TOC links */
		document.querySelectorAll('.xlg__toc-link, .xlg__toc-chip').forEach(function (link) {
			link.addEventListener('click', function (e) {
				var id = link.getAttribute('data-target');
				var target = document.getElementById(id);
				if (target) {
					e.preventDefault();
					target.scrollIntoView({ behavior: reduced ? 'auto' : 'smooth', block: 'start' });
					setActive(id);
					history.replaceState(null, '', '#' + id);
				}
			});
		});
	}

	/* ── Back to Top FAB ── */
	function initFAB() {
		var fab = document.getElementById('xlg-fab');
		if (!fab) return;
		var ticking = false;
		function update() {
			fab.classList.toggle('is-visible', window.scrollY > 500);
			ticking = false;
		}
		window.addEventListener('scroll', function () {
			if (!ticking) { requestAnimationFrame(update); ticking = true; }
		}, { passive: true });
		update();
		fab.addEventListener('click', function () {
			window.scrollTo({ top: 0, behavior: reduced ? 'auto' : 'smooth' });
		});
	}

	/* ── Scroll Reveal (for [data-reveal]) ── */
	function initReveal() {
		var els = document.querySelectorAll('[data-reveal]');
		if (!els.length) return;
		if (reduced || !('IntersectionObserver' in window)) {
			els.forEach(function (el) { el.classList.add('is-visible'); });
			return;
		}
		var io = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-visible');
					io.unobserve(entry.target);
				}
			});
		}, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
		els.forEach(function (el) { io.observe(el); });
	}

	/* ── Init ── */
	function init() {
		initProgress();
		initTOC();
		initFAB();
		initReveal();
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init, { once: true });
	} else {
		init();
	}
})();
