(function () {
  'use strict';

  var tabs = document.querySelectorAll('.ft__tab');
  var panels = document.querySelectorAll('.ft__panel');

  if (!tabs.length || !panels.length) return;

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      var target = tab.getAttribute('data-tab');

      // Deactivate all
      tabs.forEach(function (t) { t.classList.remove('is-active'); });
      panels.forEach(function (p) { p.classList.remove('is-active'); });

      // Activate clicked
      tab.classList.add('is-active');
      var panel = document.querySelector('.ft__panel[data-panel="' + target + '"]');
      if (panel) panel.classList.add('is-active');
    });
  });
})();
