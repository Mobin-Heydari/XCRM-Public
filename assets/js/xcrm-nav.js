/**
 * xCRM navigation — desktop Features mega menu + mobile off-canvas sidebar.
 * Vanilla JS, no dependencies. Respects prefers-reduced-motion (CSS handles it).
 *
 * @package HelloElementorChild
 */
(function () {
	'use strict';

	var doc = document;

	function ready(fn) {
		if (doc.readyState !== 'loading') {
			fn();
		} else {
			doc.addEventListener('DOMContentLoaded', fn);
		}
	}

	ready(function () {
		var megaBtn = doc.getElementById('hp-mega-btn');
		var mega = doc.getElementById('hp-mega');
		var burger = doc.getElementById('hp-burger');
		var sidebar = doc.getElementById('hp-sidebar');
		var backdrop = doc.getElementById('hp-backdrop');
		var sidebarCloseBtn = doc.getElementById('hp-sidebar-close');

		var lastFocused = null;
		var scrollY = 0;

		/* ---------------------------------------------------------------
		 * Desktop mega menu
		 * ------------------------------------------------------------- */
		function megaOpen() {
			if (!mega || !megaBtn) return;
			mega.classList.add('is-open');
			megaBtn.setAttribute('aria-expanded', 'true');
		}

		function megaClose() {
			if (!mega || !megaBtn) return;
			mega.classList.remove('is-open');
			megaBtn.setAttribute('aria-expanded', 'false');
		}

		function megaToggle() {
			if (mega && mega.classList.contains('is-open')) {
				megaClose();
			} else {
				megaOpen();
			}
		}

		if (megaBtn && mega) {
			megaBtn.addEventListener('click', function (e) {
				e.stopPropagation();
				megaToggle();
			});

			// Hover open on fine pointers (desktop), keep click for touch/keyboard.
			var wrap = megaBtn.closest('.hp__mega-wrap');
			if (wrap && window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
				var hoverTimer = null;
				wrap.addEventListener('mouseenter', function () {
					window.clearTimeout(hoverTimer);
					megaOpen();
				});
				wrap.addEventListener('mouseleave', function () {
					hoverTimer = window.setTimeout(megaClose, 160);
				});
			}

			// Keep focus inside the mega while it is open via keyboard.
			mega.addEventListener('keydown', function (e) {
				if (e.key === 'Escape') {
					megaClose();
					megaBtn.focus();
					return;
				}
				if (e.key !== 'Tab') return;
				var focusable = mega.querySelectorAll('a[href], button:not([disabled])');
				if (!focusable.length) return;
				var first = focusable[0];
				var last = focusable[focusable.length - 1];
				if (e.shiftKey && doc.activeElement === first) {
					e.preventDefault();
					last.focus();
				} else if (!e.shiftKey && doc.activeElement === last) {
					e.preventDefault();
					first.focus();
				}
			});

			// Close when clicking anywhere outside the wrap.
			doc.addEventListener('click', function (e) {
				if (mega.classList.contains('is-open') && wrap && !wrap.contains(e.target)) {
					megaClose();
				}
			});
		}

		/* ---------------------------------------------------------------
		 * Mobile off-canvas sidebar
		 * ------------------------------------------------------------- */
		function focusables(root) {
			return Array.prototype.slice.call(
				root.querySelectorAll(
					'a[href], button:not([disabled]), textarea, input, select, [tabindex]:not([tabindex="-1"])'
				)
			).filter(function (el) {
				return el.offsetParent !== null || el === doc.activeElement;
			});
		}

		function lockScroll() {
			scrollY = window.scrollY || window.pageYOffset || 0;
			doc.body.style.position = 'fixed';
			doc.body.style.top = '-' + scrollY + 'px';
			doc.body.style.left = '0';
			doc.body.style.right = '0';
			doc.body.style.width = '100%';
		}

		function unlockScroll() {
			doc.body.style.position = '';
			doc.body.style.top = '';
			doc.body.style.left = '';
			doc.body.style.right = '';
			doc.body.style.width = '';
			window.scrollTo(0, scrollY);
		}

		function sidebarOpen() {
			if (!sidebar || !burger) return;
			lastFocused = doc.activeElement;
			if (backdrop) {
				backdrop.hidden = false;
				// Force reflow so the opacity transition runs.
				void backdrop.offsetWidth;
				backdrop.classList.add('is-open');
			}
			sidebar.classList.add('is-open');
			sidebar.setAttribute('aria-hidden', 'false');
			burger.setAttribute('aria-expanded', 'true');
			doc.documentElement.setAttribute('data-nav-open', 'true');
			lockScroll();
			var f = focusables(sidebar);
			if (f.length) f[0].focus();
		}

		function sidebarClose() {
			if (!sidebar || !burger) return;
			sidebar.classList.remove('is-open');
			sidebar.setAttribute('aria-hidden', 'true');
			burger.setAttribute('aria-expanded', 'false');
			doc.documentElement.removeAttribute('data-nav-open');
			if (backdrop) {
				backdrop.classList.remove('is-open');
				window.setTimeout(function () {
					if (!backdrop.classList.contains('is-open')) backdrop.hidden = true;
				}, 240);
			}
			unlockScroll();
			if (lastFocused && typeof lastFocused.focus === 'function') {
				lastFocused.focus();
			} else {
				burger.focus();
			}
		}

		function sidebarIsOpen() {
			return !!sidebar && sidebar.classList.contains('is-open');
		}

		if (burger && sidebar) {
			burger.addEventListener('click', function () {
				if (sidebarIsOpen()) {
					sidebarClose();
				} else {
					sidebarOpen();
				}
			});
		}

		if (sidebarCloseBtn) {
			sidebarCloseBtn.addEventListener('click', function () {
				sidebarClose();
			});
		}

		if (backdrop) {
			backdrop.addEventListener('click', sidebarClose);
		}

		// Escape closes whichever surface is open (sidebar first, then mega).
		doc.addEventListener('keydown', function (e) {
			if (e.key !== 'Escape') return;
			if (sidebarIsOpen()) {
				sidebarClose();
				return;
			}
			if (mega && mega.classList.contains('is-open')) {
				megaClose();
				if (megaBtn) megaBtn.focus();
			}
		});

		// Focus trap while the sidebar is open.
		if (sidebar) {
			sidebar.addEventListener('keydown', function (e) {
				if (e.key !== 'Tab' || !sidebarIsOpen()) return;
				var f = focusables(sidebar);
				if (!f.length) return;
				var first = f[0];
				var last = f[f.length - 1];
				if (e.shiftKey && doc.activeElement === first) {
					e.preventDefault();
					last.focus();
				} else if (!e.shiftKey && doc.activeElement === last) {
					e.preventDefault();
					first.focus();
				}
			});
		}

		/* ---------------------------------------------------------------
		 * Sidebar accordion (features → category → feature)
		 * ------------------------------------------------------------- */
		function bindAccordion(btn) {
			if (!btn) return;
			var panelId = btn.getAttribute('aria-controls');
			var panel = panelId ? doc.getElementById(panelId) : null;
			if (!panel) return;
			btn.addEventListener('click', function () {
				var expanded = btn.getAttribute('aria-expanded') === 'true';
				btn.setAttribute('aria-expanded', expanded ? 'false' : 'true');
				panel.hidden = expanded;
			});
		}

		bindAccordion(doc.getElementById('hp-acc-btn'));
		Array.prototype.forEach.call(doc.querySelectorAll('.hp__acc-sub'), bindAccordion);

		// Close the sidebar when a navigation link inside it is activated.
		if (sidebar) {
			sidebar.addEventListener('click', function (e) {
				var link = e.target.closest ? e.target.closest('a[href]') : null;
				if (link && sidebarIsOpen()) {
					sidebarClose();
				}
			});
		}

		// If the viewport grows to desktop while the sidebar is open, release it.
		var desktopMq = window.matchMedia('(min-width: 961px)');
		var onDesktop = function (e) {
			if (e.matches && sidebarIsOpen()) sidebarClose();
		};
		if (desktopMq.addEventListener) {
			desktopMq.addEventListener('change', onDesktop);
		} else if (desktopMq.addListener) {
			desktopMq.addListener(onDesktop);
		}
	});
})();
