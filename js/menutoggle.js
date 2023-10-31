/**
 * MOBILE HAMBURGER MENU
 */

const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.header-menu');

hamburger.addEventListener('click', () => {
  /* Toggle active class */
  hamburger.classList.toggle('active');
  navMenu.classList.toggle('active');

  /* Toggle aria-expanded value */
  let menuOpen = navMenu.classList.contains('active');
  console.log(menuOpen);
  let newMenuOpenStatus = menuOpen;
  hamburger.setAttribute('aria-expanded', newMenuOpenStatus);
});

// close mobile menu
document.querySelectorAll('.nav-link').forEach(n =>
  n.addEventListener('click', () => {
    hamburger.classList.remove('active');
    navMenu.classList.remove('active');
    // Need to add Toggle aria-expanded value here as well because it stays as true when you click a menu item
  })
);