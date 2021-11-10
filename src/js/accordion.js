const accordion = () => {
  const accordionButton = document.querySelectorAll('.accordion__button');

  if (!accordionButton) {
    return;
  }

  accordionButton.forEach((button, i) => {
    // Check for first accordion item
    // Add open styles
    if (i === 0) {
      const accordionContent = button.nextElementSibling;

      button.classList.add('active');

      accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
    }

    button.addEventListener('click', () => {
      const activeAccordionButton = document.querySelector(
        '.accordion__button.active'
      );
      const accordionContent = button.nextElementSibling;

      if (activeAccordionButton && activeAccordionButton !== button) {
        activeAccordionButton.classList.toggle('active');
        activeAccordionButton.nextElementSibling.style.maxHeight = 0;
        activeAccordionButton.nextElementSibling.style.marginTop = 0;
      }

      button.classList.toggle('active');

      if (button.classList.contains('active')) {
        accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
      } else {
        accordionContent.style.maxHeight = 0;
      }
    });
  });
};

export default accordion;
