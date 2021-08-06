const projectIndexImages = () => {
  const triggers = document.querySelectorAll('.index-table');

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

        const hiddenImageWidth = this.nextElementSibling.width;
        const hiddenImageHeight = this.nextElementSibling.height;

        mouseCoords.x = e.pageX;
        mouseCoords.y = e.pageY;

        this.nextElementSibling.style.setProperty(
          'transform',
          `translate(${mouseCoords.x - (hiddenImageWidth + 15)}px, ${
            mouseCoords.y - (hiddenImageHeight + 15)
          }px)`
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
};

export default projectIndexImages;
