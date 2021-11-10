(function ($) {
  $(document).ready(function () {
    $(document).on('click', '.category-filter-item > a', function (e) {
      e.preventDefault();
      const dataId = $(this).data('category-id');
      const dataName = $(this).data('category-name');
      const currentShowingCat = $('.current-active-category');

      $.ajax({
        url: wpAjax.ajaxUrl,
        data: { action: 'filter', category: dataId },
        type: 'POST',
        success: function (result) {
          $('.filtered-index__wrapper').html(result);
          $('.index-table').animate({ opacity: '1' }, 1000);
          currentShowingCat.text(dataName);
          $('.categories-filter-list__wrapper').removeClass('active');
          $('.current-active-category__wrapper').addClass('active');
          $('#filterToggle').addClass('disabled');

          function projectIndexImages() {
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
          }

          projectIndexImages();

          // If category is empty
          if (result < 1) {
            $('.filtered-index__wrapper').html(
              '<div class="empty-category"><span class="small-text">No projects for this category.</span></div>'
            );
          }
        },
        error: function (result) {
          $('.filtered-index__wrapper').html(result);
        },
      });
    });
  });
})(jQuery);
