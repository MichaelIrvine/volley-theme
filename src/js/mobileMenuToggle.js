const mobileMenuToggle = () => {
  const mobileToggleButton = document.querySelector('.menu-toggle');

  mobileToggleButton.addEventListener('click', function () {
    document.body.classList.toggle('menu-open');
  });
};

export default mobileMenuToggle;
