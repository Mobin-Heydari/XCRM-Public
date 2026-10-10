(function () {
  'use strict';

  var yesBtn = document.querySelector('.qh__choice--yes');
  var noBtn = document.querySelector('.qh__choice--no');
  var resultArea = document.querySelector('.qh__result');

  if (!yesBtn || !noBtn || !resultArea) return;

  function showResult(type) {
    yesBtn.classList.add('is-selected');
    noBtn.classList.add('is-disabled');
    yesBtn.disabled = true;
    noBtn.disabled = true;

    resultArea.innerHTML = '';

    if (type === 'yes') {
      resultArea.innerHTML =
        '<p class="qh__result-text">عالیه! دقیقاً برای شما ساخته شده.</p>' +
        '<a href="#" class="qh__result-link">شروع کاوش' +
        '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg></a>';
    } else {
      resultArea.innerHTML =
        '<p class="qh__result-text">نگران نباشید — ما به هر کسب‌وکاری کمک می‌کنیم رشد کند.</p>';
    }

    resultArea.classList.add('is-visible');
  }

  yesBtn.addEventListener('click', function () { showResult('yes'); });
  noBtn.addEventListener('click', function () { showResult('no'); });
})();
