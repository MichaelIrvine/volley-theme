const scrollReveal = () => {
  document.addEventListener('DOMContentLoaded', function () {
    let staggerEls;
    let options = {
      root: null,
      rootMargin: '0px 0px 50px 0px',
      threshold: 0.1,
    };

    if ('IntersectionObserver' in window) {
      staggerEls = document.querySelectorAll('.staggered-scroll');
      let revealObserver = new IntersectionObserver(function (
        entries,
        observer
      ) {
        entries.forEach(function (entry) {
          if (entry.intersectionRatio > 0) {
            let revealEl = entry.target;

            revealEl.classList.add('active');

            observer.unobserve(revealEl);
          }
        });
      });

      staggerEls.forEach(function (el) {
        revealObserver.observe(el);
      });
    } else {
      // Fallback
      staggerEls = document.querySelectorAll('.stagger-scroll');

      staggerEls.forEach(function (el) {
        el.classList.remove('stagger-scroll');
      });
    }
  });
};

export default scrollReveal;
