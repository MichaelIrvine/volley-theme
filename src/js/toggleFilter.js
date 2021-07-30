const toggleFilter = () => {
  const filterToggle = document.querySelector('#filterToggle');
  const filters = document.querySelector('.category-filter__wrapper');

  filterToggle.addEventListener('click', () => {
    filters.classList.toggle('active');
  });
};

export default toggleFilter;
