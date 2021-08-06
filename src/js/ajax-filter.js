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
