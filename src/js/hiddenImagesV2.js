const hiddenImagesV2 = () => {
  const hiddenImagesContainer = document.querySelectorAll('.has-hidden-images');

  //
  // Methods for Mouse Events
  //

  hiddenImagesContainer.forEach((container) => {
    // Find all triggers (<a>)
    const triggers = container.querySelectorAll('a');

    // Loop through triggers
    triggers.forEach((trigger) => {
      // Find parent wrapper
      const carouselWrapper = trigger.closest(
        '.hidden-image-carousel__wrapper'
      );

      // Use parent wrapper to find carousel
      if (carouselWrapper) {
        const carousel = carouselWrapper.querySelector(
          '.hidden-images__carousel'
        );

        trigger.addEventListener('mouseenter', function () {
          carousel.classList.add('show');
        });
        trigger.addEventListener('mouseleave', function () {
          carousel.classList.remove('show');
        });

        trigger.addEventListener('mousemove', function (e) {
          const mouseCoords = {
            x: 0,
            y: 0,
          };

          mouseCoords.x = e.pageX;
          mouseCoords.y = e.pageY;

          carousel.style.setProperty(
            'transform',
            `translate(${mouseCoords.x * 1.1}px, ${mouseCoords.y}px)`
          );
        });

        triggers.forEach((trigger) =>
          trigger.addEventListener('click', function (e) {
            if (trigger.getAttribute('href') === '#') {
              e.preventDefault();
            }
          })
        );
      }
    });
  });
};

export default hiddenImagesV2;
