import './sass/style.scss';
import lazyLoad from './js/lazyLoad';
import accordion from './js/accordion';
import hiddenImages from './js/hiddenImages';

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
