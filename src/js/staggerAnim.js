import { gsap } from 'gsap';

const staggerAnim = () => {
  const staggerEl = document.querySelectorAll('.staggered');
  const staggerTl = gsap.timeline({ paused: true });

  staggerEl.forEach((el) => {
    staggerTl.fromTo(
      el,
      {
        autoAlpha: 0,
        y: 10,
      },
      { autoAlpha: 1, y: 0, duration: 0.85, stagger: 0.1, ease: 'power3.in' },
      '-=0.55'
    );
  });

  if (staggerEl.length > 0) {
    setTimeout(() => {
      staggerTl.play();
    }, 700);
  }
};

export default staggerAnim;
