(function () {
  'use strict';

  var visual = document.querySelector('.dvs__visual');
  if (!visual || !('IntersectionObserver' in window)) {
    if (visual) visual.classList.add('is-visible');
    return;
  }

  var observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.15 }
  );

  observer.observe(visual);
})();
