import './sass/style.scss';
import lazyLoad from './js/lazyLoad';
import accordion from './js/accordion';
import hiddenImages from './js/hiddenImages';
import teamBio from './js/teamBio';
import toggleFilter from './js/toggleFilter';

lazyLoad();

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
  hiddenImages();
}
// About Us
if (document.body.classList.contains('page-about')) {
  hiddenImages();
  teamBio();
}

// Project Index
if (document.body.classList.contains('post-type-archive-project_index')) {
  toggleFilter();
}
