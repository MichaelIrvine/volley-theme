// Footer Slider
$('#footer-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  cssEase: 'linear',
  autoplay: true,
  autoplaySpeed: 5000,
  prevArrow: ``,
  nextArrow: `<button class="cursor-hover"><svg width="25" height="15" viewBox="0 0 25 15" fill="none" xmlns="http://www.w3.org/2000/svg">
  <line y1="7.5" x2="24" y2="7.5" stroke="black"/>
  <line y1="-0.5" x2="10.9659" y2="-0.5" transform="matrix(-0.729537 -0.683941 0.729537 -0.683941 25 7.5)" stroke="#505050"/>
  <line y1="-0.5" x2="10.9659" y2="-0.5" transform="matrix(-0.729537 0.683941 0.729537 0.683941 25 7.5)" stroke="#505050"/>
  </svg></button>`,
});

// Case Study Slider
$('.case-study-carousel').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  cssEase: 'linear',
  autoplay: false,
  prevArrow: `<button class="cursor-hover"><svg width="55" height="29" viewBox="0 0 55 29" fill="none" xmlns="http://www.w3.org/2000/svg">
    <line x1="55" y1="14.3518" x2="2" y2="14.3518" stroke="#505050" stroke-width="1.5"/>
    <line y1="-0.75" x2="22.7729" y2="-0.75" transform="matrix(0.77285 0.634589 -0.77285 0.634589 0 14.4519)" stroke="#505050" stroke-width="1.5"/>
    <line y1="-0.75" x2="22.773" y2="-0.75" transform="matrix(0.772844 -0.634596 -0.772844 -0.634596 0 14.4519)" stroke="#505050" stroke-width="1.5"/>
    </svg></button>`,
  nextArrow: `<button class="cursor-hover"><svg width="55" height="29" viewBox="0 0 55 29" fill="none" xmlns="http://www.w3.org/2000/svg">
    <line y1="14.5518" x2="53" y2="14.5518" stroke="#505050" stroke-width="1.5"/>
    <line y1="-0.75" x2="22.773" y2="-0.75" transform="matrix(-0.772844 -0.634596 0.772844 -0.634596 55 14.4517)" stroke="#505050" stroke-width="1.5"/>
    <line y1="-0.75" x2="22.7728" y2="-0.75" transform="matrix(-0.772849 0.63459 0.772849 0.63459 55 14.4517)" stroke="#505050" stroke-width="1.5"/>
    </svg></button>`,
});

$(function () {
  $('#hidden-images__heading-carousel').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 550,
    draggable: false,
  });

  $('#hidden-images-1-carousel').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 550,
    draggable: false,
  });

  $('#hidden-images-2-carousel').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 550,
    draggable: false,
  });
});
