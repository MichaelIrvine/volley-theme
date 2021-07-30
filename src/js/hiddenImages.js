const hiddenImages = () => {
  const triggers = document.querySelectorAll('.has-hidden-images a');

  //
  // Methods for Mouse Events
  //

  const eventHandlers = {
    mouseEnter: function () {
      //When mouse enters *this* item display image
      if (this.nextElementSibling) {
        this.nextElementSibling.classList.add('show');
      }
    },

    mouseLeave: function () {
      // When mouse leaves *this* item hide image
      if (this.nextElementSibling) {
        this.nextElementSibling.classList.remove('show');
      }
    },

    mouseMove: function (e) {
      if (this.nextElementSibling) {
        const mouseCoords = {
          x: 0,
          y: 0,
        };

        mouseCoords.x = e.pageX;
        mouseCoords.y = e.pageY;

        this.nextElementSibling.style.setProperty(
          'transform',
          `translate(${mouseCoords.x * 1.1}px, ${mouseCoords.y}px)`
        );
      }
    },
  };

  triggers.forEach((trigger) =>
    trigger.addEventListener('mouseenter', eventHandlers.mouseEnter)
  );
  triggers.forEach((trigger) =>
    trigger.addEventListener('mouseleave', eventHandlers.mouseLeave)
  );
  triggers.forEach((trigger) =>
    trigger.addEventListener('mousemove', eventHandlers.mouseMove)
  );
  triggers.forEach((trigger) =>
    trigger.addEventListener('click', function (e) {
      if (trigger.getAttribute('href') === '#') {
        e.preventDefault();
      }
    })
  );
};

export default hiddenImages;
