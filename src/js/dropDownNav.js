const dropDownNav = () => {
  const menuItemHasChildren = document.querySelectorAll(
    '.menu-item-has-children > a'
  );
  const subMenuItems = document.querySelectorAll('ul.sub-menu');

  function handleMenuWithChildren(e) {
    if (e.currentTarget.getAttribute('href') === '#') {
      e.preventDefault();
    }
  }

  function handleMenuPos() {
    const mediaQueryTablet = window.matchMedia('(min-width: 768px)');

    if (mediaQueryTablet.matches) {
      subMenuItems.forEach((item) => {
        const itemParent = item.parentNode;

        // set ul.sub-menus padding-left value to the parent offsetLeft
        // Minus 1px to help with alignment
        item.style.paddingLeft = `${itemParent.offsetLeft - 1}px`;
      });
    }
  }

  handleMenuPos();
  window.addEventListener('resize', handleMenuPos);
  menuItemHasChildren.forEach((item) => {
    item.addEventListener('click', handleMenuWithChildren);
    item.addEventListener('focus', handleMenuWithChildren);
  });
};

export default dropDownNav;
