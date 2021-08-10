const backToTop = () => {
  const backToTopButton = document.querySelector('#backToTop');
  const rootElement = document.documentElement;

  backToTopButton.addEventListener('click', function () {
    rootElement.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  });
};

export default backToTop;
