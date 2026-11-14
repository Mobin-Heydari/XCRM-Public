/**
 * xCRM Features Directory — category tabs, search & discovery.
 * Vanilla JS, no dependencies (IIFE, per project conventions).
 *
 * Browse mode: tab «نمای کلی» shows every category panel; a category tab
 * focuses one panel. Search mode: clones matching cards into a results grid
 * across all categories (scoped by the active tab) with count + empty state.
 *
 * @package HelloElementorChild
 */
(function () {
	'use strict';

	var doc = document;
	var FA_DIGITS = '۰۱۲۳۴۵۶۷۸۹';

	function fa(n) {
		return String(n).replace(/[0-9]/g, function (d) {
			return FA_DIGITS.charAt(parseInt(d, 10));
		});
	}

	function norm(s) {
		return (s || '').toLowerCase();
	}

	function ready(fn) {
		if (doc.readyState !== 'loading') {
			fn();
		} else {
			doc.addEventListener('DOMContentLoaded', fn);
		}
	}

	ready(function () {
		var tabsWrap = doc.getElementById('fd-tabs');
		if (!tabsWrap) return;

		var tabs = Array.prototype.slice.call(tabsWrap.querySelectorAll('[role="tab"]'));
		var panels = Array.prototype.slice.call(doc.querySelectorAll('.fd__panel'));
		var cards = Array.prototype.slice.call(doc.querySelectorAll('[data-fd-card]'));
		var input = doc.getElementById('fd-search');
		var clearBtn = doc.getElementById('fd-search-clear');
		var countEl = doc.getElementById('fd-count');
		var results = doc.getElementById('fd-results');
		var resultsGrid = doc.getElementById('fd-results-grid');
		var empty = doc.getElementById('fd-empty');
		var emptyClear = doc.getElementById('fd-empty-clear');

		var scope = 'all';
		var query = '';
		var debounceTimer = null;

		function activeTab() {
			return tabs.filter(function (t) {
				return t.classList.contains('is-active');
			})[0] || tabs[0];
		}

		function scopeLabel() {
			var t = activeTab();
			if (!t || scope === 'all') return '';
			return (t.textContent || '').replace(/[0-9۰-۹]/g, '').trim();
		}

		/* ---------- Browse mode ---------- */
		function applyBrowse() {
			if (results) results.hidden = true;
			if (empty) empty.hidden = true;
			if (resultsGrid) resultsGrid.innerHTML = '';
			if (countEl) countEl.hidden = true;
			panels.forEach(function (p) {
				p.hidden = !(scope === 'all' || p.getAttribute('data-cat') === scope);
			});
		}

		/* ---------- Search mode ---------- */
		function applySearch() {
			var q = norm(query).trim();
			if (!q) {
				if (clearBtn) clearBtn.hidden = true;
				applyBrowse();
				return;
			}
			if (clearBtn) clearBtn.hidden = false;
			panels.forEach(function (p) {
				p.hidden = true;
			});

			var terms = q.split(/\s+/);
			var matches = cards.filter(function (c) {
				if (scope !== 'all' && c.getAttribute('data-cat') !== scope) return false;
				var hay = c.getAttribute('data-text') || '';
				for (var i = 0; i < terms.length; i++) {
					if (hay.indexOf(terms[i]) === -1) return false;
				}
				return true;
			});

			resultsGrid.innerHTML = '';
			matches.forEach(function (c) {
				var clone = c.cloneNode(true);
				// Clones are injected after observers ran — strip reveal so
				// they are visible immediately (base opacity lives on [data-reveal]).
				clone.removeAttribute('data-reveal');
				clone.removeAttribute('data-reveal-delay');
				resultsGrid.appendChild(clone);
			});

			results.hidden = matches.length === 0;
			empty.hidden = matches.length !== 0;
			if (countEl) {
				countEl.hidden = false;
				countEl.textContent = matches.length === 0
					? ''
					: fa(matches.length) + ' قابلیت یافت شد' + (scope !== 'all' ? ' در «' + scopeLabel() + '»' : '');
			}
		}

		function run() {
			if (norm(query).trim()) {
				applySearch();
			} else {
				applyBrowse();
			}
		}

		/* ---------- Tabs ---------- */
		function activate(tab, moveFocus) {
			tabs.forEach(function (t) {
				var on = t === tab;
				t.classList.toggle('is-active', on);
				t.setAttribute('aria-selected', on ? 'true' : 'false');
				t.tabIndex = on ? 0 : -1;
			});
			scope = tab.getAttribute('data-cat') || 'all';
			run();
			if (moveFocus && tab.focus) {
				tab.focus();
				try {
					tab.scrollIntoView({ block: 'nearest', inline: 'nearest' });
				} catch (e) { /* older browsers */ }
			}
		}

		tabs.forEach(function (tab) {
			tab.addEventListener('click', function () {
				activate(tab, false);
			});
		});

		tabsWrap.addEventListener('keydown', function (e) {
			var current = activeTab();
			var idx = tabs.indexOf(current);
			var next = -1;
			var rtl = (doc.documentElement.getAttribute('dir') || 'rtl') === 'rtl';
			if (e.key === 'ArrowLeft' || e.key === 'ArrowRight') {
				// RTL reading order: ArrowLeft advances to the next tab.
				var forward = rtl ? e.key === 'ArrowLeft' : e.key === 'ArrowRight';
				next = forward ? (idx + 1) % tabs.length : (idx - 1 + tabs.length) % tabs.length;
			} else if (e.key === 'Home') {
				next = 0;
			} else if (e.key === 'End') {
				next = tabs.length - 1;
			}
			if (next !== -1) {
				e.preventDefault();
				activate(tabs[next], true);
			}
		});

		/* ---------- Search ---------- */
		if (input) {
			input.addEventListener('input', function () {
				query = input.value;
				window.clearTimeout(debounceTimer);
				debounceTimer = window.setTimeout(run, 140);
			});
			input.addEventListener('keydown', function (e) {
				if (e.key === 'Escape' && query) {
					e.stopPropagation();
					clearSearch();
				}
			});
		}

		function clearSearch() {
			query = '';
			if (input) {
				input.value = '';
				input.focus();
			}
			run();
		}

		if (clearBtn) clearBtn.addEventListener('click', clearSearch);
		if (emptyClear) emptyClear.addEventListener('click', clearSearch);

		/* ---------- Reduced motion: pause SMIL timelines ---------- */
		try {
			if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
				doc.querySelectorAll('.fdeck, .fd__track-line').forEach(function (svg) {
					if (typeof svg.pauseAnimations === 'function') svg.pauseAnimations();
				});
			}
		} catch (e) { /* no-op */ }
	});
})();
