(function ($) {
  $(document).ready(function () {
    const searchForm = $('#ajax-filter-search form');

    searchForm.submit(function (e) {
      e.preventDefault();

      if (searchForm.find('#search').val().length !== 0) {
        var search = searchForm.find('#search').val();
      }

      $.ajax({
        url: wpAjax.ajaxUrl,
        data: { action: 'volley_ajax_filter_search', search: search },
        type: 'GET',
        success: function (response) {
          console.log(response);
        },
      });
    });
  });
})(jQuery);
