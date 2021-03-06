const linkArrow = () => {
  const linkArrows = document.querySelectorAll(
    '.link-with-arrow a, a.link-with-arrow'
  );

  if (!linkArrows) {
    return;
  }

  const arrowMarkUp = `<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.375 3C9.375 2.79289 9.20711 2.625 9 2.625L5.625 2.625C5.41789 2.625 5.25 2.79289 5.25 3C5.25 3.20711 5.41789 3.375 5.625 3.375L8.625 3.375L8.625 6.375C8.625 6.58211 8.79289 6.75 9 6.75C9.20711 6.75 9.375 6.58211 9.375 6.375L9.375 3ZM2.26517 10.2652L9.26517 3.26517L8.73483 2.73483L1.73483 9.73483L2.26517 10.2652Z" fill="#505050"/>
</svg>`;

  linkArrows.forEach((link) => {
    link.insertAdjacentHTML('beforeend', arrowMarkUp);
  });
};

export default linkArrow;
