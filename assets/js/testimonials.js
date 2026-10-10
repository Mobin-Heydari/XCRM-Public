(function () {
  'use strict';

  /* ---- Tabs ---- */
  var tabs = document.querySelectorAll('.tst__tab');
  var panels = document.querySelectorAll('.tst__panel');

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      var target = tab.getAttribute('data-tab');
      tabs.forEach(function (t) { t.classList.remove('is-active'); });
      panels.forEach(function (p) { p.classList.remove('is-active'); });
      tab.classList.add('is-active');
      var panel = document.querySelector('.tst__panel[data-panel="' + target + '"]');
      if (panel) {
        panel.classList.add('is-active');
        initCards(panel);
      }
    });
  });

  /* ---- Expanding cards ---- */
  function initCards(scope) {
    var cards = (scope || document).querySelectorAll('.tst__card');

    cards.forEach(function (card) {
      if (card._initialized) return;
      card._initialized = true;

      card.addEventListener('click', function () {
        if (card.classList.contains('is-active')) return;
        cards.forEach(function (c) { c.classList.remove('is-active'); });
        card.classList.add('is-active');
      });
    });
  }

  // Init first panel
  var firstPanel = document.querySelector('.tst__panel.is-active');
  if (firstPanel) initCards(firstPanel);

  // Init all panels (so switching tabs preserves state)
  panels.forEach(function (p) { initCards(p); });
})();
