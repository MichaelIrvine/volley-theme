(function ($) {
  $(document).ready(function () {
    const staggerEl = document.querySelectorAll('.staggered');
    const staggerTl = gsap.timeline({ paused: true });

    $(document).on('click', '.category-filter-item > a', function (e) {
      e.preventDefault();
      var data = $(this).data('category');

      // Toggle Current Active class
      // $('.category-filter-item > a').removeClass('current-active-category');

      // $(this).addClass('current-active-category');

      staggerEl.forEach((el) => {
        staggerTl.fromTo(
          el,
          {
            autoAlpha: 1,
            y: 0,
          },
          {
            autoAlpha: 0,
            y: -10,
            duration: 0.8,
            stagger: 0.1,
            ease: 'power3.in',
          },
          '-=0.55'
        );
      });

      $.ajax({
        url: wpAjax.ajaxUrl,
        data: { action: 'filter', category: data },
        type: 'POST',
        success: function (result) {
          $('.filtered-index__wrapper').html(result);
        },
        error: function (result) {
          $('.filtered-index__wrapper').html(result);
        },
      });
    });
  });
})(jQuery);
