const toggleFilter = () => {
  const filterToggle = document.querySelector('#filterToggle');
  const filterList = document.querySelector('.categories-filter-list__wrapper');

  filterToggle.addEventListener('click', (e) => {
    filterList.classList.toggle('active');
  });
};

export default toggleFilter;
