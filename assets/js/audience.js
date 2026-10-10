(function () {
  'use strict';

  /* ---- Accordion + Grid switch ---- */
  var accordion = document.querySelector('.aud__accordion');
  var grids = document.querySelectorAll('.aud__grid-inner');
  var section = document.querySelector('.aud');

  if (accordion && grids.length) {
    var items = Array.from(accordion.querySelectorAll('.aud__item'));

    function showGrid(id) {
      grids.forEach(function (g) {
        g.classList.toggle('is-active', g.getAttribute('data-grid') === id);
      });
    }

    items.forEach(function (item) {
      var summary = item.querySelector('summary');
      if (!summary) return;

      summary.addEventListener('click', function (e) {
        if (item.open) {
          e.preventDefault();
          return;
        }
        items.forEach(function (o) {
          if (o !== item) o.open = false;
        });
        showGrid(item.getAttribute('data-item'));
      });
    });

    var first = items.find(function (i) { return i.open; }) || items[0];
    if (first) {
      first.open = true;
      showGrid(first.getAttribute('data-item'));
    }
  }

  /* ---- Scroll: dark → light background transition ---- */
  if (section && 'IntersectionObserver' in window) {
    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          // When section top passes 50% of viewport, switch to light
          if (entry.isIntersecting) {
            section.classList.add('is-light');
          } else {
            section.classList.remove('is-light');
          }
        });
      },
      {
        threshold: 0.35,
        rootMargin: '0px 0px -20% 0px',
      }
    );
    observer.observe(section);
  }
})();
