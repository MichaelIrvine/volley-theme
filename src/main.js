import './sass/style.scss';
import lazyLoad from './js/lazyLoad';
import accordion from './js/accordion';
import hiddenImages from './js/hiddenImages';
import teamBio from './js/teamBio';
import toggleFilter from './js/toggleFilter';
import staggerAnim from './js/staggerAnim';
import projectIndexImages from './js/projectIndexImages';
import partnerReveal from './js/partnerReveal';
import backToTop from './js/backToTop';
import dropDownNav from './js/dropDownNav';
import linkArrow from './js/linkArrow';
import scrollReveal from './js/scrollReveal';
import mobileMenuToggle from './js/mobileMenuToggle';
import hiddenImagesV2 from './js/hiddenImagesV2';

mobileMenuToggle();
lazyLoad();
backToTop();
staggerAnim();
dropDownNav();
linkArrow();
scrollReveal();

/**
 *
 *
 * Page Level Functions
 *
 *
 */

// Front page
if (document.body.classList.contains('home')) {
  accordion();
  hiddenImagesV2();
}
// About Us
if (document.body.classList.contains('page-about')) {
  hiddenImages();
  teamBio();
}

// Project Index
if (document.body.classList.contains('post-type-archive-project_index')) {
  toggleFilter();
  projectIndexImages();
}

// Partners Page
if (document.body.classList.contains('page-partners')) {
  partnerReveal();
}

//
// Custom Cursor
//

const cursor = document.querySelector('.custom-cursor');
const hoverables = document.querySelectorAll(
  'a, .cursor-hover, .hidden-image__wrapper a'
);

let clientX;
let clientY;

const initCursor = () => {
  document.addEventListener('mousemove', (e) => {
    clientX = e.clientX;
    clientY = e.clientY;
  });

  function hoverIn() {
    cursor.classList.add('cursor--active');
  }

  function hoverOut() {
    cursor.classList.remove('cursor--active');
  }

  hoverables.forEach((el) => {
    el.addEventListener('mouseenter', hoverIn);
    el.addEventListener('mouseleave', hoverOut);
  });

  const render = () => {
    cursor.style.transform = `translate(${clientX - 3}px, ${clientY - 3}px)`;

    requestAnimationFrame(render);
  };
  requestAnimationFrame(render);
};

initCursor();
