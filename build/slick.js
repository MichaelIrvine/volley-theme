// Footer Slider
$('#footer-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  cssEase: 'linear',
  autoplay: false,
  prevArrow: ``,
  nextArrow: `<button><svg width="25" height="15" viewBox="0 0 25 15" fill="none" xmlns="http://www.w3.org/2000/svg">
  <line y1="7.5" x2="24" y2="7.5" stroke="black"/>
  <line y1="-0.5" x2="10.9659" y2="-0.5" transform="matrix(-0.729537 -0.683941 0.729537 -0.683941 25 7.5)" stroke="#505050"/>
  <line y1="-0.5" x2="10.9659" y2="-0.5" transform="matrix(-0.729537 0.683941 0.729537 0.683941 25 7.5)" stroke="#505050"/>
  </svg></button>`,
});
