const accordion = () => {
  const accordionButton = document.querySelectorAll('.accordion__button');

  accordionButton.forEach((button) => {
    button.addEventListener('click', () => {
      const activeAccordionButton = document.querySelector(
        '.accordion__button.active'
      );
      if (activeAccordionButton && activeAccordionButton !== button) {
        activeAccordionButton.classList.toggle('active');
        activeAccordionButton.nextElementSibling.style.maxHeight = 0;
        activeAccordionButton.nextElementSibling.style.marginTop = 0;
        a;
      }

      button.classList.toggle('active');
      const accordionContent = button.nextElementSibling;
      if (button.classList.contains('active')) {
        accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
      } else {
        accordionContent.style.maxHeight = 0;
      }
    });
  });
};

export default accordion;
