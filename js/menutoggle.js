/**
 * MOBILE HAMBURGER MENU
 */

const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.header-menu');

hamburger.addEventListener('click', () => {

  hamburger.classList.toggle('active');
  navMenu.classList.toggle('active');

  // Toggle aria-expanded boolean
  let menuOpen = navMenu.classList.contains('active');
  let newMenuOpenStatus = menuOpen;
  hamburger.setAttribute('aria-expanded', newMenuOpenStatus);
});

// Close mobile menu
document.querySelectorAll('.nav-link').forEach(link =>
  link.addEventListener('click', () => {
    hamburger.classList.remove('active');
    navMenu.classList.remove('active');
  })
);