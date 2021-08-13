const partnerReveal = () => {
  const mainWrapper = document.querySelector('#primary');

  const p1DetailWrap = document.querySelector('.partner-one__info__wrapper');
  const p2DetailWrap = document.querySelector('.partner-two__info__wrapper');

  if (window.location.href.indexOf('ari') != -1) {
    mainWrapper.classList.add('partner-one-reveal');
  }

  if (window.location.href.indexOf('third-turn') != -1) {
    mainWrapper.classList.add('partner-two-reveal');
  }

  p2DetailWrap.addEventListener('mouseenter', function () {
    mainWrapper.classList.replace('partner-one-reveal', 'partner-two-reveal');
  });
  p1DetailWrap.addEventListener('mouseenter', function () {
    mainWrapper.classList.replace('partner-two-reveal', 'partner-one-reveal');
  });
};

export default partnerReveal;
