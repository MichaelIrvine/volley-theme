const hiddenImages = () => {
  const triggers = document.querySelectorAll('.has-hidden-images a');
  const hiddenImages = document.querySelectorAll('.hidden-img');

  console.log(triggers);

  triggers.forEach((trigger) => {
    if (trigger.getAttribute('href') === '#') {
      trigger.classList.add('link-disabled');
    }
  });

  //
  // Methods for Mouse Events
  //

  const eventHandlers = {
    mouseEnter: function () {
      //When mouse enters *this* item display image
      this.nextElementSibling.classList.add('show');
    },

    mouseLeave: function () {
      // When mouse leaves *this* item hide image
      this.nextElementSibling.classList.remove('show');
    },

    mouseMove: function (e) {
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
      // this.nextElementSibling.style.setProperty('transform', `translateY(${mouseCoords.y / 4}px)`);
    },
  };

  //
  //
  //

  triggers.forEach((trigger) =>
    trigger.addEventListener('mouseenter', eventHandlers.mouseEnter)
  );
  triggers.forEach((trigger) =>
    trigger.addEventListener('mouseleave', eventHandlers.mouseLeave)
  );
  triggers.forEach((trigger) =>
    trigger.addEventListener('mousemove', eventHandlers.mouseMove)
  );
};

export default hiddenImages;
