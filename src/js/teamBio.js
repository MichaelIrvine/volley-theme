import { gsap } from 'gsap';

const teamBio = () => {
  const bioBtns = document.querySelectorAll('.bio-btn');

  bioBtns.forEach((button) => {
    button.addEventListener('click', (e) => {
      const bioTl = gsap.timeline({ paused: true });
      const bioButton = e.currentTarget.getAttribute('data-button-id');
      const openButton = e.currentTarget.querySelector('span:first-of-type');
      const bioToOpen = document.querySelector(`[data-bio-id='${bioButton}']`);

      bioTl
        .to(bioToOpen, {
          duration: 0.45,
          height: '100%',
          maxHeight: '100%',
          ease: 'power2',
        })
        .to(openButton, {
          duration: 0.3,
          color: 'red',
        });

      bioTl.play();

      e.currentTarget.addEventListener('click', () => {
        bioTl.reverse();
      });
    });
  });
};

export default teamBio;
