const teamBio = () => {
  const bioBtns = document.querySelectorAll('.bio-btn');

  bioBtns.forEach((button) => {
    button.addEventListener('click', (e) => {
      const bioButton = e.currentTarget.getAttribute('data-button-id');
      const bioToOpen = document.querySelector(`[data-bio-id='${bioButton}']`);

      // Add active class to Parent (.bio-controls)
      e.currentTarget.parentNode.classList.toggle('active');
      bioToOpen.classList.toggle('active');
    });
  });
};

export default teamBio;
